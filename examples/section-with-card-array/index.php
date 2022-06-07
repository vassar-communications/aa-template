<?php

include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include( $project_paths['main_project_root'] . '/functions.php');

?>

<?php

/*  PAGE INFO ============ */

$page_title = "Sections with background images";

/*  ---------------------- */

?>

<?php echo site_header(); ?>

<div class="buffer"></div>


<?php echo sec_fixedCenteredTitle(
  'Your college journey begins here.',
  'sec-fixedCenteredTitle card-array',
  null,
    ['bg-image-url' => 'https://images.unsplash.com/photo-1652372167945-0c711b065450?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1769&q=80',
    'bg-image-alt' => 'alt text']
); ?>

<?php echo item_imageCard(
  'Card title',
  'texrtwatartr',
  'apple.com',
  ['url' => '0014-19-04-kr-chemistry-vassar-4578.jpg', 'alt' => 'asdfasdfds' ],
  null,
  ['hlevel' => 4]
); ?>

<?php echo item_imageCard(
  'Card title',
  'texrtwatartr',
  'apple.com',
  ['url' => '0020_15_03_KR_0022.jpg', 'alt' => 'asdfasdfds' ],
  null,
  ['hlevel' => 4]
); ?>

<?php echo item_imageCard(
  'Card title',
  'texrtwatartr',
  'apple.com',
  ['url' => '0055-16-05-kr-spring-vassar-0011.jpg', 'alt' => 'asdfasdfds' ],
  null,
  ['hlevel' => 4]
); ?>

<?php echo item_imageCard(
  'Card title',
  'texrtwatartr',
  'apple.com',
  ['url' => '0066-19-05-kr-afrs-syedullah-vassar-4017.jpg', 'alt' => 'asdfasdfds' ],
  null,
  ['hlevel' => 4]
); ?>

<?php echo item_imageCard(
  'Card title',
  'texrtwatartr',
  'apple.com',
  ['url' => '0070-21-06-kr-tour-vassar-0004.jpg', 'alt' => 'asdfasdfds' ],
  null,
  ['hlevel' => 4]
); ?>

<?php echo item_imageCard(
  'Card title',
  'texrtwatartr',
  'apple.com',
  ['url' => '082-21-07-kr-caad-vassar-0065.jpg', 'alt' => 'asdfasdfds' ],
  null,
  ['hlevel' => 4]
); ?>

<?php echo item_imageCard(
  'Card title',
  'texrtwatartr',
  'apple.com',
  ['url' => '0138-15-11-kr-vcdf-vassar-0110.jpg', 'alt' => 'asdfasdfds' ],
  null,
  ['hlevel' => 4]
); ?>

<?php echo item_imageCard(
  'Card title',
  'texrtwatartr',
  'apple.com',
  ['url' => '110619_160over90_Vassar_4608.jpg', 'alt' => 'asdfasdfds' ],
  null,
  ['hlevel' => 4]
); ?>

<?php echo item_imageCard(
  'Card title',
  'texrtwatartr',
  'apple.com',
  ['url' => 'game-0054_16_05_KR_0077.jpg', 'alt' => 'asdfasdfds' ],
  null,
  ['hlevel' => 4]
); ?>


<?php echo end_sec_fixedCenteredTitle(); ?>



<div class="buffer"></div>

<?php echo site_footer(); ?>
