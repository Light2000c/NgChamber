var app = angular.module('profileApp',[])

app.controller('profileCtrl', function($scope, $http){

    $scope.showForm = false;

    $scope.toggleForm = function(){
        $scope.showForm = !$scope.showForm;
    }
    
});