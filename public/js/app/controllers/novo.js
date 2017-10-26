app.controller('NovoCtrl', function($scope,$http){
	$scope.user = { nome:'', email:'', cpf:''};
	$scope.alert = { msg:'', show:false, classe:"animate-show-hide"};

	$scope.closeAlert = function(){
		$scope.alert.show = false;
	}

	$scope.clearForm = function(){
		$scope.user = { nome:'', email:'', cpf:''};
		$scope.$digest();
	}

	$scope.novoUsuario = function(){
		$http.post('/users',$scope.user).then(function successCallback(resp){
			if(resp.data.create){
				$scope.alert.msg = resp.data.msg
				$scope.alert.classe += " alert alert-success"
				$scope.alert.show = true
				$scope.clearForm();
			} else {
				$scope.alert.msg = resp.data.msg
				$scope.alert.classe += " alert alert-warning"
				$scope.alert.show = true
			}
		}, function errorCallback(err){
			console.log(err)
		})
	}
})