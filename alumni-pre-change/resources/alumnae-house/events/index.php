<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */

$page_info = '{
  "page_title":"Event Planning",
  "page_classes":"",
  "feature_image":"/alumni/assets/img/alumni-resources/alumnae-house/events/Reunion_1806_CS_073.jpg"
}';

/* === */
$page_info = json_decode($page_info, true);


?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation_alums(); ?>

<?php echo page_partialmasthead($page_info['feature_image'], ['image_alt_text' => 'Gathering of people dining inside Alumnae House']); ?>

<?php echo interior_page_nav() ?>

<?php /*  PAGE CONTENT === */ ?>


<?php echo sec_fullBleedImageColumn(
    'Events at Alumnae House',
    $alumni_img_path.'alumni-resources/alumnae-house/events/Reunion_1806_CS_070.jpg',
    'image-is-first theme-cream',
    '',
    ['img_alt_text' => 'Overhead view of a set table and people seated around it']
); ?>
<div class="animate-when-content-appears animation-slide-up">

    <p class="">Alumnae House has served as the quintessential meeting place for Vassar College alumni throughout the last century, and  is open to the public for catered events. The iconic building offers an array of stylish settings and services for small to large gatherings, special occasions, and meetings.</p>

    <p>To reserve space or for more information, contact Martha Barry, Alumnae House Manager, at <?php echo phone_number('845-437-7150'); ?> or <a href="mailto:mabarry@vassar.edu">mabarry@vassar.edu</a>.</p>

</div>
<?php echo end_sec_fullBleedImageColumn(); ?>

<?php echo sec_regularContent(
    'Weddings',
    null,
    '',
    ''
); ?>
<p>The historic charm and architecture of Alumnae House provide a sophisticated and elegant setting for wedding receptions, whether they are small, intimate gatherings or larger affairs. The grand Living Room, with its stunning triptych, grand piano, and period furnishings, provides ample space for cocktails and dancing. The walnut-paneled Dining Room seats up to 100 guests with a variety of table configurations. A lush garden terrace is available during the warmer months, while our wood-burning fireplaces create a warm and welcoming ambiance when it’s cold outside.</p>
<p>The Dining Room can seat up to 100 guests, though Alumnae House can accommodate larger receptions when a seated meal is not required.</p>
<p>All guest rooms may be blocked by the couple for the entire weekend, making Alumnae House a convenient home-base for the wedding party and their families.</p>
<p>Select one of our award-winning caterers for all of your food and beverage needs. Alumnae House provides basic china, flatware, glassware, linens, tables, and chairs. Special or custom items may be obtained through your caterer. The caterers are given full access to the Alumnae House kitchen.</p>
<p>The Alumnae House manager and staff will work with you to plan the wedding of your dreams and make your special day memorable. We can also assist with planning your rehearsal dinner, welcoming reception, or brunch after the wedding.</p>
<p>To inquire about hosting a wedding reception at Alumnae House, please contact Martha Barry, Alumnae House Manager, at <?php echo phone_number('845-437-7150'); ?> or <a href="mailto:mabarry@vassar.edu">mabarry@vassar.edu</a>.</p>
</p>
<?php echo end_sec_regularContent(); ?>

<?php echo sec_regularContent(
    'Meetings and Retreats',
    'theme-verylightgray',
    '',
    ''
); ?>

<p>Alumnae House offers a non-traditional venue to hold meetings or retreats for your business or organization. Our different-sized rooms accommodate meetings and break-out sessions. The relaxed setting, privacy, and tranquility of the inn are a nice change of pace for attendees that will allow them to focus on your agenda with a fresh perspective.</p>

<p>Tables, chairs, linens, a projector and screen, podium, mic and speaker, whiteboards, and easels are included with the site fee. Select one of our award-winning caterers for all of your food and beverage needs, including served meals, buffets, refreshments, and coffee breaks.</p>

<p>If you are planning a retreat over multiple days, Alumnae House has 20 guest rooms that may be reserved for your business or organization.</p>

<p>To inquire about having a meeting or retreat at Alumnae House, please contact Martha Barry, Alumnae House Manager, at <?php echo phone_number('845-437-7150'); ?> or <a href="mailto:mabarry@vassar.edu">mabarry@vassar.edu</a>.</p>

</p>
<?php echo end_sec_regularContent(); ?>


<?php echo sec_regularContent(
    'Celebrations and Special Events',
    null,
    '',
    ''
); ?>

<p>Alumnae House, a hidden gem in the heart of the Hudson Valley, can accommodate large and small events including engagement parties, bridal showers, rehearsal dinners, weddings, baby showers, birthday celebrations, graduation parties, anniversaries, family reunions, retirement parties, B’nai Mitzvahs, Baptismal/Confirmation celebrations, Sweet 16 parties, Quinceaneras, Iftars, and memorial or celebration of life receptions.</p>

<p>Local businesses, organizations, and schools find Alumnae House to be a unique venue to host holiday parties, fundraisers, banquets, award ceremonies, receptions, classes, reunions, retreats, and other special occasions.</p>

<p>The Living Room, with its stunning triptych, grand piano, and period furnishings, provides ample space for all types of gatherings. The walnut-paneled Dining Room seats up to 100 guests with a variety of table configurations. A lush garden terrace is available during the warmer months, while our wood-burning fireplaces create a warm and welcoming ambiance when it’s cold outside. The Pub and Library are smaller rooms suitable for intimate gatherings. Individual or multiple rooms may be reserved to meet your specific needs.</p>

<p>Tables, chairs, linens, a projector and screen, podium, mic and speaker, whiteboards, and easels are included with the site fee. Select one of our award-winning caterers for all of your food and beverage needs.</p>

<p>To inquire about hosting an event at Alumnae House, please contact Martha Barry, Alumnae House Manager, at <?php echo phone_number('845-437-7150'); ?> or <a href="mailto:mabarry@vassar.edu">mabarry@vassar.edu</a>.</p>



<?php echo end_sec_regularContent(); ?>



<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/alumni/inc/pages/resources/resources-vassar-network.php');?>
<?php include($project_paths['main_project_root'].'/alumni/inc/pages/contact/contact.php');?>
<?php include($project_paths['main_project_root'].'/alumni/inc/pages/calendar/calendar.php');?>
<?php echo end_sec_relatedTopics(); ?>


<?php echo site_footeralumni(); ?>
