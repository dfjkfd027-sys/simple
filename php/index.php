<?php
$secret = 'supersecretAA!@@A$';

function generate_link($data) {
    $hash = md5($GLOBALS['secret'] . $data);
    return "<a href='info.php?data=" . urlencode($data) . "&hash=$hash'>$data</a><br>";
}

echo "<h2>🔐 Available Queries (signed)</h2>";
echo generate_link("id=1");
echo generate_link("id=2");
echo generate_link("id=3");
echo generate_link("id=4");
echo generate_link("id=5");
                           
