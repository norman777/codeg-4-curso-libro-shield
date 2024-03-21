<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Base extends BaseController{

    protected $title = 'Base';
    protected $content = 'Base';

    public function new(){
        echo view('base/new',[
            'title' => 'New '.$this->title,
            'content' => $this->content
        ]);
    }
    public function create(){
        echo view('base/create',[
            'title' => 'Create '.$this->title,
            'content' => $this->content
        ]);
    }
    public function edit(){
        echo view('base/edit',[
            'title' => 'Edit '.$this->title,
            'content' => $this->content
        ]);
    }
    public function update(){
        echo view('base/update',[
            'title' => 'Update '.$this->title,
            'content' => $this->content
        ]);
    }
    public function delete(){
        echo view('base/delete',[
            'title' => 'Delete '.$this->title,
            'content' => $this->content
        ]);
    }
    public function index(){
        echo view('base/index',[
            'title' => 'Index '.$this->title,
            'content' => $this->content
        ]);
    }

}