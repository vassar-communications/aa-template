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
     'See past Distinguished Achievement Award recipients.'
); ?>

<?php echo end_sec_regularContent(); ?>

<?php echo sec_fullBleedImageColumn(
    null,
    '/alums/assets/img/alums-community/aavc/awards/CarolynMerchant-1936-ByRobertHolmgren.jpg',
    'image-is-first',
    '',
    ['img_alt_text' => 'A person with short gray hair wearing a light gray jacket over a white shirt leans on stone block in front of green trees.']
); ?>
<h6 class="tagline">2024 Recipient</h6>
<h1>2024 Distinguished Achievement Award recipient Carolyn Merchant&nbsp;’58</h1>


<p><?php echo item_link_VideoModal(
    'Watch the Carolyn Merchant video.',
    'https://player.vimeo.com/video/1051648508',
    'vimeo',
    '',
    'no-arrow btn-link mt-4'
); ?></p>

<?php echo cta_link(
    'https://www.vassar.edu/news/celebrating-excellence',
     'Read more about Carolyn Merchant.'
); ?>


<?php echo end_sec_fullBleedImageColumn(); ?>


<?php echo sec_regularContent(
    'Outstanding Service to Vassar College Award',
    'theme-verylightgray',
    ''); ?>
<p>The Outstanding Service Award is presented to an alum in recognition of their extraordinary commitment, leadership, and service in promoting the goals and highest interests of Vassar College and the AAVC. The award honors outstanding contributions made over a number of years in any or all of these volunteer capacities: class, club, and committee activities; fundraising; enriching campus life; or stewardship as board members, trustees, or donors. Outstanding Service Award winners are ambassadors on behalf of Vassar College to the alums and to the larger community.</p>
<?php echo cta_link(
    '/alums/community/aavc/awards-program/outstanding-service',
     'See past AAVC Outstanding Service Award recipients.'
); ?>

<?php echo end_sec_regularContent(); ?>


<?php echo sec_fullBleedImageColumn(
    null,
    '/alums/assets/img/alums-community/aavc/awards/hyacinth-2024-outstanding-service-53771504533_f9d4a85592_o.jpg',
    'image-is-first theme-verylightgray',
    '',
    ['img_alt_text' => 'Three people stand smiling at the viewer, with the middle person holding a an award statue.']
); ?>
<h6 class="tagline">2024 Recipient</h6>
<h1>Stephanie M. Hyacinth ’84</h1>

<?php echo cta_link(
    'https://www.vassar.edu/news/celebrating-excellence',
     'Read More About Stephanie Hyacinth.'
); ?>


<?php echo end_sec_fullBleedImageColumn(); ?>


<?php echo sec_regularContent(
    'Spirit of Vassar Award',
    '',
    ''); ?>
<p>The Spirit of Vassar Award is presented to an alum who has demonstrated extraordinary and distinguished leadership, contribution, and commitment to serving a community in which they effect positive, transformative societal change. This contribution may have been made through the recipient’s career, community work, or volunteer service. The award recognizes the values of service and civic responsibility that are fundamental to a Vassar education.</p>

<?php echo cta_link(
    '/alums/community/aavc/awards-program/spirit-of-vassar',
     'See past Spirit of Vassar Award recipients.'
); ?>

<?php echo end_sec_regularContent(); ?>

<?php echo sec_fullBleedImageColumn(
    null,
    '/alums/assets/img/alums-community/aavc/awards/Vassar_Convocation_20240904_KR_0148-square.jpg',
    'image-is-first',
    '',
    ['img_alt_text' => 'Three people, one of whom is holding a glass award, stand together smiling.']
); ?>
<h6 class="tagline">2024 Recipient</h6>
<h1>David H.J. Ambroz ’02</h1>


<p><?php echo item_link_VideoModal(
    'Watch the David Ambroz video.',
    'https://player.vimeo.com/video/1007025313',
    'vimeo',
    '',
    'no-arrow btn-link mt-4'
); ?></p>

<?php echo cta_link(
    'https://www.vassar.edu/news/celebrating-excellence',
     'Read more about David Ambroz.'
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
     'See past Outstanding Faculty/Staff Award recipients.'
); ?>

<?php echo end_sec_regularContent(); ?>

<?php echo sec_fullBleedImageColumn(
    null,
    '/alums/assets/img/alums-community/aavc/awards/0003-25-01-lpo-scc-vassar-5975-v3.jpg',
    'image-is-first theme-verylightgray',
    '',
    ['img_alt_text' => 'A group of people standing in a row in front of a fireplace, with two people in the center holding glass awards.']
); ?>
<h6 class="tagline">2024 Recipients</h6>
<h1>Stacy Bingham</h1>
<p class="intro-text">Associate Dean of the College for Career Education</p>
<h1>Jannette Swanson</h1>
<p class="intro-text">Director of External Engagement Center for Career Education</p>

<p><?php echo item_link_VideoModal(
    'Watch the Stacy Bingham and Jannette Swanson video.',
    'https://player.vimeo.com/video/1050155213',
    'vimeo',
    '',
    'no-arrow btn-link mt-4'
); ?></p>

<?php echo cta_link(
    'https://www.vassar.edu/news/celebrating-excellence',
     'Read More About Stacy Bingham and Jannette Swanson.'
); ?>


<?php echo end_sec_fullBleedImageColumn(); ?>


<?php echo sec_regularContent(
    'Young Alum Achievement or Service Award',
    '',
    ''); ?>
<p>The Young Alum Achievement or Service Award is presented to an alum recognized for either their extraordinary service to Vassar in any aspect of engagement or for their exceptional personal and professional achievement(s) within their respective field. As a graduate within the last 10 years, the recipient should be inspirational to their peers and the current student body, while exemplifying the fruits of a successful liberal arts education at Vassar.</p>
<?php echo cta_link(
    '/alums/community/aavc/awards-program/young-alum-achievement',
     'See past Young Alum Achievement or Service Award recipients.'
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
    'Watch the Priya Nair video.',
    'https://player.vimeo.com/video/859555999',
    'vimeo',
    '',
    'no-arrow btn-link mt-4'
); ?></p>
<?php echo cta_link(
    'https://www.vassar.edu/news/convocation-2023',
     'Read more about Priya Nair.'
); ?>

<?php echo end_sec_fullBleedImageColumn(); ?>





<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/community/community.php');?>

<?php include($project_paths['main_project_root'].'/alums/inc/pages/community/community-alums-groups.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/community/community-alums-news.php');?>
<?php echo end_sec_relatedTopics(); ?>

<?php // echo item_modal_standardVideo(); ?>

<?php echo site_footeralums(); ?>
