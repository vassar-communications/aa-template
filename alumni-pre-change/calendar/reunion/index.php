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

<?php echo page_partialmasthead(
  $page_info['feature_image'],
  ['image_alt_text' => 'Fireworks in the night sky']
); ?>

<?php echo interior_page_nav() ?>

<?php /*  PAGE CONTENT === */ ?>


<?php echo sec_fullBleedImageColumn(
    'Welcome Back',
    $alumni_img_path.'alumni-calendar/reunion/Reunion_Saturday_190608_CS-V815-310.jpg',
    'image-is-first theme-cream',
    '',
    ['img_alt_text' => 'two people walking and smiling in a large group of people']
); ?>
<p>Vassar and the Alumnae/i Association of Vassar College (AAVC) are thrilled to welcome you and your classmates back to campus. We are looking forward to seeing alums from the classes ending in 3s and 8s on campus for Reunion, June 2–4, 2023 (the 50th Reunion class arrives on June 1). Please help us prepare for your arrival by expressing your interest to attend below.</p>
<?php echo end_sec_fullBleedImageColumn(); ?>



<?php echo sec_hasColumns(
    'Express Your Interest in Attending',
    '2',
    null,
    'items-equal-height mw-inner-1',
    'gap-3'
); ?>

  <?php echo item_col(); ?>
    <ul class="linked-list">
        <li>  <a href="https://connect.vassar.edu/s/1654/2/16/interior-ai.aspx?sid=1654&amp;pgid=6250&amp;gid=2&amp;cid=10326&amp;ecid=10326&amp;post_id=0" class="btn btn-link  ">

      <span>Class of 2018 Reunion Interest Form  </span>

      </a></li>
        <li>  <a href="https://connect.vassar.edu/s/1654/2/16/interior-ai.aspx?sid=1654&amp;pgid=6283&amp;gid=2&amp;cid=10375&amp;ecid=10375&amp;post_id=0" class="btn btn-link  ">

      <span>Class of 2016 Reunion Interest Form  </span>

      </a></li>
        <li>  <a href="https://connect.vassar.edu/s/1654/2/16/interior-ai.aspx?sid=1654&amp;pgid=6277&amp;gid=2&amp;cid=10362&amp;ecid=10362&amp;post_id=0" class="btn btn-link  ">

      <span>Class of 2013 Reunion Interest Form  </span>

      </a></li>
        <li>  <a href="https://connect.vassar.edu/s/1654/2/16/interior-ai.aspx?sid=1654&amp;pgid=6274&amp;gid=2&amp;cid=10358&amp;ecid=10358&amp;post_id=0" class="btn btn-link  ">

      <span>Class of 2008 Reunion Interest Form  </span>

      </a></li>
        <li>  <a href="https://connect.vassar.edu/s/1654/2/16/interior-ai.aspx?sid=1654&amp;pgid=6271&amp;gid=2&amp;cid=10354&amp;ecid=10354&amp;post_id=0" class="btn btn-link  ">

      <span>Class of 2003 Reunion Interest Form  </span>

      </a></li>
        <li>  <a href="https://connect.vassar.edu/s/1654/2/16/interior-ai.aspx?sid=1654&amp;pgid=6241&amp;gid=2&amp;cid=10314&amp;ecid=10314&amp;post_id=0" class="btn btn-link  ">

      <span>Class of 1998 Reunion Interest Form  </span>

      </a></li>
        <li>  <a href="https://connect.vassar.edu/s/1654/2/16/interior-ai.aspx?sid=1654&amp;pgid=6268&amp;gid=2&amp;cid=10350&amp;ecid=10350&amp;post_id=0" class="btn btn-link  ">

      <span>Class of 1993 Reunion Interest Form  </span>

      </a></li>
    </ul>
  <?php echo end_item_col(); ?>

  <?php echo item_col(); ?>
    <ul class="linked-list">
        <li>  <a href="https://connect.vassar.edu/s/1654/2/16/interior-ai.aspx?sid=1654&amp;pgid=6265&amp;gid=2&amp;cid=10346&amp;ecid=10346&amp;post_id=0" class="btn btn-link  ">

      <span>Class of 1988 Reunion Interest Form  </span>

      </a></li>
        <li>  <a href="https://connect.vassar.edu/s/1654/2/16/interior-ai.aspx?sid=1654&amp;pgid=6262&amp;gid=2&amp;cid=10342&amp;ecid=10342&amp;post_id=0" class="btn btn-link  ">

      <span>Class of 1983 Reunion Interest Form  </span>

      </a></li>
        <li>  <a href="https://connect.vassar.edu/s/1654/2/16/interior-ai.aspx?sid=1654&amp;pgid=6259&amp;gid=2&amp;cid=10338&amp;ecid=10338&amp;post_id=0" class="btn btn-link  ">

      <span>Class of 1978 Reunion Interest Form  </span>

      </a></li>
        <li>  <a href="https://connect.vassar.edu/s/1654/2/16/interior-ai.aspx?sid=1654&amp;pgid=6214&amp;gid=2&amp;cid=10257&amp;ecid=10257&amp;post_id=0" class="btn btn-link  ">

      <span>Class of 1973 Reunion Interest Form  </span>

      </a></li>
        <li>  <a href="https://connect.vassar.edu/s/1654/2/16/interior-ai.aspx?sid=1654&amp;pgid=6256&amp;gid=2&amp;cid=10334&amp;ecid=10334&amp;post_id=0" class="btn btn-link  ">

      <span>Class of 1968 Reunion Interest Form  </span>

      </a></li>
        <li>  <a href="https://connect.vassar.edu/s/1654/2/16/interior-ai.aspx?sid=1654&amp;pgid=6253&amp;gid=2&amp;cid=10330&amp;ecid=10330&amp;post_id=0" class="btn btn-link  ">

      <span>Class of 1963 Reunion Interest Form  </span>

      </a></li>
        <li>  <a href="https://connect.vassar.edu/s/1654/2/16/interior-ai.aspx?sid=1654&amp;pgid=6244&amp;gid=2&amp;cid=10318&amp;ecid=10318&amp;post_id=0" class="btn btn-link  ">

      <span>Class of 1958 Reunion Interest Form  </span>

      </a></li>
    </ul>
  <?php echo end_item_col(); ?>

<?php echo end_sec_hasColumns(); ?>

<?php echo sec_regularContent(
  null,
  'pt-0',
  ''
); ?>

    <p>Reunion Registration will open in early April. This page continues to be updated periodically. Be sure to check back! If you have any questions, please call <?php echo phone_number('800-443-8196'); ?>, option 5, or <a href="mailto:reunion@vassar.edu">email us regarding Reunion</a>.</p>

  <h3>Future Reunion Dates</h3>

  <p>May 31–June 1, 2024<br>
  June 6–8, 2025</p>



<?php echo end_sec_regularContent(); ?>


<?php echo sec_fullBleedImageColumn(
    'General Reunion<br> Class Schedule',
    $alumni_img_path.'alumni-calendar/reunion/Reunion_Parade_180609_KR_8754.jpg',
    'theme-burgundy',
    '',
    ['img_alt_text' => 'a large group of people walking up a winding road on Vassar campus']
); ?>
<?php echo cta_link(
    '/alumni/calendar/reunion/schedule/',
    'See the Reunion 2023 schedule'
); ?>
<?php echo end_sec_fullBleedImageColumn(); ?>

<?php echo sec_fullBleedImageColumn(
    '50th Reunion<br> Class Schedule',
    $alumni_img_path.'alumni-calendar/reunion/Reunion_1806_CS_073.jpg',
    'image-is-first',
    '',
    ['img_alt_text' => 'Overhead shot of people seated a round table in a large room for an event']
); ?>

<p>Enjoy the campus a day early with programming designed especially for the 50th Reunion class.</p>

<p>Be sure to check back for more specific details coming soon, but expect to be able to check in on Thursday, June 1 at 2:00 p.m. Please refer to <a href="/alumni/calendar/reunion/schedule/">the General Reunion Schedule</a> for an idea of what to expect that weekend.</p>

<?php echo end_sec_fullBleedImageColumn(); ?>

<?php echo sec_regularContent('Information & Updates','theme-verylightgray','','',); ?>

<?php echo item_iconItem('Housing','house-chimney',''); ?>
<p>We are excited to welcome alumni back to Vassar for in-person reunions and want to ensure that everyone makes informed decisions about where to stay.</p>

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
                    <li>Does <strong>not</strong> include air conditioning or private bathrooms.</li>
                    <li>Are not guaranteed to be quiet.</li>
                </ul>

                <p>We regret that we are unable to guarantee single room requests. If you are attending Reunion by yourself, we encourage coordinating with friends in advance to ensure your roommate of choice. If you require a single room or a room with a private bathroom, we strongly encourage you to make reservations at one of the Hudson Valley’s area hotels.</p>

                <p>Please Note: Alumnae House is reserved for the 70th and 75th Reunion Classes.</p>

                <p>Also, the College performs routine maintenance (in rotation) and also houses more than 200 students during the summer months. As such, some residence halls will be “offline” every year (and unavailable for lodging or entering).</p>
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
