
<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */

$page_info = '{"page_title":"Types of Aid","page_classes":"","feature_image":"/admission/assets/images/financial-aid/types/0060_16_06_TT_2026.jpg"}';
/* === */
$page_info = json_decode($page_info, true);

?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation(); ?>

<?php echo page_partialmasthead($page_info['feature_image'],['image_alt_text' => 'Exterior view of Bridge for Laboratory Sciences building on Vassar Campus']); ?>

<?php echo interior_page_nav() ?>

<?php /*  PAGE CONTENT === */ ?>





<?php echo sec_fullBleedImageColumn(
    null,
    $admission_img_path.'financial-aid/0138-15-11-kr-vcdf-vassar-0110.jpg',
    'image-is-first theme-cream',
    '',
    ['img_alt_text' => 'A photo taken at night of the Volgelstein Center for Drama and Film, facing the north corner']
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <p class="intro-text">Financial aid awards typically include grants and scholarships, campus jobs, and loans.</p>

</div>
<?php echo end_sec_fullBleedImageColumn(); ?>


<?php echo sec_regularContent(
    'Grants & Scholarships',
    null,
    'checklist',
    ''
); ?>

<p>Grants and scholarships do not have to be repaid.</p>

<div class="accordion accordion-flush" id="grants">
    <div class="accordion-item">
        <div class="accordion-header" id="grants-headingOne">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#grants-collapseOne" aria-expanded="false" aria-controls="grants-collapseOne">
                Vassar Scholarships
            </button>
        </div>
        <div id="grants-collapseOne" class="accordion-collapse collapse" aria-labelledby="grants-headingOne" data-bs-parent="#grants">
            <div class="accordion-body"><p>Vassar awards $72 million annually in scholarships, funded by Vassar’s endowment, fundraising, and gifts.</p></div>
        </div>
    </div>
    <div class="accordion-item">
        <div class="accordion-header" id="grants-headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#grants-collapseTwo" aria-expanded="false" aria-controls="grants-collapseTwo">
                Federal Grants
            </button>
        </div>
        <div id="grants-collapseTwo" class="accordion-collapse collapse" aria-labelledby="grants-headingTwo" data-bs-parent="#grants">
            <div class="accordion-body">
                <p><strong>Pell Grants</strong></p>
                <ul>
                    <li>Funds from the U.S. government</li>
                    <li>Eligibility is based on federal demonstrated need as determined by the FAFSA form.</li>
                </ul>
                <p><a href="https://studentaid.gov/understand-aid/types/grants/pell">Learn more about Pell Grants</a></p>
                <p class="pt-4"><strong>Federal Supplemental Educational Opportunity Grants (FSEOG)</strong></p>
                <ul>
                    <li>Awarded to students with exceptional financial need</li>
                    <li>Priority is given to students eligible for Pell Grants</li>
                    <li>Award amounts depend on the level of need and funding availability</li>
                </ul>
                <p><a href="https://studentaid.gov/understand-aid/types/grants/fseog">Learn more about FSEOG</a></p>
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <div class="accordion-header" id="grants-headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#grants-collapseThree" aria-expanded="false" aria-controls="grants-collapseThree">
                State Grants
            </button>
        </div>
        <div id="grants-collapseThree" class="accordion-collapse collapse" aria-labelledby="grants-headingThree" data-bs-parent="#grants">
            <div class="accordion-body">
                <p><strong>New York State Tuition Assistance Program (TAP)</strong></p>
                <ul>
                    <li>Eligibility is based on New York State net taxable income</li>
                </ul>
                <p><a href="https://www.hesc.ny.gov/pay-for-college/apply-for-financial-aid/nys-tap.html">Learn more about TAP</a></p>
                <p class="pt-4"><strong>States Other Than New York</strong></p>
                <p>Please check with your home state’s higher education aid office for more information on grant options.</p>
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <div class="accordion-header" id="grants-headingFour">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#grants-collapseFour" aria-expanded="false" aria-controls="grants-collapseFour">
                Outside Scholarships
            </button>
        </div>
        <div id="grants-collapseFour" class="accordion-collapse collapse" aria-labelledby="grants-headingFour" data-bs-parent="#grants">
            <div class="accordion-body">
                <p>Outside funds can offer students greater financial flexibility by lessening employment obligations and/or reducing student loans.</p>
                <p>Scholarship search resources include:</p>
               <p><a href="https://www.fastweb.com/">FastWeb</a><br/>
                   <a href="https://bigfuture.collegeboard.org/pay-for-college/scholarship-search">BigFuture: The College Board’s Scholarship Search</a><br/>
                    <a href="http://www.collegescholarships.org/financial-aid/">CollegeScholarships.org</a><br/>
                </p>
            </div>
        </div>
    </div>
</div>

<?php echo end_sec_regularContent(); ?>





<?php echo sec_regularContent(
    'Campus Jobs',
    'theme-verylightgray',
    '',
    ''
); ?>

<p>All financial aid recipients receive an allocation for either Federal Work-Study (federally funded) or Institutional Employment (Vassar-supplied employment funds).</p>

<p>Students with work-study awards receive priority in the job registration process. These awards may also apply for off-campus community service work-study (CSWS).</p>


<div class="accordion accordion-flush my-5" id="loans">
    <div class="accordion-item">
        <div class="accordion-header" id="loans-headingOne">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#loans-collapseOne" aria-expanded="false" aria-controls="loans-collapseOne">
                What types of on campus jobs are available?
            </button>
        </div>
        <div id="loans-collapseOne" class="accordion-collapse collapse" aria-labelledby="loans-headingOne" data-bs-parent="#loans">
            <div class="accordion-body">
                <p>More than 1,600 students work on campus during the academic year. Many departments around campus hire students for a range of positions, from answering phones to providing tech support to conducting research and much more.</p>


            </div>
        </div>
    </div>
    <div class="accordion-item">
        <div class="accordion-header" id="loans-headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#loans-collapseTwo" aria-expanded="false" aria-controls="loans-collapseTwo">
                <span>Can non-financial aid students get on campus jobs?</span>
            </button>
        </div>
        <div id="loans-collapseTwo" class="accordion-collapse collapse" aria-labelledby="loans-headingTwo" data-bs-parent="#loans">
            <div class="accordion-body">
                <p>After the first month of each semester, remaining jobs are made available to non-financial aid students.</p>
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <div class="accordion-header" id="loans-headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#loans-collapseThree" aria-expanded="false" aria-controls="loans-collapseThree">
                <span>How much money can be earned with on campus work?</span>
            </button>
        </div>
        <div id="loans-collapseThree" class="accordion-collapse collapse" aria-labelledby="loans-headingThree" data-bs-parent="#loans">
            <div class="accordion-body">
                <p>Students can earn up to $3,000 during the academic year, and most students work an average of seven hours per week.</p>
            </div>
        </div>
    </div>
</div>


<?php echo cta_link(
    'https://offices.vassar.edu/student-employment/',
    'Learn more about campus jobs at Student Employment'
); ?>

<?php echo end_sec_regularContent(); ?>

<?php echo sec_regularContent(
    'Loans and Lenders',
    '',
    '',
    ''
); ?>

<p>Vassar will eliminate or reduce loans in the aid awards of students from low-income households.</p>

<div class="accordion theme-cream accordion-flush" id="loans">
    <div class="accordion-item">
        <div class="accordion-header" id="loans-headingOne">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#loans-collapseOne" aria-expanded="false" aria-controls="loans-collapseOne">
                Federal Loans for Students
            </button>
        </div>
        <div id="loans-collapseOne" class="accordion-collapse collapse" aria-labelledby="loans-headingOne" data-bs-parent="#loans">
            <div class="accordion-body">
                <p><strong>Federal Direct Loans</strong></p>
                <ul>
                    <li>Available to eligible students who complete the FAFSA form</li>
                    <li>Subsidized loans <strong>do not</strong> accrue interest while the student is enrolled in school</li>
                    <li>Unsubsidized loans <strong>do</strong> accrue interest, beginning from the time the loan is disbursed</li>
                </ul>
                <p><strong>Important Information:</strong></p>
                <ul>
                    <li>Interest rate: 5.50% (fixed) for 2023-2024</li>
                    <li>Origination fee: 1.057%</li>
                    <li>Maximum annual limit:
                        <ul>
                            <li>1st year: $5,500, up to $3,500 of which can be subsidized</li>
                            <li>2nd year: $6,500, up to $4,500 of which can be subsidized</li>
                            <li>3rd/4th year: $7,500, up to $5,500 of which can be subsidized</li>
                        </ul>
                    </li>
                    <li>Repayment begins six months after a student graduates, leaves school, or drops below half-time enrollment</li>
                    <li>Repayment period varies depending on the payment plan selected</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <div class="accordion-header" id="loans-headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#loans-collapseTwo" aria-expanded="false" aria-controls="loans-collapseTwo">
                Federal Loans for Parents
            </button>
        </div>
        <div id="loans-collapseTwo" class="accordion-collapse collapse" aria-labelledby="loans-headingTwo" data-bs-parent="#loans">
            <div class="accordion-body">
                <p><a href="https://studentaid.gov/understand-aid/types/loans/plus/parent">Direct Parent PLUS Loans</a> are government loans made available to parents of dependent undergraduate students. To qualify, a parent:</p>
                <ul>
                    <li>Must be a U.S. citizen or eligible non-citizen</li>
                    <li>Must not have an adverse credit history</li>
                    <li>Must undergo a credit check</li>
                    <li>If the credit is denied, the parent may reapply with an endorser, or the student may borrow an additional subsidized loan for $4,000-$5,000</li>
                </ul>
                <p><strong>Important Information:</strong></p>
                <ul>
                    <li>Interest rate: 8.05% (fixed) for 2023-2024</li>
                    <li>Origination fee: 4.228%</li>
                    <li>Maximum annual limit: total cost of attendance (budget) less any financial aid the student receives</li>
                    <li>Repayment begins once the loan is fully disbursed, with an option to request a deferment</li>
                    <li>Repayment period varies depending on plan selected</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <div class="accordion-header" id="loans-headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#loans-collapseThree" aria-expanded="false" aria-controls="loans-collapseThree">
                Alternative Loans
            </button>
        </div>
        <div id="loans-collapseThree" class="accordion-collapse collapse" aria-labelledby="loans-headingThree" data-bs-parent="#loans">
            <div class="accordion-body">
<p>Alternative student loans are non-government loans from lenders such as banks, credit unions, and state agencies. The primary borrower can be the student, a parent, or a sponsor. When the student is the borrower, a co-signer is typically required. Before taking an alternative loan, we encourage families to exhaust all Federal Direct Student Loan options first.</p>

<p>Vassar College does not endorse or recommend any lenders in particular. Ultimately it is the family’s responsibility to research all options and select the one that best meets their needs. <a href="http://www.elmselect.com/?schoolId=235">Visit ELM Select for a sampling of lenders used by Vassar students in recent years</a>.</p>

<p>Interest rates, origination fees, and repayment terms vary across lenders. The maximum annual limit is the total cost of attendance (student budget) less any financial aid the student receives.</p>
    
</div>
            
        </div>
    </div>
    <div class="accordion-item">
        <div class="accordion-header" id="loans-headingFour">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#loans-collapseFour" aria-expanded="false" aria-controls="loans-collapseFour">
                College Loan Tips
            </button>
        </div>
        <div id="loans-collapseFour" class="accordion-collapse collapse" aria-labelledby="loans-headingFour" data-bs-parent="#loans">
            <div class="accordion-body">
                <ul>
                    <li>Apply for financial aid on Vassar’s <a href="/admission/financial-aid/apply/">Apply for Aid</a> page</li>
                    <li>Eligibility for federal loans is determined by completing the <a href="https://studentaid.gov/h/apply-for-aid/fafsa">Free Application for Federal Student Aid (FAFSA)</a>.</li>
                    <li>Avoid any scholarship/grant searches that require a fee. Look for free searches like <a href="http://www.fastweb.com/">fastweb</a></li>
                    <li>Visit your state’s education department website to find out what grant or state-backed loans might be available to you. Some states offer education loans for their residents that are less costly than alternative education loans from private lenders</li>
                    <li>Federal student and parent loans are less costly than alternative private education loans, and most of these loans require a co-signer if you want to reduce the cost of the loan. The Federal Parent Loan (PLUS) has a provision for loan forgiveness in the event that either the parent or student dies or suffers 100% disability. This is not offered by private student loans where a co-signer is required for the student</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php echo end_sec_regularContent(); ?>

<!-- Related Topics -->
<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/financial-aid/financial-aid-tuition.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/financial-aid/financial-aid-forms.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/financial-aid/financial-aid-apply.php');?>
<?php echo end_sec_relatedTopics(); ?>

<?php echo site_footer(); ?>
