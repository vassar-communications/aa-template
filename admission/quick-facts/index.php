<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */

$page_info = '{
  "page_title":"Quick Facts",
  "feature_image":"/admission/assets/images/quick-facts/0198-19-11-kwe-library-vassar-vb-5394.jpg"
}';
/* === */
$page_info = json_decode($page_info, true);


?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation(); ?>



<?php echo sec_fixedCenteredTitle_masthead(
    '<b class="slide-from-left">Quick&nbsp;</b>
   <b class="slide-from-right">Facts</b>',
    null,
    'theme-verylightgray reveal-image',
    'mw-4',
    ['bg-image-url' => $page_info['feature_image'],
        'bg-image-alt' => 'Students work in a reading room of the Thompson Memorial Library',
        'css' => '
      --title-container-bg-beforeContent: rgba(0,0,0,0.4);
      --section-bg-image-opacity: 0;
      /* --section-title-faded-color: #444; */
      --bs-gap: 1rem;
      ']
); ?>

<?php echo end_sec_fixedCenteredTitle_masthead(); ?>

<?php echo interior_page_nav() ?>

<?php /*  PAGE CONTENT === */ ?>

<?php echo masthead_interiorPage(
    'Here’s everything you need to know.',
    'We know you have questions. Find the answers you need below about application deadlines and decision dates, what happens after you apply, what’s required for your application and what’s optional, financial aid, and more!',
    '/admission/assets/images/quick-facts/1065_Vassar College_exteriors_campus life_Oct 2019_JA.jpg',
    null,
    null,
    ['img_alt_text' => 'Two students share a bike on one of the campus paths']
);
?>


<?php echo sec_hasColumns(
    'Deadlines',
    '3',
    null,
    'items-equal-height theme-cream',
    'gap-3',
    ['css' => '--section-intro-width: 56rem']
); ?>

<?php echo item_col(); ?>
<?php echo deadlines('Early Decision Round I'); ?>
<?php echo deadlines_item('Applications Due', 'November 15'); ?>
<?php echo deadlines_item('You’ll hear back around', 'Mid-December'); ?>
<?php echo end_deadlines(); ?>
<?php echo end_item_col(); ?>

<?php echo item_col(); ?>
<?php echo deadlines('Early Decision Round II'); ?>
<?php echo deadlines_item('Applications Due', 'January 1'); ?>
<?php echo deadlines_item('You’ll hear back around', 'Late January or early February'); ?>
<?php echo end_deadlines(); ?>
<?php echo end_item_col(); ?>

<?php echo item_col(); ?>
<?php echo deadlines('Regular Decision'); ?>
<?php echo deadlines_item('Applications Due', 'January 1'); ?>
<?php echo deadlines_item('You’ll hear back around', 'Late March'); ?>
<?php echo end_deadlines(); ?>
<?php echo end_item_col(); ?>

<?php echo end_sec_hasColumns(); ?>



<?php echo sec_regularContent(
    'After You’ve Applied',
    'red-icons',
    ''
); ?>

<div class="icon-items-list">
    <?php echo item_iconItem(
        null,
        'list-check',
        'icon-on-left'
    ); ?>
    <p>Within 5 days of receiving your application, we will send you an email with your Applicant ID and directions on how to access an online checklist for your application.</p>
    <?php echo end_item_iconItem(); ?>

    <?php echo item_iconItem(
        null,
        'clock',
        'icon-on-left'
    ); ?>
    <p>Adding all supporting documents to our system may take a few weeks. If there are items missing from your application, you will be notified before decision release for your specified application round.</p>
    <?php echo end_item_iconItem(); ?>

    <?php echo item_iconItem(
        null,
        'check',
        'icon-on-left'
    ); ?>
    <p>Students will be able to check their admission decision online on the same website you used to check the status of your application. Vassar does not release admission decisions via telephone.</p>
    <?php echo end_item_iconItem(); ?>
</div>

<?php echo end_sec_regularContent(); ?>



<?php echo sec_regularContent(
    'What’s in Your Application',
    'has-bg quad-pattern theme-extralightgray',
    ''
); ?>

<p class="intro-text">Your application can contain a number of items, some of which are optional.</p>

<?php echo end_sec_regularContent(); ?>

<?php echo sec_hasColumns(
    'Required',
    '2',
    '',
    'theme-extralightgray',
    '',
    ['title_level' => '3']
); ?>

<?php echo item_col(); ?>

<ul class="style-checklist">
    <li><strong class="h3">Early Decision Agreement</strong><br>
        (Early Decision Applicants only)
    </li>
    <li><strong class="h3">School Report and High School Transcript</strong><br>
        To be completed and sent by your guidance counselor.
    </li>
    <li><strong class="h3">Mid-Year Grade Report</strong><br>
        Vassar requests each applicant’s most recent grade report to be sent by their school counselor.

        <ul>
            <li><strong>Early Decision I or II applicants:</strong> Vassar requires a first quarter/trimester grade report, which should be sent as soon as it becomes available, and first semester grades as soon as they become available.</li>
            <li><strong>Regular Decision applicants:</strong> A mid-year report with first semester grades is required when available, typically by February 1.</li>
        </ul>
    </li>
    <li><strong class="h3">Teacher Evaluations/Recommendation Letters </strong><br>
        Vassar requires two recommendations: one from your guidance counselor or school advisor, and one from a teacher in a core academic subject. If you wish, you may submit a third letter, either from another teacher or from someone else in your life who can share pertinent information.
    </li>
</ul>

<?php echo end_item_col(); ?>

<?php echo item_col(); ?>
<?php echo info_card(
    'Fee Waiver',
    '',
    'info'
); ?>

<p>If the application fee poses a financial hardship, a fee waiver can be requested on the Common Application or the Coalition Application. Fee waivers are automatically offered to students who participated in the Vassar View program, QuestBridge Finalists, Veterans, and International applicants who are unable to use a credit card to pay the application fee.</p>

<ul>
    <li>If you apply via the Common Application, under the Vassar College Member-Specific section you will be asked “Do you intend to use one of these school-specific fee waivers?” Please select “Yes, I will be using a Vassar fee waiver.”</li>
    <li>If you apply via the Coalition Application, use the fee waiver code: Vassar Fee Waiver.</li>
</ul>

<?php echo end_info_card(); ?>

<?php echo end_item_col(); ?>

<?php echo end_sec_hasColumns(); ?>


<?php echo sec_hasColumns(
    'Optional',
    '2',
    '',
    'theme-extralightgray border-top mw-inner-3',
    '',
    ['title_level' => '3']
); ?>

<?php echo item_col(); ?>
<?php echo item_iconItem(
    'Interviews',
    'people-arrows-left-right',
    'icon-on-left'
); ?>
<p>Off-campus interviews are available for first-year applicants. These are conducted all over the world by Vassar alumni and are available from November through February. Interviews are not required, but they are a great way to learn about Vassar from a new perspective. Not having an interview will not affect your admission decision. Requests for alumni interviews will not be processed until we receive your application.</p>
<?php echo end_item_iconItem(); ?>
<?php echo end_item_col(); ?>

<?php echo item_col(); ?>
<?php echo item_iconItem(
    'Your Space',
    'child-reaching',
    'icon-on-left'
); ?>
<p>“Your Space” is an optional section of our application...so don’t stress over it! This is a chance for you to show the admission committee something else about yourself. There is no “right” answer on what you should submit. For example, in the past, applicants have sent poetry, cartoons, art projects, photography, collages, short stories, videos, and short films. It is your space, so if you choose to complete it, send something that is a reflection of you!</p>
<?php echo end_item_iconItem(); ?>
<?php echo end_item_col(); ?>


<?php echo end_sec_hasColumns(); ?>

<a id="standardized-testing"></a>
<?php echo sec_regularContent(
    'SAT/ACT Scores',
    'gold-icons',
    ''
); ?>

<p class="intro-text">Vassar will not require students to submit the SAT or ACT for the 2022–2023 admission cycle as part of a new pilot policy. First-year applicants may choose whether or not to submit their SAT and/or ACT test scores as a reflection of their academic abilities.</p>

<div class="icon-items-list">
    <?php echo item_iconItem(
        null,
        'icons',
        'icon-on-left'
    ); ?>
    <p>While scores are considered, they are secondary to the applicant’s high school transcript. Remember, we look at your application as a whole, and not just one particular element.</p>
    <?php echo end_item_iconItem(); ?>

    <?php echo item_iconItem(
        null,
        'bolt-lightning',
        'icon-on-left'
    ); ?>
    <p>Should you choose to submit your scores, we will take your highest combined test scores. So, if you have taken the SAT or the ACT multiple times, we will combine your strongest scores on each section. Likewise, if you have taken both the SAT and the ACT, we will take whichever scores are higher.</p>
    <?php echo end_item_iconItem(); ?>

    <?php echo item_iconItem(
        null,
        'landmark-dome',
        'icon-on-left'
    ); ?>
    <p>To submit your required standardized test scores to Vassar, you may request official scores from the College Board and/or ACT. In addition, Vassar will accept complete test scores reported on an official high school transcript, or copies of official SAT/ACT score reports validated by a school counselor.</p>
    <?php echo end_item_iconItem(); ?>
</div>

<?php echo end_sec_regularContent(); ?>




<?php

$satact_info_card = info_card('Important', '', 'alert') . '<p>Applicants are advised not to wait until the last test date available for your application round. In the event of test date postponements due to weather, or delays in test score releases, Vassar tries to work with students but cannot guarantee scores will arrive in time for applicants to be considered in their chosen application round.</p>' . end_info_card();

echo sec_hasColumns(
    'Deadlines',
    '3',
    '<p class="intro-text">The following indicates the latest date you can take standardized tests.</p>' . $satact_info_card,
    'items-equal-height theme-cream',
    'gap-3'
); ?>

<?php echo item_col(); ?>
<?php echo deadlines('Early Decision Round I'); ?>
<?php echo deadlines_item('SAT', 'November Sitting'); ?>
<?php echo deadlines_item('ACT', 'October Sitting'); ?>
<?php echo end_deadlines(); ?>
<?php echo end_item_col(); ?>

<?php echo item_col(); ?>
<?php echo deadlines('Early Decision Round II'); ?>
<?php echo deadlines_item('SAT', 'December Sitting'); ?>
<?php echo deadlines_item('ACT', 'December Sitting'); ?>
<?php echo end_deadlines(); ?>
<?php echo end_item_col(); ?>

<?php echo item_col(); ?>
<?php echo deadlines('Regular Decision'); ?>
<?php echo deadlines_item('SAT', 'December Sitting'); ?>
<?php echo deadlines_item('ACT', 'December Sitting'); ?>
<?php echo end_deadlines(); ?>
<?php echo end_item_col(); ?>

<?php echo end_sec_hasColumns(); ?>



<?php echo sec_regularContent(
    'Entrance Requirements',
    'red-icons',
    ''
); ?>

<p class="intro-text text-center">The typical candidate has taken a very challenging curriculum at their high school, taking full advantage of all that their school has to offer.</p>

<div class="icon-items-list">
    <?php echo item_iconItem(
        null,
        'book',
        'icon-on-left'
    ); ?>
    <p>We recommend students take four years of the five main academic core subjects: English, Math, Foreign Language, Natural Science, and History/Social Science. We seriously consider the quality of the senior year program.</p>
    <?php echo end_item_iconItem(); ?>

    <?php echo item_iconItem(
        null,
        'star',
        'icon-on-left'
    ); ?>
    <p>Our typical applicants have an unweighted A- average, are within the top 10%–20% of their class, have been actively involved in extracurricular activities and have shown leadership, and other accomplishments.</p>
    <?php echo end_item_iconItem(); ?>

    <?php echo item_iconItem(
        null,
        'award',
        'icon-on-left'
    ); ?>
    <p>The middle 50% of students admitted in 2019 scored between 1400–1520 on the SAT Evidence-Based Reading and Writing (EBRW) and Math Sections. The ACT middle 50% range was between 32–34. As noted above, we are not requiring SAT/ACT scores at this time.</p>
    <?php echo end_item_iconItem(); ?>
</div>

<h3>Additional Information</h3>

<?php echo accordion('useful-info'); ?>
<?php echo accordion_item('useful-info', 'QuestBridge applicants'); ?>
<p>QuestBridge applicants are given all the same considerations as any first-year applicant to Vassar College. Additional information on QuestBridge at Vassar is available at our <a href="https://www.questbridge.org/vassar-college/faq">QuestBridge FAQ</a>.</p>
<?php echo end_accordion_item(); ?>

<?php echo accordion_item('useful-info', 'Taking a gap year'); ?>
<p>Admitted first-year students may defer entry to Vassar for one year with the permission of the Office of Admission. Students who are taking a gap year must confirm their intent to enroll at Vassar by submitting the <strong>Candidate’s Reply Card and the required enrollment deposit by May 1</strong>, and must complete the Deferral Request Form, available on the Admitted Students website, <strong>no later than May 22</strong>. If deferred status is approved, a formal letter stating the conditions under which the deferral has been granted will be sent to the student. Students who may be offered admission to Vassar from the wait list after May 1 are not eligible to request a deferral of admission.</p>
<?php echo end_accordion_item(); ?>

<?php echo accordion_item('useful-info', 'Undocumented students'); ?>
<p>Vassar College considers applications submitted by undocumented or DACA-mented students for the first-year class with the same consideration given to any other applicants when reviewing their application. Although funding is limited, the College is committed to meeting the full, demonstrated financial need of undocumented or DACA students admitted to Vassar following the same procedures Vassar uses to grant aid to accepted international students.</p>
<?php echo end_accordion_item(); ?>

<?php echo end_accordion(); ?>


<?php echo end_sec_regularContent(); ?>


<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/financial-aid/financial-aid-apply.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/apply/apply-international.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/apply/apply-transfer.php');?>
<?php echo end_sec_relatedTopics(); ?>





<?php echo site_footer(); ?>
