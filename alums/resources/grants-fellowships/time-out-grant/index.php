
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

<div class="info-card alert p-4 shadow mb-5 classes has-title red-alert">
<p><strong>Time Out applications will open October 10, 2025.</strong> Please check back for the link to the application form at that time.</p>
</div>

<p class="intro-text">Established in 1998, the Time Out Grant seeks to inspire Vassar alums to pursue an original, bold interest, project, or business that could innovate the world around them.</p>

<ul>
  <li>Proposals can be in any field including science, business, education, the arts, human services, environment, or others.</li>
  <li>The project can take place over a minimum of 12 months and may extend for up to 2 years.</li>
  <li>The Awardee is not required to leave their current job to accept the award.</li>
  <li>Any Vassar alum 35 years or older by June 30, 2026 can apply for the grant.</li>
  <li>The Time Out Grant of $150,000 is awarded every other year.</li>
  <li>The proposals do not need to be related to the applicant’s current career.</li>
  <li>At Vassar’s discretion, the proposed venture can be funded with complementary grants, provided the Time Out Grant is the lead funding source.</li>
  <li>The grant will be awarded in the spring of 2026.</li>
</ul>

<p>Questions? Reach out to us at <a href="mailto:timeoutgrant@vassar.edu">timeoutgrant@vassar.edu</a>.</p>

<?php echo end_sec_fullBleedImageColumn(); ?>


<?php echo sec_regularContent(
    'Application Information',
    '',
    'content_classes'
); ?>

<ul>
  <li>Applications will open <strong>October 10, 2025</strong>. All applications must be submitted via the online application form.</li>
  <li>Applications will close <strong>December 19, 2025 at 5 p.m. ET</strong>. No applications will be accepted after this deadline.</li>
  <li>
    Round One applications will receive notification at the <strong>end of January 2026</strong> if they have moved on to the second round of review. The application form will ask for:
    <ul>
      <li>a brief summary of your Time Out Grant project proposal;</li>
      <li>a description of the project’s purpose, scope, and goals;</li>
      <li>how you developed the project including the background, inspiration, or prior work that informed it;</li>
      <li>an estimated project timeline with key milestones; a high-level budget;</li>
      <li>and how the opportunity will impact your life and benefit others.</li>
    </ul>
  </li>
  <li>Round Two applications must include additional project information: a detailed proposal (with budget and photos, not exceeding four pages) and a resume.</li>
  <li>The finalists for the grant will be asked to participate in a short phone discussion with the selection committee.</li>
  <li>Selection of grant awardee will be made by the beginning of April 2026.</li>
  <li>The grant will be awarded at the beginning of June 2026.</li>
  <li>We will keep applicants informed as we review their submissions.</li>
</ul>

<?php /* 

<!--hiding until applications reopen next cycle-->

<a href="https://securelb.imodules.com/s/1654/22/events.aspx?sid=1654&gid=2&pgid=5680&cid=9348" class="btn btn-primary arrow mt-5">Apply for the Time Out Grant</a>
<p>&nbsp;</p>

 */ ?>


<?php echo end_sec_regularContent(); ?>


<?php echo sec_regularContent(
    'Update on the 2024 Time Out Grant Project: Wildland Firefighter Training App',
    'theme-cream',
    'content_classes'
); ?>

<p>Since being awarded the <a href="https://www.vassar.edu/news/time-out-grant-recipient-to-develop-virtual-training-tools-for-wildland-firefighters">2024 Time Out Grant, Samantha Orient ’05</a> has been making significant progress on her project to develop a mobile app that teaches wildland firefighters to operate and troubleshoot portable water pumps. Recent developments in the firefighting landscape have underscored the urgency of this work. With unexpected layoffs in federal agencies, including the U.S. Forest Service, and a wave of early retirements among experienced fire personnel, the need to preserve and share institutional knowledge has never been greater.</p>
<p>At the same time, Waterax has launched its first new water pump model in 65 years—a lighter, more efficient version of the long-used Mark 3 pump. Firefighters nationwide are beginning to transition to this new equipment, making Samantha’s interactive 3D training tool especially timely. Her app will allow users to virtually disassemble and explore the pump, providing a practical, visual way to understand and maintain this critical piece of gear. By combining her background in wildland firefighting with her expertise in 3D modeling and animation, Samantha is creating a resource that will equip the next generation of firefighters with essential skills and help bridge the gap caused by workforce changes in the field.</p>

<?php echo end_sec_regularContent(); ?>


<?php echo sec_hasColumns(
    'Meet some previous <br>Time Out Grant recipients',
    '3',
    '<p class="intro-text">Each of these Vassar graduates, and many others over the past three decades, was able to realize a dream that encompassed their own lives and the lives of others, thanks to the Time Out Grant, funded by an extraordinarily generous, anonymous Vassar alumna.</p>',
    'theme-extralightgray',
    'gap-3'
); ?>

  <?php /* <!--hiding for now--> echo item_cardWithText(
      'Samantha Orient ’05',
      'https://www.vassar.edu/news/time-out-grant-recipient-to-develop-virtual-training-tools-for-wildland-firefighters',
      [
        'url' => $alums_img_path.'alums-resources/grants-fellowships/Samantha-Orient-05-card.jpg',
        'alt' => 'A person wearing a safety helmet wearing a yellow shirt and carrying a hoe smiles at the viewer in front of burnt vegetation.'
      ],
      'card--withParagraph animation-item card-has-cta-icon card-has-cta-label card-is-link'
  ); ?>
    <p>Virtual Training Tools for Wildland Firefighters</p>
  <?php echo end_item_cardWithText();  */ ?>


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
