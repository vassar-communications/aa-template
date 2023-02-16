<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */


$page_info = '{
  "page_title":"General Reunion Class Schedule",
  "page_classes":"",
  "feature_image":"/alums/assets/img/alums-calendar/reunion/Vassar_Reunion_4706.jpg"
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




<?php echo sec_regularContent(); ?>

<p class="intro-text">Be sure to check back for more specific details coming soon, but you can expect…</p>


  <h3 class="schedule-item__heading">Friday, June 2</h3>


  <?php echo schedule_item_dropdown(
    '9 a.m.–10 p.m.',
    'Reunion Information Center is open'
  ); ?>

    <p><strong>Location:</strong> Main Building Lobby</p>

  <?php echo end_schedule_item_dropdown(); ?>

  <?php echo schedule_item_dropdown(
    '9 a.m.–11 p.m.',
    'Residence houses open for check-in'
  ); ?>

    <p>Dorm rooms are available after 2 p.m.</p>

  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '3–4 p.m.',
    'College Lectures (See page XX for detailed descriptions.)'
  ); ?>
      <p><a href="LINK">Mindfulness, Resilience and Cognitive Health as We Age</a></p>
      <p><em>Rockefeller 300</em></p>
      <p><a href="LINK">Campus Capital Projects: What’s Happening and Upcoming?</a></p>
      <p><em>Rockefeller 200</em></p>
  <?php echo end_schedule_item_dropdown(); ?>

  <?php echo schedule_item_dropdown(
    '3–4 p.m.',
    'Tours'
  ); ?>

<h4>The <a href="https://www.vassar.edu/preserve">Vassar Preserve</a> and <a href="https://offices.vassar.edu/environmental-cooperative/">Environmental Cooperative</a></h4>
<p><em>Shuttles depart from Main Circle</em></p>

<h4>Walking Tour of the Vassar College Arboretum</h4>
<p><em>Meet at the entrance to Main in front of Main Circle.</em></p>

  <?php echo end_schedule_item_dropdown(); ?>

  <?php echo schedule_item_dropdown(
    '5–6 p.m.',
    'Matthew Vassar Legacy Society Reception (by invitation)'
  ); ?>
    <p>With gratitude for and in recognition of those who have provided for the College’s future through a planned gift or estate commitment.</p>
    <p><em>The President’s House Terrace</em></p>
  <?php echo end_schedule_item_dropdown(); ?>

  <?php echo schedule_item_dropdown(
    '5–6 p.m.',
    'Class of 1983 - Welcome reception'
  ); ?>
    <p><em>The Vassar Barns</em></p>
  <?php echo end_schedule_item_dropdown(); ?>

  <?php echo schedule_item_dropdown(
    '5–7 p.m.',
    'The Loeb All-Class Welcome Reception.'
  ); ?>
    <p>Refreshments served.</p>
  <?php echo end_schedule_item_dropdown(); ?>

  <?php echo schedule_item_dropdown(
    '5:30–6:45 p.m.',
    'Shabbat Services'
  ); ?>
    <p><em>The Bayit (51 Collegeview Avenue, North Gate)</em></p>
  <?php echo end_schedule_item_dropdown(); ?>

  <?php echo schedule_item_dropdown(
    '6 p.m.',
    'Night Owls Rehearsal'
  ); ?>
    <p><em>Rockefeller 200</em></p>
  <?php echo end_schedule_item_dropdown(); ?>

  <?php echo schedule_item_dropdown(
    '6 p.m.–7 p.m.',
    'Faculty Reception'
  ); ?>
    <p><em>Chapel lawn tent</em></p>
  <?php echo end_schedule_item_dropdown(); ?>

  <?php echo schedule_item_dropdown(
    '7 p.m.–9 p.m.',
    'Picnic dinner'
  ); ?>
<p>Classes of 1953, 1958, 1963, 1968: 2nd floor Main Building</p>
<p>Classes of 1978, 1983, 1988, 1993, 1998, 2003, 2008, 2013, 2016, 2018: Noyes Tent</p>
  <?php echo end_schedule_item_dropdown(); ?>

  <?php echo schedule_item_dropdown(
    '9 p.m.–11 p.m.',
    'Hospitalities'
  ); ?>
<p>Classes of 1958, 1963, 1968: Jewett House</p>
<p>All classes: Noyes Circle tent</p>
  <?php echo end_schedule_item_dropdown(); ?>

  <?php echo schedule_item_dropdown(
    '9 p.m.–11 p.m.',
    'Hospitalities'
  ); ?>
<p>Classes of 1958, 1963, 1968: Jewett House</p>
<p>All classes: Noyes Circle tent</p>
  <?php echo end_schedule_item_dropdown(); ?>

  <?php echo schedule_item_dropdown(
    '9:30 p.m.',
    'Fireworks over Sunset Lake'
  ); ?>
  <?php echo end_schedule_item_dropdown(); ?>

  <?php echo schedule_item_dropdown(
    '10 p.m.–12 a.m.',
    'The Afterglow Salon: A Sober, Safe, & Inclusive Social Space',
    'Susan Shiva Theater behind the ALANA center'
  ); ?>

  <p>Adults only, brought to you by the class of 2003 along with alums from QCVC (Queer Coalition of Vassar College); CHOICE (Campus Health Organization for Information, Contraception, and Education); and SQUIRM, a Vassar College student publication dedicated to exploring sex in literary and artistic forms.</p>

<p>After the fireworks comes the afterglow! Join us for an uplifting celebration of sexual expression featuring readings, burlesque, and art from a multigenerational group of alumni performers. Coffee and dessert will be served.</p>

  <?php echo end_schedule_item_dropdown(); ?>






<?php echo end_sec_regularContent(); ?>


<?php echo relatedTopics(); ?>

<?php include($project_paths['main_project_root'].'/alums/inc/pages/give/give.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/give/give-volunteer.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/calendar/calendar.php');?>
<?php echo end_sec_relatedTopics(); ?>


<?php echo site_footeralums(); ?>
