@extends('layouts.default')

@section('title','Homepage')

@section('content')
<!--content Header-->
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Information Form</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Information Form</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
</section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md">
             <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title">Personal Information</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form class="form-personal">
                  <div class="card-body">
                    <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputName" placeholder="Name">
                    </div>

                    <label for="inputSurname" class="col-sm-2 col-form-label">Surname</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputSurname" placeholder="Surname">
                    </div>
                    <label for="inputBirthday" class="col-sm-2 col-form-label">Birthday</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" id="inputBirthday" placeholder="Birthday">
                    </div>
                    <label for="inputAge" class="col-sm-2 col-form-label">Age</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="inputAge" placeholder="Age">
                        </div>
                    <label class="col-sm-2 col-form-label">Gender</label>
                        <div class="form-group">
                            <div class="form-check">
                                &emsp;
                              <input class="form-check-input" type="radio" name="gender" id="male">
                              <label class="form-check-label" for="male">Male&ensp;<i class="fas fa-mars"></i></label>
                              &emsp;&emsp;&emsp;
                              <input class="form-check-input" type="radio" name="gender" id="female">
                              <label class="form-check-label" for="female">Female&ensp;<i class="fas fa-venus"></i></label>
                              &emsp;&emsp;&emsp;
                              <input class="form-check-input" type="radio" name="gender" id="genderless">
                              <label class="form-check-label" for="genderless">Genderless&ensp;<i class="fas fa-genderless"></i></label>
                            </div>
                        </div>
                    <i class="far fa-image"></i>
                    <label for="inputPhoto" class="col-sm-2 col-form-label">Photo</label>
                        <div class="col-sm-10">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile">
                                <label class="custom-file-label" for="customFile">Choose file&nbsp;<i class="fas fa-file-image"></i></i></label>
                            </div>
                        </div>
                    <i class="fas fa-location-arrow"></i>
                    <label for="inputAddress" class="col-sm-2 col-form-label">Address</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" rows="3" placeholder="Address ..."></textarea>
                        </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                        <i class="fas fa-palette"></i>
                          <label>Favorite color</label>
                          <select class="form-control">
                            <option>Red</option>
                            <option>Green</option>
                            <option>Blue</option>
                            <option>Yellow</option>
                            <option>Black</option>
                            <option>White</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                        <i class="fab fa-itunes-note"></i>
                        <label>Music style</label>
                          <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="Pop" value="Pop">
                            <label for="Pop" class="custom-control-label">Pop</label>
                          </div>
                          <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="Rock" value="Rock">
                            <label for="Rock" class="custom-control-label">Rock</label>
                          </div>
                          <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="Hip-Hop" value="Hip-Hop">
                            <label for="Hip-Hop" class="custom-control-label">Hip-Hop</label>
                          </div>
                          <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="Classical" value="Classical">
                            <label for="Classical" class="custom-control-label">Classical</label>
                          </div>
                          <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="Punk" value="Punk">
                            <label for="Punk" class="custom-control-label">Punk</label>
                          </div>
                        </div>
                      </div>
                    <div class="col-sm">
                      <div class="form-check">
                          <input type="checkbox" class="form-check-input" id="exampleCheck2">
                          <label class="form-check-label" for="exampleCheck2">I agree to allow the collection of my information.</label>
                        </div>
                      </div>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <button type="submit" class="btn btn-info"><i class="fas fa-check"></i>&nbsp;Submit</button>
                    <button type="submit" class="btn btn-default float-right"><i class="fas fa-redo"></i>&nbsp;Reset</button>
                  </div>
                  <!-- /.card-footer -->
                </form>
              </div>
              <!-- /.card -->
        </div>
        <!--/.col (left) -->

      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
@endsection