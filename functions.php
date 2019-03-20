//add this to your functions.php page
function modify_contact_methods($profile_fields) {

	// Add new fields
	$profile_fields['linkedin'] = 'LinkedIn url';
	$profile_fields['pinterest'] = 'Pinterest URL';
	$profile_fields['instagram'] = 'Instagram url';
  //add as many profile fields as necessary
	return $profile_fields;
}
add_filter('user_contactmethods', 'modify_contact_methods');
