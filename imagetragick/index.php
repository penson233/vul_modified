<?php

if (!empty($_FILES)):

$ext = pathinfo($_FILES['file_upload']['name'], PATHINFO_EXTENSION);
if (!in_array($ext, ['gif', 'png', 'jpg', 'jpeg'])) {
    die('Unsupported filetype uploaded.');
}
$size_image=getimagesize($_FILES['file_upload']['tmp_name']);

if($size_image && $size_image[0] > 100 && $size_image[1] > 100){


	system("convert {$_FILES['file_upload']['tmp_name']} /var/www/html/1.gif"); 
}else{
echo "wrong";
}

else:
?>
<form method="post" enctype="multipart/form-data">
    File: <input type="file" name="file_upload">
    <input type="submit">
</form>
<?php
endif;
