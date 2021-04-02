<?php 

/*
	Class Sql extends PDO // Acessa os metodos publicos da class PDO nativa do sistema.
	{
		private $conn; //Atributo armazendo os dados de conexão do banco de dados.
		
		public function __construct() // A chamar a classde Sql esse metodo é chamado automaticamente realizando a conexão co banco de dados.
		{		
			$this->conn = new PDO("mysql:host=localhost;dbname=dbphp7","root",""); // Instanciando class PDO atraves do atributo $conn, que recebe os dados de conexão com banco.
		}
			
		private function setParams($statement, $parameters = array()) // 
		{
			foreach($parameters as $key => $value)
			{
				$this->setParam($statement, $key, $value);
			}
		}	
		
		private function setParam($statement, $key, $value)
		{
			$statement->bindParam($key, $value);
		}
			
		public function query($rawQuery, $params = array())
		{
			$stmt = $this->conn->prepare($rawQuery);
			$this->setParams($stmt, $params);
			$stmt->execute();
			
			return $stmt;
		}
		
		public function select($rawQuery, $params = array())
		{
			$stmt = $this->query($rawQuery, $params);
			
			return $stmt->fetchALL(PDO::FETCH_ASSOC);
		}
		
		
	}
*/
	
	Class Sql extends PDO
	{
		private $conn;
		
		public function __construct()
		{
			$this->conn = new PDO("mysql:host=localhost;dbname=dbphp7","root",""); 
			
		}
		
		private function setParams($statement, $params = array())
		{
			foreach($params as $key => $value)
			{
				$this->setParam($statement, $key, $value);
			}
		}
				
		private function setParam($statement, $key, $value)
		{
			$statement->bindParam($key, $value);
			
		}
				
		public function query($rawQuery, $params = array())
		{
			$stmt = $this->conn->prepare($rawQuery);
			$this->setParams($stmt, $params);
			$stmt->execute();
			
			return $stmt; 
		}	
		
		public function select($rawQuery, $params = array())
		{
			$stmt = $this->query($rawQuery, $params);
						
			return $stmt->fetchALL(PDO::FETCH_ASSOC);
		}
		
		
		
	}
	
?>