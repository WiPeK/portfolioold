'use strict';

var app = angular.module('PortfolioApp', ['ngRoute', 'ngMessages', 'ngResource', 'ngAnimate', 'easypiechart', 'countTo'])
	.config(function($routeProvider, $locationProvider){
		$routeProvider
			.when('/', {
				controller: 'HomeCtrl',
				templateUrl: 'assets/views/home.php'
			})
			.when('/cv', {
				controller: 'CVCtrl',
				templateUrl: 'assets/views/cv.php'
			})
			.when('/projekty', {
				controller: 'ProjectCtrl',
				templateUrl: 'assets/views/projekty.php'
			})
			.when('/projekty/portfolio', {
				controller: 'PrPortfolioCtrl',
				templateUrl: 'assets/views/projects/portfolio.php'
			})
			.when('/projekty/metin2-cms', {
				controller: 'PrMetinCtrl',
				templateUrl: 'assets/views/projects/metin.php'
			})
			.when('/projekty/wipek-cms', {
				controller: 'PrWipekCtrl',
				templateUrl: 'assets/views/projects/wipek.php'
			})
			.when('/projekty/tesla', {
				controller: 'PrTeslaCtrl',
				templateUrl: 'assets/views/projects/tesla.php'
			})
			.when('/projekty/druk-3d', {
				controller: 'PrDrukCtrl',
				templateUrl: 'assets/views/projects/druk.php'
			})
			.when('/o-mnie', {
				controller: 'AboutCtrl',
				templateUrl: 'assets/views/about.php'
			})
			.when('/kontakt', {
				controller: 'ContactCtrl',
				templateUrl: 'assets/views/contact.php'
			})
			.when('/projekty/mapy', {
				controller: 'PrMapyCtrl',
				templateUrl: 'assets/views/projects/mapy.php'
			})
			.when('/projekty/kamienie', {
				controller: 'PrKamienieCtrl',
				templateUrl: 'assets/views/projects/kamienie.php'
			});
			//.otherwise({redirectTo: base_url});

		$locationProvider.html5Mode(true);	
	});