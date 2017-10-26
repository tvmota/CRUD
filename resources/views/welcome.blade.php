<!doctype html>
<html lang="{{ app()->getLocale() }}" ng-app="app">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/css/select2.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2-bootstrap-theme/0.1.0-beta.10/select2-bootstrap.min.css"/>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/js/select2.min.js"></script>
        <title>::. CRUD .::</title>

        <!-- Fonts -->
        <!--link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css"-->

        <!-- Styles -->
        <!--style></style-->
    </head>
    <body>
        <header>
            <nav class="navbar navbar-default navbar-static-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">CRUD</a>
                    </div>
                </div>
            </nav>
      </header>
      <main>
        <div class="container">
            <!--div class="row">
                <div class="col-lg-12"-->
                    <ul class="nav nav-tabs" role="tablist" id="mainTab">
                        <li role="presentation" class="active">
                            <a href="#lista" aria-controls="lista" role="tab" data-toggle="tab">Listagem dos Usuarios</a>
                        </li>
                        <li role="presentation">
                            <a href="#novo" aria-controls="novo" role="tab" data-toggle="tab">Novo Usuario</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        
                        <div class="tab-pane active" rol="tabpannel" id="lista" ng-controller="ListagemCtrl">
                            <br/>
                            @include('listagem')
                        </div>
                        <div class="tab-pane" rol="tabpannel" id="novo" ng-controller="NovoCtrl">
                            <br/>
                            @include('novo')
                        </div>
                    </div>
                <!--/div>
            </div-->
        </div>
      </main>
      <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.6/angular.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.6/angular-resource.min.js"></script>
      <script src="js/app/app.js"></script>
      <script src="js/app/controllers/listagem.js"></script>
      <script src="js/app/controllers/novo.js"></script>
    </body>
</html>
