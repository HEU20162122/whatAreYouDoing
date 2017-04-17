angular.module('myApp', []).controller('personCtrl', function($scope) {
    $scope.Name = "姓名",
    $scope.Telephone = "联系方式",
    $scope.Message = "建议"，
    $scope.fullName = function() {
        return $scope.Name + " " + $scope.Telephone + " " + $scope.Message;  }
});
