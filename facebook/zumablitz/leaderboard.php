<?php
header("Content-Type: application/json");

// placeholder data (for potential ZB revival)
$players = [
	array("id" => "398493901694204", "name" => "You, probably", "score" => 100000, "image" => "", "medal" => array("gold" => "10", "silver" => "24", "bronze" => "69"), "prevscore" => 50000),
	array("id" => "69420", "invite" => true, "name" => "Random friend", "image" => ""),
];

echo json_encode(array("leaderboard" => array("isnew" => true, "players" => $players)));
?>