
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
    $admission_img_path.'connect/0214-19-09-bl-green-fest-vassar-2721.jpg',
    null,
    null,
    ['img_alt_text' => '3 smiling students holding potted plants']
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
    <p><em>Dean of Admission and Student Financial Services</em></p>
    <a class="fixemaillink" href="mailto:sonyasmith@vassar.edu">Email: sonyasmith@vassar.edu</a>
</div>

<div class="staff-contact mb-5">
    <h3>David Toomer</h3>
    <p><em>Director of Admission</em></p>
    <p><strong>Regional Responsibilities:</strong> District of Columbia, Maryland</p>
    <a class="fixemaillink" href="mailto:dtoomer@vassar.edu">Email: dtoomer@vassar.edu</a>
</div>


<div class="staff-contact mb-5">
    <h3>Breanna Conwell</h3>
    <p><em>Admission Counselor</em></p>
    <p><strong>Regional Responsibilities:</strong> Alabama, Arkansas, Delaware, Georgia, Kentucky, Louisiana, Maine, Mississippi, New Hampshire, Rhode Island, Tennessee, Texas, Vermont, West Virginia</p>
    <a class="fixemaillink" href="mailto:bconwell@vassar.edu">Email: bconwell@vassar.edu</a>
</div>

<div class="staff-contact mb-5">
    <h3>James Gallagher</h3>
    <p><em>Admission Counselor</em></p>
    <p><strong>Regional Responsibilities:</strong> New York (Brooklyn), Alaska, Florida, Idaho, Iowa, Kansas, Michigan, Missouri, Montana, Nebraska, North Dakota, Ohio, Oklahoma, South Dakota, Wyoming, U.S. Territories of American Samoa, Guam, the Northern Mariana Islands</p>
    <a class="fixemaillink" href="mailto:jgallagher@vassar.edu">Email: jgallagher@vassar.edu</a>
</div>

<div class="staff-contact mb-5">
    <h3>Siena Howenstein</h3>
    <p><em>Admission Counselor</em></p>
    <p><strong>Regional Responsibilities:</strong> New York (Upstate), New Jersey (Northern), Massachusetts (Western)</p>
    <a class="fixemaillink" href="mailto:showenstein@vassar.edu">Email: showenstein@vassar.edu</a>
</div>

<div class="staff-contact mb-5">
    <h3>Kim Lord ’06</h3>
    <p><em>Senior Associate Director of Admission</em></p>
    <p><strong>Regional Responsibilities:</strong> Massachusetts (Eastern)<br/><strong>International Responsibilities:</strong> Europe, India</p>
    <a class="fixemaillink" href="mailto:klord@vassar.edu">Email: klord@vassar.edu</a>
</div>


<div class="staff-contact mb-5">
    <h3>Kamil Lungu</h3>
    <p><em>Admission Counselor</em></p>
    <p><strong>Regional Responsibilities:</strong> New York (Manhattan)<br/><strong>International Responsibilities:</strong> Central Asia, Middle East, Southeast Asia</p>
    <a class="fixemaillink" href="mailto:klungu@vassar.edu">Email: klungu@vassar.edu</a>
</div>

<div class="staff-contact mb-5">
    <h3>Joanne Narrido</h3>
    <p><em>Admission Counselor</em></p>
    <p><strong>Regional Responsibilities:</strong> New York (Central Hudson, Long Island, Rockland, Staten Island, Westchester), Virginia</p>
    <a class="fixemaillink" href="mailto:jnarrido@vassar.edu">Email: jnarrido@vassar.edu</a>
</div>

<div class="staff-contact mb-5">
    <h3>Melanie Poston</h3>
    <p><em>Associate Director of Admission</em></p>
    <p><strong>Regional Responsibilities:</strong> Arizona, Colorado, Connecticut, Nevada, New Mexico, North Carolina, South Carolina, Utah</p>
    <a class="fixemaillink" href="mailto:mposton@vassar.edu">Email: mposton@vassar.edu</a>
</div>

<div class="staff-contact mb-5">
    <h3>Juan Ramirez</h3>
    <p><em>Admission Counselor</em></p>
    <p><strong>Regional Responsibilities:</strong> New York (Bronx, Queens), Illinois, Indiana, Minnesota, Puerto Rico, Wisconsin<br/><strong>International Responsibilities:</strong> Canada, Caribbean, Central America, Mexico, South America</p>
    <a class="fixemaillink" href="mailto:juanramirez@vassar.edu">Email: juanramirez@vassar.edu</a>
</div>

<div class="staff-contact mb-5">
    <h3>Samuel Short ’16</h3>
    <p><em>Admission Counselor</em></p>
    <p><strong>Regional Responsibilities:</strong> New Jersey (Central and Southern), California (Northern), Pennsylvania</p>
    <a class="fixemaillink" href="mailto:samshort@vassar.edu">Email: samshort@vassar.edu</a>
</div>

<div class="staff-contact mb-5">
    <h3>Kathleen Vital-Herne</h3>
    <p><em>Senior Assistant Director of Admission</em></p>
    <p><strong>Regional Responsibilities:</strong> California (Southern)<br/><strong>International Responsibilities:</strong> Africa</p>
    <a class="fixemaillink" href="mailto:kvitalherne@vassar.edu">Email: kvitalherne@vassar.edu</a>
</div>

<div class="staff-contact mb-5">
    <h3>Admission Officer</h3>
    <p><strong>Regional Responsibilities:</strong> Hawai’i, Oregon, Washington<br/><strong>International Responsibilities:</strong> Australia, East and South Asia (minus India), Papua New Guinea, New Zealand</p>
    <a class="fixemaillink" href="mailto:admission@vassar.edu">Email: admission@vassar.edu</a>
</div>
<?php echo end_sec_regularContent(); ?>

<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/connect/connect-students.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/connect/connect-counselors.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/visit/visit.php');?>
<?php echo end_sec_relatedTopics(); ?>

<?php /*  PAGE CONTENT === */ ?>

<?php echo site_footer(); ?>
