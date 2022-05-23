<?php

include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include( $project_paths['main_project_root'] . '/functions.php');

?>

<?php

/*  PAGE INFO ============ */

$page_title = "Cards";

/*  ---------------------- */

?>

<?php echo site_header(); ?>


<?php echo sec_regularContent(
  'Cards'
); ?>


  <?php echo item_cardWithText(
    'Card title',
    'apple.com',
    ['url' => 'https://images.unsplash.com/photo-1652703747774-558a10faacc2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1776&q=80', 'alt' => 'asdfasdfds' ],
    'card--twocols theme-burgundy',
    ['hlevel' => 4]

  ); ?>

  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>

  <?php echo end_item_cardWithText(); ?>


  <?php echo item_cardWithText(
    'Card title',
    'apple.com',
    ['url' => 'https://images.unsplash.com/photo-1652703747774-558a10faacc2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1776&q=80', 'alt' => 'asdfasdfds' ],
    null,
    ['hlevel' => 4]
  ); ?>

  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>


  <?php echo end_item_cardWithText(); ?>


  <?php echo item_imageCard(
    'Card title',
    'texrtwatartr',
    'apple.com',
    ['url' => 'https://images.unsplash.com/photo-1652703747774-558a10faacc2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1776&q=80', 'alt' => 'asdfasdfds' ],
    null,
    ['hlevel' => 4]
  ); ?>


<?php echo end_sec_regularContent(); ?>


<?php echo site_footer(); ?>
