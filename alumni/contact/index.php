<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */

$page_info = '{
  "page_title":"Contact Us",
  "page_classes":"",
  "feature_image":"/alumni/assets/img/alumni-contact/Ad_Poster_15_TT_2266.jpg"
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
        'bg-image-alt' => 'alt text',
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
    '/alumni/assets/img/alumni-contact/0097_16_09_TT_2788.jpg',
    'theme-cream image-is-first',
    ''
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <div class="address-card mb-5">
        <p>
            <strong>Office of Advancement</strong><br>
            Vassar College, Box 14<br>
            161 College Ave<br>
            Poughkeepsie, NY 12603<br>
            USA
        </p>
        <p>
            Telephone: <a href="tel:1-800-443-8196">(800) 443-8196</a> or <a href="tel:1-845-437-5400">(845) 437-5400</a><br>
            Email: <a href="mailto:advancement@vassar.edu">advancement@vassar.edu</a>
        </p>
    </div>

    <div class="d-grid gap-2">
    <a href="/alumni/resources/alumnae-house/contact" class="btn btn-link  arrow">Contact Alumnae House</a>
    <a href="https://offices.vassar.edu/registrar/" class="btn btn-link arrow">Contact the Registrar</a>
    </div>
</div>
<?php echo end_sec_fullBleedImageColumn(); ?>

<?php echo sec_regularContent('Staff Directory','','',); ?>

<?php   echo end_sec_regularContent(); ?>
<div class="container">
    <div class="container position-relative" id="content">
        <div class="row mt-5">
            <aside class="col-md-3" id="left">
                <div class="mt-5 mb-3 sticky-top" id="side">
                    <ul class="list-group nav flex-md-column flex-row justify-content-between pt-5" id="sidenav">
                        <li class="list-group-item nav-item mb-0"><a href="#sec1" class="nav-link pl-0">Office of the Vice President</a></li>
                        <li class="list-group-item nav-item mb-0"><a href="#sec2" class="nav-link pl-0">Advancement Services</a></li>
                         <li class="list-group-item nav-item mb-0"><a href="#sec3" class="nav-link pl-0">Advancement Systems and Reporting</a></li>
                        <li class="list-group-item nav-item mb-0"><a href="#sec4" class="nav-link pl-0">Gifts and Records</a></li>
                        <li class="list-group-item nav-item mb-0"><a href="#sec5" class="nav-link pl-0">Alumnae/i Engagement and Alumnae House</a></li>
                        <li class="list-group-item nav-item mb-0"><a href="#sec6" class="nav-link pl-0">Communications</a></li>
                        <li class="list-group-item nav-item mb-0"><a href="#sec7" class="nav-link pl-0">Giving</a></li>
                        <li class="list-group-item nav-item mb-0"><a href="#sec8" class="nav-link pl-0">Prospect Development and
                                Research</a></li>
                        <li class="list-group-item nav-item mb-0"><a href="#sec9" class="nav-link pl-0">Regional and International Programs</a></li>

                    </ul>
                </div>
            </aside>

            <main class="col p-5 col--text">
                <div class="anchor" id="sec1"></div>

                <h2 class="display-6 mb-5">Office of the Vice President</h2>

                <div class="staff-contact mb-5">
                    <h3>Tim Kane</h3>
                    <p><em>Vice President for Advancement</em></p>
                    <p>Email: <a class="fixemaillink" href="mailto:tkane@vassar.edu" title="Contact Tim Kane" >tkane@vassar.edu</a><br/>Tel: <a class="fixemaillink" href="tel:845-437-5401">(845) 437-5401</a></p>
                </div>

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




                <div class="staff-contact mb-5">
                    <h3>Anca Nelson</h3>
                    <p><em>Special Assistant to the Vice President for Campaign Operations</em></p>
                    <p>Email: <a class="fixemaillink" href="mailto:anelson@vassar.edu" title="Contact Anca Nelson" >anelson@vassar.edu</a>
                </div>
                <div class="staff-contact mb-5">
                    <h3>RaeAnn Moore</h3>
                    <p><em>Executive Assistant</em></p>
                    <p>Email: <a class="fixemaillink" href="mailto:rmoore@vassar.edu" title="Contact RaeAnn Moore" >rmoore@vassar.edu</a><br/>Tel: <a class="fixemaillink" href="tel:845-437-5402">(845) 437-5402</a></p>
                </div>



                <hr class="my-5">

                <div class="anchor" id="sec2"></div>

                <h2 class="display-6">Advancement Services</h2>
                <div class="staff-contact mb-5">
                    <h3>Mary Carole Starke</h3>
                    <p><em>Associate Vice President for Advancement Services</em></p>
                    <p>Email: <a class="fixemaillink" href="mailto:mastarke@vassar.edu" title="Contact Mary Carole Starke" >mastarke@vassar.edu</a><br/>Tel: <a class="fixemaillink" href="tel:845-437-5497">(845) 437-5497</a></p>
                </div>
                <p class="fix">insert contact cards</p>
                <hr class="my-5">


                <div class="anchor" id="sec3"></div>

                <h2 class="display-6">Advancement Systems and Reporting</h2>

                <p class="fix">insert contact cards</p>
                <hr class="my-5">

                <div class="anchor" id="sec4"></div>

                <h2 class="display-6">Gifts and Records</h2>

                <p class="fix">insert contact cards</p>
                <hr class="my-5">

                <div class="anchor" id="sec5"></div>

                <h2 class="display-6">Alumnae/i Engagement and Alumnae House</h2>

                <p class="fix">insert contact cards</p>
                <hr class="my-5">

                <div class="anchor" id="sec6"></div>

                <h2 class="display-6">Communications</h2>

                <p class="fix">insert contact cards</p>
                <hr class="my-5">

                <div class="anchor" id="sec7"></div>

                <h2 class="display-6 mb-5">Giving</h2>

                <h4>Individual Giving</h4>
                <p class="fix">insert contact cards</p>

                <hr class="my-5">

                <h4>Annual Giving</h4>
                <p class="fix">insert contact cards</p>

                <hr class="my-5">

                <h4>Leadership Gifts</h4>
                <p class="fix">insert contact cards</p>

                <hr class="my-5">

                <h4>Gift Planning</h4>
                <p class="fix">insert contact cards</p>

                <hr class="my-5">

                <h4>Parent and Family Giving</h4>
                <p class="fix">insert contact cards</p>

                <hr class="my-5">

                <h4>Principal Gifts</h4>
                <p class="fix">insert contact cards</p>

                <hr class="my-5">

                <div class="anchor" id="sec8"></div>

                <h2 class="display-6">Prospect Development and Research</h2>

                <p class="fix">insert contact cards</p>
                <hr class="my-5">

                <div class="anchor" id="sec9"></div>

                <h2 class="display-6">Regional and International Programs</h2>

                <p class="fix">insert contact cards</p>
                <hr class="my-5">

            </main>
        </div>
    </div>
</div>



<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/alumni/inc/pages/calendar/calendar.php');?>
<?php include($project_paths['main_project_root'].'/alumni/inc/pages/community/community.php');?>
<?php include($project_paths['main_project_root'].'/alumni/inc/pages/resources/resources-vassar-network.php');?>
<?php echo end_sec_relatedTopics(); ?>


<?php echo site_footer(); ?>
