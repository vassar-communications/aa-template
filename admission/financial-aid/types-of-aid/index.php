
<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
 ?>
<?php

/*  PAGE INFO ============ */

$page_title = "Types of Aid";
$page_classes = "";

/*  ---------------------- */

?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation(); ?>

<?php echo breadcrumbNav('theme-cream'); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/nav-elements/admission-financialaid-breadcrumb.php');?>
<?php echo end_sec_breadcrumbNav(); ?>

<?php echo page_textmasthead('theme-cream'); ?>

<?php echo toplinksNav(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/nav-elements/admission-financialaid-nav.php');?>
<?php echo end_sec_toplinksNav(); ?>

<?php /*  PAGE CONTENT === */ ?>



<?php echo sec_hasColumns(
    null,
    2,
    null,
    'animate-when-content-appears animation-slide-up',
    'flex-equal align-items-center d-flex flex-column-reverse flex-md-row'
); ?>

<?php echo item_col('equal'); ?>
<h3 class="">Financial aid awards typically include grants and scholarships, loans, and campus jobs. Students and their families can decide which components of the aid package are most suitable.</h3>
<?php echo end_item_col(); ?>

<?php echo item_col('equal'); ?>
<img src="https://vassartest.chuckyatsuk.com/img/financial-aid/0138-15-11-kr-vcdf-vassar-0110.jpg" />
<?php echo end_item_col(); ?>

<?php echo end_sec_hasColumns(); ?>

<div class="container">
 <div class="container position-relative" id="content">
  <div class="row mt-5">
   <aside class="col-md-3" id="left">
    <div class="mt-5 mb-3 sticky-top" id="side">
     <ul class="nav flex-md-column flex-row justify-content-between" id="sidenav">
      <li class="nav-item">
       <a href="#sec1" class="nav-link pl-0">Grants & Scholarships</a>
       <ul class="nav flex-md-column ml-2">
        <li class="nav-item"><a href="#sec1a" class="nav-link">Vassar Scholarships</a></li>
        <li class="nav-item"><a href="#sec1b" class="nav-link">Federal Grants</a></li>
        <li class="nav-item"><a href="#sec1c" class="nav-link">State Grants</a></li>
        <li class="nav-item"><a href="#sec1d" class="nav-link">Outside Scholarships</a></li>
       </ul>
      </li>
      <li class="nav-item">
       <a href="#sec2" class="nav-link pl-0">Loans & Lenders</a>
       <ul class="nav flex-md-column ml-2">
        <li class="nav-item"><a href="#sec2a" class="nav-link">Federal Loans for Students</a></li>
        <li class="nav-item"><a href="#sec2b" class="nav-link">Federal Loans for Parents</a></li>
        <li class="nav-item"><a href="#sec2c" class="nav-link">Alternative & Private Loans</a></li>
       </ul>
      </li>
      <li class="nav-item"><a href="#sec3" class="nav-link pl-0">Campus Employment</a></li>
     </ul>
    </div>
   </aside>

   <main class="col py-5">
    <div class="row position-relative">
     <div class="col">
      <div class="tab-content py-3 position-relative">
       <div class="tab-pane active position-relative" id="tab1" role="tabpanel">
        <h2 class="mb-3">Beautiful Content</h2>

        <div class="anchor" id="sec1"></div>
        <h3>Grants & Scholarships</h3>
        <p>Grants and scholarships do not have to be repaid.</p>



        <div class="anchor" id="sec1a"></div>
        <h5>Vassar Scholarships</h5>
        <p>Vassar awards $71 million annually in scholarships, funded by Vassar’s endowment, alumnae/i club fundraising, and gifts.</p>

        <div class="anchor" id="sec1b"></div>
        <h5>Federal Grants</h5>
        <p>
          <strong>Pell Grants</strong>
           <ul>
            <li>Funds from the U.S. government</li>
            <li>Eligibility is based on federal demonstrated need as determined by the FAFSA form.</li>
           </ul>
        </p>


        <p>
         <a>Learn more about Pell Grants</a>
        </p>


        <p>
         <strong>Federal Supplemental Educational Opportunity Grants (FSEOG)</strong>
        <ul>
         <li>Awarded to students with exceptional financial need</li>
         <li>Priority is given to students eligible for Pell Grants</li>
         <li>Award amounts depend on the level of need and funding availability</li>
        </ul>
        </p>

        <p>
         <a>Learn more about FSEOG</a>
        </p>

        <div class="anchor" id="sec1c"></div>
        <h5>State Grants</h5>
        <p>
         <strong>New York State Tuition Assistance Program (TAP)</strong>
        <ul>
         <li>Eligibility is based on New York State net taxable income</li>
        </ul>
        </p>

        <p>
         <a>Learn more about TAP</a>
        </p>


        <div class="anchor" id="sec1d"></div>
        <h5>Outside Scholarships </h5>
        <p>
         Outside funds can offer students greater financial flexibility by lessening employment obligations and/or reducing student loans.</p>

        <p>Scholarship search resources include:
        <ul>
         <li>FastWeb</li>
         <li>BigFuture: The College Board’s Scholarship Search</li>
         <li>CollegeScholarships.org</li>
        </ul>
        </p>


        <hr>

        <div class="anchor" id="sec2"></div>
        <h3>Loans and Lenders</h3>
        <p>Vassar will eliminate or reduce loans in the aid awards of students from low-income households.
         Loans (usually from the Federal Direct Loan program) are low-interest and can be repaid over a period of 10 years when the student either graduates or leaves college.</p>

        <p>Ethical Kickstarter PBR asymmetrical lo-fi. Dreamcatcher street art Carles, stumptown gluten-free Kickstarter artisan Wes Anderson wolf pug. Godard sustainable you probably haven't heard of them, vegan farm-to-table Williamsburg
         slow-carb readymade disrupt deep v. Meggings seitan Wes Anderson semiotics, cliche American Apparel whatever. Helvetica cray plaid, vegan brunch Banksy leggings +1 direct trade. Wayfarers codeply PBR selfies. Banh mi
         McSweeney's Shoreditch selfies, forage fingerstache food truck occupy YOLO Pitchfork fixie iPhone fanny pack art party Portland.</p>

        <div class="pl-4">
         <div class="anchor" id="sec3a"></div>
         <h6>Three A</h6>
         <p>PBR narwhal sustainable mixtape swag wolf squid tote bag plus and them then Helvetica cray plaid, vegan brunch Banksy leggings +1 direct trade. Wayfarers codeply PBR selfies. Banh mi McSweeney's Shoreditch selfies,
          forage fingerstache food truck occupy YOLO Pitchfork fixie MDO of twitter fame iPhone fanny pack art party Portland. dd Future jean shorts paleo. Forage Shoreditch tousled aesthetic irony, street art organic Bushwick
          artisan cliche semiotics ugh synth chillwave meditation. Shabby chic lomo plaid vinyl chambray Vice. Vice sustainable cardigan!</p>
         <br>

         <div class="anchor" id="sec3b"></div>
         <h6>Three B</h6>
         <p>Helvetica cray plaid, vegan brunch Banksy leggings +1 direct trade. Wayfarers codeply PBR selfies. Banh mi McSweeney's Shoreditch selfies, forage fingerstache food truck occupy YOLO Pitchfork fixie iPhone fanny pack
          art party Portland. PBR narwhal sustainable mixtape swag wolf squid tote bag. Godard sustainable you probably haven't heard of them, vegan farm-to-table Williamsburg slow-carb readymade disrupt deep v. Meggings
          seitan Wes Anderson semiotics, cliche American Apparel whatever. Helvetica cray plaid, vegan brunch Banksy leggings +1 direct trade. Wayfarers codeply PBR selfies. </p>
        </div>

        <hr>

        <div class="anchor" id="sec4"></div>
        <h5>4</h5>
        <p>Ethical Kickstarter PBR asymmetrical lo-fi. Dreamcatcher street art Carles, stumptown gluten-free Kickstarter artisan Wes Anderson wolf pug. Godard sustainable you probably haven't heard of them, vegan farm-to-table Williamsburg
         slow-carb readymade disrupt deep v. Meggings seitan Wes Anderson semiotics, cliche American Apparel whatever. Helvetica cray plaid, vegan brunch Banksy leggings +1 direct trade. Wayfarers codeply PBR selfies. Banh mi
         McSweeney's Shoreditch selfies, forage fingerstache food truck occupy YOLO Pitchfork fixie iPhone fanny pack art party Portland.</p>

        <div class="anchor" id="sec5"></div>
        <h5>5</h5>
        <p>Ethical Kickstarter PBR asymmetrical lo-fi. Dreamcatcher street art Carles, stumptown gluten-free Kickstarter artisan Wes Anderson wolf pug. Godard sustainable you probably haven't heard of them, vegan farm-to-table Williamsburg
         slow-carb readymade disrupt deep v. Meggings seitan Wes Anderson semiotics, cliche American Apparel whatever. Helvetica cray plaid, vegan brunch Banksy leggings +1 direct trade. Wayfarers codeply PBR selfies. Banh mi
         McSweeney's Shoreditch selfies, forage fingerstache food truck occupy YOLO Pitchfork fixie iPhone fanny pack art party Portland.</p>

        <div class="anchor" id="sec6"></div>
        <h5>6</h5>
        <p>Ethical Kickstarter PBR asymmetrical lo-fi. Dreamcatcher street art Carles, stumptown gluten-free Kickstarter artisan Wes Anderson wolf pug. Godard sustainable you probably haven't heard of them, vegan farm-to-table Williamsburg
         slow-carb readymade disrupt deep v. Meggings seitan Wes Anderson semiotics, cliche American Apparel whatever. Helvetica cray plaid, vegan brunch Banksy leggings +1 direct trade. Wayfarers codeply PBR selfies. Banh mi
         McSweeney's Shoreditch selfies, forage fingerstache food truck occupy YOLO Pitchfork fixie iPhone fanny pack art party Portland.</p>
       </div>

     </div>
    </div>
   </main>
  </div>
 </div>
</div>


<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/admission-visit.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/admission-apply-transfer.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/admission-apply.php');?>
<?php echo end_sec_relatedTopics(); ?>


<?php echo site_footer(); ?>
