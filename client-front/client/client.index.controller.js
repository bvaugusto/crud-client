(function(){
    'use strict';
    angular.module('client')
        .controller('ClientController', ClientController);

    function ClientController(ClientService) {
        var vm = this;
        vm.clintService = ClientService.query();
    }
})();