<script>
  function parseRSS(urlIN, callback) {
    $.ajax({
      url: urlIN,
      dataType: 'json',
      success: function (data) {
        markup = '';
        for (let i = 0; i < 4; i++) {
        
          if (!(i < 4)) {
            break;
          }
        
          var itemPath = data[i]['override_url'] ? data[i]['override_url'] : data[i]['path'];
          var itemMarkup = `
    <div class="carousel-cell is-link">
      <div class="carousel-cell-content">
       <div class="image-container">
          <img src="${data[i]['image_16_9_l']}" alt="" />
       </div>
       <div class="figcaption pt-4 listen">
          <h3>
             <a href="${itemPath}" class="stretched-link"><span class="field field--name-title field--type-string field--label-hidden">${data[i]['title']}</span>
             </a>
          </h3>
          ${data[i]['summary']}
          <p>Read more <i class="fa-solid fa-arrow-right"></i></p>
       </div>
    </div>
   </div>
`.trim();
          markup += itemMarkup;
        }
        if (markup.length !== 0) {
          markup = '<div class="featureImage-text-ticker media-carousel full">' + markup + '</div>';
          $('#newsRSS_target').replaceWith(markup);
//Coped from https://github.com/vassar-communications/aa-template/blob/main/assets/js/main.js, Line 377
          $('.featureImage-text-ticker').flickity({
            contain: true,
            selectedAttraction: 0.009,
            friction: 0.2,
            pageDots: false,
            autoPlay: 7400,
            wrapAround: true,
            watchCSS: true
          });
        }
      }
    });
  }
  parseRSS('https://www.vassar.edu/news/rest/621?img_req=1');
</script>

  <div id="newsRSS_target">
    <p>News could not be loaded. Please make sure JavaScript is enabled in your browser.</p>
  </div>