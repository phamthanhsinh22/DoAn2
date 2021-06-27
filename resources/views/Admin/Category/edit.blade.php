@extends('Admin.layouts.index')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Edit Category
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                 
                                <form role="form" action="{{route('Category.update',$category->id)}}" method="post">
                                    {{csrf_field()}}
                                    {{method_field('PUT')}}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name</label>
                                    <input type="text" name="category_name" class="form-control" id="exampleInputEmail1" placeholder="Tên Mới">
                                </div>
                                
                                <button type="submit"  class="btn btn-info">Update</button>
                            </form>
                            
                            </div>

                        </div>
                    </section>

            </div>
           
                </section>

            </div>
        </div>
@endsection