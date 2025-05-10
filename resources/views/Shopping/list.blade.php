@extends('layouts.app')
@section('content')
<div class="row mt-5">
    <div class="col">
        @foreach($product as $items)
        <div class="row mt-5">
            <div class="col-sm-3 col-md-3"></div>
            <div class="col-sm-8 col-md-8 d-flex justify-content-center">
                <div class="card" style="width: 700px">
                    <div class="card-header" style="background-color:rgb(1, 40, 27)">
                        <span style="color:#ffff">{{$items->name}}</span>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <ul class="list-unstyled">
                                    <li>{{$items->discreption}}</li>
                                    <li><span class="badge bg-danger">{{$items->price}}</span></li>
                                    <li><a class="btn btn-primary" style="color:black" href="{{route('details',['id'=>$items->id])}}">تفاصيل المنتج</a></li>
                                </ul>
                            </div>
                            <div class="col">
                                <img src="{{$items->image}}" height="200px" width="200px">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection