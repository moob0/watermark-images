<?php
$imgname = "image.jpg";
$imgurl = $_GET['imgurl'];
//$imgurl = "https://images-na.ssl-images-amazon.com/images/I/81zEwe0Z9oL.jpg";
$imgurl = explode("._", $imgurl)[0]."._SL600_.jpg";

//DOWNLOAD IMAGE
$ch = curl_init($imgurl);
$fp = fopen('/var/www/dev/'.$imgname, 'w+a+');
curl_setopt($ch, CURLOPT_FILE, $fp);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_exec($ch);
curl_close($ch);
fclose($fp);

//EDIT IMAGE
// Load the stamp and the photo to apply the watermark to
require_once("editImage.php");
createImages($imgname);

//UPLOAD IMAGE

//echo json_encode(array("voodoo" => $imgLink1, "prodi" => $imgLink2));
?>
