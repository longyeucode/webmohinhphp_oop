<?php

class corecontroller
{
    protected $data = [];

    public function loadview($viewname, $data = [])
    {
        extract($data); // Thêm dấu chấm phẩy ở đây
        include_once '../app/view/' . $viewname . '.php';
    }

    public function loadmodel($modelname)
    {
        return new ($modelname . "model")();
    }
}

?>
