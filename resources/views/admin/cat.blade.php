@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">QAM Dashboard</div>

            </div>
        </div><br /><br />
        
        <!-- form -->
        
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Create Categories
                
            <a  style="float: right;" href="/admin/qam" class="btn btn-success">Show Categories</a>
            </div>

                <div class="panel-body">

        
 <form method="post" action="/admin/qam/store">
    
    {{ csrf_field() }}
    
  <div class="form-group">
    <label for="cat_title">Category title</label>
    <input type="text" class="form-control" id="cat_title" name="cat_title">
    <span class="help-block">
<!--        <strong>{{ $errors->first('cat_title') }}</strong>-->
    </span>
  </div>
  

    
  <button type="submit" class="btn btn-primary">Create Category</button>
</form>
            </div>
        </div>
    </div>
        
        <!-- end of form -->
        
    </div>
</div>
@endsection
