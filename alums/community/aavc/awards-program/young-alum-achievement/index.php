<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */


$page_info = '{
  "page_title":"Young Alum Achievement or Service Award",
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

<h4>Arushi Raina ’14</h4>

<ul class="linked-list">
  <li>
    <?php echo item_link_VideoModal(
      'Watch a video of Arushi Raina ’14’s award acceptance remarks',
        'https://player.vimeo.com/video/745469490',
        'vimeo',
        '',
        'no-arrow'
    ); ?>
  </li>
    <!-- <li><a href="https://www.vassar.edu/news/five-alums-selected-2022-aavc-awards">Read about Raina in the Vassar news story about the 2022 AAVC Awards</a></li> -->
    <li><a href="https://www.vassar.edu/news/convocation-2022">Read more about Raina in the Vassar news story about Convocation 2022</a></li>
</ul>






<h3 class="mt-5">2021</h3>

<h4>Marie Dugo Dilemani ’11</h4>

<ul class="linked-list">
  <li>
    <?php echo item_link_VideoModal(
      'Watch a video of Marie Dugo Dilemani ’11’s award acceptance remarks',
        'https://player.vimeo.com/video/637612799?h=4c2b5a1293',
        'vimeo',
        '',
        'no-arrow'
    ); ?>
  </li>
    <!-- <li><a href="https://www.vassar.edu/news/five-honored-2021-aavc-awards" title="Five Honored with 2021 AAVC Awards">Read about Dilemani in the Vassar news story about the 2021 AAVC Awards</a></li> -->
    <li><a href="https://www.vassar.edu/news/convocation-brings-campus-community-together-again" title="Convocation Brings the Campus Community Together Again">Read more about Dilemani in the Vassar news story about Convocation 2021</a></li>
</ul>

<h3 class="mt-5">2020</h3>

<h4>Olaf Carlson-Wee ’12</h4>

<!-- <ul class="linked-list">
    <li><a href="https://alums.vassar.edu/news/stories/2019-2020/200910-aavc-corner.html">Read more about Carlson-Wee in the August 2020 <em>Vassar Stories</em> article.</a></li>
</ul> -->

<h3 class="mt-5">2019</h3>

<h4>Jacob Adelgren ’15, Alejandro Dinsmore ’15, Matthew Griffiths ’17, Casey Hancock ’16, and Harris Gordon ’15—founders of the immersive technology company eevo.</h4>

<ul class="linked-list">
    <li><a href="https://stories.vassar.edu/2019/190911-aavc-honors-six-alumnaei-during-convocation.html">Read more about the founders of eevo in the September 2019 <em>Vassar Stories</em> article</a></li>
</ul>

<h3 class="mt-5">2018</h3>

<h4>Xiaoyuan “Charlene” Ren ’13</h4>

<ul class="linked-list">
  <li>
    <?php echo item_link_VideoModal(
      'Watch a video of Xiaoyuan Ren ’13’s award acceptance remarks',
        'https://www.youtube.com/embed/UY5tKY9kVJ8',
        'youtube',
        '',
        'no-arrow'
    ); ?>
  </li>
    <li><a href="https://stories.vassar.edu/2018/180918-making-an-immediate-impact-in-the-world.html">Read more about Ren in the September 2018 <em>Vassar Stories</em> article.</a></li>
</ul>

<h3 class="mt-5">2017</h3>

<h4>Marguerite “Maggie” O’Haire ’08</h4>

<ul class="linked-list">
<li>
  <?php echo item_link_VideoModal(
    'Watch a video of Marguerite O’Haire ’08’s award acceptance remarks',
      'https://www.youtube.com/embed/u44NpcIgbXM',
      'youtube',
      '',
      'no-arrow'
  ); ?>
  </li>
    <li><a href="http://stories.vassar.edu/2017/170912-fall-convocation.html">Read more about O’Haire in the September 2017 <em>Vassar Stories</em> article.</a></li>
</ul>

<?php echo end_sec_regularContent(); ?>

<?php // echo item_modal_standardVideo(); ?>

<?php echo site_footeralums(); ?>
