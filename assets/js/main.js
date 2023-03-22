/*
$(document).ready(function () {
    $('details').on('click', function () {
        $(this).toggleClass('open');
    });
});
*/



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
            this.element.classList.add("show-content");
        },
        //			context: document.getElementById('page-content'),
        offset: '-40%'
    });
}

if ($('#top').length) {
	var waypoint = new Waypoint({
		element: document.getElementById('top'),
		handler: function(direction) {
			if(direction=='down') {
				$( 'html' ).addClass('show-top-link');
			}
			else if(direction=='up') {
				$( 'html' ).removeClass('show-top-link');
			}
		},
		offset: '50%'
	})
}

var discreteElements = document.getElementsByClassName('sec-fixedCenteredTitleMasthead')
for (var i = 0; i < discreteElements.length; i++) {
    new Waypoint({
        element: discreteElements[i],
        handler: function(direction) {
            if(direction=='down') {
                this.element.classList.remove("show-title");
                this.element.classList.add("hide-title");
            }
            else if(direction=='up') {
                this.element.classList.add("show-title");
                this.element.classList.remove("hide-title");
            }
        },

        offset: '-2px'
    });
}

var discreteElements = document.getElementsByClassName('sec-fixedCenteredTitleMasthead')
for (var i = 0; i < discreteElements.length; i++) {
    new Waypoint({
        element: discreteElements[i],
        handler: function(direction) {
            if(direction=='down') {
                this.element.classList.add("show-content");
            }
            else if(direction=='up') {
                this.element.classList.remove("show-content");
            }
        },
        offset: '-40%'
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
        $(".section-content p", theSection).append($("<span>").html(v + '&nbsp;'));
    });

    console.log( index + ": " + $( this ).text() );
});




$( ".split-words-container" ).each(function( index ) {

    var words = $(".split-words-content p", this).text().split(" ");
    $(".split-words-content p", this).empty();

    var theSection = $(this);

    $.each(words, function(i, v) {
        $(".split-words-content p", theSection).append($("<span>").html(v + '&nbsp;'));
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

	$( 'html' ).removeClass( 'no-js' ).addClass( 'js' );

    $('.sec-fixedCenteredTitleMasthead').addClass('show-title');

    var waypoints = $('.sec-fixedCenteredTitle .section-content').waypoint(function(direction) {
        if(direction=='down') {
            $(this[0,'element']).parent().addClass('fade-the-title');
        }
        else if(direction=='up') {
            $(this[0,'element']).parent().removeClass('fade-the-title');
        }
    }, {
        offset: '66%'
    });


	/* CS 20230313
    const iframe = document.getElementById("main-video");

    if (iframe) {
        iframe.addEventListener("load", function () {
            $('.video-header').removeClass('is-loading').addClass('is-loaded');
        });
    }

    // note that this only applies to the video headers on the Admission
    // and Alums homepages. I wasn't hiding the video headers on subpages.
	*/


});



/* local.js */

if ($('.featureImage-text-ticker').length) {
    $('.featureImage-text-ticker').flickity({
        // options
//    cellAlign: 'left',
        contain: true,
// groupCells: true,
//freeScroll: true,
        selectedAttraction: 0.009,
        friction: 0.2,
        pageDots:  false,
        autoPlay: 7400,
        wrapAround: true,
        watchCSS: true
    });
}

if ($('.invitation-style-carousel').length) {
    $('.invitation-style-carousel').flickity({
		groupCells: true,
        wrapAround: true,
		watchCSS: true,
	    cellAlign: 'left',
    });
}



$( window ).resize(function() {
    $( ".featureImage-text-ticker" ).each(function( index ) {
//    $( this ).height( $( this ).find(".carousel-cell-content").height() );
    });
});



/*	IN THE MEDIA TICKER
	=================== */

/*
if ($('.thumbnail-text-ticker').length) {
  $('.thumbnail-text-ticker').flickity({
    // options
    cellAlign: 'left',
    contain: true,
groupCells: true,
//    autoPlay: 1500,
    wrapAround: true
  });
}
*/



$( window ).resize(function() {
    $( ".thumbnail-text-ticker" ).each(function( index ) {
//    $( this ).height( $( this ).find(".carousel-cell-content").height() );
    });
});



/* Custom Button to  Pause Background Videos  */


$('#pause_button').on('click', function() {


    var video  = $('#main-video');
    var player = new Vimeo.Player(video);

    player.pause();
    $('#play_pause').addClass("paused");
});

$('#play_button').on('click', function() {

    var video  = $('#main-video');
    var player = new Vimeo.Player(video);

    player.play();
    $('#play_pause').removeClass("paused");
});



/*	add active class to current page
	=================== */

jQuery(function($) {
    var path = window.location.href;
    $('nav ul a').each(function() {
        if (this.href === path) {
            $(this).addClass('active');
        }
    });
});



// these guys just don't get it

var is_ios = !!navigator.platform && /iPad|iPhone|iPod/.test(navigator.platform);
if(is_ios) {
  $('html').addClass('is-ios');
}

var is_safari = navigator.userAgent.indexOf("Safari") > -1;
if(is_safari) {
  $('html').addClass('is-safari');
}

var is_firefox = navigator.userAgent.toLowerCase().indexOf('firefox') > -1;
if(is_firefox) {
  $('html').addClass('is-ff');
}






$(document).ready(function() {

// Gets the video src from the data-src on each button

    var $videoSrc;
    $('.video-btn').click(function() {
        $videoSrc = $(this).data( "src" );
    });
    console.log($videoSrc);


    $('#videoModal').on('shown.bs.modal', function (e) {

       $("#video").attr('src',$videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0" );

    })

// stop playing the youtube video when I close the modal
    $('#videoModal').on('hide.bs.modal', function (e) {
        // a poor man's stop video
        $("#video").attr('src','');
    })

    
// document ready
});


/*	esc key hides video modal
	=================== */

var elem = ".modal-video";

$( document ).on( 'keydown', function ( e ) {
    if ( e.keyCode === 27 ) { // ESC
        $( elem ).remove();
    }
});



/*	ALUMS CALENDAR FEED
	by Morgan
	=================== */



 function getFeedItemLimit() {
 	if( $("#alumnicalendarRSS_target").length ) {

		var attr = $("#alumnicalendarRSS_target").attr('data-item-limit');

		if (typeof attr !== 'undefined' && attr !== false) {
	 		return (attr - 1);
	 		// this will be used in a loop where the first item is 0
	 		// so the attribute value needs to be one less
		}
		else {
			return 1000;
		}
 	}
 	else return null;
 }


 function strToDate(eventDate){
      const EventDTArr = eventDate.split(" ");
      var EventDate = EventDTArr[0];
      var EventTime = EventDTArr[1]
      const EventTimeArr = EventTime.split(":");
      var Hours = parseInt(EventTimeArr[0]);
      var Minutes = parseInt(EventTimeArr[1]);
      var EventTimeAMPM = EventDTArr[2]
      EventDate = EventDate.replace(/(^[\d]{1}\/)/i, '0$1');
      EventDate = EventDate.replace(/\/([\d]{1})\//i, '/0$1/');
      EventDate = EventDate.replace(/^([\d]{2})\/([\d]{2})\/([\d]{4})/i, '$3-$1-$2');
      if(Hours == 12) Hours = 0;
      if(EventTimeAMPM == 'PM') Hours = Hours + 12;
      if(Hours < 10) Hours = '0'+Hours;
      if(Minutes < 10) Minutes = '0'+Minutes;
      var timeStr = 'T'+Hours+':'+Minutes+':00';
      const date = new Date(EventDate+timeStr);
      return date;
    }

    function parseRSS(urlIN, callback) {
		getFeedItemLimit();

      $.ajax({
        url: urlIN,
        dataType: 'xml',
        success: function (data) {
          console.log("Success");
          console.log(data);
          //callback(data);
          markup = '';
          $(data).find("item").each(function(i, item){
            const el = $(this);
            var title = el.find("title").text();
            var description = el.find("description").text();
            description = description.replace(/(.*[\d]{1,2}:[\d]{2}[\s]+(?:a|p)\.?m\.?[\s]+)/i, '<span class="visually-hidden">$1</span>');
            var link = el.find("link").text();
            var image = el.find("enclosure").attr("url");
            const start_date = strToDate(el.find("EventDate").text());
            const end_date = strToDate(el.find("EndEventDate").text());
            var start_month_str = start_date.toLocaleString('en-US', {month: 'short'});
            var start_day_str = start_date.getDate();
            var end_month_str = end_date.toLocaleString('en-US', {month: 'short'});
            var end_day_str = end_date.getDate();
            if( (start_month_str == end_month_str) && (start_day_str == end_day_str) ){
              var start_time = start_date.toLocaleTimeString('en-us', { hour: 'numeric',minute: '2-digit'}) ;
              var end_time = end_date.toLocaleTimeString('en-us', { hour: 'numeric',minute: '2-digit'}) ;
              if( start_time == end_time){
                var event_time = start_time;
              }else{
                var event_time = start_time +'–'+ end_time;
              }
            }else{
              var event_time = start_date.toLocaleDateString('en-us', { month:"short", day:"numeric", year:"numeric", time:"numeric", hour: 'numeric',minute: '2-digit'}) +' to '+end_date.toLocaleDateString('en-us', { month:"short", day:"numeric", year:"numeric", time:"numeric", hour: 'numeric',minute: '2-digit'}) ;
            }
            event_time = event_time.replace(/AM/gi,'a.m.').replace(/PM/gi,'p.m.');
            var itemMarkup = `
            <div class="event" id="">
  <div class="calendar">
    <div class="event__month">${start_month_str}</div>
    <div class="event__day">${start_day_str}</div>
  </div>
  <div class="event__image-container"><img class="event__image" src="${image}"></div>
  <div class="event__content-container">
  <a class="stretched-link" href="${link}">  <h3 class="event__title">${title}</h3></a>
    <div class="event__time">
      <i class="fa-regular fa-clock"></i> <span>${event_time}</span>
    </div>
    <div class="event__summary"><p>${description}</p></div>
  </div>
</div>
`.trim();
            markup += itemMarkup;

		return i < getFeedItemLimit();

          }); // end each
          if (markup.length !== 0) {
//            markup = '<div class="featureImage-text-ticker media-carousel full">' + markup + '</div>';
            $('#alumnicalendarRSS_target').replaceWith(markup);
          }
        },
      });
    }
    parseRSS('https://connect.vassar.edu/controls/cms_v2/components/rss/rss.aspx?sid=1654&gid=2&calcid=8471&page_id=5161');













