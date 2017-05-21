<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="" name="description">
    <meta content="" name="author">
    <title>IQS | Outpatient</title>
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button class="navbar-toggle" data-target=".navbar-collapse" data-toggle="collapse" type="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Intelligent Queuing System</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li>
              <a href="index.php">Outpatient</a>
            </li>
            <li class="active">
              <a href="settings.php">Settings</a>
            </li>
            <li>
              <a href="screen.php">Screen</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="page-header">
        <h1>Settings</h1>
      </div>
      <div class="row">
        <div class="col-md-8">
          <form action="savesettings.php" method="post" role="form">
            <div class="form-group">
              <label for="messageFormat">Message Format</label>
              <textarea class="form-control" id="messageFormat" name="message_format" rows="8"><?php echo (isset($message_format)) ? $message_format : ''; ?></textarea>
            </div>
            <button class="btn btn-default" type="submit">Submit</button>
          </form>
        </div>
        <div class="col-md-4">
          <h3>Formats</h3>
          <ul>
            <li>:name: - Display the name of the outpatient.</li>
            <li>:dept: - Display the department of the outpatient.</li>
          </ul>
        </div>
      </div>
    </div>
    <script src="assets/js/jquery-1.11.1.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/ajax.js"></script>
  </body>
</html>
