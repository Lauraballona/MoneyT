<?php  
	class AppModel
	{
		protected $_db;
		/**
		 * llama a la base de datos para abrir la conexion
		 * @return type
		 */
		public function __construct()
		{
			$this->_db = new Database();
		}
	}
?>