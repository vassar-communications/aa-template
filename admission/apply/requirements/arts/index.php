
<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
 ?>
<?php

/* PAGE INFO === */

$page_info = '{
  "page_title":"Art, Music, and Dance Portfolios",
  "feature_image":"/admission/assets/images/apply/arts/0123_15_11_KR_0170.jpg"
}';
/* === */
$page_info = json_decode($page_info, true);

?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation(); ?>

<?php echo page_partialmasthead($page_info['feature_image']); ?>

<?php echo interior_page_nav() ?>

<?php /*  PAGE CONTENT === */ ?>


<?php echo sec_fullBleedImageColumn(
    'Arts Portfolios',
    $admission_img_path.'apply/arts/110619_160over90_Vassar_4789.jpg',
    'image-is-first theme-cream',
    ''
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <p>The arts portfolio is an optional opportunity for first-year applicants to share a well-developed talent or accomplishment in music, art, or dance, if you intend to further pursue that passion at Vassar. Submissions will be evaluated by faculty in the relevant discipline and their evaluations will be shared with the Office of Admission.</p>


</div>
<?php echo end_sec_fullBleedImageColumn(); ?>


<?php echo sec_hasColumns(
    null,
    2,
    null,
    'animate-when-content-appears animation-slide-up theme-dark-burgundy',
    'flex-equal align-items-center d-flex flex-column flex-md-row'
); ?>

<?php echo item_col('equal'); ?>
<h2 class="display-2">How to Submit</h2>
<p>Arts portfolio materials should be shared electronically at <a href="https://vassar.slideroom.com">vassar.slideroom.com</a>. <strong>Please do not mail these materials to the Office of Admission</strong>.</p>



<?php echo end_item_col(); ?>

<?php echo item_col('equal'); ?>
<?php echo deadlines('Portfolio  Deadlines'); ?>

<?php echo deadlines_item('Early Decision Round 1', 'November 17, 2022'); ?>
<?php echo deadlines_item('Early Decision Round 2', 'January 4, 2023'); ?>
<?php echo deadlines_item('Regular Decision', 'January 4, 2023'); ?>
<?php echo end_deadlines(); ?>

<?php echo end_item_col(); ?>

<?php echo end_sec_hasColumns(); ?>



<?php echo sec_regularContent(
    null,
    '',
    ''
); ?>
<h3>Portfolio Requirements</h3>
<p>Click on the relevant discipline below for portfolio requirement specifications.</p>
<div class="accordion accordion-flush mb-4" id="arts">
    <div class="accordion-item">
        <div class="accordion-header" id="arts-headingOne">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#arts-collapseOne" aria-expanded="true" aria-controls="arts-collapseOne">
                Music
            </button>
        </div>
        <div id="arts-collapseOne" class="accordion-collapse collapse" aria-labelledby="arts-headingOne" data-bs-parent="#arts">
            <div class="accordion-body">
                <p>Please submit recordings of two contrasting pieces, 3 to 5 minutes each.</p>
                <ul>
                    <li>For instrumentalists: classical or jazz selections, either solo or accompanied</li>
                    <li>For vocalists: classical, musical theater, or jazz; solo selections only</li>
                    <li>For composers: submit a score and recording of your composition</li>
                </ul>

            </div>
        </div>
    </div>
    <div class="accordion-item">
        <div class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#arts-collapseTwo" aria-expanded="false" aria-controls="arts-collapseTwo">
                Art
            </button>
        </div>
        <div id="arts-collapseTwo" class="accordion-collapse collapse" aria-labelledby="arts-headingTwo" data-bs-parent="#arts">
            <div class="accordion-body">
                <p>Please submit 10 to 20 photos of your art.</p>
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <div class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#arts-collapseThree" aria-expanded="false" aria-controls="arts-collapseThree">
                Dance
            </button>
        </div>
        <div id="arts-collapseThree" class="accordion-collapse collapse" aria-labelledby="arts-headingThree" data-bs-parent="#arts">
            <div class="accordion-body">
                <p>Please submit a video of one or two, 3- to 5-minute selections from a performance or studio work. If submitting a group performance, ensure that you are clearly identifiable.</p>
             </div>
        </div>
    </div>
</div>
<h3 class="mt-5">Common Application</h3>
    <p>If you are submitting the Common application go to <a href="https://vassar.slideroom.com/">vassar.slideroom.com</a>, select the program and round in which you are applying, and submit materials through that program. For example, if you are applying in Early Decision I and submitting a dance portfolio, select “Dance: Early Decision I.”</p>

    <p>If you submitted the Common application and received a fee waiver, this will automatically apply to Slideroom.</p>

<h3 class="mt-5">Coalition or QuestBridge Application</h3>
    <p>If you are submitting the Questbridge or Coalition Application go to <a href="https://vassar.slideroom.com/">vassar.slideroom.com</a>, select the “Non-Common App” option for the program and round in which you are applying and submit your materials. For example, if you are applying in Early Decision I and submitting a dance portfolio, you would click on “Dance (Non-Common App): Early Decision I.”</p>

    <p>If you submitted the Questbridge or Coalition application and require a Slideroom fee waiver, please email <a href="mailto:admissions@vassar.edu">admissions@vassar.edu</a> to make that request.</p>

<h3 class="mt-5">Questions about art, music, and dance portfolios?</h3>
    <p>Please email Melanie Poston at <a href="mailto:mposton@vassar.edu">mposton@vassar.edu</a></p>
<?php echo end_sec_regularContent(); ?>

<!-- Related Topics -->
<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/apply/apply-how-to-apply.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/apply/apply-international.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/apply/apply-transfer.php');?>
<?php echo end_sec_relatedTopics(); ?>
<?php echo site_footer(); ?>