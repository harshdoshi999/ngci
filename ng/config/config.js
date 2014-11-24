/** APP MODULE INIT */
var App = angular.module('demoApp', ['ngRoute','ngCookies','ipCookie']);

/** APP RUNTIME CONFIG */
App.run(['$rootScope','ipCookie','$location',function($rootScope,ipCookie,$location){
	/** DEFINE GLOBAL VARIABLES HERE */
	$rootScope.title = "ng with CI";

}]);

App.config(['$routeProvider', '$locationProvider',function($routeProvider,$locationProvider) {
    $routeProvider.when('/login', {
        controller: 'authController',
        templateUrl: 'ng/views/loginUI.html'
    })
    .when('/signup', {
        controller: 'signUpController',
        templateUrl: 'ng/views/signUpUI.html'
    })
    .when('/home', {
        controller: '',
        templateUrl: 'ng/views/home.html'
    })
    .when('/about', {
        controller: '',
        templateUrl: 'ng/views/about.html'
    })
    .when('/contact', {
        controller: '',
        templateUrl: 'ng/views/contact.html'
    })
    .otherwise({ redirectTo: '/login' });
}]);