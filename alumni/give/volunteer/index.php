<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */


$page_info = '{
  "page_title":"Volunteer",
  "page_classes":"",
  "feature_image":"/assets/images/placeholders/placeholder-banner.png"
}';

/* === */
$page_info = json_decode($page_info, true);

?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation_alums(); ?>

<?php echo page_partialmasthead($page_info['feature_image'], ['image_alt_text' => 'needsalttxt']); ?>

<?php echo interior_page_nav() ?>

<?php /*  PAGE CONTENT === */ ?>


<?php echo sec_fullBleedImageColumn(
    'Get Involved',
    '/alumni/assets/img/alumni-give/volunteer/0009-18-01-cs-scc-vassar-144.jpg',
    'theme-cream image-is-first',
    ''
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <p class="intro-text">Thousands of alumni and parents share their time and expertise with Vassar students and fellow community members every year.</p>
</div>
<?php echo end_sec_fullBleedImageColumn(); ?>



<?php echo sec_wideContent(
    'Already a Volunteer?',
    '',
    'theme-charcoal bg-dark  presentation quad-pattern has-bg',
    'mw-4 text-center'
); ?>
<h2 class="h2 mb-5">Visit the volunteer portal for a full list of resources.</h2>
<a href="#" class="btn btn-primary arrow">I am a Volunteer</a>
<?php echo end_sec_wideContent(); ?>


<?php echo sec_regularContent(
    'Explore Volunteer Opportunities',
    'theme-burgundy',
    ''
); ?>
<p>If you want to deepen relationships, expand your community, and devote time and expertise to things you care about, you’ll find great opportunities to do so as a Vassar volunteer. It is an incredible way to enrich your life and the lives of others in countless ways.</p>

<p>To get started, fill out the Volunteer Interest Form to indicate your interest in volunteering or find the role in the list below that best fits what you can bring to our volunteer community!</p>

<?php echo cta_link(
    '#',
    'Volunteer Interest Form'
); ?>

<?php echo end_sec_regularContent(); ?>



<?php echo sec_regularContent(
    'Recruitment & Fundraising',
    '',
    ''
); ?>

<?php echo item_iconItem(
    'Alumnae/i Admission Program (VCAAP)',
    'image',
    'icon-on-left theme-white-border'
); ?>
<p>The Vassar College Alumnae/i Admissions Program (VCAAP) connects alumni volunteers with various opportunities that support the work of Vassar’s Office of Admission. VCAAP volunteers help to increase the visibility of Vassar in their local communities and provide valuable points of contact for prospective students.</p>
<ul class="linked-list">
    <li><a href="#">Become a VCAAP Volunteer</a></li>
</ul>



<?php echo end_item_iconItem(); ?>


<?php echo item_iconItem(
    'Class Agents and Fund Chairs',
    'image',
    'icon-on-left theme-white-border'
); ?>
<p>Become part of the team that works in partnership with the Annual Giving team throughout the year to promote class engagement and financial support for the college. Fund chairs and class agents work with each other to inspire gifts to the Vassar Fund, providing crucial support for financial aid, student life, sustainability, and much more.</p>
<ul class="linked-list">
    <li><a href="#">Become a Class Fundraising Volunteer</a></li>
</ul>

<?php echo end_item_iconItem(); ?>
<?php echo end_sec_regularContent(); ?>

<?php echo sec_regularContent(
    'Community Building, Networking, & Events',
    'theme-cream',
    ''
); ?>

<?php echo item_iconItem(
    'Affinity Groups',
    'image',
    'icon-on-left theme-white-border'
); ?>
<p>Strengthen alumni communities that center shared experiences, activities, and identities, such as athletic teams, singing groups, LGBTQ+, ALANA orgs, veterans, and First Gen alums (among others).</p>
<ul class="linked-list">
    <li><a href="#">Learn more about Affinity Groups</a></li>
    <li><a href="#">Become an Affinity Group Volunteer</a></li>
</ul>



<?php echo end_item_iconItem(); ?>


<?php echo item_iconItem(
    'Vassar Classes',
    'image',
    'icon-on-left theme-white-border'
); ?>
<p>Class Leaders plan reunions and mini-reunions, administer social media groups, and help the college stay in touch with and informed about members of their class communities. Roles vary, but include event planning, outreach (general and fundraising), writing class notes for the alumni magazine, and more.</p>
<ul class="linked-list">
    <li><a href="#">Learn more about Vassar Classes</a></li>
    <li><a href="#">Become a Class Volunteer</a></li>
</ul>

<?php echo end_item_iconItem(); ?>

<?php echo item_iconItem(
    'Vassar Clubs',
    'image',
    'icon-on-left theme-white-border'
); ?>
<p>With more than 25 groups in the US and across the globe, Vassar Clubs provide opportunities for alumni—along with current students and their families—to build relationships across generations, nurture intellectual curiosity, support each other and the college community...and have fun while doing it! Thanks to Vassar Club volunteers, alumni can get together, wherever they live, and continue to build lasting connections beyond the College's gates.</p>
<ul class="linked-list">
    <li><a href="#">Learn more about Vassar Clubs</a></li>
    <li><a href="#">Become a Club Volunteer</a></li>
</ul>

<?php echo end_item_iconItem(); ?>


<?php echo end_sec_regularContent(); ?>

<?php echo sec_regularContent(
    'Personal & Professional Assistance',
    '',
    ''
); ?>

<?php echo item_iconItem(
    'Speaking/Presenting at Vassar Events',
    'image',
    'icon-on-left theme-white-border'
); ?>
<p>Vassar Clubs, individual classes and affinity groups all plan programs that feature alumni and parent experts. These programs can be purely educational and/or take the form of discussion-based workshops that build skills and deepen relationships. If you are interested in volunteering to lead a discussion or skills-based workshop for Vassar community members, please contact <a href="mailto:alumniengagement@vassar.edu">alumniengagement@vassar.edu</a>.</p>
<ul class="linked-list">
    <li><a href="mailto:alumniengagement@vassar.edu">Contact Us</a></li>
</ul>



<?php echo end_item_iconItem(); ?>


<?php echo item_iconItem(
    'VassarNet Online Mentoring',
    'image',
    'icon-on-left theme-white-border'
); ?>
<p>VassarNet is the college’s online platform where people at any stage of their professional life can share expertise, ask questions, and connect with one another. VassarNet users provide valuable advice and guidance to Vassar students and alumni, post job and internship opportunities for Vassar candidates, and network with thousands of members of the Vassar community.</p>
<ul class="linked-list">
    <li><a href="#">Join VasserNet</a></li>
</ul>

<?php echo end_item_iconItem(); ?>
<?php echo end_sec_regularContent(); ?>


<?php echo sec_wideContent(
    null,
    '',
    'theme-charcoal bg-dark  presentation quad-pattern has-bg',
    'mw-4 text-center'
); ?>
<h2 class="h2 mb-5">Our tenets of volunteering will give you a sense of the values uplifted within our community of creative and hardworking professionals and ambassadors.</h2>
<a href="#" class="btn btn-primary arrow">Read our best practices agreement for Vassar volunteers.</a>
<?php echo end_sec_wideContent(); ?>



<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/alumni/inc/pages/give/give-mentor.php');?>
<?php include($project_paths['main_project_root'].'/alumni/inc/pages/give/give-hire-vassar.php');?>
<?php include($project_paths['main_project_root'].'/alumni/inc/pages/give/give-support-vassar.php');?>
<?php echo end_sec_relatedTopics(); ?>


<?php echo site_footeralumni(); ?>

