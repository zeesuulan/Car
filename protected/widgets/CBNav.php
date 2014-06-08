<?php

class CBNav extends CWidget
{
	public $items=array();
	public function init()
	{
		$html = "";
		foreach($this->items as $item){
			$html .= "<li><a href=".$item['url'][0].">".$item['label']."</a></li>";
		}
		echo $html;
	}

	public function run()
	{
		$this->renderMenu($this->items);
	}

	
	protected function renderMenu($items)
	{
		
	}

	
	protected function isItemActive($item,$route)
	{
		if(isset($item['url']) && is_array($item['url']) && !strcasecmp(trim($item['url'][0],'/'),$route))
		{
			unset($item['url']['#']);
			if(count($item['url'])>1)
			{
				foreach(array_splice($item['url'],1) as $name=>$value)
				{
					if(!isset($_GET[$name]) || $_GET[$name]!=$value)
						return false;
				}
			}
			return true;
		}
		return false;
	}
}