<?php

namespace think;

class Demo{
    public $a = '3333';

    public $thinkPath = '';

    public $appPath = '';

    public $rootPath = '';

    public function __construct(string $rootPath = '')
    {
        //realpath: 函数返回绝对路径。
        $this->thinkPath = realpath(dirname(__DIR__)) . DIRECTORY_SEPARATOR;
        $this->rootPath = $rootPath ? rtrim($rootPath,DIRECTORY_SEPARATOR).DIRECTORY_SEPARATOR : $this->getDefaultRootPath();
        $this->appPath     = $this->rootPath .DIRECTORY_SEPARATOR;

        if (is_file($this->appPath . 'provider.php')) {
            var_dump(123213);die;
        } else {
            var_dump(123);die;
        }
        echo $this->thinkPath;
    }

    protected function getDefaultRootPath()
    {
        return dirname($this->thinkPath,4) . DIRECTORY_SEPARATOR; //返回//
    }
}