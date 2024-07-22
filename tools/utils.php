<?php
/**
 * Utils
 *
 * @package michallukas
 */

/** Personal info */
function get_personal_info($fieldName)
{
	$userInfo = [
		'name' => '',
		'phone' => '',
		'email' => '',
		'birthDate' => '',
		'linkedinLink' => '',
		'githubLink' => ''
	];

	if ($fieldName === null) {
		return $userInfo;
	} else {
		if (array_key_exists($fieldName, $userInfo)) {
			return $userInfo[$fieldName];
		} else {
			return "Field doesn't exist";
		}
	}
}