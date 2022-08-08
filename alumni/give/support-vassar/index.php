<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */


$page_info = '{
  "page_title":"Support Vassar",
  "page_classes":"",
  "feature_image":"/alumni/assets/img/alumni-give/support/0191-19-10-ali-library-drone-vassar-vb-2017.jpg"
}';

/* === */
$page_info = json_decode($page_info, true);

?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation_alums(); ?>

<?php echo page_partialmasthead($page_info['feature_image'], ['image_alt_text' => 'Aerial view of Vassar Campus']); ?>





<?php echo interior_page_nav() ?>

<?php /*  PAGE CONTENT === */ ?>

<?php echo sec_fullBleedImageColumn(
    'Every Alum. Any Amount. Every Year.',
    '/alumni/assets/img/alumni-give/support/0085-20-12-kr-reading-room-vassar-0118.jpg',
    'theme-cream image-is-first',
    '',
    ['img_alt_text' => 'Interior view of Vassar College ’51 Reading Room']
); ?>
<div class="animate-when-content-appears animation-slide-up">
       <p class="intro-text"> A gift at any level is key to sustaining Vassar.</p>
    <p>Vassar Fund dollars are crucial to the long-term success of the College and provide an important source of flexible and spendable revenue that has an immediate impact on today’s students, faculty, and programs. The support of the alumni community helps the College remain strong and resilient throughout each year. Your philanthropic contributions support research programs, upgrades in classrooms and residence halls, tuition assistance, career education, and so much more.</p>

    <?php echo cta_link(
        'https://go.vassar.edu/give',
        'Give Now'
    ); ?>

</div>
<?php echo end_sec_fullBleedImageColumn(); ?>

<?php echo sec_regularContent(
    '5 Reasons to Consider Participating',
    'theme-white mt-5 pt-5',
    ''
); ?>
<?php echo end_sec_regularContent(); ?>


<?php echo sec_fullBleedImageColumn(
    '1 - Participation Gifts Add&nbsp;Up',
    '/alumni/assets/img/alumni-give/support/Ad_Poster_15_TT_1683.jpg',
    'theme-burgundy image-is-first',
    '',
    [
      'img_alt_text' => 'Front of Main Building at Vassar College',
      'title_level' => '3'
    ]

); ?>
<div class="animate-when-content-appears animation-slide-up">
    <p>Annual gifts (even at very modest levels) can have just as much impact as major gifts when they are pooled together. For example, multiple gifts from many donors totaling $50,000 can have the same financial effect as the payout from a $1 million endowment gift in a given year.</p>


</div>
<?php echo end_sec_fullBleedImageColumn(); ?>


<?php echo sec_fullBleedImageColumn(
    '2 - Keeping Vassar on Top',
    '/alumni/assets/img/alumni-give/support/volleyball-V752-129.jpg',
    'theme-cream',
    '',
    [
      'img_alt_text' => 'Volleyball player celebrating',
      'title_level' => '3'
    ]

); ?>
<div class="animate-when-content-appears animation-slide-up">
    <p>Alumni participation is one factor used when evaluating and ranking colleges and universities. Rankings can affect reputation, reputation can affect enrollment, and enrollment can affect revenue from tuition. Additionally, think of a diploma as if it were a stock certificate. As the quality of the institution grows, so does the value of your degree!</p>


</div>
<?php echo end_sec_fullBleedImageColumn(); ?>




<?php echo sec_fullBleedImageColumn(
    '3 - Influencing Others',
    '/alumni/assets/img/alumni-give/support/0002-20-01-kr-scc-maldonado-vassar-0047.jpg',
    'theme-charcoal has-bg quad-pattern image-is-first',
    '',
    [
      'img_alt_text' => 'Speaker in front of a microphone gesticulating',
      'title_level' => '3'
    ]
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <p>People want to give to a winning cause. Your participation can influence major donors, corporations, and foundations when they’re considering their own investments. They want to give to institutions that you find worthy of supporting.</p>


</div>
<?php echo end_sec_fullBleedImageColumn(); ?>


<?php echo sec_fullBleedImageColumn(
    '4 - Preserving Vassar’s Future',
    '/alumni/assets/img/alumni-give/support/Vassar_Campus_6_26_17_0078.jpg',
    'theme-cream',
    '',
    [
      'img_alt_text' => 'Exterior View of the The Bridge for Laboratory Sciences building on Vassar Campus',
      'title_level' => '3'
    ]
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <p>Alumni giving helps Vassar establish a broad and diverse base of financial support that provides a safeguard for future uncertainties. Your help is critical in protecting Vassar and its stakeholders.</p>


</div>
<?php echo end_sec_fullBleedImageColumn(); ?>



<?php echo sec_fullBleedImageColumn(
    '5 - Leading by Example',
    '/alumni/assets/img/alumni-give/support/0073-21-06-kr-summer-vassar-0183.jpg',
    'theme-dark-burgundy image-is-first',
    '',
    [
      'img_alt_text' => 'Plaque in front of the Shakespear Garden on Vassar Campus',
      'title_level' => '3'
    ]
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <p>Echoing Vassar’s commitment to philanthropy and service, your participation shows the current student body the importance of giving through programs like the Generation Vassar Challenge. Your commitment to Vassar and its future is also an important example to set for prospective students and encourages young alumni to give. Ultimately, it just feels good to continue to give back to the community that helped to shape your experience as a student.</p>

    <?php echo cta_link(
        'https://connect.vassar.edu/s/1654/20/giving/landing.aspx?sid=1654&gid=2&pgid=5207',
        'Visit Generation Vassar'
    ); ?>

</div>
<?php echo end_sec_fullBleedImageColumn(); ?>

<?php echo sec_regularContent(
    'Reverse the 10-Year Trend',
    'theme-darkcoal',
    ''
); ?>
<p>In 2021, we saw an encouraging shift upwards as a result of the Generation Vassar participation challenge and we are so grateful that many of you answered the call. We need <strong>your</strong> help now more than ever to keep up the momentum and continue this upward trend!</p>

<span class="fix">INSERT GRAPHIC</span>
<?php echo end_sec_regularContent(); ?>

<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/alumni/inc/pages/calendar/calendar-generation-vassar.php');?>
<?php include($project_paths['main_project_root'].'/alumni/inc/pages/give/give-volunteer.php');?>
<?php include($project_paths['main_project_root'].'/alumni/inc/pages/give/give-mentor.php');?>
<?php echo end_sec_relatedTopics(); ?>


<?php echo site_footeralumni(); ?>
