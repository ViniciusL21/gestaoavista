<?php
/*
* Classe para conexão, desenvolvida por Vinícius Lourenço.
*
*/
class conexao {

	//Atributos (constantes) com informações para conexão.
	const _USUARIO = "root";
	const _SENHA = "vertrigo";
	const _SID = "127.0.0.1"; 
	const _BANCO = "leadership21";
	public $_link;
	
	//Método para conexão ao banco.
	function __construct(){
            $this->_link = mysql_connect(self::_SID, self::_USUARIO, self::_SENHA);			
	
            if(!$this->_link){
            	die(mysql_error());
                $this->_verificacao = "Não houve conexão";
            }else{
                mysql_select_db(self::_BANCO, $this->_link);
                $this->_verificacao = "Conectado";
            }	
	}
	
	function retornar(){
		return $this->_verificacao;
	}   

}
?>