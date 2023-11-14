<?php
/*
Template Name: contact
*/
?>

<?php get_header() ?>

<section class="contact">
  <div class="contact__left">
    <div>
      <p class="contact__title">Auto-école Abel</p>
      <ul>
        <li>
          <a href="tel:+0326360536">
            Abel Hauts de Murigny
            <br>
            03.26.36.05.36
            <a href="/contact/" class="cta cta--yellow">J'appelle</a>
          </a>
        </li>
        <li>
          <a href="tel:+0326404533">
            Abel Courlancy
            <br>
            03.26.40.45.33
          </a>
        </li>
        <li>
          <a href="tel:+0326252565">
            Abel Venise
            <br>
            03.26.25.25.65
          </a>
        </li>
        <li>
          <a href="tel:+0326362323">
            Abel Taissy
            <br>
            03.26.36.23.23
          </a>
        </li>
      </ul>
      <a href="tel:+0326404533">03.26.40.45.33</a>
      <button id="copyEmail">info@autoecoleabel.org<svg width=" 17" height="18" viewBox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg">
          <rect x="6.94531" y="6.94922" width="9.0533" height="9.0533" rx="1" stroke="#D93513" stroke-width="2" />
          <path d="M11.2638 4.14299V3C11.2638 1.89543 10.3683 1 9.26378 1H3C1.89543 1 1 1.89543 1 3V9.26378C1 10.3683 1.89543 11.2638 3 11.2638H4.1875" stroke="#D93513" stroke-width="2" />
        </svg>
      </button>
      <span>Cliquez pour copier notre email</span>
    </div>
  </div>
  <div class="contact__right">
    <div class="contact__form">
      <?php the_content() ?>
    </div>
    <small>
      * En soumettant ce formulaire, j'accepte que les informations saisies soient exploitées dans le cadre de votre demande d'information et de la relation commerciale qui peut en découler.<br>
      Pour retirer votre consentement à l'utilisation des données collectées par ce formulaire, veuillez nous envoyer un mail à info@autoecoleabel.org
    </small>
  </div>
</section>

<?php get_footer() ?>