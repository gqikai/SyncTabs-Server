<?php
class UserModel extends Model{
	 //批量错误信息显示
    // 是否批处理验证
    protected $patchValidate    =   true;
    
        //自动完成处理
    // 自动完成定义
    protected $_auto            =   array(
        //array(填充字段,填充内容,[填充条件,附加规则])
        array('user_pass','md5',3,'function'),
        //array('user_time','time',1,'function'),
        //array('user_time','abc',1,'callback'),
        //array('user_time','user_qq',1,'field'),
        //array('user_time','123456789',1,'string'),
    );
    
    //进行表单域验证
    //protected $_validate        =   array();  // 自动验证定义
    protected $_validate = array(
        //array(验证字段,验证规则,错误提示,[验证条件,附加规则,验证时间])
        array('user_name','require','用户名必须填写'),
        //密码必须填写
        array('user_pass','require','密码必须填写'),
        //确认密码必须填写/与密码保存一致
        array('user_pass2','require','确认密码必须填写'),
        array('user_pass2','user_pass','两次密码必须一致',0,'confirm'),
        //验证邮箱
        array('email','email','邮箱格式必须正确',2),
    );
    
    public function setError($key,$value){
    	$this -> error[$key] = $value;
    	//var_dump($this -> error);
    }
	
}