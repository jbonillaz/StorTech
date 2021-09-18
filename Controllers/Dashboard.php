<?php 

	class Dashboard extends Controllers{

		public function __construct(){

			parent::__construct();

			session_start();
			session_regenerate_id(true);//Para eliminar el id anterior en la sesion, a medida de seguridad de inicio de sesion.
			if(empty($_SESSION['login'])){
				
				header('Location: '.base_url().'/login');
			}
			getPermisos(1);
		}

		public function dashboard()
		{
			$data['page_id'] = 2;
			$data['page_tag'] = "Dasboard -Tienda Virtual";
			$data['page_title'] = "dasboard -tienda Virtual";
			$data['page_name'] = "dashboard";
			$data['page_functions_js'] = "functions_dashboard.js";
			$this->views->getView($this,"dashboard",$data);
		}

	}
 ?>