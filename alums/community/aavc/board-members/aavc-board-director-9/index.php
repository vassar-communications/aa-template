<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */


$page_info = '{
  "page_title":"AAVC Board Director",
  "page_classes":"",
  "feature_image":"/alums/assets/img/alums-community/aavc/board/AC-Dumlao_Headshot_Credit-AC-Dumlao_AAVC.jpg"
}';

/* === */
$page_info = json_decode($page_info, true);

?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation_alums(); ?>

<?php echo page_textmasthead('theme-dark-burgundy'); ?>

<?php echo interior_page_nav() ?>

<?php /*  PAGE CONTENT === */ ?>

<?php echo sec_fullBleedImageColumn(
    'AC Dumlao ’13',
    '/alums/assets/img/alums-community/aavc/board/AC-Dumlao_Headshot_Credit-AC-Dumlao_AAVC.jpg',
    'image-is-first theme-cream',
    '',
    ['img_alt_text' => 'A person with a closely shaven head, glasses, dark colored jacket, and a white shirt smiles at the viewer.']
); ?>

  <ul class="clean-list-with-borders">
    <li>Nominating and Governance Committee Member and Ad Hoc Diversity, Equity, and Inclusion Committee Member</li>
    <li>(they/them/he/him)</li>
    <li>New York</li>
    <li>Term of Service: 2021–2025</li>
  </ul>

<?php echo end_sec_fullBleedImageColumn(); ?>

<?php echo sec_regularContent(
    'Additional Vassar Volunteer Experience',
    null,
    '',
    ''
); ?>
<p>Director, AAVC Board of Directors, 2021–present; member, AAVC Nominating and Governance Committee, 2021–present; member, AAVC Ad Hoc Student and Young Alumnae/i Engagement Committee, 2022–2024; co-chair, LGBTQ+ Alumnae/i of Vassar Affinity Group, 2019–2023; member, AAVC Communications Advisory Committee, 2021–2022; volunteer consultant, Vassar Alumnae/i Census and Attitudinal Study, 2021; guest speaker, Vassar Asian Students’ Alliance Brown/Round/Queer/Here workshop, 2018; panelist, LGBTQ+ Alumnae/i Then and Now Reunion event, 2018.</p>
<?php echo end_sec_regularContent(); ?>

<?php echo sec_regularContent(
    'Professional/Community Experience',
    'theme-extralightgray',
    '',
    ''
); ?>
<p>Chief of staff, Athlete Ally, 2021–present; program manager, Transgender Legal Defense & Education Fund (TLDEF), 2018–2021; creator/activist & educator, Call Me They, 2017–present; name change project coordinator, TLDEF, 2017–2018; youth mentor, The Center, 2017–2018; digital advertising manager, M+R Strategic Services, 2016–2017; account manager, Magnetic (acquired by Deloitte Digital), 2015–2016; sales planner, Magnetic, 2014–2015; freelance stage manager and theater director, 2013–2015; production intern, All For One Theater, 2013–2014; stage manager, Powerhouse Theater Training Program, 2013.</p>
<?php echo end_sec_regularContent(); ?>


<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/give/give-volunteer.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/resources/resources-vassar-network.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/give/give-mentor.php');?>
<?php echo end_sec_relatedTopics(); ?>


<?php echo site_footeralums(); ?>
