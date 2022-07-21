
<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/*  PAGE INFO ============ */

$page_title = "Explore Diversity & Inclusion";
$page_classes = "";

/*  ---------------------- */

?>


<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation(); ?>


<?php echo sec_fixedCenteredTitle_masthead(
    '<b class="slide-from-left">Explore</b>
   <b class="slide-from-right">Diversity & Inclusion</b>',
    null,
    'theme-verylightgray reveal-image',
    'mw-4',
    ['bg-image-url' => $admission_img_path.'placeholder.jpg',
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
<?php include($project_paths['main_project_root'].'/admission/inc/nav-elements/admission-explore-breadcrumb.php');?>
<?php echo end_sec_breadcrumbNav(); ?>

<?php echo toplinksNav(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/nav-elements/admission-explore-nav.php');?>
<?php echo end_sec_toplinksNav(); ?>


<?php echo masthead_interiorPage(
    'Together We Become More',
    '<span class="placeholder">We celebrate our differences and our connections and provide resources that are committed to the healthy support of EVERYONE.</span>',
    $admission_img_path.'explore/student-life/Vassar_Campus_20190508_KR_5256.jpg');
?>



<?php /*  PAGE CONTENT === */ ?>


<?php echo sec_wideContent(
    'The Class of 2025 represents',
    null,
    'theme-cream',
    'mw-4 '
); ?>


<div class="fancy-stats-container animate-when-content-appears my-5">
    <div class="col-item stat-item item-students">
        <div class="stat-item-fact">
            <div class="display-2">2,456</div>
        </div>
        <div class="stat-item-additional">
            <div class="stat-label text-primary">students from all 50 states and 79 countries</div>
        </div>
    </div>


    <div class="col-item symbol-item symbol-div">
        <!-- ÷ -->
    </div>

    <div class="col-item stat-item item-faculty">
        <div class="stat-item-fact">
            <div class="display-2">38%</div>
        </div>
        <div class="stat-item-additional">
            <div class="stat-label text-primary">students of color</div>
        </div>
    </div>

    <div class="col-item symbol-item symbol-equals">
        <!-- = -->
    </div>

    <div class="col-item stat-item item-ratio">
        <div class="stat-item-fact">
            <div class="display-2">13%</div>
            <div class="stat-label text-primary">students who are first in their families to attend college</div>
        </div>
    </div>
</div>

<?php echo end_sec_wideContent(); ?>

<?php echo sec_fullBleedImageColumn(
    'Services',
    $admission_img_path.'placeholder.jpg',
    'image-is-first theme-charcoal has-bg quad-pattern',
    ''
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <p>Vassar offers many resources to ensure all students have what they need to thrive. The college’s student-centered approach includes programs such as:</p>
    <ul>
        <li>The Jeh Vincent Johnson ALANA Cultural Center</li>
        <li>The Women’s Center</li>
        <li>The Support, Advocacy, & Violence Prevention Office</li>
    </ul>

    <?php echo cta_link(
        '#',
        '[NEED LINK] Learn more about Student Services'
    ); ?>

</div>
<?php echo end_sec_fullBleedImageColumn(); ?>


<?php echo sec_fullBleedImageColumn(
    'Feeding the Spirit',
    $admission_img_path.'placeholder.jpg',
    'theme-cream',
    ''
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <p>The Office of Religious and Spiritual Life and Contemplative Practices oversees, advises, and supports a wide range of religious and civic communities, as well as initiatives that merge Vassar’s campus with the mid-Hudson Valley community.</p>
    <p>Vassar staff members are always available for pastoral counseling and spiritual guidance, no matter where you are in your spiritual journey. </p>

    <?php echo cta_link(
        'https://www.vassarathletics.com/',
        'Learn more about Vassar Athletics'
    ); ?>

</div>
<?php echo end_sec_fullBleedImageColumn(); ?>


<!-- RELATED TOPICS ===  -->


<?php echo sec_hasColumns(
    'More in This Section',
    3,
    null,
    'relatedtopics theme-burgundy',
    ''
); ?>

<?php include($project_paths['main_project_root'].'/admission/inc/pages/explore/explore-academics.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/explore/explore-student-life.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/explore/explore-campus.php');?>


<?php echo end_sec_hasColumns(); ?>


<?php echo site_footer(); ?>
