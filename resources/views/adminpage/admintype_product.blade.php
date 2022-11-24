@extends('layouts.admin')
@section('content')

<div class="pcoded-main-container">
  <div class="pcoded-wrapper">
    <div class="pcoded-content">
      <div class="pcoded-inner-content">
        <div class="main-body">
          <div class="page-wrapper">
           
            <div class="row">

                          <div class ="col-12">
                          <div class="card">
                                      <div class="card-header">
                                      <a href="/admin/type_product/formadd" class="btn btn-primary">
                                          เพิ่ม
                                           </a>
                                      </div>
                                      <div class="card-body table-border-style">
                                          <div class="table-responsive">
                                              <table class="table table-hover">
                                                  <thead>
                                                      <tr>
                                                          <th>ลำดับ</th>
                                                          <th>ชื่อประเภทสินค้า</th>
                                                          <th>แก้ไข</th>
                                                          <th>ลบ</th>
                                                      </tr>
                                                  </thead>
                                                  <tbody>
                                                      @foreach($type as $item)
                                                      <tr>
                                                          <td>{{$item->id}}</td>
                                                          <td>{{$item->name}}</td>
                                                          {{-- <a href="/admin/about/delete" class="btn btn-danger"> ลบ</a></td>  --}}
                                                          <td> <a href="{{url('/admin/detail/edit/'. $item->id)}}" class="btn btn-warning rounded-pill">
                                                            แก้ไข</a> </td>
                                                          <td> <a href="{{url('/admin/detail/delete/'. $item->id)}}" class="btn btn-warning rounded-pill">
                                                            ลบ</a></td>   
                                                         
                                          </a>
                                                                                               
                                          </tr>
                                          @endforeach
                                                                  
                                                  </tbody>
                                              </table>
                                          </div>
                                      </div>
                                  </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  @stop