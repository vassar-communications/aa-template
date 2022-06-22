<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/*  PAGE INFO ============ */

$page_title = "Our Community";
$page_classes = "academics-cy academics";

/*  ---------------------- */

?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation(); ?>




<?php echo sec_fixedCenteredTitle_masthead(
    '<b class="slide-from-left">Alumni</b>
   <b class="slide-from-right">Calendar</b>',
    null,
    'theme-verylightgray reveal-image',
    'mw-4',
    ['bg-image-url' => 'https://vassartest.chuckyatsuk.com/img/alumni/community/overview/0037-19-02-kr-ifill-sherrilyn-vassar-7892.jpg',
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
<?php include($project_paths['main_project_root'].'/alumni/inc/nav-elements/alumni-breadcrumb.php');?>
<?php echo end_sec_breadcrumbNav(); ?>
<?php echo toplinksNav(); ?>
<?php include($project_paths['main_project_root'].'/alumni/inc/nav-elements/alumni-calendar-nav.php');?>
<?php echo end_sec_toplinksNav(); ?>




<?php /*  PAGE CONTENT === */ ?>






<?php echo site_footer(); ?>
