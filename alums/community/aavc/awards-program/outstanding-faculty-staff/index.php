<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */


$page_info = '{
  "page_title":"Outstanding Faculty/Staff Award",
  "page_classes":"",
  "feature_image":"/alums/assets/img/alums-community/aavc/board/hom-delia-cheung-aavc-alum-001.jpg"
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

<?php echo sec_regularContent(
    'Past Recipients',
    'theme-white',
    ''
); ?>


<h3 class="mt-5">2022</h3>

<h4>Edward Pittman ’82, Senior Associate Dean of the College (Retired)</h4>

<ul class="linked-list">
  <!--
  <li>
    <?php echo item_link_VideoModal(
        'Watch the video',
        'https://player.vimeo.com/video/637580661?h=2fa683eea6',
        'vimeo',
        '',
        'no-arrow'
    ); ?>
  </li>-->

	<li><a href="https://www.vassar.edu/news/five-alumni-selected-2022-aavc-awards">Read about the recipient</a></li>
</ul>


<h3 class="mt-5">2021</h3>

<h4>Rachel Kitzinger, Professor Emerita of Greek and Roman Studies</h4>

<ul class="linked-list">
  <li>
    <?php echo item_link_VideoModal(
        'Watch the video',
        'https://player.vimeo.com/video/637580661?h=2fa683eea6',
        'vimeo',
        '',
        'no-arrow'
    ); ?>
  </li>
	<li><a href="https://www.vassar.edu/news/five-honored-2021-aavc-awards" title="Five Honored with 2021 AAVC Awards">Read about the recipient</a></li>
</ul>

<h3 class="mt-5">2020</h3>

<h4>Robert Pounder, Professor Emeritus of Classics</h4>

<ul class="linked-list">
  <li>
    <?php echo item_link_VideoModal(
        'Watch the video',
        'https://player.vimeo.com/video/477225581?h=553302e0ad',
        'vimeo',
        '',
        'no-arrow'
    ); ?>
  </li>
	<li><a href="https://www.vassar.edu/stories/2020/professor-emeritus-robert-pounder-honored-with-aavcs-outstanding-faculty-award.html">Read more about the recipient</a></li>
	<!--<li><a href="https://read.nxtbook.com/vassar/vq/summer_fall_2020/the_aavc_announces_annual_awa.html#">Read more about the recipient</a></li>-->
</ul>
<h3 class="mt-5">2019</h3>

<h4>Robert K. Brigham, Vassar’s Shirley Ecker Boskey Professor of History and International Relations</h4>

<ul class="linked-list">
	<li><a href="https://www.vassar.edu/stories/2019/190828-aavc-bestows-2019-spirit-of-vassar-and-outstanding-faculty-awards.html">Read more about the recipient</a></li>
</ul>
<h3 class="mt-5">2018</h3>

<h4>Susan Donahue Kuretsky ’63, Professor of Art on the Sarah Gibson Blanding Chair</h4>

<ul class="linked-list">
  <li>
    <?php echo item_link_VideoModal(
        'Watch the video',
        'https://www.youtube.com/embed/Vfpr1ASPPZg',
        'youtube',
        '',
        'no-arrow'
    ); ?>
  </li>
	<li><a href="https://www.vassar.edu/stories/2018/180628-aavc-awards.html">Read more about the recipient</a></li>
</ul>
<h3 class="mt-5">2017</h3>

<h4>Glen Johnson, Professor Emeritus of Political Science</h4>

<ul class="linked-list">
  <li>
    <?php echo item_link_VideoModal(
        'Watch the video',
        'https://www.youtube.com/embed/Zl91M4N2Kzc',
        'youtube',
        '',
        'no-arrow'
    ); ?>
  </li>
	<li><a href="https://www.vassar.edu/news/glen-johnson-receives-inaugural-aavc-outstanding-facultystaff-award">Read more about the recipient</a></li>
</ul>


<?php echo end_sec_regularContent(); ?>

<?php echo item_modal_standardVideo(); ?>

<?php echo site_footeralums(); ?>
