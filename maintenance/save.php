<?php

    require ('../conf/config.php');

    $id = !empty($_GET['id']) ? $_GET['id'] : '';
    $category_id = !empty($_GET['category']) ? $_GET['category'] : '';
    $name = !empty($_GET['name']) ? $_GET['name'] : '';

    if(!empty($category_id) && !empty($name)){

        if(!empty($id)){

            // update products
            $sql = "UPDATE sys_products SET category_id = '".$category_id."', name = '".$name."' WHERE id = '".$id."'";

            if ($conn->query($sql) === true) {
                $message = 'Product successfully updated.';
                $status = true;
            } else {
                $message = 'Unable to update product.';
                $status = false;
            }

        }else{

            // save products
            $sql = "INSERT INTO sys_products (category_id, name) VALUES ('".$category_id."', '".$name."')";

            if ($conn->query($sql) === true) {
                $message = 'New product successfully saved.';
                $status = true;
            } else {
                $message = 'Unable to save product.';
                $status = false;
            }

        }

    }else{
        $message = 'Please enter category or product.';
        $status = false;
    }

    echo json_encode(array(
        'message' => $message,
        'status' => $status
    ));

?>