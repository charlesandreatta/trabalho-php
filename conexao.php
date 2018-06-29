<?php


 
$obj_mysqli = new mysqli("127.0.0.1", "root", "", "trabalho");

	if ($obj_mysqli->connect_errno)
{
		echo "Ocorreu um erro na conexão com o banco de dados.";
			exit;
}

//Variáveis de acesso Db
mysqli_set_charset($obj_mysqli, 'utf8');
define('DB_SERVER', 'localhost');
define('DB_NAME', 'biblioteca');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
//inicio da classe de conexao

class Conexao {
 		var $db, $conn;
 		
 	public function __construct($server, $biblioteca, $root, $password){
 		$this->conn = mysql_connect($127.0.0.1, $root, $password);
 		$this->db = mysql_select_db($database,$this->conn);
 }




/**
 * Função para inserir dados na tabela
 * @param array $dados Array contendo os dados a serem inseridos
 * @param string $tabela tabela que será inserido os dados
 */

 public function insert($tabela, $dados) {
 	foreach ($dados as $key => $value) {
 		$keys[] = $key;
	 	$insertvalues[] = '\'' . $value . '\'';
 }

 $keys = implode(',', $keys);
 $insertvalues = implode(',', $insertvalues);
 $sql = "INSERT INTO $tabela ($keys) VALUES ($insertvalues)";
 return $this->mysql_query($sql);
 
 }
 /**
 * Função para alterar os dados da tabela
 * @param string $tabela tabela onde será alterado os dados
 * @param string $colunaPrimary nome da coluna chave primaria
 * @param int $id id do dados a ser alterado
 * @param array $dados dados que serão inserido
 * @return boolean verdadeiro ou falso
 */
 public function update($tabela, $colunaPrimay, $id, $dados) {
 foreach ($dados as $key => $value) {
 	$sets[] = $key . '=\'' . $value . '\'';
 }
	 $sets = implode(',', $sets);
 	 $sql = "UPDATE $tabela SET $sets WHERE $colunaPrimay = '$id'";
 return $this->mysql_query($sql);
 
/**
 * Função de seleção dos registros da tabela
 * @param string $tabela Description
 * @param string $colunas string contendo as colunas separadas por virgula para seleção, se null busca por todas *
 */
 public function select($tabela, $colunas = "*") {
 	$sql = "SELECT $colunas FROM $tabela";
 	$result = $this->executar($sql);
 return mysql_fetch_assoc($result);
 }




 }

>?