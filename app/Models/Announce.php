<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announce extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'price', 'description', 'user_id', 'category_id'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public static function ToBeRevisionedCount(){
        return Announce::where('is_accepted', null)->count();
    }

    public function setAccepted($value){
        $this->is_accepted = $value;
        $this->save();

        return true;
    }
}
