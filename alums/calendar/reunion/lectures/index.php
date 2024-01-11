<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */


$page_info = '{
  "page_title":"College-sponsored Lectures and Tours",
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

<h3 class="schedule-item__heading">Friday, May 31</h3>

  <?php echo presentation_item(
    'Honoring Childhood for 96 years at the Wimpfheimer Nursery School',
    'Rockefeller Hall, Room 200',
    '2:00 p.m.'
  ); ?>
    <?php echo presentation_content(); ?>
      <p>Join Wimpfheimer Nursery School Director Carol Murray for a presentation and conversation about this remarkable Vassar jewel and its younger companion, The ITC (Infant and Toddler Center).</p>
    <?php echo end_presentation_content(); ?>

    <?php echo presentation_member_list('Presenter'); ?>
      <?php echo presentation_member(
        'Carol Murray',
        null,
        'Wimpfheimer Nursery School Director',
        '/alums/assets/img/alums-calendar/reunion/2024-lectures/Carol-Murray.jpg',
        'A person with shoulder-length brown hair standing against a wall of paper leaves smiles as the viewer.'
      ); ?>
    <?php echo end_presentation_member_list(); ?>
  <?php echo end_presentation_item(); ?>



  <?php echo presentation_item(
    'Capital Project Planning: Past, Present and Future',
    'Rockefeller Hall, Room 300',
    '2:00 p.m.'
  ); ?>
    <?php echo presentation_content(); ?>
      <p>Ever wondered what drives the prioritization of Vassar’s asset renewal projects and strategic capital investments? Join us to find out.</p>
    <?php echo end_presentation_content(); ?>

    <?php echo presentation_member_list('Presenters'); ?>
      <?php echo presentation_member(
        'Marianne Begemann ’79',
        'https://www.vassar.edu/faculty/begemann',
        'Dean of Strategic Planning and Academic Resources and Professor of Chemistry',
        '/alums/assets/img/alums-calendar/reunion/2023-lectures/begemann.jpg',
        'A photo of a person with short, straight, brown hair; glasses; and a black shirt, smiling at the camera.'
      ); ?>
      <?php echo presentation_member(
        'Maxine Coleman',
        null,
        'Assistant Vice President of Facilities Operations',
        null,
        null
      ); ?>
    <?php echo end_presentation_member_list(); ?>
  <?php echo end_presentation_item(); ?>

  <?php echo presentation_item(
    'Tour of the <a href="https://offices.vassar.edu/environmental-cooperative/">Environmental Cooperative</a> and <a href="https://www.vassar.edu/preserve">Vassar Preserve</a>',
    'Shuttles depart from Main Circle',
    '2:00 p.m.',
    null,
    '4',
    ['alternate_id' => 'vassar-preserve-environmental-cooperative']
  ); ?>
    <?php echo presentation_content(); ?>
      <p>Conservation, sustainability and an exploration of the natural world are all core values at Vassar. Explore one of the College’s greatest gems on this guided walking tour (weather permitting). Sensible shoes and long pants are strongly suggested.</p>
    <?php echo end_presentation_content(); ?>

    <?php echo presentation_member_list('Presenters'); ?>
      <?php echo presentation_member(
        'Jennifer Rubbo',
        null,
        'Director of the Environmental Cooperative',
        null,
        null
      ); ?>
      <?php echo presentation_member(
        'Keri VanCamp',
        null,
        'Director of the Field Station and Ecological Preserve',
        null,
        null
      ); ?>
    <?php echo end_presentation_member_list(); ?>
  <?php echo end_presentation_item(); ?>


  <?php echo presentation_item(
    'The Road to an AI Future: Promises and Pitfalls',
    'New England Building 105',
    '3:30 p.m.'
  ); ?>
    <?php echo presentation_content(); ?>
      <p>Recent advances in one form of artificial intelligence (Large Language Models or LLMs) have raised important questions about how these systems might change the ways in which we live and work. We will then consider the range of ways in which the emergence of LLM technology could change how humans think and interact with one another, potentially changing not only our social, economic, and political lives, but quite possibly our private lives as well. Is it possible to manage the emergence of this new technology into human life in a way that enhances our humanity for the long term rather than diminishing or even destroying it?</p>
    <?php echo end_presentation_content(); ?>

    <?php echo presentation_member_list('Presenter'); ?>
      <?php echo presentation_member(
        'Kenneth Livingston',
        'https://www.vassar.edu/faculty/livingst',
        'Professor of Cognitive Science',
        '/alums/assets/img/alums-calendar/reunion/2024-lectures/Ken-Livingston.jpg',
        'A person with short grey hair and a grey beard and mustache holding a soldering iron smiles at the viewer.'
      ); ?>
    <?php echo end_presentation_member_list(); ?>
  <?php echo end_presentation_item(); ?>


  <?php echo presentation_item(
    'Sounds and Science: Grants in Action at Vassar',
    'Meet at the Bridge for Laboratory Sciences Atrium (Chapel side)',
    '3:30 p.m.'
  ); ?>
    <?php echo presentation_content(); ?>
      <p>Join us for a field trip to the Bridge for Laboratory Sciences to visit the college’s new state-of-the-art confocal microscope, and to Skinner Hall's Dickinson Music Library to learn about the digitization of 80-years of Vassar music-making—both made possible by highly competitive extramural grants.</p>
    <?php echo end_presentation_content(); ?>

    <?php echo presentation_member_list('Facilitators'); ?>
      <?php echo presentation_member(
        'Christina Johnson',
        null,
        'Assistant Dean for Grants Development & Administration',
        null,
        null
      ); ?>
      <?php echo presentation_member(
        'Gary Hohenberger ’97',
        null,
        'Associate Vice President, Foundation & Government Relations',
        null,
        null
      ); ?>
    <?php echo end_presentation_member_list(); ?>

    <?php echo presentation_member_list('Presenters'); ?>
      <?php echo presentation_member(
        'Hadley Bergstrom',
        'https://www.vassar.edu/faculty/habergstrom',
        'Associate Professor of Psychological Science',
        '/alums/assets/img/alums-calendar/reunion/2024-lectures/Hadley-Bergstrom.jpg',
        'A person with a shaved head and a short beard and mustache wearing a sweater over a white button down shirt smiles at the camera.'
      ); ?>
      <?php echo presentation_member(
        'Sarah Canino',
        '',
        'Music Librarian (Director)',
        null,
        null
      ); ?>
    <?php echo end_presentation_member_list(); ?>
  <?php echo end_presentation_item(); ?>


  <?php echo presentation_item(
    'Michael Gross ’74 - Flight of the Wasp: The Rise, Fall and Future of America’s Original Ruling Class',
    'New England Building 206',
    '3:30 p.m.'
  ); ?>
    <?php echo presentation_content(); ?>
      <p>Join Rebecca Edwards, Professor of History on the Elloise Ellory Chair, for an interview with renowned author Michael Gross ’74 about his new book.</p>
    <?php echo end_presentation_content(); ?>

    <?php echo presentation_member_list('Presenters'); ?>
      <?php echo presentation_member(
        'Rebecca Edwards',
        'https://www.vassar.edu/faculty/reedwards',
        'Professor of History on the Elloise Ellory Chair',
        '/alums/assets/img/alums-calendar/reunion/2024-lectures/Rebecca-Edwards.jpg',
        'A person with short straight brown hair wearing glasses smiles at the viewer.'
      ); ?>
      <?php echo presentation_member(
        'Michael Gross ’74',
        '',
        null,
        '/alums/assets/img/alums-calendar/reunion/2024-lectures/Michael-Gross.jpg',
        'A person with short curly dark hair wearing a leather jacket smiles at the viewer.'
      ); ?>
    <?php echo end_presentation_member_list(); ?>
  <?php echo end_presentation_item(); ?>


  <?php echo presentation_item(
    'Walking Tour of the Vassar College Arboretum',
    'Meet at the entrance to Main in front of Main Circle.',
    '3:30 p.m.'
  ); ?>
    <?php echo presentation_content(); ?>
      <p>Enjoy a leisurely walk, discover fascinating fun facts about trees, and learn about the increasing importance of campus trees for our efforts to be more sustainable and achieve carbon neutrality. Our itinerary will include visits to the reuning classes' class trees. Please wear comfortable walking shoes and dress for the weather.</p>
    <?php echo end_presentation_content(); ?>

    <?php echo presentation_member_list('Presenters'); ?>
      <?php echo presentation_member(
        'Mark Schlessman',
        'https://www.vassar.edu/faculty/emeriti/schlessman',
        'Emeritus Professor of Biology',
        '/alums/assets/img/alums-calendar/reunion/2023-lectures/schlessman.jpg',
        'A photo of a person with a black baseball cap, a tan shirt, and a thin gray beard, smiling at the camera'
      ); ?>
      <?php echo presentation_member(
        'Laura Graceffa ’87',
        null,
        null,
        '/alums/assets/img/alums-calendar/reunion/2023-lectures/Laura_Graceffa.jpg',
        'A photo of a person with short dark gray hair, smiling at the camera'
      ); ?>
    <?php echo end_presentation_member_list(); ?>
  <?php echo end_presentation_item(); ?>



<h3 class="schedule-item__heading">Saturday, June 1</h3>

<?php echo presentation_item(
  'Paula Williams Madison ’74 - Finding Samuel Lowe: From Harlem to China',
  'Rosenwald Screening Room in Vogelstein Center for Drama and Film',
  '2:30 p.m.'
); ?>
  <?php echo presentation_content(); ?>
    <p>Join Sophia Harvey, Associate Professor of Film for a glimpse at Paula Madison’s compelling documentary that chronicles her journey to her maternal grandfather’s homeland in China and the reconnection of her nuclear family with his 300+ descendants.</p>

<p>An Afro-Chinese-Jamaican Harlem family seeks their Chinese grandfather who was forever separated from their mother - his 3-year-old half-Chinese, half-Jamaican daughter - in Jamaica in1920. Samuel Lowe (Lowe Ding Chow) returned to China for the last time in 1933 with his Chinese wife and two youngest daughters after having already taken three sons and another daughter there previously.</p>
 
<p>After a 91-year separation, his Black Chinese Jamaican grandchildren, led by Paula Williams Madison ’74, who never knew their family journey to China where they find Samuel Lowe's 300 Chinese descendants and the entire clan is reunited. The film takes viewers to Harlem, Toronto, Martha's Vineyard, three cities in Jamaica and two cities in China to see these families of different races become One.</p>

<p><a href="https://vimeo.com/70450824">Watch Paula Madison’s documentary with the password FSLd!st5rn</a>.
  <?php echo end_presentation_content(); ?>

  <?php echo presentation_member_list('Presenters'); ?>
    <?php echo presentation_member(
      'Sophia Harvey',
      'https://www.vassar.edu/faculty/soharvey',
      'Associate Professor of Film',
      '/alums/assets/img/alums-calendar/reunion/2024-lectures/Sophia-harvey.jpg',
      'A person with short black and gray hair wearing glasses and a green sweater smiles at the viewer.'
    ); ?>
    <?php echo presentation_member(
      'Paula Williams Madison ’74',
      '',
      null,
      '/alums/assets/img/alums-calendar/reunion/2024-lectures/Paula-Madison.jpg',
      'A person with very curly short dark brown hair wearing glasses and a pink shirt smiles at the viewer.'
    ); ?>
  <?php echo end_presentation_member_list(); ?>
<?php echo end_presentation_item(); ?>



<?php echo presentation_item(
  'Celebrating the Alumnae House Centennial: Honoring the Past, Reimagining the Future',
  'Alumnae House, Living Room',
  '2:30 p.m.'
); ?>
  <?php echo presentation_content(); ?>
    <p>Join us for a special panel discussion reflecting on the history of Alumnae House, from the initial gift that led to its founding and the work of artist Violet Oakley, to the key role alums have played in sustaining and modernizing the house over the past century. Looking to the future, we'll discuss how this key part of Vassar's campus will remain a forever home that fosters a sense of belonging for alums across generations for the century ahead. Moderated by AAVC Board Director James Estrada ’13, Chair, Alumnae House Committee.</p>
  <?php echo end_presentation_content(); ?>

  <?php echo presentation_member_list('Moderator'); ?>
    <?php echo presentation_member(
      'James Estrada ’13',
      'https://www.vassar.edu/alums/community/aavc/board-members/aavc-alumnae-house-committee-chair/',
      'AAVC Board Director and Chair, Alumnae House Committee',
      '/alums/assets/img/alums-calendar/reunion/2024-lectures/James-Estrada.jpg',
      'A person with short dark hair and a beard and mustache wearing a gray and black patterned jacket smiles at the viewer.'
    ); ?>
  <?php echo end_presentation_member_list(); ?>
<?php echo end_presentation_item(); ?>


  <?php echo presentation_item(
    'Climate Tales from a Southwestern Lake: Lessons for the Future',
    'Rockefeller 210',
    '2:30 p.m.'
  ); ?>
    <?php echo presentation_content(); ?>
      <p>Kirsten Menking, Professor of Earth Science on the Althea Ward Clark Chair and Environmental Studies Program Director, has studied the history of climate change in central New Mexico (last ~70,000 years) through a combination of numerical modeling and lake sediment records from now dry Lake Estancia.  Come hear what the lake has to tell us about future climate in this arid region that is experiencing rapid population growth and that has been designated as a site for nuclear waste disposal.</p>
    <?php echo end_presentation_content(); ?>

    <?php echo presentation_member_list('Presenter'); ?>
      <?php echo presentation_member(
        'Kirsten Menking',
        'https://www.vassar.edu/faculty/kimenking',
        'Professor of Earth Science on the Althea Ward Clark Chair and Environmental Studies Program Director',
        '/alums/assets/img/alums-calendar/reunion/2024-lectures/Kirsten-Menking.jpg',
        'A person with short medium brown straight hair wearing glasses and standing under a tree smiles at the viewer.'
      ); ?>
    <?php echo end_presentation_member_list(); ?>
  <?php echo end_presentation_item(); ?>


  <?php echo presentation_item(
    'Enhancing Resilience: Strategies for Mental Health at Vassar and Beyond',
    'New England Building 206',
    '2:30 p.m.'
  ); ?>
    <?php echo presentation_content(); ?>
      <p>Join Associate Dean of Student Living and Wellness Luis Jimenez Inoa and Director of Counseling Service Wendy Freedman as they delve into the multifaceted world of mental wellness at Vassar and in higher education. From proactive support structures to the evolving needs of today's students, this session will engage attendees in a critical dialogue about the importance of mental health in the academic journey.</p>
    <?php echo end_presentation_content(); ?>

    <?php echo presentation_member_list('Presenters'); ?>
      <?php echo presentation_member(
        'Luis Jimenez Inoa',
        '',
        'Associate Dean of Student Living and Wellness',
        '/alums/assets/img/alums-calendar/reunion/2024-lectures/Luis-Inoa.jpg',
        'A person with short curly black hair and a beard and mustache wearing glasses smiles at the viewer.'
      ); ?>
       <?php echo presentation_member(
        'Wendy Freedman',
        '',
        'Director of Counseling Service',
        '/alums/assets/img/alums-calendar/reunion/2024-lectures/Wendy-Freedman.jpg',
        'A person with shoulder length wavy brown hair stands under a tree and smiles at the viewer.'
      ); ?>
   <?php echo end_presentation_member_list(); ?>
  <?php echo end_presentation_item(); ?>


  <?php echo presentation_item(
    'Pulitzer Prize winning author Ada Ferrer ’84 presents “Cuba: An American Story”, and other works of Cuban history',
    'Rockefeller 310',
    '2:30 p.m.'
  ); ?>
    <?php echo presentation_content(); ?>
      <p>All are welcome.</p>
    <?php echo end_presentation_content(); ?>

    <?php echo presentation_member_list('Presenter'); ?>
      <?php echo presentation_member(
        'Ada Ferrer ’84',
        '',
        null,
        '/alums/assets/img/alums-calendar/reunion/2024-lectures/Ada-Ferrer.jpg',
        'A person wih chin-length curly brown hair wearing glasses and a dark sweater smiles at the viewer.'
      ); ?>
    <?php echo end_presentation_member_list(); ?>
  <?php echo end_presentation_item(); ?>


<?php echo presentation_item(
  'Walking Tour of the Vassar College Arboretum',
  'Meet at the entrance to Main in front of Main Circle.',
  '2:30 p.m.',
  null,
  '4',
  [
    'id_modifier' => '-2'
  ]
); ?>
  <?php echo presentation_content(); ?>
    <p>Enjoy a leisurely walk, discover fascinating fun facts about trees, and learn about the increasing importance of campus trees for our efforts to be more sustainable and achieve carbon neutrality. Our itinerary will include visits to the reuning classes’ class trees. Please wear comfortable walking shoes and dress for the weather.</p>
  <?php echo end_presentation_content(); ?>

  <?php echo presentation_member_list('Presenters'); ?>
    <?php echo presentation_member(
      'Mark Schlessman',
      'https://www.vassar.edu/faculty/emeriti/schlessman',
      'Emeritus Professor of Biology',
      '/alums/assets/img/alums-calendar/reunion/2023-lectures/schlessman.jpg',
      'A photo of a person with a long gray beard and a white shirt with a black tie, smiling at the camera'
    ); ?>
      <?php echo presentation_member(
        'Laura Graceffa ’87',
        null,
        null,
        '/alums/assets/img/alums-calendar/reunion/2023-lectures/Laura_Graceffa.jpg',
        'A photo of a person with short dark gray hair, smiling at the camera'
      ); ?>
  <?php echo end_presentation_member_list(); ?>
<?php echo end_presentation_item(); ?>


<?php echo presentation_item(
  'Intergenerational Dialogue: Life Survival Hacks and Vassar Experiences',
  'Location TBD',
  '4:00 p.m.'
); ?>
  <?php echo presentation_content(); ?>
    <p>Join members of classes of 1969, 1999, 2019 and 2024 for non-hierarchical and intergenerational conversation where the audience members are the participants.
Facilitated by Ellie Winter ’18, AAVC Board member and Chair of the Student and Young Alumnae/i Engagement Committee (SYAEC).</p>
  <?php echo end_presentation_content(); ?>

  <?php echo presentation_member_list('Facillitator'); ?>
    <?php echo presentation_member(
      'Ellie Winter ’18',
      'https://www.vassar.edu/alums/community/aavc/board-members/aavc-ad-hoc-student-young-alums-engagement-committee-chair/',
      'AAVC Board member and Chair of the Student and Young Alumnae/i Engagement Committee (SYAEC)',
      '/alums/assets/img/alums-calendar/reunion/2024-lectures/Ellie-Winter.jpg',
      'A person with shoulder length curly black hair wearing glasses and a black suit jacket smiles at the viewer.'
    ); ?>
  <?php echo end_presentation_member_list(); ?>
<?php echo end_presentation_item(); ?>


<?php echo presentation_item(
  'Stop Making Sense: The Art of Inspiring Anybody',
  'Rockefeller 210',
  '4:00 p.m.'
); ?>
  <?php echo presentation_content(); ?>
    <p>We all crave the awesome energy of inspiration, but what if we didn’t have to wait for it to strike on its own stingy schedule? What if each of us could <em>be</em> inspiring, summoning our own muse-like power to move the world? Michael Fanuele ’94, one of the world’s most successful marketing strategists, shares tips and tricks from his best-selling book that’ll help unleash the inspiring leader within us all. With insights from music, politics, business, neuroscience, and even a recipe for radishes, <em>Stop Making Sense</em> is a fun and provocative blueprint for leadership, which, according to Andrew Zimmern ’84, is exactly what you’d get “if Brene Brown and Simon Sinek had a book baby.”</p>
  <?php echo end_presentation_content(); ?>

  <?php echo presentation_member_list('Presenter'); ?>
    <?php echo presentation_member(
      'Michael Fanuele ’94',
      '',
      null,
      '/alums/assets/img/alums-calendar/reunion/2024-lectures/Michael-Fanuele.jpg',
      'A person with very short hair and a short beard and mustache grins at the viewer.'
    ); ?>
  <?php echo end_presentation_member_list(); ?>
<?php echo end_presentation_item(); ?>


<?php echo presentation_item(
  'A Conversation About Health, Education, and Politics in America',
  'Rockfeller 300',
  '4:00 p.m.'
); ?>
  <?php echo presentation_content(); ?>
    <p>Join three Vassar faculty members for an exploration of modern American culture through the lenses of their scholarship and current course offerings.</p>
  <?php echo end_presentation_content(); ?>

  <?php echo presentation_member_list('Presenters'); ?>
    <?php echo presentation_member(
      'Sidney Plotkin',
      'https://www.vassar.edu/faculty/plotkin',
      'Professor of Political Science',
      '/alums/assets/img/alums-calendar/reunion/2024-lectures/Sidney-Plotkin.jpg',
      'A person with short white hair and a beard and mustache wearing a blue sweater over a blue shirt smiles at the viewer.'
    ); ?>
    <?php echo presentation_member(
      'Catherine Do Tan',
      'https://www.vassar.edu/faculty/ctan',
      'Assistant Professor of Sociology',
      '/alums/assets/img/alums-calendar/reunion/2024-lectures/Catherine-Tan.jpg',
      'A person with short straight black hair wearing an orange colored dress smiles off to one side of the viewer.'
    ); ?>
    <?php echo presentation_member(
      'Kimberly Williams Brown',
      'https://www.vassar.edu/faculty/kwilliamsbrown',
      'Assistant Professor of Education',
      '/alums/assets/img/alums-calendar/reunion/2024-lectures/Kimberly-Williams-Brown.jpg',
      'A person with black hair in braids styled on top of their head, wearing glasses and a black suit, smiles at the viewer.'
    ); ?>
  <?php echo end_presentation_member_list(); ?>
<?php echo end_presentation_item(); ?>


<?php echo presentation_item(
  'Sneak Peek at the Institute for the Liberal Arts',
  'Meet at Chicago Hall Gate',
  '4:00 p.m.'
); ?>
  <?php echo presentation_content(); ?>
    <p>Join Robert Brigham, Professor of History and the Inaugural Faculty Director of Vassar’s Institute for the Liberal Arts, and Olympia Management for a tour of Vassar’s newest community resource and a sneak peek into early Institute programming.</p>
  <?php echo end_presentation_content(); ?>

  <?php echo presentation_member_list('Presenter'); ?>
    <?php echo presentation_member(
      'Robert Brigham',
      'https://www.vassar.edu/faculty/robrigham',
      'Professor of History and Inaugural Faculty Director of Vassar’s Institute for the Liberal Arts',
      '/alums/assets/img/alums-calendar/reunion/2024-lectures/Robert-Brigham.jpg',
      'A person with a bald head and a gray beard and mustache, wearing a suit, looks at the viewer.'
    ); ?>
  <?php echo end_presentation_member_list(); ?>
<?php echo end_presentation_item(); ?>



<?php echo end_sec_regularContent(); ?>


<?php echo relatedTopics(); ?>

<?php include($project_paths['main_project_root'].'/alums/inc/pages/give/give.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/give/give-volunteer.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/calendar/calendar.php');?>
<?php echo end_sec_relatedTopics(); ?>


<?php echo site_footeralums(); ?>
