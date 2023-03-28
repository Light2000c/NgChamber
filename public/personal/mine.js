var app = angular.module("myApp", []);

app.controller('myCtrl', function ($scope, $http) {
  $scope.name = "John Doe";
  $scope.posts;
  $scope.latests;
  $scope.morePosts;
  $scope.nextpage;
  $scope.prevpage;
  $scope.currentpage;
  $scope.pages = [];
  $url = 'http://127.0.0.1:8000/api/blogs';
  $scope.search;
  $scope.categories;

  var data;
  var nextpage;
  var pages;
  var prevpage;



  var init = async function () {
    await setdata();
    await getLatestPosts();
    await getMorePosts();
  }



  setdata = async function () {
    $scope.pages = [];
    await $http.get($url).then(function (response) {
      $scope.posts = response.data.data;
      nextpage = response.data.next_page_url;
      prevpage = response.data.prev_page_url;
      pages = Math.floor(response.data.total / response.data.per_page);
      setList(pages);

    });
  }



  getLatestPosts = async function(){
    await $http.get('http://127.0.0.1:8000/api/latest').then(function (response) {
      $scope.latests = response.data;
    });

  }

  getMorePosts = async function(){
    await $http.get('http://127.0.0.1:8000/api/more').then(function (response) {
      $scope.morePosts = response.data;
    });

  }


  $scope.nextPage = function () {
    if (nextpage != null) {
      $url = nextpage;
      console.log($url);
      setdata();
    }

  }

  $scope.prevPage = function () {
    if (prevpage != null) {
      $url = prevpage;
      console.log($url);
      setdata();
    }

  }

  $scope.showPage = async function(pageNumber){
   var url = `http://127.0.0.1:8000/api/blogs?page=${pageNumber}`
    await $http.get(url).then(function (response) {
      $scope.posts = response.data.data;
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
    var url = `http://127.0.0.1:8000/api/search/param=${$scope.search}`
    await $http.get(url).then(function (response) {
      $scope.posts = response.data.data;
      nextpage = response.data.next_page_url;
      prevpage = response.data.prev_page_url;
      pages = Math.floor(response.data.total / response.data.per_page);
      setList(pages);

    });
  }

  $scope.viewPost = function(blogID){
   return window.location.href = `http://127.0.0.1:8000/blogs/${blogID}`;
  }

  $scope.getCategory = async function(model){
    var url = `http://127.0.0.1:8000/api/search/${model}`
    await $http.get(url).then(function (response) {
    $scope.categories = response.data.data;

    });

  }

  $scope.convertDate = function(date){
    var dates = new Date(date);
   return dates.toLocaleString();
  }

  init();

});





