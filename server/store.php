<?php

//var_dump($_POST);
if($_POST['step'] !== "2") {
	header("Location: ../page2.html");
} else {
	header("Location: ../end.html");
}
?>