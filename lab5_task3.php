<?php
/**
 * ICS 2371 — Lab 5: Arrays and Array Operations
 * Task 3: Bubble Sort & Linear Search [7 marks]
 *
 * IMPORTANT: You must write pseudocode AND a flowchart for BOTH
 * the bubble sort and linear search in your PDF report BEFORE
 * writing any code below.
 *
 * @author     [ODHIAMBO NAFTALI JONES SIGUDA]
 * @student    [Reg Number: ENE21-0156/2021]
 * @lab        Lab 5 of 14
 * @unit       ICS 2371
 * @date       [25/04/2026]
 */

declare(strict_types=1);

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


$arrayLength = count($data);

echo "<h3>Bubble Sort (Ascending)</h3>";

/*
Worst-case comparisons for Bubble Sort when n = 10

Formula:
n(n - 1) / 2

= 10(10 - 1) / 2
= 10 × 9 / 2
= 45 comparisons

Therefore, the worst case requires 45 comparisons.
*/

for ($outerIndex = 0; $outerIndex < $arrayLength - 1; $outerIndex++) {
    for (
        $innerIndex = 0;
        $innerIndex < $arrayLength - $outerIndex - 1;
        $innerIndex++
    ) {
        // Compare adjacent elements
        if ($data[$innerIndex] > $data[$innerIndex + 1]) {
            // Swap using temporary variable
            $temp = $data[$innerIndex];
            $data[$innerIndex] = $data[$innerIndex + 1];
            $data[$innerIndex + 1] = $temp;
        }
    }

    // Print array after each full outer pass
    echo "Pass " . ($outerIndex + 1) . ": " . implode(", ", $data) . "<br>";
}

// Final sorted result
echo "<br>Final Sorted Array: " . implode(", ", $data);


// ══════════════════════════════════════════════════════════════
// EXERCISE B — Optimised Bubble Sort
// ══════════════════════════════════════════════════════════════
// Modify your bubble sort to use a $swapped flag.
// If no swaps occur in a full pass, the array is already sorted
// — break early. This is the optimised version.
// Test it on an already-sorted array and show it exits early.

// TODO: Exercise B — Optimised Bubble Sort — your code here

// Already sorted array to demonstrate early exit
$data = [11, 12, 22, 25, 34, 38, 47, 55, 64, 90];
$arrayLength = count($data);

echo "<h3>Optimised Bubble Sort</h3>";

for ($outerIndex = 0; $outerIndex < $arrayLength - 1; $outerIndex++) {
    // Assume no swap happens at the beginning of each pass
    $swapped = false;

    for (
        $innerIndex = 0;
        $innerIndex < $arrayLength - $outerIndex - 1;
        $innerIndex++
    ) {
        // Compare adjacent elements
        if ($data[$innerIndex] > $data[$innerIndex + 1]) {
            // Swap values using temporary variable
            $temp = $data[$innerIndex];
            $data[$innerIndex] = $data[$innerIndex + 1];
            $data[$innerIndex + 1] = $temp;

            // Mark that a swap occurred
            $swapped = true;
        }
    }

    // Show progress after each outer pass
    echo "Pass " . ($outerIndex + 1) . ": " . implode(", ", $data) . "<br>";

    // If no swaps happened, array is already sorted
    if (!$swapped) {
        echo "No swaps → Early exit<br>";
        break;
    }
}

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

/**
 * Perform a linear search on an array.
 *
 * Returns the index if the target is found,
 * otherwise returns false.
 *
 * @param array $array
 * @param mixed $target
 * @return int|false
 */
function linearSearch(array $array, $target): int|false
{
    $arrayLength = count($array);

    for ($index = 0; $index < $arrayLength; $index++) {
        // Compare current element with target
        if ($array[$index] == $target) {
            return $index;
        }
    }

    // Target not found
    return false;
}

$data = [64, 34, 25, 12, 22, 11, 90, 47, 55, 38];

echo "<h3>Linear Search</h3>";

// Test case 1: Search for 22
$resultOne = linearSearch($data, 22);

echo "Search 22: ";
echo ($resultOne !== false)
    ? "Found at index $resultOne<br>"
    : "Not found<br>";

// Test case 2: Search for 99
$resultTwo = linearSearch($data, 99);

echo "Search 99: ";
echo ($resultTwo !== false)
    ? "Found at index $resultTwo<br>"
    : "Not found<br>";


// ══════════════════════════════════════════════════════════════
// EXERCISE D — Sort then Search
// ══════════════════════════════════════════════════════════════
// 1. Sort $data using your bubble sort from Exercise A
// 2. Run linearSearch() on the sorted array for value 47
// 3. In a comment, explain: after sorting, has the index of 47
//    changed compared to the original array? Why does this matter?

// TODO: Exercise D — your code here
/**
 * Perform manual Bubble Sort in ascending order.
 *
 * @param array $array
 * @return array
 */
function bubbleSort(array $array): array
{
    $arrayLength = count($array);

    for ($outerIndex = 0; $outerIndex < $arrayLength - 1; $outerIndex++) {
        for (
            $innerIndex = 0;
            $innerIndex < $arrayLength - $outerIndex - 1;
            $innerIndex++
        ) {
            if ($array[$innerIndex] > $array[$innerIndex + 1]) {
                // Swap using temporary variable
                $temp = $array[$innerIndex];
                $array[$innerIndex] = $array[$innerIndex + 1];
                $array[$innerIndex + 1] = $temp;
            }
        }
    }

    return $array;
}



$data = [64, 34, 25, 12, 22, 11, 90, 47, 55, 38];

echo "<h3>Sort then Search</h3>";

// Step 1: Sort the array using Bubble Sort
$sortedData = bubbleSort($data);

echo "Sorted Array: " . implode(", ", $sortedData) . "<br>";

// Step 2: Search for value 47 using Linear Search
$foundIndex = linearSearch($sortedData, 47);

if ($foundIndex !== false) {
    echo "47 found at index: $foundIndex";
} else {
    echo "47 not found";
}

/*
Has the index of 47 changed after sorting?

Yes.

Before sorting:
47 was originally at index 7

After sorting:
47 is now at index 6

Why does this matter?

Sorting changes the position of elements inside the array.
This means search results based on index may change after sorting.

This is important because if another part of a program depends
on the original index position, sorting can affect program logic.
*/

?>