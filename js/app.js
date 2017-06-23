angular.module('main',["ngRoute","accountsController","editAccountsController","addUserController","dbServices"])
      .config(function($routeProvider,$locationProvider){
        $locationProvider.hashPrefix("");
        $routeProvider
          .when('/accounts',{
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
      })
