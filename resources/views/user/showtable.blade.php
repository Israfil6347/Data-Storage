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

<h3 class="text-center p-4">All Doctor Visited information  </h3>

<table style="margin-left:15%;text-align:center;">
  <thead>
    <tr>
      <th style="width: 4%;">SL</th>
      <th style="width: 11%;">Visit Date</th>
      <th style="width: 18%;">Hosipital Name</th>
      <th style="width: 12%;">Doctor name</th>
      <th style="width: 10%;">Purpose</th>
      <th style="width: 5%;">Update</th>
      <th>Delate</th>
      <th>VIEW</th>
    </tr>
  </thead>
  <tbody>
  @foreach($alldata as $alldata)
    <tr>
      <td>{{$alldata->id}}</td>
      <td>{{$alldata->v_date}}</td>
      <td>{{$alldata->h_name}}</td>
      <td>{{$alldata->d_name}}</td>
      <td>{{$alldata->v_purpose}}</td> 
      <td ><a class="btn btn-primary"href="{{url('update_visit',$alldata->id)}}">Update</a></td>
      <td style="width: 5%;"><a class="btn btn-danger" href="{{url('delate',$alldata->id)}}">Delate</a></td> 
      <td style="width: 5%;"><a class="btn btn-secondary" href="#"> View</a></td>    
    </tr>
  @endforeach
    <tr>
</table>
</body>
</html>