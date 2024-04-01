<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Phim extends Model{
    protected $primaryKey = 'maphim';
    public $timestamps = false;
    use HasFactory;
    public function lichChieu()
    {
    return $this->hasMany(LichChieu::class);
    }
}
?>