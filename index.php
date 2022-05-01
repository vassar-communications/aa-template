<?php include( getcwd() . '/functions.php' ); ?>

<?php

/*  PAGE INFO ============ */

$page_title = "Page";
$page_tagline = "Whatever whatever";
$page_classes = "class1 class2";

/*  ---------------------- */

?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo page_masthead('https://images.unsplash.com/photo-1651035157347-e92d6a3cd958?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2066&q=80'); ?>

<?php /*  PAGE CONTENT === */ ?>

<?php echo sec_fullBleedImageColumn(); ?>
  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
<?php echo end_sec_fullBleedImageColumn(); ?>


  <?php echo sec_regularContent( "hey now" ); ?>
    <p>eeeee</p>
  <?php echo end_sec(); ?>





<?php echo site_footer(); ?>
