<?php


function tickerItem($title, $image) {
  return <<<TMP

  <div class="carousel-cell">
    <div class="carousel-cell-content">
      <div class="image-container">
        <img src="/mockups/advancement-home/assets/images/in-the-media/$image" />
      </div>
      <div class="figcaption">
        <p>$title</p>
      </div>
    </div>
  </div>

TMP;
}

function thumbnailTextTicker() {
  return <<<TMP

  <div class='thumbnail-text-ticker' id='gallery2' data-flickity='{ "fade": true, "wrapAround": true, "autoPlay": 6000, "cellAlign": "center", "contain": true }'>

    <div class="carousel-cell">
      <div class="carousel-cell-content">
        <div class="image-container">
          <img src="https://images.unsplash.com/photo-1620165476214-630ed1d3fec6?ixid=MnwxMjA3fDF8MHxlZGl0b3JpYWwtZmVlZHwzMHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60" />
        </div>
        <div class="figcaption">

          <p>Vassar College’s 158th Commencement was the subject of a Hudson Valley Press story.</p>
        </div>
      </div>
    </div>

      <div class="carousel-cell">
      <div class="carousel-cell-content">
        <div class="image-container">
          <img src="https://images.unsplash.com/photo-1620165476214-630ed1d3fec6?ixid=MnwxMjA3fDF8MHxlZGl0b3JpYWwtZmVlZHwzMHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60" />
        </div>
        <div class="figcaption">
          <p>New York Stage & Film’s 2022 Summer Season, in partnership with Vassar, was the subject of a Chronogram story.</p>
        </div>
      </div>
    </div>

        <div class="carousel-cell">
      <div class="carousel-cell-content">
        <div class="image-container">
          <img src="https://images.unsplash.com/photo-1620165476214-630ed1d3fec6?ixid=MnwxMjA3fDF8MHxlZGl0b3JpYWwtZmVlZHwzMHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60" />
        </div>
        <div class="figcaption">
          <p>President Elizabeth Bradley co-wrote a Journal of the American Medical Association article comparing cancer-related spending and mortality rates in the U.S. versus 21 other high-income countries, which was also featured in UPI and News Azi.</p>
        </div>
      </div>
    </div>

    </div>

TMP;
}
