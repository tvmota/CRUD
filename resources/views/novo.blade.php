<div class="row">
	<div class="col-lg-12">
		<form name="novoForm">
			<div class="form-group">
				<label for="nome">Nome Completo</label>
				<input type="text" class="form-control" title="Informe seu nome" name="nome" id="uNome" placeholder="Nome" ng-model="user.nome" required/>
			</div>
			<div class="form-group">
				<label for="Email">Endereço de E-mail</label>
				<input type="email" class="form-control" name="email" id="uEmail" placeholder="E-mail" title="Informe seu E-mail" ng-model="user.email" required/>
			</div>
			<div class="form-group">
				<label for="cpf">Número de CPF</label>
				<input type="number" class="form-control" name="cpf" id="uCpf" placeholder="CPF" title="Informe seu CPF" ng-model="user.cpf" max="99999999999" required/>
			</div>
			<div class="form-group">
				<div ng-class="alert.classe" ng-show="alert.show" role="alert">
					 <button type="button" class="close" ng-click="closeAlert()"><span aria-hidden="true">&times;</span></button>
					<strong>@{{alert.msg}}</strong>
				</div>
			</div>
			<div style="float:right">
				<button type="reset" class="btn btn-default">
					<i class="fa fa-eraser" aria-hidden="true"></i> Limpar
				</button>
  				<button type="button" class="btn btn-primary" ng-disabled="novoForm.$invalid" ng-click="novoUsuario()">
  					<i class="fa fa-floppy-o" aria-hidden="true"></i> Salvar
  				</button>
  			</div>
		</form>
	</div>
</div>