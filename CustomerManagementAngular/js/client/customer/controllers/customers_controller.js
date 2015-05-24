customers.controller('CustomerListCtrl', ['$scope', 'customerService', '$location',
    function ($scope, customerService, $location) {

        // callback for ng-click 'editCustomer':
        $scope.editCustomer = function (customerId) {
            $location.path('/customers/' + customerId +'/edit');
        };

        // callback for ng-click 'deleteCustomer':
        $scope.deleteCustomer = function (customerId) {
            customerService.deleteCustomer(customerId).then( function(result)
                {
                    var customers = $scope.customers;
                    angular.forEach($scope.customers, function(customer, key) {
                        if(customer.id === customerId)
                        {
                            $scope.customers.splice(key,1);
                        }
                    });

                   // $location.path("/customers")
                });
            
        };

        // callback for ng-click 'createCustomer':
        $scope.createNewCustomer = function () {
            $location.path('/customers/create');
        };

        customerService.retrieveCustomers().then( function(result)
        {
            $scope.customers = result;
            $location.path("/customers")
        });

        
    }]);

customers.controller('CustomerDetailCtrl', ['$scope', '$routeParams', 'customerService', '$location',
    function ($scope, $routeParams, customerService, $location) {

        // callback for ng-click 'updateCustomer':
        $scope.updateCustomer = function () {
            customerService.updateCustomer($scope.customer).then( function(result)
            {
                $location.path("/customers")
            });
        };

        // callback for ng-click 'cancel':
        $scope.cancel = function () {
            $location.path('/customers');
        };

        var customerId = $routeParams['id']
        customerService.retrieveCustomerById(customerId).then( function(result)
        {
            $scope.customer = result;
           
        });
        
    }]);

customers.controller('CustomerCreationCtrl', ['$scope', 'customerService', '$location',
    function ($scope, customerService, $location) {

        // callback for ng-click 'createNewCustomer':
        $scope.customer = {}
        $scope.createNewCustomer = function () {
            
            customerService.addCustomer($scope.customer).then( function(result)
            {
                
                $location.path("/customers")
            });
        }
    }]);
