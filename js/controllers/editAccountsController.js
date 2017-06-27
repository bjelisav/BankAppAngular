angular.module("editAccountsController",[])
        .controller('editAccCtrl',function($scope,db,$location){
          $scope.accounts = [];

          db.data().then(function(result){
            $scope.accounts = result.data;
          });
          $scope.deleteUser = function(x){
            db.deleteUser(x);
            db.data().then(function(result){
              $location.path('/');
            });
          }
          $scope.selectUser = function(account){
            db.selectUser(account);
          }
        })
