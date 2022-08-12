<?php
  $alums_spotlight_itm_path = '/alumni/assets/img/alumni-home/news-and-spotlight/';
  echo carousel( '', 'alums-carousel' );
?>

  <?php echo carousel_item(
    $alums_spotlight_itm_path.'/2022-07-27/trustees-collage-16x12-edit2.jpg',
    'is-link'
  ); ?>
    <h3 class="h3">Vassar Salutes Retiring Trustees</h3>
    <p>Five members of the Board of Trustees retired this summer (clockwise from top left): Steve Hankins ’85, P’13,’17, Geraldine Bond Laybourne ’69, P’93, Philip Jefferson ’83, Maryellen Herringer ’65, and Missie Rennie Taylor ’68. Learn about them and the new trustees—as well as the new AAVC board members.
</p>

    <?php echo cta_link(
      'https://www.vassar.edu/news/vassar-salutes-retiring-board-members',
      'Read more',
      'stretched-link'
    ); ?>

  <?php echo end_carousel_item(); ?>



  <?php echo carousel_item(
    $alums_spotlight_itm_path.'/2022-07-18/roe-v-wade-protest-16x12.jpg',
    'is-link'
  ); ?>
    <h3 class="h3">The Overturning of <em>Roe v. Wade</em></h3>
    <p>Vassar professors hosted a webinar to discuss the recent U.S. Supreme Court decision, putting the loss of abortion rights in historical context and looking to the future. <em>Photo: Ian Hutchinson</em></p>

    <?php echo cta_link(
      'https://www.vassar.edu/news/overturning-roe-v-wade',
      'Watch the video',
      'stretched-link'
    ); ?>
  <?php echo end_carousel_item(); ?>



  <?php echo carousel_item(
      '/alumni/assets/img/alumni-home/sherika_sanjay_by_caleb_stein.jpg',
      'is-link'
    ); ?>
      <h3 class="h3">Alum’s Photography Featured in the New York Times</h3>
      <p>Photographer Caleb Stein ’17 and Amitava Kumar, Professor of English on the Helen D. Lockwood Chair, collaborated on “An Ode to the Queen City of the Hudson,” an opinion piece in the <em>New York Times</em>. Photo by Caleb Stein ’17</p>

      <?php echo cta_link(
        'https://www.nytimes.com/2022/07/03/opinion/poughkeepsie-watering-holes-hudson-valley.html?fbclid=IwAR1ZNtwsdT1FOnR2yBvUdF_2g3M2Dc29qHMAuU08Hgt2P1Jmm9SvzH3M75U',
        'Read more',
        'stretched-link'
      ); ?>

    <?php echo end_carousel_item(); ?>




    <?php echo carousel_item(
      'https://www.vassar.edu/sites/default/files/2022-06/AAVC_awards_16x12.jpg',
      'is-link'
    ); ?>
    <h3 class="h3">Five Alumni Selected for 2022 AAVC Awards</h3>
    <p>Meet the alums whom the Alumnae/i Association of Vassar College has chosen to honor this year for their work at Vassar and beyond (clockwise from top left): Arushi Raina ’14, Jonathan Granoff ’70, Brenda Feigen ’66, Edward Pittman ’82, and Deborah Macfarlan Enright ’82.</p>

    <?php echo cta_link(
      'https://www.vassar.edu/news/five-alumni-selected-2022-aavc-awards',
      'Read more',
      'stretched-link'
    ); ?>

    <?php echo end_carousel_item(); ?>





    <?php echo carousel_item(
      'https://www.vassar.edu/sites/default/files/2022-06/alum_spotlight_reunion2022.jpg',
      'is-link'
    ); ?>
    <h3 class="h3">Reunion 2022 Highlights!</h3>
  <p>This year’s joyous, in-person gathering drew more than 1,500 alums, friends, and family members representing classes that spanned 60 years. Catch up on the festivities! <em>Photo: Karl Rabe</em></p>

  <?php echo cta_link(
    'https://www.vassar.edu/news/reunion-2022-highlights',
    'Read more',
    'stretched-link'
  ); ?>

    <?php echo end_carousel_item(); ?>




    <?php echo carousel_item(
      'https://www.vassar.edu/sites/default/files/2022-06/alum_spotlight_marina_bayeva.jpg',
      'is-link'
    ); ?>
          <h3 class="h3">Marina Bayeva ’06: Helping Ukraine’s Displaced Animals</h3>
       <p>Since the invasion of Ukraine began, Marina Bayeva ’06 has been collecting money for shelters in her native country and coordinating rescue efforts for animals there. <em>Photo: Courtesy of the subject.</em></p>

       <?php echo cta_link(
         'https://www.vassar.edu/news/marina-bayeva-06',
         'Read more',
         'stretched-link'
       ); ?>

    <?php echo end_carousel_item(); ?>



<?php echo end_carousel(); ?>
