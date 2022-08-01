<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/*  PAGE INFO === */

$page_title = "Give Back";
$page_classes = "academics-cy academics give";

/*  ---------------------- */

?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation(); ?>

<style>



    .give .equal .btn {
        color: #222;
    }

    .give .equal i.circle.fa-solid.fa-arrow-right {
        border-color: #222;
    }

    .give .equal .btn:hover i.circle.fa-solid.fa-arrow-right {
        background: #222;
        color: #fff!important;
    }


</style>


<?php echo sec_fixedCenteredTitle_masthead(
    '<b class="slide-from-left">Give</b>
   <b class="slide-from-right">Back</b>',
    null,
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

<?php echo end_sec_fixedCenteredTitle_masthead(); ?>

<?php echo breadcrumbNav('theme-cream'); ?>
<?php include($project_paths['main_project_root'].'/alumni/inc/nav-elements/alumni-breadcrumb.php');?>

<?php echo interior_page_nav() ?>




<?php /*  PAGE CONTENT === */ ?>





<?php echo sec_fullBleedImageColumn(
    null,
    'https://vassartest.chuckyatsuk.com/img/alumni/give/0135_15_11_CS_294_1.jpg',
    'theme-dark-burgundy image-is-first',
    'mw-100'
); ?>


<div class="animate-when-content-appears animation-slide-up">
    <h2 class="display-4 mb-5">Fearlessly Consequential Campaign</h2>
    <p>Your gift to Vassar can make a difference.</p>

    <a href="/alumni/resources/alumnae-house/" class="px-0 btn btn-link">Learn more about our new campaign <i class="circle fa-solid fa-arrow-right"></i></a>
</div>
<?php echo end_sec_fullBleedImageColumn(); ?>


<!-- animated pullquote goes here -->

<?php echo sec_wideContent(
    null,
    '',
    'theme-darkcoal py-5 text-white',
    'animate-when-content-appears animation-slide-up text-center',
    ['bg-image-url' => 'https://vassartest.chuckyatsuk.com/img/alumni/give/overview/Vassar_Campus_6_26_17_0078.jpg',
        'bg-image-alt' => 'The image alt text']

); ?>



<p class="pt-5"><span class="text-white intro-line">Why Giving Matters</span></p>

<h2 class="display-2 py-5"><strong>Every</strong> alum. <strong>Any</strong> amount. <strong>Every</strong> year.</h2>

<button class="btn mb-5 btn-lg btn-light">Help Support Vassar <i class=" fa-solid fa-arrow-right"></i></button>
<!--
    <p class="animation-item">Each year, Vassar aims to enroll the most</p>
<?php // echo vassar_is_awesome('animation-item'); ?>
    <p class="animation-item">first-year class possible.</p>
-->



<?php echo end_sec_wideContent(); ?>



<?php echo sec_hasColumns(
    'The Many Ways to Give Back',
    2,
    null,
    'pb-2',
    'pt-5 flex-equal align-items-center d-flex flex-column-reverse flex-md-row mb-5 pb-5'
); ?>

<?php echo item_col('equal animate-when-content-appears animation-slide-up'); ?>

<h2 class="display-3">Volunteer</h2>
<p class="pb-3">Deepen relationships, expand your community, and devote time and expertise to things you care about.</p>
<a href="/alumni/resources/alumnae-house/" class="px-0 btn btn-link">Explore volunteer opportunities <i class="circle fa-solid fa-arrow-right"></i></a>

<?php echo end_item_col(); ?>

<?php echo item_col('animate-when-content-appears animation-slide-up equal'); ?>

<img src="https://vassartest.chuckyatsuk.com/img/alumni/give/volunteer/Vassar_Project-24.jpg" />

<?php echo end_item_col(); ?>

<?php echo end_sec_hasColumns(); ?>

<?php echo sec_hasColumns(
    null,
    2,
    null,
    'py-2',
    'flex-equal align-items-center d-flex flex-column-reverse flex-md-row mb-5 pb-5'
); ?>



<?php echo item_col('animate-when-content-appears animation-slide-up equal'); ?>

<img src="https://vassartest.chuckyatsuk.com/img/alumni/give/mentor/0006-19-01-kr-scc-career-clusters-vassar-0675.jpg" />

<?php echo end_item_col(); ?>

<?php echo item_col('equal animate-when-content-appears animation-slide-up'); ?>

<h2 class="display-3">Be a Mentor</h2>
<p class="pb-3">Being a mentor is an extraordinary opportunity to develop positive relationships with students and help them navigate their future personally and/or professionally.</p>
<a href="/alumni/resources/alumnae-house/" class="px-0 btn btn-link">Explore mentorship opportunities <i class="circle fa-solid fa-arrow-right"></i></a>

<?php echo end_item_col(); ?>



<?php echo end_sec_hasColumns(); ?>


<?php echo sec_hasColumns(
    null,
    2,
    null,
    'py-2',
    'flex-equal align-items-center d-flex flex-column-reverse flex-md-row mb-5 pb-5'
); ?>

<?php echo item_col('equal animate-when-content-appears animation-slide-up'); ?>

<h2 class="display-3">Hire Vassar</h2>
<p class="pb-3">Vassar students and alums are great candidates for internships and multi-level positions within your organization. Keep Vassar in mind when considering your next professional vacancy.</p>
<a href="/alumni/resources/alumnae-house/" class="px-0 btn btn-link">Information for Employers <i class="circle fa-solid fa-arrow-right"></i></a>

<?php echo end_item_col(); ?>

<?php echo item_col('animate-when-content-appears animation-slide-up equal'); ?>

<img src="https://vassartest.chuckyatsuk.com/img/alumni/give/hire/0006-19-01-kr-scc-reception-vassar-0956.jpg" />

<?php echo end_item_col(); ?>

<?php echo end_sec_hasColumns(); ?>


<?php echo sec_wideContent(
    '',
    '',
    'theme-charcoal  presentation quad-pattern has-bg',
    'mw-4 d-flex justify-content-around'
); ?>

<h2 class="h2"><strong>Every Gift Matters.</strong> Explore funds and initatives.</h2>
<button class="btn btn-light">Make a Gift <i class="circle fa-solid fa-arrow-right"></i></button>
<?php echo end_sec_wideContent(); ?>



<?php echo site_footeralumni(); ?>
