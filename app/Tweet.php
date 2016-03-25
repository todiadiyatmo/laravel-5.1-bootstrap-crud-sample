<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public function validate(array $data)
    {
        return \Validator::make($data, [
            'title' 	=> 'required|max:255',
            'body'		=> 'required|max:255',
        ]);
    }

}
