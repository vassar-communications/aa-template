
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
    ['bg-image-url' => $admission_img_path.'explore/academics/110619_160over90_Vassar_6232.jpg',
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
    'We celebrate our differences and our connections and provide resources that are committed to the healthy support of EVERYONE.',
    $admission_img_path.'explore/student-life/Vassar_Campus_20190508_KR_5256.jpg');
?>





<?php echo sec_hasColumns(
    null,
    2,
    null,
    'theme-cream',
    null
); ?>

<?php echo item_col(); ?>
<h2>We celebrate our differences and our connections and provide resources that are committed to the healthy support of EVERYONE. </h2>
<?php echo end_item_col(); ?>

<?php echo item_col(); ?>
<img src="https://uc30548dae366635e290422596d9.previews.dropboxusercontent.com/p/thumb/ABia0GMySEf4LJOYDAQSa5oIBKjf_Y5lP9-Imtry9XxV55oQmilIWYM3b-1s8KzeEFCMI6np92mR1HEBhKzrqaJWmu3-KrdRQMA4atHd2yriuGoADbWlHd9ecGNlDTmQjvPPz2fv1K5fUJ4TDzR_Xy4aqdelQUqVISi650AD0hqeKARtcuawW3TjtoH1sHOwhf58hZxNXnl7LLmbSMS2oZ3BGZZMhFVa7qtjfHYYxrrYKCqxu3PbyroBRqcDN6kJGAANXVDE9dWp0ZWPSMio-Vy2BWuOElNS0cA9CR5jSdaKR3UaRYwAsJMrcq_tUeLGSaIivli4yZ_-s9br8b1o-a5fxJuf239_lwLcZCarN5Mx69lthHHtQPI9n7xUPpabaEw/p.jpeg" />
<?php echo end_item_col(); ?>

<?php echo end_sec_hasColumns(); ?>


<div class="buffer"></div>
<?php /*  PAGE CONTENT === */ ?>


<!-- RELATED TOPICS ===  -->

<?php echo sec_hasColumns(
    'More in This Section',
    3,
    null,
    'related-topics-section theme-burgundy',
    ''
); ?>

<?php echo item_col('related-topics-column d-flex'); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/explore/explore-academics.php');?>
<?php echo end_item_col(); ?>

<?php echo item_col('related-topics-column d-flex'); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/explore/explore-student-life.php');?>
<?php echo end_item_col(); ?>

<?php echo item_col('related-topics-column d-flex'); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/explore/explore-campus.php');?>
<?php echo end_item_col(); ?>

<?php echo end_sec_hasColumns(); ?>


<?php echo site_footer(); ?>
