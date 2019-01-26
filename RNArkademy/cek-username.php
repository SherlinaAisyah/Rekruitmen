<?php

	function isAcceptedUsername($username) {
		  return preg_match('/^[a]{5}[_.]{1}[A]{2}$/i',$username) ;
	 }

	 if (isAcceptedUsername("aaaaa_AA")) {
		 echo "Username Is Valid" ;
	 } else {
		 echo "Username Is Invalid" ;
	 }
?>