<?php
<!-- Rating -->
namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed $market
 */
class Rating extends Model
{
    protected $guarded = ['id'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function market()
    {
        return $this->belongsTo('App\Market');
    }
}
