(function () {
    'use strict';

    angular.module('clientapp')
        .controller('ClientEditController', ClientEditController);

    function ClientEditController(ClientService, toastr, $scope, $location, $routeParams, $http, viaCep) {
        var vm = this;
        vm.titlePage = "Editar Cliente";
        vm.clientService = ClientService.get({id: $routeParams.id});
        vm.editClient = editClient;

        $scope.buscaCEP = function () {
            var cep = $scope.clientEdit.clientService.zipcode;

            viaCep.get(cep).then(function(response){
                $scope.clientEdit.clientService.street = response.logradouro;
                $scope.clientEdit.clientService.city = response.localidade;
                $scope.clientEdit.clientService.neighborhood = response.bairro;
            });

        }

        function editClient(form) {
            vm.clientService
                .$update()
                .then(

                    function success (data) {
                        if(data.success){
                            toastr.success(data.message);
                            $location.path('/');
                        }else{
                            var msg = data.message;
                            toastr.error(msg, 'Error');
                        }
                    }
                );
        }
    }

})();