angular.module('accountsController',[])
        .controller('accountsCtrl',function($scope,db){
          $scope.accounts = [];
          db.data.then(function(result){
            $scope.accounts = result.data;
          });

        })
