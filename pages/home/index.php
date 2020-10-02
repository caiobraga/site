<!DOCTYPE html>
<html lang="pt-BR">
<title>Orgafin</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="../../css/materialize.min.css">
<link rel="stylesheet" href="../../css/styles.css">
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<body>
    <div class="row" id="m0">
        
        <div class="col s12 l2 blue" id="menu">
            <div id="item-menu">
                <b class="white-text" id="title">Orgafin</b>
                <a href="../home/index.html" id="btn" class="blue darken-4 btn-small">
                  <i id="icon" class="material-icons">assessment</i>
                  <div id="text" >Home</div>
                </a>
                <a href="../categorias/index.html" id="btn" class="blue btn-small">
                  <i id="icon" class="material-icons">local_offer</i>
                  <div id="text" >Categorias</div>
                </a>
                <a href="../movimentações/index.html" id="btn" class="blue btn-small">
                  <i id="icon" class="material-icons">monetization_on</i>
                  <div id="text" >Movimentações</div>
                </a>
                <a href="../cadastroTipo/index.php" id="btn" class="blue btn-small">
                  <i id="icon" class="material-icons">monetization_on</i>
                  <div id="text" >Tipo Movimentacao</div>
                </a>
            </div>

            <div id="item-menu">
                <a id="btn" class="blue btn-small">
                  <i id="icon" class="material-icons">chat</i>
                  <div id="text" >Fale conosco</div>
                </a>
            </div>
        </div>

        <div class="col s12 l10 grey lighten-4" id="content" >
            <h5 class="blue-text text-darken-4"> Veja ou cadastre suas movimentações</h5>
            <div class="card white zdepth-3" id="card">
                <form action="../../php/cadastroMov.php" method="post">
                    <div  class="card-content black-text">
                    <div class="input-field col s12 l3">
                        <input neme="nomeMov" id="nomeMov" type="text" class="validate">
                        <label id="textForm" for="nomeMov">Nome da movimentação</label>
                    </div>

                    <div class="input-field col s12 l3">
                          <select name="tipoMov"class="select-dropdown dropdown-trigger">  
                            <?php 
                            $host = "localhost";
                            $username = "root";
                            $password = "";
                            $db = "orgafin";
                            
                            $conexao = mysqli_connect($host,$username,$password) or die("Impossível Conectar"); 
                             
                            mysqli_select_db( $conexao, $db) or die("Impossível Conectar na tabela"); 
                            $query = sprintf("SELECT id, nome FROM tipomov");
                                    // executa a query
                                    $dados = mysqli_query($conexao, $query) or die(mysqli_error($conexao));
                                    // transforma os dados em um array
                                    $linha = mysqli_fetch_assoc( $dados);
                                    // calcula quantos dados retornaram
                                    $total = mysqli_num_rows($dados);
                            
                                 // se o número de resultados for maior que zero, mostra os dados
                                 if($total > 0) {
                                  // inicia o loop que vai mostrar todos os dados
                                  do {
                                    
                            
                                // finaliza o loop que vai mostrar os dados
                            
                               echo(' 
                                
                                  <option value="'.$linha["id"].'">'.$linha["nome"].'</option>
                                      
                               '
                              );//fim do echo
                            
                              }while($linha = mysqli_fetch_assoc($dados));
                              // fim do if
                             
                              }
                              ?>
                               </select>
                        <label id="textForm" >Categoria da movimentação</label>
                    </div>

                    <div class="input-field col s12 l2">
                        <input name="valorMov" id="valorMov" type="number" class="validate">
                        <label  id="textForm" for="valorMov">Valor da movimentação (R$)</label>
                    </div>
                
                
                
                
                    <div class="input-field col s12 l2">
                        <input name="dataMov" id="dataMov" type="text" class="datepicker validate">
                        <label  id="textForm" for="dataMov">Data da movimentação</label>
                    </div>

                    <div class="input-field col s12 l2">
                        <p>
                            <label>
                              <input name="tipoMov" type="radio" checked />
                              <span id="textForm">Entrada</span>
                            </label>
                        </p>
                        <p>
                            <label>
                              <input name="tipoMov" type="radio" />
                              <span id="textForm" >Saída</span>
                            </label>
                        </p>
                    </div>
                    </div>
                    <div class="card-action" id="btnC">
                        <button id="textForm" class="btn waves-effect blue darken-4" type="submit">Cadastrar</button>
                    </div>
                </form>
            </div>


            <div class="row">
                <div class="col s12 l3">
                  <div class="card-panel blue darken-4">
                    <span class="white-text" id="spanText">Luiz a moda da casa<br/>
                        Valor: inestimável<br/>
                        Data: todo dia<br/>
                        Tipo: saída (ele leva a entrada)<br/>
                        Categoria: guloseimas<br/>
                    </span>
                  </div>
                </div>
                <div class="col s12 l3">
                    <div class="card-panel blue darken-4">
                      <span class="white-text" id="spanText">Luiz a moda da casa<br/>
                        Valor: inestimável<br/>
                        Data: todo dia<br/>
                        Tipo: saída (ele leva a entrada)<br/>
                        Categoria: guloseimas<br/>
                      </span>
                    </div>
                  </div>
                  <div class="col s12 l3">
                    <div class="card-panel blue darken-4">
                      <span class="white-text" id="spanText">Luiz a moda da casa<br/>
                        Valor: inestimável<br/>
                        Data: todo dia<br/>
                        Tipo: saída (ele leva a entrada)<br/>
                        Categoria: guloseimas<br/>
                      </span>
                    </div>
                  </div>
                  <div class="col s12 l3">
                    <div class="card-panel blue darken-4">
                      <span class="white-text" id="spanText">Luiz a moda da casa<br/>
                        Valor: inestimável<br/>
                        Data: todo dia<br/>
                        Tipo: saída (ele leva a entrada)<br/>
                        Categoria: guloseimas<br/>
                      </span>
                    </div>
                  </div>
                  <div class="col s12 l3">
                    <div class="card-panel blue darken-4">
                      <span class="white-text" id="spanText">Luiz a moda da casa<br/>
                        Valor: inestimável<br/>
                        Data: todo dia<br/>
                        Tipo: saída (ele leva a entrada)<br/>
                        Categoria: guloseimas<br/>
                      </span>
                    </div>
                  </div>
                  <div class="col s12 l3">
                    <div class="card-panel blue darken-4">
                      <span class="white-text" id="spanText">Luiz a moda da casa<br/>
                        Valor: inestimável<br/>
                        Data: todo dia<br/>
                        Tipo: saída (ele leva a entrada)<br/>
                        Categoria: guloseimas<br/>
                      </span>
                    </div>
                  </div>
                  <div class="col s12 l3">
                    <div class="card-panel blue darken-4">
                      <span class="white-text" id="spanText">Luiz a moda da casa<br/>
                        Valor: inestimável<br/>
                        Data: todo dia<br/>
                        Tipo: saída (ele leva a entrada)<br/>
                        Categoria: guloseimas<br/>
                      </span>
                    </div>
                  </div>
                  <div class="col s12 l3">
                    <div class="card-panel blue darken-4">
                      <span class="white-text" id="spanText">Luiz a moda da casa<br/>
                        Valor: inestimável<br/>
                        Data: todo dia<br/>
                        Tipo: saída (ele leva a entrada)<br/>
                        Categoria: guloseimas<br/>
                      </span>
                    </div>
                  </div>
            </div>
            
            
  
        </div>

        
    </div>


<script src="../../js/jquery.js"></script>
<script src="../../js/materialize.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems, options);
  });

  // Or with jQuery

  $(document).ready(function(){
    $('select').formSelect();
  });


  $(document).ready(function() {
    M.updateTextFields();
  });

  $('.datepicker').datepicker({
    format:'dd-mm-yyyy',
i18n:{
  months: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
  monthsShort: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'],
  weekdays: ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sabádo'],
  weekdaysAbbrev: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sab'],
  today: 'Hoje',
  clear: 'Limpar',
  close: 'Pronto',
  labelMonthNext: 'Próximo mês',
  labelMonthPrev: 'Mês anterior',
  labelMonthSelect: 'Selecione um mês',
  labelYearSelect: 'Selecione um ano',
  selectMonths: true,
  selectYears: 15,
  cancel: 'Cancelar',
  clear: 'Limpar'
}
});

  
</script>
</body>
</html>
