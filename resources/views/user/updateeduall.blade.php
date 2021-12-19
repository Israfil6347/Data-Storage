@include('user.header')
@include('user.nabver')
<h3 class="text-center">Education Update </h3>
<div class="card d-flex justify-content-center" style="width: 25rem;margin-left: 30%;margin-top: 26px;margin-bottom: 20px;">
    <div class="card-body">
    <form action="{{url('update_select_edu',)}}" method="POST"enctype="multipart/form-data">
      @csrf
    <div class="form-group">
        <label >Education Titale</label>
        <input type="text" class="form-control" value="{{$alldata->title}}" name="title">
      </div>
      <div class="form-group">
        <label >Instut Name:</label>
        <input type="text" class="form-control" value="{{$alldata->i_name}}" name="i_name">
      </div>
      <div class="form-group">
        <label >Department:</label>
        <input type="text" class="form-control" value="{{$alldata->department}}" name="pass_year">
      </div>
      <div class="form-group">
        <label >Pass Year:</label>
        <input type="text" class="form-control" value="{{$alldata->pass_year}}" name="pass_year">
      </div>
      <div class="form-group">
        <label >Your Roll Number:</label>
        <input type="text" class="form-control" value="{{$alldata->role}}" name="role" >
      </div>
      <div class="form-group">
        <label >Your Register Number:</label>
        <input type="text" class="form-control" value="{{$alldata->register}}" name="register" >
      </div>

      <div class="form-group">
        <label>Old Registation Card</label>
        <img src="/doctorimage/r_card/{{$alldata->r_card}}" style="width: 300px;" alt="img not found">
      </div>
      <div class="form-group">
        <label >New Registation Card:</label>
        <input type="file" class="form-control"  name="r_card" >
      </div>
      <div class="form-group">
        <label>Old Marksit</label>
        <img src="/doctorimage/markset/{{$alldata->markset}}" style="width: 300px;" alt="img not found">
      </div>
      <div class="form-group">
        <label >New Marksit Card:</label>
        <input type="file" class="form-control"  name="markset" >
      </div>
      <div class="form-group">
        <label>Old certificat Card</label>
        <img src="/doctorimage/certificate/{{$alldata->certificate}}" style="width: 300px;" alt="img not found">
      </div>
      <div class="form-group">
        <label >New certificat Card:</label>
        <input type="file" class="form-control"  name="certificate" >
      </div>
      
      <button class="btn btn-danger" style="float: right;" type="submit">submit</button>
  </form>
      
    </div>
</div>
<script>
  var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src) // free memory
    }
  };
</script>
@include('user.footer')