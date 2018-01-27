(function () {
    'use strict';
    angular.module('clientapp')
        .factory('ClientService', function ($resource) {
            return $resource(
                'http://127.0.0.1:8000/api/client/:id',
                {id: '@id'},
                {update:{method: 'PUT'}}
            )
        });
})();