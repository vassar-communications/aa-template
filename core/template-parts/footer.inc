<?php


function site_footer() {
  global $project_paths;
  $template = <<<TMP

<div class="section theme-charcoal">
<div class="container">
  <footer class="py-5">
    <div class="row d-flex">
      <div class="col-2">
        <h5>About</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">Annual Fire Safety & Security Report</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">Accessibility</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">Facts</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">Location & Maps</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">Offices</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">President</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">Sustainability</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">Title IX</a></li>
        </ul>
      </div>

      <div class="col-2">
        <h5>Academics</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">Catalogue</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">Community-Engaged Learning</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">Departments</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">Faculty</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">Libraries</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">Majors & Minors</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">Research</a></li>
        </ul>
      </div>

      <div class="col-2">
        <h5>Admission</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">Apply/Deadlines</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">Diversity Outreach</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">Financial Aid</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">Plan a Visit</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">Request Information</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">Student Consumer Information</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">Tuition & Fees</a></li>
        </ul>
      </div>

      <div class="col-2">
        <h5>Campus Life</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">Arts</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">Athletics</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">Calendar</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">Career Development</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">Civic Engagement</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">Residential Life</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">Student Growth & Engagement</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">Student Life</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">Tour</a></li>
        </ul>
      </div>

      <div class="col-2">
        <h5>Community</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">Alumni</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">Ask Banner</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">Bias Incident Response Team</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">College Store</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">Directory</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">Employment</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">Events</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">Give to Vassar</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">Parents & Families </a></li>
        </ul>
      </div>
    </div>

    <div class="d-flex justify-content-between py-4 my-4 border-top">
      <p>© Vassar College</p>
 
    </div>
  </footer>
</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.min.js"></script>
<script src="{$project_paths['public_path']}/assets/js/libraries/masonry.pkgd.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/noframework.waypoints.min.js"></script>
<script src="{$project_paths['public_path']}/assets/js/main.js"></script>

</body>
</html>
TMP;

  return $template;

}
