<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */


$page_info = '{
  "page_title":"Be a Mentor",
  "page_classes":"",
  "feature_image":"/alums/assets/img/alums-give/mentor/Steve_Kauderer_001-by_Diana_Liu.jpg",
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
    'image_alt_text' => 'A person with short dark hair and a formal jacket speaks to a seated group of people in a classroom from behind a podium.',
    'css' => '--bg-shim-background: rgba(0,0,0,0)'
  ]); ?>

<?php echo interior_page_nav() ?>

<?php /*  PAGE CONTENT === */ ?>



<?php echo sec_fullBleedImageColumn(
    null,
    '/alums/assets/img/alums-give/mentor/0006-19-01-kr-scc-career-clusters-vassar-0675-crop.jpg',
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
        'https://connect.vassar.edu/volunteer',
        'Vassar Volunteer Interest Form'
    ); ?>

</div>
<?php echo end_sec_fullBleedImageColumn(); ?>


<?php echo sec_fullBleedImageColumn(
    'Sophomore Career Connections',
    '/alums/assets/img/alums-give/mentor/0002-20-01-kr-scc-networking-vassar-0041.jpg',
    'theme-burgundy',
    '',
    ['img_alt_text' => 'Four people, standing in a circle, speaking and gesturing to each other.']
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <p>An award-winning, three-day, on-campus program designed to introduce second-year students to the vast array of career options available to liberal arts graduates. The program features industry-based alums panels, identity at work conversations, networking opportunities, and more. 100+ alums and parent mentors return to campus every year for this event. </p>
    <?php echo cta_link(
        'https://www.vassar.edu/sophomore-career-connections/',
        'Learn more about Sophomore Career Connections.'
    ); ?>

</div>
<?php echo end_sec_fullBleedImageColumn(); ?>

<?php echo sec_fullBleedImageColumn(
    'Industry and Major Panels',
    '/alums/assets/img/alums-give/mentor/0009-18-01-cs-scc-vassar-062.jpg',
    'image-is-first',
    '',
    ['img_alt_text' => 'Two people sit at a table, one wearing a blue blazer and jeans, the other wearing a tie and beige suit jacket, both wearing name tags, while one of them speaks to someone outside of view.']
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <p>The Center for Career Education regularly organizes panels that feature a variety of industries, majors, and more, often in collaboration with student organizations and academic departments.</p>

    <?php echo cta_link(
      'mailto:cce@vassar.edu',
      'Contact the Center for Career Education.'
    ); ?>


</div>
<?php echo end_sec_fullBleedImageColumn(); ?>



<?php echo sec_fullBleedImageColumn(
    'Career Chats',
    '/alums/assets/img/alums-give/mentor/be-mentor-52632362530_a164f2a771_o.jpg',
    'theme-burgundy',
    '',
    ['img_alt_text' => 'Two people seated at a round table with papers on it, talking to one another, in a room with another table of people behind them.']
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <p>For students, there is often no better inspiration for life after Vassar than to hear the stories of those who have paved the way. Consider hosting a Career Chat, either virtually or on-campus. It’s a great opportunity to discuss your path and educate students about a career field, or share whatever advice or expertise you’d like to impart. </p>

    <?php echo cta_link(
      'mailto:cce@vassar.edu',
      'Contact the Center for Career Education.'
    ); ?>


</div>
<?php echo end_sec_fullBleedImageColumn(); ?>


<?php echo sec_fullBleedImageColumn(
    'Identity at<br>Work Meet-ups',
    '/alums/assets/img/alums-give/mentor/CDO_IBM_Design_Night_feat_Diego Encarnacion_4892.jpg',
    'image-is-first',
    '',
    ['img_alt_text' => 'A group of young people are seated around a table, talking, with a projection behind them that reads Vassar Design Night.']
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <p>Want to share your experience navigating the workplace based on your identity (race, class, gender, sexual orientation, international student status, religion, etc.)? The Center for Career Education regularly hosts meetups designed to connect students to alums and parents around a shared identity so that they can engage in meaningful conversations about the intersection of identity and career.</p>

    <?php echo cta_link(
      'mailto:cce@vassar.edu',
      'Contact the Center for Career Education.'
    ); ?>


</div>
<?php echo end_sec_fullBleedImageColumn(); ?>



<?php echo sec_fullBleedImageColumn(
    'Alum and Parent-Led Workshops',
    '/alums/assets/img/alums-give/mentor/0001-18-01-kr-scc-nixon-vassar-0021.jpg',
    'theme-burgundy',
    '',
    ['img_alt_text' => 'A person with short dark hair wearing a black jacket and a microphone, gesturing and speaking to a group.']
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <p>Do you have a skill or content-area specialty that you would like to share? Past workshops led by alums have included sessions on design thinking, tech and case interview preparation, budgeting, professional communication, and more.</p>

    <?php echo cta_link(
      'mailto:cce@vassar.edu',
      'Contact the Center for Career Education.'
    ); ?>


</div>
<?php echo end_sec_fullBleedImageColumn(); ?>




<?php echo sec_fullBleedImageColumn(
    'Career Treks',
    '/alums/assets/img/alums-give/mentor/2019_Career_Trek_to_Spotify-crop.jpg',
    'image-is-first',
    '',
    ['img_alt_text' => 'A group of students sit on cushioned chairs facing a video screen and a person in a black shirt and blue jeans seated in a chair.']
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <p>Are you open to hosting a group of students at your workplace? The Center for Career Education hosts both individual employer site visits and industry-based career treks, bringing small groups of students to employers to experience a road trip to the real world. Past treks have featured financial services, technology, publishing, and more.</p>

    <?php echo cta_link(
      'mailto:cce@vassar.edu',
      'Contact the Center for Career Education.'
    ); ?>

</div>
<?php echo end_sec_fullBleedImageColumn(); ?>



<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/give/give-volunteer.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/give/give-hire-vassar.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/resources/resources-vassarnet.php');?>
<?php echo end_sec_relatedTopics(); ?>


<?php echo site_footeralums(); ?>
