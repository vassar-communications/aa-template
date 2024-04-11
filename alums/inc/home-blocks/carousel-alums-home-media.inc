<?php
$media_carousel_path = '/alums/assets/img/alums-home/news-and-spotlight/';
echo carousel( '', 'alums-media-carousel' ); ?>






<?php echo carousel_item(
    $media_carousel_path.'/2024-03-28/in-the-media/zoe_adams_4x3.jpg',
    'is-link',
    'A person with long brown hair, a blue formal jacket, and a pink shirt smiles at the camera.'
  ); ?>

  <p><strong>Dr. Zoe Adams ’15</strong> wrote a <em>Scientific American</em> article about the stigma against hospital patients with addiction.</p>
  <p><em>Photo courtesy of the subject</em></p>
  <?php echo cta_link(
  'https://www.scientificamerican.com/article/against-medical-advice-another-deadly-consequence-of-our-opioid-epidemic/',
  'Read more',
  'stretched-link'
  ); ?>
<?php echo end_carousel_item(); ?>



<?php echo carousel_item(
    $media_carousel_path.'/2024-03-28/in-the-media/jess_chong_4x3_resized.jpg',
    'is-link',
    'A person with long black hair and a blue striped shirt stands in front of a large body of water, arms folded, smiling at the viewer.'
  ); ?>

  <p><strong>Jess Chong ’08</strong> gave <em>Global News</em> an insider’s view of <em>Survivor</em> after competing on the show’s 46th season.</p>
  <p><em>Photo: Robert Voets/CBS</em></p>
  <?php echo cta_link(
  'https://globalnews.ca/news/10311172/survivor-season-46-jess-chong-toronto/',
  'Read more',
  'stretched-link'
  ); ?>
<?php echo end_carousel_item(); ?>

<?php echo carousel_item(
    $media_carousel_path.'/2024-03-28/in-the-media/mike_schmidt_4x3_resized.jpg',
    'is-link',
    'A person with short brown hair and beard looks at the viewer. The person is wearing a gray suit and a blue tie.'
  ); ?>

  <p>District Attorney <strong>Mike Schmidt ’03</strong> discussed amending Portland’s failed drug decriminalization policy on <em>The New York Times</em> podcast <em>The Daily</em>.</p>
  <p><em>Photo: Courtesy of the subject</em></p>
  <?php echo cta_link(
  'https://www.nytimes.com/2024/03/12/podcasts/the-daily/oregon-drugs.html',
  'Read more',
  'stretched-link'
  ); ?>
<?php echo end_carousel_item(); ?>



<?php echo carousel_item(
    $media_carousel_path.'/2024-03-28/in-the-media/ellen_galinsky_4x3_resized.jpg',
    'is-link',
    'A person with long brown hair, round hoop earrings, and a black leather jacket smiles at the viewer.'
  ); ?>

  <p>Author <strong>Ellen Galinsky ’64</strong>, President and Founder of the Families and Work Institute, wrote a <em>Los Angeles Times</em> op-ed about mental health and Gen Z.</p>
  <p><em>Photo: Courtesy of the subject</em></p>
  <?php echo cta_link(
  'https://www.latimes.com/opinion/story/2024-02-16/youth-mental-health-crisis-gen-z-discrimination-stereotype-depression',
  'Read more',
  'stretched-link'
  ); ?>
<?php echo end_carousel_item(); ?>



























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



<?php
//  Scienmag removed this story for some reason, and Kim said to remove this item. Keeping
//  it here temporarily in case they restore it.

/* echo carousel_item(
    $media_carousel_path.'/2024-02-22/in-the-media/carlstrom_4x3.jpg',
    'is-link',
    'A photo of a person with no hair and a dark gray suit with a blue white-striped tie. The person is smiling at the camera and standing in front of a large window, through which is visible a city with ornate classic buildings and red tile roofs.'
  ); ?>

  <p>University of Chicago Professor <strong>John E. Carlstrom ’81</strong> was named the winner of the 2024 Dannie Heineman Prize for Astrophysics, as noted by <em>Science Magazine</em>.</p>
  <?php echo cta_link(
  'https://scienmag.com/john-e-carlstrom-wins-2024-dannie-heineman-prize-for-astrophysics/',
  'Read more',
  'stretched-link'
  ); ?>
<?php echo end_carousel_item();  */ ?>





<?php echo end_carousel(); ?>
