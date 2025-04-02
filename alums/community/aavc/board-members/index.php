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
  <li><a href="#board-of-directors">Board of Directors</a></li>
  <li><a href="#board-members">Current AAVC Board Members</a></li>
</ul>


<?php /*hiding board slate until 2025 setup

<?php echo sec_regularContent(
    '2024 Board Slate',
    'theme-cream',
    ''
); ?>
<a id="board-slate"></a>
<!--
<p>The 2024 slate of nominees for the AAVC Board was ratified at the Annual Meeting of the AAVC at Reunion on June 3, 2023:</p>
-->
<p>The Nominating and Governance Committee is pleased to present the slate of nominees for open board positions for 2024–2028:</p>

<ul class="linked-list mb-5">
    <li><a href="#anne-green">Anne Green ’93</a></li>
    <li><a href="#eddie-gamarra">Eddie Gamarra ’94</a></li>
    <li><a href="#alisa-swire">Alisa Swire ’84</a></li>
    <li><a href="#michael-neuwirth">Michael Neuwirth ’89</a></li>
    <li><a href="#sheryl-smikle">Sheryl Smikle ’81</a></li>
    <li><a href="#heller-an-shapiro">Heller An Shapiro ’81</a></li>
    <li><a href="#kerri-tillett">Kerri Tillett ’91</a></li>
    <li><a href="#emily-weisgrau">Emily Weisgrau ’96</a></li>
  </ul>


<div>

<div id="anne-green" style="clear: both; padding-bottom: 2rem; overflow: hidden">

  <h3 class="mb-4">AAVC Trustee</h3>

<div class="col-12 col-md-4 col-lg-3 align-left me-4">
  <img src="https://www.vassar.edu/alums/assets/img/alums-community/aavc/board/green-anne-aavc-alum-001.jpg" alt="A person with wavy grey-black hair pulled back from their face, a dark blue jacket over a red shirt, and a red beaded necklace smiles at the viewer." />
</div>

<ul class="clean-list-with-borders">
    <li><strong>Anne Green ’93</strong></li>
    <li>(she/her/hers)</li>
    <li>New Jersey</li>
    <li><strong>Term of Service:</strong> 2024–2028</li>
  </ul>
</div>

<h4>Additional Vassar Volunteer Experience</h4>

<p>Chair, Nominating and Governance Committee, 2020–present; member, Ad Hoc Diversity, Equity, and Inclusion Committee, 2020–present; member, Communications Advisory Committee, 2018–present; Director, AAVC Board of Directors, 2018–present; member, AAVC Nominating and Governance Committee, 2018–present; member, AAVC Communications Advisory Committee, 2018–present; mentor, Sophomore Career Connections, 2018–2024; volunteer consultant to Vassar senior staff regarding communications issues, Fall 2017; volunteer, Career Advisor Program, 1994–2006.</p>

<h4>Professional/Community Experience</h4>

<p>Chief Executive Officer & Principal, G&S Business Communications, 2024–present; Principal & Managing Director, G&S Business Communications, 2018–2024; Steering Committee member, Friends of the QueensWay, 2016–present; board member and past Chair, LifeWay Network, 2015–2023; board member, PR Council, 2017–2019; Executive Committee member, Public Relations Global Network, 2016–2018; President & CEO, CooperKatz & Company, Inc., 2011–2018; Vice President, Senior Vice President, General Manager, and President & COO, CooperKatz & Company, Inc., 1996–2011; associate, Burson-Marsteller, 1993–1996.</p>

</div>


<div>

<div id="eddie-gamarra" style="clear: both; padding-bottom: 2rem; overflow: hidden">

  <h3 class="mb-4">AAVC Alum Recognition Committee Chair</h3>

<div class="col-12 col-md-4 col-lg-3 align-left me-4">
  <img src="/alums/assets/img/alums-community/aavc/board/gamarra-eddie-aavc-alum.jpg" alt="A person with short dark hair wearing a dark suit jacket and blue button-down shirt smiles at the viewer." />
</div>

<ul class="clean-list-with-borders">
    <li><strong>Eddie Gamarra ’94</strong></li>
    <li>(he/him/his)</li>
    <li>California</li>
    <li><strong>Term of Service:</strong> 2024–2028</li>
  </ul>
</div>

<h4>Additional Vassar Volunteer Experience</h4>

<p>Member, AAVC Alumnae/i Recognition Committee, 2023–present; board member, Vassar Club of Greater Los Angeles, 2021–2022;  member, AAVC Alumnae/i Recognition Committee, 2016–2020; Vice President, Vassar Club of Southern California, 2013–2016 and Co-Chair, 2012–2013; volunteer, Club Admission Committee, 1998–2015; member, AAVC Nominating and Governance Committee, 2009–2012; note-writer/phoner, Class of 1994, 2009–2010, 2007–2008, 2005–2006, and 1996–1997; Director at Large, AAVC Board of Directors, 2004–2008; member, AAVC Vassar Fund Committee, 2005–2007; President, Class of 1994, 1994–1999.</p>

<h4>Professional/Community Experience</h4>

<p>Advisory Board member, Glendale Community College, 2022–present; Vice President, Literary Affairs, Paramount Global Kids & Family and Nickelodeon’s Awesomeness, Paramount, 2019–2024; Vice President, Studio Development, Nickelodeon, 2019–2021; co-head of the book department/Literary Manager/Producer, the Gotham Group, 2004–2019; visiting assistant professor, Emory University, 2002–2003.</p>

</div>


<div>


<div id="alisa-swire" style="clear: both; padding-bottom: 2rem; overflow: hidden">
 
 
  <h3 class="mb-4">AAVC Nominating and Governance Committee Chair</h3>


<div class="col-12 col-md-4 col-lg-3 align-left me-4">
  <img src="/alums/assets/img/alums-community/aavc/board/alisa-swire.jpg" alt="A person with long straight brown hair and a gray coat smiles at the camera." />
</div>

<ul class="clean-list-with-borders">
    <li><strong>Alisa Swire ’84</strong></li>
    <li>(she/her/hers)</li>
    <li>New York</li>
    <li><strong>Term of Service:</strong> 2024–2028</li>
  </ul>
</div>

<h4>Additional Vassar Volunteer Experience</h4>

<p>Member, AAVC Board, 2023–present; member, AAVC Nominating and Governance Committee, 2023–present;  Vice Chair, Alumnae House Committee, 2022–present and member, 2019–2022; Program Chair, Vassar Club of the Hudson Valley, 2022 and Vice President, 2020–2022; member, Advisory Council for the Consortium on Forced Migration, Vassar College, 2018–2020;  Chair, Wisconsin Alumni Admissions Program, 2008–2016 and member, 2006–2008; note-writer/phoner, Class of 1984, 1997–1998.</p>

<h4>Professional/Community Experience</h4>

<p>Vice President, General Counsel, and Corporate Secretary, Johnson Outdoors Inc., February 2001–December 2016 (ret.). Director, Hudson Valley Credit Union since 2022 and member of the Finance and Compensation & Benefit Committees since 2023; Chair, Governance & Nominating Committee and Board Secretary, 2022–2023; pro bono immigration law attorney, My Sister’s Place, since 2022; trustee and Chair of the Finance Committee, Poughkeepsie Day School 2019–2020; Refugee Resettlement Coordinator, Greater Newburgh Interfaith Council, 2016–2018.
</p>

</div>


<div>

<div id="michael-neuwirth" style="clear: both; padding-bottom: 2rem; overflow: hidden">

  <h3 class="mb-4">AAVC Board Director</h3>

<div class="col-12 col-md-4 col-lg-3 align-left me-4">
  <img src="/alums/assets/img/alums-community/aavc/board/neuwirth-michael-aavc-alum.jpg" alt="A person with close-shaven hair, beard, and mustache, wearing glasses, smiles at the viewer." />
</div>

<ul class="clean-list-with-borders">
    <li><strong>Michael Neuwirth ’89</strong></li>
    <li>(he/him/his)</li>
    <li>New York</li>
    <li><strong>Term of Service:</strong> 2024–2028</li>
  </ul>
</div>

<h4>Additional Vassar Volunteer Experience</h4>

<p>Member, AAVC Class Engagement Committee, 2022–present; President, Class of 1989, 2019–present; Class Agent, Class of 1989, 2017–2020; volunteer, Club Admission Committee, 2002–2013.</p>

<h4>Professional/Community Experience</h4>

<p>Corporate Communications & Public Relations Consultant, Neuwirth Communications, LLC, 2020–present; angel investor, 2020–present; Chief Communications Officer, American Sustainable Business Network, 2021–2022; Public Relations & External Communications Lead, Danone, 2005–2020; Senior Vice President, Ruder Finn, 2003–2005; Director of Corporate Communications, Acirca, Inc, 2001–2003; Public Relations Manager, Danone, 1994–2001; Senior Account Executive, Porter Novelli, 1990–1994.</p>

</div>


<div>

<div id="sheryl-smikle" style="clear: both; padding-bottom: 2rem; overflow: hidden">

  <h3 class="mb-4">AAVC Board Director</h3>

<div class="col-12 col-md-4 col-lg-3 align-left me-4">
  <img src="https://www.vassar.edu/alums/assets/img/alums-community/aavc/board/smikle-sheryl-aavc-alum-001.jpg" alt="A person with short curly gray hair, and a black shirt with colored flowers on it smiles at the viewer." />
</div>

<ul class="clean-list-with-borders">
    <li><strong>Sheryl Smikle ’81</strong></li>
    <li>(she/her/hers)</li>
    <li>Georgia</li>
    <li><strong>Term of Service:</strong> 2024–2028</li>
  </ul>
</div>

<h4>Additional Vassar Volunteer Experience</h4>

<p>Class Agent, Class of 1981, 2023–present; Steering Committee member, Vassar Club of Atlanta, 2023–present; Student Life Committee member, African American Alumnae/i of Vassar College (AAAVC), 2023–present; volunteer, Club Admission Committee, 2023–present; committee member, Vassar Club of Atlanta, 2022–present; Director, AAVC Board of Directors, 2020–present; member, AAVC Alumnae House Committee, 2020–present; member, AAVC Nominating and Governance Committee, 2020–present;  Vice President, Class of 1981 Committee, 2017–present; Class Agent, Class of 1981, 2023–2023; member, Campus Investor Responsibility Committee (CIRC), 2017–2021; volunteer, Club Admission Committee, 2013–2016; note-writer/phoner, Vassar Fund, 1996–1997.</p>

<h4>Professional/Community Experience</h4>

<p>Training Director/Insurance and Business Learning Portfolio Management—Human Resources, AIG, 2017–present; Volunteer Advisor, Florence Belsky Charitable Foundation, 2017–present; author, <em>Congratulations, You’re a Compliance Officer! Now What?</em>, 2019; Compliance Learning & Communications Leader, GE Capital Americas, 2012–2016; Associate Dean-Baccalaureate Studies/Director, the College of Westchester, 2006–2012; Assistant Director for Disability & Support Services, Vassar College, 2004–2011; professor, SUNY New Paltz, 2003–2004; professor, SUNY Ulster Community College, 2003–2004; Director-Compliance, American Express TRS, 1993–2004; adjunct professor of ESL, Hudson County Community College, 1984–1985; Spanish teacher, NYC Board of Education, 1984–1985.</p>

</div>


<div>

<div id="heller-an-shapiro" style="clear: both; padding-bottom: 2rem; overflow: hidden">

  <h3 class="mb-4">AAVC Board Director</h3>

<div class="col-12 col-md-4 col-lg-3 align-left me-4">
  <img src="/alums/assets/img/alums-community/aavc/board/shapiro-heller-an-aavc-alum.jpg" alt="A person with short straight gray and black hair and glasses, wearing a sleeveless dark purple shirt, leans against a brick wall, smiling at the viewer." />
</div>

<ul class="clean-list-with-borders">
    <li><strong>Heller An Shapiro ’81</strong></li>
    <li>(she/her/hers)</li>
    <li> Maryland</li>
    <li><strong>Term of Service:</strong> 2024–2028</li>
  </ul>
</div>

<h4>Additional Vassar Volunteer Experience</h4>

<p>Member, AAVC Vassar Fund Committee, 2022–present; committee member, Class of 1981, 2021–present; committee member, Class of 1981, 2020–2021; Sophomore Career Connections mentor, 2018; Co-Chair, Class Reunion Gift, 2000–2001; Co-Chair, Class of 1981, 1996–2001; Co-Chair, Class Fund, 1996–2000; AAVC Volunteer Leadership Week trainer, 1992–1993; Second Vice President, Class of 1981, 1991–1996.</p>

<h4>Professional/Community Experience</h4>

<p>Volunteer team leader, Compass Pro Bono, 2023–present; consultant, coach, Heller An Shapiro, 2008–present; volunteer grant review panelist, Maryland State Arts Council 2021, 2023; Executive Director, ArtStream, Inc., 2016–2023; board member, Head of School Search Co-Leader, Barrie School, 2015–2017; consultant, Optica, 2010–2016; Co-Leader, Executive Development Career Workshops, Executive Search Consultant, TransitionGuides, 2007–2016; consultant, Barth Syndrome Foundation, 2010–2012; Board Co-Chair, Kidsave International, 2010–2012; Executive Director, Osteogenesis Imperfecta Foundation, 1997–2007; Board of Directors member, Chair Standards of Excellence Committee, National Health Council, 2003–2007; Associate Director of Affiliate Management, Christmas in April USA/Rebuilding Together, 1997–1998; Deputy Director, State and International Services, VSA, 1995–1997; Director of Affiliate Management and Training, the Foundation Fighting Blindness, 1992–1995; Director of Volunteers, Kennedy Center, 1986–1991 and recipient of 1991 President's Volunteer Action Award; Leadership America, Class of 1993; board member, Chair of Public Issues, Chair National Summit on Trends in Volunteer Leadership Development, Association for Volunteer Administration (AVA), 1991–1993; Founder and Chair, MVP-Arts (Managers of Volunteer Programs in the Arts), 1990–1992.</p>

</div>


<div>

<div id="kerri-tillett" style="clear: both; padding-bottom: 2rem; overflow: hidden">

  <h3 class="mb-4">AAVC Board Director</h3>

<div class="col-12 col-md-4 col-lg-3 align-left me-4">
  <img src="/alums/assets/img/alums-community/aavc/board/tillett-kerri-aavc-alum.jpg" alt="A person with short straight dark hair and glasses wearing a white jacket and black shirt smiles at the viewer." />
</div>

<ul class="clean-list-with-borders">
    <li><strong>Kerri Tillett ’91</strong></li>
    <li>(she/her/hers)</li>
    <li>Massachusetts/North Carolina</li>
    <li><strong>Term of Service:</strong> 2024–2028</li>
  </ul>
</div>

<h4>Additional Vassar Volunteer Experience</h4>

<p>Member, AAVC Ad Hoc Diversity, Equity, & Inclusion Committee, 2021–present.</p>

<h4>Professional/Community Experience</h4>

<p>Associate Vice Chancellor for Equal Opportunity, University of Massachusetts Amherst, 2021–present; Associate Vice President for the Division of Inclusive Excellence, the College of New Jersey, 2011–2021; Equal Employment Opportunity Officer, New Jersey Department of Transportation, 2004–2010;
Practicing attorney, 1996–2004; Law Clerk, District of Columbia Court of Appeals, 1994–1996.
</p>

</div>


<div>

<div id="emily-weisgrau" style="clear: both; padding-bottom: 2rem; overflow: hidden">

  <h3 class="mb-4">AAVC Board Director</h3>

<div class="col-12 col-md-4 col-lg-3 align-left me-4">
  <img src="/alums/assets/img/alums-community/aavc/board/weisgrau-emily-aavc-alum.jpg" alt="A person with wavy brown and gray shoulder-length hair and glasses, wearing a dark sweater over a black and white patterned shirt, smiles at the viewer." />
</div>

<ul class="clean-list-with-borders">
    <li><strong>Emily Weisgrau ’96</strong></li>
    <li>(she/her/hers)</li>
    <li>Pennsylvania and Massachusetts</li>
    <li><strong>Term of Service:</strong> 2024–2028</li>
  </ul>
</div>

<h4>Additional Vassar Volunteer Experience</h4>

<p>Member, AAVC Vassar Fund Committee, 2020–present; co-chair, Class of 1996, 2016–present; web master, Class of 1996, 2006–2011; correspondent, Class of 1996, 1996–2001; volunteer, Note-writer/Phoner, 1998–2000.</p>

<h4>Professional/Community Experience</h4>

<p>Founder and President, Weiswood Strategies Ltd., 2019–present; grants review panelist, National Endowment for the Arts, 2021; Awards Executive Committee member and judge coordinator, Council for Advancement and Support of Education, 2020–2021; chair, Get Out the Vote Committee, Swarthmore College, 2018–2019; Director of Advancement Communications, Swarthmore College, 2016–2019; Development Communications and Brand Manager, Haverford College, 2013–2016; grants review panelist, Pennsylvania Partners in the Arts, 2014; President, Board of Trustees, Bala House Montessori School, 2011–2013; Development Communications Specialist, Haverford College, 2009–2013; Development Committee member, Bala House Montessori School, 2009–2011; Professional Services Officer, the Philadelphia Foundation, 2005–2009; Executive Director, the Princeton Singers, 2003–2005; Director of Development, OPERA America, 2002–2003; golden lion tamarin monitor, Smithsonian National Zoo, 2001–2002; Associate Director, Foundation & Government Grants, Washington National Opera, 2000–2002; Arts Management Fellow, American University, 1998–2000; Annual Fund Coordinator, Opera Philadelphia, 1996–1998.</p>

</div>


<?php echo end_sec_regularContent(); ?>

End of hiding board slate content*/ ?>


<a id="board-of-directors"></a>
<?php echo sec_regularContent(
    'Board of Directors',
    '',
    ''
); ?>

<p>The Alumnae/i Association of Vassar College (AAVC) Board of Directors is a group of dedicated volunteers that serves the College and its more than <?php echo $facts['number_of_alums']; ?> alums at the highest level. The Board manages the affairs of the AAVC, working closely with the College’s Associate Vice President for Alumnae/i Engagement and Executive Director of the AAVC, and meets regularly in October, February, and June at Reunion. Most of the Board’s work, however, is accomplished by hard-working committees comprised of directors, volunteers, observers, and staff leads.</p>

<p>Current standing committees are devoted to these AAVC priorities: Alumnae House, Alumnae/i Recognition, Career Networking, Clubs, Class Engagement, Communications, Nominations and Governance, and the Vassar Fund. The Board regularly examines programming and policy to ensure that the AAVC meets the varied needs of its diverse, worldwide constituents and advances the interests and mission of Vassar in relevant and substantive ways. Six AAVC directors also serve as Vassar College trustees. Additionally, observers from the African-American Alumnae/i of Vassar College (AAAVC) and the college student leadership attend the AAVC board and committee meetings.</p>

<p>A call for nominations to the Board is held each year in the fall, with elections occurring at Reunion in June. The board encourages nominations of individuals who have high levels of professional achievement, experience serving the College, and who reflect the diverse backgrounds of our over <?php echo $facts['number_of_alums']; ?> constituents.</p>

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
    'Monica Vachher&nbsp;’77',
    '/alums/community/aavc/board-members/aavc-president/',
    ['url' => '/alums/assets/img/alums-community/aavc/board/vachher-monica-aavc-alum-001.jpg', 'alt' => 'A person with long dark brown hair, a black shirt with a red sweater over it, and a red necklace smiles at the viewer.' ],
    'related-topics card--withParagraph card-has-cta-icon card-is-link'
); ?>
<div class="pronouns">(she/her/hers)</div>
<div class="position">AAVC President and AAVC Trustee</div>
<div class="location">Illinois</div>
<div class="term">Term of Service: 2022–2026</div>
<?php echo end_item_cardWithText(
    '',
); ?>



<?php echo item_cardWithText(
    'Brian D. Farkas&nbsp;’10',
    '/alums/community/aavc/board-members/aavc-vice-president/',
    ['url' => '/alums/assets/img/alums-community/aavc/board/farkas-brian-aavc-alum-001.jpg', 'alt' => 'A person with short brown hair, a dark formal jacket, and a burgundy patterned tie smiles at the viewer.' ],
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
    'Tyrone A Forman&nbsp;’92',
    '/alums/community/aavc/board-members/aavc-vice-president-2/',
    ['url' => '/alums/assets/img/alums-community/aavc/board/forman-tyrone-aavc-alum-001.jpg', 'alt' => 'A person with closely cropped dark gray hair, a mustache and goatee, with a black checkered shirt smiles at the viewer.' ],
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
    'Patrick DeYoung&nbsp;’18',
    '/alums/community/aavc/board-members/aavc-trustee-deyoung/',
    ['url' => '/alums/assets/img/alums-community/aavc/board/deyoung-patrick-aavc-alum-001.jpg', 'alt' => 'A person wearing a gray suit jacket over a blue shirt and a gray patterned tie looks at the viewer.' ],
    'related-topics card--withParagraph card-has-cta-icon card-is-link'
); ?>
<div class="pronouns">(he/him/his)</div>
<div class="position">AAVC Trustee and Nominating and Governance Committee Member</div>
<div class="location">Pennsylvania</div>
<div class="term">Term of Service: 2022–2026</div>

<?php echo end_item_cardWithText(
    null,
); ?>


<?php echo item_cardWithText(
    'Anne Elizabeth Green&nbsp;’93',
    '/alums/community/aavc/board-members/aavc-trustee-green/',
    ['url' => '/alums/assets/img/alums-community/aavc/board/green-anne-aavc-alum-001.jpg', 'alt' => 'A person with wavy grey-black hair pulled back from their face, a dark blue jacket over a red shirt, and a red beaded necklace smiles at the viewer.' ],
    'related-topics card--withParagraph card-has-cta-icon card-is-link'
); ?>
<div class="pronouns">(she/her/hers)</div>
<div class="position">AAVC Trustee and Ad Hoc Diversity, Equity, and Inclusion Committee Member</div>
<div class="location">New Jersey</div>
<div class="term">Term of Service: 2018–2028</div>
<?php echo end_item_cardWithText(
    null,
); ?>


<?php echo item_cardWithText(
    'Delia Cheung Hom&nbsp;’00',
    '/alums/community/aavc/board-members/aavc-ad-hoc-diversity-equity-inclusion-committee-chair/',
    ['url' => '/alums/assets/img/alums-community/aavc/board/hom-delia-cheung-aavc-alum-001.jpg', 'alt' => 'A person with short straight black hair, a dark blue shirt, and a silver necklace smiles at the viewer.' ],
    'related-topics card--withParagraph card-has-cta-icon card-is-link'
); ?>
<div class="pronouns">(she/her/hers)</div>
<div class="position">AAVC Trustee, Ad Hoc Diversity, Equity, and Inclusion Committee Chair, and Nominating and Governance Member</div>
<div class="location">Massachusetts</div>
<div class="term">Term of Service: 2023–2027</div>
<?php echo end_item_cardWithText(
    null,
); ?>


<?php echo item_cardWithText(
    'James Estrada&nbsp;’13',
    '/alums/community/aavc/board-members/aavc-alumnae-house-committee-chair/',
    ['url' => '/alums/assets/img/alums-community/aavc/board/estrada-james-aavc-alum-001.jpg', 'alt' => 'A person with short black hair, a mustache and beard, arms crossed, a gray jacket, and a black shirt smiles at the viewer.' ],
    'related-topics card--withParagraph card-has-cta-icon card-is-link'
); ?>
<div class="pronouns">(he/him/his)</div>
<div class="position">Alumnae House Committee Chair and Vassar Fund Committee Member</div>
<div class="location">Michigan</div>
<div class="term">Term of Service: 2021–2026</div>
<?php echo end_item_cardWithText(
    null,
); ?>

<?php echo item_cardWithText(
    'Eddie Gamarra&nbsp;’94',
    '/alums/community/aavc/board-members/aavc-alum-recognition-committee-chair/',
    ['url' => '/alums/assets/img/alums-community/aavc/board/gamarra-eddie-aavc-alum.jpg', 'alt' => 'A person with short dark hair wearing a dark suit jacket and blue button-down shirt smiles at the viewer.' ],
    'related-topics card--withParagraph card-has-cta-icon card-is-link'
); ?>
<div class="pronouns">(he/him/his)</div>
<div class="position">Alum Recognition Committee Chair</div>
<div class="location">California</div>
<div class="term">Term of Service: 2024–2028</div>
<?php echo end_item_cardWithText(
    null,
); ?>


<?php echo item_cardWithText(
    'Carlos Hernandez Tellez&nbsp;’14',
    '/alums/community/aavc/board-members/aavc-career-networking-committee-chair/',
    ['url' => '/alums/assets/img/alums-community/aavc/board/tellez-carlos-hernandez-aavc-alum-001.jpg', 'alt' => 'A person with wavy black hair, a mustache, and a light gray jacket over a black shirt smiles at the viewer.' ],
    'related-topics card--withParagraph card-has-cta-icon card-is-link'
); ?>
<div class="position">Career Networking Committee Chair and Ad Hoc Diversity, Equity, and Inclusion Committee Member</div>
<div class="location">Brazil</div>
<div class="term">Term of Service: 2022–2027</div>
<?php echo end_item_cardWithText(
    null,
); ?>


<?php echo item_cardWithText(
    'Katherine “Kat” Mills Polys&nbsp;’93',
    '/alums/community/aavc/board-members/aavc-vassar-fund-committee-chair/',
    ['url' => '/alums/assets/img/alums-community/aavc/board/polys-kat-mills-aavc-alum-001.jpg', 'alt' => 'A person with shoulder length grey black wavy hair and a patterned collared shirt looks at the viewer.' ],
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
    'Andrew Solum&nbsp;’89',
    '/alums/community/aavc/board-members/aavc-clubs-committee-chair/',
    ['url' => '/alums/assets/img/alums-community/aavc/board/solum-andrew-aavc-alum-001.jpg', 'alt' => 'A person with short brown hair, a black jacket, and a blue and white striped shirt smiles at the viewer.' ],
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
    'Alisa Swire&nbsp;’84',
    '/alums/community/aavc/board-members/aavc-nominating-and-governance-committee-chair/',
    ['url' => '/alums/assets/img/alums-community/aavc/board/alisa-swire.jpg', 'alt' => 'A person with long straight brown hair and a gray coat smiles at the camera.' ],
    'related-topics card--withParagraph card-has-cta-icon card-is-link'
); ?>
<div class="pronouns">(she/her/hers)</div>
<div class="position">Nominating and Governance Committee Chair</div>
<div class="location">New York</div>
<div class="term">Term of Service: 2024–2028</div>
<?php echo end_item_cardWithText(
    null,
); ?>


<?php echo item_cardWithText(
    'Sheryl Tracy Smikle&nbsp;’81',
    '/alums/community/aavc/board-members/aavc-board-director-5/',
    ['url' => '/alums/assets/img/alums-community/aavc/board/smikle-sheryl-aavc-alum-001.jpg', 'alt' => 'A person with short curly gray hair, and a black shirt with colored flowers on it smiles at the viewer.' ],
    'related-topics card--withParagraph card-has-cta-icon card-is-link'
); ?>
<div class="pronouns">(she/her/hers)</div>
<div class="position">Nominating and Governance Committee Vice Chair and Alumnae House Committee Member</div>
<div class="location">Georgia</div>
<div class="term">Term of Service: 2020–2028</div>
<?php echo end_item_cardWithText(
    null,
); ?>


<?php echo item_cardWithText(
    'Gail Becker&nbsp;’64',
    '/alums/community/aavc/board-members/aavc-board-director-7/',
    ['url' => '/alums/assets/img/alums-community/aavc/board/becker-gail-aavc-alum-001.jpg', 'alt' => 'A person with short wavy gray-brown hair and a black turtleneck sweater smiles at the viewer.' ],
    'related-topics card--withParagraph card-has-cta-icon card-is-link'
); ?>
<div class="pronouns">(she/her/hers)</div>
<div class="position">Alumnae House Committee Member and Alum Recognition Committee Member</div>
<div class="location">New Jersey</div>
<div class="term">Term of Service: 2022–2026</div>
<?php echo end_item_cardWithText(
    null,
); ?>


<?php echo item_cardWithText(
    'Maybelle Taylor Bennett&nbsp;’70',
    '/alums/community/aavc/board-members/aavc-board-director-8/',
    ['url' => '/alums/assets/img/alums-community/aavc/board/bennett-maybelle-taylor-aavc-alum-001.jpg', 'alt' => 'A person wearing a purple head covering, glasses, and a purple scarf smiles at the viewer.' ],
    'related-topics card--withParagraph card-has-cta-icon card-is-link'
); ?>
<div class="pronouns">(she/her/hers) </div>
<div class="position">Alum Recognition Committee Member and Career Networking Committee Member</div>
<div class="location">Washington, DC</div>
<div class="term">Term of Service: 2021–2025</div>
<?php echo end_item_cardWithText(
    null,
); ?>


<?php echo item_cardWithText(
    'AC Dumlao&nbsp;’13',
    '/alums/community/aavc/board-members/aavc-board-director-9/',
    ['url' => '/alums/assets/img/alums-community/aavc/board/AC-Dumlao_Headshot_Credit-AC-Dumlao_AAVC.jpg', 'alt' => 'A person with a closely shaven head, glasses, dark colored jacket, and a white shirt smiles at the viewer.' ],
    'related-topics card--withParagraph card-has-cta-icon card-is-link'
); ?>
<div class="pronouns">(they/them/he/him)</div>
<div class="position">Nominating and Governance Committee Member and Ad Hoc Diversity, Equity, and Inclusion Committee Member</div>
<div class="location">New York</div>
<div class="term">Term of Service: 2021–2025</div>
<?php echo end_item_cardWithText(
    null,
); ?>


<?php echo item_cardWithText(
    'Peggy Ann Nagae&nbsp;’73',
    '/alums/community/aavc/board-members/aavc-board-director-3/',
    ['url' => '/alums/assets/img/alums-community/aavc/board/nagae-peggy-ann-aavc-alum-001.jpg', 'alt' => 'A person with long brown hair and bangs, a red and black shirt, and white bead necklace smiles at the viewer.' ],
    'related-topics card--withParagraph card-has-cta-icon card-is-link'
); ?>
<div class="pronouns">(she/her/hers)</div>
<div class="position">Nominating and Governance Committee Member and Ad Hoc Diversity, Equity, and Inclusion Committee Vice Chair</div>
<div class="location">Oregon</div>
<div class="term">Term of Service: 2022–2026</div>
<?php echo end_item_cardWithText(
    null,
); ?>


<?php echo item_cardWithText(
    'Michael Neuwirth&nbsp;’89',
    '/alums/community/aavc/board-members/aavc-board-director-neuwirth/',
    ['url' => '/alums/assets/img/alums-community/aavc/board/neuwirth-michael-aavc-alum.jpg', 'alt' => 'A person with close-shaven hair, beard, and mustache, wearing glasses, smiles at the viewer' ],
    'related-topics card--withParagraph card-has-cta-icon card-is-link'
); ?>
<div class="pronouns">(he/him/his)</div>
<div class="position">Nominating and Governance Committee Member</div>
<div class="location">New York</div>
<div class="term">Term of Service: 2024–2028</div>
<?php echo end_item_cardWithText(
    null,
); ?>


<?php echo item_cardWithText(
    'Heller An Shapiro&nbsp;’81',
    '/alums/community/aavc/board-members/aavc-board-director-shapiro/',
    ['url' => '/alums/assets/img/alums-community/aavc/board/shapiro-heller-an-aavc-alum.jpg', 'alt' => 'A person with short straight gray and black hair and glasses, wearing a sleeveless dark purple shirt, leans against a brick wall, smiling at the viewer.' ],
    'related-topics card--withParagraph card-has-cta-icon card-is-link'
); ?>
<div class="pronouns">(she/her/hers)</div>
<div class="position">Alum Recognition Committee Member and Vassar Fund Committee Member</div>
<div class="location">Maryland</div>
<div class="term">Term of Service: 2024–2028</div>
<?php echo end_item_cardWithText(
    null,
); ?>


<?php echo item_cardWithText(
    'Keith St John&nbsp;’81',
    '/alums/community/aavc/board-members/aavc-board-director-6/',
    ['url' => '/alums/assets/img/alums-community/aavc/board/st-john-keith-aavc-alum-001.jpg', 'alt' => 'A person with closely cropped gray-black hair, a white beard and gray mustaches, a patterned shirt and purple tie smiles at the viewer.' ],
    'related-topics card--withParagraph card-has-cta-icon card-is-link'
); ?>
<div class="pronouns">(he/him/his)</div>
<div class="position">Alumnae House Committee Member and Nominating and Governance Committee Member</div>
<div class="location">New York</div>
<div class="term">Term of Service: 2022–2026</div>
<?php echo end_item_cardWithText(
    null,
); ?>


<?php echo item_cardWithText(
    'Kerri Tillett&nbsp;’91 (On&nbsp;leave)',
    '/alums/community/aavc/board-members/aavc-board-director-tillett/',
    ['url' => '/alums/assets/img/alums-community/aavc/board/tillett-kerri-aavc-alum.jpg', 'alt' => 'A person with short straight dark hair and glasses wearing a white jacket and black shirt smiles at the viewer.' ],
    'related-topics card--withParagraph card-has-cta-icon card-is-link'
); ?>
<div class="pronouns">(she/her/hers)</div>
<div class="position">Alum Recognition Committee Member and Ad Hoc Diversity, Equity, and Inclusion Committee Member</div>
<div class="location">Massachusetts/North Carolina</div>
<div class="term">Term of Service: 2024–2028</div>
<?php echo end_item_cardWithText(
    null,
); ?>


<?php echo item_cardWithText(
    'Emily Weisgrau&nbsp;’96',
    '/alums/community/aavc/board-members/aavc-board-director-weisgrau/',
    ['url' => '/alums/assets/img/alums-community/aavc/board/weisgrau-emily-aavc-alum.jpg', 'alt' => 'A person with wavy brown and gray shoulder-length hair and glasses, wearing a dark sweater over a black and white patterned shirt, smiles at the viewer.' ],
    'related-topics card--withParagraph card-has-cta-icon card-is-link'
); ?>
<div class="pronouns">(she/her/hers)</div>
<div class="position">Career Networking Committee Member and Vassar Fund Committee Member</div>
<div class="location">Massachusetts</div>
<div class="term">Term of Service: 2024–2028</div>
<?php echo end_item_cardWithText(
    null,
); ?>


<?php echo item_cardWithText(
    'Ellie Winter&nbsp;’18',
    '/alums/community/aavc/board-members/aavc-board-director-winter/',
    ['url' => '/alums/assets/img/alums-community/aavc/board/winter-ellie-aavc-alum-6332.jpg', 'alt' => 'A person with curly shoulder-length hair wearing glasses and a pink sweater smiles at the viewer.' ],
    'related-topics card--withParagraph card-has-cta-icon card-is-link'
); ?>
<div class="pronouns">(she/her/hers)</div>
<div class="position">Clubs Committee Member</div>
<div class="location">Rhode Island</div>
<div class="term">Term of Service: 2021–2025</div>
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