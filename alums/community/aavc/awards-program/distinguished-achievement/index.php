<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */


$page_info = '{
  "page_title":"Distinguished Achievement Award",
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

<h3 class="mt-5">2021</h3>

<h4>Meryl Streep ’81, P’08, ’13</h4>

<ul class="linked-list">
  <li><a href="https://www.vassar.edu/news/meryl-streep-accepts-aavc-distinguished-achievement-award">Read about the recipient</a></li>
</ul>


<h3 class="mt-5">2020</h3>

<h4>John Carlstrom ’81</h4>

<ul class="linked-list">
  <li>
    <?php echo item_link_VideoModal(
        'Watch the video',
        'https://player.vimeo.com/video/508572472',
        'vimeo',
        '',
        'no-arrow'
    ); ?>
  </li>
  <li>
    <a href="https://read.nxtbook.com/vassar/vq/summer_fall_2020/the_aavc_announces_annual_awa.html#">Read more about Carlstrom in the Summer/Fall 2020&nbsp;<em>Vassar Quarterly</em>&nbsp;magazine</a>
  </li>
</ul>

<h3 class="mt-5">2019</h3>

<h4>Phyllis Bronfman Lambert ’48</h4>

<ul class="linked-list">
  <li>
<a href="https://stories.vassar.edu/2019/190911-aavc-honors-six-alumnaei-during-convocation.html">Read more about Lambert in the September 2019&nbsp;<em>Vassar Stories</em>&nbsp;article</a>
  </li>
</ul>

<h3 class="mt-5">2018</h3>

<h4>Lynn Povich ’65</h4>


<ul class="linked-list">
  <li>
    <?php echo item_link_VideoModal(
        'Watch the video',
        'https://www.youtube.com/embed/UY5tKY9kVJ8',
        'youtube',
        '',
        'no-arrow'
    ); ?>
  </li>
  <li>
    <a href="https://stories.vassar.edu/2018/180914-lynn-povich.html">Read more about Povich in the September 2018&nbsp;<em>Vassar Stories</em> article</a>
  </li>
</ul>


<h3 class="mt-5">2017</h3>

<h4>Frances “Sissy” Tarlton Farenthold ’46, P’75</h4>

<ul class="linked-list">
  <li>
    <?php echo item_link_VideoModal(
        'Watch the video',
        'https://www.youtube.com/embed/u44NpcIgbXM',
        'youtube',
        '',
        'no-arrow'
    ); ?>
  </li>

  <li>
    <a href="http://stories.vassar.edu/2017/170912-fall-convocation.html">Read more about Farenthold in the September 2017&nbsp;<em>Vassar Stories</em>&nbsp;article</a>
  </li>
</ul>

<h3 class="mt-5">2013</h3>

<h4>Rebecca Eaton ’69</h4>

<ul class="linked-list">
  <li>
<a href="http://vq.vassar.edu/issues/2013/01/features/mistress-of-masterpiece.html">Read more about Eaton in the Winter 2013&nbsp;<em>Vassar Quarterly</em>&nbsp;article</a>
  </li>
</ul>



<h3 class="mt-5">2012</h3>

<h4>Linda Nochlin ’51</h4>

<ul class="linked-list">
  <li>
    <a href="http://vq.vassar.edu/issues/2012/01/beyond-vassar/linda-nochlin-51.html">Read more about Nochlin in the Winter 2012&nbsp;<em>Vassar Quarterly</em>&nbsp;article</a>
  </li>
</ul>

<h3 class="mt-5">2010</h3>

<h4>Dr. Anne B. Young ’69</h4>

<ul class="linked-list">
  <li>
    <a href="http://vq.vassar.edu/issues/2010/03/science-at-work/anne-buckingham-young-69.html">Read more about Young in the Fall 2010&nbsp;<em>Vassar Quarterly</em>&nbsp;article</a>
  </li>
</ul>

<h3 class="mt-5">2009</h3>

<h4>Frances Sternhagen ’51</h4>

<ul class="linked-list">
  <li>
    <?php echo item_link_VideoModal(
        'Watch the video',
        'https://www.youtube.com/embed/xXuVmjduFQI',
        'youtube',
        '',
        'no-arrow'
    ); ?>
  </li>
  <li>
    <a href="http://vq.vassar.edu/issues/2009/02/beyond-vassar/frances-sternhagen.html">Read more about Sternhagen in the Spring 2009&nbsp;<em>Vassar Quarterly</em>&nbsp;article</a>
  </li>
</ul>


<h3 class="mt-5">2008</h3>

<h4>Laurie Schwab Zabin ’46</h4>

<ul class="linked-list">
  <li>
    <?php echo item_link_VideoModal(
        'Watch the video',
        'https://www.youtube.com/embed/qNTLtexVkCI',
        'youtube',
        '',
        'no-arrow'
    ); ?>
  </li>
  <li><a href="http://vq.vassar.edu/issues/2008/02/features/dynamic-ideas-on-population.html">Read more about Zabin in the Spring 2008&nbsp;<em>Vassar Quarterly</em>&nbsp;article</a></li>
</ul>


<h3 class="mt-5">2007</h3>

<h4>Vera Rubin ’48</h4>

<ul class="linked-list">
<!-- <li><a href="/alums/aavc/awards/distinguished-achievement/vera-rubin">Read Rubin’s Acceptance Remarks</a></li> -->
  	<li><a href="http://vq.vassar.edu/issues/2007/01/beyond-vassar/distinguished-achievement.html">Read more about Rubin in the Winter 2006&nbsp;<em>Vassar Quarterly</em>&nbsp;article</a></li>
</ul>

<h3 class="mt-5">2006</h3>

<h4>Katharine Lee Reid ’63</h4>

<ul class="linked-list">
  <li>
<a href="http://vq.vassar.edu/issues/2006/01/beyond-vassar/distinguished-achievement.html">Read more about Reid in the Winter 2005&nbsp;<em>Vassar Quarterly</em>&nbsp;article</a>
  </li>
</ul>

<h3 class="mt-5">2005</h3>

<h4>Jamshed J. Bharucha ’78</h4>

<ul class="linked-list">
  <li>
<a href="http://vq.vassar.edu/issues/2005/01/beyond-vassar/distinguished-achievement.html">Read more about Bharucha in the Winter 2004&nbsp;<em>Vassar Quarterly</em>&nbsp;article</a>
  </li>
</ul>

<h3 class="mt-5">2004</h3>

<h4>Ellen May Galinsky ’64</h4>

<ul class="linked-list">
<!-- <li><a href="/alums/aavc/awards/distinguished-achievement/ellen-may-galinsky">Read Galinsky's Acceptance Remarks</a></li> -->
    	<li><a href="http://vq.vassar.edu/issues/2004/01/connecting/distinguished-achievement.html">Read more about Galinsky in the Winter 2003&nbsp;<em>Vassar Quarterly</em>&nbsp;article</a></li>
</ul>

<h3 class="mt-5">2003</h3>

<h4>Dr. June Jackson Christmas ’45-4</h4>

<ul class="linked-list">
  <li>
<a href="http://vq.vassar.edu/issues/2003/01/connecting/">Read more about Christmas in the Winter 2002&nbsp;<em>Vassar Quarterly</em>&nbsp;article</a>
  </li>
</ul>


<h3 class="mt-5">2002</h3>

<h4>Pauline Newman ’47</h4>

<ul class="linked-list">
  <li>
<a href="http://vq.vassar.edu/issues/2002/01/connecting/distinguished-achievement.html">Read more about Newman in the Winter 2001&nbsp;<em>Vassar Quarterly</em>&nbsp;article</a>
  </li>
</ul>

<?php echo end_sec_regularContent(); ?>

<?php // echo item_modal_standardVideo(); ?>

<?php echo site_footeralums(); ?>
