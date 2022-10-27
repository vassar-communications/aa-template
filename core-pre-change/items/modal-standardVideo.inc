<?php

/* Note this is just a temp configuration */


function item_modal_standardVideo () {

    return <<<TMP

<!-- Modal -->
<div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      
      <div class="modal-body">
       <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></span>
        </button>        
        <!-- 16:9 aspect ratio -->
<div class="ratio ratio-16x9">
  <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
</div>
        
        
      </div>

    </div>
  </div>
</div> 
  
  
  
</div>

TMP;
}
