<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    private int $Nbrcomments ;

    private string $description ;
    public function setDescription($newdesc){
        $this->description  = $newdesc;
    }
    public function getNbrcomments() : int {
        return $this->Nbrcomments;
    }
}
