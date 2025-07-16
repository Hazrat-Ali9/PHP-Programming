<?php
$first = "Hello,";
$second = "World!";
echo $first . " " . $second . "\n";

$singleLine = $first . " " . $second . "\n";
echo $singleLine;

echo "Single Line -> $singleLine";

echo "Single Line -> {$singleLine}";

echo 'Single Line -> {$singleLine}';

echo "\n";
echo 'Single Line -> ' . $singleLine;

$multipleLines = "First line
Second line
Third line";
echo $multipleLines;