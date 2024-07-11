
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
    $alums_img_path.'alums-resources/grants-fellowships/Samantha-Orient-2024-DSC00651.jpg',
    'theme-cream',
    '',
    ['img_alt_text' => 'A person wearing a safety helmet wearing a yellow shirt and carrying a hoe smiles at the viewer in front of burnt vegetation.']
); ?>
<p class="intro-text">Established in 1998, the Time Out Grant seeks to inspire Vassar alums to pursue an original, bold interest, project, or business that could innovate the world around them.</p>

<p>We are excited to announce <strong>Samantha Orient ’05</strong> as the 2024 award recipient. Orient, who has been involved in firefighting since she graduated high school strives to innovate the world of wildland firefighting. As the 2024 Time Out Grant recipient, she will develop a mobile application to help wildland firefighters learn to operate and troubleshoot portable water pumps during wildland fire operations. Once operational, the application could be used as a template for more firefighting training initiatives and tools.</p>

<p>Orient (pictured) was selected out of 150 applicants because the Committee felt her project exemplified the spirit of the Time Out Grant.</p>

<?php echo end_sec_fullBleedImageColumn(); ?>


<?php echo sec_regularContent(
    null,
    '',
    'content_classes'
); ?>

<h2>Time Out Grant Reimagined for 2024</h2>

<ul>
  <li>The proposal could be in any field—science, business, education, the arts, human services, environment, etc.</li>  
  <li>The project could take place over a minimum of 12 months and may extend for up to 2 years.</li>  
</ul>


<p>The Time Out Grant was updated to create a more accessible opportunity to coincide with the modern working environment:</p>

<ul>
  <li>The Awardee was no longer required to leave their current job to accept the award.</li>
  <li>Any Vassar alum 35 years or older by June 30, 2024 was invited to apply for the grant.</li>
  <li>The Time Out Grant of $150,000 will now be awarded <strong>every other year</strong>.</li>
</ul>

<p>All courageous and creative proposals were considered. The proposal did not need to be related to the applicant’s current career. At Vassar’s discretion, the proposed venture can be funded with complementary grants, provided the Time Out Grant was the lead funding source.</p>

<?php /* 

<!--hiding until applications reopen next cycle-->

<a href="https://securelb.imodules.com/s/1654/22/events.aspx?sid=1654&gid=2&pgid=5680&cid=9348" class="btn btn-primary arrow mt-5">Apply for the Time Out Grant</a>
<br />
<a href="https://securelb.imodules.com/s/1654/22/events.aspx?sid=1654&gid=2&pgid=5681&cid=9349" class="btn btn-primary arrow mt-5">Submit a reference for an applicant</a>
<p>&nbsp;</p>

 */ ?>

<p>Applications for the next grant will open in <strong>Fall/Winter 2025</strong> and the recipient will be awarded in <strong>Spring 2026</strong>.</p>


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
        'alt' => 'A person with a bald head wearing a formal black jacket and purple tie speaks into a microphone behind a wooden podium.'
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
        'alt' => 'A person with shoulder-length hair and a dark top smiles at the viewer.'
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
        'alt' => 'A person with light hair wearing a baseball cap and a brown jacket holding onto a tree with his two young children in his arms.'
      ],
      'card--withParagraph animation-item card-has-cta-icon card-has-cta-label card-is-link'
  ); ?>
    <p>Community Farm Project Across Latitudes</p>
  <?php echo end_item_cardWithText(); ?>


  <?php echo item_cardWithText(
      'Irene López ’91',
      'https://www.vassar.edu/news/time-out-grant-will-help-awardee-give-voice-survivors-gender-based-violence',
      [
        'url' => $alums_img_path.'alums-resources/grants-fellowships/irene_lopez_card.jpg',
        'alt' => 'A person with dark hair wearing a tank top, smiling at the viewer.'
      ],
      'card--withParagraph animation-item card-has-cta-icon card-has-cta-label card-is-link'
  ); ?>
    <p>Empowering Survivors Through Photography</p>
  <?php echo end_item_cardWithText(); ?>


  <?php echo item_cardWithText(
      'Jane Kramer ’78',
      'https://www.vassar.edu/vq/issues/2010/03/beyond-vassar/dream-a-little-dream.html',
      [
        'url' => 'https://www.vassar.edu/sites/default/files/styles/card_bg/public/2021-07/kramer.jpg',
        'alt' => 'A person, with short dark hair wearing a yellow sweater holding an instrument, faces a child with short dark hair wearing a bright orange shirt playing the flute.'
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
        'alt' => 'A person wearing a winter coat and hat is surrounded by two other people, all smiling at the viewer.'
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
