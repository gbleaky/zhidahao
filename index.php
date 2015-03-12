<?php
/**
 * @name index
 * @desc 入口文件
 * @author 王博(wangbo09#baidu.com)
 */
$objApplication = Bd_Init::init();
$objResponse = $objApplication->bootstrap()->run();
