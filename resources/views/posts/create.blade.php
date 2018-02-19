@extends ('layout.master')

@section('content')

    <div class="container">

        <h3 id="createPost">Create Post</h3>
        <hr>

        
        <form method="POST" action="/posts">
        {{ csrf_field() }}

        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Title:">
            <small id="textHelp" class="form-text text-muted">(Optional)</small>
        </div>

        <div class="form-group">
            <label for="body">Body:</label>
            <textarea class="form-control" id="body" name="body" rows="6"placeholder="Body Text:"></textarea>
            <small id="bodyHelp" class="form-text text-muted">(Optional)</small>
        </div>
        
        {{--  <div class="form-group">
            <label for="exampleFormControlFile1">Select an Image:</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1">
            <small id="imgHelp" class="form-text text-muted">(Optional)</small>
        </div>  --}}

        <button type="submit" class="btn btn-primary">Publish</button>

        </form>

    </div>
@endsection