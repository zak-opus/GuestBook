<?php
	class input
	{
		//定义函数，对数据进行检查
		function post($cs){
		//检查内容、用户名是否为空
			if($cs == ''){
				return false;
			}
		//检查是否有非法字符
			$n=['张三','李四','王五'];
			foreach ($n as $name) {
				if($cs == $name){
					return false;
				}
			}
			return true;
		}
	}
?>