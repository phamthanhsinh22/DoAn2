@extends('Admin.layouts.index')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Add User
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form" action="{{route('User.store')}}" method="post">
                                    {{csrf_field()}}
                               
                                <div class="form-group">
                                    <label for="exampleInputEmail1"><Na></Na>Name</label>
                                    <input type="text" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                    <label for="exampleInputEmail1"><Na></Na>Password</label>
                                    <input type="password" name="password" class="form-control" id="exampleInputEmail1" placeholder="Enter email">

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