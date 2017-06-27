angular.module('addUserController',[])
        .controller('addUserCtrl',function($scope,db,$location){

          $scope.sendData = function(){
            db.sendData({
              name : $scope.name,
              deposit : $scope.deposit,
              card : $scope.card
            }).then(function(){
              $location.path('/');
            })

          };
        })
