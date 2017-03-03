myapp1 = angular.module('myApp', []);

myapp1.controller('jgCtrl', function($scope,$http) {
$http.get('a.php',{
  params:{type: 1,
    element: 2},
}).then(function(res){
  alert('yes');
  $scope.items=res.data;
  },function(){
    alert('falut');
  });
});
