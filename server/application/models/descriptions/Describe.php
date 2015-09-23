<?php
/**
@auther 
*/
require 'xml.php';
require 'DescribeAble.php';
class Describe implements DescribeAble{
	public  function getDescriptionsKey($object){


}
	public  function addDescriptionKey($object,$key){


}
	public  function delDescritpionKey($object,$key){

}
	public function testxml(){
	$xml = new xml('./descriptionsxml/test.xml');
        echo($xml->data);







}








}


