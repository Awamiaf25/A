@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row mt-5">
        <div class="col">
            <h1 style="color:rgb(69, 0, 29)">أهلًا بكم في متجر بذرة</h1>
            <p>متجر يجمع لك كل ما تحتاجه لحديقة غنّاء وخضراء</p>
            <small>يوجد لدينا طرق دفع متعددة</small>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="row">
            @foreach ($cat_data as $item)
            <div class="col-sm-3 col-md-3 mt-5"></div>
                <div class="col-sm-6 col-md-6 col-12">
                    <a href="{{route('list',['id'=>$item->id])}}">
                        <div class="card" style="width:200px;">
                            <div class="card-header" style="background-color: rgb(1, 45, 24); color:aliceblue">
                                {{$item->name}}
                            </div>
                            <div class="card-body" style="background-color:rgb(225, 225, 225)">
                                <div class="row">
                                    <div class="col">
                                        <small style="color:black">{{$item->discreption}}</small>
                                    </div>
                                    <div class="col">
                                        <small style="color:black"><i class="{{$item->icon}}"></i></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection