@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Please drop ypur ideas here.</div>

            </div>
        </div><br /><br />
        
        <!-- form -->
        
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Create Ideas
                
            <a  style="float: right;" href="/admin/useri" class="btn btn-success">Show Ideas</a>
            </div>

                <div class="panel-body">

        
 <form method="post" action="/posts" enctype="multipart/form-data">
    
    {{ csrf_field() }}
    
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" name="title">
    <span class="help-block">
        <strong>{{ $errors->first('title') }}</strong>
    </span>
  </div>
  
  <div class="form-group">
    <label for="body">Description</label>
    <textarea id="body" name="body" class="form-control"></textarea>
    <span class="help-block">
        <strong>{{ $errors->first('body') }}</strong>
    </span>
  </div>
    
     <label for="categories">Select Ideas Category</label>
      <select name="cat_id" class="form-control">
          @foreach($categories as $category)
           <option value="{!! $category->id !!}">{!! $category->cat_title !!}</option>
          @endforeach
       </select>  
   <br />

    
  <div class="form-group">
    <label for="product_image">Upload file</label>
    <input type="file" id="file" name="file"  style="width:100%">
    <p class="help-block">Please kindly support your idea with a file if you have to.</p>
    <span class="help-block">
        <strong>{{ $errors->first('Product_image') }}</strong>
    </span>

  </div>

     

  <div>
        <button type="submit" class="btn btn-primary">Publish</button>

  </div>
</form>
            </div>
        </div>
    </div>
        
        <!-- end of form -->
        
    </div>
</div>
@endsection
