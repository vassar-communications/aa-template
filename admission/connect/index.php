
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
    'Our Team is Here to Help You',
    '',
    $admission_img_path.'/connect/kautz-house-2105-tsa-V866-040-crop.jpg',
    null,
    null,
    ['img_alt_text' => 'Brightly sunlit sidewalk with colorful planted and hanging flowers leading to the entrance of Kautz House on Vassar Campus.']
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
    'Admission Officers',
    null,
    null,
); ?>
<p class="mb-5">Browse our list of Admission Officers to find the counselor for your area.</p>
<div class="staff-contact mb-5">
    <h3><a class="fixemaillink" href="mailto:sonyasmith@vassar.edu">Sonya K. Smith</a></h3>
    <p><em>Vice President and Dean of Admission and Student Financial Services</em></p>
    <!-- <a class="fixemaillink" href="mailto:sonyasmith@vassar.edu">Email: sonyasmith@vassar.edu</a> -->
</div>

<div class="staff-contact mb-5">
<h3><a class="fixemaillink" href="mailto:dtoomer@vassar.edu">David Toomer</a></h3>
    <p><em>Director of Admission</em></p>
    <p><strong>Regional Responsibilities:</strong> District of Columbia</p>
    <!-- <a class="fixemaillink" href="mailto:dtoomer@vassar.edu">Email: dtoomer@vassar.edu</a> -->
</div>

<div class="staff-contact mb-5">
    <h3><a class="fixemaillink" href="mailto:jao@vassar.edu">Justin Ao</a></h3>
    <p><em>Admission Counselor</em></p>
    <p><strong>Regional Responsibilities:</strong> Alaska, Idaho, Iowa, Kansas, Missouri, Montana, Nebraska, New York (Rockland County, Westchester County), North Dakota, Oklahoma, Oregon, Pennsylvania, South Dakota, Texas, Washington, Wyoming, U.S. Territories of American Samoa, Guam, the Northern Mariana Islands<br/><strong>International Responsibilities:</strong> Oceania</p>
    <!-- <a class="fixemaillink" href="mailto:jao@vassar.edu">Email: jao@vassar.edu</a> -->
</div>


<div class="staff-contact mb-5">
    <h3><a class="fixemaillink" href="mailto:jao@vassar.edu">Justin Ao</a></h3>
    <p><em>Admission Counselor</em></p>
    <p><strong>Regional Responsibilities:</strong> Alaska, Idaho, Iowa, Kansas, Missouri, Montana, Nebraska, New York (Rockland County, Westchester County), North Dakota, Oklahoma, Oregon, Pennsylvania, South Dakota, Texas, Washington, Wyoming, U.S. Territories of American Samoa, Guam, the Northern Mariana Islands<br/><strong>International Responsibilities:</strong> Oceania</p>
    <!-- <a class="fixemaillink" href="mailto:jao@vassar.edu">Email: jao@vassar.edu</a> -->
</div>

<div class="staff-contact mb-5">
    <h3><a class="fixemaillink" href="mailto:rcarman@vassar.edu">Roshen Carman</a></h3>
    <p><em>Admission Counselor</em></p>
    <p><strong>Regional Responsibilities:</strong> Indiana, Michigan, Minnesota, New York (Long Island, Staten Island), Ohio, Wisconsin</p>
    <!-- <a class="fixemaillink" href="mailto:bconwell@vassar.edu">Email: bconwell@vassar.edu</a> -->
</div>


<div class="staff-contact mb-5">
    <h3><a class="fixemaillink" href="mailto:admissions@vassar.edu">Breanna Conwell</a></h3>
    <p><em>Admission Counselor</em></p>
    <p><strong>Regional Responsibilities:</strong> Alabama, Arkansas, Georgia, Kentucky, Louisiana, Mississippi, North Carolina, South Carolina, Tennessee, Virginia, West Virginia<br><strong>International Responsibilities:</strong> East Asia, Canada</p>
    <!-- <a class="fixemaillink" href="mailto:bconwell@vassar.edu">Email: bconwell@vassar.edu</a> -->
</div>

<div class="staff-contact mb-5">
    <h3><a class="fixemaillink" href="mailto:kdoyle@vassar.edu">Kyle Doyle</a></h3>
    <p><em>Senior Assistant Director of Admission</em></p>
    <p><strong>Regional Responsibilities:</strong> Florida<br/><strong>International Responsibilities:</strong> Central Asia, South Asia</p>
    <!-- <a class="fixemaillink" href="mailto:kdoyle@vassar.edu">Email: kdoyle@vassar.edu</a> -->
</div>

<div class="staff-contact mb-5">
    <h3><a class="fixemaillink" href="mailto:jgallagher@vassar.edu">James Gallagher</a></h3>
    <p><em>Admission Counselor</em></p>
    <p><strong>Regional Responsibilities:</strong> Massachusetts (Eastern), New York (Brooklyn)<br/><strong>International Responsibilities:</strong> Middle East, Southeast Asia</p>
    <!-- <a class="fixemaillink" href="mailto:jgallagher@vassar.edu">Email: jgallagher@vassar.edu</a> -->
</div>

<div class="staff-contact mb-5">
    <h3><a class="fixemaillink" href="mailto:showenstein@vassar.edu">Siena Howenstein</a></h3>
    <p><em>Admission Counselor</em></p>
    <p><strong>Regional Responsibilities:</strong> California (Southern), Delaware, Maryland, Massachusetts (Western), New Jersey (Northern), New York (Upstate)</p>
    <!-- <a class="fixemaillink" href="mailto:showenstein@vassar.edu">Email: showenstein@vassar.edu</a> -->
</div>

<!-- <div class="staff-contact mb-5">
    <h3>Kim Lord ’06</h3>
    <p><em>Senior Associate Director of Admission</em></p>
    <p><strong>Regional Responsibilities:</strong> New York (Manhattan)<br/><strong>International Responsibilities:</strong> Europe</p>
    <a class="fixemaillink" href="mailto:klord@vassar.edu">Email: klord@vassar.edu</a>
</div> -->

<div class="staff-contact mb-5">
    <h3><a class="fixemaillink" href="mailto:comallet@vassar.edu">Colleen Mallet</a></h3>
    <p><em>Director of Veteran Students Outreach and Support</em></p>
    <p><strong>Regional Responsibilities:</strong> U.S. Veterans</p>
    <!-- <a class="fixemaillink" href="mailto:comallet@vassar.edu">Email: comallet@vassar.edu</a> -->
</div>

<div class="staff-contact mb-5">
    <h3><a class="fixemaillink" href="mailto:jmandart@vassar.edu">Jaclyn Mandart</a></h3>
    <p><em>Associate Director of Admission</em></p>
    <p><strong>Regional Responsibilities:</strong> New York (Manhattan)</p>
    <p><strong>International Responsibilities:</strong> Europe</p>
</div>

<div class="staff-contact mb-5">
    <h3><a class="fixemaillink" href="mailto:mposton@vassar.edu">Melanie Poston</a></h3>
    <p><em>Associate Director of Admission</em></p>
    <p><strong>Regional Responsibilities:</strong> Arizona, Colorado, Connecticut, Hawai’i, Illinois, Nevada, New Mexico, New York (Central Hudson Valley), Utah</p>
    <!-- <a class="fixemaillink" href="mailto:mposton@vassar.edu">Email: mposton@vassar.edu</a> -->
</div>

<div class="staff-contact mb-5">
    <h3><a class="fixemaillink" href="mailto:juanramirez@vassar.edu">Juan Ramirez</a></h3>
    <p><em>Admission Counselor</em></p>
    <p><strong>Regional Responsibilities:</strong> New York (Bronx, Queens), Puerto Rico, Virgin Islands<br/><strong>International Responsibilities:</strong> Africa, Caribbean, Central America, Mexico, South America</p>
    <!-- <a class="fixemaillink" href="mailto:juanramirez@vassar.edu">Email: juanramirez@vassar.edu</a> -->
</div>

<div class="staff-contact mb-5">
    <h3><a class="fixemaillink" href="mailto:samshort@vassar.edu">Samuel Short ’16</a></h3>
    <p><em>Admission Counselor</em></p>
    <p><strong>Regional Responsibilities:</strong> California (Northern), Maine, New Hampshire, New Jersey (Central and Southern), Rhode Island, Vermont</p>
    <!-- <a class="fixemaillink" href="mailto:samshort@vassar.edu">Email: samshort@vassar.edu</a> -->
</div>

<!-- <div class="staff-contact mb-5">
    <h3>Kathleen Vital-Herne</h3>
    <p><em>Senior Assistant Director of Admission</em></p>
    <p><strong>Regional Responsibilities:</strong> California (Southern), Texas</p>
    <a class="fixemaillink" href="mailto:kvitalherne@vassar.edu">Email: kvitalherne@vassar.edu</a>
</div> -->

<?php echo end_sec_regularContent(); ?>

<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/connect/connect-students.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/connect/connect-counselors.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/visit/visit.php');?>
<?php echo end_sec_relatedTopics(); ?>

<?php /*  PAGE CONTENT === */ ?>

<?php echo site_footer(); ?>
