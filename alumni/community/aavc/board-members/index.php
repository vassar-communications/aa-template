<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */


$page_info = '{
  "page_title":"Board Members",
  "page_classes":"",
  "feature_image":"/assets/images/placeholder-banner.png"
}';

/* === */
$page_info = json_decode($page_info, true);

?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation_alums(); ?>

<?php echo page_textmasthead('theme-dark-burgundy'); ?>

<?php echo interior_page_nav() ?>

<?php /*  PAGE CONTENT === */ ?>

<?php echo sec_regularContent(
    'Board of Directors',
    '',
    ''
); ?>

<p>The Alumni Association of Vassar College (AAVC) Board of Directors is a group of dedicated volunteers that serves the college and more than 40,000 alumni at the highest level. The Board manages the affairs of the AAVC, working closely with the college's Associate Vice President for Alumni Engagement and Executive Director of the AAVC, and meets regularly in October, February, and in June at Reunion. Most of the Board’s work, however, is accomplished by hard-working committees comprised of directors, volunteers, observers, and staff leads.</p>

<p>Current standing committees are devoted to these AAVC priorities: Alumnae House, Alumnae/i Recognition, Career Networking, Clubs, Class Engagement, Communications, Nominations and Governance, and the Vassar Fund. The Board regularly examines programming and policy to ensure that the AAVC meets the varied needs of its diverse, worldwide constituents and advances the interests and mission of Vassar in relevant and substantive ways. Six AAVC directors also serve as Vassar College trustees. Additionally, observers from the AAAVC and the college student leadership attend the AAVC board and committee meetings.</p>

<p>A call for nominations to the Board is held each year in the fall, with elections occurring in June, at Reunion. The board encourages nominations of individuals who have high levels of professional achievement as well as experience serving the college, and who reflect the diverse backgrounds of our over 40,000 constituents.</p>

<?php echo end_sec_regularContent(); ?>

<?php echo sec_wideContent(
    null,
    '',
    'theme-cream',
    ''
); ?>

<?php echo sec_hasColumns(
    'Current AAVC Board Members',
    3,
    null,
    '',
    ''
); ?>



<?php echo item_cardWithText(
    'Monica Vachher ’77 (she/her/hers)',
    '/alumni/community/aavc/board-members/--/',
    ['url' => '/alumni/assets/img/alumni-community/aavc/board/vachher-monica-aavc-alum-001.jpg', 'alt' => 'replacealttext' ],
    'related-topics card--withParagraph card-has-cta-icon card-is-link'
); ?>

<div class="location">Philadelphia</div>
<div class="term">Term of Service: 2022–2026</div>
<div class="position">AAVC President and AAVC Trustee</div>
<?php echo end_item_cardWithText(
    '',
); ?>



<?php echo item_cardWithText(
    'Brian Farkas ’10 (he/him/his)',
    '/alumni/community/aavc/board-members/--/',
    ['url' => '/alumni/assets/img/alumni-community/aavc/board/farkas-brian-aavc-alum-001.jpg', 'alt' => 'replacealttext' ],
    'related-topics card--withParagraph card-has-cta-icon card-is-link'
); ?>

<div class="location">New York</div>
<div class="term">Term of Service: 2022–2026</div>
<div class="position">AAVC Vice President and AAVC Trustee</div>
<?php echo end_item_cardWithText(
    '',
); ?>


<?php echo item_cardWithText(
    'Tyrone Forman ’92 (he/him/his)',
    '/alumni/community/aavc/board-members/--/',
    ['url' => '/alumni/assets/img/alumni-community/aavc/board/forman-tyrone-aavc-alum-001.jpg', 'alt' => 'replacealttext' ],
    'related-topics card--withParagraph card-has-cta-icon card-is-link'
); ?>

<div class="location">Illinois</div>
<div class="term">Term of Service: 2022–2026</div>
<div class="position">AAVC Vice President and AAVC Trustee</div>
<?php echo end_item_cardWithText(
    null,
); ?>


<?php echo item_cardWithText(
    'Patrick DeYoung ’18 (he/him/his)',
    '/alumni/community/aavc/board-members/--/',
    ['url' => '/alumni/assets/img/alumni-community/aavc/board/deyoung-patrick-aavc-alum-001.jpg', 'alt' => 'replacealttext' ],
    'related-topics card--withParagraph card-has-cta-icon card-is-link'
); ?>
<div class="location">Washington</div>
<div class="term">Term of Service: 2022–2026</div>
<div class="position">AAVC Trustee, Nominating and Governance Committee Member and Ad Hoc Student and Young Alumnae/i Engagement Committee Member</div>
<?php echo end_item_cardWithText(
    null,
); ?>


<?php echo item_cardWithText(
    'Seiji Hayashi ’91 (he/him/his)',
    '/alumni/community/aavc/board-members/--/',
    ['url' => '/alumni/assets/img/alumni-community/aavc/board/hayashi-seiji-aavc-alum-001.jpg', 'alt' => 'replacealttext' ],
    'related-topics card--withParagraph card-has-cta-icon card-is-link'
); ?>
<div class="location">Maryland</div>
<div class="term">Term of Service: 2020–2024</div>
<div class="position">AAVC Trustee, Alumnae/i Recognition Committee Member and Career Networking Committee Member</div>
<?php echo end_item_cardWithText(
    null,
); ?>

<?php echo item_cardWithText(
    'Natalie Nixon ’91 (she/her/hers)',
    '/alumni/community/aavc/board-members/--/',
    ['url' => '/alumni/assets/img/alumni-community/aavc/board/nixon-natalie-aavc-alum-001.jpg', 'alt' => 'replacealttext' ],
    'related-topics card--withParagraph card-has-cta-icon card-is-link'
); ?>
<div class="location">Pennsylvania</div>
<div class="term">Term of Service: 2019–2023</div>
<div class="position">AAVC Trustee and Career Networking Committee Chair</div>
<?php echo end_item_cardWithText(
    null,
); ?>




<?php echo item_cardWithText(
    'Alexandria Dempsey ’09 (she/her/hers)',
    '/alumni/community/aavc/board-members/--/',
    ['url' => '/alumni/assets/img/alumni-community/aavc/board/dempsey-alexandria-aavc-alum-001.jpg', 'alt' => 'replacealttext' ],
    'related-topics card--withParagraph card-has-cta-icon card-is-link'
); ?>
<div class="location">California</div>
<div class="term">Term of Service: 2020–2024</div>
<div class="position">Class Engagement Committee Chair and Clubs Committee Member</div>
<?php echo end_item_cardWithText(
    null,
); ?>


<?php echo item_cardWithText(
    'James Estrada ’13 (he/him/his)',
    '/alumni/community/aavc/board-members/--/',
    ['url' => '/alumni/assets/img/alumni-community/aavc/board/estrada-james-aavc-alum-001.jpg', 'alt' => 'replacealttext' ],
    'related-topics card--withParagraph card-has-cta-icon card-is-link'
); ?>
<div class="location">Michigan</div>
<div class="term">Term of Service: 2021–2025</div>
<div class="position">Alumnae House Committee Chair and Ad Hoc Student and Young Alumnae/i Engagement Committee Member</div>
<?php echo end_item_cardWithText(
    null,
); ?>

<?php echo item_cardWithText(
    'Justin Hergianto ’04 (he/him/his)',
    '/alumni/community/aavc/board-members/--/',
    ['url' => '/alumni/assets/img/alumni-community/aavc/board/Justin_Hergianto-removebg-aavc-alum-001.jpg', 'alt' => 'replacealttext' ],
    'related-topics card--withParagraph card-has-cta-icon card-is-link'
); ?>
<div class="location">New York</div>
<div class="term">Term of Service: 2021–2025</div>
<div class="position">Communications Advisory Committee Chair and Career Networking Committee Member</div>
<?php echo end_item_cardWithText(
    null,
); ?>


<?php echo item_cardWithText(
    'Anne Green ’93 (she/her/hers)',
    '/alumni/community/aavc/board-members/--/',
    ['url' => '/alumni/assets/img/alumni-community/aavc/board/green-anne-aavc-alum-001.jpg', 'alt' => 'replacealttext' ],
    'related-topics card--withParagraph card-has-cta-icon card-is-link'
); ?>
<div class="location">New York</div>
<div class="term">Term of Service: 2020–2024</div>
<div class="position">Nominating and Governance Committee Chair, Communications Advisory Committee Member and Ad Hoc Diversity, Equity and Inclusion Committee
</div>
<?php echo end_item_cardWithText(
    null,
); ?>


<?php echo item_cardWithText(
    'Delia Cheung Hom ’00 (she/her/hers)',
    '/alumni/community/aavc/board-members/--/',
    ['url' => '/alumni/assets/img/alumni-community/aavc/board/hom-delia-cheung-aavc-alum-001.jpg', 'alt' => 'replacealttext' ],
    'related-topics card--withParagraph card-has-cta-icon card-is-link'
); ?>
<div class="location">Massachusetts</div>
<div class="term">Term of Service: 2020–2024</div>
<div class="position">Ad Hoc Diversity, Equity and Inclusion Committee Chair and Nominating and Governance Member</div>
<?php echo end_item_cardWithText(
    null,
); ?>


<?php echo item_cardWithText(
    'Katherine “Kat” Mills Polys ’93 (she/her/hers)',
    '/alumni/community/aavc/board-members/--/',
    ['url' => '/alumni/assets/img/alumni-community/aavc/board/polys-kat-mills-aavc-alum-001.jpg', 'alt' => 'replacealttext' ],
    'related-topics card--withParagraph card-has-cta-icon card-is-link'
); ?>
<div class="location">Virginia</div>
<div class="term">Term of Service: 2022–2026</div>
<div class="position">Vassar Fund Committee Chair</div>
<?php echo end_item_cardWithText(
    null,
); ?>


<?php echo item_cardWithText(
    'Amy Pullman ’71 (she/her/hers)',
    '/alumni/community/aavc/board-members/--/',
    ['url' => '/alumni/assets/img/alumni-community/aavc/board/pullman-amy-aavc-alum-001.jpg', 'alt' => 'replacealttext' ],
    'related-topics card--withParagraph card-has-cta-icon card-is-link'
); ?>
<div class="location">Virginia</div>
<div class="term">Term of Service: 2020–2024</div>
<div class="position">Alumnae/i Recognition Committee Chair</div>
<?php echo end_item_cardWithText(
    null,
); ?>

<?php echo item_cardWithText(
    'Andrew Solum ’89 (he/him/his)',
    '/alumni/community/aavc/board-members/--/',
    ['url' => '/alumni/assets/img/alumni-community/aavc/board/solum-andrew-aavc-alum-001.jpg', 'alt' => 'replacealttext' ],
    'related-topics card--withParagraph card-has-cta-icon card-is-link'
); ?>
<div class="location">United Kingdom</div>
<div class="term">Term of Service: 2022–2026</div>
<div class="position">Clubs Committee Chair</div>
<?php echo end_item_cardWithText(
    null,
); ?>

<?php echo item_cardWithText(
    'Ellie Winter ’18 (she/her/hers)',
    '/alumni/community/aavc/board-members/--/',
    ['url' => '/alumni/assets/img/alumni-community/aavc/board/winter-ellie-aavc-alum-6332.jpg', 'alt' => 'replacealttext' ],
    'related-topics card--withParagraph card-has-cta-icon card-is-link'
); ?>
<div class="location">Rhode Island</div>
<div class="term">Term of Service: 2021–2025</div>
<div class="position">Ad Hoc Student and Young Alumnae/i Engagement Committee Chair and Ad Hoc Diversity, Equity and Inclusion Committee Member</div>
<?php echo end_item_cardWithText(
    null,
); ?>



<?php echo item_cardWithText(
    'Katrine “Cage” Ames ’69 (she/her/hers)',
    '/alumni/community/aavc/board-members/--/',
    ['url' => '/alumni/assets/img/alumni-community/aavc/board/ames-katrine-cage-aavc-alum-001.jpg', 'alt' => 'replacealttext' ],
    'related-topics card--withParagraph card-has-cta-icon card-is-link'
); ?>
<div class="location">New York</div>
<div class="term">Term of Service: 2020–2024</div>
<div class="position">Vassar Fund Committee Member and Class Engagement Committee Member</div>
<?php echo end_item_cardWithText(
    null,
); ?>

<?php echo item_cardWithText(
    'Gail Becker ’64 (she/her/hers)',
    '/alumni/community/aavc/board-members/--/',
    ['url' => '/alumni/assets/img/alumni-community/aavc/board/becker-gail-aavc-alum-001.jpg', 'alt' => 'replacealttext' ],
    'related-topics card--withParagraph card-has-cta-icon card-is-link'
); ?>
<div class="location">New Jersey</div>
<div class="term">Term of Service: 2022–2026</div>
<div class="position">AAVC Board Director</div>
<?php echo end_item_cardWithText(
    null,
); ?>


<?php echo item_cardWithText(
    'Maybelle Taylor Bennett ’70 (she/her/hers)',
    '/alumni/community/aavc/board-members/--/',
    ['url' => '/alumni/assets/img/alumni-community/aavc/board/bennett-maybelle-taylor-aavc-alum-001.jpg', 'alt' => 'replacealttext' ],
    'related-topics card--withParagraph card-has-cta-icon card-is-link'
); ?>
<div class="location">Washington, DC</div>
<div class="term">Term of Service: 2021–2025</div>
<div class="position">Alumnae/i Recognition Committee Member and Career Networking Committee Member</div>
<?php echo end_item_cardWithText(
    null,
); ?>

<?php echo item_cardWithText(
    'AC Dumlao ’13 (they/them/he/him)',
    '/alumni/community/aavc/board-members/--/',
    ['url' => '/alumni/assets/img/alumni-community/aavc/board/dumlao-ac-aavc-alum-002.jpg', 'alt' => 'replacealttext' ],
    'related-topics card--withParagraph card-has-cta-icon card-is-link'
); ?>
<div class="location">New York</div>
<div class="term">Term of Service: 2021–2025</div>
<div class="position">Nominating and Governance Committee Member and Ad Hoc Student and Young Alumnae/i Engagement Committee Member</div>
<?php echo end_item_cardWithText(
    null,
); ?>

<?php echo item_cardWithText(
    'Carlos Hernandez Tellez ’14',
    '/alumni/community/aavc/board-members/--/',
    ['url' => '/alumni/assets/img/alumni-community/aavc/board/tellez-carlos-hernandez-aavc-alum-001.jpg', 'alt' => 'replacealttext' ],
    'related-topics card--withParagraph card-has-cta-icon card-is-link'
); ?>
<div class="location">Brazil</div>
<div class="term">Term of Service: 2022–2026</div>
<div class="position">AAVC Board Director</div>
<?php echo end_item_cardWithText(
    null,
); ?>


<?php echo item_cardWithText(
    'Peggy Ann Nagae ’73 (she/her/hers)',
    '/alumni/community/aavc/board-members/--/',
    ['url' => '/alumni/assets/img/alumni-community/aavc/board/nagae-peggy-ann-aavc-alum-001.jpg', 'alt' => 'replacealttext' ],
    'related-topics card--withParagraph card-has-cta-icon card-is-link'
); ?>
<div class="location">Oregon</div>
<div class="term">Term of Service: 2022–2026</div>
<div class="position">AAVC Board Director</div>
<?php echo end_item_cardWithText(
    null,
); ?>

<?php echo item_cardWithText(
    'Chip Reid ’77 (he/him/his)',
    '/alumni/community/aavc/board-members/--/',
    ['url' => '/alumni/assets/img/alumni-community/aavc/board/reid-chip-aavc-alum-001.jpg', 'alt' => 'replacealttext' ],
    'related-topics card--withParagraph card-has-cta-icon card-is-link'
); ?>
<div class="location">Term of Service: 2020–2024</div>
<div class="term">Washington, DC</div>
<div class="position">Nominating and Governance Committee Member and Communications Advisory Committee Member</div>
<?php echo end_item_cardWithText(
    null,
); ?>

<?php echo item_cardWithText(
    'Sheryl Smikle ’81 (she/her/hers)',
    '/alumni/community/aavc/board-members/--/',
    ['url' => '/alumni/assets/img/alumni-community/aavc/board/smikle-sheryl-aavc-alum-001.jpg', 'alt' => 'replacealttext' ],
    'related-topics card--withParagraph card-has-cta-icon card-is-link'
); ?>
<div class="location">New York</div>
<div class="term">Term of Service: 2020–2024</div>
<div class="position">Nominating and Governance Committee Member and Alumnae House Committee Member</div>
<?php echo end_item_cardWithText(
    null,
); ?>

<?php echo item_cardWithText(
    'Keith St John ’81 (he/him/his)',
    '/alumni/community/aavc/board-members/--/',
    ['url' => '/alumni/assets/img/alumni-community/aavc/board/st-john-keith-aavc-alum-001.jpg', 'alt' => 'replacealttext' ],
    'related-topics card--withParagraph card-has-cta-icon card-is-link'
); ?>
<div class="location">New York</div>
<div class="term">Term of Service: 2022–2026</div>
<div class="position">AAVC Board Director</div>
<?php echo end_item_cardWithText(
    null,
); ?>




<?php echo end_sec_hasColumns(); ?>
<?php echo end_sec_wideContent(); ?>


<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/alumni/inc/pages/community/community-alumni-groups.php');?>
<?php include($project_paths['main_project_root'].'/alumni/inc/pages/community/community-notable-alumni.php');?>
<?php include($project_paths['main_project_root'].'/alumni/inc/pages/community/community-alumni-news.php');?>
<?php echo end_sec_relatedTopics(); ?>


<?php echo site_footeralumni(); ?>

