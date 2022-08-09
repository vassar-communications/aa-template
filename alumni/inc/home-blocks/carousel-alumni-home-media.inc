<?php
$media_carousel_path = '/alumni/assets/img/homepage/carousels/in-the-media/';
echo carousel( '', 'alums-media-carousel' ); ?>

  <?php echo carousel_item(
    $media_carousel_path.'blum.jpg',
    'is-link'
  ); ?>

  <small class="mb-3 d-block">June 21, 2022</small>
<p><strong>Jason Blum ’91’s</strong> $10 million gift to <strong>Vassar College</strong> was the subject of a <em>Variety</em> story.</p>

<?php echo cta_link(
  'https://variety.com/2022/film/news/jason-blum-blumhouse-vassar-college-scholarship-1235299680/',
  'Read more on <em>Variety</em>',
  'stretched-link'
); ?>


  <?php echo end_carousel_item(); ?>





  <?php echo carousel_item(
    $media_carousel_path.'ifill.jpg',
    'is-link'
  ); ?>

  <small class="mb-3 d-block">June 21, 2022</small>
  <p>The Ford Foundation has awarded a senior fellowship to <strong>Sherrilyn Ifill ’84</strong>, President and Director-Counsel Emeritus of the NAACP Legal Defense Fund, “to continue her work on strengthening American democracy,” as announced by the foundation.</p>

  <?php echo cta_link(
    'https://www.fordfoundation.org/news-and-stories/news-and-press/news/sherrilyn-ifill-joins-ford-foundation-as-a-senior-fellow/',
    'Read more at the Ford Foundation',
    'stretched-link'
  ); ?>

  <?php echo end_carousel_item(); ?>





  <?php echo carousel_item(
    $media_carousel_path.'goldberg.jpg',
    'is-link'
  ); ?>

  <small class="mb-3 d-block">July 1, 2022</small>
  <p>Victims’ rights attorney <strong>Carrie Goldberg ’99</strong> (pictured) was quoted in an <em>Insider</em> story about the misogyny stemming from the recent Amber Heard/Johnny Depp trial.</p>

  <?php echo cta_link(
    'https://www.insider.com/internet-trolls-using-amber-heard-name-dog-whistle-lawyer-2022-7',
    'Read more on <em>Insider</em>',
    'stretched-link'
  ); ?>

  <?php echo end_carousel_item(); ?>


<?php echo end_carousel(); ?>
