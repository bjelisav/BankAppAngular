<?php 
session_start();
if (empty($_SESSION['id'])) {
  header('Location: index.php');
  session_unset();
}

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
       <a href="php/logOut.php" type="button" name="logOut" class="btn btn-default col-lg-2 col-lg-offset-10">Log Out</a>
      </div>
    </div>
 <ng-view></ng-view>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
 </body>
 </html>
