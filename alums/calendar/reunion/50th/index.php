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

<p class="intro-text">50th Reunion Schedule for 1974</p>
<p>Items with an <span style="display: inline" class="schedule-item__icon fa-solid fa-circle-info" title="“i” in a solid red circle"></span>  are links to additional information.</p>
<p>Use one of these links to go directly to the activities for that day:</p>
<ul class="linked-list">
  <li><a href="#thursday">Thursday, May 30</a></li>
  <li><a href="#friday">Friday, May 31</a></li>
  <li><a href="#saturday">Saturday, June 1</a></li>
  <li><a href="#sunday">Sunday, June 2</a></li>
</ul>


  <h3 id="thursday" class="schedule-item__heading">Thursday, May 30</h3>

  <?php echo schedule_item_dropdown(
    '4:00 p.m.',
    'Registration opens',
    'Davison Lobby',
  ); ?>
  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '6:00–9:00 p.m.',
    'Campfire Casual Welcome Back buffet dinner',
    'Davison Tent',
  ); ?>
  
  <p>Refined yet relaxing dinner in a “come as you are” casual attire style. Enjoy Adirondack chairs and campfires on Joss beach and the makings for s’mores after dinner. President Bradley will be stopping by to help us kick off our 50th Reunion weekend. Sit back, relax, and have a drink and dinner with friends!</p>  
  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '9:00 p.m.',
    'Meet Your Stars: An Astrological Icebreaker',
    'Davison Tent',
  ); ?>
<p>Classmate Robbie Rothman will offer a fun way to reconnect with one another.</p>
  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '9:30–11:30 p.m.',
    '1974 Hospitality',
    'Davison Multipurpose Room',
  ); ?>
<p>Beer, wine, and soft drinks available</p>
  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '9:30–11:30 p.m.',
    'Lounge ’74—Demitasse',
    'Davison Parlor',
  ); ?>
  <?php echo end_schedule_item_dropdown(); ?>


  <h3 id="friday" class="schedule-item__heading">Friday, May 31</h3>

  <?php echo schedule_item_dropdown(
    '8:00–10:00 a.m.',
    'Continental Breakfast',
    'Davison Tent',
  ); ?>
  <?php echo end_schedule_item_dropdown(); ?>

  <?php echo schedule_item_dropdown(
    '9:00 a.m.–10:00 p.m.',
    'Reunion Information Center is open',
    'Main Building Lobby'
  ); ?>
   <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '9:00 a.m.–11:00 p.m.',
    'Davison House open for check-in',
    null,
    null,
    ['noContent' => true]
  ); ?>


  <?php echo schedule_item_dropdown(
    '10:15 a.m.',
    'Sneak Peek at The Vassar Institute for the Liberal Arts',
    'Rockefeller 300',
  ); ?>
  <p>Join Robert Brigham, Professor of History and the Inaugural Faculty Director of The Vassar Institute for the Liberal Arts, and Olympia Management for a virtual tour and presentation about the College’s newest community resource and a sneak peek into early Institute programming.</p>
  <?php echo end_schedule_item_dropdown(); ?>

  <?php echo schedule_item_dropdown(
    'Noon',
    'Worldview Inspired Lunch',
    'Alumnae House Dining Room',
  ); ?>
  <p>Class photo opportunity before lunch at the Alumnae House front steps.</p>
  <?php echo end_schedule_item_dropdown(); ?>

  <?php echo schedule_item_dropdown(
    '1:00 p.m.',
    'Reflections on Coeducation at Vassar',
    'Alumnae House Dining Room',
  ); ?>
  <p>M. Glen Johnson, Professor Emeritus of Political Science, and Anne Constantinople, Professor Emerita of Psychology</p>
  <?php echo end_schedule_item_dropdown(); ?>

  <?php echo schedule_item_dropdown(
    '2:00–3:00 p.m.',
    'College-Sponsored Lectures and Tours',
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
    'College-Sponsored Lectures and Tours',
  ); ?>

      <h4><a href="../lectures/#the-road-to-an-ai-future-promises-and-pitfalls">The Road to an AI Future: Promises and Pitfalls</a></h4>
      <p><strong>Location:</strong> New England Building 105</p>

      <h4><a href="../lectures/#sounds-and-science-grants-in-action-at-vassar">Sounds and Science: Grants in Action at Vassar</a></h4>
      <p><strong>Location:</strong> Meet at the Bridge for Laboratory Sciences Atrium (Chapel side)</p>

      <h4><a href="../lectures/#em-flight-of-the-wasp-the-rise-fall-and-future-of-americas-original-ruling-class-em"><em>Flight of the WASP: The Rise, Fall, and Future of America’s Original Ruling Class</em></a></h4>
      <p><strong>Location:</strong> Taylor 203</p>

    <h4><a href="../lectures/#walking-tour-of-the-vassar-college-arboretum">Tour: Walking Tour of the Vassar College Arboretum</a></h4>
    <p><strong>Location:</strong> Meet at the entrance to Main in front of Main Circle</p>

  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '4:00–5:00 p.m.',
    'Labyrinth Walk and Pratt House Open House',
    'Pratt House'
  ); ?>
  
  <p>Come experience the new labyrinth on campus and get a tour of Pratt House, the new hub for Religious and Spiritual Life and Contemplative Practices (RSLCP) at the College.</p>
<p>The labyrinth tour will be hosted by Associate Professor Carolyn Palmer of Psychological Science and Katilau Mbindyo '14, an alum who advocated for a permanent labyrinth at Vassar throughout her student years.</p>
<p>The open house will be hosted by Saba Ali, Advisor for Muslim Student Life; Rabbi Bryan Mann, Rachlin Director for Jewish Student Life and Assistant Director, RSLCP; and Rev. Sam Speers, Associate Dean of the College for RSLCP. Refreshments will be served.</p>

   <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '5:00 p.m.',
    'Night Owls Rehearsal',
    'Rockefeller 200'
  ); ?>
   <?php echo end_schedule_item_dropdown(); ?>

  
    <?php echo schedule_item_dropdown(
    '5:00 p.m.',
    'Class of 1964 presents: Bricks, Mortar, and More',
    'Rockefeller 300'
  ); ?>
  
  <p>Did you know that Main was the largest building in the country when it was completed in 1865? Or that Marcel Breuer’s masterful Ferry House was tucked behind Main so that its mid-century modern design would not offend the eyes of traditionalists? Join Margaret McCurry ’64, FAIA, and Virginia Gerst ’64, veteran architecture docent, to learn about the cultural history of Vassar as seen through its architecture in this presentation, updated from a talk originally given at the Class of ’64’s 50th Reunion.</p>

   <?php echo end_schedule_item_dropdown(); ?>


   <?php echo schedule_item_dropdown(
    '5:00 p.m.',
    'Class of 1974 sponsors a concert featuring classical and jazz from Vassar music faculty',
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
  <p><a href="https://connect.vassar.edu/s/1654/22/events.aspx?sid=1654&gid=2&pgid=7479&cid=12478&fid=12477">See the list of faculty attendees</a></p>
   <?php echo end_schedule_item_dropdown(); ?>

 
   <?php echo schedule_item_dropdown(
    '6:30–9:15 p.m.',
    'Tropical Breezes',
    'Terrace and Bridge for Laboratory Sciences'
  ); ?>
  <p>Join us on our own island paradise for our buffet complete with tropical décor and signature cocktail! Enjoy views of Skinner and the fireworks. Don’t forget to pack your favorite Hawaiian or floral outfits!</p>
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
    '1974 Hospitality',
    'Davison Multipurpose Room',
  ); ?>
<p>Beer, wine, and soft drinks available</p>
  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '9:30–11:30 p.m.',
    'Lounge ’74',
    'Davison Parlor',
  ); ?>
<p>Join us for throwback ’70s Soul Night</p>
  <?php echo end_schedule_item_dropdown(); ?>

  <?php echo schedule_item_dropdown(
    '10:00 p.m.–Midnight',
    'The Mug',
    'Lower Level, College Center'
  ); ?>
  <p>Join us at the Mug for music from the 80s and 90s. Don’t forget to wait in line. Everyone 21 and older is welcome. Cash only bar, DJ, and dancing.</p>
  <?php echo end_schedule_item_dropdown(); ?>
  
  <?php echo schedule_item_dropdown(
    '10:00 p.m.',
    'Movie Night: <em>The Group</em>',
    'Rosenwald Theater, Vogelstein Center for Drama and Film'
  ); ?>

  <p>Based on the 1963 novel of the same name, this 1966 American ensemble film directed by Sidney Lumet follows the lives of a group of eight female graduates from Vassar from 1933 to 1940.</p>
<p>MATURE AUDIENCES ONLY</p>

  <?php echo end_schedule_item_dropdown(); ?>


  <h3 id="saturday" class="schedule-item__heading">Saturday, June 1</h3>

  <?php echo schedule_item_dropdown(
    '7:30–9:00 a.m.',
    'Full Breakfast',
    'Gordon Commons (formerly ACDC)',
  ); ?>
  <?php echo end_schedule_item_dropdown(); ?>

  <?php echo schedule_item_dropdown(
    '8:00–10:00 a.m.',
    'Continental Breakfast',
    'Davison Tent',
  ); ?>
  <?php echo end_schedule_item_dropdown(); ?>

  <?php echo schedule_item_dropdown(
    '9:00 a.m.–10:00 p.m.',
    'Reunion Information Center is open',
    'Main Building Lobby'
  ); ?>
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
    'Line Up for Parade of Classes'
  ); ?>
  <p>Line starts with 1948/49 at the chapel along the path and ends with 2019. Look for your class banner along the parade route. Golf carts will be available. Class photo opportunity at the start of the parade.</p>
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
    '12:30–1:00 p.m.',
    'Class Memorial Gathering',
    'Class tree, in front of Swift Hall (rain backup: Lobby of the Vogelstein Center for Drama and Film)'
  ); ?>
  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '1:00–2:00 p.m.',
    'Al fresco Italian Buffet Luncheon and class meeting',
    'Frances Fergusson Quadrangle Tent, Vogelstein Center for Drama and Film'
  ); ?>
  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '2:00–3:00 p.m.',
    'Frances Lehman Loeb Art Center Curatorial Tours',
    null
  ); ?>
    <h4><strong>Jessica Brier, Curator of Photography</strong></h4>

    <p>Join us for a tour of the exhibition <em>Making a Life in Photography: Rollie McKenna</em>, led by exhibition co-curator Jessica Brier, curator of photography at the Loeb. This is the first survey of the prolific career of American photographer Rollie McKenna ’40, who made significant contributions to American modernism through portrait, architectural, and documentary photography.</p>

    <h4>John Murphy, The Philip and Lynn Straus Curator of Prints and Drawings <br />
Ian Shelley, Curatorial and Learning and Engagement Fellow</h4>

    <p>Join us for a tour of the Founding Collection, Hudson River School works. The Hudson River School of American painting is one of the richest areas of the permanent collection. Paintings by many of the movement’s leading artists, including Thomas Cole, Asher B. Durand, Frederic Church, Jasper Cropsey, and Sanford Robinson Gifford, can be seen in a special, intimate suite of galleries at the Art Center featuring their views of the American Northeast and Europe.</p>
  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '2:00–4:00 p.m.',
    'The Loeb Art Center',
    'Hildegard Krause Baker, class of 1911, Sculpture Garden'
  ); ?>
    <p>Enjoy afternoon iced tea and refreshments.</p>
  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '2:30–3:30 p.m.',
    'College-Sponsored Lectures and Tours'
  ); ?>

  <h4><a href="../lectures/#paula-williams-madison-74-finding-samuel-lowe-from-harlem-to-china">Paula Williams Madison ’74—Finding Samuel Lowe: From Harlem to China</a></h4>
<p><strong>Location:</strong> Rosenwald Screening Room in Vogelstein Center for Drama and Film</p>

  <h4><a href="../lectures/#celebrating-the-alumnae-house-centennial-honoring-the-past-reimagining-the-future">Celebrating the Alumnae House Centennial: Honoring the Past, Reimagining the Future</a></h4>
<p><strong>Location:</strong> Alumnae House, Living Room</p>

  <h4><a href="../lectures/#climate-tales-from-a-southwestern-lake-lessons-for-the-future">Climate Tales from a Southwestern Lake: Lessons for the Future</a></h4>
<p><strong>Location:</strong> Rockefeller 210</p>

  <h4><a href="../lectures/#enhancing-resilience-strategies-for-mental-health-at-vassar-and-beyond">Enhancing Resilience: Strategies for Mental Health at Vassar and Beyond</a></h4>
<p><strong>Location:</strong> New England Building 206</p>

  <h4><a href="../lectures/#cuba-and-am-rica-entangled-histories-a-conversation-with-ada-ferrer-84-and-jennifer-adair-99-moderated-by-katherine-hite">Cuba and América: Entangled Histories, A Conversation with Ada Ferrer ’84 and Jennifer Adair ’99, moderated by Katherine Hite</a></h4>
<p><strong>Location:</strong> Rockefeller 300</p>

    <h4><a href="../lectures/#walking-tour-of-the-vassar-college-arboretum-2">Tour: Walking Tour of the Vassar College Arboretum</a></h4>
    <p><strong>Location:</strong> Meet at the entrance to Main in front of Main Circle</p>

  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '2:30–4:30 p.m.',
    'Vassar Devils & Angels Ice Cream Tent',
    'Quad Lawn'
  ); ?>
    <?php echo end_schedule_item_dropdown(); ?>

    
  <?php echo schedule_item_dropdown(
    '3:00–4:00 p.m.',
    'Frances Lehman Loeb Art Center Curatorial Tours',
    null
  ); ?>
    <h4><strong>Jessica Brier, Curator of Photography</strong></h4>

    <p>Join us for a tour of the exhibition <em>Making a Life in Photography: Rollie McKenna</em>, led by exhibition co-curator Jessica Brier, curator of photography at the Loeb. This is the first survey of the prolific career of American photographer Rollie McKenna ’40, who made significant contributions to American modernism through portrait, architectural, and documentary photography.</p>

    <h4>John Murphy, The Philip and Lynn Straus Curator of Prints and Drawings <br />
Ian Shelley, Curatorial and Learning and Engagement Fellow</h4>

    <p>Join us for a tour of the Founding Collection, Hudson River School works. The Hudson River School of American painting is one of the richest areas of the permanent collection. Paintings by many of the movement’s leading artists, including Thomas Cole, Asher B. Durand, Frederic Church, Jasper Cropsey, and Sanford Robinson Gifford, can be seen in a special, intimate suite of galleries at the Art Center featuring their views of the American Northeast and Europe.</p>
  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '3:00–5:00 p.m.',
    'Alum Author Meet and Greet',
    'Vassar College Store (aka, the Juliet), Raymond Avenue'
  ); ?>
    <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '3:00–5:00 p.m.',
    'Affinity Group Receptions',
    'Main Building, 1st and 2nd floors, and the Jeh Vincent Johnson ALANA Cultural Center'
  ); ?>
  <p>Join us for an unforgettable experience at the Affinity Group Receptions! Connect with alums from diverse backgrounds and establish lasting relationships in an inclusive and intersectional setting. Indulge in delicious ethnic foods while you visit receptions tailored to Alum-athletes, Black/African American alums (AAAVC members), First-generation, Low Income (FLI) alums (formerly Transitions), International alums, LGBTQ+ alums, and WVKR alums. </p>

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
    'College-Sponsored Lectures and Tours'
  ); ?>

  <h4><a href="../lectures/#em-stop-making-sense-the-art-of-inspiring-anybody-em"><em>Stop Making Sense: The Art of Inspiring Anybody</em></a></h4>
<p><strong>Location:</strong> Rockefeller 210</p>

    <h4><a href="../lectures/#sneak-peek-at-the-vassar-institute-for-the-liberal-arts">Sneak Peek at The Vassar Institute for the Liberal Arts</a></h4>
    <p><strong>Location:</strong> Rockefeller 300</p>

  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '5:00 p.m.',
    '“Friends of Bill”',
    'Rockefeller 112'
  ); ?>
  <?php echo end_schedule_item_dropdown(); ?>


    <?php echo schedule_item_dropdown(
      '5:00-6:00 p.m.',
      'Night Owls Concert',
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
    '6:15 p.m.',
    'Class Photo',
    'Rockefeller steps (facing the library); Rain location—library lobby'
  ); ?>
   <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '6:45–7:15 p.m.',
    'Elegant Dinner and Drinks',
    'Reception, Rose Parlor, 2nd floor Main Building'
  ); ?>
<p>Be your most glamorous self and cap off our 50th Reunion weekend!</p>
  <?php echo end_schedule_item_dropdown(); ?>

  <?php echo schedule_item_dropdown(
    '7:15–9:30 p.m.',
    'Dinner',
    'Villard Room, 2nd floor Main Building'
  ); ?>
  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '10:00 p.m.–Midnight',
    '1974 Hospitality',
    'Davison Multipurpose Room',
  ); ?>
<p>Beer, wine, and soft drinks available</p>
  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '10:00 p.m.–Midnight',
    'Lounge ’74',
    'Davison Parlor',
  ); ?>
  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '10:00 p.m.–1:00 a.m.',
    'All Class After Party in Noyes Circle Tent',
    'Noyes Circle Tent'
  ); ?>
      <p>Cash only bar, DJ, and dancing to a multigenerational playlist.</p>
  <?php echo end_schedule_item_dropdown(); ?>


  <h3 id="sunday" class="schedule-item__heading">Sunday, June 2</h3>

  <?php echo schedule_item_dropdown(
    '7:30 a.m.–noon',
    'Breakfast/Brunch',
    'Gordon Commons (formerly ACDC)',
  ); ?>
  <?php echo end_schedule_item_dropdown(); ?>

  <?php echo schedule_item_dropdown(
    '8:00–10:00 a.m.',
    'Continental Breakfast',
    'Davison Tent',
  ); ?>
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
    'Davison is open for check-out'
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
    
    <p>An inter-religious service drawing upon religious and humanist traditions to honor and celebrate the women and men of our reuning classes who have died since the last reunion, as well as faculty, administrators, and staff who have died. This year<strong> Katilau Mbindyo ’14</strong> will give the memorial address. Mbindyo is a Mkamba PhD Candidate at Harvard University’s African American Studies Department, writing on Akamba traditional interpretations of the Anthropocene epoch. After graduating from Vassar with a major in Italian, she received her Master of Divinity (M.Div.) from Union Theological Seminary in New York City. The Alumnae/i Choir will sing, directed by Gail Archer, College Organist.</p>

    <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '1:00 p.m.',
    'Reunion Adjourns/Check-Out'
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


<?php echo relatedTopics(); ?>

<?php include($project_paths['main_project_root'].'/alums/inc/pages/give/give.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/give/give-volunteer.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/calendar/calendar.php');?>
<?php echo end_sec_relatedTopics(); ?>


<?php echo site_footeralums(); ?>
