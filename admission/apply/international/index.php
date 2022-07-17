
<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
 ?>
<?php

/*  PAGE INFO ============ */

$page_title = "International Applicants";
$page_classes = "";

/*  ---------------------- */

?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation(); ?>


<?php echo page_textmasthead('theme-dark-burgundy'); ?>

<?php echo breadcrumbNav('theme-verylightgray'); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/nav-elements/admission-apply-breadcrumb.php');?>
<?php echo end_sec_breadcrumbNav(); ?>

<?php echo toplinksNav(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/nav-elements/admission-apply-nav.php');?>
<?php echo end_sec_toplinksNav(); ?>


<?php echo sec_fullBleedImageColumn(
    null,
    'https://vassartest.chuckyatsuk.com/img/apply/international/0074_15_08_KR_0088.jpg',
    'image-is-first theme-cream',
    ''
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <h3 class="display-6">Vassar believes in building a vibrant community of global citizens. </h3>
    <p>Vassar students come from more than 79 countries around the world and international students make up more than 10% of our community.</p>
</div>
<?php echo end_sec_fullBleedImageColumn(); ?>





<?php echo sec_regularContent(
    null,
    '',
    ''
); ?>


<h4 class="display-4">Who is considered an international student?</h4>
<p>When applying for admission to Vassar, anyone who is not a citizen or a permanent resident of the United States is considered an international student. If you have applied for a green card (permanent resident status) but have not received it by the time you apply, then you are considered an international student.</p>
<p><strong>For our general admission requirements for all students, please review the following pages:</strong><br/>
<p>
    <a href="/admission/apply/first-year-applicants"  class="px-0 btn btn-link arrow">First-Year Application Requirements</a></p>
<p>
    <a href="/admission/apply/transfer"  class="px-0 btn btn-link arrow">Transfer Application Requirements</a></p>

<?php echo end_sec_regularContent(); ?>


<?php echo sec_regularContent(
    null,
    null,
    ''
); ?>


<h4 class="display-4 mb-4">English Language Proficiency</h4>
    <p>If English is either your native or heritage language, or the primary language of instruction in the secondary school(s) you have attended for the last three years, you do not need to submit English language proficiency exam results.</p>
    <p>For all other applicants, we require one of the following tests, without exceptions, as proof of language proficiency:</p>
<p><strong>Click on the exam type below for complete details:</strong></p>


<div class="accordion accordion-flush mb-4" id="accordionExample">
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                TOEFL
            </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <p>We accept the TOEFL iBT, the TOEFL PBT, and the TOEFL iBT Home Edition. We do NOT accept TOEFL Essentials.</p>

                <p>Test results from the testing agency are strongly preferred, but PDFs of the TOEFL Test Taker Score Report (including your registration number and center information) will be accepted from your school counselor, if there is a financial hardship. However, test results from the testing agency will be required for enrollment.</p>

            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                IELTS
            </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <p>We accept the IELTS Academic. We do NOT accept the IELTS General Training.</p>

                <p>Test results from the testing agency are strongly preferred, but PDFs of the Test Report Form (including your centre number and candidate number) will be accepted from your school counselor, if there is a financial hardship. However, test results from the testing agency will be required for enrollment.</p>
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Duolingo
            </button>
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <p>We accept the Duolingo English Test (DET).</p>
                <p>Test results MUST be submitted from Duolingo directly at the time of application.</p>
            </div>
        </div>
    </div>
</div>
<p>Vassar reviews only the single-sitting highest score for all English Proficiency exams.
</p>

<hr class="my-5">

<h3 class="display-4">School Materials</h3>

<p>We have students who apply from dozens of different countries each year and receive academic records in a variety of formats. In general, your transcript should be a complete record of your coursework and grades from each marking period of secondary school, which is certified by your school. If you have taken required national/international exams during secondary school (ie. GCSE, IB MYP, CBSE board exams), these results should be included with your transcript. Any terminal high school exams (ie. A levels, IB exams, French bacc, CBSE) will be required for enrollment.</p>

<p>Additionally, all of your supporting documents should be in English. If your school does not provide a transcript in English, we need both a certified copy of the original transcript and a translated copy in English. The translation should be completed by an agency, but can be done by a school official or English teacher, if an agency translation presents a financial hardship. Also, if your recommendations are translated from the language of instruction to English, please provide a signed copy of the original as well as the translation.</p>

<hr class="my-5">

<h3 class="display-4">Interviews</h3>
    <p>We recommend that applicants who submit the TOEFL/IELTS also complete an interview as an additional way to demonstrate English language proficiency; students who submit Duolingo will have the interview portion of the exam reviewed as part of their application.</p>
<p>Vassar also accepts interviews from <a  href="https://initialview.com/">InitialView</a> and <a href="https://www.vericant.com/">Vericant</a>. While international applicants can’t request alumnae/i or student interviews, if we have interviewers in your area, we will reach out to you to set up an interview.</p>
<hr class="my-5">
<h3 class="display-4">Financial Aid</h3>
<p>Vassar meets the full demonstrated financial need of all students for all four years, but we are need-aware when reviewing applications from international students. Students who are neither U.S. citizens nor permanent residents who wish to be considered for financial aid at any time during their four years at Vassar must apply at the same time that they apply for admission. Those students admitted without financial aid in the first year are not eligible to receive Vassar funding during their years at the college. Financial aid is not available for international transfer applicants.</p>
<hr class="my-5">
<h3 class="display-4">U.S. Citizens/Permanent Resident Attending School Abroad</h3>
<p>If you are a U.S. citizen or U.S. permanent resident attending school outside of the United States, your admission decision will be made without regard to your financial situation, but your application will be reviewed in the context of the international school you attend.</p>

<p>If English is not your first language or the language of instruction for your past three years of secondary school, we still require you to submit English proficiency exam results.</p>

<hr class="my-5">

<h3 class="display-4">International Student Services</h3>
<p>The <a href="https://offices.vassar.edu/international-services/">Office of International Services (OIS)</a> offers a full range of resources for international students to make the Vassar experience as enjoyable and successful as possible. International students can also join the student-run Vassar International Students Association (VISA).</p>
<?php echo end_sec_regularContent(); ?>




<!-- Related Topics -->
<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/apply/apply-how-to-apply.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/apply/apply-first-year.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/apply/apply-transfer.php');?>
<?php echo end_sec_relatedTopics(); ?>
<?php echo site_footer(); ?>