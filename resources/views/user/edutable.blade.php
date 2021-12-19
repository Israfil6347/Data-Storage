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

<h3 class="text-center p-4">All Education information  </h3>

<table style="margin-left:15%;text-align:center;">
  <thead>
    <tr>
      <th style="width: 4%;">SL</th>
      <th style="width: 11%;">Education Title</th>
      <th style="width: 18%;">Instute name:</th>
      <th style="width: 12%;">Pass Year</th>
      <th style="width: 10%;">Role Number</th>
      <th style="width: 10%;">Register Number</th>
      <th style="width: 5%;">Update</th>
      <th>Delate</th>
      <th>VIEW</th>
    </tr>
  </thead>
  <tbody>
  @foreach($alldata as $alldata)
    <tr>
      <td>{{$alldata->id}}</td>
      <td>{{$alldata->title}}</td>
      <td>{{$alldata->i_name}}</td>
      <td>{{$alldata->pass_year}}</td>
      <td>{{$alldata->role}}</td> 
      <td>{{$alldata->register}}</td> 
      <td ><a class="btn btn-primary"href="{{url('eduupdata',$alldata->id)}}">Update</a></td>
      <td style="width: 5%;"><a class="btn btn-danger" href="{{url('delate_edu',$alldata->id)}}">Delate</a></td> 
      <td style="width: 5%;"><a class="btn btn-secondary" href="#"> View</a></td>    
    </tr>
  @endforeach
    <tr>
</table>
</body>
</html>