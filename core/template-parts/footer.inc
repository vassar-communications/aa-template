<?php


function site_footer() {
  global $project_paths;
  $template = <<<TMP
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/noframework.waypoints.min.js"></script>
<script src="{$project_paths['public_path']}/assets/js/main.js"></script>
</body>
</html>'
TMP;

  return $template;

}
