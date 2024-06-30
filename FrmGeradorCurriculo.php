<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gerador de Currículo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Gerador de Currículos</a>
    </nav>
    <main class="container" style="margin-top:20px">
        <form action="geradorCurriculo.php" method="post" target="_blank" enctype="multipart/form-data">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Informações gerais</h4>

                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="nome">Nome</label>
                                <input type="text" class="form-control" name="nome" id="nome">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="sobrenome">Sobrenome</label>
                                <input type="text" class="form-control" name="sobrenome" id="sobrenome">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                            <label for="foto">Foto</label>
                            <input type="file" class="form-control" name="foto" id="foto">
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="logradouro">Logradouro</label>
                                <input type="text" class="form-control" name="logradouro" id="logradouro">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="numero">Número</label>
                                <input type="text" class="form-control" name="numero" id="numero">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="bairro">Bairro</label>
                                <input type="text" class="form-control" name="bairro" id="bairro">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="cidade">Cidade</label>
                                <input type="text" class="form-control" name="cidade" id="cidade">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="estado">Estado</label>
                                <label class="visually-hidden" for="estado" name="estado" id="estado">Estado</label>
                                <select class="form-select" name="estado" id="estado">
                                  <option value="" selected>UF...</option>
                                  <option value="RO">RO</option>
                                  <option value="AC">AC</option>
                                  <option value="AM">AM</option>
                                  <option value="RR">RR</option>
                                  <option value="PA">PA</option>
                                  <option value="AP">AP</option>
                                  <option value="TO">TO</option>
                                  <option value="MA">MA</option>
                                  <option value="PI">PI</option>
                                  <option value="CE">CE</option>
                                  <option value="RN">RN</option>
                                  <option value="PB">PB</option>
                                  <option value="PE">PE</option>
                                  <option value="AL">AL</option>
                                  <option value="SE">SE</option>
                                  <option value="BA">BA</option>
                                  <option value="MG">MG</option>
                                  <option value="ES">ES</option>
                                  <option value="RJ">RJ</option>
                                  <option value="SP">SP</option>
                                  <option value="PR">PR</option>
                                  <option value="SC">SC</option>
                                  <option value="RS">RS</option>
                                  <option value="MS">MS</option>
                                  <option value="MT">MT</option>
                                  <option value="GO">GO</option>
                                  <option value="DF">DF</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="telefone">Telefone</label>
                                <input type="text" class="form-control" name="telefone" id="telefone">
                            </div>
                        </div> 
                        <div class="col">
                            <div class="form-group">
                                <label for="email">E-mail</label>
                                <input type="email" class="form-control" name="email" id="email">
                            </div>
                        </div> 
                    </div>
                    <div class="form-group">
                        <label for="resumo">Resumo</label>
                        <textarea class="form-control" name="resumo" id="resumo"></textarea>
                    </div>
                </div>

                <div class="card-body" id="div-formacoes">
                    <h4 class="card-title">Formação
                        <button class="btn btn-primary btn-sm" id="btn-adicionar-formacao" title="Adicionar formação">Adicionar formação</button>
                    </h4>
                </div>

                <div class="card-body" id="div-experiencias">
                    <h4 class="card-title">Experiência
                        <button class="btn btn-primary btn-sm" id="btn-adicionar-experiencia" title="Adicionar experiência">Adicionar experiência</button>
                    </h4>
                </div>
                
                <div class="card-footer">
                    <button class="btn btn-primary" type="submit">Gerar currículo</button>
                    <button class="btn btn-secondary" type="reset">Limpar campos</button>
                </div>
            </div>
        </form>
    </main>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="js/index.js"></script>
</body>
</html>