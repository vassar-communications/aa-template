<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */


$page_info = '{
  "page_title":"Awards Program",
  "page_classes":"",
  "feature_image":"/alumni/assets/img/alumni-community/aavc/awards/0032-21-05-kr-spring-vassar-0078.jpg"
}';

/* === */
$page_info = json_decode($page_info, true);


?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation_alums(); ?>

<?php echo page_partialmasthead($page_info['feature_image'], ['image_alt_text' => 'Queer Liberation March']); ?>

<?php echo interior_page_nav() ?>

<?php /*  PAGE CONTENT === */ ?>

<?php echo sec_fullBleedImageColumn(
    null,
    $alumni_img_path.'alumni-community/aavc/0124-19-10-kr-spirit-award-vassar-0814.jpg',
    'image-is-first theme-cream',
    '',
    ['img_alt_text' => 'Group of people at The Alumnae/i Association of Vassar College (AAVC) Awards presentation applauding Professor Robert Brigham.']
); ?>
<p class="intro-text">The Alumnae/i Association of Vassar College (AAVC) Awards Program was inaugurated in 2001 to recognize alumni who have made significant contributions to the vitality and success of the College and AAVC.</p>

<?php echo end_sec_fullBleedImageColumn(); ?>

<?php echo sec_regularContent(
        'Distinguished Achievement Award',
        '',
        ''); ?>
<p>The Distinguished Achievement Award is presented to an alumna or alumnus who has reached the highest level in her or his field, including the professions, science, the arts, and public affairs. While demonstrating exceptional talent, application, creativity, and skill within a certain career, this individual must at the same time exemplify the ideals of a liberal arts education and have used her or his position of visibility, power, or leadership to better the human community and serve the wider goals of society.</p>
<?php echo cta_link(
    '/alumni/community/aavc/awards-program/distinguished-achievement',
     'See past award recipients'
); ?>

<?php echo end_sec_regularContent(); ?>

<?php echo sec_fullBleedImageColumn(
    null,
    '/alumni/assets/img/alumni-community/aavc/awards/0046_14_01_SS2_089.jpg',
    'image-is-first',
    '',
    ['img_alt_text' => 'Meryl Streep ’71, P’08, ’13']
); ?>
<h6 class="tagline">2021 Recipient</h6>
<h1>Meryl Streep ’71, P’08, ’13</h1>
<p class="intro-text">The award presentation for Meryl Streep will be held in April 2022. Details are forthcoming.</p>
<a href="https://www.vassar.edu/news/five-honored-2021-aavc-awards" class="btn btn-link arrow">Read more</a>
<?php echo end_sec_fullBleedImageColumn(); ?>


<?php echo sec_regularContent(
    'Outstanding Service to Vassar College Award',
    'theme-verylightgray',
    ''); ?>
<p>The AAVC Outstanding Service Award is presented to an alumna or /alumnus in recognition of her or his extraordinary commitment, leadership, and service in promoting the goals and highest interests of Vassar College and AAVC. The award honors outstanding contributions made over a number of years in any or all of these volunteer capacities: class, club, and committee activities; fundraising; enriching campus life; or stewardship as board members, trustees, or donors. Outstanding Service Award winners are ambassadors on behalf of Vassar College to the alumni and to the larger community.</p>
<?php echo cta_link(
    '/alumni/community/aavc/awards-program/outstanding-service',
     'See past award recipients'
); ?>

<?php echo end_sec_regularContent(); ?>


<?php echo sec_fullBleedImageColumn(
    null,
    '/alumni/assets/img/alumni-community/aavc/awards/0071-19-05-ssh-kente-cloth-vassar-0168.jpg',
    'image-is-first theme-verylightgray',
    '',
    ['img_alt_text' => 'Pat Jordan ’72, P’17']
); ?>
<h6 class="tagline">2021 Recipient</h6>
<h1>Pat Jordan ’72, P’17</h1>
<a href="https://vimeo.com/574099032" class="btn btn-link arrow">Watch the video</a>
<?php echo end_sec_fullBleedImageColumn(); ?>


<?php echo sec_regularContent(
    'Spirit of Vassar Award',
    '',
    ''); ?>
<p>The Spirit of Vassar Award is presented to an alumna or alumnus who has demonstrated extraordinary and distinguished leadership, contribution, and commitment to serving a community in which they effect positive, transformative societal change. This contribution may have been made through the recipient’s career, community work, or volunteer service. The award recognizes the values of service and civic responsibility that are fundamental to a Vassar education.</p>
<?php echo cta_link(
    '/alumni/community/aavc/awards-program/spirit-of-vassar',
     'See past award recipients'
); ?>

<?php echo end_sec_regularContent(); ?>

<?php echo sec_fullBleedImageColumn(
    null,
    '/alumni/assets/img/alumni-community/aavc/awards/Miles-LaGrange_02.jpg',
    'image-is-first',
    '',
    ['img_alt_text' => 'Judge Vicki Miles-Lagrange ’74']
); ?>
<h6 class="tagline">2021 Recipient</h6>
<h1>Judge Vicki Miles-Lagrange ’74</h1>
<a href="https://vimeo.com/637566070" class="btn btn-link arrow">Watch the video</a>
<?php echo end_sec_fullBleedImageColumn(); ?>


<?php echo sec_regularContent(
    'Outstanding Faculty/Staff Award',
    'theme-verylightgray',
    ''); ?>
<p>The Outstanding Faculty/Staff Award is presented to a faculty or staff member who has demonstrated exemplary service, leadership, and commitment to engage with alumni and current students through a range of programs, initiatives, and activities over a period of years.
</p>
<?php echo cta_link(
    '/alumni/community/aavc/awards-program/outstanding-faculty-staff',
     'See past award recipients'
); ?>

<?php echo end_sec_regularContent(); ?>

<?php echo sec_fullBleedImageColumn(
    null,
    '/alumni/assets/img/alumni-community/aavc/awards/0049_14_05_KR_0012edit.jpg',
    'image-is-first theme-verylightgray',
    '',
    ['img_alt_text' => 'Rachel Kitzinger']
); ?>
<h6 class="tagline">2021 Recipient</h6>
<h1>Rachel Kitzinger</h1>
<p class="intro-text">Professor Emerita of Greek and Roman Studies</p>
<a href="https://vimeo.com/637580661" class="btn btn-link arrow">Watch the video</a>
<?php echo end_sec_fullBleedImageColumn(); ?>


<?php echo sec_regularContent(
    'Young Alumni Achievement or Service Award',
    '',
    ''); ?>
<p>The Young Alumni Achievement or Service Award is presented to an alumna or alumnus recognized for either their extraordinary service to Vassar in any aspect of alumni engagement OR for their exceptional personal and professional achievement(s) within their respective field. As a graduate within the last 10 years, the recipient should be inspirational to their peers and the current student body, while exemplifying the fruits of a successful liberal arts education at Vassar.</p>
<?php echo cta_link(
    '/alumni/community/aavc/awards-program/young-alum-achievement',
     'See past award recipients'
); ?>

<?php echo end_sec_regularContent(); ?>


<?php echo sec_fullBleedImageColumn(
    null,
    '/alumni/assets/img/alumni-community/aavc/awards/Marie_Dilemani_AAVC_Award_210922_KR_0046.jpg',
    'image-is-first',
    '',
    ['img_alt_text' => 'Marie Dugo Dilemani ‘11']
); ?>
<h6 class="tagline">2021 Recipient</h6>
<h1>Marie Dugo Dilemani ’11</h1>
<a href="https://vimeo.com/637612799" class="btn btn-link arrow">Watch the video</a>
<?php echo end_sec_fullBleedImageColumn(); ?>


<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/alumni/inc/pages/community/community.php');?>
<?php include($project_paths['main_project_root'].'/alumni/inc/pages/community/community-alumni-groups.php');
//include($project_paths['main_project_root'].'/alumni/inc/pages/community/community-notable-alumni.php');?>
<?php include($project_paths['main_project_root'].'/alumni/inc/pages/community/community-alumni-news.php');?>
<?php echo end_sec_relatedTopics(); ?>

<?php echo site_footeralumni(); ?>

