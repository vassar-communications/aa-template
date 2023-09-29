
<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
 ?>
<?php

/* PAGE INFO === */

$page_info = '{"page_title":"Connect","feature_image":"/admission/assets/images/connect/0148-17-09-kr-alana-vassar-1599.jpg"}';
/* === */
$page_info = json_decode($page_info, true);

?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation(); ?>



<?php echo sec_fixedCenteredTitle_masthead(
    '<b class="slide-from-left">Connect</b>',
    null,
    'theme-verylightgray reveal-image',
    'mw-4',
    ['bg-image-url' => $page_info['feature_image'],
        'bg-image-alt' => 'two students making peace signs',
        'css' => '
      --title-container-bg-beforeContent: rgba(0,0,0,0.4);
      --section-bg-image-opacity: 0;
      --bs-gap: 1rem;
      ']
); ?>

<?php echo end_sec_fixedCenteredTitle_masthead(); ?>

<?php // echo page_partialmasthead($page_info['feature_image']); ?>

<?php echo interior_page_nav() ?>


<?php echo masthead_interiorPage(
    'Our Team is Here to Help You',
    '',
    $admission_img_path.'/connect/kautz-house-2105-tsa-V866-040-crop.jpg',
    null,
    null,
    ['img_alt_text' => 'Brightly sunlit sidewalk with colorful planted and hanging flowers leading to the entrance of Kautz House on Vassar Campus.']
);
?>


<?php echo sec_regularContent(
    'Contact Information',
    'theme-cream',
    null,
); ?>
<p>We are happy to help with questions, but please know that we do not track demonstrated interest as part of the application process.</p>


    <div class="address-card">
<p>
    <strong>Mailing address:</strong><br>
    Office of Admission<br>
    Vassar College, Box 10<br>
    124 Raymond Ave<br>
    Poughkeepsie, NY 12604-0010<br>
    USA
</p>
<p>
    Telephone: <a href="tel:1-845-437-7300">(845) 437-7300</a> or <a href="tel:1-800-827-7270">(800) 827-7270</a><br>
    Fax: <a href="fax:1-845-437-7063">(845) 437-7063</a><br>
    Email: <a href="mailto:admission@vassar.edu">admission@vassar.edu</a>
</p>
    </div>




<?php echo end_sec_regularContent(); ?>




<?php echo sec_regularContent("Admission Officers", null, null); ?>

<div id="portal_a7d01504-affe-4f95-8da9-a8dfbb473d58">Loading...</div><script>/*<![CDATA[*/var script = document.createElement('script'); script.async = 1; script.src = 'https://apply.vassar.edu/portal/find-my-counselor?output=embed&div=portal_a7d01504-affe-4f95-8da9-a8dfbb473d58' + ((location.search.length > 1) ? '&' + location.search.substring(1) : ''); var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(script, s);/*]]>*/</script>

<?php echo end_sec_regularContent(); ?>


<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/connect/connect-students.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/connect/connect-counselors.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/visit/visit.php');?>
<?php echo end_sec_relatedTopics(); ?>

<?php /*  PAGE CONTENT === */ ?>

<?php echo site_footer(); ?>
