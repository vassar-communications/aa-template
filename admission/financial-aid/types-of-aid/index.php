
<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
 ?>
<?php

/*  PAGE INFO ============ */

$page_title = "Types of Aid";
$page_classes = "";

/*  ---------------------- */

?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation(); ?>

<?php echo breadcrumbNav('theme-cream'); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/nav-elements/admission-financialaid-breadcrumb.php');?>
<?php echo end_sec_breadcrumbNav(); ?>

<?php echo page_textmasthead('theme-cream'); ?>

<?php echo toplinksNav(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/nav-elements/admission-financialaid-nav.php');?>
<?php echo end_sec_toplinksNav(); ?>

<?php /*  PAGE CONTENT === */ ?>



<?php echo sec_hasColumns(
    null,
    2,
    null,
    'animate-when-content-appears animation-slide-up',
    'flex-equal align-items-center d-flex flex-column-reverse flex-md-row'
); ?>

<?php echo item_col('equal'); ?>
<h3 class="">Financial aid awards typically include grants and scholarships, loans, and campus jobs. Students and their families can decide which components of the aid package are most suitable.</h3>
<?php echo end_item_col(); ?>

<?php echo item_col('equal'); ?>
<img src="https://vassartest.chuckyatsuk.com/img/financial-aid/0138-15-11-kr-vcdf-vassar-0110.jpg" />
<?php echo end_item_col(); ?>

<?php echo end_sec_hasColumns(); ?>


<div class="container">
 <div class="container position-relative" id="content">
  <div class="row mt-5">
   <aside class="col-md-3" id="left">
    <div class="mt-5 mb-3 sticky-top" id="side">
     <ul class="list-group nav flex-md-column flex-row justify-content-between pt-5" id="sidenav">
        <li class="list-group-item nav-item mb-0"><a href="#sec1" class="nav-link pl-0">Grants & Scholarships</a></li>
       <!-- <li class="list-group-item nav-item"><a href="#sec1a" class="nav-link">Vassar Scholarships</a></li>
        <li class="list-group-item nav-item"><a href="#sec1b" class="nav-link">Federal Grants</a></li>
        <li class="list-group-item nav-item"><a href="#sec1c" class="nav-link">State Grants</a></li>
        <li class="list-group-item nav-item"><a href="#sec1d" class="nav-link">Outside Scholarships</a></li> -->
         <li class="list-group-item nav-item mb-0"><a href="#sec2" class="nav-link pl-0">Loans & Lenders</a></li>
         <!--   <li class="list-group-item nav-item"><a href="#sec2a" class="nav-link">Federal Loans for Students</a></li>
         <li class="list-group-item nav-item"><a href="#sec2b" class="nav-link">Federal Loans for Parents</a></li>
         <li class="list-group-item nav-item"><a href="#sec2c" class="nav-link">Alternative & Private Loans</a></li> -->
      <li class="list-group-item nav-item"><a href="#sec3" class="nav-link pl-0">Campus Employment</a></li>
     </ul>
    </div>
   </aside>

   <main class="col mw-1 p-5">
    <div class="row position-relative">
     <div class="col">
      <div class="py-3 position-relative">
       <div class="position-relative">

        <div class="anchor" id="sec1"></div>
        <h2 class="display-4">Grants & Scholarships</h2>
        <p>Grants and scholarships do not have to be repaid.</p>



        <div class="anchor" id="sec1a"></div>
        <h4 class="pt-4">Vassar Scholarships</h4>
        <p>Vassar awards $71 million annually in scholarships, funded by Vassar’s endowment, alumnae/i club fundraising, and gifts.</p>

        <div class="anchor" id="sec1b"></div>
       <h4 class="pt-4">Federal Grants</h4>
        <p>
          <strong>Pell Grants</strong>
           <ul>
            <li>Funds from the U.S. government</li>
            <li>Eligibility is based on federal demonstrated need as determined by the FAFSA form.</li>
           </ul>
        </p>


        <p>
            <a href="" class="fix">Learn more about Pell Grants</a>
        </p>


        <p>
         <strong>Federal Supplemental Educational Opportunity Grants (FSEOG)</strong>
        <ul>
         <li>Awarded to students with exceptional financial need</li>
         <li>Priority is given to students eligible for Pell Grants</li>
         <li>Award amounts depend on the level of need and funding availability</li>
        </ul>
        </p>

        <p>
            <a href="" class="fix">Learn more about FSEOG</a>
        </p>

        <div class="anchor" id="sec1c"></div>
        <h4 class="pt-4">State Grants</h4>
        <p>
         <strong>New York State Tuition Assistance Program (TAP)</strong>
        <ul>
         <li>Eligibility is based on New York State net taxable income</li>
        </ul>
        </p>

        <p>
         <a href="" class="fix">Learn more about TAP</a>
        </p>


        <div class="anchor" id="sec1d"></div>
           <h4 class="pt-4">Outside Scholarships</h4>
        <p>
         Outside funds can offer students greater financial flexibility by lessening employment obligations and/or reducing student loans.</p>

        <p>Scholarship search resources include:
        <ul>
         <li>FastWeb</li>
         <li>BigFuture: The College Board’s Scholarship Search</li>
         <li>CollegeScholarships.org</li>
        </ul>
        </p>


        <hr class="my-5">

        <div class="anchor" id="sec2"></div>
           <h2 class="display-4">Loans and Lenders</h2>
           <p>Vassar will eliminate or reduce loans in the aid awards of students from low-income households.</p>
           <p>Loans (usually from the Federal Direct Loan program) are low-interest and can be repaid over a period of 10 years when the student either graduates or leaves college.</p>
           <div class="anchor" id="sec2a"></div>
           <h4 class="pt-4">Federal Loans for Students</h4>

           <p><strong>Federal Direct Loans</strong></p>
           <ul>
               <li>Available to eligible students who complete the FAFSA form</li>
               <li>Subsidized loans do not accrue interest while the student is enrolled in school</li>
               <li>Unsubsidized loans do accrue interest, beginning from the time the loan is disbursed</li>
               <li>Interest rate: 3.73% (fixed) for 2021-2022</li>
               <li>Origination fee: approximately 1%</li>
               <li>Maximum annual limit: 1st year: $5,500, up to $3,500 can be subsidized; 2nd year: $6,500, up to $4,500 can be subsidized; 3rd/4th year: $7,500, up to $5,500 can be subsidized</li>
               <li>Repayment begins: 6 months after graduating, leaving school, or dropping below half-time enrollment</li>
               <li>Repayment period: varies depending on payment plan selected</li>
           </ul>

           <div class="alert alert-secondary" role="alert">
           <p><strong><i class="fa-solid fa-circle-info"></i>  Important Information about Federal Loans for Students</strong></p>
           <ul>
               <li>Interest rate: 3.73% (fixed) for 2021–22</li>
               <li>Origination fee: approximately 1%</li>
               <li>
                   <ul>Maximum annual limit:
                       <li>1st year: $5,500, up to $3,500 of which can be subsidized</li>
                       <li>2nd year: $6,500, up to $4,500 of which can be subsidized</li>
                       <li>3rd/4th year: $7,500, up to $5,500 of which can be subsidized</li>
                   </ul>
               </li>
               <li>Repayment begins six months after a student graduates, leaves school, or drops below half-time enrollment</li>
               <li>Repayment period varies depending on the payment plan selected</li>
           </ul>
           </div>

               <div class="anchor" id="sec2b"></div>
               <h4 class="pt-4">Federal Loans for Parents</h4>
               <p>Direct Parent PLUS Loans are government loans made available to parents of dependent undergraduate students. To qualify, a parent:</p>
               <ul>
                   <li>Must be a U.S. citizen or eligible non-citizen</li>
                   <li>Must not have an adverse credit history</li>
                   <li>Must undergo a credit check</li>
                   <li>If the credit is denied, the parent may reapply with an endorser, or the student may borrow an additional subsidized loan for $4,000-$5,000.</li>
               </ul>
           <div class="alert alert-secondary" role="alert">
               <p><strong><i class="fa-solid fa-circle-info"></i> Important Information about Federal Loans for Parents</strong></p>
               <ul>
                   <li>Interest rate: 6.28% (fixed) for 2021–22</li>
                   <li>Origination fee: approximately 4%</li>
                   <li>Maximum annual limit: total cost of attendance (budget) less any financial aid the student receives</li>
                   <li>Repayment begins once the loan is fully disbursed, with an option to request a deferment</li>
                   <li>Repayment period varies depending on plan selected</li>
               </ul></div>
               <div class="anchor" id="sec2c"></div>
               <h4 class="pt-4">Alternative/Private Loans</h4>
               <p>Private student loans are non-government loans from lenders such as banks, credit unions, and state agencies. Either the parent or the student can be the primary borrower. If the student is the borrower, a co-signer is usually required.
               </p>
               <p>This summary of the differences explains federal versus private student loans.</p>
               <p>Vassar College does not endorse or recommend any particular private lender. For a sampling of lenders used by Vassar students in recent years, visit ELM Select.</p>

               <div class="alert alert-secondary" role="alert">
                   <p><strong><i class="fa-solid fa-circle-info"></i>  Important Information about Private Loans</strong></p>
                   <ul>
                       <li>Interest rate: varies. A comparison of interest rates (prime rate versus 3 month Libor) can be found at Financial Forecast Center</li>
                       <li>Origination fee: varies</li>
                       <li>Maximum annual limit: total cost of attendance (budget) less any financial aid the student receives</li>
                       <li>Repayment begins: varies</li>
                       <li>Repayment period: varies</li>
                   </ul>
               </div>

               <p>If you have any questions or concerns about the loan portion of your financial aid package, please call Student Financial Services at (845) 437-5320 or email finaid@vassar.edu.</p>


               <h4 class="pt-4">College Loan Tips</h4>
               <ul>
                   <li>Apply for financial aid on Vassar’s Apply for Aid page.</li>
                   <li>Eligibility for all financial aid is determined by completing the Free Application for Federal Student Aid (FAFSA).</li>
                   <li>Avoid any scholarship/grant searches that require a fee. Look for free searches like fastweb.</li>
                   <li>Visit your state’s education department website to find out what grant or state-backed loans might be available to you. Some states offer education loans for their residents that are less costly than alternative education loans from private lenders.</li>
                   <li>Federal student and parent loans are less costly than alternative private education loans, and most of these loans require a co-signer if you want to reduce the cost of the loan. The Federal Parent Loan (PLUS) has a provision for loan forgiveness in the event that either the parent or student dies or suffers 100% disability. This is not offered by private student loans where a co-signer is required for the student.</li>
               </ul>

               <hr class="my-5">

               <div class="anchor" id="sec3"></div>
               <h2 class="display-4">Campus Employment</h2>
               <p>All financial aid recipients receive an allocation for either Federal Work-Study (federally funded) or Institutional Employment (Vassar-supplied employment funds).</p>
               <p>Students with work-study awards receive priority in the job registration process. These awards may also apply for off-campus community service work-study (CSWS).</p>
               <p>Jobs on campus include:</p>
               <ul>
                   <li>Library work</li>
                   <li>Administrative and academic office work</li>
                   <li>Computer center services</li>
                   <li>Faculty internships</li>
               </ul>
               <p>After the first month of each semester, remaining jobs are made available to non-financial aid students.</p>
               <p>Students may work an average of eight hours per week, and can anticipate earning about $3,000 during the academic year.</p>
               <p><a href="#" class="fix">Learn More about campus jobs at Student Employment</a></p>


       </div>
    </div>
   </main>
  </div>
 </div>
</div>


<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/admission-visit.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/admission-apply-transfer.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/admission-apply.php');?>
<?php echo end_sec_relatedTopics(); ?>


<?php echo site_footer(); ?>
