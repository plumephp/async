<?php

namespace Plume\Async\Core;

trait ContextTrait{
	
    protected $context = array(
        'plume.env' => 'dev',
        'plume.root.path' => '',
        'plume.log.debug' => false
    );

    public function getContext(){
        return $this->context;
    }
}