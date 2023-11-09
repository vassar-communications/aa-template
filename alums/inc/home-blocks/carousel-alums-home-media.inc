<?php
$media_carousel_path = '/alums/assets/img/alums-home/news-and-spotlight/';
echo carousel( '', 'alums-media-carousel' ); ?>





<?php echo carousel_item(
    $media_carousel_path.'/2023-11-09/in-the-media/michele_tugade_by_kevin_arce_20-cropped.jpg',
    'is-link',
    'A person with long black hair and a blue dress smiles at the viewer. The person appears to be standing in the interior of a library, with stone walls and a stained glass window visible in the background.'
  ); ?>

  <p>In an interview with CBS News, Vassar Professor of Psychological Science Michele Tugade ’95 offered tips for coping with stress induced by news reports from the Middle East.</p>
  <p><em>Photo: Kevin Arce ’20</em></p>
  <?php echo cta_link(
  'https://www.cbsnews.com/video/coping-with-stress-from-turmoil-in-news/',
  'Read more',
  'stretched-link'
  ); ?>
<?php echo end_carousel_item(); ?>


<?php echo carousel_item(
    $media_carousel_path.'/2023-11-09/in-the-media/Jason_Blum_by_Eric_Charbonneau-cropped.jpg',
    'is-link',
    'A person with thick brown hair and a blue formal jacket smiles at the viewer.'
  ); ?>

  <p>Jason Blum ’91, CEO and Founder of Blumhouse Productions, talked to <em>Fortune</em> about his filmmaking business model.</p>
  <p><em>Photo: Eric Charbonneau</em></p>
  <?php echo cta_link(
  'https://fortune.com/longform/jason-blum-exorcist-blumhouse-low-budget-horror-films/',
  'Read more',
  'stretched-link'
  ); ?>
<?php echo end_carousel_item(); ?>


<?php echo carousel_item(
    $media_carousel_path.'/2023-11-09/in-the-media/0002-20-01-kr-scc-maldonado-vassar-0043-cropped.jpg',
    'is-link',
    'A person with a shaved head and blue formal jacket stands at a podium speaking into a microphone.'
  ); ?>

  <p>Author and educator Torrey Maldonado ’96 talked to CNN about the rise in book banning.</p>
  <p><em>Photo: Karl Rabe</em></p>
  <?php echo cta_link(
  'https://www.cnn.com/2023/10/04/style/book-bans-sales-authors-impact-cec/index.html',
  'Read more',
  'stretched-link'
  ); ?>
<?php echo end_carousel_item(); ?>


<?php echo carousel_item(
    $media_carousel_path.'/2023-11-09/in-the-media/juliany_taveras-cropped.jpg',
    'is-link',
    'A person with long black curly hair, an orange jacket, a nose ring, and a green necklace looks at the viewer.'
  ); ?>

  <p>Playwright juliany taveras ’16 spoke to <em>DIVA</em> magazine about their new play, <em>Morris Micklewhite And The Tangerine Dress</em>, at the Children’s Theatre Company in Minneapolis.</p>
  <p><em>Photo: Courtesy of the subject</em></p>
  <?php echo cta_link(
  'https://diva-magazine.com/2023/09/25/juliany-taveras/',
  'Read more',
  'stretched-link'
  ); ?>
<?php echo end_carousel_item(); ?>






<?php echo carousel_item(
    $media_carousel_path.'/2023-09-28/in-the-media/Tiana_Headley_courtesy_of.jpg',
    'is-link',
    'A portrait of a person with long black hair, a pink shirt with black polka-dots, and glasses. The person is standing outside, smiling at the viewer.'
  ); ?>

  <p>Tiana Headley ’22 wrote the <em>Bloomberg Law</em> article “Color of Justice: All-White Benches Persist in US District Courts.”</p>
  <p><em>Photo: Tiana Headley</em></p>
  <?php echo cta_link(
  'https://news.bloomberglaw.com/us-law-week/color-of-justice-all-white-benches-persist-in-us-district-courts?utm_medium=lawdesk&utm_source=twitter&campaign=A54DE238-4BED-11EE-A680-4DB7F143A863',
  'Read more',
  'stretched-link'
  ); ?>
<?php echo end_carousel_item(); ?>


<?php echo end_carousel(); ?>
