{{-- <div class="trait-horizontal"></div> --}}
<section class="story">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <img loading="lazy" src="{{asset('Frontend/images/about/5.jpg')}}" class="responsive" alt="story">
      </div>
      <div class="col-lg-6">
        <div class="story-content">
            <h2>Notre histoire</h2>
            <h5 class="tagline">"Kycare, votre portail vers des soins de santé accessibles et de qualité."</h5>
            <p>Kycare a été fondé avec la mission de rendre l'accès aux soins de santé plus facile, plus pratique et plus transparent que jamais. Notre plateforme innovante relie les patients aux professionnels de la santé de manière rapide et efficace, leur permettant de planifier et de gérer leurs rendez-vous médicaux en ligne.</p>
            <h6>Notre mission</h6>
            <p>Notre mission est de fournir une expérience de soins de santé personnalisée, axée sur le patient, en mettant l'accent sur la commodité, la qualité et la sécurité. Nous visons à transformer la manière dont les gens accèdent aux soins médicaux, en offrant des solutions innovantes qui répondent aux besoins de chacun.</p>
            <h6>Notre vision</h6>
            <p>Nous aspirons à devenir le leader de la révolution numérique dans le domaine des soins de santé, en offrant une plateforme intégrée qui relie les patients, les médecins et les autres professionnels de la santé. Notre vision est de créer un écosystème de santé connecté où chaque individu peut prendre le contrôle de sa propre santé.</p>
        </div>
    </div>
    
    </div>
  </div>
</section>

<!-- Promo Video -->
<section class="promo-video">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="block text-center">
          <h1>Suivez cette vidéo explicative<br>
          </h1>
          <a data-fancybox
            href="https://www.youtube.com/watch?v=_sI_Ps7JSEk&amp;autoplay=1&amp;rel=0&amp;controls=0&amp;showinfo=0"><i class="fas fa-play"></i></a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="team-section section">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-title text-center">
          <h3>Notre
              <span>direction</span>
          </h3>
          <p>Découvrez l'équipe de direction qui guide notre entreprise avec vision et leadership.
              <br>Nos dirigeants apportent leur expertise et leur stratégie pour atteindre nos objectifs.</p>
      </div>      
      
        <!-- Nav tabs -->

        <div class="tab-content" id="teamTab">
          <!--Start single tab content-->
          <div class="team-members tab-pane fade show active" id="doctor">
            <div class="row justify-content-center"> <!-- Ajout de la classe justify-content-center -->
                <div class="col-lg-4 col-md-6">
                    <div class="team-person text-center">
                        <img loading="lazy" src="{{asset('Frontend/images/about/ceo.jpeg')}}" class="img-fluid" alt="team">
                        <h6>Rodolphe BLON</h6>
                        <p>CEO</p>
                    </div>
                </div>
            </div>
        </div>
        
          <!--End single tab content-->

          <!--End single tab content-->
        </div>
      </div>
    </div>
  </div>
</section>
<svg viewBox="0 0 1595 258" preserveAspectRatio="none">
  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
      <path d="M444.340642,154 C694.722027,154 1052.66439,33 1277.90476,14.9967149 C1428.06501,2.99452485 1533.61546,-1.31308158 1594.55611,2.07389562 L1594.55611,257.183313 L0,257.183313 L0,42.6646632 C129.306171,116.888221 277.419718,154 444.340642,154 Z" fill="#48bdc5"></path>
  </g>
</svg>


<style>
.team-member {
  display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center;
  height: 80%;
 /* Add spacing between team members */
}

.team-member .image-container {
  width: 100%;
  max-width: 300px; 
  height: 400px;
  overflow: hidden;
/* Add spacing below the image */
}

/* .team-member .image-container img {
  width: 100%;
  height: 100%;
  object-fit: cover; 
} */

/* .team-member .contents {
  flex: 1;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
} */

.team-member .contents h4 {
  /* margin-bottom: 15px; */
}

.team-member .contents p {
  /* flex-grow: 1; */
  /* margin-bottom: 20px; */
}

.team-member .contents .btn {
  /* margin-top: 20px; */
}

/* .styled-pagination {
  text-align: center;
  margin-top: 20px;
} */

/* .styled-pagination ul {
  list-style: none;
  padding: 0;
  display: inline-flex;
} */

/* .styled-pagination ul li {
  margin: 0 5px;
}

.styled-pagination ul li a {
  display: block;
  padding: 10px 15px;
  background: #48bdc5;
  color: #fff;
  border-radius: 5px;
} */

/* .styled-pagination ul li a:hover {
  background: #37a2ac;
}

.styled-pagination ul li a.active {
  background: #2a898f;
} */

</style>
<section class="team-section section">
  <div class="container">
    <div class="section-title text-center">
      <h3>Nos
        <span>experts</span>
      </h3>
      <p class="mb-0">Découvrez notre équipe de médecins spécialisés, dédiée à fournir des soins de santé de haute qualité.
        <br>Nos experts sont là pour répondre à tous vos besoins médicaux avec compassion et professionnalisme.</p>
    </div>
    <div class="row justify-content-center">
      <div class="col-lg-4 col-md-6">
        <div class="team-member">
          <div class="image-container">
            <img loading="lazy" src="{{asset('Frontend/images/about/10.jpg')}}" alt="Dr. Robert Barrethion" class="img-fluid">
          </div>
          <div class="contents text-center">
            <h4>Dr. Robert Barrethion</h4>
            <p>Spécialiste en orthopédie, le Dr. Barrethion a plus de 20 ans d'expérience dans le traitement des troubles musculo-squelettiques.</p>
            <a href="appointment.html" class="btn btn-main">Prendre un rendez-vous</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="team-member">
          <div class="image-container">
            <img loading="lazy" src="{{asset('Frontend/images/about/10.jpg')}}" alt="Dr. Marry Lou" class="img-fluid">
          </div>
          <div class="contents text-center">
            <h4>Dr. Marry Lou</h4>
            <p>Experte en pédiatrie, le Dr. Lou est dévouée à fournir des soins complets et attentifs à vos enfants.</p>
            <a href="appointment.html" class="btn btn-main">Prendre un rendez-vous</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="team-member">
          <div class="image-container">
            <img loading="lazy" src="{{asset('Frontend/images/about/12.jpg')}}" alt="Dr. Sansa Stark" class="img-fluid">
          </div>
          <div class="contents text-center">
            <h4>Dr. Sansa Stark</h4>
            <p>Dermatologue renommée, le Dr. Stark se spécialise dans le traitement des maladies de la peau et des troubles esthétiques.</p>
            <a href="appointment.html" class="btn btn-main">Prendre un rendez-vous</a>
          </div>
        </div>
      </div>
     
    </div>
  <div class="styled-pagination">
          <ul>
            <li><a class="prev" href="blog.html"><span class="fas fa-angle-left" aria-hidden="true"></span></a></li>
            <li><a href="blog.html" class="active">1</a></li>
            <li><a href="blog.html">2</a></li>
            <li><a href="blog.html">3</a></li>
            <li><a class="next" href="blog.html"><span class="fas fa-angle-right" aria-hidden="true"></span></a></li>
          </ul>
        </div>
  </div>
</section>



