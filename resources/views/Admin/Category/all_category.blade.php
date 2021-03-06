@extends('Admin.layouts.index')
@section('admin_content')
@if(Session::has('message'))
<h3>{{Session::get('message')}}</h3>
@endif
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      List Category
    </div>
    <div class="table-responsive">
      <table id="table12" class="table table-striped b-t b-light">
       
          <tr>
            <th style="width:20px;">
              <label class="i-checks m-b-none">
                <input type="checkbox"><i></i>
              </label>
            </th>
            <th>ID</th>
            <th>Name</th>
            
            <th style="width:30px;"></th>
          </tr>
       
      
            @foreach($categoryList as $cat)
          <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name=""><i></i></label></td>
            <td><span class="text-ellipsis">{{$cat->id}}</span></td>
            <td><span class="text-ellipsis">{{$cat->catName}}</span></td>
            
            <td>
            <button>  <a href="{{route('Category.edit',$cat->id)}}" class="active" ui-toggle-class=""><i class="fa fa-pencil-square-o text-success text-active"></i></a></button>
              
                
              <form action="{{route('Category.destroy',$cat->id)}}" method="post">
                {{csrf_field()}}
                {{method_field('DELETE')}}
                <button><i class="fa fa-times text-danger text"></i></button>
              </form>
              
            </td>
          </tr>
            @endforeach
      
      </table>
    </div>
    
  </div>
</div>
@endsection