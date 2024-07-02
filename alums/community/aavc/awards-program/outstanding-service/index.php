<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */


$page_info = '{
  "page_title":"Outstanding Service to Vassar College Award",
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


<h3 class="mt-5">2024</h3>

<h4>Stephanie M. Hyacinth ’84</h4>


<ul class="linked-list">
  <li>
    <?php echo item_link_VideoModal(
        'Watch Hyacinth’s acceptance remarks',
        'https://player.vimeo.com/video/953642348',
        'vimeo',
        '',
        'no-arrow'
    ); ?>
    </li>
	</ul>


<h3 class="mt-5">2023</h3>

<h4>Stephen Hankins ’85, P’13,’17</h4>


<ul class="linked-list">
  <li>
    <?php echo item_link_VideoModal(
        'Watch Hankins’ acceptance remarks',
        'https://player.vimeo.com/video/857168936',
        'vimeo',
        '',
        'no-arrow'
    ); ?>
    </li>
		<li><a href="https://www.vassar.edu/news/aavc-announces-2023-honorees">Read more about Hankins in the June 2023 <em>Vassar Stories</em> article</a></li>
	</ul>


<h3 class="mt-5">2022</h3>

<h4>Deborah Macfarlan Enright ’82</h4>


<ul class="linked-list">
  <li>
    <?php echo item_link_VideoModal(
        'Watch Enright’s acceptance remarks',
        'https://player.vimeo.com/video/788023992',
        'vimeo',
        '',
        'no-arrow'
    ); ?>
  </li>
		<li><a href="https://www.vassar.edu/news/five-alumni-selected-2022-aavc-awards">Read more about Enright in the June 2022 <em>Vassar Stories</em> article</a></a></li>
	</ul>



<h3 class="mt-5">2021</h3>

<h4>Pat Jordan ’72, P’17</h4>


<ul class="linked-list">
  <li>
    <?php echo item_link_VideoModal(
        'Watch Jordan’s acceptance remarks',
        'https://player.vimeo.com/video/574099032?h=59bf2d53a8',
        'vimeo',
        '',
        'no-arrow'
    ); ?>
  </li>
		<li><a href="https://www.vassar.edu/news/five-honored-2021-aavc-awards" title="Five Honored with 2021 AAVC Awards">Read more about Jordan in the October 2021 <em>Vassar Stories</em> article</a></li>
	</ul>

<h3 class="mt-5">2019</h3>

<h4>Gerry Laybourne ’69, P’93</h4>


<ul class="linked-list">
		<li><a href="https://www.vassar.edu/stories/2019/190608-aavc-honors-gerry-laybourne-69-p93-with-outstanding-service-at-vassar-award.html">Read more about Laybourne in the June 2019&nbsp;<em>Vassar Stories</em>&nbsp;article</a></li>
	</ul>

<h3 class="mt-5">2018</h3>

<h4>Sally Lyman Rheinfrank ’63</h4>


<ul class="linked-list">
  <li>
    <?php echo item_link_VideoModal(
        'Watch Rheinfrank’s acceptance remarks',
        'https://www.youtube.com/embed/3cZvoALtLm0',
        'youtube',
        '',
        'no-arrow'
    ); ?>
  </li>
		<li><a href="https://www.vassar.edu/stories/2018/180628-aavc-awards.html">Read more about Rheinfrank in the June 2018&nbsp;<em>Vassar Stories</em>&nbsp;article</a></li>
	</ul>

<h3 class="mt-5">2016</h3>

<h4>Barbara Manfrey Vogelstein ’76</h4>


<ul class="linked-list">
		<li><a href="https://www.vassar.edu/news/aavc-honors-barbara-manfrey-vogelstein-76-outstanding-service">Read more about Vogelstein in the July 2016 Vassar news article</a></li>
	</ul>

<h3 class="mt-5">2015</h3>

<h4>African American Alumnae/i of Vassar College (AAAVC)</h4>


<ul class="linked-list">
		<li><a href="https://www.vassar.edu/vq/issues/2015/02/beyond-vassar/service-award.html">Read more about the AAAVC in the Spring/Summer 2015&nbsp;<em>VQ</em>&nbsp;article</a></li>
		<!--<li><a href="/alums/aavc/awards/outstanding-service-award/ken-miles">Read the Acceptance Remarks by former AAAVC co-chair Kenneth Miles ’07</a></li>-->
	</ul>

<h3 class="mt-5">2013</h3>

<h4>Judy Axenzow Lewittes ’63</h4>


<ul class="linked-list">
		<li><a href="https://www.vassar.edu/vq/issues/2013/02/vassar-today/service-award.html">Read more about Lewittes in the Spring/Summer 2013&nbsp;<em>VQ</em>&nbsp;article</a></li>
	</ul>

<h3 class="mt-5">2011</h3>

<h4>Milbrey “Missie” Rennie Taylor ’68</h4>


<ul class="linked-list">
		<li><a href="https://www.vassar.edu/vq/issues/2011/03/beyond-vassar/congratulations.html">Read more about Taylor in the Fall 2011&nbsp;<em>Vassar Quarterly</em>&nbsp;article</a></li>
	</ul>

<h3 class="mt-5">2010</h3>

<h4>Florence “FK” Millar ’44</h4>


<ul class="linked-list">
  <li>
    <?php echo item_link_VideoModal(
        'Watch Millar’s acceptance remarks',
        'https://www.youtube.com/embed/ukUbyCX9dss',
        'youtube',
        '',
        'no-arrow'
    ); ?>
  </li>
		<li><a href="https://www.vassar.edu/vq/issues/2011/01/a-look-back/for-school-for-country.html">Read more about Millar in the Winter 2011&nbsp;<em>Vassar Quarterly</em>&nbsp;article</a></li>
	</ul>

<h3 class="mt-5">2009</h3>

<h4>Richard “Ricky” W. Roberts ’74</h4>


<ul class="linked-list">
<li>
  <?php echo item_link_VideoModal(
      'Watch Roberts’ acceptance remarks',
      'https://www.youtube.com/embed/ArJ4xCZXeI8',
      'youtube',
      '',
      'no-arrow'
  ); ?>
</li>
		<li><a href="https://www.vassar.edu/vq/issues/2009/04/beyond-vassar/outstanding-service.html">Read more about Roberts in the Fall 2009&nbsp;<em>Vassar Quarterly</em>&nbsp;article</a></li>
	</ul>

<h3 class="mt-5">2008</h3>

<h4>Fay Gambee ’62</h4>


<ul class="linked-list">
		<!-- <li><a href="https://www.vassar.edu/alums/aavc/awards/outstanding-service-award/fay-gambee">Read Gambee’s Acceptance Remarks</a></li> -->
		<li><a href="https://www.vassar.edu/vq/issues/2009/01/beyond-vassar/outstanding-service.html">Read more about Gambee in the Winter 2008&nbsp;<em>Vassar Quarterly</em>&nbsp;article</a></li>
	</ul>

<h3 class="mt-5">2007</h3>

<h4>Mary Pick Hines ’53</h4>


<ul class="linked-list">
		<li><a href="https://www.vassar.edu/vq/issues/2008/01/beyond-vassar/outstanding-service.html">Read more about Hines in the Winter 2007&nbsp;<em>Vassar Quarterly</em>&nbsp;article</a></li>
	</ul>

<h3 class="mt-5">2006</h3>

<h4>Richard Van Demark ’77</h4>


<ul class="linked-list">
		<li><a href="https://www.vassar.edu/vq/issues/2006/04/beyond-vassar/outstanding-service.html">Read more about Van Demark in the Fall 2006&nbsp;<em>Vassar Quarterly</em>&nbsp;article</a></li>
	</ul>

<h3 class="mt-5">2005</h3>

<h4>Virginia Cretella Mars ’51</h4>


<ul class="linked-list">
		<!--<li><a href="/alums/aavc/awards/outstanding-service-award/virginia-cretella-mars">Read Mars’&nbsp;Acceptance Remarks</a></li>-->
		<li><a href="https://www.vassar.edu/vq/issues/2005/04/beyond-vassar/service-award-2005.html">Read more about Mars in the Fall 2005&nbsp;<em>Vassar Quarterly</em>&nbsp;article</a></li>
	</ul>

<h3 class="mt-5">2004</h3>

<h4>Kathleen “Kay” Holman Langan ’46</h4>


<ul class="linked-list">
		<!-- <li><a href="https://www.vassar.edu/alums/aavc/awards/outstanding-service-award/kathleen-holman-langan">Read Langan’s Acceptance Remarks</a></li> -->
		<li><a href="https://www.vassar.edu/vq/issues/2004/04/beyond-vassar/outstanding-service.html">Read more about Langan in the Fall 2004&nbsp;<em>Vassar Quarterly</em>&nbsp;article</a></li>
	</ul>

<h3 class="mt-5">2003</h3>

<h4>Eugenie Aiguier Havemeyer ’51</h4>


<ul class="linked-list">
		<!--<li><a href="/alums/aavc/awards/outstanding-service-award/eugenie-aiguier-havemeyer">Read Havemeyer’s Acceptance Remarks</a></li>-->
		<li><a href="https://www.vassar.edu/vq/issues/2003/04/connecting/outstanding-service.html">Read more about Havemeyer in the Fall 2003&nbsp;<em>Vassar Quarterly</em>&nbsp;article</a></li>
	</ul>

<h3 class="mt-5">2002</h3>

<h4>Frances “Frannie” Aaron Hess ’53</h4>


<ul class="linked-list">
		<!--<li><a href="/alums/aavc/awards/outstanding-service-award/frances-aaron-hess">Read Hess’&nbsp;Acceptance Remarks</a></li>-->
		<li><a href="https://www.vassar.edu/vq/issues/2002/04/connecting/">Read more about Hess in the Fall 2002&nbsp;<em>Vassar Quarterly</em>&nbsp;article</a></li>
	</ul>

<h3 class="mt-5">2001</h3>

<h4>Frances “Franny” Prindle Taft ’42</h4>


<ul class="linked-list">
		<!--<li><a href="/alums/aavc/awards/outstanding-service-award/frances-prindle-taft">Read Taft’s Acceptance Remarks</a></li>-->
		<li><a href="https://www.vassar.edu/vq/issues/2001/04/features/aavc-awards.html">Read more about Taft in the Fall 2001&nbsp;<em>Vassar Quarterly</em>&nbsp;article</a></li>
	</ul>


<?php echo end_sec_regularContent(); ?>

<?php // echo item_modal_standardVideo(); ?>

<?php echo site_footeralums(); ?>
