<?php

namespace Plume\Async\Core;

use Plume\Application;
use Plume\Core\ApplicationTrait;

class Worker{

	use ApplicationTrait;

	public function __construct($dirPath, $env) {
        $this->app = new Application();
        //root目录是module的根目录，也是worker的上级目录
        $this->app['plume.root.path'] = $dirPath.'/../';
        $this->app['plume.env'] = $env;
    }
	
}