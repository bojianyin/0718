<?php
	Class IndexAction extends CommonAction {
		Public function Index() {
			$this->display();
		}
		Public function logout() {
			session_unset();
			session_destroy();
			$this->redirect("Login/index");
		}
	}
?>