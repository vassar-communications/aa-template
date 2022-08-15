<?php
$media_carousel_path = '/alumni/assets/img/alumni-home/news-and-spotlight/';
echo carousel( '', 'alums-media-carousel' ); ?>



<?php echo carousel_item(
    $media_carousel_path.'/2022-08-13/211123-media-blum.jpeg',
    'is-link',
    'A headshot of Jason Blum ’91, a white, middle-aged man with short brown hair.'
  ); ?>

  <small class="mb-3 d-block">August 6, 2022</small>
  <p><strong>Jason Blum ’91,</strong> CEO and Founder of Blumhouse Productions, talked with <em>Deadline</em> about his upcoming projects.</p>

  <?php echo cta_link(
  'https://deadline.com/2022/08/jason-blum-exorcist-remake-locarno-1235086504/',
  'Read more',
  'stretched-link'
  ); ?>

<?php echo end_carousel_item(); ?>






  <?php echo carousel_item(
    $media_carousel_path.'/2022-07-27/Shana_Nys_Dambrot.jpg',
    'is-link',
    'Black and white photo of Shana Nys Dambrot'
  ); ?>

  <small class="mb-3 d-block">July 27, 2022</small>
<p>Art critic <strong>Shana Nys Dambrot ’93</strong> was awarded a $50,000 Rabkin Prize for art journalism, as announced by the Rabkin Foundation.</p>

<?php echo cta_link(
  'https://www.rabkinfoundation.org/awards',
  'Read more',
  'stretched-link'
); ?>

  <?php echo end_carousel_item(); ?>





  <?php echo carousel_item(
    $media_carousel_path.'/2022-07-18/deidre_mccalla_by_irene_young.jpg',
    'is-link',
    'Deidre McCalla playing a guitar and singing'
  ); ?>

  <small class="mb-3 d-block">July 18, 2022</small>
  <p>Singer-songwriter <strong>Deidre McCalla ’75</strong> was featured on AcousticMusicScene.com.</p>

  <?php echo cta_link(
    'https://acousticmusicscene.com/2022/07/11/fai-folk-radio-charts-june-2022/',
    'Read more',
    'stretched-link'
  ); ?>

  <?php echo end_carousel_item(); ?>





  <?php echo carousel_item(
    $media_carousel_path.'2022-07-07/goldberg.jpg',
    'is-link',
    'Carrie Goldberg standing in front of a desk'
  ); ?>

  <small class="mb-3 d-block">July 1, 2022</small>
  <p>Victims’ rights attorney <strong>Carrie Goldberg ’99</strong> (pictured) was quoted in an <em>Insider</em> story about the misogyny stemming from the recent Amber Heard/Johnny Depp trial.</p>

  <?php echo cta_link(
    'https://www.insider.com/internet-trolls-using-amber-heard-name-dog-whistle-lawyer-2022-7',
    'Read more on <em>Insider</em>',
    'stretched-link'
  ); ?>

  <?php echo end_carousel_item(); ?>


<?php echo end_carousel(); ?>
