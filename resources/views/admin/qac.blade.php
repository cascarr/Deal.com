@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">QAC Dashboard</div>

            </div>
            
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Mail department staff
                
<!--            <a  style="float: right;" href="/admin/useri" class="btn btn-success">Show Ideas</a>-->
            </div>

                <div class="panel-body">

        
 <form method="post" action="/posts" enctype="multipart/form-data">
    
    {{ csrf_field() }}
    
  <div class="form-group">
    <label for="title">T0</label>
    <input type="email" class="form-control" id="email" placeholder="name@example.com">
    <span class="help-block">
        <strong>{{ $errors->first('email') }}</strong>
    </span>
  </div>
  
  <div class="form-group">
    <label for="body">Message</label>
    <textarea id="body" name="body" class="form-control"></textarea>
    <span class="help-block">
        <strong>{{ $errors->first('body') }}</strong>
    </span>
  </div>
    

     

  <div>
        <button type="submit" class="btn btn-primary">Publish</button>

  </div>
</form>
            </div>
        </div>
    </div>
            
            
        </div>
    </div>
</div>
@endsection
