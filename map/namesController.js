
myapp1 = angular.module('myApp', []);
  myapp1.controller('wyCtrl', function ($scope, $http) {
  $http.get('php/search.php', {
    params: {
        type: 'college',
        element: 'wy',
    }
  }).then(function (result) {  //正确请求成功时处理
    console.info(result);
    alert(result.data);
  }).catch(function (result) { //捕捉错误处理
    console.info(result);
    alert(result.data.Message);
  });
});

myapp1.controller('rwCtrl', function($scope, $http) {
    $http.get('php/search.php', {
    params: {
      type: 'college',
        element: 'rw',
    }
  }).then(function (result) {  //正确请求成功时处理
    console.info(result);
    alert(result.data);
  }).catch(function (result) { //捕捉错误处理
    console.info(result);
    alert(result.data.Message);
  });
});

myapp1.controller('cbCtrl', function($scope, $http) {
  $http.get('php/search.php', {
  params: {
    type: 'college',
      element: 'cb',
  }
}).then(function (result) {  //正确请求成功时处理
  console.info(result);
  alert(result.data);
}).catch(function (result) { //捕捉错误处理
  console.info(result);
  alert(result.data.Message);
});
});

myapp1.controller('hjCtrl', function($scope, $http) {
  $http.get('php/search.php', {
  params: {
    type: 'college',
      element: 'hj',
  }
}).then(function (result) {  //正确请求成功时处理
  console.info(result);
  alert(result.data);
}).catch(function (result) { //捕捉错误处理
  console.info(result);
  alert(result.data.Message);
});
});

myapp1.controller('ndCtrl', function($scope, $http) {
  $http.get('php/search.php', {
  params: {
      element: 'nd',
      type: 'college',
  }
}).then(function (result) {  //正确请求成功时处理
  console.info(result);
  alert(result.data);
}).catch(function (result) { //捕捉错误处理
  console.info(result);
  alert(result.data.Message);
});
});

myapp1.controller('ssCtrl', function($scope, $http) {
  $http.get('php/search.php', {
  params: {
    type: 'college',
      element: 'ss',
  }
}).then(function (result) {  //正确请求成功时处理
  console.info(result);
  alert(result.data);
}).catch(function (result) { //捕捉错误处理
  console.info(result);
  alert(result.data.Message);
});
});

myapp1.controller('zdhCtrl', function($scope, $http) {
  $http.get('php/search.php', {
  params: {
    type: 'college',
      element: 'zdh',
  }
}).then(function (result) {  //正确请求成功时处理
  console.info(result);
  alert(result.data);
}).catch(function (result) { //捕捉错误处理
  console.info(result);
  alert(result.data.Message);
});
});

myapp1.controller('jdCtrl', function($scope, $http) {
  $http.get('php/search.php', {
  params: {
    type: 'college',
      element: 'jd',
  }
}).then(function (result) {  //正确请求成功时处理
  console.info(result);
  alert(result.data);
}).catch(function (result) { //捕捉错误处理
  console.info(result);
  alert(result.data.Message);
});
});

myapp1.controller('csCtrl', function($scope, $http) {
  $http.get('php/search.php', {
  params: {
    type: 'college',
      element: 'cs',
  }
}).then(function (result) {  //正确请求成功时处理
  console.info(result);
  alert(result.data);
}).catch(function (result) { //捕捉错误处理
  console.info(result);
  alert(result.data.Message);
});
});

myapp1.controller('jgCtrl', function($scope, $http) {
  $http.get('php/search.php', {
  params: {
    type: 'college',
      element: 'jg',
  }
}).then(function (result) {  //正确请求成功时处理
  console.info(result);
  alert(result.data);
}).catch(function (result) { //捕捉错误处理
  console.info(result);
  alert(result.data.Message);
});
});

myapp1.controller('xtCtrl', function($scope, $http) {
  $http.get('php/search.php', {
  params: {
    type: 'college',
      element: 'xt',
  }
}).then(function (result) {  //正确请求成功时处理
  console.info(result);
  alert(result.data);
}).catch(function (result) { //捕捉错误处理
  console.info(result);
  alert(result.data.Message);
});
});

myapp1.controller('lCtrl', function($scope, $http) {
  $http.get('php/search.php', {
  params: {
    type: 'college',
      element: 'l',
  }
}).then(function (result) {  //正确请求成功时处理
  console.info(result);
  alert(result.data);
}).catch(function (result) { //捕捉错误处理
  console.info(result);
  alert(result.data.Message);
});
});

myapp1.controller('chCtrl', function($scope, $http) {
  $http.get('php/search.php', {
  params: {
      element: 'ch',
  }
}).then(function (result) {  //正确请求成功时处理
  console.info(result);
  alert(result.data);
}).catch(function (result) { //捕捉错误处理
  console.info(result);
  alert(result.data.Message);
});
});

myapp1.controller('hCtrl', function($scope, $http) {
  $http.get('php/search.php', {
  params: {
      element: 'h',
  }
}).then(function (result) {  //正确请求成功时处理
  console.info(result);
  alert(result.data);
}).catch(function (result) { //捕捉错误处理
  console.info(result);
  alert(result.data.Message);
});
});

myapp1.controller('tyCtrl', function($scope, $http) {
  $http.get('php/search.php', {
  params: {
      element: 'ty',
  }
}).then(function (result) {  //正确请求成功时处理
  console.info(result);
  alert(result.data);
}).catch(function (result) { //捕捉错误处理
  console.info(result);
  alert(result.data.Message);
});
});

myapp1.controller('gfCtrl', function($scope, $http) {
  $http.get('php/search.php', {
  params: {
      element: 'gf',
  }
}).then(function (result) {  //正确请求成功时处理
  console.info(result);
  alert(result.data);
}).catch(function (result) { //捕捉错误处理
  console.info(result);
  alert(result.data.Message);
});
});

myapp1.controller('ghCtrl', function($scope, $http) {
  $http.get('php/search.php', {
  params: {
      element: 'gh',
  }
}).then(function (result) {  //正确请求成功时处理
  console.info(result);
  alert(result.data);
}).catch(function (result) { //捕捉错误处理
  console.info(result);
  alert(result.data.Message);
});
});

myapp1.controller('xshCtrl', function($scope, $http) {
  $http.get('php/search.php', {
  params: {
      element: 'xsh',
  }
}).then(function (result) {  //正确请求成功时处理
  console.info(result);
  alert(result.data);
}).catch(function (result) { //捕捉错误处理
  console.info(result);
  alert(result.data.Message);
});
});

myapp1.controller('yjshCtrl', function($scope, $http) {
  $http.get('php/search.php', {
  params: {
      element: 'yjsh',
  }
}).then(function (result) {  //正确请求成功时处理
  console.info(result);
  alert(result.data);
}).catch(function (result) { //捕捉错误处理
  console.info(result);
  alert(result.data.Message);
});
});

myapp1.controller('slCtrl', function($scope, $http) {
  $http.get('php/search.php', {
  params: {
      element: 'sl',
  }
}).then(function (result) {  //正确请求成功时处理
  console.info(result);
  alert(result.data);
}).catch(function (result) { //捕捉错误处理
  console.info(result);
  alert(result.data.Message);
});
});

myapp1.controller('kxCtrl', function($scope, $http) {
  $http.get('php/search.php', {
  params: {
      element: 'kx',
  }
}).then(function (result) {  //正确请求成功时处理
  console.info(result);
  alert(result.data);
}).catch(function (result) { //捕捉错误处理
  console.info(result);
  alert(result.data.Message);
});
});

myapp1.controller('dhdcCtrl', function($scope, $http) {
  $http.get('php/search.php', {
  params: {
      element: 'dhdc',
  }
}).then(function (result) {  //正确请求成功时处理
  console.info(result);
  alert(result.data);
}).catch(function (result) { //捕捉错误处理
  console.info(result);
  alert(result.data.Message);
});
});

myapp1.controller('zzsCtrl', function($scope, $http) {
  $http.get('php/search.php', {
  params: {
      element: 'zzs',
  }
}).then(function (result) {  //正确请求成功时处理
  console.info(result);
  alert(result.data);
}).catch(function (result) { //捕捉错误处理
  console.info(result);
  alert(result.data.Message);
});
});

myapp1.controller('ygltCtrl', function($scope, $http) {
  $http.get('php/search.php', {
  params: {
      element: 'yglt',
  }
}).then(function (result) {  //正确请求成功时处理
  console.info(result);
  alert(result.data);
}).catch(function (result) { //捕捉错误处理
  console.info(result);
  alert(result.data.Message);
});
});

myapp1.controller('dcCtrl', function($scope, $http) {
  $http.get('php/search.php', {
  params: {
      element: 'dc',
  }
}).then(function (result) {  //正确请求成功时处理
  console.info(result);
  alert(result.data);
}).catch(function (result) { //捕捉错误处理
  console.info(result);
  alert(result.data.Message);
});
});
