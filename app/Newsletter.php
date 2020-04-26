<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Newsletter extends Model
{
    protected $guarded = [];

    /**
     *
     * @return void
     */
    public function path()
    {
        return route('newsletters.show', ['newsletter' => $this->id]);
    }
}
