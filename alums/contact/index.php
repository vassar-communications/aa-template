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
                'bg-image-alt' => 'Rockefeller Hall, a large brick building on Vassar’s campus, with several large windows surrounded by various trees on a clear day.',
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
    '/alums/assets/img/alums-contact/659_Matthew-Vassar-statue_May-2019_JA.jpg',
    'theme-cream image-is-first',
    '',
    ['img_alt_text' => 'A black metal statue of Matthew Vassar stands in a grassy area with pink trees, visible in the background. The statue is in profile, wearing a cloak and carrying a cane.']
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
            <strong>Telephone:</strong> <a href="tel:1-800-443-8196">(800) 443-8196</a> or <a href="tel:1-845-437-5400">(845) 437-5400</a><br>
            <strong>Email:</strong> <a href="mailto:advancement@vassar.edu">advancement@vassar.edu</a>
        </p>
        <hr />
        <p><strong>Not getting communications from Vassar?</strong></p>
        <p> <?php echo cta_link('https://securelb.imodules.com/s/1654/22/events.aspx?sid=1654&gid=2&pgid=5370&cid=8841&post_id=0', 'Update your email preferences online.'); ?> </p>
        <p> <?php echo cta_link('https://securelb.imodules.com/s/1654/22/events.aspx?sid=1654&gid=2&pgid=1144&cid=2123&post_id=0', 'Update your contact information online.'); ?> </p>
    </div>


    <div class="address-card mb-5">
        <p><strong>Alumnae House, the Inn at Vassar College</strong><br>
            161 College Avenue<br>
            Poughkeepsie, NY 12603</p>

        <p><strong>Telephone:</strong> <a href="tel:8454377100" class="">(845) 437-7100</a><br>
            <strong>Email:</strong> <a href="mailto:alumnaehouse@vassar.edu">alumnaehouse@vassar.edu</a><br>
            <strong>Website:</strong> <a href="https://alumnaehouse.com">alumnaehouse.com</a>
        </p>

    </div>



    <div class="d-grid gap-2">
        <a href="https://offices.vassar.edu/registrar/grades/transcripts/" class="btn btn-link arrow">Transcript Requests</a>
    </div>
    <div class="d-grid gap-2">
        <a href="https://offices.vassar.edu/registrar/grades/degree-verification/" class="btn btn-link arrow">Degree Verification</a>
    </div>
    <div class="d-grid gap-2">
        <a href="https://offices.vassar.edu/registrar/academic-information/replacement-diplomas/" class="btn btn-link arrow">Replacement Diplomas</a>
    </div>
</div>
<?php echo end_sec_fullBleedImageColumn(); ?>



<?php echo sec_regularContent(
    'Office of Advancement Directory',
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
                            <?php echo link_to_id('Office of the Vice President', 'nav-link top-level-item'); ?>
                        </li>

                        <li class="list-group-item nav-item">
                            <?php echo link_to_id('Individual Giving', 'nav-link top-level-item'); ?>

                            <ul>
                                <li class="list-group-item nav-item">
                                    <?php echo link_to_id('Annual Giving', 'nav-link'); ?>
                                </li>
                                <li class="list-group-item nav-item">
                                    <?php echo link_to_id('Gift Planning', 'nav-link'); ?>
                                </li>
                                <li class="list-group-item nav-item">
                                    <?php echo link_to_id('Principal and Leadership Gifts', 'nav-link'); ?>
                                </li>
                                <li class="list-group-item nav-item">
                                    <?php echo link_to_id('Parent and Family Giving', 'nav-link'); ?>
                                </li>
                                <li class="list-group-item nav-item">
                                    <?php echo link_to_id('Prospect Development and Research', 'nav-link'); ?>
                                </li>
                            </ul>
                        </li>

                        <li class="list-group-item nav-item">
                            <?php echo link_to_id('Engagement and Alumnae House', 'nav-link top-level-item'); ?>
                            <ul>
                                <li class="list-group-item nav-item">
                                    <?php echo link_to_id('Advancement Events and Programs', 'nav-link'); ?>
                                </li>
                            </ul>
                        </li>


                        <li class="list-group-item nav-item">
                            <?php echo link_to_id('Advancement Communications and Donor Relations', 'nav-link top-level-item'); ?>
                            <ul>
                                <li class="list-group-item nav-item">
                                    <?php echo link_to_id('Advancement Communications', 'nav-link'); ?>
                                </li>
                                <li class="list-group-item nav-item">
                                    <?php echo link_to_id('Donor Relations', 'nav-link'); ?>
                                </li>
                            </ul>
                        </li>


                        <li class="list-group-item nav-item">
                            <?php echo link_to_id('Advancement Services', 'nav-link top-level-item'); ?>

                            <ul>
                                <li class="list-group-item nav-item">
                                    <?php echo link_to_id('Advancement Systems and Reporting', 'nav-link'); ?>
                                </li>
                                <li class="list-group-item nav-item">
                                    <?php echo link_to_id('Gifts and Records', 'nav-link'); ?>
                                </li>
                            </ul>
                        </li>



                    </ul>
                </div>
            </aside>

            <main class="col col-md-8 col--text">
                <div class="anchor" id="sec1"></div>

                <?php echo heading_with_anchor_id('Office of the Vice President', '3'); ?>

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
    'RaeAnn Moore',
    'Executive Assistant',
    [
            'phone' => '845-437-5402',
            'email' => 'rmoore@vassar.edu',
        ]
);
echo end_contact_card();
?>


                    <?php
echo contact_card(
    'Anca Nelson',
    'Director for Campaign Operations and Principal Gifts Stewardship',
    [
            'phone' => '845-437-5806',
            'email' => 'anelson@vassar.edu',
        ]
);
echo end_contact_card();
?>


                </div>


                <div class="anchor" id="sec2"></div>


                <?php echo heading_with_anchor_id('Individual Giving', '3'); ?>

                <?php echo heading_with_anchor_id('Annual Giving', '4'); ?>
                <div class="grid cols-2 mb-5" style="--bs-gap: 2rem">
                    <?php
echo contact_card(
    'Amanda Ader',
    'Associate Director of Annual Giving, Strategic Initiatives & Campaigns',
    [
            'phone' => '845-437-5451',
            'email' => 'aader@vassar.edu',
        ]
);
echo end_contact_card();


echo contact_card(
    'Tammy Carney',
    'Assistant Director of Annual Giving, Production',
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
    'Jesse Fitzjohn',
    'Office Specialist',
    [
            'phone' => '845-437-5397',
            'email' => 'jfitzjohn@vassar.edu',
        ]
);
echo end_contact_card();


echo contact_card(
    'Karolina Gomez',
    'Associate Director of Annual Giving, Digital Engagement Officer',
    [
            'phone' => '845-437-7884',
            'email' => 'kgomez@vassar.edu',
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


echo contact_card(
    'Lane Sulzer',
    'Director of Annual Giving',
    [
            'phone' => '845-437-7898',
            'email' => 'lsulzer@vassar.edu',
        ]
);
echo end_contact_card();


echo contact_card(
    'Amanda Tyrrell',
    'Assistant Director of Annual Giving, Volunteer, and Reunion',
    [
            'phone' => '845-437-5489',
            'email' => 'atyrrell@vassar.edu',
        ]
);
echo end_contact_card();


echo contact_card(
    'Joe Vayas',
    'Associate Director of Annual Giving, Volunteer, and Reunion',
    [
            'phone' => '845-437-5379',
            'email' => 'jvayas@vassar.edu',
        ]
);
echo end_contact_card();


echo contact_card(
    'Carl Webster',
    'Presidential Administrative Fellow',
    [
            'phone' => '845-437-5489',
            'email' => 'cwebster@vassar.edu',
        ]
);
echo end_contact_card();


?>
                </div>


                <?php echo heading_with_anchor_id('Gift Planning', '4'); ?>
                <div class="grid cols-2 mb-5" style="--bs-gap: 2rem">
                    <?php
echo contact_card(
    'Amber Davidson',
    'Office Specialist',
    [
            'phone' => '845-437-5461',
            'email' => 'adavidson@vassar.edu',
        ]
);
echo end_contact_card();


echo contact_card(
    'Jeremy Goldberg',
    'Associate Director of Estate Gift Planning',
    [
            'phone' => '845-437-5429',
            'email' => 'jeremygoldberg@vassar.edu',
        ]
);
echo end_contact_card();


echo contact_card(
    'Alexas Orcutt',
    'Director of Gift Planning and Strategic Initiatives',
    [
            'phone' => '845-437-7773',
            'email' => 'alorcutt@vassar.edu',
        ]
);
echo end_contact_card();


?>
                </div>

                <?php echo heading_with_anchor_id('Principal and Leadership Gifts', '4'); ?>

                <div class="grid cols-2 mb-5" style="--bs-gap: 2rem">
                    <?php
echo contact_card(
    'Kristen Andersen',
    'Director of Principal Gifts',
    [
            'phone' => '845-437-5597',
            'email' => 'kandersen@vassar.edu',
        ]
);
echo end_contact_card();


echo contact_card(
    'Brianna Evans',
    'Office Specialist',
    [
            'phone' => '845-437-5485',
            'email' => 'briannaevans@vassar.edu',
        ]
);
echo end_contact_card();


echo contact_card(
    'Kate Grantz',
    'Associate Director of Leadership Gifts',
    [
            'phone' => '917-484-0153',
            'email' => 'kgrantz@vassar.edu',
        ]
);
echo end_contact_card();


echo contact_card(
    'Nancy Reimer John ’79',
    'Assistant Director of Leadership Gifts',
    [
            'phone' => '845-437-5431',
            'email' => 'njohn@vassar.edu',
        ]
);
echo end_contact_card();


echo contact_card(
    'Monika Kort',
    'Office Specialist',
    [
            'phone' => '845-437-5350',
            'email' => 'mkort@vassar.edu',
        ]
);
echo end_contact_card();


echo contact_card(
    'Brian C. Lepak Jr. ’24',
    'Assistant Director of Leadership Gifts',
    [
            'phone' => '757-719-8152',
            'email' => 'blepak@vassar.edu',
        ]
);
echo end_contact_card();


echo contact_card(
    'Joe Mastracchio',
    'Associate Director of Leadership Gifts',
    [
            'phone' => '845-437-5433',
            'email' => 'jmastracchio@vassar.edu',
        ]
);
echo end_contact_card();


echo contact_card(
    'Gregg McCarty',
    'Senior Director of Leadership Gifts',
    [
            'phone' => '914-227-8985',
            'email' => 'gmccarty@vassar.edu',
        ]
);
echo end_contact_card();


?>
                </div>

                <?php echo heading_with_anchor_id('Parent and Family Giving', '4'); ?>
                <div class="grid cols-2 mb-5" style="--bs-gap: 2rem">
                    <?php
echo contact_card(
    'Becca Chuney',
    'Office Specialist',
    [
            'phone' => '845-437-5443',
            'email' => 'rchuney@vassar.edu',
        ]
);
echo end_contact_card();


echo contact_card(
    'Tracey Cousar',
    'Assistant Director of Parent and Family Giving',
    [
            'phone' => '845-437-5412',
            'email' => 'trcousar@vassar.edu',
        ]
);
echo end_contact_card();


echo contact_card(
    'Elizabeth Hoffman',
    'Director of Parent and Family Giving',
    [
            'phone' => '845-437-5488',
            'email' => 'ehoffman@vassar.edu',
        ]
);
echo end_contact_card();


?>
                </div>


                <?php echo heading_with_anchor_id('Prospect Development and Research', '4'); ?>
                <div class="grid cols-2 mb-5" style="--bs-gap: 2rem">
                    <?php
echo contact_card(
    'Mary Callaghan',
    'Senior Research Analyst',
    [
            'phone' => '845-437-5413',
            'email' => 'mcallaghan@vassar.edu',
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
    'Richard Horne',
    'Director of Prospect Development and Research',
    [
            'phone' => '845-437-7987',
            'email' => 'rhorne@vassar.edu',
        ]
);
echo end_contact_card();


echo contact_card(
    'Cathryn Stevens',
    'Assistant Director of Prospect Development and Research',
    [
            'phone' => '845-437-5391',
            'email' => 'castevens@vassar.edu',
        ]
);
echo end_contact_card();


?>
                </div>


                <div class="anchor" id="sec3"></div>

                <?php echo heading_with_anchor_id('Engagement and Alumnae House', '3'); ?>

                <div class="grid cols-2 mb-5" style="--bs-gap: 2rem">
                    <?php
echo contact_card(
    'Martha Barry ’86',
    'Alumnae House General Manager',
    [
            'phone' => '845-437-7150',
            'email' => 'mabarry@vassar.edu',
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


echo contact_card(
    'Jolee DuBois',
    'Associate Director of Volunteer Engagement',
    [
            'phone' => '845-437-5442',
            'email' => 'jdubois@vassar.edu',
        ]
);
echo end_contact_card();


echo contact_card(
    'Diana Jedlicka',
    'Director of Volunteer Engagement and Reunion',
    [
            'phone' => '845-437-5398',
            'email' => 'djedlicka@vassar.edu',
        ]
);
echo end_contact_card();


echo contact_card(
    'Patricia Lamark',
    'Assistant Director of AAVC Engagement',
    [
            'phone' => '845-437-5438',
            'email' => 'plamark@vassar.edu',
        ]
);
echo end_contact_card();


echo contact_card(
    'Cheryl McKeever',
    'Senior Associate Director of Volunteer Engagement',
    [
            'phone' => '845-437-5408',
            'email' => 'cmckeever@vassar.edu',
        ]
);
echo end_contact_card();


echo contact_card(
    'Sharon N. A. Parkinson',
    'Director of Affinity Engagement',
    [
            'phone' => '845-437-5515',
            'email' => 'shparkinson@vassar.edu',
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
    'Lisa Tessler',
    'Executive Director of AAVC',
    [
            'phone' => '845-437-5439',
            'email' => 'litessler@vassar.edu',
        ]
);
echo end_contact_card();


echo contact_card(
    'Willa Vincitore ’92',
    'Associate Vice President for Engagement',
    [
            'phone' => '845-437-5441',
            'email' => 'wvincitore@vassar.edu',
        ]
);
echo end_contact_card();


?>
                </div>


                <?php echo heading_with_anchor_id('Advancement Events and Programs', '4'); ?>

                <div class="grid cols-2 mb-5" style="--bs-gap: 2rem">
                    <?php
        echo contact_card(
    'Kristy Grimes',
    'Director of Advancement Events and Programs',
    [
                    'phone' => '845-437-7015',
                    'email' => 'kgrimes@vassar.edu',
                ]
);
        echo end_contact_card();


        echo contact_card(
            'Kataura Ross ’17',
            'Office Specialist',
            [
                    'phone' => '845-437-5495',
                    'email' => 'kaross@vassar.edu',
                ]
        );
        echo end_contact_card();


        echo contact_card(
            'Jessica Rossi',
            'Senior Associate Director for Advancement Events and Programs',
            [
                    'phone' => '845-437-5243',
                    'email' => 'jerossi@vassar.edu',
                ]
        );
        echo end_contact_card();


?>

                </div>


                <div class="anchor" id="sec4"></div>

                <?php echo heading_with_anchor_id('Advancement Communications and Donor Relations', '3'); ?>
                <div class="grid cols-2 mb-5" style="--bs-gap: 2rem">
                    <?php
    echo contact_card(
    'Janine Gwinn',
    'Associate Vice President for Advancement Communications and Donor Relations',
    [
            'phone' => '845-437-5472',
            'email' => 'jgwinn@vassar.edu',
        ]
);
echo end_contact_card();

        echo contact_card(
            'Zach Cohn',
            'Office Specialist',
            [
                    'phone' => '845-437-5480',
                    'email' => 'zcohn@vassar.edu',
                ]
        );
        echo end_contact_card();



?>

                </div>

                <?php echo heading_with_anchor_id('Advancement Communications', '4'); ?>

                <div class="grid cols-2 mb-5" style="--bs-gap: 2rem">
                    <?php
echo contact_card(
    'Susan Brkich ’86',
    'Senior Associate Director of Advancement Communications',
    [
            'phone' => '845-437-5449',
            'email' => 'subrkich@vassar.edu',
        ]
);
echo end_contact_card();


echo contact_card(
    'Kwan Man Cheng',
    'Associate Director of Advancement Communications',
    [
            'phone' => '845-437-5501',
            'email' => 'kcheng@vassar.edu',
        ]
);
echo end_contact_card();

echo contact_card(
    'Yolanda Johnson',
    'Associate Director of Advancement Communications',
    [
            'phone' => '845-437-5440',
            'email' => 'yojohnson@vassar.edu',
        ]
);
echo end_contact_card();


echo contact_card(
    'Heather Mattioli',
    'Associate Director of Advancement Communications – Content',
    [
            'phone' => '845-437-5861',
            'email' => 'hmattioli@vassar.edu',
        ]
);
echo end_contact_card();


echo contact_card(
    'Andrew Salisbury',
    'Assistant Director of Advancement Communications',
    [
            'phone' => '845-437-5421',
            'email' => 'asalisbury@vassar.edu',
        ]
);
echo end_contact_card();


echo contact_card(
    'Lauren Zallo',
    'Assistant Director of Advancement Communications – Digital',
    [
            'phone' => '845-437-5419',
            'email' => 'lzallo@vassar.edu',
        ]
);
echo end_contact_card();

?>

                </div>

                <?php echo heading_with_anchor_id('Donor Relations', '4'); ?>

                <div class="grid cols-2 mb-5" style="--bs-gap: 2rem">
                    <?php
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
            'May Lee',
            'Senior Associate Director of Donor Relations',
            [
                    'phone' => '845-437-5931',
                    'email' => 'malee@vassar.edu',
                ]
        );
        echo end_contact_card();


?>

                </div>


                <div class="anchor" id="sec5"></div>

                <?php echo heading_with_anchor_id('Advancement Services', '3'); ?>

                <div class="grid cols-2 mb-5 mb-5" style="--bs-gap: 2rem">
                    <?php
echo contact_card(
    'Jeffrey Holl',
    'Assistant Director of Advancement Budget Operations',
    [
     'phone' => '845-437-5466',
            'email' => 'jholl@vassar.edu',
         ]
);
echo end_contact_card();


echo contact_card(
    'Ariel Pe&ntilde;a',
    'Associate Vice President for Advancement Services',
    [
            'phone' => '845-437-5497',
            'email' => 'arielpena@vassar.edu',
        ]
);
echo end_contact_card();


echo contact_card(
    'Jennifer Ruedebusch',
    'Office Coordinator for Gift, Trust, and Estate Administration',
    [
            'phone' => '845-437-5487',
            'email' => 'jeruedebusch@vassar.edu',
        ]
);
echo end_contact_card();


echo contact_card(
    'Katherine Stikkers',
    'Advancement Data Manager',
    [
            'phone' => '845-437-5492',
            'email' => 'kstikkers@vassar.edu',
        ]
);
echo end_contact_card();


echo contact_card(
    'Danielle J. Suter',
    'Director of Gift, Trust, and Estate Administration',
    [
            'phone' => '845-437-5498',
            'email' => 'dasuter@vassar.edu',
        ]
);
echo end_contact_card();


echo contact_card(
    'Ashley Usher',
    'Office Specialist',
    [
            'phone' => '845-437-5922',
            'email' => 'ausher@vassar.edu',
        ]
);
echo end_contact_card();


?>
                </div>


                <div class="anchor" id="sec6"></div>

                <?php echo heading_with_anchor_id('Advancement Systems and Reporting', '4'); ?>
                <div class="grid cols-2 mb-5" style="--bs-gap: 2rem">
                    <?php

echo contact_card(
    'Judy Connolly',
    'Associate Director of Advancement Systems and Reporting',
    [
            'phone' => '845-437-7203',
            'email' => 'jconnolly@vassar.edu',
        ]
);
echo end_contact_card();


echo contact_card(
    'James Mills',
    'Systems Analyst',
    [
            'phone' => '845-437-5483',
            'email' => 'jamills@vassar.edu',
        ]
);
echo end_contact_card();


echo contact_card(
    'Carlos Ordonez',
    'Senior Data Analyst',
    [
            'phone' => '845-437-5416',
            'email' => 'cordonez@vassar.edu',
        ]
);
echo end_contact_card();


echo contact_card(
    'Nancy Wanzer',
    'Senior Director of Advancement Services',
    [
            'phone' => '845-437-5437',
            'email' => 'nawanzer@vassar.edu',
        ]
);
echo end_contact_card();


?>
                </div>

                <div class="anchor" id="sec7"></div>

                <?php echo heading_with_anchor_id('Gifts and Records', '4'); ?>

                <div class="grid cols-2 mb-5" style="--bs-gap: 2rem">
                    <?php

echo contact_card(
    'Dashawn Greene',
    'Data Records Specialist',
    [
            'phone' => '845-437-5416',
            'email' => 'dgreene@vassar.edu',
        ]
);
echo end_contact_card();


echo contact_card(
    'Kara Montgomery',
    'Director of Gifts and Records',
    [
            'phone' => '845-437-5493',
            'email' => 'kamontgomery@vassar.edu',
        ]
);
echo end_contact_card();


echo contact_card(
    'Lisa Paoloni',
    'Data Records Specialist',
    [
            'phone' => '845-437-7420',
            'email' => 'lpaolini@vassar.edu',
        ]
);
echo end_contact_card();


echo contact_card(
    'Cher Pompa',
    'Gift Processing Coordinator',
    [
            'phone' => '845-437-5404',
            'email' => 'cpompa@vassar.edu',
        ]
);
echo end_contact_card();


echo contact_card(
    'Beatrice Shivers',
    'Gift Processing Coordinator',
    [
            'phone' => '845-437-7789',
            'email' => 'bshivers@vassar.edu',
        ]
);
echo end_contact_card();


echo contact_card(
    'Anita West',
    'Data Records Coordinator',
    [
            'phone' => '845-437-5444',
            'email' => 'anwest@vassar.edu',
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