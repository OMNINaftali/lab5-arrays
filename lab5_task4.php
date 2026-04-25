<?php

declare(strict_types=1);

/**
 * ICS 2371 — Lab 5: Arrays and Array Operations
 * Task 4: Engineering Analysis Using Arrays & Loops [6 marks]
 *
 * IMPORTANT: Pseudocode AND flowchart required in PDF report
 * before writing code.
 *
 * @author     [ODHIAMBO NAFTALI JONES SIGUDA]
 * @student    [Reg Number: ENE21-0156/2021]
 * @lab        Lab 5 of 14
 * @unit       ICS 2371
 * @date       [25/04/2026]
 */

// ─────────────────────────────────────────────────────────────
// Scenario: Bridge Load Sensor Analysis
// A bridge has 8 load sensors recording weight in tonnes.
// Analyse the readings to support a structural safety report.
// ─────────────────────────────────────────────────────────────

$sensor_readings = [12.4, 8.7, 15.2, 19.8, 7.3, 14.6, 11.9, 16.3];
$sensor_labels = ["S1", "S2", "S3", "S4", "S5", "S6", "S7", "S8"];
$max_safe_load = 18.0; // tonnes


// ─────────────────────────────────────────────────────────────
// STEP 1: Basic Statistics
// Compute WITHOUT using array_sum(), max(), min()
// Use loops only
// ─────────────────────────────────────────────────────────────

$total_load = 0;
$total_sensors = count($sensor_readings);

/*
Important:
Initialize max and min using the FIRST element only.
This is a key exam requirement.
*/
$max_load = $sensor_readings[0];
$min_load = $sensor_readings[0];
$max_sensor_label = $sensor_labels[0];
$min_sensor_label = $sensor_labels[0];

foreach ($sensor_readings as $index => $reading) {
    $total_load += $reading;

    if ($reading > $max_load) {
        $max_load = $reading;
        $max_sensor_label = $sensor_labels[$index];
    }

    if ($reading < $min_load) {
        $min_load = $reading;
        $min_sensor_label = $sensor_labels[$index];
    }
}

$mean_load = $total_load / $total_sensors;


// ─────────────────────────────────────────────────────────────
// STEP 2: Above-average Count
// Count sensors above mean and store their labels
// ─────────────────────────────────────────────────────────────

$above_avg = [];

foreach ($sensor_readings as $index => $reading) {
    if ($reading > $mean_load) {
        $above_avg[] = $sensor_labels[$index];
    }
}


// ─────────────────────────────────────────────────────────────
// STEP 3: Safety Threshold Check
// Print formatted table: Sensor | Reading | Status
// ─────────────────────────────────────────────────────────────

echo "<pre>";
echo "--- BRIDGE SAFETY REPORT ---<br>";

echo str_pad("Sensor", 8) . " | "
    . str_pad("Reading", 10) . " | Status<br>";

echo "------------------------------------<br>";

foreach ($sensor_readings as $index => $reading) {
    $status = ($reading > $max_safe_load) ? "UNSAFE" : "SAFE";

    echo str_pad($sensor_labels[$index], 8) . " | "
        . str_pad($reading . "t", 10) . " | "
        . $status . "<br>";
}


// ─────────────────────────────────────────────────────────────
// STEP 4: Parallel Bubble Sort (Descending)
// Sort readings while keeping labels aligned
// ─────────────────────────────────────────────────────────────

for ($i = 0; $i < $total_sensors - 1; $i++) {
    for ($j = 0; $j < $total_sensors - $i - 1; $j++) {
        if ($sensor_readings[$j] < $sensor_readings[$j + 1]) {
            // Swap readings
            $temp_reading = $sensor_readings[$j];
            $sensor_readings[$j] = $sensor_readings[$j + 1];
            $sensor_readings[$j + 1] = $temp_reading;

            // Swap labels in parallel
            $temp_label = $sensor_labels[$j];
            $sensor_labels[$j] = $sensor_labels[$j + 1];
            $sensor_labels[$j + 1] = $temp_label;
        }
    }
}


// ─────────────────────────────────────────────────────────────
// FINAL SUMMARY OUTPUT
// ─────────────────────────────────────────────────────────────

echo "<br>--- SUMMARY STATISTICS ---<br>";

echo "Total Load:    " . number_format($total_load, 2) . "t<br>";
echo "Mean Load:     " . number_format($mean_load, 2) . "t<br>";
echo "Highest Load:  " . $max_load . " (" . $max_sensor_label . ")<br>";
echo "Lowest Load:   " . $min_load . " (" . $min_sensor_label . ")<br>";

echo count($above_avg)
    . " of $total_sensors sensors recorded above-average load.<br>";

echo "Above-average sensors: " . implode(", ", $above_avg) . "<br>";

echo "<br>--- SORTED LOADINGS (Highest First) ---<br>";

foreach ($sensor_readings as $index => $reading) {
    echo $sensor_labels[$index] . ": " . $reading . "t<br>";
}

echo "</pre>";


// ─────────────────────────────────────────────────────────────
// Required Test Data Sets (Take screenshots for report)
// ─────────────────────────────────────────────────────────────

// Set A (default):
// Expected → S4 UNSAFE, mean ≈ 13.28t

// Set B:
// [5.1, 5.2, 5.3, 5.4, 5.5, 5.6, 5.7, 5.8]
// Expected → All SAFE, mean = 5.45t, above-average = 4

// Set C:
// [20.1, 21.3, 19.9, 22.0, 18.5, 20.8, 19.2, 21.7]
// Expected → All UNSAFE

?>