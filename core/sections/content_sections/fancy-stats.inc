<?php

function row_fancyStats(
  $section_classes=null,
  $content_classes=null,
  $extras=null
) {

return <<<TMP
<div class="fancy-stats-container">
  <div class="col-item stat-item item-students">
    <div class="stat-item-fact">
      <div class="stat-value">2,500</div>
      <div class="stat-label">Students</div>
    </div>
    <div class="stat-item-additional">
      <p>from 44 states and 17 countries</p>
      </ul>
    </div>
  </div>

  <div class="col-item symbol-item symbol-div">
    ÷
  </div>

  <div class="col-item stat-item item-faculty">
    <div class="stat-item-fact">
      <div class="stat-value">355</div>
      <div class="stat-label">Faculty</div>
    </div>
    <div class="stat-item-additional">
      <p>stuff</p>
      </p>
    </div>
  </div>

  <div class="col-item symbol-item symbol-equals">
    =
  </div>

  <div class="col-item stat-item item-ratio">
    <div class="stat-item-fact">
      <div class="stat-value">7:1</div>
      <div class="stat-label">Students:Faculty</div>
    </div>
  </div>
</div>

TMP;
}
