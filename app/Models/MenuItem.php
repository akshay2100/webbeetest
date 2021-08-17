<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{

    public function child()
    {
        return $this->hasMany(\App\Models\MenuItem::class, 'parent_id', 'id');
    }

    public function children()
    {
        return $this->child()->with('children');
    }
}
