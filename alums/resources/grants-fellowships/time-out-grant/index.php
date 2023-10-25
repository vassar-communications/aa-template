
<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */

$page_info = '{
  "page_title":"Time Out Grant",
  "page_classes":"",
  "feature_image":"/alums/assets/img/alums-resources/grants-fellowships/Longitude_SE_dummy_20.jpg"
}';

/* === */
$page_info = json_decode($page_info, true);

?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation_alums(); ?>

<?php echo page_textmasthead('theme-dark-burgundy'); ?>


<?php echo interior_page_nav() ?>

<style>
  .masthead--interiorPage .full-bleed-image-container img {
    object-position: right;
  }
</style>

<?php echo masthead_interiorPage(
    'Take Time Out to Change the World',
    'What would you do if you had a year off to change your life while helping to change the world?',
    $alums_img_path.'alums-resources/grants-fellowships/irene_lopez_dominican_republic_16x9.jpg',
    null,
    null,
    ['img_alt_text' => 'Irene López smiling at the camera']
  );
?>


<?php echo sec_regularContent(
    null,
    '',
    'content_classes'
); ?>



<p>2022 recipient Irene López ’91 (depicted above) <a href="https://www.vassar.edu/news/time-out-grant-will-help-awardee-give-voice-survivors-gender-based-violence">plans to use the grant to give voice to survivors of gender-based violence in Puerto Rico</a>. The Lydia Project: Mujeres Bravas con Cámaras (Brave Women with Cameras) will train survivors to document their experiences via photography and enable them to engage in a critical reflection on the images they produce.</p>

<?php echo end_sec_regularContent(); ?>


<?php echo sec_hasColumns(
    'Meet some previous <br>Time Out Grant recipients',
    '3',
    '<p class="intro-text">Each of these Vassar graduates, and many others over the past three decades, was able to realize a dream that encompassed their own lives and the lives of others, thanks to the Time Out Grant, funded by an extraordinarily generous, anonymous Vassar alumna.</p>',
    'theme-extralightgray',
    'gap-3'
); ?>

  <?php echo item_cardWithText(
      'Bishop Joseph Tolton ’89',
      'https://www.vassar.edu/stories/2021/time-out-awardee-bishop-joseph-tolton-89.html',
      [
        'url' => 'https://www.vassar.edu/sites/default/files/styles/card_bg/public/2022-06/bishop-tolton-2021-card.jpg',
        'alt' => 'Bishop Joseph Tolton ’89 standing at a lecturn outdoors on the Vassar campus'
      ],
      'card--withParagraph animation-item card-has-cta-icon card-has-cta-label card-is-link'
  ); ?>
    <p>Pan African Young Adult Leadership Program</p>
  <?php echo end_item_cardWithText(); ?>

  <?php echo item_cardWithText(
      'Katherine Yungmee Kim&nbsp;’93',
      'https://www.vassar.edu/news/time-out-grant-winner-explores-legacy-koreas-division-new-book',
      [
        'url' => 'https://www.vassar.edu/sites/default/files/styles/card_bg/public/2022-04/katherinekim_3235-by-dahlia-simone-kim-levy-card_0.jpg',
        'alt' => 'Katherine Yungmee Kim ’93 smiling at the camera'
      ],
      'card--withParagraph animation-item card-has-cta-icon card-has-cta-label card-is-link'
  ); ?>
    <p>Exploring the Legacy of Korea’s Division</p>
  <?php echo end_item_cardWithText(); ?>

  <?php echo item_cardWithText(
      'Pablo Elliott ’00',
      'https://www.vassar.edu/stories/2020/vassar-time-out-grant-gives-sustainable-farming-advocate-more-latitude-to-make-a-difference.html',
      [
        'url' => 'https://www.vassar.edu/sites/default/files/styles/card_bg/public/2021-07/time-out-eliott.jpg',
        'alt' => 'Pablo Elliott ’00 holding onto a tree with his two young children in his arms'
      ],
      'card--withParagraph animation-item card-has-cta-icon card-has-cta-label card-is-link'
  ); ?>
    <p>Community Farm Project Across Latitudes</p>
  <?php echo end_item_cardWithText(); ?>


  <?php echo item_cardWithText(
      'Susan Yacubian Klein ’64',
      'https://www.vassar.edu/vq/issues/2010/01/beyond-vassar/turning-handicrafts-opportunity.html',
      [
        'url' => 'https://www.vassar.edu/sites/default/files/styles/card_bg/public/2021-07/klein.jpg',
        'alt' => 'Susan Yacubian Klein ’64 standing beneath the trunk of a stone carved elephant'
      ],
      'card--withParagraph animation-item card-has-cta-icon card-has-cta-label card-is-link'
  ); ?>
    <p>Turning Handicrafts into Opportunity</p>
  <?php echo end_item_cardWithText(); ?>


  <?php echo item_cardWithText(
      'Jane Kramer ’78',
      'https://www.vassar.edu/vq/issues/2010/03/beyond-vassar/dream-a-little-dream.html',
      [
        'url' => 'https://www.vassar.edu/sites/default/files/styles/card_bg/public/2021-07/kramer.jpg',
        'alt' => 'Jane Kramer ’78 and a young boy with musical instruments'
      ],
      'card--withParagraph animation-item card-has-cta-icon card-has-cta-label card-is-link'
  ); ?>
    <p>Enriching Lives Through Music</p>
  <?php echo end_item_cardWithText(); ?>


  <?php echo item_cardWithText(
      'Kathryn Tolbert ’74',
      'https://www.washingtonpost.com/sf/national/2016/09/22/from-hiroko-to-susie-the-untold-stories-of-japanese-war-brides/?noredirect=on&utm_term=.975bd531e220',
      [
        'url' => 'https://www.vassar.edu/sites/default/files/styles/card_bg/public/2021-07/tolbert-kathrynandhiroko-final.jpg',
        'alt' => 'Kathryn Tolbert ’74 wearing a winter coat and hat, surrounded by two other women smiling at the camera'
      ],
      'card--withParagraph animation-item card-has-cta-icon card-has-cta-label card-is-link'
  ); ?>
    <p>Japanese War Brides</p>
  <?php echo end_item_cardWithText(); ?>
<?php echo end_sec_hasColumns(); ?>



<?php echo sec_regularContent(
    null,
    '',
    'content_classes'
); ?>

  <?php echo info_card(); ?>
    <p>The application process for the Time Out Grant is scheduled to reopen in Fall 2023. Please check back for details.</p>
  <?php echo end_info_card(); ?>


<?php echo end_sec_regularContent(); ?>



<?php /*  PAGE CONTENT === */ ?>


<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/resources/resources-career-support.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/resources/resources-vassar-network.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/resources/resources-alums-benefits.php');?>
<?php echo end_sec_relatedTopics(); ?>


<?php echo site_footeralums(); ?>
