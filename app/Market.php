<?php
<!-- market -->

namespace App;

use Illuminate\Database\Eloquent\Model;


/**
 * @property mixed $ratings
 */
class Market extends Model
{

    protected $guarded = ['id'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function rating()
    {
        return $this->hasMany('App\Rating');
    }

}
