<?php
header("Content-Type: application/json");

// placeholder data (for potential ZB revival)
$products = [
	// Mojo
	array("category" => "mojo", "skuid" => "mojo1", "sku" => "mojo1", "id" => "1", "idolprice" => 10, "hardprice" => 1),
	array("category" => "mojo", "skuid" => "mojo2", "sku" => "mojo2", "id" => "2", "idolprice" => 20, "hardprice" => 2),
	array("category" => "mojo", "skuid" => "mojo3", "sku" => "mojo3", "id" => "3", "idolprice" => 40, "hardprice" => 4),
	array("category" => "mojo", "skuid" => "mojo4", "sku" => "mojo4", "id" => "4", "idolprice" => 60, "hardprice" => 6),
	array("category" => "mojo", "skuid" => "mojo5", "sku" => "mojo5", "id" => "5", "idolprice" => 100, "hardprice" => 10),
	
	// Lives
	array("category" => "life", "skuid" => "lifeonce", "sku" => "lifeonce", "idolprice" => 50, "time" => "once", "hardprice" => 5),
	array("category" => "life", "skuid" => "lifeonce_discount1", "sku" => "lifeonce_discount1", "idolprice" => 30, "time" => "once", "hardprice" => 3), // how does this appear...
	array("category" => "life", "skuid" => "life24hr", "sku" => "life24hr", "idolprice" => 100, "time" => "24hr", "hardprice" => 10),
	
	// Potions
	array("category" => "potion", "skuid" => "mojopotion1", "sku" => "mojopotion1", "id" => "mojopotion1", "idolprice" => 30, "type" => "mojo", "hardprice" => 3, "games" => 5),
	array("category" => "potion", "skuid" => "mojopotion2", "sku" => "mojopotion2", "id" => "mojopotion2", "idolprice" => 60, "type" => "mojo", "hardprice" => 6, "games" => 10),
	array("category" => "potion", "skuid" => "mojopotion24hr2x", "sku" => "mojopotion24hr2x", "id" => "mojopotion24hr2x", "idolprice" => 150, "time" => "24hr", "type" => "mojo", "hardprice" => 15),
	array("category" => "potion", "skuid" => "xppotion1", "sku" => "xppotion1", "id" => "xppotion1", "idolprice" => 30, "type" => "xp", "hardprice" => 3, "games" => 5),
	array("category" => "potion", "skuid" => "xppotion2", "sku" => "xppotion2", "id" => "xppotion2", "idolprice" => 60, "type" => "xp", "hardprice" => 6, "games" => 10),
	array("category" => "potion", "skuid" => "xppotion24hr2x", "sku" => "xppotion24hr2x", "id" => "xppotion24hr2x", "idolprice" => 150, "time" => "24hr", "type" => "xp", "hardprice" => 15),
	
	// Powerups
	
	// Bombs/Tiki Bombs/Voodoo Bombs
	array("category" => "powerups", "skuid" => "powerupbombs", "sku" => "powerupbombs", "id" => "1", "idolprice" => 0, "usecost" => 0, "multiplier" => 1, "hardprice" => 0),
	array("category" => "powerups", "skuid" => "powerupbombs", "sku" => "powerupbombs", "id" => "10", "idolprice" => 0, "usecost" => 0, "multiplier" => 1, "hardprice" => 0),
	array("category" => "powerups", "skuid" => "powerupbombs", "sku" => "powerupbombs", "id" => "19", "idolprice" => 0, "usecost" => 0, "multiplier" => 1, "hardprice" => 0),
	
	// Last Hurrah/Mega Hurrah
	array("category" => "powerups", "skuid" => "poweruphurrah", "sku" => "poweruphurrah", "id" => "3", "idolprice" => 10, "usecost" => 0, "multiplier" => 1, "hardprice" => 1),
	array("category" => "powerups", "skuid" => "poweruphurrah", "sku" => "poweruphurrah", "id" => "12", "idolprice" => 10, "usecost" => 0, "multiplier" => 1, "hardprice" => 1),
	
	// Speed Shot/Super Speed/Warp Speed
	array("category" => "powerups", "skuid" => "powerupspeedball", "sku" => "powerupspeedball", "id" => "7", "idolprice" => 10, "usecost" => 0, "multiplier" => 1, "hardprice" => 1),
	array("category" => "powerups", "skuid" => "powerupspeedball", "sku" => "powerupspeedball", "id" => "16", "idolprice" => 10, "usecost" => 0, "multiplier" => 1, "hardprice" => 1),
	array("category" => "powerups", "skuid" => "powerupspeedball", "sku" => "powerupspeedball", "id" => "24", "idolprice" => 10, "usecost" => 0, "multiplier" => 1, "hardprice" => 1),
	
	// Cannon/Cannon King/Super Cannon
	array("category" => "powerups", "skuid" => "powerupscannon", "sku" => "powerupscannon", "id" => "5", "idolprice" => 20, "usecost" => 0, "multiplier" => 1, "hardprice" => 2),
	array("category" => "powerups", "skuid" => "powerupscannon", "sku" => "powerupscannon", "id" => "14", "idolprice" => 20, "usecost" => 0, "multiplier" => 1, "hardprice" => 2),
	array("category" => "powerups", "skuid" => "powerupscannon", "sku" => "powerupscannon", "id" => "21", "idolprice" => 20, "usecost" => 0, "multiplier" => 1, "hardprice" => 2),
	
	// Inferno Frog/Sun Frog
	array("category" => "powerups", "skuid" => "powerupinfernofrog", "sku" => "powerupinfernofrog", "id" => "8", "idolprice" => 30, "usecost" => 0, "multiplier" => 1, "hardprice" => 3),
	array("category" => "powerups", "skuid" => "powerupinfernofrog", "sku" => "powerupinfernofrog", "id" => "17", "idolprice" => 30, "usecost" => 0, "multiplier" => 1, "hardprice" => 3),
	
	// Fruit Master/Juicy Fruit/Epic Fruit
	array("category" => "powerups", "skuid" => "powerupfruitmaster", "sku" => "powerupfruitmaster", "id" => "9", "idolprice" => 30, "usecost" => 0, "multiplier" => 1, "hardprice" => 3),
	array("category" => "powerups", "skuid" => "powerupfruitmaster", "sku" => "powerupfruitmaster", "id" => "18", "idolprice" => 30, "usecost" => 0, "multiplier" => 1, "hardprice" => 3),
	array("category" => "powerups", "skuid" => "powerupfruitmaster", "sku" => "powerupfruitmaster", "id" => "23", "idolprice" => 30, "usecost" => 0, "multiplier" => 1, "hardprice" => 3),
	
	// Chain Blast/Super Chain/Mega Chain
	array("category" => "powerups", "skuid" => "powerupschain", "sku" => "powerupschain", "id" => "6", "idolprice" => 40, "usecost" => 0, "multiplier" => 1, "hardprice" => 4),
	array("category" => "powerups", "skuid" => "powerupschain", "sku" => "powerupschain", "id" => "15", "idolprice" => 40, "usecost" => 0, "multiplier" => 1, "hardprice" => 4),
	array("category" => "powerups", "skuid" => "powerupschain", "sku" => "powerupschain", "id" => "22", "idolprice" => 40, "usecost" => 0, "multiplier" => 1, "hardprice" => 4),
	
	// Chrono Balls/Tempus Fugit/Timelord
	array("category" => "powerups", "skuid" => "powerupschrono", "sku" => "powerupschrono", "id" => "4", "idolprice" => 50, "usecost" => 0, "multiplier" => 1, "hardprice" => 5),
	array("category" => "powerups", "skuid" => "powerupschrono", "sku" => "powerupschrono", "id" => "11", "idolprice" => 50, "usecost" => 0, "multiplier" => 1, "hardprice" => 5),
	array("category" => "powerups", "skuid" => "powerupschrono", "sku" => "powerupschrono", "id" => "20", "idolprice" => 50, "usecost" => 0, "multiplier" => 1, "hardprice" => 5),
	
	// Multiplier/Multi-Multiplier
	array("category" => "powerups", "skuid" => "powerupmultiplier", "sku" => "powerupmultiplier", "id" => "2", "idolprice" => 50, "usecost" => 0, "multiplier" => 1, "hardprice" => 5),
	array("category" => "powerups", "skuid" => "powerupmultiplier", "sku" => "powerupmultiplier", "id" => "13", "idolprice" => 50, "usecost" => 0, "multiplier" => 1, "hardprice" => 5),
	
	// End powerups
	
	// Power up slots
	array("category" => "powerupslots", "skuid" => "slot2open", "sku" => "slot2open", "id" => "1", "idolprice" => 20, "hardprice" => 2),
	array("category" => "powerupslots", "skuid" => "slot3open", "sku" => "slot3open", "id" => "2", "idolprice" => 40, "hardprice" => 4),
	
	// Spin locks
	array("category" => "spinlocks", "skuid" => "spinlock1open", "sku" => "spinlock1open", "id" => "1", "idolprice" => 30, "hardprice" => 3),
	array("category" => "spinlocks", "skuid" => "spinlock2open", "sku" => "spinlock2open", "id" => "2", "idolprice" => 30, "hardprice" => 3),
	array("category" => "spinlocks", "skuid" => "spinlock3open", "sku" => "spinlock3open", "id" => "3", "idolprice" => 30, "hardprice" => 3),
	array("category" => "spinlocks", "skuid" => "spinlock4open", "sku" => "spinlock4open", "id" => "4", "idolprice" => 30, "hardprice" => 3),
	
	// Dr. Mojo offers
	array("category" => "mojooffer", "skuid" => "drmojooffer0", "sku" => "drmojooffer0", "id" => "0", "idolprice" => 30, "hardprice" => 3),
	array("category" => "mojooffer", "skuid" => "drmojooffer1", "sku" => "drmojooffer1", "id" => "1", "idolprice" => 30, "hardprice" => 3),
];

$purchasedProducts = [
];

echo json_encode(array("products" => $products, "purchased" => $purchasedProducts));
?>