
@include('user.header')
@include('user.nabver')
<div class="card d-flex justify-content-center" style="width: 25rem;margin-left: 30%;margin-top: 26px;margin-bottom: 20px;">
    <div class="card-body">
    <form action="{{url('updatedoctor',$data->id)}}" method="POST"enctype="multipart/form-data">
      @csrf
    <div class="form-group">
        <label >Visit Date:</label>
        <input type="date" class="form-control" value="{{$data->v_date}}" name="v_date">
      </div>
      <div class="form-group">
        <label >Hosipital Name:</label>
        <input type="text" class="form-control" value="{{$data->h_name}}" name="h_name">
      </div>
      <div class="form-group">
        <label >Doctor name:</label>
        <input type="text" class="form-control" value="{{$data->d_name}}" name="d_name">
      </div>
      <div class="form-group">
        <label >Doctor Degination:</label>
        <input type="text" class="form-control" value="{{$data->d_degination}}" name="d_degination" >
      </div>

      <div class="form-group">
        <label>Old Visiting Card</label>
        <img src="/doctorimage/card/{{$data->image}}" style="width: 300px;" alt="img not found">
      </div>

      <div class="form-group">
        <label >New Visiting Card:</label>
        <input type="file" class="form-control"  name="v_card" >
      </div>
      <div class="form-group">
        <label >Purpose</label >
        <input type="text" class="form-control" value="{{$data->v_purpose}}" name="v_purpose" >
      </div>
      <div class="form-group">
        <label>Old Pescription</label>
        <img src="/doctorimage/pescription/{{$data->image}}" style="width: 300px;" alt="img not found">
      </div>
      <div class="form-group">
        <label >New Pescription</label>
        <input type="file" class="form-control" name="image" accept="image/*" onchange="loadFile(event)">
        
      </div>
      <div class="form-group">
        <label >Description</label>
        <textarea class="form-control" rows="3" value="{{$data->description}}" name="description"></textarea>
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