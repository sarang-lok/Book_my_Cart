<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book's Cart</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
   <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
      <h3 class="text-center">Enrty Book</h3><br>
      <form action="bookhandler.php" method="post" enctype="multipart/form-data">
           <div class="form-group">
             <label for="name">Name</label>
             <input type="text" class="form-control" id="name" name="name" placeholder="Enter book name">
           </div>
           <div class="form-group">
             <label for="Details">Details</label>
             <input type="text" class="form-control" id="details" name="details" placeholder="Enter Description">
           </div>
           <div class="form-group">
                  <label for="price">Price</label>
                  <input type="text" class="form-control" id="price" placeholder="Price" name="price">
           <div class="form-group">
             <label for="salary">Stock</label>
             <input type="text" class="form-control" id="stock" name="stock" placeholder="Enter stock">
           </div>
           <div class="form-group">
                  <label for="picture">Book Cover</label>
                  <input type="file" class="form-control" id="picture" name="file" >
            </div>

           <button type="submit" class="btn btn-primary">submit</button>
           <a href="booksshow.php" class="link-primary">view</a>
      </form> 
   </div>
</body>
</html>