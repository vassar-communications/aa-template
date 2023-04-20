
<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include_once($project_paths['main_project_root'].'/functions.php');
 ?>
<?php

/* PAGE INFO === */

$page_info = '{
  "page_title":"How to Apply",
  "feature_image":"/admission/assets/images/apply/how-to-apply/0084_16_04_KR_0013-cropped.jpg"
}';
/* === */
$page_info = json_decode($page_info, true);

?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation(); ?>

<?php echo page_partialmasthead(
  $page_info['feature_image'],
  [
    'image_alt_text' => 'A student sits on a blanket in front of Main Building on a sunny day, looking down at some papers.',
    'classes' => 'bg-image-right'
  ]
); ?>

<?php echo interior_page_nav() ?>

<?php echo sec_fullBleedImageColumn(
    'Applying to Vassar',
    $admission_img_path.'apply/how-to-apply/110519_160over90_Vassar_0221.jpg',
    'image-is-first theme-cream',
    '',
    ['img_alt_text' => 'Two people at a table in conversation']
); ?>
<div class="animate-when-content-appears animation-slide-up">

<p>Whether you’re a first-year or transfer applicant, find everything you need to know here about how to apply and what we look for in an applicant.</p>

</div>
<?php echo end_sec_fullBleedImageColumn(); ?>


<?php echo sec_regularContent(
    'First-Year Applicants',
    null,
    '',
    ''
); ?>

  <p>First-year applicants may submit in any one of the following ways:</p>
    <ul class="linked-list">
    <li><?php echo central_link('common-app', 'Common Application'); ?></li>
    <li><?php echo central_link('coalition-app', 'Coalition Application'); ?></li>
    <li><a href="/admission/apply/questbridge/">QuestBridge Application</a></li>
    </ul>

    <?php echo cta_link(
      '/admission/apply/requirements',
      'Learn more about First-Year Applications'
    ); ?>

<?php echo end_sec_regularContent(); ?>


<?php echo sec_regularContent(
    'Transfer Applicants',
    'theme-burgundy has-bg quad-pattern',
    '',
    ''
); ?>
  <p>Transfer applicants can apply using the Common Application.</p>

  <?php echo cta_link(
    '/admission/apply/transfer',
    'Learn more about Transfer Applications'
  ); ?>


<?php echo end_sec_regularContent(); ?>


<?php echo sec_regularContent(
    'Submitting Application Materials',
    'theme-cream',
    '',
    ''
); ?>
  <p>Electronic submission is preferred. Application materials may also be submitted via email, fax, or mail.</p>
  <p>Supplemental materials can be uploaded through the application status portal, which is available after an application has been submitted and processed.</p>
  <p><strong>To submit documents:</strong><br/>
      Email: <a href="mailto:admappmaterials@vassar.edu">admappmaterials@vassar.edu</a><br/>

      Fax: <?php echo phone_number('845-437-7063'); ?></p>
  <p>Financial Aid documents should be submitted to <a href="https://offices.vassar.edu/student-financial-services/">Student Financial Services</a> through Institutional Documentation Service (IDOC).</p>
<?php echo end_sec_regularContent(); ?>


<div id="selectioncriteria"></div>
<?php echo sec_regularContent(
    'Selection Criteria',
    null,
    '',
    ''
); ?>
  <p>Vassar weighs a number of factors in the admission decision, including:</p>
  <ul>
      <li>Academic performance, as demonstrated in high school</li>
      <li>Personal strengths, motivation, and potential as evidenced in essays, recommendations, and community involvement</li>
  </ul>
  <p>Vassar recommends that prospective applicants applying from high school take four years of:
  </p>
  <ul>
      <li>English</li>
      <li>Mathematics</li>
      <li>Science</li>
      <li>History or social science</li>
      <li>A language other than English</li>
  </ul>
  <p>Applicants should take a substantial portion of their work in Advanced Placement, International Baccalaureate, or the highest level of coursework available in their school.</p>
  <p>Special attention is given to the academic breadth, depth, and rigor of candidates’ junior and senior year programs.</p>

  <?php echo info_card(
    'Optional SAT/ACT Scores',
    'mt-5',
    'info'
  );
  ?>
    <p class="mb-4">Students applying to Vassar may choose whether or not to submit SAT/ACT scores.</p>
<h5>Know the Vassar codes</h5>
<ul class="labeled-list list-group">
    <?php echo labeled_list_item('College Board', '2956'); ?>
    <?php echo labeled_list_item('ACT', '2982'); ?>
    <?php echo labeled_list_item('TOEFL', '2956'); ?>
</ul>
  <?php echo end_info_card(); ?>

<?php echo end_sec_regularContent(); ?>




<?php echo sec_regularContent(
    'After You’ve Applied',
    'red-icons theme-extralightgray',
    ''
); ?>

  <div class="icon-items-list">
      <?php echo item_iconItem(
          null,
          'list-check',
          'icon-on-left'
      ); ?>
      <p>Within 5 days of receiving your application, we will send you an email with your Applicant ID and directions on how to access an online checklist for your application.</p>
      <?php echo end_item_iconItem(); ?>

      <?php echo item_iconItem(
          null,
          'clock',
          'icon-on-left'
      ); ?>
      <p>Adding all supporting documents to our system may take a few weeks. If there are items missing from your application, you will be notified before decision release for your specified application round.</p>
      <?php echo end_item_iconItem(); ?>

      <?php echo item_iconItem(
          null,
          'check',
          'icon-on-left'
      ); ?>
      <p>Students will be able to check their admission decision online on the same website you used to check the status of your application. Vassar does not release admission decisions via telephone.</p>
      <?php echo end_item_iconItem(); ?>
  </div>

  <h3>Additional Information</h3>

  <?php echo accordion('useful-info'); ?>

    <?php echo accordion_item('useful-info', 'Fee Waivers'); ?>
      <p>If the application fee poses a financial hardship, a fee waiver can be requested on the Common Application or the Coalition Application. Fee waivers are automatically offered to applicants who are QuestBridge Finalists and U.S. Military Veterans.</p>

      <ul>
        <li>If you apply via the <?php echo central_link('common-app', 'Common Application'); ?>, under the Vassar College Member-Specific section you will be asked “Do you intend to use one of these school-specific fee waivers?” Please select “Yes, I will be using a Vassar fee waiver.”</li>
        <li>If you apply via the <?php echo central_link('coalition-app', 'Coalition Application'); ?>, use the fee waiver code: <em>Vassar Fee Waiver</em>.</li>
      </ul>

    <?php echo end_accordion_item(); ?>

    <?php echo accordion_item('useful-info', 'Undocumented students'); ?>
      <p>Vassar College considers applications submitted by undocumented or DACA-mented students for the first-year class with the same consideration given to any other applicants when reviewing their application. Although funding is limited, the College is committed to meeting the full, demonstrated financial need of undocumented or DACA students admitted to Vassar following the same procedures Vassar uses to grant aid to accepted international students.</p>
    <?php echo end_accordion_item(); ?>

    <?php echo accordion_item('useful-info', 'AP and IB Credit'); ?>
      <p>Vassar awards credit for scores of 4 or 5 on select AP exams and for scores of 5, 6, or 7 on select IB Higher Level exams. A maximum of 2 units of pre-matriculation examination-based credits can be awarded.</p>
    <?php echo end_accordion_item(); ?>

    <?php echo accordion_item('useful-info', 'Taking a Gap Year'); ?>
      <p>Students who are taking a gap year must confirm their intent to enroll at Vassar by submitting the Candidate’s Reply Card and the required enrollment deposit by May 1, and must complete the Deferral Request Form by the deadline listed on the Admitted Students website. If deferred status is approved, a formal letter stating the conditions under which the deferral has been granted will be sent to the student. Transfer students and students offered admission to Vassar from the wait list are ineligible to request a deferral of admission.</p>
    <?php echo end_accordion_item(); ?>

  <?php echo end_accordion(); ?>

<?php echo end_sec_regularContent(); ?>









<!-- Related Topics -->
<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/apply/apply-first-year.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/apply/apply-international.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/apply/apply-transfer.php');?>
<?php echo end_sec_relatedTopics(); ?>

<?php echo site_footer(); ?>
