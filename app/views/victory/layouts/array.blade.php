<?php

$jsonData = '[{"m":"\nYac vd Schlehhecke","d":"\nLena v Romersee"},{"mm":"\nLino vd Schlehhecke","md":"\nRaina-Lisa vd Schlehhecke","dm":"\nCH Efendi vt\' Buitengebeuren","dd":"\nGina v Romersee"},{"mmm":"Hemmingway v Haus Tiefenbach","mmd":"Grit vd Schlehhecke","mdm":"Nahbay v Haus Tiefenbach","mdd":"Elderberry\'s April","dmm":"Nahbay v Haus Tiefenbach","dmd":"Velvet Queen vt\' Buitengebeuren","ddm":"Erchino v Lion\'s Cottage","ddd":"Ninja vt\' Buitengebeuren"}]';
$jsonArray = (array) json_decode($jsonData);
$phpArray = [];

foreach ($jsonArray as $jsonObject)
{
	$jsonObjectArray = (array) $jsonObject;
	foreach($jsonObjectArray as $key => $value)
	{
		$phpArray['"' . $key . '"'] = '"' . $value . '",';
	}
}
print_r($phpArray);
?>