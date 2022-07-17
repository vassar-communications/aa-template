<?php

include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include( $project_paths['main_project_root'] . '/functions.php');

?>

<?php

/*  PAGE INFO ============ */

$page_title = "Section with wide content";

/*  ---------------------- */

?>

    <!-- %%% -->
<?php include($project_paths['main_project_root'].'/core/template-parts/patternlibrary.php');?>
<?php echo site_header(); ?>

<?php echo sec_wideContent(
    'Wide content',
    '<p class="section-intro-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>',
    null,
    'mw-4',
    ['bg-image-url' => 'https://images.unsplash.com/photo-1652703747774-558a10faacc2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1776&q=80',
        'bg-image-alt' => 'replacethisalttext',
        'title_classes' => 'animate-when-content-appears animation-zoom-in'
    ]
); ?>

    <div class="grid cols-3 gap-0">

        <?php echo item_col('animation-item'); ?>
        <?php echo item_imageCard(
            get_icon('play').'Card title',
            null,
            'apple.com',
            ['url' => 'https://images.unsplash.com/photo-1652703747774-558a10faacc2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1776&q=80', 'alt' => 'replacealttext' ],
            'text-at-bottom',
            ['hlevel' => 4]
        ); ?>
        <?php echo end_item_col(); ?>

        <?php echo item_col('animation-item'); ?>
        <?php echo item_imageCard(
            get_icon('play').'Card title',
            null,
            'apple.com',
            ['url' => 'https://images.unsplash.com/photo-1652703747774-558a10faacc2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1776&q=80', 'alt' => 'replacealttext' ],
            'text-at-bottom',
            ['hlevel' => 4]
        ); ?>
        <?php echo end_item_col(); ?>

        <?php echo item_col('animation-item'); ?>
        <?php echo item_imageCard(
            get_icon('play').'Card title',
            null,
            'apple.com',
            ['url' => 'https://images.unsplash.com/photo-1652703747774-558a10faacc2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1776&q=80', 'alt' => 'replacealttext' ],
            'text-at-bottom',
            ['hlevel' => 4]
        ); ?>
        <?php echo end_item_col(); ?>

        <?php echo item_col('animation-item'); ?>
        <?php echo item_imageCard(
            get_icon('play').'Card title',
            null,
            'apple.com',
            ['url' => 'https://images.unsplash.com/photo-1652703747774-558a10faacc2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1776&q=80', 'alt' => 'replacealttext' ],
            'text-at-bottom',
            ['hlevel' => 4]
        ); ?>
        <?php echo end_item_col(); ?>

        <?php echo item_col('animation-item'); ?>
        <?php echo item_imageCard(
            get_icon('play').'Card title',
            null,
            'apple.com',
            ['url' => 'https://images.unsplash.com/photo-1652703747774-558a10faacc2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1776&q=80', 'alt' => 'replacealttext' ],
            'text-at-bottom',
            ['hlevel' => 4]
        ); ?>
        <?php echo end_item_col(); ?>

        <?php echo item_col('animation-item'); ?>
        <?php echo item_imageCard(
            get_icon('play').'Card title',
            null,
            'apple.com',
            ['url' => 'https://images.unsplash.com/photo-1652703747774-558a10faacc2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1776&q=80', 'alt' => 'replacealttext' ],
            'text-at-bottom',
            ['hlevel' => 4]
        ); ?>
        <?php echo end_item_col(); ?>

    </div>

<?php echo end_sec_wideContent(); ?>


<?php echo site_footer(); ?>