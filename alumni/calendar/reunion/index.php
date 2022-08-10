<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */


$page_info = '{
  "page_title":"Reunion",
  "page_classes":"",
  "feature_image":"/alumni/assets/img/alumni-calendar/reunion/Vassar_Reunion_4706.jpg"
}';

/* === */
$page_info = json_decode($page_info, true);
?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation_alums(); ?>

<?php echo page_partialmasthead($page_info['feature_image'], ['image_alt_text' => 'needsalttxt']); ?>

<?php echo interior_page_nav() ?>

<?php /*  PAGE CONTENT === */ ?>


<?php echo sec_fullBleedImageColumn(
    'Welcome Back',
    $alumni_img_path.'alumni-calendar/reunion/Reunion_Saturday_190608_CS-V815-310.jpg',
    'image-is-first theme-cream',
    ''
); ?>
<p>Vassar and the Alumnae/i Association (AAVC) are thrilled about the return to in-person reunions and can’t wait to welcome you and your classmates back to campus. This page will be updated periodically to provide the latest information about Reunion, which happens on campus in early June every year. Reunion registration opens in early April.</p>
<p>If you have questions, don’t hesitate to write to <a href="mailto:reunion@vassar.edu">reunion@vassar.edu</a> or call <a href="tel:800-443-8196">800-443-8196</a>.</p>
<?php echo end_sec_fullBleedImageColumn(); ?>

<?php echo sec_fullBleedImageColumn(
    'General Reunion<br> Class Schedule',
    $alumni_img_path.'alumni-calendar/reunion/Reunion_Parade_180609_KR_8754.jpg',
    'theme-burgundy',
    ''
); ?>
<?php echo cta_link(
    'https://www.vassar.edu/sites/default/files/2022-01/Reunion-2022-Preliminary-General-Schedule.pdf',
    'See the Reunion 2022 schedule'
); ?>
<?php echo end_sec_fullBleedImageColumn(); ?>

<?php echo sec_fullBleedImageColumn(
    '50th Reunion<br> Class Schedule',
    $alumni_img_path.'alumni-calendar/reunion/Reunion_1806_CS_073.jpg',
    'image-is-first',
    ''
); ?>
<p>This year’s 50th reunion programming will include the class of 1972.</p>
<?php echo cta_link(
    'https://www.vassar.edu/sites/default/files/2022-03/1972-50th%20Reunion-Schedule-and-Newsletter-Mar4.pdf',
    'See the Reunion 2022 schedule'
); ?>

<?php echo end_sec_fullBleedImageColumn(); ?>

<?php echo sec_regularContent('Information & Updates','theme-verylightgray','','',); ?>

<?php echo item_iconItem('Housing','house-chimney',''); ?>
<p>We are excited to welcome alumni back to Vassar for in-person Reunions and want to ensure that everyone makes informed decisions about where to stay. Please be sure to note the College’s Covid-19 protocols before making your travel plans and also consider your lodging needs.
</p>
<p>We recommend you <strong>register early</strong> for on-campus housing as it is allocated on a first come, first served basis.</p>
<div class="accordion accordion-flush mt-3" id="accordionFlushExample">
    <div class="accordion-item">
        <div class="accordion-header" id="flush-headingOne">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                Additional On-Campus Housing Information
            </button>
        </div>
        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
                <p><strong>Residence Hall rooms:</strong></p>
                <ul>
                    <li>Include twin-sized beds about half of which are lofted/raised and cannot be lowered.</li>
                    <li>Include commercial linens (two twin flat sheets, one pillow case, one light twin blanket, one towel, and one washcloth) placed on each bed. If you would like to have an extra blanket or towel, please bring them with you.</li>
                    <li>Do <strong>NOT</strong> include air conditioning or private bathrooms.</li>
                    <li>Are not guaranteed to be quiet.</li>
                </ul>

                <p>We regret that we are unable to guarantee single room requests. If you are attending Reunion by yourself, we encourage coordinating with friends in advance to ensure your roommate of choice. If you require a single room or a room with a private bathroom, we strongly encourage you to make reservations at one of the Hudson Valley’s area hotels.</p>

                <p>Please Note: Alumnae House is reserved for the 70th and 75th Reunion Classes.</p>

                <p>Also, the college performs routine maintenance (in rotation) and also houses more than 200 students during the summer months. As such, some residence halls will be “offline” every year (and unavailable for lodging or entering).</p>
            </div>
        </div>
    </div>
</div>






<?php echo end_item_iconItem(); ?>

<?php echo item_iconItem('COVID Protocols','shield-virus',''); ?>
<p>Given the ever-changing protocols coming from local, state, and federal agencies, it is difficult to say for sure what the future requirements will be. Look for updates here beginning April 1, 2023.</p>
<?php echo end_item_iconItem(); ?>

<?php echo end_sec_regularContent(); ?>

<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/alumni/inc/pages/give/give.php');?>
<?php include($project_paths['main_project_root'].'/alumni/inc/pages/give/give-volunteer.php');?>
<?php include($project_paths['main_project_root'].'/alumni/inc/pages/calendar/calendar.php');?>
<?php echo end_sec_relatedTopics(); ?>


<?php echo site_footeralumni(); ?>
