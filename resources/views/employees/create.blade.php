<!DOCTYPE html>
<html lang="en">
<head>
  <title> Create Employees</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}">
  
</head>
<body>
  <div class="container">
    
    <h2>Employees form</h2>
  <form action="{{url('employees')}}" method="POST">
    @csrf
    
    <div class="form-group">
      <label for="name">name</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
    </div>
    <div class="form-group">
      <label for="name">title</label>
      <input type="text" class="form-control" id="title" placeholder="Enter title" name="title">
    </div>
    <div class="form-group">
      <label for="address">address</label>
      <input type="text" class="form-control" id="address" placeholder="Enter address"
      name="address">
    </div>
    <div class="form-group">
      <label for="name">Salary</label>
      <input type="text" class="form-control" id="salary" placeholder="Enter salary"
      name="salary">
    </div>
    <div class="form-group">
      <label for="phone">Salary</label>
      <input type="text" class="form-control" id="phone" placeholder="Enter phone"
      name="phone">
    </div>
    
    
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>

  </div>


<script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.js')}}"></script>


</body>

<!-- Mirrored from www.w3schools.com/bootstrap/tryit.asp?filename=trybs_table_basic&stacked=h by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Mar 2016 11:04:54 GMT -->
</html>
