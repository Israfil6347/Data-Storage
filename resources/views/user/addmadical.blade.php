
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style.css">

</head>
<body>
@include('user.header')
@include('user.nabver')

<div class="main">
  <div class="row">
      <div class="col-md-12">
      <h2 class="p-3"  style="text-align: center; ">Enter Your update doctor visite information  </h2>


<div class="card d-flex justify-content-center" style="width: 25rem;margin-left: 30%;margin-top: 26px;margin-bottom: 20px;">
    <div class="card-body">
    <form action="{{url('add_docapp')}}" method="POST"enctype="multipart/form-data">
      @csrf
    <div class="form-group">
        <label >Visit Date:</label>
        <input type="date" class="form-control" name="v_date" required>
      </div>
      <div class="form-group">
        <label >Hosipital Name:</label>
        <input type="text" class="form-control" name="h_name" required>
      </div>
      <div class="form-group">
        <label >Doctor name:</label>
        <input type="text" class="form-control"name="d_name" required>
      </div>
      <div class="form-group">
        <label >Doctor Degination:</label>
        <input type="text" class="form-control" name="d_degination" required>
      </div>
      <div class="form-group">
        <label >Doctor Visiting Card:</label>
        <input type="file" class="form-control" name="v_card" >
      </div>
      <div class="form-group">
        <label >Purpose</label >
        <input type="text" class="form-control" name="v_purpose" required>
      </div>
      <div class="form-group">
        <label >Pescription</label>
        <input type="file" class="form-control" name="image" accept="image/*" onchange="loadFile(event)" required>
        <img id="output" src="" alt="">
      </div>
      <div class="form-group">
        <label >Description</label>
        <textarea class="form-control" rows="3" name="description"></textarea>
      </div>
      <button class="btn btn-danger" style="float: right;" type="submit">submit</button>
  </form>
      
    </div>
</div>
      </div>
  </div>
</div>
@include('user.footer')
<script>
  var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src) // free memory
    }
  };
</script>


</body>
</html> 
