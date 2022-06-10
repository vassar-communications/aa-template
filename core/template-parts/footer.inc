<?php


function site_footer() {
    global $project_paths;
    $template = <<<TMP


  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.min.js"></script>

<script src="/assets/js/libraries/masonry.pkgd.min.js"></script>

<!--
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/noframework.waypoints.min.js"></script>
-->

<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>


<script src="/assets/js/main.js"></script>
</body>
</html>
TMP;

    return $template;

}