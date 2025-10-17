<?php

$library = [
    "Literature" => [
        "Classics" => ["Pride and Prejudice", "Moby Dick"],
        "Poetry" => ["Leaves of Grass", "The Raven"]
    ],
    "Technology" => [
        "Programming" => ["Clean Code", "The Pragmatic Programmer"],
        "AI & Data" => ["Superintelligence", "Deep Learning"]
    ],
    "History" => [
        "World War II" => ["The Diary of Anne Frank", "Band of Brothers"]
    ]
];

function showLibrary($folders, $level = 0) {
    foreach ($folders as $key => $value) {
        echo str_repeat("&nbsp;&nbsp;&nbsp;", $level) . "<b>$key</b><br>";
        if (is_array($value)) {
            showLibrary($value, $level + 1);
        } else {
            echo str_repeat("&nbsp;&nbsp;&nbsp;", $level + 1) . $value . "<br>";
        }
    }
}

echo "<h2>📚 Library Structure</h2>";
showLibrary($library);
?>
