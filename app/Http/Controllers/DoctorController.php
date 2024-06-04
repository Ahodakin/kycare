<?php

namespace App\Http\Controllers;
use App\Models\Availability;
use Illuminate\Http\Request;
use App\Models\User;
class DoctorController extends Controller
{
    public function create()
    {
        $availabilities = Availability::where('doctor_id', auth()->id())->get();
        $doctors = User::where('role', 'Professional')->get();
        return view('doctors.index', compact('doctors','availabilities'));
    }

    // public function index()
    // {
    //   $availabilities = Availability::all();

    //     return view('doctors.dashboard', compact('availabilities'));
    // }

    public function index()
    {
        $user = auth()->user();
        // $appointments = Appointment::where('doctor_id', $doctor->id)->where('start_time', '>', now())->get();
        $availabilities = Availability::all();
        // $notifications = $doctor->notifications; // Assurez-vous que le médecin a une relation avec les notifications

        return view('doctors.index', compact('user','availabilities'));
    }
}
