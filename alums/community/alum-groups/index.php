<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */


$page_info = '{
  "page_title":"Alum Groups",
  "page_classes":"",
  "feature_image":"/alums/assets/img/alums-community/alum-groups/Vassar_Reunion_2206_CS-417.jpg"
}';

/* === */
$page_info = json_decode($page_info, true);

?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation_alums(); ?>

<?php echo page_partialmasthead($page_info['feature_image'], ['image_alt_text' => 'Class of 1972 Vassar Reunion Event']); ?>

<?php echo interior_page_nav() ?>

<?php /*  PAGE CONTENT === */ ?>


<?php echo sec_fullBleedImageColumn(
    null,
    '/alums/assets/img/alums-community/alum-groups/0127_12_12_YEM_2474.jpg',
    'theme-cream image-is-first',
    '',
    ['img_alt_text' => 'two people talkig']
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <p class="intro-text">Alums have been entrepreneurial community builders since the Alumnae/i Association (AAVC) was founded in 1871.</p>
    <p>Most everyone is familiar with <em>Classes</em>, which focus on building and maintaining community between classmates and peers. <em>Vassar Clubs</em> focus on building communities where people live and work, while <em>Affinity Groups</em> focus on strengthening ties among alums who share identities or undergraduate activities, such as athletic teams and singing groups.</p>


</div>
<?php echo end_sec_fullBleedImageColumn(); ?>



<?php echo sec_fullBleedImageColumn(
    'Affinity Groups',
    '/alums/assets/img/alums-community/alum-groups/Group_of_5.jpg',
    '',
    '',
    ['img_alt_text' => 'Group of five people in Vassar College Rainbow t-shirts']
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <p>Affinity groups strengthen alums communities that center shared experiences, activities, and identities. These communities include athletic teams, singing groups, LGBTQ+, ALANA orgs, veterans, and First Gen alums (among others).</p>
    <!-- <p>If you are interested in participating in affinity groups, reach out to Sharif Rosen, Associate Director for Multicultural and Affinity Engagement at   <a href="mailto:srosen@vassar.edu">srosen@vassar.edu</a> or <a href="tel:845-437-5543">(845) 437-5443</a>.</p> -->
    <ul class="linked-list mt-4">
        <li><a href="https://www.vassar.edu/social-media-alums#affinity-groups">Follow Affinity Groups on Social</a></li>
        <li><a href="http://connect.vassar.edu/volunteer">Become an Affinity Group Volunteer</a></li>
    </ul>
</div>
<?php echo end_sec_fullBleedImageColumn(); ?>


<?php echo sec_fullBleedImageColumn(
    'Vassar Classes',
    '/alums/assets/img/alums-community/alum-groups/0041-22-06-bl-reunion-vassar-6992.jpg',
    'theme-burgundy image-is-first',
    '',
    ['img_alt_text' => 'People holding up Vassar Class of 1982 Banner at Reunion']
); ?>
<div class="animate-when-content-appears animation-slide-up">
<p>Everyone who matriculates at Vassar is a member of a Vassar Class. Classes plan reunions and mini-reunions, manage social media pages, reach out to one another about supporting the college, and enjoy each other’s updates in the Class notes section of the <em>Vassar Quarterly</em> magazine. Classes last for a lifetime and represent the largest organizing alums community.</p>

<?php /*
    <p>If you are interested in participating in Class activities, reach out to Diana Jedlicka at <a href="mailto:djedlicka@vassar.edu">djedlicka@vassar.edu</a> or <?php echo phone_number('845-437-5398'); ?>.</p>
*/ ?>


    <ul class="linked-list mt-4">
        <li><a href="/alums/calendar/reunion/">Explore Reunion</a></li>
        <li><a href="https://www.vassar.edu/social-media/class-by-year">Follow Classes on Social</a></li>
        <li><a href="https://securelb.imodules.com/s/1654/2/16/interior-ai.aspx?sid=1654&gid=2&pgid=3956&cid=6461&post_id=0">Become a Class Volunteer</a></li>
    </ul>

</div>
<?php echo end_sec_fullBleedImageColumn(); ?>



<?php echo sec_fullBleedImageColumn(
    'Vassar Clubs',
    '/alums/assets/img/alums-community/alum-groups/0080_16_07_BL_1377.jpg',
    'theme-extralightgray',
    '',
    ['img_alt_text' => 'Two smiling people standing side by side, arm in arm.']
); ?>
<div class="animate-when-content-appears animation-slide-up">
<p>Vassar Clubs serve as a catalyst to bring together the more than <?php echo $facts['number_of_alums']; ?> Vassar alums around the world, fostering lasting connections beyond the College’s gates.</p>

<?php /*    <p>If you are interested in participating in Club activities or starting a Club, reach out to Cheryl McKeever at <a href="mailto:cmckeever@vassar.edu">cmckeever@vassar.edu</a> or <a href="tel:845-437-5408">845-437-5408</a>.</p> */ ?>

    <ul class="linked-list mt-4">
        <li><a href="/alums/calendar/">Explore Upcoming Club Events</a></li>
        <li><a href="https://www.vassar.edu/social-media-alums#regional-clubs">Follow Vassar Clubs on Social</a></li>
        <li><a href="http://connect.vassar.edu/volunteer">Become a Club Volunteer</a></li>
    </ul>


</div>
<?php echo end_sec_fullBleedImageColumn(); ?>




<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/community/community-aavc.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/give/give-volunteer.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/calendar/calendar.php');?>
<?php echo end_sec_relatedTopics(); ?>


<?php echo site_footeralums(); ?>
