<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- custom css -->
    <link rel="stylesheet" href="css/mycss.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <title>Welcome</title>
  </head>
  <body class="container">
    <h1 class="head">UPDATE YOUR DETAILS HERE!</h1>
    <form class="form-group" action="{{ url('update/'.$users->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
    <div class="mb-3 row">
            <label class="col-sm-2 col-form-label">Full Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="fullname" value= "{{ $users->fullname}}">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="email" value= "{{ $users->email}}">
            </div>
        </div>
        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label">New Password</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" name="password">
            </div>
        </div>
        <div>
            <img  id="output_image" class="img-fluid" style="max-width: 20%; max-height: 5%;">
        </div>
        
        <div class="mb-3 row">
            <div class="col-sm-10">
                <input type="file" onchange="preview_image(event)" accept="image/jpeg, image/png, image/jpg" class="form-control" name="profile">
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-sm-10">
                <button class="btn btn-primary">Submit</button>
            </div>
        </div>
        <a href="/" class="btn btn-link">Back</a>
    </form>
  </body>
  <script type='text/javascript'>
function preview_image(event) 
{
 var reader = new FileReader();
 reader.onload = function()
 {
  var output = document.getElementById('output_image');
  output.src = reader.result;
 }
 reader.readAsDataURL(event.target.files[0]);
}
</script>
</html>