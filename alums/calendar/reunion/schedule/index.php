<?php
/* */
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */


$page_info = '{
  "page_title":"General Reunion Preliminary Class Schedule",
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

<p class="intro-text">Preliminary Reunion General Schedule</p>
<p>Items with an <span style="display: inline" class="schedule-item__icon fa-solid fa-circle-info" title="“i” in a solid red circle"></span>  are links to additional information.</p>
<p>Use one of these links to go directly to the activities for that day:</p>

<ul class="linked-list">
  <li><a href="#friday">Friday, May 31</a></li>
  <li><a href="#saturday">Saturday, June 1</a></li>
  <li><a href="#sunday">Sunday, June 2</a></li>
</ul>

  <h3 id="friday" class="schedule-item__heading">Friday, May 31</h3>


  <?php echo schedule_item_dropdown(
    '9:00 a.m.–10:00 p.m.',
    'Reunion Information Center is open',
    'Main Building Lobby'
  ); ?>
   <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '9:00 a.m.–11:00 p.m.',
    'Residence halls open for check-in'
  ); ?>
    <p>Dorm rooms are available after 2 p.m. <a href="../#flush-headingTwo">Find your Dorm Headquarters</a>.</p>

  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '12:00 p.m.',
    'Jummah Service',
    'Pratt House'
  ); ?>
    <p>Experience tranquility and spiritual connection by joining Saba Ali, Advisor for 		Muslim Student Life, for the Jummah prayer service. An adjacent wudu station provides the perfect setting for this sacred gathering.</p>

  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '2:00–3:00 p.m.',
    'College-sponsored Lectures and Tours',
  ); ?>
  
      <h4><a href="../lectures/#honoring-childhood-for-96-years-at-the-wimpfheimer-nursery-school">Honoring Childhood for 96 years at the Wimpfheimer Nursery School</a></h4>
      <p><strong>Location:</strong> Rockefeller 200</p>

      <h4><a href="../lectures/#capital-project-planning-past-present-and-future">Capital Project Planning: Past, Present and Future</a></h4>
      <p><strong>Location:</strong> Rockefeller 300</p>

      <h4><a href="../lectures/#vassar-preserve-environmental-cooperative">Tour: The Environmental Cooperative and Vassar Preserve</a></h4>
      <p><strong>Location:</strong> Shuttles depart from Main Circle</p>

  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '3:30–4:30 p.m.',
    'College-sponsored Lectures and Tours',
  ); ?>

      <h4><a href="../lectures/#the-road-to-an-ai-future-promises-and-pitfalls">The Road to an AI Future: Promises and Pitfalls</a></h4>
      <p><strong>Location:</strong> New England Building 105</p>

      <h4><a href="../lectures/#sounds-and-science-grants-in-action-at-vassar">Sounds and Science: Grants in Action at Vassar</a></h4>
      <p><strong>Location:</strong> Meet at the Bridge for Laboratory Sciences Atrium (Chapel side)</p>

      <h4><a href="../lectures/#michael-gross-74-flight-of-the-wasp-the-rise-fall-and-future-of-americas-original-ruling-class">Michael Gross ’74 - Flight of the Wasp: The Rise, Fall, and Future of America’s Original Ruling Class</a></h4>
      <p><strong>Location:</strong> New England Building 206</p>

    <h4><a href="../lectures/#walking-tour-of-the-vassar-college-arboretum">Tour: Walking Tour of the Vassar College Arboretum</a></h4>
    <p><strong>Location:</strong> Meet at the entrance to Main in front of Main Circle.</p>

  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '4:00–5:00 p.m.',
    'Labyrinth Walk and Pratt House Open House',
    'Pratt House'
  ); ?>
  
  <p>Come experience the new labyrinth on campus and get a tour of Pratt House, the new hub for Religious and Spiritual Life and Contemplative Practices (RSLCP) at the College.</p>
<p>The labyrinth tour will be hosted by Professor Carolyn Palmer (Department of Psychology) and Katilau Mbindyo '14, an alumna who advocated for a permanent labyrinth at Vassar throughout her student years.</p>
<p>The Open House will be hosted by Saba Ali, Advisor for Muslim Student Life; Rabbi Bryan Mann, Rachlin Director for Jewish Student Life and Assistant Director, RSLCP; and Rev. Sam Speers, Associate Dean of the College for RSLCP. Refreshments will be served.</p>

   <?php echo end_schedule_item_dropdown(); ?>
  
  
   <?php echo schedule_item_dropdown(
    '5:00 p.m.',
    'Class of 1969 Reception and Dinner',
    'Shakespeare Garden'
  ); ?>
  
  <p>Followed by dinner at the Sunset Lake tent</p>

   <?php echo end_schedule_item_dropdown(); ?>
 
   
  <?php echo schedule_item_dropdown(
    '5:00 p.m.',
    'Night Owls rehearsal (tentative)',
    'Rockefeller 200'
  ); ?>
   <?php echo end_schedule_item_dropdown(); ?>

  
    <?php echo schedule_item_dropdown(
    '5:00 p.m.',
    'Class of 1964 presents: Bricks, Mortar, and More',
    'Rockefeller 300'
  ); ?>
  
  <p>Did you know that Main was the largest building in the country when it was completed in 1865? Or that Marcel Breuer’s masterful Ferry House was tucked behind Main so that its mid century modern design would not offend the eyes of traditionalists? Join Margaret McCurry ’64, FAIA, and Virginia Gerst ’64, veteran architecture docent, to learn about the cultural history of Vassar as seen through its architecture in this presentation, updated from a talk originally given at the Class of 64’s 50th Reunion.</p>

   <?php echo end_schedule_item_dropdown(); ?>


   <?php echo schedule_item_dropdown(
    '5:00 p.m.',
    'A concert featuring classical and jazz from Vassar music faculty',
    'Skinner Hall'
  ); ?>
  
  <p>Featuring Mary Nessinger (mezzo-soprano), Tom Sauer (piano), and James Osborn (trumpet) with Peter Tomlinson (piano) and Lou Pappas (bass, emeritus). All are welcome.</p>

   <?php echo end_schedule_item_dropdown(); ?>
 
 
  <?php echo schedule_item_dropdown(
    '5:30–6:45 p.m.',
    'Shabbat Service',
    'The Bayit (51 Collegeview Avenue, North Gate)'
  ); ?>
   <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '6:00–7:00 p.m.',
    'Faculty Reception',
    'Fergusson Quadrangle Tent, Vogelstein Center for Drama and Film'
  ); ?>
<!--  <p><a href="https://connect.vassar.edu/s/1654/22/events.aspx?sid=1654&gid=2&pgid=6710&cid=11232&fid=11231">See the list of faculty attendees</a></p>-->
   <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '7:00–9:30 p.m.',
    'Picnic Dinner'
  ); ?>
<p><strong>Classes of 1948/49, 1954, 1959, 1964:</strong> 2nd floor Main Building</p>
<p><strong>Classes of 1979, 1984, 1989, 1994, 1999, 2004, 2009, 2014, 2019:</strong> Noyes Circle Tent</p>
  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '9:30 p.m.',
    'Fireworks over Sunset Lake',
    null,
    null,
    ['noContent' => true]
  ); ?>

  <?php echo schedule_item_dropdown(
    '9:30–11:30 p.m.',
    'Hospitalities and Line Dancing'
  ); ?>
<p><strong>Classes of 1959, 1964, 1969:</strong> Jewett House</p>
<p><strong>All classes:</strong> Noyes Circle Tent</p>
  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '10:00 p.m.–midnight',
    'The Mug',
    'Lower Level, College Center'
  ); ?>
  <p>Join us at the Mug for music from the 80’s and 90’s. Don’t forget to wait in line. Everyone 21 and older are welcome. Cash bar, DJ, and dancing.</p>
  <?php echo end_schedule_item_dropdown(); ?>
  
  <?php echo schedule_item_dropdown(
    '10:00 p.m.',
    'Movie Night: <em>The Group</em>',
    'Rosenwald Theater, Vogelstein Center for Drama and Film'
  ); ?>

  <p>1966 American ensemble film directed by Sidney Lumet based on the 1963 novel of the same name by Mary McCarthy about the lives of a group of eight female graduates from Vassar from 1933 to 1940.</p>
<p>MATURE AUDIENCES ONLY</p>
<p><em>Eight young women from the Vassar College class of 1933 rush out into the world to find exciting lives, but discover nothing is quite as they dreamed. Rather than blazing trails in art, science, and literature, the friends are each variously burdened with disappointing relationships, children, aging parents, and unemployment. Kay Strong (Joanna Pettet), the center of the group, gradually loses faith in the promise of their lives and, as war approaches, becomes unhinged</em>.</p>

  <?php echo end_schedule_item_dropdown(); ?>


  <h3 id="saturday" class="schedule-item__heading">Saturday, June 1</h3>

  <?php echo schedule_item_dropdown(
    '7:30–9:00 a.m.',
    'Breakfast'
  ); ?>
<p>Available at Gordon Commons (formerly ACDC)</p>

<p><strong>Alumnae House Guests:</strong> Continental breakfast in the Dining Room</p>

  <?php echo end_schedule_item_dropdown(); ?>

  <?php echo schedule_item_dropdown(
    '8:00–10:00 a.m.',
    'Breakfast for the Classes of 1959, 1964, and 1969',
    'Jewett Multipurpose Rooms'
  ); ?>
  
<p>Coffee service, muffins, and fruit.</p>

  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '9:00 a.m.–10:00 p.m.',
    'Reunion Information Center is open',
    'Main Building Lobby'
  ); ?>
   <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '9:00 a.m.–11:00 p.m.',
    'Residence halls open for check-in'
  ); ?>

    <p><a href="https://www.vassar.edu/alums/calendar/reunion#flush-headingOne">Find your Dorm Headquarters</a>.</p>

  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '9:30 a.m.',
    'Hour with the President',
    'The Chapel'
  ); ?>
 <p>Remarks by Vassar’s 11th President, Elizabeth Howe Bradley</p>
  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '10:30 a.m.',
    'Parade of Classes Line-up'
  ); ?>
  <p>Line up for Parade of Classes (line starts with 1954 at the chapel along the path and road, ending with 2019). Look for your class banner along the parade route. Golf carts will be available.</p>
  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '10:45 a.m.',
    'Parade of Classes',
    null,
    null,
    ['noContent' => true]
  ); ?>


  <?php echo schedule_item_dropdown(
    '11:30 a.m.',
    'Celebrate Vassar',
    'Noyes Circle Tent'
  ); ?>
  <p>Alums from the 5th to the 75th reunion classes, guests, and children gather together to celebrate extraordinary volunteers and gifts, and our shared Vassar legacy. Remarks by Monica Vachher ’77, AAVC President, and Kat Mills Polys ’93, Vassar Fund Committee Chair.</p>
  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '12:30–2:30 p.m.',
    'Class Luncheons',
    null
  ); ?>
<p><strong>Classes of 1948/49, 1954, 1959, 1964:</strong> Main Building, Villard Room</p>
<p><strong>Class of 1969:</strong> Sunset Lake Tent</p>
<p><strong>Classes of 1979, 1984, 1989, 1994, 1999, 2004, 2009, 2014, 2019:</strong> Gordon Commons</p>
  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '12:30 p.m.',
    'AAVC Awards luncheon (invitation only)',
    'Alumnae House Dining Room'
  ); ?>
    <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '1:30 p.m.',
    'Class of 1989 Memorial Service',
    '1989 Class tree, Ferry House'
  ); ?>
   <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '1:45 p.m.',
    'Class of 1964 Memorial Service',
    '1964 Class tree, south of Rockefeller'
  ); ?>
   <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '2:00–3:00 p.m.',
    'Frances Lehman Loeb Art Center Curatorial Tours',
    null
  ); ?>
    <p>More information coming soon.</p>
  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '2:00–4:00 p.m.',
    'The Loeb Art Center',
    'Hildegard Krause Baker, class of 1911, Sculpture Garden'
  ); ?>
    <p>Enjoy afternoon iced tea and refreshments.</p>
  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '2:00–4:00 p.m.',
    'Open House at the A. Scott Warthin Jr. Museum',
    'A. Scott Warthin Jr. Museum (next to the Aula)'
  ); ?>
    <p>The A. Scott Warthin Jr. Museum is one of Vassar’s many hidden gems! Housed in Ely Hall, the museum has over a dozen active display cases with exhibits curated by Vassar students and faculty alike, in addition to an artistic Geologic Timeline, lots of wall art, a working geyser model, and all the fun facts you could want. Come by to get a personal tour of the museum from our Assistant Museum Curator, a current Vassar geology student, Harrison Walker!</p>
  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '2:30–3:30 p.m.',
    'College-sponsored Lectures and Tours'
  ); ?>

  <h4><a href="../lectures/#paula-williams-madison-74-finding-samuel-lowe-from-harlem-to-china">Paula Williams Madison ’74 - Finding Samuel Lowe: From Harlem to China</a></h4>
<p><strong>Location:</strong> Rosenwald Screening Room in Vogelstein Center for Drama and Film</p>

  <h4><a href="../lectures/#celebrating-the-alumnae-house-centennial-honoring-the-past-reimagining-the-future">Celebrating the Alumnae House Centennial: Honoring the Past, Reimagining the Future</a></h4>
<p><strong>Location:</strong> Alumnae House, Living Room</p>

  <h4><a href="../lectures/#climate-tales-from-a-southwestern-lake-lessons-for-the-future">Climate Tales from a Southwestern Lake: Lessons for the Future</a></h4>
<p><strong>Location:</strong> Rockefeller 210</p>

  <h4><a href="../lectures/#enhancing-resilience-strategies-for-mental-health-at-vassar-and-beyond">Enhancing Resilience: Strategies for Mental Health at Vassar and Beyond</a></h4>
<p><strong>Location:</strong> New England Building 206</p>

  <h4><a href="../lectures/#cuba-and-am-rica-entangled-histories-a-conversation-with-ada-ferrer-84-and-jennifer-adair-99-moderated-by-katherine-hite">“Cuba and América: Entangled Histories,” A Conversation with Ada Ferrer ’84 and Jennifer Adair ’99, moderated by Katherine Hite</a></h4>
<p><strong>Location:</strong> Rockefeller 300</p>

    <h4><a href="../lectures/#walking-tour-of-the-vassar-college-arboretum-2">Tour: Walking Tour of the Vassar College Arboretum</a></h4>
    <p><strong>Location:</strong> Meet at the entrance to Main in front of Main Circle.</p>

  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '2:30–4:30 p.m.',
    'Vassar Devils & Angels Ice Cream Tent',
    'Quad Lawn'
  ); ?>
    <?php echo end_schedule_item_dropdown(); ?>

  <?php echo schedule_item_dropdown(
    '2:30–4:30 p.m.',
    'Family activities on the Quad lawn'
  ); ?>
    <p>Bubble bus, bouncy castles</p>
	<p>A Day in the Park, The Wimpfheimer</p>
  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '3:00–4:00 p.m.',
    'Frances Lehman Loeb Art Center Curatorial Tours',
    null
  ); ?>
    <p>More information coming soon.</p>
  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '3:00–5:00 p.m.',
    'Alum Author Meet and Greet',
    'Vassar College Store (aka, the Juliet), Raymond Avenue'
  ); ?>
    <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '3:00–5:00 p.m.',
    'Multicultural and Affinity Group Receptions',
    'Main Building, 1st and 2nd floors, and the Jeh Vincent Johnson ALANA Cultural Center'
  ); ?>
  <p>Join us for an unforgettable experience at the Multicultural and Affinity Group Receptions! Connect with alums from diverse backgrounds and establish lasting relationships in an inclusive and intersectional setting. Indulge in delicious ethnic foods while you visit receptions tailored to Alum-athletes, Black/African American alums (AAAVC members), First-generation, Low Income (FLI) alums (formerly Transitions), International alums, LGBTQ+ alums, and WVKR alums.</p>

<p>The receptions will take place in the Campus Center North Atrium and Main parlors.	Additionally, the Jeh Vincent Johnson ALANA Cultural Center will host an ALANA Alum Open House during the same time. All ALANA Center affiliated alums are welcome, including Black/African American, Latiné, Asian, Asian American, South Asian, Native Hawaiian, Pacific Islander, Native American, Indigenous alums, and former members of ALANA student organizations. Don’t miss out on this unique opportunity to connect and create new memories!</p>
  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '3:30–5:00 p.m.',
    'Annual Ferry House Mini-Reunion at Reunion',
    'Ferry House Outdoor Patio (weather permitting)'
  ); ?>
  <p>Calling all Ferries for an informal reception with light refreshments.</p>
  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '4:00–5:00 p.m.',
    'College-sponsored Lectures and Tours'
  ); ?>

  <h4><a href="../lectures/#intergenerational-dialogue-life-survival-hacks-and-vassar-experiences">Intergenerational Dialogue: Life Survival Hacks and Vassar Experiences</a></h4>
<p><strong>Location:</strong> Gordon Commons, 2nd floor UpCDC</p>

  <h4><a href="../lectures/#stop-making-sense-the-art-of-inspiring-anybody">Stop Making Sense: The Art of Inspiring Anybody</a></h4>
<p><strong>Location:</strong> Rockefeller 210</p>

  <h4><a href="../lectures/#a-conversation-about-health-education-and-politics-in-america">A Conversation About Health, Education, and Politics in America</a></h4>
<p><strong>Location:</strong> Rockefeller 300</p>

    <h4><a href="../lectures/#sneak-peek-at-the-institute-for-the-liberal-arts">Tour: Sneak Peek at the Institute for the Liberal Arts</a></h4>
    <p><strong>Location:</strong> Meet at Chicago Hall Gate</p>

  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '5:00–6:00 p.m.',
    'Class of 1984 Wine Tasting',
    'Josselyn House, 2nd floor multipurpose room'
  ); ?>
  <?php echo end_schedule_item_dropdown(); ?>


    <?php echo schedule_item_dropdown(
      '5:00–6:00 p.m.',
      'Night Owls Concert (tentative)',
      'Taylor 102'
    ); ?>
      <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '5:30–6:30 p.m.',
    'Donor Societies Reception (by invitation)',
    'Thompson Memorial Library Lawn Tent'
  ); ?>
  <p>A special reception for members of the 1861 Loyalty Society and Matthew Vassar Legacy Society in appreciation for those who have made Vassar a philanthropic priority.</p>
  <?php echo end_schedule_item_dropdown(); ?>

    <?php echo schedule_item_dropdown(
    '5:45 p.m.',
    'Class of 1969 Photo',
    'Rockefeller Hall steps facing Main Building'
  ); ?>
   <?php echo end_schedule_item_dropdown(); ?>


    <?php echo schedule_item_dropdown(
    '6:00 p.m.',
    'Class of 1964 Photo',
    'Rockefeller Hall steps facing Main Building'
  ); ?>
   <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '6:30–7:15 p.m.',
    'Class Receptions (see dinner locations)',
    null,
    null,
    ['noContent' => true]
  ); ?>

  <?php echo schedule_item_dropdown(
    '7:15–9:30 p.m.',
    'Class Dinners',
      null
    ); ?>
      <p><strong>1954 and 1959:</strong> Alumnae House Dining Room</p>
  		<p><strong>1964:</strong> Reading Room 133, Thompson Library</p>
  		<p><strong>1969:</strong> Bridge for Laboratory Sciences</p>
  		<p><strong>1979:</strong> 1951 Reading Room, Thompson Library</p>
  		<p><strong>1984 and 1989:</strong> President’s Lawn Tent</p>
  		<p><strong>1994:</strong> Blodgett Tent</p>
  		<p><strong>1999:</strong> Cushing Tent</p>
  		<p><strong>2004:</strong> Sunset Lake Tent</p>
  		<p><strong>2009:</strong> Fergusson Quadrangle sunken lawn (outside Center for Drama and Film)</p>
  		<p><strong>2014:</strong> TownHouse Tent</p>
  		<p><strong>2019:</strong> Noyes Circle Tent</p>
    <?php echo end_schedule_item_dropdown(); ?>


      <?php echo schedule_item_dropdown(
        '10:00 p.m–1:00 a.m.',
        'All-class after party on Noyes Circle'
      ); ?>
      <p>Cash bar, DJ, and dancing to a multigenerational playlist.</p>
      <?php echo end_schedule_item_dropdown(); ?>


  <h3 id="sunday" class="schedule-item__heading">Sunday, June 2</h3>


  <?php echo schedule_item_dropdown(
    '7:30 a.m–noon',
    'Breakfast/brunch'
  ); ?>
  <p>Available at Gordon Commons (formerly ACDC).</p>
		<p><strong>Alumnae House Guests:</strong> Continental breakfast in the Dining Room</p>
  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '8:00–10:00 a.m.',
    'Classes of 1959, 1964, and 1969',
    'Jewett Multipurpose Rooms'
  ); ?>
  
    <p>Coffee service, muffins, and fruit.</p>

  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '8:00 a.m.–1:00 p.m.',
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
    '9:00 a.m–1:00 p.m.',
    'Residence halls open for check-out'
  ); ?>
  <p>Please return room keys to Guest Services Coordinators in residence halls.</p>
  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '9:00 a.m.',
    'Fun Run with Cross-Country Coach Ron Stonitsch'
  ); ?>
  <p>Meet in front of the Athletic and Fitness Center</p>
  <?php echo end_schedule_item_dropdown(); ?>


    <?php echo schedule_item_dropdown(
      '10:00–11:00 a.m.',
      'Service of Remembrance',
      'The Chapel'
    ); ?>
    
    <p>An inter-religious service drawing upon religious and humanist traditions to honor and celebrate the women and men of our reuning classes who have died since last reunions, as well as faculty, administrators, and staff who have died. This year<strong> Katilau Mbindyo ’14</strong> will give the memorial address. Mbindyo is a Mkamba PhD Candidate at Harvard University’s African American Studies Department, writing on Akamba traditional interpretations of the Anthropocene epoch. After graduating from Vassar with a major in Italian, she received her Master of Divinity (M.Div.) from Union Theological Seminary in New York City. The Alumnae/i Choir will sing, directed by Gail Archer, College Organist.</p>

    <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '11:15 a.m.',
    'Class of 1959 Brunch',
    'Alumnae House Dining Room'
  ); ?>
   <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '1:00 p.m.',
    'Reunion adjourns/check-out'
  ); ?>
  <p>Please return room keys to Guest Services Coordinators in residence halls.</p>
  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '1:00 p.m.',
    'NYC charter bus departs from Main Circle',
    null,
    null,
    ['noContent' => true]
  ); ?>

<?php echo end_sec_regularContent(); ?>


<?php echo end_sec_regularContent(); ?>


<?php echo relatedTopics(); ?>

<?php include($project_paths['main_project_root'].'/alums/inc/pages/give/give.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/give/give-volunteer.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/calendar/calendar.php');?>
<?php echo end_sec_relatedTopics(); ?>


<?php echo site_footeralums(); ?>
