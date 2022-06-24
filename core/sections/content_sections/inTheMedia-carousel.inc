<style>

.media-carousel {
  --carousel-height: 33rem;
  height: 37rem !important;
}
.media-carousel .carousel-cell {
  width: 70rem !important;
}
.media-carousel .carousel-cell-content {
  max-width: none;
}

.media-carousel .image-container {
  width: 70% !important;
  height: var(--carousel-height, 32em);
  position: relative;
}
.featureImage-text-ticker .carousel-cell .image-container img {
  max-height: none;
  max-width: none;
  height: 100%;
  width: 100%;
  position: absolute;
  object-fit: cover;
}
.media-carousel .figcaption p {
  font-size: 1.3rem !important;
}
</style>


<?php


function inTheMediaCarousel() {
  return <<<TMP
<div class="featureImage-text-ticker media-carousel fade-nonselected full" id="gallery">

  <div class="carousel-cell">
    <div class="carousel-cell-content">
      <div class="image-container">
        <img src="/mockups/advancement-home/assets/images/in-the-media/blum.jpg" />
      </div>
       <div class="figcaption pt-5">
<p><strong>Jason Blum ’91’s</strong> $10 million gift to <strong>Vassar College</strong> was the subject of <a href="https://apnews.com/press-release/pr-newswire/entertainment-television-9554c9edf9de533dab110ea9ff7a2d03">AP</a>, <em><a href="https://www.thewrap.com/jason-blum-donates-10-million-vassar-college/">The Wrap</a></em>, <em><a href="https://variety.com/2022/film/news/jason-blum-blumhouse-vassar-college-scholarship-1235299680/">Variety</a></em>, and <a href="https://www.yahoo.com/now/award-winning-film-television-producer-142700862.html">Yahoo! News</a> stories.</p>
          <a href="#" class="px-0 btn btn-link">Read more<i class="circle fa-solid fa-arrow-right"></i></a>
      </div>
    </div>
  </div>

    <div class="carousel-cell">
    <div class="carousel-cell-content">
      <div class="image-container">
        <img src="/mockups/advancement-home/assets/images/in-the-media/ifill.jpg" />
         </div>
      <div class="figcaption pt-5">
        <p>The Ford Foundation has awarded a senior fellowship to <strong>Sherrilyn Ifill ’84</strong>, President and Director-Counsel Emeritus of the NAACP Legal Defense Fund, “to continue her work on strengthening American democracy,” as announced by the <a href="https://www.fordfoundation.org/news-and-stories/news-and-press/news/sherrilyn-ifill-joins-ford-foundation-as-a-senior-fellow/">foundation</a>.</p>
        <a href="#" class="px-0 btn btn-link">Read more<i class="circle fa-solid fa-arrow-right"></i></a>

      </div>
    </div>
  </div>

      <div class="carousel-cell">
    <div class="carousel-cell-content">
      <div class="image-container">
             <img src="/mockups/advancement-home/assets/images/in-the-media/goldberg.jpg" />
          </div>
 <div class="figcaption pt-5">
<p>Lawyer <strong>Carrie Goldberg ’99</strong> was named to the White House Task Force to Address Online Harassment and Abuse, as noted by the <a href="https://www.whitehouse.gov/briefing-room/statements-releases/2022/06/17/readout-of-the-white-house-task-force-to-address-online-harassment-and-abuse-launch/">White House</a>.</p>

        <a href="#" class="px-0 btn btn-link">Read more<i class="circle fa-solid fa-arrow-right"></i></a>

      </div>
    </div>
  </div>

  </div>

TMP;
}
