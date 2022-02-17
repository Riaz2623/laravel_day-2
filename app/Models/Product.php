<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public static function getAllProduct()
    {
        return [
            0=>[
                'id'=>1,
                'name'=>'T-Shirt',
                'price'=>'2250',
                'discription'=>'discription',
                'image'=>asset('/img/s1.jpg'),
            ],
            1=>[
                'id'=>2,
                'name'=>'Shirt',
                'price'=>'1500',
                'discription'=>'discription',
                'image'=>asset('/img/s2.jpg'),
            ],
            2=>[
                'id'=>3,
                'name'=>'Panjabi',
                'price'=>'14250',
                'discription'=>'discription',
                'image'=>asset('/img/s3.jpg'),
            ],
        ];
    }
}
