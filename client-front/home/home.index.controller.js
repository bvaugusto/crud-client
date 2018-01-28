(function(){
    'use strict';
    angular.module('clientapp')
        .controller('HomeController', HomeController);

    function HomeController(HomeService, toastr, $scope, $location, $routeParams) {
        var vm = this;
        vm.titlePage = 'Lista de Clientes';
        vm.homeService = HomeService.query();
        vm.deleteClient = deleteClient;

        function deleteClient(client) {
            client
                .$remove()
                .then(
                    function success(data) {
                        if(data.success){
                            toastr.success(data.message);
                            $location.path('/ator');
                        }else{
                            var msg = data.message;
                            toastr.error(msg, 'Error');
                            $location.path('/');
                        }
                    }
                )
        }
    }
})();