 <?php
      echo "<h2>Simple Twitter API Test</h2>";
      
      require_once('TwitterAPIExchange.php');
       
      
      $settings = array(
          'oauth_access_token' => "236580824-esBajwDsoa4GcuKpA7YxCsf0YG8ALho2161b5ybl",
          'oauth_access_token_secret' => "bhIZlTFyBt01ej5p3aHbPpffDa4zx4akUdJMEfBsdtz9A",
          'consumer_key' => "LvI9ZJIEvtxTwL55h93T4NlbE",
          'consumer_secret' => "jqjitoOySSGhgGxec2EkxnjTqdC5FBYQx94I2d5SWK1SLy70Cl"
      );
      
      $url = "https://api.twitter.com/1.1/statuses/user_timeline.json";
      
      $requestMethod = "GET";
      
      $username = htmlentities($_GET['usrval']);
      
      $getfield = '?screen_name='.$username.'&count=20';
      
      echo json_encode($username);
    ?>