<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */


$page_info = '{
  "page_title":"Board Positions",
  "page_classes":"",
  "feature_image":"/assets/images/placerholders/placeholder-banner.png"
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
    'AAVC Board Positions and Requirements',
    null,
    '',
    ''
); ?>


<p>AAVC is governed by a board of directors, nominated by an independent nominating committee. The goal is to have a board of directors comprised of alumnae/i who represent the breadth and depth of the Vassar community.&nbsp; Professional expertise and service to Vassar are among the criteria used for nominations.</p>
<p class="faq__indexHeader"><strong><a href=" #g1">Board Requirements</a></strong></p>
<ul class="faq__index" id="i1">
   <li><a href=" #g1q1">How Positions Are Filled</a></li>
   <li><a href=" #g1q2">General Requirements</a></li>
</ul>
<p class="faq__indexHeader"><strong><a href=" #g2">Position Descriptions</a></strong></p>
<ul class="faq__index" id="i2">
   <li><a href=" #g2q1">AAVC President and AAVC Trustee</a></li>
   <li><a href=" #g2q2">AAVC Vice Presidents</a></li>
   <li><a href=" #g2q3">AAVC Trustee</a></li>
   <li><a href=" #g2q4">Alumnae House Committee Chair</a></li>
   <li><a href=" #g2q5">Alumnae/i Recognition Committee Chair</a></li>
   <li><a href=" #g2q6">Career Networking Committee Chair</a></li>
   <li><a href=" #g2q7">Class Engagement Committee Chair</a></li>
   <li><a href=" #g2q8">Clubs Committee Chair</a></li>
   <li><a href=" #g2q9">Communications Advisory Committee Chair</a></li>
   <li><a href=" #g2q10">Vassar Fund Committee Chair</a></li>
   <li><a href=" #g2q11">Nominating and Governanace Committee Chair</a></li>
   <li><a href=" #g2q12">Nominating and Governance Committee Member</a></li>
   <li><a href=" #g2q13">Ad Hoc Diversity, Inclusion, and Equity Committee Chair</a></li>
   <li><a href=" #g2q14">Ad Hoc Student and Young Alumnae/i Engagement Committee Chair</a></li>
</ul>

<h3 id="g1">Board Requirements</h3>
<h4>How Positions Are Filled</h4>
<p>AAVC Board members are nominated by the AAVC Nominating and Governance Committee and elected by the alumni body at the Annual Meeting of Alumnae/i held during Reunion weekend. Any alumna/us may recommend herself/himself or someone else for consideration. Independent nominations may also be made by a petition signed by not less than four hundred (400) members of the Association representing at least fifteen (15) classes and ten (10) states. Any such petition should be filed with the Associate Vice President for Alumnae/i Engagement and Executive Director of the AAVC not more than thirty (30) days after publication of the slate of the Nominating and Governance Committee. Such petition must be accompanied by the written permission of the candidate.</p>
<p>Committee members develop a broad base of prospective candidates and review all recommendations, as part of their process of identifying alumnae/i with the experiences and skills that best match those needed for open board and committee positions. Professional expertise and service to Vassar are among the criteria used for nomination. The Nominating and Governance Committee also considers race and ethnicity, gender, sexual identity, geography, and other factors in helping to construct a board that reflects the talents and diversity of Vassar alumnae/i.</p>
<h4>General Requirements</h4>
<p>All AAVC Board positions require a high degree of motivation to serve Vassar College and work with other alumnae/i in doing so. They also require a knowledge of, and sensitivity to, alumni needs and concerns; strong project management and communication skills; the ability to work collaboratively and collegially; the ability to think strategically and creatively; and versatility. AAVC Board members are expected to commit a significant amount of time to their respective roles on the board and committees of the board. As key public representatives of the AAVC, board members should also be active participants in alumni events and programs.</p>
<p><span>Board Meetings and Reunion Weekend:</span></p>
<p>The AAVC Board meets at the college three times a year, in October, February, and June. Attendance is required at these meetings, which are generally held from Friday evening until Sunday morning.</p>
<p>Reunion Weekend coincides with the June AAVC Board meeting. Board members are expected to attend and participate in Reunion events and programs.</p>
<p><span>Committee Meetings:</span></p>
<p>Much of the work of the AAVC Board is done through committees, which meet throughout the year, either telephonically or in person. Committees of the board also meet at the time of board meetings in October, February, and June.</p>
<p><span>Commitment:</span></p>
<p>AAVC Board members are expected to fully participate on the board and on committees of the board, which requires an extensive commitment of time and expertise.</p>
<p><span>Expenses:</span></p>
<p>So as to encourage all alumni, regardless of financial circumstance, to participate, travel expenses associated with AAVC Board meetings may be reimbursed up to $500 per trip, or $750 per trip if air travel is required.</p>
<p><span>Vassar Fund Commitment:</span></p>
<p>All AAVC Board members are expected to support the Vassar Fund. While the amount of a board member’s gift is entirely discretionary, 100 percent participation by the board is extremely important.</p>

<h3 id="g2">Position Descriptions</h3>
<h4>AAVC President and AAVC Trustee</h4>
<p>The President of the AAVC is the chief elected officer and chair of the AAVC Board. In this capacity, the President serves as an AAVC Trustee, and also serves on the Executive Committee of the Vassar College Board of Trustees. The President provides strategic leadership for the AAVC, including in policy making and in establishing goals and directions. The President also serves as the key liaison between the AAVC and Vassar College.</p>
<p>In addition to presiding at all meetings of the AAVC Board, the President serves ex officio on all board committees and any ad hoc committees established for specific purposes. The President also presides at the Annual Meeting of the AAVC in June.</p>
<p>In fulfilling his/her role, the President is assisted by the Vice President for Operations and the Vice President for Strategic Planning of the AAVC Board, as well as by the Associate Vice President and Executive Director of the AAVC.</p>
<p>The roles and functions of the President are varied and complex, and require a great deal of leadership and organizational skill in managing relationships, negotiating sensitive issues, setting strategic goals, and being the key public representative of Vassar’s more than <?php echo $facts['number_of_alumni']; ?> alumnae/i. The President should be a seasoned volunteer with broad leadership and management experience, and an enthusiastic and demonstrated commitment to the college.</p>
<p>Term of Office: Four years.</p>
<p><em>r. 7/19</em></p>
<h4>AAVC Vice Presidents</h4>
<p>The Association has two Vice Presidents who support the work of the President and oversee the Board’s internal governance and management. The Vice Presidents organize Board orientation, engage in strategic planning efforts, and coordinate with various College departments. Each Vice President serves as the primary liaison to several Board committees, as designated by the President, and works to coordinate the efforts of those committees. In the event of the absence or incapacity of the President, the Vice President who has more seniority on the Board shall exercise the powers and perform the duties of the President. The Vice Presidents should be seasoned volunteers with expertise in organizational, strategic, and governance matters and a demonstrated commitment to the college.</p>
<p>Term of Office: Four years.</p>
<p><em>r. 7/20</em></p>
<h4>AAVC Trustee</h4>
<p>AAVC Trustees serve as liaisons between the AAVC and the college, and serve on the AAVC Board of Directors as well as on the Board of Trustees of Vassar College. Pursuant to the AAVC Bylaws, six individuals serve as AAVC Trustees, with one of those positions being occupied by the President of the AAVC.</p>
<p>AAVC Trustees are expected to attend and participate in meetings of the AAVC Board and the Board of Trustees. They are also expected to participate in committees on both boards. In their dual roles, AAVC Trustees are uniquely positioned to represent issues and concerns of the alumnae/i body on the Trustee Board, as well as to inform the AAVC Board of matters of import at the college. This dual role requires a great deal of sensitivity and awareness of responsibilities and confidentiality.</p>
<p>AAVC Trustees should have a demonstrated commitment and history of engagement with the AAVC and the college, and should be mindful of the significant commitment of time and effort required by this position.</p>
<p>Term of Office: Four years.</p>
<p><em>r. 7/19</em></p>
<h4>Alumnae House Committee Chair</h4>
<p>The Alumnae House Committee helps to ensure that Alumnae House remains a vibrant and relevant institution serving the current needs of the students and alumnae/i of the Vassar community, while bearing in mind the historical significance of Alumnae House. The Alumnae House Committee Chair works with the committee of appointed AAVC Board members and other experienced alumnae/i to fulfill this mission. The Committee provides strategic guidance in developing and implementing a vision and plans for actively and creatively engaging alumnae/i and current students with Alumnae House.</p>
<p>The Chair of the House Committee should be a dedicated volunteer familiar with Alumnae House. The Committee is staffed by the Alumnae House Manager.</p>
<p>Term of Office: Four years.</p>
<p><em>r. 7/19</em></p>
<h4>Alumnae/i Recognition Committee Chair</h4>
<p>The Alumnae/i Recognition Committee proposes distinguished members of the alumnae/i population for recognition with designated alumnae/i awards. The Alumnae/i Recognition Committee Chair works with the committee of appointed AAVC Board members and alumnae/i active in the alumnae/i community. The Committee is also charged with reviewing existing alumnae/i recognition awards and developing additional awards and programs that would enhance the recognition and engagement of distinguished alumnae/i of the college.</p>
<p>The Alumnae/i Recognition Committee Chair should be a dedicated volunteer, active in alumnae/i affairs. The committee is staffed by the Associate Vice President for Alumnae/i Engagement and Executive Director of the AAVC. The committee also works with the Office of Alumnae/i Affairs and Development to maintain and update the Alumnae/i Recognition Committee database.</p>
<p>Term of Office: Four years.</p>
<p><em>r. 7/19</em></p>
<h4>Career Networking Committee Chair</h4>
<p>The Career Networking Committee provides strategic guidance in partnership with the Alumnae/i Engagement and Career Development Offices to broaden and strengthen career and professional networks among alumnae/i. The Career Networking Committee Chair works with the Committee of appointed AAVC Board members and other key alumnae/i active in supporting these efforts. The committee also advises the college on career support for alumnae/i, and professional networking opportunities.</p>
<p>The Career Networking Committee Chair should have a strong interest and experience in developing professional networks. The staff liaisons for the committee are the Senior Director of Alumnae/i Engagement and the Associate Director for Alumnae/i Outreach and Partnerships in the Career Development Office.</p>
<p>Term of Office: Four years.</p>
<p><em>r. 7/19</em></p>
<h4>Class Engagement Committee Chair</h4>
<p>The Class Engagement Committee serves in an advisory capacity to help engage alumnae/i with the College and each other based on the unique and shared affinity of graduating class. The chair works with a committee of appointed AAVC Board members and other alumnae/i to assist with developing strategies to strengthen engagement with the alumnae/i body between reunions, and to serve as a sounding board to implement new ideas for Reunion Weekend.</p>
<p>The chair of the Class Engagement Committee should have a long history of involvement with the College and support of the Vassar Fund. The committee is staffed by the Associate Director of Alumnae/i Engagement responsible for Reunion and class programs.</p>
<p>Term of Office: Four years.</p>
<p><em>r. 8/20</em></p>
<h4>Clubs Committee Chair</h4>
<p>The Clubs Committee works with the Office of Alumnae/i Affairs and Development to develop and implement strategies to engage alumnae/i in their communities around the world. To foster a continued bond with the college, the committee aims to ensure thriving activities—cultural, social, and professional—in regions where alumnae/i are most represented.</p>
<p>The Chair works with the committee of appointed AAVC Board members and leaders of clubs and regional networks. The committee ensures that each region has diverse, creative, and high-quality programming. The Chair should have demonstrated leadership experience with an alumnae/i club or regional network.</p>
<p>The Clubs Committee is staffed by the Senior Director of Alumnae/i Engagement. Connections with international clubs and affiliate groups are represented by the Associate Vice President for Regional and International Programs.</p>
<p>Term of Office: Four years.</p>
<p><em>r. 7/19</em></p>
<h4>Communications Advisory Committee Chair</h4>
<p>The Communications Advisory Committee serves as a resource for the Alumnae/i Communications staff, as it develops and implements communications and marketing strategies aimed at its constituent audiences. The Communications Advisory Committee Chair works with the committee of appointed AAVC Board members and other experienced alumnae/i to assist with communication strategies for the alumnae/i population and the college community. These communications are effected through print and digital media, including Vassar magazine, VassarNet, the alumnae/i website, and social media.</p>
<p>The Communications Advisory Committee Chair should be an experienced communications, marketing, or public relations professional. The Committee is staffed by the Director of Alumnae/i Communications.</p>
<p>Term of Office: Four years.</p>
<p><em>r. 7/19</em></p>
<h4>Vassar Fund Committee Chair</h4>
<p>The Vassar Fund Committee serves in an advisory capacity to the Vassar Fund Office, which is an important arm of the Office of Alumnae/i Affairs and Development. The Vassar Fund Committee Chair works with a committee of appointed AAVC Board members and alumnae/i who serve in development leadership capacities on behalf of the college. The Vassar Fund Committee works with the Vassar Fund Office to advise on the development and implementation of strategies to encourage and enhance contributions to the college. This culminates with the announcement of reunion gift totals at the AAVC Annual Meeting at Reunion Weekend every June. The Vassar Fund Committee Chair is also an ex officio member of the Development Committee of the Vassar College Board of Trustees.</p>
<p>The Vassar Fund Committee Chair should have extensive experience in working for the college as a Fund volunteer. The Committee is staffed by the Director of the Annual Fund.</p>
<p>Term of Office: Four years.</p>
<p><em>r. 7/19</em></p>
<h4>Nominating and Governanace Committee Chair</h4>
<p>The Nominating and Governance Committee is responsible for researching, selecting, and nominating alumnae/i for leadership roles in the AAVC. The Chair works with the committee of elected AAVC Board members to fulfill this task. The Nominating and Governance Committee works closely with staff of the Office of Alumnae/i Affairs and Development and alumnae/i leaders to identify potential candidates; update biographical data and maintain a current database; research prospective candidates; evaluate and select candidates; and formally nominate alumnae/i who have been selected and who have agreed to serve.</p>
<p>The Nominating and Governance Committee is also responsible for proposing non-board members for certain committees of the AAVC Board, as requested from time to time by the President and Vice Presidents of the board. In addition, the Nominating and Governance Committee advises the AAVC Board on governance matters.</p>
<p>The Nominating and Governance Committee Chair should be a seasoned volunteer with broad experience and a demonstrated commitment to the college and AAVC. The Chair should also have governance expertise and leadership experience on a nonprofit board. The Nominating and Governance Committee is staffed by the Associate Vice President for Alumnae/i Engagement and Executive Director of the AAVC.</p>
<p>Term of Office: Four years.</p>
<p><em>r. 7/19</em></p>
<h4>Nominating and Governance Committee Member</h4>
<p>The Nominating Committee of the AAVC Board is comprised of the chair and a minimum of four other members, with a current roster of seven members. The committee is responsible for researching, selecting and nominating alumnae/i for leadership roles in the AAVC. The Nominating and Governance Committee works closely with staff of the Office of Alumnae/i Affairs and Development and alumnae/i leaders to identify potential candidates; update biographical data and maintain a current database; research prospective candidates; evaluate and select candidates; and formally nominate alumnae/i who have been selected and who have agreed to serve.</p>
<p>The work of the Nominating and Governance Committee has a direct impact on the quality, diversity, and breadth of leadership of the AAVC Board and committees of the board. Alumnae/i proposed as members of the Nominating and Governance Committee are identified and selected based upon their demonstrated interest in, and knowledge of, the AAVC’s work; their commitment to Vassar; their sound judgment; and their high level of personal responsibility and initiative. The committee meets in person and telephonically throughout the year, including at the three annual AAVC Board meetings held in Poughkeepsie.</p>
<p>Term of Office: Four years.</p>
<p><em>r. 7/19</em></p>
<h4>Ad Hoc Diversity, Inclusion, and Equity Committee Chair</h4>
<p>The Ad Hoc Committee on Diversity, Equity, and Inclusion (DEI) was established to explore, in partnership with Vassar’s Office of Alumnae/i Engagement, the range of engagement opportunities available to alum of diverse backgrounds, with special attention given to groups that have been historically underrepresented and underserved. The committee will review and assess data, habits, practices and policies, formal and informal organizational culture (the Board, Classes, Clubs, and Affinity Groups) with the goal of identifying any potential barriers to the advancement of DEI. The committee will also encourage learning opportunities for alum volunteers that foster an inclusive and welcoming community in which all alums feel empowered to bring their whole self to Vassar College engagements—regardless of their expression of identity.</p>
<p>This chair of this committee works with dedicated Board and off-Board committee members and brings extensive knowledge and expertise in diversity, equity and inclusion issues. The committee is staffed by the Senior Director of Alumnae/i Engagement.</p>
<p>Term of Office: To be determined by the Board.</p>
<p><em>r. 8/20</em></p>
<h4>Ad Hoc Student and Young Alumnae/i Engagement Committee Chair</h4>
<p>The Student and Young Alumnae/i Engagement Ad Hoc Committee was formed to help develop creative means of engaging students and alums, expand offerings that enable students to benefit from the experience and expertise of alums, and to shape a culture of philanthropy on campus. The Chair works with the committee of appointed AAVC Board members and other experienced alumnae/i to fulfill this mission. The Committee will provide guidance by researching programs conducted by peer institutions and making a series of recommendations for future initiatives at the college. The committee will work in conjunction with the House and Career Networking Committees to achieve its goals.</p>
<p>The Chair of the Student and Young Alumnae/i Engagement Ad Hoc Committee should be a dedicated volunteer with broad exposure to programs that engage alums with current students in relevant ways. The committee is staffed by the Assistant Director for Alumnae/i Engagement.</p>
<p>Term of Office: To be determined by the Board.</p>
<p><em>r. 8/20</em></p>


    <?php echo end_sec_regularContent(); ?>


<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/alumni/inc/pages/give/give-volunteer.php');?>
<?php include($project_paths['main_project_root'].'/alumni/inc/pages/resources/resources-vassar-network.php');?>
<?php include($project_paths['main_project_root'].'/alumni/inc/pages/give/give-mentor.php');?>
<?php echo end_sec_relatedTopics(); ?>


<?php echo site_footeralumni(); ?>
