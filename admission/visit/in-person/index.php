
<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
 ?>
<?php

/*  PAGE INFO ============ */

$page_title = "In-Person Campus Visits";
$page_classes = "";

/*  ---------------------- */

?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation(); ?>

<?php echo breadcrumbNav('theme-cream'); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/nav-elements/admission-visit-breadcrumb.php');?>
<?php echo end_sec_breadcrumbNav(); ?>

<?php echo page_textmasthead('theme-cream'); ?>
<?php echo toplinksNav(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/nav-elements/admission-visit-nav.php');?>
<?php echo end_sec_toplinksNav(); ?>

<?php echo sec_hasColumns(
    null,
    2,
    null,
    '',
    ''
); ?>

<?php echo item_col(); ?>
<h2 class="display-6">We are excited to welcome registered visitors to our campus! To be sure that your time on campus is safe and enjoyable, please carefully review the information on this page prior to your Vassar visit. </h2>
<a href="https://apply.vassar.edu/portal/campusvisitcalendar"  class="px-0 btn btn-link">Register Now<i class="circle fa-solid fa-angle-right"></i></a>
<?php echo end_item_col(); ?>

<?php echo item_col(); ?>
<img src="https://vassartest.chuckyatsuk.com/img/visit/in-person/0070-21-06-kr-tour-vassar-0016.jpg" />
<?php echo end_item_col(); ?>

<?php echo end_sec_hasColumns(); ?>


<?php echo sec_regularContent(
    null,
    null,
    '',
    ''
); ?>


<h3 class="display-6">Campus Access and Pre-Registration</h3>
    <p>Pre-registration is required to attend an on-campus Admission Information Session and Campus Tour; walk-ins will not be accommodated. Self-guided tours are permitted without registration, and campus maps are available at the directional sign in front of the Kautz Admission House.</p>
    <p>Please note, Admission Office staff will only be available during regularly scheduled visits to speak with registered visitors. All campus buildings, including the Kautz Admission House, remain closed to the general public. The guided tour includes entry into some campus buildings, but visitors will not be permitted to enter buildings separate from the tour. Please refrain from bringing pets along for the Information Session or Tour; service animals are welcome.</p>
<hr/>
<h3 class="display-6">Visitor Health and Safety Policies</h3>
<p><strong>Proof of COVID-19 Vaccination or Negative Test</strong><br/> We require all campus visitors to show proof of full vaccination against COVID-19. This requirement includes the booster shot, which is in keeping with the spring term campus requirement that all students and employees have a COVID-19 booster. Visitors who are not fully vaccinated, including those who have not yet received the booster, must present a negative COVID-19 test upon check-in.</p>

<p>Visitors not in compliance will be turned away. This policy applies to all visitors, including those who are ineligible to receive the booster.</p>

<p><strong>Acceptable proof of vaccination or COVID-19 testing includes:</strong></p>
<ul>
    <li>Official vaccination card including the booster shot</li>
    <li>NY Excelsior Pass App with vaccination record or record of a negative PCR test within 72 hours of the visit</li>
    <li>A SMART Health Card with vaccination record or record of a negative PCR test within 72 hours of the visit</li>
    <li>Paper record of a negative PCR test with the date/time being no greater than 72 hours prior to your visit</li>
    <li>A negative rapid antigen test taken immediately before the visit (you will need to bring your own rapid test kit; please note that most rapid tests take 15-20 minutes to display a result)</li>
</ul>

<p>Regardless of your vaccination status or COVID-19 test results, if you are feeling sick, we ask that you stay home.</p>

<p><strong>Mask Policy</strong><br/> All visitors must wear a mask when indoors. The information session and guided tour will include entry into campus buildings, so please have a mask with you during your visit.</p>

<hr/>
<h3 class="display-6">Arrival and Check-In</h3>
<p>Parking is available in the North Parking Lot and South Parking Lot. A small number of parking spaces can also be found on Main Campus Drive and along the back of Main Circle in front of Kautz House. We recommend arriving on campus 20 minutes prior to the start of your visit in order to secure parking and make your way to the check-in location.</p>

<p>Check-in will take place outside of Kautz Admission House. Visitors arriving more than 10 minutes late will be asked to wait until the information session ends to join the tour; visitors arriving more than 10 minutes after the start of the tour will be unable to join.</p>

<a class="btn btn-primary fix">Download Parking Map</a>

<?php echo end_sec_regularContent(); ?>



<?php /*  PAGE CONTENT === */ ?>


<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/admission-visit.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/admission-apply-transfer.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/admission-apply.php');?>
<?php echo end_sec_relatedTopics(); ?>

<?php echo site_footer(); ?>
