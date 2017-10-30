@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">QAM Dashboard</div>

                
            </div>
        </div><br /><br />                
                        <!-- show admin products -->
        
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading" style="padding-bottom: 20px;">
                Show Categories
                <a  style="float: right;" href="/admin/qam/add" class="btn btn-success">Add Category</a>

            </div>

                <div class="panel-body">

        
                <div class="table-responsive"> 

  <table class="table">
      {{ $categories->links() }}
    <thead>
      <tr>
        <th>ID</th>
        <th>Category Title</th>
        <th>Created Date</th>
        <th>Updated Date</th>
      </tr><br/>
    </thead>
    <tbody>
        
      <tr class="success">
          
          @foreach($categories as $category)
<!--        <td>{{ $loop -> index+1 }}</td>  -->
        <td>{{ $category->id }}</td>
        <td>{{ $category->cat_title }}</td>
        <td>{{ Carbon\Carbon::parse($category->created_at)->format('d/m/Y') }}</td>
        <td>{{ Carbon\Carbon::parse($category->updated_at)->format('d/m/Y') }}</td>
         
        <td><a href="/admin/qam/edit/{{ $category->id }}" class="btn btn-success">Edit</a></td>  
        <td><a href="/admin/qam/{{ $category->id }}" class="btn btn-danger">Delete</a></td>

          
      </tr>  <br/>    
        @endforeach
        
    </tbody>
      
  </table>
                    </div>
            </div>
        </div>
    </div>
        

        
        <!-- @endshow admin products -->

                
                
            </div>
        </div>

@endsection
