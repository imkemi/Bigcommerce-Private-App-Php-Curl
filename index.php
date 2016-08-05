<table class="table" style="table-layout: fixed">
		 <thead>
			 <tr>
				<th>Product Id</th>
				<th>Product Name</th>
				<th>Product Description</th>
				<th>SKU</th> 
				<th>Price</th>			
				<th>Calculated Price</th>				
			 </tr>
		 </thead>
		 <tbody>
		 
	 <?php		 
         $api_url = 'https://your_store.mybigcommerce.com/api/v2/products.json';
         $ch = curl_init(); curl_setopt( $ch, CURLOPT_URL, $api_url ); 
         curl_setopt( $ch, CURLOPT_HTTPHEADER, array ('Accept: application/json', 'Content-Length: 0') );                                   
         curl_setopt( $ch, CURLOPT_CUSTOMREQUEST, 'GET'); 
         curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, 0 ); 
         curl_setopt( $ch, CURLOPT_USERPWD, "user_name:secret_key" ); 
         curl_setopt( $ch, CURLOPT_SSL_VERIFYHOST, 0 );
         curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1 );  
         $response = curl_exec( $ch );   
         $products = json_decode($response); 
         //echo '<pre>';
        // print_r($products);		
		 foreach($products as $value)
		{		      
	?>
		 <tr>
			<td><?php echo $value->id;  ?></td>
			<td><?php echo $value->name;  ?></td>
			<td id="datass"><?php echo $value->description; ?></td>	
			<td><?php echo $value->sku; ?></td>
			<td><?php echo $value->price;  ?></td> 															      
			<td><?php echo $value->calculated_price;  ?></td>		
		 </tr>
		
	<?php		 
	  }?>
	<tbody>
</table>
<style>
.table{
	    border: 1px solid rgba(128, 128, 128, 0.39);
 }
.table td {
        border: 1px solid rgba(128, 128, 128, 0.39);
}
.table th {
    border: 1px solid rgba(128, 128, 128, 0.39);
    background: #1ca2ec;
    color: #fff;
}
 </style>