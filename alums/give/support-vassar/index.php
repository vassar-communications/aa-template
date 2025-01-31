<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */


$page_info = '{
  "page_title":"Support Vassar",
  "page_classes":"",
  "feature_image":"/alums/assets/img/alums-give/support/0191-19-10-ali-library-drone-vassar-vb-2017.jpg"
}';

/* === */
$page_info = json_decode($page_info, true);

?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation_alums(); ?>

<?php echo page_partialmasthead($page_info['feature_image'], ['image_alt_text' => 'An aerial view of various large buildings on Vassar Campus, one with towers made of marble on the right, and a group of brick buildings in a quadrangle on the left, all surrounded by trees. ']); ?>





<?php echo interior_page_nav() ?>

<?php /*  PAGE CONTENT === */ ?>

<?php echo sec_hasColumns(
    'The Vassar Fund <br> Every Gift Matters',
    '3',
    '<p>The Vassar Fund supports all areas of the College from financial aid and our need-blind admissions policy to faculty and student research to preserving our beautiful campus.<p>',
    'mw-inner-4 theme-cream',
    'gap-3 items-equal-height'
); ?>

  <?php echo item_col(); ?>
    <?php echo item_stat(
      'Raised to the Vassar Fund',
      $facts[$fiscal_year]['vassar_fund_total'],
      '(Fiscal Year ' . $fiscal_year .')',
      /* 'For the ' . $current_school_year . ' school year', */
      'stat-value-small',
      [
        'format_number' => false,
        'unit' => '$'
      ]
    ); ?>
  <?php echo end_item_col(); ?>

  <?php echo item_col(); ?>
    <?php echo item_stat(
      'Average need-based scholarship/grant awarded',
      $facts[$common_data_set]['avg_Vassar_need_based_scholarship_pkg_award'],
      '(Academic Year ' . $common_data_set . ')',
      'stat-value-small',
      [
        'format_number' => true,
        'unit' => '$'
      ]
    ); ?>
  <?php echo end_item_col(); ?>

  <?php echo item_col(); ?>
    <?php echo item_stat(
      'Number of students receiving need-based scholarships/grants',
      $facts[$common_data_set]['number_students_receiving_need_based_scholarships_grants'],
       '(Academic Year ' . $common_data_set . ')',
      'stat-value-small',
      [
        'format_number' => true,
        'unit' => ''
      ]
    ); ?>
  <?php echo end_item_col(); ?>

  <?php echo item_col(); ?>
    <?php echo item_stat(
      'Average class size',
      $facts['average_class_size'],
      '',
      'stat-value-small',
      [
        'format_number' => true,
        'unit' => ''
      ]
    ); ?>
  <?php echo end_item_col(); ?>

  <?php echo item_col(); ?>
    <?php echo item_stat(
      'Average GPA, class of ' . $class_stats['class_year'],
      $class_stats['average_gpa'],
      '(unweighted)',
      'stat-value-small',
      [
        'format_number' => false,
        'unit' => ''
      ]
    ); ?>
  <?php echo end_item_col(); ?>

  <?php echo item_col(); ?>
    <?php echo item_stat(
      'Percentage of students of color',
      $facts['students_of_color'],
      '',
      'stat-value-small',
      [
        'format_number' => false,
        'unit' => ''
      ]
    ); ?>
  <?php echo end_item_col(); ?>

<?php echo end_sec_hasColumns(); ?>



<?php echo sec_regularContent(
    '',
    'theme-cream mt-0 pt-0',
    ''
); ?>



<?php echo end_sec_regularContent(); ?>



<?php echo sec_regularContent(
    'Ways to Support the Vassar Fund',
    'theme-white mt-5 pt-5',
    ''
); ?>


<?php echo end_sec_regularContent(); ?>

<?php echo sec_fullBleedImageColumn(
    'Give to the Vassar Fund',
    '/alums/assets/img/alums-give/support/V1085-252.jpg',
    'theme-burgundy image-is-first',
    '',
    [
      'img_alt_text' => 'Three students in casual clothing laugh and talk together while walking across the center of Vassar’s quad.',
      'title_level' => '3'
    ]
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <p>The Vassar Fund impacts all areas of a Vassar student's experience. Your gift will bolster the College's commitment to robust financial aid packages for incoming students, dynamic faculty and student research, and vibrant student life.</p>

    <?php echo cta_link(
        'https://www.givecampus.com/c5fm3q',
        'Make a Gift.'
    ); ?>

</div>
<?php echo end_sec_fullBleedImageColumn(); ?>


<?php echo sec_fullBleedImageColumn(
    'The 1861 Loyalty Society',
    '/alums/assets/img/alums-give/support/NewBVOU_Lvg.jpg',
    'theme-cream',
    '',
    [
      'img_alt_text' => 'A large group of people sit at tables under a tent.',
      'title_level' => '3'
    ]

); ?>
<div class="animate-when-content-appears animation-slide-up">
    <p>Donors who have made gifts to the Vassar Fund for three consecutive fiscal years or have established a recurring gift at Vassar are included in the 1861 Loyalty Society. Make a gift to the Vassar Fund today to start your own giving streak and join our most loyal donors in giving back each year!</p>

    <?php echo cta_link(
        'https://connect.vassar.edu/s/1654/20/giving/landing.aspx?sid=1654&gid=2&pgid=6088',
        'Learn more about the 1861 Loyalty Society.'
    ); ?>


</div>
<?php echo end_sec_fullBleedImageColumn(); ?>


<?php echo sec_fullBleedImageColumn(
    'Generation Vassar',
    '/alums/assets/img/alums-give/support/alums square-01.jpg',
    'theme-dark-burgundy image-is-first',
    '',
    [
      'img_alt_text' => 'Four people stand with their arms around one another in summer clothing on a sunny day in front of Vassar’s Main Gate.',
      'title_level' => '3'
    ]

); ?>
<div class="animate-when-content-appears animation-slide-up">
    <p>In late February each year, the Vassar community comes together to see what it can accomplish in one week for Vassar students. Make a gift during our week-long giving campaign to help unlock matching gifts and challenges that will immediately impact Vassar students.</p>

    <?php echo cta_link(
        'https://vassar.edu/genvc',
        'Participate in Generation Vassar.'
    ); ?>

</div>
<?php echo end_sec_fullBleedImageColumn(); ?>




<?php echo sec_fullBleedImageColumn(
    'Request a Call from a Phonathon Student',
    '/alums/assets/img/alums-give/support/V1085-092.jpg',
    'theme-charcoal has-bg quad-pattern',
    '',
    [
      'img_alt_text' => 'Two people sit in chairs at a small round table with a laptop computer on it,  in front of a large glass window, while another person stands between them in front of the computer, pointing at something on the screen.',
      'title_level' => '3'
    ]
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <p>Want to hear from a current Vassar student? Find a time that works for your schedule and speak with a current Vassar student by phone or text. Our students speak to alums regularly about their Vassar experiences, updates from campus, and giving back to the Vassar Fund.</p>

    <?php echo cta_link(
        'https://docs.google.com/forms/d/e/1FAIpQLSfGBq66NtL3NblNSCVH1ItN4Zo4kBcUb-I2v3-cGb3ft_byIg/viewform',
        'Request a call from a student.'
    ); ?>

</div>
<?php echo end_sec_fullBleedImageColumn(); ?>


<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/calendar/calendar-generation-vassar.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/give/give-volunteer.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/give/give-mentor.php');?>
<?php echo end_sec_relatedTopics(); ?>


<?php echo site_footeralums(); ?>
