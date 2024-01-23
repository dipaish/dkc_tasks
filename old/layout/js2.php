<?php
$title = "Basics of JavaScripts";
include "header.php" ?>
<h2>Methods</h2>
<p>In the example below: document is the object, write is the method</p>
   <script>
    document.write("JS here ");
        </script>
<h2>Windows.alert</h2>
<script >
    // window.alert("this will write into an alert box")
    // window.alert(5+10)
</script>	
 <h2>Document.write : Use only for testing</h2>
   <script>
    document.write ("this will write into the html output")
        </script>
 <h2>innerHTML - getElementById </h2>
<p id="demo"> </p>
<p id="demo1"> </p>
<script type="text/javascript">
    document.getElementById("demo").innerHTML = "this will be typed";
    document.getElementById("demo1").innerHTML = 10+15;
    </script>
<h2>Console.log()</h2>

<script> 
console.log("Hello World");
</script>
<h2>JavaScript Variable</h2>

<script>
let var1 = 'John';
let var2;
var2='Pekka';
let var3 = 25;
let name = "Deepak" + " " + "KC";
document.write(var1,"<br>", var2 ,"<br>", var3, "<br>",name, "<br>");
document.write("The type of var3 is ", typeof var3, ".<br>");
document.write("The type of var2 is ",typeof var2, ".<br>");
</script>
<hr><h2> Conditional Statements</h2>
<script>
let age = 15;
    if(age >= 22) {
      document.write('You are elligible for voting');    
    } else {
        document.write('Not elligible for voting');    
    }
</script>
<hr>
<h2>Functions</h2>
<script>
    function add(num1,num2) {
        let result = num1 + num2;
        return result;
      }
      document.write(add (5, 7));
      document.write('<br>' + add (5, 5));
    </script>
    <hr>
<h2>JavaScript Events</h2>
<h3>On clicking the button the date method displays date</h3>
<!-- // JavaScript Standard built in Objects : https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects -->
<!-- A simple button that displays date and time -->
<button onclick='getElementById("time").innerHTML=Date()'> Date & Time </button>
<p id="time"></p>
<!-- A simple button that displays date and time but this replaces the original content that is button in this case-->
<button onclick="this.innerHTML = Date()">Date and Time - changes the original content </button>

<h2>Change the background-color </h2>
<form>
<input type="color" id = "background" onchange="changeColor()">
</form>
<h2>Change the font color </h2>
<form>
<input type="color" id = "fcolor" onchange="changeFcolor()">
</form>
<h2>Onmouseover and onmouseout</h2>

  <span
         onmouseover = "this.style.color = 'blue'; 
                        this.style.fontStyle = 'italic';
                        this.style.backgroundColor  = 'yellow';
                        this.style.fontSize = '2em';";
         onmouseout = "this.style.color = 'red';
                       this.style.fontStyle = 'normal';
                       this.style.fontSize = '1.1em';";>
         Hello World
      </span>

   <h2> Lets do the Onmouseover & onmouseout with functions </h2>

<span id="mo" onmouseover="onm()"  onmouseout="ono()"> Hello World </span>


<h2> JavaScript Form Validation </h2>


<form name="myform" onsubmit="return validateform()" method="post" action="abc.php">
<div class="row">
  <div class="col">
  <input type="text" id="name" name="name" placeholder="Name" class="form-control" onblur="cname()">
    </div>
    <div class="col">
  <input type="email" id="email" name="email" placeholder="Email" class="form-control">
  </div>
    </div>

  <div class="row">
  <div class="col">
  <input type="password" id="password" name="password" placeholder="Password" class="form-control"></div>
 
  <div class="col">
  <input type="password" id="password1" name="password1" placeholder="Confirm Password" class="form-control"></div>
  </div>
  
  <input type="submit" value="Submit" class="form-control">
</form>

<h2> Form Validations with HTML5 </h2>
<form>
      <label >Your Full Name</label>
      <input  name="fname" required> <br><br>
      <label>Your Email ID</label>
      <input type="email"  name="email"> <br><br>

        <label >Your Group ID</label>
        <input type="text" name="gid" required minlength="7" maxlength="7"><br><br>
        <label >When did you start your studies ?</label>
        <input type="number"  name="year" value="2019" min="2019" max="2022"><br><br>
        <label >Your Mobile Number </label><input type="tel"  name="tel"><br><br>
        <label >Date & Time </label><input type="datetime-local" name="datetime"><br><br>
        <label >Month & Year </label><input type="month" name="month" ><br><br>
        <label > Time </label> <input type="time" name="time" ><br><br>
        <label >Week Number </label><input type="week" name="week" ><br><br>
        <label >Color Picker </label><input type="color" name="color" ><br><br>
      <button>Submit</button>
    </form>

<?php include "footer.php" ?>