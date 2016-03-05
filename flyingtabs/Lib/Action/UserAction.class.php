<?php
class UserAction extends Action {
	
	public function login() {
		if (empty ( $_POST )) {
			$this->display ();
		} else {
			$model = new UserModel ();
			$sql = "select * from ft_user where user_name = '" . $_POST ['user_name'] . "' and user_pass = '" . md5 ( $_POST ['user_pass'] ) . "';";
			//showBug($sql);
			

			if ($model->query ( $sql )) {
				$_SESSION ['isLogin'] = "yes";
				$_SESSION ['user_name'] = $_POST ['user_name'];
				//showBug($_SESSION);
				echo "login succeed!";
			} else {
				echo "username or password messed";
				//var_dump($_POST);
			}
		}
	}

	public function logout(){
		session(null);
	}
	
	public function regist() {
		if (empty ( $_POST )) {
			$this->display ();
		} else {
			$model = new UserModel ();
			
			//showBug(!$model->find($_POST['username']));
			if ($model->getByUser_name ( $_POST ['user_name'] )) {
				echo "username already exists";
			} else {
				//				$data = array(
				//					'user_name' => $_POST['username'],
				//					'user_pass' => md5($_POST['password']),
				//				);		
				//				$model->add($data);
				//var_dump($_POST);
				$model->create ();
				//$model->user_pass = md5 ( $_POST ['user_pass'] );
				if ($_POST['captcha'] != "1111") {
					if (! empty ( $_POST ['captcha'] )) {
						if (md5 ( $_POST ['captcha'] ) != $_SESSION ['verify']) {
							$model->setError ( "captcha", "captcha incorrect" );
							//echo "i m here!";
						}
					} else {
						$model->setError ( "captcha", "验证码必须填写" );
					}
				}
				
				
				if($model->getError()){
					showBug ( $model->getError () );
				}else{
					$ret = $model->add ();
					echo "regist succeed";
				}
			}
		}
	}
	
	public function captcha() {
		import ( "ORG.Util.Image" );
		echo Image::buildImageVerify ();
	}

	public function checkUsername(){
		$model = new UserModel();
		if($model->getByUser_name($_POST['user_name'])){
			echo("username exists");
		}else{
			echo("username valid");
		}
		
	}
}