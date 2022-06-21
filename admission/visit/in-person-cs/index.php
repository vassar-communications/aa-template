<style>

.textmasthead.theme-verylightgray {
  position: relative;
}
.textmasthead.theme-verylightgray:after {
  content: '';
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
    background: #ccc url(/assets/images/Vassar_QuadGrid-white.png);
    background-size: 8rem;
    background-attachment: fixed;
}
.textmasthead.theme-verylightgray .section__title {
  position: relative;
  z-index: 10;
}
.shadow-md {
  box-shadow: 0 0.4rem 0.6rem rgb(0 0 0 / 18%) !important;
}
p strong {
    font-variation-settings: "wght" 700;
}

.sec-welcome .column.col--text {
  background: var(--color-vassar-dark-burgundy);
}
.section__title__main.display-1.display {
  font-family: freight-big-pro;
  line-height: 0.8;
}

@keyframes title-word-appear {
  from {
    opacity: 0;
    transform: translateX(-0.4em);
  }
  to {
    opacity: 1;
    transform: translateX(0);
  }
}

.titleLevel3-word {
  display: block;
  animation-fill-mode: forwards;
  opacity: 0;
  transform: translateX(-0.4em);
}

.titleLevel3-word.word-1 {
  animation-name: title-word-appear;
  animation-duration: 1s;
}
.titleLevel3-word.word-2 {
  animation-name: title-word-appear;
  animation-duration: 1s;
  animation-delay: 0.2s;
}


</style>


<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
 ?>
<?php

/*  PAGE INFO ============ */

$page_title = "<b class='titleLevel3-word word-1'>In-Person</b> <b class='titleLevel3-word word-2'>Campus Visits</b>";
$page_classes = "inperson";

/*  ---------------------- */

?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation(); ?>


<?php echo page_masthead('https://vassartest.chuckyatsuk.com/img/visit/in-person/0073-21-06-kr-summer-vassar-0179.jpg'); ?>

<?php echo breadcrumbNav('theme-cream'); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/nav-elements/admission-visit-breadcrumb.php');?>
<?php echo end_sec_breadcrumbNav(); ?>

<?php echo toplinksNav(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/nav-elements/admission-visit-nav.php');?>
<?php echo end_sec_toplinksNav(); ?>



<?php echo sec_fullBleedImageColumn(
    null,
    '/0070-21-06-kr-tour-vassar-0016.jpg',
    'image-is-first theme-extralightgray xsec-welcome',
    'mw-100'
); ?>
<div class="animate-when-content-appears animation-slide-up">
  <h2 class="display-6">We are excited to welcome registered visitors to our campus! To be sure that your time on campus is safe and enjoyable, please carefully review the information on this page prior to your Vassar visit. </h2>

  <a href="https://apply.vassar.edu/portal/campusvisitcalendar" class="cta-link mt-5" style="background: var(--color-vassar-burgundy); color: #fff;">Register Now</a>

</div>
<?php echo end_sec_fullBleedImageColumn(); ?>



<?php echo sec_regularContent(
    null,
    'theme-burgundy',
    '',
    ''
); ?>


<div class="p-4 shadow-md mb-5" style="background: #fff; margin-top: 2rem; color: #444">
<p><i class="fa-solid fa-mask-face"></i> <strong>Mask Policy</strong><br> All visitors must wear a mask when indoors. The information session and guided tour will include entry into campus buildings, so please have a mask with you during your visit.</p></div>


<h3 class="display-6">Arrival and Check-In</h3>
<p>Parking is available in the North Parking Lot and South Parking Lot. A small number of parking spaces can also be found on Main Campus Drive and along the back of Main Circle in front of Kautz House. We recommend arriving on campus 20 minutes prior to the start of your visit in order to secure parking and make your way to the check-in location.</p>

<p>Check-in will take place outside of Kautz Admission House. Visitors arriving more than 10 minutes late will be asked to wait until the information session ends to join the tour; visitors arriving more than 10 minutes after the start of the tour will be unable to join.</p>

<a style="background-color: #fff; color: #444;" class="btn btn-primary px-4">Download Parking Map <i class="mx-0 fa-solid fa-download"></i></a>

<?php echo end_sec_regularContent(); ?>



<!--
<?php echo sec_hasColumns(
    null,
    2,
    null,
    '',
    'flex-equal align-items-center d-flex flex-column-reverse flex-md-row mb-5 pb-5'
); ?>

<?php echo item_col(); ?>
<h2 class="display-6">We are excited to welcome registered visitors to our campus! To be sure that your time on campus is safe and enjoyable, please carefully review the information on this page prior to your Vassar visit. </h2>
<a href="https://apply.vassar.edu/portal/campusvisitcalendar"  class="px-0 btn btn-link">Register Now<i class="circle fa-solid fa-angle-right"></i></a>
<?php echo end_item_col(); ?>

<?php echo item_col(); ?>
<img src="https://vassartest.chuckyatsuk.com/img/visit/in-person/0070-21-06-kr-tour-vassar-0054.jpg" />
<?php echo end_item_col(); ?>

<?php echo end_sec_hasColumns(); ?>
-->


<!-- Campus Access and Pre-Registration -->
<?php echo sec_fullBleedImageColumn(
    null,
    '0069-19-05-kr-spring-vassar-4221.jpg',
    'image-is-first theme-charcoal bg-dark',
    'mw-100'
); ?>
<div class="animate-when-content-appears animation-slide-up">

  <h3 class="display-6">Campus Access and Pre-Registration</h3>
      <p>Pre-registration is required to attend an on-campus Admission Information Session and Campus Tour; walk-ins will not be accommodated. Self-guided tours are permitted without registration, and campus maps are available at the directional sign in front of the Kautz Admission House.</p>
      <p>Please note, Admission Office staff will only be available during regularly scheduled visits to speak with registered visitors. All campus buildings, including the Kautz Admission House, remain closed to the general public. The guided tour includes entry into some campus buildings, but visitors will not be permitted to enter buildings separate from the tour. Please refrain from bringing pets along for the Information Session or Tour; service animals are welcome.</p>

<?php echo end_sec_fullBleedImageColumn(); ?>
<!-- End Campus Access and Pre-Registration -->


<?php echo sec_regularContent(
    null,
    'theme-cream',
    '',
    ''
); ?>

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



<?php echo end_sec_regularContent(); ?>











<?php /*  PAGE CONTENT === */ ?>


<?php echo sec_wideContent(
    'Related Topics',
    '',
    'theme-cream theme-verylightgray pb-1 presentation',
    'mw-4'
); ?>



<?php echo sec_hasColumns(
    null,
    3,
    null,
    '',
    ''
); ?>

<?php echo item_col('equalht'); ?>
<a class="card mb-4" href="/admission/explore/campus">
    <img src="https://vassartest.chuckyatsuk.com/img/visit/0191-19-10-ali-library-drone-vassar-vb-2015.jpg" class="card-img-top" alt="asdfasdfds">
    <div class="card-body">
        <h4 class="card-title h2">Explore Campus</h4>
        <div class="card-text">
            <p>Bold thinking converges with breathtaking natural beauty. </p>

        </div>
        <div class="p-0 m-0 pt-4 d-flex w-100 justify-content-start btn btn-link"><i class="mx-0 circle fa-solid fa-arrow-right"></i></div>
    </div>
</a>
<?php echo end_item_col(); ?>

<?php echo item_col('equalht'); ?>
<a class="card mb-4" href="/admission/explore/student-life">
    <img src="https://vassartest.chuckyatsuk.com/img/explore/student-life/Vassar_Campus_20190508_KR_5256.jpg" class="card-img-top" alt="asdfasdfds">
    <div class="card-body">
        <h4 class="card-title h2">Explore Student Life</h4>
        <div class="card-text">
            <p>A strong community is made of every individual.</p>

        </div>
        <div class="p-0 m-0 pt-4 d-flex w-100 justify-content-start btn btn-link"><i class="mx-0 circle fa-solid fa-arrow-right"></i></div>
    </div>
</a>
<?php echo end_item_col(); ?>
<?php echo item_col('equalht'); ?>
<a class="card mb-4" href="/admission/explore/outcomes">
    <img src="https://vassartest.chuckyatsuk.com/img/explore/outcomes/0002-20-01-kr-scc-networking-vassar-0041.jpg" class="card-img-top" alt="Outcomes">
    <div class="card-body">
        <h4 class="card-title h2">Explore Outcomes</h4>
        <div class="card-text">
            <p>Vassar is committed to ensuring our students’ growth and progress from Day 1 to beyond graduation.
            </p>
        </div>
        <div class="p-0 m-0 pt-4 d-flex w-100 justify-content-start btn btn-link"><i class="mx-0 circle fa-solid fa-arrow-right"></i></div>
    </div>
</a>
<?php echo end_item_col(); ?>
<?php echo end_sec_hasColumns(); ?>
<?php echo end_sec_wideContent(); ?>

<?php echo site_footer(); ?>
