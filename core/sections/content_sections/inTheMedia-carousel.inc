<?php


function inTheMediaCarousel() {
  return <<<TMP

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
  .media-carousel .figcaption {
      background: var(--color-vassar-dark-burgundy) !important;
  }

  .media-carousel .figcaption p {
    font-size: 1.3rem !important;
  }

  .media-carousel .figcaption * {
    position: relative;
    z-index: 10;
  }
  </style>

<div class="featureImage-text-ticker media-carousel fade-nonselected full" id="gallery">

  <div class="carousel-cell">
    <div class="carousel-cell-content">
      <div class="image-container">
        <img src="/mockups/advancement-home/assets/images/in-the-media/blum.jpg" />
      </div>
       <div class="figcaption pt-5">
        <small class="mb-3 d-block">June 21, 2022</small>
<p><strong>Jason Blum ’91’s</strong> $10 million gift to <strong>Vassar College</strong> was the subject of a <a href="https://variety.com/2022/film/news/jason-blum-blumhouse-vassar-college-scholarship-1235299680/"><em>Variety</em></a> story.</p>
          <a href="#" class="px-0 btn btn-link">Read more on <em>Variety</em>.<i class="circle fa-solid fa-arrow-right"></i></a>
      </div>
    </div>
  </div>

    <div class="carousel-cell">
    <div class="carousel-cell-content">
      <div class="image-container">
        <img src="/mockups/advancement-home/assets/images/in-the-media/ifill.jpg" />
         </div>
      <div class="figcaption pt-5">
        <small class="mb-3 d-block">June 21, 2022</small>
        <p>The Ford Foundation has awarded a senior fellowship to <strong>Sherrilyn Ifill ’84</strong>, President and Director-Counsel Emeritus of the NAACP Legal Defense Fund, “to continue her work on strengthening American democracy,” as announced by the <a href="https://www.fordfoundation.org/news-and-stories/news-and-press/news/sherrilyn-ifill-joins-ford-foundation-as-a-senior-fellow/">foundation</a>.</p>
        <a href="#" class="px-0 btn btn-link">Read more at the Ford Foundation<i class="circle fa-solid fa-arrow-right"></i></a>

      </div>
    </div>
  </div>

      <div class="carousel-cell">
    <div class="carousel-cell-content">
      <div class="image-container">
             <img src="/mockups/advancement-home/assets/images/in-the-media/goldberg.jpg" />
          </div>
 <div class="figcaption pt-5">
<small class="mb-3 d-block">July 1, 2022</small>
<p>Victims’ rights attorney <strong>Carrie Goldberg ’99</strong> (pictured) was quoted in an <em>Insider</em> story about the misogyny stemming from the recent Amber Heard/Johnny Depp trial.</p>

        <a href="https://www.insider.com/internet-trolls-using-amber-heard-name-dog-whistle-lawyer-2022-7" class="px-0 btn btn-link">Read more on <em>Insider</em><i class="circle fa-solid fa-arrow-right"></i></a>

      </div>
    </div>
  </div>

  </div>

TMP;
}
