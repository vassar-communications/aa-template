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
        <li><a href="https://www.vassar.edu/creativearts/">CAAD</a> </li>
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
    <p>Real-world experience can take your education to the next level, so it’s no surprise that 90% of Vassar students choose to take on an internship. Through Community-Engaged Learning (CEL), you can combine your academic pursuits with hands-on work in the field while earning academic credit. </p>

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

<?php echo sec_wideContent(
    'Your Choices <span class="text-primary">=</span> Your Education',
    '<p class="intro-text">Vassar’s curriculum emphasizes a multidisciplinary approach to intellectual inquiry. With more than 1,000 courses to choose from and an average class size of 17, Vassar offers a customizable curriculum to satisfy any curiosity.</p>',
    'theme-cream pb-1 hidemark',
    'mw-3 pb-5'
); ?>
<?php echo item_dropdown( $facts['number_of_majors'].' Majors', 'dropdown--feature bg-white shadow-sm mb-3' ); ?>
<div class="row has-dividers">
    <div class="col-sm">
        <ul class="linked-list no-first-border">
        <li><a href="https://www.vassar.edu/africana-studies">Africana Studies&nbsp</a></li>
<li><a href="https://www.vassar.edu/americanstudies">American Studies</a></li>
<li><a href="https://www.vassar.edu/anthropology">Anthropology</a></li>
<li><a href="https://www.vassar.edu/art/art-history/">Art History</a></li>
<li><a href="https://www.vassar.edu/art/studio-art/">Art, Studio</a></li>
<li><a href="https://www.vassar.edu/asianstudies">Asian Studies</a></li>
<li><a href="https://www.vassar.edu/physicsandastronomy/">Astronomy</a></li>
<li><a href="https://www.vassar.edu/biochemistry">Biochemistry</a></li>
<li><a href="https://www.vassar.edu/biology">Biology</a></li>
<li><a href="https://www.vassar.edu/chemistry">Chemistry</a></li>
<li><a href="https://www.vassar.edu/chineseandjapanese">Chinese</a></li>
<li><a href="https://www.vassar.edu/cogsci">Cognitive Science</a></li>
<li><a href="https://www.vassar.edu/computerscience">Computer Science</a></li>
<li><a href="https://www.vassar.edu/drama">Drama</a></li>
<li><a href="https://www.vassar.edu/earthscienceandgeography/earth-science/">Earth Science</a></li>
<li><a href="https://www.vassar.edu/earthscienceandgeography/earth-science/earth-science-society/">Earth Science and Society</a></li>
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
<li><a href="https://www.vassar.edu/earthscienceandgeography/geography/">Geography</a></li>
<li><a href="https://www.vassar.edu/earthscienceandgeography/geography/geography-anthropology/">Geography-Anthropology</a></li>
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

<?php echo item_dropdown('68 Correlates (Minors)', 'dropdown--feature bg-white shadow-sm mb-3'); ?>
<div class="row has-dividers">
    <div class="col-sm">
    <dl>
    <dt><a href="https://www.vassar.edu/africana-studies">Africana Studies</a></dt>
    <dd>
        Africana Studies<br>
        Arabic Language &amp; Culture<br>
        Prison Studies
    </dd>
    <dt><a href="https://www.vassar.edu/americanstudies">American Studies</a></dt>
    <dd>
        Native American Studies
    </dd>
    <dt><a href="https://www.vassar.edu/anthropology">Anthropology</a></dt>
    <dd>
        Anthropology<br>
        Biology and Culture
    </dd>
    <dt><a href="https://www.vassar.edu/art">Art</a></dt>
    <dd>
        Art History<br>
        Studio Art
    </dd>
    <dt><a href="https://www.vassar.edu/asianstudies">Asian Studies</a></dt>
    <dd>
        Asian American Studies<br>
        Asian Studies
    </dd>
    <dt><a href="https://www.vassar.edu/physicsandastronomy/astronomy/">Astronomy</a></dt>
    <dd>
        Astronomy
    </dd>
    <dt><a href="https://www.vassar.edu/biology">Biology</a></dt>
    <dd>
        Biology<br>
        Biology and Culture
    </dd>
    <dt><a href="https://www.vassar.edu/chemistry">Chemistry</a></dt>
    <dd>
        Chemistry
    </dd>
    <dt><a href="https://www.vassar.edu/chineseandjapanese">Chinese</a></dt>
    <dd>
        Chinese
    </dd>
    <dt><a href="https://www.vassar.edu/chineseandjapanese">Chinese &amp; Japanese</a></dt>
    <dd>
        Chinese &amp; Japanese Literary &amp; Cultural Studies
    </dd>
    <dt><a href="https://www.vassar.edu/computerscience">Computer Science</a></dt>
    <dd>
        Computer Science
    </dd>
    <dt><a href="https://www.vassar.edu/computerscience">Dance</a></dt>
    <dd>
        Dance Performance<br>
        Dance Studies
    </dd>
    <dt><a href="https://www.vassar.edu/earthscienceandgeography/earth-science/">Earth Science</a></dt>
    <dd>
        Earth Science
    </dd>
    <dt><a href="https://www.vassar.edu/earthscienceandgeography/earth-science/earth-science-society/">Earth Science and Society</a></dt>
    <dd>
        Climate Change
    </dd>
    <dt><a href="https://www.vassar.edu/economics">Economics</a></dt>
    <dd>
        International Economics<br>
        Public Policy<br>
        Quantitative Economics
    </dd>
    <dt><a href="https://www.vassar.edu/education">Education</a></dt>
    <dd>
        Educational Studies
    </dd>
</dl>
    </div>
    <div class="col-sm">
    <dl>
    <dt><a href="https://www.vassar.edu/english">English</a></dt>
    <dd>
        Race, Ethnicity, and Indigeneity<br>
        Gender, Sexuality, and the Body<br>
        Literary Geographies<br>
        British and American Literary History<br>
        Creative Writing and Literary Forms
    </dd>
    <dt><a href="https://www.vassar.edu/environmentalstudies">Environmental Studies Program</a></dt>
    <dd>
        Climate Change
    </dd>
    <dt><a href="https://www.vassar.edu/film">Film</a></dt>
    <dd>
        Film
    </dd>
    <dt><a href="https://www.vassar.edu/french">French &amp; Francophone Studies</a></dt>
    <dd>
        French &amp; Francophone Studies
    </dd>
    <dt><a href="https://www.vassar.edu/earthscienceandgeography/geography/">Geography</a></dt>
    <dd>
        Environmental Land-Use Analysis<br>
        Society &amp; Space
    </dd>
    <dt><a href="https://www.vassar.edu/german">German Studies</a></dt>
    <dd>
        German
    </dd>
    <dt><a href="https://www.vassar.edu/global-nineteenth-century-studies/">Global Nineteenth-Century Studies</a></dt>
    <dd>
        Global Nineteenth-Century Studies
    </dd>
    <dt><a href="https://www.vassar.edu/greekandromanstudies">Greek &amp; Roman Studies</a></dt>
    <dd>
        Greek and Roman Studies
    </dd>
    <dt><a href="https://www.vassar.edu/hispanicstudies">Hispanic Studies</a></dt>
    <dd>
        Hispanic Studies
    </dd>
    <dt><a href="https://www.vassar.edu/history">History</a></dt>
    <dd>
        History
    </dd>
    <dt><a href="https://www.vassar.edu/internationalstudies/">International Studies Program</a></dt>
    <dd>
        Migration and Displacement Studies
    </dd>
    <dt><a href="https://www.vassar.edu/italian">Italian</a></dt>
    <dd>
        Italian
    </dd>
    <dt><a href="https://www.vassar.edu/chineseandjapanese">Japanese</a></dt>
    <dd>
        Japanese
    </dd>
    <dt><a href="https://www.vassar.edu/jewishstudies">Jewish Studies</a></dt>
    <dd>
        Jewish Studies
    </dd>
    <dt><a href="https://www.vassar.edu/latinamericanstudies">Latin American &amp; Latinx Studies</a></dt>
    <dd>
    Latin American &amp; Latinx Studies
    </dd>
</dl>
    </div>
    <div class="col-sm">
    <dl>
    <dt><a href="https://www.vassar.edu/math">Mathematics &amp; Statistics</a></dt>
    <dd>
        Mathematics
    </dd>
    <dt><a href="https://www.vassar.edu/medievalandrenaissancestudies">Medieval &amp; Renaissance Studies</a></dt>
    <dd>
        Medieval &amp; Renaissance Studies
    </dd>
    <dt><a href="https://www.vassar.edu/music">Music</a></dt>
    <dd>
        Music &amp; Culture<br>
        Music Composition<br>
        Music History<br>
        Music Performance<br>
        Music Theory
    </dd>
    <dt><a href="https://www.vassar.edu/philosophy">Philosophy</a></dt>
    <dd>
        Analytic Philosophy<br>
        Comparative Philosophy<br>
        Continental Philosophy<br>
        Ethics &amp; Social &amp; Political Philosophy<br>
        History of Philosophy
    </dd>
    <dt><a href="https://www.vassar.edu/physicsandastronomy/physics/">Physics</a></dt>
    <dd>
        Physics
    </dd>
    <dt><a href="https://www.vassar.edu/politicalscience">Political Science</a></dt>
    <dd>
        American Politics<br>
        Comparative Politics<br>
        International Politics<br>
        Political Theory
    </dd>
    <dt><a href="https://www.vassar.edu/religion">Religion</a></dt>
    <dd>
        Religion
    </dd>
    <dt><a href="https://www.vassar.edu/russian">Russian Studies</a></dt>
    <dd>
        Russian Studies
    </dd>
    <dt><a href="https://www.vassar.edu/sociology">Sociology</a></dt>
    <dd>
        Sociology
    </dd>
    <dt><a href="https://www.vassar.edu/urbanstudies">Urban Studies</a></dt>
    <dd>
        Urban Studies
    </dd>
    <dt><a href="https://www.vassar.edu/women-feminist-queer-studies/">Women, Feminist, and Queer Studies</a></dt>
    <dd>
        Queer Studies<br>
        Women’s Studies
    </dd>
</dl>
    </div>
</div>
<?php echo end_item_dropdown(); ?>

<?php echo item_dropdown('Accelerated and Dual Degree Programs', 'dropdown--feature bg-white shadow-sm mb-3'); ?>
<div class="row has-dividers">
    <div class="col-sm">
        <h3>Vassar/Columbia BA/MPH</h3>
        <p>The BA/MPH is a dual degree program in which a student earns a BA from Vassar and then goes on to an accelerated Masters program in Public Health at Columbia University Mailman School of Public Health.</p>


    </div>
    <div class="col-sm">
        <h3>Vassar/Dartmouth BA/BE</h3>
        <p>Through a cooperative arrangement with the Thayer School of Engineering at Dartmouth College, Vassar students may earn both the bachelor of arts (BA) degree from Vassar and the bachelor of engineering (BE) degree from Dartmouth. </p>
        <?php echo cta_link(
            'https://www.vassar.edu/academics/accelerated-and-dual-degree-programs',
            'Learn more about Accelerated and Dual Degree Programs'
        ); ?>
    </div>
</div>
<?php echo end_item_dropdown(); ?>
<?php echo end_sec_wideContent(); ?>




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
