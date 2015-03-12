<?php
/**
 * @name Service
 * @desc sample api Service
 * @author 王博(wangbo09#baidu.com)
 */
class Dpp_Api_Zhidahao_Service extends Saf_Api_Service implements Dpp_Api_Zhidahao_Interface{
	public function __construct(){
		parent::__construct('zhidahao');
		$this->oe = "utf-8";
	}
    public function getSample(Dpp_Api_Zhidahao_Entity_ReqgetSample $req,
    						  Dpp_Api_Zhidahao_Entity_ResgetSample $res){
		$arrInput = $req->toArray();
		/*  
		 *           此处添加arrParms的keys到PageServeice的参数的隐射
		 *           默认不做隐射
		 *           arrInput = array('versionId' => 111);
		 *           eg: $arrParam['Id'] = $arrInput['versionId'];
		 **/
		$arrInput['method']=__FUNCTION__;

		$strUrl = "zhidahao/api/sample?fromapi=1";
		$strPageService = "Service_Page_SampleApi";
		$arrOutput = null;

		$arrRes = $this->execute($arrInput, $arrOutput, $strPageService, $strUrl, 'get');
		if($arrRes !== false)
		{   
			$res->loadFromArray($arrRes);
			if($res !== false){
				return $res;
			}else{
				return null;
			}	
		}   
		return false;
	}
}

