
<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
 ?>
<?php

/*  PAGE INFO ============ */

$page_title = "Explore Vassar";
$page_classes = "";

/*  ---------------------- */

?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation(); ?>

<?php echo breadcrumbNav('theme-charcoal'); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/nav-elements/admission-breadcrumb.php');?>
<?php echo end_sec_breadcrumbNav(); ?>

<?php echo page_masthead('https://images.unsplash.com/photo-1651035157347-e92d6a3cd958?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2066&q=80'); ?>



<?php echo toplinksNav(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/nav-elements/admission-explore-nav.php');?>
<?php echo end_sec_toplinksNav(); ?>



<?php echo sec_wordByWord(
    null,
    'animate-when-content-appears space-around-image theme-dark-burgundy',
    ''
); ?>
<p>Freedom to Discover</p>

<?php echo end_sec_wordByWord(); ?>


<?php echo sec_hasColumns(
    null,
    2,
    null,
    'theme-cream',
    null
); ?>

<?php echo item_col(); ?>
<h2>Vassar’s unique community is an environment that sparks curiosity. Everyone can discover their individual path beyond the edges to make a positive impact on the world.</h2>
<?php echo end_item_col(); ?>

<?php echo item_col(); ?>
<img src="https://vassartest.chuckyatsuk.com/img/0073-21-06-kr-summer-vassar-0165.jpg" />
<?php echo end_item_col(); ?>

<?php echo end_sec_hasColumns(); ?>
<?php echo sec_fullBleedImageColumn(
    null,
    'https://vassartest.chuckyatsuk.com/img/0073-21-06-kr-summer-vassar-0165.jpg',
    'image-is-first',
    'mw-100'
); ?>
<h2>Academics</h2>
<p>The Vassar curriculum is diverse, flexible, and fiercely bold. We were one of the country’s first colleges to experiment with interdepartmental courses in the early 20th century, and we have never stopped evolving. This is what makes a Vassar education future-facing.</p>

<a class="px-0 btn btn-link" href="#" role="button">Explore Academics</a>
<?php echo end_sec_fullBleedImageColumn(); ?>


<?php echo sec_fullBleedImageColumn(
    null,
    'https://uc0f1151c7d62295925e122e68e5.previews.dropboxusercontent.com/p/thumb/ABh4cKfoemfidnVWmU30VR9a1k1_dV75TkceF6BrSwHXEQTI5Euzosw_Vm5iW_ZSsACNZIN1ZX_0NWeZOO0pjeevSIhKFzQXvAG2lcrif6jH7AxZ_Rku82pmVLS1fsJOT10JMh23hZL5exc6zPMKvjZ5LvuYXYo_yPbgnzcENFtv21XTXb9KY7UU6u6UtAJ0QdLN8WxZPIAt8U-_TykitmXYcG8PH8QpTsamC4XsLVPFLMpIdTFBJVF010bgox-dmwQ_sC6Zrmk4CrzrkQAbqHiHqDwTXZb2t71AwhsYMBJ49BEH8qAf9vrxIrp54IbNFEbDJQDqSMBO8DV_m3neibEn3iLXkEpceDSD-fBVLbXr6kIDNOiRA2-AVlGbVepfyu4/p.jpeg',
    '',
    'mw-100'
); ?>
<h2>Student Life</h2>
<p>Vassar’s community is full of character, collaboration, and diversity. People of all perspectives and backgrounds come here to learn, work, and live together in the proud tradition of a residential liberal arts college.</p>

<a class="px-0 btn btn-link" href="#" role="button">Explore Student Life</a>
<?php echo end_sec_fullBleedImageColumn(); ?>



<?php echo sec_fullBleedImageColumn(
    null,
    'https://uc47369c29474ae26cc7f03462a2.previews.dropboxusercontent.com/p/thumb/ABjlx1r9khmSl4yqr2OvfRi-8HlYlDXLWWrpjkn_MuHtUI7untO1Eu_mRtlRV0Ou-haiCNzmXNbdtTlHnh4k5a3XDG8dDJtfdmT7F1fixunEqDdsukSAglNSCOgg0di3ZXgRPsyWQr05RYWijaZeoAiFh4shriOmHW7eMlZLI42CGpvUOK5Gk5-E0qlYgl6w4ID1TesAl9-wKn40k_Gv1adtg1S7-vcbNCGeHqC4lt28RACTGDNED1RLkp4T46f6sYj2XfXQ2cIN6IjSPLZsZ4StsJCKh2Sg-7OGOKcbjDusolJJvmvb9Hd1UPuESetNmnseoEYPUHY1Ff7HjHn7S9b5p_SHxBiw-NYqHY3d7ALevt7kekmESqF052CpcP38tss/p.jpeg',
    'image-is-first',
    'mw-100'
); ?>
<h2>Diversity & Inclusion</h2>
<p>We celebrate our differences and our connections and provide resources that are committed to the healthy support of all members of our community.</p>

<a class="px-0 btn btn-link" href="#" role="button">Explore Diversity & Inclusion</a>
<?php echo end_sec_fullBleedImageColumn(); ?>


<?php echo sec_fullBleedImageColumn(
    null,
    'https://images.unsplash.com/photo-1651035157347-e92d6a3cd958?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2066&q=80',
    '',
    'mw-100'
); ?>
<h2>Campus</h2>
<p>On Vassar’s 1,000-acre campus, students have access to timeless architecture blended with cutting-edge facilities.</p>

<a class="px-0 btn btn-link" href="#" role="button">Explore Campus</a>
<?php echo end_sec_fullBleedImageColumn(); ?>


<?php echo sec_fullBleedImageColumn(
    null,
    'https://uc5010b2be5b554774671b5cf5a9.previews.dropboxusercontent.com/p/thumb/ABjjNKb7AP26JRkt2mKcKNt2RFgWDE7ZT7hkkIsuqKyHJg89aNtkpB1lNRT216jcP79OxcYeFRTvGTe0cRVGuxdgT4y-MNAWu1T5aXSa4zIX7HGo1dXZb0PcrYTfvv1eq1axuU0jcrZVLtZj5iu93smlW2DTdSdIk63nkjLJL1N41EPI_i8q8JVmpks-7ieGx0FddYcJ9aO4T4AcBCn_rbpOCtFw69CqsNUtDwiqys-ALB6n0qMYBmqwrmRJpDx7DyXrrJ84JF0y6njL7I5Biu1BbeRqZtr5YfojE6tlxcphSbI-gIUJMVrjPYoQAMUivOaFY9gHcxBE5sdxysYoOwUmuExHELTsCke91oFY8BoA80ZE7eq17PxK6HfQf8sRg1g/p.jpeg',
    'image-is-first',
    'mw-100'
); ?>
<h2>Outcomes</h2>
<p>At Vassar, you’ll discover who you are, who you want to be, where you want to go, and how you can get there. We are committed to supporting your growth and success from day one.</p>

<a class="px-0 btn btn-link" href="#" role="button">Explore Outcomes</a>
<?php echo end_sec_fullBleedImageColumn(); ?>

<?php echo sec_fullBleedImageColumn(
    null,
    'https://ucd9d550b673457f91d54dfaae35.previews.dropboxusercontent.com/p/thumb/ABjDMNOhejOuOe4QJ9qLSyRuooDhsMetkMmTModhAgD33ur3jhsT7-b1p-5y1bbRlIbAHPp_QEbj2JOkzOLcbHQmXf38icB4Qo1aseAcW1EZkYoxdV936-DirJ5epYmMPJ3_c3tdF5oZj4cHEZbav0cx9rSGSp2vTPMk2XOwqf-3cO3UIVSkKu6sxTKxBUW2TRHAx4mbJHZnaupE9SyRqFO6561jqD2GdpdEBVrDjCwIrPmQQNQlQ2IpLJb--dlP7YvF4_dm8jgKmWoHMWQtfrt2-U50cHkixvIrWeXaDv54CJpyexqKlYmCTe03Yvj_5NGJenfdDJJ-AObeoqmVi5XK3ZhR6R84nDWHDwiJvHcgCUFJ2Hq9OmjFM8zNBQSPGfY/p.jpeg',
    '',
    'mw-100'
); ?>
<h2>Poughkeepsie & The Hudson Valley</h2>
<p>One of the country’s hidden gems is just off campus. Poughkeepsie and the Hudson Valley boast a variety of cultural experiences, dining, shopping, and 22 surrounding parks.</p>

<a class="px-0 btn btn-link" href="#" role="button">Explore Poughkeepsie & The Hudson Valley</a>
<?php echo end_sec_fullBleedImageColumn(); ?>


<?php echo sec_hasColumns(
    null,
    2,
    null,
    'theme-cream',
    null
); ?>

<?php echo item_col(); ?>

<?php echo end_item_col(); ?>

<?php echo item_col(); ?>
<?php echo end_item_col(); ?>
<?php echo end_sec_hasColumns(); ?>

<?php /*  PAGE CONTENT === */ ?>

<?php echo site_footer(); ?>
