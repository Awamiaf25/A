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
        <button type="button" class="btn btn-danger" onclick="confirmDeleteProd()">نعم</button>
      </div>
    </div>
  </div>
</div>


<div class="container mt-5">
    <div class="row">
        <div class="col-sm-3 col-md-3"></div>
        <div class="col-sm-8 col-md-8">
            <div class="card">
                <div class="card-header background-color: rgb(69, 0, 29)">
                    <h3>إضافة منتجات</h3>
                </div>
                <div class="card-body">
                    <form action="{{route('prod_create')}}" method='post' enctype="multipart/form-data" name="addform">
                        @csrf
                        <div class="row">
                            <div class="col">
                                <select name="categories_id" class='form-select'>
                                    @foreach ($cat_data as $items)
                                    <option value="{{$items->id}}">{{$items->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label class="form-label">اسم المنتج</label>
                                <input type='text' class="form-control" name="prod_name">
                                @error('name')
                                <small class='text-danger'>{{$message}}</small>
                                @enderror
                            </div>
                            <div class="col">
                                <label class="form-label">وصف المنتج</label>
                                <input type='text' class="form-control" name="prod_desc">
                                @error('discreption')
                                <small class='text-danger'>{{$message}}</small>
                                @enderror
                            </div>
                            <div class="col">
                                <label class="form-label">الكمية</label>
                                <input type='number' class="form-control" name="prod_stock">
                                @error('stock')
                                <small class='text-danger'>{{$message}}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label class="form-label">الصورة</label>
                                <input type="file" class="form-control" name="prod_image" accept="image/*">
                                @error('image')
                                <small class='text-danger'>{{$message}}</small>
                                @enderror
                            </div>
                            <div class="col">
                                <label class="form-label">السعر</label>
                                <input type='number' class="form-control" name="prod_price">
                                @error('price')
                                <small class='text-danger'>{{$message}}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <button type="submit" class="btn btn-primary">حفظ</button>
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
    <div class="col-sm-8 col-md-8">
        <div class="card">
            <div class="card-header background-color: rgb(69, 0, 29)">
                <h3 class="text-white">المنتجات</h3>
            </div>
            <div class="card-body">
                <table>
                    <thead>
                        <tr class="text-center">
                        <td class="text-center">رقم المنتج</td>
                        <td class="text-center">رقم الفئة</td>
                        <td class="text-center">اسم المنتج</td>
                        <td class="text-center">وصف المنتج</td>
                        <td class="text-center">الكمية</td>
                        <td class="text-center">سعر المنتج</td>
                        <td class="text-center">صورة المنتج</td>
                        <td class="text-center col-span:2">تعديل</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($prod_data as $items)
                        <tr>
                            <td class='text-center'>{{$items->id}}</td>
                            <td class='text-center'>{{$items->categories_id}}</td>
                            <td class='text-center'>{{$items->name}}</td>
                            <td class='text-center'>{{$items->discreption}}</td>
                            <td class='text-center'>{{$items->stock}}</td>
                            <td class='text-center'>{{$items->price}}</td>
                            <td class='text-center'><img src="{{$items->image}}" width="100" height="100"></td>
                            <td class='text-center'><a href="{{route('prod_edit',['id'=>$items->id])}}"><i class="bi bi-pencil-square text-success"></i></a></td>
                            <td class='text-center'><button class="btn btn link" onclick="delete_prod({{$items->id}})"><i class="bi bi-trash3 text-danger"></i></a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection