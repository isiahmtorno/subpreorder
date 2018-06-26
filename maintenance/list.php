<?php

    require ('../conf/config.php');

    $sql = "SELECT * FROM sys_category";
    $result = $conn->query($sql);
    $data = array();
    
    if ($result->num_rows > 0) {

        while($rec = $result->fetch_assoc()) {

        	$sql1 = "SELECT * FROM sys_products WHERE category_id = '".$rec['id']."'";
    		$result1 = $conn->query($sql1);

    		if ($result1->num_rows > 0) {

	    		while($rec1 = $result1->fetch_assoc()) {
		        	$data[$rec['name']][] = array(
		        		'id' => $rec1['id'],
		            	'name' => $rec1['name']
		            );
		        }

	    	}else{
	    		$data[$rec['name']][] = array(
	    			'id' => '',
	            	'name' => ''
	            );
	    	}

   		}
        
    }

    echo json_encode($data);

?>