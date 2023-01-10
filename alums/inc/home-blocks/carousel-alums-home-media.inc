<?php
$media_carousel_path = '/alums/assets/img/alums-home/news-and-spotlight/';
echo carousel( '', 'alums-media-carousel' ); ?>



<?php echo carousel_item(
    $media_carousel_path.'/2023-01-09/in-the-media/jason_blum_91_getty_images.jpg',
    'is-link',
    'A person with short dark hair and a blue jacket smiles at the camera'
  ); ?>

  <p>Jason Blum ’91, Founder and CEO of Blumhouse Productions, is in advanced talks about merging his company with producer James Wan’s company, Atomic Monster, as noted by the <em>New York Times</em>.</p>
  <p><em>Photo: Laura Merrill</em></p>
  <?php echo cta_link(
  'https://www.nytimes.com/2022/11/16/business/jason-blum-james-wan-merger.html',
  'Read more',
  'stretched-link'
  ); ?>
<?php echo end_carousel_item(); ?>



<?php echo carousel_item(
    $media_carousel_path.'/2023-01-09/in-the-media/Amanda_Jones_10_by_Lee_Harcourt.jpg',
    'is-link',
    'A person with short dark hair and a tank top with jewelry smiles at the camera'
  ); ?>

  <p>Emmy-nominated composer Amanda Jones ’10 spoke about her work with National Geographic TV’s <em>Super/Natural</em> series on <em>The Big Score</em>—detailing how she utilized a vast array of instruments to bring a spectacular universe of animals to life.</p>
  <p><em>Photo: Lee Harcourt</em></p>
  <?php echo cta_link(
  'https://www.youtube.com/watch?v=HmWEC8t8jhQ',
  'Read more',
  'stretched-link'
  ); ?>
<?php echo end_carousel_item(); ?>



<?php echo carousel_item(
    $media_carousel_path.'/2023-01-09/in-the-media/Mike_Schmidt_by_Brent_Weisberg.jpg',
    'is-link',
    'A person with short brown hair and facial hair smiles at the camera. The person is wearing a dark blue-gray suit.'
  ); ?>

  <p>Mike Schmidt ’03, Multnomah County District Attorney, was the subject of a <em>Portland Monthly</em> feature story.</p>
  <p><em>Photo: Brent Weisberg</em></p>
  <?php echo cta_link(
  'https://www.pdxmonthly.com/news-and-city-life/2022/12/mike-schmidt-multnomah-county-district-attorney-da-portland',
  'Read more',
  'stretched-link'
  ); ?>
<?php echo end_carousel_item(); ?>




<?php echo carousel_item(
    $media_carousel_path.'/2023-01-09/in-the-media/0211-19-02-kr-tugade-app-vassar-54410-crop.jpg',
    'is-link',
    'A person with long dark hair smiles at the camera.'
  ); ?>

  <p>Michele Tugade ’95, Professor of Psychological Science on the William R. Kenan Jr. Chair, was quoted in a <em>HuffPost</em> article about depression and anxiety during the holidays.</p>
  <p><em>Photo: Karl Rabe</em></p>
  <?php echo cta_link(
  'https://www.huffpost.com/entry/holidays-feel-exhausting_l_638e4faae4b07530543d0e62',
  'Read more',
  'stretched-link'
  ); ?>
<?php echo end_carousel_item(); ?>




<?php echo end_carousel(); ?>
