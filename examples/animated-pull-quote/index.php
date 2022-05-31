<?php

include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include( $project_paths['main_project_root'] . '/functions.php');

?>

<!-- %%% -->

<?php

/*  PAGE INFO ============ */

$page_title = "Animated pull quote";
$page_docs = "https://docs.google.com/document/d/10cN3CBi-jaEj5DT_8HQSA3VcsiM2mQ1F2lWxE1yMeSI/edit#heading=h.laz1za8kgg3h";

/*  ---------------------- */

?>

<?php echo site_header(); ?>

<div class="buffer"></div>


<?php echo sec_wordByWord(
  null,
  'animate-when-content-appears space-around-image',
  null,
  ['intro-line' => 'A Vassar education opens minds and doors.']
); ?>

  <p>Each year, Vassar aims to enroll the most interesting, talented, and diverse first-year class possible.</p>

<?php echo end_sec_wordByWord(); ?>



<?php echo sec_wordByWord(
  ['url' => 'https://images.unsplash.com/photo-1543269865-cbf427effbad?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770',
  'alt' => 'asdfasdf'],
  'animate-when-content-appears space-around-image'
); ?>

  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s.</p>

<?php echo end_sec_wordByWord(); ?>








<div class="buffer"></div>

<?php echo site_footer(); ?>
