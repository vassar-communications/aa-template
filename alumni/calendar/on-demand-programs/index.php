
<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/*  PAGE INFO ============ */

$page_title = "On-Demand Programs";
$page_classes = "";

/*  ---------------------- */

?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation(); ?>

<?php echo page_textmasthead('theme-dark-burgundy'); ?>


<?php echo breadcrumbNav('theme-cream'); ?>
<?php include($project_paths['main_project_root'].'/alumni/inc/nav-elements/alumni-calendar-breadcrumb.php');?>
<?php echo end_sec_breadcrumbNav(); ?>


<?php echo toplinksNav(); ?>
<?php include($project_paths['main_project_root'].'/alumni/inc/nav-elements/alumni-calendar-nav.php');?>
<?php echo end_sec_toplinksNav(); ?>

<?php /*  PAGE CONTENT === */ ?>

<style>
    .swap video {display:none}
    .swap:hover img:first-child{display:none}
    .swap:hover video{display:inline-block}

    .swap h4.card-title, .swap p {
        color: #fff;
        font-family: 'Freight-big-pro';
        font-size: 2rem;
        max-width: 17ch;
    }
    .section--wide-content .section-intro {

        font-size: 1.25rem;
    }

    .card-full-image.text-at-bottom .card-img-content {
        background: linear-gradient(to bottom, rgba(0, 0, 0, 0.3) 50%, rgba(0, 0, 0, 0.7) 100%);
        width: 100%;
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

   .video-grid .card:hover .card-title {
        opacity: 0;
    }


</style>


<?php echo sec_hasColumns(
    'Missed it live? See it here.',
    3,
    'On-Demand content featuring expertise from fellow grads and Vassar faculty and researchers.',
    'pb-1 presentation video-grid',
    ''
); ?>



<?php echo item_col(''); ?>

<a class="swap card card-full-image text-at-bottom mb-4" data-bs-toggle="modal" data-bs-target="#ondemand01">
    <img src="https://vassartest.chuckyatsuk.com/img/alumni/calendar/on-demand/video/bg.jpg" class="card-img" alt="asdfasdfds">
    <video muted autoplay loop width="100%">
        <source src="https://vassartest.chuckyatsuk.com/img/alumni/calendar/on-demand/video/01_covid.mp4"
                type="video/mp4">
        Sorry, your browser doesn't support embedded videos.
    </video>
    <div class="card-img-overlay">
        <div class="card-img-content">
            <h4 class="card-title pt-3">A Conversation on Public Health after COVID-19</h4>
            <p class="card-text"><i class="fa-solid fa-play"></i></p>
        </div>
    </div>
</a>

<?php echo end_item_col(); ?>

<?php echo item_col(''); ?>

<a class="swap card card-full-image text-at-bottom mb-4" data-bs-toggle="modal" data-bs-target="#ondemand02">
    <img src="https://vassartest.chuckyatsuk.com/img/alumni/calendar/on-demand/video/bg.jpg" class="card-img" alt="asdfasdfds">
    <video muted autoplay loop width="100%">
        <source src="https://vassartest.chuckyatsuk.com/img/alumni/calendar/on-demand/video/02_womens-rights.mp4"
                type="video/mp4">
        Sorry, your browser doesn't support embedded videos.
    </video>
    <div class="card-img-overlay">
        <div class="card-img-content">
            <h4 class="card-title pt-3">A Conversation on Women’s Rights: Present and Future</h4>
            <p class="card-text"><i class="fa-solid fa-play"></i></p>
        </div>
    </div>
</a>



<?php echo end_item_col(); ?>



<?php echo item_col(''); ?>

<a class="swap card card-full-image text-at-bottom mb-4" data-bs-toggle="modal" data-bs-target="#ondemand03">
    <img src="https://vassartest.chuckyatsuk.com/img/alumni/calendar/on-demand/video/bg.jpg" class="card-img" alt="asdfasdfds">
    <video muted autoplay loop width="100%">
        <source src="https://vassartest.chuckyatsuk.com/img/alumni/calendar/on-demand/video/03_higher-ed-pandemic.mp4"
                type="video/mp4">
        Sorry, your browser doesn't support embedded videos.
    </video>
    <div class="card-img-overlay">
        <div class="card-img-content">
            <h4 class="card-title pt-3">Higher Education in the Era of Pandemic</h4>
            <p class="card-text"><i class="fa-solid fa-play"></i></p>
        </div>
    </div>
</a>



<?php echo end_item_col(); ?>




<?php echo item_col('equalht'); ?>


<a class="swap card card-full-image text-at-bottom mb-4" data-bs-toggle="modal" data-bs-target="#ondemand04">
    <img src="https://vassartest.chuckyatsuk.com/img/alumni/calendar/on-demand/video/bg.jpg" class="card-img" alt="asdfasdfds">
    <video muted autoplay loop width="100%">
        <source src="https://vassartest.chuckyatsuk.com/img/alumni/calendar/on-demand/video/04_votes-for-women.mp4"
                type="video/mp4">
        Sorry, your browser doesn't support embedded videos.
    </video>
    <div class="card-img-overlay">
        <div class="card-img-content">
            <h4 class="card-title pt-3">Votes for Women: Vassar and the Politics of Voting Rights Past, Present, and Future</h4>
            <p class="card-text"><i class="fa-solid fa-play"></i></p>
        </div>
    </div>
</a>



<?php echo end_item_col(); ?>




<?php echo item_col('equalht'); ?>

<a class="swap card card-full-image text-at-bottom mb-4" data-bs-toggle="modal" data-bs-target="#ondemand05">
    <img src="https://vassartest.chuckyatsuk.com/img/alumni/calendar/on-demand/video/bg.jpg" class="card-img" alt="asdfasdfds">
    <video muted autoplay loop width="100%">
        <source src="https://vassartest.chuckyatsuk.com/img/alumni/calendar/on-demand/video/05_democracy-crossroad.mp4"
                type="video/mp4">
        Sorry, your browser doesn't support embedded videos.
    </video>
    <div class="card-img-overlay">
        <div class="card-img-content">
            <h4 class="card-title pt-3">American Democracy at a Crossroads</h4>
            <p class="card-text"><i class="fa-solid fa-play"></i></p>
        </div>
    </div>
</a>



<?php echo end_item_col(); ?>


<?php echo item_col('equalht'); ?>

<a class="swap card card-full-image text-at-bottom mb-4" data-bs-toggle="modal" data-bs-target="#ondemand06">
    <img src="https://vassartest.chuckyatsuk.com/img/alumni/calendar/on-demand/video/bg.jpg" class="card-img" alt="asdfasdfds">
    <video muted autoplay loop width="100%">
        <source src="https://vassartest.chuckyatsuk.com/img/alumni/calendar/on-demand/video/06_SUSTAIN.mp4"
                type="video/mp4">
        Sorry, your browser doesn't support embedded videos.
    </video>
    <div class="card-img-overlay">
        <div class="card-img-content">
            <h4 class="card-title pt-3">Vassar’s Sustainable Future: A Conversation</h4>
            <p class="card-text"><i class="fa-solid fa-play"></i></p>
        </div>
    </div>
</a>



<?php echo end_item_col(); ?>




<?php echo item_col('equalht'); ?>

<a class="swap card card-full-image text-at-bottom mb-4" href="https://connect.vassar.edu/s/1654/2/16/interior-ai.aspx?sid=1654&gid=2&pgid=5032
">
    <img src="https://vassartest.chuckyatsuk.com/img/alumni/calendar/on-demand/video/bg.jpg" class="card-img" alt="asdfasdfds">
    <video muted autoplay loop width="100%">
        <source src="https://vassartest.chuckyatsuk.com/img/alumni/calendar/on-demand/video/07-class-visited.mp4"
                type="video/mp4">
        Sorry, your browser doesn't support embedded videos.
    </video>
    <div class="card-img-overlay">
        <div class="card-img-content">
            <h4 class="card-title pt-3">The Vassar Classroom Revisited</h4>
            <p class="card-text"><i class="fa-solid fa-play"></i></p>
        </div>
    </div>
</a>


<?php echo end_item_col(); ?>


<?php echo item_col('equalht'); ?>

<a class="swap card card-full-image text-at-bottom mb-4" href="https://connect.vassar.edu/s/1654/2/16/interior-ai.aspx?sid=1654&gid=2&pgid=5537">
    <img src="https://vassartest.chuckyatsuk.com/img/alumni/calendar/on-demand/video/bg.jpg" class="card-img" alt="asdfasdfds">
    <video muted autoplay loop width="100%">
        <source src="https://vassartest.chuckyatsuk.com/img/alumni/calendar/on-demand/video/08-nochlin.mov"
                type="video/mp4">
        Sorry, your browser doesn't support embedded videos.
    </video>
    <div class="card-img-overlay">
        <div class="card-img-content">
            <h4 class="card-title pt-3">In Honor Of Linda Nochlin ’51</h4>
            <p class="card-text"><i class="fa-solid fa-play"></i></p>
        </div>
    </div>
</a>


<?php echo end_item_col(); ?>

<?php echo item_col('equalht'); ?>

<a class="swap card card-full-image text-at-bottom mb-4" href="https://connect.vassar.edu/s/1654/2/16/interior-ai.aspx?sid=1654&gid=2&pgid=5313">
    <img src="https://vassartest.chuckyatsuk.com/img/alumni/calendar/on-demand/video/bg.jpg" class="card-img" alt="asdfasdfds">
    <video muted autoplay loop width="100%">
        <source src="https://vassartest.chuckyatsuk.com/img/alumni/calendar/on-demand/video/09_AAAVC.mp4"
                type="video/mp4">
        Sorry, your browser doesn't support embedded videos.
    </video>
    <div class="card-img-overlay">
        <div class="card-img-content">
            <h4 class="card-title pt-3">AAAVC – “On Mattering”</h4>
            <p class="card-text"><i class="fa-solid fa-play"></i></p>
        </div>
    </div>
</a>


<?php echo end_item_col(); ?>


<?php echo end_sec_hasColumns(); ?>





<?php echo relatedTopics(); ?>

<?php include($project_paths['main_project_root'].'/alumni/inc/pages/alumni-give-be-a-mentor.php');?>
<?php include($project_paths['main_project_root'].'/alumni/inc/pages/alumni-give-volunteer.php');?>
<?php include($project_paths['main_project_root'].'/alumni/inc/pages/alumni-resources-vassar-network.php');?>
<?php echo end_sec_relatedTopics(); ?>




<?php

echo item_imageCard_modal_setup(
    get_icon('play').'Bridge for Laboratory Sciences',
    null,
    'ondemand01',
    '<div class="ratio ratio-16x9">
<iframe class="modal-video" src="https://player.vimeo.com/video/615898660?h=f4077bdacc&title=0&byline=0&portrait=0" width="640" height="360" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
  </div>',
    ['url' => '/mockups/admission-home/fav-places-2/110619_160over90_Vassar_5483.jpg',
        'alt' => 'asdfasdf'
    ],
    'animation-item grid-item text-at-bottom'
);

echo item_imageCard_modal_setup(
    null,
    null,
    'ondemand02',
    '<div class="ratio ratio-16x9">
<iframe class="modal-video" src="https://player.vimeo.com/video/491739329?h=f4077bdacc&title=0&byline=0&portrait=0" width="640" height="360" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
        </div>',
    ['url' => '/mockups/admission-home/fav-places-2/0056-21-06-kr-campus-vassar-0006-copy.jpg',
        'alt' => 'asdfasdf'
    ],
    'animation-item grid-item text-at-bottom'
);

echo item_imageCard_modal_setup(
    null,
    null,
    'ondemand03',
    '<div class="ratio ratio-16x9">
<iframe class="modal-video" src="https://player.vimeo.com/video/467204540?h=f4077bdacc&title=0&byline=0&portrait=0" width="640" height="360" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
        </div>',
    ['url' => '/mockups/admission-home/fav-places-2/0056-21-06-kr-campus-vassar-0006-copy.jpg',
        'alt' => 'asdfasdf'
    ],
    'animation-item grid-item text-at-bottom'
);

echo item_imageCard_modal_setup(
    null,
    null,
    'ondemand04',
    '<div class="ratio ratio-16x9">
<iframe class="modal-video" src="https://player.vimeo.com/video/463068325?h=f4077bdacc&title=0&byline=0&portrait=0" width="640" height="360" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
        </div>',
    ['url' => '/mockups/admission-home/fav-places-2/0056-21-06-kr-campus-vassar-0006-copy.jpg',
        'alt' => 'asdfasdf'
    ],
    'animation-item grid-item text-at-bottom'
);

echo item_imageCard_modal_setup(
    null,
    null,
    'ondemand05',
    '<div class="ratio ratio-16x9">
<iframe class="modal-video" src="https://player.vimeo.com/video/457908119?h=f4077bdacc&title=0&byline=0&portrait=0" width="640" height="360" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
        </div>',
    ['url' => '/mockups/admission-home/fav-places-2/0056-21-06-kr-campus-vassar-0006-copy.jpg',
        'alt' => 'asdfasdf'
    ],
    'animation-item grid-item text-at-bottom'
);

echo item_imageCard_modal_setup(
    null,
    null,
    'ondemand06',
    '<div class="ratio ratio-16x9">
<iframe class="modal-video" src="https://player.vimeo.com/video/430219097?h=f4077bdacc&title=0&byline=0&portrait=0" width="640" height="360" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
        </div>',
    ['url' => '/mockups/admission-home/fav-places-2/0056-21-06-kr-campus-vassar-0006-copy.jpg',
        'alt' => 'asdfasdf'
    ],
    'animation-item grid-item text-at-bottom'
);

?>


<?php echo site_footeralumni(); ?>
