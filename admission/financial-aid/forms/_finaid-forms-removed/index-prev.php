
<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/*  PAGE INFO ============ */

$page_title = "Forms & Resources";
$page_classes = "";

/*  ---------------------- */

?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation(); ?>

<?php echo page_textmasthead('theme-dark-burgundy'); ?>


<?php echo breadcrumbNav('theme-cream'); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/nav-elements/admission-financialaid-breadcrumb.php');?>
<?php echo end_sec_breadcrumbNav(); ?>


<?php echo toplinksNav(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/nav-elements/admission-financialaid-nav.php');?>
<?php echo end_sec_toplinksNav(); ?>

<?php /*  PAGE CONTENT === */ ?>



<?php echo sec_regularContent(
    'Financial Aid Forms & Resources',
    '',
    '',
    ''
); ?>

<p class="mb-5">Here you will find all the forms and resources you’ll need to successfully apply for financial aid.</p>
<?php echo item_iconItem(
    'Forms',
    'file-lines',
    'icon-on-left theme-white-border'
); ?>
<ul class="linked-list">
    <li><a href="https://offices.vassar.edu/student-financial-services/wp-content/uploads/sites/57/2021/09/2022-23-business-farm-supplement.pdf">Business/Farm Supplement</a></li>
    <li><a href="https://offices.vassar.edu/student-financial-services/wp-content/uploads/sites/57/2021/09/22-23-certification-of-finances.pdf">Certification of Finances</a></li>
    <li><a href="https://offices.vassar.edu/student-financial-services/wp-content/uploads/sites/57/2021/09/2022-23-verification-statement-dependent-student.pdf">Federal Verification Worksheet: Dependent</a></li>
    <li><a href="https://offices.vassar.edu/student-financial-services/wp-content/uploads/sites/57/2021/09/2022-23-verification-statement-independent-student.pdf">Federal Verification Worksheet: Independent</a></li>
    <li><a href="https://offices.vassar.edu/student-financial-services/wp-content/uploads/sites/57/2021/09/22-23-intl-business-supplement.pdf">International Business/Farm Supplement</a></li>
    <li><a href="https://offices.vassar.edu/student-financial-services/wp-content/uploads/sites/57/2021/09/non-custodial-parent-waiver-petition.pdf">Noncustodial Parent Waiver Petition</a></li>
    <li><a href="https://offices.vassar.edu/student-financial-services/wp-content/uploads/sites/57/2021/09/22-23-parent-non-filer-statement.pdf">Non-Tax Filer Statement - Parent</a></li>
    <li><a href="https://offices.vassar.edu/student-financial-services/wp-content/uploads/sites/57/2021/09/22-23-student-non-filer-statement.pdf">Non-Tax Filer Statement - Student</a></li>
</ul>

<?php echo end_item_iconItem(); ?>


<?php echo item_iconItem(
    'Resources',
    'book',
    'icon-on-left theme-white-border'
); ?>
<ul class="linked-list">
    <li><a href="https://www.cashcourse.org/">Cash Course (Financial Literacy)</a></li>
    <li><a href="https://offices.vassar.edu/student-financial-services/wp-content/uploads/sites/57/2021/04/vassar-fin-aid-award-21-v3-3-31-21.pdf">Understanding your Financial Aid Letter</a></li>
    <li><a href="https://offices.vassar.edu/student-financial-services/financial-aid/forms/computer/">Guidelines for Computer Purchases</a></li>
    <li><a href="https://studentaid.gov/h/apply-for-aid/fafsa">FAFSA.ORG <strong>(Vassar Code: 002895)</strong></a></li>
    <li><a href="https://cssprofile.collegeboard.org/">CSS Profile <strong>(Vassar Code: 2956)</strong></a></li>
</ul>




<?php echo end_item_iconItem(); ?>


<?php echo end_sec_regularContent(); ?>




<?php echo sec_wideContent(
    'Questions about Financial Aid?',
    '<p>Email <a href="mailto:finaid@vassar.edu">finaid@vassar.edu</a> or visit Student Financial Services.</p>
',
    'theme-charcoal has-bg quad-pattern bg-dark',
    'text-center'
); ?>

<a href="https://offices.vassar.edu/student-financial-services/" class="mt-5 btn btn-light">Visit Student Financial Services</a>
<?php echo end_sec_wideContent(); ?>



<!-- Related Topics -->
<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/financial-aid/financial-aid-tuition.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/financial-aid/financial-aid-types-of-aid.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/financial-aid/financial-aid-apply.php');?>
<?php echo end_sec_relatedTopics(); ?>

<?php echo site_footer(); ?>
