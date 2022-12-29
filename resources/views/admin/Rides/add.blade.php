 @extends('admin.layouts.app')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Ride</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Ride</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/addRide" method="POST">
                 @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Enter title">
                  </div>
                    <div class="form-group">
                    <label for="exampleInputEmail1">Description</label>
                    <input type="text" name="description" class="form-control" id="exampleInputEmail1" placeholder="Enter description">
                  </div>
                    <div class="form-group">
                    <label for="exampleInputEmail1">Price</label>
                    <input type="text" name="price" class="form-control" id="exampleInputEmail1" placeholder="Enter price">
                  </div>
                    <div class="form-group">
                    <label for="exampleInputEmail1">UserId</label>
                    <input type="text" name="userIds" class="form-control" id="exampleInputEmail1" placeholder="Select user">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Origion</label>
                    <input type="text" name="origion" class="form-control" id="exampleInputEmail1" placeholder="Enter origion">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Destination</label>
                    <input type="text" name="destination" class="form-control" id="exampleInputEmail1" placeholder="Enter destination">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Time of Ride</label>
                    <input type="text" name="timeOfRide" class="form-control" id="exampleInputEmail1" placeholder="Enter time of ride">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">capacity</label>
                    <input type="text" name="totalCapacity" class="form-control" id="exampleInputEmail1" placeholder="Enter total capacity">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Available Capacity</label>
                    <input type="text" name="availableCapacity" class="form-control" id="exampleInputEmail1" placeholder="Enter available capacity">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Status</label>
                    <input type="text" name="status" class="form-control" id="exampleInputEmail1" placeholder="Enter status">
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Add</button>
                </div>
              </form>
            </div>
        </div>
        </div>
</section>
</div>
@endsection
