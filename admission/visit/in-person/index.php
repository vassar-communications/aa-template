
<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/*  PAGE INFO ============ */

$page_title = "In-Person Visits";
$page_classes = "";

/*  ---------------------- */

?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo page_partialmasthead('https://vassartest.chuckyatsuk.com/img/visit/in-person/0073-21-06-kr-summer-vassar-0179.jpg'); ?>

<?php echo hamburger_navigation(); ?>

<?php echo breadcrumbNav('theme-cream'); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/nav-elements/admission-visit-breadcrumb.php');?>
<?php echo end_sec_breadcrumbNav(); ?>

<?php echo toplinksNav(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/nav-elements/admission-visit-nav.php');?>
<?php echo end_sec_toplinksNav(); ?>



<?php echo sec_fullBleedImageColumn(
    null,
    'https://vassartest.chuckyatsuk.com/img/visit/in-person/0070-21-06-kr-tour-vassar-0016.jpg',
    'image-is-first theme-cream',
    ''
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <p class="intro-text">We are excited to welcome registered visitors to our campus! To be sure that your time on campus is safe and enjoyable, please carefully review the information on this page prior to your Vassar visit.</p>

    <a href="https://apply.vassar.edu/portal/campusvisitcalendar" class="btn btn-primary mt-5 arrow">Register Now</a>

</div>
<?php echo end_sec_fullBleedImageColumn(); ?>


<?php echo sec_wordByWord_fixed(
    null,
    'animate-when-content-appears space-around-image',
    null
); ?>

<p>“Vassar’s more than 100 buildings showcase various architectural styles, from the Gothic Thompson Memorial Library to César Pelli’s Lehman Loeb Art Center.”</p>
<div class="quote-attribution"><em>Architectural Digest</em>, “50 Most Beautiful Campuses”</div>
<?php echo end_sec_wordByWord_fixed(); ?>


<?php echo sec_regularContent(
    null,
    'theme-burgundy',
    '',
    ''
); ?>


<?php echo item_alert(
    'Mask Policy',
    'All visitors must wear a mask when indoors. The information session and guided tour will include entry into campus buildings, so please have a mask with you during your visit.',
    'mask-face',
    'alert-light alert-accent-gold'
); ?>


<h4 class="display-4 mb-4">Arrival and Check-In</h4>
<p>Parking is available in the North Parking Lot and South Parking Lot. A small number of parking spaces can also be found on Main Campus Drive and along the back of Main Circle in front of Kautz House. We recommend arriving on campus 20 minutes prior to the start of your visit in order to secure parking and make your way to the check-in location.</p>

<p>Check-in will take place outside of Kautz Admission House. Visitors arriving more than 10 minutes late will be asked to wait until the information session ends to join the tour; visitors arriving more than 10 minutes after the start of the tour will be unable to join.</p>

<a class="btn btn-light">Download Parking Map <i class="mx-0 fa-solid fa-download"></i></a>

<?php echo end_sec_regularContent(); ?>



<!-- Campus Access and Pre-Registration -->
<?php echo sec_fullBleedImageColumn(
    null,
    'https://vassartest.chuckyatsuk.com/img/visit/in-person/0069-19-05-kr-spring-vassar-4221.jpeg',
    'image-is-first theme-charcoal bg-dark',
    'mw-100'
); ?>
<div class="animate-when-content-appears animation-slide-up">

    <h4 class="display-4 mb-4">Campus Access and Pre-Registration</h4>
    <p>Pre-registration is required to attend an on-campus Admission Information Session and Campus Tour; walk-ins will not be accommodated. Self-guided tours are permitted without registration, and campus maps are available at the directional sign in front of the Kautz Admission House.</p>
    <a href="https://apply.vassar.edu/portal/campusvisitcalendar" class="btn btn-light mt-5 arrow">Register Now</a>
    <?php echo end_sec_fullBleedImageColumn(); ?>
    <!-- End Campus Access and Pre-Registration -->


    <?php echo sec_regularContent(
        null,
        'theme-cream',
        '',
        ''
    ); ?>
    <?php echo item_alert(
        'Please note',
        ' Admission Office staff will only be available during regularly scheduled visits to speak with registered visitors. All campus buildings, including the Kautz Admission House, remain closed to the general public. The guided tour includes entry into some campus buildings, but visitors will not be permitted to enter buildings separate from the tour. Please refrain from bringing pets along for the Information Session or Tour; service animals are welcome.',
        'info-circle',
        'alert-light alert-accent-gold'
    ); ?>


    <h4 class="display-4 mb-4">Visitor Health and Safety Policies</h4>
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



    <?php echo end_sec_regularContent(); ?>



<?php /*  PAGE CONTENT === */ ?>


<!-- Related Topics -->
<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/explore/explore-hudson-valley.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/visit/visit-virtual-programs.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/visit/visit-group-visits.php');?>
<?php echo end_sec_relatedTopics(); ?>

<?php echo site_footer(); ?>
