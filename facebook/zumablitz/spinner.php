<?php
header("Content-Type: application/xml");

echo '<spinner id="1">
	<item name="gems" locklevel="0" probability="10" image="gem">1000</item>
	<item name="gems" locklevel="0" probability="2" image="gem">500</item>
	<item name="gems" locklevel="0" probability="15" image="gem">1500</item>
	<item name="gems" locklevel="0" probability="10" image="gem">2000</item>
	<item name="gems" locklevel="1" probability="15" image="gem">3000</item>
	<item name="gems" locklevel="2" probability="20" image="gem">8000</item>
	<item name="idols" locklevel="3" probability="8" image="idol">4</item>
	<item name="idols" locklevel="4" probability="6" image="idol">8</item>
</spinner>';
?>