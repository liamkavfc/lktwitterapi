<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liam Kenny Twitter API</title>
    <link rel="stylesheet" href="css/app.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  </head>
  <body>
    <div class="row">
        
        <header>
            <div class="medium-10 columns medium-centered">
                
                <div class="logo medium-2 columns">
                    <img src="/images/logo.png" alt="Logo" />
                </div>
                <div class="title medium-10 columns">
                    <h1>The Imperial Tux Empire</h1>
                </div>
            
            </div>
            
        </header>
        
        <div class="medium-12 columns">
            <div class="twitter-search">
                
                <div class="medium-8 columns medium-centered">
                
                    <form id="username" name="username" action="get_tweets.php" method="post">
                        <label for="usrval" class="text-left">Please enter a Twitter @username</label>
                        <input type="text" name="usrval" id="usrval">
                        <input type="submit" value="Search" class="button">
                        <input type="reset" value="Clear" class="button">
                    </form>
                
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
