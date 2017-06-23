angular.module("editAccountsController",[])
        .controller('editAccCtrl',function($scope,db,$location){
          $scope.accounts = [];
          $scope.selected = {};
          db.data.then(function(result){
            $scope.accounts = result.data;
          });
          $scope.deleteUser = function(x){
            db.deleteUser(x);
            $location.path('/editAccounts');
          }
          $scope.selectUser = function(user){
            $scope.selected = user;
          }
          $scope.editUser = function(x){
            db.editUser(x);
            // $location.path('/editAccounts');
          }
        })
