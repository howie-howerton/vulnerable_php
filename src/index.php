<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">MyPage</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="#">Edit Profile</a>
        </li>
</ul>
<div class="form-inline my-2 my-lg-0">
  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
  <button class="btn btn-outline-success my-2 my-sm-0">Search</button>
</div>
</div>
</nav>
<br>
<div class="col-lg-4 text-lg-center">
    <h2>Edit Profile</h2>
</div>
<div class="container">
    <form role="form" class="form-signin" action="upload.php" method="post" enctype="multipart/form-data">
        <div class="row m-y-2">
            <!-- edit form column -->
            <div class="col-lg-8">
            </div>
            <br>
            <div class="col-lg-8 push-lg-4 personal-info">
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">First name</label>
                    <div class="col-lg-9">
                        <input class="form-control" type="text" value="John" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Last name</label>
                    <div class="col-lg-9">
                        <input class="form-control" type="text" value="Smith" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Email</label>
                    <div class="col-lg-9">
                        <input class="form-control" type="email" value="John@Smith.com" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Address</label>
                    <div class="col-lg-9">
                        <input class="form-control" type="text" value="" placeholder="Street" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label"></label>
                    <div class="col-lg-6">
                        <input class="form-control" type="text" value="" placeholder="City" />
                    </div>
                    <div class="col-lg-3">
                        <input class="form-control" type="text" value="" placeholder="State" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label"></label>
                    <div class="col-lg-9">
                        <input type="reset" class="btn btn-secondary" value="Cancel" />
                        <button type="submit" class="btn btn-primary" name="submit">Save Changes</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 pull-lg-8 text-xs-center">
                <img src="nophoto.jpg" class="m-x-auto img-fluid img-circle" alt="avatar" />
                <h6 class="m-t-2">Upload a different photo</h6>
                <label class="custom-file">
                  <input type="file" name="fileToUpload" id="fileToUpload">
              </label>
            </div>
        </div>
    </form>
</div>
    <!-- <div class="container">
        <form class="form-signin" action="upload.php" method="post" enctype="multipart/form-data">
            <input type="file" class="form-control" name="fileToUpload" id="fileToUpload">
        <button type="submit" class="btn btn-lg btn-primary btn-block" value="Upload Image" name="submit">
            Submit
        </button>
    </div> -->
</form>
</body>
</html>