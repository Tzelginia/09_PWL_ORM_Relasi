<?php
namespace App\Models;
use Illuminate\Contracts\Auth\MustVerifyemail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\Mahasiswa as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model; //Model Eloquen
use App\Models\Mahasiswa;
class Mahasiswa extends Model
{
    protected $table='mahasiswa'; // Eloquent akan membuat model mahasiswa menyimpan record di tabel mahasiswa
 protected $primaryKey = 'nim'; // Memanggil isi DB Dengan primarykey
 /**
 * The attributes that are mass assignable.
 *
 * @var array
 */
 protected $fillable = [
 'nim',
 'nama',
 'kelas_id',
 'jurusan',
 ];
  //menambah 3 kolom pada model
//   'Email' ,
//   'Alamat' ,
//   'tanggal_lahir' ,
public function kelas(){
    return $this->belongsTo(Kelas::class);
}
}
