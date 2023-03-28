var app = angular.module("myApp", []);

app.controller('categoryCtrl', function ($scope, $http) {
  $scope.name = "John Doe";
  $scope.categories;
  $scope.models;

  
  $scope.getCategory = async function(model){
    var url = `http://127.0.0.1:8000/api/category/${model}`
    await $http.get(url).then(function (response) {
    $scope.categories = response.data;
    console.log($scope.categories);

    });

  }


});



