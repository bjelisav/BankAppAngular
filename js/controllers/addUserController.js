angular.module('addUserController',['dbServices'])
        .controller('addUserCtrl',function($scope,db,$location){
          $location.path('/accounts');
          $scope.sendData = function(){
            db.sendData({
              name : $scope.name,
              deposit : $scope.deposit,
              card : $scope.card
            })
          };
        })
