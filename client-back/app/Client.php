<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Validator;



class Client extends Model
{
    use SoftDeletes;

    public $table = "client";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'name', 'birthday', 'phone', 'zipcode', 'street', 'number', 'neighborhood', 'city'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'deleted_at', 'created_at', 'update_at'
    ];

    /**
     * Validate
     *
     * @return bool
     */
    public function validate($request){

        $validator = Validator::make(

            array(
                'name' => $request->name,
                'birthday' => $request->birthday,
                'phone' => $request->phone,
                'zipcode' => $request->zipcode,
                'street' => $request->street,
                'number' => $request->number,
                'neighborhood' => $request->neighborhood,
                'city' => $request->city
            ),
            array(
                'name' => 'required|max:100',
                'birthday' => 'required|date',
                'phone' => 'required|max:20',
                'zipcode' => 'required|max:20|min:3',
                'street' => 'required|max:255',
                'number' => 'required|max:10',
                'neighborhood' => 'required|max:255',
                'city' => 'required|max:255'
            ),
            array(
                'name' => 'Favor informar o nome!',
                'birthday' => 'Favor informar a data de nascimento!',
                'phone' => 'Favor informar telefone!',
                'zipcode' => 'Favor informar CEP!',
                'street' => 'Favor informar logradouro!',
                'number' => 'Favor informar número!',
                'neighborhood' => 'Favor informar o bairro!',
                'city' => 'Favor informar a cidade!'
            )
        );

        if ($validator->fails())
            return $validator->messages()->getMessages();
        return true;
    }


}
