<?php 
$usernames = array( "martynj", "admin", "bob", "dave", "fred" );
$data = array( "username" => "", "password" => "", "email" => "" );
if( isset($_POST["username"]) ) {
	if( in_array( $_POST["username"], $usernames ) ) {
		$data["username"] = "inuse";
	}
}
if( isset($_POST["password"]) && isset($_POST["password_again"]) ) {
	if( $_POST["password_again"] != "" && $_POST["password"] != $_POST["password_again"] ) {
		$data["password"] = "missmatch";
	}
}
if( isset( $_POST["email"] ) ) {
	if( $_POST["email"] != "" && !preg_match( "/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", $_POST["email"] ) ) {
		$data["email"] = "notvalid";
	}
}
echo json_encode( $data );

?>