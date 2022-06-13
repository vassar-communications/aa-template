
<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
 ?>
<?php

/*  PAGE INFO ============ */

$page_title = "Diversity & Inclusion";
$page_classes = "";

/*  ---------------------- */

?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation(); ?>




<?php echo page_masthead('https://images.unsplash.com/photo-1651035157347-e92d6a3cd958?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2066&q=80'); ?>


<?php echo breadcrumbNav('theme-cream'); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/nav-elements/admission-explore-breadcrumb.php');?>
<?php echo end_sec_breadcrumbNav(); ?>

<?php echo toplinksNav(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/nav-elements/admission-explore-nav.php');?>
<?php echo end_sec_toplinksNav(); ?>

<?php echo sec_wordByWord(
    null,
    'animate-when-content-appears space-around-image theme-dark-burgundy',
    ''
); ?>
<p>Together We Become More</p>

<?php echo end_sec_wordByWord(); ?>

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

<?php echo site_footer(); ?>
