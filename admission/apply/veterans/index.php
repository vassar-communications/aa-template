
<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include_once($project_paths['main_project_root'].'/functions.php');
 ?>
<?php

/* PAGE INFO === */

$page_info = '{
  "page_title": "U.S. Military Veterans",
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
    'Information for U.S. Veterans',
    'Vassar actively seeks to enroll qualified veterans of the U.S. Armed Forces. Vassar fosters these connections through the Vassar Veterans Initiative, Service to School, and the Yellow Ribbon Program.',
    $admission_img_path.'apply/veterans/0027-22-05-ali-commencement-vassar-255.jpg',
    null,
    null,
    ['img_alt_text' => 'A graduate with sunglasses and dark facial hair wears a black robe with a bright, multicolored scarf, and shakes hand with President Bradley, who is wearing a blue robe and a black cap.']
  );

?>



<?php echo sec_fullBleedImageColumn(
    'Vassar Veterans Initiative',
    '/admission/assets/images/apply/veterans/0109-21-10-kr-posse-vassar-0137-cropped.jpg',
    'image-is-first theme-cream section-large-title',
    '',
    ['img_alt_text' => 'A group of people sit around an outdoor table with plates of food in front of them']
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <p>The Vassar Veterans Initiative (VassarVets) is designed to expand Vassar’s outreach to U.S. military servicemembers and veterans. Through VassarVets, we support veteran students’ success at Vassar by providing assistance navigating the admission process, specialized advising, and opportunities to build community on campus.</p>
        <p>In 2012, Vassar led the way as the first institution of higher education in the nation to partner with The Posse Foundation to recruit veterans for enrollment. In 2022 with the establishment of VassarVets, we have expanded our support of student veterans beyond Posse.</p>

<?php echo cta_link(
    'https://apply.vassar.edu/portal/vassarvets',
    'Request Information'
);
?>



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

<p>As a participant in the Yellow Ribbon Program, Vassar will match funding with the U.S. Department of Veterans Affairs to cover the difference in costs between Vassar’s tuition and fees and those of the highest public in-state institution.</p>

    <?php echo cta_link(
      'https://www.va.gov/education/about-gi-bill-benefits/post-9-11/yellow-ribbon-program/',
      'Visit the Yellow Ribbon Program'
    ); ?>
</div>
<?php echo end_sec_fullBleedImageColumn(); ?>



<?php echo sec_regularContent(
    'Important Information for Veterans',
    null,
    ''
); ?>


  <?php echo item_iconItem(
    'Admission',
    'ticket',
    'icon-on-left'
  ); ?>
          <p>Vassar is proud to offer an automatic application fee waiver to all service veterans. All veterans are guaranteed an admission interview</p>
          <p>Visit the <a href="/admission/apply/">Apply page</a>  to learn about application requirements.</p>
          <p>Veterans may supplement their applications by submitting additional materials related to their military experience, including:</p>
          <ul>
              <li>JST transcript</li>
              <li>CCAF transcript</li>
              <li>Military educational records</li>
              <li>A supplementary essay</li>
          </ul>
  <?php echo end_item_iconItem(); ?>

  <?php echo item_iconItem(
    'Financial Aid and Yellow Ribbon',
    'sack-dollar',
    'icon-on-left'
  ); ?>
      <p>As a participant in the <a href="https://www.va.gov/education/about-gi-bill-benefits/post-9-11/yellow-ribbon-program/">Yellow Ribbon Program</a>, Vassar will match funding with the U.S. Department of Veterans Affairs to cover the difference in costs between Vassar’s tuition and fees and those of the highest public in-state institution.</p>
  <?php echo end_item_iconItem(); ?>

  <?php echo item_iconItem(
    'Housing',
    'house-chimney',
    'icon-on-left'
  ); ?>
      <p>Housing options are available both on or off campus. The surrounding area offers apartment units for rent. Campus includes apartment-like housing for single juniors and seniors. The <a href="https://offices.vassar.edu/residential-life/">Office of Residential Life</a> will work with veterans to ensure that housing arrangements are appropriate to their needs.</p>
  <?php echo end_item_iconItem(); ?>

  <?php echo item_iconItem(
    'Advising',
    'person-circle-question',
    'icon-on-left'
  ); ?>
      <p>Vassar provides advice and support through pre-major or major advisors, an advisor in the <a href="https://offices.vassar.edu/dean-of-studies/">Office of the Dean of Studies</a> dedicated to each class, and a counseling service staffed by trained professionals who help students, free of charge, with personal and academic issues.</p>
  <?php echo end_item_iconItem(); ?>

<?php echo end_sec_regularContent(); ?>



<?php echo sec_regularContent(
  'Vassar Contacts and Links',
    null,
    ''
); ?>

<p>Feel free to contact us with any veteran-related questions.</p>

<div class="contact-list">
  <div class="staff-contact">
      <h3>Colleen Mallet</h3>
      <p><em>Director of Veteran Students Outreach and Support</em></p>
      <a class="fixemaillink" href="mailto:comallet@vassar.edu">Contact Colleen Mallet</a>
  </div>

</div>

<h3>Links to Information on Veterans’ Benefits</h3>

<ul class="linked-list"><li><a href="https://www.va.gov/education/gi-bill/post-9-11/ch-33-benefit/">Post 9/11 GI Bill® Benefits</a></li>
	<li><a href="https://www.va.gov/education/about-gi-bill-benefits/post-9-11/yellow-ribbon-program/">Yellow Ribbon Program</a></li>
</ul>

<h3 class="mb-4">Our Partners</h3>

<div class="container">
   <div class="row">
      <div class="col-6 col-sm-3 mb-4 mb-sm-0">
<img src="/admission/assets/images/apply/veterans/service-to-school.gif" alt="Service to School logo" />
      </div>
      <div class="col-sm-9">
        <h4>Service to School</h4>

        <p>Vassar College is a proud partner of VetLink, a subsidiary of Service to School (S2S), a 501(c)(3) non-profit organization that provides free application counseling, peer-to-peer guidance, and networking support to all U.S. military service members and veterans at no cost to the applicant. Their goal is to help veterans gain admission to the best college for them while empowering each veteran to make informed decisions about their education.</p>
      </div>
   </div>
</div>

<?php echo end_sec_regularContent(); ?>

<!-- Related Topics -->
<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/apply/apply-how-to-apply.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/apply/apply-first-year.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/apply/apply-transfer.php');?>
<?php echo end_sec_relatedTopics(); ?>
<?php echo site_footer(); ?>
