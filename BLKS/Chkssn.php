<?php

session_start();
			if(isset($_SESSION["activa"])){
					echo "success";
				}else{
					echo "undefined";
					};

?>