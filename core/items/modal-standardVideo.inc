<?php

/* Note this is just a temp configuration */


function item_modal_standardVideo () {

    return <<<TMP

<script>
    window.addEventListener('DOMContentLoaded',function(){
        new ModalVideo(".js-video-btn");
    });
</script>


TMP;
}
