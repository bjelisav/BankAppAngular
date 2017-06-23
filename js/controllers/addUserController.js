angular.module('addUserController',['dbServices'])
        .controller('addUserCtrl',function($scope,db){
          $scope.sendData = function(){
            db.sendData({
              name : $scope.name,
              deposit : $scope.deposit,
              card : $scope.card
            })
          };
        })
