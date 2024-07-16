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
    ['img_alt_text' => 'Two people stand with their arms around one another, talking, one with short light brown hair wearing a grey formal jacket and the other with short dark hair and a bright pink jacket.']
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <p class="intro-text">Alums have been entrepreneurial community builders since the Alumnae/i Association (AAVC) was founded in 1871.</p>
    <p>Most everyone is familiar with <em><a href="#classes">Classes</a></em>, which focus on building and maintaining community between classmates and peers. <em><a href="#clubs">Vassar Clubs</a></em> focus on building communities where people live and work, while <em><a href="#affinity">Affinity Engagement</a></em> focuses on strengthening ties among alums who share identities or undergraduate activities, such as athletic teams and singing groups.</p>


</div>
<?php echo end_sec_fullBleedImageColumn(); ?>

<a id="classes"></a>
<?php echo sec_fullBleedImageColumn(
    'Vassar Classes',
    '/alums/assets/img/alums-community/alum-groups/0041-22-06-bl-reunion-vassar-6992.jpg',
    'theme-burgundy',
    '',
    ['img_alt_text' => 'People holding up Vassar Class of 1982 Banner at Reunion.']
); ?>
<div class="animate-when-content-appears animation-slide-up">
<p>Everyone who matriculates at Vassar is a member of a Vassar Class. Classes plan reunions and mini-reunions, manage social media pages, reach out to one another about supporting the College, and enjoy each other’s updates in the Class Notes section of the <em>Vassar Quarterly</em> magazine. Classes last for a lifetime and represent the largest organizing alums community.</p>
    <p>If you are interested in participating in Class activities, reach out to Diana Jedlicka at <a href="mailto:djedlicka@vassar.edu">djedlicka@vassar.edu</a> or <?php echo phone_number('845-437-5398'); ?>.</p>


    <ul class="linked-list mt-4">
        <li><a href="/alums/calendar/reunion/">Explore Reunion</a></li>
        <li><a href="https://securelb.imodules.com/s/1654/2/16/interior-ai.aspx?sid=1654&gid=2&pgid=3956&cid=6461&post_id=0">Become a Class Volunteer</a></li>
        <li><a href="/alums/community/cca-groups/#class">Connect with Your Vassar Class</a></li>
    </ul>

</div>
<?php echo end_sec_fullBleedImageColumn(); ?>


<a id="clubs"></a>
<?php echo sec_fullBleedImageColumn(
    'Vassar Clubs',
    '/alums/assets/img/alums-community/alum-groups/0080_16_07_BL_1377.jpg',
    'theme-extralightgray image-is-first',
    '',
    ['img_alt_text' => 'Two smiling people standing side by side, arm in arm.']
); ?>
<div class="animate-when-content-appears animation-slide-up">
<p>Vassar Clubs serve as a catalyst to bring together the more than <?php echo $facts['number_of_alums']; ?> Vassar alums around the world, fostering lasting connections beyond the College’s gates.</p>
<p>If you are interested in participating in Club activities or starting a Club, reach out to Cheryl McKeever at <a href="mailto:cmckeever@vassar.edu">cmckeever@vassar.edu</a> or <a href="tel:+18454375408">(845) 437-5408</a>.</p>

    <ul class="linked-list mt-4">
        <li><a href="/alums/community/cca-groups/#club">Find an Active Vassar Club</a></li>
        <li><a href="/alums/calendar/">Explore Upcoming Club Events</a></li>
        <li><a href="https://www.vassar.edu/social-media-alums#regional-clubs">Follow Vassar Clubs on Social</a></li>
        <li><a href="https://securelb.imodules.com/s/1654/2/16/interior-ai.aspx?sid=1654&gid=2&pgid=3956&cid=6461&post_id=0">Become a Club Volunteer</a></li>
    </ul>


</div>
<?php echo end_sec_fullBleedImageColumn(); ?>



<div id="affinity"></div>
<?php echo sec_fullBleedImageColumn(
    'Affinity Engagement',
    '/alums/assets/img/alums-community/alum-groups/52960663255_044d75e46c_o.jpg',
    '',
    '',
    ['img_alt_text' => 'A group of three people in casual attire, standing side by side, smile at the viewer.']
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <p>Vassar’s Director of Affinity Engagement strives to create spaces where Vassar alums feel visible, connected, and celebrated. We aim to engage a diverse range of alums, including alum-athletes, FirstGen, performing artists, veterans, international alums, STEM majors, as well as individuals who identify as Asian, Asian American, South Asian, Native Hawaiian, and Pacific Islander, Black/African American, Latiné, Native American and Indigenous, and LGBTQI+. Through tailored initiatives and events, we strive to create spaces where alums with shared affinities find meaningful connections and a sense of belonging within the Vassar community.</p>
    <p>We invite you to bring your creativity and ideas to help shape our programming. Your suggestions will play a vital role in enhancing the experiences we offer and ensuring they resonate with our diverse alum community. Join us in crafting events that celebrate and unite our 41,000+ strong Vassar alum network.</p>
    <p>For more information or to share your ideas, contact the Vassar Affinity Engagement team at <a href="mailto:vassaraffinity@vassar.edu">vassaraffinity@vassar.edu</a> or <a href="tel:845-437-5515">(845) 437-5515</a>.</p>
    <ul class="linked-list mt-4">
        <li><a href="https://www.vassar.edu/social-media-alums#affinity-groups">Follow Affinity Engagement on Social</a></li>
        <li><a href="https://securelb.imodules.com/s/1654/2/16/interior-ai.aspx?sid=1654&gid=2&pgid=3956&cid=6461&post_id=0">Share Your Ideas for Affinity Engagement Events</a></li>
        <li><a href="https://securelb.imodules.com/s/1654/22/events.aspx?sid=1654&gid=2&pgid=5370&cid=8841&post_id=0">Receive Affinity Engagement Communications</a></li>
        <li><a href="/alums/community/cca-groups/#affinity">Find Affinity Engagement Groups</a></li>
    </ul>
</div>
<?php echo end_sec_fullBleedImageColumn(); ?>






<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/community/community-aavc.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/give/give-volunteer.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/calendar/calendar.php');?>
<?php echo end_sec_relatedTopics(); ?>


<?php echo site_footeralums(); ?>
