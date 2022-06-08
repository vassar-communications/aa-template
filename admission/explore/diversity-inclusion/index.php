
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

<?php echo page_masthead('https://uc5613616f988a2df1a3c654edd2.previews.dropboxusercontent.com/p/thumb/ABg9a5gxatWywIso1mzeeE2znl8jP_EBTLvwRNQFOD8s9MP3T2FpDmyKUKRSjneMM6dKN39ngiS0waqdCl_leRgKFeRNAdbtL8l4VxUbZw9PfT0GFXAxb5hD3C0ARE8GD_2zGHDt011YcTnEhb6yqGOm4-qKauLyvYrxoGOdCguuE0T5qk4ZKgS12fWZh_16OFPbIjiffI1Z77RqwNxrbMlRh-2ZmDJ4OyP8kfYgogUWJpDCZDHd0qql64iRL28DccE93zZDx53W7Rphpn61Zulaolwa-JQWqkaxgs_pQ4Sxm-yZfa_c_BWxx3LPnjQbnSLEltd36BLPiIpmG3QaMwTikXV9SZbXY7XwOTp-dGXDyG60vK7QLm-Nd-BxKoBtiEjhCVMyzRN4vyft6ITawQ2GaVy-UNMnmQKw6_JCbDHLBCXkb_rI56qHiVclS4dnUw0/p.jpeg'); ?>


<?php echo breadcrumbNav(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/admission-explore-breadcrumb.php');?>
<?php echo end_sec_breadcrumbNav(); ?>

<?php echo toplinksNav(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/admission-explore-nav.php');?>
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
