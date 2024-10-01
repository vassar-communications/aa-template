<?php
$media_carousel_path = '/alums/assets/img/alums-home/news-and-spotlight/';
echo carousel( '', 'alums-media-carousel' ); ?>





<?php echo carousel_item(
    $media_carousel_path.'/2024-10-01/in-the-media/0141-18-10-kr-kudrow-vassar-0339.jpg',
    'is-link',
    'A photo of Lisa Kudrow ’85, a person with long blond hair, a dark shirt, and jeans. Kudrow is sitting in a brown leather chair near a fireplace.'
  ); ?>

  <p><strong>Lisa Kudrow ’85</strong> discussed her time at Vassar on the podcast <em>SmartLess</em> with hosts Jason Bateman, Sean Hayes, and Will Arnett.</p>
  <p><em>Photo: Karl Rabe</em></p>
  <?php echo cta_link(
  'https://podcasts.apple.com/us/podcast/lisa-kudrow/id1521578868?i=1000662553267',
  'Read more',
  'stretched-link'
  ); ?>
<?php echo end_carousel_item();  ?>



<?php echo carousel_item(
    $media_carousel_path.'/2024-10-01/in-the-media/Jonathan_Karl_Capitol_ABC-News.jpg',
    'is-link',
    'A photo of Jonathan Karl ’90, a person with short light-colored hair, glasses, and a dark suit. Karl is standing in front of the Capitol building, a classic building with a dome.'
  ); ?>

  <p><strong>Jonathan Karl ’90</strong>, Chief Washington Correspondent for ABC News, spoke about the presidential election on the podcast <em>Stay Tuned with Preet</em>.</p>
  <p><em>Photo: Courtesy of ABC News</em></p>
  <?php echo cta_link(
  'https://cafe.com/stay-tuned/kamala-harris-trump-election-jonathan-karl/',
  'Read more',
  'stretched-link'
  ); ?>
<?php echo end_carousel_item();  ?>



<?php echo carousel_item(
    $media_carousel_path.'/2024-10-01/in-the-media/michele_tugade_by_kevin_arce_20.jpg',
    'is-link',
    'A photo of Michelle Tugade ’95, a person with long dark hair and a blue dress. Tugade is standing in the Vassar Library, a large stone building with a stained glass window in the background.'
  ); ?>

  <p><strong>Michele Tugade ’95</strong>, Professor of Psychological Science on the William R. Kenan Jr. Chair, was featured in a <em>Women’s Health</em> article about learned optimism.</p>
  <p><em>Photo: Kevin Arce ’20</em></p>
  <?php echo cta_link(
  'https://www.womenshealthmag.com/life/a61803754/what-is-learned-optimism/',
  'Read more',
  'stretched-link'
  ); ?>
<?php echo end_carousel_item();  ?>








<?php echo carousel_item(
    $media_carousel_path.'/2024-08-15/in-the-media/grace_hopper_4x3.jpg',
    'is-link',
    'A monochrome historical photo of Grace Hopper, a person wearing a long dress and glasses, standing in front of old computer cabinets.'
  ); ?>

  <p><strong>Grace Hopper, class of 1928</strong>, was included in a <em>U.S. News & World Report</em> story on where 10 famous inventors went to college.</p>
  <p><em>Photo: Vassar Archives and Special Collections</em></p>
  <?php echo cta_link(
  'https://www.usnews.com/education/slideshows/where-10-famous-inventors-went-to-college?slide=11',
  'Read more',
  'stretched-link'
  ); ?>
<?php echo end_carousel_item();  ?>




<?php echo end_carousel(); ?>
