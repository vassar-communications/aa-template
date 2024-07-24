<div class="grid cols-2 animation-zoom-in animate-when-content-appears animation-group">

<?php

$campus_video_cards[] = item_cardWithText(
'Jewett House Tour',
'https://www.youtube.com/watch?v=t0PLmerxT0k&list=PLURusQJONMcpLr6DRm8L-0zWkTI7jQEqt&index=1&t=4s&ab_channel=Vassar',
['url' => '/admission/assets/images/admission-home/video/experience-vassar/jewett-house-tour.jpg', 'alt' => '' ],
'card--withParagraph animation-item card-has-cta-icon card-has-cta-label bg-dark card-is-link') . '<p>Jewett House is home to 235 students—check out a student’s room and a few common spaces in this 9-story residential house.</p>' . end_item_cardWithText(null);

$campus_video_cards[] = item_cardWithText(
'Noyes House Dorm Tour',
'https://www.youtube.com/watch?v=vgJ_r4SJrw0&list=PLURusQJONMcpLr6DRm8L-0zWkTI7jQEqt&index=2&ab_channel=Vassar',
['url' => '/admission/assets/images/admission-home/video/experience-vassar/noyes-house-tour.jpg', 'alt' => '' ],
'card--withParagraph animation-item card-has-cta-icon card-has-cta-label bg-dark card-is-link') . '<p>Welcome to Noyes—one of the most interesting buildings on campus and home to 180 students.</p>' . end_item_cardWithText(null);

$campus_video_cards[] = item_cardWithText(
'Cushing House Dorm Tour',
'https://www.youtube.com/watch?v=I9eChT2RDbM&list=PLURusQJONMcpLr6DRm8L-0zWkTI7jQEqt&index=3&ab_channel=Vassar',
['url' => '/admission/assets/images/admission-home/video/experience-vassar/cushing-house-tour.jpg', 'alt' => '' ],
'card--withParagraph animation-item card-has-cta-icon card-has-cta-label bg-dark card-is-link') . '<p>Join us on a tour of Cushing House—a unique house with 200 students built to look like English style cottages.</p>' . end_item_cardWithText(null);

$campus_video_cards[] = item_cardWithText(
'Strong House Tour',
'https://www.youtube.com/watch?v=1elGB4_yDtg&list=PLURusQJONMcpLr6DRm8L-0zWkTI7jQEqt&index=4&ab_channel=Vassar',
['url' => '/admission/assets/images/admission-home/video/experience-vassar/strong-house-tour.jpg', 'alt' => '' ],
'card--withParagraph animation-item card-has-cta-icon card-has-cta-label bg-dark card-is-link') . '<p>Welcome to Strong House, where two students share why they love living there.</p>' . end_item_cardWithText(null);

$campus_video_cards[] = item_cardWithText(
'Davison Dorm Tour',
'https://www.youtube.com/watch?v=0YBLe1_Oz14&list=PLURusQJONMcpLr6DRm8L-0zWkTI7jQEqt&index=5&ab_channel=Vassar',
['url' => '/admission/assets/images/admission-home/video/experience-vassar/davison-house-tour.jpg', 'alt' => '' ],
'card--withParagraph animation-item card-has-cta-icon card-has-cta-label bg-dark card-is-link') . '<p>Welcome to Davison House!</p>' . end_item_cardWithText(null);

$campus_video_cards[] = item_cardWithText(
'Main Building Dorm Tour',
'https://www.youtube.com/watch?v=TBsszdado_Y&list=PLURusQJONMcpLr6DRm8L-0zWkTI7jQEqt&index=6&ab_channel=Vassar',
['url' => '/admission/assets/images/admission-home/video/experience-vassar/main-house-tour.jpg', 'alt' => '' ],
'card--withParagraph animation-item card-has-cta-icon card-has-cta-label bg-dark card-is-link') . '<p>Welcome to Main Building, home to more than 350 students.
</p>' . end_item_cardWithText(null);

$campus_video_cards[] = item_cardWithText(
'Raymond House Dorm Tour',
'https://www.youtube.com/watch?v=SPRObA3rffw&list=PLURusQJONMcpLr6DRm8L-0zWkTI7jQEqt&index=7&ab_channel=Vassar',
['url' => '/admission/assets/images/admission-home/video/experience-vassar/raymond-house-tour.jpg', 'alt' => '' ],
'card--withParagraph animation-item card-has-cta-icon card-has-cta-label bg-dark card-is-link') . '<p>What do students in Raymond House have to say about their dorm?</p>' . end_item_cardWithText(null);

$campus_video_cards[] = item_cardWithText(
'Josselyn House Tour',
'https://www.youtube.com/watch?v=bbm48nGto1Y&list=PLURusQJONMcpLr6DRm8L-0zWkTI7jQEqt&index=9&ab_channel=Vassar',
['url' => '/admission/assets/images/admission-home/video/experience-vassar/joss-house-tour.jpg', 'alt' => '' ],
'card--withParagraph animation-item card-has-cta-icon card-has-cta-label bg-dark card-is-link') . '<p>A tour of Josselyn House, with commentary by students who live there!</p>' . end_item_cardWithText(null);

$campus_video_cards[] = item_cardWithText(
'Lathrop House Tour',
'https://www.youtube.com/watch?v=4FH1MkAY5EE&list=PLURusQJONMcpLr6DRm8L-0zWkTI7jQEqt&index=10&ab_channel=Vassar',
['url' => '/admission/assets/images/admission-home/video/experience-vassar/lathrop-house-tour.jpg', 'alt' => '' ],
'card--withParagraph animation-item card-has-cta-icon card-has-cta-label bg-dark card-is-link') . '<p>Students talk about what they love about living in Lathrop House.</p>' . end_item_cardWithText(null);

//  randomize the array
shuffle($campus_video_cards);

$selected_cards = array_chunk($campus_video_cards, 4);
$selected_cards = $selected_cards[0];

// print_r(selected_cards[0]);

//  display the first four elements
foreach ($selected_cards as &$card) {
    echo $card;
}

?>

</div>

<!-- Previous video section was here -->
<?php /*
<div class="animation-group staggered-grid  animation-zoom-in animate-when-content-appears gap-3  mb-3">

  <?php echo item_imageCard_videoModal(
      get_icon('play').'Art Studios',
      null,
      'https://player.vimeo.com/video/754937394',
      'vimeo',
      '',
      ['url' => '/admission/assets/images/admission-home/art-studio.jpg',
          'alt' => 'An art studio with easels, paints, stools and carts with art materials'
      ],
      'animation-item grid-item text-at-bottom text-white'
  ); ?>

  <?php echo item_imageCard_videoModal(
      get_icon('play').'Car Camera Rigging',
      null,
      'https://player.vimeo.com/video/754937420',
      'vimeo',
      '',
      ['url' => '/admission/assets/images/admission-home/camera-rigging.jpg',
          'alt' => 'Videographer with camera and editing equipment outside'
      ],
      'animation-item grid-item text-at-bottom text-white'
  ); ?>



</div>


<div class="animation-group staggered-grid tiktok-grid animation-zoom-in animate-when-content-appears gap-3  mb-3">


  <?php echo item_imageCard_videoModal(
      get_icon('play').'Day in the Life',
      null,
      'https://player.vimeo.com/video/754937441',
      'vimeo',
      '',
      ['url' => '/admission/assets/images/admission-home/video/day-1.jpg',
          'alt' => 'Student working on a laptop in front of a window'
      ],
      'animation-item grid-item text-at-bottom text-white'
  ); ?>

  <?php echo item_imageCard_videoModal(
      get_icon('play').'Dorm Tour: Noyes',
      null,
      'https://player.vimeo.com/video/754937458',
      'vimeo',
      '',
      ['url' => '/admission/assets/images/admission-home/video/dorm-a-1.jpg',
          'alt' => 'View of campus quad through a sunny window'
      ],
      'animation-item grid-item text-at-bottom text-white'
  ); ?>

  <?php echo item_imageCard_videoModal(
      get_icon('play').'Dorm Tour: Town Houses',
      null,
      'https://player.vimeo.com/video/754937477',
      'vimeo',
      '',
      ['url' => '/admission/assets/images/admission-home/video/dorm-b.jpg',
          'alt' => 'Decorative string lights on a dorm wall'
      ],
      'animation-item grid-item text-at-bottom text-white'
  ); ?>
</div>

*/ ?>

