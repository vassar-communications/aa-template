
<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */

$page_info = '{
  "page_title":"Grants & Fellowships",
  "page_classes":"",
  "feature_image":"/alumni/assets/img/alumni-resources/grants-fellowships/Longitude_SE_dummy_20.jpg"
}';

/* === */
$page_info = json_decode($page_info, true);

?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation(); ?>

<?php echo page_partialmasthead($page_info['feature_image'], ['image_alt_text' => 'needsalttxt']); ?>


<?php echo interior_page_nav() ?>

<?php echo sec_fullBleedImageColumn(
    'Grants & Fellowships',
    $alumni_img_path.'alumni-resources/grants-fellowships/0006-19-01-kr-scc-career-clusters-vassar-0830.jpg',
    'image-is-first theme-cream',
    ''
); ?>
<p class="intro-text">Highlighted below are a few of the grants and fellowships available to Vassar alumni. For more information on these and <a href="https://fellowships.vassar.edu/fellowships/graduates/index.html">other grants and fellowships</a>, contact the <a href="https://fellowships.vassar.edu/">Office for Fellowships and Pre-Health Advising</a>.</p>

<?php echo end_sec_fullBleedImageColumn(); ?>


<?php echo sec_fullBleedImageColumn(
    'Time Out Grant',
   $alumni_img_path.'alumni-resources/grants-fellowships/J_Kramer_162_HR.jpg',
    'theme-dark-burgundy has-bg quad-pattern',
    ''
); ?>
<p>Over 30 years ago, a generous anonymous alumna established the Time Out Grant to fund projects near and dear to the hearts of fellow alumni. Vassar alumni who have reached their 40th birthday by June 30, 2022, and wish to make a career change, or take time out to pursue a long- held dream, are eligible to apply for this grant. <strong>You must be willing to take a full year off from your current endeavors and devote yourself full- time to your project.</strong> </p>

<?php echo cta_link(
    'https://www.vassar.edu/alums/services/grants/timeout',
    'Learn more about the Time Out Grant'
); ?>

<?php echo end_sec_fullBleedImageColumn(); ?>


<?php echo sec_fullBleedImageColumn(
    'The Ann Cornelisen Fellowship',
    '/assets/images/placeholders/placeholder-square.png',
    'image-is-first theme-cream',
    ''
); ?>
<h6 class="tagline">for Graduating Seniors and Recent Alumni</h6>
<p>This fellowship provides up to $18,000 to graduates who wish to study a current spoken language in any country outside of the United States, preferably in conjunction with an interest in sociology, diplomatic service, or international law. Applicants will ordinarily be enrolled in a formal foreign language program, though they need not to have studied the language previously.</p>

<?php echo cta_link(
    'https://fellowships.vassar.edu/fellowships/graduates/cornelisen/',
    'Learn more about the Ann Cornelisen Fellowship'
); ?>

<?php echo end_sec_fullBleedImageColumn(); ?>



<?php echo sec_fullBleedImageColumn(
    'The Fulbright Program',
    $alumni_img_path.'alumni-resources/alumni-benefits/Jonathan_Kaiman.jpg',
    'theme-dark-burgundy has-bg quad-pattern',
    ''
); ?>
<p>The Fulbright U.S. Student Program is the largest U.S. exchange program offering opportunities for students and young professionals to undertake international graduate study, advanced research, university teaching, and primary and secondary school teaching worldwide. The program currently awards approximately 1,900 grants annually in all fields of study, and operates in more than 140 countries worldwide. Recipients of Fulbright awards are selected on the basis of academic or professional achievement, language preparation, and the quality and feasibility of the proposal. English Teaching Assistantships are available in more than 50 countries.</p>

<?php echo cta_link(
    'https://fellowships.vassar.edu/fellowships/graduates/fulbright/',
    'Learn more about the Fulbright Program'
); ?>

<?php echo end_sec_fullBleedImageColumn(); ?>


<?php echo sec_fullBleedImageColumn(
    'The Luce Scholars Program',
    '/assets/images/placeholders/placeholder-square.png',
    'image-is-first theme-cream',
    ''
); ?>
<h6 class="tagline">for Internships in Asia</h6>
<p>Vassar may nominate three candidates for this scholarship, which endeavors to increase awareness of Asia among future leaders in American society by sponsoring 15-18 young Americans each year to live and work in Asia. Candidates must be American citizens who have received at least a bachelor’s degree and who would not have reached their 30th birthday by July 1st of the year they enter the program. They should have a record of high achievement, outstanding leadership ability, and clearly defined interests with evidence of potential for professional accomplishments. Those who already have significant experience in Asia or Asian studies are not eligible.</p>

<?php echo cta_link(
    'https://fellowships.vassar.edu/fellowships/graduates/luce/',
    'Learn more about the Luce Scholars Program'
); ?>

<?php echo end_sec_fullBleedImageColumn(); ?>


<?php echo sec_fullBleedImageColumn(
    'The Maguire Fellowship',
    '/assets/images/placeholders/placeholder-square.png',
    'theme-dark-burgundy has-bg quad-pattern',
    ''
); ?>
<h6 class="tagline">for Study Abroad After Graduation</h6>
<p>Intended for recent graduates wishing to pursue their interest in the humanities abroad, this fellowship awards up to $25,000 to graduates with a well-developed proposal of study with a clear academic focus. Evidence of sufficient language skills and academic preparation to successfully undertake the proposed study must be presented as well as a clear articulation of how the Fellowship will further one’s future objectives.</p>

<?php echo cta_link(
    'https://fellowships.vassar.edu/fellowships/graduates/maguire/',
    'Learn more about the Maguire Fellowship'
); ?>

<?php echo end_sec_fullBleedImageColumn(); ?>


<?php echo sec_fullBleedImageColumn(
    'The Vassar W.K. Rose Fellowship in the Creative Arts',
    '/assets/images/placeholders/placeholder-square.png',
    'image-is-first theme-cream',
    ''
); ?>
<p>Intended to provide a worthy young artist a minimum of $45,000 and the chance to be free after college to get on with their work as an artist, the Rose Fellowship is available to artists in the fields of writing, visual arts (including film), and music composition. Applicants must have demonstrated a creative talent during undergraduate study, must not be employed by the college, must not have attained substantial recognition in their field, and be under the age of 36. This fellowship is not intended for graduate study.</p>

<?php echo cta_link(
    'https://fellowships.vassar.edu/fellowships/graduates/rose/',
    'Learn more about the W.K. Rose Fellowship'
); ?>

<?php echo end_sec_fullBleedImageColumn(); ?>


<?php /*  PAGE CONTENT === */ ?>


<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/alumni/inc/pages/resources/resources-career-support.php');?>
<?php include($project_paths['main_project_root'].'/alumni/inc/pages/resources/resources-vassar-network.php');?>
<?php include($project_paths['main_project_root'].'/alumni/inc/pages/resources/resources-alumni-benefits.php');?>
<?php echo end_sec_relatedTopics(); ?>


<?php echo site_footer(); ?>
