<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class StageHandler
 * 
 * @property int $id
 * @property int $stage
 * @property string $posisi
 * @property string $nama
 * @property string $bread
 * @property int $next
 * @property int $reroute
 * @property string|null $next_label
 * @property string|null $reroute_label
 * @property string|null $flag
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class StageHandler extends Model
{
	protected $table = 'stage_handlers';

	protected $casts = [
		'stage' => 'int',
		'next' => 'int',
		'reroute' => 'int'
	];

	protected $fillable = [
		'stage',
		'posisi',
		'nama',
		'bread',
		'next',
		'reroute',
		'next_label',
		'reroute_label',
		'flag'
	];
}
