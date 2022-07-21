<!-- Note this is just a temp configuration -->

<?php

function item_modal_standardVideo () {

    return <<<TMP
        
<div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-body p-0">
                <button type="button" class="position-fixed top-0 end-0 p-4 btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="ratio ratio-16x9">
                    <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>



TMP;
}
