<?php

$monsters_data = [
	[
		"id" => "0",
		"name" => "Crunchy",
		"slug" => "crunchy",
	],
	[
		"id" => "1",
		"name" => "Munchy",
		"slug" => "munchy",
	],
];
// we think of this array of associative arrays as an "anonymous" array // vs: 

// here where't it's an array of key value pairs - and each monster has an explicit key (which means you can access it without looking at every item in the array to find it)
$other_monsters_data = [
	"0" => [
		"name" => "Crunchy",
		"slug" => "crunchy",
	],
	"1" => [
		"name" => "Munchy",
		"slug" => "munchy",
	],
];

// pros? cons?

// fill this data in!!! ;) 


$another_monsters_data = [
	"crunchy" => [
		"name" => "Crunchy",
	],
	"munchy" => [
		"name" => "Munchy",
	],
];

// but will you really need human readable keys??



$another_monsters_data = [
	"asdf6783sfhdjsfhks" => [
		"name" => "Crunchy",
		"slug" => "crunchy",
	],
	"09478iuyhsjkdhkjfh" => [
		"name" => "Munchy",
		"slug" => "munchy",
	],
];

