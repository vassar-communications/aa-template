<?php

include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include( $project_paths['main_project_root'] . '/functions.php');

?>



<!-- %%% -->

<?php

/*  PAGE INFO ============ */

$page_title = "Animated list";

/*  ---------------------- */

?>
<?php include($project_paths['main_project_root'].'/core/template-parts/patternlibrary.php');?>
<?php echo site_header(); ?>
<style>
:root {
  --animation-duration: 1s;
  --sequential-animation-item-gap: 0.1s;
}
</style>

<?php echo sec_regularContent(
  'Animated list',
  null,
  null,
    ['title_classes' => 'animate-when-content-appears animation-zoom-in']
); ?>


<ul class="animate-when-content-appears animation-group animation-rightshift-in">
  <li class="animation-item">While you may apply to any number of Vassar-supported funds and opportunities both within and outside of those administered by the CDO (eg, OCEL, Fellowships, etc.), you generally accept just one award.</li>
  <li class="animation-item">Current sophomores and juniors (rising juniors and seniors) who received IGF funding last year may reapply.</li>
  <li class="animation-item">Only those students who have secured an internship are eligible to apply for funding through the IGF; if your internship isn’t secured, your application will not be reviewed. Applications will be reviewed on a rolling basis.</li>
  <li class="animation-item">Applications and requests for funding typically outweigh available funds. Each year, more and more funding is available to support student internships.
</li>
</ul>


<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>

<?php echo site_footer(); ?>
