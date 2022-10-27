<?php /*
<?php echo carousel( '', 'alums-carousel' ); ?>

  <?php echo carousel_item(
    '/alumni/assets/img/alumni-calendar/reunion/slideshow/Reunion_1806_CS_424.jpg',
    'is-link',
    'alt text goes here'
  ); ?>
    <h3 class="h3">Alum’s Photography Featured in the New York Times</h3>
    <p>Photographer Caleb Stein ’17 and Amitava Kumar, Professor of English on the Helen D. Lockwood Chair, collaborated on “An Ode to the Queen City of the Hudson,” an opinion piece in the <em>New York Times</em>. Photo by Caleb Stein ’17</p>

    <?php echo cta_link(
      'https://www.nytimes.com/2022/07/03/opinion/poughkeepsie-watering-holes-hudson-valley.html?fbclid=IwAR1ZNtwsdT1FOnR2yBvUdF_2g3M2Dc29qHMAuU08Hgt2P1Jmm9SvzH3M75U',
      'Read more',
      'stretched-link'
    ); ?>

  <?php echo end_carousel_item(); ?>

<?php echo end_carousel(); ?>

*/ ?>

<?php
function alumniReunionsCarousel () {
    return <<<TMP

<div class="featureImage-text-ticker media-carousel fade-nonselected full" id="gallery">

<div class="carousel-cell">
    <div class="carousel-cell-content">
        <div class="image-container">
        <img src="/alumni/assets/img/alumni-calendar/reunion/slideshow/Reunion_1806_CS_424.jpg" />
        </div>
    </div>
</div>


<div class="carousel-cell">
    <div class="carousel-cell-content">
        <div class="image-container">
        <img src="/alumni/assets/img/alumni-calendar/reunion/slideshow/Vassar_20190508_Social_KR_2730.jpg" />
        </div>
    </div>
</div>

<div class="carousel-cell">
    <div class="carousel-cell-content">
        <div class="image-container">
        <img src="/alumni/assets/img/alumni-calendar/reunion/slideshow/0098_13_06_BL_8847.jpg" />
        </div>
    </div>
</div>



<div class="carousel-cell">
    <div class="carousel-cell-content">
        <div class="image-container">
        <img src="/alumni/assets/img/alumni-calendar/reunion/slideshow/0054_15_06_CS_099.jpg" />
        </div>
    </div>
</div>










  </div>

TMP;
}
