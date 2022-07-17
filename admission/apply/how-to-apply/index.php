
<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
 ?>
<?php

/*  PAGE INFO ============ */

$page_title = "How to Apply";
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



<?php echo masthead_interiorPage(
    'Applying to Vassar',
    'Everything you need to know to apply An overview of all the ways to apply to Vassar.',
    'https://vassartest.chuckyatsuk.com/img/0073-21-06-kr-summer-vassar-0165.jpg');
?>



<div class="container">
    <div class="container position-relative" id="content">
        <div class="row mt-5">
            <aside class="col-md-3" id="left">
                <div class="mt-5 mb-3 sticky-top" id="side">
                    <ul class="list-group nav flex-md-column flex-row justify-content-between pt-5" id="sidenav">
                        <li class="list-group-item nav-item mb-0"><a href="#sec1" class="nav-link pl-0">First-Year Applicants</a></li>
                        <li class="list-group-item nav-item mb-0"><a href="#sec2" class="nav-link pl-0">Transfer Applicants</a></li>
                        <li class="list-group-item nav-item"><a href="#sec3" class="nav-link pl-0">Options for Submission</a></li>
                        <li class="list-group-item nav-item"><a href="#sec4" class="nav-link pl-0">Selection Criteria</a></li>
                        <li class="list-group-item nav-item"><a href="#sec4" class="nav-link pl-0">Standardized Testing</a></li>
                    </ul>
                </div>
            </aside>

            <main class="col p-5">
                <div class="row position-relative">
                    <div class="col">
                        <div class="py-3 position-relative">
                            <div class="position-relative">

                                <div class="anchor" id="sec1"></div>
                                <h4 class="display-4 mb-4">First Year Applicants</h4>
                                <p>First-year applicants may submit in any one of the following ways:</p>
                                    <ul>
                                        <li><a href="https://apply.commonapp.org/Login?ma=278">Common application (including Vassar Member Questions)</a></li>
                                        <li><a href="https://www.mycoalition.org/public/info/vassar">Coalition application</a></li>
                                        <li><a href="http://questbridge.org/college-partners/vassar-college">QuestBridge application</a></li>
                                    </ul>
                                <p><a class="btn btn-link px-0 arrow" href="/admission/apply/first-year-applicants">Learn more about First-Year Applications</a></p>

                                <hr class="my-5">

                                <div class="anchor" id="sec2"></div>
                                <h4 class="display-4">Transfer Applicants</h4>
                                <p>Transfer applicants can apply using the Common application.</p>
                                <p><a class="btn btn-link px-0 arrow" href="/admission/apply/transfer">Learn more about Transfer Applications</a></p>

                                <hr class="my-5">

                                <div class="anchor" id="sec3"></div>
                                <h4 class="display-4">Submitting Application Materials</h4>
                                <p>Electronic submission is preferred. Application materials may also be submitted via email, fax, or mail.</p>
                                <p>Supplemental materials, can be uploaded through the application status portal, which is available after an application has been submitted and processed.</p>
                                <p><strong>To submit documents:</strong><br/>
                                    Email: <a href="mailto:admappmaterials@vassar.edu">admappmaterials@vassar.edu</a><br/>
                                    Fax: (845) 437-706</p>
                                <p>Financial Aid documents should be submitted to <a href="https://studentfinancialservices.vassar.edu/financial-aid/">Student Financial Services</a> through IDOC.</p>

                                <hr class="my-5">



                                <div class="anchor" id="sec4"></div>
                                <h4 class="display-4">Selection Criteria</h4>
                                <p>Vassar weighs a number of factors in the admission decision, including:</p>
                                <ul>
                                    <li>Academic performance, as demonstrated in high school</li>
                                    <li>Personal strengths, motivation, and potential as evidenced in essays, recommendations, and community involvement</li>
                                </ul>
                                <p>Vassar recommends that prospective applicants applying from high school elect four years of:
                                </p>
                                <ul>
                                    <li>English</li>
                                    <li>Mathematics</li>
                                    <li>Laboratory science</li>
                                    <li>History or social science</li>
                                    <li>Foreign language</li>
                                </ul>
                                <p>It is also recommended that applicants take a substantial portion of their work in enriched, accelerated, or honors courses or in Advanced Placement or International Baccalaureate programs when these options are available.</p>
                                <p>Special attention is given to the academic breadth, depth, and rigor of candidates’ junior and senior year programs.</p>


                                <hr class="my-5">
                                <div class="anchor" id="sec5"></div>
                                <h4 class="display-4">Standardized Testing</h4>
                                <?php echo item_alert(
                                    '',
                                    'Students applying to Vassar during the 2020–21, 2021–22, and 2022–23 admission cycles may choose whether or not to submit SAT/ACT scores.',
                                    'info-circle',
                                    'alert-light alert-accent-gold my-4'
                                ); ?>
                                <p class="fix"><strong>[INSERT STANDARDIZED TESTING INFO]</strong></p>



                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</div>




<!-- Related Topics -->
<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/apply/apply-first-year.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/apply/apply-international.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/apply/apply-transfer.php');?>
<?php echo end_sec_relatedTopics(); ?>

<?php echo site_footer(); ?>