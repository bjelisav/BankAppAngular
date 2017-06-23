angular.module('dbServices',[])
        .service('db',function($http){

          this.sendData = function(obj){
            $http({
              method : "POST",
              url : "php/addUser.php",
              data : obj
            }).then(function(result){

            },function(err){
              console.log(err);
            })

          }
          this.data = $http({
              method : "GET",
              url : "php/data.php"
            });
          this.deleteUser = function(obj){
            $http({
              method: "POST",
              url: "php/deleteUser.php",
              data : obj
            })
          }
          this.editUser = function(obj){
            $http({
              method : "POST",
              url : "php/editUser.php",
              data: obj
            })
          }

        })
