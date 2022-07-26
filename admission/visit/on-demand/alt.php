<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */

$page_info = '{
  "page_title": "Vassar on Demand",
  "feature_image": "/assets/images/placeholders/placeholder-banner.png"
}';

/* === */

$page_info = json_decode($page_info, true);

/*
$page_info = [
  'page_title' => 'Vassar on Demand',
  'feature_image' => $placeholder_img_banner
];


 */
?>

<?php echo site_header(); ?>



<?php echo page_partialmasthead($page_info['feature_image']); ?>



<?php /*  PAGE CONTENT === */ ?>


<?php echo sec_regularContent(
    'Don’t Miss a Future Event!',
    'theme-charcoal has-bg quad-pattern',
    'text-center',
    ''
); ?>

<button href="https://github.com/appleple/modal-video" class="btn btn-red js-video-btn" data-video-id='L61p2uyiMSo'>Open Video</button>
<script>
    window.addEventListener('DOMContentLoaded',function(){
        new ModalVideo(".js-video-btn");
    });
</script>

<h3>Vimeo</h3>
<button href="https://github.com/appleple/modal-video" class="btn btn-red js-video-vimeo-btn" data-video-id='336257407'>Open Vimeo</button>
<script>
    window.addEventListener('DOMContentLoaded',function(){
        new ModalVideo(".js-video-vimeo-btn",{channel:'vimeo'});
    });
</script>



<?php echo end_sec_regularContent(); ?>

<?php echo site_footer(); ?>
