<?php
function findlongestwords(string $text): array {
    $words = preg_split('/\s+/u', $text, -1, PREG_SPLIT_NO_EMPTY);
    if (empty($words)) {
        return [];
    }

    $maxlength = 0;
    $longestwords = [];

    foreach ($words as $word) {
        $length = mb_strlen($word);
        if ($length > $maxlength) {
            $maxlength = $length;
            $longestwords = [$word]; 
        } elseif ($length === $maxlength) {
            $longestwords[] = $word; 
        }
    }

    return array_unique($longestwords); 
}

$text = "Это ааааааааааааааааа длинное слово, а это короткое и снова очень-очень-очень длинное!";
$longestwords = findlongestwords($text);

echo"$text";
if (empty($longestwords)) {
    echo "<p> В тексте нет слов.</p>";
} else {
    echo "<p>Самые длинные слова</p>";
    echo "<ul>";
    foreach ($longestwords as $word) {
        echo "<li>", htmlspecialchars($word), "</li>";
    }
    echo "</ul>";
}
?>