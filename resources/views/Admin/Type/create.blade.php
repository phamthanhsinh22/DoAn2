@extends('Admin.layouts.index')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Add Type
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form" action="{{route('Type.store')}}" method="post">
                                    {{csrf_field()}}
                               
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name Type</label>
                                    <input type="text" name="type_name" onkeyup="ChangeToSlug();" class="form-control" id="slug" placeholder="Enter email">
                                    <label for="exampleInputEmail1">Slug Type</label>
                                    <input type="text" name="slug_type" class="form-control" id="convert_slug" placeholder="Enter email">
                                    <select name="type_id">
                                        
                                    @foreach($data as $key)
                                    <option>{{$key->id}}</option>
                                    @endforeach
                                    </select>

                                </div>
                                
                                <button type="submit" class="btn btn-info">Add</button>
                                
                            </form>
                            </div>

                        </div>
                    </section>

            </div>
           
                </section>

            </div>
        </div>
@endsection