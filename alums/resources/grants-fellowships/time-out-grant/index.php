
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
    'What would you do if you had the opportunity to change your life while changing the world?',
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

<h2>Applications for the 2024 Time Out grant award are now open!</h2>

<a href="https://securelb.imodules.com/s/1654/22/events.aspx?sid=1654&gid=2&pgid=5680&cid=9348" class="btn btn-primary arrow mt-5">Apply for the Time Out Grant</a>
<p>&nbsp;</p>
<p>Applications accepted until February 15, 2024.</p>

<p>The Time Out grant criteria has been updated as of this year. The grant will be awarded biennially beginning in June 2024 and the recipient will receive $150,000 to fund their proposal.</p>

<p>In order to be eligible, the applicant must be at least 35 years of age by June 30, 2023 and a Vassar college alumnus. The Time-Out Grant proposal may be in any field—science, business, education, the arts, human services, environment, etc. Any proposal that involves experiment or significant change will be considered. The proposal may be, but not need to be, related to one’s career. At Vassar's discretion, the proposed venture may be funded with complementary grants, provided the Time Out grant is the lead source of funding. The project must take place over a minimum of twelve months and may extend for up to two years.</p>

<a href="https://securelb.imodules.com/s/1654/22/events.aspx?sid=1654&gid=2&pgid=5681&cid=9349" class="btn btn-primary arrow mt-5">Submit a reference for an applicant</a>
<p>&nbsp;</p>

<p>[are we keeping this language anywhere?] 2022 recipient Irene López ’91 (depicted above) <a href="https://www.vassar.edu/news/time-out-grant-will-help-awardee-give-voice-survivors-gender-based-violence">plans to use the grant to give voice to survivors of gender-based violence in Puerto Rico</a>. The Lydia Project: Mujeres Bravas con Cámaras (Brave Women with Cameras) will train survivors to document their experiences via photography and enable them to engage in a critical reflection on the images they produce.</p>

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



<?php /*  PAGE CONTENT === */ ?>


<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/resources/resources-career-support.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/resources/resources-vassar-network.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/resources/resources-alums-benefits.php');?>
<?php echo end_sec_relatedTopics(); ?>


<?php echo site_footeralums(); ?>
