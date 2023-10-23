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
      <a href="tel:+0326362323">03.26.36.23.23</a>
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