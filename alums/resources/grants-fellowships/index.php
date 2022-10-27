
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

<?php echo page_partialmasthead($page_info['feature_image'], ['image_alt_text' => 'hand holding a black and white photograph above a map and a book on a table']); ?>


<?php echo interior_page_nav() ?>

<?php echo sec_fullBleedImageColumn(
    'Grants & Fellowships',
    $alums_img_path.'alums-resources/grants-fellowships/0006-19-01-kr-scc-career-clusters-vassar-0830.jpg',
    'image-is-first theme-cream',
    '',
    ['img_alt_text' => 'person in a classroom with a name tag that reads, Tonia']
); ?>
<p class="intro-text">Highlighted below are a few of the grants and fellowships available to Vassar alums. For more information on these and other grants and fellowships, contact the <a href="https://offices.vassar.edu/fellowships/">Office for Fellowships</a> or the <a href="https://offices.vassar.edu/pre-health-advising/">Office for Pre-Health Advising</a>.</p>

<?php echo end_sec_fullBleedImageColumn(); ?>


<?php echo sec_fullBleedImageColumn(
    'Time Out Grant',
   $alums_img_path.'alums-resources/grants-fellowships/J_Kramer_162_HR.jpg',
    'theme-dark-burgundy has-bg quad-pattern',
    '',
    ['img_alt_text' => 'Adult with a flute watching a child play a flute']
); ?>
<p>Over 30 years ago, a generous anonymous alumna established the Time Out Grant to fund projects near and dear to the hearts of fellow alums. Through the decades, Vassar graduates have used this opportunity to step out of their comfort zone and create groundbreaking change. The Time Out Grant is putting the concept of upending the status quo into practice and taking a year off of its own. The application process is planned to re-open in August 2023.</p>

<?php echo cta_link(
    'time-out-grant',
    'Previous Time Out Grant Recipients'
); ?>

<?php echo end_sec_fullBleedImageColumn(); ?>


<?php echo sec_fullBleedImageColumn(
    'The Ann Cornelisen Fellowship',
    '/alums/assets/img/alums-resources/grants-fellowships/110619_160over90_Vassar_4689.jpg',
    'image-is-first theme-cream',
    '',
    ['img_alt_text' => 'student showing another student a page in a book']
); ?>
<h6 class="tagline">For Graduating Seniors and Recent Alums</h6>
<p>This fellowship provides up to $18,000 to graduates who wish to study a current spoken language in any country outside of the United States, preferably in conjunction with an interest in sociology, diplomatic service, or international law. Applicants will ordinarily be enrolled in a formal foreign language program, though they need not to have studied the language previously.</p>

<?php echo cta_link(
    'https://offices.vassar.edu/fellowships/fellowships/graduates/cornelisen/',
    'Learn more about the Ann Cornelisen Fellowship'
); ?>

<?php echo end_sec_fullBleedImageColumn(); ?>



<?php echo sec_fullBleedImageColumn(
    'The Fulbright Program',
    $alums_img_path.'alums-resources/alums-benefits/Jonathan_Kaiman.jpg',
    'theme-dark-burgundy has-bg quad-pattern',
    '',
    ['img_alt_text' => 'Two seated people playing stringed instruments']
); ?>
<p>The Fulbright U.S. Student Program is the largest U.S. exchange program offering opportunities for students and young professionals to undertake international graduate study, advanced research, university teaching, and primary and secondary school teaching worldwide. The program currently awards approximately 1,900 grants annually in all fields of study, and operates in more than 140 countries worldwide. Recipients of Fulbright awards are selected on the basis of academic or professional achievement, language preparation, and the quality and feasibility of the proposal. English Teaching Assistantships are available in more than 50 countries.</p>

<?php echo cta_link(
    'https://offices.vassar.edu/fellowships/fellowships/graduates/fulbright/',
    'Learn more about the Fulbright Program'
); ?>

<?php echo end_sec_fullBleedImageColumn(); ?>


<?php echo sec_fullBleedImageColumn(
    'The Luce Scholars Program',
    '/alums/assets/img/alums-resources/grants-fellowships/luce-boat-on-river.jpg',
    'image-is-first theme-cream',
    '',
    ['img_alt_text' => 'boat on a river']
); ?>
<h6 class="tagline">for Internships in Asia</h6>
<p>Vassar may nominate three candidates for this scholarship, which endeavors to increase awareness of Asia among future leaders in American society by sponsoring 15–18 young Americans each year to live and work in Asia. Candidates must be American citizens who have received at least a bachelor’s degree and who would not have reached their 30th birthday by July 1st of the year they enter the program. They should have a record of high achievement, outstanding leadership ability, and clearly defined interests with evidence of potential for professional accomplishments. Those who already have significant experience in Asia or Asian studies are not eligible.</p>

<?php echo cta_link(
    'https://offices.vassar.edu/fellowships/fellowships/graduates/luce/',
    'Learn more about the Luce Scholars Program'
); ?>

<?php echo end_sec_fullBleedImageColumn(); ?>


<?php echo sec_fullBleedImageColumn(
    'The Maguire Fellowship',
    '/alums/assets/img/alums-resources/grants-fellowships/Harry-Potter-Bridge.jpg',
    'theme-dark-burgundy has-bg quad-pattern',
    '',
    ['img_alt_text' => 'Student abroad standing in from of an aqueduct']
); ?>
<h6 class="tagline">For Study Abroad After Graduation</h6>
<p>Intended for recent graduates wishing to pursue their interest in the humanities abroad, this fellowship awards up to $25,000 to graduates with a well-developed proposal of study with a clear academic focus. Evidence of sufficient language skills and academic preparation to successfully undertake the proposed study must be presented as well as a clear articulation of how the Fellowship will further one’s future objectives.</p>

<?php echo cta_link(
    'https://offices.vassar.edu/fellowships/fellowships/graduates/maguire/',
    'Learn more about the Maguire Fellowship'
); ?>

<?php echo end_sec_fullBleedImageColumn(); ?>


<?php echo sec_fullBleedImageColumn(
    'The Vassar W.K. Rose Fellowship in the Creative Arts',
    '/alums/assets/img/alums-resources/grants-fellowships/110619_160over90_Vassar_4784.jpg',
    'image-is-first theme-cream',
    '',
    ['img_alt_text' => 'Students painting on easels in art studio']
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
