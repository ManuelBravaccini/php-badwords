<?php
$paragraph = $_POST['paragraph'];
$wordToCensor = $_POST['textToCensor'];

echo "Original paragraph: " . $paragraph . ". Length: " . strlen($paragraph) . "<br>";

$censoredText = str_replace($wordToCensor, '***', $paragraph);

echo "Censored text: " . $censoredText . ". Length: " . strlen($censoredText);
