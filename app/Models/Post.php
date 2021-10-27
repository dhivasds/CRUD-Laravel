<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //* Field yang boleh diisi, sisanya tidak boleh
    // protected $fillable = [
    //     'title',
    //     'excerpt',
    //     'body'
    // ];

    // * Field yang tidak boleh diisi, sisanya boleh.
    protected $guarded = ['id'];

    public function category(){
        // Model Post sudah berelasi dengan Category (menghubungkan)
        return $this->belongsTo(Category::class);
    }
}
