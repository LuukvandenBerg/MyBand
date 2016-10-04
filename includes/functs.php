<?php

	function ConvertToArray($DBresult) {
		$resultArray = array();
		while($row = $DBresult->fetch_assoc()){
			$resultArray[] = $row;
		}
		return $resultArray;
	}


?>