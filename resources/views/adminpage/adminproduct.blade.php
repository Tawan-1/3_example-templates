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
                                      <a href="/admin/product/add" class="btn btn-primary">
                                          เพิ่ม
                                           </a>
                                      </div>
                                      <div class="card-body table-border-style">
                                          <div class="table-responsive">
                                              <table class="table table-hover">
                                                  <thead>
                                                      <tr>
                                                          <th>#</th>
                                                          <th>First Name</th>
                                                          <th>แก้ไขข้อมูล</th>
                                                          <th>Username</th>
                                                      </tr>
                                                  </thead>
                                                  <tbody>
                                                      <tr>
                                                          <td>1</td>
                                                          <td>Mark</td>
                                                          <td><a href="/admin/about/edit" class="btn btn-warning"></button>
                                          แก้ไข
                                           </a></td>
                                           <td><a href="/admin/about/delete" class="btn btn-danger"> ลบ</button>
                                          
                                           </a></td>
                                                      </tr>
                                                      <tr>
                                                          <td>2</td>
                                                          <td>Jacob</td>
                                                          <td><a href="/admin/about/edit" class="btn btn-warning"></button>
                                          แก้ไข
                                          </a></td>
                                           <td><a href="/admin/about/delete" class="btn btn-danger"> ลบ</button>
                                          
                                           </a></td>                                                        </tr>
                                                      <tr>
                                                          <td>3</td>
                                                          <td>Larry</td>
                                                          <td><a href="/admin/about/edit" class="btn btn-warning"></button>
                                          แก้ไข
                                          </a></td>
                                           <td><a href="/admin/about/delete" class="btn btn-danger"> ลบ</button>
                                          
                                           </a></td>                                                         </tr>
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