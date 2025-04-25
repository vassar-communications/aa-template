<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */


$page_info = '{
  "page_title":"Lectures and Tours",
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

<h3 class="schedule-item__heading">Friday, June 6</h3>

  <?php echo presentation_item(
    'Utilizing AI in the Vassar Classroom',
    'New England 105',
    '2:00 p.m.'
  ); ?>
    <?php echo presentation_content(); ?>
      <p>Joshua de Leeuw, Associate Professor of Cognitive Science, will demonstrate the AI teaching engine he and his students have created in order to enhance teaching in his classroom. </p>
    <?php echo end_presentation_content(); ?>

    <?php echo presentation_member_list('Presenter'); ?>
      <?php echo presentation_member(
        'Joshua de Leeuw',
        '',
        'Associate Professor of Cognitive Science',
        '',
        ''
      ); ?>
    <?php echo end_presentation_member_list(); ?>
  <?php echo end_presentation_item(); ?>



  <?php echo presentation_item(
    'New Brews: A Showcase of Student Innovation and Entrepreneurship',
    'Rockefeller 200',
    '2:00 p.m.'
  ); ?>
    <?php echo presentation_content(); ?>
      <p>Discover the next generation of changemakers! Hear from students about their creative projects, startups, and social ventures. From groundbreaking ideas to hands-on solutions, explore how Vassar students are turning passion into impact through the Vassar Innovation and Entrepreneurship (VIE) Program.</p>
    <?php echo end_presentation_content(); ?>

    <?php echo presentation_member_list('Presenters'); ?>
      <?php echo presentation_member(
        'presenter one',
        '',
        '',
        '',
        ''
      ); ?>
      <?php echo presentation_member(
        'presenter two',
        '',
        '',
        null,
        null
      ); ?>
    <?php echo end_presentation_member_list(); ?>
  <?php echo end_presentation_item(); ?>

  <?php echo presentation_item(
    'The <a href="https://offices.vassar.edu/environmental-cooperative/">Environmental Cooperative</a> and <a href="https://www.vassar.edu/preserve">the Preserve</a> at Vassar Tour',
    'Shuttles depart from Main Circle',
    '2:00 p.m.',
    null,
    '4',
    ['alternate_id' => 'vassar-preserve-environmental-cooperative']
  ); ?>
    <?php echo presentation_content(); ?>
      <p>Conservation, sustainability, and an exploration of the natural world are all core values at Vassar. Join Jennifer Rubbo, Director of the Environmental Cooperative, and Kerri VanCamp, Director of the Preserve at Vassar, and learn about one of the College’s greatest gems. The talk will take place at the Vassar Barns and will be followed by an optional guided walking tour of the Preserve at 3:30 p.m. (weather permitting). Sensible shoes and long pants are strongly suggested.</p>
    <?php echo end_presentation_content(); ?>

    <?php echo presentation_member_list('Presenters'); ?>
      <?php echo presentation_member(
        'Jennifer Rubbo',
        'https://www.linkedin.com/in/jennifer-rubbo-909877160/',
        'Director of the Environmental Cooperative',
        '/alums/assets/img/alums-calendar/reunion/2025-lectures/Jennifer-Rubbo.jpg',
        'Jennifer Rubbo, a relaxed person with curly dark brown hair, wearing a floral top and sitting outdoors among trees.'
      ); ?>
      <?php echo presentation_member(
        'Keri VanCamp',
        'https://www.linkedin.com/in/keri-vancamp-4966a177/',
        'Director of the Preserve at Vassar',
        '/alums/assets/img/alums-calendar/reunion/2025-lectures/Keri-VanCamp.jpg',
        'Keri VanCamp, a thoughtful-looking person with straight brown hair, wearing a fleece jacket and neck gaiter while sitting on a rock ledge with a mountain view behind.'
      ); ?>
    <?php echo end_presentation_member_list(); ?>
  <?php echo end_presentation_item(); ?>


  <?php echo presentation_item(
    'Exploration of The Dream of a Common Movement: Selected Writings of Urvashi Vaid (Edited by Jyotsna Vaid and Amy Hoffman, Duke University Press, 2025)',
    'Rockefeller 300',
    '3:30 p.m.'
  ); ?>
    <?php echo presentation_content(); ?>
      <p>Urvashi Vaid ’79 (1958–2022) was a trailblazing feminist and civil rights activist  whose progressive vision for social change and prolific organizing skills profoundly shaped the LGBTQ+ rights movement and the social justice movement more broadly. In this session, her sisters, Jyotsna Vaid ’76 (who co-edited a recent collection of Urvashi’s writings) and Rachna Vaid ’75 will share their reflections on their sister's life and impact, and will invite others to share their own thoughts about Urvashi.</p>
    <?php echo end_presentation_content(); ?>

    <?php echo presentation_member_list('Presenter'); ?>
      <?php echo presentation_member(
        'Jyotsna Vaid ’76',
        '',
        null,
        '',
        ''
      ); ?>
      <?php echo presentation_member(
        'Rachna Vaid ’75',
        '',
        null,
        '',
        ''
      ); ?>
    <?php echo end_presentation_member_list(); ?>
  <?php echo end_presentation_item(); ?>


  <?php echo presentation_item(
    'Walking Tour of the Vassar College Class Trees',
    'Meet in front of Rockefeller Hall (Library side)',
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
        'A person with a black baseball cap, a tan shirt, and a thin gray beard, smiles at the camera.'
      ); ?>
      <?php echo presentation_member(
        'Laura Graceffa ’87',
        'https://www.linkedin.com/in/laura-graceffa-3b14009/',
        null,
        '/alums/assets/img/alums-calendar/reunion/2025-lectures/Laura-Graceffa.jpg',
        'Laura Graceffa, a smiling person with short gray hair and red lipstick, wearing a light top and drop earrings.'
      ); ?>
    <?php echo end_presentation_member_list(); ?>
  <?php echo end_presentation_item(); ?>



<h3 class="schedule-item__heading">Saturday, June 7</h3>

<?php echo presentation_item(
  'The Vassar Institute for the Liberal Arts and The Heartwood',
  'The Vassar Institute for the Liberal Arts, Elm room',
  '2:00 p.m.'
); ?>
  <?php echo presentation_content(); ?>
    <p>Join Robert Brigham, Professor of History on the Shirley Ecker Boskey Chair and Faculty Director of The Institute for the Liberal Arts and Marianne Begemann, Director of Strategic Planning and Academic Resources and Associate Professor of Chemistry, for a presentation about the College’s newest community resource and a special look into early Institute programming followed by a Q&A.</p>
  <?php echo end_presentation_content(); ?>

  <?php echo presentation_member_list('Presenters'); ?>
    <?php echo presentation_member(
      'Robert Brigham',
      'https://www.vassar.edu/faculty/robrigham',
      'Professor of History and Inaugural Faculty Director of Vassar’s Institute for the Liberal Arts',
      '/alums/assets/img/alums-calendar/reunion/2024-lectures/Robert-Brigham.jpg',
      'A person with a bald head and a gray beard and mustache, wearing a suit, looks at the viewer.'
    ); ?>
    <?php echo presentation_member(
      'Marianne Begemann',
      '',
      'Director of Strategic Planning and Academic Resources and Associate Professor of Chemistry',
      '',
      ''
    ); ?>
  <?php echo end_presentation_member_list(); ?>
<?php echo end_presentation_item(); ?>



<?php echo presentation_item(
  'The Science of Food Shopping in a Postpan World',
  'The Vassar Institute for the Liberal Arts, Beech room',
  '3:30 p.m.'
); ?>
  <?php echo presentation_content(); ?>
    <p>Paco Underhill ’75, environmental psychologist, market research consultant, and New York Times bestselling author.</p>
  <?php echo end_presentation_content(); ?>

  <?php echo presentation_member_list('Presenter'); ?>
    <?php echo presentation_member(
      'Paco Underhill ’75',
      'https://pacounderhill.com/',
      null,
      '/alums/assets/img/alums-calendar/reunion/2025-lectures/Paco-Underhill.jpg',
      'Paco Underhill, a gentle-looking person with a graying beard and bald head, wearing a green jacket and white scarf.'
    ); ?>
  <?php echo end_presentation_member_list(); ?>
<?php echo end_presentation_item(); ?>


  <?php echo presentation_item(
    'Beyond the Book: Vassar Authors Discuss the Writing Process',
    'Rockefeller 200',
    '3:30 p.m.'
  ); ?>
    <?php echo presentation_content(); ?>
      <p>Class of 1980 presents an author panel discussion featuring Sallie Bourrie, Eric Marcus, Morgan Baker, and Pari Forood. Learn about the journeys that led these authors to write their books, the effect that writing these books has had on their lives, and their love of writing. We will not only discuss book content but also discover what inspires them to write and what they hope each book imparts to its readers. The session will include a Q&A with the authors.</p>
    <?php echo end_presentation_content(); ?>

    <?php echo presentation_member_list('Presenters'); ?>
      <?php echo presentation_member(
        'Sallie Bourrie ’80',
        'https://sallybourrie.com/',
        null,
        '/alums/assets/img/alums-calendar/reunion/2025-lectures/Sally-Bourrie.jpg',
        'Sally Bourrie, a smiling person with long, wavy brown hair, wearing a white top.'
      ); ?>
      <?php echo presentation_member(
        'Eric Marcus ’80',
        'https://www.linkedin.com/in/ericmarcus2/',
        null,
        '/alums/assets/img/alums-calendar/reunion/2025-lectures/Eric-Marcus.jpg',
        'Eric Marcus, a smiling person with short dark hair, wearing a black shirt.'
      ); ?>
      <?php echo presentation_member(
        'Morgan Baker ’80',
        'https://www.bymorganbaker.com/',
        null,
        '/alums/assets/img/alums-calendar/reunion/2025-lectures/Morgan-Baker.jpg',
        'Morgan Baker, a cheerful person with shoulder-length reddish hair and glasses, wearing a white turtleneck.'
      ); ?>
      <?php echo presentation_member(
        'Pari Forood ’80',
        'https://pariforood.com/',
        null,
        '/alums/assets/img/alums-calendar/reunion/2025-lectures/Pari-Forood.jpg',
        'Pari Forood, a smiling person with light brown, wavy hair parted to the side, wearing pearl earrings.'
      ); ?>
    <?php echo end_presentation_member_list(); ?>
  <?php echo end_presentation_item(); ?>


<?php echo presentation_item(
  'Centennial Celebration of the Arboretum; History of the Arboretum plus the 
Future Vision for the Arboretum',
  'Taylor 203',
  '3:30 p.m.',
  null,
  '4',
  [
    'id_modifier' => '-2'
  ]
); ?>
  <?php echo presentation_content(); ?>
    <p>Yvonne Elet, Professor of Art, and Kenneth Foster, Vassar’s new Director of Sustainability, will speak about the history of the Arboretum and campus landscape development along with the College’s future plans and sustainability efforts. Following the talk, join Yvonne and Ken for a continuation of the discussion as they tour the Arboretum.</p>
  <?php echo end_presentation_content(); ?>

  <?php echo presentation_member_list('Presenters'); ?>
    <?php echo presentation_member(
      'Yvonne Elet',
      '',
      'Professor of Art',
      '',
      ''
    ); ?>
      <?php echo presentation_member(
        'Kenneth Foster',
        '',
        'Director of Sustainability',
        '',
        ''
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
