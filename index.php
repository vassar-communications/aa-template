<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include( $project_paths['main_project_root'] . '/functions.php');
?>

<?php

/*  PAGE INFO ============ */

$page_title = "Page";
$page_tagline = "";
$page_classes = "class1 class2";

/*  ---------------------- */

?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>


<?php echo page_masthead('https://images.unsplash.com/photo-1651035157347-e92d6a3cd958?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2066&q=80'); ?>


<?php // echo breadcrumb_nav(); ?>


<?php /*  PAGE CONTENT === */ ?>


<?php echo sec_regularContent( 'The Title', 'titleClass1 titleClass2', 'secClass1 secClass2' ); ?>

<h3>What is Lorem Ipsum?</h3>
<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

<h3>What is Lorem Ipsum?</h3>
<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

<?php echo end_sec(); ?>







<?php echo sec_introContent('animate-when-content-appears animation-zoom-in'); ?>

All Vassar students are surrounded by an environment designed to spark something amazing—a place where greatness can spring to life.

<?php echo end_sec_introContent(); ?>

<?php echo sec_fullBleedImageColumn(); ?>
  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
<?php echo end_sec_fullBleedImageColumn(); ?>


<!-- CHARCOAL WITH PATTERN -->
<div class="section theme-charcoal has-bg quad-pattern animate-when-content-appears animation-zoom-in">
  <h2 class="section-title animate-when-content-appears animation-zoom-in">Charcoal with pattern</h2>

  <div class="section-content animate-when-content-appears animation-fade-in">
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. This is what an <a href="unvisited-link.html">unvisited link</a> looks like. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. This is what a <a href="">visited link</a> looks like. </p>
  </div>
</div>
<!-- END SECTION -->



<?php echo site_footer(); ?>
