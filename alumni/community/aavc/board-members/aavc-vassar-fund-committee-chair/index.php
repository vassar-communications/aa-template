<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */


$page_info = '{
  "page_title":"Vassar Fund Committee Chair",
  "page_classes":"",
  "feature_image":"/alumni/assets/img/alumni-community/aavc/board/polys-kat-mills-aavc-alum-001.jpg"
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
    'Katherine “Kat” Mills Polys ’93',
    '/alumni/assets/img/alumni-community/aavc/board/polys-kat-mills-aavc-alum-001.jpg',
    'image-is-first theme-cream',
    '',
    ['img_alt_text' => 'Katherine “Kat” Mills Polys ’93']
); ?>

  <ul class="clean-list-with-borders">
    <li>Vassar Fund Committee Chair</li>
    <li>(she/her/hers)</li>
    <li>Virginia</li>
    <li>Term of Service: 2022–2026</li>
  </ul>

<?php echo end_sec_fullBleedImageColumn(); ?>

<?php echo sec_regularContent(
    'Additional Vassar Volunteer Experience',
    null,
    '',
    ''
); ?>
<p>Mentor, Sophomore Career Connections, 2022; member, AAVC Vassar Fund Committee, 2018–2022; fund chair, Class of 1993, 2017–present; chair, Class of 1993 Reunion Gift, 2015–2017; chair, Class of 1993, 2013–2015; chair, Class of 1993 Reunion Gift, 2012–2013; co-chair, Class of 1993 Reunion, 2012–2013; chair, Class of 1993, 2008–2012; notewriter or phoner, Phonathon Program, 2004–2011; Secretary, Class of 1993, 2003-2008; member, Reunion Committee, Class of 1993, 2003-2008.</p>
<?php echo end_sec_regularContent(); ?>

<?php echo sec_regularContent(
    'Professional/Community Experience',
    'theme-extralightgray',
    '',
    ''
); ?>
<p>Independent Musician and Owner, The Kat Mills Show, 2000–present; Team Member, Blacksburg Interfaith Food Pantry, 2019–present; Leader/Facilitator, La Leche League International, Blacksburg, VA, 2012–2017; Vestry, Christ Episcopal Church, Blacksburg, VA, 2014–2017; Parent Volunteer, Beeks Elementary School, Blacksburg, VA, 2012–2017; Lector and Acolyte, Christ Episcopal Church, 2010–present; Co-Director of Book Sale, Friends of the Library, Blacksburg, VA 2004–2007; Board Member, Hudson Valley Bluegrass Association, 1998–2002; Stage Manager, Clearwater’s Great Hudson River Revival Festival, 1997–2006; Senior Case Manager and Life Skills Educator, Family of Woodstock, Inc. (NY), 1996–2000; AmeriCorps National Service, Centre County Youth Service Bureau (PA), 1995–1996; Office Manager and Editorial Assistant, Texas Iron Magazine (TX), 1993–1995.</p>
<?php echo end_sec_regularContent(); ?>


<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/alumni/inc/pages/give/give-volunteer.php');?>
<?php include($project_paths['main_project_root'].'/alumni/inc/pages/resources/resources-vassar-network.php');?>
<?php include($project_paths['main_project_root'].'/alumni/inc/pages/give/give-mentor.php');?>
<?php echo end_sec_relatedTopics(); ?>


<?php echo site_footeralumni(); ?>
