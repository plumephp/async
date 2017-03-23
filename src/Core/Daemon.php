<?php

namespace Plume\Async\Core;

use Plume\Application;
use Plume\Core\ApplicationTrait;

class Daemon{

	use ApplicationTrait;

	public function __construct($dirPath, $fileName, $env) {
        $this->app = new Application();
        //root目录是module的根目录，也是worker的上级目录
        $this->app['plume.root.path'] = $dirPath.'/../';
        $this->app['plume.env'] = $env;
        //这里由于无法进行web路径解析，所以通过传递类名来设置log的文件名
        $this->app['plume.request.path.full'] = $fileName;
    }
}