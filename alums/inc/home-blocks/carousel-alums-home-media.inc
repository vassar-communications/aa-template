<?php
$media_carousel_path = '/alums/assets/img/alums-home/news-and-spotlight/';
echo carousel( '', 'alums-media-carousel' ); ?>


<?php echo carousel_item(
    $media_carousel_path.'/2024-08-15/in-the-media/naveen_kumar_4x3.jpg',
    'is-link',
    'ALT'
  ); ?>

  <p>The <em>Washington Post</em> announced its new theater critic: <strong>Naveen Kumar ’04</strong>.</p>
  <p><em>Photo: Myles Loftin</em></p>
  <?php echo cta_link(
  'https://www.washingtonpost.com/pr/2024/06/20/naveen-kumar-named-posts-theater-critic/',
  'Read more',
  'stretched-link'
  ); ?>
<?php echo end_carousel_item(); ?>



<?php echo carousel_item(
    $media_carousel_path.'/2024-08-15/in-the-media/eric_marcus_4x3.jpg',
    'is-link',
    'ALT'
  ); ?>

  <p>NPR interviewed <strong>Eric Marcus ’80</strong>, founder and host of the podcast <em>Making Gay History</em>.</p>
  <p><em>Photo: Courtesy of the subject</em></p>
  <?php echo cta_link(
  'https://www.npr.org/2024/06/30/nx-s1-5021708/as-lgbtq-visibility-increases-so-does-the-backlash',
  'Read more',
  'stretched-link'
  ); ?>
<?php echo end_carousel_item(); ?>




<?php echo carousel_item(
    $media_carousel_path.'/2024-08-15/in-the-media/grace_hopper_4x3.jpg',
    'is-link',
    'ALT'
  ); ?>

  <p><em>Ars Technica</em> reports that AI tech giant Nvidia has named its newest AI platform for astronomer <strong>Vera Rubin ’48</strong>.</p>
  <p><em>Photo: Will Faller</em></p>
  <?php echo cta_link(
  'https://arstechnica.com/information-technology/2024/06/nvidia-jumps-ahead-of-itself-and-reveals-next-gen-rubin-ai-chips-in-keynote-tease/',
  'Read more',
  'stretched-link'
  ); ?>
<?php echo end_carousel_item(); ?>




<?php echo carousel_item(
    $media_carousel_path.'/2024-08-15/in-the-media/grace_hopper_4x3.jpg',
    'is-link',
    'ALT'
  ); ?>

  <p><strong>Grace Hopper, class of 1928</strong>, was included in a <em>U.S. News & World Report</em> story on where 10 famous inventors went to college.</p>
  <p><em>Photo: Vassar Archives and Special Collections</em></p>
  <?php echo cta_link(
  'https://www.usnews.com/education/slideshows/where-10-famous-inventors-went-to-college?slide=11',
  'Read more',
  'stretched-link'
  ); ?>
<?php echo end_carousel_item(); ?>




<?php echo end_carousel(); ?>
