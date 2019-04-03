<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <title>JQuery / JSON</title>
  </head>
  <body>
    <div class="container">
        <div class="col-6 offset-3 mt-3">
            <fieldset>
                <legend>Localize um usuário</legend>
                <form id="form" action="inserirContato.php" method="POST">
                    <div class="form-group">
                        <label for="inputid" class="sr-only">E-Mail</label>
                        <input type="text" id="search_usuario" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <button id="btn_buscar" type="button" class="btn btn-dark">Buscar</button>
                    </div>
                </form>
            </fieldset>
        </div>
        <div class="col-6 offset-3 mt-3">
            <fieldset>
                <legend>Formulário Usuário</legend>
                <form action="inserirContato.php" method="POST">
                    <div class="form-group">
                        <label  class="sr-only">ID</label>
                        <input type="hidden" id="inputid" name="txtid" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Nome</label>
                        <input type="text" id="inputnome" name="nome" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>E-mail</label>
                        <input type="email" id="inputemail" name="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Telefone</label>
                        <input type="text" id="inputtelefone" name="telefone" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Data de nascimento</label>
                        <input type="text" id="inputnome" name="dataNascimento" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <input id="btn_registro" type="submit" class="btn btn-dark" value="Registro">
                    </div>
                </form>
            </fieldset>
        </div>
        <div class="col-10 offset-1 mt-3">
            <table class="table table-striped table-bordered table-hover" id="tb_usuarios">
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Telefone</th>
                    <th>Ações</th>
                </tr>
            </table>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="js/json.js"></script>
  </body>
</html>
