<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */

$page_info = '{
  "page_title":"Contact Us",
  "page_classes":"",
  "feature_image":"/alums/assets/img/alums-contact/Ad_Poster_15_TT_2266.jpg"
}';

/* === */
$page_info = json_decode($page_info, true);

?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation_alums(); ?>




<?php echo sec_fixedCenteredTitle_masthead(
    '<b class="slide-from-left">Contact Us</b>',
    null,
    'theme-verylightgray reveal-image',
    'mw-4',
    ['bg-image-url' => $page_info['feature_image'],
        'bg-image-alt' => 'Rockefeller Hall on Vassar Campus',
        'css' => '
      --title-container-bg-beforeContent: rgba(0,0,0,0.4);
      --section-bg-image-opacity: 0;
      --bs-gap: 1rem;
      ']
); ?>

<?php echo end_sec_fixedCenteredTitle_masthead(); ?>


<?php echo interior_page_nav() ?>

<?php /*  PAGE CONTENT === */ ?>


<?php echo sec_fullBleedImageColumn(
    'Reach Out to Us',
    '/alums/assets/img/alums-contact/0097_16_09_TT_2788.jpg',
    'theme-cream image-is-first',
    '',
    ['img_alt_text' => 'Fountain in Sunset Lake on Vassar Campus']
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <div class="address-card mb-5">
        <p>
            <strong>Office of Advancement</strong><br>
            Vassar College<br>
            161 College Ave, Box 14<br>
            Poughkeepsie, NY 12603<br>
            USA
        </p>
        <p>
            Telephone: <a href="tel:1-800-443-8196">(800) 443-8196</a> or <a href="tel:1-845-437-5400">(845) 437-5400</a><br>
            Email: <a href="mailto:advancement@vassar.edu">advancement@vassar.edu</a>
        </p>
    </div>


    <div class="address-card mb-5">
      <p><strong>Alumnae House, the Inn at Vassar College</strong><br>
          161 College Avenue<br>
          Poughkeepsie, NY 12603</p>

          <p>Telephone: <a href="tel:8454377100" class="">(845) 437-7100</a><br>
              Email: <a href="mailto:alumnaehouse@vassar.edu">alumnaehouse@vassar.edu</a></p>

          <p> <?php echo cta_link('https://www.vassar.edu/alums/resources/alumnae-house/', 'Learn more about Alumnae House'); ?> </p>
    </div>



    <div class="d-grid gap-2">
    <a href="https://offices.vassar.edu/registrar/" class="btn btn-link arrow">Contact the Registrar</a>
    </div>
</div>
<?php echo end_sec_fullBleedImageColumn(); ?>



<?php echo sec_regularContent(
  'Staff Directory',
  'mw-inner-5'
);

/*  Note that if body has an overflow:hidden, it'll break
    sticky-top.
*/

?>




<div class="container mw-5">
    <div class="container mw-5 position-relative" id="content">
        <div class="row mt-5">
            <aside class="col-md-4 page-index-side" id="left">
                <div class="sticky-top" id="side">
                    <ul class="list-group nav" id="sidenav">
                        <li class="list-group-item nav-item">

<?php echo link_to_id( 'Office of the Vice President', 'nav-link top-level-item'); ?>

</li>
                        <li class="list-group-item nav-item">
<?php echo link_to_id( 'Advancement Services', 'nav-link top-level-item'); ?>

<ul>
  <li class="list-group-item nav-item">

<?php echo link_to_id( 'Advancement Systems and Reporting', 'nav-link'); ?>

 <li class="list-group-item nav-item">
   <?php echo link_to_id( 'Gifts and Records', 'nav-link'); ?>
 </li>
</ul>

                        </li>

                        <li class="list-group-item nav-item">
<?php echo link_to_id( 'Alumnae/i Engagement and Alumnae House', 'nav-link top-level-item'); ?>
                        </li>
                        <li class="list-group-item nav-item">
<?php echo link_to_id( 'Advancement Communications', 'nav-link top-level-item'); ?>

                        </li>
                        <li class="list-group-item nav-item">
<?php echo link_to_id( 'Individual Giving', 'nav-link top-level-item'); ?>

<ul>
  <li class="list-group-item nav-item">
    <?php echo link_to_id( 'Annual Giving', 'nav-link'); ?>
  </li>
  <li class="list-group-item nav-item">
    <?php echo link_to_id( 'Gift Planning', 'nav-link'); ?>
  </li>
  <li class="list-group-item nav-item">
    <?php echo link_to_id( 'Leadership Gifts', 'nav-link'); ?>
  </li>
  <li class="list-group-item nav-item">
    <?php echo link_to_id( 'Parent and Family Giving', 'nav-link'); ?>
  </li>
  <li class="list-group-item nav-item">
    <?php echo link_to_id( 'Principal Gifts', 'nav-link'); ?>
  </li>
  <li class="list-group-item nav-item">
    <?php echo link_to_id( 'Prospect Development and Research', 'nav-link'); ?>
  </li>
  <li class="list-group-item nav-item">
<?php echo link_to_id( 'Stewardship, Special Events, and Programs', 'nav-link'); ?>
  </li>

</ul>
                        </li>


                    </ul>
                </div>
            </aside>

            <main class="col col-md-8 col--text">
                <div class="anchor" id="sec1"></div>

                <?php echo heading_with_anchor_id( 'Office of the Vice President', '3' ); ?>

                <div class="grid cols-2 mb-5" style="--bs-gap: 2rem">
<?php
echo contact_card(
    'Tim Kane',
    'Vice President for Advancement',
    [
      'phone' => '845-437-5401',
      'email' => 'tkane@vassar.edu',
    ]
);
echo end_contact_card();
?>

<?php
echo contact_card(
    'Anca Nelson',
    'Special Assistant to the Vice President for Campaign Operations',
    [
      'phone' => '',
      'email' => 'anelson@vassar.edu',
    ]
);
echo end_contact_card();
?>


<?php
echo contact_card(
    'RaeAnn Moore',
    'Executive Assistant',
    [
      'phone' => '845-437-5402',
      'email' => 'rmoore@vassar.edu',
    ]
);
echo end_contact_card();
?>
</div>



                <div class="anchor" id="sec2"></div>

                <?php echo heading_with_anchor_id( 'Advancement Services', '3' ); ?>

                <div class="grid cols-2 mb-5 mb-5" style="--bs-gap: 2rem">
<?php
                echo contact_card(
                    'Mary Carole Starke',
                    'Associate Vice President for Advancement Services',
                    [
                      'phone' => '845-437-5497',
                      'email' => 'mastarke@vassar.edu',
                    ]
                );
                echo end_contact_card();


                echo contact_card(
                    'Kara Montgomery',
                    'Director of Advancement Project Management',
                    [
                      'phone' => '845-437-5493',
                      'email' => 'kamontgomery@vassar.edu',
                    ]
                );
                echo end_contact_card();


                echo contact_card(
                    'Danielle J. Suter',
                    'Director of Gift, Trust and Estate Administration',
                    [
                      'phone' => '845-437-5498',
                      'email' => 'dasuter@vassar.edu',
                    ]
                );
                echo end_contact_card();


                echo contact_card(
                    'Jeffrey Holl',
                    'Assistant Director of Advancement Services',
                    [
                      'phone' => '845-437-5466',
                      'email' => 'jholl@vassar.edu',
                    ]
                );
                echo end_contact_card();


                echo contact_card(
                    'Jennifer Ruedebusch',
                    'Office Specialist',
                    [
                      'phone' => '845-437-5487',
                      'email' => 'jeruedebusch@vassar.edu',
                    ]
                );
                echo end_contact_card();


                echo contact_card(
                    'Ashley Usher',
                    'Administrative Assistant',
                    [
                      'phone' => '845-437-5922',
                      'email' => 'ausher@vassar.edu',
                    ]
                );
                echo end_contact_card();
?>
</div>


                <div class="anchor" id="sec3"></div>

                <?php echo heading_with_anchor_id( 'Advancement Systems and Reporting', '4' ); ?>
                <div class="grid cols-2 mb-5" style="--bs-gap: 2rem">
<?php

echo contact_card(
    'Nancy Wanzer',
    'Director of Advancement Systems and Reporting',
    [
      'phone' => '845-437-5437',
      'email' => 'nawanzer@vassar.edu',
    ]
);
echo end_contact_card();


echo contact_card(
    'Judy Connolly',
    'Assistant Director of Advancement Systems and Reporting',
    [
      'phone' => '845-437-7203',
      'email' => 'jconnolly@vassar.edu',
    ]
);
echo end_contact_card();


echo contact_card(
    'James Mills',
    'Programmer / Analyst',
    [
      'phone' => '845-437-5483',
      'email' => 'jamills@vassar.edu',
    ]
);
echo end_contact_card();


echo contact_card(
    'Carlos Ordonez',
    'Programmer / Analyst',
    [
      'phone' => '845-437-5416',
      'email' => 'cordonez@vassar.edu',
    ]
);
echo end_contact_card();

?>
</div>

                <div class="anchor" id="sec4"></div>

<?php echo heading_with_anchor_id( 'Gifts and Records', '4' ); ?>

                <div class="grid cols-2 mb-5" style="--bs-gap: 2rem">
<?php

echo contact_card(
    'Mary Lou Keenan',
    'Manager of Gifts and Records',
    [
      'phone' => '845-437-5248',
      'email' => 'makeenan@vassar.edu',
    ]
);
echo end_contact_card();


echo contact_card(
    'Cher Pompa',
    'Accounting Specialist',
    [
      'phone' => '845-437-5404',
      'email' => 'cpompa@vassar.edu',
    ]
);
echo end_contact_card();


echo contact_card(
    'Ahmed Siddiqui',
    'Accounting Specialist',
    [
      'phone' => '845-437-7789',
      'email' => 'asiddiqui@vassar.edu',
    ]
);
echo end_contact_card();


echo contact_card(
    'Anita West',
    'Data Records Specialist',
    [
      'phone' => '845-437-5444',
      'email' => 'anwest@vassar.edu',
    ]
);
echo end_contact_card();


echo contact_card(
    'Dashawn Greene',
    'Data Records Assistant',
    [
      'phone' => '845-437-5416',
      'email' => 'dgreene@vassar.edu',
    ]
);
echo end_contact_card();


echo contact_card(
    'Lisa Paoloni',
    'Data Records Assistant',
    [
      'phone' => '845-437-7420',
      'email' => 'lpaolini@vassar.edu',
    ]
);
echo end_contact_card();

?>
</div>


                <div class="anchor" id="sec5"></div>

<?php echo heading_with_anchor_id( 'Alumnae/i Engagement and Alumnae House', '3' ); ?>

                <div class="grid cols-2 mb-5" style="--bs-gap: 2rem">
<?php
echo contact_card(
    'Lisa Tessler',
    'Associate Vice President for Alumnae/i Engagement and Executive Director of AAVC',
    [
      'phone' => '845-437-5439',
      'email' => 'litessler@vassar.edu',
    ]
);
echo end_contact_card();


echo contact_card(
    'Patricia Lamark',
    'Program Administrator',
    [
      'phone' => '845-437-5438',
      'email' => 'plamark@vassar.edu',
    ]
);
echo end_contact_card();


echo contact_card(
    'Martha Barry ’86',
    'Alumnae House Manager',
    [
      'phone' => '845-437-7150',
      'email' => 'mabarry@vassar.edu',
    ]
);
echo end_contact_card();


echo contact_card(
    'Willa Vincitore ’92',
    'Assistant Vice President for Alumnae/i Engagement',
    [
      'phone' => '845-437-5441',
      'email' => 'wvincitore@vassar.edu',
    ]
);
echo end_contact_card();


echo contact_card(
    'Diana Jedlicka',
    'Director of Reunion and Class Programs',
    [
      'phone' => '845-437-5398',
      'email' => 'djedlicka@vassar.edu',
    ]
);
echo end_contact_card();

echo contact_card(
    'Sharon N. A. Parkinson',
    'Director of Multicultural and Affinity Engagement',
    [
      'phone' => '845-437-5515',
      'email' => 'shparkinson@vassar.edu',
    ]
);
echo end_contact_card();


echo contact_card(
    'Cheryl McKeever',
    'Associate Director of Alumnae/i Engagement',
    [
      'phone' => '845-437-5408',
      'email' => 'cmckeever@vassar.edu',
    ]
);
echo end_contact_card();


echo contact_card(
    'Jolee DuBois',
    'Assistant Director for Reunion and Class Programs',
    [
      'phone' => '845-437-5442',
      'email' => 'jdubois@vassar.edu',
    ]
);
echo end_contact_card();


echo contact_card(
    'Naomi Pucarelli',
    'Office Specialist',
    [
      'phone' => '845-437-5446',
      'email' => 'napucarelli@vassar.edu',
    ]
);
echo end_contact_card();

echo contact_card(
    'Katherine Cerino-Jones',
    'Office Specialist',
    [
      'phone' => '845-437-7172',
      'email' => 'kcerinojones@vassar.edu',
    ]
);
echo end_contact_card();


?>
</div>


                <div class="anchor" id="sec6"></div>

<?php echo heading_with_anchor_id( 'Advancement Communications', '3' ); ?>
                <div class="grid cols-2 mb-5" style="--bs-gap: 2rem">
  <?php
  echo contact_card(
    'Janine Gwinn',
    'Associate Vice President for Advancement Communications',
    [
      'phone' => '845-437-5472',
      'email' => 'jgwinn@vassar.edu',
    ]
);
echo end_contact_card();

echo contact_card(
    'Susan Brkich ’86',
    'Senior Associate Director of Advancement Web Services',
    [
      'phone' => '845-437-5449',
      'email' => 'subrkich@vassar.edu',
    ]
);
echo end_contact_card();


echo contact_card(
    'Brian Gunning',
    'Associate Director of Advancement Communications',
    [
      'phone' => '845-437-5421',
      'email' => 'bgunning@vassar.edu',
    ]
);
echo end_contact_card();


echo contact_card(
    'Kwan Man Cheng',
    'Assistant Director of Advancement Communications',
    [
      'phone' => '845-437-5501',
      'email' => 'kcheng@vassar.edu',
    ]
);
echo end_contact_card();


echo contact_card(
    'Yolanda Johnson',
    'Assistant Director of Advancement Web Services',
    [
      'phone' => '845-437-5440',
      'email' => 'yojohnson@vassar.edu',
    ]
);
echo end_contact_card();

echo contact_card(
    'TBD',
    'Assistant Director of Advancement Communications Content',
    [
      'phone' => '',
      'email' => '',
    ]
);
echo end_contact_card();
?>
</div>
                <div class="anchor" id="sec7"></div>



<?php echo heading_with_anchor_id( 'Individual Giving', '3' ); ?>
                <div class="grid cols-2 mb-5" style="--bs-gap: 2rem">
<?php
echo contact_card(
    'Erin Martin',
    'Associate Vice President for Individual Giving',
    [
      'phone' => '845-437-5486',
      'email' => 'erinmartin@vassar.edu',
    ]
);
echo end_contact_card();


echo contact_card(
    'Kristen Andersen',
    'Senior Development Officer for Principal and Leadership Gifts',
    [
      'phone' => '845-437-5597',
      'email' => 'kandersen@vassar.edu',
    ]
);
echo end_contact_card();
?>

</div>

<?php echo heading_with_anchor_id( 'Annual Giving', '4' ); ?>
                <div class="grid cols-2 mb-5" style="--bs-gap: 2rem">
<?php
echo contact_card(
    'Deborah Vanecek',
    'Director of Annual Giving',
    [
      'phone' => '845-437-5494',
      'email' => 'dvanecek@vassar.edu',
    ]
);
echo end_contact_card();


echo contact_card(
    'Lisa L. Lynch',
    'Senior Associate Director of Annual Giving',
    [
      'phone' => '845-437-7017',
      'email' => 'lilynch@vassar.edu',
    ]
);
echo end_contact_card();


echo contact_card(
    'Wally Fisher ’12',
    'Associate Director of Annual Giving, Volunteer &amp; Reunion',
    [
      'phone' => '845-437-5419',
      'email' => 'wfisher@vassar.edu',
    ]
);
echo end_contact_card();


echo contact_card(
    'TBD',
    'Associate Director of &nbsp;Annual Giving,&nbsp;Volunteer &amp; Reunion',
    [
      'phone' => '',
      'email' => '',
    ]
);
echo end_contact_card();


echo contact_card(
    'Lane Sulzer',
    'Associate Director of Annual Giving, Digital Engagement Officer',
    [
      'phone' => '845-437-7898',
      'email' => 'lsulzer@vassar.edu',
    ]
);
echo end_contact_card();

echo contact_card(
    'Rori-An Chuck ’19',
    'Assistant Director of Annual Giving, Student Education & Young Alumnae/i Philanthropy',
    [
      'phone' => '845-437-7890',
      'email' => 'rochuck@vassar.edu',
    ]
);
echo end_contact_card();

/*
echo contact_card(
    'TBD',
    'Administrative Fellow',
    [
      'phone' => '',
      'email' => '',
    ]
);
echo end_contact_card();
*/

echo contact_card(
    'Tammy Carney',
    'Office Specialist',
    [
      'phone' => '845-437-5496',
      'email' => 'tcarney@vassar.edu',
    ]
);
echo end_contact_card();


echo contact_card(
    'Tobias Devor',
    'Office Specialist',
    [
      'phone' => '845-437-5415',
      'email' => 'tdevor@vassar.edu',
    ]
);
echo end_contact_card();


echo contact_card(
    'Sallie Moore',
    'Administrative Assistant',
    [
      'phone' => '845-437-5418',
      'email' => 'samoore@vassar.edu',
    ]
);
echo end_contact_card();

?>
</div>


<?php echo heading_with_anchor_id( 'Gift Planning', '4' ); ?>
                <div class="grid cols-2 mb-5" style="--bs-gap: 2rem">
<?php
echo contact_card(
    'Alexas Orcutt',
    'Director of Gift Planning and Strategic Initiatives',
    [
      'phone' => '845-437-7773',
      'email' => 'alorcutt@vassar.edu',
    ]
);
echo end_contact_card();


echo contact_card(
    'Jeremy Goldberg',
    'Assistant Director of Gift Planning',
    [
      'phone' => '845-437-7902',
      'email' => 'jeremygoldberg@vassar.edu',
    ]
);
echo end_contact_card();
?>
</div>

<?php echo heading_with_anchor_id( 'Leadership Gifts', '4' ); ?>

                <div class="grid cols-2 mb-5" style="--bs-gap: 2rem">
<?php
echo contact_card(
    'Gregg McCarty',
    'Director of Leadership Gifts',
    [
      'phone' => '914-227-8985',
      'email' => 'gmccarty@vassar.edu',
    ]
);
echo end_contact_card();


echo contact_card(
    'Molly Renfroe Katz',
    'Associate Director of Leadership Gifts',
    [
      'phone' => '845-437-5435',
      'email' => 'margaretkatz@vassar.edu',
    ]
);
echo end_contact_card();


echo contact_card(
    'Eric Watson',
    'Associate Director of Leadership Gifts and Athletic Initiatives',
    [
      'phone' => '845-437-5414',
      'email' => 'erwatson@vassar.edu',
    ]
);
echo end_contact_card();

echo contact_card(
    'Joe Mastracchio',
    'Assistant Director of Leadership Gifts',
    [
      'phone' => '845-437-5420',
      'email' => 'jmastracchio@vassar.edu',
    ]
);
echo end_contact_card();

echo contact_card(
    'Nancy Reimer John ’79',
    'Leadership Gifts Officer',
    [
      'phone' => '',
      'email' => 'njohn@vassar.edu',
    ]
);
echo end_contact_card();

echo contact_card(
    'TBD',
    'Office Specialist',
    [
      'phone' => '',
      'email' => '',
    ]
);
echo end_contact_card();
?>
</div>

<?php echo heading_with_anchor_id( 'Parent and Family Giving', '4' ); ?>
                <div class="grid cols-2 mb-5" style="--bs-gap: 2rem">
<?php
echo contact_card(
    'Elizabeth Hoffman',
    'Director of Parent and Family Giving',
    [
      'phone' => '845-437-5488',
      'email' => 'ehoffman@vassar.edu',
    ]
);
echo end_contact_card();


echo contact_card(
    'TBD',
    'Associate Director of Parent and Family Giving',
    [
      'phone' => '',
      'email' => '',
    ]
);
echo end_contact_card();


echo contact_card(
    'Tracey Cousar',
    'Office Specialist',
    [
      'phone' => '845-437-5412',
      'email' => 'trcousar@vassar.edu',
    ]
);
echo end_contact_card();
?>
</div>

<?php echo heading_with_anchor_id( 'Principal Gifts', '4' ); ?>

                <div class="grid cols-2 mb-5" style="--bs-gap: 2rem">
<?php
echo contact_card(
    'Cathryn S. Stevens',
    'Principal Gifts Associate',
    [
      'phone' => '845-437-5391',
      'email' => 'castevens@vassar.edu',
    ]
);
echo end_contact_card();


echo contact_card(
    'TBD',
    'Office Specialist',
    [
      'phone' => '',
      'email' => '',
    ]
);
echo end_contact_card();

?>
</div>

                <div class="anchor" id="sec8"></div>
<?php echo heading_with_anchor_id( 'Prospect Development and Research', '4' ); ?>
                <div class="grid cols-2 mb-5" style="--bs-gap: 2rem">
<?php
echo contact_card(
    'Richard Horne',
    'Director of Prospect Development and Research',
    [
      'phone' => '845-437-7987',
      'email' => 'rhorne@vassar.edu',
    ]
);
echo end_contact_card();


echo contact_card(
    'Tricia Chapman',
    'Senior Associate Director of Prospect Development and Research',
    [
      'phone' => '845-437-5428',
      'email' => 'pachapman@vassar.edu',
    ]
);
echo end_contact_card();


echo contact_card(
    'TBD',
    'Assistant Director',
    [
      'phone' => '',
      'email' => '',
    ]
);
echo end_contact_card();


echo contact_card(
    'TBD',
    'Research Analyst',
    [
      'phone' => '',
      'email' => '',
    ]
);
echo end_contact_card();
?>
</div>

<?php echo heading_with_anchor_id( 'Stewardship, Special Events, and Programs', '4' ); ?>

  <div class="grid cols-2 mb-5" style="--bs-gap: 2rem">
  <?php
    echo contact_card(
        'Kristy Grimes',
        'Director of Stewardship, Special Events, and Programs for Advancement',
        [
          'phone' => '845-437-7015',
          'email' => 'kgrimes@vassar.edu',
        ]
    );
    echo end_contact_card();

    echo contact_card(
        'Susan Quade',
        'Senior Associate Director of Special Events and Programs',
        [
          'phone' => '845-437-5453',
          'email' => 'suquade@vassar.edu',
        ]
    );
    echo end_contact_card();

    echo contact_card(
        'Jessica Rossi',
        'Senior Associate Director of Special Events and Programs',
        [
          'phone' => '845-437-5243',
          'email' => 'jerossi@vassar.edu',
        ]
    );
    echo end_contact_card();


    echo contact_card(
        'May Lee',
        'Senior Associate Director of Donor Relations',
        [
          'phone' => '845-437-5931',
          'email' => 'malee@vassar.edu',
        ]
    );
    echo end_contact_card();


    echo contact_card(
        'Sandra Frinton',
        'Associate Director of Donor Relations',
        [
          'phone' => '845-437-7547',
          'email' => 'safrinton@vassar.edu',
        ]
    );
    echo end_contact_card();


    echo contact_card(
        'TBD',
        'Administrative Assistant',
        [
          'phone' => '',
          'email' => '',
        ]
    );
    echo end_contact_card();

echo contact_card(
    'TBD',
    'Office Specialist',
    [
      'phone' => '',
      'email' => '',
    ]
);
echo end_contact_card();
?>

</div>



                <div class="anchor" id="sec9"></div>

            </main>
        </div>
    </div>
</div>

<?php echo end_sec_regularContent(); ?>


<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/calendar/calendar.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/community/community.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/resources/resources-vassar-network.php');?>
<?php echo end_sec_relatedTopics(); ?>


<?php echo site_footeralums(); ?>
