
<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
 ?>
<?php

/* PAGE INFO === */

$page_info = '{
  "page_title": "Class Visits",
  "feature_image": "/admission/assets/images/visit/class-visits/0073-19-05-ja-tugade-bridge-vassar-331.jpg"
}';

/* === */

$page_info = json_decode($page_info, true);

/*
$page_info = [
  'page_title' => 'Class Visits',
  'feature_image' => '/assets/images/placeholders/placeholder-banner.png'
];
 */

?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation(); ?>

<?php echo page_partialmasthead(
  $page_info['feature_image'],
  ['image_alt_text' => 'Students sit with a faculty member at a round table in the main hallway of the Bridge for Laboratory Sciences']
); ?>

<?php echo interior_page_nav() ?>

<?php /*  PAGE CONTENT === */ ?>


<?php echo sec_fullBleedImageColumn(
    null,
    $admission_img_path.'visit/virtual/110519_160over90_Vassar_0348.jpg',
    'image-is-first theme-cream',
    ''
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <p class="intro-text">Want to experience the virtual Vassar classroom? Check out these pre-recorded classes on a range of topics, including music, astronomy, political science, and many more.</p>
</div>
<?php echo end_sec_fullBleedImageColumn(); ?>


<?php echo sec_hasColumns(
    'Featured Classes',
    3,
    null,
    'theme-charcoal bg-dark',
    ''
); ?>




<?php echo item_cardWithTextVideoModal(
    'Late Communism in the Eastern Bloc: Can It Tell Us Anything Today?',
    '445515683?h=866fe27c58&',
    'vimeo',
    ['url' => '/admission/assets/images/visit/video-thumbnails/late-communism-in-the-eastern-bloc.jpg', 'alt' => 'replacealttxt' ],
    '',
    ['hlevel' => 4]
); ?>
<p>Paulina Bren, Adjunct Associate Professor of International Studies</p>
<?php echo end_item_cardWithTextVideoModal(); ?>



<?php echo item_cardWithTextVideoModal(
    'What Happens When You Don’t Recover from a Viral Infection?',
    '449842635?h=be17268af3&',
    'vimeo',
    ['url' => '/admission/assets/images/visit/video-thumbnails/what-happens-when-you-dont-recover-from-a-viral-infection.jpg', 'alt' => 'replacealttxt' ],
    '',
    ['hlevel' => 4]
); ?>
<p>David Esteban, Associate Professor of Biology and The Pauline Newman Director of Science, Technology, and Society</p>
<?php echo end_item_cardWithTextVideoModal(); ?>



<?php echo item_cardWithTextVideoModal(
    'The Impact of COVID-19 on the Lives of Women in Ethiopia’s Garment Industry',
    '442151291?h=2dd7839911&',
    'vimeo',
    ['url' => '/admission/assets/images/visit/video-thumbnails/the-impact-of-covid-19-on-the-lives-of-women-in-ethiopias-garment-industry.jpg', 'alt' => 'replacealttxt' ],
    '',
    ['hlevel' => 4]
); ?>
<p>Gisella A. Kagy, Assistant Professor of Economics</p>
<?php echo end_item_cardWithTextVideoModal(); ?>



<?php echo item_cardWithTextVideoModal(
    'Why Punish? A Conversation on Retributive Justice',
    '441118703?h=ebb1426ff7&',
    'vimeo',
    ['url' => '/admission/assets/images/visit/video-thumbnails/why-punish-a-conversation-on-retributive-justice.jpg', 'alt' => 'replacealttxt' ],
    '',
    ['hlevel' => 4]
); ?>
<p>Barry Lam, Associate Professor of Philosophy</p>
<?php echo end_item_cardWithTextVideoModal(); ?>



<?php echo item_cardWithTextVideoModal(
    'The White Disavowal of Racism: What It Means When the Central Park Dog-Walker, Amy Cooper, Says She’s Not a Racist',
    '441195376?h=eda4b5bf7e&',
    'vimeo',
    ['url' => '/admission/assets/images/visit/video-thumbnails/the-white-disavowal-of-racism.jpg', 'alt' => 'replacealttxt' ],
    '',
    ['hlevel' => 4]
); ?>
<p>Jonathon Kahn, Professor of Religion</p>
<?php echo end_item_cardWithTextVideoModal(); ?>



<?php echo item_cardWithTextVideoModal(
    'Beethoven, the Eroica Symphony, and Prince Lobkowitz’s Musical Workshop',
    '442351752?h=4b3c1444b4&',
    'vimeo',
    ['url' => '/admission/assets/images/visit/video-thumbnails/the-white-disavowal-of-racism.jpg', 'alt' => 'replacealttxt' ],
    '',
    ['hlevel' => 4]
); ?>
<p>Kathryn Libin, Associate Professor of Music</p>
<?php echo end_item_cardWithTextVideoModal(); ?>




<?php echo item_cardWithTextVideoModal(
    'Decolonial Practice as Anti-Racist Labor: Reflections on Indigenous Minneapolis Through Poetry',
    '447580446?h=65c49bb57f&',
    'vimeo',
    ['url' => '/admission/assets/images/visit/video-thumbnails/decolonial-practice-as-anti-racist-labor-reflections-on-indigenous-minneapolis-through-poetry.jpg', 'alt' => 'replacealttxt' ],
    '',
    ['hlevel' => 4]
); ?>
<p>Molly McGlennan, Associate Professor of English and Director of American Studies</p>
<?php echo end_item_cardWithTextVideoModal(); ?>


<?php echo item_cardWithTextVideoModal(
    'Molecular Insights into Microbial Pathogens: Understanding the Inner Molecular Workings of Bacteria and Viruses',
    '450228303?h=281c87d3ac&',
    'vimeo',
    ['url' => '/admission/assets/images/visit/video-thumbnails/molecular-insights-into-microbial-pathogens.jpg', 'alt' => 'replacealttxt' ],
    '',
    ['hlevel' => 4]
); ?>
<p>Krystle McLaughlin, Assistant Professor of Chemistry</p>
<?php echo end_item_cardWithTextVideoModal(); ?>

<?php echo item_cardWithTextVideoModal(
    'Black Judges, Police Encounters, and the Administration of Justice',
    '441114418?h=9bd31681e9&',
    'vimeo',
    ['url' => '/admission/assets/images/visit/video-thumbnails/black-judges-police-encounters-and-the-administration-of-justice.jpg', 'alt' => 'replacealttxt' ],
    '',
    ['hlevel' => 4]
); ?>
<p>Taneisha Means, The Class of 1951 Assistant Professor of Political Science</p>
<?php echo end_item_cardWithTextVideoModal(); ?>

<?php echo item_cardWithTextVideoModal(
    'The Port of Santo Domingo: Climate Change and the Perils of Poverty Where the Caribbean Meets the Ozama',
    '444515356?h=06e875d9fc&',
    'vimeo',
    ['url' => '/admission/assets/images/visit/video-thumbnails/the-port-of-santo-domingo.jpg', 'alt' => 'replacealttxt' ],
    '',
    ['hlevel' => 4]
); ?>
<p>Lisa Paravisini-Gebert, Randolph Distinguished Professor of Hispanic Studies and Director of Environmental Studies</p>
<?php echo end_item_cardWithTextVideoModal(); ?>

<?php echo item_cardWithTextVideoModal(
    'The Most Beautiful of All Printed Books: William Morris’ Kelmscott Chaucer',
    '444332664?h=c0bf8dfec7&',
    'vimeo',
    ['url' => '/admission/assets/images/visit/video-thumbnails/the-most-beautiful-of-all-printed-books-william-morris-kelmscott-chaucer.jpg', 'alt' => 'replacealttxt' ],
    '',
    ['hlevel' => 4]
); ?>
<p>Ron Patkus, Head of Special Collections and Adjunct Associate Professor of History on the Frederick Weyerhaeuser Chair</p>
<?php echo end_item_cardWithTextVideoModal(); ?>

<?php echo item_cardWithTextVideoModal(
    'John Stuart Mill and the “Dismal Science”',
    '444212755?h=6be113e12b&',
    'vimeo',
    ['url' => '/admission/assets/images/visit/video-thumbnails/john-stuart-mill-and-the-dismal-science.jpg', 'alt' => 'replacealttxt' ],
    '',
    ['hlevel' => 4]
); ?>
<p>Paul Ruud, Professor and Chair of Economics</p>
<?php echo end_item_cardWithTextVideoModal(); ?>

<?php echo item_cardWithTextVideoModal(
    'Studying the Formation of Planets with the James Webb Space Telescope: A Look at the Beginning of Time',
    '441121443?h=70679985bd&',
    'vimeo',
    ['url' => '/admission/assets/images/visit/video-thumbnails/studying-formation-of-planets.jpg', 'alt' => 'replacealttxt' ],
    '',
    ['hlevel' => 4]
); ?>
<p>Colette Salyk, Assistant Professor of Astronomy</p>
<?php echo end_item_cardWithTextVideoModal(); ?>

<?php echo item_cardWithTextVideoModal(
    'Coral Reefs in a Warming World: A Look at One of the Most Spectacular Ecosystems on Earth',
    '441129632?h=9baaef4b44&
',
    'vimeo',
    ['url' => '/admission/assets/images/visit/video-thumbnails/coral-reefs-in-a-warming-world.jpg', 'alt' => 'replacealttxt' ],
    '',
    ['hlevel' => 4]
); ?>
<p>Jodi Schwarz, Associate Professor of Biology</p>
<?php echo end_item_cardWithTextVideoModal(); ?>

<?php echo item_cardWithTextVideoModal(
    'What Can We Learn from a Tiny Worm? Three Short Tales of the Impact of Pesticides and Microplastics on Health',
    '440702464?h=78fc2cae43&',
    'vimeo',
    ['url' => '/admission/assets/images/visit/video-thumbnails/what-can-we-learn-from-a-tiny-worm.jpg', 'alt' => 'replacealttxt' ],
    '',
    ['hlevel' => 4]
); ?>
<p>Kate Susman, Professor of Biology on The Jacob P. Giroud, Jr. Chair of Natural History and Associate Dean of The Faculty</p>
<?php echo end_item_cardWithTextVideoModal(); ?>

<?php echo item_cardWithTextVideoModal(
    'Architecture Embodying Opposites: Freedom and Slavery in Southwest Nigeria (1880s–1910s)',
    '442150603?h=1fa3c992cf&',
    'vimeo',
    ['url' => '/admission/assets/images/visit/video-thumbnails/architecture-embodying-opposites.jpg', 'alt' => 'replacealttxt' ],
    '',
    ['hlevel' => 4]
); ?>
<p>Adedoyin Teriba, Assistant Professor of Art and Urban Studies</p>
<?php echo end_item_cardWithTextVideoModal(); ?>

<?php echo item_cardWithTextVideoModal(
    'The Climate Challenge: International Cooperation, China and Learning from the Field',
    '446904283?h=bd1fa913d0&',
    'vimeo',
    ['url' => '/admission/assets/images/visit/video-thumbnails/the-climate-challenge-international-cooperation-china-and-learning-from-the-field.jpg', 'alt' => 'replacealttxt' ],
    '',
    ['hlevel' => 4]
); ?>
<p>Yu Zhou, Professor of Geography</p>
<?php echo end_item_cardWithTextVideoModal(); ?>

<?php echo end_sec_hasColumns(); ?>

<!-- Related Topics -->
<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/visit/visit-virtual-programs.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/visit/visit-in-person.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/visit/visit-group-visits.php');?>
<?php echo end_sec_relatedTopics(); ?>

<?php echo site_footer(); ?>

<?php
echo item_modal_standardVideo();
?>
