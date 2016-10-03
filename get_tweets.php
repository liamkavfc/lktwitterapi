<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liam Kenny Twitter API</title>
    <link rel="shortcut icon" href="/images/favicon.ico" />
    <link rel="stylesheet" href="css/app.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="js/form.js"></script>
  </head>
  <body>
     <div class="row">
          
          <header>
               <div class="large-10 medium-11 columns medium-centered">
                   
                   <div class="logo large-2 medium-3 columns">
                         <img src="/images/logo.png" alt="Logo" />
                   </div>
                   <div class="title large-10 medium-9 columns">
                         <h1>The Imperial Tux Empire</h1>
                   </div>
               
               </div>
               
          </header>
          
          <div class="medium-12 columns">
               
               <div class="twitter-search">
                
                    <div class="large-8 medium-11 columns medium-centered">
                         
                         <p class="text-center">
                              This is a simple application that reads tweets from Twitter.</br>
                              Go ahead and find recent tweets from any user!
                         </p>
               
                         <form id="username" name="username" action="get_tweets.php" method="post">
                              <label for="usrval" class="text-left">Please enter a Twitter @username
                                   <input type="text" name="usrval" id="usrval" value="<?php echo $_POST['usrval'] ?>" >
                              </label>
                              <label for="count" class="text-left">No. of tweets
                                   <input type="number" name="count" id="count" value="<?php echo $_POST['count'] ?>">
                              </label>
                              <input type="submit" value="Search" class="button">
                              <input type="reset" value="Clear" class="button">
                         </form>
                         <?php
                          
                          require_once('TwitterAPIExchange.php');
                           
                          
                          $settings = array(
                              'oauth_access_token' => "236580824-esBajwDsoa4GcuKpA7YxCsf0YG8ALho2161b5ybl",
                              'oauth_access_token_secret' => "bhIZlTFyBt01ej5p3aHbPpffDa4zx4akUdJMEfBsdtz9A",
                              'consumer_key' => "LvI9ZJIEvtxTwL55h93T4NlbE",
                              'consumer_secret' => "jqjitoOySSGhgGxec2EkxnjTqdC5FBYQx94I2d5SWK1SLy70Cl"
                          );
                          
                          $url = "https://api.twitter.com/1.1/statuses/user_timeline.json";
                          
                          $requestMethod = "GET";
                          
                          $username = $_POST['usrval'];
                          
                          $count = $_POST['count'];
                          
                          $getfield = '?screen_name='.$username.'&count='.$count;
                          
                          $twitter = new TwitterAPIExchange($settings);
                              $string = json_decode($twitter->setGetfield($getfield)
                                                    ->buildOauth($url, $requestMethod)
                                                    ->performRequest(),$assoc = TRUE);
                        ?>
                         <ul class="twitter_container">
                              <?php
                                   foreach($string as $items)
                                   {
                                        echo '<li class="tweet_container">';
                                        echo '<img src="'.$items["user"]["profile_image_url"].'" />';
                                        echo '<ul><li><b>'.$items["user"]["name"].'</b></li>';
                                        echo '<li><p>@'.$items["user"]["screen_name"].'</p></li></ul>';
                                        echo '<p>'.$items["text"].'</p>';
                                        echo '</li>';
                                   }
                              ?>
                         </ul>
                    </div>
               </div>
               
          </div>
    </div>
    <script src="bower_components/jquery/dist/jquery.js"></script>
    <script src="bower_components/what-input/what-input.js"></script>
    <script src="bower_components/foundation-sites/dist/foundation.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>

