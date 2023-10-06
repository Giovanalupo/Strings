<?php 
$data = new DateTime ('28-09-2023');
$data-> modify ('=12 mouth');
echo $data->format('d/m/Y H:i:s') ;

?>