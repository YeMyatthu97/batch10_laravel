 @extends('template')
 @section('contact')
 <div class="container" style="margin-top: 100px">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <h2>Category Create Form</h2>
        

        <form method="post" action="{{route('category.store')}}" enctype="multipart/form-data">
           @csrf
          <div class="form-group">
            <label>Category:</label>
            <input type="text" name="cname" class="form-control" >
          </div>
          
         

          <div class="form-group">
             <input type="submit" name="btnsubmit" value="Save" class="btn btn-success">
          </div>
          
        </form>
       
       
      </div>
    </div>
  </div>
  @endsection