@extends('Admin.layouts.index')
@section('admin_content')
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      List User
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
            <th>Name</th>
            <th>Password</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
            @foreach($userList  as $user)
          <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name=""><i></i></label></td>
            <td><span class="text-ellipsis">{{$user->id}}</span></td>
            <td><span class="text-ellipsis">{{$user->email}}</span></td>
            <td><span class="text-ellipsis">{{$user->password}}</span></td>
            <td>
            <button>  <a href="{{route('User.edit',$user->id)}}" class="active" ui-toggle-class=""><i class="fa fa-pencil-square-o text-success text-active"></i></a></button>
              
                
              <form action="{{route('User.destroy',$user->id)}}" method="post">
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
   
  </div>
</div>
@endsection