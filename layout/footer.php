</div>
  </div>
  <div class="row">
<footer style="background-color: rgb(65, 7, 109); color: white;">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright
 <br> <?php
 // create a variable to store the current file
 // $_SERVER is an array that contain information about Server and execution environment information
 // https://www.php.net/manual/en/reserved.variables.server.php
 // PHP_SELF - it gets the filename of the currently executing script
 //basename it returns the trailinig name component of a path
 // filemtime — Gets file modification time https://www.php.net/manual/en/function.filemtime
 

$fname = basename($_SERVER['PHP_SELF']);
$last_modified = filemtime($fname); 
echo "Last modified on:  " . date('l jS \o\f F Y, h:i:s A', $last_modified);
?>  

</div>
  <!-- Copyright -->
  
</footer></div>
</div>

<!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
    </html>