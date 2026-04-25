<?php
/**
 * ICS 2371 — Lab 5: Arrays and Array Operations
 * Task 4: Engineering Analysis Using Arrays & Loops [6 marks]
 *
 * IMPORTANT: Pseudocode AND flowchart required in PDF report
 * before writing code.
 *
 * @author     [Your Full Name]
 * @student    [Your Reg Number, e.g. SCT212-XXXX/2024]
 * @lab        Lab 5 of 14
 * @unit       ICS 2371
 * @date       [Date completed]
 */

// ── Scenario: Bridge Load Sensor Analysis ────────────────────
// A bridge has 8 load sensors recording weight in tonnes.
// Analyse the readings to support a structural safety report.

$sensor_readings = [12.4, 8.7, 15.2, 19.8, 7.3, 14.6, 11.9, 16.3];
$sensor_labels   = ["S1", "S2", "S3", "S4", "S5", "S6", "S7", "S8"];
$max_safe_load   = 18.0; // tonnes — safety threshold

// ── STEP 1: Basic statistics ─────────────────────────────────
// Compute WITHOUT using array_sum(), max(), min() PHP functions
// Use loops only:
//   $mean   — average of all readings (2 decimal places)
//   $max    — highest reading + which sensor
//   $min    — lowest reading + which sensor
//   $total  — sum of all readings

// TODO: Step 1 — your code here


// ── STEP 2: Above-average count ──────────────────────────────
// Count how many sensors recorded ABOVE the mean.
// Store their labels in an $above_avg array.
// Print: "X of 8 sensors recorded above-average load"
// Print the list of those sensor labels.

// TODO: Step 2 — your code here


// ── STEP 3: Safety threshold check ───────────────────────────
// Check each sensor against $max_safe_load (18.0 tonnes)
// If reading > $max_safe_load: flag as "UNSAFE"
// Otherwise: "SAFE"
// Print a formatted safety report table:
//   Sensor | Reading | Status
//   S1     | 12.4t   | SAFE
//   S4     | 19.8t   | UNSAFE  ← flag clearly

// TODO: Step 3 — your code here


// ── STEP 4: Sorted safety report ─────────────────────────────
// Sort the sensor readings in DESCENDING order using your
// bubble sort from Task 3 (copy the function here).
// Print the sorted readings alongside their original sensor labels.
// Note: you must track which label belongs to which reading
// as you sort — use a parallel array technique.

// TODO: Step 4 — your code here


// ── Required Test Data Sets — screenshot each ────────────────
// Set A (default above): expect S4 UNSAFE, mean ~13.28t
// Set B: [5.1, 5.2, 5.3, 5.4, 5.5, 5.6, 5.7, 5.8]
//        → all SAFE, mean 5.45t, above-avg = 4 sensors
// Set C: [20.1, 21.3, 19.9, 22.0, 18.5, 20.8, 19.2, 21.7]
//        → all UNSAFE (all exceed 18.0t)
