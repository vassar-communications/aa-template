
<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
 ?>
<?php

/*  PAGE INFO ============ */

$page_title = "For Veterans";
$page_classes = "";

/*  ---------------------- */

?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation(); ?>



<?php echo page_textmasthead('theme-cream'); ?>

<?php echo breadcrumbNav('theme-verylightgray'); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/nav-elements/admission-apply-breadcrumb.php');?>
<?php echo end_sec_breadcrumbNav(); ?>

<?php echo toplinksNav(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/nav-elements/admission-apply-nav.php');?>
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

<h3>Information for American Veterans</h3>
<p>Vassar actively seeks to enroll qualified veterans of the U.S. Armed Forces. Vassar fosters these connections through the Posse Veterans Program and the Yellow Ribbon Program, aimed at increasing enrollment of veterans at selective colleges and universities.</p>

<?php echo end_item_col(); ?>

<?php echo item_col('equal'); ?>


<img src="https://vassartest.chuckyatsuk.com/img/0073-21-06-kr-summer-vassar-0165.jpg" />
<?php echo end_item_col(); ?>

<?php echo end_sec_hasColumns(); ?>


<?php echo sec_regularContent(
    null,
    'theme-cream',
    ''
); ?>



<h3>Posse Veterans Program</h3>
<p>This program supports veterans interested in pursuing bachelor’s degrees at top educational institutions. Those accepted into the program attend college as part of a Veterans Posse, which is a team of service veterans.

    The first 10 participants joined the Vassar community in Fall 2013, attending tuition-free through a combination of scholarship aid and GI Bill® benefits.  Read more</p>
<p>Interested in applying through the Posse Veterans Program? </p>

<p>Posse Veterans Program</br>
    14 Wall Street, Suite 8A-60</br>
    New York, NY 10005</br>
    Tel: (212) 405-1691</br>
    Fax: (212) 405-1697</br>
    veterans@possefoundation.org</p>

<hr/>

<h3>Yellow Ribbon Program</h3>
<p>The Yellow Ribbon Program is a collaboration between colleges and universities and the Veterans Administration to cover the cost of tuition and fees, under the Post-9/11 Veterans Educational Assistance Act of 2008. This program makes a Vassar education accessible to eligible veterans, regardless of socio-economic status.</p>

<?php echo end_sec_regularContent(); ?>

<?php echo sec_regularContent(
    null,
    null,
    ''
); ?>

<h2 class="mb-4">Special Accommodations for Veterans</h2>
    <h3>Admissions</h3>
        <p>Vassar is proud to offer an automatic application fee waiver to all service veterans.</p>
        <p>Visit the Apply page  to learn about application requirements.</p>
        <p>Veterans may supplement their applications by submitting additional materials related to their military experience, including:</p>
        <ul>
            <li>AARTS transcript</li>
            <li>Military educational records</li>
            <li>A supplementary essay</li>
        </ul>
    <hr/>
    <h3>Financial Aid</h3>
    <p>As a participant in the Yellow Ribbon Program, Vassar will match funding with the U.S. Department of Veterans Affairs to cover the difference in costs between Vassar’s tuition and fees and those of the highest public in-state institution.</p>
    <hr/>
    <h3>Housing</h3>
    <p>Housing options are available both on or off campus. The surrounding area offers apartment units for rent. Campus includes apartment-like housing for single juniors and seniors. The Office of Residential Life will work with veterans to ensure that housing arrangements are appropriate to their needs.</p>
    <hr/>
    <h3>Advising</h3>
    <p>Vassar provides advice and support through pre-major or major advisors, an advisor in the  Office of the Dean of Studies dedicated to each class, and a counseling service staffed by trained professionals who help students, free of charge, with personal and academic issues.</p>

<h2 class="mb-4">Vassar Contacts and Links</h2>
    <p>Contact our admission department with any veteran’s related questions or follow the links below for more information</p>
    <p>Financial Aid<br/>
        Ann Gitto, Associate Director of Student Financial Services<br/>
        Email</p>

<p>Veterans Advisor & Registrar<br/>
        Colleen Mallet, Registrar<br/>
    Email</p>

<p>Links to Information on Veterans’ Benefits<br/>
        Post 9/11 GI Bill® Benefits<br/>
        Yellow Ribbon Program</p>

<?php echo end_sec_regularContent(); ?>

<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/admission-visit.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/admission-apply-transfer.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/admission-apply.php');?>
<?php echo end_sec_relatedTopics(); ?>


<?php echo site_footer(); ?>
