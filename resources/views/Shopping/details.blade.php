@extends('layouts.app')
@section('content')
<style>
        body {
            background-color: #f8f9fa;
        }
        .product-img {
            max-height: 400px;
            object-fit: cover;
        }
        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
    </style>

<div class="container py-5">
        <div class="row">
            <!-- صورة المنتج -->
            <div class="col-md-6">
                <img src="{{$info->image}}" class="img-fluid product-img rounded" alt="صورة المنتج">
            </div>
            <!-- تفاصيل المنتج -->
            <div class="col-md-6">
                <div class="card p-4">
                    <h2 class="mb-3">{{$info->name}}</h2>
                    <h4 class="text-success mb-3">السعر: {{$info->price}}</h4>
                    <h5 class="mb-3">الوصف:</h5>
                    <p class="text-muted">
                    {{$info->discreption}}.
                    </p>
                <div class="row">
                    <div class="col">
                    <a href="{{route('cart')}}"><button class="btn btn-primary btn-lg mt-3" style='color:black;'>إضافة إلى السلة</button></a>
                    </div>
                    <div class="col">
                    <a href="{{route('checkout')}}"><button class="btn btn-success btn-lg mt-3" style='color:black;'>إنهاء الطلب</button></a>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection