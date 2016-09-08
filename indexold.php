<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Symbion Opslagstavle</title>
    <link rel="stylesheet" href="css/foundation.min.css">
    <link href='https://fonts.googleapis.com/css?family=Oswald:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/style.css">

  </head>
  <body>
  
  <div class="top-bar">
    <h1 class="title">touchscreen.symbion.dk</h1>
  </div>
    
    <div class="row">

      <div class="large-4 columns">
        <div class="card dark" id="kantine-menu">
          <div class="callout">
            <h1>Kantinemenu</h1>
            <?php require_once 'kantine.php'; ?>
          </div><!-- /callout -->
        </div><!-- /card -->
        <div class="card dark" id="opslag">
          <div class="callout">
            <h1>Opslagstavle</h1>
            <?php require_once 'board.php'; ?>
          </div><!-- /callout -->
        </div><!-- /card -->
      </div><!-- /col -->

      <div class="large-4 columns">
        <div class="card dark" id="konference">
          <div class="callout">
            <h1>Symbion konferencecenter i dag</h1>
            <?php require_once 'widgets/roomstoday.php'; ?>
          </div><!-- /callout -->
        </div><!-- /card -->
      </div><!-- /col -->

      <div class="large-4 columns">
        <div class="card dark" id="events">
          <div class="callout">
            <h1>Begivenheder</h1>
            <?php require_once 'widgets/events.php'; ?>
          </div><!-- /callout -->
        </div><!-- /card -->
      </div><!-- /col -->

    </div><!-- /row -->
    

    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>
