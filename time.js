var app = angular.module('myApp', []);
app.controller('myCtrl', function ($scope) {
    //在Controller中绑定选择控件
    var datepicker1 = $('#datetimepicker1').datetimepicker({
        format: 'YYYY-MM-DD',
        locale: moment.locale('zh-cn')
    }).on('dp.change', function (e) {
        var result = new moment(e.date).format('YYYY-MM-DD');
        $scope.dateOne = result;  
        $scope.$apply();
    });

    $('#datetimepicker2').datetimepicker({
        format: 'YYYY年MM月DD日 hh:mm',
        locale: moment.locale('zh-cn')
    }).on('dp.change', function (e) {
        var result = new moment(e.date).format('YYYY年MM月DD日 hh:mm');
        $scope.dateTwo= result;
        $scope.$apply();
    });
});
