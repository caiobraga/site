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
            </div>

            <div id="item-menu">
                <a id="btn" class="blue btn-small">
                  <i id="icon" class="material-icons">chat</i>
                  <div id="text" >Fale conosco</div>
                </a>
            </div>
        </div>

        <div class="col s12 l10 grey lighten-4" id="content" >
            <h5 class="blue-text text-darken-4">  cadastre um novos tipos de movimentações</h5>
            <div class="card white zdepth-3" id="card">
                <form action="" method="post">
                    <div  class="card-content black-text">
                  
                        <input name="nome" id="nomeMov" type="text" class="validate">
                        <label id="textForm" for="nomeMov">Nome do novo tipo de movimentação</label>
                  

                
                    </div>
                    <div class="card-action" id="btnC">
                        <button name="enviar" id="textForm" class="btn waves-effect blue darken-4" type="submit">Cadastrar</button>
                    </div>
                </form>
            </div>
            
  
        </div>

        
    </div>


    <?php

if(isset($_REQUEST['enviar'])) {
  //salvando medico novo -----------------------------
  $host = "localhost";
  $username = "root";
  $password = "";
  $db = "orgafin";

  //$idAgenda = $_POST["id"];
  $nome = $_POST["nome"];
  $conexao = mysqli_connect($host,$username,$password) or die("Impossível Conectar"); 
  
  mysqli_select_db( $conexao, $db) or die("Impossível Conectar na tabela"); 
  
          mysqli_query($conexao, "INSERT INTO tipomov (nome)
           VALUES ( '{$nome}' ) ")or
          die("O sistema não foi capaz de executar a query"); 
      
}


?>

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
