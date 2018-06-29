<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body> 

    	/**
 * Função de seleção dos registros da tabela
 * @param string $tabela nome da tabela
 * @param string $colunas string contendo as colunas separadas por virgula para seleção, se null busca por todas *

 */

 public function select($tabela, $colunas = "*") {
	 $sql = "SELECT $colunas FROM $tabela";
 	$result = $this->executar($sql);
 	while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
 	$return[] = $row;
 }

 return $return;
 
 }

        
        require_once 'conexao.php';
        $conexao = new Conexao(DB_SERVER, DB_NAME, DB_USERNAME, DB_PASSWORD);
        $select = $conexao->select('livro');        
        foreach ($select as $livro) {
            echo '================'.'</br>';
            echo 'Id = '.$livro['id_livro'].'</br>';
            echo 'Codigo = '.$livro['cod_livro'].'</br>';
            echo 'Nome = '.$livro['nome_livro'].'</br>';
            echo 'Descrição = '.$livro['desc_livro'].'</br>';
            echo '================'.'</br>';
        }
        

    </body>
</html>

