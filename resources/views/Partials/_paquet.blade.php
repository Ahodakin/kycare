<style>
    /* Styles pour la section de tarification */
    .pricing-section {
      padding: 80px 0;
    }
    
    /* Styles pour les éléments de tarification */
    .pricing-item {
      background-color: #f9f9f9;
      border-radius: 10px;
      padding: 10px;
      text-align: center;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
      transition: box-shadow 0.3s ease;
      margin: 10px; /* Ajoute une marge autour de chaque élément */
      flex: 1 1 calc(25% - 20px); /* Permet de gérer la taille des blocs avec flexbox */
    }
    
    .pricing-item:hover {
      box-shadow: 0 0 30px rgba(0, 0, 0, 0.2);
    }
    
    .pricing-header h3 {
      font-size: 24px;
      margin-bottom: 10px;
      color: #333;
    }
    
    .price {
      font-size: 36px;
      font-weight: bold;
      color: #48bdc5;
    }
    
    .pricing-body p {
      color: #666;
    }
    
    /* Styles pour les boutons */
    .btn-container {
      display: flex;
      justify-content: space-between;
      align-items: center; /* Alignement vertical au centre */
    }
    
    .btn {
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s ease;
      margin-right: 10px; /* Ajoute une marge entre les boutons */
    }
    
    .btn-buy {
      background-color: #48bdc5;
      color: #fff;
    }
    
    .btn-buy:hover {
      background-color: #3aa8af;
    }
    
    .btn-details {
      background-color: #f0f0f0;
      color: #333;
      margin-left: 0; /* Enlève la marge à gauche pour être cohérent avec le `margin-right` */
    }
    
    .btn-details:hover {
      background-color: #ddd;
    }
    
    /* Styles pour la réactivité */
    @media (max-width: 992px) {
      .pricing-item {
        flex: 1 1 calc(50% - 20px); /* Deux blocs par ligne avec une marge */
      }
    }
    
    @media (max-width: 768px) {
      .pricing-item {
        flex: 1 1 calc(100% - 20px); /* Un seul bloc par ligne avec une marge */
      }
    }
    </style>
    
    <section class="pricing-section">
      <div class="container">
        <div class="section-title text-center">
          <h2>Tarifs des Services</h2>
        </div><br>
        <div class="row">
          <!-- RUBY -->
          <div class="col-lg-3 col-md-6 pricing-item">
            <div class="pricing-header">
              <h3>RUBY</h3>
              <div class="price">$49.99</div>
            </div>
            <div class="pricing-body">
              <p>Visites Médicales</p>
              <p>La carte RUBY offre une prise en charge basique du patient telle que les consultations de médecine générale, certaines spécialités, des examens de laboratoire et l’imagerie.</p>
            </div>
            <div class="btn-container">
              <a href="#" class="btn btn-buy">Acheter</a>
              <a href="#" class="btn btn-details">Voir les Détails</a>
            </div>
          </div>
    
          <!-- ZOE -->
          <div class="col-lg-3 col-md-6 pricing-item">
            <div class="pricing-header">
              <h3>ZOE</h3>
              <div class="price">$79.99</div>
            </div>
            <div class="pricing-body">
              <p>Les Services d'Urgence</p>
              <p>La carte ZOE est une couverture moyenne, elle offre outre les soins proposés dans la formule RUBY, une prise en charge en matière de petites chirurgies.</p>
            </div>
            <div class="btn-container">
              <a href="#" class="btn btn-buy">Acheter</a>
              <a href="#" class="btn btn-details">Voir les Détails</a>
            </div>
          </div>
    
          <!-- PRIVILEGE -->
          <div class="col-lg-3 col-md-6 pricing-item">
            <div class="pricing-header">
              <h3>PRIVILEGE</h3>
              <div class="price">$99.99</div>
            </div>
            <div class="pricing-body">
              <p>Soins de Spécialités</p>
              <p>La carte PRIVILEGE couvre une grande majorité de spécialités outre les bénéfices de l’offre ZOE.</p>
            </div>
            <div class="btn-container">
              <a href="#" class="btn btn-buy">Acheter</a>
              <a href="#" class="btn btn-details">Voir les Détails</a>
            </div>
          </div>
    
          <!-- PRESTIGE -->
          <div class="col-lg-3 col-md-6 pricing-item">
            <div class="pricing-header">
              <h3>PRESTIGE</h3>
              <div class="price">$129.99</div>
            </div>
            <div class="pricing-body">
              <p>Couverture Totale</p>
              <p>La carte PRESTIGE comme son nom l’indique, est une prise en charge TOTALE du patient. En plus des soins de spécialités, de chirurgie, elle offre une couverture aussi bien en cas de traumatologie que de brulure (1er et 2eme degré).</p>
            </div>
            <div class="btn-container">
              <a href="#" class="btn btn-buy">Acheter</a>
              <a href="#" class="btn btn-details">Voir les Détails</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    