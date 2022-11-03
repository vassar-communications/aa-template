<?php
  $alums_spotlight_itm_path = '/alums/assets/img/alums-home/news-and-spotlight/';
  echo carousel( '', 'alums-carousel' );
?>




<?php
// On return
// Finish this: https://servicedesk.vassar.edu/incidents/97817517-alums-page-update
// Ask Morgan why that image wasn't scraped

?>


<?php echo carousel_item(
  $alums_spotlight_itm_path.'/2022-11-03/spotlight/meryl-news-story.jpg',
  'is-link',
  'Meryl Streep smiling and standing on a stage with two others holding an Award'
); ?>
  <h3 class="h3">Meryl Streep ’71, P’08,13 Returns to Vassar to Accept AAVC Award</h3>
  <p>The beloved performer walked into the Chapel to jubilant cheers, then accepted the AAVC Distinguished Achievement Award from classmate Amy Pullman ’71 (left) and AAVC President Monica Vachher ’77.</p>

  <p><em> Photo: Karl Rabe</em></p>

  <?php echo cta_link(
    'https://www.vassar.edu/news/meryl-streep-accepts-aavc-distinguished-achievement-award',
    'Read more',
    'stretched-link'
  ); ?>

<?php echo end_carousel_item(); ?>

<?php echo carousel_item(
  $alums_spotlight_itm_path.'/2022-11-03/in-the-media/Bell-Ringing-19x9.jpg',
  'is-link',
  'People seated outside in an audience smiling and waving and ringing bells.'
); ?>
  <h3 class="h3">Vassar Launches “Fearlessly Consequential” Campaign</h3>
  <p>About 200 alums returned to campus to help ring in the fund-raising effort. Many more tuned in online.</p>

  <p><em> Photo: Karl Rabe</em></p>

  <?php echo cta_link(
    'https://www.vassar.edu/news/vassar-rings-in-fearlessly-consequential-fund-raising-campaign',
    'Read more',
    'stretched-link'
  ); ?>

<?php echo end_carousel_item(); ?>

<?php echo carousel_item(
  $alums_spotlight_itm_path.'/2022-10-12/spotlight/vassar_feigen_20220929_kr_0074-compressed.jpg',
  'is-link',
  'Photo of Amy Pullman ’71 (left) and Monica Vachher ’77 (right), and Brenda Feigen holding an award (center) and smiling with the others.'
); ?>
  <h3 class="h3">Feminist Legend Brenda Feigen ’66 Receives Spirit of Vassar Award</h3>
  <p>Before accepting the award from Amy Pullman ’71 (left) and Monica Vachher ’77 (right), Feigen (center) spoke at the College and told students to embrace activism.</p>

  <p><em>Photo: Karl Rabe</em></p>

  <?php echo cta_link(
    'https://www.vassar.edu/news/feminist-legend-brenda-feigen-66-accepts-spirit-vassar-award-tells-students-embrace-activism',
    'Read more',
    'stretched-link'
  ); ?>

<?php echo end_carousel_item(); ?>



<?php echo carousel_item(
  $alums_spotlight_itm_path.'/2022-09-16/spotlight/ifill_alum_spotlight_220915.jpg',
  'is-link',
  'Three people smile at the camera while standing in the Vassar chapel: a large, well-lit, stone-walled space'
); ?>
  <h3 class="h3">Meeting the Urgency of the Moment</h3>
  <p>Honored by the American Bar Association, Sherrilyn Ifill ’84 implored legal colleagues to help save American democracy.</p>

  <p><em>Photo: Courtesy of the American Bar Association</em></p>

  <?php echo cta_link(
    'https://www.vassar.edu/news/meeting-urgency-moment',
    'Read more',
    'stretched-link'
  ); ?>

<?php echo end_carousel_item(); ?>





<?php echo carousel_item(
  $alums_spotlight_itm_path.'/2022-09-08/spotlight/Raina-0111-22-08-kr-convocation-vassar-0188.jpg',
  'is-link',
  'Three people smile at the camera while standing in the Vassar chapel: a large, well-lit, stone-walled space'
); ?>
  <h3 class="h3">Convocation 2022</h3>
  <p>Arushi Raina ’14 (center), pictured with AAVC President Monica Vachher ’77 (left) and Stephanie Goldberg ’14, was presented with the Young Alumnae/i Achievement Award.</p>

  <p><em>Photo: Karl Rabe</em></p>

  <?php echo cta_link(
    'https://www.vassar.edu/news/convocation-2022',
    'Read more',
    'stretched-link'
  ); ?>

<?php echo end_carousel_item(); ?>


<?php echo end_carousel(); ?>
