<table class="table table-bordered table-hover table-striped" style="table-layout: fixed">
		 <thead>
			 <tr>
				<th>Product Id</th>
				<th>Product Name</th>
				<th>Product Category</th>
				<th>Type</th> 
				<th>Price</th>			
				<th>Calculated Price</th>					
			 </tr>
		 </thead>
		 <tbody>
<?php
	 $StockdataRAW = array(
		'name' => 'name1',
		'price' => 12.80,
		'categories' =>array(18),
		'type' => 'physical',
		'availability' =>'available',
		'weight' =>5.1,
		'description'=>'description'

	);
  $Stockdata = json_encode($StockdataRAW);
//See the JSON String
//var_dump($Stockdata);
//PRINT_R($Stockdata);
$api_url ='https://your_store.mybigcommerce.com/api/v2/products.json';
$ch = curl_init(); 
curl_setopt( $ch, CURLOPT_URL, $api_url ); 
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-type: application/json', 'Accept: application/json',  'Content-Length: ' . strlen($Stockdata)));  
curl_setopt( $ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, 0 ); 
curl_setopt( $ch, CURLOPT_USERPWD, "user_name:secret_key" ); 
curl_setopt( $ch, CURLOPT_SSL_VERIFYHOST, 0 );
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1 );                             
curl_setopt($ch, CURLOPT_POSTFIELDS, $Stockdata);  
$response = curl_exec( $ch );   

//echo'<pre>';
//var_dump($response);
//PRINT_R($response);
//echo'</pre>';
//decode the JSON
$result = json_decode($response); 
//print_r($result);
  
 ?>
		<tr>
			<td><?php echo $result->id;  ?></td>
			 td><?php echo $result->name;  ?></td>
			<td id="datass"><?php echo $result->description; ?></td>	
			<td><?php echo $result->type; ?></td>
			<td><?php echo $result->price;  ?></td> 															      
			<td><?php echo $result->calculated_price;  ?></td>
		
		 </tr>
    </tbody>
 </table>
		
