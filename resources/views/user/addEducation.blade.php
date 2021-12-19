
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
      <h2 class="p-3"  style="text-align: center; ">Add recent your education</h2>


<div class="card d-flex justify-content-center" style="width: 25rem;margin-left: 30%;margin-top: 26px;margin-bottom: 20px;">
    <div class="card-body">
    <form action="{{url('add_edu')}}" method="POST"enctype="multipart/form-data">
      @csrf
    <div class="form-group">
      <label for="title">Add Education Title:</label><br>
      <select name="title" id="cars"class="form-select" aria-label="Default select example" style="width: 100%;">
        <option >---Select Option---</option> 
        <option value="Junior School Certificate">Junior School Certificate</option>  
        <option value="Secondary School Certificate">Secondary School Certificate</option>
        <option value="Higher Secondary Certificate">Higher Secondary Certificate</option>
        <option value="Diploma in CSE">Diploma in CSE</option>
        <option value="Bachelor of Science in Computer Science">Bachelor of Science in Computer Science</option>
        <option value="Higher Secondary Certificate">Higher Secondary Certificate</option>
        <option value="Diploma in CSE">Diploma in CSE</option>
        <option value="Bachelor of Science in Computer Science">Bachelor of Science in Computer Science</option>
      </select>
      </div>
      <div class="form-group">
      <label for="title">Instute name:</label><br>
      <select name="i_name" id="cars"class="form-select" aria-label="Default select example" style="width: 100%;">
        <option >---Select Option---</option> 
        <option value="Daffodil International University">Daffodil International University</option>  
        <option value="University of Dhaka">University of Dhaka</option>
        <option value="University of Rajshahi">University of Rajshahi</option>
        <option value="Bangladesh Agricultural University">Bangladesh Agricultural University</option>
        <option value="University of Chittagong">University of Chittagong</option>
        <option value="Jahangirnagar University">Jahangirnagar University</option>
        <option value="Islamic University, Bangladesh">Islamic University, Bangladesh</option>
        <option value="Shahjalal University of Science & Technology">Shahjalal University of Science & Technology</option>
      </select>
      </div>
      <div class="form-group">
        <label >Department :</label>
        <input type="text" class="form-control"name="department">
      </div>
      <div class="form-group">
        <label >Pass Year :</label>
        <input type="date" class="form-control"name="pass_year">
      </div>
      <div class="form-group">
        <label >Enter your Role Number</label>
        <input type="text" class="form-control" name="role">
      </div>
      <div class="form-group">
        <label >Enter Your Register Number :</label>
        <input type="nunber" class="form-control" name="register" >
      </div>
      <div class="form-group">
        <label >registeation Card</label>
        <input type="file" class="form-control" name="r_card" accept="image/*" onchange="loadFile(event)" required>
        <img id="output" src="" alt="">
      </div>
      <div class="form-group">
        <label >markset</label>
        <input type="file" class="form-control" name="markset" accept="image/*" onchange="loadFile(event)" required>
        <img id="output" src="" alt="">
      </div>
      <div class="form-group">
        <label >certificate</label>
        <input type="file" class="form-control" name="certificate" accept="image/*" onchange="loadFile(event)" required>
        <img id="output" src="" alt="">
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
