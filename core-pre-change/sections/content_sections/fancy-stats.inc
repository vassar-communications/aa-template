<?php



function row_fancyStats(
  $section_classes=null,
  $content_classes=null,
  $extras=null
) {

global $facts;

$student_icon = get_icon('user-graduate');
$faculty_icon = get_icon('chalkboard-user');
$ratio_icon = get_icon('people-group');

return <<<TMP
<div class="fancy-stats-container animate-when-content-appears flex-column flex-md-row">
  <div class="col-item bg-transparent stat-item item-students">
    <div class="stat-item-fact">
      <div class="stat-value">{$facts['number_of_students']}</div>
    </div>
    <div class="stat-item-additional">
      <div class="stat-label text-primary">$student_icon Students</div>
    </div>
  </div>


  <div class="col-item symbol-item symbol-div d-none d-lg-block">
    <!-- ÷ -->
  </div>

  <div class="col-item bg-transparent stat-item item-faculty">
    <div class="stat-item-fact">
      <div class="stat-value">{$facts['number_of_faculty']}</div>
    </div>
    <div class="stat-item-additional">
      <div class="stat-label text-primary">$faculty_icon Faculty</div>
    </div>
  </div>

  <div class="col-item symbol-item symbol-equals d-none d-lg-block">
    <!-- = -->
  </div>

  <div class="col-item stat-item bg-transparent item-ratio">
    <div class="stat-item-fact">
      <div class="stat-value">{$facts['average_class_size']}</div>
      <div class="stat-label text-primary">$ratio_icon Average class size</div>
    </div>
  </div>
</div>

TMP;
}
