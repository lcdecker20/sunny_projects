<!DOCTYPE html>

<html lang="en">

<head>
<meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="sunny_projects_stylesheet.css">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.1.3/flatly/bootstrap.min.css">

<h2>Reservations</h2>

<form>
<div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputName">Name</label>
    <input class="form-control" id="exampleInputName" aria-describedby="emailHelp" placeholder="Enter Full Name">
  </div>
  <div class="form-group">
    <label for="exampleCheckInDate">Check In Date</label>
    <input type="date" class="form-control" id="exampleCheckInDate">
  </div>
  <div class="form-group">
    <label for="exampleCheckOutDate">Check Out Date</label>
    <input type="date" class="form-control" id="exampleCheckOutDate">
  </div>
  <div class="form-group">
    <label for="exampleRooms">Number of Rooms</label>
    <select class ="form-control" id="exampleRooms" >
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleAdults">Number of Adults</label>
    <select class ="form-control" id="exampleAdults" >
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        <option>6+</option>
    </select>
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Email Notification Alerts</label>
  </div>
  <button type="submit" class="btn btn-primary">Reserve Room</button>
  <button type="button" class="btn btn-light" value ="Input Button" onclick = "location.href = 'attractions_sunny.html';">Go Back</button>
</form>

 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script></body></html>