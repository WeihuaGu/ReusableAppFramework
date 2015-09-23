<?php
/**
标签系统接口
@auther gu
*/
interface TagAble{
	public  function getObjectsWithTag($tag, $offset = 0, $limit = 100, $tagger_id = NULL);
	
}

