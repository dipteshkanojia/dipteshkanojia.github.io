<!DOCTYPE HTML>
<html>
	<head>
    	
    	<meta name="author" content="Prashanth"/>
        
        <!-- Title of Page -->
        <title>
       		Homepage || Photo Album
        </title>
        
        <!-- Bootstrap -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">        
		<script src="../bootstrap/js/bootstrap.min.js"></script>
		
		<script>
			<!-- Javascript goes here -->
		</script>
		        
    </head>
    
    <body>
    
    	<!-- Page Container -->
        <div class="container">
        	
            <div class="row">
            	<div class="col-xs-12 jumbotron well well-lg">
                	<strong> MySQL select query Demo </strong> <br/>
                </div>
            </div>
        
        	<div class="row" style="min-height:500px;">
            	<div class="col-xs-12">
                    Result of query executed on mysql server, <br><br>    	
            		<?php
            		    $servername = "1.db.cse.iitb.ac.in";
                        $username = "cs699user";
                        $password = "cs699user@123";
                        $dbname = "cs699db";

                        // Create connection
                        $conn = new mysqli($servername, $username, $password, $dbname);
                        // Check connection
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }

                        $sql = "SELECT * FROM student";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                                echo "id: " . $row["roll_no"]. " - Name: " . $row["name"]. " " . $row["marks"]. "<br>";
                            }
                        } else {
                            echo "0 results";
                        }
                        $conn->close();
            		?>
            		
               	</div> 
         	</div>
         	
         	<div class="row">
         		<div class="col-xs-12" style="text-align:center; background-color:black; color:white; padding:10px">
                    
                    <p>
                        <span class="glyphicon glyphicon-copyright-mark"></span> Prashanth, 2016 <br>
                        All Rights Reserved.
                    </p>
                </div>
            </div>
                        
       	</div>
        <!-- End of page container -->
                            
        
    </body>
</html>
