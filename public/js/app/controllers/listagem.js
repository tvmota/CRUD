app.controller('ListagemCtrl',function ListagemCtrl($scope, $http) {
	$scope.userList = [];
	$scope.user = { id:0, nome:'', email:'', cpf:''};
	$scope.disabled = true;
	$scope.alert = { msg:'', show:false, classe:"animate-show-hide"};

	$scope.loadUsers = function(){
		$http({
			method: 'GET',
			url: '/users'
		}).then(function successCallback(resp){
			$scope.userList = resp.data;
		}, function erroCallback(err){
			console.log(err);
		})
	}

	$scope.setUser = function(obj){
		$scope.user.id = obj.id;
		$scope.user.nome = obj.nome;
		$scope.user.email = obj.email;
		$scope.user.cpf = obj.cpf;
		$scope.disabled = false
		$scope.$digest();
	}

	$scope.clearForm = function(){
		$scope.user = { id:0, nome:'', email:'', cpf:''};
		$scope.disabled = true
		$('#selUser').val('').trigger('change');
		$scope.$digest();
	}

	$scope.initUserSearch = function(){
		$('#selUser').select2({
			theme: "bootstrap",
			placeholder: 'Selecionar usuario',
			allowClear: true
		}).on('select2:selecting',function(e){
			var id = e.params.args.data.id
			var idx = $scope.userList.findIndex(function(obj){ return obj.id == id; });
			if(idx > -1){
				$scope.setUser($scope.userList[idx]);
			}
		}).on('select2:unselecting',function(e){
			$scope.clearForm();
		})
	}

	$scope.closeAlert = function(){
		$scope.alert.show = false;
	}

	$scope.editUser = function(){
		$http.put('/users/' + $scope.user.id, $scope.user).then(function successCallback(resp){
			if(resp.data.alter){
				$scope.setUser(resp.data.user);
				$scope.loadUsers();
				$scope.alert.msg = resp.data.msg
				$scope.alert.classe += "alert alert-success"
				$scope.alert.show = true
			} else {
				$scope.alert.msg = resp.data.msg
				$scope.alert.classe += " alert alert-warning"
				$scope.alert.show = true
			}
		}, function errorCallback(err){
			console.log(err)
		});
	}

	$scope.deleteUser = function(){
		$http.delete('/users/' + scope.user.id).then( function successCalback(resp){
			$scope.alert.msg = resp.data.msg
			$scope.alert.classe += "alert alert-success"
			$scope.alert.show = true
		}, function errorCallback(err){
			console.log(err)
		});
	}

	$scope.loadUsers();
	$scope.initUserSearch();
});