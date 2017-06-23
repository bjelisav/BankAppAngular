angular.module('dbServices',[])
        .service('db',function($http){
          
          this.sendData = function(obj){
            $http({
              method : "POST",
              url : "php/addUser.php",
              data : obj
            }).then(function(result){
              console.log(result.data);
            },function(err){
              console.log(err);
            })
          }
          this.data = $http({
              method : "GET",
              url : "php/data.php"
            });

        })
