<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
 ?>
<?php

/* PAGE INFO === */

$page_info = '{
    "page_title":"Explore Academics",
    "page_navTitle": "Academics",
    "feature_image":"https://vassartest.chuckyatsuk.com/img/explore/academics/110619_160over90_Vassar_6232.jpg"}';
/* === */
$page_info = json_decode($page_info, true);


?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation('burgundy-button'); ?>



<?php echo sec_fixedCenteredTitle_masthead_vid(
    '<b class="slide-from-left supertitle">Explore</b>
     <b class="slide-from-right">Academics</b>',
    '726089539?h=002128ec09',
    'theme-verylightgray reveal-image',
    'mw-4',
    ['bg-image-url' => $page_info['feature_image'],
                'bg-image-alt' => 'alt text',
                'css' => '
            --title-container-bg-beforeContent: rgba(0,0,0,0.4);
            --section-bg-image-opacity: 0;
            /* --section-title-faded-color: #444; */
            --bs-gap: 1rem;
            ']
); ?>

<?php echo end_sec_fixedCenteredTitle_masthead_vid(); ?>

<?php echo interior_page_nav() ?>



<?php /*  PAGE CONTENT === */ ?>


<?php echo masthead_interiorPage(
    'Learning is Innovation',
    'Vassar’s open curriculum allows you the freedom and flexibility to pursue your passions while discovering new interests. With no core classes or distribution requirements, you can choose to take the courses that most interest you and know that your classmates are fully engaged.',
    $admission_img_path.'explore/0084-19-05-ja-kumar-class-vassar-253.jpg',
    null,
    null,
    ['img_alt_text' => 'A professor stands among students during a class']
);
?>



<?php echo sec_wideContent(
    'Your Choices <span class="text-primary">=</span> Your Education',
    '<p class="intro-text">Vassar’s curriculum emphasizes a multidisciplinary approach to intellectual inquiry. With more than 1,000 courses to choose from and an average class size of ' . $facts['average_class_size'] . ', Vassar offers a customizable curriculum to satisfy any curiosity.</p>',
    'theme-cream pb-1 hidemark',
    'mw-3 pb-5'
); ?>
<?php echo item_dropdown($facts['number_of_majors'].' Majors', 'dropdown--feature bg-white shadow-sm mb-3'); ?>
<div class="row has-dividers">
    <div class="col-sm">
        <ul class="linked-list no-first-border">
            <li><a href="https://www.vassar.edu/africana-studies">Africana Studies&nbsp</a></li>
            <li><a href="https://www.vassar.edu/americanstudies">American and Native American Studies</a></li>
            <li><a href="https://www.vassar.edu/anthropology">Anthropology</a></li>
            <li><a href="https://www.vassar.edu/art/courses-and-requirements/art-history">Art History</a></li>
            <li><a href="https://www.vassar.edu/art/courses-and-requirements/studio-art">Art, Studio</a></li>
            <li><a href="https://www.vassar.edu/asianstudies">Asian Studies</a></li>
            <li><a href="https://www.vassar.edu/physicsandastronomy/astronomy/">Astronomy</a></li>
            <li><a href="https://www.vassar.edu/biochemistry">Biochemistry</a></li>
            <li><a href="https://www.vassar.edu/biology">Biology</a></li>
            <li><a href="https://www.vassar.edu/chemistry">Chemistry</a></li>
            <li><a href="https://www.vassar.edu/chineseandjapanese">Chinese</a></li>
            <li><a href="https://www.vassar.edu/cogsci">Cognitive Science</a></li>
            <li><a href="https://www.vassar.edu/computerscience">Computer Science</a></li>
            <li><a href="https://www.vassar.edu/dance">Dance</a></li>
            <li><a href="https://www.vassar.edu/drama">Drama</a></li>
            <li><a href="https://www.vassar.edu/earth-science-and-geography/majors-and-correlates/earth-science">Earth Science</a></li>
            <li><a href="https://www.vassar.edu/earth-science-and-geography/majors-and-correlates/earth-science-and-society">Earth Science and Society</a></li>
            <li><a href="https://www.vassar.edu/economics">Economics</a></li>

        </ul>
    </div>
    <div class="col-sm">
        <ul class="linked-list no-first-border">
            <li><a href="https://www.vassar.edu/education">Educational Studies</a></li>
            <li><a href="https://www.vassar.edu/english">English</a></li>
            <li><a href="https://www.vassar.edu/environmentalstudies">Environmental Studies</a></li>
            <li><a href="https://www.vassar.edu/film">Film</a></li>
            <li><a href="https://www.vassar.edu/french">French &amp; Francophone Studies</a></li>
            <li><a href="https://www.vassar.edu/earth-science-and-geography/majors-and-correlates/geography">Geography</a></li>
            <li><a href="https://www.vassar.edu/earth-science-and-geography/majors-and-correlates/geography-anthropology">Geography-Anthropology</a></li>
            <li><a href="https://www.vassar.edu/german">German Studies</a></li>
            <li><a href="https://www.vassar.edu/global-nineteenth-century-studies/">Global Nineteenth-Century Studies</a></li>
            <li><a href="https://www.vassar.edu/greekandromanstudies">Greek and Roman Studies</a></li>
            <li><a href="https://www.vassar.edu/hispanicstudies">Hispanic Studies</a></li>
            <li><a href="https://www.vassar.edu/history">History</a></li>
            <li><a href="https://www.vassar.edu/independentprogram">Independent Program</a></li>
            <li><a href="https://www.vassar.edu/internationalstudies">International Studies</a></li>
            <li><a href="https://www.vassar.edu/italian">Italian</a></li>
            <li><a href="https://www.vassar.edu/chineseandjapanese">Japanese</a></li>
            <li><a href="https://www.vassar.edu/jewishstudies">Jewish Studies</a></li>
            <li><a href="https://www.vassar.edu/latinamericanstudies">Latin American &amp; Latinx Studies</a></li>

        </ul>

    </div>
    <div class="col-sm">
        <ul class="linked-list no-first-border">
            <li><a href="https://www.vassar.edu/math">Mathematics</a></li>
            <li><a href="https://www.vassar.edu/mediastudies">Media Studies</a></li>
            <li><a href="https://www.vassar.edu/medievalandrenaissancestudies">Medieval &amp; Renaissance Studies</a></li>
            <li><a href="https://www.vassar.edu/music">Music</a></li>
            <li><a href="https://www.vassar.edu/neuroscienceandbehavior">Neuroscience and Behavior</a></li>
            <li><a href="https://www.vassar.edu/philosophy">Philosophy</a></li>
            <li><a href="https://www.vassar.edu/physicsandastronomy/physics/">Physics</a></li>
            <li><a href="https://www.vassar.edu/politicalscience">Political Science</a></li>
            <li><a href="https://www.vassar.edu/psychologicalscience">Psychological Science</a></li>
            <li><a href="https://www.vassar.edu/religion">Religion</a></li>
            <li><a href="https://www.vassar.edu/russian">Russian Studies</a></li>
            <li><a href="https://www.vassar.edu/sciencetechnologyandsociety">Science, Technology &amp; Society</a></li>
            <li><a href="https://www.vassar.edu/sociology">Sociology</a></li>
            <li><a href="https://www.vassar.edu/urbanstudies">Urban Studies</a></li>
            <li><a href="https://www.vassar.edu/women-feminist-queer-studies/">Women, Feminist, and Queer Studies</a></li>
        </ul>
    </div>
</div>
<?php echo end_item_dropdown(); ?>

<?php echo item_dropdown($facts['number_of_minors'] . 'Correlates (Minors)', 'dropdown--feature bg-white shadow-sm mb-3'); ?>
<div class="row has-dividers">
    <div class="col-sm">
        <ul class="linked-list no-first-border">
            <li>Africana Studies</li>
            <li>American Politics</li>
            <li>Analytic Philosophy</li>
            <li>Anthropology</li>
            <li>Arabic Language and Culture</li>
            <li>Art History</li>
            <li>Asian American Studies</li>
            <li>Asian Studies</li>
            <li>Astronomy</li>
            <li>Biology</li>
            <li>Biology and Culture</li>
            <li>British and American Literary History</li>
            <li>Chemistry</li>
            <li>Chinese</li>
            <li>Chinese and Japanese Literary and Cultural Studies</li>
            <li>Climate Change</li>
            <li>Comparative Philosophy</li>
            <li>Comparative Politics</li>
            <li>Computer Science</li>
            <li>Continental Philosophy</li>
        </ul>
    </div>
    <div class="col-sm">
        <ul class="linked-list no-first-border">
            <li>Creative Writing and Literary Forms</li>
            <li>Dance Performance</li>
            <li>Dance Studies</li>
            <li>Data Science and Society</li>
            <li>Earth Science</li>
            <li>Economics</li>
            <li>Educational Studies</li>
            <li>Environmental Studies</li>
            <li>Ethics and Social and Political Philosophy</li>
            <li>Film</li>
            <li>French and Francophone Studies</li>
            <li>Gender, Sexuality, and the Body</li>
            <li>Geography</li>
            <li>German</li>
            <li>Global Nineteenth-Century Studies</li>
            <li>Greek and Roman Studies</li>
            <li>Hispanic Studies</li>
            <li>History</li>
        </ul>
    </div>

    <div class="col-sm">
        <ul class="linked-list no-first-border">
            <li>History of Philosophy</li>
            <li>International Politics</li>
            <li>Italian</li>
            <li>Japanese</li>
            <li>Jewish Studies</li>
            <li>Latin American and Latinx Studies</li>
            <li>Literary Geographies</li>
            <li>Mathematics</li>
            <li>Medieval and Renaissance Studies</li>
            <li>Migration and Displacement Studies</li>
            <li>Music and Culture</li>
            <li>Music Composition</li>
            <li>Music History</li>
            <li>Music Performance</li>
            <li>Music Theory</li>
            <li>Native American Studies</li>
            <li>Physics</li>
            <li>Political Theory</li>
            <li>Prison Studies</li>
            <li>Race, Ethnicity, and Indigeneity</li>
            <li>Religion</li>
            <li>Russian Studies</li>
            <li>Sociology</li>
            <li>Studio Art</li>
            <li>Sustainability</li>
            <li>Urban Studies</li>
            <li>Women, Feminist, and Queer Studies</li>

        </ul>
    </div>
</div>
<?php echo end_item_dropdown(); ?>

<?php echo item_dropdown('Accelerated and Dual Degree Programs', 'dropdown--feature bg-white shadow-sm mb-3'); ?>



<div class="row mt-5">
    <div class="item col-sm">
        <figure role="group" class="caption caption-drupal-media align-center ">
            <a class="book-link" href="https://www.vassar.edu/academics/edinburgh-vassar-scholars-program">
                <img style="border: 2px solid #ddd;" loading="lazy" src="https://www.vassar.edu/sites/default/files/2024-11/u-edinburg-logo.png" alt="Illustration of a seal and text that reads: University of Edinburgh.">
            </a>
            <figcaption><a class="book-link" href="https://www.vassar.edu/academics/edinburgh-vassar-scholars-program"><em><strong>University of Edinburgh BA/MSc</strong></em><br><em>Edinburgh Futures Institute</em></a></figcaption>
        </figure>
    </div>
    <div class="item col-sm">
        <figure role="group" class="caption caption-drupal-media align-center ">
            <a class="book-link" href="https://www.vassar.edu/academics/vassar-dartmouth-degree-program">
                <img style="border: 2px solid #ddd;" loading="lazy" src="https://www.vassar.edu/sites/default/files/2024-11/dartmouth-logo.png" alt="Illustration of a shield and text that reads: 1867 Dartmouth Engineering.">
            </a>
            <figcaption><a class="book-link" href="https://www.vassar.edu/academics/vassar-dartmouth-degree-program"><em><strong>Dartmouth BA/BE</strong></em><br><em>Thayer School of Engineering</em></a></figcaption>
        </figure>
    </div>
    <div class="item col-sm">
        <figure role="group" class="caption caption-drupal-media align-center ">
            <a class="book-link" href="https://www.vassar.edu/academics/vassar-columbia-degree-program">
                <img style="border: 2px solid #ddd;" loading="lazy" src="https://www.vassar.edu/sites/default/files/2024-11/logo-columbia.png" alt="Illustration of a crown and text that reads: columbia mailman school of public health.">
            </a>
            <figcaption><a class="book-link" href="https://www.vassar.edu/academics/vassar-columbia-degree-program"><em><strong>Columbia BA/MPH</strong></em><br><em>Mailman School of Public Health</em></a></figcaption>
        </figure>
    </div>


    <div class="item col-sm">
        <figure role="group" class="caption caption-drupal-media align-center ">
            <a class="book-link" href="https://www.newpaltz.edu/mba/">
                <img style="border: 2px solid #ddd;" loading="lazy" src="https://www.vassar.edu/sites/default/files/2026-09/new-paltz.jpg" alt="The logo for New Paltz, State University of New York.">
            </a>
            <figcaption><a class="book-link" href="https://www.newpaltz.edu/mba/"><em><strong>SUNY New Paltz MBA </strong></em></a></figcaption>
        </figure>
    </div>


</div>



<div class="d-flex justify-content-center">
    <?php echo cta_link(
    'https://www.vassar.edu/academics/accelerated-and-dual-degree-programs',
    'Learn more about Accelerated and Dual Degree Programs'
); ?>
</div>
<?php echo end_item_dropdown(); ?>
<?php echo end_sec_wideContent(); ?>



<?php echo sec_fullBleedImageColumn(
    'Intensives',
    $admission_img_path.'explore/academics/110619_160over90_Vassar_7630.jpg',
    'image-is-first theme-charcoal bg-dark quad-pattern has-bg',
    '',
    ['img_alt_text' => 'Two people walking under the arched entrance to the Vassar Chapel']
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <p class="tagline">Dig Deep to Explore Your Interests</p>
    <p>Vassar’s Intensives take the individualized classroom experience further by creating even more opportunities for student-driven exploration and mentored research. Intensives are designed to promote forward-thinking, non-traditional class experiences that catalyze deeper learning.</p>
    <p>Examine some of the most pressing issues of our time through Intensives like The <em>Climate Fight</em> and <em>Exile, Migration, and Community</em>, take a deep dive into the mourning rituals of 19th century Britain in <em>History and Politics of Grief</em>, or work on collaborative programming projects in <em>Applications of Artificial Intelligence</em>.</p>
</div>
<?php echo end_sec_fullBleedImageColumn(); ?>



<?php echo sec_fullBleedImageColumn(
    'Research',
    $admission_img_path.'explore/academics/082-21-07-kr-caad-vassar-0065.jpg',
    'theme-burgundy',
    '',
    ['img_alt_text' => 'People in a classroom, two people in the foreground at the laptop, and two people in the background in conversation']
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <p class="tagline">Develop Knowledge First-Hand</p>
    <p>At Vassar, you can engage in research and make contributions to your field as early as your first year. A multitude of opportunities are available, including research-based classes, paid positions in faculty laboratories, and on-campus intensive summer research programs.</p>


    <ul class="linked-list">
        <li><a href="https://www.vassar.edu/ursi">Undergraduate Research Summer Institute</a></li>
        <li><a href="https://www.vassar.edu/ford-scholars">Ford Scholars</a></li>
        <li><a href="https://www.vassar.edu/creativearts/">Creative Arts Across Disciplines (CAAD)</a> </li>
    </ul>


</div>
<?php echo end_sec_fullBleedImageColumn(); ?>


<?php echo sec_fullBleedImageColumn(
    'Community-Engaged Learning',
    $admission_img_path.'explore/academics/cel/0056_14_07_BL_7266.jpg',
    'image-is-first theme-extralightgray',
    '',
    ['img_alt_text' => 'A student helping a child with their homework']
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <p class="tagline">Gain Professional Experience While Investing In Our Community</p>
    <p>Real-world experience can take your education to the next level, so it’s no surprise that 83% of Vassar students choose to take on an internship. Through Community-Engaged Learning (CEL), you can combine your academic pursuits with hands-on work in the field while earning academic credit. </p>

    <?php echo cta_link(
    'https://offices.vassar.edu/community-engaged-learning/',
    'Learn more about CEL'
); ?>

</div>
<?php echo end_sec_fullBleedImageColumn(); ?>

<?php echo sec_fullBleedImageColumn(
    'Study Abroad',
    $admission_img_path.'explore/academics/lockhart-anna-peru-abroad-1809-alo-8.jpg',
    'theme-charcoal bg-dark',
    '',
    ['img_alt_text' => 'A student talking down a rope and cloth bridge in Peru']
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <p class="tagline">Broaden Your Horizons</p>
    <p>Expand your global perspective and explore new ways of thinking by spending a semester or year abroad. Vassar offers more than 130 study abroad options around the world, so no matter your interests, you can find a program that will help you reach your goals.</p>

    <?php echo cta_link(
    'https://offices.vassar.edu/international-programs/',
    'Learn more about Study Abroad'
); ?>


</div>
<?php echo end_sec_fullBleedImageColumn(); ?>



<!-- RELATED TOPICS ===  -->

<?php echo sec_hasColumns(
    'More in This Section',
    3,
    null,
    'relatedtopics theme-burgundy',
    ''
); ?>

<?php include($project_paths['main_project_root'].'/admission/inc/pages/explore/explore-campus.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/explore/explore-student-life.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/explore/explore-outcomes.php');?>

<?php echo end_sec_hasColumns(); ?>


<?php echo site_footer(); ?>