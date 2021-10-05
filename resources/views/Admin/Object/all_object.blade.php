@extends('Admin.layouts.index')
@section('admin_content')
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      List Object
    </div>
    
    <div class="table-responsive">
      <table id="table12" class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th style="width:20px;">
              <label class="i-checks m-b-none">
                <input type="checkbox"><i></i>
              </label>
            </th>
            <th>ID</th>
            <th>Title</th>
            <th>Slug</th>
            <th style="width: 350px;">Content</th>
            <th>Video</th>
            <th>Images</th>
            <th>ID Type</th>
            <th>ID Category</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
            @foreach($objectList as $object)
          <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name=""><i></i></label></td>
            <td><span class="text-ellipsis">{{$object->id}}</span></td>
            <td><span class="text-ellipsis">{{$object->Title}}</span></td>
            <td><span class="text-ellipsis">{{$object->slug}}</span></td> 
            <td>
            <textarea class="form-control"  rows="10">{{$object->Content}}</textarea>
            </td>                 
            <td><span class="text-ellipsis">{{$object->Video}}</span></td>
            <td><span class="text-ellipsis">{{$object->Images}}</span></td>
            <td><span class="text-ellipsis">{{$object->type_id}}</span></td>
            <td><span class="text-ellipsis">{{$object->category_id}}</span></td>
            <td>
            <button>  <a href="{{route('Object.edit',$object->id)}}" class="active" ui-toggle-class=""><i class="fa fa-pencil-square-o text-success text-active"></i></a></button>
              
                
              <form action="{{route('Object.destroy',$object->id)}}" method="post">
                {{csrf_field()}}
                {{method_field('DELETE')}}
                <button><i class="fa fa-times text-danger text"></i></button>
              </form>
              
            </td>
          </tr>
            @endforeach
        </tbody>
      </table>
    </div>
    <footer class="panel-footer">
      <div class="row">
        
        <div class="col-sm-5 text-center">
          <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
        </div>
        <div class="col-sm-7 text-right text-center-xs">                
          <ul class="pagination pagination-sm m-t-none m-b-none">
            <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
            <li><a href="">1</a></li>
            <li><a href="">2</a></li>
            <li><a href="">3</a></li>
            <li><a href="">4</a></li>
            <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>
@endsection