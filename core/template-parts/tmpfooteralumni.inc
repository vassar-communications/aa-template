<?php


function site_footeralumni() {
    global $project_paths;
    $template = <<<TMP


<div class="section text-light theme-dark-burgundy py-3">
<footer class="footer container">


<div class="button-bar">
  <ul id="block-fixedalumsmyaccountdirectory">
    <li>
      <a href="https://connect.vassar.edu/s/1654/alumni/index.aspx?sid=1654&amp;gid=2&amp;pgid=95&amp;cid=271" class="btn btn-primary">My Account</a>
    </li>
    <li>
      <a href="https://connect.vassar.edu/s/1654/2/16/interior-ai.aspx?sid=1654&amp;gid=2&amp;pgid=6&amp;cid=41#/Search/Simple" class="btn btn-primary">Alumni Directory</a>
    </li>
  </ul>
</div>


		<div class="row row-cols-4">
			<div class="col-9 mt-5">
			<a class="logo" href="https://vassar.edu"><svg class="mb-3" aria-labelledby="vassar-title" role="img" width="100" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2002 396"><title id="vassar-title">Vassar</title><path d="M379 32a104 104 0 0 1 22-17l-1-6-56 1-69-1-1 6c7 3 16 8 22 16 6 9 13 21 13 43 0 31-14 74-44 136l-49 108h-1c-20-49-44-101-67-153l-30-69c-7-19-12-34-13-46 3-18 18-30 35-35l-1-6-71 1L1 9l-1 7c22 6 41 31 55 58a4241 4241 0 0 1 142 322h7l23-63 53-117c33-73 56-122 72-148 9-14 17-26 27-36zM493 0l-7 1-24 64-52 116c-31 69-56 122-74 152-8 14-16 24-25 33-9 8-15 13-22 16l1 6 51-1 74 1v-6c-7-3-16-7-22-15-8-9-14-20-14-41 0-20 8-49 20-78l73-1 78 1 22 54c7 18 13 34 13 47-2 17-18 28-34 33v6l67-1 38 1c-4-13-89-209-116-271L493 0zm-21 232l-67-1 19-44 50-111h1l67 154c-21 2-45 2-70 2zM819 183c-28-14-54-26-69-42a66 66 0 0 1-19-49c0-44 33-70 68-77 20 3 41 14 61 33a209 209 0 0 1 43 59l7-1c-3-31-5-69-9-89-22-7-56-14-95-14-34 0-64 9-87 28a95 95 0 0 0-34 77c0 31 13 53 29 69 18 20 45 32 75 48s59 31 73 49a54 54 0 0 1 12 34c0 39-33 66-74 73-20-4-43-12-69-33-19-17-38-39-49-63l-17 4c0 1 29 73 41 99 24 2 58 6 85 6 43 0 77-13 98-32 22-19 31-42 31-69 0-57-48-84-101-110zM2000 378a60 60 0 0 1-10 1c-19-5-53-27-78-53-33-36-68-84-89-122 41-16 79-51 79-102 0-32-13-54-37-71-28-18-61-22-106-22l-87 1-76-1-1 6c8 1 19 4 26 8a57 57 0 0 1 22 23c7 12 10 29 11 55l2 100v24l-2 69c-1 28-4 47-14 62l-1 1c-12 18-39 19-54 2-9-10-17-22-24-35A3434 3434 0 0 1 1419 0l-7 1-24 64-52 116c-31 69-55 122-73 152-9 14-16 24-26 33-8 8-15 13-21 16v6l51-1 74 1 1-6c-8-3-16-7-23-15-7-9-14-20-14-41 0-20 9-49 21-78l72-1 78 1 23 54c6 18 12 34 13 47-3 17-19 28-35 33l1 6 67-1h132l89 1v-7c-12-2-25-6-37-15-14-12-23-26-25-57-2-26-3-57-3-86v-15l71 2c27 50 55 96 88 134 14 16 27 26 42 35s33 12 53 12a176 176 0 0 0 47-7zm-602-146l-66-1 18-44 50-111h2l66 154c-21 2-45 2-70 2zm392-35c-32 0-67-3-89-8v-11c0-52 1-110 6-154a265 265 0 0 1 40-3c31 2 55 9 76 28 17 16 27 38 27 65 0 33-10 62-36 82l-24 1zM1113 183c-28-14-54-26-69-42a66 66 0 0 1-19-49c0-44 33-70 68-77 20 3 41 14 61 33a209 209 0 0 1 43 59l7-1c-3-31-5-69-9-89-22-7-56-14-95-14-34 0-64 9-87 28a95 95 0 0 0-34 77c0 31 13 53 29 69 18 20 45 32 75 48s59 31 73 49a54 54 0 0 1 12 34c0 39-33 66-74 73-20-4-43-12-69-33-19-17-38-39-48-63l-18 4c0 1 29 73 41 99 24 2 58 6 85 6 43 0 77-13 98-32 22-19 31-42 31-69 0-57-48-84-101-110z"></path><image alt="Vassar" src="{$project_paths['public_path']}/assets/images/vassar-logo.png" width="402" height="80"></image></svg></a>

				<div class="pt-3"><a href="https://www.google.com/maps/place/Alumnae+House/@41.6908124,-73.9020119,19.45z/data=!4m8!3m7!1s0x89dd3e5703778887:0xf94de484d4157d23!5m2!4m1!1i2!8m2!3d41.6909832!4d-73.9016665"><i class="px-1 fa-solid fa-location-dot"></i> 161 College Avenue, Box 14, Poughkeepsie, New York 12603</a></div>

				<div class="pt-2 link_collection d-flex flex-column flex-md-row">
				<a href="{$project_paths['final_url']}/admission/visit" class="me-3 my-2">plan a visit <i class="px-1 fa-solid fa-circle-arrow-right"></i></a>
					<a href="https://www.vassar.edu/news" class="me-3 my-2">news <i class="px-1 fa-solid fa-circle-arrow-right"></i></a>
					<a href="{$project_paths['final_url']}/admission/connect" class="me-3 my-2">contact us <i class="px-1 fa-solid fa-circle-arrow-right"></i></a>
				</div>

				<hr class="mt-4 w-75">

				<div class="pt-2 link_collection d-flex flex-column flex-md-row">
					<a href="https://www.vassar.edu/about" class="me-3 my-2">about <i class="px-1 fa-solid fa-circle-arrow-right"></i></a>
					<a href="https://www.vassar.edu/academics" class="me-3 my-2">academics <i class="px-1 fa-solid fa-circle-arrow-right"></i></a>
					<a href="{$project_paths['final_url']}/admission" class="me-3 my-2">admission <i class="px-1 fa-solid fa-circle-arrow-right"></i></a>

					<a href="https://www.vassar.edu/campuslife" class="me-3 my-2">campus life <i class="px-1 fa-solid fa-circle-arrow-right"></i></a>

					<a href="https://offices.vassar.edu/security/statistics/" class="me-3 my-2">Annual Fire Safety & Security Report <i class="px-1 fa-solid fa-circle-arrow-right"></i></a>
						<a href="https://offices.vassar.edu/eoaa/" class="me-3 my-2">Title IX <i class="px-1 fa-solid fa-circle-arrow-right"></i></a>

					<!--<a href="#" class="me-3">community <i class="px-1 fa-solid fa-circle-arrow-right"></i></a>-->
					<!-- <a href="#" class="me-3">full sitemap <i class="px-1 fa-solid fa-circle-arrow-right"></i></a> -->
				</div>
			</div>




			<div class="footer-feature-module col-12 col-md-3 knockedout bg-darkestburgundy p-4">
<!--				<div><span class="tagline mb-2">Give to Vassar</span></div> -->
				<img src="/alumni/assets/img/alumni-home/0038-22-06-cs-reunion-vassar-002.jpg" />
				  <a href="https://go.vassar.edu/give" class="donate-btn px-0 mt-4 btn btn-link arrow">Make a Gift</a>

</div>
		</div> <!-- row -->





</footer>
</div>
<div class="section text-light  theme-dark-burgundy  bg-darkestburgundy py-3">
<footer class="container footer" style="padding-bottom: 6rem !important;">
		<div class="row flex-column flex-md-row align-items-end py-3">
			<div class="col text-start mb-3 mb-lg-0">
				&copy; 2022 Vassar College

			</div>

			<div class="col text-start link_collection">
				<a class="me-3" href="https://www.facebook.com/vassarcollege/"><i class="fa-brands fa-facebook"></i></a>
				<a class="me-3" href="https://twitter.com/vassar/"><i class="fa-brands fa-twitter"></i></a>
				<a class="me-3" href="https://www.instagram.com/vassarcollege/"><i class="fa-brands fa-instagram"></i></a>
				<a class="me-3" href="https://www.linkedin.com/edu/school?id=19077"><i class="fa-brands fa-linkedin"></i></a>
				<a class="me-3" href="https://www.youtube.com/vassar/"><i class="fa-brands fa-youtube"></i></a>
				<a class="me-3" href="https://www.flickr.com/photos/vassarcollegemedia/"><i class="fa-brands fa-flickr"></i></a>
				<a class="me-3" href="https://vm.tiktok.com/ZMeYAnWtP/"><i class="fa-brands fa-tiktok"></i></a>
				<a href="https://www.vassar.edu/social-media">Social Media Directory <i class="px-1 fa-solid fa-circle-arrow-right"></i></a>
			</div>
		</div> <!-- row -->
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
