
<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */

$page_info = '{
  "page_title": "On Campus Visits",
  "feature_image": "/admission/assets/images/visit/in-person/0073-21-06-kr-summer-vassar-0179.jpg"
}';

/* === */

$page_info = json_decode($page_info, true);

?>

<?php
  echo site_header();
?>

<?php echo vassar_masthead(); ?>

<?php echo page_partialmasthead($page_info['feature_image'],['image_alt_text' => 'Vogelstein Center for Drama and Film']); ?>

<?php echo hamburger_navigation(); ?>

<?php echo interior_page_nav() ?>


<?php echo sec_fullBleedImageColumn(
    null,
     '/admission/assets/images/visit/0113-19-09-kr-families-weekend-vassar-1616.jpg',
    'image-is-first theme-cream',
    '',
    ['img_alt_text' => 'Tour of the dorms on the Vassar Campus']
);

// former image: visit/in-person/0070-21-06-kr-tour-vassar-0016.jpg
// Admission said they don't want to use this; there's a student
// in there who they don't want to feature

?>
<div class="animate-when-content-appears animation-slide-up">
    <p class="intro-text">We are excited to welcome registered visitors to our campus! To be sure that your time on campus is safe and enjoyable, please carefully review the information on this page prior to your Vassar visit.</p>

    <a href="https://apply.vassar.edu/portal/campusvisitcalendar" class="btn btn-primary mt-5 arrow">Register Now</a>

</div>
<?php echo end_sec_fullBleedImageColumn(); ?>

<?php echo sec_regularContent(
    'Visitor Health and Safety Policies',
    '',
    '',
    ''
); ?>

<?php echo item_alert(
    'Mask Policy',
    'All visitors must wear a mask when indoors. The information session and guided tour will include entry into campus buildings, so please have a mask with you during your visit.',
    'mask-face',
    'alert-light alert-accent-gold'
); ?>

<h3>Proof of COVID-19 Vaccination or Negative Test</h3>
<p>We require all campus visitors to show proof of full vaccination against COVID-19. This requirement includes the booster shot, which is in keeping with Vassar’s requirement that all students and employees have a COVID-19 booster. Visitors who are not fully vaccinated, including those who have not yet received the booster, must present a negative COVID-19 test upon check-in.</p>

<p>Visitors not in compliance will be turned away. This policy applies to all visitors, including those who are ineligible to receive the booster.</p>


<h3>Acceptable proof of vaccination or COVID-19 testing includes:</h3>
<ul>
    <li>Official vaccination card including the booster shot</li>
    <li>NY Excelsior Pass App with vaccination record or record of a negative PCR test within 72 hours of the visit</li>
    <li>A SMART Health Card with vaccination record or record of a negative PCR test within 72 hours of the visit</li>
    <li>Paper record of a negative PCR test with the date/time being no greater than 72 hours prior to your visit</li>
    <li>A negative rapid antigen test taken immediately before the visit (you will need to bring your own rapid test kit; please note that most rapid tests take 15-20 minutes to display a result)</li>
</ul>

<p>Regardless of your vaccination status or COVID-19 test results, if you are feeling sick, we ask that you stay home.</p>



<?php echo end_sec_regularContent(); ?>


<?php echo sec_regularContent(
    'Arrival and Check-In',
    'theme-burgundy',
    '',
    ''
); ?>


<p>Visitor parking can be found in the North Parking Lot or South Parking Lot; additionally, a small number of visitor spaces are available on Main Campus Drive and in front of Kautz House. We recommend arriving on campus at least 20 minutes prior to the start of your visit in order to secure parking and make your way to the check-in location.</p>

<p>Check-in will open 30 minutes prior to the start of the visit and will take place at the Kautz Admission House. Check-in will close 20 minutes after the start of the visit session. Guests arriving after check-in has closed will be unable to join the tour.</p>

<p>Pets are not permitted in the Information Session or Campus Tour; service animals are welcome.</p>

<a href="https://www.vassar.edu/sites/default/files/2022-06/2022-admission-parking-map.pdf" class="btn btn-light">Download Parking Map <i class="mx-0 fa-solid fa-download"></i></a>

<?php echo end_sec_regularContent(); ?>


<?php echo sec_wordByWord_fixed(
    null,
    'animate-when-content-appears space-around-image',
    null
); ?>

<p>“Vassar’s 1,000 acres are filled with more than 100 buildings in a variety of architectural styles, from the Gothic Thompson Memorial Library to Marcel Breuer's Ferry House to César Pelli’s Lehman Loeb Art Center.”</p>
<div class="quote-attribution"><em>Architectural Digest</em>, “50 Most Beautiful Campuses”</div>
<?php echo end_sec_wordByWord_fixed(); ?>


<!-- Campus Access and Pre-Registration -->
<?php echo sec_fullBleedImageColumn(
    'Campus Access and Pre-Registration',
    $admission_img_path.'visit/in-person/0069-19-05-kr-spring-vassar-4221.jpeg',
    'image-is-first theme-charcoal bg-dark',
    'mw-100',
    ['img_alt_text' => 'Spring View of Raymond Entrace and tulips on Vassar Campus']
); ?>
<div class="animate-when-content-appears animation-slide-up">

    <p>Pre-registration is required to attend an on-campus Admission Information Session and Campus Tour; walk-ins will not be accommodated. Self-guided tours are permitted without registration, and campus maps are available at the directional sign in front of the Kautz Admission House.</p>
    <a href="https://apply.vassar.edu/portal/campusvisitcalendar" class="btn btn-light mt-5 arrow">Register Now</a>
    <?php echo end_sec_fullBleedImageColumn(); ?>
    <!-- End Campus Access and Pre-Registration -->




<?php /*  PAGE CONTENT === */ ?>


<!-- Related Topics -->
<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/explore/explore-hudson-valley.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/visit/visit-virtual-programs.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/visit/visit-group-visits.php');?>
<?php echo end_sec_relatedTopics(); ?>

<?php echo site_footer(); ?>
