<?php

class YarController extends MyCtr
{

    public function IndexAction()
    {
        $service = new Yar_Server(new YarModel());
        $service->handle();
    }

    public function testAction(){
        echo "test222";
    }
}