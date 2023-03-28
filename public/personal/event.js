var app = angular.module("eventApp", []);

app.controller('eventCtrl',function($scope, $http){
  $scope.name = "clinton";
    $scope.events;
    $scope.nextpage;
  $scope.prevpage;
  $scope.currentpage;
  $scope.pages = [];
  $url = 'http://127.0.0.1:8000/api/events';
  $scope.search;


  var init = function(){
    loadEvents();
  }

  loadEvents = async function(){
    $scope.pages = [];
    await $http.get($url).then(function (response) {
      $scope.events = response.data.data;
      nextpage = response.data.next_page_url;
      prevpage = response.data.prev_page_url;
      pages = Math.floor(response.data.total / response.data.per_page);
      setList(pages);

    });
}

$scope.nextPage = function () {
    if (nextpage != null) {
      $url = nextpage;
      console.log($url);
      loadEvents();
    }

  }

  $scope.prevPage = function () {
    if (prevpage != null) {
      $url = prevpage;
      console.log($url);
      loadEvents();
    }

  }

  $scope.showPage = async function(pageNumber){
   var url = `http://127.0.0.1:8000/api/events?page=${pageNumber}`
    await $http.get(url).then(function (response) {
      $scope.events = response.data.data;
      nextpage = response.data.next_page_url;
      prevpage = response.data.prev_page_url;
      pages = Math.floor(response.data.total / response.data.per_page);
      setList(pages);

    });
  }

  var setList = function (pages) {

    for (let i = 1; i <= pages; i++) {
      $scope.pages.push(i);
      console.log(i);
    }
  }

  $scope.setActive = function (n) {
    if (n == 2) {
      return " text-success";
    } else {

    }
  }

  $scope.reduceText = function(text, limit){
    var str  = text;

    return str.slice(0, limit);
  }

  $scope.searchResults = async function(){
    var url = `http://127.0.0.1:8000/api/events/search/param=${$scope.search}`
    await $http.get(url).then(function (response) {
      $scope.events = response.data.data;
      nextpage = response.data.next_page_url;
      prevpage = response.data.prev_page_url;
      pages = Math.floor(response.data.total / response.data.per_page);
      setList(pages);

    });
  }

  $scope.viewEvent = function(eventID){
   return window.location.href = `http://127.0.0.1:8000/events/${eventID}`;
  }

  init();

});
