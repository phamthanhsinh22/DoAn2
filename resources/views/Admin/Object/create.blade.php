@extends('Admin.layouts.index')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Add Object
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                               
                                <form role="form" enctype="multipart/form-data" action="{{route('Object.store')}}" method="post">
                               
                               {{csrf_field()}}
                                
                                <div class="form-group"> 
                                    <label for="exampleInputEmail1">Title</label>
                                    <input type="text" name="object_title" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                                 <div class="form-group"> 
                                    <label for="exampleInputEmail1">Content</label>
                                    <textarea type="text" name="object_content" class="form-control" id="exampleInputEmail1" rows="5" style="resize:none" placeholder=""></textarea>
                                </div>
                                <div class="form-group">  
                                    <label >Images</label>
                                    <input type="file" name="images" class="form-control-file" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                                <div class="form-group">  
                                    <label for="exampleInputEmail1">Video</label>
                                    <input type="file" name="videos" classs="form-control-file" id="exampleInputEmail1">
                                    
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">ID Type</label>
                                    <br>
                                <select name="obje_id1">
                                        @foreach($type_ID as $value)
                                            
                                            <option>{{$value->id}}</option>
                                   
                                        @endforeach
                                   </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">ID Category</label>
                                    <br>
                                     <select name="obje_id2">

                                        @foreach($category_ID as $value1)
                                        
                                            <option>{{$value1->id}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <button type="submit" name="add_type" class="btn btn-info">Add</button>
                                
                            </form>
                            </div>

                        </div>
                    </section>

            </div>
           
                </section>

            </div>
        </div>
@endsection