'use strict';

var customers = angular.module("customersManagement.customers", []);

// Declare app level module which depends on filters, and services
angular.module('customersManagement', ['customersManagement.filters'
	, 'customersManagement.directives', 'customersManagement.controllers'
	, 'customersManagement.customers']).
    config(['$routeProvider', function ($routeProvider) {
       
        $routeProvider
        .when('/customers', {
        	templateUrl: 'js/client/customer/views/customer-list.html', 
        	controller: 'CustomerListCtrl'
        })
        .when('/customers/create', {
            templateUrl: 'js/client/customer/views/customer-creation.html', 
            controller: 'CustomerCreationCtrl'
        })
        .when('/customers/:id/edit', {
        	templateUrl: 'js/client/customer/views/customer-detail.html', 
        	controller: 'CustomerDetailCtrl'
        })
        
        //.otherwise({redirectTo: '/'});
    }]);
