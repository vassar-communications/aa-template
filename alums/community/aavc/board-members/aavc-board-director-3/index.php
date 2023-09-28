<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */


$page_info = '{
  "page_title":"AAVC Board Director",
  "page_classes":"",
  "feature_image":"/alums/assets/img/alums-community/aavc/board/nagae-peggy-ann-aavc-alum-001.jpg"
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
    'Peggy Ann Nagae ’73',
    '/alums/assets/img/alums-community/aavc/board/nagae-peggy-ann-aavc-alum-001.jpg',
    'image-is-first theme-cream',
    '',
    ['img_alt_text' => 'Peggy Ann Nagae ’73']
); ?>

  <ul class="clean-list-with-borders">
    <li>Nominating and Governance Committee Member and Ad Hoc Diversity, Equity and Inclusion Committee Member</li>
    <li>(she/her/hers)</li>
    <li>Oregon</li>
    <li>Term of Service: 2022–2026</li>
  </ul>

<?php echo end_sec_fullBleedImageColumn(); ?>

<?php echo sec_regularContent(
    'Additional Vassar Volunteer Experience',
    null,
    '',
    ''
); ?>
<p>Member, AAVC Ad Hoc Diversity, Equity, & Inclusion Committee, 2021–2022; notewriter or phoner, Phonathon Program, 1995–1996.</p>
<?php echo end_sec_regularContent(); ?>

<?php echo sec_regularContent(
    'Professional/Community Experience',
    'theme-extralightgray',
    '',
    ''
); ?>
<p>Owner and Consultant, peggynagae consulting, 1991–present; Senior Consultant, WMFDP | FDPGlobal, 2013–2020; COO, WMFDP | FDPGlobal, 2017–2019; Program Director (part-time), The Center for Asian Pacific American Women, 2008–2016; Adjunct Professor, Alternative Dispute Resolution, University of Puget Sound School of Law, 1991–1992; Director of Associates and Of Counsel, Betts, Patterson Mines, P.S., 1989–1991; Associate, Betts, Patterson Mines, P.S., 1987–1988; Principal and Consultant, Spectra Communications, 1988; Assistant Dean for Academic Affairs, University of Oregon School of Law, 1982–1987.</p>
<?php echo end_sec_regularContent(); ?>

<?php echo sec_regularContent(
    'Honors and Awards',
    null,
    '',
    ''
); ?>
<p>Nichi Bei Foundation, <em>Films of Remembrance</em>, honored as attorney for the <em>coram nobis</em> case of Minoru Yasui, 2018; Minoru Yasui Justice Award, University of Oregon Law School, inaugural awardee, 2017; ABA 2017 Spirit of Excellence Award, 2017; Asian Pacific American Network of Oregon: Voices of Change Award, 2016; Oregon Commission on Asian and Pacific Islander Affairs Honoree for service as lead attorney in the <em>coram nobis</em> effort to overturn Minoru Yasui’s 1942 criminal conviction, 2016; Roosevelt High School Freedom Fighters Award, Portland, Oregon, 2016; Judge Lynn Nakamoto Award, Oregon Asia Pacific American Bar Association, 2014; Trailblazer, National Asian Pacific American Bar Association, 2011; Heart of the Community Award, Oregon Nikkei Legacy Center, Portland, OR, 2006; Japanese American Citizens League, Lifetime Achievement Award, 2003; Oregon Minority Lawyers Association Award, 2003; Home Town Human Rights Hero, Eugene Human Rights Program, Eugene, Oregon, 2000; Inducted into Sandy Union High School Distinguished Alums Hall of Fame, 1992; Woman of the Year, Seattle Chinese Post, 1992; Recognition & Appreciation of Outstanding Citizenship in Gordon Hirabayashi v. U.S. by Gordon Hirabayashi, Petitioner, 1988; Honored at dinner for recognition of the Korematsu, Hirabayashi, and Yasui Legal Teams, Japanese American Citizens League: A celebration of Japanese American Contributions to the American Promise, San Francisco, CA, 1988; Honored by the Japanese American Citizens League, Portland Chapter and Japanese American Community of Oregon, 1988; Outstanding Young Women of America, 1984; Award of Merit, 1984 Woodie Award, Mid-Oregon Chapter, Oregon Advertising Federation, 1984.</p>
<?php echo end_sec_regularContent(); ?>


<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/give/give-volunteer.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/resources/resources-vassar-network.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/give/give-mentor.php');?>
<?php echo end_sec_relatedTopics(); ?>


<?php echo site_footeralums(); ?>
