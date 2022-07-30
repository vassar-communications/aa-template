<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/*  PAGE INFO ============ */


$page_info = '{
  "page_title":"Alumni Resources",
  "page_classes":"",
  "feature_image":"/assets/images/placeholder-banner.png"
}';

/* === */
$page_info = json_decode($page_info, true);

?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation(); ?>




<?php echo sec_fixedCenteredTitle_masthead(
    '<b class="slide-from-left">Alumni</b>
   <b class="slide-from-right">Resources</b>',
    null,
    'theme-verylightgray reveal-image',
    'mw-4',
    ['bg-image-url' => 'https://vassartest.chuckyatsuk.com/img/alumni/resources/0640_Vassar College_exteriors_campus life_Oct 2019_JA.JPG',
        'bg-image-alt' => 'replacethisalttext',
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






<?php /*  PAGE CONTENT === */ ?>


<!-- visit -->


<?php echo masthead_interiorPage(
    'What’s not to love?',
    'Vassar alumni are entitled to a whole host of services and benefits … automatically.',
    'https://vassartest.chuckyatsuk.com/img/alumni/resources/Sunset_Lake_15_TT_1519.jpg');
?>

<?php echo sec_regularContent(
    'Explore Resources',
    'theme-dark-burgundy',
    '',
    ''
); ?>
<p>Access career development opportunities; take advantage of a top-notch travel program that allows you to traverse the globe with Vassar professors knowledge about the various regions, their history and culture; and get goodies like a dedicated Vassar email and a lifetime subscription to VQ.</p>
<?php echo end_sec_regularContent(); ?>


<?php echo sec_wideContent(
    null,
    '',
    'theme-dark-burgundy pb-1 presentation',
    'mw-4'
); ?>


<?php echo sec_hasColumns(
    null,
    3,
    null,
    '',
    ''
); ?>

<?php echo item_col('d-flex'); ?>
<a class="card mb-4" href="#">
    <img src="https://vassartest.chuckyatsuk.com/img/alumni/community/overview/0127_12_12_YEM_2467.jpg" class="card-img-top" alt="replacealttext">
    <div class="card-body text-dark">
        <h4 class="card-title h2">Alumni Directory</h4>
        <div class="card-text">
            <p>Log into your account to view the full directory.</p>

        </div>
        <div class="p-0 m-0 pt-4 d-flex w-100 justify-content-start align-items-center"><strong>Access directory</strong> <i class="ml-3 circle fa-solid fa-arrow-right"></i></div>
    </div>
</a>
<?php echo end_item_col(); ?>

<?php echo item_col('d-flex'); ?>
<a class="card mb-4" href="/alumni/community/aavc">
    <img src="https://vassartest.chuckyatsuk.com/img/alumni/resources/vassar-network/0036-22-06-kr-reunion-vassar-0148.jpg" class="card-img-top" alt="replacealttext">
    <div class="card-body text-dark">
        <h4 class="card-title h2">The Vassar Network</h4>
        <div class="card-text">
            <p>Join the global Vassar community and connect with alums around the world.</p>

        </div>
        <div class="p-0 m-0 pt-4 d-flex w-100 justify-content-start align-items-center"><strong>Explore the Vassar Network</strong> <i class="ml-3 circle fa-solid fa-arrow-right"></i></div>
    </div>
</a>
<?php echo end_item_col(); ?>

<?php echo item_col('d-flex'); ?>
<a class="card mb-4" href="/alumni/community/alumni-news">
    <img src="/assets/images/placeholders/main-placeholder.jpg" class="card-img-top" alt="Outcomes">
    <div class="card-body text-dark">
        <h4 class="card-title h2">Career Support</h4>
        <div class="card-text">
            <p>Helping alumni seek their next opportunity for personal growth and professional development.
            </p>
        </div>
        <div class="p-0 m-0 pt-4 d-flex w-100 justify-content-start align-items-center"><strong>Visit Career Services</strong> <i class="ml-3 circle fa-solid fa-arrow-right"></i></div>
    </div>
</a>
<?php echo end_item_col(); ?>

<?php echo item_col('d-flex'); ?>
<a class="card mb-4" href="/alumni/community/alumni-news">
    <img src="https://vassartest.chuckyatsuk.com/img/alumni/resources/grants/time-out-awardee-bishop-joseph-tolton-89_0829.jpg" class="card-img-top" alt="Outcomes">
    <div class="card-body text-dark">
        <h4 class="card-title h2">Grants & Fellowships</h4>
        <div class="card-text">
            <p>Explore grant and fellowship opportunities available to Vassar alumni.
            </p>
        </div>
        <div class="p-0 m-0 pt-4 d-flex w-100 justify-content-start align-items-center"><strong>Learn more</strong> <i class="ml-3 circle fa-solid fa-arrow-right"></i></div>
    </div>
</a>
<?php echo end_item_col(); ?>

<?php echo item_col('d-flex'); ?>
<a class="card mb-4" href="/alumni/community/alumni-news">
    <img src="https://vassartest.chuckyatsuk.com/img/alumni/resources/college-search/0036-22-06-kr-reunion-vassar-0040.jpg" class="card-img-top" alt="Outcomes">
    <div class="card-body text-dark">
        <h4 class="card-title h2">College Search 101</h4>
        <div class="card-text">
            <p>This program provides valuable, general information to your family as your college search process begins.
            </p>
        </div>
        <div class="p-0 m-0 pt-4 d-flex w-100 justify-content-start align-items-center"><strong>Learn more</strong> <i class="ml-3 circle fa-solid fa-arrow-right"></i></div>
    </div>
</a>
<?php echo end_item_col(); ?>

<?php echo item_col('d-flex'); ?>
<a class="card mb-4" href="/alumni/community/alumni-news">
    <img src="https://vassartest.chuckyatsuk.com/img/alumni/resources/campus-resources/110619_160over90_Vassar_7814.jpg" class="card-img-top" alt="Outcomes">
    <div class="card-body text-dark">
        <h4 class="card-title h2">On Campus Resources</h4>
        <div class="card-text">
            <p>Our 1,000-acre campus holds many treasures.
            </p>
        </div>
        <div class="p-0 m-0 pt-4 d-flex w-100 justify-content-start align-items-center"><strong>Learn more</strong> <i class="ml-3 circle fa-solid fa-arrow-right"></i></div>
    </div>
</a>
<?php echo end_item_col(); ?>
<?php echo end_sec_hasColumns(); ?>
<?php echo end_sec_wideContent(); ?>

<?php echo sec_fullBleedImageColumn(
    null,
    'https://vassartest.chuckyatsuk.com/img/alumni/resources/alumnae-house/Alumnae_House_06_CB_08.jpg',
    'theme-charcoal bg-dark quad-pattern has-bg',
    'mw-100'
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <h2 class="display-2 mb-5">Alumnae House</h2>
    <p>With a reverence for the past and a nod towards the future, Alumnae House strives to be a welcoming home for all Vassar students and alums.</p>

    <a href="/alumni/resources/alumnae-house/" class="px-0 btn btn-link arrow">Visit Alumnae House <i class="circle fa-solid fa-arrow-right"></i></a>
</div>
<?php echo end_sec_fullBleedImageColumn(); ?>



<?php echo site_footer(); ?>
