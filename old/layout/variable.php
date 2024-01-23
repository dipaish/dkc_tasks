<?php include "header.php" ?>

<h3> Exercise 3. In-class Task Variable & Operators (variable.php)</h3>

<h2>
1. Create a simple html form to get Firstname and Lastname from the user and use echo 
echo statement to print using  tag: Hello …., You are welcome to my site.   
</h2>

<form action="action.php" method="post">
<div class="row">
    <div class="col">
    <input type="text" name="fname" required  placeholder="First Name" class="form-control">  
    </div>
    <div class="col">
    <input type="text"   name="lname" required placeholder="Last Name" class="form-control"> </div>
</div>

<div class="row">
<div class="col">
<br>Date of Birth : <input type="date" name="bdate" placeholder="Birth Date" class="form-control"> </div>
<div class="col">
<br>Select fav Color:  <input type="color" name="color" class="form-control"> <br> </div>

</div>
<button type="submit" class="btn btn-primary" name="submit">Submit</button>

</form>


<?php include "footer.php" ?>