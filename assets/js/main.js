
// deprecate this one in favor of the new way
/*
var waypoint = new Waypoint({
  element: document.getElementById('number-offset'),
  handler: function(direction) {
//    alert('25px from top')
    $('#number-offset').addClass('showContent');
  },
  offset: -2
})

*/


function makeWaypoints(elements, percentagePoint) {
  var discreteElements = document.getElementsByClassName(elements);
  for (var i = 0; i < discreteElements.length; i++) {
    new Waypoint({
      element: discreteElements[i],
      handler: function( myStringArray ) {
        this.element.classList.add("top-" + percentagePoint + "pfrom-topOfWindow");
      },
      offset: percentagePoint + '%'
    });
  }
}



var discreteElements = document.getElementsByClassName('animate-when-content-appears')
	for (var i = 0; i < discreteElements.length; i++) {
		new Waypoint({
			element: discreteElements[i],
			handler: function() {
				this.element.classList.add("content-appeared");
			},
//			context: document.getElementById('page-content'),
			offset: '80%'
		});
	}



var discreteElements = document.getElementsByClassName('show-image-then-content')
	for (var i = 0; i < discreteElements.length; i++) {
		new Waypoint({
			element: discreteElements[i],
			handler: function() {
				this.element.classList.add("content-appeared");
			},
//			context: document.getElementById('page-content'),
			offset: '-2px'
		});
	}



// For the fixed-centered-title

//  at halfway, the title appears
//  when it hits the top, the title fades and the content appears

  var discreteElements = document.getElementsByClassName('sec-fixedCenteredTitle')
  	for (var i = 0; i < discreteElements.length; i++) {
  		new Waypoint({
  			element: discreteElements[i],
  			handler: function() {
  				this.element.classList.add("show-title");
  			},
  //			context: document.getElementById('page-content'),
  			offset: '40%'
  		});
  	}

    var discreteElements = document.getElementsByClassName('sec-fixedCenteredTitle')
    	for (var i = 0; i < discreteElements.length; i++) {
    		new Waypoint({
    			element: discreteElements[i],
    			handler: function() {
//   				  this.element.classList.remove("show-title");
    				this.element.classList.add("show-content");
    			},
    //			context: document.getElementById('page-content'),
    			offset: '-20%'
    		});
    	}



// End fixed-centered-title




// For the animated dropdown
  // https://css-tricks.com/how-to-animate-the-details-element-using-waapi/

  class Accordion {
    constructor(el) {
      // Store the <details> element
      this.el = el;
      // Store the <summary> element
      this.summary = el.querySelector('summary');
      // Store the <div class="content"> element
      this.content = el.querySelector('.dropdown__content');

      // Store the animation object (so we can cancel it if needed)
      this.animation = null;
      // Store if the element is closing
      this.isClosing = false;
      // Store if the element is expanding
      this.isExpanding = false;
      // Detect user clicks on the summary element
      this.summary.addEventListener('click', (e) => this.onClick(e));
    }

    onClick(e) {
      // Stop default behaviour from the browser
      e.preventDefault();
      // Add an overflow on the <details> to avoid content overflowing
      this.el.style.overflow = 'hidden';
      // Check if the element is being closed or is already closed
      if (this.isClosing || !this.el.open) {
        this.open();
      // Check if the element is being openned or is already open
      } else if (this.isExpanding || this.el.open) {
        this.shrink();
      }
    }

    shrink() {
      // Set the element as "being closed"
      this.isClosing = true;

      // Store the current height of the element
      const startHeight = `${this.el.offsetHeight}px`;
      // Calculate the height of the summary
      const endHeight = `${this.summary.offsetHeight}px`;

      // If there is already an animation running
      if (this.animation) {
        // Cancel the current animation
        this.animation.cancel();
      }

      // Start a WAAPI animation
      this.animation = this.el.animate({
        // Set the keyframes from the startHeight to endHeight
        height: [startHeight, endHeight]
      }, {
        duration: 400,
        easing: 'ease-out'
      });

      // When the animation is complete, call onAnimationFinish()
      this.animation.onfinish = () => this.onAnimationFinish(false);
      // If the animation is cancelled, isClosing variable is set to false
      this.animation.oncancel = () => this.isClosing = false;
    }

    open() {
      // Apply a fixed height on the element
      this.el.style.height = `${this.el.offsetHeight}px`;
      // Force the [open] attribute on the details element
      this.el.open = true;
      // Wait for the next frame to call the expand function
      window.requestAnimationFrame(() => this.expand());
    }

    expand() {
      // Set the element as "being expanding"
      this.isExpanding = true;
      // Get the current fixed height of the element
      const startHeight = `${this.el.offsetHeight}px`;
      // Calculate the open height of the element (summary height + content height)
      const endHeight = `${this.summary.offsetHeight + this.content.offsetHeight}px`;

      // If there is already an animation running
      if (this.animation) {
        // Cancel the current animation
        this.animation.cancel();
      }

      // Start a WAAPI animation
      this.animation = this.el.animate({
        // Set the keyframes from the startHeight to endHeight
        height: [startHeight, endHeight]
      }, {
        duration: 400,
        easing: 'ease-out'
      });
      // When the animation is complete, call onAnimationFinish()
      this.animation.onfinish = () => this.onAnimationFinish(true);
      // If the animation is cancelled, isExpanding variable is set to false
      this.animation.oncancel = () => this.isExpanding = false;
    }

    onAnimationFinish(open) {
      // Set the open attribute based on the parameter
      this.el.open = open;
      // Clear the stored animation
      this.animation = null;
      // Reset isClosing & isExpanding
      this.isClosing = false;
      this.isExpanding = false;
      // Remove the overflow hidden and the fixed height
      this.el.style.height = this.el.style.overflow = '';
    }
  }

  document.querySelectorAll('details.animated-dropdown').forEach((el) => {
    new Accordion(el);
  });






// https://stackoverflow.com/questions/8609170/how-to-wrap-each-word-of-an-element-in-a-span-tag


$( ".sec-wordByWord" ).each(function( index ) {

	var words = $(".section-content p", this).text().split(" ");
	$(".section-content p", this).empty();

	var theSection = $(this);

	$.each(words, function(i, v) {
		$(".section-content p", theSection).append($("<span>").text(v));
	});

  console.log( index + ": " + $( this ).text() );
});


/*
//  This should be combined with the above function. Thing is,
//  I need this working ASAP and I don't want to risk breaking anything

$( ".sec-fixedCenteredTitle" ).each(function( index ) {

	var words = $(".section-title", this).text().split(" ");
	$(".section-title", this).empty();

	var theSection = $(this);

	$.each(words, function(i, v) {
		$(".section-title", theSection).append($("<span>").text(v));
	});

  console.log( index + ": " + $( this ).text() );
});

*/



$(document).ready(function () {
  var waypoints = $('.sec-fixedCenteredTitle .section-content').waypoint(function(direction) {
    if(direction=='down') {
      $(this[0,'element']).parent().addClass('fade-the-title');
    }
    else if(direction=='up') {
      $(this[0,'element']).parent().removeClass('fade-the-title');
    }


  }, {
    offset: '60%'
  });



  $('.card-array .section-content ').masonry({
    // options
    itemSelector: '.card'
  //  columnWidth: 200
  });

  $('.layout-masonry').masonry({
    // options
    itemSelector: '.masonry-item',
    columnWidth: '.grid-sizer',
    percentPosition: true,
    gutter: 10

  });

  const iframe = document.getElementById("main-video");
  iframe.addEventListener("load", function () {
//    alert("Finish");
    $('.video-header').removeClass('is-loading').addClass('is-loaded');
  });
});
