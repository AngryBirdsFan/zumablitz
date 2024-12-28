<?php
header("Content-Type: application/json");

echo json_encode(array(
	"levels" => array("xp" => 0, "level" => 80, "progress" => 10, "xpleft" => 0),
	"stairsteps" => [array("balls" => 0, "xp" => 0, "mojo" => 0)],
));
?>