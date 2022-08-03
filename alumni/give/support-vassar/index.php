<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */


$page_info = '{
  "page_title":"Support Vassar",
  "page_classes":"",
  "feature_image":"/assets/images/placeholder-banner.png"
}';

/* === */
$page_info = json_decode($page_info, true);

?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation_alums(); ?>

<?php echo page_partialmasthead($page_info['feature_image'], ['image_alt_text' => 'needsalttxt']); ?>





<?php echo interior_page_nav() ?>

<?php /*  PAGE CONTENT === */ ?>

<?php echo sec_fullBleedImageColumn(
    'Every alum. Any amount. Every year.',
    '/assets/images/placeholders/placeholder-square.png',
    'theme-cream image-is-first',
    ''
); ?>
<div class="animate-when-content-appears animation-slide-up">
       <p class="intro-text"> A gift at any level is key to sustaining Vassar</p>
    <p>Vassar Fund dollars are crucial to the long-term success of the College and provide an important source of flexible and spendable revenue that has an immediate impact on today’s students, faculty, and programs. The support of the alumni community helps the College remain strong and resilient throughout each year. Your philanthropic contributions support research programs, upgrades in classrooms and residence halls, tuition assistance, career education, and so much more.</p>

    <?php echo cta_link(
        '#',
        'Give Now'
    ); ?>

</div>
<?php echo end_sec_fullBleedImageColumn(); ?>

<?php echo sec_regularContent(
    '5 Reasons to Consider Participating',
    'theme-dark-burgundy',
    ''
); ?>
<?php echo end_sec_regularContent(); ?>


<?php echo sec_fullBleedImageColumn(
    'Participation Gifts Add Up',
    '/assets/images/placeholders/placeholder-square.png',
    'theme-dark-burgundy image-is-first',
    ''
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <p>Annual gifts (even at very modest levels) can have just as much impact as major gifts when they are pooled together. For example, multiple gifts from many donors totaling $50,000 can have the same financial effect as the payout from a $1 million endowment gift in a given year.</p>


</div>
<?php echo end_sec_fullBleedImageColumn(); ?>


<?php echo sec_fullBleedImageColumn(
    'Keeping Vassar on Top',
    '/assets/images/placeholders/placeholder-square.png',
    'theme-cream',
    ''
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <p>Alumni participation is one factor used when evaluating and ranking colleges and universities. Rankings can affect reputation, reputation can affect enrollment, and enrollment can affect revenue from tuition. Additionally, think of a diploma as if it were a stock certificate. As the quality of the institution grows, so does the value of your degree!</p>


</div>
<?php echo end_sec_fullBleedImageColumn(); ?>




<?php echo sec_fullBleedImageColumn(
    'Influencing Others',
    '/assets/images/placeholders/placeholder-square.png',
    'theme-dark-burgundy image-is-first',
    ''
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <p>People want to give to a winning cause. Your participation can influence major donors, corporations, and foundations when they’re considering their own investments. They want to give to institutions that you find worthy of supporting.</p>


</div>
<?php echo end_sec_fullBleedImageColumn(); ?>


<?php echo sec_fullBleedImageColumn(
    'Preserving Vassar’s Future',
    '/assets/images/placeholders/placeholder-square.png',
    'theme-cream',
    ''
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <p>Alumni giving helps Vassar establish a broad and diverse base of financial support that provides a safeguard for future uncertainties. Your help is critical in protecting Vassar and its stakeholders.</p>


</div>
<?php echo end_sec_fullBleedImageColumn(); ?>



<?php echo sec_fullBleedImageColumn(
    'Leading by Example',
    '/assets/images/placeholders/placeholder-square.png',
    'theme-dark-burgundy image-is-first',
    ''
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <p>Echoing Vassar’s commitment to philanthropy and service, your participation shows the current student body the importance of giving through programs like the Generation Vassar Challenge. Your commitment to Vassar and its future is also an important example to set for prospective students and encourages young alumni to give. Ultimately, it just feels good to continue to give back to the community that helped to shape your experience as a student.</p>

    <?php echo cta_link(
        '#',
        'Visit Generation Vassar'
    ); ?>

</div>
<?php echo end_sec_fullBleedImageColumn(); ?>

<?php echo sec_regularContent(
    'Reverse the 10-Year Trend',
    'theme-darkcoal',
    ''
); ?>
<p>In 2021, we saw an encouraging shift upwards as a result of the Generation Vassar participation challenge and we are so grateful that many of you answered the call. We need YOUR help now more than ever to keep up the momentum and continue this upward trend!</p>

<span class="fix">INSERT GRAPHIC</span>
<?php echo end_sec_regularContent(); ?>

<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/alumni/inc/pages/calendar/calendar-generation-vassar.php');?>
<?php include($project_paths['main_project_root'].'/alumni/inc/pages/give/give-volunteer.php');?>
<?php include($project_paths['main_project_root'].'/alumni/inc/pages/give/give-fearlessly-consequential.php');?>
<?php echo end_sec_relatedTopics(); ?>


<?php echo site_footeralumni(); ?>

