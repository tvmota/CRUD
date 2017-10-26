<style type="text/css">
	.select2-container {
  		width: 100% !important;
	}

	.animate-show-hide.ng-hide {
	  opacity: 0;
	}

	.animate-show-hide.ng-hide-add,
	.animate-show-hide.ng-hide-remove {
	  transition: all linear 0.5s;
	}
</style>
<div class="row">
	<div class="col-lg-12">
		<div class="form-group">
			<label for="usuraios"><i class="fa fa-user-circle" aria-hidden="true"></i> Selecionar Usuario</label>
			<select name="usuarios" id="selUser" class="form-control">
				<option></option>
				<option ng-repeat="user in userList track by $id(user)" ng-value="user.id">@{{user.nome}}</option>
			</select>
		</div>
	</div>
</div>
<br>
<div class="row">
	<div class="col-lg-12">
		<form>
			<div class="form-group">
				<label for="nome">Nome Completo</label>
				<input type="text" class="form-control" title="Informe seu nome" name="nome" id="nome" placeholder="Nome" ng-model="user.nome" required/>
			</div>
			<div class="form-group">
				<label for="Email">Endereço de E-mail</label>
				<input type="email" class="form-control" name="email" id="email" placeholder="E-mail" title="Informe seu E-mail" ng-model="user.email" required/>
			</div>
			<div class="form-group">
				<label for="cpf">Número de CPF</label>
				<input type="text" class="form-control" name="cpf" id="cpf" placeholder="CPF" title="Informe seu CPF" ng-model="user.cpf" required/>
			</div>
			<div class="form-group">
				<div ng-class="alert.classe" ng-show="alert.show" role="alert">
					 <button type="button" class="close" ng-click="closeAlert()"><span aria-hidden="true">&times;</span></button>
					<strong>@{{alert.msg}}</strong>
				</div>
			</div>
			<div style="float:right">
				<button type="button" class="btn btn-default" ng-click="clearForm()">
					<i class="fa fa-eraser" aria-hidden="true"></i> Limpar
				</button>
				<button type="button" class="btn btn-danger" ng-disabled="disabled" ng-click="deletUser()">
					<i class="fa fa-times" aria-hidden="true"></i> Deletar
				</button>
  				<button type="button" class="btn btn-primary" ng-disabled="disabled" ng-click="editUser()">
  					<i class="fa fa-floppy-o" aria-hidden="true"></i> Salvar
  				</button>
  			</div>
		</form>
	</div>
</div>