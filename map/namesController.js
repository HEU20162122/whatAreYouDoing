myapp1 = angular.module('myApp', []);

myapp1.controller('jgCtrl', function($scope,$http) {
$http.get('a.php',{
  params:{type: 1,
    element: 2},
}).then(function(res){
  console.log(res);
  var item = res.data;
  var str = JSON.stringify(item);
  $scope.items=res.data;
  },function(){
    alert('fault');
  });
});

myapp1.controller('jdCtrl', function($scope,$http) {
$http.get('a.php',{
  params:{type: 1,
    element: 2},
}).then(function(res){
  alert('yes');
  $scope.items=res.data;
  },function(){
    alert('fault');
  });
});
