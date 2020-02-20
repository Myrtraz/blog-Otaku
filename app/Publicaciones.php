<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publicaciones extends Model
{
    protected $fillable = [
        'title',
        'resume',
        'text',
        'photo',
        'created_at'
    ];

	public function GetUrlPathAttribute(){

		return \Storage::url($this->path);
	}
}

