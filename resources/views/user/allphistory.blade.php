<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<style>
table, th, td {
  border: 1px solid black;
}
</style>
</head>
<body>

<h3 class="text-center p-4">Your All Prfessional History  </h3>

<table style="margin-left:15%;text-align:center;">
  <thead>
    <tr>
      <th style="width: 4%;">SL</th>
      <th style="width: 11%;">join Date</th>
      <th style="width: 18%;">Company Name</th>
      <th style="width: 12%;">Your degination</th>
      <th style="width: 10%;">Visiting Card</th>
      <th style="width: 10%;">Appoinment Latter</th>
      <th style="width: 10%;">Responsibility</th>
      <th style="width: 5%;">Update</th>
      <th>Delate</th>
      <th>VIEW</th>
    </tr>
  </thead>
  <tbody>
  @foreach($alldata as $alldata)
    <tr>
      <td>{{$alldata->id}}</td>
      <td>{{$alldata->j_date}}</td>
      <td>{{$alldata->C_name}}</td>
      <td>{{$alldata->y_degination}}</td>
      <td>{{$alldata->v_card}}</td>
      <td><img style="width:50px;" src="/doctorimage/appoinmentlatter/{{$alldata->image}}" alt=""></td>
      <td>{{$alldata->resp}}</td> 
      <td ><a class="btn btn-primary"href="{{url('update_p_info',$alldata->id)}}">Update</a></td>
      <td style="width: 5%;"><a class="btn btn-danger" href="{{url('delate_pro',$alldata->id)}}">Delate</a></td> 
      <td style="width: 5%;"><a class="btn btn-secondary" href="#"> View</a></td>    
    </tr>
  @endforeach
    <tr>
</table>
</body>
</html>