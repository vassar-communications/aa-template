
<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
 ?>
<?php

/* PAGE INFO === */

$page_info = '{"page_title":"Connect","feature_image":"/admission/assets/images/connect/0148-17-09-kr-alana-vassar-1599.jpg"}';
/* === */
$page_info = json_decode($page_info, true);

?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation(); ?>



<?php echo sec_fixedCenteredTitle_masthead(
    '<b class="slide-from-left">Connect</b>',
    null,
    'theme-verylightgray reveal-image',
    'mw-4',
    ['bg-image-url' => $page_info['feature_image'],
        'bg-image-alt' => 'two students making peace signs',
        'css' => '
      --title-container-bg-beforeContent: rgba(0,0,0,0.4);
      --section-bg-image-opacity: 0;
      --bs-gap: 1rem;
      ']
); ?>

<?php echo end_sec_fixedCenteredTitle_masthead(); ?>

<?php // echo page_partialmasthead($page_info['feature_image']); ?>

<?php echo interior_page_nav() ?>


<?php echo masthead_interiorPage(
    'Our Team is Here to Help You.',
    '',
    $admission_img_path.'/connect/adm-open-house-0055_15_04_KR_0014-crop.jpg',
    null,
    null,
    ['img_alt_text' => 'two people seated at a table eating and listening while a third seated person speaks']
);
?>


<?php echo sec_regularContent(
    'Contact Information',
    'theme-cream',
    null,
); ?>
<p>We are happy to help with questions, but please know that we do not track demonstrated interest as part of the application process.</p>


    <div class="address-card">
<p>
    <strong>Mailing address:</strong><br>
    Office of Admission<br>
    Vassar College, Box 10<br>
    124 Raymond Ave<br>
    Poughkeepsie, NY 12604-0010<br>
    USA
</p>
<p>
    Telephone: <a href="tel:1-845-437-7300">(845) 437-7300</a> or <a href="tel:1-800-827-7270">(800) 827-7270</a><br>
    Fax: <a href="fax:1-845-437-7063">(845) 437-7063</a><br>
    Email: <a href="mailto:admission@vassar.edu">admission@vassar.edu</a>
</p>
    </div>




<?php echo end_sec_regularContent(); ?>




<?php echo sec_regularContent(
    'Staff Directory',
    null,
    null,
); ?>
<p class="mb-5">Browse our staff directory below to find the admission counselor for your area.</p>
<div class="staff-contact mb-5">
    <h3>Sonya K. Smith</h3>
    <p><em>Vice President and Dean of Admission and Student Financial Services</em></p>
    <a class="fixemaillink" href="mailto:sonyasmith@vassar.edu">Email: sonyasmith@vassar.edu</a>
</div>

<div class="staff-contact mb-5">
    <h3>David Toomer</h3>
    <p><em>Director of Admission</em></p>
    <p><strong>Regional Responsibilities:</strong> District of Columbia</p>
    <a class="fixemaillink" href="mailto:dtoomer@vassar.edu">Email: dtoomer@vassar.edu</a>
</div>

<div class="staff-contact mb-5">
    <h3>Justin Ao</h3>
    <p><em>Admission Counselor</em></p>
    <p><strong>Regional Responsibilities:</strong> Alaska, Idaho, Iowa, Kansas, Missouri, Montana, Nebraska, North Dakota, Oklahoma, Oregon, Pennsylvania, South Dakota, Washington, Wyoming, U.S. Territories of American Samoa, Guam, the Northern Mariana Islands<br/><strong>International Responsibilities:</strong> Oceania</p>
    <a class="fixemaillink" href="mailto:jao@vassar.edu">Email: jao@vassar.edu</a>
</div>

<div class="staff-contact mb-5">
    <h3>Breanna Conwell</h3>
    <p><em>Admission Counselor</em></p>
    <p><strong>Regional Responsibilities:</strong> Alabama, Arkansas, Georgia, Kentucky, Louisiana, Mississippi, North Carolina, South Carolina, Tennessee, Virginia, West Virginia<br/><strong>International Responsibilities:</strong> East Asia, Canada</p>
    <a class="fixemaillink" href="mailto:bconwell@vassar.edu">Email: bconwell@vassar.edu</a>
</div>

<div class="staff-contact mb-5">
    <h3>Kyle Doyle</h3>
    <p><em>Senior Assistant Director of Admission</em></p>
    <p><strong>Regional Responsibilities:</strong> Florida<br/><strong>International Responsibilities:</strong> Central Asia, South Asia</p>
    <a class="fixemaillink" href="mailto:kdoyle@vassar.edu">Email: kdoyle@vassar.edu</a>
</div>

<div class="staff-contact mb-5">
    <h3>James Gallagher</h3>
    <p><em>Admission Counselor</em></p>
    <p><strong>Regional Responsibilities:</strong> Massachusetts (Eastern), New York (Brooklyn)<br/><strong>International Responsibilities:</strong> Middle East, Southeast Asia</p>
    <a class="fixemaillink" href="mailto:jgallagher@vassar.edu">Email: jgallagher@vassar.edu</a>
</div>

<div class="staff-contact mb-5">
    <h3>Siena Howenstein</h3>
    <p><em>Admission Counselor</em></p>
    <p><strong>Regional Responsibilities:</strong> Delaware, Maryland, Massachusetts (Western), New Jersey (Northern), New York (Upstate)</p>
    <a class="fixemaillink" href="mailto:showenstein@vassar.edu">Email: showenstein@vassar.edu</a>
</div>

<div class="staff-contact mb-5">
    <h3>Kim Lord ’06</h3>
    <p><em>Senior Associate Director of Admission</em></p>
    <p><strong>Regional Responsibilities:</strong> New York (Manhattan)<br/><strong>International Responsibilities:</strong> Europe</p>
    <a class="fixemaillink" href="mailto:klord@vassar.edu">Email: klord@vassar.edu</a>
</div>

<div class="staff-contact mb-5">
    <h3>Colleen Mallet</h3>
    <p><em>Director of Veteran Students Outreach and Support</em></p>
    <p><strong>Regional Responsibilities:</strong> U.S. Veterans</p>
    <a class="fixemaillink" href="mailto:comallet@vassar.edu">Email: comallet@vassar.edu</a>
</div>

<div class="staff-contact mb-5">
    <h3>Joanne Narrido</h3>
    <p><em>Admission Counselor</em></p>
    <p><strong>Regional Responsibilities:</strong> Indiana, Michigan, Minnesota, New York (Central Hudson, Long Island, Rockland County, Staten Island, Westchester County), Ohio, Wisconsin</p>
    <a class="fixemaillink" href="mailto:jnarrido@vassar.edu">Email: jnarrido@vassar.edu</a>
</div>

<div class="staff-contact mb-5">
    <h3>Melanie Poston</h3>
    <p><em>Associate Director of Admission</em></p>
    <p><strong>Regional Responsibilities:</strong> Arizona, Colorado, Connecticut, Hawai’i, Illinois, Nevada, New Mexico, Utah</p>
    <a class="fixemaillink" href="mailto:mposton@vassar.edu">Email: mposton@vassar.edu</a>
</div>

<div class="staff-contact mb-5">
    <h3>Juan Ramirez</h3>
    <p><em>Admission Counselor</em></p>
    <p><strong>Regional Responsibilities:</strong> New York (Bronx, Queens), Puerto Rico, Virgin Islands<br/><strong>International Responsibilities:</strong> Africa, Caribbean, Central America, Mexico, South America</p>
    <a class="fixemaillink" href="mailto:juanramirez@vassar.edu">Email: juanramirez@vassar.edu</a>
</div>

<div class="staff-contact mb-5">
    <h3>Samuel Short ’16</h3>
    <p><em>Admission Counselor</em></p>
    <p><strong>Regional Responsibilities:</strong> California (Northern), Maine, New Hampshire, New Jersey (Central and Southern), Rhode Island, Vermont</p>
    <a class="fixemaillink" href="mailto:samshort@vassar.edu">Email: samshort@vassar.edu</a>
</div>

<div class="staff-contact mb-5">
    <h3>Kathleen Vital-Herne</h3>
    <p><em>Senior Assistant Director of Admission</em></p>
    <p><strong>Regional Responsibilities:</strong> California (Southern), Texas</p>
    <a class="fixemaillink" href="mailto:kvitalherne@vassar.edu">Email: kvitalherne@vassar.edu</a>
</div>

<?php echo end_sec_regularContent(); ?>

<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/connect/connect-students.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/connect/connect-counselors.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/visit/visit.php');?>
<?php echo end_sec_relatedTopics(); ?>

<?php /*  PAGE CONTENT === */ ?>

<?php echo site_footer(); ?>
