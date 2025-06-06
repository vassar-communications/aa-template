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
        'https://www.vassar.edu/faculty/jdeleeuw',
        'Associate Professor of Cognitive Science',
        '/alums/assets/img/alums-calendar/reunion/2025-lectures/joshua-de-leeuw-kr_0018_72.jpg',
        'Joshua De Leeuw, a smiling person with short tousled brown hair, wearing rectangular glasses and a light pink shirt.'
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

    <?php echo presentation_member_list('Moderator'); ?>
      <?php echo presentation_member(
        'Julián Aguilar ’23',
        'https://www.linkedin.com/in/julenragu/',
        null,
        '/alums/assets/img/alums-calendar/reunion/2025-lectures/Julian-Aguilar.jpg',
        'Julian Aguilar, a cheerful person with short curly hair, wearing a navy blue shirt and a pearl necklace, standing on a campus lawn with a brick building behind.'
      ); ?>
    <?php echo end_presentation_member_list(); ?>
  <?php echo end_presentation_item(); ?>

  <?php echo presentation_item(
    'The <a href="https://offices.vassar.edu/environmental-cooperative/">Environmental Cooperative</a> and <a href="https://www.vassar.edu/preserve">the Preserve</a> at Vassar Farm',
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
    'Exploration of <em>The Dream of a Common Movement: Selected Writings of Urvashi Vaid</em> (Edited by Jyotsna Vaid and Amy Hoffman, Duke University Press, 2025)',
    'Rockefeller 200',
    '3:30 p.m.'
  ); ?>
    <?php echo presentation_content(); ?>
      <p>Urvashi Vaid ’79 (1958–2022) was a trailblazing feminist and civil rights activist  whose progressive vision for social change and prolific organizing skills profoundly shaped the LGBTQ+ rights movement and the social justice movement more broadly. In this session, her sisters, Jyotsna Vaid ’76 (who co-edited a recent collection of Urvashi’s writings) and Rachna Vaid ’75 will share their reflections on their sister’s life and impact, and will invite others to share their own thoughts about Urvashi. They will be joined by Jyotsna’s child Alok (they/them), who is a poet, comedian, public speaker, and actor, and author of “Beyond the Gender Binary,” “Femme in Public,” and “Your Wound, My Garden.”</p>
    <?php echo end_presentation_content(); ?>

    <?php echo presentation_member_list('Presenters'); ?>
      <?php echo presentation_member(
        'Jyotsna Vaid ’76',
        'https://www.linkedin.com/in/jyotsna-vaid-2a357312/',
        null,
        '/alums/assets/img/alums-calendar/reunion/2025-lectures/Jyotsna-Vaid26665-1463x2048.jpg',
        'Jyotsna Vaid, a smiling person with short curly black hair, wearing a dark blazer and pearl earrings.'
      ); ?>
      <?php echo presentation_member(
        'Rachna Vaid ’75',
        'https://www.nyu.edu/about/leadership-university-administration/office-of-the-president/general-counsel/compliance-and-risk-management/compliance-officer-bios/rachna-vaid.html',
        null,
        '/alums/assets/img/alums-calendar/reunion/2025-lectures/Rachna-Vaid.jpg',
        'Rachna Vaid, a composed person with shoulder-length brown hair, wearing hoop earrings and red lipstick.'
      ); ?>
    <?php echo end_presentation_member_list(); ?>
  <?php echo end_presentation_item(); ?>


  <?php echo presentation_item(
    'Walking Tour of the Vassar College Class Trees',
    'Meet in front of Rockefeller Hall (Library side)',
    '3:30 p.m.'
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
  'The Vassar Institute for the Liberal Arts, Elm Room',
  '2:00 p.m.'
); ?>
  <?php echo presentation_content(); ?>
    <p>Join Robert Brigham, Professor of History on the Shirley Ecker Boskey Chair and Faculty Director of The Institute for the Liberal Arts, and Marianne Begemann, Director of Strategic Planning and Academic Resources and Associate Professor of Chemistry, for a presentation about the College’s newest community resource and a special look into early Institute programming followed by a Q&A.</p>
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
      'https://www.vassar.edu/faculty/begemann',
      'Director of Strategic Planning and Academic Resources and Associate Professor of Chemistry',
      '/alums/assets/img/alums-calendar/reunion/2025-lectures/marianne-begemann-1112-tt-_0076_72.jpg',
      'Marianne Begemann, a calm-looking person with short brown hair and glasses, wearing drop earrings and a black top.'
    ); ?>
  <?php echo end_presentation_member_list(); ?>
<?php echo end_presentation_item(); ?>



<?php echo presentation_item(
  'The Science of Food Shopping in a Postpan World',
  'The Vassar Institute for the Liberal Arts, Beech Room',
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
  'Centennial Celebration of the Arboretum: History of the Arboretum Plus the Future Vision for the Arboretum',
  'Taylor 203',
  '3:30 p.m.'
); ?>
  <?php echo presentation_content(); ?>
    <p>Yvonne Elet, Professor of Art, and Kenneth Foster, Vassar’s new Director of Sustainability, will speak about the history of the Arboretum and campus landscape development along with the College’s future plans and sustainability efforts. Following the talk, join Yvonne and Ken for a continuation of the discussion as they tour the Arboretum.</p>
  <?php echo end_presentation_content(); ?>

  <?php echo presentation_member_list('Presenters'); ?>
    <?php echo presentation_member(
      'Yvonne Elet',
      'https://www.vassar.edu/faculty/yvelet',
      'Professor of Art',
      '/alums/assets/img/alums-calendar/reunion/2025-lectures/Yvonne-Elet.jpg',
      'Yvonne Elet, a person with long brown hair, wearing tortoiseshell glasses and pearl earrings.'
    ); ?>
      <?php echo presentation_member(
        'Kenneth Foster',
        'https://www.vassar.edu/sustainability/contact',
        'Director of Sustainability',
        '/alums/assets/img/alums-calendar/reunion/2025-lectures/kenneth-foster-portrait.jpg',
        'Kenneth Foster, a smiling person with short dark hair and a gray beard, wearing glasses and a blue striped shirt, in front of a blurred background of bookshelves.'
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
