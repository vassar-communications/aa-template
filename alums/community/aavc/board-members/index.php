<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */


$page_info = '{
  "page_title":"AAVC Board Members",
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


<style>

@media screen and (min-width: 40em) {

ul.inline-list-links {
    display: flex;
    align-items: center;
    width: fit-content;
    margin: 2rem auto;
    gap: 1rem;
}
}
ul.inline-list-links li {
    list-style: none;
    margin: 0.4rem 0;
}
ul.inline-list-links li a {
    font-variation-settings: "wght" 600;
}

</style>

<ul class="inline-list-links">
  <li><a href="#board-slate">2023 Board Slate</a></li>
  <li><a href="#board-of-directors">Board of Directors</a></li>
  <li><a href="#board-members">Current AAVC Board Members</a></li>

</ul>


<?php echo sec_regularContent(
    '2023 Board Slate',
    'theme-cream',
    ''
); ?>
<a id="board-slate"></a>
<p>The 2023 slate of nominees for the AAVC Board was ratified at the Annual Meeting of the AAVC at Reunion on June 3, 2023:</p>

<ul class="linked-list mb-5">
    <li><a href="#delia-cheung-hom">Delia Cheung Hom ’00</a></li>
    <li><a href="#alisa-swire">Alisa Swire ’84</a></li>
  </ul>


<div>

<div id="delia-cheung-hom" style="clear: both; padding-bottom: 2rem; overflow: hidden">

  <h3 class="mb-4">AAVC Trustee</h3>


<div class="col-12 col-md-4 col-lg-3 align-left me-4">
  <img src="https://www.vassar.edu/alums/assets/img/alums-community/aavc/board/hom-delia-cheung-aavc-alum-001.jpg" alt="A person with long straight dark hair and glasses smiles at the camera." />
</div>

<ul class="clean-list-with-borders">
    <li><strong>Delia Cheung Hom ’00</strong></li>
    <li>(she/her/hers)</li>
    <li>Massachusetts</li>
    <li><strong>Term of Service:</strong> 2023–2027</li>
  </ul>
</div>

<h4>Additional Vassar Volunteer Experience</h4>

<p>Chair, AAVC Ad Hoc Diversity, Equity, & Inclusion Committee, 2022–present, and member, 2020–2022; director, AAVC Board of Directors, 2018–present; member, AAVC Nominating and Governance Committee, 2018–present; chair, AAVC Alumnae House Committee, 2020–2022, and member, 2019–2020; member, AAVC Ad Hoc Student and Young Alumnae/i Engagement Committee, 2018–2020; presenter, Alumnae/i College, Reunion 2017; volunteer, Admission Phoner Program, 2014; volunteer, Admissions Activities, 2014; member, Lei Ceremony Planning Committee, Asian Pacific Alumnae/i of Vassar College (APAVC), 2009–2011; chair, Asian Pacific Alumnae/i of Vassar College, 2003–2011; webmaster, Asian Pacific Alumnae/i of Vassar College, 2006–2011; volunteer, Club Admission Committee, 2009–2010; volunteer, Career Advisor Program, 2004–2006; co-president, Asian Pacific Alumnae/i of Vassar College, 2002–2003.</p>



<h4>Professional/Community Experience</h4>

<p>Chief Programs Officer, Asian American Women’s Political Initiative, 2022–present; member of the board of directors, Newton Schools Foundation, 2021–present; Vice President, Zervas Elementary School Parent Teacher Organization, 2019–present; co-founder, Asian American Women’s Political Initiative, State House Fellowship Program, 2009; Director, Asian American Center, Northeastern University, 2006–2019; member of the board of directors, Asian Sisters Participating in Reaching Excellence, 2009–2010; associate, The Partnership’s Early Career Associates Program, 2008.</p>


</div>





<div id="alisa-swire" style="clear: both; padding-bottom: 2rem; overflow: hidden" class="mt-6">

  <h3 class="mb-4">AAVC Board Director</h3>


<div class="col-12 col-md-4 col-lg-3 align-left me-4">
  <img src="/alums/assets/img/alums-community/aavc/board/alisa-swire.jpg" alt="A person with long straight brown hair and a gray coat smiles at the camera." />
</div>

<ul class="clean-list-with-borders">
    <li><strong>Alisa Swire ’84</strong></li>
    <li>(she/her/hers)</li>
    <li>New York</li>
    <li><strong>Term of Service:</strong> 2023–2027</li>
  </ul>
</div>

<h4>Additional Vassar Volunteer Experience</h4>

<p>Vice-chair, Alumnae House Committee, 2022–present, and member, 2019–2022; Club Admission Committee chair, 2008–16, and member, 2006–present; program chair, Vassar Club of the Hudson Valley, 2022 and vice president, 2020–2022; member, Advisory Council for the Consortium on Forced Migration, Vassar College, 2018–2020; notewriter or phoner, Class of 1984, 1997–1998.</p>



<h4>Professional/Community Experience</h4>

<p>Board of Directors, Board Secretary and Chair of the Governance and Nominations Committee, Hudson Valley Credit Union, 2022–present;  Pro Bono Attorney, My Sister’s Place, 2022; Legal Advisor and Director, Conversations Unbound, 2017–2020; Director and Chair of the Finance Committee, Poughkeepsie Day School, 2019–20; Refugee Resettlement Coordinator, Greater Newburgh Interfaith Council, 2016–18; Vice President, General Counsel and Corporate Secretary, Johnson Outdoors Inc., 2001–2016; Director, Mergers & Acquisitions, Walmart International, Wal-Mart Stores Inc, 1999–2001; Director, Corporate Development, Case Corporation, 1996–1999; Senior Tax Counsel, Case Corporation, 1994–1996; lecturer, Golden Gate University, 1992–1994; associate, corporate tax, Shearman & Sterling LLP, 1988–1992.</p>


</div>




<?php echo end_sec_regularContent(); ?>




<a id="board-of-directors"></a>
<?php echo sec_regularContent(
    'Board of Directors',
    '',
    ''
); ?>

<p>The Alumnae/i Association of Vassar College (AAVC) Board of Directors is a group of dedicated volunteers that serves the College and more than <?php echo $facts['number_of_alums']; ?> alums at the highest level. The Board manages the affairs of the AAVC, working closely with the College’s Associate Vice President for Alumnae/i Engagement and Executive Director of the AAVC, and meets regularly in October, February, and in June at Reunion. Most of the Board’s work, however, is accomplished by hard-working committees comprised of directors, volunteers, observers, and staff leads.</p>

<p>Current standing committees are devoted to these AAVC priorities: Alumnae House, Alumnae/i Recognition, Career Networking, Clubs, Class Engagement, Communications, Nominations and Governance, and the Vassar Fund. The Board regularly examines programming and policy to ensure that the AAVC meets the varied needs of its diverse, worldwide constituents and advances the interests and mission of Vassar in relevant and substantive ways. Six AAVC directors also serve as Vassar College trustees. Additionally, observers from the AAAVC and the college student leadership attend the AAVC board and committee meetings.</p>

<p>A call for nominations to the Board is held each year in the fall, with elections occurring in June, at Reunion. The board encourages nominations of individuals who have high levels of professional achievement as well as experience serving the College, and who reflect the diverse backgrounds of our over <?php echo $facts['number_of_alums']; ?> constituents.</p>

<?php echo end_sec_regularContent(); ?>

<?php echo sec_wideContent(
    null,
    null,
    'theme-cream pt-3',
    ''
); ?>


<a id="board-members"></a>

<?php echo sec_hasColumns(
    'Current AAVC Board Members',
    3,
    null,
    '',
    ''
); ?>


<?php echo item_cardWithText(
    'Monica Vachher ’77',
    '/alums/community/aavc/board-members/aavc-president/',
    ['url' => '/alums/assets/img/alums-community/aavc/board/vachher-monica-aavc-alum-001.jpg', 'alt' => 'Monica Vachher' ],
    'related-topics card--withParagraph card-has-cta-icon card-is-link'
); ?>
<div class="pronouns">(she/her/hers)</div>
<div class="position">AAVC President and AAVC Trustee</div>
<div class="location">Philadelphia</div>
<div class="term">Term of Service: 2022–2026</div>
<?php echo end_item_cardWithText(
    '',
); ?>



<?php echo item_cardWithText(
    'Brian Farkas ’10',
    '/alums/community/aavc/board-members/aavc-vice-president/',
    ['url' => '/alums/assets/img/alums-community/aavc/board/farkas-brian-aavc-alum-001.jpg', 'alt' => 'Brian Farkas' ],
    'related-topics card--withParagraph card-has-cta-icon card-is-link'
); ?>
<div class="pronouns">(he/him/his)</div>
<div class="position">AAVC Vice President and AAVC Trustee</div>
<div class="location">New York</div>
<div class="term">Term of Service: 2022–2026</div>
<?php echo end_item_cardWithText(
    '',
); ?>


<?php echo item_cardWithText(
    'Tyrone Forman ’92',
    '/alums/community/aavc/board-members/aavc-vice-president-2/',
    ['url' => '/alums/assets/img/alums-community/aavc/board/forman-tyrone-aavc-alum-001.jpg', 'alt' => 'Tyrone Forman' ],
    'related-topics card--withParagraph card-has-cta-icon card-is-link'
); ?>
<div class="pronouns">(he/him/his)</div>
<div class="position">AAVC Vice President and AAVC Trustee</div>
<div class="location">Illinois</div>
<div class="term">Term of Service: 2022–2026</div>

<?php echo end_item_cardWithText(
    null,
); ?>


<?php echo item_cardWithText(
    'Patrick DeYoung ’18',
    '/alums/community/aavc/board-members/aavc-trustee-deyoung/',
    ['url' => '/alums/assets/img/alums-community/aavc/board/deyoung-patrick-aavc-alum-001.jpg', 'alt' => 'Patrick DeYoung' ],
    'related-topics card--withParagraph card-has-cta-icon card-is-link'
); ?>
<div class="pronouns">(he/him/his)</div>
<div class="position">AAVC Trustee, Nominating and Governance Committee Member and Ad Hoc Student and Young Alumnae/i Engagement Committee Member</div>
<div class="location">Washington</div>
<div class="term">Term of Service: 2022–2026</div>

<?php echo end_item_cardWithText(
    null,
); ?>


<?php echo item_cardWithText(
    'Seiji Hayashi ’91',
    '/alums/community/aavc/board-members/aavc-trustee-hayashi/',
    ['url' => '/alums/assets/img/alums-community/aavc/board/hayashi-seiji-aavc-alum-001.jpg', 'alt' => 'Seiji Hayashi' ],
    'related-topics card--withParagraph card-has-cta-icon card-is-link'
); ?>
<div class="pronouns">(he/him/his)</div>
<div class="position">AAVC Trustee, Alumnae/i Recognition Committee Member and Career Networking Committee Member</div>
<div class="location">Maryland</div>
<div class="term">Term of Service: 2020–2024</div>
<?php echo end_item_cardWithText(
    null,
); ?>

<?php echo item_cardWithText(
    'Natalie Nixon ’91',
    '/alums/community/aavc/board-members/aavc-career-networking-committee-chair/',
    ['url' => '/alums/assets/img/alums-community/aavc/board/nixon-natalie-aavc-alum-001.jpg', 'alt' => 'Natalie Nixon' ],
    'related-topics card--withParagraph card-has-cta-icon card-is-link'
); ?>
<div class="pronouns">(she/her/hers)</div>
<div class="position">AAVC Trustee and Career Networking Committee Chair</div>
<div class="location">Pennsylvania</div>
<div class="term">Term of Service: 2019–2023</div>
<?php echo end_item_cardWithText(
    null,
); ?>




<?php echo item_cardWithText(
    'Alexandria Dempsey ’09',
    '/alums/community/aavc/board-members/aavc-class-engagement-committee-chair/',
    ['url' => '/alums/assets/img/alums-community/aavc/board/dempsey-alexandria-aavc-alum-001.jpg', 'alt' => 'Alexandria Dempsey' ],
    'related-topics card--withParagraph card-has-cta-icon card-is-link'
); ?>
<div class="pronouns">(she/her/hers)</div>
<div class="position">Class Engagement Committee Chair and Clubs Committee Member</div>
<div class="location">California</div>
<div class="term">Term of Service: 2020–2024</div>
<?php echo end_item_cardWithText(
    null,
); ?>


<?php echo item_cardWithText(
    'James Estrada ’13',
    '/alums/community/aavc/board-members/aavc-alumnae-house-committee-chair/',
    ['url' => '/alums/assets/img/alums-community/aavc/board/estrada-james-aavc-alum-001.jpg', 'alt' => 'James Estrada' ],
    'related-topics card--withParagraph card-has-cta-icon card-is-link'
); ?>
<div class="pronouns">(he/him/his)</div>
<div class="position">Alumnae House Committee Chair, Vassar Fund Committee Member and Ad Hoc Student and Young Alumnae/i Engagement Committee Member</div>
<div class="location">Michigan</div>
<div class="term">Term of Service: 2021–2025</div>
<?php echo end_item_cardWithText(
    null,
); ?>

<?php echo item_cardWithText(
    'Justin Hergianto ’04',
    '/alums/community/aavc/board-members/aavc-communications-advisory-committee-chair/',
    ['url' => '/alums/assets/img/alums-community/aavc/board/Justin_Hergianto-removebg-aavc-alum-001.jpg', 'alt' => 'Justin Hergianto' ],
    'related-topics card--withParagraph card-has-cta-icon card-is-link'
); ?>
<div class="pronouns">(he/him/his)</div>
<div class="position">Communications Advisory Committee Chair and Career Networking Committee Member</div>
<div class="location">New York</div>
<div class="term">Term of Service: 2021–2025</div>
<?php echo end_item_cardWithText(
    null,
); ?>


<?php echo item_cardWithText(
    'Anne Green ’93',
    '/alums/community/aavc/board-members/aavc-nominating-and-governance-committee-chair/',
    ['url' => '/alums/assets/img/alums-community/aavc/board/green-anne-aavc-alum-001.jpg', 'alt' => 'Anne Green' ],
    'related-topics card--withParagraph card-has-cta-icon card-is-link'
); ?>
<div class="pronouns">(she/her/hers)</div>
<div class="position">Nominating and Governance Committee Chair, Communications Advisory Committee Member and Ad Hoc Diversity, Equity and Inclusion Committee Member
</div>
<div class="location">New York</div>
<div class="term">Term of Service: 2020–2024</div>
<?php echo end_item_cardWithText(
    null,
); ?>


<?php echo item_cardWithText(
    'Delia Cheung Hom ’00',
    '/alums/community/aavc/board-members/aavc-ad-hoc-diversity-equity-inclusion-committee-chair/',
    ['url' => '/alums/assets/img/alums-community/aavc/board/hom-delia-cheung-aavc-alum-001.jpg', 'alt' => 'Delia Cheung Hom' ],
    'related-topics card--withParagraph card-has-cta-icon card-is-link'
); ?>
<div class="pronouns">(she/her/hers)</div>
<div class="position">Ad Hoc Diversity, Equity and Inclusion Committee Chair and Nominating and Governance Member</div>
<div class="location">Massachusetts</div>
<div class="term">Term of Service: 2020–2024</div>
<?php echo end_item_cardWithText(
    null,
); ?>


<?php echo item_cardWithText(
    'Katherine “Kat” Mills Polys ’93',
    '/alums/community/aavc/board-members/aavc-vassar-fund-committee-chair/',
    ['url' => '/alums/assets/img/alums-community/aavc/board/polys-kat-mills-aavc-alum-001.jpg', 'alt' => 'Katherine “Kat” Mills Polys' ],
    'related-topics card--withParagraph card-has-cta-icon card-is-link'
); ?>
<div class="pronouns">(she/her/hers)</div>
<div class="position">Vassar Fund Committee Chair</div>
<div class="location">Virginia</div>
<div class="term">Term of Service: 2022–2026</div>
<?php echo end_item_cardWithText(
    null,
); ?>


<?php echo item_cardWithText(
    'Amy Pullman ’71',
    '/alums/community/aavc/board-members/aavc-alums-recognition-committee-chair/',
    ['url' => '/alums/assets/img/alums-community/aavc/board/pullman-amy-aavc-alum-001.jpg', 'alt' => 'Amy Pullman' ],
    'related-topics card--withParagraph card-has-cta-icon card-is-link'
); ?>
<div class="pronouns">(she/her/hers)</div>
<div class="position">Alumnae/i Recognition Committee Chair</div>
<div class="location">Virginia</div>
<div class="term">Term of Service: 2020–2024</div>
<?php echo end_item_cardWithText(
    null,
); ?>

<?php echo item_cardWithText(
    'Andrew Solum ’89',
    '/alums/community/aavc/board-members/aavc-clubs-committee-chair/',
    ['url' => '/alums/assets/img/alums-community/aavc/board/solum-andrew-aavc-alum-001.jpg', 'alt' => 'Andrew Solum' ],
    'related-topics card--withParagraph card-has-cta-icon card-is-link'
); ?>
<div class="pronouns">(he/him/his)</div>
<div class="position">Clubs Committee Chair</div>
<div class="location">United Kingdom</div>
<div class="term">Term of Service: 2022–2026</div>
<?php echo end_item_cardWithText(
    null,
); ?>

<?php echo item_cardWithText(
    'Ellie Winter ’18',
    '/alums/community/aavc/board-members/aavc-ad-hoc-student-young-alums-engagement-committee-chair/',
    ['url' => '/alums/assets/img/alums-community/aavc/board/winter-ellie-aavc-alum-6332.jpg', 'alt' => 'Ellie Winter' ],
    'related-topics card--withParagraph card-has-cta-icon card-is-link'
); ?>
<div class="pronouns">(she/her/hers)</div>
<div class="position">Ad Hoc Student and Young Alumnae/i Engagement Committee Chair and Ad Hoc Diversity, Equity and Inclusion Committee Member</div>
<div class="location">Rhode Island</div>
<div class="term">Term of Service: 2021–2025</div>
<?php echo end_item_cardWithText(
    null,
); ?>



<?php echo item_cardWithText(
    'Katrine “Cage” Ames ’69',
    '/alums/community/aavc/board-members/aavc-board-director-1/',
    ['url' => '/alums/assets/img/alums-community/aavc/board/ames-katrine-cage-aavc-alum-001.jpg', 'alt' => 'Katrine “Cage” Ames' ],
    'related-topics card--withParagraph card-has-cta-icon card-is-link'
); ?>
<div class="pronouns">(she/her/hers)</div>
<div class="position">Vassar Fund Committee Member and Class Engagement Committee Member</div>
<div class="location">New York</div>
<div class="term">Term of Service: 2020–2024</div>
<?php echo end_item_cardWithText(
    null,
); ?>

<?php echo item_cardWithText(
    'Gail Becker ’64',
    '/alums/community/aavc/board-members/aavc-board-director-7/',
    ['url' => '/alums/assets/img/alums-community/aavc/board/becker-gail-aavc-alum-001.jpg', 'alt' => 'Gail Becker' ],
    'related-topics card--withParagraph card-has-cta-icon card-is-link'
); ?>
<div class="pronouns">(she/her/hers)</div>
<div class="position">AAVC Board Director</div>
<div class="location">New Jersey</div>
<div class="term">Term of Service: 2022–2026</div>
<?php echo end_item_cardWithText(
    null,
); ?>


<?php echo item_cardWithText(
    'Maybelle Taylor Bennett ’70',
    '/alums/community/aavc/board-members/aavc-board-director-8/',
    ['url' => '/alums/assets/img/alums-community/aavc/board/bennett-maybelle-taylor-aavc-alum-001.jpg', 'alt' => 'Maybelle Taylor Bennett' ],
    'related-topics card--withParagraph card-has-cta-icon card-is-link'
); ?>
<div class="pronouns">(she/her/hers) </div>
<div class="position">Alumnae/i Recognition Committee Member and Career Networking Committee Member</div>
<div class="location">Washington, DC</div>
<div class="term">Term of Service: 2021–2025</div>
<?php echo end_item_cardWithText(
    null,
); ?>

<?php echo item_cardWithText(
    'AC Dumlao ’13',
    '/alums/community/aavc/board-members/aavc-board-director-9/',
    ['url' => '/alums/assets/img/alums-community/aavc/board/AC-Dumlao_Headshot_Credit-AC-Dumlao_AAVC.jpg', 'alt' => 'AC Dumlao' ],
    'related-topics card--withParagraph card-has-cta-icon card-is-link'
); ?>
<div class="pronouns">(they/them/he/him)</div>
<div class="position">Nominating and Governance Committee Member and Ad Hoc Student and Young Alumnae/i Engagement Committee Member</div>
<div class="location">New York</div>
<div class="term">Term of Service: 2021–2025</div>
<?php echo end_item_cardWithText(
    null,
); ?>

<?php echo item_cardWithText(
    'Carlos Hernandez Tellez ’14',
    '/alums/community/aavc/board-members/aavc-board-director-2/',
    ['url' => '/alums/assets/img/alums-community/aavc/board/tellez-carlos-hernandez-aavc-alum-001.jpg', 'alt' => 'Carlos Hernandez Tellez' ],
    'related-topics card--withParagraph card-has-cta-icon card-is-link'
); ?>
<div class="position">AAVC Board Director</div>
<div class="location">Brazil</div>
<div class="term">Term of Service: 2022–2026</div>
<?php echo end_item_cardWithText(
    null,
); ?>


<?php echo item_cardWithText(
    'Peggy Ann Nagae ’73',
    '/alums/community/aavc/board-members/aavc-board-director-3/',
    ['url' => '/alums/assets/img/alums-community/aavc/board/nagae-peggy-ann-aavc-alum-001.jpg', 'alt' => 'Peggy Ann Nagae' ],
    'related-topics card--withParagraph card-has-cta-icon card-is-link'
); ?>
<div class="pronouns">(she/her/hers)</div>
<div class="position">AAVC Board Director</div>
<div class="location">Oregon</div>
<div class="term">Term of Service: 2022–2026</div>
<?php echo end_item_cardWithText(
    null,
); ?>

<?php echo item_cardWithText(
    'Chip Reid ’77',
    '/alums/community/aavc/board-members/aavc-board-director-4/',
    ['url' => '/alums/assets/img/alums-community/aavc/board/reid-chip-aavc-alum-001.jpg', 'alt' => 'Chip Reid' ],
    'related-topics card--withParagraph card-has-cta-icon card-is-link'
); ?>
<div class="pronouns">(he/him/his)</div>
<div class="position">Nominating and Governance Committee Member and Communications Advisory Committee Member</div>
<div class="location">Washington, DC</div>
<div class="term">Term of Service: 2020–2024</div>
<?php echo end_item_cardWithText(
    null,
); ?>

<?php echo item_cardWithText(
    'Sheryl Smikle ’81',
    '/alums/community/aavc/board-members/aavc-board-director-5/',
    ['url' => '/alums/assets/img/alums-community/aavc/board/smikle-sheryl-aavc-alum-001.jpg', 'alt' => 'Sheryl Smikle' ],
    'related-topics card--withParagraph card-has-cta-icon card-is-link'
); ?>
<div class="pronouns">(she/her/hers)</div>
<div class="position">Nominating and Governance Committee Member and Alumnae House Committee Member</div>
<div class="location">New York</div>
<div class="term">Term of Service: 2020–2024</div>
<?php echo end_item_cardWithText(
    null,
); ?>

<?php echo item_cardWithText(
    'Keith St John ’81',
    '/alums/community/aavc/board-members/aavc-board-director-6/',
    ['url' => '/alums/assets/img/alums-community/aavc/board/st-john-keith-aavc-alum-001.jpg', 'alt' => 'Keith St John' ],
    'related-topics card--withParagraph card-has-cta-icon card-is-link'
); ?>
<div class="pronouns">(he/him/his)</div>
<div class="position">AAVC Board Director</div>
<div class="location">New York</div>
<div class="term">Term of Service: 2022–2026</div>
<?php echo end_item_cardWithText(
    null,
); ?>


<style>
.align-left {
  float: left;
}
</style>

<?php echo end_sec_hasColumns(); ?>
<?php echo end_sec_wideContent(); ?>


<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/community/community-aavc.php');?>

<?php
include($project_paths['main_project_root'].'/alums/inc/pages/community/community-alums-groups.php'); ?>

<?php include($project_paths['main_project_root'].'/alums/inc/pages/community/community-alums-news.php');?>
<?php echo end_sec_relatedTopics(); ?>


<?php echo site_footeralums(); ?>
