angular.module('main',[
              "ngRoute",
              "accountsController",
              "editAccountsController",
              "addUserController",
              "editUserController",
              "dbServices",
              "timeController"
            ])
      .config(function($routeProvider,$locationProvider){
        $locationProvider.hashPrefix("");
        $routeProvider
          .when('/',{
            templateUrl : "pages/accounts.html",
            controller : "accountsCtrl"
          })
          .when('/editAccounts',{
            templateUrl : "pages/editAccounts.html",
            controller : "editAccCtrl"
          })
          .when('/addUser',{
            templateUrl : "pages/addUser.html",
            controller : "addUserCtrl"
          })
          .when('/editUser',{
            templateUrl : "pages/editUser.html",
            controller : "editUserCtrl"
          })
      })
