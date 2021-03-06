<?php

namespace app\index\controller;

use app\common\controller\Frontend;
use think\Request;

class Index extends Frontend
{

    protected $noNeedLogin = '*';
    protected $noNeedRight = '*';
    protected $layout = '';

    public function index(){
        return $this->view->fetch();
    }

    public function test(){
        return $this->view->fetch();
    }

    public function news(){
    	$newslist = [];
        return jsonp(['newslist' => $newslist, 'new' => count($newslist), 'url' => 'https://www.fastadmin.net?ref=news']);
     }

}
