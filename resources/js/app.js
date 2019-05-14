/**
 * First, we will load all of this project's Javascript utilities and other
 * dependencies. Then, we will be ready to develop a robust and powerful
 * application frontend using useful Laravel and JavaScript libraries.
 */

require('./bootstrap');

// Main application controller
 
var myApp = angular.module('myApp',['ngRoute','ngCookies']);
 
myApp.config(['$routeProvider','$locationProvider',function($routeProvider,$locationProvider) {
	$routeProvider.when('/',{
		templateUrl:'templates/login.html',
		controller:'frontendController'
	});
 
	$routeProvider.when('/dashboard',{
		templateUrl:'templates/dashboard.html',
		controller:'frontendController'
	});
 
	$routeProvider.when('/logout',{
		templateUrl:'templates/logout.html',
		controller:'frontendController'
	});
 
	$routeProvider.otherwise('/');
}
]);