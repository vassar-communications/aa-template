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

<p class="intro-text">[other content goes here]</p>

<ul class="linked-list">
  <li><a href="#friday">Friday, June 2</a></li>
  <li><a href="#saturday">Saturday, June 3</a></li>
  <li><a href="#sunday">Sunday, June 4</a></li>
</ul>

  <h3 id="friday" class="schedule-item__heading">Friday, June 2</h3>


  <?php echo schedule_item_dropdown(
    '9 a.m.–10 p.m.',
    'Reunion Information Center is open',
    'Main Building Lobby',
    null,
    ['noContent' => true]
  ); ?>

  <?php echo schedule_item_dropdown(
    '9 a.m.–11 p.m.',
    'Residence houses open for check-in'
  ); ?>

    <p>Dorm rooms are available after 2 p.m.</p>

  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '3–4 p.m.',
    'College Lectures (See page XX for detailed descriptions.)'
  ); ?>
      <p><a href="LINK">Mindfulness, Resilience and Cognitive Health as We Age</a></p>
      <p><em>Rockefeller 300</em></p>
      <p><a href="LINK">Campus Capital Projects: What’s Happening and Upcoming?</a></p>
      <p><em>Rockefeller 200</em></p>
  <?php echo end_schedule_item_dropdown(); ?>

  <?php echo schedule_item_dropdown(
    '3–4 p.m.',
    'Tours'
  ); ?>

<h4>The <a href="https://www.vassar.edu/preserve">Vassar Preserve</a> and <a href="https://offices.vassar.edu/environmental-cooperative/">Environmental Cooperative</a></h4>
<p><em>Shuttles depart from Main Circle</em></p>

<h4>Walking Tour of the Vassar College Arboretum</h4>
<p><em>Meet at the entrance to Main in front of Main Circle.</em></p>

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
    'Class of 1983 - Welcome reception',
    'The Vassar Barns',
    null,
    ['noContent' => true]
  ); ?>

  <?php echo schedule_item_dropdown(
    '5–7 p.m.',
    'The Loeb All-Class Welcome Reception.'
  ); ?>
    <p>Refreshments served.</p>
  <?php echo end_schedule_item_dropdown(); ?>

  <?php echo schedule_item_dropdown(
    '5:30–6:45 p.m.',
    'Shabbat Services',
    'The Bayit (51 Collegeview Avenue, North Gate)',
    null,
    ['noContent' => true]
  ); ?>

  <?php echo schedule_item_dropdown(
    '6 p.m.',
    'Night Owls Rehearsal',
    'Rockefeller 200',
    null,
    ['noContent' => true]
  ); ?>

  <?php echo schedule_item_dropdown(
    '6 p.m.–7 p.m.',
    'Faculty Reception',
    'Chapel lawn tent',
    null,
    ['noContent' => true]
  ); ?>

  <?php echo schedule_item_dropdown(
    '7 p.m.–9 p.m.',
    'Picnic dinner'
  ); ?>
<p>Classes of 1953, 1958, 1963, 1968: 2nd floor Main Building</p>
<p>Classes of 1978, 1983, 1988, 1993, 1998, 2003, 2008, 2013, 2016, 2018: Noyes Tent</p>
  <?php echo end_schedule_item_dropdown(); ?>

  <?php echo schedule_item_dropdown(
    '9 p.m.–11 p.m.',
    'Hospitalities'
  ); ?>
<p>Classes of 1958, 1963, 1968: Jewett House</p>
<p>All classes: Noyes Circle tent</p>
  <?php echo end_schedule_item_dropdown(); ?>

  <?php echo schedule_item_dropdown(
    '9 p.m.–11 p.m.',
    'Hospitalities'
  ); ?>
<p>Classes of 1958, 1963, 1968: Jewett House</p>
<p>All classes: Noyes Circle tent</p>
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

<p>After the fireworks comes the afterglow! Join us for an uplifting celebration of sexual expression featuring readings, burlesque, and art from a multigenerational group of alumni performers. Coffee and dessert will be served.</p>

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
<p>Available at Gordon Commons (formerly ACDC). Pay at the door (credit/debit)</p>

<p><strong>Alumnae House Guests:</strong> Continental breakfast in the Dining Room</p>

<p><strong>Classes of 1958, 1963, and 1968:</strong> Coffee service, muffins, and fruit, Jewett multipurpose rooms</p>

  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '9 a.m.–10 a.m.',
    'President’s Hour',
    'The Chapel'
  ); ?>
  <p>Remarks by Vassar’s 11th President, Elizabeth Howe Bradley</p>
  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '9 a.m.–10 p.m.',
    'Reunion Information Center is open',
    'Main Building Lobby',
    null,
    ['noContent' => true]
  ); ?>


  <?php echo schedule_item_dropdown(
    '9 a.m.–11 p.m.',
    'Residence halls open for check-in',
    null,
    null,
    ['noContent' => true]
  ); ?>


  <?php echo schedule_item_dropdown(
    '10:15 a.m.',
    'Parade of Classes Line-up'
  ); ?>
  <p>Line Up for Parade of Classes (line starts with 1953 at the chapel along the path and road ending with 2018. Look for your class banner. along the parade route. Golf carts will be available.</p>
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
  <p>Alums from the 5th to the 75th reunion classes, guests, and children gather together to celebrate extraordinary volunteers and gifts, and our shared Vassar legacy. Remarks by Monica Vachher ’77, AAVC President, and Kat Mills Polys ’93, Vassar Fund Committee Chair.</p>
  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '12:30 p.m.–1:30 p.m.',
    'Class Luncheons'
  ); ?>
<p>Classes of 1953, and 1958: <em>The Aula</em></p>
		<p>Class of 1963 and 1968: <em>Main Building</em></p>
<p>Classes of 1978, 1983, 1988, 1993, 1998, 2003, 2008, 2013, 2016, 2018: <em>Gordon Commons</em></p>
  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '2–3 p.m.',
    'Lectures'
  ); ?>

  <h4>Is a Multiracial Inclusive Democracy Possible in the United States?</h4>
<p>Those who wrote the Constitution did not conceptualize “We the People” as multiracial and inclusive. Every student of history knows this. As the demographics, power and politics of the US change, we are seeing White Nationalism emerge from the shadows into being an openly championed segment of US politics and daily life. Are we at risk of becoming the next Apartheid state?</p>
<p><a href="https://www.linkedin.com/in/peggy-nagae-75ba402/">Peggy Nagae ’73</a>, Owner, Peggy Nagae Consulting</p>
<p><a href="https://www.vassar.edu/faculty/mwhiteduck">Mallory Whiteduck</a>, Assistant Professor of Political Science</p>
<p>TBD Professor(s) – <a href="https://www.vassar.edu/faculty/tmeans">Taneisha Means</a>, possibly Carlos Alamo</p>
<p><em>Rockefeller 300</em></p>

<h4>Walking Tour of the Vassar College Arboretum</h4>
<p>Led by Emeritus Professor of Biology Mark Schlessman.</p>
<p>Enjoy a leisurely walk, discover fascinating fun facts about trees, and learn about the increasing importance of campus trees for our efforts to be more sustainable and achieve carbon neutrality. Our itinerary will include visits to the reuning classes’ class trees. Please wear comfortable walking shoes and dress for the weather. Meet at the entrance to Main in front of Main Circle.</p>
  <?php echo end_schedule_item_dropdown(); ?>

  <?php echo schedule_item_dropdown(
    '2–4 p.m.',
    'Vassar Devils & Angels Ice Cream Tent',
    'Quad Lawn',
    null,
    ['noContent' => true]
  ); ?>

  <?php echo schedule_item_dropdown(
    '2–4 p.m.',
    'Family Activities on the Quad lawn'
  ); ?>
    <p>Bubble bus, bouncy castles</p>
		<p>A Day in the Park, The Wimpfheimer</p>
  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '3:30 p.m–4:30 p.m.',
    'Lecture: “The First Federal Summer Theatre: Training Ground for a ‘New Imaginative Theatre’”',
    'Rockefeller 200'
  ); ?>
  <p>In the summer of 1937, the First Federal Summer Theatre was convened at Vassar College by Hallie Flanagan, Director of the Federal Theatre Project. Join <a href="https://finearts.uky.edu/theatre-dance/faculty-staff/herman-d-farrell-iii">Herman Farrell ’83</a> for a lecture that examines the immediate impact and long-lasting legacy of this particular moment in the history of the Federal Theatre Project.</p>
  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '3:30 p.m–4:30 p.m.',
    'Tours'
  ); ?>
<h4>Pedagogy and Place: The Legacy of Vassar’s Landscape</h4>
<p>This walking tour will visit several key landscape and building sites that demonstrate the unusual manner in which Vassar’s campus structure and design have emerged. Its interactive relationship with the emerging curriculum created a unique story that has shaped the spirit of the College and its graduates for many years.</p>
<p><a href="https://www.arch.virginia.edu/people/karen-van-lengen">Karen Van Lengen ’73</a></p>
<p><em>Meet in front of Rockefeller Hall</em></p>

<h4>Campus Projects: View What’s New</h4>
<p>Join Vassar Project Manager <a href="https://www.linkedin.com/in/bryan-corrigan-ra-leed-ap-05630612/">Bryan Corrigan</a> for a walking tour of recent renovations and capital projects, including Main Building, the Bridge for Laboratory Sciences, Faculty Housing, Gordon Commons and the site for the Center for Admission and Career Education.</p>
<p><em>Meet in Main Circle</em></p>
  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '3 p.m–5 p.m.',
    'Affinity Receptions',
    'Main Building, 2nd floor'
  ); ?>
  <p>Department Open Houses (see page X for details)</p>
  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '3:30 p.m–5:30 p.m.',
    'Alumnae/i Author Meet and Greet',
    'Vassar College Store (aka, the Juliet), Raymond Avenue',
    null,
    ['noContent' => true]
  ); ?>


  <?php echo schedule_item_dropdown(
    '3:30 p.m–5 p.m.',
    'Annual Ferry House Mini-Reunion at Reunion',
    'Outdoor patio (weather permitting)'
  ); ?>
  <p>Calling all Ferries for an informal reception with light refreshments.</p>
  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '5:30 p.m–6:30 p.m.',
    '1861 Loyalty Society Reception (by invitation)',
    'Thompson Memorial Library lawn tent'
  ); ?>
  <p>	With gratitude for and in recognition of a vital group of donors who have included Vassar among their annual giving priorities.</p>
  <?php echo end_schedule_item_dropdown(); ?>


    <?php echo schedule_item_dropdown(
      '5:30 p.m',
      'Night Owls Concert',
      'Taylor 102',
      null,
      ['noContent' => true]
    ); ?>


    <?php echo schedule_item_dropdown(
      '6:30 p.m–9:30 p.m.',
      'Class Dinners',
      null
    ); ?>
      <p>1953 and 1958: Alumnae House Dining Room</p>
  		<p>1963: Reading Room 133, Thompson Library</p>
  		<p>1968: 1951 Reading Room, Thompson Library (2nd floor)</p>
  		<p>1978: Aula</p>
  		<p>1983: Sunset Lake Tent</p>
  		<p>1988: Bridge Building</p>
  		<p>1993: Blodgett Tent</p>
  		<p>1998: Cushing Tent</p>
  		<p>2003: President’s lawn Tent</p>
  		<p>2008: Chapel lawn Tent</p>
  		<p>2013: TownHouse Tent</p>
  		<p>2016 and 2018: Noyes Tent</p>
    <?php echo end_schedule_item_dropdown(); ?>


    <?php echo schedule_item_dropdown(
      '10 p.m–12 a.m.',
      'Hospitalities',
      null
    ); ?>
    <p>Classes of 1958, 1963, 1968, Jewett House</p>
    <p>Classes of 1973, Davison House</p>
    <?php echo end_schedule_item_dropdown(); ?>


      <?php echo schedule_item_dropdown(
        '10 p.m–1 a.m.',
        'All Class After Party on Noyes Circle',
        null
      ); ?>
      <p>Cash bar, DJ, and dancing to a multigenerational playlist.</p>
      <?php echo end_schedule_item_dropdown(); ?>


  <h3 id="sunday" class="schedule-item__heading">Sunday, June 4</h3>


  <?php echo schedule_item_dropdown(
    '7 a.m–12 p.m.',
    'Breakfast/Brunch',
    'Gordon Commons'
  ); ?>
  <p>Pay at the door (credit/debit)</p>
		<p>Alumnae House Guests: Continental breakfast in the Dining Room</p>
  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '8 a.m.–1 p.m',
    'Reunion Information Center is open',
    'Main Building Lobby',
    null,
    ['noContent' => true]
  ); ?>


  <?php echo schedule_item_dropdown(
    '8:45 a.m.',
    'Choir Rehearsal',
    'The Chapel',
    null,
    ['noContent' => true]
  ); ?>


  <?php echo schedule_item_dropdown(
    '9 a.m–1 p.m.',
    'Residence halls open for check out'
  ); ?>
  <p>Please return room keys to Guest Services Coordinators in residence halls.</p>
  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '9 a.m',
    'Fun Run with Cross-Country Coach Ron Stonitsch'
  ); ?>
  <p>Meet in front of the Athletic and Fitness Center</p>
  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '10 a.m–11 a.m.',
    'Service of Remembrance',
    'Chapel'
  ); ?>
  <h4>An Inter-Religious Memorial Service Celebrating the Lives of Vassar Alumnae and Alumni</h4>
<p>An inter-religious service drawing upon religious and humanist traditions to honor and celebrate the women and men of our reuning classes who have died since last reunions, as well as faculty, administrators, and staff who have died in the past year. This year’s speaker is Keri Bertino ’02, a writer and teacher in the MFA Writing Program at Columbia University’s School of the Arts. The Alumnae/i Choir will sing, directed by Gail Archer, College Organist.</p>
  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '1 p.m',
    'Reunion Adjourns/Check-Out'
  ); ?>
  <p>Please return room keys to Guest Services Coordinators in residence halls.</p>
  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '1 p.m',
    'NYC charter bus departs from Main Circle.',
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
