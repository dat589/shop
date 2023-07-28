<?php

function uploadGallery(mysqli $conn, array $files, int $id): void
{
    $createTime = date("Y-m-d H:i:s");

    $uploadPath = "../images/product/list/".$id."/";
    if(!is_dir($uploadPath)){
        mkdir($uploadPath, 0777, true);
    }

    foreach($files as $file){
        $newName = changeName($file, $uploadPath);
        move_uploaded_file($file["tmp_name"], $uploadPath.$file["name"]);

        $sql = "INSERT INTO `gallery`(`product_id`, `name`, `created`)
                VALUES ('".$id."', '".$newName."', '".$createTime."')";
        $conn->query($sql);
    }
}


function getImage(array $images): array
{
    $files = [];

    foreach($images as $key => $values){
        foreach($values as $index => $value){
            $files[$index][$key] = $value;
        }
    }
    return $files;
}

function validateUploadFile(array $file): bool
{
    $fileName = $file["name"];
    $extension = array("jpg", "jpeg", "png", "jfif", "gif");
    $ext = pathinfo($fileName, PATHINFO_EXTENSION);

    //Check size <2M
    if($file["size"] > (2*1024*1024)){
        return true;
    }

    //Check type
    if(! in_array($ext, $extension)){
        return true;
    }

    return false;
}

function changeName(array $file, string $path): string
{
    $fileName = $file["name"];
    $ext = pathinfo($fileName, PATHINFO_EXTENSION);
    $name = substr($fileName, 0, -strlen($ext)-1);
    $filePath = $path.$name.".".$ext;

    if(file_exists($filePath)){
        $fileName = str_replace(".","-",basename($fileName, $ext));
        $newName = $fileName.time().".".$ext;
        return $newName;
    }

    return $fileName;
}

function changeGallery(mysqli $conn, array $files, int $id): void
{
    $createTime = date("Y-m-d H:i:s");

    $uploadPath = "../images/product/list/".$id."/";
    if(!is_dir($uploadPath)){
        mkdir($uploadPath, 0777, true);
    }

    $sqlD = "DELETE FROM `gallery` WHERE `product_id` = '$id'";
    $conn->query($sqlD);

    foreach($files as $file){
        $newName = changeName($file, $uploadPath);
        move_uploaded_file($file["tmp_name"], $uploadPath.$newName);

        $sql = "INSERT INTO `gallery`(`product_id`, `name`, `created`)
                VALUES ('$id', '$newName', '$createTime')";
        $conn->query($sql);
    }
}


function deleteGallery(mysqli $conn, int $id): void
{
    $sql = "DELETE FROM `gallery` WHERE `product_id` = {$id}";
    $conn->query($sql);
}

function deleteProduct(mysqli $conn, int $id): void
{
    $sql = "DELETE FROM `product` WHERE `id` = {$id}";
    $conn->query($sql);
}


function deleteAccount(mysqli $conn, int $id): void
{
    $sql = "DELETE FROM `user` WHERE `id` = {$id}";
    $conn->query($sql);
}

function deleteOrder(mysqli $conn, int $id): void
{
    $sql = "DELETE FROM `order` WHERE `user_id` = {$id}";
    $conn->query($sql);
}

?>

