<?php
/**
 *  index.php
 *  Default page of this project
 *  Created by rongze at 2012-05-16
 */

defined( 'EXEC' ) or die( 'Restricted access' ); // no direct access

// Setting method
$m_allowed = array('index');
$m = !in_array($m, $m_allowed) ? 'index' : $m;

switch ($m)
{
	default:
		if( isset($_GET['date']) AND $date = trim($_GET['date'])  )
		{
			$rs_link = 'http://www.fm993.com.cn/program/more.do?columnId=31&play_time=' . $date;
			
			$temp_path =  'temp';
			$tp_source =  $temp_path . DS . md5($date).'.tmp'; 
			if( !file_exists($tp_source) )
			{
				check_dir($temp_path);
				file_put_contents($tp_source, file_get_contents($rs_link));
			}
			
			/*
			music_src[0] = "http://www.fm993.com.cn/replay/2012/05/25141e3297164878a47a4f1c21471365.wma";
			music_description[0] = "日落大道 - 2012.05.15 . 17.00.05.wma";
			*/
			$source = file_get_contents($tp_source);

			preg_match('/www.fm993.com.cn(.*)wma/', $source, $matches);
			if( isset($matches[0]) AND $link = $matches[0])
			{
				header("Location: http://$link");
			}

			$msg = "亲，暂无法提供<span class=\"black\">" . $date . "</span>的节目录音！" ;

		}
		require_once(PATH_BASE.DS . 'themes' . DS . 'index' . DS . $m . '.php');
}

/*检查dir是否创建，如无，则创建*/
function check_dir($path)
{
	return !is_dir($path) ? mkdir($path, 0777) : true;
}

// End of index.php
// Location: ./pages/index.php