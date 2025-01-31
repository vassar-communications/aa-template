<?php

/* Facts */

// These are values that might be used in several places
// across the site, like tuition. They should be centralized.

$current_school_year = '2024–2025';

$facts[$current_school_year]['adm_tuition'] = 70050;
$facts[$current_school_year]['adm_room_and_board'] = 18240;
$facts[$current_school_year]['adm_fees'] = 980;

$facts['adm_total_cost'] = $facts[$current_school_year]['adm_tuition'] + $facts[$current_school_year]['adm_room_and_board'] + $facts[$current_school_year]['adm_fees'];

$facts['adm_total_cost'] = number_format($facts['adm_total_cost']);
$facts['number_of_students'] = '2,444';
$facts['number_of_faculty'] = '358';
$facts['student_faculty_ratio'] = '8:1';
$facts['average_class_size'] = '19';
$facts['average_finaid_award'] = '$58,722';
$facts['students_of_color'] = '37%';

$facts['number_of_majors'] = '50';
$facts['number_of_alums'] = '41,000';

$resources['student_orgs'] = '170';
$resources['varsity_teams'] = '27';

$deadlines['early-decision-1'] = 'November 15';
$deadlines['early-decision-2'] = 'January 1 (Extended to Jan. 5, 2025)';
$deadlines['regular-decision'] = 'January 1 (Extended to Jan. 6, 2025)';
$deadlines['regular-decision-interview'] = 'January 1';
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

$class_stats['number_of_countries'] = '53';
$class_stats['number_of_states'] = '49';
$class_stats['percentage_male'] = '38.4%';
$class_stats['percentage_female'] = '61.6%';
$class_stats['students_of_color'] = '37%';
$class_stats['languages_spoken'] = '51';
$class_stats['students_receiving_finaid'] = '59.8%';

//  This indicates the total number
//  of countries students have come from - not just the ones
//  in the current class.
$class_stats['number_of_countries_all'] = '55';


// where is this being used?
$class_stats['students_of_color_2'] = '37%';

$class_stats['attd_public_school'] = '66.7%';
$class_stats['attd_private_school'] = '24%';
$class_stats['1st-gen-students'] = '14%';

$after_vassar['six_months_out'] = '93%';
$after_vassar['law_school_admit_rate'] = '86%';
$after_vassar['med_school_admit_rate'] = '78%';

//these are additional values specifically for the alums website, Give Back > Support Vassar page
$fiscal_year = '2023-2024';
$common_data_set = '2023-2024';
$facts[$fiscal_year]['vassar_fund_total'] = '9.4M';
$facts[$common_data_set]['avg_Vassar_need_based_scholarship_pkg_award'] = 61252;
$facts[$common_data_set]['number_students_receiving_need_based_scholarships_grants'] = 1337;
$class_stats['average_gpa'] = '3.9/4.0'; //this is from the class of 2028 profile
