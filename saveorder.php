<?php

    require ('conf/config.php');

    $name = $_POST['fullname'];
    $orders = isset($_POST['orders']) ? $_POST['orders'] : '';

    if(!empty($orders)){

        $sql = "INSERT INTO sys_salesheader (customer_name, date_created) VALUES ('".$name."', '".date('Y-m-d H:i:s')."')";

        if ($conn->query($sql) === true) {
            $order_id = $conn->insert_id;
            
            $message = '';
            for($i = 0; $i < count($orders); $i++){
                $sql1 = "INSERT INTO sys_salesdetails (order_id, customer_order, date_created) VALUES ('".$order_id."', '".$orders[$i]."', '".date('Y-m-d H:i:s')."')";

                if ($conn->query($sql1) === true) {
                    $message .= '<tr><td>'.$orders[$i].'</td><td>0.00</td></tr>';
                }else{
                    $message .= '';
                }
            }

            $title = 'Thank you for ordering '.$name.'!';
            $status = true;
        } else {
            $title = '';
            $message = '<div class="text">Unable to save order.</div>';
            $status = false;
        }

    }else{
        $title = '';
        $message = '<div class="text">Please select order.</div>';
        $status = false;
    }

    echo json_encode(array(
        'greet' => $title,
        'message' => $message,
        'status' => $status
    ));

?>