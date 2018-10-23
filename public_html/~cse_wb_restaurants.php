<!DOCTYPE html>

<html lang="en">

<head>
<meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="sunny_projects_stylesheet.css">
  <title> Restaurants</title> 
  
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.1.3/flatly/bootstrap.min.css">


  <style>
      .mycolor {
        background-color: #EEEEEE;
        border-style: solid;
        border-width: 1px;
      }
      .container {
        background-color: #FFFFEE;
        border-style: solid;
        border-width: 1px;
      }
    </style>
</head>

<body>
<div class = "container">
     <header>
        <h1 style = "color: #133046"> Sunny Island </h1>
        <img class = "move_image" alt='Sunny Island logo' src='images/sun.png' width ="100" height = '100'></header>
        
      <?php include 'navigation.php'; ?>

    
    <br>
        <h2 style = "text-align: center"> Sunny Island's Restaurants</h2>
<img class = "center" src="images/beach.png" alt="Sunny Island Beach View" /><p><em>Above is a picture of the beach side with a great view of some of our most famous restaurants</em></p>
<br>
<div class="alert alert-info" role="alert">
  New Restaurant Opening Today!
</div>
<br>
        <p> Here at Sunny island we have plenty of amazing restaurants that anyone can enjoy or love. We have a wide variety of types of restaurants, like our famous Italian restaurant
 Linguini's or our exquisite five star rating sushi restaurant The Red Panda. </p>
        <p>Most of our restaurants have been give five star ratings by world famous chef like Paul Paulson and Jerry Geraldson.</p>
        <p>Below we have a table of our restaurants which are sorted by price and rating by world famous critiques.</p>
        
        <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Restaurant</th>
      <th scope="col">Price</th>
      <th scope="col">Rating</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Linguini's</td>
      <td>Expensive</td>
      <td>4.9 out of 5</td>
    </tr>
    <tr>
      <td>The Red Panda</td>
      <td>Average</td>
      <td>4.0 out of 5</td>
    </tr>
    <tr>
      <td>Rachel's</td>
      <td>Cheap(Buffet)</td>
      <td>3.8 out of 5</td>
    </tr>
    <tr>
      <td>Pete's Italian Deli</td>
      <td>Average</td>
      <td>3.7 out of 5</td>
    </tr>
  </tbody>
</table>



<br>

<img class= "center" src="images/food.png" alt="Meatball Madness" />
 
 <br>
 
     <?php include 'footer.php'; ?>

  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  </body>
</html>



