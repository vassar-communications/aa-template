
<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
 ?>
<?php

/*  PAGE INFO ============ */

$page_title = "Art, Music, and Dance Portfolios";
$page_classes = "";

/*  ---------------------- */

?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation(); ?>



<?php echo page_textmasthead('theme-dark-burgundy'); ?>

<?php echo breadcrumbNav('theme-cream'); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/nav-elements/admission-apply-breadcrumb.php');?>
<?php echo end_sec_breadcrumbNav(); ?>


<?php echo toplinksNav(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/nav-elements/admission-apply-nav.php');?>
<?php echo end_sec_toplinksNav(); ?>


<?php /*  PAGE CONTENT === */ ?>


<?php echo sec_hasColumns(
    null,
    2,
    null,
    'animate-when-content-appears animation-slide-up',
    'flex-equal align-items-center d-flex flex-column-reverse flex-md-row'
); ?>

<?php echo item_col('equal'); ?>
<h3>Arts Portfolios</h3>
<p>The arts portfolio is an optional opportunity for first-year applicants to share a well-developed talent or accomplishment in music, art, or dance, if you intend to further pursue that passion at Vassar. Submissions will be evaluated by faculty in the relevant discipline and their evaluations will be shared with the Office of Admission.</p>



<?php echo end_item_col(); ?>

<?php echo item_col('equal'); ?>
<img src="https://uc47ac64b0907ec3250f531e9267.previews.dropboxusercontent.com/p/thumb/ABgk6BB8TPTISuWhhMjRGjtcjuabB8CeEanttvis03esFA487-BcNlTRErqZD7Bz2anh101QaG_W-ecgfaQOAP2oT2JRMM6Gt57UZEVeex8qvA3ZYrxq5OFIrM-qJyEMk9ZgVqrvbKL7hqnLR9DLrvt0EpiNNmshd8O6OfxGLG-WzV5W7G0vJWHXQIWHPtp7xGcXHuotO4LCmvI1Hj62AqmxCjDxvbtSctEjufI-YLUCF7pswJlRO6xrv3pJR77TmjKZFJATTf_X3RHdCkoUScTYpgjzPrG7_pLsjBlc2ZBC81d4O3l56Y-5QI3zHi0rXVExQaXSgWERDnViOo96E0HnwikiYDQIfYAHzz4xMmiONHwN46BBIyQkNjs4yUws7o4/p.jpeg" />
<?php echo end_item_col(); ?>

<?php echo end_sec_hasColumns(); ?>

<!-- Related Topics -->
<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/apply/apply-how-to-apply.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/apply/apply-international.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/apply/apply-transfer.php');?>
<?php echo end_sec_relatedTopics(); ?>
<?php echo site_footer(); ?>