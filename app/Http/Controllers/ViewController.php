<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;


class ViewController extends Controller
{
    protected $city;
    protected $mobile;
    protected $data=[];
    protected $products;

    public function index()
    {
        return view('test');
    }
    public function bitm()
    {
        $this->mobile = '01716337420';
        $this->city = 'Dhaka';
        $this->data = [
            0 => [
                'name' => 'Riaz',
                'city' => 'Bhola',
                'mobile' => '01716337420',
            ],
            1 => [
                'name' => 'Hasan',
                'city' => 'Dhaka',
                'mobile' => '01716337',
            ],
            2 => [
                'name' => 'Tonmoy',
                'city' => 'savar',
                'mobile' => '0171',
            ],
            3 => [
                'name' => 'Topu',
                'city' => 'Barisal',
                'mobile' => '37420',
            ],
        ];
        return view('demo', [
            'a' => $this->city,
            'Topu' => $this->mobile,
            'fihim' => $this->data
        ]);
    }
    public function about()
    {
      $this->products = product::getAllProduct();

        return view('about',['products'=>$this->products]);
    }
    public function contact()
    {
        return view('contact');
    }
    public function detail($id)
    {
        $this->products=product::getAllProduct();
        foreach ($this->products as $item)
        {
            if($item['id']==$id)
            {
                return view('details',['data'=>$item]);
            }
        }

    }
}
