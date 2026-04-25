<?php
/**
 * ICS 2371 — Lab 5: Arrays and Array Operations
 * Task 2: Built-in Array Functions [6 marks]
 *
 * @author     [ODHIAMBO NAFTALI JONES SIGUDA]
 * @student    [Reg Number: ENE21-0156/2021]
 * @lab        Lab 5 of 14
 * @unit       ICS 2371
 * @date       [25/04/2026]
 */

declare(strict_types=1);

// Working dataset — use this array for ALL exercises below
$scores = [72, 45, 88, 91, 63, 77, 55, 88, 49, 95, 63, 70];

/**
 * Display an array as a comma-separated string.
 *
 * @param string $label
 * @param array  $array
 * @return void
 */
function displayArray(string $label, array $array): void
{
    echo $label . ': ' . implode(',', $array) . '<br>';
}

// ══════════════════════════════════════════════════════════════
// EXERCISE A — Counting & Summing
// ══════════════════════════════════════════════════════════════
// Use count() to print total number of scores
// Use array_sum() to print total marks
// Compute and print average (to 2 decimal places)

// TODO: Exercise A — your code here
$totalScores = count($scores);
$totalMarks = array_sum($scores);
$averageScore = number_format($totalMarks / $totalScores, 2);

echo 'Count: ' . $totalScores . '<br>';
echo 'Total: ' . $totalMarks . '<br>';
echo 'Average: ' . $averageScore . '<br>';

// ══════════════════════════════════════════════════════════════
// EXERCISE B — Sorting
// ══════════════════════════════════════════════════════════════
// 1. Sort $scores ascending using sort() — print result
// 2. Sort $scores descending using rsort() — print result
// 3. Sort $scores ascending again and use array_reverse()
//    to get descending — print result
// Note: explain in a comment why sort() modifies the original array

// TODO: Exercise B — your code here
// sort() modifies the original array because it sorts the array in-place

sort($scores);
displayArray('Ascending', $scores);

rsort($scores);
displayArray('Descending', $scores);

sort($scores);
$reversedDescending = array_reverse($scores);
displayArray('Reversed Desc', $reversedDescending);

// ══════════════════════════════════════════════════════════════
// EXERCISE C — Searching
// ══════════════════════════════════════════════════════════════
// 1. Use in_array() to check if 88 exists — print true/false
// 2. Use in_array() to check if 100 exists — print true/false
// 3. Use array_search() to find the index of 91 — print it
// 4. Use array_search() on a value that doesn't exist —
//    show how to handle the false return value safely

// TODO: Exercise C — your code here

echo in_array(88, $scores, true)
    ? '88 exists<br>'
    : '88 not found<br>';

echo in_array(100, $scores, true)
    ? '100 exists<br>'
    : '100 not found<br>';

// Search for 91 safely
$indexOfNinetyOne = array_search(91, $scores, true);

if ($indexOfNinetyOne !== false) {
    echo "91 found at index $indexOfNinetyOne<br>";
}

// Demonstrating safe handling of false return value
$indexOfNineZeroOne = array_search(901, $scores, true);

if ($indexOfNineZeroOne !== false) {
    echo "901 found at index $indexOfNineZeroOne<br>";
} else {
    echo '901 not found<br>';
}

// ══════════════════════════════════════════════════════════════
// EXERCISE D — Transformation Functions
// ══════════════════════════════════════════════════════════════
// Use the original $scores array (re-declare if needed)
// 1. array_unique() — remove duplicates, print result
// 2. array_slice($scores, 2, 5) — print the slice and
//    explain what the parameters mean in a comment
// 3. implode(", ", $scores) — print as comma-separated string
// 4. array_reverse() — print reversed array

// TODO: Exercise D — your code here

// Remove duplicate values
$uniqueScores = array_unique($scores);
displayArray('Unique', $uniqueScores);

// array_slice(array, start, length)
// Start from index 2 and take 5 elements
$slicedScores = array_slice($scores, 2, 5);
displayArray('Sliced', $slicedScores);

// Convert array to comma-separated string
echo 'CSV: ' . implode(', ', $scores) . '<br>';

// Reverse array order
$reversedScores = array_reverse($scores);
displayArray('Reversed', $reversedScores);

?>