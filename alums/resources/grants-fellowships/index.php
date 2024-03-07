
<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */

$page_info = '{
  "page_title":"Grants & Fellowships",
  "page_classes":"",
  "feature_image":"/alums/assets/img/alums-resources/grants-fellowships/Longitude_SE_dummy_20.jpg"
}';

/* === */
$page_info = json_decode($page_info, true);

?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation_alums(); ?>

<?php echo page_partialmasthead($page_info['feature_image'], ['image_alt_text' => 'Hand holding a black and white photograph above a map and a book on a table.']); ?>


<?php echo interior_page_nav() ?>

<?php echo sec_fullBleedImageColumn(
    'Grants & Fellowships',
    $alums_img_path.'alums-resources/grants-fellowships/0006-19-01-kr-scc-career-clusters-vassar-0830.jpg',
    'image-is-first theme-cream',
    '',
    ['img_alt_text' => 'Person in a classroom with a name tag that reads, Tonia.']
); ?>
<p class="intro-text">Highlighted below are a few of the grants and fellowships available to Vassar alums. For more information on these and other grants and fellowships, contact the <a href="https://offices.vassar.edu/career-education/">Center for Career Education</a> and visit the <a href="https://offices.vassar.edu/fellowships/fellowships/">Fellowships website</a>.</p>

<?php echo end_sec_fullBleedImageColumn(); ?>


<?php echo sec_fullBleedImageColumn(
    'Time Out Grant',
   $alums_img_path.'alums-resources/grants-fellowships/J_Kramer_162_HR.jpg',
    'theme-dark-burgundy has-bg quad-pattern',
    '',
    ['img_alt_text' => 'A person, with short dark hair wearing a yellow sweater holding an instrument, faces a child with short dark hair wearing a bright orange shirt playing the flute.']
); ?>
<p>Over 30 years ago, a generous anonymous alum established the Time Out Grant to provide fellow alums the opportunity to change the trajectory of their lives. The Time Out Grant funds endeavors that are bold, innovative, and impactful. Through the decades, Vassar graduates have used this grant as a catalyst to step out of their comfort zone and create groundbreaking change.</p>

<?php echo cta_link(
    'time-out-grant',
    'Learn more about the Time Out Grant'
); ?>

<?php echo end_sec_fullBleedImageColumn(); ?>


<?php echo sec_fullBleedImageColumn(
    'The Ann Cornelisen Fellowship',
    '/alums/assets/img/alums-resources/grants-fellowships/110619_160over90_Vassar_4689.jpg',
    'image-is-first theme-cream',
    '',
    ['img_alt_text' => 'Student showing another student a page in a book while seated at desks in a classroom.']
); ?>
<h6 class="tagline">For Graduating Seniors and Recent Alums</h6>
<p>This fellowship provides up to $18,000 to graduates who wish to study a current spoken language in any country outside of the United States, preferably in conjunction with an interest in sociology, diplomatic service, or international law. Applicants will ordinarily be enrolled in a formal foreign language program, though they need not have studied the language previously.</p>

<?php echo cta_link(
    'https://offices.vassar.edu/fellowships/fellowships/graduates/cornelisen/',
    'Learn more about the Ann Cornelisen Fellowship'
); ?>

<?php echo end_sec_fullBleedImageColumn(); ?>



<?php echo sec_fullBleedImageColumn(
    'Nationally Competitive Fellowships',
    $alums_img_path.'alums-resources/alums-benefits/Jonathan_Kaiman.jpg',
    'theme-dark-burgundy has-bg quad-pattern',
    '',
    ['img_alt_text' => 'Two people of different ages sit holding unusual stringed instruments looking at each other.']
); ?>
<p>Vassar also supports alums who wish to apply to a variety of nationally competitive fellowships that require institutional endorsement or a campus process, including the following:</p>
<ul>
    <li><a href="https://offices.vassar.edu/fellowships/fellowships/graduates/marshall/">Marshall Scholarship</a>—for graduate study in the UK</li>
    <li><a href="https://offices.vassar.edu/fellowships/fellowships/graduates/rhodes/">Rhodes Scholarship</a>—for graduate study at the University of Oxford</li>
    <li><a href="https://offices.vassar.edu/fellowships/fellowships/graduates/fulbright/">Fulbright Program</a>—for study/research or teaching English</li>
    <li><a href="https://offices.vassar.edu/fellowships/fellowships/graduates/churchill/">Churchill Scholarship</a>—for graduate study in engineering, mathematics, or the sciences at Churchill College, the University of Cambridge</li>
    <li><a href="https://offices.vassar.edu/fellowships/fellowships/graduates/carnegie/">James C. Gaither Junior Fellows</a>—for research assistant work at the Carnegie Endowment for International Peace</li>
</ul>
<p>

<?php echo cta_link(
    'https://offices.vassar.edu/fellowships/deadlines/',
    'Learn more about deadlines for these opportunities'
); ?>

<?php echo end_sec_fullBleedImageColumn(); ?>


<?php echo sec_fullBleedImageColumn(
    'The Maguire Fellowship',
    '/alums/assets/img/alums-resources/grants-fellowships/Harry-Potter-Bridge.jpg',
    'image-is-first theme-cream',
    '',
    ['img_alt_text' => 'A person with dark hair wearing a blue jacket and dark pants is standing in front of an aqueduct surrounded by greenery.']
); ?>
<h6 class="tagline">For Study Abroad After Graduation</h6>
<p>Intended for recent graduates wishing to pursue their interest in the humanities abroad, this fellowship awards up to $25,000 to graduates with a well-developed proposal of study with a clear academic focus. Evidence of sufficient language skills and academic preparation to successfully undertake the proposed study must be presented as well as a clear articulation of how the Fellowship will further one’s future objectives.</p>

<?php echo cta_link(
    'https://offices.vassar.edu/fellowships/fellowships/graduates/maguire/',
    'Learn more about the Maguire Fellowship'
); ?>

<?php echo end_sec_fullBleedImageColumn(); ?>


<?php echo sec_fullBleedImageColumn(
    'Vassar Fellowships for Graduate Study',
    '/alums/assets/img/alums-resources/grants-fellowships/luce-boat-on-river.jpg',
    'theme-dark-burgundy has-bg quad-pattern',
    '',
    ['img_alt_text' => 'A person wearing a straw hat stands holding a net on a pole in a small orange boat on a river.']
); ?>
<p>Intended for the pursuit of graduate study. Some awards are restricted to graduating seniors and recent graduates, others are restricted by field of study. <a href="https://offices.vassar.edu/fellowships/fellowships/graduates/vassar/list-of-vassar-fellowships/">View a list of awards</a>.</p>

<?php echo cta_link(
    'https://offices.vassar.edu/fellowships/fellowships/graduates/vassar/',
    'Learn more about Vassar Fellowships for Graduate Study'
); ?>

<?php echo end_sec_fullBleedImageColumn(); ?>


<?php echo sec_fullBleedImageColumn(
    'The Vassar W.K. Rose Fellowship in the Creative Arts',
    '/alums/assets/img/alums-resources/grants-fellowships/110619_160over90_Vassar_4784.jpg',
    'image-is-first theme-cream',
    '',
    ['img_alt_text' => 'Students painting on easels in art studio.']
); ?>
<p>Intended to provide a worthy young artist a minimum of $45,000 and the chance to be free after college to get on with their work as an artist, the Rose Fellowship is available to artists in the fields of writing, visual arts (including film), and music composition. Applicants must have demonstrated a creative talent during undergraduate study, must not be employed by the College, must not have attained substantial recognition in their field, and be under the age of 36. This fellowship is not intended for graduate study.</p>

<?php echo cta_link(
    'https://offices.vassar.edu/fellowships/fellowships/graduates/rose/',
    'Learn more about the W.K. Rose Fellowship'
); ?>

<?php echo end_sec_fullBleedImageColumn(); ?>


<?php /*  PAGE CONTENT === */ ?>


<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/resources/resources-career-support.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/resources/resources-vassar-network.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/resources/resources-alums-benefits.php');?>
<?php echo end_sec_relatedTopics(); ?>


<?php echo site_footeralums(); ?>
