<?php
/**
 * ICS 2371 — Lab 5: Arrays and Array Operations
 * Task 1: Array Declaration, Initialisation & Traversal [6 marks]
 *
 * @author     [ODHIAMBO NAFTALI JONES SIGUDA]
 * @student    [Reg Number: ENE21-0156/2021]
 * @lab        Lab 5 of 14
 * @unit       ICS 2371
 * @date       [25/04/2026]
 */

// ══════════════════════════════════════════════════════════════
// EXERCISE A — Indexed Array: Sensor Readings
// ══════════════════════════════════════════════════════════════
// Declare an indexed array $temperatures with 6 float values:
// 36.5, 37.1, 38.4, 36.9, 39.2, 37.8
// 1. Print the array using print_r()
// 2. Access and print the 3rd and 5th elements by index
// 3. Traverse using a for loop — print each value with its index:
//    "Reading [0]: 36.5°C"
// 4. Traverse using foreach — same output format

// TODO: Exercise A — your code here
declare(strict_types=1);

// ══════════════════════════════════════════════════════════════
// EXERCISE A — Indexed Array: Sensor Readings
// ══════════════════════════════════════════════════════════════

$temperatures = [36.5, 37.1, 38.4, 36.9, 39.2, 37.8];

/**
 * Print an array followed by a line break.
 *
 * @param array $array
 * @return void
 */
function displayArray(array $array): void
{
    print_r($array);
    echo "<br>";
}

// Print full array
displayArray($temperatures);

// Access 3rd and 5th elements
echo '3rd: ' . $temperatures[2] . '<br>';
echo '5th: ' . $temperatures[4] . '<br>';

// For loop traversal
$totalReadings = count($temperatures);

for ($index = 0; $index < $totalReadings; $index++) {
    echo "Reading [$index]: {$temperatures[$index]}°C<br>";
}

// Foreach traversal
foreach ($temperatures as $index => $temperature) {
    echo "Reading [$index]: {$temperature}°C<br>";
}


// ══════════════════════════════════════════════════════════════
// EXERCISE B — Associative Array: Student Record
// ══════════════════════════════════════════════════════════════
// Declare an associative array $student with keys:
// "name", "reg_number", "course", "year", "gpa"
// Use your own details as values.
// 1. Print the full array with print_r()
// 2. Access and print name and gpa individually
// 3. Traverse with foreach (key => value) and print:
//    "name: Jane Wanjiku"
//    "reg_number: SCT212-0001/2024"  etc.

// TODO: Exercise B — your code here
// ══════════════════════════════════════════════════════════════
// EXERCISE B — Associative Array: Student Record
// ══════════════════════════════════════════════════════════════

$student = [
    'name' => 'NAFTALI JONES',
    'reg_number' => 'ENE212-0156/2021',
    'course' => 'BSc.ECE',
    'year' => '3.2',
    'gpa' => '3.2',
];

// Print full associative array
displayArray($student);

// Access specific values
echo 'Name: ' . $student['name'] . '<br>';
echo 'GPA: ' . $student['gpa'] . '<br>';

// Traverse and print key-value pairs
foreach ($student as $key => $value) {
    echo "$key : $value<br>";
}

// ══════════════════════════════════════════════════════════════
// EXERCISE C — Array Modification
// ══════════════════════════════════════════════════════════════
// Start with: $fruits = ["mango", "banana", "avocado"];
// 1. Add "pawpaw" using array_push()
// 2. Add "guava" using the [] syntax
// 3. Print the array after each addition
// 4. Remove the last element using array_pop() — print result
// 5. Remove "banana" using unset() — print result
// 6. Print count() before and after each modification

// TODO: Exercise C — your code here
// ══════════════════════════════════════════════════════════════
// EXERCISE C — Array Modification
// ══════════════════════════════════════════════════════════════

$fruits = ['mango', 'banana', 'avocado'];

// Initial count
echo 'Initial count: ' . count($fruits) . '<br>';

// Add "pawpaw" using array_push()
array_push($fruits, 'pawpaw');
displayArray($fruits);
echo 'Count: ' . count($fruits) . '<br>';

// Add "guava" using [] syntax
$fruits[] = 'guava';
displayArray($fruits);
echo 'Count: ' . count($fruits) . '<br>';

// Remove last element using array_pop()
$removedFruit = array_pop($fruits);
echo "Popped: $removedFruit<br>";
echo 'Count: ' . count($fruits) . '<br>';

// Remove "banana" using unset()
$bananaKey = array_search('banana', $fruits, true);

if ($bananaKey !== false) {
    unset($fruits[$bananaKey]);
}

displayArray($fruits);
echo 'Count: ' . count($fruits) . '<br>';

// ══════════════════════════════════════════════════════════════
// EXERCISE D — Nested Array
// ══════════════════════════════════════════════════════════════
// Declare a nested associative array $lab_results with
// at least 3 students, each having: name, cat_total, exam
// Traverse with nested foreach and print a formatted
// result for each student showing name and total marks.

// TODO: Exercise D — your code here
// ══════════════════════════════════════════════════════════════
// EXERCISE D — Nested Array
// ══════════════════════════════════════════════════════════════

$labResults = [
    [
        'name' => 'Sakura',
        'cat_total' => 45,
        'exam' => 45,
    ],
    [
        'name' => 'Kiba',
        'cat_total' => 40,
        'exam' => 30,
    ],
    [
        'name' => 'Naruto',
        'cat_total' => 40,
        'exam' => 48,
    ],
];

// Traverse nested array and calculate total marks
foreach ($labResults as $studentResult) {
    $totalMarks = $studentResult['cat_total'] + $studentResult['exam'];

    echo "{$studentResult['name']} | "
        . "CAT: {$studentResult['cat_total']} | "
        . "Exam: {$studentResult['exam']} | "
        . "Total: $totalMarks<br>";
}