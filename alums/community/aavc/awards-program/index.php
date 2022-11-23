<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */


$page_info = '{
  "page_title":"Awards Program",
  "page_classes":"",
  "feature_image":"/alums/assets/img/alums-community/aavc/awards/0032-21-05-kr-spring-vassar-0078.jpg"
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
    $alums_img_path.'alums-community/aavc/0124-19-10-kr-spirit-award-vassar-0814.jpg',
    'image-is-first theme-cream',
    '',
    ['img_alt_text' => 'Group of people at The Alumnae/i Association of Vassar College (AAVC) Awards presentation applauding Professor Robert Brigham.']
); ?>
<p class="intro-text">The Alumnae/i Association of Vassar College (AAVC) Awards Program was inaugurated in 2001 to recognize alums who have made significant contributions to the vitality and success of the College and AAVC.</p>

<?php echo end_sec_fullBleedImageColumn(); ?>

<?php echo sec_regularContent(
        'Distinguished Achievement Award',
        '',
        ''); ?>
<p>The Distinguished Achievement Award is presented to an alum who has reached the highest level in their field, including the professions, science, the arts, and public affairs. While demonstrating exceptional talent, application, creativity, and skill within a certain career, this individual must at the same time exemplify the ideals of a liberal arts education and have used their position of visibility, power, or leadership to better the human community and serve the wider goals of society.</p>
<?php echo cta_link(
    '/alums/community/aavc/awards-program/distinguished-achievement',
     'See past award recipients'
); ?>

<?php echo end_sec_regularContent(); ?>

<?php echo sec_fullBleedImageColumn(
    null,
    '/alums/assets/img/alums-community/aavc/awards/0046_14_01_SS2_089.jpg',
    'image-is-first',
    '',
    ['img_alt_text' => 'Meryl Streep ’71, P’08, ’13']
); ?>
<h6 class="tagline">2021 Recipient</h6>
<h1>Meryl Streep ’71, P’08, ’13</h1>
<p class="intro-text">The award presentation for Meryl Streep was held on October 13, 2022. A recording of the event will be available soon.</p>
<a href="https://www.vassar.edu/news/meryl-streep-accepts-aavc-distinguished-achievement-award" class="btn btn-link arrow">Read more</a>
<?php echo end_sec_fullBleedImageColumn(); ?>


<?php echo sec_regularContent(
    'Outstanding Service to Vassar College Award',
    'theme-verylightgray',
    ''); ?>
<p>The AAVC Outstanding Service Award is presented to an alum in recognition of their extraordinary commitment, leadership, and service in promoting the goals and highest interests of Vassar College and AAVC. The award honors outstanding contributions made over a number of years in any or all of these volunteer capacities: class, club, and committee activities; fundraising; enriching campus life; or stewardship as board members, trustees, or donors. Outstanding Service Award winners are ambassadors on behalf of Vassar College to the alums and to the larger community.</p>
<?php echo cta_link(
    '/alums/community/aavc/awards-program/outstanding-service',
     'See past award recipients'
); ?>

<?php echo end_sec_regularContent(); ?>


<?php echo sec_fullBleedImageColumn(
    null,
    '/alums/assets/img/alums-community/aavc/awards/0037-22-06-kr-reunion-vassar-0025.jpg',
    'image-is-first theme-verylightgray',
    '',
    ['img_alt_text' => 'A person with gray hair speaks into a microphone while standing at an outdoor podium on a sunny day.']
); ?>
<h6 class="tagline">2022 Recipient</h6>
<h1>Deborah Macfarlan Enright ’82</h1>

<!--
<p><?php echo item_link_VideoModal(
    'Watch the video',
    'https://player.vimeo.com/video/574099032',
    'vimeo',
    '',
    'no-arrow btn-link mt-4'
); ?></p>
-->

<?php echo cta_link(
    'https://www.vassar.edu/news/five-alumni-selected-2022-aavc-awards',
     'Read more'
); ?>




<?php echo end_sec_fullBleedImageColumn(); ?>


<?php echo sec_regularContent(
    'Spirit of Vassar Award',
    '',
    ''); ?>
<p>The Spirit of Vassar Award is presented to an alum who has demonstrated extraordinary and distinguished leadership, contribution, and commitment to serving a community in which they effect positive, transformative societal change. This contribution may have been made through the recipient’s career, community work, or volunteer service. The award recognizes the values of service and civic responsibility that are fundamental to a Vassar education.</p>

<?php echo cta_link(
    '/alums/community/aavc/awards-program/spirit-of-vassar',
     'See past award recipients'
); ?>

<?php echo end_sec_regularContent(); ?>

<?php echo sec_fullBleedImageColumn(
    null,
    '/alums/assets/img/alums-community/aavc/awards/Vassar_Feigen_20220929_KR_0074.jpg',
    'image-is-first',
    '',
    ['img_alt_text' => 'Three people stand together, smiling at the camera.']
); ?>
<h6 class="tagline">2022 Recipient</h6>
<h1>Brenda Feigen ’66</h1>

<p><?php echo item_link_VideoModal(
    'Watch the video',
    'https://player.vimeo.com/video/759562549',
    'vimeo',
    '',
    'no-arrow btn-link mt-4'
); ?></p>
<?php echo cta_link(
    'https://www.vassar.edu/news/feminist-legend-brenda-feigen-66-accepts-spirit-vassar-award-tells-students-embrace-activism',
     'Read more'
); ?>



<?php echo end_sec_fullBleedImageColumn(); ?>


<?php echo sec_regularContent(
    'Outstanding Faculty/Staff Award',
    'theme-verylightgray',
    ''); ?>
<p>The Outstanding Faculty/Staff Award is presented to a faculty or staff member who has demonstrated exemplary service, leadership, and commitment to engage with alums and current students through a range of programs, initiatives, and activities over a period of years.
</p>

<?php echo cta_link(
    '/alums/community/aavc/awards-program/outstanding-faculty-staff',
     'See past award recipients'
); ?>

<?php echo end_sec_regularContent(); ?>

<?php echo sec_fullBleedImageColumn(
    null,
    '/alums/assets/img/alums-community/aavc/awards/0037-22-06-kr-reunion-vassar-0019.jpg',
    'image-is-first theme-verylightgray',
    '',
    ['img_alt_text' => 'A person with short dark hair speaks into a microphone while standing at an outdoor podium on a sunny day.']
); ?>
<h6 class="tagline">2022 Recipient</h6>
<h1>Edward Pittman ’82</h1>
<p class="intro-text">Senior Associate Dean of the College (Retired)</p>

<!--
<p><?php echo item_link_VideoModal(
    'Watch the video',
    'https://player.vimeo.com/video/637580661',
    'vimeo',
    '',
    'no-arrow btn-link mt-4'
); ?></p>
-->

<?php echo cta_link(
    'https://www.vassar.edu/news/five-alumni-selected-2022-aavc-awards',
     'Read more'
); ?>


<?php echo end_sec_fullBleedImageColumn(); ?>


<?php echo sec_regularContent(
    'Young Alum Achievement or Service Award',
    '',
    ''); ?>
<p>The Young Alum Achievement or Service Award is presented to an alum recognized for either their extraordinary service to Vassar in any aspect of engagement OR for their exceptional personal and professional achievement(s) within their respective field. As a graduate within the last 10 years, the recipient should be inspirational to their peers and the current student body, while exemplifying the fruits of a successful liberal arts education at Vassar.</p>
<?php echo cta_link(
    '/alums/community/aavc/awards-program/young-alum-achievement',
     'See past award recipients'
); ?>

<?php echo end_sec_regularContent(); ?>


<?php echo sec_fullBleedImageColumn(
    null,
    '/alums/assets/img/alums-community/aavc/awards/arushi-raina.jpg',
    'image-is-first',
    '',
    ['img_alt_text' => 'A person with short black hair stands at a wooden podium, speaking into a microphone.']
); ?>
<h6 class="tagline">2022 Recipient</h6>
<h1>Arushi Raina ’14</h1>

<p><?php echo item_link_VideoModal(
    'Watch the video',
    'https://player.vimeo.com/video/745469490',
    'vimeo',
    '',
    'no-arrow btn-link mt-4'
); ?></p>
<?php echo cta_link(
    'https://www.vassar.edu/news/convocation-2022',
     'Read more'
); ?>

<?php echo end_sec_fullBleedImageColumn(); ?>





<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/community/community.php');?>

<?php include($project_paths['main_project_root'].'/alums/inc/pages/community/community-alums-groups.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/community/community-alums-news.php');?>
<?php echo end_sec_relatedTopics(); ?>

<?php // echo item_modal_standardVideo(); ?>

<?php echo site_footeralums(); ?>
