myapp1 = angular.module('myApp', []);


myapp1.controller('jgCtrl', function($scope,$http) {

$http.get('json.php',{
  method: "get",
  params:{id:1},
  //url:"json.php"
}).then(function(res){
    $scope.items=res.data;
    console.log(res);
    },function(){
      alert('fault');
      });
});

myapp1.controller('cbCtrl', function($scope,$http) {
$http.get('json.php',{
    params:{type: 'cb',
      },
}).then(function(res){
  $scope.items=res.data;
  console.log(res);
  },function(){
    alert('fault');
  });
});

myapp1.controller('hjCtrl', function($scope,$http) {
$http.get('json.php',{
    params:{type: 'hj',
      },
}).then(function(res){
  $scope.items=res.data;
  console.log(res);
  },function(){
    alert('fault');
  });
});

myapp1.controller('ndCtrl', function($scope,$http) {
$http.get('json.php',{
    params:{type: 'nd',
      },
}).then(function(res){
  $scope.items=res.data;
  console.log(res);
  },function(){
    alert('fault');
  });
});
myapp1.controller('ssCtrl', function($scope,$http) {
$http.get('json.php',{
    params:{type: 'ss',
      },
}).then(function(res){
  $scope.items=res.data;
  console.log(res);
  },function(){
    alert('fault');
  });
});
myapp1.controller('zdhCtrl', function($scope,$http) {
$http.get('json.php',{
    params:{type: 'zdh',
      },
}).then(function(res){
  $scope.items=res.data;
  console.log(res);
  },function(){
    alert('fault');
  });
});
myapp1.controller('jdCtrl', function($scope,$http) {
$http.get('json.php',{
    params:{type: 'jd',
      },
}).then(function(res){
  $scope.items=res.data;
  console.log(res);
  },function(){
    alert('fault');
  });
});
myapp1.controller('csCtrl', function($scope,$http) {
$http.get('json.php',{
    params:{type: 'cs',
      },
}).then(function(res){
  $scope.items=res.data;
  console.log(res);
  },function(){
    alert('fault');
  });
});
myapp1.controller('xtCtrl', function($scope,$http) {
$http.get('json.php',{
    params:{type: 'xt',
      },
}).then(function(res){
  $scope.items=res.data;
  console.log(res);
  },function(){
    alert('fault');
  });
});
myapp1.controller('lCtrl', function($scope,$http) {
$http.get('json.php',{
    params:{type:'l',
      },
}).then(function(res){
  $scope.items=res.data;
  console.log(res);
  },function(){
    alert('fault');
  });
});
myapp1.controller('chCtrl', function($scope,$http) {
$http.get('json.php',{
    params:{type: 'ch',
      },
}).then(function(res){
  $scope.items=res.data;
  console.log(res);
  },function(){
    alert('fault');
  });
});
myapp1.controller('rwCtrl', function($scope,$http) {
$http.get('json.php',{
    params:{type: 'rw',
      },
}).then(function(res){
  $scope.items=res.data;
  console.log(res);
  },function(){
    alert('fault');
  });
});
myapp1.controller('wyCtrl', function($scope,$http) {
$http.get('json.php',{
    params:{type: 'wy',
      },
}).then(function(res){
  $scope.items=res.data;
  console.log(res);
  },function(){
    alert('fault');
  });
});
myapp1.controller('hCtrl', function($scope,$http) {
$http.get('json.php',{
    params:{type: 'h',
      },
}).then(function(res){
  $scope.items=res.data;
  console.log(res);
  },function(){
    alert('fault');
  });
});
myapp1.controller('tyCtrl', function($scope,$http) {
$http.get('json.php',{
    params:{type: 'ty',
      },
}).then(function(res){
  $scope.items=res.data;
  console.log(res);
  },function(){
    alert('fault');
  });
});
myapp1.controller('gfCtrl', function($scope,$http) {
$http.get('json.php',{
    params:{type: 'gf',
      },
}).then(function(res){
  $scope.items=res.data;
  console.log(res);
  },function(){
    alert('fault');
  });
});
myapp1.controller('ghCtrl', function($scope,$http) {
$http.get('json.php',{
    params:{type: 'gh',
      },
}).then(function(res){
  $scope.items=res.data;
  console.log(res);
  },function(){
    alert('fault');
  });
});
myapp1.controller('cbCtrl', function($scope,$http) {
$http.get('json.php',{
    params:{type: 'cb',
      },
}).then(function(res){
  $scope.items=res.data;
  console.log(res);
  },function(){
    alert('fault');
  });
});
myapp1.controller('cbCtrl', function($scope,$http) {
$http.get('json.php',{
    params:{type: 'cb',
      },
}).then(function(res){
  $scope.items=res.data;
  console.log(res);
  },function(){
    alert('fault');
  });
});
myapp1.controller('cbCtrl', function($scope,$http) {
$http.get('json.php',{
    params:{type: 'cb',
      },
}).then(function(res){
  $scope.items=res.data;
  console.log(res);
  },function(){
    alert('fault');
  });
});
myapp1.controller('cbCtrl', function($scope,$http) {
$http.get('json.php',{
    params:{type: 'cb',
      },
}).then(function(res){
  $scope.items=res.data;
  console.log(res);
  },function(){
    alert('fault');
  });
});
myapp1.controller('cbCtrl', function($scope,$http) {
$http.get('json.php',{
    params:{type: 'cb',
      },
}).then(function(res){
  $scope.items=res.data;
  console.log(res);
  },function(){
    alert('fault');
  });
});
myapp1.controller('cbCtrl', function($scope,$http) {
$http.get('json.php',{
    params:{type: 'cb',
      },
}).then(function(res){
  $scope.items=res.data;
  console.log(res);
  },function(){
    alert('fault');
  });
});
myapp1.controller('cbCtrl', function($scope,$http) {
$http.get('json.php',{
    params:{type: 'cb',
      },
}).then(function(res){
  $scope.items=res.data;
  console.log(res);
  },function(){
    alert('fault');
  });
});
myapp1.controller('cbCtrl', function($scope,$http) {
$http.get('json.php',{
    params:{type: 'cb',
      },
}).then(function(res){
  $scope.items=res.data;
  console.log(res);
  },function(){
    alert('fault');
  });
});
myapp1.controller('cbCtrl', function($scope,$http) {
$http.get('json.php',{
    params:{type: 'cb',
      },
}).then(function(res){
  $scope.items=res.data;
  console.log(res);
  },function(){
    alert('fault');
  });
});
myapp1.controller('cbCtrl', function($scope,$http) {
$http.get('json.php',{
    params:{type: 'cb',
      },
}).then(function(res){
  $scope.items=res.data;
  console.log(res);
  },function(){
    alert('fault');
  });
});
myapp1.controller('cbCtrl', function($scope,$http) {
$http.get('json.php',{
    params:{type: 'cb',
      },
}).then(function(res){
  $scope.items=res.data;
  console.log(res);
  },function(){
    alert('fault');
  });
});
myapp1.controller('cbCtrl', function($scope,$http) {
$http.get('json.php',{
    params:{type: 'cb',
      },
}).then(function(res){
  $scope.items=res.data;
  console.log(res);
  },function(){
    alert('fault');
  });
});
