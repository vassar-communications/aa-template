<?php
$media_carousel_path = '/alums/assets/img/alums-home/news-and-spotlight/';
echo carousel( '', 'alums-media-carousel' ); ?>


<?php echo carousel_item(
    $media_carousel_path.'/2024-07-11/in-the-media/Sieu_Nguyen_4x3-copy.jpg',
    'is-link',
    'A person with short black hair and wearing a brown suit sits in a chair, talking to someone in a dark blue shirt, dark curly hair, and glasses.'
  ); ?>

  <p><strong>Siêu Nguyễn ’17</strong>, who works for the marketing team for HBO and Max Originals, was the subject of a <em>Northwest Asian Weekly article</em>.</p>
  <p><em>Photo: Karl Rabe</em></p>
  <?php echo cta_link(
  'https://nwasianweekly.com/2024/06/from-hanoi-to-hollywood-vietnamese-writer-producer-sieu-nguyen-finds-success-at-hbo-and-max/',
  'Read more',
  'stretched-link'
  ); ?>
<?php echo end_carousel_item(); ?>


<?php echo carousel_item(
    $media_carousel_path.'/2024-07-11/in-the-media/bella_depaulo_4x3-copy.jpg',
    'is-link',
    'A person with short gray hair smiles at the camera.'
  ); ?>

  <p>The book <em>Single at Heart: The Power, Freedom, and Heart-Filled Joy of Single Life</em> by <strong>Bella DePaulo ’75</strong> was mentioned in multiple media outlets including <em>Ms.</em> magazine.</p>
  <p><em>Photo: Courtesy of the subject</em></p>
  <?php echo cta_link(
  'https://msmagazine.com/2024/04/10/tradwife-feminist-divorce-women-home/',
  'Read more',
  'stretched-link'
  ); ?>
<?php echo end_carousel_item(); ?>


<?php echo carousel_item(
    $media_carousel_path.'/2024-07-11/in-the-media/matthew_knigge_4x3-copy.jpg',
    'is-link',
    'A person with short blond hair and a thin beard sits with other people and smiles off-camera.'
  ); ?>

  <p>Pro volleyball player and former Brewers standout <strong>Matthew Knigge ’18</strong> was the subject of a feature article in <em>Volleyball</em> magazine.</p>
  <p><em>Photo: Karl Rabe</em></p>
  <?php echo cta_link(
  'https://volleyballmag.com/matthew-knigge-usa-volleyball-052324/',
  'Read more',
  'stretched-link'
  ); ?>
<?php echo end_carousel_item(); ?>


<?php echo carousel_item(
    $media_carousel_path.'/2024-07-11/in-the-media/andrew_zimmern_4x3-copy.jpg',
    'is-link',
    'A person with no hair and a brown suit coat smiles at the camera.'
  ); ?>

  <p>Chef and television personality <strong>Andrew Zimmern ’84</strong> talked to <em>Forbes</em> about his favorite Catskill restaurants.</p>
  <!--<p><em>Photo: Karl Rabe</em></p>-->
  <?php echo cta_link(
  'https://www.forbes.com/sites/forbestravelguide/2024/05/07/andrew-zimmerns-favorite-food-city-will-surprise-you/?sh=121193911ca9',
  'Read more',
  'stretched-link'
  ); ?>
<?php echo end_carousel_item(); ?>




<?php echo end_carousel(); ?>
