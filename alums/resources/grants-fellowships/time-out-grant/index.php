
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


<?php echo sec_fullBleedImageColumn(
    'Take Time Out to Change the World',
    $alums_img_path.'alums-resources/grants-fellowships/irene_lopez_dominican_republic_16x9.jpg',
    'theme-cream',
    '',
    ['img_alt_text' => 'A person with dark hair wearing a tank top, smiling at the viewer.']
); ?>
<p class="intro-text">What would you do if you had the chance to change your life while changing the world?</p>
<p class="intro-text">The Time Out Grant was created to inspire a Vassar College alum to pursue an original, bold interest, project, or business that could effect change in the world. Recipients have used the grant to shed light on issues facing society today.</p>

<p>Irene López ’91 (pictured) created the <em>Lydia Project: Mujeres Bravas con Camaras</em> to train survivors of gender-based violence to document their experiences via photography and enable them to engage in a critical reflection on the images they produced.</p>

<?php echo end_sec_fullBleedImageColumn(); ?>


<?php echo sec_regularContent(
    null,
    '',
    'content_classes'
); ?>

<h2>Time Out Grant Reimagined for 2024</h2>

<ul>
  <li>The proposal may be in any field—science, business, education, the arts, human services, environment, etc.</li>  
  <li>The project must take place over a minimum of twelve months and may extend for up to two years.</li>  
</ul>


<p>The Time Out Grant has been updated to create a more accessible opportunity in today’s modern working environment:</p>

<ul>
  <li>The Awardee is no longer required to leave their current job to accept the award.</li>
  <li>Any Vassar alum 35 years or older by June 30, 2024 may apply for the grant.</li>
  <li>The Time Out Grant of $150,000 will now be awarded <strong>every other year</strong>.</li>
</ul>

<p>All courageous and creative proposals will be considered. The proposal does not need to be related to the applicant’s current career. At Vassar’s discretion, the proposed venture may be funded with complementary grants, provided the Time Out Grant is the lead funding source.</p>

<a href="https://securelb.imodules.com/s/1654/22/events.aspx?sid=1654&gid=2&pgid=5680&cid=9348" class="btn btn-primary arrow mt-5">Apply for the Time Out Grant</a>
<br />
<a href="https://securelb.imodules.com/s/1654/22/events.aspx?sid=1654&gid=2&pgid=5681&cid=9349" class="btn btn-primary arrow mt-5">Submit a reference for an applicant</a>
<p>&nbsp;</p>

<p>Applications and references accepted until February 15, 2024. The winner will be announced by May 30, 2024.</p>


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
