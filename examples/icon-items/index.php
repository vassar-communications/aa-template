<?php

include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include( $project_paths['main_project_root'] . '/functions.php');

?>

<!-- %%% -->

<?php

/*  PAGE INFO ============ */

$page_title = "Icon items";
$page_docs = "https://docs.google.com/document/d/10cN3CBi-jaEj5DT_8HQSA3VcsiM2mQ1F2lWxE1yMeSI/edit#heading=h.wh2ab5mcltu2";

/*  ---------------------- */

?>

<?php echo site_header(); ?>

<!-- FEATURE ICONS -->

<?php echo sec_hasColumns(
  'Icon on side',
  3
); ?>

  <?php echo item_col(); ?>

    <?php echo item_iconCard(
      'Campus Housing',
      'house-chimney',
      'icon-on-left'
    );
    ?>
    <p>Housing is guaranteed for all four years. 98% of our students live on campus. We have nine residence halls. Eight are coed, and one is for students who have, can, or will identify as female only. The coed residence halls have both men and women living on the same floor. </p>
    <?php echo end_item_iconCard(); ?>

  <?php echo end_item_col(); ?>

  <?php echo item_col(); ?>

    <?php echo item_iconCard(
      'Cars on campus',
      'car-side',
      'icon-on-left'
    );
    ?>
    <p>all students (including freshmen) are allowed to bring cars. All students planning to bring a car on campus must register with the Department of Safety and Security and pay a parking fee for each semester. About one-quarter to one-third of students have a car on campus.</p>

    <a class="btn btn-primary has-icon"><i class="fa fa-car-side"></i>Button</a>

    <?php echo end_item_iconCard(); ?>

  <?php echo end_item_col(); ?>

  <?php echo item_col(); ?>

    <?php echo item_iconCard(
      'Meal Plan',
      'utensils',
      'icon-on-left'
    );
    ?>
    <p>In the fall of 2017, Vassar implemented a new, all-access dining plan through Bon Appétit Management Company in a newly renovated campus dining hall. All students are now on one standardized meal plan, providing them unlimited access to the main dining hall from 7 a.m. to 1 a.m., as well as expanded options at Express, the Bridge Café, the Retreat, a food truck, and cook-your-own ingredients.</p>
    <?php echo end_item_iconCard(); ?>

  <?php echo end_item_col(); ?>


<?php echo end_sec_hasColumns(); ?>


<!-- FEATURE ICONS -->

<?php echo sec_hasColumns(
  'Icon on top',
  3
); ?>

  <?php echo item_col(); ?>

    <?php echo item_iconCard(
      'Campus housing',
      'house-chimney',
      'icon-on-top'
    );
    ?>
    <p>Housing is guaranteed for all four years. 98% of our students live on campus. We have nine residence halls. Eight are coed, and one is for students who have, can, or will identify as female only. The coed residence halls have both men and women living on the same floor. </p>
    <?php echo end_item_iconCard(); ?>

  <?php echo end_item_col(); ?>

  <?php echo item_col(); ?>

    <?php echo item_iconCard(
      'Cars on campus',
      'car',
      'icon-on-top'
    );
    ?>
    <p>all students (including freshmen) are allowed to bring cars. All students planning to bring a car on campus must register with the Department of Safety and Security and pay a parking fee for each semester. About one-quarter to one-third of students have a car on campus.</p>
    <?php echo end_item_iconCard(); ?>

  <?php echo end_item_col(); ?>

  <?php echo item_col(); ?>

    <?php echo item_iconCard(
      'Meal Plan',
      'utensils',
      'icon-on-top'
    );
    ?>
    <p>In the fall of 2017, Vassar implemented a new, all-access dining plan through Bon Appétit Management Company in a newly renovated campus dining hall. All students are now on one standardized meal plan, providing them unlimited access to the main dining hall from 7 a.m. to 1 a.m., as well as expanded options at Express, the Bridge Café, the Retreat, a food truck, and cook-your-own ingredients.</p>
    <?php echo end_item_iconCard(); ?>

  <?php echo end_item_col(); ?>


<?php echo end_sec_hasColumns(); ?>


<?php echo site_footer(); ?>
