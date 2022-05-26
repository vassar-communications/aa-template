<?php

include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include( $project_paths['main_project_root'] . '/functions.php');

?>

<!-- %%% -->

<?php

/*  PAGE INFO ============ */

$page_title = "Animated pull quote";

/*  ---------------------- */

?>

<?php echo site_header(); ?>

<div class="buffer"></div>

<?php echo sec_wordByWord(
  ['url' => 'https://images.unsplash.com/photo-1653559178437-94889263fb39?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2942',
  'alt' => 'asdfasdf'],
  'animate-when-content-appears'
); ?>

<p class="word-by-word">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>

<?php echo end_sec_wordByWord(); ?>

<div class="buffer"></div>

<?php echo site_footer(); ?>
