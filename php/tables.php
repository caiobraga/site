<?php
		$host = "localhost";
		$username = "root";
		$password = "";
		$db = "orgafin";
		
		$conexao = mysqli_connect($host,$username,$password) or die("Impossível Conectar"); 
		 
		mysqli_select_db( $conexao, $db) or die("Impossível Conectar na tabela"); 
		$query = sprintf("SELECT valor, nome, data, categoria, id FROM input");
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
		  
		  <tbody>
			<tr>
			  <td>'.$linha["nome"].'</</td>
			  <td>'.$linha["valor"].'</</td>
			  <td>'.$linha["data"].'</</td>
			  <td>'.$linha["categoria"].'</</td>
			  <td>'.$linha["id"].'</</td>
			</tr>
		 
		   '
		
		  );//fim do echo
		
		  }while($linha = mysqli_fetch_assoc($dados));
		  // fim do if
		 
		  }
?>