angular.module("editAccountsController",[])
        .controller('editAccCtrl',function($scope,db){
          $scope.accounts = [];
          db.data.then(function(result){
            $scope.accounts = result.data;
          });
        })
