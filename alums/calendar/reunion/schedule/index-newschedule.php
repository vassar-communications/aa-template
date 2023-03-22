<?php
/* */
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */


$page_info = '{
  "page_title":"General Reunion Class Schedule",
  "page_classes":"",
  "feature_image":"/alums/assets/img/alums-calendar/reunion/Vassar_Reunion_4706.jpg"
}';

/* === */
$page_info = json_decode($page_info, true);
?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation_alums(); ?>

<?php echo page_textmasthead('theme-dark-burgundy'); ?>

<?php echo interior_page_nav() ?>

<?php /*  PAGE CONTENT === */ ?>




<?php echo sec_regularContent(); ?>

<p class="intro-text">2023 Reunion General Schedule</p>
<p>Use one of these links to go directly to the activities for that day:</p>

<ul class="linked-list">
  <li><a href="#friday">Friday, June 2</a></li>
  <li><a href="#saturday">Saturday, June 3</a></li>
  <li><a href="#sunday">Sunday, June 4</a></li>
</ul>

  <h3 id="friday" class="schedule-item__heading">Friday, June 2</h3>


  <?php echo schedule_item_dropdown(
    '9 a.m.–10 p.m.',
    'Reunion Information Center is open',
    'Main Building Lobby'
  ); ?>
   <?php echo end_schedule_item_dropdown(); ?>

  <?php echo schedule_item_dropdown(
    '9 a.m.–11 p.m.',
    'Residence houses open for check-in'
  ); ?>

    <p>Dorm rooms are available after 2 p.m.</p>

  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '3–4 p.m.',
    'Lectures and panels'
  ); ?>
      <h4><a href="LINK">Ageless Aging: Resilience, Cognitive Health, and Mindfulness</a></h4>
      <p><strong>Location:</strong> Rockefeller 300</p>
      <h4><a href="LINK">Campus Capital Projects: What’s Happening and Upcoming?</a></h4>
      <p><strong>Location:</strong> Rockefeller 200</p>
  <?php echo end_schedule_item_dropdown(); ?>

  <?php echo schedule_item_dropdown(
    '3–4 p.m.',
    'Tours'
  ); ?>

<h4><a href="LINK">The Vassar Preserve and Environmental Cooperative</a></h4>
<p><strong>Location:</strong> Shuttles depart from Main Circle.</p>

<h4><a href="LINK">Walking Tour of the Vassar College Arboretum</a></h4>
<p><strong>Location:</strong> Meet at the entrance to Main in front of Main Circle.</p>

  <?php echo end_schedule_item_dropdown(); ?>

  <?php echo schedule_item_dropdown(
    '4–5 p.m.',
    'Class of 1958—Art Lecture and Self-Guided Tour',
    'Taylor 203'
  ); ?>

    <p><strong>Bart Thurber, The Anne Hendricks Bass Director of the Frances Lehman Loeb Art Center and Lecturer in Art</strong></p>
    <p>The latest developments at the Frances Lehman Loeb Art Center.  Followed by a self-guided tour.
</p>

  <?php echo end_schedule_item_dropdown(); ?>

  <?php echo schedule_item_dropdown(
    '5–6 p.m.',
    'Matthew Vassar Legacy Society Reception (by invitation)',
    'The President’s House Terrace'
  ); ?>
    <p>With gratitude for and in recognition of those who have provided for the College’s future through a planned gift or estate commitment.</p>
  <?php echo end_schedule_item_dropdown(); ?>

  <?php echo schedule_item_dropdown(
    '5–6 p.m.',
    'Class of 1983–Welcome reception',
    'The Vassar Barns'
  ); ?>
   <?php echo end_schedule_item_dropdown(); ?>

  <?php echo schedule_item_dropdown(
    '5–7 p.m.',
    'The Loeb All-Class Welcome Reception'
  ); ?>
    <p>Refreshments served.</p>
  <?php echo end_schedule_item_dropdown(); ?>

  <?php echo schedule_item_dropdown(
    '5:30–6:45 p.m.',
    'Shabbat services',
    'The Bayit (51 Collegeview Avenue, North Gate)'
  ); ?>
   <?php echo end_schedule_item_dropdown(); ?>

  <?php echo schedule_item_dropdown(
    '6 p.m.',
    'Night Owls rehearsal',
    'Rockefeller 200'
  ); ?>
   <?php echo end_schedule_item_dropdown(); ?>

  <?php echo schedule_item_dropdown(
    '6–7 p.m.',
    'Faculty reception',
    'President’s lawn Tent'
  ); ?>
   <?php echo end_schedule_item_dropdown(); ?>

  <?php echo schedule_item_dropdown(
    '7–9 p.m.',
    'Picnic dinner'
  ); ?>
<p><strong>Classes of 1953, 1958, 1963, 1968:</strong> 2nd floor Main Building</p>
<p><strong>Classes of 1978, 1983, 1988, 1993, 1998, 2003, 2008, 2013, 2016, 2018:</strong> Noyes Tent</p>
  <?php echo end_schedule_item_dropdown(); ?>

  <?php echo schedule_item_dropdown(
    '9–11 p.m.',
    'Hospitalities'
  ); ?>
<p><strong>Classes of 1958, 1963, 1968:</strong> Jewett House</p>
<p><strong>All classes:</strong> Noyes Circle Tent</p>
  <?php echo end_schedule_item_dropdown(); ?>

  <?php echo schedule_item_dropdown(
    '9:30 p.m.',
    'Fireworks over Sunset Lake',
    null,
    null,
    ['noContent' => true]
  ); ?>

  <?php echo schedule_item_dropdown(
    '10 p.m.–12 a.m.',
    'The Afterglow Salon: A Sober, Safe, & Inclusive Social Space',
    'Susan Shiva Theater behind the ALANA center'
  ); ?>

  <p>Adults only, brought to you by the class of 2003 along with alums from QCVC (Queer Coalition of Vassar College); CHOICE (Campus Health Organization for Information, Contraception, and Education); and SQUIRM, a Vassar College student publication dedicated to exploring sex in literary and artistic forms.</p>

<p>After the fireworks comes the afterglow! Join us for an uplifting celebration of sexual expression featuring readings, burlesque, and art from a multigenerational group of alum performers. <em>Coffee and dessert will be served</em>.</p>

  <?php echo end_schedule_item_dropdown(); ?>

  <?php echo schedule_item_dropdown(
    '10 p.m.–12 a.m.',
    '“The Mug”',
    'Lower level, College Center'
  ); ?>
  <p>Join us at the “Mug” for music from the 80’s and 90’s. Don’t forget to wait in line. Everyone 21 and older are welcome. Cash bar, DJ, and dancing.</p>
  <?php echo end_schedule_item_dropdown(); ?>


  <h3 id="saturday" class="schedule-item__heading">Saturday, June 3</h3>

  <?php echo schedule_item_dropdown(
    '7–9 a.m.',
    'Breakfast'
  ); ?>
<p>Available at Gordon Commons (formerly ACDC). Pay at the door (credit/debit).</p>

<p><strong>Alumnae House Guests:</strong> Continental breakfast in the Dining Room</p>

<p><strong>Classes of 1958, 1963, and 1968:</strong> Coffee service, muffins, and fruit, Jewett multipurpose rooms</p>

  <?php echo end_schedule_item_dropdown(); ?>

  <?php echo schedule_item_dropdown(
    '9 a.m.–10 p.m.',
    'Reunion Information Center is open',
    'Main Building Lobby'
  ); ?>
   <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '9 a.m.–11 p.m.',
    'Residence houses open for check-in',
    null,
    null,
    ['noContent' => true]
  ); ?>

  <?php echo schedule_item_dropdown(
    '9–10 a.m.',
    'President’s Hour',
    'The Chapel'
  ); ?>
  <p>Remarks by Vassar’s 11th President, Elizabeth Howe Bradley</p>
  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '10:15 a.m.',
    'Parade of Classes Line-Up'
  ); ?>
  <p>Line up for Parade of Classes (line starts with 1953 at the chapel along the path and road, ending with 2018). Look for your class banner along the parade route. Golf carts will be available.</p>
  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '10:45 a.m.',
    'Parade of Classes',
    null,
    null,
    ['noContent' => true]
  ); ?>


  <?php echo schedule_item_dropdown(
    '11:15 a.m.–12:15 p.m.',
    'Celebrate Vassar',
    'Noyes Circle Tent'
  ); ?>
  <p>Alums from the 5th to the 75th reunion classes, guests, and children gather together to celebrate extraordinary volunteers, gifts, and our shared Vassar legacy. Remarks by Monica Vachher ’77, AAVC President, and Kat Mills Polys ’93, Vassar Fund Committee Chair.</p>
  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '12:30–1:30 p.m.',
    'Class Luncheons'
  ); ?>
<p><strong>Classes of 1953 and 1958:</strong> The Aula</p>
<p><strong>Class of 1963 and 1968:</strong> Main Building, Villard Room</p>
<p><strong>Classes of 1978, 1983, 1988, 1993, 1998, 2003, 2008, 2013, 2016, and 2018:</strong> Gordon Commons</p>
  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '2–3 p.m.',
    'Lectures and panels'
  ); ?>

  <h4><a href="LINK">Is a Multiracial Inclusive Democracy Possible in the United States?</a></h4>
<p><strong>Location:</strong> Rockefeller 300</p>

  <h4><a href="LINK">Financial Wellness for Young Professionals</a></h4>
<p><strong>Location:</strong> Rockefeller 200</p>
  <?php echo end_schedule_item_dropdown(); ?>
  
  <?php echo schedule_item_dropdown(
    '2–3 p.m.',
    'Tour'
  ); ?>

<h4><a href="LINK">Walking Tour of the Vassar College Arboretum</a></h4>
<p><strong>Location:</strong> Meet at the entrance to Main in front of Main Circle.</p>
  <?php echo end_schedule_item_dropdown(); ?>

  <?php echo schedule_item_dropdown(
    '2–4 p.m.',
    'Vassar Devils & Angels Ice Cream Tent',
    'Quad Lawn'
  ); ?>
    <?php echo end_schedule_item_dropdown(); ?>

  <?php echo schedule_item_dropdown(
    '2–4 p.m.',
    'Family activities on the Quad lawn'
  ); ?>
    <p>Bubble bus, bouncy castles</p>
		<p>A Day in the Park, The Wimpfheimer</p>
  <?php echo end_schedule_item_dropdown(); ?>

  <?php echo schedule_item_dropdown(
    '2:30–4:30 p.m.',
    'Alum author meet and greet',
    'Vassar College Store (aka, the Juliet), Raymond Avenue'
  ); ?>
    <?php echo end_schedule_item_dropdown(); ?>

  <?php echo schedule_item_dropdown(
    '3–5 p.m.',
    'Affinity receptions',
    'Main Building, 2nd floor'
  ); ?>
  <p>Connect with other alums and campus administrators with shared identities and 
affiliations at affinity receptions for alum-athletes and African American, International, Latinx, LGBTQIA+, Transitions/first-generation, and alums affiliated with Religious and Spiritual Life and WVKR.</p>
  <?php echo end_schedule_item_dropdown(); ?>

  <?php echo schedule_item_dropdown(
    '3:30–4:30 p.m.',
    'Lectures and panels'
  ); ?>
  <h4><a href="LINK">The Promise and Peril of Social Media</a></h4>
<p><strong>Location:</strong> Rockefeller 300</p>

  <h4><a href="LINK">Hallie Flanagan and the 1937 Federal Summer Theater Conference at Vassar</a></h4>
<p><strong>Location:</strong> Rockefeller 200</p>
  <?php echo end_schedule_item_dropdown(); ?>

  <?php echo schedule_item_dropdown(
    '3:30–4:30 p.m.',
    'Tours'
  ); ?>
<h4><a href="LINK">Pedagogy and Place: The Legacy of Vassar’s Landscape</a></h4>
<p><strong>Location:</strong> Meet in front of Rockefeller Hall</p>

<h4><a href="LINK">Campus Projects: View What’s New</a></h4>
<p><strong>Location:</strong> Meet in Main Circle</p>
  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '3:30–5 p.m.',
    'Annual Ferry House Mini-Reunion at Reunion',
    'Outdoor patio (weather permitting)'
  ); ?>
  <p>Calling all Ferries for an informal reception with light refreshments.</p>
  <?php echo end_schedule_item_dropdown(); ?>

  <?php echo schedule_item_dropdown(
    '5 p.m.',
    'Class of 2013, Zachary Zane brings you <em>Boyslut: A Memoir and Manifesto</em>. 
Exploring Queer Spaces, Cracks, and Holes.',
    'Rockefeller 210'
  ); ?>
  <p>Zachary Zane is a sex and relationship columnist at both <em>Men‘s Health</em> and <em>Cosmopolitan</em>. His recently published book, <em>Boyslut: A Memoir and Manifesto</em>, shares his journey to overcoming sexual shame—a journey that started freshman year at Vassar. From stories of risqué Grindr hookups to living with his boyfriend and his boyfriend’s wife, <em>Boyslut</em> is painfully funny—but most potently a testimony that we can all learn to live healthier lives unburdened by stigma. Cassidy Hollinger will be moderating the in-conversation with Zane after he reads a brief excerpt from his new book. Q&A to follow.</p>
  <?php echo end_schedule_item_dropdown(); ?>

    <?php echo schedule_item_dropdown(
      '5 p.m.',
      'Night Owls Concert',
      'Taylor 102'
    ); ?>
      <?php echo end_schedule_item_dropdown(); ?>

  <?php echo schedule_item_dropdown(
    '5:30–6:30 p.m.',
    '1861 Loyalty Society Reception (by invitation)',
    'Thompson Memorial Library lawn Tent'
  ); ?>
  <p>With gratitude for and in recognition of a vital group of donors who have included Vassar among their annual giving priorities.</p>
  <?php echo end_schedule_item_dropdown(); ?>

    <?php echo schedule_item_dropdown(
      '6:30–9:30 p.m.',
      'Class dinners',
      null
    ); ?>
      <p><strong>1953 and 1958:</strong> Alumnae House Dining Room</p>
  		<p><strong>1963:</strong> Reading Room 133, Thompson Library</p>
  		<p><strong>1968:</strong> 1951 Reading Room, Thompson Library (2nd floor)</p>
  		<p><strong>1978:</strong> Aula</p>
  		<p><strong>1983:</strong> Sunset Lake Tent</p>
  		<p><strong>1988:</strong> Bridge Building</p>
  		<p><strong>1993:</strong> Blodgett Tent</p>
  		<p><strong>1998:</strong> Cushing Tent</p>
  		<p><strong>2003:</strong> President’s lawn Tent</p>
  		<p><strong>2008:</strong> Chapel lawn Tent</p>
  		<p><strong>2013:</strong> TownHouse Tent</p>
  		<p><strong>2016 and 2018:</strong> Noyes Tent</p>
    <?php echo end_schedule_item_dropdown(); ?>


    <?php echo schedule_item_dropdown(
      '10 p.m–12 a.m.',
      'Hospitalities'
    ); ?>
    <p><strong>Classes of 1958, 1963, and 1968:</strong> Jewett House</p>
    <p><strong>Class of 1973:</strong> Davison House</p>
    <?php echo end_schedule_item_dropdown(); ?>


      <?php echo schedule_item_dropdown(
        '10 p.m–1 a.m.',
        'All-class after party on Noyes Circle'
      ); ?>
      <p>Cash bar, DJ, and dancing to a multigenerational playlist.</p>
      <?php echo end_schedule_item_dropdown(); ?>


  <h3 id="sunday" class="schedule-item__heading">Sunday, June 4</h3>


  <?php echo schedule_item_dropdown(
    '7 a.m–12 p.m.',
    'Breakfast/brunch',
    'Gordon Commons'
  ); ?>
  <p>Pay at the door (credit/debit).</p>
		<p><strong>Alumnae House Guests:</strong> Continental breakfast in the Dining Room</p>
  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '8 a.m.–1 p.m.',
    'Reunion Information Center is open',
    'Main Building Lobby'
  ); ?>
   <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '8:45 a.m.',
    'Choir rehearsal',
    'The Chapel'
  ); ?>
   <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '9 a.m–1 p.m.',
    'Residence houses open for check out'
  ); ?>
  <p>Please return room keys to Guest Services Coordinators in residence houses.</p>
  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '9 a.m.',
    'Fun Run with Cross-Country Coach Ron Stonitsch'
  ); ?>
  <p>Meet in front of the Athletic and Fitness Center</p>
  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '10–11 a.m.',
    'Service of Remembrance',
    'Chapel'
  ); ?>
  <h4>An Inter-Religious Memorial Service Celebrating the Lives of Vassar Alumnae and Alumni</h4>
<p>An inter-religious service drawing upon religious and humanist traditions to honor and celebrate the women and men of our reuning classes who have died since last reunions, as well as faculty, administrators, and staff who have died in the past year. This year’s speaker is Keri Bertino ’02, a writer and teacher in the MFA Writing Program at Columbia University’s School of the Arts. The Alumnae/i Choir will sing, directed by Gail Archer, College Organist.</p>
  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '1 p.m.',
    'Reunion adjourns/check-out'
  ); ?>
  <p>Please return room keys to Guest Services Coordinators in residence houses.</p>
  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '1 p.m.',
    'NYC charter bus departs from Main Circle',
    null,
    null,
    ['noContent' => true]
  ); ?>

<?php echo end_sec_regularContent(); ?>


<?php echo relatedTopics(); ?>

<?php include($project_paths['main_project_root'].'/alums/inc/pages/give/give.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/give/give-volunteer.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/calendar/calendar.php');?>
<?php echo end_sec_relatedTopics(); ?>


<?php echo site_footeralums(); ?>
