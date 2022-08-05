<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */


$page_info = '{
  "page_title":"Alumni News & Stories",
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


<?php echo interior_page_nav(); ?>

<?php /*  PAGE CONTENT === */ ?>


<?php echo sec_fullBleedImageColumn(
  'TV CEO Jonathan Littman ’85 Offers Career Tips to Students',
  '/assets/images/placeholders/placeholder-square.png',
  'theme-extralightgray',
); ?>

<p>Vassar students with an interest in careers in the television industry gained some insight into this competitive world recently from a highly credible source.</p>

<?php echo cta_link(
  'https://www.vassar.edu/news/tv-ceo-jonathan-littman-85-offers-tips-career-success',
  'Read more'
); ?>



<?php echo end_sec_fullBleedImageColumn(); ?>

<?php echo sec_hasColumns(
  null,
  '3',
  null,
  'theme-charcoal has-bg quad-pattern items-equal-height'
); ?>

  <?php echo item_col(); ?>
    <?php echo item_cardWithText(
        'Veronica (Plaut) McDaniel ’01',
        'https://www.cnn.com/videos/tv/2022/04/26/cfp-voice-of-freedom-mfd-ais-spc.cnn',
        ['url' => '/assets/images/placeholders/placeholder-wide.jpg', 'alt' => 'replacealttext' ],
        'related-topics card--withParagraph card-has-cta-icon card-is-link'
    ); ?>
      <p class="placeholder">Veronica (Plaut) McDaniel ’01, Teacher Supervisor at Atlanta International School, talked about human trafficking awareness and action at school with CNN.</p>
    <?php echo end_item_cardWithText(); ?>
  <?php echo end_item_col(); ?>

  <?php echo item_col(); ?>
    <?php echo item_cardWithText(
        'Sarah Roth ’21',
        'https://www.fastcompany.com/90746616/why-tinders-background-check-is-a-major-backfire',
        ['url' => '/assets/images/placeholders/placeholder-wide.jpg', 'alt' => 'replacealttext' ],
        'related-topics card--withParagraph card-has-cta-icon card-is-link'
    ); ?>
      <p class="placeholder">Sarah Roth ’21 co-wrote a Fast Company story about the poor quality of Tinder’s background checks.</p>
    <?php echo end_item_cardWithText(); ?>
  <?php echo end_item_col(); ?>

  <?php echo item_col(); ?>
    <?php echo item_cardWithText(
        'Karl Strovink ’95',
        'https://fortune.com/2022/04/24/blue-bottle-popular-coffee-chain-didnt-lay-off-a-single-employee-during-the-pandemic/',
        ['url' => '/assets/images/placeholders/placeholder-wide.jpg', 'alt' => 'replacealttext' ],
        'related-topics card--withParagraph card-has-cta-icon card-is-link'
    ); ?>
      <p class="placeholder">Karl Strovink ’95, CEO of Blue Bottle Coffee, was quoted in Fortune, Yahoo! Finance, and Coffee Talk stories about the company, which didn’t lay off any employees during the pandemic.</p>
    <?php echo end_item_cardWithText(); ?>
  <?php echo end_item_col(); ?>

<?php echo end_sec_hasColumns(); ?>


<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/alumni/inc/pages/calendar/calendar.php');?>
<?php include($project_paths['main_project_root'].'/alumni/inc/pages/community/community-aavc-awards.php');?>
<?php include($project_paths['main_project_root'].'/alumni/inc/pages/community/community-notable-alumni.php');?>
<?php echo end_sec_relatedTopics(); ?>


<?php echo site_footeralumni(); ?>
