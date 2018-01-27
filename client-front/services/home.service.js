(function () {
    'use strict';
    angular.module('clientapp')
        .factory('HomeService', function ($resource) {
            return $resource(
                'http://127.0.0.1:8000/api/home/:id',
                {id: '@id'},
                {update:{method: 'PUT'}}
            )
        });
})();