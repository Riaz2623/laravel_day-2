@extends('master')

@section('title')
    product detail
@endsection
@section('body')
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-6 ">
                    <div class="card card-body">
                        <img src="{{$data['image']}}" alt="" class="card-img-top h-300"/>
                    </div>
                </div>
                <div class="col-md-6 ">
                    <div class="card card-body">
                        <h1>{{$data['name']}}</h1>
                        <h3>{{$data['price']}}</h3>
                        <p>{{$data['discription']}}</p>
                        <hr/>
                        <button type="button" class="btn btn-outline-success">Add To Card</button>
                    </div>

                </div>

            </div>
        </div>
    </section>

@endsection
