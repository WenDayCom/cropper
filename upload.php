<?php
//echo '<pre>';
//var_dump($_POST);
//var_dump($_GET);
//var_dump($_FILES);
//echo '</pre>';

$fileName = time() . '.jpg';

move_uploaded_file($_FILES['files']["tmp_name"], './upload/'.$fileName);

echo json_encode(['code'=>0,'src'=>'/upload/'.$fileName]);

?>