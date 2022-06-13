
<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/*  PAGE INFO ============ */

$page_title = "Academics";
$page_classes = "";

/*  ---------------------- */

?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation(); ?>

<?php echo breadcrumbNav('theme-charcoal'); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/nav-elements/admission-explore-breadcrumb.php');?>
<?php echo end_sec_breadcrumbNav(); ?>



<?php echo page_masthead('https://vassartest.chuckyatsuk.com/img/explore/academics/110619_160over90_Vassar_6232.jpg'); ?>

<?php echo toplinksNav(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/nav-elements/admission-explore-nav.php');?>
<?php echo end_sec_toplinksNav(); ?>




<?php /*  PAGE CONTENT === */ ?>




<!-- visit -->

<?php echo sec_fixedCenteredTitle(
    '<b class="slide-from-left">Learning is</b>
   <b class="slide-from-right">Innovation</b>',
    '<h3 class="display-5 pb-3">Forge your own path</h3><p class="section-intro-text">
Vassar’s open curriculum allows you the freedom and flexibility to pursue your passions while discovering new interests. With no core classes or distribution requirements, you can choose to take the courses that most interest you and know that your classmates are fully engaged.
   </p>
   ',
    'sec-fixedCenteredTitle theme-dark-burgundy featured-video',
    'mw-4 text-center',
    ['bg-image-url' => 'https://vassartest.chuckyatsuk.com/img/explore/academics/0020_15_03_KR_0022.jpg',
        'bg-image-alt' => 'alt text',
        'css' => '
      --section-title-size: 14vw;
      /* --section-title-faded-opacity: 0.1; */
      --title-container-bg-beforeContent: rgba(0,0,0,0.4);
      --section-bg-image-opacity: 0.1;
      '
    ]
); ?>




<?php echo end_sec_fixedCenteredTitle(); ?>

<!-- end visit -->





<?php echo sec_hasColumns(
    null,
    2,
    null,
    'animate-when-content-appears animation-slide-up',
    'flex-equal align-items-center d-flex flex-column-reverse flex-md-row'
); ?>

<?php echo item_col('equal'); ?>


<p class="pb-3">Vassar’s open curriculum allows you the freedom and flexibility to pursue your passions while discovering new interests. With no core classes or distribution requirements, you can choose to take the courses that most interest you and know that your classmates are fully engaged.</p>


<?php echo end_item_col(); ?>

<?php echo item_col('equal'); ?>
<img src="https://vassartest.chuckyatsuk.com/img/explore/academics/0020_15_03_KR_0022.jpg" />
<?php echo end_item_col(); ?>

<?php echo end_sec_hasColumns(); ?>

<?php echo sec_fullBleedImageColumn(
    null,
    'https://vassartest.chuckyatsuk.com/img/explore/academics/110619_160over90_Vassar_7630.jpg',
    'image-is-first theme-charcoal',
    'mw-100'
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <h2 class="display-2">Intensives</h2>
    <p>Dig Deep to Explore Your Interests</p>
    <p>Vassar’s Intensives take the individualized classroom experience further by creating even more opportunities for student-driven exploration and mentored research. Intensives are designed to promote forward-thinking, non-traditional class experiences that catalyze deeper learning.</p>

    <a href="/admission/explore/academics/" class="px-0 btn btn-link">Learn more about intensives <i class="circle fa-solid fa-angle-right"></i></a>
</div>
<?php echo end_sec_fullBleedImageColumn(); ?>

<?php echo sec_fullBleedImageColumn(
    null,
    'https://vassartest.chuckyatsuk.com/img/explore/academics/082-21-07-kr-caad-vassar-0065.jpg',
    'theme-charcoal',
    'mw-100'
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <h2 class="display-2">Research</h2>
    <p>Develop Knowledge First-Hand</p>
    <p>At Vassar, you can engage in research and make contributions to your field as early as your first year. A multitude of opportunities are available, including research-based classes, paid positions in faculty laboratories, and on-campus intensive summer research programs.</p>

    <a href="/admission/explore/academics/" class="px-0 btn btn-link">Learn more about intensives <i class="circle fa-solid fa-angle-right"></i></a>
</div>
<?php echo end_sec_fullBleedImageColumn(); ?>


<?php echo sec_fullBleedImageColumn(
    null,
    'https://vassartest.chuckyatsuk.com/img/explore/0084-19-05-ja-kumar-class-vassar-253.jpg',
    'image-is-first theme-charcoal',
    'mw-100'
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <h2 class="display-2">Community Engaged Learning</h2>
    <p>Gain Professional Experience While Investing In Our Community</p>
    <p>Real-world experience can take your education to the next level, so it’s no surprise that 90% of Vassar students choose to take on an internship. Through Community-Engaged Learning (CEL), you can combine your academic pursuits with hands-on work in the field while earning academic credit. </p>

    <a href="/admission/explore/academics/" class="px-0 btn btn-link">Learn more about CEL <i class="circle fa-solid fa-angle-right"></i></a>
</div>
<?php echo end_sec_fullBleedImageColumn(); ?>

<?php echo sec_fullBleedImageColumn(
    null,
    'https://vassartest.chuckyatsuk.com/img/explore/academics/lockhart-anna-peru-abroad-1809-alo-8.jpg',
    'theme-charcoal',
    'mw-100'
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <h2 class="display-2">Study abroad</h2>
    <p>Broaden Your Horizons</p>
    <p>Expand your global perspective and explore new ways of thinking by spending a semester or year abroad. Vassar offers more than 130 study abroad options around the world, so no matter your interests, you can find a program that will help you reach your goals.</p>

    <a href="/admission/explore/academics/" class="px-0 btn btn-link">Learn more about intensives <i class="circle fa-solid fa-angle-right"></i></a>
</div>
<?php echo end_sec_fullBleedImageColumn(); ?>

<?php echo sec_wideContent(
    'Your Choices = Your Education',
    'Vassar’s curriculum emphasizes a multidisciplinary approach to intellectual inquiry. With more than 1,000 courses to choose from and an average class size of <a href="#">17</a>, Vassar offers a customizable curriculum to satisfy any curiosity.',
    'theme-cream pb-1',
    'mw-3'
); ?>
<div class="py-5 accordion" id="academics">
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingMajors">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#Majors" aria-expanded="true" aria-controls="collapseOne">
                Majors
            </button>
        </h2>
        <div id="Majors" class="accordion-collapse collapse show" aria-labelledby="headingMajors" data-bs-parent="#academics">
            <div class="accordion-body">
                <div class="row">
                    <div class="col-sm">
                        <ul>
                            <li><a href="https://africanastudies.vassar.edu/">Africana Studies&nbsp;<abbr>(AFRS)</abbr></a></li>
                            <li><a href="https://americanstudies.vassar.edu/">American Studies&nbsp;<abbr>(AMST)</abbr></a></li>
                            <li><a href="https://anthropology.vassar.edu/">Anthropology&nbsp;<abbr>(ANTH)</abbr></a></li>
                            <li><a href="https://art.vassar.edu/art-history/">Art History&nbsp;<abbr>(ART)</abbr></a></li>
                            <li><a href="https://art.vassar.edu/studio-art/">Art, Studio&nbsp;<abbr>(ART)</abbr></a></li>
                            <li><a href="https://asianstudies.vassar.edu/">Asian Studies&nbsp;<abbr>(ASIA)</abbr></a></li>
                            <li><a href="https://physicsandastronomy.vassar.edu/astronomy/">Astronomy&nbsp;<abbr>(ASTR)</abbr></a></li>
                            <li><a href="https://biochemistry.vassar.edu/">Biochemistry&nbsp;<abbr>(BIOC)</abbr></a></li>
                            <li><a href="https://biology.vassar.edu/">Biology&nbsp;<abbr>(BIOL)</abbr></a></li>
                            <li><a href="https://chemistry.vassar.edu/">Chemistry&nbsp;<abbr>(CHEM)</abbr></a></li>
                            <li><a href="https://chineseandjapanese.vassar.edu/">Chinese&nbsp;<abbr>(CHIN)</abbr></a></li>
                            <li><a href="https://cogsci.vassar.edu/">Cognitive Science&nbsp;<abbr>(COGS)</abbr></a></li>
                            <li><a href="https://computerscience.vassar.edu/">Computer Science&nbsp;<abbr>(CMPU)</abbr></a></li>
                            <li><a href="https://drama.vassar.edu/">Drama&nbsp;<abbr>(DRAM)</abbr></a></li>
                            <li><a href="https://earthscienceandgeography.vassar.edu/earth-science/">Earth Science&nbsp;<abbr>(ESCI)</abbr></a></li>
                            <li><a href="https://earthscienceandgeography.vassar.edu/earth-science/earth-science-society/">Earth Science and Society&nbsp;<abbr>(ESSC)</abbr></a></li>
                            <li><a href="https://economics.vassar.edu/">Economics&nbsp;<abbr>(ECON)</abbr></a></li>
                            <li><a href="https://education.vassar.edu/">Educational Studies&nbsp;<abbr>(EDUC)</abbr></a></li>
                            <li><a href="https://english.vassar.edu/">English&nbsp;<abbr>(ENGL)</abbr></a></li>
                            <li><a href="https://environmentalstudies.vassar.edu/">Environmental Studies&nbsp;<abbr>(ENST)</abbr></a></li>
                        </ul>
                    </div>
                    <div class="col-sm">
                        <ul>

                            <li><a href="https://film.vassar.edu/">Film&nbsp;<abbr>(FILM)</abbr></a></li>
                            <li><a href="https://french.vassar.edu/">French &amp; Francophone Studies&nbsp;<abbr>(FREN)</abbr></a></li>
                            <li><a href="https://earthscienceandgeography.vassar.edu/geography/">Geography&nbsp;<abbr>(GEOG)</abbr></a></li>

                            <li><a href="https://german.vassar.edu/">German Studies&nbsp;<abbr>(GERM)</abbr></a></li>
                            <li><a href="https://www.vassar.edu/global-nineteenth-century-studies/">Global Nineteenth-Century Studies <abbr>(GNCS)</abbr></a></li>

                            <li><a href="https://greekandromanstudies.vassar.edu/">Greek and Roman Studies&nbsp;<abbr>(GRST)</abbr></a></li>
                            <li><a href="https://hispanicstudies.vassar.edu/">Hispanic Studies&nbsp;<abbr>(HISP)</abbr></a></li>
                            <li><a href="https://history.vassar.edu/">History&nbsp;<abbr>(HIST)</abbr></a></li>
                            <li><a href="https://independentprogram.vassar.edu/">Independent Program&nbsp;<abbr>(INDP)</abbr></a></li>
                            <li><a href="https://internationalstudies.vassar.edu/">International Studies&nbsp;<abbr>(INTL)</abbr></a></li>
                            <li><a href="https://italian.vassar.edu/">Italian&nbsp;<abbr>(ITAL)</abbr></a></li>
                            <li><a href="https://chineseandjapanese.vassar.edu/">Japanese&nbsp;<abbr>(JAPA)</abbr></a></li>
                            <li><a href="https://jewishstudies.vassar.edu/">Jewish Studies&nbsp;<abbr>(JWST)</abbr></a></li>
                            <li><a href="https://latinamericanstudies.vassar.edu/">Latin American &amp; Latinx Studies&nbsp;<abbr>(LALS)</abbr></a></li>
                            <li><a href="https://math.vassar.edu/">Mathematics&nbsp;<abbr>(MATH)</abbr></a></li>
                            <li><a href="https://mediastudies.vassar.edu/">Media Studies&nbsp;<abbr>(MEDS)</abbr></a></li>
                        </ul>

                    </div>
                    <div class="col-sm">
                        <ul>

                            <li><a href="https://medievalandrenaissancestudies.vassar.edu/">Medieval &amp; Renaissance Studies&nbsp;<abbr>(MRST)</abbr></a></li>
                            <li><a href="https://music.vassar.edu/">Music&nbsp;<abbr>(MUSI)</abbr></a></li>
                            <li><a href="https://neuroscienceandbehavior.vassar.edu/">Neuroscience and Behavior&nbsp;<abbr>(NEUR)</abbr></a></li>
                            <li><a href="https://philosophy.vassar.edu/">Philosophy&nbsp;<abbr>(PHIL)</abbr></a></li>
                            <li><a href="https://physicsandastronomy.vassar.edu/physics/">Physics&nbsp;<abbr>(PHYS)</abbr></a></li>
                            <li><a href="https://politicalscience.vassar.edu/">Political Science&nbsp;<abbr>(POLI)</abbr></a></li>
                            <li><a href="https://psychologicalscience.vassar.edu/">Psychological Science&nbsp;<abbr>(PSYC)</abbr></a></li>
                            <li><a href="https://religion.vassar.edu/">Religion&nbsp;<abbr>(RELI)</abbr></a></li>
                            <li><a href="https://russian.vassar.edu/">Russian Studies&nbsp;<abbr>(RUSS)</abbr></a></li>
                            <li><a href="https://sciencetechnologyandsociety.vassar.edu/">Science, Technology &amp; Society&nbsp;<abbr>(STS)</abbr></a></li>
                            <li><a href="https://sociology.vassar.edu/">Sociology&nbsp;<abbr>(SOCI)</abbr></a></li>
                            <li><a href="https://urbanstudies.vassar.edu/">Urban Studies&nbsp;<abbr>(URBS)</abbr></a></li>
                            <li><a href="https://www.vassar.edu/women-feminist-queer-studies/">Women, Feminist, and Queer Studies <abbr>(WFQS)</abbr></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingCorrelates">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#Correlates" aria-expanded="false" aria-controls="collapseTwo">
                Correlates (Minors)
            </button>
        </h2>
        <div id="Correlates" class="accordion-collapse collapse" aria-labelledby="headingCorrelates" data-bs-parent="#academics">
            <div class="accordion-body">
                <div class="row">
                    <div class="col-sm">
                        <ul>
                            <li><a href="https://africanastudies.vassar.edu/">Africana Studies&nbsp;<abbr>(AFRS)</abbr></a><br>
                                Africana Studies<br>
                                Arabic Language &amp; Culture<br>
                                Prison Studies</li>
                            <li><a href="https://americanstudies.vassar.edu/">American Studies&nbsp;<abbr>(AMST)</abbr></a><br>
                                Native American Studies</li>
                            <li><a href="https://anthropology.vassar.edu/">Anthropology&nbsp;<abbr>(ANTH)</abbr></a><br>
                                Anthropology<br>
                                Biology and Culture</li>
                            <li><a href="https://art.vassar.edu/">Art&nbsp;<abbr>(ART)</abbr></a><br>
                                Art History<br>
                                Studio Art</li>
                            <li><a href="https://asianstudies.vassar.edu/">Asian Studies&nbsp;<abbr>(ASIA)</abbr></a><br>
                                Asian American Studies<br>
                                Asian Studies</li>
                            <li><a href="https://physicsandastronomy.vassar.edu/astronomy/">Astronomy&nbsp;<abbr>(ASTR)</abbr></a><br>
                                Astronomy</li>
                            <li><a href="https://biology.vassar.edu/">Biology&nbsp;<abbr>(BIOL)</abbr></a><br>
                                Biology<br>
                                Biology and Culture</li>
                            <li><a href="https://chemistry.vassar.edu/">Chemistry&nbsp;<abbr>(CHEM)</abbr></a><br>
                                Chemistry</li>
                            <li><a href="https://chineseandjapanese.vassar.edu/">Chinese&nbsp;<abbr>(CHIN)</abbr></a><br>
                                Chinese</li>
                            <li><a href="https://chineseandjapanese.vassar.edu/">Chinese &amp; Japanese&nbsp;<abbr>(CHJA)</abbr></a><br>
                                Chinese &amp; Japanese Literary &amp; Cultural Studies</li>
                            <li><a href="https://computerscience.vassar.edu/">Computer Science&nbsp;<abbr>(CMPU)</abbr></a><br>
                                Computer Science</li>

                        </ul>
                    </div>
                    <div class="col-sm">
                        <ul>
                            <li><a href="https://earthscienceandgeography.vassar.edu/earth-science/">Earth Science&nbsp;<abbr>(ESCI)</abbr></a><br>
                                Earth Science</li>
                            <li><a href="https://economics.vassar.edu/">Economics&nbsp;<abbr>(ECON)</abbr></a><br>
                                International Economics<br>
                                Public Policy<br>
                                Quantitative Economics</li>
                            <li><a href="https://education.vassar.edu/">Education&nbsp;<abbr>(EDUC)</abbr></a><br>
                                Educational Studies</li>
                            <li><a href="https://english.vassar.edu/">English&nbsp;<abbr>(ENGL)</abbr></a><br>
                                Race, Ethnicity, and Indigeneity<br>
                                Gender, Sexuality, and the Body<br>
                                Poetry and Poetics<br>
                                Literary Geographies<br>
                                British and American Literary History<br>
                                Creative Writing and Literary Forms</li>
                            <li><a href="https://environmentalstudies.vassar.edu/">Environmental Studies&nbsp;<abbr>(ENST)</abbr></a><br>
                                Sustainability</li>
                            <li><a href="https://film.vassar.edu/">Film&nbsp;<abbr>(FILM)</abbr></a><br>
                                Film</li>
                            <li><a href="https://french.vassar.edu/">French &amp; Francophone Studies&nbsp;<abbr>(FREN)</abbr></a><br>
                                French &amp; Francophone Studies</li>
                            <li><a href="https://earthscienceandgeography.vassar.edu/geography/">Geography&nbsp;<abbr>(GEOG)</abbr></a><br>
                                Environmental Land-Use Analysis<br>
                                Society &amp; Space</li>
                            <li><a href="https://german.vassar.edu/">German Studies&nbsp;<abbr>(GERM)</abbr></a><br>
                                German</li>
                            <li><a href="https://www.vassar.edu/global-nineteenth-century-studies/">Global Nineteenth-Century Studies <abbr>(GNCS)</abbr></a><br>
                                Global Nineteenth-Century Studies</li>
                            <li><a href="https://greekandromanstudies.vassar.edu/">Greek &amp; Roman Studies&nbsp;<abbr>(GRST)</abbr></a><br>
                                Greek and Roman Studies</li>
                            <li><a href="https://hispanicstudies.vassar.edu/">Hispanic Studies&nbsp;<abbr>(HISP)</abbr></a><br>
                                Hispanic Studies</li>
                            <li><a href="https://history.vassar.edu/">History&nbsp;<abbr>(HIST)</abbr></a><br>
                                History</li>


                            <li><a href="https://www.vassar.edu/internationalstudies/">International Studies <abbr>(INTL)</abbr></a><br>
                                Migration and Displacement Studies</li>
                        </ul>
                    </div>
                    <div class="col-sm">
                        <ul>

                            <li><a href="https://italian.vassar.edu/">Italian&nbsp;<abbr>(ITAL)</abbr></a><br>
                                Italian</li>
                            <li><a href="https://chineseandjapanese.vassar.edu/">Japanese&nbsp;<abbr>(JAPA)</abbr></a><br>
                                Japanese</li>
                            <li><a href="https://jewishstudies.vassar.edu/">Jewish Studies&nbsp;<abbr>(JWST)</abbr></a><br>
                                Jewish Studies</li>
                            <li><a href="https://latinamericanstudies.vassar.edu/">Latin American &amp; Latino/a Studies&nbsp;<abbr>(LALS)</abbr></a><br>
                                Latin American &amp; Latino/a Studies</li>
                            <li><a href="https://math.vassar.edu/">Mathematics &amp; Statistics&nbsp;<abbr>(MATH)</abbr></a><br>
                                Mathematics</li>
                            <li><a href="https://medievalandrenaissancestudies.vassar.edu/">Medieval &amp; Renaissance Studies&nbsp;<abbr>(MRST)</abbr></a><br>
                                Medieval &amp; Renaissance Studies</li>
                            <li><a href="https://music.vassar.edu/">Music&nbsp;<abbr>(MUSI)</abbr></a><br>
                                Music &amp; Culture<br>
                                Music Composition<br>
                                Music History<br>
                                Music Performance<br>
                                Music Theory</li>
                            <li><a href="https://philosophy.vassar.edu/">Philosophy&nbsp;<abbr>(PHIL)</abbr></a><br>
                                Aesthetics and Philosophy of Ar<br>
                                Analytic Philosophy<br>
                                Comparative Philosophy<br>
                                Continental Philosophy<br>
                                Ethics &amp; Social &amp; Political Philosophy<br>
                                History of Philosophy</li>
                            <li><a href="https://physicsandastronomy.vassar.edu/physics/">Physics&nbsp;<abbr>(PHYS)</abbr></a><br>
                                Physics</li>
                            <li><a href="https://politicalscience.vassar.edu/">Political Science&nbsp;<abbr>(POLI)</abbr></a><br>
                                American Politics<br>
                                Comparative Politics<br>
                                International Politics<br>
                                Political Theory</li>
                            <li><a href="https://religion.vassar.edu/">Religion&nbsp;<abbr>(RELI)</abbr></a><br>
                                Religion</li>
                            <li><a href="https://russian.vassar.edu/">Russian Studies&nbsp;<abbr>(RUSS)</abbr></a><br>
                                Russian Studies</li>
                            <li><a href="https://sociology.vassar.edu/">Sociology&nbsp;<abbr>(SOCI)</abbr></a><br>
                                Sociology</li>
                            <li><a href="https://urbanstudies.vassar.edu/">Urban Studies&nbsp;<abbr>(URBS)</abbr></a><br>
                                Urban Studies</li>
                            <li><a href="https://www.vassar.edu/women-feminist-queer-studies/">Women, Feminist, and Queer Studies<abbr> (WMST)</abbr></a><br>
                                Queer Studies<br>
                                Women’s Studies</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Accelerated and Dual Degree Programs
            </button>
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#academics">
            <div class="accordion-body">
                <div class="row">
                    <div class="col-sm">
                        <h3>Vassar/Columbia BA/MPH</h3>
                        <p>The BA/MPH is a dual degree program in which a student earns a BA from Vassar then goes on to an accelerated Masters program in Public Health at Columbia University Mailman School of Public Health.</p>
                    </div>
                    <div class="col-sm">
                        <h3>Vassar/Dartmouth BA/BE</h3>
                        <p>Through a cooperative arrangement with the Thayer School of Engineering at Dartmouth College, Vassar students may earn both the bachelor of arts (BA) degree from Vassar and the bachelor of engineering (BE) degree from Dartmouth. </p>
                    </div>
                </div>
                <div class="row">
                    <a href="https://www.vassar.edu/academics/accelerated-and-dual-degree-programs" class="btn btn-text">Learn more about Accelerated and Dual Degree Programs
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo end_sec_wideContent(); ?>

<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/admission-visit.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/admission-apply-transfer.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/admission-apply.php');?>
<?php echo end_sec_relatedTopics(); ?>
<?php echo site_footer(); ?>
