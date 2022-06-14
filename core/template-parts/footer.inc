<?php


function site_footer() {
    global $project_paths;
    $template = <<<TMP

<div class="section text-light theme-dark-burgundy py-3">
  <footer class="container">

    <div class="d-flex justify-content-between py-2 my-2">
      <p class="text-white">© Vassar College</p>
      <ul class="list-unstyled d-flex">
       <li class="ms-3"><a class="text-light" href="https://www.facebook.com/vassarcollege/"><i class="fa-brands fa-facebook-square"></i></a></li>
        <li class="ms-3"><a class="text-light" href="https://twitter.com/vassar/"><i class="fa-brands fa-twitter"></i></a></li>
        <li class="ms-3"><a class="text-light" href="https://www.instagram.com/vassarcollege/"><i class="fa-brands fa-instagram"></i></a></li>
        <li class="ms-3"><a class="text-light" href="https://www.linkedin.com/school/vassar-college/"><i class="fa-brands fa-linkedin"></i></a></li>
      <li class="ms-3"><a class="text-light" href="https://www.youtube.com/user/Vassar"><i class="fa-brands fa-youtube"></i></a></li>
     <li class="ms-3"><a class="text-light" href="https://www.flickr.com/photos/vassarcollegemedia/"><i class="fa-brands fa-flickr"></i></a></li>
     <li class="ms-3"><a class="text-light" href="https://vm.tiktok.com/ZMeYAnWtP/"><i class="fa-brands fa-tiktok"></i></a></li>
    </ul>
    </div>
  </footer>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.min.js"></script>
<script src="{$project_paths['public_path']}/assets/js/libraries/masonry.pkgd.min.js"></script>
<!--
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/noframework.waypoints.min.js"></script>
-->

<!-- https://trvswgnr.github.io/bs5-lightbox/#videos-gallery
<script src="https://cdn.jsdelivr.net/npm/bs5-lightbox@1.8.0/dist/index.bundle.min.js"></script> -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>
<script src="{$project_paths['public_path']}/assets/js/main.js"></script>
</body>
</html>
TMP;

    return $template;

}
