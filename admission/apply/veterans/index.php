
<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
 ?>
<?php

/*  PAGE INFO ============ */

$page_title = "For Veterans";
$page_classes = "";

/*  ---------------------- */

?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation(); ?>



<?php echo breadcrumbNav('theme-cream'); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/admission-apply-breadcrumb.php');?>
<?php echo end_sec_breadcrumbNav(); ?>

<?php echo page_textmasthead('theme-cream'); ?>


<?php echo toplinksNav(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/admission-apply-nav.php');?>
<?php echo end_sec_toplinksNav(); ?>

<?php /*  PAGE CONTENT === */ ?>



<?php echo sec_hasColumns(
    null,
    2,
    null,
    '',
    ''
); ?>

<?php echo item_col(

); ?>

<h3>Information for American Veterans</h3>
<p>Vassar actively seeks to enroll qualified veterans of the U.S. Armed Forces. Vassar fosters these connections through the Posse Veterans Program and the Yellow Ribbon Program, aimed at increasing enrollment of veterans at selective colleges and universities.</p>



<?php echo end_item_col(); ?>

<?php echo item_col(); ?>
<img src="https://uc1ff3b077742b308afc18b6f229.previews.dropboxusercontent.com/p/thumb/ABgxBgJCw7NV4rq8DyqUix5DwmeW6n2lvkEdOUpQ7dkskephFS8e3U12LRSCWw65zFBMbYryUoH8emoQ8TNVm5BllRbjYUN6jNs2RHhUq_5IEuTj1qPG8jJvAgiPC0Vlr7kI3RItdXUo5vUVkl4xJ1_eKK1TYL6foVzxWGSP-K3HbdxRUe0Nd3pObc3ZVfGhZ-Fqz_MtRJPpP41vWZTnXOCpc6zASpdxzp1DD-cCFGbTRShpHow1Q745ZhQ_5JkjEu8OIlQtsq_xpjeyDrEWAjRL6TEEXPmUa1jLKTv8hqhO3fhT_vhOBDp-RVBxVwNz5J-feWvazHHYzB8glXOCjn796Uds5gUGISLoUa14L-FpIdPYopex97ghq4JfGy-Xj4c/p.jpeg" />
<?php echo end_item_col(); ?>

<?php echo end_sec_hasColumns(); ?>


<?php echo sec_regularContent(
    null,
    null,
    ''
); ?>

<h3>Admissions</h3>

<h3>Admissions</h3>
<p>The <a class="fix" href="">Office of International Services (OIS)</a> offers a full range of resources for international students to make the Vassar experience as enjoyable and successful as possible. International students can also join the student-run Vassar International Students Association (VISA).</p>


<?php echo end_sec_regularContent(); ?>


<?php include($project_paths['main_project_root'].'/admission/inc/tmp-related-links.php');?>


<?php echo site_footer(); ?>
