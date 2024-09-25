<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */


$page_info = '{
  "page_title":"Give Back",
  "page_classes":"",
  "feature_image":"/assets/images/placeholder-banner.png"
}';

/* === */
$page_info = json_decode($page_info, true);

?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation_alums(); ?>

<style>
b {
  display: block !important;
}
</style>

<?php echo sec_fixedCenteredTitle_masthead_vid(
    '<b class="slide-from-left">Give&nbsp;</b>
   <b class="slide-from-right">Back</b>',
    '727857417?h=67e1eace57',
    'theme-verylightgray reveal-image',
    'mw-4',
    ['bg-image-url' => $page_info['feature_image'],
        'bg-image-alt' => 'alt text',
        'css' => '
      --title-container-bg-beforeContent: rgba(0,0,0,0.4);
      --section-bg-image-opacity: 0;
      /* --section-title-faded-color: #444; */
      --bs-gap: 1rem;
      ']
); ?>

<?php echo end_sec_fixedCenteredTitle_masthead_vid(); ?>



<?php echo interior_page_nav() ?>




<?php /*  PAGE CONTENT === */ ?>






<?php echo masthead_interiorPage(
    null,
    'Connect with the alums community and learn how you can continue to support Vassar.',
    '/alums/assets/img/alums-give/0002-18-01-kr-scc-estrella-vassar-0048.jpg',
    null,
    null,
    ['img_alt_text' => 'A person with long light brown hair wearing a green sweater and blue pants stands in front of a seated audience in a large room with their hands raised, smiling at the viewer.']
);
?>

<?php /*
<?php echo sec_wideContent(
    null,
    '',
    'theme-darkcoal bg-dark py-5 text-white ',
    'animate-when-content-appears animation-fade-in text-center',
    ['bg-image-url' => '/alums/assets/img/alums-give/Vassar_Campus_6_26_17_0078.jpg',
        'bg-image-alt' => 'The Bridge for Laboratory Sciences, a large long building with huge windows standing elevated on angled pillars over greenery on the Vassar campus.']

); ?>
<p class="pt-5"><span class="text-white intro-line">Make a Gift</span></p>

<h2 class="display-2 py-5"><strong>Every</strong> alum. <strong>Any</strong> amount. <strong>Every</strong> year.</h2>

<a href="/alums/give/support-vassar" class="btn mb-5 btn-lg btn-primary arrow">Support Vassar</a>
<!--
    <p class="animation-item">Each year, Vassar aims to enroll the most</p>
<?php // echo vassar_is_awesome('animation-item'); ?>
    <p class="animation-item">first-year class possible.</p>
-->

<?php echo end_sec_wideContent(); ?>
*/ ?>



<?php echo sec_fullBleedImageColumn(
    'Fearlessly Consequential',
    '/alums/assets/img/alums-give/0049_13_04_BL_9876-cropped.jpg',
    'theme-burgundy quad-pattern has-bg section-large-title image-is-first',
    'mw-100',
    [
      'css' => '--bg-image-opacity: 0.16',
      'img_alt_text' => 'Five students under an arched ceiling smiling at the camera.'
    ]
); ?>

<div class="animate-when-content-appears animation-slide-up">
    <p class="intro-text mb-5">Your gift to Vassar can make a difference.</p>

    <?php echo cta_link(
      'http://campaign.vassar.edu/',
      'Learn more about our campaign.'
    ); ?>

</div>

<?php echo end_sec_fullBleedImageColumn(); ?>


<?php /* echo sec_fullBleedImageColumn(
    'Every Gift Matters',
    '/alums/assets/img/alums-give/0038-22-06-cs-reunion-vassar-051.jpg',
    'theme-burgundy quad-pattern has-bg section-large-title image-is-first',
    'mw-100',
    [
      'css' => '--bg-image-opacity: 0.16',
      'img_alt_text' => 'A photograph of Vassar’s Thompson Memorial Library: classical architecture with large stained-glass windows.'
    ]
); ?>

<div class="animate-when-content-appears animation-slide-up">
    <p class="intro-text mb-5"><strong>Every</strong> alum. <strong>Any</strong> amount. <strong>Every</strong> year.</p>

    <?php echo cta_link(
        '/alums/give/support-vassar/',
        'Learn about why your gift matters to Vassar'
    ); ?>

    <?php echo cta_link(
        'https://go.vassar.edu/give',
        'Explore funds and initiatives, and make a gift'
    ); ?>



</div>

<?php echo end_sec_fullBleedImageColumn();  */ ?>






<?php echo sec_fullBleedImageColumn(
    'Volunteer',
    '/alums/assets/img/alums-give/Vassar Project-11.jpg',
    'theme-cream section-large-title',
    'mw-100',
    ['img_alt_text' => 'A person in a Vassar jersey and baseball cap, sits on the ground with gloves on, planting flowers.']
); ?>

<div class="animate-when-content-appears animation-slide-up">
    <p>Deepen relationships, expand your community, and devote time and expertise to things you care about.</p>
    <?php echo cta_link(
        '/alums/give/volunteer/',
        'Explore volunteer opportunities.'
    ); ?>

</div>
<?php echo end_sec_fullBleedImageColumn(); ?>

<?php echo sec_fullBleedImageColumn(
    'Be a Mentor',
    '/alums/assets/img/alums-give/mentor/0006-19-01-kr-scc-career-clusters-vassar-0675-crop.jpg',
    'theme-charcoal image-is-first section-large-title',
    'mw-100',
    ['img_alt_text' => 'Seated person speaking to another person']
); ?>


<div class="animate-when-content-appears animation-slide-up">
    <p>Being a mentor is an extraordinary opportunity to develop positive relationships with students and help them navigate their future personally and professionally.</p>
    <?php echo cta_link(
        '/alums/give/be-a-mentor/',
        'Explore mentorship opportunities.'
    ); ?>

</div>
<?php echo end_sec_fullBleedImageColumn(); ?>



<?php echo sec_fullBleedImageColumn(
    'Hire Vassar',
    '/alums/assets/img/alums-give/0006-19-01-kr-scc-reception-vassar-0956_crop.jpg',
    'theme-cream section-large-title',
    'mw-100',
    ['img_alt_text' => 'A person with short dark hair in a blue formal jacket and a nametag that reads Mario, talks to a group of young people in a room.']
); ?>


<div class="animate-when-content-appears animation-slide-up">
    <p>Vassar students and alums are great candidates for internships and positions at any level within your organization. Keep Vassar in mind when considering your next professional vacancy.</p>
    <?php echo cta_link(
        '/alums/give/hire-vassar/',
        'Information for employers.'
    ); ?>
</div>
<?php echo end_sec_fullBleedImageColumn(); ?>


<?php /*
<?php echo sec_wideContent(
    'Every Gift Matters.',
    null,
    'theme-charcoal bg-dark presentation quad-pattern has-bg section-large-title',
    'mw-4 py-3 d-flex flex-column justify-content-center flex-md-row align-items-center gap-3 mb-4'
); ?>

<p class="intro-text mb-0">Explore funds and initiatives.</p>
<a href="https://go.vassar.edu/give" class="btn btn-primary arrow">Make a Gift</a>
<?php echo end_sec_wideContent(); ?>
*/ ?>



<?php echo site_footeralums(); ?>
