'use strict';

/* App Module */

var dreamsApp = angular.module('dreamsApp', ['ngRoute',
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
    .when('/edit/:pisoId',{
            templateUrl: '../resources/views/layouts/piso_edit.html',
            controller:'pisoCtrl'
        })
    .when('/view/:pisoId',{
            templateUrl: '../resources/views/layouts/piso_view.html',
            controller:'pisoCtrl'
        }) 

    .otherwise({
            redirectTo: '/'
        });
});
