<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */


$page_info = '{
  "page_title":"AAVC Board Director",
  "page_classes":"",
  "feature_image":"/alums/assets/img/alums-community/aavc/board/Patricia-Ann-Neely.jpg"
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
    'Patricia Ann Neely ’75',
    '/alums/assets/img/alums-community/aavc/board/Patricia-Ann-Neely.jpg',
    'image-is-first theme-cream',
    '',
    ['img_alt_text' => 'Patricia Ann Neely ’75, a person with shoulder-length, coiled hair and glasses wearing a textured black garment and a necklace, sitting next to a tall, stringed musical instrument with an intricately carved scroll shaped like a lion’s head.']
); ?>

  <ul class="clean-list-with-borders">
    <li>Alumnae House Committee Member and Vassar Fund Committee Member</li>
    <li>(she/her/hers)</li>
    <li>New York</li>
    <li>Term of Service: 2025–2029</li>
  </ul>

<?php echo end_sec_fullBleedImageColumn(); ?>

<?php echo sec_regularContent(
    'Additional Vassar Volunteer Experience',
    null,
    '',
    ''
); ?>
<p>Off-board committee member, AAVC Vassar Fund Committee, 2016–2025; President, Class of 1975, 2015–present, and Musicale Coordinator, 2024–present, and Class Agent, 2023–present, and Volunteer, 2016–present, and Class Agent, 2019–2020, and Volunteer, 2013–2014, and Notewriter or Phoner, 2012–2013; Volunteer, Club Admission Committee, 2007–present; Member, Class Reunion Gift Committee, 2012–2015.</p>
<?php echo end_sec_regularContent(); ?>

<?php echo sec_regularContent(
    'Professional/Community Experience',
    'theme-extralightgray',
    '',
    ''
); ?>
<p>Member of the grants panel for New York State Council on the Arts, New York State Council on the Arts, 2019–present; Board member, Viola da Gamba Society of America, 2019–present, and Chair of the DEI Committee, 2019–present; Director of Abendmusik, New York’s Period Instrument String Band, 2012–present; Freelance musician–Specialty Historical Performance (early-bowed strings), present; Board member, Early Music America, 2020–2025, and Chair of the IDEA (Inclusion, Diversity, Equity, & Access) Taskforce, 2018–2020; Manager of Events and Individual Giving, The Bard Graduate Center: Decorative Arts, Design History, Material Culture, 2017–2019; Music Faculty, The Brearley School, 1998–2019; Director of Development, COPLAND HOUSE, INC. COPLAND HOUSE, INC., 2015–2017; Consultant (part-time Executive Director), Connecticut Early Music Festival, 2012–2015; Member of the Grant Panel for The Fund for Creative Communities & the Manhattan Community Arts Fund, Lower Manhattan Cultural Council, 2013; Foundations and Corporations Coordinator, Jewish Child Care Association, 2010–2012; Senior Director of Programs, Harlem School of the Arts, 2008–2010; Director of Foundations and Corporations for New York City, The Sphinx Organization, 2007–2008; Consultant, Collegiate Chorale, 2006–2007; Associate Director of Scheduling, Jazz at Lincoln Center, 2005–2006; Director of Concert Operations, Mannes College, the New School for Music, 1993–2005; Director of Public Information and Assistant Director of Development, Mannes College of Music, 1993–1996.</p>
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
