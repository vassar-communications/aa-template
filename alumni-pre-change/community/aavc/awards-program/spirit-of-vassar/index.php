<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */


$page_info = '{
  "page_title":"Spirit of Vassar Award",
  "page_classes":"",
  "feature_image":"/alumni/assets/img/alumni-community/aavc/board/hom-delia-cheung-aavc-alum-001.jpg"
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

<h4>Judge Vicki Miles-LaGrange ’74</h4>

<ul class="linked-list">
  <li>
    <?php echo item_link_VideoModal(
        'Watch the video',
        'https://player.vimeo.com/video/637566070?h=f27101b9db',
        'vimeo',
        '',
        'no-arrow'
    ); ?>
  </li>
  <li><a href="https://www.vassar.edu/news/five-honored-2021-aavc-awards" title="Five Honored with 2021 AAVC Awards">Read about the recipient in the Vassar news story about the 2021 AAVC Awards.</a></li>
</ul>

<h3 class="mt-5">2020</h3>

<h4>Susan “Susie” Neuberger Wilson ’51</h4>

<ul class="linked-list">
<li>
  <?php echo item_link_VideoModal(
      'Watch the video',
      'https://player.vimeo.com/video/502225339',
      'vimeo',
      '',
      'no-arrow'
  ); ?>
  </li>
  <li><a href="https://read.nxtbook.com/vassar/vq/summer_fall_2020/the_aavc_announces_annual_awa.html">Read more about Wilson in the Summer/Fall 2020 <em>VQ</em> magazine.</a></li>
</ul>


<h3 class="mt-5">2019</h3>

<h4>Russell Baker ’91</h4>

<ul class="linked-list">
    <li><a href="https://stories.vassar.edu/2019/190828-aavc-bestows-2019-spirit-of-vassar-and-outstanding-faculty-awards.html">Read more about Baker in the November 2019 <em>Vassar Stories</em> article.</a></li>
</ul>

<h3 class="mt-5">2018</h3>

<h4>Sherrilyn Ifill ’84</h4>
<ul class="linked-list">
<li>
  <?php echo item_link_VideoModal(
      'Watch the acceptance speech',
      'https://www.youtube.com/embed/i8gbe5T7prM',
      'youtube',
      '',
      'no-arrow'
  ); ?>
  </li>
  <li>
    <?php echo item_link_VideoModal(
      'Watch the conversation with Professor Rebecca Edwards',
        'https://www.youtube.com/embed/_dUCVnP5HoA',
        'youtube',
        '',
        'no-arrow'
    ); ?>
  </li>
    <li><a href="https://stories.vassar.edu/2019/190301-sherrilyn-ifill-spirit-of-vassar.html">Read more about Ifill in the March 2019 <em>Vassar Stories</em> article.</a></li>
</ul>

<h3 class="mt-5">2017</h3>

<h4>Jeffrey Brenner ’90</h4>

<ul class="linked-list">
    <li>
      <?php echo item_link_VideoModal(
        'Watch the video',
          'https://www.youtube.com/embed/X565YdcnsSo',
          'youtube',
          '',
          'no-arrow'
      ); ?>
    </li>
    <li><a href="https://stories.vassar.edu/2018/180306-brenner.html">Read more about Brenner in the March 2018 <em>Vassar Stories</em> article.</a></li>
</ul>

<h3 class="mt-5">2015</h3>

<h4>Linda Malone ’75</h4>

<ul class="linked-list">
<li>
  <?php echo item_link_VideoModal(
    'Watch the video',
      'https://www.youtube.com/embed/zqJ6XGB2Y1s',
      'youtube',
      '',
      'no-arrow'
  ); ?>
    </li>
    <li><a href="https://vq.vassar.edu/issues/2015/02/beyond-vassar/spirit-of-vassar.html">Read more about Malone in the Summer 2015 <em>Vassar, the Alumnae/i Quarterly</em> article.</a></li>
	<li><a href="https://www.vassar.edu/news/2015-spirit-vassar-award-linda-malone-75">Read more about Malone in the May 2015 <em>Vassar Alumnae/i</em> feature article.</a></li>
</ul>

<h3 class="mt-5">2014</h3>

<h4>Leah Johnson Wilcox ’69</h4>

<ul class="linked-list">
    <!-- <li><a href="/alums/aavc/awards/spirit-of-vassar/leah-johnson-wilcox">Read Wilcox’s Acceptance Remarks</a></li> -->
	<li><a href="http://vq.vassar.edu/issues/2014/03/vassar-today/spirit-of-vassar-award.html">Read more about Wilcox in the Fall 2014 <em>Vassar, the Alumnae/i Quarterly</em> article</a></li>
	<li><a href="https://www.vassar.edu/news/spirit-vassar-award-leah-johnson-wilcox-69">Read more about Wilcox in the July 2014 <em>Vassar Alumnae/i</em> feature article.</a></li>
</ul>

<h3 class="mt-5">2012</h3>

<h4>Michael Kimmel ’72</h4>

<ul class="linked-list">
<li>
  <?php echo item_link_VideoModal(
    'Watch the video',
      'https://www.youtube.com/embed/baUkB8zVzic',
      'youtube',
      '',
      'no-arrow'
  ); ?>
    </li>
</ul>

<h3 class="mt-5">2011</h3>

<h4>Former Living AAVC Presidents</h4>

<ul class="linked-list">
    <li>Awarded to Frances Prindle Taft ’42, Kathleen Holman Langan ’46, Joan Andrews Watters ’50, Frances Aaron Hess ’53, Billie Davis Gaines ’58, Susan McCallum Bledsoe ’64, Joan Strashinsky Kjelleren ’71, Paula Madison ’74, and Margaret Daly Johnson ’84<br>
    <a href="http://vq.vassar.edu/issues/2011/03/beyond-vassar/the-irrepressible-spirit-of-vassar.html">Read more about the AAVC Presidents in the Fall 2011 <em>Vassar, the Alumnae/i Quarterly</em> article.</a></li>
</ul>

<h3 class="mt-5">2010</h3>

<h4>Elizabeth Cushman Titus Putnam ’55</h4>

<ul class="linked-list">
    <li>
      <?php echo item_link_VideoModal(
        'Watch the video',
          'https://www.youtube.com/embed/oNUzn-tlQWs',
          'youtube',
          '',
          'no-arrow'
      ); ?>
    </li>
    <!-- <li><a href="/alums/aavc/awards/spirit-of-vassar/elizabeth-cushman-titus-putnam">Read Putnam’s Acceptance Remarks</a></li> -->
	<li><a href="http://vq.vassar.edu/issues/2005/03/features/saving-the-earth.html">Read more about Putnam in the Summer 2005 <em>Vassar, the Alumnae/i Quarterly</em> article.</a></li>
</ul>

<h3 class="mt-5">2009</h3>

<h4>Alison Church Hyde ’59</h4>

<ul class="linked-list">
    <!-- <li><a href="/alums/aavc/awards/spirit-of-vassar/alison-church-hyde">Read Hyde’s Acceptance Remarks</a></li> -->
	<li><a href="http://vq.vassar.edu/issues/2009/03/beyond-vassar/back-to-africa.html">Read more about Hyde in the Summer 2009 <em>Vassar, the Alumnae/i Quarterly</em> article.</a></li>
</ul>

<h3 class="mt-5">2008</h3>

<h4>Cornelia Dettmer ’53</h4>

<ul class="linked-list">
    <li><a href="http://vq.vassar.edu/issues/2008/03/beyond-vassar/hometown-spirit.html">Read more about Dettmer in the Summer 2008 <em>Vassar, the Alumnae/i Quarterly</em> article.</a></li>
</ul>

<h3 class="mt-5">2007</h3>

<h4>Grisela Alejandro Jackson ’78 and Reverend Robert Jackson ’77</h4>

<ul class="linked-list">
    <li><a href="http://vq.vassar.edu/issues/2007/04/features/rebuilding-new-orleans.html">Read more about the Jacksons in the Fall 2007 <em>Vassar, the Alumnae/i Quarterly</em> article.</a></li>
</ul>

<h3 class="mt-5">2006</h3>

<h4>Elizabeth Adams Daniels ’41</h4>

<ul class="linked-list">
    <li><a href="http://vq.vassar.edu/issues/2006/03/beyond-vassar/aavc-spirit-of-vassar-award.html">Read more about Daniels in the Summer 2006 <em>Vassar, the Alumnae/i Quarterly</em> article.</a></li>
	<li><a href="http://vq.vassar.edu/issues/2003/04/features/living-history.html">Read more about Daniels in the Fall 2003 <em>Vassar, the Alumnae/i Quarterly</em> article.</a></li>
</ul>

<h3 class="mt-5">2005</h3>

<h4>Belle Krasne Ribicoff ’45</h4>

<ul class="linked-list">
    <!-- <li><a href="/alums/aavc/awards/spirit-of-vassar/belle-krasne-ribicoff">Read Ribicoff’s Acceptance Remarks</a></li> -->
	<li><a href="http://vq.vassar.edu/issues/2005/03/beyond-vassar/spirit-of-vassar-award.html">Read more about Ribicoff in the Summer 2005 <em>Vassar, the Alumnae/i Quarterly</em> article.</a></li>
</ul>

<h3 class="mt-5">2004</h3>

<h4>Sylvia Cranmer McLaughlin ’39</h4>

<ul class="linked-list">
    <li><a href="http://vq.vassar.edu/issues/2004/03/connecting/spirit-of-vassar-award.html">Read more about McLaughlin in the Summer 2004 <em>Vassar, the Alumnae/i Quarterly</em> article.</a></li>
</ul>

<h3 class="mt-5">2003</h3>

<h4>Mary-Alice Hunter ’38</h4>

<ul class="linked-list">
    <li><a href="http://vq.vassar.edu/issues/2003/03/connecting/spirit-of-vassar-award.html">Read more about Hunter in the Summer 2003 <em>Vassar, the Alumnae/i Quarterly</em> article.</a></li>
</ul>

<h3 class="mt-5">2001</h3>

<h4>Steering Committee of the Philadelphia Show House</h4>

<ul class="linked-list">
    <li><a href="http://vq.vassar.edu/issues/2001/04/features/aavc-awards.html">Read more about the Philadelphia Show House in the Fall 2001 <em>Vassar, the Alumnae/i Quarterly</em> article.</a></li>
</ul>

<?php echo end_sec_regularContent(); ?>

<?php // echo item_modal_standardVideo(); ?>

<?php echo site_footeralumni(); ?>
