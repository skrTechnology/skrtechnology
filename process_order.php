<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$name = test_input($_POST["name"]);
	$email = test_input($_POST["email"]);
	$address = test_input($_POST["address"]);
	$city = test_input($_POST["city"]);
	$state = test_input($_POST["state"]);
	$zip = test_input($_POST["zip"]);
	$card = test_input($_POST["card"]);
	$exp = test_input($_POST["exp"]);
	$cvv = test_input($_POST["cvv"]);

	// Validate form data
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$error = "Invalid email format";
	}

	if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
		$error = "Invalid name format";
	}

	if (!preg_match("/^[0-9]{5}$/", $zip)) {
		$error = "Invalid zip code format";
	}

	if (!preg_match("/^[0-9]{4}$/", $exp)) {
		$error = "Invalid expiration date format";
	}

	if (!preg_match("/^[0-9]{3}$/", $cvv)) {
		$error = "Invalid CVV format";
	};