/**
 * Created by Administrator on 2016/10/22.
 */
(function () {

    var msgApp = angular.module('msgApp', ['ngRoute']);

    msgApp.config(['$routeProvider',function($routeProvider) {
        $routeProvider.
        when('/home',{
            templateUrl:'../html/home.html',

        }).
        when('/search',{
            templateUrl:'../html/search.html',

        }).
        when('/update',{
            templateUrl:'../html/update.html',

        }).
        when('/add',{
            templateUrl:'../html/add.html',

        }).
        when('/delete',{
            templateUrl:'../html/delete.html',
           
        }).
        otherwise({
            redirectTo:'/home'
        })

    }])


})();