<?php

include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include( $project_paths['main_project_root'] . '/functions.php');

?>

<?php

/* PAGE INFO === */

$page_info = '{
  "page_title":"Vassar Admission",
  "page_classes":"home",
  "nav_title":"Admission"
}';

/* === */
$page_info = json_decode($page_info, true);

?>


<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation(); ?>



<!-- animated pullquote goes here -->



<?php echo relatedTopics(); ?>

<?php include($project_paths['main_project_root'].'/admission/inc/pages/apply/apply.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/apply/apply-arts.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/apply/apply-financial-aid.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/apply/apply-first-year.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/apply/apply-how-to-apply.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/apply/apply-interviews.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/apply/apply-international.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/apply/apply-questbridge.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/apply/apply-transfer.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/apply/apply-veterans.php');?>

<?php include($project_paths['main_project_root'].'/admission/inc/pages/connect/connect.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/connect/connect-counselors.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/connect/connect-students.php');?>

<?php include($project_paths['main_project_root'].'/admission/inc/pages/explore/explore.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/explore/explore-academics.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/explore/explore-campus.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/explore/explore-diversity.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/explore/explore-hudson-valley.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/explore/explore-outcomes.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/explore/explore-student-life.php');?>

<?php include($project_paths['main_project_root'].'/admission/inc/pages/financial-aid/financial-aid.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/financial-aid/financial-aid-apply.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/financial-aid/financial-aid-calculators.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/financial-aid/financial-aid-forms.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/financial-aid/financial-aid-tuition.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/financial-aid/financial-aid-types-of-aid.php');?>


<?php include($project_paths['main_project_root'].'/admission/inc/pages/quick-facts/quick-facts.php');?>

<?php include($project_paths['main_project_root'].'/admission/inc/pages/visit/visit.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/visit/visit-class-visits.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/visit/visit-group-visits.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/visit/visit-in-person.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/visit/visit-on-demand.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/visit/visit-virtual-programs.php');?>


<?php echo end_sec_relatedTopics(); ?>


<?php echo site_footer(); ?>
