<?php
/**
 * @name Dao_Sample
 * @desc sample dao, 可以访问数据库，文件，其它系统等
 * @author 王博(wangbo09#baidu.com)
 */
class Dao_Sample {
	const TABLE = 'tblSample';
    public function __construct(){
    }   
    
    public function getSampleById($intId, $arrFields = null){
        return 'GoodBye World!';
    }

    public function addSample($arrFields)
    {
        return true;
    }
    
    public function updateSampleById($intId, $arrFields)
    {
        return true;
    }
    
    public function deleteSampleById($intId)
    {
        return true;
    }
    
    public function getSampleListByConds($arrConds, $arrFields, $intLimit, $intOffset, $arrOrderBy)
    {
        return true;
    }
}
