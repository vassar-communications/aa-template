<?php

/* Facts */

// These are values that might be used in several places
// across the site, like tuition. They should be centralized.

$current_school_year = '2025–2026';

$facts[$current_school_year]['adm_tuition'] = 73275;
$facts[$current_school_year]['adm_room_and_board'] = 19055;
$facts[$current_school_year]['adm_fees'] = 990;

$facts['adm_total_cost'] = $facts[$current_school_year]['adm_tuition'] + $facts[$current_school_year]['adm_room_and_board'] + $facts[$current_school_year]['adm_fees'];

$facts['adm_total_cost'] = number_format($facts['adm_total_cost']);
$facts['number_of_students'] = '2,462';
$facts['number_of_faculty'] = '367';
$facts['student_faculty_ratio'] = '7:1';
$facts['average_class_size'] = '19';
$facts['average_finaid_award'] = '$56,923';
$facts['students_of_color'] = '37%'; //used on Alums > Give Back > Support Vassar page

$facts['number_of_majors'] = '50';
$facts['number_of_alums'] = '41,000';

$resources['student_orgs'] = '170';
$resources['varsity_teams'] = '27';

$deadlines['early-decision-1'] = 'November 15';
$deadlines['early-decision-2'] = 'January 1';
$deadlines['regular-decision'] = 'January 1';
$deadlines['regular-decision-interview'] = 'January 1';
$deadlines['spring-transfer'] = 'November 1';
$deadlines['fall-transfer'] = 'March 15';

$deadlines['portfolio-early-decision-1'] = 'November 17';
$deadlines['portfolio-early-decision-2'] = 'January 5';

$deadlines['finaid-early-decision-1'] = 'November 15';
$deadlines['finaid-early-decision-2'] = 'January 1';
$deadlines['finaid-regular-decision'] = 'February 1';
$deadlines['finaid-fall-transfer'] = 'March 15';
$deadlines['finaid-spring-transfer'] = 'November 1';
$deadlines['finaid-returning'] = 'May 1';

$class_stats['class_year'] = '2028'; //used on Alums > Give Back > Support Vassar page
$class_stats['number_of_countries'] = '54';
$class_stats['number_of_states'] = '47';
$class_stats['percentage_male'] = '38.4%';
$class_stats['percentage_female'] = '61.6%';
$class_stats['students_of_color'] = '37%';
$class_stats['languages_spoken'] = '49';
$class_stats['students_receiving_finaid'] = '59.1%';
$class_stats['average_gpa'] = '3.9/4.0'; //used on Alums > Give Back > Support Vassar page
$class_stats['sat_combined_average'] = '1488'; //used on Alums > Give Back > Support Vassar page

//  This indicates the total number
//  of countries students have come from - not just the ones
//  in the current class.
$class_stats['number_of_countries_all'] = '55';


// where is this being used?
$class_stats['students_of_color_2'] = '37%';

$class_stats['attd_public_school'] = '66.7%';
$class_stats['attd_private_school'] = '24%';
$class_stats['1st-gen-students'] = '14%';

$after_vassar['six_months_out'] = '94%';
$after_vassar['law_school_admit_rate'] = '88%';
$after_vassar['med_school_admit_rate'] = '80%';

//these are additional values specifically for the alums website > Give Back > Support Vassar page
$fiscal_year = '2023-2024';
$common_data_set = '2023-2024';
$facts[$fiscal_year]['vassar_fund_total'] = '9.4M';
$facts[$common_data_set]['avg_Vassar_need_based_scholarship_pkg_award'] = 61252;
$facts[$common_data_set]['number_students_receiving_need_based_scholarships_grants'] = 1337;
