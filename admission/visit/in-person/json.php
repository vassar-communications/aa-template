<?php
$placeholder_img_banner = '/assets/images/placeholders/placeholder-banner.png';
$placeholder_img_square = '/assets/images/placeholders/placeholder-square.png';
$placeholder_img_vertical = '/assets/images/placeholders/placeholder-portrait.jpg';
$placeholder_img_wide = '/assets/images/placeholders/placeholder-wide.jpg';

$admission_img_path = '/admission/assets/images/';
$quickfacts_img_path = $admission_img_path.'quick-facts/';
?>


$page_info = '<?php

$page_info = [
  'page_title' => 'Quick Facts',
  'feature_image' => $placeholder_img_banner
];
echo json_encode($page_info, JSON_UNESCAPED_SLASHES);
?>';
<br>

/* === */
<br>
$page_info = json_decode($page_info, true);
