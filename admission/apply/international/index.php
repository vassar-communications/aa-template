
<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include_once($project_paths['main_project_root'].'/functions.php');
 ?>
<?php

/* PAGE INFO === */

$page_info = '{
  "page_title": "International Applicants",
  "feature_image": "/admission/assets/images/apply/international/0083_15_08_TT_5251.jpg"
}';
/* === */
$page_info = json_decode($page_info, true);

?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation(); ?>

<?php echo page_partialmasthead($page_info['feature_image'],['image_alt_text' => 'Detail of flags from different countries']); ?>


<?php echo interior_page_nav() ?>


<?php echo sec_fullBleedImageColumn(
    'Vassar believes in building a vibrant community of global citizens.',
    $admission_img_path.'apply/international/0074_15_08_KR_0088.jpg',
    'image-is-first theme-cream',
    '',
    ['img_alt_text' => 'Smiling students standing arm in arm']
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <p>Vassar students come from more than 79 countries around the world.</p>
</div>
<?php echo end_sec_fullBleedImageColumn(); ?>





<?php echo sec_regularContent(
    'Who is considered an international student?',
    '',
    ''
); ?>
  <p>When applying for admission to Vassar, anyone who is not a citizen or a permanent resident of the United States is considered an international student. If you have applied for a green card (permanent resident status) but have not received it by the time you apply, then you are considered an international student.</p>

  <p><strong>For our general admission requirements for all students, please review the following pages:</strong></p>

  <ul class="linked-list">
    <li><a href="/admission/apply/requirements">First-Year Application Requirements</a></li>
    <li><a href="/admission/apply/transfer">Transfer Application Requirements</a></li>
  </ul>

<?php echo end_sec_regularContent(); ?>

<a id="english-language-proficiency"></a>

<?php echo sec_regularContent(
    'English Language Proficiency',
    '',
    ''
); ?>

    <p>If English is not the primary language of instruction in the secondary school(s) you have attended for the last three years, you must submit English language proficiency exam results.</p>

<p><strong>Click on the exam type below for complete details:</strong></p>


<div class="accordion accordion-flush mb-4" id="elp">
    <div class="accordion-item">
        <div class="accordion-header" id="elp-headingOne">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#elp-collapseOne" aria-expanded="true" aria-controls="elp-collapseOne">
                TOEFL
            </button>
        </div>
        <div id="elp-collapseOne" class="accordion-collapse collapse" aria-labelledby="elp-headingOne" data-bs-parent="#elp">
            <div class="accordion-body">
                <p>We accept the TOEFL iBT, the TOEFL PBT, and the TOEFL iBT Home Edition. We do NOT accept TOEFL Essentials.</p>

                <p>Test results from the testing agency are strongly preferred. If there is a financial hardship, PDFs of the TOEFL Test Taker Score Report (including your registration number and center information) will be accepted from your school counselor. Test results from the testing agency will be required for enrollment.</p>
                <p><a href="https://www.ets.org/toefl">Visit ets.org/toefl</a></p>
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <div class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#elp-collapseTwo" aria-expanded="false" aria-controls="elp-collapseTwo">
                IELTS
            </button>
        </div>
        <div id="elp-collapseTwo" class="accordion-collapse collapse" aria-labelledby="elp-headingTwo" data-bs-parent="#elp">
            <div class="accordion-body">
                <p>We accept the IELTS Academic. We do NOT accept the IELTS General Training.</p>

                <p>Test results from the testing agency are strongly preferred. If there is a financial hardship, PDFs of the Test Report Form (including your center number and candidate number) will be accepted from your school counselor. Test results from the testing agency will be required for enrollment.</p>

                <p><a href="https://www.ielts.org/">Visit ielts.org</a></p>
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <div class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#elp-collapseThree" aria-expanded="false" aria-controls="elp-collapseThree">
                Duolingo English Test
            </button>
        </div>
        <div id="elp-collapseThree" class="accordion-collapse collapse" aria-labelledby="elp-headingThree" data-bs-parent="#elp">
            <div class="accordion-body">
                <p>We accept the Duolingo English Test (DET).</p>
                <p>Test results MUST be submitted from Duolingo directly at the time of application.</p>
                <p><a href="https://englishtest.duolingo.com/home">Visit englishtest.duolingo.com</a></p>
            </div>
        </div>
    </div>
</div>

<p>Vassar reviews only the single-sitting highest score for all English Proficiency exams.
</p>

<?php echo end_sec_regularContent(); ?>



<?php echo sec_regularContent(
    'School Materials',
    'section theme-charcoal has-bg quad-pattern',
    ''
); ?>

  <p>Students apply from dozens of different countries each year and we receive academic records in a variety of formats. In general, your transcript should be a complete record of your coursework and grades from each marking period of secondary school, which is certified by your school. If you have taken required national/international exams during secondary school (ie. GCSE, IB MYP, CBSE board exams), these results should be included with your transcript. Any terminal high school exams (ie. A levels, IB exams, French bacc, CBSE) will be required for enrollment.</p>

  <p>Additionally, all of your supporting documents should be in English. If your school does not provide a transcript in English, we need both a certified copy of the original transcript and a translated copy in English. The translation should be completed by an agency, but can be done by a school official or English teacher, if an agency translation presents a financial hardship. Also, if your recommendations are translated from the language of instruction to English, please provide a signed copy of the original as well as the translation.</p>

<?php echo end_sec_regularContent(); ?>


<?php echo sec_regularContent(
    'International Interviews',
    null,
    ''
); ?>

  <p>We recommend that applicants who submit the TOEFL/IELTS also complete an interview as an additional way to demonstrate English language proficiency; students who submit Duolingo will have the interview portion of the exam reviewed as part of their application.</p>

  <p>Vassar also accepts interviews from <a href="https://initialview.com/">InitialView</a> and <a href="https://www.vericant.com/">Vericant</a>. While international applicants can’t request alumni or student interviews, if we have interviewers in your area, we will reach out to you to set up an interview.</p>

<?php echo end_sec_regularContent(); ?>


<?php echo sec_regularContent(
    'Financial Aid',
    'theme-burgundy has-bg quad-pattern',
    ''
); ?>
  <p>Vassar meets the full demonstrated need of all admitted students who apply for financial aid at the time of their admission application. We are need-aware when reviewing applications from international students. Students who are neither U.S. citizens nor permanent residents who wish to be considered for financial aid at any time during their years at Vassar must apply for aid at the same time that they apply for admission. Students admitted without financial aid in the first year are not eligible to receive Vassar funding during their years at the College. Financial aid is not available for international transfer applicants.</p>
<?php echo end_sec_regularContent(); ?>

<?php echo sec_regularContent(
    'U.S. Citizens/Permanent Residents Attending School Abroad',
    'theme-extralightgray',
    ''
); ?>
  <p>If you are a U.S. citizen or U.S. permanent resident attending school outside of the United States, your admission decision will be made without regard to your financial situation, but your application will be reviewed in the context of the international school you attend.</p>

  <p>If English is not the language of instruction for your past three years of secondary school, we still require you to submit English proficiency exam results.</p>
<?php echo end_sec_regularContent(); ?>

<?php echo sec_regularContent(
    'International Student Services',
    null,
    ''
); ?>
<p>The <a href="https://offices.vassar.edu/international-services/">Office of International Services (OIS)</a> offers a full range of resources for international students to make the Vassar experience as enjoyable and successful as possible. International students can also join the student-run Vassar International Students Association (VISA).</p>
<?php echo end_sec_regularContent(); ?>




<!-- Related Topics -->
<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/apply/apply-how-to-apply.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/apply/apply-first-year.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/apply/apply-transfer.php');?>
<?php echo end_sec_relatedTopics(); ?>
<?php echo site_footer(); ?>
