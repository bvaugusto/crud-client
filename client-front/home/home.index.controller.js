(function(){
    'use strict';
    angular.module('client')
        .controller('HomeController', HomeController);

    function HomeController(HomeService, $location, $routeParams) {
        var vm = this;
        vm.homeService = HomeService.query();
    }
})();