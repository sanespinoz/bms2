'use strict';

/* App Module */

var dreamsApp = angular.module('dreamsApp', ['ngRoute','lumx',
    'dreamsControllers',
    'dreamsServices'
    
    ]);

dreamsApp.config(function($routeProvider) {
    $routeProvider
   .when("/", {
          templateUrl : "../resources/views/layouts/pisos_list.html",
        controller : "pisoCtrl"
    })
    .when("/create", {
        templateUrl : "../resources/views/layouts/piso_create.html",
        controller : "pisoCtrl"
    })
    .when('/list', {
           templateUrl : "../resources/views/layouts/pisos_list.html",
        controller : "pisoCtrl"
        })
   /* .when('/edit',{
            templateUrl: '../resources/views/layouts/piso_edit.html',
            controller:'pisoCtrl'
        })
        */

    .otherwise({
            redirectTo: '/'
        });
});
