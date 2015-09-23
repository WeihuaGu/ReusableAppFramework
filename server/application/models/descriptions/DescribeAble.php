<?php
/**
描述系统借口


@auther 
*/
interface DescribeAble{
	public  function getDescriptionsKey($object);
	public  function addDescriptionKey($object,$key);
	public  function delDescritpionKey($object,$key);
	
	
}

