<?php

class CBSiderNav extends CWidget
{
	public $items=array();
	public function init()
	{
		$html = '<div class="bs-sidebar hidden-print affix" role="complementary"><ul class="nav bs-sidenav">';
		$route=$this->getController()->getRoute();
		foreach($this->items as $item){
			$class = $this->isItemActive($item, $route) ? "active" : "";
			$html .= "<li class='".$class."'><a href=".$item['url'][0].">".$item['label']."</a></li>";
		}
		echo $html.'</ul></div>';
	}

	protected function isItemActive($item,$route)
	{
		return (isset($item['url'][0])&& stripos($route, trim($item['url'][0],'/')) > 0);
	}
}
