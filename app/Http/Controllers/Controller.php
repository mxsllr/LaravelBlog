<?php

namespace App\Http\Controllers;

abstract class BlogController
{
    public function article($id){
        redirect("article");
    }
}
