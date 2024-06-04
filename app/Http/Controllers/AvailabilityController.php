<?php

namespace App\Http\Controllers;
use App\Models\Availability;

use Illuminate\Http\Request;

class AvailabilityController extends Controller
{
    public function index()
    {
        $availabilities = Availability::where('doctor_id', auth()->id())->get();
        return view('availabilities.index', compact('availabilities'));
    }

    public function create()
    {
        $user = auth()->user();
        return view('availabilities.create', compact('user'));
    }

    public function store(Request $request)
    {
        // Validation des données du formulaire
        $request->validate([
            // 'start_time' => 'required|date_format:H:i',
            // 'end_time' => 'required|date_format:H:i|after:start_time',
            'start_time' => 'required|date_format:Y-m-d\TH:i',
            'end_time' => 'required|date_format:Y-m-d\TH:i',
        ]);
    
        // Combinaison de la date et des heures pour obtenir des datetime complets
        $start_date_time = $request->date . ' ' . $request->start_time . ':00';
        $end_date_time = $request->date . ' ' . $request->end_time . ':00';
    
        // Créez la disponibilité avec les heures au format Y-m-d H:i:s
        Availability::create([
            'doctor_id' => auth()->id(),
            'start_time' => $start_date_time,
            'end_time' => $end_date_time,
        ]);
    
        // Redirection avec message de succès
        return redirect()->route('availabilities.create')->with('success', 'Disponibilité enregistrée avec succès !');
    }
    
    
    public function edit(Availability $availability)
    {
        $user = auth()->user();
        if ($availability->doctor_id != auth()->id()) {
            return redirect()->route('availabilities.index')->with('error', 'Vous n\'êtes pas autorisé à modifier cette disponibilité.');
        }
        return view('availabilities.edit', compact('availability', 'user'));
    }
    


    public function update(Request $request, Availability $availability)
    {
        if ($availability->doctor_id != auth()->id()) {
            return redirect()->route('availabilities.index')->with('error', 'Vous n\'êtes pas autorisé à modifier cette disponibilité.');
        }

        $request->validate([
            // 'start_time' => 'required|date_format:H:i',
            // 'end_time' => 'required|date_format:H:i|after:start_time',
            'start_time' => 'required|date_format:Y-m-d\TH:i',
            'end_time' => 'required|date_format:Y-m-d\TH:i',
        ]);

        $start_date_time = $request->date . ' ' . $request->start_time . ':00';
        $end_date_time = $request->date . ' ' . $request->end_time . ':00';

        $availability->update([
            'start_time' => $start_date_time,
            'end_time' => $end_date_time,
        ]);

        return redirect()->route('availabilities.index')->with('success', 'Disponibilité mise à jour avec succès !');
    }

    public function destroy(Availability $availability)
    {
        if ($availability->doctor_id != auth()->id()) {
            return redirect()->route('availabilities.index')->with('error', 'Vous n\'êtes pas autorisé à supprimer cette disponibilité.');
        }

        $availability->delete();

        return redirect()->route('availabilities.index')->with('success', 'Disponibilité supprimée avec succès !');
    }

}
