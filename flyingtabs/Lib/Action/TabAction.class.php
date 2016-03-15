<?php
class TabAction extends Action {
	
	public function sync(){
		$model = new TabModel ();
		header( 'Access-Control-Allow-Origin: *');
		
		$syncTime = time();
		
		$titleAndUrl = str_replace('**********', '&',$_POST['titleAndUrl']);
		$arr = explode("aaaaaaaaaa", $titleAndUrl);
		$urls = json_decode($arr[0]);
		$titles = json_decode($arr[1]);
		
		for ($i= 0;$i< count($urls); $i++){
			$sql = "insert into ft_tab (user_name,synctime,url,title)values('".$_POST['user_name']."','".$syncTime."','".$urls[$i]."',"."'".$titles[$i]."');";
			$tabs = $model->query ( $sql );
		    }
		showBug($_POST);
		}

	public function lastTabs() {
		$model = new TabModel ();
		$data = $model->select ();
		showBug ( $data );
		$this->display ();
	}
	
	public function history() {
		//showBug($_SESSION);
		$model = new TabModel ();
            /*		select 类别, SUM(数量)from A
            where 数量 gt;8
            group by 类别
            having SUM(数量) gt; 10
            */
		$index = $model->query("select synctime,user_name,SUM(synctime) from ft_tab
		 where user_name = '" . 'zhangSan' . "' group by synctime;");
		$data = array ();
		//showBug($index);
		//showBug($_SESSION);
		foreach ( $index as $tab ) {
			$sql = "select * from ft_tab where user_name = '"
			 . 'zhangSan' . "' and synctime ='" . $tab ['synctime'] . "';";
			$tabs = $model->query ( $sql );
			$data [$tab ['synctime']] = $tabs;
		}
        echo json_encode($data);
			//var_dump($_SESSION);
		//var_dump($data);
//		$this->assign("data",$data);
//		$this->display ();
	}

}