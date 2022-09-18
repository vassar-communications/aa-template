
<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include_once($project_paths['main_project_root'].'/functions.php');
 ?>
<?php

/* PAGE INFO === */

$page_info = '{
  "page_title": "Transfer Applicants",
  "feature_image": "/admission/assets/images/apply/transfer/0039-21-05-kr-spring-vassar-0034-crop.jpg"
}';

/* === */

$page_info = json_decode($page_info, true);

?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation(); ?>


<style>
.bg-image-left.section--top-level-masthead .section-bg:after {
    background-position: left !important;
}
</style>

<?php echo page_partialmasthead(
  $page_info['feature_image'],
  [
    'image_alt_text' => 'A person sitting on the steps using a laptop outside Rockefeller Hall',
    'classes' => 'bg-image-left'
  ]
);
?>


<?php echo interior_page_nav() ?>


<?php /*  PAGE CONTENT === */ ?>

<?php echo sec_fullBleedImageColumn(
    'Information for Transfer Applicants',
    $admission_img_path.'apply/transfer/0198-19-11-kwe-library-vassar-vb-5415-crop.jpg',
    'image-is-first theme-cream',
    '',
    ['img_alt_text' => 'A person at a library study table taking notes.']
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <p class="mb-5">If you have earned a high school diploma or GED and have enrolled at a college or university, you will be considered a transfer applicant. Transfer admission is need aware and spots are limited.</p>

    <?php echo deadlines('Transfer Application Deadlines'); ?>

    <?php echo deadlines_item('Fall Transfer', 'March 15'); ?>
    <?php echo deadlines_item('Spring Transfer', 'November 1'); ?>

    <?php echo end_deadlines(); ?>

</div>
<?php echo end_sec_fullBleedImageColumn(); ?>


<?php echo sec_regularContent(
    'Transfer Application Checklist',
    'mw-inner-1 theme-dark-burgundy has-bg quad-pattern',
    'checklist'
); ?>


<ul class="style-checklist theme-cream">
    <li><a href="https://www.commonapp.org/">Common Application</a> and $65 application fee or a fee waiver request</li>
    <li>Transcripts from all high schools attended</li>
    <li>Transcripts from all colleges attended</li>
    <li><a href="https://www.vassar.edu/sites/default/files/2021-06/Transfer%20College%20Report_BLANK.pdf">Transfer College Report (PDF)</a> To be completed by someone at your current institution with access to your academic and disciplinary record</li>
    <li><a href="https://www.vassar.edu/sites/default/files/2021-06/TR%20Academic%20Evaluation.pdf">Transfer Academic Evaluation (PDF)</a> with a letter of recommendation from a college instructor. You may submit an additional recommendation from a second college instructor, high school counselor or teacher, or employer.</li>
    <li>Transfer Mid-Term Grade Report if you are currently enrolled in college</li>
    <li>(Optional) <a href="/admission/quick-facts#standardized-testing">Standardized Testing</a>: Students applying during the 2022–2023 cycle may choose whether or not to submit SAT/ACT scores.</li>
    <li> <a href="/admission/apply/international#english-language-proficiency">TOEFL/IELTS/Duolingo</a>: Required if English is neither your first language nor the primary language of instruction for the last three years of your education</li>
</ul>
<?php echo end_sec_regularContent(); ?>

<?php echo sec_regularContent(
    null,
    'theme-extralightgray',
    ''
); ?>


<?php echo item_iconItem(
    'Transfer Eligibility',
    'circle-info',
    'icon-on-left theme-white-border'
); ?>
<p>Students may apply for transfer as early as the first term of the first year of college. Upon enrolling to Vassar as a transfer, you must complete the equivalent of at least four full-time semesters to graduate.</p>

<?php echo end_item_iconItem(); ?>



<?php echo item_iconItem(
    'Transfer Decision Notification',
    'envelope-open-text',
    'icon-on-left theme-white-border'
); ?>
<p>Transfer applicants for the spring semester are notified of their admission decision in mid-December; applicants for the fall are notified in early May.</p>

<?php echo end_item_iconItem(); ?>


<?php echo item_iconItem(
    'Transfer Financial Aid',
    'coins',
    'icon-on-left theme-white-border'
); ?>
<p>Although Vassar meets the full demonstrated need of all admitted students who apply for financial aid at the time of their admission application, limited financial resources are available for transfer students, and the applicant pool is highly competitive. International transfer students are not eligible for financial aid.</p>

<?php echo end_item_iconItem(); ?>



<?php echo item_iconItem(
    'Transfer of Credit',
    'arrow-right-arrow-left',
    'icon-on-left theme-white-border'
); ?>
<p>Vassar offers transfer credit for courses in the liberal arts and sciences which are the approximate equivalent in content, methodology, and rigor to courses listed in the <em><a href="https://catalogue.vassar.edu/">Vassar College Catalogue</a></em>.</p>
<p>We do not award transfer credit for:</p>
<ul>
    <li>Physical education (excluding dance)</li>
    <li>Pre-professional or vocational hours</li>
    <li>Any course less than 2 semester hours</li>
    <li>Distance learning credits</li>
</ul>

<?php echo end_item_iconItem(); ?>


<?php echo item_iconItem(
    'Exploring Transfer',
    'compass',
    'icon-on-left theme-white-border'
); ?>
<p>For more than 35 years, <a href="https://offices.vassar.edu/exploring-transfer/">Exploring Transfer</a> has brought students from select community colleges to Vassar’s campus for an intensive five-week period during the summer. </p>
<?php echo end_item_iconItem(); ?>

<?php echo end_sec_regularContent(); ?>

<!-- Related Topics -->
<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/apply/apply-how-to-apply.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/apply/apply-first-year.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/apply/apply-international.php');?>
<?php echo end_sec_relatedTopics(); ?>
<?php echo site_footer(); ?>
