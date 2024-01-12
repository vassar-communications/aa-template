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
  $alums_spotlight_itm_path.'/2024-01-11/spotlight/Triennial-0031_15_04_KR_0034-compressed.jpg',
  'is-link',
  'Two people sit in a large brick room. One person is sitting on the right, closest to the viewer and out of focus. The other person has short curly gray hair and is wearing a purple robe and glasses.'
); ?>
  <h3 class="h3">We Remember June Jackson Christmas ’45-4, Groundbreaking Psychiatrist and Ardent Supporter of the Vassar Community</h3>
  <p><em>Photo: Karl Rabe</em></p>

  <?php echo cta_link(
    'https://www.vassar.edu/news/we-remember-june-jackson-christmas-45-4-groundbreaking-psychiatrist-and-ardent-supporter-of-the-vassar-community',
    'Read more',
    'stretched-link'
  ); ?>

<?php echo end_carousel_item(); ?>

<?php echo carousel_item(
  $alums_spotlight_itm_path.'/2024-01-11/spotlight/drago_kearney.jpg',
  'is-link',
  'Two portrait photos, side by side. The left photo shows a person with short dark hair and a blue button-down shirt. The right photo shows a person with longer brown hair and a white button-down shirt.'
); ?>
  <h3 class="h3">Two Alums Win Important Seats in Local Elections</h3>
  <p>Chris Drago ’98 (left) and Brennan Kearney ’96</p>

  <?php echo cta_link(
    'https://www.vassar.edu/news/candidates-vassar-ties-win-important-seats-local-elections',
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
