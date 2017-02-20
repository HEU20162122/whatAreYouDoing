
myapp1 = angular.module('myApp', []);
myapp1.controller('wyCtrl', function ($scope, $http) {
    $http.get("/php/wy.php")
    .success(function (response) {$scope.items = response.records;});
});
myapp1.controller('rwCtrl', function($scope, $http) {
    $http.get("/php/rw.php")
    .success(function (response) {$scope.items = response.records;});
});
myapp1.controller('cbCtrl', function($scope, $http) {
    $http.get("/php/cb.php")
    .success(function (response) {$scope.items = response.records;});
});
myapp1.controller('hjCtrl', function($scope, $http) {
    $http.get("/php/hj.php")
    .success(function (response) {$scope.items = response.records;});
});
myapp1.controller('ndCtrl', function($scope, $http) {
    $http.get("/php/nd.php")
    .success(function (response) {$scope.items = response.records;});
});
myapp1.controller('ssCtrl', function($scope, $http) {
    $http.get("/php/ss.php")
    .success(function (response) {$scope.items = response.records;});
});
myapp1.controller('zdhCtrl', function($scope, $http) {
  $http.get("/php/zdh.php")
      .success(function (response) {$scope.items = response.records;});
});
myapp1.controller('jdCtrl', function($scope, $http) {
  $http.get("/php/jd.php")
  .success(function (response) {$scope.items = response.records;});
});
myapp1.controller('csCtrl', function($scope, $http) {
  $http.get("/php/cs.php")
  .success(function (response) {$scope.items = response.records;});
});
myapp1.controller('jgCtrl', function($scope, $http) {
  $http.get("/php/jg.php")
  .success(function (response) {$scope.items = response.records;});
});
myapp1.controller('xtCtrl', function($scope, $http) {
  $http.get("/php/wy.php")
      .success(function (response) {$scope.items = response.records;});
});
myapp1.controller('lCtrl', function($scope, $http) {
  $http.get("/php/wy.php")
  .success(function (response) {$scope.items = response.records;});
});
myapp1.controller('chCtrl', function($scope, $http) {
  $http.get("/php/wy.php")
      .success(function (response) {$scope.items = response.records;});
});
myapp1.controller('hCtrl', function($scope, $http) {
  $http.get("/php/wy.php")
      .success(function (response) {$scope.items = response.records;});
});
myapp1.controller('tyCtrl', function($scope, $http) {
  $http.get("/php/wy.php")
      .success(function (response) {$scope.items = response.records;});
});
myapp1.controller('gfCtrl', function($scope, $http) {
  $http.get("/php/wy.php")
      .success(function (response) {$scope.items = response.records;});
});
myapp1.controller('ghCtrl', function($scope, $http) {
  $http.get("/php/wy.php")
      .success(function (response) {$scope.items = response.records;});
});
myapp1.controller('xshCtrl', function($scope, $http) {
  $http.get("/php/xsh.php")
      .success(function (response) {$scope.items = response.records;});
});
myapp1.controller('yjshCtrl', function($scope, $http) {
  $http.get("/php/yjsh.php")
      .success(function (response) {$scope.items = response.records;});
});
myapp1.controller('slCtrl', function($scope, $http) {
  $http.get("/php/sl.php")
      .success(function (response) {$scope.items = response.records;});
});
myapp1.controller('kxCtrl', function($scope, $http) {
  $http.get("/php/kx.php")
      .success(function (response) {$scope.items = response.records;});
});
myapp1.controller('dhdcCtrl', function($scope, $http) {
  $http.get("/php/dhdc.php")
      .success(function (response) {$scope.items = response.records;});
});
myapp1.controller('zzsCtrl', function($scope, $http) {
  $http.get("/php/zzs.php")
      .success(function (response) {$scope.items = response.records;});
});
myapp1.controller('ygltCtrl', function($scope, $http) {
  $http.get("/php/yglt.php")
      .success(function (response) {$scope.items = response.records;});
});
myapp1.controller('dcCtrl', function($scope, $http) {
  $http.get("/php/dc.php")
      .success(function (response) {$scope.items = response.records;});
});
