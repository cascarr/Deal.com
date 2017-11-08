@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 ">
            <div class="panel panel-default">
                <div class="panel-heading">
                    RECENT POSTS
<!--                    <a  style="float: right;" href="/admin/useri" class="btn btn-success">Show Ideas</a>-->
                </div>

            </div>
        </div>
        
        <!-- Posts -->
        
        <div class="col-md-12 ">
            <div class="panel panel-default">
       

      <h2>{{ $post->title }}</h2>
            <h5> Post by <span class="label label-danger"> Staff_id {{$post->admin_id}}</span>, <span class="label label-primary"> {{ $post->created_at->toFormattedDateString() }}.</span></h5>

<!--      <h5><span class="label label-success">Lorem</span></h5><br>-->
      <p> {{ $post -> body }} </p>
    

      <hr>
    
      <p><span class="badge"></span> Comments:</p><br>
        <div class="row">    
        <div class="col-sm-10">
        @foreach ($post->comments as $comment)
          <h4>{{$comment->email}} <small>{{ $comment->created_at->diffForHumans() }}: &nbsp;</small></h4>
          <p>{{ $comment->body }}</p>
          <br>
        @endforeach
        </div>
        </div>
        
        <!-- Add a comment --><hr>



<div class="card">
    
    <div class="card-block">
        
        <form method="POST" action="/posts/{{ $post->id }}/comments">
            
            {{ csrf_field() }}
            
            
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                       <div class="col-md-6">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                       </div>
           </div>

            

            
            <div class="form-group">
                
                <textarea name="body" placeholder="Your comment here." class="form-control" required></textarea>
                    <span class="help-block">
                        <strong>{{ $errors->first('body') }}</strong>
                    </span>
                
            </div>
            
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Add Comment</button>
            </div>

            
        </form>
        
        
    
        
    </div>
    
</div>

                
            </div>
        </div>


        
        </div>
</div>
@endsection
