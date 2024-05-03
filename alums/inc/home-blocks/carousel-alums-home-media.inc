<?php
$media_carousel_path = '/alums/assets/img/alums-home/news-and-spotlight/';
echo carousel( '', 'alums-media-carousel' ); ?>


<?php echo carousel_item(
    $media_carousel_path.'/2024-05-02/in-the-media/20240502-sasha-velour.jpg',
    'is-link',
    'A person with red lipstick, a shaved head, and a bright indigo dress and cap speaks into a microphone.'
  ); ?>

  <p>Drag artist <strong>Sasha Velour ’09</strong> was the subject of a lengthy <em>Washington Post</em> feature on queer activism, the culture wars, and a new reality series called <em>We’re Here</em>.</p>
  <p><em>Photo: Allyse Pulliam</em></p>
  <?php echo cta_link(
  'https://www.washingtonpost.com/entertainment/2024/04/17/sasha-velour-hbo-max-drag-queen-ban/?utm_campaign=wp_post_most&utm_medium=email&utm_source=newsletter&wpisrc=nl_most&carta-url=https%3A%2F%2Fs2.washingtonpost.com%2Fcar-ln-tr%2F3d6caa2%2F661ff4242d43a25434edb2be%2F65b15869faddfc25cad83b0b%2F37%2F52%2F661ff4242d43a25434edb2be',
  'Read more',
  'stretched-link'
  ); ?>
<?php echo end_carousel_item(); ?>




<?php echo carousel_item(
    $media_carousel_path.'/2024-05-02/in-the-media/20240502-laybourne-pittman.jpg',
    'is-link',
    'An image divided into two photos. In the left photo, a person with a navy blue shirt, blond hair, and glasses is speaking into a microphone. In the right photo, a person with a dark gray shirt and a brown sport jacket speaks in front of a room of people.'
  ); ?>

  <p>The Dutchess Community College Foundation honored <strong>Geraldine Laybourne ’69</strong>, co-founder of DAY ONE Early Learning Community in Poughkeepsie, and retired Vassar Associate Dean <strong>Edward Pittman ’82</strong>.</p>
  <p><em>Photo: Karl Rabe</em></p>
  <?php echo cta_link(
  'https://www.sunydutchess.edu/about/facts/news/articles/annual-gala-honors-four-2024.html',
  'Read more',
  'stretched-link'
  ); ?>
<?php echo end_carousel_item(); ?>













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






<?php echo end_carousel(); ?>
