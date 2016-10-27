/**
 * Created by Administrator on 2016/10/20.
 */
//表单验证 angular js
var app = angular.module('myApp', []);
app.controller('validateCtrl',['$scope',function($scope){
    var chooseUn=/^[0-9]{8,12}$/;
    var choosePw=/^[A-Z][A-Za-z]{5,12}$/ ;
    $scope.userName1=false;
    $scope.password1=false;
    $scope.userName2=true;
    $scope.password2=true;

    $scope.check=function() {

        var result = chooseUn.test($scope.userName)
        if (result == true) {
            $scope.userName1 = false;
            $scope.userName2=$scope.userName1;
        }
        if (result == false){
            $scope.userName1 = true;
            $scope.userName2=$scope.userName1;
        }
    }
    $scope.check1=function(){
        var result = choosePw.test($scope.password)
        if (result == true) {
            $scope.password1 = false;
            $scope.password2= $scope.password1;
        }
        if (result == false){
            $scope.password1 = true;
            $scope.password2= $scope.password1;

        }

    }


}] )

