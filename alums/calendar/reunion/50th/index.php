<?php
/* */
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */


$page_info = '{
  "page_title":"50th Reunion Class Schedule",
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




<?php echo sec_regularContent(
  null,
  'pt-0'
); ?>

<p class="intro-text">2023 50th Reunion Schedule</p>
<p>Use one of these links to go directly to the activities for that day:</p>
<ul class="linked-list">
  <li><a href="#thursday">Thursday, June 1</a></li>
  <li><a href="#friday">Friday, June 2</a></li>
  <li><a href="#saturday">Saturday, June 3</a></li>
  <li><a href="#sunday">Sunday, June 4</a></li>
</ul>


  <h3 id="thursday" class="schedule-item__heading">Thursday, June 1</h3>

  <?php echo schedule_item_dropdown(
    '9 a.m.–12 p.m.',
    'Set up MPR and Davison lobby',
    null,
    null,
    ['noContent' => true]
  ); ?>

  <?php echo schedule_item_dropdown(
    '2 p.m.',
    'Registration opens in Davison lobby',
    'Davison lobby'
  ); ?>
    <p>Light refreshments available in the parlor (lemonade or iced tea, water,
cookies).</p>
  <?php echo end_schedule_item_dropdown(); ?>

  <?php echo schedule_item_dropdown(
    '4 p.m.',
    'Informal campus walk led by current students and their perspective of
campus.',
    null,
    null,
    ['noContent' => true]
  ); ?>

  <?php echo schedule_item_dropdown(
    '6 p.m.',
    'Cocktail reception',
    'Alumnae House Terrace and Lobby',
  ); ?>
  <?php echo end_schedule_item_dropdown(); ?>

  <?php echo schedule_item_dropdown(
    '6:30 p.m.',
    'President Bradley arrives to welcome the 50th Reunion class',
    null,
    null,
    ['noContent' => true]
  ); ?>

  <?php echo schedule_item_dropdown(
    '7 p.m.',
    'Buffet dinner',
    'Alumnae House Dining and Living Room',
  ); ?>
  <?php echo end_schedule_item_dropdown(); ?>

  <?php echo schedule_item_dropdown(
    '9 p.m.',
    'Coffee and conversation following dinner',
    null,
    null,
    ['noContent' => true]
  ); ?>

  <?php echo schedule_item_dropdown(
    '10 p.m.',
    'Hospitality',
    'Davison multipurpose room and Davison Parlor',
  ); ?>
  <p>Demitasse in the Davison Parlor</p>
  <?php echo end_schedule_item_dropdown(); ?>


  <h3 id="friday" class="schedule-item__heading">Friday, June 2</h3>

  <?php echo schedule_item_dropdown(
    '8–10 a.m.',
    'Continental breakfast',
    'Davison Tent',
  ); ?>
  <?php echo end_schedule_item_dropdown(); ?>

  <?php echo schedule_item_dropdown(
    '9 a.m.',
    '“What I’ve Been Up to for the Last Half a Century”',
    'Davison Tent',
  ); ?>
  <p>Roundtable discussions featuring classmates.</p>
  <?php echo end_schedule_item_dropdown(); ?>

  <?php echo schedule_item_dropdown(
    '11 a.m.',
    'Presentation and Tour by James Russiello ’06, NYC Landmarks Preservation
Commission staff',
    'Rockefeller 200',
  ); ?>
  <p>The Historic Campus of Vassar College features the founding of Vassar and its early buildings in the context of the architectural development in the U.S. Followed by a walking tour highlighting the buildings in the Quad, Main Building, Ferry House, and Avery (now known as the Vogelstein Center for Drama and Film).</p>
  <?php echo end_schedule_item_dropdown(); ?>

  <?php echo schedule_item_dropdown(
    '12 p.m.',
    'Off site lunch at the Culinary Institute of America—reservations required',
    null
  ); ?>
  <p>Off site lunch at the Culinary Institute of America at the Bocuse Room
followed by a tour of the CIA and then a stop at the Walkway over the Hudson before heading back to campus. <strong>Advance reservations required</strong>.</p>
  <?php echo end_schedule_item_dropdown(); ?>

  <?php echo schedule_item_dropdown(
    '12:30 p.m.',
    'Picnic lunch',
    'Sunset Lake Tent'
  ); ?>
  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '3–4 p.m.',
    'Lectures and panels'
  ); ?>
      <h4><a href="../lectures/#ageless-aging-resilience-cognitive-health-and-mindfulness">Ageless Aging: Resilience, Cognitive Health, and Mindfulness</a></h4>
      <p><strong>Location:</strong> Rockefeller 300</p>
      <h4><a href="../lectures/#campus-capital-projects-whats-happening-and-upcoming">Campus Capital Projects: What’s Happening and Upcoming?</a></h4>
      <p><strong>Location:</strong> Rockefeller 200</p>
  <?php echo end_schedule_item_dropdown(); ?>

  <?php echo schedule_item_dropdown(
    '3–4 p.m.',
    'Tours'
  ); ?>
<h4><a href="../lectures/#vassar-preserve-environmental-cooperative">The Vassar Preserve and Environmental Cooperative</a></h4>

<p><strong>Location:</strong> Shuttles depart from Main Circle.</p>

<h4><a href="../lectures/#walking-tour-of-the-vassar-college-arboretum">Walking Tour of the Vassar College Arboretum</a></h4>
<p><strong>Location:</strong> Meet at the entrance to Main in front of Main Circle.</p>
  <?php echo end_schedule_item_dropdown(); ?>

  <?php echo schedule_item_dropdown(
    '5–6 p.m.',
    'Matthew Vassar Legacy Society Reception (by invitation)',
    'The President’s House Terrace'
  ); ?>
  <p>With gratitude for and in recognition of those who have provided for the College’s future through a planned gift or estate commitment.</p>
  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '5-7 p.m.',
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
    '6–7 p.m.',
    'Faculty reception',
    'President’s lawn tent'
  ); ?>
  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '6 p.m.',
    'Night Owls rehearsal',
    'Rockefeller 200'
  ); ?>
  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '6–9 p.m.',
    'Co-Class President Doris Schumacher McMorrow’s Traditional Dinner, Drinks and Dancing',
    'Gordon Commons, 2nd floor (UpCDC)'
  ); ?>
  <p>With music provided by DJ Steven Colvin and Company</p>
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
    'Hospitality',
    'Davison multipurpose room'
  ); ?>
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
    'Continental breakfast (included)',
    'Davison Tent'
  ); ?>
  <?php echo end_schedule_item_dropdown(); ?>

  <?php echo schedule_item_dropdown(
    '7–9 a.m.',
    'Breakfast: Gordon Commons (formerly ACDC)',
    'Gordon Commons'
  ); ?>
  <p>Pay at the door (credit/debit).</p>
  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '9 a.m.–10 p.m.',
    'Reunion Information Center is open',
    'Main Building Lobby'
  ); ?>
  <?php echo end_schedule_item_dropdown(); ?>


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
    'Parade of Classes'
  ); ?>
  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '11:15-12:15 a.m.',
    'Celebrate Vassar',
    'Noyes Circle Tent'
  ); ?>
  <p>Alums from the 5th to the 75th reunion classes, guests, and children gather together to celebrate extraordinary volunteers, gifts, and our shared Vassar legacy. Remarks by Monica Vachher ’77, AAVC President, and Kat Mills Polys ’93, Vassar Fund Committee Chair.</p>
  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '12:30–1:30 p.m.',
    'Lunch and Class Meeting',
    'Bridge Building'
  ); ?>
  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '2–3 p.m.',
    'Lectures and panels'
  ); ?>

  <h4><a href="../lectures/#is-a-multiracial-inclusive-democracy-possible-in-the-united-states">Is a Multiracial Inclusive Democracy Possible in the United States?</a></h4>
<p><strong>Location:</strong> Rockefeller 300</p>

  <h4><a href="../lectures/#financial-wellness-for-young-professionals">Financial Wellness for Young Professionals</a></h4>
<p><strong>Location:</strong> Rockefeller 200</p>
  <?php echo end_schedule_item_dropdown(); ?>

  <?php echo schedule_item_dropdown(
    '2–3 p.m.',
    'Tour'
  ); ?>

<h4><a href="../lectures/#walking-tour-of-the-vassar-college-arboretum">Walking Tour of the Vassar College Arboretum</a></h4>
<p><strong>Location:</strong> Meet at the entrance to Main in front of Main Circle.</p>
  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '2–4 p.m.',
    'Vassar Devils & Angels Ice Cream Tent',
    'Quad Lawn'
  ); ?>
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
  <h4><a href="../lectures/#the-promise-and-peril-of-social-media">The Promise and Peril of Social Media</a></h4>
<p><strong>Location:</strong> Rockefeller 300</p>

  <h4><a href="../lectures/#hallie-flanagan-and-the-1937-federal-summer-theater-conference-at-vassar">Hallie Flanagan and the 1937 Federal Summer Theater Conference at Vassar</a></h4>
<p><strong>Location:</strong> Rockefeller 200</p>
  <?php echo end_schedule_item_dropdown(); ?>

  <?php echo schedule_item_dropdown(
    '3:30–4:30 p.m.',
    'Tours'
  ); ?>
<h4><a href="../lectures/#pedagogy-and-place-the-legacy-of-vassars-landscape">Pedagogy and Place: The Legacy of Vassar’s Landscape</a></h4>
<p><strong>Location:</strong> Meet in front of Rockefeller Hall</p>
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
    'Night Owls Concert',
    'Taylor 102'
  ); ?>
  <?php echo end_schedule_item_dropdown(); ?>

  <?php echo schedule_item_dropdown(
    '5:30–6:30 p.m.',
    '1861 Loyalty Society Reception (by invitation)',
    'Thompson Memorial Library lawn tent'
  ); ?>
  <p>With gratitude for and in recognition of a vital group of donors who have included Vassar among their annual giving priorities.</p>
  <?php echo end_schedule_item_dropdown(); ?>

  <?php echo schedule_item_dropdown(
    '6:30 p.m.',
    'Cocktail reception',
    'Rose Parlor, Main Building'
  ); ?>
  <?php echo end_schedule_item_dropdown(); ?>

  <?php echo schedule_item_dropdown(
    '7 p.m.',
    'Dinner',
    'Villard Room, Main Building'
  ); ?>
  <?php echo end_schedule_item_dropdown(); ?>

  <?php echo schedule_item_dropdown(
    '10 p.m.–12 a.m.',
    'Hospitality',
    'Davison multipurpose room'
  ); ?>
  <?php echo end_schedule_item_dropdown(); ?>

  <?php echo schedule_item_dropdown(
    '10 p.m.–1 a.m.',
    'All-class after party on Noyes Circle'
  ); ?>
  <p>Cash bar, DJ, and dancing to a multigenerational playlist.</p>
  <?php echo end_schedule_item_dropdown(); ?>


  <h3 id="sunday" class="schedule-item__heading">Sunday, June 4</h3>

    <?php echo schedule_item_dropdown(
      '7 a.m.–12 p.m.',
      'Breakfast/brunch',
      'Gordon Commons'
    ); ?>
    <p>Pay at the door (credit/debit).</p>
    <?php echo end_schedule_item_dropdown(); ?>

    <?php echo schedule_item_dropdown(
      '8 a.m.–10 a.m.',
      'Farewell continental breakfast (included)',
      'Davison Tent'
    ); ?>
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
      '9 a.m.',
      'Fun Run with Cross-Country Coach Ron Stonitsch',
      'Meet in front of the Athletic and Fitness Center'
    ); ?>
    <?php echo end_schedule_item_dropdown(); ?>

    <?php echo schedule_item_dropdown(
      '10–11 a.m.',
      'Service of Remembrance',
      'The Chapel'
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
      'NYC charter bus departs from Main Circle'
    ); ?>
    <?php echo end_schedule_item_dropdown(); ?>


<?php echo end_sec_regularContent(); ?>


<?php echo relatedTopics(); ?>

<?php include($project_paths['main_project_root'].'/alums/inc/pages/give/give.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/give/give-volunteer.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/calendar/calendar.php');?>
<?php echo end_sec_relatedTopics(); ?>


<?php echo site_footeralums(); ?>
