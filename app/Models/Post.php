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
    // ketika setiap pemanggilan dari query Postnya ['author','category']nya ikut terbawa
    protected $with = ['author','category'];

    // Relationship DB

    public function category(){
        // Model Post sudah berelasi dengan Category (menghubungkan)
        return $this->belongsTo(Category::class);
    }

    // di model ini kita panggil function user , kalau function kita ganti ganti "author" maka akan error. jadi pada saat di halaman posts.blade.php manggil user, maka dia akan memanggil method function user(). nah kalo kita ganti jd 'author' ini akan error, laravelnya akan mengecek ada tidak di tabel 'post' field yang namanya 'author_id' sebagai Foreign Keynya, nah kan tidak ada. yang ada jg 'user_id', nah kalo kita ingin mengganti menjadi author maka kita tambahkan '(User::class, 'user_id')' jd kita mau mengganti 'user_id' aliasnya / nama lainnya, menjadi autohr
    public function author(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
