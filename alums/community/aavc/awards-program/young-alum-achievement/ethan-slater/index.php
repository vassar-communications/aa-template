<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */


$page_info = '{
  "page_title":"From Vassar to Broadway to Oz: Behind the Curtain with Ethan Slater ’14",
  "page_classes":"",
  "feature_image":"/alums/community/aavc/awards-program/young-alum-achievement/ethan-slater/24_slater_ethan_dan_002-crop.jpg"
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
    'Ethan Slater ’14',
    '/alums/community/aavc/awards-program/young-alum-achievement/ethan-slater/24_slater_ethan_dan_002-crop.jpg',
    'image-is-first theme-cream',
    '',
    ['img_alt_text' => 'A photo of Ethan Slater ’14, a person with brown curly hair and a dark suit. They are performing on a stage.']
); ?>


<p class="intro-text">Please join us for an exciting live interview with actor, singer, and composer Ethan Slater ’14, who was named as the recipient of the Young Alum Achievement Award by the AAVC in 2024. Award ceremony to follow.</p>


<?php echo cta_link(
    '#webcast',
     'See the webcast'
); ?>

<?php echo end_sec_fullBleedImageColumn(); ?>



<a id="webcast"></a>
<?php echo sec_regularContent(
    'Webcast',
    'theme-white mw-inner-2',
    ''
); ?>

<div style="padding:56.25% 0 0 0;position:relative;"><iframe src="https://vimeo.com/event/5560354/embed" frameborder="0" allow="autoplay; fullscreen; picture-in-picture; encrypted-media; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen style="position:absolute;top:0;left:0;width:100%;height:100%;"></iframe></div>

<?php echo end_sec_regularContent(); ?>


<?php echo sec_regularContent(
    '',
    'theme-white pt-0',
    ''
); ?>

<p>Ethan Slater ’14 originated the role of SpongeBob SquarePants on Broadway, for which he received a Tony Award nomination and won the Drama Desk, Outer Critics Circle, Theatre World, and Broadway Beacon awards. He also starred as Lee Harvey Oswald in the musical <em>Assassins</em> and in the Broadway revival of Monty Python’s <em>Spamalot</em>. Most recently, Ethan has appeared as Boq in the film adaptation of <em>Wicked</em> and the sequel, <em>Wicked for Good</em>, which was released on November 21, 2025.</p>

<?php echo end_sec_regularContent(); ?>


<?php echo site_footeralums(); ?>
