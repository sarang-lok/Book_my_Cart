<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title>All Book Is Here</title>
</head>
<body>
    
<section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto"> 
    <div class="flex flex-wrap -m-4">
    <?php 
		$host="localhost";
        $user="root";
        $password="";
        $dbname="bookcart";
        
        $connect=mysqli_connect($host,$user,$password,$dbname);
        
		$sql="Select * from books";
		$results=$connect->query($sql);
		while ($final=$results->fetch_assoc()) { 
    ?>  
      <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
        <a class="block relative h-48 rounded overflow-hidden" href="bookdetails.php?details_id=<?php echo $final['id']?>">
            
          <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="<?php echo $final['picture'] ?>" >
        </a>
        <div class="mt-4">
          <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">Book</h3>
          <h2 class="text-gray-900 title-font text-lg font-medium"><?php echo $final['name'] ?></h2>
          <p class="mt-1">Rs<?php echo $final['price'] ?>/-</p>
        </div>
      </div>
      <?php } ?>
      </div> 
    </div>
  </div>
  
</section>
</body>
</html>