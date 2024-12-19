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

<p class="intro-text">Reunion Preliminary General Schedule</p>
<p>Items with an <span style="display: inline" class="schedule-item__icon fa-solid fa-circle-info" title="“i” in a solid red circle"></span>  are links to additional information.</p>
<p>Use one of these links to go directly to the activities for that day:</p>

<ul class="linked-list">
  <li><a href="#friday">Friday, June 6</a></li>
  <li><a href="#saturday">Saturday, June 7</a></li>
  <li><a href="#sunday">Sunday, June 8</a></li>
</ul>

  <h3 id="friday" class="schedule-item__heading">Friday, June 6</h3>


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
    <p>Dorm rooms are available after 2:00 p.m. <!--<a href="../#flush-headingTwo">Find your Dorm Headquarters.</a>--></p>

  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '1:00 p.m.',
    'Jummah Service',
    'Pratt House'
  ); ?>
    <p>Experience tranquility and spiritual connection by joining Saba Ali, Advisor for Muslim Student Life, for the Jummah prayer service. An adjacent wudu station provides the perfect setting for this sacred gathering.</p>

  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '1:00–5:00 p.m.',
    'Come visit Vassar’s Olmsted Greenhouse',
    'Located on the B-Level of Olmsted Hall, enter through the glass doors facing Skinner Music Hall in the back of Olmsted.'
  ); ?>
    <p>Our Greenhouse manager will be giving tours of our wonderful plant collection. We will also be providing a plant giveaway for those who want to take a piece of the greenhouse home with them. Come see our beautifully curated collection of over 500 different plant species and learn about the research and educational opportunities we provide!</p>

  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '2:00–3:00 p.m.',
    'College-Sponsored Lectures',
  ); ?>
  
<!-- hiding for now      <h4>Exploration of <em>The Dream of a Common Movement: Selected Writings of Urvashi Vaid</em> and her contributions to social justice</h4>
      <p><strong>Location:</strong> Rockefeller 300</p>
      -->

      <h4>Utilizing AI in the Vassar Classroom</h4>
      <p><strong>Location:</strong> New England 105</p>

      <h4>New Brews: A Showcase of Student Innovation and Entrepreneurship</h4>
      <p><strong>Location:</strong> Rockefeller 200</p>

  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '2:00–3:30 p.m.',
    'College-Sponsored Tour',
  ); ?>
      <h4>The Environmental Cooperative and Vassar Preserve Tour</h4>
      <p><strong>Location:</strong> Shuttles depart from Main Circle</p>

  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '3:00–5:00 p.m.',
    'Alum Happy Hour at the Night Owls bar',
    'The Salt Line Hudson Valley, next to the Heartwood'
  ); ?>
    <p>Join us at the newly opened Night Owls bar. Special discounted wine, specialty cocktails, and bar menu items will be available for Vassar alums.</p>

  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '3:30–4:30 p.m.',
    'College-Sponsored Lectures and Tours',
  ); ?>

      <h4>Full Circle: An Author’s Reflections and A Professor’s Legacy</h4>
      <p><strong>Location:</strong> Rockefeller 300</p>

      <h4>The Third Chapter: Shaking things up after a certain age</h4>
      <p><strong>Location:</strong> Rockefeller 210</p>

      <h4>Walking Tour of the Vassar College Class Trees</h4>
      <p><strong>Location:</strong> Meet at the entrance to Main in front of Main Circle.</p>

  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '4:00–5:00 p.m.',
    'Labyrinth Walk and Pratt House Open House',
    'Pratt House'
  ); ?>
  
  <p>Come experience the new labyrinth on campus and get a tour of Pratt House, the new hub for Religious and Spiritual Life and Contemplative Practices (RSLCP) at the College.</p>
<p>The labyrinth tour will be hosted by Associate Professor of Psychological Science Carolyn Palmer and Katilau Mbindyo ’14, an alum who advocated for a permanent labyrinth at Vassar throughout her student years.</p>
<p>The open house will be hosted by Saba Ali, Advisor for Muslim Student Life; Rabbi Bryan Mann, Rachlin Director for Jewish Student Life and Assistant Director, RSLCP; and Rev. Sam Speers, Associate Dean of the College for RSLCP. Refreshments will be served.</p>

   <?php echo end_schedule_item_dropdown(); ?>
  
  
  <?php echo schedule_item_dropdown(
    '5:00–6:00 p.m.',
    'Night Owls Rehearsal (tentative)',
    'Rockefeller 200'
  ); ?>
   <?php echo end_schedule_item_dropdown(); ?>

  
    <?php echo schedule_item_dropdown(
    '5:00–7:00 p.m.',
    'All-Class Welcome Reception at the Loeb',
    ''
  ); ?>  
  <p>Refreshments served.</p>

   <?php echo end_schedule_item_dropdown(); ?>


   <?php echo schedule_item_dropdown(
    '5:00–7:00 p.m.',
    'Class of 1975 sponsors a Musicale Bacchanale',
    'Bridge for Laboratory Sciences'
  ); ?>
  
  <p>Come and enjoy light refreshments and an all-reunion “Musicale Bacchanale.” </p>

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
    'Thompson Memorial Library Lawn Tent'
  ); ?>
   <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '6:30–9:30 p.m.',
    'Class of 1965 Reception and Dinner',
    'The Vassar Institute for Liberal Arts, Elm room'
  ); ?>
   <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '6:30–9:30 p.m.',
    'Class of 1970 Reception and Dinner',
    '2nd floor Main Building'
  ); ?>
   <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '7:00–9:30 p.m.',
    'Picnic Dinner'
  ); ?>
<p><strong>Classes of 1950, 1955, 1960:</strong> 2nd floor Main Building</p>
<p><strong>Classes of 1980, 1985, 1990, 1995, 2000, 2005, 2010, 2015, and 2020: </strong> Noyes Circle Tent</p>
  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '9:30 p.m.',
    'Fireworks over Sunset Lake',
    null,
    null,
    ['noContent' => true]
  ); ?>

  <?php echo schedule_item_dropdown(
    '10 p.m.–midnight',
    '“Block” Party at Noyes Circle',
    'Noyes Circle Tent',
  ); ?>
<p>This very special event is being hosted by the Class of ’75 and the Class of ’80. Classic songs from our favorite era performed live by The Never Going Back To My Old School Band featuring Vassar classmates Bill Block and Drew Zingg with some very special musical guests!</p>
  <?php echo end_schedule_item_dropdown(); ?>

  <?php echo schedule_item_dropdown(
    '10:00 p.m.–1:00 a.m.',
    'The Mug',
    'Lower Level, College Center'
  ); ?>
  <p>Join us at the Mug for music from the 80s and 90s. Don’t forget to wait in line. Everyone 21 and older is welcome. Cash bar, DJ, and dancing.</p>
  <?php echo end_schedule_item_dropdown(); ?>


  <h3 id="saturday" class="schedule-item__heading">Saturday, June 7</h3>

  <?php echo schedule_item_dropdown(
    '7:30–9:00 a.m.',
    'Breakfast',
    'Gordon Commons (formerly ACDC)',
  ); ?>
<p><strong>Alumnae House Guests:</strong> Continental breakfast in the Dining Room</p>

  <?php echo end_schedule_item_dropdown(); ?>

  <?php echo schedule_item_dropdown(
    '8:00–10:00 a.m.',
    'Classes of 1965 and 1970',
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

    <!--<p><a href="https://www.vassar.edu/alums/calendar/reunion#flush-headingOne">Find your Dorm Headquarters</a>.</p>-->

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
    'Line up for Parade of Classes'
  ); ?>
  <p>Line starts with 1955 at the chapel along the path and ends with 2020. Look for your class banner along the parade route. Arrive early to gather for a class photo. Golf carts will be available.</p>
  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '10:45 a.m.',
    'Parade of Classes',
    null,
    null,
    ['noContent' => true]
  ); ?>


  <?php echo schedule_item_dropdown(
    '11:00 a.m.–4:00 p.m.',
    'Visit Vassar’s Olmsted Greenhouse',
    'Located on the B-Level of Olmsted Hall, enter through the glass doors facing Skinner Music Hall in the back of Olmsted.'
  ); ?>
    <p>Our Greenhouse manager will be giving tours of our wonderful plant collection. We will also be providing a plant giveaway for those who want to take a piece of the greenhouse home with them. Come see our beautifully curated collection of over 500 different plant species and learn about the research and educational opportunities we provide!</p>

  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '11:30 a.m.',
    'Celebrate Vassar',
    'Athletic and Fitness Center'
  ); ?>
  <p>Alums from the 5th to the 75th reunion classes, guests, and children gather together to celebrate extraordinary volunteers and gifts, and our shared Vassar legacy. Remarks by AAVC President Monica Vachher ’77 and Vassar Fund Committee Chair Kat Mills Polys ’93.</p>
  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '12:30–2:30 p.m.',
    'Class Luncheons',
    null
  ); ?>
<p><strong>Classes of 1955, 1960, and 1970:</strong> Main Building, Villard Room</p>
<p><strong>Class of 1965:</strong> Vassar Barn</p>
<p><strong>Classes of 1980, 1985, 1990, 1995, 2000, 2005, 2010, 2015, and 2020:</strong> Gordon Commons (formerly ACDC)</p>
  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '12:30 p.m.',
    'AAVC Awards luncheon (invitation only)',
    'Alumnae House Dining Room'
  ); ?>
    <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '1:30 p.m.',
    'Class of 1960 Memorial Service',
    'The Vogelstein Center for Drama and Film, Martel Theater'
  ); ?>
   <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '1:30 p.m.',
    'Class of 1970 Memorial Service',
    'Class Tree, Sunset Lake towards Walker Field House'
  ); ?>
   <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '1:30 p.m.',
    'Class of 1980 Memorial Service',
    'Class Tree, Between Main Building and the Chapel'
  ); ?>
   <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '2:00–3:00 p.m.',
    'The Loeb Art Center Curatorial Tours',
    null
  ); ?>
    <p>More information coming soon</p>
  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '2:00–3:30 p.m.',
    'The Vassar Institute for the Liberal Arts and The Heartwood',
    'The Vassar Institute for the Liberal Arts, Elm room'
  ); ?>
    <p>Join Robert Brigham, Professor of History and the Inaugural Faculty Director of The Vassar Institute for the Liberal Arts, and Maryann Pilon, Director of Project Management and Construction for a presentation about the College’s newest community resource and a look into early Institute programming followed by Q&A.</p>

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
    'Open House at The Vassar Institute for the Liberal Arts and the Night Owls bar',
    'The Vassar Institute for the Liberal Arts, its bridge, and Night Owls bar'
  ); ?>
    <p>Join us for an open house at The Heartwood and The Vassar Institute for the Liberal Arts. Take in the beauty of the surroundings as you enjoy cocktails on the bridge or make your way to the cozy ambiance of Night Owls, a hidden gem of a bar. Sip on a perfectly crafted beverage and savor delightful nibbles prepared by the talented Chef Will.</p>
  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '2:30–4:30 p.m.',
    'Vassar Devils & Angels Ice Cream Tent',
    'Quad Lawn'
  ); ?>
    <?php echo end_schedule_item_dropdown(); ?>


   <?php echo schedule_item_dropdown(
    '2:30–4:30 p.m.',
    'Family Activities',
    null
  ); ?>
    <h4>Bouncy castles, live music, balloon twister, lawn games</h4>
    <p><strong>Location:</strong> Quad lawn</p>

    <h4>Creativity In Action: Button-Making at the Innovation Lab</h4>
    <p>Hands-on button-making activity at the Innovation Lab! Join us in the makerspace to design and craft your own personalized buttons—perfect keepsakes or conversation starters for reunion weekend. Whether you’re feeling nostalgic, inspired, or just ready to have fun, this event is for all skill levels.</p>
    <p><strong>Location:</strong> Innovation Lab, lower level of the College Center (the old bookstore)</p>

    <h4>A Day in the Park</h4>
    <p><strong>Location:</strong> The Wimpfheimer</p>

    <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '3:00–4:00 p.m ',
    'The Loeb Art Center Curatorial Tours',
    null
  ); ?>
    <p>More information coming soon</p>
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
    null
  ); ?>
  <p>Join us for an unforgettable experience at the Multicultural and Affinity Group Receptions! Connect with alums from diverse backgrounds and establish lasting relationships in an inclusive and intersectional setting. Indulge in delicious ethnic foods while you visit receptions tailored to alum-athletes, Black/African American alums (AAAVC members), first-generation, low-income (FLI) alums (formerly Transitions), international alums, LGBTQ+ alums, and WVKR alums.</p>

<p>The receptions will take place in the Campus Center North Atrium and Main parlors. Additionally, the Jeh Vincent Johnson ALANA Cultural Center will host an ALANA Alum Open House during the same time. All ALANA Center affiliated alums are welcome, including Black/African American, Latiné, Asian, Asian American, South Asian, Native Hawaiian, Pacific Islander, Native American, Indigenous alums, and former members of ALANA student organizations. Don’t miss out on this unique opportunity to connect and create new memories!</p>
  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '3:30–4:30 p.m.',
    'College-Sponsored Lectures and Tours'
  ); ?>

  <h4>The Science of Food Shopping in a Postpan World</h4>
<p><strong>Location:</strong> The Vassar Institute for the Liberal Arts, Beech room</p>

  <h4>Beyond the Book: Vassar Authors Discuss the Writing Process</h4>
<p><strong>Location:</strong> Rockefeller 200 </p>

  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '3:30–5:00 p.m.',
    'Centennial Celebration of the Arboretum: History of the Arboretum plus the future vision for the Arboretum',
    'Taylor 203'
  ); ?>
    <p>Yvonne Elet, Professor of Art, and Kenneth Foster, Vassar’s new Director of Sustainability will speak about the history of the Arboretum and campus landscape development along with the College’s future plans and sustainability efforts. Following the talk, join Yvonne and Ken for a continuation of their talk as they tour the Arboretum.</p>
  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '3:30–5:00 p.m.',
    'Annual Ferry House Mini-Reunion at Reunion',
    'Ferry House Outdoor Patio (weather permitting)'
  ); ?>
  <p>Calling all Ferries for an informal reception with light refreshments.</p>
  <?php echo end_schedule_item_dropdown(); ?>


    <?php echo schedule_item_dropdown(
      '5:00-6:00 p.m.',
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
    '6:15 p.m.',
    'Class of 1970 Photo',
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
    'Class Receptions and Dinners',
      null
    ); ?>
      <p><strong>1955 and 1960:</strong> Alumnae House Dining Room</p>
  		<p><strong>1965:</strong> Alumnae House Living Room
  		<br />Class photo on Alumnae House steps</p>
  		<p><strong>1970:</strong> 2nd Floor, Main Building, Faculty Parlor
  		<br />Demitasse will be served following dinner</p>
  		<p><strong>1980:</strong> Bridge for Laboratory Sciences</p>
  		<p><strong>1985:</strong> Rose Parlor and the Villard Room, 2nd floor, Main Building</p>
  		<p><strong>1990:</strong> Sunset Lake Tent</p>
  		<p><strong>1995:</strong> Blodgett Tent</p>
  		<p><strong>2000:</strong> Cushing Tent</p>
  		<p><strong>2005:</strong> President’s Lawn Tent</p>
  		<p><strong>2010, 2015, and 2020:</strong> Noyes Circle Tent</p>
    <?php echo end_schedule_item_dropdown(); ?>


      <?php echo schedule_item_dropdown(
        '10:00 p.m–1:00 a.m.',
        'All-Class After Party in Noyes Circle Tent'
      ); ?>
      <p>Cash bar, DJ, and dancing to a multigenerational playlist.</p>
      <?php echo end_schedule_item_dropdown(); ?>


  <h3 id="sunday" class="schedule-item__heading">Sunday, June 8</h3>


  <?php echo schedule_item_dropdown(
    '7:30 a.m–Noon',
    'Breakfast/Brunch',
    'Gordon Commons (formerly ACDC)',
  ); ?>
		<p><strong>Alumnae House Guests:</strong> Continental breakfast in the Dining Room</p>
  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '8:00–10:00 a.m.',
    'Classes of 1965 and 1970',
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
    'Choir Rehearsal',
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
    
    <p>An inter-religious gathering drawing upon religious and humanist traditions to honor and celebrate the women and men of our reuning classes who have died since the last reunion, as well as faculty, administrators, and staff who have died. The Alumnae/i Choir will sing, directed by Gail Archer, College Organist.</p>

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


<?php echo end_sec_regularContent(); ?>


<?php echo relatedTopics(); ?>

<?php include($project_paths['main_project_root'].'/alums/inc/pages/give/give.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/give/give-volunteer.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/calendar/calendar.php');?>
<?php echo end_sec_relatedTopics(); ?>


<?php echo site_footeralums(); ?>
