

<div class="admission-news-carousel section section--carousel theme-charcoal px-0 quad-pattern has-bg">

<h2 class="section-intro-text news-intro text-center mb-5" style="">What’s Happening at Vassar?</h2>

<?php echo carousel(); ?>

<?php echo carousel_item(
  'https://www.vassar.edu/sites/default/files/styles/featured_news_teaser/public/2022-08/07-CommFellows-Hailey-Osika-002-16x9.jpg?itok=sywDrTe9',
  'is-link',
  'A grid of six faces'
); ?>
  <h3>Vassar Community Fellows Lend a Hand to Strengthen Local Programs</h3>
  <a class="stretched-link" href="https://www.vassar.edu/news/vassar-community-fellows-lend-hand-strengthen-local-programs">Read more <i class="fa-solid fa-arrow-right"></i></a>
<?php echo end_carousel_item(); ?>

  <?php echo carousel_item(
    'https://www.vassar.edu/sites/default/files/styles/featured_news_teaser/public/2022-07/trustee-collage-16x9-edit2.1.jpg?itok=6UY-MgQO',
    'is-link',
    'A grid of six faces'
  ); ?>
    <h3>Vassar Salutes Retiring Board Members</h3>
    <a class="stretched-link" href="https://www.vassar.edu/news/vassar-salutes-retiring-board-members">Read more <i class="fa-solid fa-arrow-right"></i></a>
  <?php echo end_carousel_item(); ?>

  <?php echo carousel_item(
    $news_img_path . '0087_12_10_ja_162.jpg',
    'is-link',
    'Particle Physicist Sau Lan Wu ’63 lecturing in a classroom'
  ); ?>
    <h3>“Minor Planet” named for Particle Physicist Sau Lan Wu ’63</h3>
    <a class="stretched-link" href="https://www.vassar.edu/news/minor-planet-named-particle-physicist-sau-lan-wu-63">Read more <i class="fa-solid fa-arrow-right"></i></a>
  <?php echo end_carousel_item(); ?>

  <?php echo carousel_item( $news_img_path . 'the-overturning-of-roe-v-wade-16x9.jpg',
  'is-link',
  'Pro-choice protestors holding up signs outside the Supreme Court'
); ?>
    <h3>The Overturning of <em>Roe v. Wade</em></h3>
    <a class="stretched-link" href="https://www.vassar.edu/news/overturning-roe-v-wade">Read more <i class="fa-solid fa-arrow-right"></i></a>

  <?php echo end_carousel_item(); ?>


  <?php echo carousel_item( $news_img_path . 'Pulitzer-Prizes-medal-edit1.jpeg',
  'is-link',
  'Both sides of the Pulitzer Prize medallion with the text "2022 Pulitzer Prizes" underneath'
); ?>
    <h3>Ada Ferrer ’84 Wins 2022 Pulitzer Prize in History</h3>
    <a class="stretched-link" href="https://www.vassar.edu/news/ada-ferrer-84-wins-2022-pulitzer-prize-history">Read more <i class="fa-solid fa-arrow-right"></i></a>

  <?php echo end_carousel_item(); ?>



  <?php /* echo carousel_item( $news_img_path . 'aavc-awards-2206-2x3-edit1.jpg',
  'is-link',
  'Six-panel grid displaying photographic portraits of five alumni selected for 2022 AAVC Awards'
); ?>
    <h3>Five Alumni Selected for 2022 AAVC Awards</h3>
    <a class="stretched-link" href="https://www.vassar.edu/news/five-alumni-selected-2022-aavc-awards">Read more <i class="fa-solid fa-arrow-right"></i></a>

  <?php echo end_carousel_item(); */ ?>



  <?php /* echo carousel_item( $news_img_path . 'olmsted-story-lead.jpeg',
  'is-link',
  'Exhibition, set in Vassar’s Art Library'
); ?>
    <h3>Exhibit Highlights Newly Revealed Olmsted Role in Campus Design</h3>
    <a class="stretched-link" href="https://www.vassar.edu/news/exhibit-highlights-newly-revealed-olmsted-role-campus-design">Read more <i class="fa-solid fa-arrow-right"></i></a>
  <?php echo end_carousel_item(); ?>

<?php echo end_carousel(); */ ?>


</div>


<?php /*
function newsCarousel() {
    return <<<TMP

<div class="admission-news-carousel section section--carousel theme-charcoal px-0 quad-pattern has-bg">

<h3 class="section-intro-text news-intro text-center mb-5" style="">What’s Happening at Vassar?</h3>

<div class="featureImage-text-ticker fade-nonselected full" id="gallery">

  <div class="carousel-cell">
    <div class="carousel-cell-content">
      <div class="image-container">
        <img src="/admission/assets/images/news/aavc-awards-2206-2x3-edit1.jpg" />
      </div>
       <div class="figcaption p-4">
        <h3 class="h3">Five Alumni Selected for 2022 AAVC Awards</h3>
         <a href="#" class="px-0 btn btn-link arrow">Read more</a>
      </div>
    </div>
  </div>

    <div class="carousel-cell">
    <div class="carousel-cell-content">
      <div class="image-container">
        <img src="/admission/assets/images/news/Pulitzer-Prizes-medal-edit1.jpeg" />
         </div>
      <div class="figcaption p-4">
          <h3 class="h3">Ada Ferrer ’84 Wins 2022 Pulitzer Prize in History</h3>

       <a href="#" class="px-0 btn btn-link arrow">Read more</a>
      </div>
    </div>
  </div>




      <div class="carousel-cell">
    <div class="carousel-cell-content">
      <div class="image-container">
             <img src="/admission/assets/images/news/olmsted-story-lead.jpeg" />
          </div>
 <div class="figcaption p-4">
           <h3 class="h3">Exhibit Highlights Newly Revealed Olmsted Role in Campus Design</h3>

       <a href="#" class="px-0 btn btn-link arrow">Read more</a>

      </div>
    </div>
  </div>



  <div class="carousel-cell">
  <div class="carousel-cell-content">
    <div class="image-container">
      <img src="/admission/assets/images/news/05-Hohn-Photo-lead.jpg" />
       </div>
    <div class="figcaption p-4">
        <h3 class="h3">GIs and Fräuleins</h3>
      <a href="#" class="px-0 btn btn-link arrow">Read more</a>

    </div>
  </div>
</div>

<div class="carousel-cell">
<div class="carousel-cell-content">
  <div class="image-container">
    <img src="/admission/assets/images/news/miringoff-22-2x3.jpg" />
     </div>
  <div class="figcaption p-4">
      <h3 class="h3">Students Receive Miringoff Awards for Service to the Community</h3>

    <a href="#" class="px-0 btn btn-link arrow">Read more</a>
  </div>
</div>
</div>




  </div>


</div>
TMP;
}
*/ ?>
