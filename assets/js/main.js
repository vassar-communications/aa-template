
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
