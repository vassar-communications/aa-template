<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */


$page_info = '{
  "page_title":"Reunion",
  "page_classes":"",
  "feature_image":"/alums/assets/img/alums-calendar/reunion/Reunion-52958347891_0100510494_k.jpg"
}';

/* === */
$page_info = json_decode($page_info, true);
?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation_alums(); ?>

<?php echo page_partialmasthead(
  $page_info['feature_image'],
  ['image_alt_text' => 'The Main Gate entrance to Vassar College, a large brick building with a tower over an archway wide enough for a vehicle, surrounded by greenery, in the late afternoon sunlight.']
); ?>

<?php echo interior_page_nav() ?>

<?php /*  PAGE CONTENT === */ ?>


<?php echo sec_fullBleedImageColumn(
    'Welcome Back',
    $alums_img_path.'alums-calendar/reunion/Reunion-52960367243_97df9164f3_k.jpg',
    'image-is-first theme-cream',
    '',
    ['img_alt_text' => 'A large group of people walking along a campus road, with some banners displaying class years.']
); ?>

  <p>Reunion is nearly here! Vassar and the Alumnae/i Association of Vassar College (AAVC) are thrilled to welcome you and your classmates back to campus.</p>
<p>Late registration is now closed.</p>
<p>The campus looks beautiful, and we are working hard to prepare for everyone’s arrival. See you soon!</p>
   <a href="https://reunionregistration.vassar.edu/reunattend.php" class="btn btn-primary arrow mt-5">See Who’s Coming to Reunion</a>
 
  
<?php echo end_sec_fullBleedImageColumn(); ?>


<?php echo sec_regularContent(
  '',
  '',
  ''
); ?>

    <p>Reunion registration is now closed. If you have any questions or need assistance, please call <?php echo phone_number('800-443-8196'); ?>, option 5, or <a href="mailto:reunion@vassar.edu">email us regarding Reunion</a>.</p>

  <h3>Future Reunion Dates</h3>

  <p>June 6–8, 2025<br>
  June 5–7, 2026</p>

  <h3>Past Reunions</h3>

    <ul class="linked-list mt-4">
        <li><a href="https://www.flickr.com/photos/vassarcollegemedia/sets/72177720308893162/">View photos from Reunion 2023</a></li>
        <li><a href="https://www.flickr.com/photos/vassarcollegemedia/collections/72157683898719825/">View photos from in-person Reunions held since 2012</a></li>
    </ul>  

<!--
    <h3>Lost and Found</h3>

    <p>Leave something behind? Please call <?php echo phone_number('800-443-8196'); ?>, option 5, or <a href="mailto:reunion@vassar.edu">email us regarding Reunion</a>.</p>
    -->
    

<?php echo end_sec_regularContent(); ?>


<?php echo sec_fullBleedImageColumn(
    'General Reunion<br> Class Schedule',
    $alums_img_path.'alums-calendar/reunion/Reunion-General-52960456425_6f999747a0_k.jpg',
    'theme-burgundy',
    '',
    ['img_alt_text' => 'A large group of people sitting at round tables, coversing with one and other, under a huge white tent.']
); ?>
<?php echo cta_link(
    '/alums/calendar/reunion/schedule/',
    'See the Reunion Schedule'
); ?>
<?php echo end_sec_fullBleedImageColumn(); ?>

<?php echo sec_fullBleedImageColumn(
    '50th Reunion<br> Class Schedule',
    $alums_img_path.'alums-calendar/reunion/Reunion-50th-1974-48139007901_53fb3fba6b_k.jpg',
    'image-is-first',
    '',
    ['img_alt_text' => 'People walking in a group, with some people holding a banner reading The Legendary Class of 1974 Vassar College.']
); ?>

<p>Enjoy the campus a day early with programming designed especially for the 50th Reunion class. Check-in will open on Thursday, May 30 at 4:00 p.m.</p>

<?php echo cta_link(
    '50th/',
    'See the 50th Reunion Schedule'
); ?>
<?php echo end_sec_fullBleedImageColumn(); ?>


<?php echo sec_fullBleedImageColumn(
    'College-Sponsored Lectures and Tours',
    $alums_img_path.'alums-calendar/reunion/52129387193_a6f8dcfc89_k.jpg',
    '',
    '',
    ['img_alt_text' => 'A person wearing a mask, a purple shirt and brown pants, speaks in front of a projector screen at the front of a sunlit classroom with a hardwood floor. The classroom is filled with people of various ages sitting at individual desks.']
); ?>

<p>Explore this year’s lifelong learning opportunities through college-sponsored lectures and tours at Reunion!</p>

<?php echo cta_link(
    '/alums/calendar/reunion/lectures/',
    'Learn more about College-Sponsored Lectures and Tours'
); ?>
<?php echo end_sec_fullBleedImageColumn(); ?>


<div id="information-updates"></div>

<?php echo sec_regularContent('Information & Updates','theme-verylightgray','','',); ?>


<?php echo item_iconItem('New This Year!','star',''); ?>
<h4>Vassar Mobile App for Reunion</h4>
<p>Did you know that Vassar has a mobile app? It now has a “Reunion” persona to access Reunion schedules and notifications. Get the app and choose “Reunion” from the initial “Choose Your Experience” screen to get started:</p>
<ul>
    <li><a href="https://go.vassar.edu/vassarmobile-iOS">Download for iOS</a></li>
    <li><a href="https://go.vassar.edu/vassarmobile-google">Download for Android</a></li>
</ul>
<p>Already have the app and use the “Alum” persona? Tap on the person icon in the upper right corner of the app, then tap on “My Role” to switch to the Reunion persona for the weekend.</p>
<h4>Alum ID Card</h4>
<p>If you would like to get an Alum ID card during Reunion, please submit the <a href="https://offices.vassar.edu/card/alum-id-card-request/">Alum ID Card Request Form</a> by <strong>May 17, 2024</strong>. The Card Office will make sure everything is ready for you to get your Alum ID card at Reunion. Alum ID cards are only issued in person at Vassar’s Service Desk located in the College Center, North Atrium, as a photo must be taken for the card. The Service Desk will be open during Reunion on Friday, May 31, from 8:30 a.m. to 5:00&nbsp;p.m. and Saturday, June 1, from noon to 5:00 p.m. For more information, contact the Card Office at <a href="tel:+18454513333">(845) 451-3333</a>.</p>

<?php echo end_item_iconItem(); ?>


<?php echo item_iconItem('In Case of Emergency','triangle-exclamation',''); ?>


<?php echo info_card(
  '',
  'mt-4 '); ?>

  <p>In the event of a severe weather emergency or an active threat of violence on campus, the College could send out a Rave alert to notify the campus community of such a threat. To receive emergency Rave text alerts during Reunion weekend, text <strong>VCEVENT</strong> to <strong>266787</strong>.</p>

<style>.alert-header { display: none; }</style>

<?php echo end_info_card(); ?>


<p><strong>The safety of our guests, faculty, students and staff is our highest priority. In the event of an emergency, please:</strong></p>
<ul>
    <li>remain calm,</li>
    <li>listen for announcements,</li>
    <li>evacuate to a safe location, if necessary.</li>
</ul>

<p><strong>Emergency numbers:</strong></p>
<ul>
    <li>For non-medical emergencies, call Vassar Security: <a href="tel:+18454377333">(845) 437-7333</a></li>
    <li>Medical emergencies/fire/police: <a href="tel:1-911">911</a></li>
    <li>Police: <a href="tel:+18454853666">(845) 485-3666</a></li>
    <li>Sheriff: <a href="tel:+18454863800">(845) 486-3800</a></li>
    <li>State Police: <a href="tel:+18456777300">(845) 677-7300</a></li>
</ul>
<p><strong>Poughkeepsie Hospitals:</strong></p>
<ul>
     <li><a href="https://www.nuvancehealth.org/locations/vassar-brothers-medical-center">Vassar Brothers Medical Center</a></li>
     <li><a href="https://www.midhudsonregional.org/">MidHudson Regional Hospital</a></li>
</ul>
<p><strong>Weather-related emergencies:</strong></p>
<ul>
    <li>In the event of lightning or tornado watches/warnings, outdoor events will be moved indoors. Follow the instructions of event staff.</li>
    <li>If you are outdoors, move indoors. Do not seek shelter under a tent or tree in the event of lightning or tornado watches/warnings.</li>
</ul>
<p><a href="https://offices.vassar.edu/campus-safety/procedures/">Read Vassar’s complete emergency procedures</a>.</p>
<?php echo end_item_iconItem(); ?>

<div id="housing"></div>

<?php echo item_iconItem('Housing','house-chimney',''); ?>
<p>We are excited to welcome alums back to Vassar for in-person reunions and want to ensure that everyone makes informed decisions about where to stay.</p>

<p>We recommend you <strong>register early</strong> for on-campus housing as it is allocated on a first-come, first-served basis. If you prefer the creature comforts of home, <a href="https://www.vassar.edu/visit/community/lodging">search area hotels</a>. The following area hotels have rooms specifically reserved for Reunion.</p>

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
                    Refer to Vassar Reunion and booking code “WEE” when calling to make the reservation.</p>
                    <p><strong>Quality Inn</strong> (walking distance from the college)</br>
                    536 Haight Ave</br>
                    Poughkeepsie NY 12603</br>
                    (845) 454-1010</br>
                    <a href="https://www.choicehotels.com/reservations/groups/ZD39L5">Book a room at the Quality Inn online (group rate already applied)</a></p>
                    <p><strong>Homewood Suites Poughkeepsie</strong></br>
                    900 Thomas Watson Drive</br>
                    Poughkeepsie NY 12601</br>
                    (845) 462-0030</br>
                    <a href="https://links.h6.hilton.com/f/a/Z7g2dJWPznxyhC09q8VFrg~~/AAQRxQA~/RgRm5fngP0RRaHR0cHM6Ly93d3cubXktZXZlbnQuaGlsdG9uLmNvbS9wb3Vwbmh3LXZhcy03YzA5NTUwMC00MTM2LTQ2OWEtODZlMC00YjhjMTU1Mzc0Y2MvVwNzcGNCCmT64HQDZRrRj2NSE3BvdXBuX2RzQGhpbHRvbi5jb21YBAAAAuI~">View the Homewood Suites Poughkeepsie Vassar Reunion 2024 attendee website and reserve a room</a></p>
            </div>
        </div>
    </div>
</div>

<div class="accordion accordion-flush mt-3" id="accordionFlushExample2">
    <div class="accordion-item">
        <div class="accordion-header" id="flush-headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                Reunion 2024 Dorm Headquarters
            </button>
        </div>
        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample2">
            <div class="accordion-body">
                <p><strong>1959:</strong> Jewett House<br />
<strong>1964:</strong> Jewett House<br />
<strong>1969:</strong> Jewett House<br />
<strong>1974:</strong> Davison House<br />
<strong>1979:</strong> Josselyn House<br />
<strong>1984:</strong> Josselyn House<br />
<strong>1989:</strong> Strong House<br />
<strong>1994:</strong> Lathrop House<br />
<strong>1999:</strong> Cushing House<br />
<strong>2004:</strong> Raymond House<br />
<strong>2009:</strong> Raymond House<br />
<strong>2014:</strong> TownHouse 164<br />
<strong>2019:</strong> Noyes House</p>
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

                <p>We regret that we are unable to guarantee single room requests. If you are attending Reunion by yourself, we encourage coordinating with friends in advance to ensure your roommate of choice. If you require a single room, please indicate that in the special housing notes. If you require a room with a private bathroom, we strongly recommend you make reservations at one of the Hudson Valley’s area hotels.</p>

                <p>Please Note: Alumnae House is reserved for the 70th and 75th Reunion Classes.</p>

                <p>Also, the College performs routine maintenance (in rotation) and also houses more than 200 students during the summer months. As such, some residence halls will be “offline” every year (and unavailable for lodging or entering).</p>
            </div>
        </div>
    </div>
</div>

<?php echo end_item_iconItem(); ?>


<?php echo item_iconItem('Parking and Transportation','car',''); ?>

    <h4>Parking during Reunion</h4>

    <p>Due to the groundbreaking of The Dede Thompson Bartlett Center for Admission and Career Education, North Lot will be unavailable and parking will be limited on campus. Please use the designated parking at the Vassar Preserve, South Lot (entrance on Raymond Ave), Kenyon Hall, and Walker Field House parking lots.</p>

<div class="accordion accordion-flush mt-3" id="accordionFlushExample4">
    <div class="accordion-item">
        <div class="accordion-header" id="flush-headingFour">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                <i class="fa-solid fa-taxi"></i>&nbsp;Local Taxis
            </button>
        </div>
        <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample4">
            <div class="accordion-body">
                <ul>
                    <li><strong>Roy Taxi</strong> <a href="tel:+18454534267">(845) 453-4267</a> (cash only)</li>
                    <li><strong>Allen Taxi</strong> <a href="tel:+18454852411">(845) 485-2411</a> (cash or card)</li>
                    <li><strong>Empire Transport</strong> <a href="tel:+18454544444">(845) 454-4444</a> (cash only)</li>
                    <li>Uber and Lyft also available in the area</li>
                </ul>
            </div>
        </div>
    </div>
</div>


<div class="accordion accordion-flush mt-3" id="accordionFlushExample5">
    <div class="accordion-item">
        <div class="accordion-header" id="flush-headingFive">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                <i class="fa-solid fa-bus"></i>&nbsp;New York City Bus
            </button>
        </div>
        <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample5">
            <div class="accordion-body">
                <h4>Friday, May 31: Depart from NYC (Bryant Park) at noon</h4>
                <h4>Sunday, June 2: Depart from Vassar (Main Circle) at 1:00 p.m.</h4>
                <p>The Vassar Club of New York will be on hand to greet you on Friday on the south side of 42nd Street between 5th and 6th Avenues, in front of Bryant Park, as shown in the Google Map below.</p>
                <style>.embed-container { position: relative; padding-bottom: 56.25%; margin-bottom: 20px; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 20px; left: 0; width: 100%; height: 100%; }</style><div class='embed-container'><iframe src='https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3022.34973581112!2d-73.98570558727074!3d40.754331934902!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNDDCsDQ1JzE1LjYiTiA3M8KwNTgnNTkuMyJX!5e0!3m2!1sen!2sus!4v1682952585698!5m2!1sen!2sus' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe></div>
            </div>
        </div>
    </div>
</div>

<?php echo end_item_iconItem(); ?>


<?php echo item_iconItem('Important to Know','circle-info',''); ?>
<ul>
    <li><a href="https://www.vassar.edu/smokefree/">Vassar is a smoke-free campus</a>.</li>
    <li>All bathrooms are gender-neutral unless otherwise noted.</li>
    <li>Loop technology for hearing assistance is available in the 1951 Reading Room in Thompson Library, Belle Skinner Hall of Music, and Rockefeller Hall, Auditorium 300.  FM system capability is available in the Chapel.</li>
    <li>Vassar Guest Wi-Fi: follow the prompts to join the network.</li>
</ul>
<?php echo end_item_iconItem(); ?>


<?php echo item_iconItem('Photography/Video','photo-film',''); ?>
<p>By joining this event, you acknowledge that you and your guests, including minors, may be photographed, filmed, or recorded, allowing unrestricted use and distribution of any media capturing your likeness, voice, or name for College-related purposes, including online platforms, waiving any inspection, approval, and privacy rights (including those in NY Civil Rights Law Sections 50 & 51).</p>
<ul>
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

    <h3>A. Scott Warthin Museum of Geology & Natural History, Ely Hall</h3>
    <ul>
      <li>Friday: 8:30 a.m.–5:00 p.m.</li>
    </ul>

<h3>Athletic and Fitness Center</h3>
<ul>
  <li>Friday: 7:00 a.m.–8:00 p.m.</li>
  <li>Saturday:	10:00 a.m.–6:00 p.m.</li>
  <li>Sunday: 10:00 a.m.–6:00 p.m.</li>
</ul>
  <p><em>We intend to have the pool open, pending lifeguard availability. Please check back for more information.</em></p>

<h3>Jummah Service at Pratt House</h3>   
    <ul>
      <li>Friday: Noon</li>
    </ul>

  <h3>Music Library</h3>
  <ul>
    <li>Friday: 1:00–4:00 p.m.</li>
    <li>Saturday: 10:00 a.m.–4:00 p.m.</li>
  </ul>

<h3>Olmsted Greenhouse</h3>
<ul>
  <li>Friday: 1:00–5:00 p.m.</li>
  <li>Saturday:	11:00 a.m.–4:00 p.m.</li>
</ul>
  <p><em>Enter through the glass doors off of Vassar Lake Drive (behind Olmsted). The Greenhouse Manager will be giving tours of the collection.</em></p>

<h3>Shabbat Services at The Bayit, 51 Collegeview Avenue, North Gate</h3>   
    <ul>
      <li>Friday: 5:30–6:45 p.m.</li>
    </ul>


  <?php echo end_item_col(); ?>

  <?php echo item_col(); ?>

  <h3>Street Eats Food Truck - Outside College Center (behind Main Building)</h3>
  <ul>
    <li>Saturday: 7:30 a.m.–5:00 p.m.</li>
    <li>Sunday: 7:30–11:00 a.m.</li>
  </ul>
  <p><em>Coffee, light refreshments and snacks</em></p>

  <h3>The Loeb</h3>
  <ul>
    <li>Friday: 10:00 a.m.–7:00 p.m.</li>
    <li>Saturday: 9:00 a.m.–5:00 p.m.</li>
    <li>Sunday: 9:00 a.m.–5:00 p.m.</li>
  </ul>

  <h3>Thompson Memorial Library including the Art Library</h3>
  <ul>
    <li>Friday: 8:30 a.m.–4:30 p.m.</li>
    <li>Saturday: 8:30 a.m.–5:00 p.m.</li>
    <li>Sunday: 8:30 a.m.–noon</li>
  </ul>

    <h3>Vassar College Store, Juliet, Raymond Avenue</h3>
    <ul>
      <li>Thursday: 10:00 a.m.–6:00 p.m.</li>
      <li>Friday: 10:00 a.m.–6:00 p.m</li>
      <li>Saturday: 10:00 a.m.–6:00 p.m.<br>
        <em>Author Meet and Greet, 3:00–5:00&nbsp;p.m.</em>
      </li>
      <li>Sunday: 9:00 a.m.–2:00 p.m.<br>
        <em>Ring sales will be available from 10:00&nbsp;a.m. to 1:00 p.m.</em>
      </li>
    </ul>


  <?php echo end_item_col(); ?>

<?php echo end_sec_hasColumns(); ?>



<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/give/give.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/give/give-volunteer.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/calendar/calendar.php');?>
<?php echo end_sec_relatedTopics(); ?>


<?php echo site_footeralums(); ?>
