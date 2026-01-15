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
    'Welcome back!',
    $alums_img_path.'alums-calendar/reunion/reunion-52960218489_a3d3ff91f9_o.jpg',
    'image-is-first theme-cream',
    '',
    ['img_alt_text' => 'A person stands at a podium in front of a large group of people sitting under a tent, with a large banner behind them that says AAVC in white on a red background.']
); ?>

  <p>We look forward to welcoming alums from classes ending in 1 or 6 on June 5—7, 2026. The Class of 1976, celebrating its 50th Reunion, will arrive on June 4, 2026.</p>
  <p>Please help us plan for your arrival by expressing your interest to attend. Can’t wait to see you this summer!</p>
  <p>If you have any questions, please call <?php echo phone_number('800-443-8196'); ?>, option 5.</p>

<?php /*hiding below items until 2026 setup

<!--
   <a href="https://reunionregistration.vassar.edu/" class="btn btn-primary arrow mt-2 mb-2">Register for Reunion</a>
  <br />
  -->
   <a href="https://reunionregistration.vassar.edu/reunattend.php" class="btn btn-primary arrow mt-4 mb-4">See Who’s Coming to Reunion</a>
    <p>Registration has now closed. We are preparing for your arrival and can't wait to see you all very soon! If you have any questions, please call <?php echo phone_number('800-443-8196'); ?>, option 5, or <a href="mailto:reunion@vassar.edu">email&nbsp;us</a> regarding Reunion.</p> 
    
<p>Reunion 2025 has come to an end. It was a beautiful and joyous weekend. We hope you all had a wonderful time!</p>
    <p>If you have any questions, please call <?php echo phone_number('800-443-8196'); ?>, option 5, or <a href="mailto:reunion@vassar.edu">email&nbsp;us</a> regarding Reunion.</p> 
   <a href="https://www.flickr.com/photos/vassarcollegemedia/albums/72177720326751103" class="btn btn-primary arrow mt-2 mb-2">See Photos from Reunion 2025</a>
  <br />
   <a href="https://reunionregistration.vassar.edu/reunattend.php" class="btn btn-primary arrow mt-4 mb-4">See Who Came to Reunion 2025</a>

    
End of hiding info content*/ ?>    
  
<?php echo end_sec_fullBleedImageColumn(); ?>



<?php echo sec_regularContent(
  'Express your Interest to<br> attend Reunion 2026',
  '',
  ''
); ?>

<ul class="linked-list grid cols-2" style="gap: 0;">
<li><a href="https://connect.vassar.edu/s/1654/22/events.aspx?sid=1654&gid=2&pgid=8430&content_id=8046">Class of 1951 Interest Form</a></li>
<li><a href="https://connect.vassar.edu/s/1654/22/events.aspx?sid=1654&gid=2&pgid=8433&content_id=8048">Class of 1956 Interest Form</a></li>
<li><a href="https://connect.vassar.edu/s/1654/22/events.aspx?sid=1654&gid=2&pgid=8436&content_id=8050">Class of 1961 Interest Form</a></li>
<li><a href="https://connect.vassar.edu/s/1654/22/events.aspx?sid=1654&gid=2&pgid=8439&content_id=8052">Class of 1966 Interest Form</a></li>
<li><a href="https://connect.vassar.edu/s/1654/22/events.aspx?sid=1654&gid=2&pgid=8442&content_id=8054">Class of 1971 Interest Form</a></li>
<li><a href="https://connect.vassar.edu/s/1654/22/events.aspx?sid=1654&gid=2&pgid=8427&content_id=8043">Class of 1976 Interest Form</a></li>
<li><a href="https://connect.vassar.edu/s/1654/22/events.aspx?sid=1654&gid=2&pgid=8445&content_id=8056">Class of 1981 Interest Form</a></li>
<li><a href="https://connect.vassar.edu/s/1654/22/events.aspx?sid=1654&gid=2&pgid=8448&content_id=8058">Class of 1986 Interest Form</a></li>
<li><a href="https://connect.vassar.edu/s/1654/22/events.aspx?sid=1654&gid=2&pgid=8451&content_id=8060">Class of 1991 Interest Form</a></li>
<li><a href="https://connect.vassar.edu/s/1654/22/events.aspx?sid=1654&gid=2&pgid=8455&content_id=8063">Class of 1996 Interest Form</a></li>
<li><a href="https://connect.vassar.edu/s/1654/22/events.aspx?sid=1654&gid=2&pgid=8458&content_id=8065">Class of 2001 Interest Form</a></li>
<li><a href="https://connect.vassar.edu/s/1654/22/events.aspx?sid=1654&gid=2&pgid=8461&content_id=8067">Class of 2006 Interest Form</a></li>
<li><a href="https://connect.vassar.edu/s/1654/22/events.aspx?sid=1654&gid=2&pgid=8464&content_id=8069">Class of 2011 Interest Form</a></li>
<li><a href="https://connect.vassar.edu/s/1654/22/events.aspx?sid=1654&gid=2&pgid=8467&content_id=8071">Class of 2016 Interest Form</a></li>
<li><a href="https://connect.vassar.edu/s/1654/22/events.aspx?sid=1654&gid=2&pgid=8470&content_id=8073">Class of 2021 Interest Form</a></li>
</ul>


<?php echo end_sec_regularContent(); ?>



<?php echo sec_regularContent(
  'NEW: Vassar Mobile Reunion Experience',
  ' theme-cream',
  ''
); ?>

<p>Did you know that Vassar has a mobile app? It now includes a complete Reunion experience to help make the most of the weekend.</p> 
<p>To get started, download the app and select “Reunion” from the initial “Choose Your Experience” screen.</p>
<ul>
    <li><a href="https://go.vassar.edu/vassarmobile-iOS">Download for iOS</a></li>
    <li><a href="https://go.vassar.edu/vassarmobile-google">Download for Android</a></li>
</ul>
<p>Already have the app and use the “Alum” persona? imply tap the person icon in the upper-right corner of the app, select “My Role,” and switch to the “Reunion” persona for the weekend.</p>
<p>For tips on using the app, <a href="https://docs.google.com/document/d/1wmdzh3DJPmxrk7cYZLj_5VaXhdEEv7otQ4_-MVoXnis/edit?usp=sharing">read the Vassar Mobile Reunion Experience Guide</a>.</p>
<p><strong>PLEASE NOTE: There is no login required to use the app</strong>! Ignore the “Sign In” link beneath the person icon menu, it’s solely for Vassar students and employees.</p>

<?php echo end_sec_regularContent(); ?>



<?php echo sec_fullBleedImageColumn(
    'Preliminary<br> Class Schedules',
    $alums_img_path.'alums-calendar/reunion/Reunion-General-52960456425_6f999747a0_k.jpg',
    'theme-burgundy',
    '',
    ['img_alt_text' => 'A large group of people sitting at round tables, coversing with one and other, under a huge white tent.']
); ?>

<p>This year’s class schedules can be filtered or searched in multiple ways. Use the filter options to check or uncheck categories, or enter a keyword (such as your class year) to find specific events.</p>
<p>For your convenience, we have created two default views of the class schedules, as follows:</p>

<?php echo cta_link(
    'https://vassar-college-test.modolabs.net/reunionv2/reunion_schedule/index?feed=events&tracks%5B%5D=general_schedule&tracks%5B%5D=lectures_and_panels&startdate=2026-06-05T00%3A00%3A00',
    'List of general events for all Reunion classes.'
); ?>
<?php echo cta_link(
    'https://vassar-college-edit.modolabs.net/reunionv2/reunion_schedule/index?feed=events&tracks%5B%5D=id_50th_reunionv2_2026',
    'List of the 50th Reunion class-specific events.'
); ?>

<br />
<p><em>Preliminary schedules as of January 16, 2026. Additional events and information will be added.</em></p>

<?php echo end_sec_fullBleedImageColumn(); ?>


<?php /*hiding below item until 2026 setup

<?php echo sec_fullBleedImageColumn(
    '50th Reunion<br> Class Schedule',
    $alums_img_path.'alums-calendar/reunion/28096443936_ede5b72d61_o-class76.jpg',
    'image-is-first',
    '',
    ['img_alt_text' => 'Class of 1976 reunion group poses outdoors with anniversary signs.']
); ?>

<p>Enjoy the campus a day early with programming designed especially for the 50th Reunion class. Check-in will open on Thursday, June 4 at 2:00 p.m.</p>

<?php echo cta_link(
    'https://vassar-college-edit.modolabs.net/reunionv2/reunion_schedule/index?feed=events&tracks%5B%5D=id_50th_reunionv2_2026',
    'See the Preliminary 50th Reunion Schedule'
); ?>
<?php echo end_sec_fullBleedImageColumn(); ?>


<?php echo sec_fullBleedImageColumn(
    'Lectures and Tours',
    $alums_img_path.'alums-calendar/reunion/54582897468_0cfd84ce20_o-lecture.jpg',
    ' theme-cream',
    '',
    ['img_alt_text' => 'A professor presents to a full lecture hall in a tiered classroom.']
); ?>

<p>Explore this year’s lifelong learning opportunities through lectures and tours at Reunion!</p>

<?php echo cta_link(
    'https://vassar-college-test.modolabs.net/reunionv2/reunion_schedule/index?feed=events&tracks%5B%5D=lectures_and_panels&startdate=2026-06-05T00%3A00%3A00',
    'Learn more about Lectures and Tours'
); ?>
<?php echo end_sec_fullBleedImageColumn(); ?>


<!--this lost and found info goes in the section below with the future reunion dates, when it's immediately post-reunion-->
    <h3>Lost and Found</h3>

    <p>Leave something behind? Please call <?php echo phone_number('800-443-8196'); ?>, option 5, or <a href="mailto:reunion@vassar.edu">email us regarding Reunion</a>.</p>
   

End of hiding info content*/ ?>


<?php echo sec_regularContent(
  '',
  '',
  ''
); ?>


  <h3>Future Reunion Dates</h3>

  <p>June 4–6, 2027<br />
  June 2–4, 2028</p>

  <h3>Past Reunions</h3>

    <ul class="linked-list mt-4">
        <li><a href="https://www.flickr.com/photos/vassarcollegemedia/albums/72177720326751103/">View photos from Reunion 2025.</a></li>
        <li><a href="https://www.flickr.com/photos/vassarcollegemedia/albums/72177720317624209/">View photos from Reunion 2024.</a></li>
        <li><a href="https://www.flickr.com/photos/vassarcollegemedia/sets/72177720308893162/">View photos from Reunion 2023.</a></li>
        <li><a href="https://www.flickr.com/photos/vassarcollegemedia/collections/72157683898719825/">View photos from in-person Reunions held since 2012.</a></li>
    </ul>  

<?php echo end_sec_regularContent(); ?>


<div id="information-updates"></div>

<?php echo sec_regularContent('Information & Updates','theme-verylightgray','','',); ?>

<?php /*hiding below items until 2026 setup

<?php echo item_iconItem('New This Year!','star',''); ?>
<h4>Reunion Swag Shop!</h4>
<p>In lieu of class favors, individuals will be able to purchase Reunion-branded items in advance, including water bottles, tote bags, bucket hats, and t-shirts, and have their items shipped to them or they can pick them up from the College Store when they arrive on campus. A small quantity will also be available at the store during Reunion weekend for those who missed out (or need more)! <a href="https://collegestore.vassar.edu/MerchList?ID=36254">Order your Reunion swag now</a>.</p>


<h4>Alum ID Card</h4>
<p>If you would like to get an Alum ID card during Reunion, please submit the <a href="https://offices.vassar.edu/card/alum-id-card-request/">Alum ID Card Request Form</a> by <strong>May 17, 2024</strong>. The Card Office will make sure everything is ready for you to get your Alum ID card at Reunion. Alum ID cards are only issued in person at Vassar’s Service Desk located in the College Center, North Atrium, as a photo must be taken for the card. The Service Desk will be open during Reunion on Friday, May 31, from 8:30 a.m. to 5:00&nbsp;p.m. and Saturday, June 1, from noon to 5:00 p.m. For more information, contact the Card Office at <a href="tel:+18454513333">(845) 451-3333</a>.</p>


<?php echo end_item_iconItem(); ?>


<?php echo item_iconItem('In Case of Emergency','triangle-exclamation',''); ?>


<?php echo info_card(
  '',
  'mt-4 '); ?>

  <p>In the event of a severe weather emergency or an active threat of violence on campus, the College could send out a Rave alert to notify the campus community of such a threat. To receive emergency Vassar Campus alert texts during Reunion weekend, text <strong>VCEVENT</strong> to <strong>226787</strong>.</p>

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
    <li>For life threatening/medical emergencies/fire/police, call <a href="tel:1-911">911</a></li>
    <li>Then call Vassar Security: <a href="tel:+18454377333">(845) 437-7333</a></li>
    <li>For non-threatening/non-medical emergencies, call <a href="tel:+18454375221">(845) 437-5221</a></li>
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

End of hiding info content*/ ?>


<div id="housing"></div>

<?php echo item_iconItem('Housing','house-chimney',''); ?>
<p>We are excited to welcome alums back to Vassar for an in-person reunion and want to ensure that everyone makes informed decisions about where to stay.</p>

<p>We recommend you <strong>register early</strong> for on-campus housing as it is allocated on a first-come, first-served basis. Family housing (for families with young children of four or more) will be in the Terrace Apartments (TAs) and will be $400 per family.</p>
<p>Class Dorm assignments are available below. The cost to stay on campus in a dorm will be $175.00 per person, per bed for any part of the weekend. If you are part of the 5th year Reunion class, the cost is $125.00 per person, per bed for any part of the weekend.</p>
<p>If you prefer the creature comforts of home, <a href="https://www.vassar.edu/visit/community/lodging">search area hotels</a>. The following area hotels have rooms specifically reserved for Reunion.</p>

<div class="accordion accordion-flush mt-3" id="accordionFlushExample">
    <div class="accordion-item">
        <div class="accordion-header" id="flush-headingOne">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseONe">
                Hotels with rooms reserved for Reunion
            </button>
        </div>
        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
                <p><strong>Holiday Inn Express</strong></br>
                    2750 South Rd</br>
                    Poughkeepsie NY 12601</br>
                    (845) 473-1151</br>
                    <em>Refer to Vassar College Reunion and reference code “VR6” when calling to make the reservation.</em></p>
                    <p><strong>Quality Inn</strong> (walking distance from the college)</br>
                    536 Haight Ave</br>
                    Poughkeepsie NY 12603</br>
                    (845) 454-1010</br>
                    <em>Reference Vassar College Reunion when making a reservation to receive the   discounted rate.</em></p>
                    <p><strong>Homewood Suites Poughkeepsie</strong></br>
                    900 Thomas Watson Drive</br>
                    Poughkeepsie NY 12601</br>
                    (845) 462-0030</br>
                    <em>Reference Vassar College Reunion when making a reservation to receive the   discounted rate.</em></p>
            </div>
        </div>
    </div>
</div>

<div class="accordion accordion-flush mt-3" id="accordionFlushExample2">
    <div class="accordion-item">
        <div class="accordion-header" id="flush-headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                Reunion 2026 Dorm Headquarters
            </button>
        </div>
        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample2">
            <div class="accordion-body">
<p><strong>1951, 1956, 1961:</strong> Heartwood<br />
<strong>1966, 1971:</strong> Main House<br />
<strong>1976:</strong> Davison House<br />
<strong>1981, 1986:</strong> Main House<br />
<strong>1991:</strong> Jewett House<br />
<strong>1996, 2001:</strong> Cushing House<br />
<strong>2006:</strong> Raymond House<br />
<strong>2011:</strong> Strong House<br />
<strong>2016:</strong> Town Houses<br />
<strong>2021:</strong> Lathrop House</p>
            </div>
        </div>
    </div>
</div>


<div class="accordion accordion-flush mt-3" id="accordionFlushExample3">
    <div class="accordion-item">
        <div class="accordion-header" id="flush-headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                Additional on-campus housing
            </button>
        </div>
        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample3">
            <div class="accordion-body">
                <p><strong>Residence Hall rooms:</strong></p>
                <ul>
                    <li>Include twin-sized beds about half of which are lofted/raised and cannot be lowered.</li>
                    <li>Include commercial linens (two twin flat sheets, one pillow case, one light twin blanket, one towel, and one washcloth) placed on each bed. If you would like to have an extra blanket or towel, please bring them with you.</li>
                    <li>Does <strong>not</strong> include air conditioning, soap, or private bathrooms.</li>
                    <li>Are not guaranteed to be quiet.</li>
                </ul>

                <p>We regret that we are unable to guarantee single room requests. If you are attending Reunion by yourself, we encourage coordinating with friends in advance to ensure your roommate of choice. If you require a single room, please indicate that in the special housing notes. If you require a room with a private bathroom, we strongly recommend you make reservations at one of the Hudson Valley’s area hotels.</p>

                <p>Please Note: Alumnae House and the Heartwood are not open for general reservations but reserved for the oldest Reunion classes (75th, 70th, and 65th) and the AAVC Board.</p>

                <p>Also, the College performs routine maintenance (in rotation) and also houses more than 200 students during the summer months. As such, some residence halls will be “offline” every year (and unavailable for lodging or entering).</p>
            </div>
        </div>
    </div>
</div>

<?php echo end_item_iconItem(); ?>


<?php echo item_iconItem('Parking and Transportation','car',''); ?>

    <h4>Parking during Reunion</h4>

    <p>Please park in designated parking spaces only. In place of parking passes, remember to include your license plate number when registering for Reunion weekend.</p>

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
                <h4>Friday, June 5: Depart from NYC (Bryant Park) at noon</h4>
                <h4>Sunday, June 7: Depart from Vassar (Main Circle) at 1:00 p.m.</h4>
                <p>The Vassar Club of New York will be on hand to greet you on Friday on the south side of 42nd Street between 5th and 6th Avenues, in front of Bryant Park, as shown in the Google Map below.</p>
                <style>.embed-container { position: relative; padding-bottom: 56.25%; margin-bottom: 20px; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 20px; left: 0; width: 100%; height: 100%; }</style><div class='embed-container'><iframe src='https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3022.34973581112!2d-73.98570558727074!3d40.754331934902!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNDDCsDQ1JzE1LjYiTiA3M8KwNTgnNTkuMyJX!5e0!3m2!1sen!2sus!4v1682952585698!5m2!1sen!2sus' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe></div>
            </div>
        </div>
    </div>
</div>

<?php echo end_item_iconItem(); ?>


<?php /*hiding below items until 2026 setup

<?php echo item_iconItem('Important to Know','circle-info',''); ?>
<ul>
    <li><a href="https://www.vassar.edu/smokefree/">Vassar is a smoke-free campus</a>.</li>
    <li>All bathrooms are gender-neutral unless otherwise noted.</li>
    <li>Loop technology for hearing assistance is available in the 1951 Reading Room in Thompson Library, Belle Skinner Hall of Music, and Rockefeller Hall, Auditorium 300.  FM system capability is available in the Chapel.</li>
    <li>Golf carts, vans, and shuttle buses are available to assist alums who may have mobility challenges and need assistance. Call <a href="tel:+18454377601">(845) 437-7601</a>. <a href="https://map.concept3d.com/?id=699#!ct/10104,8434,10356,8426,22116,22152,22153,22154,22158,22160,22161,22162,22163,22164,22165,22166,22167,22169,22170,22171,22172,22173,22175,22176,22177,22178,22179,22180,22181,22182,22183,22184,22185,22186,22187,22188,22189,22190,22191,22192,22193,22194,22195,22196,22197,22198,22199,22200,22201,22202,22203,22329,29500?s/">View the accessibility map</a>.</li>
    <li>Vassar Guest Wi-Fi: follow the prompts to join the network.</li>
</ul>
<?php echo end_item_iconItem(); ?>


<?php echo item_iconItem('Photography/Video','photo-film',''); ?>
<p>By joining this event, you acknowledge that you and your guests, including minors, may be photographed, filmed, or recorded, allowing unrestricted use and distribution of any media capturing your likeness, voice, or name for College-related purposes, including online platforms, waiving any inspection, approval, and privacy rights (including those in NY Civil Rights Law Sections 50 & 51).</p>
<ul>
<?php echo end_item_iconItem(); ?>


End of hiding info content*/ ?>

<?php echo end_sec_regularContent(); ?>


<?php /*hiding below items until 2026 setup

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
  <li>Saturday:	<em>Closed due to events happening throughout the day.</em></li>
  <li>Sunday: 10:00 a.m.–6:00 p.m.</li>
</ul>
  <p><strong>Pool Hours:</strong></p>
  <ul>
  <li>Friday: 8:00 a.m.–12:00 p.m. & 1:00–5:00 p.m.</li>
  <li>Saturday:	Closed</li>
  <li>Sunday: 1:00–4:00 p.m.</li>
</ul>


<h3>James W. Palmer III Gallery, North Atrium, College Center</h3>
  <p><em>Connecting Through the Camera: The Class of 1985 Portrait Project</em></p>
<ul>
  <li>Friday: 9:00 a.m.–10:00 p.m.</li>
  <li>Saturday:	10:00 a.m.–10:00 p.m.</li>
  <li>Sunday: 10:00 a.m.–3:00 p.m.</li>
</ul>


<h3>Jummah Service at Pratt House</h3>   
    <ul>
      <li>Friday: 1:00 p.m.</li>
    </ul>

  <h3>Music Library</h3>
  <ul>
    <li>Thursday: 1:00–4:00 p.m.</li>
    <li>Friday: 1:00–4:00 p.m.</li>
    <li>Saturday: 10:00 a.m.–4:00 p.m.</li>
  </ul>

  <?php echo end_item_col(); ?>

  <?php echo item_col(); ?>

<h3>Olmsted Greenhouse</h3>
<ul>
  <li>Friday: 1:00–5:00 p.m.</li>
  <li>Saturday:	11:00 a.m.–4:00 p.m.</li>
</ul>
  <p><em>Located on the B-Level of Olmsted Hall, enter through the glass doors facing Skinner Music Hall in the back of Olmsted.</em></p>

<h3>Shabbat Services at The Bayit, 51 Collegeview Avenue, near the North Gate</h3>   
    <ul>
      <li>Friday: 5:30–6:45 p.m.</li>
    </ul>

<!--  <h3>Street Eats Food Truck - Outside College Center (behind Main Building)</h3>
  <ul>
    <li>Saturday: 7:30 a.m.–5:00 p.m.</li>
    <li>Sunday: 7:30–11:00 a.m.</li>
  </ul>
  <p><em>Coffee, light refreshments and snacks</em></p>-->

  <h3>The Loeb Art Center</h3>
  <ul>
    <li>Thursday: 10:00 a.m.–9:00 p.m.</li>
    <li>Friday: 10:00 a.m.–7:00 p.m.</li>
    <li>Saturday: 9:00 a.m.–5:00 p.m.</li>
    <li>Sunday: 9:00 a.m.–5:00 p.m.</li>
  </ul>

  <h3>Thompson Memorial Library, including the Art Library</h3>
  <ul>
    <li>Thursday: 8:30 a.m.–4:30 p.m.</li>
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

End of hiding info content*/ ?>

<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/give/give.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/give/give-volunteer.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/calendar/calendar.php');?>
<?php echo end_sec_relatedTopics(); ?>


<?php echo site_footeralums(); ?>
