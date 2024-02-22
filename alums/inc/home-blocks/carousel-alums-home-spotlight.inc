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
  $alums_spotlight_itm_path.'/2024-02-22/spotlight/new_trustees_4x3.jpg',
  'is-link',
  'An image divided into two photos. The left photo is of a person with long, straight, gray hair and a black shirt, smiling at the camera. The right photo is of a person with long, straight, brown hair, glasses, and a navy-blue sleeveless shirt smiling at the camera.'
); ?>
  <h3 class="h3">Vassar Gains Two New Trustees</h3>
  <p>Jennifer Haas ’94 (left) and Delia Cheung Hom ’00 bring unique talents and backgrounds to the board.</p>
  <p><em>Photo: Courtesy of the subjects</em></p>

  <?php echo cta_link(
    'https://www.vassar.edu/news/vassar-gains-two-new-trustees',
    'Read more',
    'stretched-link'
  ); ?>

<?php echo end_carousel_item(); ?>

<?php echo carousel_item(
  $alums_spotlight_itm_path.'/2024-02-22/spotlight/how_to_dance_4x3.jpg',
  'is-link',
  'A person with long, straight, brown hair and a gray shirt stands in a city street. In the background is a theater with illuminated letters that spell "How to Dance in Ohio".'
); ?>
  <h3 class="h3"><em>How to Dance</em> on Broadway!</h3>
  <p>How a documentary about the social lives of young adults with autism by Alexandra Shiva ’95 became a Broadway musical.</p>
  <p><em>Photo: Samuel Stuart Photography</em></p>

  <?php echo cta_link(
    'https://www.vassar.edu/news/how-dance-broadway',
    'Read more',
    'stretched-link'
  ); ?>

<?php echo end_carousel_item(); ?>

<?php echo carousel_item(
  $alums_spotlight_itm_path.'/2024-02-22/spotlight/jan_farrington_4x3.jpg',
  'is-link',
  'A person with mid-length gray hair and a blue patterned shirt smiles at the viewer. The person is outside, with trees and a tree trunk visible in the background.'
); ?>
  <h3 class="h3">Embracing Every Chapter: The Happy Camper, Jan Farrington ’46</h3>
  <p>A new series on older alums begins.</p>
  <p><em>Photo: Samuel Stuart Photography</em></p>

  <?php echo cta_link(
    'https://www.vassar.edu/news/embracing-every-chapter-happy-camper-jan-farrington-46',
    'Read more',
    'stretched-link'
  ); ?>

<?php echo end_carousel_item(); ?>

<?php echo carousel_item(
  $alums_spotlight_itm_path.'/2024-02-22/spotlight/fulbright_4x3.jpg',
  'is-link',
  'An image divided into two photos. The left photo is of a person with long, straight brown hair, smiling at the camera. The right photo is of a person with mid-length light-brown hair and a black shirt, smiling at the camera.'
); ?>
  <h3 class="h3">Vassar Named Top Producer of Fulbright Students</h3>
  <p>Four alums received awards this year, including Chase Bradley Estes ’22 (left) and Malinda Marie Smith ’23.</p>
  <p><em>Photo: Courtesy of the subjects</em></p>

  <?php echo cta_link(
    'https://www.vassar.edu/news/vassar-named-top-producer-of-fulbright-students',
    'Read more',
    'stretched-link'
  ); ?>

<?php echo end_carousel_item(); ?>

<?php echo carousel_item(
  $alums_spotlight_itm_path.'/2024-02-22/spotlight/schwarzman_scholarships_4x3.jpg',
  'is-link',
  'A wood-paneled conference room with people in it. In the foreground, several people sit at a table covered with paper, discussing something.'
); ?>
  <h3 class="h3">Two Vassar Grads Embark on Study in China After Winning Prestigious Schwarzman Scholarships</h3>
  <p>The awardees are Frank Najarro-Izquierdo ’18 (pictured) and Aena Khan ’22.</p>
  <p><em>Photo: Karl Rabe</em></p>

  <?php echo cta_link(
    'https://www.vassar.edu/news/vassar-named-top-producer-of-fulbright-students',
    'Read more',
    'stretched-link'
  ); ?>

<?php echo end_carousel_item(); ?>

<?php echo carousel_item(
  $alums_spotlight_itm_path.'/2024-02-09/spotlight/emma_kr.jpg',
  'is-link',
  'Four people sitting in front of a chalkboard, with one person in the center speaking, motioning with their hands.'
); ?>
  <h3 class="h3">Sophomore Career Connections 2024</h3>
  <p>This year, SCC celebrated its 10th anniversary and offered more than 250 students the opportunity to network and exchange industry information with 100+ mentors.</p>
  <p><em>Photo: Karl Rabe</em></p>

  <?php echo cta_link(
    'https://www.vassar.edu/news/sophomore-career-connections-2024',
    'Read more',
    'stretched-link'
  ); ?>

<?php echo end_carousel_item(); ?>


<?php echo end_carousel(); ?>
