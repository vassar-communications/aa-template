<style>

.featureImage-text-ticker .carousel-cell {
    height: 100%;
    margin-right: 1em;
}
.news-intro {
  text-align: center;
  margin-bottom: 4rem;
}

</style>


<?php

function newsCarousel() {
  return <<<TMP
<div class="section section--carousel theme-charcoal px-0">

<p class="section-intro-text news-intro" style="">What happens around here</p>

<div class="featureImage-text-ticker fade-nonselected full" id="gallery">

  <div class="carousel-cell">
    <div class="carousel-cell-content">
      <div class="image-container">
        <img src="/mockups/admission-home/assets/images/news/aavc-awards-2206-2x3-edit1.jpg" />
      </div>
       <div class="figcaption">
        <h3 class="h3">Five Alumni Selected for 2022 AAVC Awards</h3>
          <a href="#" class="px-0 btn btn-link">Read more<i class="circle fa-solid fa-arrow-right"></i></a>
      </div>
    </div>
  </div>

    <div class="carousel-cell">
    <div class="carousel-cell-content">
      <div class="image-container">
        <img src="/mockups/admission-home/assets/images/news/Pulitzer-Prizes-medal-edit1.jpeg" />
         </div>
      <div class="figcaption">
          <h3 class="h3">Ada Ferrer ’84 Wins 2022 Pulitzer Prize in History</h3>

        <a href="#" class="px-0 btn btn-link">Read more<i class="circle fa-solid fa-arrow-right"></i></a>

      </div>
    </div>
  </div>




      <div class="carousel-cell">
    <div class="carousel-cell-content">
      <div class="image-container">
             <img src="/mockups/admission-home/assets/images/news/olmsted-story-lead.jpeg" />
          </div>
 <div class="figcaption">
           <h3 class="h3">Exhibit Highlights Newly Revealed Olmsted Role in Campus Design</h3>

        <a href="#" class="px-0 btn btn-link">Read more<i class="circle fa-solid fa-arrow-right"></i></a>

      </div>
    </div>
  </div>



  <div class="carousel-cell">
  <div class="carousel-cell-content">
    <div class="image-container">
      <img src="/mockups/admission-home/assets/images/news/05-Hohn-Photo-lead.jpg" />
       </div>
    <div class="figcaption">
        <h3 class="h3">GIs and Fräuleins</h3>
      <a href="#" class="px-0 btn btn-link">Read more<i class="circle fa-solid fa-arrow-right"></i></a>

    </div>
  </div>
</div>

<div class="carousel-cell">
<div class="carousel-cell-content">
  <div class="image-container">
    <img src="/mockups/admission-home/assets/images/news/miringoff-22-2x3.jpg" />
     </div>
  <div class="figcaption">
      <h3 class="h3">Students Receive Miringoff Awards for Service to the Community</h3>

    <a href="#" class="px-0 btn btn-link">Read more<i class="circle fa-solid fa-arrow-right"></i></a>
  </div>
</div>
</div>




  </div>


</div>
TMP;
}
