function is_old_iphone($userAgentString) {

	if(stringStartsWith($userAgentString, 'Mozilla/5.0 (iPhone; CPU iPhone OS 5_') ) return true;
	
	if (stringStartsWith($userAgentString, 'Mozilla/5.0 (iPhone; CPU iPhone OS 6_')) return true;
	
	if (stringStartsWith($userAgentString, 'Mozilla/5.0 (iPhone; CPU iPhone OS 7_')) return true;

	return false;
}

function is_old_ipad($userAgentString) {

	if(stringStartsWith($userAgentString, 'Mozilla/5.0 (iPad; CPU OS 5_') ) return true;
	
	if (stringStartsWith($userAgentString, 'Mozilla/5.0 (iPad; CPU OS 6_')) return true;
	
	if (stringStartsWith($userAgentString, 'Mozilla/5.0 (iPad; CPU OS 7_')) return true;

	return false;
}

function function stringStartsWith($haystack, $needle) {

	return !strncmp($haystack, $needle, strlen($needle));
}
