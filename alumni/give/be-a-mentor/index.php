<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */


$page_info = '{
  "page_title":"Be a Mentor",
  "page_classes":"",
  "feature_image":"/assets/images/placeholders/placeholder-banner.png"
}';

/* === */
$page_info = json_decode($page_info, true);

?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation(); ?>

<?php echo page_partialmasthead($page_info['feature_image'], ['image_alt_text' => 'needsalttxt']); ?>

<?php echo interior_page_nav() ?>

<?php /*  PAGE CONTENT === */ ?>



<?php echo sec_fullBleedImageColumn(
    null,
    '/assets/images/placeholders/placeholder-square.png',
    'image-is-first theme-cream',
    ''
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <p class="intro-text">Being a mentor is an extraordinary opportunity to develop positive relationships with students and help them navigate their future personally and professionally.</p>
    <p>Fill out the Volunteer Interest Form to learn more about mentoring opportunities!</p>

    <?php echo cta_link(
        'http://connect.vassar.edu/volunteer',
        'Vassar Volunteer Interest Form'
    ); ?>

</div>
<?php echo end_sec_fullBleedImageColumn(); ?>


<?php echo sec_fullBleedImageColumn(
    'Sophomore Career Connections',
    '/assets/images/placeholders/placeholder-square.png',
    '',
    ''
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <p>An award-winning, three-day, on-campus program designed to introduce second-year students to the vast array of career options available to liberal arts graduates. The program features industry-based alumni panels, identity at work conversations, networking opportunities, and more. 100+ alum and parent mentors return to campus every year for this event. </p>
    <?php echo cta_link(
        'https://www.vassar.edu/sophomore-career-connections/',
        'More about Sophomore Career Connections'
    ); ?>

</div>
<?php echo end_sec_fullBleedImageColumn(); ?>

<?php echo sec_fullBleedImageColumn(
    'Industry and Major Panels',
    '/assets/images/placeholders/placeholder-square.png',
    'image-is-first theme-cream',
    ''
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <p>The CDO regularly organizes panels that feature a variety of industries, majors, and more, often in collaboration with student organizations and academic departments.</p>

    <?php echo cta_link(
        '#',
        'More about panels'
    ); ?>

</div>
<?php echo end_sec_fullBleedImageColumn(); ?>



<?php echo sec_fullBleedImageColumn(
    'Identity at Work Meet-ups',
    '/assets/images/placeholders/placeholder-square.png',
    '',
    ''
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <p>Want to share your experience navigating the workplace based on your identity (race, class, gender, sexual orientation, international student status, religion, etc.)? The CDO regularly hosts meetups designed to connect students to alums and parents around a shared identity so that they can engage in meaningful conversations about the intersection of identity and career.</p>

    <?php echo cta_link(
        '#',
        'More about meet-Ups'
    ); ?>

</div>
<?php echo end_sec_fullBleedImageColumn(); ?>



<?php echo sec_fullBleedImageColumn(
    'Career Chats',
    '/assets/images/placeholders/placeholder-square.png',
    'image-is-first theme-cream',
    ''
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <p>For students, there is often no better inspiration for life after Vassar than to hear the stories of those who have paved the way. Consider hosting a “career chat," either virtually or on-campus. It’s a great opportunity to discuss your path and educate students about a career field, or share whatever advice or expertise you’d like to impart. </p>

    <?php echo cta_link(
        '#',
        'More about Career Chats'
    ); ?>

</div>
<?php echo end_sec_fullBleedImageColumn(); ?>


<?php echo sec_fullBleedImageColumn(
    'Alum and Parent-Led Workshops',
    '/assets/images/placeholders/placeholder-square.png',
    '',
    ''
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <p>Do you have a skill or content-area specialty that you would like to share? Past workshops led by alumni have included sessions on design thinking, tech and case interview preparation, budgeting, professional communication, and more.</p>

    <?php echo cta_link(
        '#',
        'More about workshops'
    ); ?>

</div>
<?php echo end_sec_fullBleedImageColumn(); ?>




<?php echo sec_fullBleedImageColumn(
    'Employer Info Sessions',
    '/assets/images/placeholders/placeholder-square.png',
    'image-is-first theme-cream',
    ''
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <p>Do you have a skill or content-area specialty that you would like to share? Past workshops led by alumni have included sessions on design thinking, tech and case interview preparation, budgeting, professional communication, and more.</p>

    <?php echo cta_link(
        '#',
        'More about Employer Info Sessions'
    ); ?>

</div>
<?php echo end_sec_fullBleedImageColumn(); ?>



<?php echo sec_fullBleedImageColumn(
    'Career Treks',
    '/assets/images/placeholders/placeholder-square.png',
    '',
    ''
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <p>Are you open to hosting a group of students at your workplace? The Career Development Office hosts both individual employer site visits and industry-based career treks, bringing small groups of students to employers to experience a road trip to the real world. Past treks have featured financial services, technology, publishing, and more.</p>

    <?php echo cta_link(
        '#',
        'Contact Career Development'
    ); ?>

</div>
<?php echo end_sec_fullBleedImageColumn(); ?>



<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/alumni/inc/pages/give/give-volunteer.php');?>
<?php include($project_paths['main_project_root'].'/alumni/inc/pages/give/give-hire-vassar.php');?>
<?php include($project_paths['main_project_root'].'/alumni/inc/pages/resources/resources-vassarnet.php');?>
<?php echo end_sec_relatedTopics(); ?>


<?php echo site_footer(); ?>

