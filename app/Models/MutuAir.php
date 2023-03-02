<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MutuAir
 * 
 * @property int $id
 * @property int|null $stasiun_air
 * @property string|null $foto
 * @property string|null $indeks_pencemar
 * @property string|null $parameter_kritis
 * @property string|null $warna
 * @property string|null $keterangan
 * @property Carbon $created_at
 *
 * @package App\Models
 */
class MutuAir extends Model
{
	protected $table = 'mutu_air';
	public $timestamps = false;

	protected $casts = [
		'stasiun_air' => 'int'
	];

	protected $fillable = [
		'stasiun_air',
		'foto',
		'indeks_pencemar',
		'parameter_kritis',
		'warna',
		'keterangan'
	];
}
