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
            <li class="active">
              <a href="index.php">Outpatient</a>
            </li>
            <li>
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
        <h1>New Outpatient</h1>
      </div>
      <div class="row">
        <div class="col-md-2 outPatientForm">
          <form action="#" id="outPatientFormAction" method="post" role="form">
            <div class="form-group">
              <input class="form-control" id="outPatientName" name="fullName" placeholder="Name" required="" type="text">
            </div>
            <div class="form-group">
              <input class="form-control" id="outPatientMobileNumber" name="mobileNumber" placeholder="Mobile Number" required="" type="text">
            </div>
            <div class="form-group">
              <input class="form-control" id="outPatientPriorityNumber" name="priorityNumber" placeholder="Priority Number" required="" type="text">
            </div>
            <div class="form-group">
              <select class="form-control" id="outPatientDept" name="department">
                <option value="ob_gyne">OB-Gyne</option>
                <option value="dental">Dental</option>
                <option value="medicine">Medicine</option>
                <option value="pedia">Pedia</option>
                <option value="surgical">Surgical</option>
              </select>
            </div>
            <button class="btn btn-primary btn-block" type="submit">Add to Queue</button>
          </form>
        </div>
        <div class="col-md-2">
          <div class="panel panel-default priorityControlPanel">
            <div class="panel-body">
              <em>OB-Gyne</em>
              <h1 class="currentPriorityNumber" id="CPN-ob_gyne">None</h1>
              <p>Current Priority Number</p>
              <button class="btn btn-primary btn-lg btn-block" id="outPatientNext-ob_gyne" type="button">
                <span class="glyphicon glyphicon-chevron-right"></span>
                Next
              </button>
            </div>
          </div>
          <div class="table-responsive">
            <table class="priorityLists table table-striped" id="PL-ob_gyne">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Name</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td colspan="2" style="text-align:center">
                    Loading...
                    <img alt="Load Priorities" src="assets/img/load.gif">
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="col-md-2">
          <div class="panel panel-default priorityControlPanel">
            <div class="panel-body">
              <em>Dental</em>
              <h1 class="currentPriorityNumber" id="CPN-dental">None</h1>
              <p>Current Priority Number</p>
              <button class="btn btn-primary btn-lg btn-block" id="outPatientNext-dental" type="button">
                <span class="glyphicon glyphicon-chevron-right"></span>
                Next
              </button>
            </div>
          </div>
          <div class="table-responsive">
            <table class="priorityLists table table-striped" id="PL-dental">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Name</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td colspan="2" style="text-align:center">
                    Loading...
                    <img alt="Load Priorities" src="assets/img/load.gif">
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="col-md-2">
          <div class="panel panel-default priorityControlPanel">
            <div class="panel-body">
              <em>Medicine</em>
              <h1 class="currentPriorityNumber" id="CPN-medicine">None</h1>
              <p>Current Priority Number</p>
              <button class="btn btn-primary btn-lg btn-block" id="outPatientNext-medicine" type="button">
                <span class="glyphicon glyphicon-chevron-right"></span>
                Next
              </button>
            </div>
          </div>
          <div class="table-responsive">
            <table class="priorityLists table table-striped" id="PL-medicine">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Name</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td colspan="2" style="text-align:center">
                    Loading...
                    <img alt="Load Priorities" src="assets/img/load.gif">
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="col-md-2">
          <div class="panel panel-default priorityControlPanel">
            <div class="panel-body">
              <em>Pedia</em>
              <h1 class="currentPriorityNumber" id="CPN-pedia">None</h1>
              <p>Current Priority Number</p>
              <button class="btn btn-primary btn-lg btn-block" id="outPatientNext-pedia" type="button">
                <span class="glyphicon glyphicon-chevron-right"></span>
                Next
              </button>
            </div>
          </div>
          <div class="table-responsive">
            <table class="priorityLists table table-striped" id="PL-pedia">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Name</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td colspan="2" style="text-align:center">
                    Loading...
                    <img alt="Load Priorities" src="assets/img/load.gif">
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="col-md-2">
          <div class="panel panel-default priorityControlPanel">
            <div class="panel-body">
              <em>Surgical</em>
              <h1 class="currentPriorityNumber" id="CPN-surgical">None</h1>
              <p>Current Priority Number</p>
              <button class="btn btn-primary btn-lg btn-block" id="outPatientNext-surgical" type="button">
                <span class="glyphicon glyphicon-chevron-right"></span>
                Next
              </button>
            </div>
          </div>
          <div class="table-responsive">
            <table class="priorityLists table table-striped" id="PL-surgical">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Name</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td colspan="2" style="text-align:center">
                    Loading...
                    <img alt="Load Priorities" src="assets/img/load.gif">
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <script src="assets/js/jquery-1.11.1.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/ajax.js"></script>
  </body>
</html>
