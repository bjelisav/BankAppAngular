angular.module('dbServices',[])
        .service('db',function($http){
          var self = this;
          var selectedUser = "";
          this.selected = {};
          this.sendData = function(obj){
            return $http({
              method : "POST",
              url : "php/addUser.php",
              data : obj
            })
          };
          this.data = function(){
            return $http({
                method : "GET",
                url : "php/data.php"
              });
          };
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
          this.selectUser = function(user){
            self.selected = user;
          }
          this.getUser = function(){
            return self.selected;
          }
        })
