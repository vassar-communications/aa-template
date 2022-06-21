<?php




/**
 * sec_buffer()
 * Spacefiller section for testing scroll-in animations
 *
 * @see https://codepen.io/csilverman/pen/popMVyL
 * @link https://docs.google.com/document/d/10cN3CBi-jaEj5DT_8HQSA3VcsiM2mQ1F2lWxE1yMeSI/edit#heading=h.q3v10639vhm8
 * @param  boolean $extras - Reserved for future use
 * @return string - The rendered HTML markup
 */
function sec_eventListing( $extras = false ) {
  return <<<TMP


  <div class="event-listing">
    <div class="events">
      <div class="event">
        <div class="calendar">
          <div class="event__month">Jun </div>
          <div class="event__day">13</div>
        </div>
        <div class="event__image-container"><img class="event__image" src="https://connect.vassar.edu/s/1654/images/content_images/National_Mall_Square_637889822088889778.jpg"/></div>
        <div class="event__content-container">
          <h3 class="event__title">VCDC’s Meet Me on the Mall 2022</h3>
          <div class="event__summary">
            <p>VCDC's second annual Meet Me on the Mall to celebrate summer! Join us on the National Mall in front of the carousel for a picnic with your Vassar family.</p>
          </div>
        </div>
      </div>
      <div class="event">
        <div class="calendar">
          <div class="event__month">Jun </div>
          <div class="event__day">13</div>
        </div>
        <div class="event__image-container"><img class="event__image" src="https://connect.vassar.edu/s/1654/images/content_images/VCDC_Clock_SQUARE_637907148377670397.jpg"/></div>
        <div class="event__content-container">
          <h3 class="event__title">VCDC Presents Financial Planning 101: The who, what, why, when, and how?</h3>
          <div class="event__summary">
            <p>Whether you're thinking about retirement options, debating if you can afford a vacation house, or wondering if you will be able to retire—how long will your money last? This is what financial planning is all about. Join us!</p>
          </div>
        </div>
      </div>
      <div class="event">
        <div class="calendar">
          <div class="event__month">Jun </div>
          <div class="event__day">13</div>
        </div>
        <div class="event__image-container"><img class="event__image" src="https://connect.vassar.edu/s/1654/images/content_images/1968_nh_637868332003532534.jpg"/></div>
        <div class="event__content-container">
          <h3 class="event__title">Class of 1968 Mini-reunion in New Hampshire</h3>
          <div class="event__summary">
            <p>Join us for a fun mini-reunion in New Hampshire at Judith Putzel's Lake House!</p>
          </div>
        </div>
      </div>
    </div>

    <div class="text-center mt-5">
      <a href="" class="cta-link">All events</a>
    </div>

  </div>
TMP;
}
