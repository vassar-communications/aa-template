<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */


$page_info = '{
  "page_title":"Be a Mentor",
  "page_classes":"",
  "feature_image":"/alumni/assets/img/alumni-give/mentor/Steve_Kauderer_001-by_Diana_Liu.jpg",
  "page_description": "Being a mentor is an extraordinary opportunity to develop positive relationships with students and help them navigate their future personally and professionally."
}';

/* === */
$page_info = json_decode($page_info, true);

?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation_alums(); ?>

<?php echo page_partialmasthead(
  $page_info['feature_image'],
  [
    'image_alt_text' => 'Professor addressing a class',
    'css' => '--bg-shim-background: rgba(0,0,0,0)'
  ]); ?>

<?php echo interior_page_nav() ?>

<?php /*  PAGE CONTENT === */ ?>



<?php echo sec_fullBleedImageColumn(
    null,
    '/alumni/assets/img/alumni-give/mentor/0006-19-01-kr-scc-career-clusters-vassar-0675-crop.jpg',
    'image-is-first theme-cream',
    '',
    [
      'img_alt_text' => 'Person with nametag that reads, Noah, speaking to another person'
    ]
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
    '/alumni/assets/img/alumni-give/mentor/0002-20-01-kr-scc-networking-vassar-0041.jpg',
    '',
    '',
    ['img_alt_text' => 'Three people speaking at a networking event']
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <p>An award-winning, three-day, on-campus program designed to introduce second-year students to the vast array of career options available to liberal arts graduates. The program features industry-based alumni panels, identity at work conversations, networking opportunities, and more. 100+ alumni and parent mentors return to campus every year for this event. </p>
    <?php echo cta_link(
        'https://www.vassar.edu/sophomore-career-connections/',
        'More about Sophomore Career Connections'
    ); ?>

</div>
<?php echo end_sec_fullBleedImageColumn(); ?>

<?php echo sec_fullBleedImageColumn(
    'Industry and Major Panels',
    '/alumni/assets/img/alumni-give/mentor/0009-18-01-cs-scc-vassar-062.jpg',
    'image-is-first theme-burgundy',
    '',
    ['img_alt_text' => 'two panelists sitting behind a table, one speaking']
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <p>The Career Development Office regularly organizes panels that feature a variety of industries, majors, and more, often in collaboration with student organizations and academic departments.</p>


</div>
<?php echo end_sec_fullBleedImageColumn(); ?>



<?php echo sec_fullBleedImageColumn(
    'Identity at<br>Work Meet-ups',
    '/alumni/assets/img/alumni-give/mentor/CDO_IBM_Design_Night_feat_Diego Encarnacion_4892.jpg',
    '',
    '',
    ['img_alt_text' => 'People in discussion at a table for a Vassar Design Night']
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <p>Want to share your experience navigating the workplace based on your identity (race, class, gender, sexual orientation, international student status, religion, etc.)? The Career Development Office regularly hosts meetups designed to connect students to alums and parents around a shared identity so that they can engage in meaningful conversations about the intersection of identity and career.</p>



</div>
<?php echo end_sec_fullBleedImageColumn(); ?>



<?php echo sec_fullBleedImageColumn(
    'Career Chats',
    '/alumni/assets/img/alumni-give/mentor/0153-19-11-kr-major-palooza-vassar-5436.jpg',
    'image-is-first theme-burgundy',
    '',
    ['img_alt_text' => 'Three people seated on a couch, one speaking, two listening']
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <p>For students, there is often no better inspiration for life after Vassar than to hear the stories of those who have paved the way. Consider hosting a “career chat,” either virtually or on-campus. It’s a great opportunity to discuss your path and educate students about a career field, or share whatever advice or expertise you’d like to impart. </p>



</div>
<?php echo end_sec_fullBleedImageColumn(); ?>


<?php echo sec_fullBleedImageColumn(
    'Alum and Parent-Led Workshops',
    '/alumni/assets/img/alumni-give/mentor/0001-18-01-kr-scc-nixon-vassar-0021.jpg',
    '',
    '',
    ['img_alt_text' => 'Speaker with a microphone at a talk']
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <p>Do you have a skill or content-area specialty that you would like to share? Past workshops led by alumni have included sessions on design thinking, tech and case interview preparation, budgeting, professional communication, and more.</p>


</div>
<?php echo end_sec_fullBleedImageColumn(); ?>




<?php echo sec_fullBleedImageColumn(
    'Employer Info Sessions',
    '/alumni/assets/img/alumni-give/mentor/Fall_2019_Analysis_Group_Employer_Info_Session-crop.jpg',
    'image-is-first theme-burgundy',
    '',
    ['img_alt_text' => 'students behind their desks in a classroom']
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <p>Does your organization hire interns or entry-level opportunities? Consider hosting an employer information session, either virtually or on-campus, to connect current students with your employer. We can also work with you to coordinate on-campus or virtual interviews.</p>

    <?php echo cta_link(
      'https://offices.vassar.edu/careers/info/employers/',
      'More information for employers'
    ); ?>


</div>
<?php echo end_sec_fullBleedImageColumn(); ?>



<?php echo sec_fullBleedImageColumn(
    'Career Treks',
    '/alumni/assets/img/alumni-give/mentor/2019_Career_Trek_to_Spotify-crop.jpg',
    '',
    '',
    ['img_alt_text' => 'Seated students watching a video screen']
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <p>Are you open to hosting a group of students at your workplace? The Career Development Office hosts both individual employer site visits and industry-based career treks, bringing small groups of students to employers to experience a road trip to the real world. Past treks have featured financial services, technology, publishing, and more.</p>

    <?php echo cta_link(
      'https://offices.vassar.edu/careers/contact/',
      'Contact Career Development'
    ); ?>

</div>
<?php echo end_sec_fullBleedImageColumn(); ?>



<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/alumni/inc/pages/give/give-volunteer.php');?>
<?php include($project_paths['main_project_root'].'/alumni/inc/pages/give/give-hire-vassar.php');?>
<?php include($project_paths['main_project_root'].'/alumni/inc/pages/resources/resources-vassarnet.php');?>
<?php echo end_sec_relatedTopics(); ?>


<?php echo site_footeralumni(); ?>
