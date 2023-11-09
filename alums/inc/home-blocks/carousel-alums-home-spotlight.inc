<style>

.carousel-cell .figcaption p {
    line-height: 1.3;
}
.carousel-cell .figcaption h3 {
  line-height: 1.1;
}
</style>

<?php
  $alums_spotlight_itm_path = '/alums/assets/img/alums-home/news-and-spotlight/';
  echo carousel( '', 'alums-carousel' );
?>



<?php echo carousel_item(
  $alums_spotlight_itm_path.'/2023-11-09/spotlight/0127-23-10-kma-bartlett-vassar-0766-HP-cropped.jpg',
  'is-link',
  '3 people sitting in chairs in front row and 7 people standing in the back in an office with several framed artworks on the walls.'
); ?>
  <h3 class="h3">Dede Thompson Bartlett ’65 Visits Campus to Talk Career Education</h3>
  <p>The alum met with students who received fellowships she is funding.</p>
  <p><em>Photo: Kelly Marsh</em></p>

  <?php echo cta_link(
    'https://www.vassar.edu/news/dede-thompson-bartlett-65-visits-campus-talk-career-education',
    'Read more',
    'stretched-link'
  ); ?>

<?php echo end_carousel_item(); ?>


<?php echo carousel_item(
  $alums_spotlight_itm_path.'/2023-11-09/spotlight/0047_14_05_KR_0032-cropped.jpg',
  'is-link',
  'Two students practice yoga in the quad lying on the grass holding the other up in the air.'
); ?>
  <h3 class="h3">Dr. Paul Frank ’91 Gifts Endowment for Vassar’s Health and Wellness Program</h3>
  <p>Appreciative for all Vassar did on his road to success, the alum found a way to give back.</p>
  <p><em>Photo: Karl Rabe</em></p>

  <?php echo cta_link(
    'https://www.vassar.edu/news/dr-paul-frank-91-gifts-endowment-vassars-health-and-wellness-program',
    'Read more',
    'stretched-link'
  ); ?>

<?php echo end_carousel_item(); ?>


<?php echo carousel_item(
  $alums_spotlight_itm_path.'/2023-11-09/spotlight/vcsa-group-at-town-hall-in-kolkata_feature-cropped.jpg',
  'is-link',
  'A group of people stand under a large straw roof, on a street with an intricate pattern painted on it. Behind them is a large stone building.'
); ?>
  <h3 class="h3">Vassar Club of South Asia Trip Expands Opportunities for Connection</h3>
  <p>Alums, students, and two faculty members traveled to Kolkata, India, for an immersive program.</p>
  <p><em>Photo: Madhabendu Hensh</em></p>

  <?php echo cta_link(
    'https://www.vassar.edu/news/gathering-vassar-club-south-asia-expands-opportunities-connection',
    'Read more',
    'stretched-link'
  ); ?>

<?php echo end_carousel_item(); ?>


<?php echo carousel_item(
  $alums_spotlight_itm_path.'/2023-11-09/spotlight/lynn-and-birchfield-painting-web-cropped.jpg',
  'is-link',
  'A person with mid-length gray hair, a dark blue sweater, and a gold necklace sits in front of a painting of plants, smiling at the viewer.'
); ?>
  <h3 class="h3">Lynn Straus ʼ46: A Life of Giving</h3>
  <p>Alum’s generosity leaves a legacy at the Loeb.</p>
  <p><em>Photo: Courtesy of the Straus family</em></p>

  <?php echo cta_link(
    'https://www.vassar.edu/news/lynn-straus-46-life-giving',
    'Read more',
    'stretched-link'
  ); ?>

<?php echo end_carousel_item(); ?>


<?php echo carousel_item(
  $alums_spotlight_itm_path.'/2023-09-28/spotlight/natasha-joshunda-collage-edit-2.jpg',
  'is-link',
  'Two different photos. On the left is a photo of a person with glasses, a yellow headscarf, and a brightly patterned dress, standing in front of a bookshelf. On the right is a photo of person with short curly hair and a black shirt. Both are smiling at the camera.'
); ?>
  <h3 class="h3">Connecting Alums: Multicultural and Affinity Engagement’s New Virtual Series</h3>
  <p>Featuring Dr. Natasha Gordon-Chipembere ’92 (left) and Joshunda Sanders ’00 (right).</p>
  <p><em>Photo: Masauko Chipembere; Julian Budge</em></p>

  <?php echo cta_link(
    'https://www.vassar.edu/news/connecting-alums-multicultural-and-affinity-engagements-new-virtual-series',
    'Read more',
    'stretched-link'
  ); ?>

<?php echo end_carousel_item(); ?>








<?php echo end_carousel(); ?>
