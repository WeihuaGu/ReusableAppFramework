<?php
/**
描述系统接口


@auther 
*/
interface DescribeAble{
	public  function getDescriptionsKey($object);
	public  function addDescriptionKey($object,$key);
	public  function delDescritpionKey($object,$key);
	
	
}

