<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */


$page_info = '{
  "page_title":"Alum Recognition Committee Vice Chair",
  "page_classes":"",
  "feature_image":"/alums/assets/img/alums-community/aavc/board/Stephanie-Goldberg.jpg"
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

<?php echo sec_fullBleedImageColumn(
    'Stephanie Goldberg ’14',
    '/alums/assets/img/alums-community/aavc/board/Stephanie-Goldberg.jpg',
    'image-is-first theme-cream',
    '',
    ['img_alt_text' => 'Stephanie Goldberg ’14, a person with long, wavy dark hair wearing a sleeveless white top and a necklace with a small pendant, smiling while standing outdoors in front of a body of water and forested hills.']
); ?>

  <ul class="clean-list-with-borders">
    <li>Alum Recognition Committee Vice Chair and Clubs Committee Member</li>
    <li>(she/her/hers)</li>
    <li>New York</li>
    <li>Term of Service: 2025–2029</li>
  </ul>

<?php echo end_sec_fullBleedImageColumn(); ?>

<?php echo sec_regularContent(
    'Additional Vassar Volunteer Experience',
    null,
    '',
    ''
); ?>
<p>Vice Chair, AAVC Alum Recognition Committee, 2024–present and off-board committee member, 2020–2024; President, Vassar Club of New York, 2024–present, and Program Committee Co-Chair, 2020–2024, and Social Media Coordinator, 2020–2023, and Communications Co-Chair, 2021–2022, and Programming Chair, 2018–2020, and Deputy Programming Chair, 2016–2018; Off-board committee member, AAVC Clubs Committee, 2024–present; Co-President, Class of 2014, 2019–present, and Social Media Coordinator, 2020–2024, and Class Fund Chair, 2014–2019, and Co-Chair, 2014–2019, and  Volunteer, 2014–2015; Volunteer, Club Admission Committee, 2018–present and 2014–2016.</p>
<?php echo end_sec_regularContent(); ?>

<?php echo sec_regularContent(
    'Professional/Community Experience',
    'theme-extralightgray',
    '',
    ''
); ?>
<p>Associate Director, Partner Development, Global Digital Business, Sony Music Entertainment, 2023–present; Marketing Chair, Women’s Initiative Network, Sony Music Entertainment, 2023–present; Talent Advisory Group Executive Council Member, Sony Music Entertainment, 2023–present; President, Emerging Professionals NYC, Sony Music Entertainment, 2023–present; Sustainability Task Force Member, Sony Music Entertainment, 2021–present; Fostering Rescue Animals, 2017–present; Associate Director, E-Commerce and Marketing, Sony Music Entertainment, 2021–2023; Communications & Membership Chair, Emerging Professionals NYC, Sony Music Entertainment, 2020–2023; Co-Chair, Recent Alumni Network, New York University, 2020–2021; Brand Manager/Project Manager, Merchandising, Sony Music Entertainment, 2019–2021; Board Member, Recent Alumni Network, New York University, 2019–2020; Sponsorships Director, A2IM Indie Week and Libera Awards 2022, Marauder, 2022; Sponsorships Director, A2IM Indie Week and Libera Awards 2019, Marauder, 2019; Music and Social Change Lab Manager, New York University, 2018-2019; Sync Licensing Intern, SyncShop, Sony Music Entertainment, 2018; Executive Intern to Rob Stringer, CEO of Sony Music, Sony Music Entertainment, 2018; Special Projects, Office of the President, Lincoln Center for the Performing Arts, 2017–2018; Project Manager, Hall of Fame and Visual Art, Lincoln Center for the Performing Arts 2017; Administrative Assistant, Hall of Fame, Lincoln Center for the Performing Arts, 2015–2017; Program Assistant, Community and Family Programs, Lincoln Center Education, Lincoln Center for the Performing Arts, 2015; Jazz Programming Intern, The John F. Kennedy Center for the Performing Arts, 2014; Friends Office Coordinator, Tanglewood Music Center, Boston Symphony Orchestra, 2014; Intern, New York, The Recording Academy, 2013; Assistant Sound Engineer, John C. Baker Recordings, LLC, 2013.</p>
<?php echo end_sec_regularContent(); ?>


<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/give/give-volunteer.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/resources/resources-vassar-network.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/give/give-mentor.php');?>
<?php echo end_sec_relatedTopics(); ?>


<?php echo site_footeralums(); ?>
