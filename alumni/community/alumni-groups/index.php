<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */


$page_info = '{
  "page_title":"Alumni Groups",
  "page_classes":"",
  "feature_image":"/assets/images/placeholder-banner.png"
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
    'theme-cream image-is-first',
    ''
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <p class="intro-text">Alumni have been entrepreneurial community-builders since the Alumnae/i Association (AAVC) was founded in 1871.</p>
    <p>Most everyone is familiar with “Classes,” which focus on building and maintaining community between classmates and peers. Vassar Clubs focus on building communities where people live and work, while Affinity Groups focus on strengthening ties among alums who share identities or undergraduate activities, such as athletic teams and singing groups.</p>


</div>
<?php echo end_sec_fullBleedImageColumn(); ?>



<?php echo sec_fullBleedImageColumn(
    'Affinity Groups',
    '/assets/images/placeholders/placeholder-square.png',
    'theme-burgundy',
    ''
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <p>Affinity groups strengthen alumni communities that center shared experiences, activities, and identities. These communities include athletic teams, singing groups, LGBTQ+, ALANA orgs, veterans, and First Gen alums (among others).</p>

    <?php echo cta_link(
        '#',
        'Explore Current Affinity Groups '
    ); ?>

</div>
<?php echo end_sec_fullBleedImageColumn(); ?>


<?php echo sec_fullBleedImageColumn(
    'Vassar Classes',
    '/assets/images/placeholders/placeholder-square.png',
    '',
    ''
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <p>Everyone who matriculates at Vassar is a member of a Vassar Class. Classes plan reunions and mini-reunions, manage social media pages, reach out to one another about supporting the college, and enjoy each other’s updates in the Class notes section of the Vassar: The Vassar Quarterly magazine. Classes last for a lifetime and represent the largest organizing alumni community.</p>

    <?php echo cta_link(
        '#',
        'Explore Current Vassar Classes'
    ); ?>

</div>
<?php echo end_sec_fullBleedImageColumn(); ?>

<?php echo sec_regularContent(
    'Getting Involved with Classes',
    '',
    ''
); ?>

<p>If you are interested in participating in Class activities, reach out to Diana Jedlicka at <a href="mailto:djedlicka@vassar.edu">djedlicka@vassar.edu</a> or <a href="tel:845-437-5398">(845)437-5398</a>.</p>
<ul class="linked-list">
    <li><a href="#">Explore Upcoming Reunions</a></li>
    <li><a href="#">Follow Classes on Social</a></li>
    <li><a href="#">Become a Class Volunteer</a></li>
</ul>




<?php echo end_sec_regularContent(); ?>


<?php echo sec_fullBleedImageColumn(
    'Vassar Clubs',
    '/assets/images/placeholders/placeholder-square.png',
    'theme-burgundy',
    ''
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <p>Vassar Clubs serve as a catalyst to bring together the more than 41,000 Vassar alumni around the world, fostering lasting connections beyond the College's gates.</p>

    <?php echo cta_link(
        '#',
        'Explore Current Vassar Clubs'
    ); ?>

</div>
<?php echo end_sec_fullBleedImageColumn(); ?>



<?php echo sec_regularContent(
    'Getting Involved with Vassar Clubs',
    'theme-burgundy',
    ''
); ?>
<p>If you are interested in participating in Club activities or starting a Club, reach out to Cheryl McKeever at <a href="mailto:cmckever@vassar.edu">cmckever@vassar.edu</a> or <a href="tel:845-437-5408">845-437-5408</a>.</p>
<ul class="linked-list">
    <li><a href="#">Explore Upcoming Club Events</a></li>
    <li><a href="#">Follow Vassar Clubs on Social</a></li>
    <li><a href="#">Become a Club Volunteer</a></li>
</ul>
<?php echo end_sec_regularContent(); ?>

<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/alumni/inc/pages/community/community-aavc.php');?>
<?php include($project_paths['main_project_root'].'/alumni/inc/pages/give/give-volunteer.php');?>
<?php include($project_paths['main_project_root'].'/alumni/inc/pages/calendar/calendar.php');?>
<?php echo end_sec_relatedTopics(); ?>


<?php echo site_footer(); ?>

