@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        
        <div class="col-md-12 ">
            <div class="panel panel-default">
            
            <!-- page -->
                
                
                
<nav class="navbar navbar-inverse visible-xs">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Admin</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Dashboard</a></li>
        
        <li><a href="/admin/useri/create">Publish</a></li>
<!--        <li><a href="#">Closure</a></li>-->
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav hidden-xs">
      <h2>Admin</h2>
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="#section1">Dashboard</a></li>
        
        <li><a href="/admin/useri/create">Publish</a></li>
<!--        <li><a href="#section3">Closure</a></li>-->
      </ul><br>
    </div>
    <br>
    
    <div class="col-sm-9">
      <div class="well">
        <h4>Dashboard</h4>
        <p>Welcome, if you have made it up to this point, we want to believe you are the auth admin. Here are current stas</p>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="well">
            <strong>Comments</strong>
              
            <p>{{$comments}}</p> 
              
          </div>
        </div>
        <div class="col-sm-3">
          <div class="well">
            <strong>No of Ideas</strong>
            <p>{{$ideas}}</p> 
          </div>
        </div>
        <div class="col-sm-3">
          <div class="well">
              <strong>Commentless Ideas</strong>
            <p>{{$contributors}}</p> 
          </div>
        </div>
        <div class="col-sm-3">
          <div class="well">
            <strong>% Ideas</strong>
            <p>30%</p> 
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <div class="well">
            <strong>Categories</strong>
              @foreach($categories as $category)
              <ul>
                  <li>{{$category->cat_title}}</li>
              </ul>        
              @endforeach
          </div>
        </div>
        <div class="col-sm-4">
          <div class="well">
            <strong>Users</strong>
              @foreach($auths as $auth)
              <ul>
                  <li>{{$auth->name}}</li>
              </ul>        
              @endforeach
          </div>
        </div>
        <div class="col-sm-4">
          <div class="well">
            <strong>Roles</strong>
              @foreach($roles as $role)
              <ul>
                  <li>{{$role->name}}</li>
              </ul>        
              @endforeach
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-8">
          <div class="well">
            <strong>Ideas</strong>
              @foreach($posts as $post)
              <ul>
                  <li>{{$post->body}}</li>
              </ul>        
              @endforeach
          </div>
        </div>
        <div class="col-sm-4">
          <div class="well">
            <strong>Departments</strong> 
              @foreach($departments as $department)
              <ul>
                  <li>{{$department->name}}</li>
              </ul>        
              @endforeach

          </div>
        </div>
      </div>
    </div>
  </div>
</div>

            
                


            
            <!-- page end -->
            </div>    
        </div>
        
    </div>
</div>
@endsection
