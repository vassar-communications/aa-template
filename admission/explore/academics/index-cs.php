<style>

.accordion-button:focus {
    z-index: 3;
    border-color: #aaa !important;
    box-shadow: 0 0 0 0.25rem #aaa !important;
}

.section-intro-text {
  font-size: var(--intro-text-size) !important;
}

.accordion li a:hover {
    text-decoration: underline !important;
}

</style>

<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
 ?>
<?php

/*  PAGE INFO ============ */

$page_title = "Explore Academics";
$page_classes = "academics-cy academics";

/*  ---------------------- */

?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation(); ?>




<?php echo sec_fixedCenteredTitle_masthead(
    '<b class="slide-from-left">Explore</b>
   <b class="slide-from-right">Academics</b>',
    null,
    'theme-verylightgray reveal-image',
    'mw-4',
    ['bg-image-url' => 'https://vassartest.chuckyatsuk.com/img/explore/academics/110619_160over90_Vassar_6232.jpg',
        'bg-image-alt' => 'alt text',
        'css' => '
      --title-container-bg-beforeContent: rgba(0,0,0,0.4);
      --section-bg-image-opacity: 0;
      /* --section-title-faded-color: #444; */
      --bs-gap: 1rem;
      ']
); ?>

<?php echo end_sec_fixedCenteredTitle_masthead(); ?>

<?php echo breadcrumbNav('theme-cream'); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/nav-elements/admission-explore-breadcrumb.php');?>
<?php echo end_sec_breadcrumbNav(); ?>
<?php echo toplinksNav(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/nav-elements/admission-explore-nav.php');?>
<?php echo end_sec_toplinksNav(); ?>




<?php /*  PAGE CONTENT === */ ?>




<!-- visit -->


<?php echo sec_hasColumns(
    null,
    2,
    null,
    '',
    'flex-equal align-items-center d-flex flex-column-reverse flex-md-row mb-5 pb-5'
); ?>

<?php echo item_col('equal animate-when-content-appears animation-slide-up'); ?>

<h2 class="display-2">Learning is Innovation</h2>
<p class="pb-3">Vassar’s open curriculum allows you the freedom and flexibility to pursue your passions while discovering new interests. With no core classes or distribution requirements, you can choose to take the courses that most interest you and know that your classmates are fully engaged.</p>


<?php echo end_item_col(); ?>

<?php echo item_col('animate-when-content-appears animation-slide-up equal'); ?>
<img src="https://vassartest.chuckyatsuk.com/img/explore/0084-19-05-ja-kumar-class-vassar-253.jpg" />
<?php echo end_item_col(); ?>

<?php echo end_sec_hasColumns(); ?>


<!-- end visit -->

<?php echo sec_fullBleedImageColumn(
    null,
    'https://vassartest.chuckyatsuk.com/img/explore/academics/110619_160over90_Vassar_7630.jpg',
    'image-is-first theme-charcoal bg-dark',
    'mw-100'
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <h2 class="display-2 mb-5">Intensives</h2>
    <span class="tagline  mb-2">Dig Deep to Explore Your Interests</span>
    <p>Vassar’s Intensives take the individualized classroom experience further by creating even more opportunities for student-driven exploration and mentored research. Intensives are designed to promote forward-thinking, non-traditional class experiences that catalyze deeper learning.</p>

    <a href="/admission/explore/academics/" class="px-0 btn btn-link">Learn more about Vassar Intensives <i class="circle fa-solid fa-arrow-right"></i></a>
</div>
<?php echo end_sec_fullBleedImageColumn(); ?>

<?php echo sec_fullBleedImageColumn(
    null,
    'https://vassartest.chuckyatsuk.com/img/explore/academics/082-21-07-kr-caad-vassar-0065.jpg',
    'theme-charcoal bg-dark',
    'mw-100'
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <h2 class="display-2 mb-5">Research</h2>
    <span class="tagline  mb-2">Develop Knowledge First-Hand</span>
    <p>At Vassar, you can engage in research and make contributions to your field as early as your first year. A multitude of opportunities are available, including research-based classes, paid positions in faculty laboratories, and on-campus intensive summer research programs.</p>

    <a href="/admission/explore/academics/" class="px-0 btn btn-link">Learn more about Research at Vassar <i class="circle fa-solid fa-arrow-right"></i></a>
</div>
<?php echo end_sec_fullBleedImageColumn(); ?>


<?php echo sec_fullBleedImageColumn(
    null,
    'https://vassartest.chuckyatsuk.com/img/explore/academics/cel/0056_14_07_BL_7266.jpg',
    'image-is-first theme-charcoal bg-dark',
    'mw-100'
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <h2 class="display-2 mb-5">Community-Engaged Learning</h2>
    <span class="tagline  mb-2">Gain Professional Experience While Investing In Our Community</span>
    <p>Real-world experience can take your education to the next level, so it’s no surprise that 90% of Vassar students choose to take on an internship. Through Community-Engaged Learning (CEL), you can combine your academic pursuits with hands-on work in the field while earning academic credit. </p>

    <a href="/admission/explore/academics/" class="px-0 btn btn-link">Learn more about CEL <i class="circle fa-solid fa-arrow-right"></i></a>
</div>
<?php echo end_sec_fullBleedImageColumn(); ?>

<?php echo sec_fullBleedImageColumn(
    null,
    'https://vassartest.chuckyatsuk.com/img/explore/academics/lockhart-anna-peru-abroad-1809-alo-8.jpg',
    'theme-charcoal bg-dark',
    'mw-100'
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <h2 class="display-2 mb-5">Study Abroad</h2>
    <span class="tagline  mb-2">Broaden Your Horizons</span>
    <p>Expand your global perspective and explore new ways of thinking by spending a semester or year abroad. Vassar offers more than 130 study abroad options around the world, so no matter your interests, you can find a program that will help you reach your goals.</p>

    <a href="/admission/explore/academics/" class="px-0 btn btn-link">Learn more about Study Abroad <i class="circle fa-solid fa-arrow-right"></i></a>
</div>
<?php echo end_sec_fullBleedImageColumn(); ?>

<?php echo sec_wideContent(
    'Your Choices <span class="burgundy">=</span> Your Education',
    '<p class="section-intro-text">Vassar’s curriculum emphasizes a multidisciplinary approach to intellectual inquiry. With more than 1,000 courses to choose from and an average class size of 17, Vassar offers a customizable curriculum to satisfy any curiosity.</p>',
    'theme-cream pb-1 hidemark',
    'mw-3'
); ?>

  <?php echo item_dropdown('51 Majors'); ?>
    <div class="row has-dividers">
      <div class="col-sm">
          <ul>
              <li><a href="https://africanastudies.vassar.edu/">Africana Studies&nbsp</a></li>
              <li><a href="https://americanstudies.vassar.edu/">American Studies</a></li>
              <li><a href="https://anthropology.vassar.edu/">Anthropology</a></li>
              <li><a href="https://art.vassar.edu/art-history/">Art History</a></li>
              <li><a href="https://art.vassar.edu/studio-art/">Art, Studio</a></li>
              <li><a href="https://asianstudies.vassar.edu/">Asian Studies</a></li>
              <li><a href="https://physicsandastronomy.vassar.edu/astronomy/">Astronomy</a></li>
              <li><a href="https://biochemistry.vassar.edu/">Biochemistry</a></li>
              <li><a href="https://biology.vassar.edu/">Biology</a></li>
              <li><a href="https://chemistry.vassar.edu/">Chemistry</a></li>
              <li><a href="https://chineseandjapanese.vassar.edu/">Chinese</a></li>
              <li><a href="https://cogsci.vassar.edu/">Cognitive Science</a></li>
              <li><a href="https://computerscience.vassar.edu/">Computer Science</a></li>
              <li><a href="https://drama.vassar.edu/">Drama</a></li>
              <li><a href="https://earthscienceandgeography.vassar.edu/earth-science/">Earth Science</a></li>
              <li><a href="https://earthscienceandgeography.vassar.edu/earth-science/earth-science-society/">Earth Science and Society</a></li>
              <li><a href="https://economics.vassar.edu/">Economics</a></li>

          </ul>
      </div>
      <div class="col-sm">
          <ul>
              <li><a href="https://education.vassar.edu/">Educational Studies</a></li>
              <li><a href="https://english.vassar.edu/">English</a></li>
              <li><a href="https://environmentalstudies.vassar.edu/">Environmental Studies</a></li>
              <li><a href="https://film.vassar.edu/">Film</a></li>
              <li><a href="https://french.vassar.edu/">French &amp; Francophone Studies</a></li>
              <li><a href="https://earthscienceandgeography.vassar.edu/geography/">Geography</a></li>

              <li><a href="https://german.vassar.edu/">German Studies</a></li>
              <li><a href="https://www.vassar.edu/global-nineteenth-century-studies/">Global Nineteenth-Century Studies</a></li>

              <li><a href="https://greekandromanstudies.vassar.edu/">Greek and Roman Studies</a></li>
              <li><a href="https://hispanicstudies.vassar.edu/">Hispanic Studies</a></li>
              <li><a href="https://history.vassar.edu/">History</a></li>
              <li><a href="https://independentprogram.vassar.edu/">Independent Program</a></li>
              <li><a href="https://internationalstudies.vassar.edu/">International Studies</a></li>
              <li><a href="https://italian.vassar.edu/">Italian</a></li>
              <li><a href="https://chineseandjapanese.vassar.edu/">Japanese</a></li>
              <li><a href="https://jewishstudies.vassar.edu/">Jewish Studies</a></li>
              <li><a href="https://latinamericanstudies.vassar.edu/">Latin American &amp; Latinx Studies</a></li>

          </ul>

      </div>
      <div class="col-sm">
          <ul>
              <li><a href="https://math.vassar.edu/">Mathematics</a></li>
              <li><a href="https://mediastudies.vassar.edu/">Media Studies</a></li>
              <li><a href="https://medievalandrenaissancestudies.vassar.edu/">Medieval &amp; Renaissance Studies</a></li>
              <li><a href="https://music.vassar.edu/">Music</a></li>
              <li><a href="https://neuroscienceandbehavior.vassar.edu/">Neuroscience and Behavior</a></li>
              <li><a href="https://philosophy.vassar.edu/">Philosophy</a></li>
              <li><a href="https://physicsandastronomy.vassar.edu/physics/">Physics</a></li>
              <li><a href="https://politicalscience.vassar.edu/">Political Science</a></li>
              <li><a href="https://psychologicalscience.vassar.edu/">Psychological Science</a></li>
              <li><a href="https://religion.vassar.edu/">Religion</a></li>
              <li><a href="https://russian.vassar.edu/">Russian Studies</a></li>
              <li><a href="https://sciencetechnologyandsociety.vassar.edu/">Science, Technology &amp; Society</a></li>
              <li><a href="https://sociology.vassar.edu/">Sociology</a></li>
              <li><a href="https://urbanstudies.vassar.edu/">Urban Studies</a></li>
              <li><a href="https://www.vassar.edu/women-feminist-queer-studies/">Women, Feminist, and Queer Studies</a></li>
          </ul>
      </div>
  </div>
  <?php echo end_item_dropdown(); ?>

  <?php echo item_dropdown('40 Correlates (Minors)'); ?>
    <div class="row has-dividers">
      <div class="col-sm">
         <dl>
            <dt><a href="https://africanastudies.vassar.edu/">Africana Studies</a></dt>
            <dd>
               Africana Studies<br>
               Arabic Language &amp; Culture<br>
               Prison Studies
            </dd>
            <dt><a href="https://americanstudies.vassar.edu/">American Studies</a></dt>
            <dd>
               Native American Studies
            </dd>
            <dt><a href="https://anthropology.vassar.edu/">Anthropology</a></dt>
            <dd>
               Anthropology<br>
               Biology and Culture
            </dd>
            <dt><a href="https://art.vassar.edu/">Art</a></dt>
            <dd>
               Art History<br>
               Studio Art
            </dd>
            <dt><a href="https://asianstudies.vassar.edu/">Asian Studies</a></dt>
            <dd>
               Asian American Studies<br>
               Asian Studies
            </dd>
            <dt><a href="https://physicsandastronomy.vassar.edu/astronomy/">Astronomy</a></dt>
            <dd>
               Astronomy
            </dd>
            <dt><a href="https://biology.vassar.edu/">Biology</a></dt>
            <dd>
               Biology<br>
               Biology and Culture
            </dd>
            <dt><a href="https://chemistry.vassar.edu/">Chemistry</a></dt>
            <dd>
               Chemistry
            </dd>
            <dt><a href="https://chineseandjapanese.vassar.edu/">Chinese</a></dt>
            <dd>
               Chinese
            </dd>
            <dt><a href="https://chineseandjapanese.vassar.edu/">Chinese &amp; Japanese</a></dt>
            <dd>
               Chinese &amp; Japanese Literary &amp; Cultural Studies
            </dd>
            <dt><a href="https://computerscience.vassar.edu/">Computer Science</a></dt>
            <dd>
               Computer Science
            </dd>
            <dt><a href="https://earthscienceandgeography.vassar.edu/earth-science/">Earth Science</a></dt>
            <dd>
               Earth Science
            </dd>
            <dt><a href="https://economics.vassar.edu/">Economics</a></dt>
            <dd>
               International Economics<br>
               Public Policy<br>
               Quantitative Economics
            </dd>
            <dt><a href="https://education.vassar.edu/">Education</a></dt>
            <dd>
               Educational Studies
            </dd>
         </dl>
      </div>
      <div class="col-sm">
         <dl>
            <dt><a href="https://english.vassar.edu/">English</a></dt>
            <dd>
               Race, Ethnicity, and Indigeneity<br>
               Gender, Sexuality, and the Body<br>
               Poetry and Poetics<br>
               Literary Geographies<br>
               British and American Literary History<br>
               Creative Writing and Literary Forms
            </dd>
            <dt><a href="https://environmentalstudies.vassar.edu/">Environmental Studies</a></dt>
            <dd>
               Sustainability
            </dd>
            <dt><a href="https://film.vassar.edu/">Film</a></dt>
            <dd>
               Film
            </dd>
            <dt><a href="https://french.vassar.edu/">French &amp; Francophone Studies</a></dt>
            <dd>
               French &amp; Francophone Studies
            </dd>
            <dt><a href="https://earthscienceandgeography.vassar.edu/geography/">Geography</a></dt>
            <dd>
               Environmental Land-Use Analysis<br>
               Society &amp; Space
            </dd>
            <dt><a href="https://german.vassar.edu/">German Studies</a></dt>
            <dd>
               German
            </dd>
            <dt><a href="https://www.vassar.edu/global-nineteenth-century-studies/">Global Nineteenth-Century Studies</a></dt>
            <dd>
               Global Nineteenth-Century Studies
            </dd>
            <dt><a href="https://greekandromanstudies.vassar.edu/">Greek &amp; Roman Studies</a></dt>
            <dd>
               Greek and Roman Studies
            </dd>
            <dt><a href="https://hispanicstudies.vassar.edu/">Hispanic Studies</a></dt>
            <dd>
               Hispanic Studies
            </dd>
            <dt><a href="https://history.vassar.edu/">History</a></dt>
            <dd>
               History
            </dd>
            <dt><a href="https://www.vassar.edu/internationalstudies/">International Studies</a></dt>
            <dd>
               Migration and Displacement Studies
            </dd>
            <dt><a href="https://italian.vassar.edu/">Italian</a></dt>
            <dd>
               Italian
            </dd>
            <dt><a href="https://chineseandjapanese.vassar.edu/">Japanese</a></dt>
            <dd>
               Japanese
            </dd>
            <dt><a href="https://jewishstudies.vassar.edu/">Jewish Studies</a></dt>
            <dd>
               Jewish Studies
            </dd>
            <dt><a href="https://latinamericanstudies.vassar.edu/">Latin American &amp; Latino/a Studies</a></dt>
            <dd>
               Latin American &amp; Latino/a Studies
            </dd>
         </dl>
      </div>
      <div class="col-sm">
         <dl>
            <dt><a href="https://math.vassar.edu/">Mathematics &amp; Statistics</a></dt>
            <dd>
               Mathematics
            </dd>
            <dt><a href="https://medievalandrenaissancestudies.vassar.edu/">Medieval &amp; Renaissance Studies</a></dt>
            <dd>
               Medieval &amp; Renaissance Studies
            </dd>
            <dt><a href="https://music.vassar.edu/">Music</a></dt>
            <dd>
               Music &amp; Culture<br>
               Music Composition<br>
               Music History<br>
               Music Performance<br>
               Music Theory
            </dd>
            <dt><a href="https://philosophy.vassar.edu/">Philosophy</a></dt>
            <dd>
               Aesthetics and Philosophy of Ar<br>
               Analytic Philosophy<br>
               Comparative Philosophy<br>
               Continental Philosophy<br>
               Ethics &amp; Social &amp; Political Philosophy<br>
               History of Philosophy
            </dd>
            <dt><a href="https://physicsandastronomy.vassar.edu/physics/">Physics</a></dt>
            <dd>
               Physics
            </dd>
            <dt><a href="https://politicalscience.vassar.edu/">Political Science</a></dt>
            <dd>
               American Politics<br>
               Comparative Politics<br>
               International Politics<br>
               Political Theory
            </dd>
            <dt><a href="https://religion.vassar.edu/">Religion</a></dt>
            <dd>
               Religion
            </dd>
            <dt><a href="https://russian.vassar.edu/">Russian Studies</a></dt>
            <dd>
               Russian Studies
            </dd>
            <dt><a href="https://sociology.vassar.edu/">Sociology</a></dt>
            <dd>
               Sociology
            </dd>
            <dt><a href="https://urbanstudies.vassar.edu/">Urban Studies</a></dt>
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

  <?php echo item_dropdown('Accelerated and Dual Degree Programs'); ?>
    <div class="row has-dividers">
      <div class="col-sm">
          <h3>Vassar/Columbia BA/MPH</h3>
          <p>The BA/MPH is a dual degree program in which a student earns a BA from Vassar then goes on to an accelerated Masters program in Public Health at Columbia University Mailman School of Public Health.</p>

          <p>   <a href="https://www.vassar.edu/academics/accelerated-and-dual-degree-programs" >Learn more about Accelerated and Dual Degree Programs
              </a></p>
      </div>
      <div class="col-sm">
          <h3>Vassar/Dartmouth BA/BE</h3>
          <p>Through a cooperative arrangement with the Thayer School of Engineering at Dartmouth College, Vassar students may earn both the bachelor of arts (BA) degree from Vassar and the bachelor of engineering (BE) degree from Dartmouth. </p>
      </div>
  </div>
  <?php echo end_item_dropdown(); ?>

<?php echo end_sec_wideContent(); ?>

<?php echo sec_wideContent(
    'More in This Section',
    '',
    'theme-cream theme-verylightgray pb-1 presentation',
    'mw-4'
); ?>



<?php echo sec_hasColumns(
    null,
    3,
    null,
    '',
    ''
); ?>

<?php echo item_col('equalht'); ?>
<a class="card mb-4" href="/admission/explore/campus">
    <img src="https://vassartest.chuckyatsuk.com/img/visit/0191-19-10-ali-library-drone-vassar-vb-2015.jpg" class="card-img-top" alt="asdfasdfds">
    <div class="card-body">
        <h4 class="card-title h2">Explore Campus</h4>
        <div class="card-text">
            <p>Bold thinking converges with breathtaking natural beauty. </p>

        </div>
        <div class="p-0 m-0 pt-4 d-flex w-100 justify-content-start btn btn-link"><i class="mx-0 circle fa-solid fa-arrow-right"></i></div>
    </div>
</a>
<?php echo end_item_col(); ?>

<?php echo item_col('equalht'); ?>
<a class="card mb-4" href="/admission/explore/student-life">
    <img src="https://vassartest.chuckyatsuk.com/img/explore/student-life/Vassar_Campus_20190508_KR_5256.jpg" class="card-img-top" alt="asdfasdfds">
    <div class="card-body">
        <h4 class="card-title h2">Explore Student Life</h4>
        <div class="card-text">
            <p>A strong community is made of every individual.</p>

        </div>
        <div class="p-0 m-0 pt-4 d-flex w-100 justify-content-start btn btn-link"><i class="mx-0 circle fa-solid fa-arrow-right"></i></div>
    </div>
</a>
<?php echo end_item_col(); ?>
<?php echo item_col('equalht'); ?>
<a class="card mb-4" href="/admission/explore/outcomes">
    <img src="https://vassartest.chuckyatsuk.com/img/explore/outcomes/0002-20-01-kr-scc-networking-vassar-0041.jpg" class="card-img-top" alt="Outcomes">
    <div class="card-body">
        <h4 class="card-title h2">Explore Outcomes</h4>
        <div class="card-text">
            <p>Vassar is committed to ensuring our students’ growth and progress from Day 1 to beyond graduation.
            </p>
        </div>
        <div class="p-0 m-0 pt-4 d-flex w-100 justify-content-start btn btn-link"><i class="mx-0 circle fa-solid fa-arrow-right"></i></div>
    </div>
</a>
<?php echo end_item_col(); ?>
<?php echo end_sec_hasColumns(); ?>
<?php echo end_sec_wideContent(); ?>

<?php echo site_footer(); ?>
