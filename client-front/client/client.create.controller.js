(function () {
    'use strict';
    angular.module('clientapp')
        .controller('ClientCreateController', ClientCreateController);

    function ClientCreateController(ClientService, toastr, $location, $scope, $http, viaCep) {
        var vm = this;
        vm.titlePage = 'Cadastro Cliente';
        vm.clientService = new ClientService;
        vm.saveClient = saveClient;

        $scope.buscaCEP = function () {
            var cep = $scope.clientCreate.clientService.zipcode;

            if(typeof cep === "number"){
                viaCep.get(cep.toString()).then(function(response){
                    $scope.clientCreate.clientService.street = response.logradouro;
                    $scope.clientCreate.clientService.city = response.localidade;
                    $scope.clientCreate.clientService.neighborhood = response.bairro;
                });
            }
        }

        function saveClient(form) {
            if(form.$valid){
                vm.clientService.$save().then(
                    function success (data) {
                        if(data.success){
                            toastr.success(data.message);
                            $location.path('/');
                        }else{
                            var msg = data.message;
                            toastr.error(msg, 'Error');
                            $location.path('/');
                        }
                    }
                )
            }
        }
    }
})();