(function(){
    'use strict';
    angular.module('client')
    .config(
        [
            '$routeProvider',
            function($routeProvider, $locationProvider){
                $routeProvider
                .when('/',{
                    templateUrl: './home/home.index.html',
                    controller: 'HomeController',
                    controllerAs: 'homeIndex'
                })
                .when('/client', {
                    templateUrl: './client/client.index.html',
                    controller: 'ClientController',
                    controllerAs: 'clientIndex'
                })
                    .when('/client/create',{
                        templateUrl: './client/leitor.cadastrar.html',
                        controller: 'ClientCreateController',
                        controllerAs: 'clientCreate'

                    })
                .otherwise({ redirectTo:'/'});
            }
        ]
    )
})();