<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */


$page_info = '{
  "page_title":"AAVC Board Director",
  "page_classes":"",
  "feature_image":"/alums/assets/img/alums-community/aavc/board/weisgrau-emily-aavc-alum.jpg"
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
    'Emily Weisgrau ’96',
    '/alums/assets/img/alums-community/aavc/board/weisgrau-emily-aavc-alum.jpg',
    'image-is-first theme-cream',
    '',
    ['img_alt_text' => 'A person with wavy brown and gray shoulder-length hair and glasses, wearing a dark sweater over a black and white patterned shirt, smiles at the viewer.']
); ?>

  <ul class="clean-list-with-borders">
    <li>Nominating and Governance Committee Member and Vassar Fund Committee Member</li>
    <li>(she/her/hers)</li>
    <li>Massachusetts</li>
    <li>Term of Service: 2024–2028</li>
  </ul>

<?php echo end_sec_fullBleedImageColumn(); ?>

<?php echo sec_regularContent(
    'Additional Vassar Volunteer Experience',
    null,
    '',
    ''
); ?>
<p>Member, AAVC Vassar Fund Committee, 2020–present; co-chair, Class of 1996, 2016–present; web master, Class of 1996, 2006–2011; correspondent, Class of 1996, 1996–2001; volunteer, Note-writer/Phoner, 1998–2000.</p>
<?php echo end_sec_regularContent(); ?>

<?php echo sec_regularContent(
    'Professional/Community Experience',
    'theme-extralightgray',
    '',
    ''
); ?>
<p>Founder and President, Weiswood Strategies Ltd., 2019–present; grants review panelist, National Endowment for the Arts, 2021; Awards Executive Committee member and judge coordinator, Council for Advancement and Support of Education, 2020–2021; chair, Get Out the Vote Committee, Swarthmore College, 2018–2019; Director of Advancement Communications, Swarthmore College, 2016–2019; Development Communications and Brand Manager, Haverford College, 2013–2016; grants review panelist, Pennsylvania Partners in the Arts, 2014; President, Board of Trustees, Bala House Montessori School, 2011–2013; Development Communications Specialist, Haverford College, 2009–2013; Development Committee member, Bala House Montessori School, 2009–2011; Professional Services Officer, the Philadelphia Foundation, 2005–2009; Executive Director, the Princeton Singers, 2003–2005; Director of Development, OPERA America, 2002–2003; golden lion tamarin monitor, Smithsonian National Zoo, 2001–2002; Associate Director, Foundation & Government Grants, Washington National Opera, 2000–2002; Arts Management Fellow, American University, 1998–2000; Annual Fund Coordinator, Opera Philadelphia, 1996–1998.</p>
<?php echo end_sec_regularContent(); ?>


<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/give/give-volunteer.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/resources/resources-vassar-network.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/give/give-mentor.php');?>
<?php echo end_sec_relatedTopics(); ?>


<?php echo site_footeralums(); ?>
