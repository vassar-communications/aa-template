<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */


$page_info = '{
  "page_title":"Reunion",
  "page_classes":"",
  "feature_image":"/alums/assets/img/alums-calendar/reunion/Vassar_Reunion_4706.jpg"
}';

/* === */
$page_info = json_decode($page_info, true);
?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation_alums(); ?>

<?php echo page_partialmasthead(
  $page_info['feature_image'],
  ['image_alt_text' => 'Fireworks in the night sky']
); ?>

<?php echo interior_page_nav() ?>

<?php /*  PAGE CONTENT === */ ?>


<?php echo sec_fullBleedImageColumn(
    'Welcome Back',
    $alums_img_path.'alums-calendar/reunion/Reunion_Saturday_190608_CS-V815-310.jpg',
    'image-is-first theme-cream',
    '',
    ['img_alt_text' => 'two people walking and smiling in a large group of people']
); ?>

  <p>Vassar and the Alumnae/i Association of Vassar College (AAVC) are thrilled to welcome you and your classmates back to campus. We are looking forward to seeing alums from the classes ending in 3s and 8s on campus for Reunion, June 2–4, 2023 (the 50th Reunion class arrives on June 1). Registration is now open!</p>
<a href="https://reunionregistration.vassar.edu" class="btn btn-primary arrow mt-5">Register for Reunion</a></br>
<a href="https://reunionregistration.vassar.edu/reunattend.php" class="btn btn-primary arrow mt-5">See Who’s Coming to Reunion</a>

<?php echo end_sec_fullBleedImageColumn(); ?>

<?php echo sec_regularContent(
  null,
  '',
  ''
); ?>

    <p>Reunion registration will close on May 19, 2023. Schedules and additional information for the weekend can be found below. This page continues to be updated periodically. Be sure to check back! If you have any questions, please call <?php echo phone_number('800-443-8196'); ?>, option 5, or <a href="mailto:reunion@vassar.edu">email us regarding Reunion</a>.</p>

  <h3>Future Reunion Dates</h3>

  <p>May 31–June 2, 2024<br>
  June 6–8, 2025</p>



<?php echo end_sec_regularContent(); ?>


<?php echo sec_fullBleedImageColumn(
    'General Reunion<br> Class Schedule',
    $alums_img_path.'alums-calendar/reunion/Reunion_Parade_180609_KR_8754.jpg',
    'theme-burgundy',
    '',
    ['img_alt_text' => 'a large group of people walking up a winding road on Vassar campus']
); ?>
<?php echo cta_link(
    '/alums/calendar/reunion/schedule/',
    'See the Reunion schedule'
); ?>
<?php echo end_sec_fullBleedImageColumn(); ?>

<?php echo sec_fullBleedImageColumn(
    '50th Reunion<br> Class Schedule',
    $alums_img_path.'alums-calendar/reunion/Reunion_1806_CS_073.jpg',
    'image-is-first',
    '',
    ['img_alt_text' => 'Overhead shot of people seated a round table in a large room for an event']
); ?>

<p>Enjoy the campus a day early with programming designed especially for the 50th Reunion class. Check-in will open on Thursday, June 1 at 2:00 p.m.</p>

<?php echo cta_link(
    '50th/',
    'See the 50th Reunion Schedule'
); ?>


<?php echo end_sec_fullBleedImageColumn(); ?>


<?php echo sec_fullBleedImageColumn(
    'Lectures, Panels, and Tours',
    $alums_img_path.'alums-calendar/reunion/52129387193_a6f8dcfc89_k.jpg',
    '',
    '',
    ['img_alt_text' => 'A person wearing a mask speaks in front of a projector screen at the front of a sunlit classroom with a hardwood floor. The classroom is filled with visiting alums.']
); ?>

<p>Explore this year’s lifelong learning opportunities through Reunion’s lectures, panels and tours!</p>

<?php echo cta_link(
    '/alums/calendar/reunion/lectures/',
    'Learn more about Lectures, Panels, and Tours'
); ?>
<?php echo end_sec_fullBleedImageColumn(); ?>





<div id="information-updates"></div>

<?php echo sec_regularContent('Information & Updates','theme-verylightgray','','',); ?>


<?php echo item_iconItem('New This Year!','star',''); ?>
<p>Ever visit campus and wish you had an ID card for access to the College’s library and fitness center?</p>
<p>If you would like to get an Alum ID card during Reunion, please submit the <a href="https://offices.vassar.edu/card/alum-id-card-request/">Alum ID Card Request Form</a> by <strong>May 17, 2023</strong>. The Card Office will make sure everything is ready for you to get your Alum ID card at Reunion. Alum ID cards are only issued in person at Vassar’s Service Desk located in the College Center, North Atrium, as a photo must be taken for the card.  The Service Desk will be open during Reunion on Friday, June 2, from 8:30 a.m.–5 p.m. and Saturday, June 3, from 12 p.m.–5 p.m. For more information, contact the Card Office at <a href="tel:+18454513333">(845) 451-3333</a>.</p>

<?php echo end_item_iconItem(); ?>

<?php echo item_iconItem('Housing','house-chimney',''); ?>
<p>We are excited to welcome alums back to Vassar for in-person reunions and want to ensure that everyone makes informed decisions about where to stay.</p>

<p>We recommend you <strong>register early</strong> for on-campus housing as it is allocated on a first come, first served basis. If you prefer the creature comforts of home, <a href="https://www.vassar.edu/visit/community/lodging">search area hotels</a>. The following area hotels have rooms specifically reserved for Reunion.</p>

<div class="accordion accordion-flush mt-3" id="accordionFlushExample">
    <div class="accordion-item">
        <div class="accordion-header" id="flush-headingOne">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseONe">
                Hotels with Rooms Reserved For Reunion
            </button>
        </div>
        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
                <p><strong>Holiday Inn Express</strong></br>
                    2750 South Rd</br>
                    Poughkeepsie NY 12601</br>
                    (845) 473-1151</br>
                    <a href="https://www.ihg.com/holidayinnexpress/hotels/us/en/poughkeepsie/pouny/hoteldetail?cm_mmc=GoogleMaps-_-EX-_-US-_-POUNY">Book a room at the Holiday Inn Express online with code CVR</a></p>
                    <p><strong>Quality Inn</strong> (walking distance from the college)</br>
                    536 Haight Ave</br>
                    Poughkeepsie NY 12603</br>
                    (845) 454-1010</br>
                    <a href=" https://www.choicehotels.com/reservations/groups/RO40F0">Book a room at the Quality Inn online (group rate already applied)</a></p>
            </div>
        </div>
    </div>
</div>

<div class="accordion accordion-flush mt-3" id="accordionFlushExample2">
    <div class="accordion-item">
        <div class="accordion-header" id="flush-headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                Reunion 2023 Dorm Headquarters
            </button>
        </div>
        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample2">
            <div class="accordion-body">
                <p><strong>1958:</strong> Jewett House<br />
<strong>1963:</strong> Jewett House<br />
<strong>1968:</strong> Jewett House<br />
<strong>1973:</strong> Davison House<br />
<strong>1978:</strong> Josselyn House<br />
<strong>1983:</strong> Josselyn House<br />
<strong>1988:</strong> Strong House<br />
<strong>1993:</strong> Cushing House<br />
<strong>1998:</strong> Cushing House<br />
<strong>2003:</strong> Raymond House<br />
<strong>2008:</strong> Raymond House<br />
<strong>2013:</strong> TownHouses<br />
<strong>2016:</strong> Lathrop House<br />
<strong>2018:</strong> Noyes House</p>
            </div>
        </div>
    </div>
</div>


<div class="accordion accordion-flush mt-3" id="accordionFlushExample3">
    <div class="accordion-item">
        <div class="accordion-header" id="flush-headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                Additional On-Campus Housing Information
            </button>
        </div>
        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample3">
            <div class="accordion-body">
                <p><strong>Residence Hall rooms:</strong></p>
                <ul>
                    <li>Include twin-sized beds about half of which are lofted/raised and cannot be lowered.</li>
                    <li>Include commercial linens (two twin flat sheets, one pillow case, one light twin blanket, one towel, and one washcloth) placed on each bed. If you would like to have an extra blanket or towel, please bring them with you.</li>
                    <li>Does <strong>not</strong> include air conditioning or private bathrooms.</li>
                    <li>Are not guaranteed to be quiet.</li>
                </ul>

                <p>We regret that we are unable to guarantee single room requests. If you are attending Reunion by yourself, we encourage coordinating with friends in advance to ensure your roommate of choice. If you require a single room or a room with a private bathroom, we strongly encourage you to make reservations at one of the Hudson Valley’s area hotels.</p>

                <p>Please Note: Alumnae House is reserved for the 70th and 75th Reunion Classes.</p>

                <p>Also, the College performs routine maintenance (in rotation) and also houses more than 200 students during the summer months. As such, some residence halls will be “offline” every year (and unavailable for lodging or entering).</p>
            </div>
        </div>
    </div>
</div>

<?php echo end_item_iconItem(); ?>

<?php echo item_iconItem('Important to Know','circle-exclamation',''); ?>
<ul>
    <li><a href="https://www.vassar.edu/smokefree/">Vassar is a smoke-free campus</a>.</li>
    <li>All bathrooms are gender-neutral, unless otherwise noted.</li>
    <li>Loop technology for hearing assistance is available in the 1951 Reading Room in Thompson Library and Rockefeller Hall, Auditorium 300.</li>
    <li>No password needed to connect to Vassar Public Wi-Fi.</li>
</ul>
<?php echo end_item_iconItem(); ?>


<?php echo item_iconItem('Health Acknowledgement','shield-virus',''); ?>
<p>At this time, we recommend all Reunion registrants will consider the following upon arrival at Reunion:</p>
<ul>
    <li>My guests and I understand that COVID-19 is an extremely contagious virus and spreads easily through person-to-person contact and we know we are taking risks by attending in-person events.</li>
    <li>My guests and I acknowledge that it is safer to wear a mask around others in close proximity. If my guests or I become symptomatic or test positive at any time during the event, we agree that we will leave campus and follow up with our primary health care providers or seek treatment at a medical facility in the local community.</li>
    <li>My guests and I will not attend if we are not feeling well.</li>
</ul>
<?php echo end_item_iconItem(); ?>

<?php echo item_iconItem('In Case of Emergency','kit-medical',''); ?>
<ul>
    <li>For non-medical emergencies, call Vassar Security: <a href="tel:+18454377333">(845) 437-7333</a>.</li>
    <li>Medical emergencies, dial 911.</li>
    <li>Poughkeepsie Hospitals: <a href="https://www.nuvancehealth.org/locations/vassar-brothers-medical-center">Vassar Brothers Medical Center</a> and <a href="https://www.midhudsonregional.org/">MidHudson Regional Hospital</a>.</li>
</ul>
<?php echo end_item_iconItem(); ?>


<?php echo end_sec_regularContent(); ?>

<div id="campus-facilities"></div>

<?php echo sec_hasColumns(
    'Campus Facilities Hours and Services',
    '2',
    null,
    'mw-inner-1',
    'gap-5'
); ?>

  <?php echo item_col(); ?>

<h3>Athletic and Fitness Center</h3>
<ul>
  <li>Friday: 7 a.m.–8 p.m.</li>
  <li>Saturday:	10 a.m.–6 p.m.</li>
  <li>Sunday: 	10 a.m.–6 p.m.</li>
</ul>
  <p><em>We intend to have the pool open, pending lifeguard availability. Please check back for more information.</em></p>

  <h3>Thompson Memorial Library including the Art Library</h3>
  <ul>
    <li>Friday: 8:30 a.m.–4:30 p.m.</li>
    <li>Saturday:	8:30 a.m.–5 p.m.  	</li>
    <li>Sunday: 	8:30 a.m.–12 p.m.  </li>
  </ul>

  <h3>Music Library</h3>
  <ul>
    <li>Friday: 1–4 p.m.</li>
    <li>Saturday:	10 a.m.–4 p.m.</li>
  </ul>

  <h3>Frances Lehman Loeb Art Center</h3>
  <ul>
    <li>Friday:		10 a.m.–7 p.m.	</li>
    <li>Saturday:	9 a.m.–5 p.m.	</li>
    <li>Sunday: 	9 a.m.–5 p.m.	</li>
  </ul>

  <?php echo end_item_col(); ?>

  <?php echo item_col(); ?>

    <h3>A. Scott Warthin Museum of Geology & Natural History, Ely Hall</h3>
    <ul>
      <li>Friday: 		8:30 a.m.–5 p.m.	</li>
      <li>Saturday:	2–4 p.m.	</li>
    </ul>

    <h3>Vassar College Store, Juliet, Raymond Avenue</h3>
    <ul>
      <li>Thursday: 10 a.m.–6 p.m.</li>
      <li>Friday:		10 a.m.–6 p.m</li>
      <li>Saturday:	11 a.m.–6 p.m.<br>
        <em>Author Meet and Greet, 2:30–4:30 p.m.</em>
      </li>
      <li>Sunday: 10 a.m.–2 p.m. <br>
        <em>Ring sales will be available from 10 a.m.–1 p.m.</em>
      </li>
    </ul>


    <h3>Shabbat Services at The Bayit (51 Collegeview Avenue, North Gate)</h3>

    <ul>
      <li>Friday:		5:30–6:45 p.m.</li>
    </ul>

  <?php echo end_item_col(); ?>

<?php echo end_sec_hasColumns(); ?>




<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/give/give.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/give/give-volunteer.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/calendar/calendar.php');?>
<?php echo end_sec_relatedTopics(); ?>


<?php echo site_footeralums(); ?>
