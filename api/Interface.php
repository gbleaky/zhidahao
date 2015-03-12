<?php
/**
 * @name Dpp_Api_Zhidahao_Interface
 * @desc sample api interface
 * @author 王博(wangbo09#baidu.com)
 */
interface Dpp_Api_Zhidahao_Interface{
    public function getSample(Dpp_Api_Zhidahao_Entity_ReqgetSample $req,
    						  Dpp_Api_Zhidahao_Entity_ResgetSample $res);
}

class Dpp_Api_Zhidahao_Entity_ReqgetSample extends Saf_Api_Entity{
	public $id = 0;
    public function __construct(){
    }
}
class Dpp_Api_Zhidahao_Entity_ResgetSample extends Saf_Api_Entity{
    public $errno = 0 ;
    public $data = null ;
    public function __construct(){
    }
}

