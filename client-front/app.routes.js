(function(){
    'use strict';
    angular.module('clientapp')
    .config(
        [
            '$routeProvider', '$locationProvider',
            function($routeProvider){
                $routeProvider
                .when('/',{
                    templateUrl: '/home/home.index.html',
                    controller: 'HomeController',
                    controllerAs: 'homeIndex'
                })
                .when('/client/create',{
                    templateUrl: '/client/client.create.html',
                    controller: 'ClientCreateController',
                    controllerAs: 'clientCreate'

                })
                .when('/client/:id/edit',{
                    templateUrl: '/client/client.edit.html',
                    controller: 'ClientEditController',
                    controllerAs: 'clientEdit'

                })
                .otherwise({ redirectTo:'/'});
            }
        ]
    )
})();