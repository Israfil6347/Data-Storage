
@include('user.header')
@include('user.nabver')

<h3 class="" style="text-align: center;">Enter Your Update Professional history  </h3>  
<div class="card d-flex justify-content-center" style="width: 35rem;margin-left: 30%;margin-top: 26px;margin-bottom: 20px;">
 
<div class="card-body">
        
    <form action="{{url('addpro')}}" method="POST"enctype="multipart/form-data">
      @csrf
    <div class="form-group">
        <label >Join Date:</label>
        <input type="date" class="form-control" value="" name="j_date">
      </div>
      
      <div class="form-group">
        <label >Company Name:</label>
        <input type="text" class="form-control" value="" name="C_name">
      </div>
      <div class="form-group">
        <label >Your Degination:</label>
        <input type="text" class="form-control" value="" name="y_degination" >
      </div>
      <div class="form-group">
        <label >Your Visiting Card:</label>
        <input type="file" class="form-control"  name="v_card" >
      </div>
      <div class="form-group">
        <label >Appoinment Latter</label>
        <input type="file" class="form-control" name="image" accept="image/*" onchange="loadFile(event)">
        <img id="output" src="" alt="">
      </div>
      <div class="form-group">
        <label >Responsibility</label>
        <textarea class="form-control" rows="3" value="" name="resp"></textarea>
      </div>
      <button class="btn btn-primary" style="float: right;" type="submit">submit</button>
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