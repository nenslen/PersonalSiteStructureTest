<?php

// Open connection to db
$conn = new mysqli("localhost", "root", "password", "computersite");

echo "</br>CONNECTED TO DB!</br>";


$partList = array('Case', 'Motherboard', 'RAM');

echo "</br>CREATED PART LIST!</br>";

for($i = 0; $i < count($partList); $i++) {

	// Get name
	$partName = $partList[$i];
	$partNameLower = strtolower($partList[$i]);

	// Get facts
	$partFactsFile = fopen($partNameLower . "_facts.txt", "r") or die("Unable to open file!");
	$partFacts = addslashes(fread($partFactsFile, filesize($partNameLower . "_facts.txt")));
	fclose($partFactsFile);

	
	// Get long description
	$partLongFile = fopen($partNameLower . "_long.txt", "r") or die("Unable to open file!");
	$partLong = addslashes(fread($partLongFile,filesize($partNameLower . "_long.txt")));
	fclose($partLongFile);


	// Get short description
	$partShortFile = fopen($partNameLower . "_short.txt", "r") or die("Unable to open file!");
	$partShort = addslashes(fread($partShortFile,filesize($partNameLower . "_short.txt")));
	fclose($partShortFile);


	// Get synonyms
	$partSynonymsFile = fopen($partNameLower . "_synonyms.txt", "r") or die("Unable to open file!");
	$partSynonyms = addslashes(fread($partSynonymsFile,filesize($partNameLower . "_synonyms.txt")));
	fclose($partSynonymsFile);


	// Get imagepath
	$partImage = $partNameLower . "-thumb.jpg";
	

	// Insert data into db
	$sql = "INSERT INTO part (part_name, part_description_short, part_description_long, part_synonyms, part_facts, part_image)
 			VALUES ('{$partName}', '{$partShort}', '{$partLong}', '{$partSynonyms}', '{$partFacts}', '{$partImage}');";

 	echo "SQL = " . $sql;

	if ($conn->query($sql) === TRUE) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}
}

?>