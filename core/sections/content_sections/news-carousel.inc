<style>

.featureImage-text-ticker .carousel-cell {
    height: 100%;
    margin-right: 1em;
    width: 40rem !important;
}
.news-intro {
  text-align: center;
  margin-bottom: 4rem;
}

</style>


<?php

function newsCarousel() {
  return <<<TMP
<div class="section section--carousel theme-charcoal">

<p class="section-intro-text news-intro" style="">What happens around here</p>

<div class="featureImage-text-ticker fade-nonselected full" id="gallery">

  <div class="carousel-cell">
    <div class="carousel-cell-content">
      <div class="image-container">
        <img src="https://vassar.edu/sites/default/files/styles/news_square_small/public/2022-06/aavc-awards-2206-1x1-edit1.jpg" />
      </div>
       <div class="figcaption pt-5">
        <h3 class="h3">Five Alumni Selected for 2022 AAVC Awards</h3>
          <a href="#" class="px-0 btn btn-link">Read more<i class="circle fa-solid fa-arrow-right"></i></a>
      </div>
    </div>
  </div>

    <div class="carousel-cell">
    <div class="carousel-cell-content">
      <div class="image-container">
        <img src="https://vassar.edu/sites/default/files/styles/news_square_small/public/2022-06/ada-ferrer-edit1-1x1.jpg?itok=D0QaD5He" />
         </div>
      <div class="figcaption pt-5">
          <h3 class="h3">Ada Ferrer ’84 Wins 2022 Pulitzer Prize in History</h3>

        <a href="#" class="px-0 btn btn-link">Read more<i class="circle fa-solid fa-arrow-right"></i></a>

      </div>
    </div>
  </div>




      <div class="carousel-cell">
    <div class="carousel-cell-content">
      <div class="image-container">
             <img src="https://vassar.edu/sites/default/files/styles/news_square_small/public/2022-06/olmsted-story-lead-1x1.jpg?itok=huX6LxVA" />
          </div>
 <div class="figcaption pt-5">
           <h3 class="h3">Exhibit Highlights Newly Revealed Olmsted Role in Campus Design</h3>

        <a href="#" class="px-0 btn btn-link">Read more<i class="circle fa-solid fa-arrow-right"></i></a>

      </div>
    </div>
  </div>



  <div class="carousel-cell">
  <div class="carousel-cell-content">
    <div class="image-container">
      <img src="https://vassar.edu/sites/default/files/styles/news_square_small/public/2022-06/05-Hohn-Photo-lead-1x1.jpg?itok=UoHBVY8v" />
       </div>
    <div class="figcaption pt-5">
        <h3 class="h3">GIs and Fräuleins</h3>

      <a href="#" class="px-0 btn btn-link">Read more<i class="circle fa-solid fa-arrow-right"></i></a>

    </div>
  </div>
</div>



<div class="carousel-cell">
<div class="carousel-cell-content">
  <div class="image-container">
    <img src="https://vassar.edu/sites/default/files/styles/news_square_small/public/2022-05/miringoff-22-1x1.jpg?itok=7iTwHN1D" />
     </div>
  <div class="figcaption pt-5">
      <h3 class="h3">Students Receive Miringoff Awards for Service to the Community</h3>

    <a href="#" class="px-0 btn btn-link">Read more<i class="circle fa-solid fa-arrow-right"></i></a>

  </div>
</div>
</div>




  </div>


</div>
TMP;
}
