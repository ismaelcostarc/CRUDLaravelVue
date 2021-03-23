<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'medical_record',
        'phone',
        'cel',
        'zipcode',
        'address',
        'complement',
        'address_number',
        'district',
        'state',
        'city',
        'birth',
        'age',
        'gender',
        'rg',
        'organ_rg',
        'cpf'
    ];

    protected $dates = ['deleted_at'];
}
