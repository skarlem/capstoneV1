<?php
$target_dir = "media/profile";

if(!file_exists($target_dir)){
	mkdir($target_dir, 0777, true);
}

$target_dir = $target_dir."/".$id_num."_".time().".jpeg";

file_put_contents($target_dir, base64_decode($profile_pic));