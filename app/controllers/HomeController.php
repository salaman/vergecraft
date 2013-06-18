<?php

class HomeController extends BaseController {

    /**
     * The layout that should be used for responses.
     */
    protected $layout = 'layouts.master';

	public function getIndex()
	{
		$data = Cache::remember('players', 2, function()
		{
			$Query = new MinecraftQuery();

	        try {
	            $Query->Connect('mc.vergecraft.com', 25565);
	            $info = $Query->GetInfo();

	            return array(
	            	'success' => true,
	            	'players' => $info['Players'],
	            	'version' => $info['Version'],
	            );
	        }
	        catch(MinecraftQueryException $e) {
	            return array('success' => false);
	        }
		});

		$this->layout->content = View::make('home', $data);
	}

	public function getOldWorld()
	{
		$this->layout->content = View::make('oldworld');
	}

	public function getRules()
	{
		$this->layout->content = View::make('rules');
	}

	public function getGuide()
	{
		$this->layout->content = View::make('guide');
	}

	public function getMap()
	{
		$this->layout->content = View::make('map');
	}

	public function getStaff()
	{
		$this->layout->content = View::make('staff');
	}

}