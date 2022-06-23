<?php

include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include( $project_paths['main_project_root'] . '/functions.php');

?>

<!-- %%% -->

<?php

/*  PAGE INFO ============ */

$page_title = "Cards";
$page_docs = "https://docs.google.com/document/d/10cN3CBi-jaEj5DT_8HQSA3VcsiM2mQ1F2lWxE1yMeSI/edit#heading=h.e8fwdx5qxado";

/*  ---------------------- */

?>
<?php include($project_paths['main_project_root'].'/core/template-parts/patternlibrary.php');?>
<?php echo site_header(); ?>


<?php echo sec_regularContent(
  'Cards',
  null,
  null,
  ['title_classes' => 'animate-when-content-appears animation-zoom-in']
); ?>

<h3>Text cards</h3>

  <?php echo item_cardWithText(
    'Card title',
    'apple.com',
    ['url' => 'https://images.unsplash.com/photo-1652703747774-558a10faacc2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1776&q=80', 'alt' => 'asdfasdfds' ],
    'card--twocols theme-burgundy mb-4',
    ['hlevel' => 4]

  ); ?>

  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>

  <?php echo end_item_cardWithText(); ?>


  <?php echo item_cardWithText(
    'Card title',
    'apple.com',
    ['url' => 'https://images.unsplash.com/photo-1652703747774-558a10faacc2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1776&q=80', 'alt' => 'asdfasdfds' ],
    'mb-4',
    ['hlevel' => 4]
  ); ?>

  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>


  <?php echo end_item_cardWithText(); ?>


<h3>Image cards</h3>

  <?php echo item_imageCard(
    'Card title',
    'texrtwatartr',
    'apple.com',
    ['url' => 'https://images.unsplash.com/photo-1652703747774-558a10faacc2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1776&q=80', 'alt' => 'asdfasdfds' ],
    'mb-4',
    ['hlevel' => 4]
  ); ?>


  <?php echo item_imageCard(
    get_icon('play').'Card title',
    'texrtwatartr',
    'apple.com',
    ['url' => 'https://images.unsplash.com/photo-1652703747774-558a10faacc2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1776&q=80', 'alt' => 'asdfasdfds' ],
    'text-at-bottom',
    ['hlevel' => 4]
  ); ?>


<?php echo end_sec_regularContent(); ?>



<?php echo sec_hasColumns(
  'Tile grid',
  3,
  '<p class="intro-text">An intro paragraph goes here, is simply dummy text of the printing and typesetting industry.</p>',
  'theme-charcoal section--tile-grid p-4',
  'gap-0 animation-group animation-zoom-in animate-when-content-appears',
  ['title_classes' => 'animation-zoom-in animate-when-content-appears']
); ?>

  <?php echo item_col('animation-item'); ?>
    <?php echo item_imageCard(
      get_icon('play').'Card title',
      null,
      'apple.com',
      ['url' => 'https://images.unsplash.com/photo-1652703747774-558a10faacc2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1776&q=80', 'alt' => 'asdfasdfds' ],
      'text-at-bottom',
      ['hlevel' => 4]
    ); ?>
  <?php echo end_item_col(); ?>

  <?php echo item_col('animation-item'); ?>
    <?php echo item_imageCard(
      get_icon('play').'Card title',
      null,
      'apple.com',
      ['url' => 'https://images.unsplash.com/photo-1652703747774-558a10faacc2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1776&q=80', 'alt' => 'asdfasdfds' ],
      'text-at-bottom',
      ['hlevel' => 4]
    ); ?>
  <?php echo end_item_col(); ?>

  <?php echo item_col('animation-item'); ?>
    <?php echo item_imageCard(
      get_icon('play').'Card title',
      null,
      'apple.com',
      ['url' => 'https://images.unsplash.com/photo-1652703747774-558a10faacc2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1776&q=80', 'alt' => 'asdfasdfds' ],
      'text-at-bottom',
      ['hlevel' => 4]
    ); ?>
  <?php echo end_item_col(); ?>

  <?php echo item_col('animation-item'); ?>
    <?php echo item_imageCard(
      get_icon('play').'Card title',
      null,
      'apple.com',
      ['url' => 'https://images.unsplash.com/photo-1652703747774-558a10faacc2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1776&q=80', 'alt' => 'asdfasdfds' ],
      'text-at-bottom',
      ['hlevel' => 4]
    ); ?>
  <?php echo end_item_col(); ?>

  <?php echo item_col('animation-item'); ?>
    <?php echo item_imageCard(
      get_icon('play').'Card title',
      null,
      'apple.com',
      ['url' => 'https://images.unsplash.com/photo-1652703747774-558a10faacc2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1776&q=80', 'alt' => 'asdfasdfds' ],
      'text-at-bottom',
      ['hlevel' => 4]
    ); ?>
  <?php echo end_item_col(); ?>

  <?php echo item_col('animation-item'); ?>
    <?php echo item_imageCard(
      get_icon('play').'Card title',
      null,
      'apple.com',
      ['url' => 'https://images.unsplash.com/photo-1652703747774-558a10faacc2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1776&q=80', 'alt' => 'asdfasdfds' ],
      'text-at-bottom',
      ['hlevel' => 4]
    ); ?>
  <?php echo end_item_col(); ?>

<?php echo end_sec_hasColumns(); ?>





<?php echo site_footer(); ?>
