<?php

include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include( $project_paths['main_project_root'] . '/functions.php');

?>

<!-- %%% -->

<?php

/*  PAGE INFO ============ */

$page_title = "Vassar Admission";
$page_docs = "https://docs.google.com/document/d/10cN3CBi-jaEj5DT_8HQSA3VcsiM2mQ1F2lWxE1yMeSI/edit#heading=h.laz1za8kgg3h";

/*  ---------------------- */

?>

<?php echo site_header(); ?>

<?php echo sec_siteHeader_video(); ?>
  <a href="" class="btn btn-lg btn-primary">Apply</a>
  <a href="" class="btn btn-lg btn-primary">Request Info</a>
<?php echo end_sec_siteHeader_video(); ?>

<!-- site masthead goes here -->

<!-- animated pullquote goes here -->
<?php echo sec_wordByWord(
  null,
  'animate-when-content-appears space-around-image theme-cream',
  null,
  ['intro-line' => 'A Vassar education opens minds and doors.']
); ?>

  <p>Each year, Vassar aims to enroll the most interesting, talented, and diverse first-year class possible.</p>

<?php echo end_sec_wordByWord(); ?>




<?php echo sec_wideContent(
  'Your college journey begins here.',
  '<p class="section-intro-text">Our Admission team is here to help you with:</p>',
  'show-image-then-content',
  'mw-4',
    ['bg-image-url' => 'https://images.unsplash.com/photo-1652703747774-558a10faacc2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1776&q=80',
    'bg-image-alt' => 'alt text',
    'title_classes' => 'animate-when-content-appears animation-zoom-in'
  ]
); ?>

<div class="grid cols-3 gap-0 animation-group animate-when-content-appears animation-zoom-in">

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

</div>

<?php echo end_sec_wideContent(); ?>



<div class="buffer"></div>


<?php echo sec_wideContent(
  'Wide content',
  '<p class="section-intro-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>',
  null,
  'mw-4',
    ['bg-image-url' => 'https://images.unsplash.com/photo-1652703747774-558a10faacc2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1776&q=80',
    'bg-image-alt' => 'alt text',
    'title_classes' => 'animate-when-content-appears animation-zoom-in'
  ]
); ?>

<div class="grid cols-3 gap-2 animation-group animate-when-content-appears animation-zoom-in">

  <?php echo item_iconButton(
    'car',
    'Students are allowed to have cars on campus.',
    'vassar.edu',
    'btn-card animation-item'
  );
  ?>

  <?php echo item_iconButton(
    'car',
    'Vassar does not currently require SAT or ACT scores.',
    'vassar.edu',
    'btn-card animation-item'
  );
  ?>

  <?php echo item_iconButton(
    'car',
    'Vassar meets all demonstrated financial need for all four years.',
    'vassar.edu',
    'btn-card animation-item'
  );
  ?>

  <?php echo item_iconButton(
    'car',
    'Housing is guaranteed for all four years.',
    'vassar.edu',
    'btn-card animation-item'
  );
  ?>

  <?php echo item_iconButton(
    'car',
    'Interviews aren’t required, but they’re informative.',
    'vassar.edu',
    'btn-card animation-item'
  );
  ?>

  <?php echo item_iconButton(
    'car',
    'We award credit for AP scores of 4/5 and IB scores of 5/6/7.',
    'vassar.edu',
    'btn-card animation-item'
  );
  ?>


</div>

<?php echo end_sec_wideContent(); ?>







<div class="buffer"></div>


<?php echo site_footer(); ?>
