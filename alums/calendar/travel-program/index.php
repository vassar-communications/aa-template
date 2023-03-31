<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */

$page_info = '{
  "page_title":"Travel Program",
  "page_classes":"",
  "feature_image":"/alums/assets/img/alums-calendar/travel-program/Canadian_Rockies_2014.jpg"
}';

/* === */
$page_info = json_decode($page_info, true);


?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation_alums(); ?>

<?php echo page_partialmasthead($page_info['feature_image'],['image_alt_text' => 'Two backpackers walking on a gravel road along a lake in the Canadian Rockies']); ?>


<?php echo interior_page_nav() ?>

<?php /*  PAGE CONTENT === */ ?>


<?php echo sec_fullBleedImageColumn(
    'Updates to the Vassar Travel Program',
    $alums_img_path.'alums-calendar/travel-program/Amazon_River_Cruise_Mach_Picchu_2017.jpg',
    'image-is-first theme-cream',
    '',
    ['img_alt_text' => 'Alums group photo in front of a site at Machu Picchu']
); ?>
<p>As we make plans for future Vassar Travel Programs, we look forward to hearing from you regarding destinations and trip themes you’d like to explore and faculty members with whom you’d like to travel. Please contact <a href="mailto:suquade@vassar.edu">Susan Quade</a>, Senior Associate Director of Special Events and Programs and the Vassar Travel Program</a>. </p>

<?php echo end_sec_fullBleedImageColumn(); ?>






<?php echo sec_regularContent('Upcoming Trip','','text-center');?>

<p><strong>OUR TOUR IS NOW SOLD OUT. To be placed on a waitlist, please call The Grand Tour at <?php echo phone_number('800-727-2995'); ?>.</strong></p>

<p class="intro-text">Imperial Treasures:<br />Art and Music in Dresden and Prague</p>

<p><strong>June 8–18, 2023<strong></p>

<p><strong>Vassar Hosts:  Kathryn Libin, Professor of Music<br />
T. Barton Thurber, The Anne Hendricks Bass Director of the Frances Lehman Loeb Art Center and Lecturer in Art</strong>
</p>


<?php echo end_sec_regularContent();?>

<?php echo sec_fullBleedImageColumn(
    null,
    $alums_img_path.'alums-calendar/travel-program/Dresden-image2-web.jpg',
    '',
    '',
    ['img_alt_text' => 'Dresden in the evening along the water. Photo by Oliver Guhr.']
); ?>

<p>This small tour, limited to 20 people, will study the art and music of two extraordinary European cities with two of Vassar’s finest scholars. Both Bart and Kathryn have studied and lived in Europe for many years and it is through their scholarship and expertise that we are able to offer this personal exploration of both cities.</p>

<!--
<ul>
    <li>Uniquely created seven-night cruise itinerary</li>
    <li>Visit up to eight UNESCO World Heritage sites showcasing the culture and architecture of Ancient Greece.</li>
    <li>Call on islands steeped in myth and history—Delos, Mykonos, Pátmos, Santorini, Rhodes and the Peloponnese Peninsula</li>
    <li>Walk through the fabled Lion Gate of the legendary city of Mycenae.</li>
    <li>Explore the monumental ruins of the Sanctuary of Asklepios in historic Epidaurus.</li>
    <li>Enjoy guided tours, plus free time to explore on your own.</li>
    <li>Athens Pre-Program Option and Delphi and Thebes Post-Program Option.</li>
</ul>
<p>Your host, Barbara Olsen, is a Classics scholar. She specializes in Greek history and archaeology, especially in the study of women in the ancient world.</p>
-->


<?php echo cta_link(
    'https://www.vassar.edu/sites/default/files/2023-03/VASSAR-Dresden-Prague-2023-Brochure.pdf',
    'Download Brochure',
    null,
    [
      'file_type' => 'pdf',
      'file_size' => '1.6 MB'
    ]
); ?>

<?php echo cta_link(
    'https://www.vassar.edu/sites/default/files/2023-03/VASSAR-Dresden-Registration-Form.pdf',
    'Download Registration Form',
    null,
    [
      'file_type' => 'pdf',
      'file_size' => '106 KB'
    ]
); ?>

<p>&nbsp;</p>
<p><em>Photo by Oliver Guhr</em></p>

<?php echo end_sec_fullBleedImageColumn(); ?>


<?php echo sec_regularContent('Travel Insurance','theme-extralightgray','');?>
<p>The Vassar Travel Program is now offering quality travel insurance to all our travelers. After much research we selected Meyer and Associates. Meyer and Associates have been in the insurance business for more than 40 years, and they come highly recommended by our peer institutions.</p>

<p>Of course, the choice of whether to purchase insurance is yours, but the Vassar Travel Program wants to make sure each Vassar traveler is offered quality insurance. We believe it is very important to protect your travel investment. Meyer and Associates offers a wide range of insurance options, but we strongly urge travelers to purchase the package that offers trip cancellation coverage at the minimum.</p>

<p><strong>For detailed information and to purchase travel insurance, contact <a href="https://meyerandassoc.com/">Meyer and Associates</a> or call <?php echo phone_number('800-635-7801'); ?>.</strong></p>

<?php echo end_sec_regularContent();?>


<?php /*

<!-- Commenting this out, as the copy is a duplicate of the intro section - Chris -->

<?php echo sec_regularContent('We’d like to hear from you!','theme-charcoal bg-dark  presentation quad-pattern has-bg','py-3 d-flex justify-content-around text-center'); ?>

<p>As we make our plans, we look forward to hearing from you regarding destinations and trip themes you’d like to explore and faculty members you’d like to travel with. Please contact Susan Quade, Senior Associate Director of Regional and International Programs and the Vassar Travel Program, via email at <a href="mailto:suquade@vassar.edu">suquade@vassar.edu</a>.</p>
<?php echo end_sec_regularContent(); ?>

*/ ?>



<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/calendar/calendar-on-demand.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/calendar/calendar.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/community/community.php');?>
<?php echo end_sec_relatedTopics(); ?>


<?php echo site_footeralums(); ?>
