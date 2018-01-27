(function(){
    'use strict';
    angular.module('clientapp')
        .controller('HomeController', HomeController);

    function HomeController(HomeService) {
        var vm = this;
        vm.titlePage = 'Lista de Clientes';
        vm.homeService = HomeService.query();
    }
})();