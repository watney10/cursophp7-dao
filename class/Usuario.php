<?php 

	Class Usuario
	{
		private $idusarios;
		private $deslogin;
		private $desenha;
		private $dtcadastro;
		
		public function getIdusuarios()
		{
			return $this->idusuarios;
		}
		
		public function setIdusuarios($value)
		{
			$this->idusuarios = $value;
		}
		
		public function getDeslogin()
		{
			return $this->deslogin;
		}
		
		public function setDeslogin($value)
		{
			$this->deslogin = $value;
		}
		
		public function getDesenha()
		{
			return $this->desenha;
		}
		
		public function setDesenha($value)
		{
			$this->desenha = $value;
		}
		
		public function getDtcadastro()
		{
			return $this->dtcadastro;
		}
		
		public function setDtcadastro($value)
		{
			$this->dtcadastro = $value;
		}
		
		public function loadByid($id)
		{
			$sql = new Sql();
			$results = $sql->select("SELECT * FROM tb_usuarios WHERE idusuarios = :ID ", array(":ID" => $id ));
			
			if(count($results) > 0)
			{
				$this->setData($results[0]);
			}
			
		}
		
		public static function getList()
		{
			$sql = new sql();
			return $sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin");
			
			 
			
		}
		
		public static function search($login)
		{
			$sql = new Sql();
			
			return $sql->select("SELECT * FROM tb_usuarios WHERE deslogin LIKE :SEARCH ORDER BY deslogin", array(
				':SEARCH' => "%".$login."%"
			));
			
			return ; 
		}
		
		public function login($login, $password)
		{
			$sql = new Sql();
			$results = $sql->select("SELECT * FROM tb_usuarios WHERE deslogin = :LOGIN AND desenha = :PASSWORD ", array(
			':LOGIN' => $login ,
			':PASSWORD' => $password ));
			
			if(count($results) > 0)
			{
				$this->setData($results[0]);
			
			}
			else
			{
				throw new Exception("Login e/ou senha inválida.");	
			}
		
		}
		
		public function setData($data)
		{
			
			$this->setIdusuarios($data['idusuarios']);
			$this->setDeslogin($data['deslogin']);
			$this->setDesenha($data['desenha']);
			$this->setDtcadastro($data['dtcadastro']);
		}
		
		public function insert()
		{
			$sql = new Sql();
			
			$results = $sql->select("CALL sp_usuarios_insert(:LOGIN, :PASSWORD)", array(
				
				':LOGIN' => $this->getDeslogin(),
				':PASSWORD' => $this->getDesenha()
				
			));
			
			if($results > 0)
			{
				$this->setData($results[0]);
			}		
				
		}
		
		public function update($login, $password)
		{
			$this->setDeslogin($login);
			$this->setDesenha($password);
			
			$sql = new Sql();
			$sql->query("UPDATE tb_usuarios SET deslogin = :LOGIN, desenha = :PASSWORD WHERE idusuarios = :ID", array(
				
				':LOGIN'=>$this->getDeslogin(),
				':PASSWORD'=>$this->getDesenha(),
				':ID'=>$this->getIdusuarios()
				
			));
		}
		
		public function __construct($login="", $password="")
		{
			$this->setDeslogin($login);
			$this->setDesenha($password);
		}	
		
		public function __toString()
		{
			return json_encode(array(
				
				'idusuarios' => $this->getIdusuarios(),
				'deslogin' => $this->getDeslogin(),
				'desenha' => $this->getDesenha(),
				'dtcadastro' => $this->getDtcadastro()//->format("d/m/Y - H:i:s")
			));
							
		}
			
		
		
}


?>