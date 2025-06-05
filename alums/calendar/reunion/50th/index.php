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

<p class="intro-text">50th Reunion Schedule for 1975</p>
<p>Items with an <span style="display: inline" class="schedule-item__icon fa-solid fa-circle-info" title="“i” in a solid red circle"></span>  are links to additional information.</p>
<p>Use one of these links to go directly to the activities for that day:</p>
<ul class="linked-list">
  <li><a href="#thursday">Thursday, June 5</a></li>
  <li><a href="#friday">Friday, June 6</a></li>
  <li><a href="#saturday">Saturday, June 7</a></li>
  <li><a href="#sunday">Sunday, June 8</a></li>
</ul>


  <h3 id="thursday" class="schedule-item__heading">Thursday, June 5</h3>

  <?php echo schedule_item_dropdown(
    '2:00 p.m.',
    'Registration Opens',
    'Davison Lobby',
  ); ?>
  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '4:30 p.m.',
    'Class of 1975 Special Look at The Vassar Institute for the Liberal Arts',
    'The Vassar Institute for the Liberal Arts, Elm room',
  ); ?>
  
  <p>Join Robert Brigham, Professor of History on the Shirley Ecker Boskey Chair and Faculty Director of The Institute for the Liberal Arts, and Maryann Pilon, Director of Project Management and Construction, for a presentation about the College’s newest community resource and a special look into early Institute programming, followed by a Q&A.</p>  
  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '6:00–9:30 p.m.',
    'Casual Buffet Dinner',
    'Alumnae House',
  ); ?>
  <p>Enjoy a relaxed and casual buffet dinner upon arrival, featuring a delicious spread to kick off the evening. Please note: The buffet will be replenished with fresh food throughout the evening to accommodate later arrivals.</p>  
  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '7:30 p.m.',
    'Class of 1975 Photo',
    'Alumnae House steps',
  ); ?>
  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '9:30–11:00 p.m.',
    '1975 Hospitality Bar',
    'Alumnae House dining room',
  ); ?>
  <?php echo end_schedule_item_dropdown(); ?>


  <h3 id="friday" class="schedule-item__heading">Friday, June 6</h3>

  <?php echo schedule_item_dropdown(
    '8:00–8:45 a.m.',
    'Wake up and start the day with Qi Gong',
    'Davison Lawn (between the Davison Tent and Chicago Hall)',
  ); ?>
  <p>Martial arts practitioner Darby Melnick will guide a traditional Chinese practice that combines physical movements, breathing techniques, and meditation to improve health and well-being.</p>
  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '8:00–10:00 a.m.',
    'Continental Breakfast',
    'Davison Tent',
  ); ?>
  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '8:30 a.m.',
    'Walkway Over the Hudson Bike Ride',
    '',
  ); ?>
  <p>A gentle 10–15 mile paved trail bike ride on the Dutchess County Rail Trail. We will meet at the parking lot on the west side, a.k.a. the Highland side, of the <a href="https://walkway.org/">Walkway Over the Hudson</a>. Limited bike rentals are available. For more information contact Hudson Bike Co. at <a href="mailto:hudsonbikeco@gmail.com">hudsonbikeco@gmail.com</a> or call  <a href="tel:+18456919198">(845) 691-9198</a>. Please reach out to Paul Winkeller at <a href="mailto:winkp1725@gmail.com">winkp1725@gmail.com</a> with any questions.</p>
  <?php echo end_schedule_item_dropdown(); ?>

  <?php echo schedule_item_dropdown(
    '9:00–10:30 a.m.',
    'Roundtable Discussion',
    'Davison Tent',
  ); ?>
  <p>Join classmates Alison Anthoine and Carol L. Armstrong for a discussion on transitions from work to retirement. This discussion will focus on the choices some make to convert retirement into a career transition. The drivers for such choices may include personal interests and priorities, professional growth, life changes, family needs, personal health, financial circumstances, or external factors like job market conditions. Both moderators have achieved interesting and admirable career transitions; please feel free to ask questions, share your story if you have one, and contribute your thoughts on this topic.<p>
  <?php echo end_schedule_item_dropdown(); ?>

  <?php echo schedule_item_dropdown(
    '9:00 a.m.–10:00 p.m.',
    'Reunion Information Center is Open',
    'Main Building Lobby'
  ); ?>
   <?php echo end_schedule_item_dropdown(); ?>

  <?php echo schedule_item_dropdown(
    '9:00 a.m.–11:00 p.m.',
    'Davison House Open for Check-In',
    null,
    null,
    ['noContent' => true]
  ); ?>

  <?php echo schedule_item_dropdown(
    '9:30 a.m.',
    'Golf Outing',
    'Meet at the Vassar Golf Course',
  ); ?>
  <p>Join other classmates to play nine holes of golf at the Vassar Golf Course. The cost for 9 holes of golf is $16 per person, $22 with a golf cart. You must have your own clubs. The Vassar Golf Course does not have clubs to rent. Contact Sturgess Spanos for more details—<a href="mailto:sturgess.spanos@gmail.com">sturgess.spanos@gmail.com</a>.</p>
  <?php echo end_schedule_item_dropdown(); ?>

  <?php echo schedule_item_dropdown(
    '10:30–11:30 a.m.',
    '<em>Great Green Hope for the Urban Blues:</em> Art and Myths of the Hudson Valley',
    'Taylor 203',
  ); ?>
  <p>From the birth of the Hudson River School to countercultural artist colonies in Woodstock and beyond, artists have looked to the Hudson Valley as an escape and refuge. John Murphy, the Loeb’s Curator of Prints and Drawings, and Ian Shelley ’22, Curatorial Fellow, discuss their new exhibition, <a href="https://www.vassar.edu/theloeb/exhibitions/great-green-hope-urban-blues"><em>Great Green Hope for the Urban Blues</em></a>, which looks back at two centuries of artmaking in the Hudson Valley, exploring the region’s enduring appeal as well as what lies beneath the surface.</p>
  <?php echo end_schedule_item_dropdown(); ?>

  <?php echo schedule_item_dropdown(
    'Noon',
    'Cookout Lunch Showcasing Vassar’s Campus Dining Team',
    'Davison Tent',
  ); ?>
    <p>Outgoing Class President Patricia Ann Neely will offer welcome remarks and announce our slate of incoming class volunteers.</p>
  <?php echo end_schedule_item_dropdown(); ?>

  <?php echo schedule_item_dropdown(
    '2:00–3:00 p.m.',
    'Lectures',
  ); ?>
  
 <h4><a href="../lectures/#utilizing-ai-in-the-vassar-classroom">Utilizing AI in the Vassar Classroom</a></h4>
       <p><strong>Location:</strong> New England 105</p>

      <h4><a href="../lectures/#new-brews-a-showcase-of-student-innovation-and-entrepreneurship">New Brews: A Showcase of Student Innovation and Entrepreneurship</a></h4>
      <p><strong>Location:</strong> Rockefeller 200</p>

  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '2:00–3:30 p.m.',
    'The Environmental Cooperative and the Preserve at Vassar Farm',
  ); ?>
<h4><a href="../lectures/#vassar-preserve-environmental-cooperative">Learn more about the Environmental Cooperative and the Preserve at Vassar Tour</a></h4>
      <p><strong>Location:</strong> Shuttles depart from Main Drive</p>

  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '3:30–4:30 p.m.',
    'The Third Chapter: Shaking Things Up After a Certain Age',
    'Rockefeller 300'
  ); ?>
    <p>Moderated by Karen Valentia Clopton ’80, P’19, ’22; Harvard University Advanced Leadership Initiative Senior Fellow ’25</p>
<p>At a key moment in the 21st century, demographers are recognizing the significance of a distinct developmental phase: those years following early adulthood and middle age when we are “neither young nor old.” Whether by choice or not, many in their “third chapters” are finding ways to adapt, explore, and channel their energies, skills, and passions in new ways and into new areas. We will discuss resources, including <em>I Change Course: A Journey to My Truth</em> by Kate Bean; <em>Second Chances Shakespeare & Freud</em> by Stephen Greenblatt & Adam Phillips; <em>Think Outside the Building</em> by Rosabeth Moss Kanter; and our own Morgan Baker’s <a href="https://www.amazon.com/Emptying-Nest-Getting-Better-Goodbyes/dp/1645384810/"><em>Emptying the Nest: Getting Better at Goodbyes</em></a>. We will share the many avenues Vassar alums have explored after age 50 that were different career and life paths than their original trajectory.</p>

  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '3:30–4:30 p.m.',
    'Lectures and Tours',
  ); ?>

<h4><a href="../lectures/#exploration-of-em-the-dream-of-a-common-movement-selected-writings-of-urvashi-vaid-em-edited-by-jyotsna-vaid-and-amy-hoffman-duke-university-press-2025">Exploration of <em>The Dream of a Common Movement: Selected Writings of Urvashi Vaid</em> (Edited by Jyotsna Vaid and Amy Hoffman, Duke University Press, 2025)</a></h4>
      <p><strong>Location:</strong> Rockefeller 200</p>

<h4><a href="../lectures/#walking-tour-of-the-vassar-college-class-trees">Walking Tour of the Vassar College Class Trees</a></h4>
      <p><strong>Location:</strong> Meet in front of Rockefeller Hall (Library side)</p>

  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '3:30–4:30 p.m.',
    'Activism Then and Now',
    'Rockefeller 210'
  ); ?>
      <p>Join Maybelle Bennett, Bonnie Halpern, and Dosia Fire from the Class of 1970 in a discussion of activism as students back in the day and ways to make a difference today. </p>

  <?php echo end_schedule_item_dropdown(); ?>
  

  <?php echo schedule_item_dropdown(
    '3:30–4:30 p.m.',
    'Meet the Artists and Authors',
    'Davison Multipurpose Room'
  ); ?>
  
  <p>Join us for a reception to celebrate the works of our talented classmates whose work will be on display throughout the weekend.</p>

   <?php echo end_schedule_item_dropdown(); ?>
  
  
  <?php echo schedule_item_dropdown(
    '4:00–5:00 p.m.',
    '<em>Great Green Hope for the Urban Blues</em>: Art and Myths of the Hudson Valley',
    'Taylor 203'
  ); ?>
  
  <p>From the birth of the Hudson River School to countercultural artist colonies in Woodstock and beyond, artists have looked to the Hudson Valley as an escape and refuge. John Murphy, the Loeb’s Curator of Prints and Drawings, and Ian Shelley ’22, Curatorial Fellow, discuss their new exhibition, <a href="https://www.vassar.edu/theloeb/exhibitions/great-green-hope-urban-blues"><em>Great Green Hope for the Urban Blues</em></a>, which looks back at two centuries of artmaking in the Hudson Valley, exploring the region’s enduring appeal as well as what lies beneath the surface.</p>

   <?php echo end_schedule_item_dropdown(); ?>
  
  
  <?php echo schedule_item_dropdown(
    '4:00–5:00 p.m.',
    'Labyrinth Walk and Pratt House Open House',
    'Pratt House'
  ); ?>
  
  <p>Explore the Pratt Labyrinth and tour Pratt House, the hub for Religious and Spiritual Life and Contemplative Practices (RSLCP).</p>
<ul>
	<li><strong>Labyrinth Walk:</strong> Hosted by Associate Professor of Psychological Science Carolyn Palmer.</li>
	<li><strong>Pratt House Open House:</strong> Hosted by Saba Ali, Advisor for Muslim Student Life; Rabbi Bryan Mann, Rachlin Director for Jewish Student Life & Assistant Director for RSLCP; and Rev. Sam Speers, Associate Dean of the College for RSLCP.</li>
</ul>

   <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '5:00–6:00 p.m.',
    '“Friends of Bill”',
    'Rockefeller 112'
  ); ?>
   <?php echo end_schedule_item_dropdown(); ?>

  
  <?php echo schedule_item_dropdown(
    '5:00–6:00 p.m.',
    'Night Owls Rehearsal',
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
    '5:00–6:30 p.m.',
    'Class of 1975 Sponsors a Musicale Bacchanale',
    'Bridge for Laboratory Sciences'
  ); ?>
  
  <p>Come and enjoy light refreshments and an all-reunion Musicale Bacchanale. Featuring alums of all reunion classes presenting performances showcasing a variety of musical genres!</p>

   <?php echo end_schedule_item_dropdown(); ?>
 
 
  <?php echo schedule_item_dropdown(
    '5:30–6:45 p.m.',
    'Shabbat Service',
    'The Bayit (51 Collegeview Avenue, North Gate)'
  ); ?>
  <p>Celebrate Shabbat with the campus community in a welcoming and peaceful gathering. Join us for prayers and reflection as we take part in this weekly tradition.</p>

   <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '6:00–7:00 p.m.',
    'Reception with Vassar Faculty Members',
    'Main Building, College Center North Atrium'
  ); ?>
  <p>Please join your favorite professors and meet new faculty in the College Center. Interim Dean of Faculty Brian Daly will deliver an update on the latest academic news on campus.</p>

   <?php echo end_schedule_item_dropdown(); ?>

 
   <?php echo schedule_item_dropdown(
    '6:30–9:00 p.m.',
    'Dinner',
    'Shakespeare Garden'
  ); ?>
  <p>Indulge in a sumptuous progressive meal featuring a delightful array of stations, each designed to tantalize your palate with a symphony of flavors.</p>
  <?php echo end_schedule_item_dropdown(); ?>


   <?php echo schedule_item_dropdown(
    '7:00 p.m.',
    'Class of 1975 Photo',
    'Shakespeare Garden'
  ); ?>
  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '9:15 p.m.',
    'Fireworks Over Sunset Lake',
    null,
    null,
    ['noContent' => true]
  ); ?>

  <?php echo schedule_item_dropdown(
    '9:45 p.m.',
    'Screening of <em>The World According to Allee Willis</em> along with a short film, <em>Not Just Any Flower</em>',
    'Vogelstein Center For Drama and Film, Rosenwald Theater',
  ); ?>
<p><em>Not Just Any Flower</em>, a 1988 short comedy written and directed by Terry deRoy Gruber ’75, chronicles a stormy night in NYC where not much goes right. Made under the supervision of Martin Scorsese, Gruber’s Columbia Film School thesis film traveled the film festival circuit in 1989 and was recently restored, making it available to new audiences.</p>
<p>Co-executive produced by Prudence Fenton ’75, <em>The World According to Allee Willis</em> chronicles the life of Fenton’s partner of 27 years, songwriter/artist Allee Willis. Willis is best known for writing the Friends theme song, the Earth, Wind & Fire mega-hits “September” and “Boogie Wonderland,” as well as the Broadway musical <em>The Color Purple</em>. She began filming her life as a kid in 1950s Detroit and never stopped. Willis pursued creative expression at all costs while struggling with not fitting established gender and sexual norms...until she found a path to love.</p>
  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '10 p.m.–midnight',
    '“Block” Party at Noyes Circle',
    'Noyes Circle Tent',
  ); ?>
<p>This very special event is being hosted by the Class of 1975 and the Class of 1980. Classic songs from our favorite era performed live by The Never Going Back To My Old School Band featuring Vassar classmates Bill Block and Drew Zingg with some very special musical guests!</p>
  <?php echo end_schedule_item_dropdown(); ?>

  <?php echo schedule_item_dropdown(
    '10:00 p.m.–1:00 a.m.',
    'The Mug',
    'Lower Level, College Center'
  ); ?>
  <p>Join us at the Mug for music from the ’80s and ’90s. Don’t forget to wait in line. Everyone 21 and older is welcome. Cash bar, DJ, and dancing.</p>
  <?php echo end_schedule_item_dropdown(); ?>

  
  <?php echo schedule_item_dropdown(
    '11:00 p.m.–1:00 a.m.',
    'Late Night Coffee House—Hospitality',
    'Davison Tent'
  ); ?>

  <p>Join us for an intimate evening of live music at our cozy “coffeehouse,” where more of our musically talented classmates will serenade you with acoustic tunes and soulful melodies. Sip your favorite brew and enjoy a night of unforgettable music!</p>

  <?php echo end_schedule_item_dropdown(); ?>


  <h3 id="saturday" class="schedule-item__heading">Saturday, June 7</h3>

  <?php echo schedule_item_dropdown(
    '7:30–10:00 a.m.',
    'Full Breakfast',
    'Gordon Commons (formerly ACDC)',
  ); ?>
<p>(included for those staying on campus, credit card accepted for those staying off campus)</p>
  <?php echo end_schedule_item_dropdown(); ?>

  <?php echo schedule_item_dropdown(
    '9:00 a.m.–10:00 p.m.',
    'Reunion Information Center is Open',
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
    'Line up for Parade of Classes'
  ); ?>
  <p>Line starts with 1945 at the chapel along the path and ends with 2020. Look for your class banner along the parade route. Arrive early to gather for a class photo. Golf carts will be available.</p>
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
    'Athletics and Fitness Center'
  ); ?>
  <p>Alums from the 5th to the 75th reunion classes, guests, and children gather together to celebrate extraordinary volunteers and gifts, and our shared Vassar legacy. Remarks by AAVC President Monica Vachher ’77 and Vassar Fund Committee Chair Kat Mills Polys ’93.</p>
  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '12:30–1:30 p.m.',
    'Lunch',
    'Tent overlooking Sunset Lake'
  ); ?>
  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '1:30–2:15 p.m.',
    'Class Memorial Gathering',
    'The lower level of Commencement Hill'
  ); ?>
    <p>After lunch, join Rabbi Liza Stern to memorialize and celebrate the lives of the 71 classmates we have lost during the past 50 years.</p>
  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '2:00–3:00 p.m.',
    'The Loeb Art Center Curatorial Tours',
    null
  ); ?>
    <p>Highlighting current special exhibitions and featured works of art in the collection</p>
  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '2:00–3:00 p.m.',
    'Lecture',
  ); ?>

<h4><a href="../lectures/#the-vassar-institute-for-the-liberal-arts-and-the-heartwood">The Vassar Institute for the Liberal Arts and The Heartwood</a></h4>
      <p><strong>Location:</strong> The Vassar Institute for the Liberal Arts, Elm room</p>

  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '2:00–3:00 p.m.',
    'Full Circle: An Author’s Reflections and A Professor’s Legacy',
    'Rockefeller 300'
  ); ?>
    <p>Join author/educator Meg Stone ’95 for a dialogue with Professor Emerita of Political Science Molly Shanley, as Meg traces the origins of her first book—and life’s work—back to the Vassar classroom. <em>The Cost of Fear: Why Most Safety Advice is Sexist and How We Can Stop Gender-Based Violence</em> by Meg Stone was published in February 2025.</p>
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
    'Open House at The Vassar Institute for Liberal Arts and the Night Owls Bar',
    'The Vassar Institute for the Liberal Arts, its bridge, and Night Owls bar'
  ); ?>
    <p>Join us for an open house at The Heartwood and The Vassar Institute for the Liberal Arts. Take in the beauty of the surroundings as you enjoy cocktails on the bridge or make your way to the cozy ambiance of Night Owls, a hidden gem of a bar. Sip on a perfectly crafted beverage and savor delightful nibbles.</p>
  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '2:30–4:30 p.m.',
    'Vassar Devils & Angels Ice Cream Tent',
    'Quad Lawn'
  ); ?>
    <?php echo end_schedule_item_dropdown(); ?>

    
  <?php echo schedule_item_dropdown(
    '2:30–4:30 p.m.',
    'Creativity In Action: Button-Making at the Innovation Lab',
    'Innovation Lab, lower level of the College Center (the old bookstore)'
  ); ?>
  <p>Hands-on button-making activity at the Innovation Lab! Join us in the makerspace to design and craft your own personalized buttons—perfect keepsakes or conversation starters for Reunion weekend. Whether you’re feeling nostalgic, inspired, or just ready to have fun, this event is for all skill levels.</p>
    <?php echo end_schedule_item_dropdown(); ?>

    
  <?php echo schedule_item_dropdown(
    '3:00–4:00 p.m. ',
    'The Loeb Art Center Curatorial Tours',
    null
  ); ?>
    <p>Highlighting current special exhibitions and featured works of art in the collection</p>
  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '3:00–5:00 p.m.',
    'Alum Author Meet and Greet',
    'Vassar College Store (aka, the Juliet), Raymond Avenue'
  ); ?>
    <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '3:00–5:00 p.m.',
    'Education Department Open House',
    'Maria Mitchell Observatory, Room 211'
  ); ?>
    <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '3:00–5:00 p.m.',
    'Affinity Connections',
    'Main Building, 1st and 2nd floors, and the Jeh Vincent Johnson ALANA Cultural Center'
  ); ?>
  <p>Reconnect, reminisce, and celebrate community during <strong>Affinity Connections</strong> at Reunion Weekend! These gatherings bring together alums with shared experiences.</p>
<ul>
	<li><strong>AAAVC:</strong> African American Alumnae/i of Vassar College </li>
	<li><strong>AANHPI:</strong> Asian American and Native Hawaiian/Pacific Islander alums</li>
	<li><strong>Athletics:</strong> Brewers alum-athletes and coaches</li>
	<li><strong>FLI:</strong> First-generation alums (formerly Transitions)</li>
	<li><strong>International Alums:</strong> Vassar’s global alum community</li>
	<li><strong>Jeh Vincent Johnson ALANA Cultural Center:</strong> ALANA student organization members and affiliated alums</li>
	<li><strong>LGBTQ+ Alums:</strong> Alums connected to the LGBTQ Center and community</li>
	<li><strong>WVKR Alums:</strong> Independent radio station alums and friends</li>
</ul>
<p>All are welcome!</p>

  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '3:30–4:30 p.m.',
    'Lecture'
  ); ?>

<h4><a href="../lectures/#the-science-of-food-shopping-in-a-postpan-world">The Science of Food Shopping in a Postpan World</a></h4>
<p><strong>Location:</strong> The Vassar Institute for the Liberal Arts, Beech Room</p>

  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '3:30–4:30 p.m.',
    'Beyond the Book: Vassar Authors Discuss the Writing Process',
    'Rockefeller 200'
  ); ?>
    <p>Moderated by Annette Banks Candido ’80<br>
Join us for an inspiring and intimate session at this year’s reunion, where accomplished alum authors, Morgan Baker, Sally Bourrie, Pari Forood, and Eric Marcus, each a member of the Class of ’80, will take center stage to share their personal experiences navigating the writing and publishing world. Beyond the Book invites attendees to sit in on a candid conversation that will delve into the emotional and creative journey of writing from the initial spark of an idea, through the challenges and revelations of the process, to the powerful moment of completion and release. Authors will share candid reflections on what drove them to write, how they navigated self-doubt and discipline, and how publishing their work has impacted their lives. Whether you’re an aspiring writer or a curious reader, this conversation promises insight and inspiration.</p>
  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '3:30–5:00 p.m.',
    'Lecture and Tour'
  ); ?>

<h4><a href="../lectures/#centennial-celebration-of-the-arboretum-history-of-the-arboretum-plus-the-future-vision-for-the-arboretum">Centennial Celebration of the Arboretum: History of the Arboretum Plus the Future Vision for the Arboretum</a></h4>
<p><strong>Location:</strong> Taylor 203</p>

  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '3:30–5:00 p.m.',
    'Annual Ferry House Mini-Reunion at Reunion',
    'Ferry House Outdoor Patio (weather permitting)'
  ); ?>
  <p>Calling all Ferries for an informal reception with light refreshments.</p>
  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '5:00–6:00 p.m.',
    '“Friends of Bill”',
    'Rockefeller 112'
  ); ?>
   <?php echo end_schedule_item_dropdown(); ?>

  
    <?php echo schedule_item_dropdown(
      '5:00–6:00 p.m.',
      'Night Owls Concert',
      'Taylor 102'
    ); ?>
      <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '5:30–6:30 p.m.',
    'Donor Societies Reception (By Invitation)',
    'Thompson Memorial Library Lawn Tent'
  ); ?>
  <p>A special reception for members of the 1861 Loyalty Society and Matthew Vassar Legacy Society in appreciation for those who have made Vassar a philanthropic priority.</p>
  <?php echo end_schedule_item_dropdown(); ?>

    <?php echo schedule_item_dropdown(
    '6:30 p.m.',
    'Class of 1975 Photo',
    'Davison Steps (facing Raymond Ave)'
  ); ?>
   <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '6:45–9:30 p.m.',
    'Reunion Bash: Close the Weekend with Memories, Music, and BBQ',
    'Davison Tent'
  ); ?>
    <p>Let’s wrap up the long weekend in style with our exciting finale event—enjoy live entertainment by the mentalist duo <a href="https://www.evason.com/">The Evasons</a> and a fabulous dinner of mouthwatering BBQ food, with accompanying salads and side dishes, to treat all palates for the perfect end to an unforgettable celebration!</p>
  <?php echo end_schedule_item_dropdown(); ?>

  <?php echo schedule_item_dropdown(
    '10:00 p.m.–1:00 a.m.',
    'Our Favorite Music: Songs You Heard in the Hallways Played and Sung by 1975’s Very Own',
    'Davison Tent',
  ); ?>
  
  <p>Join us for one last intimate gathering of live music in our tent—where classmates’ talent will again entertain you with familiar tunes and lively melodies from the 60s and 70s. Sip your favorite brew, boogie if you want, chat with friends, and enjoy a night of unforgettable music!</p>
  <?php echo end_schedule_item_dropdown(); ?>


  <h3 id="sunday" class="schedule-item__heading">Sunday, June 8</h3>

  <?php echo schedule_item_dropdown(
    '7:30 a.m.–noon',
    'Breakfast/Brunch',
    'Gordon Commons (formerly ACDC)',
  ); ?>
    <p>(included for those staying on campus, credit card accepted for those staying off campus)</p>
  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '8:00 a.m.–1:00 p.m.',
    'Reunion Information Center is Open',
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
    'Davison is Open for Check-Out'
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
    
    <p>A service honoring members of our reuning classes, as well as faculty, administrators, and staff who have passed since the last Reunion. Rooted in religious and humanist traditions, this service offers a time for remembrance. The Alumnae/i Choir and College Organist Gail Archer will perform.</p>

    <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '1:00 p.m.',
    'Reunion Adjourns/Check-Out'
  ); ?>
  <p>Please return room keys to Guest Services Coordinators in residence halls.</p>
  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '1:00 p.m.',
    'NYC Charter Bus Departs from Main Circle',
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
