<?php
$media_carousel_path = '/alums/assets/img/alums-home/news-and-spotlight/';
echo carousel( '', 'alums-media-carousel' ); ?>




<?php echo carousel_item(
    $media_carousel_path.'/2023-06-09/in-the-media/0060-18-04-kr-triennial-vassar-0153.jpg',
    'is-link',
    'A person with short, dark hair and formal clothing sits in a room of people at a social gathering, smiling and talking to someone next to them.'
  ); ?>

  <p>Philip Jefferson ’83 was nominated Vice Chair of the Federal Reserve Board by President Biden, as noted by the White House and numerous media outlets.</p>
  <p><em>Photo: Karl Rabe</em></p>
  <?php echo cta_link(
  'https://www.whitehouse.gov/briefing-room/statements-releases/2023/05/12/president-biden-announces-nominees-to-the-federal-reserve-board-of-governors/',
  'Read more',
  'stretched-link'
  ); ?>
<?php echo end_carousel_item(); ?>



<?php echo carousel_item(
    $media_carousel_path.'/2023-06-09/in-the-media/dumlao-ac-aavc-alum-001.jpg',
    'is-link',
    'A person with very short, dark hair and glasses, wearing a suit coat, looks at the camera'
  ); ?>

  <p>NYC Pride announced that AC Dumlao ’13 will serve as a Grand Marshal for the 2023 New York City Pride March.</p>
  <p><em>Photo: AC Dumlao ’13</em></p>
  <?php echo cta_link(
  'https://www.nycpride.org/news-press-media/grand-marshals-announced-for-2023-nyc-pride-march',
  'Read more',
  'stretched-link'
  ); ?>
<?php echo end_carousel_item(); ?>




<?php echo carousel_item(
    $media_carousel_path.'/2023-06-09/in-the-media/monje_2021_hi-res-download_5.jpg',
    'is-link',
    'A person with blond hair and wearing a white lab coat with the words “Michelle Monje MD PhD Neuro-Oncology” stands in a crowded lab, smiling at the camera'
  ); ?>

  <p>Dr. Michelle Monje ’98 received the 2023 Richard Lounsbery Award, as noted by the National Academy of Sciences.</p>
  <p><em>Photo: Courtesy of the MacArthur Foundation</em></p>
  <?php echo cta_link(
  'http://www.nasonline.org/programs/awards/2023-awards/Monje.html',
  'Read more',
  'stretched-link'
  ); ?>
<?php echo end_carousel_item(); ?>



<?php echo carousel_item(
    $media_carousel_path.'/2023-04-27/in-the-media/Daphne_Kalotay_courtesy_of.jpg',
    'is-link',
    'A person with long brown hair and glasses looks at the camera.'
  ); ?>

  <p>Daphne Kalotay ’92 wrote a <em>New York Times</em> guest essay, “What Holocaust Storytellers Like Me Know About ‘Secondhand Smoke.’”</p>
  <p><em>Photo: Courtesy of the subject</em></p>
  <?php echo cta_link(
  'https://www.nytimes.com/2023/04/16/opinion/second-and-third-generation-storytellers-are-telling-the-story-of-the-holocaust-now.html',
  'Read more',
  'stretched-link'
  ); ?>
<?php echo end_carousel_item(); ?>




<?php echo end_carousel(); ?>
