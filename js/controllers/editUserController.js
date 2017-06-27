angular.module('editUserController',[])
        .controller('editUserCtrl',function($scope,db,$location){
          $scope.selected = db.getUser();
          $scope.account = {};
          $scope.account.id = $scope.selected.id;
          $scope.account.name = $scope.selected.name;
          $scope.account.deposit = $scope.selected.deposit;
          $scope.account.card = $scope.selected.card;
          var account = $scope.account;
          $scope.editUser = function(){
            db.editUser(account);
            db.data().then(function(result){
              $location.path('/');
            });
          }
        })
