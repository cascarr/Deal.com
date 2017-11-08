@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 ">
            <div class="panel panel-default">
                <div class="panel-heading">
<!--                    <a  style="float: right;" href="/admin/useri/create" class="btn btn-success">Publish</a>-->
                    RECENT POSTS
                    {{ $posts->links() }}
                </div>

            </div>
        </div>
        
        <!-- Posts -->
        
    <div class="col-md-12 ">
        <div class="panel panel-default">

        

    <div class="col-md-12 ">
      <hr>
        
        
       @foreach($posts as $post) 
      <h2>
          <a href="/posts/{{ $post->id }}">
          {{$post->title}}
          </a>
      </h2>
        
      <h5> Post by <span class="label label-danger"> Staff_id {{$post->admin_id}}</span>, <span class="label label-primary"> {{ $post->created_at->toFormattedDateString() }}.</span></h5>
      <br>
      <p>{{$post->body}}</p>
      <br><br>       
        @endforeach
    </div>

     </div>
  </div>
        
        
       

        
    </div>
</div>
@endsection
                
                