@extends('layouts.admin')
@section('content')
<div class="modal" id="delete" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">رسالة تأكيد الحذف</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>هل تريد حذف هذا السجل؟</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">لا</button>
        <button type="button" class="btn btn-danger" onclick="confirmDelete()">نعم</button>
      </div>
    </div>
  </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-sm-3 col-md-3"></div>
        <div class="col-sm-8 col-md-8">
            <div class="card">
                <div class="card-header background-color: rgb(69, 0, 29)">
                    <h3>إضافة فئة</h3>
                </div>
                <div class="card-body">
                    <form action="{{route('cat_create')}}" method='post'>
                        @csrf
                        <div class="row">
                            <div class="col">
                                <label class="form-label">اسم الفئة</label>
                                <input type='text' class="form-control" name="cat_name">
                                @error('name')
                                <small class='text-danger'>{{$message}}</small>
                                @enderror
                            </div>
                            <div class="col">
                                <label class="form-label">وصف الفئة</label>
                                <input type='text' class="form-control" name="cat_desc">
                                @error('discreption')
                                <small class='text-danger'>{{$message}}</small>
                                @enderror
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label class="form-label">صورة توضيحية</label>
                                    <input type='text' class="form-control" name="cat_icon">
                                    @error('icon')
                                    <small class='text-danger'>{{$message}}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <button type="submit">حفظ</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row mt-5">
    <div class="col-sm-3 col-md-3"></div>
    <div class="col-md-8 col-sm-8">
        <div class="card">
            <div class="card-header background-color: rgb(69, 0, 29)">
                <h3 class="text-white">الفئات</h3>
            </div>
            <div class="card-body">
                <table>
                    <thead>
                        <tr class="text-center">
                        <td class="text-center">رقم الفئة</td>
                        <td class="text-center">اسم الفئة</td>
                        <td class="text-center">وصف الفئة</td>
                        <td class="text-center">صورة توضيحية</td>
                        <td class="text-center col-span:2">تعديل</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $items)
                        <tr>
                            <td class='text-center'>{{$items->id}}</td>
                            <td class='text-center'>{{$items->name}}</td>
                            <td class='text-center'>{{$items->discreption}}</td>
                            <td class='text-center'>{{$items->icon}}</td>
                            <td class='text-center'><a href="{{route('cat_edit',['id'=>$items->id])}}"><i class="bi bi-pencil-square text-success"></i></a></td>
                            <td class='text-center'><button class="btn btn link" onclick="delete_cat({{$items->id}})"><i class="bi bi-trash3 text-danger"></i></button></td>
                        </tr>
                        @endforeach
                    </tbody>
                </teble>
            </div>
        </div>
    </div>
</div>
@endsection