<?php

$result = $mysqli->query("SELECT * FROM drivers");

$result = ConvertToArray($result);