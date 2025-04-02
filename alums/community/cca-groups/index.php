<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */


$page_info = '{
  "page_title":"Group Directories",
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


<?php echo sec_regularContent(
    '',
    'theme-white pt-0',
    'mw-5'
); ?>

<!-- Start Dynamic Content -->
<div id="cca-classes-description" style="display:none">
<ul>
<li>View the list of classes and class volunteers below.</li>
<li><a href="/alums/community/deceased/">View a list of deceased classmates</a>.</li>
<li><a href="/alums/community/lost/">View a list of lost classmates</a>.</li>
<li>Find contact information in the <a href="https://connect.vassar.edu/s/1654/22/interior.aspx?sid=1654&gid=2&pgid=6&cid=41#/Search/Simple">online alum directory</a> for individual class volunteers (login required).</li>
</ul>
<p><small><i><a href="https://www.vassar.edu/alums/contact">Not getting class communications?</a></i></small></p>
</div>
<div id="cca-clubs-description" style="display:none">
<p>Search below to find a Vassar Club near you.</p>
<p>Club membership is free and based on mailing address. Alums in areas with active clubs (listed below) should receive club communications. Current students or their family members may also receive relevant updates. <small><i><a href="https://www.vassar.edu/alums/contact">Not getting club communications?</a></i></small></p>
<p>If you’re outside an active club area but want to receive updates, email us at <a href="mailto:alumengagement@vassar.edu">alumengagement@vassar.edu</a> to connect with your preferred club(s).</p>
<p><a href="https://www.vassar.edu/alums/calendar/">Learn about and register for upcoming club events</a>. Find contact information in the <a href="https://connect.vassar.edu/s/1654/22/interior.aspx?sid=1654&gid=2&pgid=6&cid=41#/Search/Simple">online alum directory</a> for individual club volunteers (login required).</p>
</div>
<div id="cca-affiliates-description" style="display:none">
<p>You can find contact information for individual affiliate group officers by searching for them in the <a href="https://connect.vassar.edu/s/1654/22/interior.aspx?sid=1654&gid=2&pgid=6&cid=41#/Search/Simple">online alum directory</a> (login required).</p>
<p><small><i><a href="https://www.vassar.edu/alums/contact">Not getting affinity engagement communications?</a></i></small></p>
</div>

<link href="https://s.vassar.edu/alums_data/dist/alums-data-min.css" rel="stylesheet">
<div id="cca-layout-dummy"></div>
<script src="https://s.vassar.edu/alums_data/dist/alums-data-min.js"></script>
<!-- End Dynamic Content -->

<?php echo end_sec_regularContent(); ?>


<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/community/community-aavc.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/give/give-volunteer.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/calendar/calendar.php');?>
<?php echo end_sec_relatedTopics(); ?>


<?php echo site_footeralums(); ?>
