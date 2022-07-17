
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


<?php echo sec_hasColumns(
    null,
    2,
    null,
    'animate-when-content-appears animation-slide-up',
    'flex-equal align-items-center d-flex flex-column-reverse flex-md-row'
); ?>

<?php echo item_col('equal'); ?>
<h2 class="display-3">Applying to Vassar</h2>
<p>Everything you need to know to apply An overview of all the ways to apply to Vassar.</p>
<?php echo end_item_col(); ?>

<?php echo item_col('equal'); ?>
<img src="https://vassartest.chuckyatsuk.com/img/apply/how/110519_160over90_Vassar_0221.jpg" />
<?php echo end_item_col(); ?>

<?php echo end_sec_hasColumns(); ?>


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
                                <h2 class="display-4">First Year Applicants</h2>
                                <p>First-year applicants may submit in any one of the following ways:</p>
                                    <ul>
                                    <li>Common application</li>
                                    <li>Coalition application</li>
                                    <li>QuestBridge application</li>
                                    </ul>
                                <p><a href="/admission/apply/first-year-applicants">Learn more about First-Year Applications</a></p>

                                <hr class="my-5">

                                <div class="anchor" id="sec2"></div>
                                <h2 class="display-4">Transfer Applicants</h2>
                                <p>Transfer applicants can apply using the Common application.</p>
                                <p><a href="/admission/apply/transfer">Learn more about Transfer Applications</a></p>

                                <hr class="my-5">

                                <div class="anchor" id="sec3"></div>
                                <h2 class="display-4">Submitting Application Materials</h2>
                                <p>Electronic submission is preferred. Application materials may also be submitted via email, fax, or mail.</p>
                                <p>Supplemental materials, can be uploaded through the application status portal, which is available after an application has been submitted and processed.</p>
                                <p><strong>To submit documents:</strong><br/>
                                    Email: <a href="mailto:admappmaterials@vassar.edu">admappmaterials@vassar.edu</a><br/>
                                    Fax: (845) 437-706</p>
                                <p>Financial Aid documents should be submitted to Student Financial Services through IDOC.</p>

                                <hr class="my-5">



                                <div class="anchor" id="sec4"></div>
                                <h2 class="display-4">Selection Criteria</h2>
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
                                <p>Students applying to Vassar during the 2020–21, 2021–22, and 2022–23 admission cycles may choose whether or not to submit SAT/ACT scores.</p>

                                <hr class="my-5">
                                <div class="anchor" id="sec5"></div>
                                <h2 class="display-4">Standardized Testing</h2>

                                <p class="fix">insert from quick facts page</p>


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