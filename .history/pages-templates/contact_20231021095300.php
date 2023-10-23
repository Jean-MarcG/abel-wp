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
      <div class="agences section" id="agences">
        <h2 class="agences__title">
          4 agences pour votre formation
        </h2>
        <div class="agences__container">
          <div class="agences__content agences__content-one">
            <div class="contact__agences--title">
              abel hauts de murigny
            </div>
            <p class="contact__agences--adresses">
              1 place Toulouse Lautrec
              <br>
              51100 reims
              <br>
              <a href="tel:+0326360536">03.26.36.05.36</a>
              <br>
              <span>
                Du lundi au vendredi de 14h à 19h
              </span>
              <br>
              <span>
                Mercredi et Jeudi de 10h à 12h (ainsi que les après-midi)
              </span>
              <br>
              <span>
                Le samedi de 10h à 13h
              </span>
            </p>
          </div>
          <div class="agences__content agences__content-two">
            <div class="contact__agences--title">
              abel courlancy
            </div>
            <p class="contact__agences--adresses">
              2 rue de Courlancy
              <br>
              51100 reims
              <br>
              <a href="tel:+0326404533">03.26.40.45.33</a>
              <br>
              <span>
                Du Lundi au Vendredi de 10h à 18h30
              </span>
              <br>
              <span>
                Le samedi de 10h à 13h
              </span>
              <br>
              <span>
                Code avec Moniteur le Vendredi à 18h
              </span>
            </p>
          </div>
          <div class="agences__content agences__content-tree">
            <div class="contact__agences--title">
              abel venise
            </div>
            <p class="contact__agences--adresses">
              41 rue Paul Adam (ou 26 rue de Venise)
              <br>
              51100 reims
              <br>
              <a href="tel:+0326252565">03.26.25.25.65</a>
              <br>
              <span>
                Le lundi de 14h à 19h
              </span>
              <br>
              <span>
                Du mardi au vendredi de 10h à 13h et de 14h à 19h </span>
              <br>
              <span>
                Code avec Moniteur le Jeudi à 18h
              </span>
            </p>
          </div>
          <div class="agences__content agences__content-four">
            <div class="contact__agences--title">
              abel taissy
            </div>
            <p class="contact__agences--adresses">
              12 rue de Sillery
              <br>
              51100 reims
              <br>
              <a href="tel:+0326362323">03.26.36.23.23</a>
              <br>
              <span>
                Le Lundi, Mercredi et Vendredi de 17h15 à 18h45
              </span>
              <br>
              <span>
                Code avec Moniteur le Mercredi à 18h
              </span>
            </p>
          </div>
        </div>
      </div>
      <button>info@autoecoleable.fr<svg width="17" height="18" viewBox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg">
          <rect x="6.94531" y="6.94922" width="9.0533" height="9.0533" rx="1" stroke="#EBE8E3" stroke-width="2" />
          <path d="M11.2638 4.14299V3C11.2638 1.89543 10.3683 1 9.26378 1H3C1.89543 1 1 1.89543 1 3V9.26378C1 10.3683 1.89543 11.2638 3 11.2638H4.1875" stroke="#EBE8E3" stroke-width="2" />
        </svg>
      </button>
      </p>
    </div>
  </div>
  <div class="contact__right">
    <div class="contact__form">
      <?php the_content() ?>
    </div>
  </div>
</section>

<?php get_footer() ?>