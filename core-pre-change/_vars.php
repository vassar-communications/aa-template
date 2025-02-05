<?php

/* Facts */

// These are values that might be used in several places
// across the site, like tuition. They should be centralized.

$current_school_year = '2022–2023';

$facts[$current_school_year]['adm_tuition'] = 63840;
$facts[$current_school_year]['adm_room_and_board'] = 16560;
$facts[$current_school_year]['adm_fees'] = 960;

$facts['adm_total_cost'] = $facts[$current_school_year]['adm_tuition'] + $facts[$current_school_year]['adm_room_and_board'] + $facts[$current_school_year]['adm_fees'];

$facts['adm_total_cost'] = number_format($facts['adm_total_cost']);
$facts['number_of_students'] = '2,500';
$facts['number_of_faculty'] = '355';
$facts['student_faculty_ratio'] = '8:1';
$facts['average_class_size'] = '17';

$facts['number_of_majors'] = '50';
$facts['number_of_alumni'] = '41,000';

$resources['student_orgs'] = '170';
$resources['varsity_teams'] = '27';

$deadlines['early-decision-1'] = 'November 15';
$deadlines['early-decision-2'] = 'January 1';
$deadlines['regular-decision'] = 'January 1';
$deadlines['regular-decision-interview'] = 'January 7';
$deadlines['spring-transfer'] = 'November 1';
$deadlines['fall-transfer'] = 'March 15';

$deadlines['portfolio-early-decision-1'] = 'November 17';
$deadlines['portfolio-early-decision-2'] = 'January 7';


$deadlines['finaid-early-decision-1'] = 'November 15';
$deadlines['finaid-early-decision-2'] = 'January 1';
$deadlines['finaid-regular-decision'] = 'February 1';
$deadlines['finaid-fall-transfer'] = 'March 15';
$deadlines['finaid-spring-transfer'] = 'November 1';
$deadlines['finaid-returning'] = 'May 1';

$class_stats['number_of_countries'] = '22';
$class_stats['number_of_countries_all'] = '79';
$class_stats['number_of_states'] = '41';
$class_stats['percentage_male'] = '38.4%';
$class_stats['percentage_female'] = '61.6%';
$class_stats['students_of_color'] = '36%';
$class_stats['languages_spoken'] = '42';
$class_stats['students_receiving_finaid'] = '63%';

// where is this being used?
$class_stats['students_of_color_2'] = '35%';

$class_stats['attd_public_school'] = '66.7%';
$class_stats['attd_private_school'] = '24%';
$class_stats['1st-gen-students'] = '14%';

$after_vassar['six_months_out'] = '93%';
$after_vassar['law_school_admit_rate'] = '88%';
$after_vassar['med_school_admit_rate'] = '88%';
