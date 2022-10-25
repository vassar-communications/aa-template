<script>const alerts = {
    tryLoadAlert() {
      if( alerts.DOMLoaded === true && alerts.getAlertResponse === true){
        const insertElement = document.querySelector("body");
        insertElement.insertAdjacentHTML('beforebegin', alerts.html);
      }
    },
    loadData() {
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          try {
            alerts_json = JSON.parse(xhttp.responseText);
            if(alerts_json[0].title){
              var backhex = alerts_json[0].channel == 2 ? 'B00C12' : '0A50B2';
              var date = new Date(alerts_json[0].pubdate+'Z');
              var df = new Intl.DateTimeFormat('en-us', {
                weekday: 'long',
                month: 'long',
                day: 'numeric',
                timeZone: 'America/New_York'
              });
              var tf = new Intl.DateTimeFormat('en-us', {
                hour: 'numeric',
                minute: 'numeric',
                timeZone: 'America/New_York'
              });
              var buttons = '';
              if ( alerts_json.length >= 2 ) {
                buttons = '<div class="buttons"><a class="btn btn-outline-light" href="/alerts" style="color:#FFF">More Information</a></div>';
              }
              var itemHTML = `<article role="article" class="node--type-alert clearfix" style="background-color:#${backhex}; color:#FFF; overflow:hidden; padding:2rem">
              <div class="content" style="max-width:48rem; margin:0 auto;color:#FFF">
              <h2 style="color:#FFF">${alerts_json[0].title}</h2>
              <p><time datetime="${date.toISOString()}" class="datetime">${df.format(date)}<br />${tf.format(date)}</time></p>
              ${alerts_json[0].body}
              ${buttons}
              </div>
              </article>`.trim();
              alerts.getAlertResponse = true;
              alerts.html = itemHTML;
              alerts.tryLoadAlert ();
            }
          } catch (e) { }
        }
      };
      xhttp.open("GET", "/alerts/rest?_format=json&t="+ Math.floor(new Date()/1000), true);
      xhttp.send();
    },
    tryLoadAlert () {
      if( alerts.DOMLoaded === true && alerts.getAlertResponse === true){
        const insertElement = document.querySelector("body");
        insertElement.insertAdjacentHTML('afterbegin', alerts.html);
      }
    }
   }
   //
    alerts.loadData();
    document.addEventListener("DOMContentLoaded", function(event) {
      alerts.DOMLoaded = true;
      alerts.tryLoadAlert ();
    });</script>
