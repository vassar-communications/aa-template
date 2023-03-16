<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */


$page_info = '{
  "page_title":"Lectures, Panels and Tours",
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

<p class="intro-text">[intro content goes here]</p>

<h3 class="schedule-item__heading">Friday, June 2</h3>

  <?php echo presentation_item(
    'Ageless Aging: Resilience, Cognitive Health and Mindfulness',
    'Rockefeller Hall, Room 300 and zoom for virtual attendees',
    '3:00 p.m.'
  ); ?>
    <?php echo presentation_content(); ?>
      <p>Join us for an interactive experience that will teach you strategies for effective coping, the benefits of mindfulness for your cognitive health, and how to practice mindfulness in minutes in real life.</p>
    <?php echo end_presentation_content(); ?>

    <?php echo presentation_member_list('Panelists'); ?>
      <?php echo presentation_member(
        'Quinn Kennedy ’93',
        'https://www.linkedin.com/in/quinn-kennedy-qkconsulting/',
        'Director of Aging Research at NeuroFit',
        '/alums/assets/img/alums-calendar/reunion/2023-lectures/QuinnKennedy_PhotoTakenBy_IanMartin.jpg',
        'ALT TEXT HERE'
      ); ?>
      <?php echo presentation_member(
        'Nina Smiley ’73',
        'https://www.linkedin.com/in/nina-smiley-2439435/',
        'Director of Mindfulness Programming at Mohonk Mountain House',
        '/alums/assets/img/alums-calendar/reunion/2023-lectures/Nina-Smiley.jpg',
        'ALT TEXT HERE'
      ); ?>
      <?php echo presentation_member(
        'Michele Tugade ’95',
        'https://www.vassar.edu/faculty/mitugade',
        'William R. Kenan, Jr. Endowed Chair and Professor of Psychological Science at Vassar College',
        '/alums/assets/img/alums-calendar/reunion/2023-lectures/mitugade_72.jpg',
        'ALT TEXT HERE'
      ); ?>
    <?php echo end_presentation_member_list(); ?>
  <?php echo end_presentation_item(); ?>



  <?php echo presentation_item(
    'Campus Capital Projects: What’s Happening and Upcoming?',
    'Rockefeller Hall, Room 200',
    '3:00 p.m.'
  ); ?>
    <?php echo presentation_content(); ?>
      <p>Join <a href="https://www.vassar.edu/faculty/begemann">Marianne Begemann ’79</a>, Dean of Strategic Planning and Academic Resources, for a presentation that contextualizes and showcases current and future campus capital projects.</p>
    <?php echo end_presentation_content(); ?>

    <?php echo presentation_member_list('Presenter'); ?>
      <?php echo presentation_member(
        'Marianne Begemann ’79',
        'https://www.vassar.edu/faculty/begemann',
        'Dean of Strategic Planning and Academic Resources',
        '/alums/assets/img/alums-calendar/reunion/2023-lectures/begemann.jpg',
        'ALT TEXT HERE'
      ); ?>
    <?php echo end_presentation_member_list(); ?>
  <?php echo end_presentation_item(); ?>

  <?php echo presentation_item(
    'Tour of the <a href="https://www.vassar.edu/preserve">Vassar Preserve</a> and <a href="https://offices.vassar.edu/environmental-cooperative/">Environmental Cooperative</a>',
    'Shuttles depart from Main Circle',
    '3:00 p.m.'
  ); ?>
    <?php echo presentation_content(); ?>
      <p>Conservation, sustainability and an exploration of the natural world are all core values at Vassar. Explore one of the College’s greatest gems on this guided walking tour (weather permitting). Sensible shoes and long pants are strongly suggested.</p>
    <?php echo end_presentation_content(); ?>
  <?php echo end_presentation_item(); ?>


  <?php echo presentation_item(
    'Walking Tour of the Vassar College Arboretum',
    'Meet at the entrance to Main in front of Main Circle.',
    '3:00 p.m.'
  ); ?>
    <?php echo presentation_content(); ?>
      <p>Enjoy a leisurely walk, discover fascinating fun facts about trees, and learn about the increasing importance of campus trees for our efforts to be more sustainable and achieve carbon neutrality. Our itinerary will include visits to the reuning classes’ class trees. Please wear comfortable walking shoes and dress for the weather.</p>
    <?php echo end_presentation_content(); ?>

    <?php echo presentation_member_list('Presenter'); ?>
      <?php echo presentation_member(
        'Mark Schlessman',
        'https://www.vassar.edu/faculty/emeriti/schlessman',
        'Emeritus Professor of Biology',
        '/alums/assets/img/alums-calendar/reunion/2023-lectures/schlessman.jpg',
        'ALT TEXT HERE'
      ); ?>
    <?php echo end_presentation_member_list(); ?>
  <?php echo end_presentation_item(); ?>



<h3 class="schedule-item__heading">Saturday, June 3</h3>

<?php echo presentation_item(
  'Walking Tour of the Vassar College Arboretum',
  'Meet at the entrance to Main in front of Main Circle.',
  '2:00 p.m.'
); ?>
  <?php echo presentation_content(); ?>
    <p>Enjoy a leisurely walk, discover fascinating fun facts about trees, and learn about the increasing importance of campus trees for our efforts to be more sustainable and achieve carbon neutrality. Our itinerary will include visits to the reuning classes’ class trees. Please wear comfortable walking shoes and dress for the weather.</p>
  <?php echo end_presentation_content(); ?>

  <?php echo presentation_member_list('Presenter'); ?>
    <?php echo presentation_member(
      'Mark Schlessman',
      'https://www.vassar.edu/faculty/emeriti/schlessman',
      'Emeritus Professor of Biology',
      '/alums/assets/img/alums-calendar/reunion/2023-lectures/schlessman.jpg',
      'ALT TEXT HERE'
    ); ?>
  <?php echo end_presentation_member_list(); ?>
<?php echo end_presentation_item(); ?>


<?php echo presentation_item(
  'Hallie Flanagan and the 1937 Federal Summer Theater Conference at Vassar',
  'Rockefeller Hall, Room 200',
  '3:30 p.m.'
); ?>
  <?php echo presentation_content(); ?>
    <p><a href="https://vcencyclopedia.vassar.edu/faculty/prominent-faculty/hallie-flanagan-davis/">Hallie Flanagan Davis</a>, founder of the Vassar Experimental Theater and Director of the WPA Federal Theatre Project, brought theater professionals and academics to the Vassar campus in the summer of 1937 to introduce them to innovative technologies and emerging modern drama theories, to workshop a Living Newspaper production on the housing crisis in America, and to foster the development of “a new, imaginative theater” in America. Herman Daniel Farrell III (Class of 1983, Drama major) a University Research Professor at the University of Kentucky will discuss his recent research that will be published this year in <a href="https://sup.sorbonne-universite.fr/catalogue/collections/e-theatrum-mundi-0"><em>e-Theatrum Mundi</em></a>, Sorbonne University Press, Paris, France.</p>
  <?php echo end_presentation_content(); ?>

  <?php echo presentation_member_list('Presenter'); ?>
    <?php echo presentation_member(
      'Herman Daniel Farrell III ’83',
      'https://finearts.uky.edu/theatre-dance/faculty-staff/herman-d-farrell-iii',
      'University Research Professor, University of Kentucky',
      '/alums/assets/img/alums-calendar/reunion/2023-lectures/farrell.jpg',
      'ALT TEXT HERE'
    ); ?>
  <?php echo end_presentation_member_list(); ?>
<?php echo end_presentation_item(); ?>



<?php echo presentation_item(
  'Pedagogy and Place: The Legacy of Vassar’s Landscape',
  'Meet in front of Rockefeller Hall',
  '3:30 p.m.'
); ?>
  <?php echo presentation_content(); ?>
    <p>This walking tour will visit several key landscape and building sites that demonstrate the unusual manner in which Vassar’s campus structure and design have emerged. Its interactive relationship with the emerging curriculum created a unique story that has shaped the spirit of the College and its graduates for many years.</p>
  <?php echo end_presentation_content(); ?>

  <?php echo presentation_member_list('Presenter'); ?>
    <?php echo presentation_member(
      'Karen Van Lengen ’73',
      'https://www.arch.virginia.edu/people/karen-van-lengen',
      'William Kenan Professor of Architecture, University of Virginia',
      '/alums/assets/img/alums-calendar/reunion/2023-lectures/van-lengen.jpg',
      'ALT TEXT HERE'
    ); ?>
  <?php echo end_presentation_member_list(); ?>
<?php echo end_presentation_item(); ?>


<?php echo presentation_item(
  'Campus Projects: View What’s New',
  'Meet in Main Circle',
  '3:30 p.m.'
); ?>
  <?php echo presentation_content(); ?>
    <p>Join Vassar Project Manager Bryan Corrigan for a walking tour of recent renovations and capital projects, including Main Building, the Bridge for Laboratory Sciences, Faculty Housing, Gordon Commons and the site for the Center for Admission and Career Education.</p>
  <?php echo end_presentation_content(); ?>

  <?php echo presentation_member_list('Presenter'); ?>
    <?php echo presentation_member(
      'Bryan Corrigan',
      'https://www.linkedin.com/in/bryan-corrigan-ra-leed-ap-05630612/',
      'Vassar Project Manager'
    ); ?>
  <?php echo end_presentation_member_list(); ?>
<?php echo end_presentation_item(); ?>



<?php echo end_sec_regularContent(); ?>


<?php echo relatedTopics(); ?>

<?php include($project_paths['main_project_root'].'/alums/inc/pages/give/give.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/give/give-volunteer.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/calendar/calendar.php');?>
<?php echo end_sec_relatedTopics(); ?>


<?php echo site_footeralums(); ?>
