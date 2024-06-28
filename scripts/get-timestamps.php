<?php

error_reporting(E_ALL);

for ($chapter = 1; $chapter <= 114; $chapter++) {
	$url = "http://localhost:8500/v1/timestamps?chapter=$chapter";
	$data = file_get_contents($url);
	file_put_contents("../data/v4/timestamps/$chapter.json", $data);
}

echo "Done.";