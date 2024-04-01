<?php
include('mysqli_connect.php');#Connect to database
session_start();
$zip = $_COOKIE["zipcookie"]; #zipcode cookie

    
if(isset($_POST['generalSearch'])){ 
    $keyword = mysqli_real_escape_string($dbc, trim($_POST['keyword']));
    if(empty($keyword)){
        header("Location: homepage.php");
    }else{
        $query = "SELECT * FROM event WHERE(
    					name LIKE '%$keyword%' OR
                        organization LIKE '%$keyword%' OR
                        event_type LIKE '%$keyword%' OR
                        description LIKE '%$keyword%' OR
                        location LIKE '%$keyword%'
                    	)
                   ;"; #For if only date start was filled in
        $result = mysqli_query($dbc, $query);
        if ($result) {  #Checking for error
            $row_count = mysqli_num_rows($result);
        } else {
            echo mysqli_error($dbc);
        }
        if($row_count<1){
           $message =  "<div id=\"results\">
                    
                        <p>No events matching the search were found. Please try again with another filter.</p>
                        <button onclick=\"location.href='https://infost490s2404.soisweb.uwm.edu/senior_capstone/homepage.php'\">Back to Homepage</button>
                        </div>
                        "; 
        }else{
            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {  #Displaying results
                $type = $row['event_type'];
                if($type=='v'){
            	    $type = "Volunteer";
            	}elseif($type =='e'){
            	    $type = "Educational"; 
            	}else{
            	    $type = "Recreational";
            	}
            	$price = $row['price'];
                if($price=='free'){
            	    $price = "Free";
            	}else{
            	    $price = '$'. $row['price'];
            	}
            	if($row['date_start'] == '1000-10-10'){
            	  $date_start = $row['date_start'];
            	}
            	if($row['date_end'] == '1000-10-10'){
            	  $date_end = 'Ongoing';  
            	}else{
            	    $date_end = $row['date_end'];
            	    $date_start = $row['date_start'];
            	}
            	$image = "images/" . $row['picture_name'] . ".jpg";
            	$message ="
                        <div id='img'>
                            <img style = \" width:20%;\"src='{$image}'
                        </div>
                        <p>{$row['name']}</p>
                        <p>{$type}</p>
                        <p>{$price}</p>
                        <p>{$date_start} - {$date_end}</p>
                        <p>{$row['description']}</p>
                        <p>{$row['location']}</p>
                        ";
            }
        } 
        
    }
    
}

if(isset($_POST['buttonDate'])){  #Checks if date filter button was pressed
    $date_end = mysqli_real_escape_string($dbc, trim($_POST['date_end']));
    $date_start = mysqli_real_escape_string($dbc, trim($_POST['date_start']));
    if(empty($date_end) && empty($date_start)){
        header("Location: events.php");
    }elseif(empty($date_end)){
        $query = "SELECT * FROM event WHERE(event_type != 'v' AND '$date_start' >= date_start) OR(event_type != 'v' AND date_start = 1000-10-10);"; #For if only date start was filled in
        $result = mysqli_query($dbc, $query);
    }elseif(empty($date_start)){
        $query = "SELECT * FROM event WHERE(event_type != 'v' AND '$date_end' >= date_end ) OR(event_type != 'v' AND date_start = 1000-10-10);"; #For if only date end was filled in
        $result = mysqli_query($dbc, $query);
    }else{
        $query = "SELECT * FROM event WHERE(event_type != 'v' AND '$date_start' <= date_start AND date_end <= '$date_end')OR(event_type != 'v' AND date_start = 1000-10-10);"; #For if both were filled in
        $result = mysqli_query($dbc, $query);#Query grabing between the price inputs
    }
    if ($result) {  #Checking for error
        $row_count = mysqli_num_rows($result);
    } else {
        echo mysqli_error($dbc);
    }
    if($row_count<1){
       $message =  "<div id=\"results\">
                
                <p>No events matching the filter were found. Please try again with another filter.</p>
                <button onclick=\"location.href='https://infost490s2404.soisweb.uwm.edu/senior_capstone/events.php'\">Back to Events</button>
            </div>
            
            
        "; 
    }else{
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {  #Displaying results
            $type = $row['event_type'];
            if($type=='v'){
        	    $type = "Volunteer";
        	}elseif($type =='e'){
        	    $type = "Educational"; 
        	}else{
        	    $type = "Recreational";
        	}
        	$price = $row['price'];
            if($price=='free'){
        	    $price = "Free";
        	}else{
        	    $price = '$'. $row['price'];
        	}
        	if($row['date_start'] == '1000-10-10'){
        	  $date_start = $row['date_start'];
        	}
        	if($row['date_end'] == '1000-10-10'){
        	  $date_end = 'Ongoing';  
        	}else{
        	    $date_end = $row['date_end'];
        	    $date_start = $row['date_start'];
        	}
        	$image = "images/" . $row['picture_name'] . ".jpg";
        	$message ="
                <div id='img'>
                    <img style = \"height:10%; width:20%;\"src='{$image}'
                </div>
                <p>{$row['name']}</p>
                <p>{$type}</p>
                <p>{$price}</p>
                <p>{$date_start} - {$date_end}</p>
                <p>{$row['description']}</p>
                <p>{$row['location']}</p>
            ";
        }    
    }        
}    

if(isset($_POST['buttonLocation'])){   #Checks if location filter button was pressed
        
        $location = mysqli_real_escape_string($dbc, trim($_POST['location']));
        if(empty($location)){
            header("Location: events.php");
            exit();
        }else{
                #Variables
            if($location='5'){
                $query = "SELECT * FROM event WHERE event_type != 'v' AND '53202' <= '$zip' AND '$zip' <= '53233'"; #Query depending on max distance input
                $result = mysqli_query($dbc, $query);
            }elseif($location='10'){
                $query = "SELECT * FROM event WHERE event_type != 'v' AND '53007' <= '$zip' AND '$zip' <= '53295'";
                $result = mysqli_query($dbc, $query);
            }elseif($location='15'){
                $query = "SELECT * FROM event WHERE event_type != 'v' AND '53005' <= '$zip' AND '$zip' <= '53295'";
                $result = mysqli_query($dbc, $query);
            }elseif($location='25'){
                $query = "SELECT * FROM event WHERE event_type != 'v' AND '53005' <= '$zip' AND '$zip' <= '53406'";
                $result = mysqli_query($dbc, $query);
            }elseif($location='50'){
                $query = "SELECT * FROM event WHERE event_type != 'v' AND '53002' <= '$zip' AND '$zip' <= '53557'";
                $result = mysqli_query($dbc, $query);
            }
        
        }
        if ($result) {  #Checking for error
            $row_count = mysqli_num_rows($result);
        } else {
            echo mysqli_error($dbc);
        }
        if($row_count==0){
           $message =  "<div id=\"results\">
                    
                    <p>No events matching the filter were found. Please try again with another filter.</p>
                    <button onclick=\"location.href='https://infost490s2404.soisweb.uwm.edu/senior_capstone/events.php'\">Back to Events</button>
                </div>
                
                
            "; 
        }else{
            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {  #Displaying results
                $type = $row['event_type'];
                if($type=='v'){
            	    $type = "Volunteer";
            	}elseif($type =='e'){
            	    $type = "Educational"; 
            	}else{
            	    $type = "Recreational";
            	}
            	$price = $row['price'];
                if($price=='free'){
            	    $price = "Free";
            	}else{
            	    $price = '$'. $row['price'];
            	}
            	if($row['date_start'] == '1000-10-10'){
            	  $date_start = $row['date_start'];
            	}
            	if($row['date_end'] == '1000-10-10'){
            	  $date_end = 'Ongoing';  
            	}else{
            	    $date_end = $row['date_end'];
            	    $date_start = $row['date_start'];
            	}
            	$image = "images/" . $row['picture_name'] . ".jpg";
            	$message ="
                <div id='img'>
                    <img style = \"height:10%; width:20%;\"src='{$image}'
                </div>
                <p>{$row['name']}</p>
                <p>{$type}</p>
                <p>{$price}</p>
                <p>{$date_start} - {$date_end}</p>
                <p>{$row['description']}</p>
                <p>{$row['location']}</p>
                ";
            }
    	
        }  
}


if(isset($_POST['buttonAge'])){   #Checks if age button was pressed HAVE NOT CHANGED ANYTHING ON THIS FILTER BESIDES THE BUTTON NAME, JUST COPIED OVER
    $date_end = mysqli_real_escape_string($dbc, trim($_POST['date_end']));
    $date_start = mysqli_real_escape_string($dbc, trim($_POST['date_start']));
    if(empty($date_end) && empty($date_start)){
        header("Location: events.php");
    }elseif(empty($date_end)){
        $query = "SELECT * FROM event WHERE(event_type != 'v' AND '$date_start' >= date_start) OR(event_type != 'v' AND date_start = 1000-10-10);"; 
        $result = mysqli_query($dbc, $query);
    }elseif(empty($date_start)){
        $query = "SELECT * FROM event WHERE(event_type != 'v' AND '$date_end' >= date_end ) OR(event_type != 'v' AND date_start = 1000-10-10);"; 
        $result = mysqli_query($dbc, $query);
    }else{
        $query = "SELECT * FROM event WHERE(event_type != 'v' AND '$date_start' <= date_start AND date_end <= '$date_end')OR(event_type != 'v' AND date_start = 1000-10-10);";
        $result = mysqli_query($dbc, $query);#Query grabing between the price inputs
    }

    if ($result) {  #Checking for error
        $row_count = mysqli_num_rows($result);
    } else {
        echo mysqli_error($dbc);
    }
    if($row_count<1){
       $message =  "<div id=\"results\">
                
                <p>No events matching the filter were found. Please try again with another filter.</p>
                <button onclick=\"location.href='https://infost490s2404.soisweb.uwm.edu/senior_capstone/events.php'\">Back to Events</button>
            </div>
            
            
        "; 
    }else{
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {  #Displaying results
            $type = $row['event_type'];
            if($type=='v'){
        	    $type = "Volunteer";
        	}elseif($type =='e'){
        	    $type = "Educational"; 
        	}else{
        	    $type = "Recreational";
        	}
        	$price = $row['price'];
            if($price=='free'){
        	    $price = "Free";
        	}else{
        	    $price = '$'. $row['price'];
        	}
        	if($row['date_start'] == '1000-10-10'){
        	  $date_start = $row['date_start'];
        	}
        	if($row['date_end'] == '1000-10-10'){
        	  $date_end = 'Ongoing';  
        	}else{
        	    $date_end = $row['date_end'];
        	    $date_start = $row['date_start'];
        	}
        	$image = "images/" . $row['picture_name'] . ".jpg";
        	$message ="
                <div id='img'>
                    <img style = \"height:10%; width:20%;\"src='{$image}'
                </div>
                <p>{$row['name']}</p>
                <p>{$type}</p>
                <p>{$price}</p>
                <p>{$date_start} - {$date_end}</p>
                <p>{$row['description']}</p>
                <p>{$row['location']}</p>
            ";
        }
    } 
}   



include('search_results.php');
echo  "<link rel='stylesheet' href='css/header.css'>";
mysqli_close($dbc); #Connection close
exit();
?>