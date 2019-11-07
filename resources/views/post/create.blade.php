 @extends('template')
 @section('contact')
 <div class="container" style="margin-top: 100px">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <h2>Post Create Form</h2>
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

        <form method="post" action="{{route('post.store')}}" enctype="multipart/form-data">
           @csrf
          <div class="form-group">
            <label>Title:</label>
            <input type="text" name="title" class="form-control">
          </div>
          <div class="form-group">
            <label>Content:</label>
            <textarea type="text" name="content" class="form-control "placeholder="Content"></textarea>
          </div>

          <div class="form-group">
            <label>Photo:</label><span class="text-danger">[ supported file types:jpeg,png]</span>
            <input type="file" name="photo" class="form-control">
          </div>

          <div class="form-group">
            <label>Categories</label>
            <select class="form-control" name="category">
              <option value="">Choose Category</option>
              {-- accept data and loop --}
              @foreach($categories as $row)
              <option value="{{$row->id}}">{{$row->name}}</option>
              @endforeach
            </select>
          </div>

          <div class="form-group">
             <input type="submit" name="btnsubmit" value="Save" class="btn btn-success">
          </div>
          
        </form>
       
       
      </div>
    </div>
  </div>
  @endsection