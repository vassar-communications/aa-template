<?php

function newsCarousel() {
  return <<<TMP
<div class="section section--carousel">

<div class="carousel fade-nonselected full" id="gallery">

  <div class="carousel-cell">
    <div class="carousel-cell-content">
      <div class="image-container">
        <img src="https://vassartest.chuckyatsuk.com/img/news1.jpeg" />
      </div>
      <div class="figcaption">
        <h3 class="h3">Student Earns Goldwater Scholarship for Water Pollution Research</h3>
        <p>The Goldwater Foundation has awarded a graduate school scholarship to Abigail Whittington ’23 for her research on water pollution.</p>
      <a href="#" class="btn btn-link">Read More</a>
      </div>
    </div>
  </div>

    <div class="carousel-cell">
    <div class="carousel-cell-content">
      <div class="image-container">
        <img src="https://vassartest.chuckyatsuk.com/img/news1.jpeg" />
         </div>
      <div class="figcaption">
        <h3>A title</h3>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
      </div>
    </div>
  </div>

      <div class="carousel-cell">
    <div class="carousel-cell-content">
      <div class="image-container">
       <img src="https://vassartest.chuckyatsuk.com/img/news1.jpeg" />
      </div>
      <div class="figcaption">
        <h3>A title</h3>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
      </div>
    </div>
  </div>

  </div>


</div>
TMP;
}
