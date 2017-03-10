myapp1 = angular.module('myApp', []);

myapp1.controller('jgCtrl', function($scope,$http) {
$http.get('json.php',{
    params:{type: 1,
      element: 2},
}).then(function(res){
  $scope.items=res.data;
  console.log(res);
  },function(){
    alert('fault');
  });
});
