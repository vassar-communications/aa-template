<?php
$media_carousel_path = '/alums/assets/img/alums-home/news-and-spotlight/';
echo carousel( '', 'alums-media-carousel' ); ?>




<?php echo carousel_item(
    $media_carousel_path.'/2024-12-09/in-the-media/michele-tugade-landscape-1200.jpg',
    'is-link',
    'A photo of Michele Tugade ’95, a person with long black hair and a blue dress. Tugade is standing in the Vassar Library, a large stone building with a stained glass window behind her.'
  ); ?>

  <p>Professor of Psychological Science <strong>Michele Tugade ’95</strong> was interviewed by <em>Scientific American</em> for the article “How Humor Takes the Edge off Hard Times.”</p>
  <p><em>Photo: Kevin Arce ’20</em></p>
  <?php echo cta_link(
  'https://www.scientificamerican.com/article/how-humor-can-help-you-get-through-hard-times/',
  'Read more',
  'stretched-link'
  ); ?>
<?php echo end_carousel_item();  ?>


<?php echo carousel_item(
    $media_carousel_path.'/2024-12-09/in-the-media/thureen-bos_HBO.jpg',
    'is-link',
    'A photo of Paul Thureen ’00 and Hannah Bos ’00. Paul is tall, with a gray beard and a green baseball cap. Hannah is shorter, with long brown hair and a blue baseball cap.'
  ); ?>

  <p><strong>Hannah Bos ’00</strong> and <strong>Paul Thureen ’00</strong>, co-creators of the HBO series <em>Somebody Somewhere</em>, talked to <em>The New York Times</em> about the show.</p>
  <p><em>Photo: Courtesy of Sandy Morris/HBO</em></p>
  <?php echo cta_link(
  'https://www.nytimes.com/2024/10/25/arts/television/somebody-somewhere-final-season.html?unlocked_article_code=1.U04.Ssxy.7h--8hiJ_0jL&smid=nytcore-ios-share&referringSource=articleShare',
  'Read more',
  'stretched-link'
  ); ?>
<?php echo end_carousel_item();  ?>



<?php echo carousel_item(
    $media_carousel_path.'/2024-12-09/in-the-media/sherrilyn-ifill-16x9-KR.jpg',
    'is-link',
    'A photo of Sherrilyn Ifill ’84, a person with long black hair and a green dress. Ifill is speaking in front of a microphone.'
  ); ?>

  <p><strong>Sherrilyn Ifill ’84</strong> delivered Harvard University’s 2024 Dr. Martin Luther King Jr. Commemorative Lecture, as noted by the <em>Harvard Gazette</em>.</p>
  <p><em>Photo: Karl Rabe</em></p>
  <?php echo cta_link(
  'https://news.harvard.edu/gazette/story/2024/10/time-for-emergence-of-a-new-and-better-democracy/',
  'Read more',
  'stretched-link'
  ); ?>
<?php echo end_carousel_item();  ?>







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
