<?php
/**
 * ICS 2371 — Lab 5: Arrays and Array Operations
 * Task 3: Bubble Sort & Linear Search [7 marks]
 *
 * IMPORTANT: You must write pseudocode AND a flowchart for BOTH
 * the bubble sort and linear search in your PDF report BEFORE
 * writing any code below.
 *
 * @author     [Your Full Name]
 * @student    [Your Reg Number, e.g. SCT212-XXXX/2024]
 * @lab        Lab 5 of 14
 * @unit       ICS 2371
 * @date       [Date completed]
 */

// Working dataset
$data = [64, 34, 25, 12, 22, 11, 90, 47, 55, 38];

// ══════════════════════════════════════════════════════════════
// EXERCISE A — Manual Bubble Sort (ascending)
// ══════════════════════════════════════════════════════════════
// Implement bubble sort WITHOUT using PHP's sort() function.
// Use nested for loops.
// Rules:
//   - Outer loop: runs (n-1) times
//   - Inner loop: compares adjacent pairs
//   - Swap if left > right using a $temp variable
//   - Print the array after EACH full outer pass to show progress
//
// Expected: [11, 12, 22, 25, 34, 38, 47, 55, 64, 90]
//
// After sorting, answer in a comment:
// Q: How many comparisons does bubble sort make for n=10 elements
//    in the worst case? Show your working.

// TODO: Exercise A — Bubble Sort — your code here


// ══════════════════════════════════════════════════════════════
// EXERCISE B — Optimised Bubble Sort
// ══════════════════════════════════════════════════════════════
// Modify your bubble sort to use a $swapped flag.
// If no swaps occur in a full pass, the array is already sorted
// — break early. This is the optimised version.
// Test it on an already-sorted array and show it exits early.

// TODO: Exercise B — Optimised Bubble Sort — your code here


// ══════════════════════════════════════════════════════════════
// EXERCISE C — Linear Search
// ══════════════════════════════════════════════════════════════
// Implement a linear search function:
//   linearSearch(array $arr, $target): int|false
// Returns the INDEX of $target if found, false if not found.
// Do NOT use in_array() or array_search() — implement manually.
//
// Test with:
//   linearSearch($data, 22)  → should return index 4 (original array)
//   linearSearch($data, 99)  → should return false
//
// Print clearly: "Found 22 at index 4" or "99 not found"

// TODO: Exercise C — Linear Search — your code here


// ══════════════════════════════════════════════════════════════
// EXERCISE D — Sort then Search
// ══════════════════════════════════════════════════════════════
// 1. Sort $data using your bubble sort from Exercise A
// 2. Run linearSearch() on the sorted array for value 47
// 3. In a comment, explain: after sorting, has the index of 47
//    changed compared to the original array? Why does this matter?

// TODO: Exercise D — your code here
