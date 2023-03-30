<?php
$media_carousel_path = '/alums/assets/img/alums-home/news-and-spotlight/';
echo carousel( '', 'alums-media-carousel' ); ?>




<?php echo carousel_item(
    $media_carousel_path.'/2023-03-30/in-the-media/jon_read_by_allison_rose_carter.jpg',
    'is-link',
    'A close-up photo of a person with short, dark hair. The person is wearing a tuxedo and holding a golden Oscar statue.'
  ); ?>

  <p>Jon Read ’09, a Co-Producer of the Oscar-winning film <em>Everything Everywhere All at Once</em>, was featured in a <em>Daily Voice</em> story.</p>
  <p><em>Photo: Allison Rose Carter</em></p>
  <?php echo cta_link(
  'https://dailyvoice.com/new-york/ulster-sullivan/lifestyle/hudson-valley-resident-co-produced-oscar-favorite-for-picture-of-year/858600/',
  'Read more',
  'stretched-link'
  ); ?>
<?php echo end_carousel_item(); ?>




<?php echo carousel_item(
    $media_carousel_path.'/2023-03-02/in-the-media/June_Jackson_Christmas_KR.jpg',
    'is-link',
    'A close-up photo of a person with short, black, curly hair and purple-framed eyeglasses, speaking to another person who is mostly out of the photo'
  ); ?>

  <p>Dr. June Jackson Christmas ’45-4 was lauded as “a gift to Black mental health” in a <em>Black Wall Street Times</em> profile.</p>
  <p><em>Photo: Karl Rabe</em></p>
  <?php echo cta_link(
  'https://theblackwallsttimes.com/2023/02/15/dr-june-jackson-christmas-is-a-gift-to-black-mental-health/',
  'Read more',
  'stretched-link'
  ); ?>
<?php echo end_carousel_item(); ?>

<?php echo carousel_item(
    $media_carousel_path.'/2023-03-02/in-the-media/alfonso_lopez_courtesy_of.jpg',
    'is-link',
    'A close-up photo of a clean-shaven person with short brown hair and a striped button-down shirt, looking at the camera'
  ); ?>

  <p>Alfonso Lopez ’92, 49th District House of Delegates member in the Virginia General Assembly, talked on MSNBC’s <em>Morning Joe</em> about bipartisan gun safety legislation he sponsored.</p>
  <p><em>Photo: Courtesy of the subject</em></p>
  <?php echo cta_link(
  'https://www.msnbc.com/morning-joe/watch/virginia-house-compromises-and-passes-gun-related-bill-163501125588',
  'Read more',
  'stretched-link'
  ); ?>
<?php echo end_carousel_item(); ?>

<?php echo carousel_item(
    $media_carousel_path.'/2023-03-02/in-the-media/mira_lehr_courtesy_of.jpg',
    'is-link',
    'A person with shoulder-length black hair sits in an armchair, looking at the camera. A brown dog is at their feet.'
  ); ?>

  <p>Artist Mira Lehr ’56 was remembered by the <em>New York Times</em>.</p>
  <p><em>Photo: Courtesy of the subject</em></p>
  <?php echo cta_link(
  'https://www.nytimes.com/2023/02/02/arts/mira-lehr-dead.html',
  'Read more',
  'stretched-link'
  ); ?>
<?php echo end_carousel_item(); ?>



<?php echo carousel_item(
    $media_carousel_path.'/2023-03-02/in-the-media/Ifill_courtesy_American_Bar_Assn.jpg',
    'is-link',
    'A closeup photo of a person with long, black, braided hair, smiling while standing at a podium. A partially visible sign on the podium has the word "Fairmont".'
  ); ?>

  <p>Sherrilyn Ifill ’84 spoke to the <em>Daily Show</em> about her tenure as President and Director-Counsel of the NAACP Legal Defense Fund.</p>
  <p><em>Photo: Courtesy of the American Bar Association</em></p>
  <?php echo cta_link(
  'https://www.youtube.com/watch?v=DA8F7j0_7S4',
  'Read more',
  'stretched-link'
  ); ?>
<?php echo end_carousel_item(); ?>



<?php echo end_carousel(); ?>
