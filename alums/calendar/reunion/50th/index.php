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

<p class="intro-text">50th Reunion Schedule</p>
<p>Use one of these links to go directly to the activities for that day:</p>
<ul class="linked-list">
  <li><a href="#thursday">Thursday, June 1</a></li>
  <li><a href="#friday">Friday, June 2</a></li>
  <li><a href="#saturday">Saturday, June 3</a></li>
  <li><a href="#sunday">Sunday, June 4</a></li>
</ul>


  <h3 id="thursday" class="schedule-item__heading">Thursday, June 1</h3>

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
    'Meet in front of Davison House.',
 ); ?>
  <?php echo end_schedule_item_dropdown(); ?>

  <?php echo schedule_item_dropdown(
    '6 p.m.',
    'Cocktail reception',
    'Alumnae House Terrace and Lobby',
  ); ?>
  <?php echo end_schedule_item_dropdown(); ?>

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
    '9 a.m.–10 p.m.',
    'Reunion Information Center is open',
    'Main Building Lobby'
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
      <p><strong>Location:</strong> Rockefeller 300 (also available virtually)</p>
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
    '3–4 p.m.',
    'Labyrinth Walk and Pratt House Open House',
    'Pratt House'
  ); ?>

    <p>Come experience the new labyrinth on campus and get a tour of Pratt House, the new hub for Religious and Spiritual Life and Contemplative Practices (RSLCP) at the College. The labyrinth tour and introduction to walking meditation will be hosted by Professor Carolyn Palmer (Department of Psychology), and the Open House will be hosted by Saba Ali, Advisor for Muslim Student Life; Rabbi Bryan Mann, Rachlin Director for Jewish Student Life and Assistant Director, RSLCP; and Rev. Sam Speers, Associate Dean of the College for RSLCP. Refreshments will be served. Please note, the labyrinth at Pratt is one of two labyrinths now at the college; we also encourage you to check out the Willow Grove Labyrinth on the Vassar Farm.</p>

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
    '6 p.m.',
    'Night Owls rehearsal',
    'Rockefeller 200'
  ); ?>
  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '6–7 p.m.',
    'Faculty reception',
    'President’s lawn tent'
  ); ?>
  <p><a href="https://connect.vassar.edu/s/1654/22/events.aspx?sid=1654&gid=2&pgid=6710&cid=11232&fid=11231">See the list of faculty attendees</a></p>
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
  <p>After the fireworks comes the afterglow! Join us for a warm, welcoming erotic salon featuring a sultry dancefloor, sweet treats and co-creative erotic art stations. Please contact <a href="mailto:chrismaxwellrose@gmail.com">Chris Maxwell Rose ’03</a> with any questions or to participate. <em>Coffee and dessert will be served</em>.</p>
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
    '7:30–9 a.m.',
    'Continental breakfast (included)',
    'Davison Tent'
  ); ?>
  <?php echo end_schedule_item_dropdown(); ?>

  <?php echo schedule_item_dropdown(
    '7:30–9 a.m.',
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
    '10 a.m.',
    'Parade of Classes Line-Up'
  ); ?>
  <p>Line up for Parade of Classes (line starts with 1953 at the chapel along the path and road, ending with 2018). Look for your class banner along the parade route. Golf carts will be available.</p>
  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '10:30 a.m.',
    'Parade of Classes'
  ); ?>
  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '11 a.m.-12 p.m.',
    'Celebrate Vassar',
    'Noyes Circle Tent'
  ); ?>
  <p>Alums from the 5th to the 70th reunion classes, guests, and children gather together to celebrate extraordinary volunteers, gifts, and our shared Vassar legacy. Remarks by James Estrada ’13, AAVC Board Member, President Bradley, Monica Vachher ’77, AAVC President, and Kat Mills Polys ’93, Vassar Fund Committee Chair.</p>
  <?php echo end_schedule_item_dropdown(); ?>



  <?php echo schedule_item_dropdown(
    '12–1 p.m.',
    'Lunch and Class Meeting',
    'Bridge Building'
  ); ?>
  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '12:45 p.m.',
    'President Bradley arrives to congratulate the 50th Reunion Class on their milestone reunion',
    null,
    null,
    ['noContent' => true]
  ); ?>

  <?php echo schedule_item_dropdown(
    '1:15 p.m.',
    'Class memorial service following lunch',
    'Class tree – North of Main building across from the Aula parking lot'
  ); ?>
  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '2–3 p.m.',
    'Lectures and panels'
  ); ?>

  <h4><a href="../lectures/#is-a-multiracial-inclusive-democracy-possible-in-the-united-states">Is a Multiracial Inclusive Democracy Possible in the United States?</a></h4>
<p><strong>Location:</strong> Rockefeller 300 (also available virtually)</p>

  <h4><a href="../lectures/#financial-wellness-for-young-professionals">Financial Wellness for Young Professionals</a></h4>
<p><strong>Location:</strong> Rockefeller 200</p>
  <?php echo end_schedule_item_dropdown(); ?>



  <?php echo schedule_item_dropdown(
    '2–3 p.m.',
    'Tour'
  ); ?>

<h4><a href="../lectures/#walking-tour-of-the-vassar-college-arboretum-2">Walking Tour of the Vassar College Arboretum</a></h4>
<p><strong>Location:</strong> Meet at the entrance to Main in front of Main Circle.</p>
  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '2–3 p.m.',
    'Frances Lehman Loeb Art Center Curatorial Tours',
    'The Loeb'
  ); ?>
  <p><strong>Tour of <em>Body Matters</em>, with John Murphy, The Phillip and Lynn Straus Curator of Prints and Drawings, and Ian Shelley ’22</strong></p>

<p>How would Vassar students curate an exhibition at the Loeb? How would they perceive and remix the idea of a permanent art collection? Our newest temporary exhibition, organized by six Vassar students, attempts to answer these very questions. Curator John Murphy and Ian Shelley ’22 will discuss <em>Body Matters</em>, a collaborative curatorial project that broadly explores how bodies move through art, space, and time in our galleries.</p>

<p><strong>Tour of <em>Hairy Leg</em>, with Jessica Brier, Curator of Photography</strong></p>

<p>Jessica Brier, Curator of Photography, will offer a tour of the exhibition <em>The Hairy Leg Or What To Do Wrong</em>, a collaboration with Judy Linn in honor of her retirement from teaching photography at Vassar College for almost 25 years. Linn was invited to select photographs from the Loeb Art Center’s permanent collection, including works by Diane Arbus, Sid Grossman, Helen Levitt, Barbara Morgan, and many others. The exhibition tells a story of photography as a tool for breaking its own rules.</p>
    <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '2–4 p.m.',
    'Vassar Devils & Angels Ice Cream Tent',
    'Quad Lawn'
  ); ?>
  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '2–4 p.m.',
    'Frances Lehman Loeb Art Center',
    'Hildegard Krause Baker, class of 1911, Sculpture Garden'
  ); ?>
    <p>Enjoy afternoon iced tea and refreshments.</p>
  <?php echo end_schedule_item_dropdown(); ?>

  <?php echo schedule_item_dropdown(
    '2:30–4:30 p.m.',
    'Alum author meet and greet',
    'Vassar College Store (aka, the Juliet), Raymond Avenue'
  ); ?>
    <?php echo end_schedule_item_dropdown(); ?>

  <?php echo schedule_item_dropdown(
    '3–4 p.m.',
    'Frances Lehman Loeb Art Center Curatorial Tours',
    'The Loeb'
  ); ?>
  <p><strong>Tour of <em>Body Matters</em>, with John Murphy, The Phillip and Lynn Straus Curator of Prints and Drawings, and Ian Shelley ’22</strong></p>

<p>How would Vassar students curate an exhibition at the Loeb? How would they perceive and remix the idea of a permanent art collection? Our newest temporary exhibition, organized by six Vassar students, attempts to answer these very questions. Curator John Murphy and Ian Shelley ’22 will discuss <em>Body Matters</em>, a collaborative curatorial project that broadly explores how bodies move through art, space, and time in our galleries.</p>

<p><strong>Tour of <em>Hairy Leg</em>, with Jessica Brier, Curator of Photography</strong></p>

<p>Jessica Brier, Curator of Photography, will offer a tour of the exhibition <em>The Hairy Leg Or What To Do Wrong</em>, a collaboration with Judy Linn in honor of her retirement from teaching photography at Vassar College for almost 25 years. Linn was invited to select photographs from the Loeb Art Center’s permanent collection, including works by Diane Arbus, Sid Grossman, Helen Levitt, Barbara Morgan, and many others. The exhibition tells a story of photography as a tool for breaking its own rules.</p>
    <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '3–5 p.m.',
    'Affinity receptions',
    'Main Building, 2nd floor and President’s lawn Tent'
  ); ?>
  <p>Join your fellow alums with whom you share identities and affiliations at the affinity receptions. Gatherings will include alum-athletes (President’s lawn Tent) and African American, International, Latinx, LGBTQIA+, Transitions/first-generation, and WVKR.</p>
  <?php echo end_schedule_item_dropdown(); ?>

  <?php echo schedule_item_dropdown(
    '3–5 p.m.',
    'Department open houses'
  ); ?>
  <p><strong>Education:</strong> Maria Mitchell Observatory</p>
  <p><strong>History:</strong> Swift Hall</p>
  <?php echo end_schedule_item_dropdown(); ?>

  <?php echo schedule_item_dropdown(
    '3:30–4:30 p.m.',
    'Lectures and panels'
  ); ?>
  <h4><a href="../lectures/#the-promise-and-peril-of-social-media">The Promise and Peril of Social Media</a></h4>
<p><strong>Location:</strong> Rockefeller 300 (also available virtually)</p>

  <h4><a href="../lectures/#hallie-flanagan-and-the-1937-federal-summer-theater-conference-at-vassar">Hallie Flanagan and the 1937 Federal Summer Theater Conference at Vassar</a></h4>
<p><strong>Location:</strong> Rockefeller 200</p>
  <?php echo end_schedule_item_dropdown(); ?>

  <?php echo schedule_item_dropdown(
    '3:30–4:30 p.m.',
    'Tours'
  ); ?>
<h4><a href="../lectures/#pedagogy-and-place-the-legacy-of-vassars-landscape">Pedagogy and Place: The Legacy of Vassar’s Landscape</a></h4>
<p><strong>Location:</strong> Meet in front of Rockefeller Hall</p>

<h4><a href="../lectures/#campus-projects-view-whats-new">Campus Projects: View What’s New</a></h4>
<p><strong>Location:</strong> Meet at the entrance to Main in front of Main Circle.</p>


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
      '7:30 a.m.–12 p.m.',
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
    <p>An inter-religious service drawing upon religious and humanist traditions to honor and celebrate the women and men of our reuning classes who have died since last reunions, as well as faculty, administrators, and staff who have died in the past year. Rabbi Susan Berman Stone ’78, Director of Spiritual Care at Hillcrest Hospital in Cleveland and former Director of Religious Activities and Chaplaincy Services at Vassar College, will give the memorial address. The Alumnae/i Choir will sing, directed by Gail Archer, College Organist.</p>
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
