'use strict';

/* Services */

var dreamsServices = angular.module('dreamsServices', ['ngResource']);

dreamsServices.factory('Log', ['$resource',
    function ($resource) {
        return $resource("auth/log", {}, {
            get: {method: 'GET'}
        });
    }]);

dreamsServices.factory('Login', ['$resource',
    function ($resource) {
        return $resource("auth/login", {}, {
            save: {method: 'POST'}
        });
    }]);

dreamsServices.factory('Logout', ['$resource',
    function ($resource) {
        return $resource("auth/logout", {}, {
            get: {method: 'GET'}
        });
    }]);



dreamsServices.factory('Piso',function($http) {

      return {
            get : function() {
                return $http.get('pisos');
            },
            show : function(id) {
                return $http.get('pisos/' + id);
            },
            save : function(pisoData) {
                return $http({
                    method: 'POST',
                    url: 'pisos',
                    headers: { 'Content-Type' : 'application/x-www-form-urlencoded' },
                    data: $.param(pisoData)
                });
            },
            delete : function(id) {
                return $http.delete('pisos/' + id);
            },
            update : function(id, nombre, descripcion) {
             return $http.put('pisos/' + id,{nombre, descripcion});      
        }
    }
});
