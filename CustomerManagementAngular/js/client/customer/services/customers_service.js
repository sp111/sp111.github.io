customers.factory("customerService", ["$http", "$q", function ($http, $q) {

    return {
        addCustomer: function (customer) {

            var deferred = $q.defer();
            $http.post("//localhost/sp111.github.io/CustomerService/public/api/customer", customer).success(function (result) {

                deferred.resolve(result);

            }).error(function (error) {
                deferred.reject(error);
            });

            return deferred.promise;
        },

        retrieveCustomers: function () {

            var deferred = $q.defer();
            $http.get("//localhost/sp111.github.io/CustomerService/public/api/customer").success(function (result) {

                deferred.resolve(result);

            }).error(function (error) {
                deferred.reject(error);
            });

            return deferred.promise;
        },

        updateCustomer: function (customer) {

            var deferred = $q.defer();
            $http.put("//localhost/sp111.github.io/CustomerService/public/api/customer/"+ customer.id, customer).success(function (result) {

                deferred.resolve(result);

            }).error(function (error) {
                deferred.reject(error);
            });

            return deferred.promise;
        },
        deleteCustomer: function (customerId) {

            var deferred = $q.defer();
            $http.delete("//localhost/sp111.github.io/CustomerService/public/api/customer/"+ customerId).success(function (result) {

                deferred.resolve(result);

            }).error(function (error) {
                deferred.reject(error);
            });

            return deferred.promise;
        },

        retrieveCustomerById: function (customerId) {

            var deferred = $q.defer();
            $http.get("//localhost/sp111.github.io/CustomerService/public/api/customer/"+ customerId).success(function (result) {

                deferred.resolve(result);

            }).error(function (error) {
                deferred.reject(error);
            });

            return deferred.promise;
        }
    }
}])
