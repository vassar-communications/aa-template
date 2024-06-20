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

<?php echo page_partialmasthead($page_info['feature_image'], ['image_alt_text' => 'The front of Main Building on the Vassar campus, a large red brick building. In front of the building lies a circular garden area adorned with various types of colorful flowers.']); ?>

<?php echo interior_page_nav() ?>

<?php /*  PAGE CONTENT === */ ?>

<?php echo sec_fullBleedImageColumn(
    null,
    $alums_img_path.'alums-community/aavc/0124-19-10-kr-spirit-award-vassar-0814.jpg',
    'image-is-first theme-cream',
    '',
    ['img_alt_text' => 'A group of people stand in a wood-paneled dining room applauding Professor Robert Brigham, a person with a bald head and a full white beard and mustache, wearing a suit.']
); ?>
<p class="intro-text">The Alumnae/i Association of Vassar College (AAVC) Awards Program was inaugurated in 2001 to recognize alums who have made significant contributions to the vitality and success of the College and AAVC.</p>

<?php echo end_sec_fullBleedImageColumn(); ?>

<?php echo sec_regularContent(
        'Distinguished Achievement Award',
        '',
        ''); ?>
<p>The Distinguished Achievement Award is presented to an alum who has reached the highest level in their professional field. While demonstrating exceptional talent, application, creativity, and skill within a certain career, this individual should exemplify the ideals of a liberal arts education and have used their position of visibility, power, or leadership to better the human community and serve the wider goals of society.</p>
<?php echo cta_link(
    '/alums/community/aavc/awards-program/distinguished-achievement',
     'See past Distinguished Achievement Award recipients'
); ?>

<?php echo end_sec_regularContent(); ?>

<?php echo sec_fullBleedImageColumn(
    null,
    '/alums/assets/img/alums-community/aavc/awards/Sau-Lan-Wu-distinguished-ach-2024.jpg',
    'image-is-first',
    '',
    ['img_alt_text' => 'A person with long black hair wearing a red and black patterned jacket stands in front of a blackboard with equations written on it, holding a microphone and smiling.']
); ?>
<h6 class="tagline">2023 Recipient</h6>
<h1>Sau Lan Yu Wu ’63</h1>


<p><?php echo item_link_VideoModal(
    'Watch Sau Lan Yu Wu’s 2014 Commencement address via video',
    'https://www.youtube.com/watch?v=jERTKiNbARU',
    'vimeo',
    '',
    'no-arrow btn-link mt-4'
); ?></p>

<?php echo cta_link(
    'https://www.vassar.edu/news/aavc-announces-2023-honorees',
     'Read more about Sau Lan Yu Wu'
); ?>


<?php echo end_sec_fullBleedImageColumn(); ?>


<?php echo sec_regularContent(
    'Outstanding Service to Vassar College Award',
    'theme-verylightgray',
    ''); ?>
<p>The Outstanding Service Award is presented to an alum in recognition of their extraordinary commitment, leadership, and service in promoting the goals and highest interests of Vassar College and the AAVC. The award honors outstanding contributions made over a number of years in any or all of these volunteer capacities: class, club, and committee activities; fundraising; enriching campus life; or stewardship as board members, trustees, or donors. Outstanding Service Award winners are ambassadors on behalf of Vassar College to the alums and to the larger community.</p>
<?php echo cta_link(
    '/alums/community/aavc/awards-program/outstanding-service',
     'See past AAVC Outstanding Service Award recipients'
); ?>

<?php echo end_sec_regularContent(); ?>


<?php echo sec_fullBleedImageColumn(
    null,
    '/alums/assets/img/alums-community/aavc/awards/steve-hankins-52958792570_6631bb839b_k.jpg',
    'image-is-first theme-verylightgray',
    '',
    ['img_alt_text' => 'Two women, one with brown hair and the other with a baseball cap on her head, and one man with gray hair holding a glass plaque stand smiling at the camera.']
); ?>
<h6 class="tagline">2023 Recipient</h6>
<h1>Stephen Hankins ’85, P’13,’17</h1>


<p><?php echo item_link_VideoModal(
    'Watch the Steve Hankins video',
    'https://player.vimeo.com/video/857168936',
    'vimeo',
    '',
    'no-arrow btn-link mt-4'
); ?></p>
<?php echo cta_link(
    'https://www.vassar.edu/news/aavc-announces-2023-honorees',
     'Read more about Steve Hankins'
); ?>




<?php echo end_sec_fullBleedImageColumn(); ?>


<?php echo sec_regularContent(
    'Spirit of Vassar Award',
    '',
    ''); ?>
<p>The Spirit of Vassar Award is presented to an alum who has demonstrated extraordinary and distinguished leadership, contribution, and commitment to serving a community in which they effect positive, transformative societal change. This contribution may have been made through the recipient’s career, community work, or volunteer service. The award recognizes the values of service and civic responsibility that are fundamental to a Vassar education.</p>

<?php echo cta_link(
    '/alums/community/aavc/awards-program/spirit-of-vassar',
     'See past Spirit of Vassar Award recipients'
); ?>

<?php echo end_sec_regularContent(); ?>

<?php echo sec_fullBleedImageColumn(
    null,
    '/alums/assets/img/alums-community/aavc/awards/0030-24-04-kma-harris-award-vassar-8953-square.jpg',
    'image-is-first',
    '',
    ['img_alt_text' => 'Four people of various ages stand together, smiling at the viewer.']
); ?>
<h6 class="tagline">2023 Recipient</h6>
<h1>Pamela Harris ’92</h1>


<?php echo cta_link(
    'https://www.vassar.edu/news/aavc-announces-2023-honorees',
     'Read more about Pamela Harris'
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
     'See past Outstanding Faculty/Staff Award recipients'
); ?>

<?php echo end_sec_regularContent(); ?>

<?php echo sec_fullBleedImageColumn(
    null,
    '/alums/assets/img/alums-community/aavc/awards/abigail-baird-52957810832_cc603f0fcf_k.jpg',
    'image-is-first theme-verylightgray',
    '',
    ['img_alt_text' => 'Three women of varying ages stand smiling at the camera, with the one in the middle holding a glass plaque.']
); ?>
<h6 class="tagline">2023 Recipient</h6>
<h1>Abigail Baird ’91</h1>
<p class="intro-text">Professor of Psychological Science on the Arnhold Family Chair</p>

<p><?php echo item_link_VideoModal(
    'Watch the Abigail Baird video',
    'https://player.vimeo.com/video/857168905',
    'vimeo',
    '',
    'no-arrow btn-link mt-4'
); ?></p>

<?php echo cta_link(
    'https://www.vassar.edu/news/aavc-announces-2023-honorees',
     'Read more about Abigail Baird'
); ?>


<?php echo end_sec_fullBleedImageColumn(); ?>


<?php echo sec_regularContent(
    'Young Alum Achievement or Service Award',
    '',
    ''); ?>
<p>The Young Alum Achievement or Service Award is presented to an alum recognized for either their extraordinary service to Vassar in any aspect of engagement or for their exceptional personal and professional achievement(s) within their respective field. As a graduate within the last 10 years, the recipient should be inspirational to their peers and the current student body, while exemplifying the fruits of a successful liberal arts education at Vassar.</p>
<?php echo cta_link(
    '/alums/community/aavc/awards-program/young-alum-achievement',
     'See past Young Alum Achievement or Service Award recipients'
); ?>

<?php echo end_sec_regularContent(); ?>


<?php echo sec_fullBleedImageColumn(
    null,
    '/alums/assets/img/alums-community/aavc/awards/priya-nair-0091-23-08-bl-convocation-nair-vassar-12.jpg',
    'image-is-first',
    '',
    ['img_alt_text' => 'Three people, all with dark brown hair, stand smiling at the camera, with the person in the middle holding a glass plaque.']
); ?>
<h6 class="tagline">2023 Recipient</h6>
<h1>Priya Nair ’15</h1>

<p><?php echo item_link_VideoModal(
    'Watch the Priya Nair video',
    'https://player.vimeo.com/video/859555999',
    'vimeo',
    '',
    'no-arrow btn-link mt-4'
); ?></p>
<?php echo cta_link(
    'https://www.vassar.edu/news/convocation-2023',
     'Read more about Priya Nair'
); ?>

<?php echo end_sec_fullBleedImageColumn(); ?>





<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/community/community.php');?>

<?php include($project_paths['main_project_root'].'/alums/inc/pages/community/community-alums-groups.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/community/community-alums-news.php');?>
<?php echo end_sec_relatedTopics(); ?>

<?php // echo item_modal_standardVideo(); ?>

<?php echo site_footeralums(); ?>
