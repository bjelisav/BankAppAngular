<?php
session_start();
include('php/connection.php');
 ?>
 <!DOCTYPE html>
  <html lang="en" ng-app='main'>
  <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>BankApp</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="css/main.css">
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js" charset="utf-8"></script>
  <script src="https://code.angularjs.org/1.6.4/angular-route.min.js" charset="utf-8"></script>
  <script src="js/controllers/accountsController.js" charset="utf-8"></script>
  <script src="js/controllers/editAccountsController.js" charset="utf-8"></script>
  <script src="js/controllers/addUserController.js"charset="utf-8"></script>
  <script src="js/controllers/timeController.js" charset="utf-8"></script>
  <script src="js/controllers/editUserController.js" charset="utf-8"></script>
  <script src="js/services/dbServices.js" charset="utf-8"></script>
  <script src="js/app.js" charset="utf-8"></script>
  </head>
  <body>
    <div class="jumbotron text-center">
       <div class="container-fluid">
       <div class="row" ng-controller="timeCtrl">

         <span class="well text-left col-lg-2 col-lg-offset-1">{{today | date:'mediumDate'}}</span>
         <div class="col-lg-4 col-lg-offset-1">
         <h1>Bank App</h1>
         <a href="#/" type="button" class="btn btn-primary">Accounts</a>
         <a href="#/addUser" type="button" class="btn btn-success">Add Account</a>
         <a href="#/editAccounts" type="button" class="btn btn-warning">Edit Accounts</a>
         </div>
         <span class="well text-left col-lg-2 col-lg-offset-1">{{today | date:'shortTime'}}</span>
       </div>
       </div>
     </div>
 <div class="row col-lg-4 col-lg-offset-4">
   <div class="well">


      <form action="php/checkCred.php" method="post">
        <input type="text" name="username" value="" placeholder="username" class="form-control"><br>
        <input type="password" name="password" value="" placeholder="password" class="form-control"><br>
        <input type="submit" name="login" value="Log In" class="btn btn-primary form-control">
      </form>
    </div>

  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
  </html>
<?php
mysqli_close($db);
 ?>
