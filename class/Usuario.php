<?php 
/*
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
		
		public function remover()
		{
			$sql = new Sql();
			$sql->query("DELETE FROM tb_usuarios WHERE idusuarios = :ID", array(
				
				':ID'=>$this->getIdusuarios()
				
			));
			
			$this->setIdusuarios(0);
			$this->setDeslogin("");
			$this->setDesenha("");
			$this->setDtcadastro(new DateTime());
			
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
*/

	Class Usuario
	{
		private $idusuario;	
		private $deslogin;
		private $dessenha;	
		private $dtcadastro;
		
		public function getIdusuario()
		{
			return $this->idusuario;
		}
		
		public function setIdusuario($value)
		{
			$this->idusuario = $value;
		}
		
		public function getDeslogin()
		{
			return $this->deslogin;
		}
		
		public function setDeslogin($value)
		{
			$this->deslogin = $value;
		}
		
		public function getDessenha()
		{
			return $this->dessenha;
		}
		
		public function setDessenha($value)
		{
			$this->dessenha = $value;
		}
		
		public function getDtcadastro()
		{
			return $this->dtcadastro;
		}
		
		public function setDtcadastro($value)
		{
			$this->dtcadastro = $value;
		}
		
		public function loadId($id)
		{
			$sql = new Sql();
			
			$result = $sql->select("SELECT * FROM tb_usuarios WHERE idusuarios = :ID", array(":ID" => $id));
			
			if(count($result) > 0)
			{
				$this->setData($result[0]);
				
					
			}
		}
		
		public static function searche($login)
		{
			$sql = new Sql();
			
			return $sql->select("SELECT * FROM tb_usuarios WHERE deslogin LIKE :SEARCH", array(
				
				':SEARCH' => '%%'. $login .'%%' 
				
			));
			
		}
		
		public static function getList()
		{
			$sql = new Sql();
			
			return $sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin");
			
			
		}
		
		public function login($login, $password)	
		{
			$sql = new Sql();
			
			$results = $sql->select("SELECT * FROM tb_usuarios WHERE deslogin = :LOGIN AND desenha = :PASSWORD ", array
			(
				
				':LOGIN' => $login,
				':PASSWORD' => $password
				
			));
			
			if(count($results) > 0)
			{
				$this->setData($results[0]);
			}
			else
			{
				throw new Exception("Login e/ou senha invalidos");
			}		
			
		}	
		
		public function setData($data)
		{
			
				$this->setIdusuario($data['idusuarios']);
				$this->setDeslogin($data['deslogin']);
				$this->setDessenha($data['desenha']);
				$this->setDtcadastro($data['dtcadastro']);
			
		}
		
		
		public function __toString()
		{
			return json_encode(array
				(			
					'idusuarios' => $this->getIdusuario(),
					'deslogin' => $this->getDeslogin(),
					'desenha' => $this->getDessenha(),
					'dtcadastro' => $this->getDtcadastro()
				));	
		}
		
		
	}


?>