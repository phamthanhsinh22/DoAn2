@extends('Admin.layouts.index')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Edit Object
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                 
                                <form action="{{route('Object.update',$object->id)}}" method="post">
                                   
                                    {{csrf_field()}}
                                    {{method_field('PUT')}}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">{{$object->Title}}</label>
                                    <input type="text" name="title_name" class="form-control" id="exampleInputEmail1" placeholder="Tên Mới">
                                </div>  
                                <div class="form-group">
                                    <textarea class="form-control" name="content_name" rows="10" for="exampleInputEmail1">{{$object->Content}}</textarea>
                                    
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">{{$object->Video}}</label>
                                    <input type="file" name="video_name" class="form-control" id="exampleInputEmail1" placeholder="Tên Mới">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">{{$object->Images}}</label>
                                    <input type="file" name="images_name" class="form-control" id="exampleInputEmail1" placeholder="Tên Mới">
                                </div>
                                <select name="type_id1">
                                
                               @foreach ($type_ID as $typ)
                                <div class="form-group">
                                    
                                   <option>{{$typ->id}}</option>
                                   
                                </div>
                                @endforeach
                            
                            </select>
                            <br>
                            <select name="cate_id1">
                               
                               @foreach ($category_ID as $catid)
                                <div class="form-group">
                                    
                                   <option>{{$catid->id}}</option>
                                   
                                </div>
                                @endforeach
                                
                            </select>
                            <br>
                                <button type="submit" name="update_object" class="btn btn-info">Update</button>
                            </form>
                            
                            </div>

                        </div>
                    </section>

            </div>
           
                </section>

            </div>
        </div>
@endsection