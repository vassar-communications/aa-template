<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/*  PAGE INFO ============ */

$page_title = "Our Community";
$page_classes = "";

/*  ---------------------- */

?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation(); ?>




<?php echo sec_fixedCenteredTitle_masthead(
    '<b class="slide-from-left">Our</b>
   <b class="slide-from-right">Community</b>',
    null,
    'theme-verylightgray reveal-image',
    'mw-4',
    ['bg-image-url' => 'https://vassartest.chuckyatsuk.com/img/alumni/community/overview/0037-19-02-kr-ifill-sherrilyn-vassar-7892.jpg',
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
<?php echo end_sec_breadcrumbNav(); ?>
<?php echo toplinksNav(); ?>
<?php include($project_paths['main_project_root'].'/alumni/inc/nav-elements/alumni-community-nav.php');?>
<?php echo end_sec_toplinksNav(); ?>




<?php /*  PAGE CONTENT === */ ?>




<!-- visit -->


<?php echo sec_hasColumns(
    null,
    2,
    null,
    '',
    'flex-equal align-items-center d-flex flex-column-reverse flex-md-row mb-5 pb-5'
); ?>

<?php echo item_col('equal animate-when-content-appears animation-slide-up'); ?>

<h2 class="display-2">Be Active. Grow.</h2>
<p class="pb-3">Connect with fellow community members, participate in events, sign-up for mentoring/networking opportunities, and learn about all the ways to give back to Vassar.</p>
<a class="btn btn-primary">Alumni Login <i class="fa-solid fa-arrow-right"></i></a>

<?php echo end_item_col(); ?>

<?php echo item_col('animate-when-content-appears animation-slide-up equal'); ?>
<img src="https://vassartest.chuckyatsuk.com/img/0073-21-06-kr-summer-vassar-0165.jpg" />
<?php echo end_item_col(); ?>

<?php echo end_sec_hasColumns(); ?>


<!-- end visit -->




<?php echo sec_wideContent(
    'Get Connected',
    '',
    'theme-cream theme-verylightgray pb-1 presentation',
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
<a class="card mb-4" href="/alumni/community/alumni-groups">
    <img src="https://vassartest.chuckyatsuk.com/img/alumni/community/overview/0127_12_12_YEM_2467.jpg" class="card-img-top" alt="replacealttext">
    <div class="card-body">
        <h4 class="card-title h2">Alumni Groups</h4>
        <div class="card-text">
            <p>Explore Vassar's extensive network of groups and clubs.</p>

        </div>
        <div class="p-0 m-0 pt-4 d-flex w-100 justify-content-start btn btn-link"><i class="mx-0 circle fa-solid fa-arrow-right"></i></div>
    </div>
</a>
<?php echo end_item_col(); ?>

<?php echo item_col('d-flex'); ?>
<a class="card mb-4" href="/alumni/community/aavc">
    <img src="https://vassartest.chuckyatsuk.com/img/alumni/community/overview/0041-22-06-bl-reunion-vassar-6818.jpg" class="card-img-top" alt="replacealttext">
    <div class="card-body">
        <h4 class="card-title h2">Alumnae/i Association of Vassar</h4>
        <div class="card-text">
            <p>A dynamic global network of 41,000+ members!</p>

        </div>
        <div class="p-0 m-0 pt-4 d-flex w-100 justify-content-start btn btn-link"><i class="mx-0 circle fa-solid fa-arrow-right"></i></div>
    </div>
</a>
<?php echo end_item_col(); ?>
<?php echo item_col('d-flex'); ?>
<a class="card mb-4" href="/alumni/community/alumni-news">
    <img src="https://vassartest.chuckyatsuk.com/img/0073-21-06-kr-summer-vassar-0165.jpg" class="card-img-top" alt="Outcomes">
    <div class="card-body">
        <h4 class="card-title h2">Alumni News & Stories</h4>
        <div class="card-text">
            <p>Read about the latest achievements from Vassar alumni.
            </p>
        </div>
        <div class="p-0 m-0 pt-4 d-flex w-100 justify-content-start btn btn-link"><i class="mx-0 circle fa-solid fa-arrow-right"></i></div>
    </div>
</a>
<?php echo end_item_col(); ?>
<?php echo end_sec_hasColumns(); ?>
<?php echo end_sec_wideContent(); ?>

<?php echo sec_fullBleedImageColumn(
    null,
    'https://vassartest.chuckyatsuk.com/img/alumni/community/overview/Vera_Cooper_Rubin_48_SPC.jpg',
    'theme-charcoal bg-dark',
    'mw-100'
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <h2 class="display-2 mb-5">Notable Alumni</h2>
    <p>Discover remarkable Vassar alumni throughout history who have made an impact in their communities and industries throughout the world.</p>

    <a href="/alumni/community/notable-alumni/" class="px-0 btn btn-link arrow">Discover our alumni <i class="circle fa-solid fa-arrow-right"></i></a>
</div>
<?php echo end_sec_fullBleedImageColumn(); ?>

<?php echo site_footer(); ?>
