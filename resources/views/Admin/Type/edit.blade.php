@extends('Admin.layouts.index')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Edit Type
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                
                                <form role="form" action="{{route('Type.update',$type->id)}}" method="post">
                                    {{csrf_field()}}
                                    {{ method_field('PUT') }}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name</label>
                                    <input type="text" name="type_name"  class="form-control" id="exampleInputEmail1" placeholder="Tên Mới">
                                    
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Slug</label>
                                    <input type="text" name="slug_type"  class="form-control" id="exampleInputEmail1" placeholder="Tên Mới">
                                    
                                </div>
                            <select name="type_id1">
                                @foreach($category_ID as $key)
                               
                                <div class="form-group">
                                    
                                   <option>{{$key->id}}</option>
                                   
                                </div>
                            
                                @endforeach
                            </select>
                            <br>
                                <button type="submit" class="btn btn-info">Update</button>
                            </form>
                           
                            </div>

                        </div>
                    </section>

            </div>
           
                </section>

            </div>
        </div>
@endsection