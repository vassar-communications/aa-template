<?php
$media_carousel_path = '/alums/assets/img/alums-home/news-and-spotlight/';
echo carousel( '', 'alums-media-carousel' ); ?>

<?php echo carousel_item(
    $media_carousel_path.'/2024-02-22/in-the-media/christmas_4x3.jpg',
    'is-link',
    'Two people sit in a large brick room. One person is sitting on the right, closest to the viewer and out of focus. The other person has short curly gray hair and is wearing a purple robe and glasses.'
  ); ?>

  <p><strong>Dr. June Jackson Christmas ’45-4</strong>, a pioneer psychiatrist who headed the NYC Department of Mental Health and Retardation Services, was remembered by <em>The New York Times</em>.</p>
  <p><em>Photo: Karl Rabe</em></p>
  <?php echo cta_link(
  'https://www.nytimes.com/2024/01/04/nyregion/june-jackson-christmas-dead.html',
  'Read more',
  'stretched-link'
  ); ?>
<?php echo end_carousel_item(); ?>



<?php echo carousel_item(
    $media_carousel_path.'/2024-02-22/in-the-media/christmas_4x3.jpg',
    'is-link',
    'A photo of a person with no hair, glasses, and a dark gray button-down shirt. The person is smiling at the camera, and is superimposed on a photograph of an Arctic observatory with green aurora visible in the sky.'
  ); ?>

  <p>University of Chicago Professor <strong>John E. Carlstrom ’81</strong> was named the winner of the 2024 Dannie Heineman Prize for Astrophysics, as noted by <em>Science Magazine</em>.</p>
  <?php echo cta_link(
  'https://scienmag.com/john-e-carlstrom-wins-2024-dannie-heineman-prize-for-astrophysics/',
  'Read more',
  'stretched-link'
  ); ?>
<?php echo end_carousel_item(); ?>


<?php echo carousel_item(
    $media_carousel_path.'/2024-02-22/in-the-media/cruz_4x3.jpg',
    'is-link',
    'A person with short, black, curly hair and a patterned black-and-orange shirt speaks into a microphone at an event.'
  ); ?>

  <p><em>The Black Joy Project: A Literary and Visual Love Letter to How We Thrive</em> by <strong>Kleaver Cruz ’11</strong> is “captivating” and “remarkable,” says <em>Essence</em> magazine.</p>
  <p><em>Photo: Roman Iwasiwka</em></p>
  <?php echo cta_link(
  'https://www.essence.com/entertainment/the-black-joy-project-literary-visual-celebration-black-resilience/',
  'Read more',
  'stretched-link'
  ); ?>
<?php echo end_carousel_item(); ?>


<?php echo carousel_item(
    $media_carousel_path.'/2024-02-22/in-the-media/rubin_4x3.jpg',
    'is-link',
    'A person with short straight gray hair, glasses, and a white shirt smiles at the viewer. The person is standing in front of a brick wall, into which is set an alcove containing the metal bust of a person with long hair and a 19th-century dress.'
  ); ?>

  <p>Renowned astronomer <strong>Vera Rubin ’48</strong> was the subject of an <em>Astronomy</em> magazine story.</p>
  <p><em>Photo: Will Faller</em></p>
  <?php echo cta_link(
  'https://www.astronomy.com/science/vera-rubin-found-a-lifetime-of-wonder-in-the-dark-skies/',
  'Read more',
  'stretched-link'
  ); ?>
<?php echo end_carousel_item(); ?>


<?php echo carousel_item(
    $media_carousel_path.'/2024-01-11/in-the-media/Jonathan_Karl_Capitol_ABC-News.jpg',
    'is-link',
    'A photo of a person with short brown hair, glasses, a blue suit jacket, and a formal shirt and tie smiles at the viewer. The person is standing in front of the United States Capitol building, a classical building with a dome.'
  ); ?>

  <p>Author and ABC News Chief Washington Correspondent <strong>Jonathan Karl ’90</strong> was a guest on Preet Bharara’s podcast, <em>Stay Tuned with Preet</em>.</p>
  <p><em>Photo: Courtesy of ABC News</em></p>
  <?php echo cta_link(
  'https://podcasts.google.com/feed/aHR0cHM6Ly9mZWVkcy5tZWdhcGhvbmUuZm0vVk1QNTQ4OTczNDcwMg/episode/MWIxZjVlYTgtMzUyYy0xMWVkLWExODEtY2ZlY2RjMjMyNTMy?ep=14',
  'Read more',
  'stretched-link'
  ); ?>
<?php echo end_carousel_item(); ?>

<?php echo end_carousel(); ?>
