<?php

class CBNav extends CWidget
{
	public $items=array();
	public function init()
	{
		$html = "";
		$route=$this->getController()->getRoute();
		foreach($this->items as $item){
			$class = $this->isItemActive($item, $route) ? "active" : "";
			$html .= "<li class='".$class."'><a href=".$item['url'][0].">".$item['label']."</a></li>";
		}
		echo $html;
	}
	protected function isItemActive($item,$route)
	{	
		return (isset($item['url'][0])&& stripos($route, trim($item['url'][0],'/')) === 0);
	}
}