
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


<?php echo sec_fixedCenteredTitle_masthead(
    '<b class="slide-from-left">Explore</b>
   <b class="slide-from-right">Vassar</b>',
    null,
    'theme-verylightgray reveal-image',
    'mw-4',
    ['bg-image-url' => 'https://vassartest.chuckyatsuk.com/img/0073-21-06-kr-summer-vassar-0165.jpg',
        'bg-image-alt' => 'alt text',
        'css' => '
      --title-container-bg-beforeContent: rgba(0,0,0,0.4);
      --section-bg-image-opacity: 0;
      /* --section-title-faded-color: #444; */
      --bs-gap: 1rem;
      ']
); ?>

<?php echo end_sec_fixedCenteredTitle_masthead(); ?>


<?php echo breadcrumbNav('theme-cream'); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/nav-elements/admission-explore-breadcrumb.php');?>
<?php echo end_sec_breadcrumbNav(); ?>

<?php echo toplinksNav(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/nav-elements/admission-explore-nav.php');?>
<?php echo end_sec_toplinksNav(); ?>


<?php echo masthead_interiorPage(
    'Freedom to Discover',
    'Vassar’s unique community is an environment that sparks curiosity. Everyone can discover their individual path beyond the edges to make a positive impact on the world.',
    'https://vassartest.chuckyatsuk.com/img/0073-21-06-kr-summer-vassar-0165.jpg');
?>


<?php echo sec_fullBleedImageColumn(
    null,
    'https://vassartest.chuckyatsuk.com/img/explore/0084-19-05-ja-kumar-class-vassar-253.jpg',
    'image-is-first theme-dark-burgundy quad-pattern has-bg',
    ''
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <h2 class="display-2 mb-5 border-animate">Academics</h2>
    <p>The Vassar curriculum is diverse, flexible, and fiercely bold. We were one of the country’s first colleges to experiment with interdepartmental courses in the early 20th century, and we have never stopped evolving. This is what makes a Vassar education future-facing.</p>
    <a href="/admission/explore/academics/" class="px-0 btn btn-link arrow">Explore Academics</a>
</div>
<?php echo end_sec_fullBleedImageColumn(); ?>


<?php echo sec_fullBleedImageColumn(
    null,
    'https://vassartest.chuckyatsuk.com/img/explore/Raymond-0204-19-11-kwe-raymond-parlor-vassar-vb-2823.jpg',
    'theme-charcoal quad-pattern has-bg',
    ''
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <h2 class="display-2 mb-5 border-animate">Student Life</h2>
<p>Vassar’s community is full of character, collaboration, and diversity. People of all perspectives and backgrounds come here to learn, work, and live together in the proud tradition of a residential liberal arts college.</p>

<a href="/admission/explore/student-life/" class="px-0 btn btn-link arrow">Explore Student Life</a>
</div>
<?php echo end_sec_fullBleedImageColumn(); ?>



<?php echo sec_fullBleedImageColumn(
    null,
    'https://vassartest.chuckyatsuk.com/img/explore/muslim-prayer-space-1910-nz-201448.jpg',
    'image-is-first theme-dark-burgundy quad-pattern has-bg',
    ''
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <h2 class="display-2 mb-5 border-animate">Diversity & Inclusion</h2>
<p>We celebrate our differences and our connections and provide resources that are committed to the healthy support of all members of our community.</p>

<a href="/admission/explore/diversity-inclusion/" class="px-0 btn btn-link arrow">Explore Diversity & Inclusion</a>
</div>
<?php echo end_sec_fullBleedImageColumn(); ?>


<?php echo sec_fullBleedImageColumn(
    null,
    'https://vassartest.chuckyatsuk.com/img/explore/0216-18-10-jsu-fall-drone-vassar-R07705.jpg',
    'theme-charcoal quad-pattern has-bg',
    ''
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <h2 class="display-2 mb-5 border-animate">Campus</h2>
<p>On Vassar’s 1,000-acre campus, students have access to timeless architecture blended with cutting-edge facilities.</p>



<a href="/admission/explore/campus/" class="px-0 btn btn-link arrow">Explore Campus</a>

</div>
<?php echo end_sec_fullBleedImageColumn(); ?>


<?php echo sec_fullBleedImageColumn(
    null,
    'https://vassartest.chuckyatsuk.com/img/explore/0002-20-01-kr-scc-networking-vassar-0041.jpg',
    'image-is-first theme-dark-burgundy quad-pattern has-bg',
    ''
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <h2 class="display-2 mb-5 border-animate">Outcomes</h2>
<p>At Vassar, you’ll discover who you are, who you want to be, where you want to go, and how you can get there. We are committed to supporting your growth and success from day one.</p>


<a href="/admission/explore/outcomes/" class="px-0 btn btn-link arrow">Explore Outcomes</a>
</div>
<?php echo end_sec_fullBleedImageColumn(); ?>
<?php echo sec_fullBleedImageColumn(
    null,
    'https://vassartest.chuckyatsuk.com/img/explore/Poughkeepsie_night_DSC_8551.jpg',
    'theme-charcoal quad-pattern has-bg',
    ''
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <h2 class="display-2 mb-5 border-animate">Poughkeepsie & The Hudson Valley</h2>
<p>One of the country’s hidden gems is just off campus. Poughkeepsie and the Hudson Valley boast a variety of cultural experiences, dining, shopping, and 22 surrounding parks.</p>

<a href="/admission/explore/poughkeepsie-hudson-valley/" class="px-0 btn btn-link arrow">Explore Poughkeepsie & The Hudson Valley</a>
</div>
<?php echo end_sec_fullBleedImageColumn(); ?>




<?php /*  PAGE CONTENT === */ ?>

<?php echo site_footer(); ?>
