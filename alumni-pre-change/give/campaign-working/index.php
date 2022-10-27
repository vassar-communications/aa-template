<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */


$page_info = '{
  "page_title":"Campaign (Working)",
  "page_classes":"",
  "feature_image":"/assets/images/placeholder-banner.png"
}';

/* === */
$page_info = json_decode($page_info, true);

?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation_alums(); ?>

<style>
b {
  display: block !important;
}
</style>

<?php echo sec_fixedCenteredTitle_masthead(
    '<b class="slide-from-left">Campaign</b>
   <b class="slide-from-right">(Working)</b>',
    null,
    'theme-verylightgray reveal-image',
    'mw-4',
    ['bg-image-url' => '/assets/images/placeholders/placeholder-fullscreen.gif',
        'bg-image-alt' => 'Exterior of Thompson Library lit and night',
        'css' => '
      --title-container-bg-beforeContent: rgba(0,0,0,0.4);
      --section-bg-image-opacity: 0;
      /* --section-title-faded-color: #444; */
      --bs-gap: 1rem;
      ']
); ?>


<?php echo end_sec_fixedCenteredTitle_masthead(); ?>


<?php echo interior_page_nav() ?>




<?php /*  PAGE CONTENT === */ ?>






<?php echo masthead_interiorPage(
    null,
    'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.',
    '/assets/images/placeholders/placeholder-portrait.jpg',
    null,
    null,
    ['img_alt_text' => 'NEED ALT TEXT']
);
?>


<?php echo sec_regularContent(
    'The Main Event',
    'mw-inner-3 theme-darkcoal',
    '$content_classes=null',
    null
); ?>

  <p class="intro-text text-center position-center mb-5" style="max-width: 50ch">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
  </p>

<div class="ratio ratio-16x9">
  <iframe src=https://vimeo.com/event/2473218/embed/3cefd22dbb frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
</div>

<?php echo end_sec_regularContent(); ?>



<?php echo sec_regularContent(
    'Panel Sessions',
    'mw-inner-3',
    '$content_classes=null',
    null
); ?>

<div class="ratio ratio-16x9">
  <iframe src=https://vimeo.com/event/2473211/embed/75d9b5c744 frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
</div>

<?php echo end_sec_regularContent(); ?>










<?php echo site_footeralumni(); ?>
