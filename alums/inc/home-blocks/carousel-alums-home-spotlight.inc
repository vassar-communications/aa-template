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
  $alums_spotlight_itm_path.'/2023-09-28/spotlight/natasha-joshunda-collage-edit-2.jpg',
  'is-link',
  'Two different photos. On the left is a photo of a person with glasses, a yellow headscarf, and a brightly patterned dress, standing in front of a bookshelf. On the right is a photo of person with short curly hair and a black shirt. Both are smiling at the camera.'
); ?>
  <h3 class="h3">Connecting Alums: Multicultural and Affinity Engagement’s New Virtual Series</h3>
  <p>Featuring Dr. Natasha Gordon-Chipembere ’92 (left) and Joshunda Sanders ’00 (right).</p>
  <p><em>Photo: Karl Rabe</em></p>

  <?php echo cta_link(
    'https://www.vassar.edu/news/connecting-alums-multicultural-and-affinity-engagements-new-virtual-series',
    'Read more',
    'stretched-link'
  ); ?>

<?php echo end_carousel_item(); ?>





<?php echo carousel_item(
  $alums_spotlight_itm_path.'/2023-06-26/spotlight/baird-0045-23-06-kr-reunion-aavc-vassar-0061-compressed.jpg',
  'is-link',
  'A grid: two rows of three squares each. Most squares are a close-up photographic portrait of a person. First row, left to right: a person with short gray hair, a dark blue suit coat, and a prominent dotted bowtie; a person with mid-length gray hair and a green shirt; and a person with short, dark hair, a dark gray suit coat, and a maroon tie. Second row: a person with long, black hair, a pink shirt, and glasses; a box  that is not a portrait and contains the letters “AAVC” on a burgundy background; and a person with short curly dark hair and a blue gray scarf.'
); ?>
  <h3 class="h3">AAVC Announces 2023 Honorees</h3>
  <p>The Alumnae/i Association of Vassar College (AAVC) has selected five alums to honor for their impact on the College, their communities, and the larger world. Two of these awards were given at Reunion 2023 in early June. The other three will be presented in the coming academic year.</p>
  <p><em>Photo: Tamar Thibodeau</em></p>

  <?php echo cta_link(
    'https://www.vassar.edu/news/aavc-announces-2023-honorees',
    'Read more',
    'stretched-link'
  ); ?>

<?php echo end_carousel_item(); ?>



<?php echo carousel_item(
  $alums_spotlight_itm_path.'/2023-06-26/spotlight/kma-bartlett-dede-vassar-0640.jpg',
  'is-link',
  'A person with long brown hair, a patterned dress, and large pearl necklace stands in a large, brightly lit room.'
); ?>
  <h3 class="h3">A Sustainable, Vibrant, and Collaborative Environment
</h3>
  <p>Vassar’s new Dede Thompson Bartlett Center for Admission and Career Education promises to be a space that supports students from their first days at the College through post-graduate success.</p>
  <p><em>Photo: Kelly Marsh</em></p>

  <?php echo cta_link(
    'https://www.vassar.edu/news/sustainable-vibrant-and-collaborative-environment',
    'Read more',
    'stretched-link'
  ); ?>

<?php echo end_carousel_item(); ?>



<?php echo carousel_item(
  $alums_spotlight_itm_path.'/2023-06-09/spotlight/vassar-serves_uk-23-2-cropped.jpg',
  'is-link',
  'A group of people standing together on a gravel road in a wooded area holding a Vassar banner'
); ?>
  <h3 class="h3">Alums Aid Local Conservation Efforts for “Vassar Serves” Week</h3>
  <p>When Vassar alums are called upon to find ways to make the world a better place, they always respond.</p>

  <p><em>Photo: Vassar Clubs</em></p>

  <?php echo cta_link(
    'https://www.vassar.edu/news/alums-aid-local-conservation-efforts-vassar-serves-week',
    'Read more',
    'stretched-link'
  ); ?>

<?php echo end_carousel_item(); ?>





<?php echo end_carousel(); ?>
