
<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include_once($project_paths['main_project_root'].'/functions.php');
 ?>
<?php

/* PAGE INFO === */

$page_info = '{
  "page_title": "For Veterans",
  "feature_image": "/admission/assets/images/apply/veterans/0099_15_09_KR_0039.jpg"
}';

/* === */

$page_info = json_decode($page_info, true);

/* === */

?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation(); ?>

<?php echo page_partialmasthead(
  $page_info['feature_image'],
  ['image_alt_text' => 'Students sitting in a classroom']
); ?>

<?php echo interior_page_nav() ?>

<?php /*  PAGE CONTENT === */ ?>

<?php echo masthead_interiorPage(
    'Information for American Veterans',
    'Vassar actively seeks to enroll qualified veterans of the U.S. Armed Forces. Vassar fosters these connections through the Posse Veterans Program and the Yellow Ribbon Program, aimed at increasing enrollment of veterans at selective colleges and universities.',
    $admission_img_path.'apply/veterans/commencement-posse-1905-ssh-002-crop.jpg');
?>



<?php echo sec_fullBleedImageColumn(
    'Posse Veterans Program',
    '/admission/assets/images/apply/veterans/0055_15_04_KR_0146.jpg',
    'image-is-first theme-cream section-large-title',
    '',
    ['img_alt_text' => 'A deliberately blurred motion photo of students walking into the College Center entryway']
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <p>This program supports veterans interested in pursuing bachelor’s degrees at top educational institutions. Those accepted into the program attend college as part of a Veterans Posse, which is a team of service veterans.</p>
    <p><a href="https://www.vassar.edu/vq/issues/2013/03/vassar-today/call-of-duty.html">The first 10 participants</a> joined the Vassar community in Fall 2013, attending tuition-free through a combination of scholarship aid and GI Bill® benefits.</p>
    <a href="https://www.possefoundation.org/shaping-the-future/posse-veterans-program" class="btn btn-link arrow">Visit the Posse Veterans Program</a>
</div>
<?php echo end_sec_fullBleedImageColumn(); ?>


<?php echo sec_fullBleedImageColumn(
    'Yellow Ribbon Program',
    '/admission/assets/images/apply/veterans/0067_16_05_JA-posse-487-crop.jpg',
    'theme-burgundy has-bg quad-pattern section-large-title',
    '',
    ['img_alt_text' => 'Students sitting outside ready for graduation ceremonies to start']
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <p>The Yellow Ribbon Program is a collaboration between colleges and universities and the Veterans Administration to cover the cost of tuition and fees, under the Post-9/11 Veterans Educational Assistance Act of 2008. This program makes a Vassar education accessible to eligible veterans, regardless of socio-economic status.</p>

    <?php echo cta_link(
      'https://www.va.gov/education/about-gi-bill-benefits/post-9-11/yellow-ribbon-program/',
      'Visit the Yellow Ribbon Program'
    ); ?>
</div>
<?php echo end_sec_fullBleedImageColumn(); ?>



<?php echo sec_regularContent(
    'Special Accommodations for Veterans',
    null,
    ''
); ?>


  <?php echo item_iconItem(
    'Admissions',
    'ticket',
    'icon-on-left'
  ); ?>
          <p>Vassar is proud to offer an automatic application fee waiver to all service veterans.</p>
          <p>Visit the Apply page  to learn about application requirements.</p>
          <p>Veterans may supplement their applications by submitting additional materials related to their military experience, including:</p>
          <ul>
              <li>AARTS transcript</li>
              <li>Military educational records</li>
              <li>A supplementary essay</li>
          </ul>
  <?php echo end_item_iconItem(); ?>

  <?php echo item_iconItem(
    'Financial Aid',
    'sack-dollar',
    'icon-on-left'
  ); ?>
      <p>As a participant in the Yellow Ribbon Program, Vassar will match funding with the U.S. Department of Veterans Affairs to cover the difference in costs between Vassar’s tuition and fees and those of the highest public in-state institution.</p>
  <?php echo end_item_iconItem(); ?>

  <?php echo item_iconItem(
    'Housing',
    'house-chimney',
    'icon-on-left'
  ); ?>
      <p>Housing options are available both on or off campus. The surrounding area offers apartment units for rent. Campus includes apartment-like housing for single juniors and seniors. The Office of Residential Life will work with veterans to ensure that housing arrangements are appropriate to their needs.</p>
  <?php echo end_item_iconItem(); ?>

  <?php echo item_iconItem(
    'Advising',
    'person-circle-question',
    'icon-on-left'
  ); ?>
      <p>Vassar provides advice and support through pre-major or major advisors, an advisor in the  Office of the Dean of Studies dedicated to each class, and a counseling service staffed by trained professionals who help students, free of charge, with personal and academic issues.</p>
  <?php echo end_item_iconItem(); ?>

<?php echo end_sec_regularContent(); ?>



<?php echo sec_regularContent(
  'Vassar Contacts and Links',
    null,
    ''
); ?>

<p class="intro-text">Feel free to contact us with any veteran-related questions.</p>

<div class="contact-list">
  <div class="staff-contact">
      <h3>Ann Gitto</h3>
      <p><em>Associate Director of Student Financial Services</em></p>
      <a href="mailto:angitto@vassar.edu"><i class="fa-solid fa-envelope me-2"><b class="visually-hidden">Email</b></i>angitto@vassar.edu</a>
  </div>

  <div class="staff-contact">
      <h3>Angela Anderson</h3>
      <p><em>Registrar</em></p>
      <a href="mailto:angelaanderson@vassar.edu"><i class="fa-solid fa-envelope me-2"><b class="visually-hidden">Email</b></i>angelaanderson@vassar.edu</a>
  </div>
</div>

<h3>Links to Information on Veterans’ Benefits</h3>

<ul class="linked-list"><li><a href="https://www.va.gov/education/gi-bill/post-9-11/ch-33-benefit/">Post 9/11 GI Bill® Benefits</a></li>
	<li><a href="https://www.va.gov/education/about-gi-bill-benefits/post-9-11/yellow-ribbon-program/">Yellow Ribbon Program</a></li>
</ul>

<?php echo end_sec_regularContent(); ?>

<!-- Related Topics -->
<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/apply/apply-how-to-apply.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/apply/apply-first-year.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/apply/apply-transfer.php');?>
<?php echo end_sec_relatedTopics(); ?>
<?php echo site_footer(); ?>
