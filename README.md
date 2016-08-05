# Bigcommerce-Private-App-Php-Curl

Requirements for this connection
------------------------------------
    PHP 5.3 or greater
    cUrl extension enabled

To connect to the API with basic auth you need the following:
--------------------------------------------------------------
    Secure URL pointing to a Bigcommerce store
    Username of an authorized admin user of the store
    API key for the user

To generate an API key, go to Control Panel > Users > Edit User and make sure the 'Enable the XML API?' is ticked.
-------------------------------------------------------------------------------------------------------------------
To connect to the API with OAuth you will need the following:

    client_id
    auth_token
    store_hash
Configuration
-------------------------
Provide your credentials to the static configuration hook to prepare the API client for connecting to a store on the Bigcommerce platform: 
         $api_url = 'https://your_store.mybigcommerce.com/api/v2/products.json';
         $ch = curl_init(); curl_setopt( $ch, CURLOPT_URL, $api_url ); 
         curl_setopt( $ch, CURLOPT_HTTPHEADER, array ('Accept: application/json', 'Content-Length: 0') );                      
         curl_setopt( $ch, CURLOPT_CUSTOMREQUEST, 'GET'); 
         curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, 0 ); 
         curl_setopt( $ch, CURLOPT_USERPWD, "user_name:secret_key" ); 
         curl_setopt( $ch, CURLOPT_SSL_VERIFYHOST, 0 );
         curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1 );  
