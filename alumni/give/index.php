<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/*  PAGE INFO ============ */

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

<?php echo hamburger_navigation(); ?>

<?php echo sec_fixedCenteredTitle_masthead_vid(
    '<b class="slide-from-left">Give</b>
   <b class="slide-from-right">Back</b>',
    '727857417?h=67e1eace57',
    'theme-verylightgray reveal-image',
    'mw-4',
    ['bg-image-url' => 'https://vassartest.chuckyatsuk.com/img/alumni/give/overview/Ad_Poster_15_TT_2266.jpg',
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
    'The Many Ways to Give Back',
    'Connect with the alumni community and learn how you can continue to support Vassar.',
    'https://vassartest.chuckyatsuk.com/img/alumni/give/overview/0002-18-01-kr-scc-estrella-vassar-0048.jpg');
?>








<?php echo sec_wideContent(
    null,
    '',
    'theme-darkcoal bg-dark py-5 text-white ',
    'animate-when-content-appears animation-fade-in text-center',
    ['bg-image-url' => 'https://vassartest.chuckyatsuk.com/img/alumni/give/overview/Vassar_Campus_6_26_17_0078.jpg',
        'bg-image-alt' => 'replacealttxt']

); ?>



<p class="pt-5"><span class="text-white intro-line">Why Giving Matters</span></p>






<h2 class="display-2 py-5"><strong>Every</strong> alum. <strong>Any</strong> amount. <strong>Every</strong> year.</h2>

<button class="btn mb-5 btn-lg btn-primary arrow">Support Vassar</button>
<!--
    <p class="animation-item">Each year, Vassar aims to enroll the most</p>
<?php // echo vassar_is_awesome('animation-item'); ?>
    <p class="animation-item">first-year class possible.</p>
-->



<?php echo end_sec_wideContent(); ?>


<?php echo sec_fullBleedImageColumn(
    null,
    'https://vassartest.chuckyatsuk.com/img/alumni/give/volunteer/Vassar Project-11.jpg',
    'theme-cream',
    'mw-100'
); ?>


<div class="animate-when-content-appears animation-slide-up">
    <h2 class="display-2 border-animate mb-5 color-burgundy">Volunteer</h2>
    <p>Deepen relationships, expand your community, and devote time and expertise to things you care about.</p>

    <a href="/alumni/give/volunteer/" class="px-0 btn btn-link arrow">Explore volunteer opportunities</a>
</div>
<?php echo end_sec_fullBleedImageColumn(); ?>

<?php echo sec_fullBleedImageColumn(
    null,
    'https://vassartest.chuckyatsuk.com/img/alumni/give/mentor/0006-19-01-kr-scc-career-clusters-vassar-0675.jpg',
    'theme-burgundy quad-pattern has-bg image-is-first',
    'mw-100'
); ?>


<div class="animate-when-content-appears animation-slide-up">
    <h2 class="display-2 border-animate mb-5 ">Be a Mentor </h2>
    <p>Being a mentor is an extraordinary opportunity to develop positive relationships with students and help them navigate their future personally and professionally.</p>

    <a href="/alumni/give/be-a-mentor/" class="px-0 btn btn-link arrow">Explore mentorship opportunities</a>
</div>
<?php echo end_sec_fullBleedImageColumn(); ?>



<?php echo sec_fullBleedImageColumn(
    null,
    'https://vassartest.chuckyatsuk.com/img/alumni/give/hire/0006-19-01-kr-scc-reception-vassar-0956_crop.jpeg',
    'theme-cream',
    'mw-100'
); ?>


<div class="animate-when-content-appears animation-slide-up">
    <h2 class="display-2 border-animate mb-5  color-burgundy">Hire Vassar</h2>
    <p>Vassar students and alumni are great candidates for internships and positions at any level within your organization. Keep Vassar in mind when considering your next professional vacancy.</p>

    <a href="/alumni/give/hire-vassar/" class="px-0 btn btn-link arrow">Information for Employers</a>
</div>
<?php echo end_sec_fullBleedImageColumn(); ?>

<?php echo sec_wideContent(
    '',
    '',
    'theme-charcoal bg-dark  presentation quad-pattern has-bg',
    'mw-4 py-3 d-flex justify-content-around'
); ?>

<h2 class="h2"><strong>Every Gift Matters.</strong> Explore funds and initiatives.</h2>
<button class="btn btn-primary arrow">Make a Gift</button>
<?php echo end_sec_wideContent(); ?>



<?php echo site_footeralumni(); ?>
