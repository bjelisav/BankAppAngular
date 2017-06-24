angular.module('addUserController',['dbServices'])
        .controller('addUserCtrl',function($scope,db,$location,$log){

          $scope.sendData = function(){
            db.sendData({
              name : $scope.name,
              deposit : $scope.deposit,
              card : $scope.card
            })
            $location.path("/accounts");
          };
        })
