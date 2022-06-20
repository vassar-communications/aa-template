<?php

function newsCarousel() {
  return <<<TMP
<div class="section section--carousel theme-charcoal">

<div class="featureImage-text-ticker fade-nonselected full" id="gallery">

  <div class="carousel-cell">
    <div class="carousel-cell-content">
      <div class="image-container">
        <img src="https://vassartest.chuckyatsuk.com/img/news1.jpeg" />
      </div>
       <div class="figcaption pt-5">
        <h3 class="h3">Student Earns Goldwater Scholarship for Water Pollution Research</h3>
        <p>The Goldwater Foundation has awarded a graduate school scholarship to Abigail Whittington ’23 for her research on water pollution.</p>
          <a href="#" class="px-0 btn btn-link">Read more<i class="circle fa-solid fa-arrow-right"></i></a>
      </div>
    </div>
  </div>

    <div class="carousel-cell">
    <div class="carousel-cell-content">
      <div class="image-container">
        <img src="https://vassartest.chuckyatsuk.com/img/news-2.jpeg" />
         </div>
      <div class="figcaption pt-5">
          <h3 class="h3">Vassar’s New Labyrinth Offers a Space for Contemplation</h3>
        <p>Thanks to a gift from Mary Hyde Ottoway ’59 and her husband, James, a labyrinth, a component of contemplation practices for centuries, has been built outside Pratt House.</p>
        <a href="#" class="px-0 btn btn-link">Read more<i class="circle fa-solid fa-arrow-right"></i></a>

      </div>
    </div>
  </div>

      <div class="carousel-cell">
    <div class="carousel-cell-content">
      <div class="image-container">
             <img src="https://vassartest.chuckyatsuk.com/img/news-3.jpg" />
          </div>
 <div class="figcaption pt-5">
           <h3 class="h3">Campus Groups Honor Food Service Women</h3>
        <p>Every year, a group of campus organizations honors women who’ve made a significant contribution to the Vassar community. The “She Is” celebration this year will honor the 72 women who work in food service on campus.</p>
        <a href="#" class="px-0 btn btn-link">Read more<i class="circle fa-solid fa-arrow-right"></i></a>

      </div>
    </div>
  </div>

  </div>


</div>
TMP;
}
