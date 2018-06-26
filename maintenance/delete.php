<?php

    require ('../conf/config.php');

    $id = !empty($_GET['id']) ? $_GET['id'] : '';

    if(!empty($id)){

        $sql = "DELETE FROM sys_products WHERE id = '".$id."'";

        if ($conn->query($sql) === true) {
            $message = 'Product successfully deleted.';
            $status = true;
        } else {
            $message = 'Unable to delete product.';
            $status = false;
        }

    }else{
        $message = 'Please select product.';
        $status = false;
    }

    echo json_encode(array(
        'message' => $message,
        'status' => $status
    ));

?>