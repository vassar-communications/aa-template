<?php
$media_carousel_path = '/alumni/assets/img/alumni-home/news-and-spotlight/';
echo carousel( '', 'alums-media-carousel' ); ?>

<?php echo carousel_item(
    $media_carousel_path.'/2022-10-12/in-the-media/david_ambroz_02.jpg',
    'is-link',
    'A headshot of David Ambroz looking at the camera.'
  ); ?>
  <small class="mb-3 d-block">September 16, 2022</small>
  <p><strong>David Ambroz ’02</strong> spoke to NPR about surviving on the streets of New York City as a homeless child and about his new memoir, <em>A Place Called Home</em>.</p>
  <?php echo cta_link(
  'https://www.npr.org/2022/09/13/1122621426/a-place-called-home-is-a-vivid-story-of-author-david-ambrozs-childhood',
  'Read more',
  'stretched-link'
  ); ?>

<?php echo end_carousel_item(); ?>



<?php echo carousel_item(
    $media_carousel_path.'/2022-09-16/in-the-media/Victor_Ray_cr_Jill_Tobin_University_of_Iowa.jpg',
    'is-link',
    'A headshot of Victor Ray ’07, a man with a shaved head, wearing a blue suit and looking at the camera.'
  ); ?>

  <small class="mb-3 d-block">September 16, 2022</small>
  <p><strong>Victor Ray ’07</strong>, author of <em>On Critical Race Theory: Why It Matters & Why You Should Care</em>, co-wrote a <em>New York Times</em> guest essay, “School Is for Making Citizens.”</p>
  <p><em>Photo: Jill Tobin, University of Iowa</em></p>
  <?php echo cta_link(
  'https://www.nytimes.com/2022/09/01/opinion/us-school-citizenship.html',
  'Read more',
  'stretched-link'
  ); ?>

<?php echo end_carousel_item(); ?>


<?php echo carousel_item(
    $media_carousel_path.'/2022-08-13/211123-media-blum.jpg',
    'is-link',
    'A headshot of Jason Blum ’91, a person with short brown hair.'
  ); ?>

  <small class="mb-3 d-block">August 6, 2022</small>
  <p><strong>Jason Blum ’91,</strong> CEO and Founder of Blumhouse Productions, talked with <em>Deadline</em> about his upcoming projects.</p>

  <?php echo cta_link(
  'https://deadline.com/2022/08/jason-blum-exorcist-remake-locarno-1235086504/',
  'Read more',
  'stretched-link'
  ); ?>

<?php echo end_carousel_item(); ?>




  <?php echo carousel_item(
    $media_carousel_path.'/2022-09-08/in-the-media/urvashi_vaid_by_john_abbott.jpg',
    'is-link',
    'A portrait of a person with black hair, wearing a dark suit coat and smiling at the camera'
  ); ?>

      <small class="mb-3 d-block">August 16, 2022</small>
      <p><strong>Urvashi Vaid ’79</strong>, a pioneering LGBTQ+ activist who died in May, was the subject of a <em>Ms.</em> magazine article. Photo: <em>John Abbott</em></p>

      <?php echo cta_link(
        'https://msmagazine.com/2022/08/16/urvashi-vaid/',
        'Read more',
        'stretched-link'
      ); ?>

  <?php echo end_carousel_item(); ?>


      <?php echo carousel_item(
        $media_carousel_path.'/2022-09-08/in-the-media/sasha_velour_via_shutterstock.jpg',
        'is-link',
        'A portrait of a person with a shaved head, red lips, and long eyelashes, wearing blue jewelry and smiling at the camera'
      ); ?>

          <small class="mb-3 d-block">August 10, 2022</small>
          <p>Sasha Velour ’09, a performer, writer, and winner of RuPaul’s Drag Race, was the subject of a Provincetown Magazine article.</p>

          <?php echo cta_link(
            'https://provincetownmagazine.com/index.php/2022/08/10/a-rose-by-any-other-name/',
            'Read more',
            'stretched-link'
          ); ?>

      <?php echo end_carousel_item(); ?>




<?php echo end_carousel(); ?>
