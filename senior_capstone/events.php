<?php session_start();
$currentpage = $_SERVER['SCRIPT_NAME'];
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Average+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/events&volunteering.css">
    <link rel="stylesheet" href="css/header.css"> <!-- Css page for the header for every page but the homepage -->
    <link rel="stylesheet" href="css/filter.css">
</head>
<script>
    const cookieValue = document.cookie
      .split("; ")
      .find((row) => row.startsWith("zipcookie="))
      ?.split("=")[1];
    
    function showCookieValue() {
      const output = document.getElementById("zipelement");
      output.textContent = `> ${cookieValue}`;
    }
</script>
<body>
    <!--for breaking a flexbox line
    <div class="container">
        <div class="item"></div>
        <div class="break"></div>
        <div class="item"></div>
    </div>
    -->

    <div class ="logo">
        <img src ="images/Gratify.png" alt="Gratify Logo" width="100px" height="100px">
    </div>
    <div class = "header">
                   <!--Links-->
        <div class = "links">
            <nav>
                <ul>
                    <li><a href= "homepage.php">Home</a></li>
                    <li><a href= "volunteering.php">Volunteering</a></li>
                    <li><a href= "events.php">Events</a></li>
                    <li><a href= "login.php">Login</a></li>
                    <li><a href= "aboutus.php">About Us</a></li>
                    
                </ul>
            </nav>
        </div>
    </div>
    <div class="body"> <!--filter and events&nbsp-->
        <div class="filter">
            <form class="distance" oninput="x.value = parseInt(myRange.value)" action="filter_hf.php" method="post">
                <div class="filtercontainer">
                    <div class="filterlabel">
                        <b>Max Distance(mi):</b>
                    </div>
                    <div class="flexbreak">
                            <div class="ibreak"></div>
                            <div class="break"></div>
                            <div class="ibreak"></div>
                        </div>
                    <div class="inputlabel">
                        <div class="circles">
                            <input type="radio" id="5" name="location" value="5">
                            <input type="radio" id="10" name="location" value="10">
                            <input type="radio" id="15" name="location" value="15">
                            <input type="radio" id="25" name="location" value="25">
                            <input type="radio" id="50" name="location" value="50">
                        </div>
                        <br>
                        <button type="submit" id="button" name="buttonLocation"><i class="fa fa-arrow-right"></i></button>
                        
                    </div>
                    <div class="flexbreak">
                            <div class="ibreak"></div>
                            <div class="break"></div>
                            <div class="ibreak"></div>
                        </div>
                    <div class = "label">
                        <label for="5">5</label>
                        <label for="10">10</label>
                        <label for="15">15</label>
                        <label for="25">25</label>
                        <label for="50">50</label>
                    </div>
                </div>
            </form>    
    
                
    
            <form action="filter_hf.php" method="post">
                <div class="filtercontainer">
                    <div class="filterlabel">
                        <b>Age Range</b>
                    </div>
                    <div class="flexbreak">
                            <div class="ibreak"></div>
                            <div class="break"></div>
                            <div class="ibreak"></div>
                        </div>
                    <div class="inputlabel">
                        <select name="age" id="age">
                            <option min_age="0" max_age="150" disabled selected hidden>Select</option>
                            <option min_age="0" max_age="14">Under 14</option>
                            <option min_age="14" max_age="18">14-18</option>
                            <option min_age="18" max_age="150">18+</option>
                            <option min_age="21" max_age="150">21+</option>
                            <option min_age="0" max_age="150">Any</option>
                            <option min_age="50" max_age="150">40+</option>
                        </select>
                        <button type="submit" id="button" ><i class="fa fa-arrow-right"></i></button>
                    </div>
                </div>
            </form>
        
            <form action="filter_hf.php" method="post">
                <div class="filtercontainer">
                    <div class="filterlabel">
                        <b>Date</b> <!--Differnet way-->
                    </div>
                    <div class="flexbreak">
                            <div class="ibreak"></div>
                            <div class="break"></div>
                            <div class="ibreak"></div>
                    </div>
                    <div class="inputlabel">
                        <input type="text" id="inputbox" name="date_start" placeholder="Start" onfocus="(this.type='date')" onblur="(this.type='text')">
                        <input type="text"  id="inputbox" name="date_end" placeholder="End" onfocus="(this.type='date')" onblur="(this.type='text')">
                        <button type="submit" id="button" name="buttonDate" ><i class="fa fa-arrow-right"></i></button>
                    </div>
                </div>
            </form>
            <form action=action="filter_hf.php" method="post">
                <div class="filtercontainer">
                    <div class="filterlabel">
                        <b>Time Range</b>
                    </div>
                    <div class="flexbreak">
                            <div class="ibreak"></div>
                            <div class="break"></div>
                            <div class="ibreak"></div>
                        </div>
                    <div class="inputlabel">
                        <input type="text" id="inputbox" name="time_start" placeholder="Start">
                        <input type="text" id="inputbox" name="time_end" placeholder="End">
                        <button type="submit" id="button" ><i class="fa fa-arrow-right"></i></button>
                    </div>
                </div>
            </form>
        
            <form action="filter_hf.php" method="post">
                <div class="filtercontainer">
                    <div class="filterlabel">
                        <b>Price Range</b>
                    </div>
                    <div class="flexbreak">
                                <div class="ibreak"></div>
                                <div class="break"></div>
                                <div class="ibreak"></div>
                            </div>
                    <div class="inputlabel">
                        <input type="text" id="inputbox" name="min_price" placeholder="Min">
                        <input type="text" id="inputbox" name="max_price" placeholder="Max">
                        <button type="submit" id="button" ><i class="fa fa-arrow-right"></i></button>
                    </div>
                </div>
            </form>
        </div>            

        <div class = "events">
            <div class= "title">
                <h3 id="zipelement" name="zip" class = "popevents"></h3>
            </div>
            <div class="events_section">
                <div class = "imgcontainer">
                    <img src="images/Gratify.png">
                </div>
                <div class = "imgcontainer">
                    <img src="images/Gratify.png">
                </div>
                <div class = "imgcontainer">
                    <img src="images/Gratify.png">
                </div>
            </div>
            <div class = "caption_section">
                <div class="caption">
                    <p>Name</p>
                    <p>Location</p>
                    <p>Description: Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                </div>
                <div class="caption">
                    <p>Name</p>
                    <p>Location</p>
                    <p>Description: Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                </div>
                <div class="caption">
                    <p>Name</p>
                    <p>Location</p>
                    <p>Description: Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                </div>
            </div>
        
            <div class="events_section">
                <div class = "imgcontainer">
                    <img src="images/Gratify.png">
                </div>
                <div class = "imgcontainer">
                    <img src="images/Gratify.png">
                </div>
                <div class = "imgcontainer">
                    <img src="images/Gratify.png">
                </div>
            </div>
            <div class = "caption_section">
                <div class="caption">
                    <p>Name</p>
                    <p>Location</p>
                    <p>Description: Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                </div>
                <div class="caption">
                    <p>Name</p>
                    <p>Location</p>
                    <p>Description: Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                </div>
                <div class="caption">
                    <p>Name</p>
                    <p>Location</p>
                    <p>Description: Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                </div>
            </div>
            
            <div class="events_section">
                <div class = "imgcontainer">
                    <img src="images/Gratify.png">
                </div>
                <div class = "imgcontainer">
                    <img src="images/Gratify.png">
                </div>
                <div class = "imgcontainer">
                    <img src="images/Gratify.png">
                </div>
            </div>
            <div class = "caption_section">
                <div class="caption">
                    <p>Name</p>
                    <p>Location</p>
                    <p>Description: Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                </div>
                <div class="caption">
                    <p>Name</p>
                    <p>Location</p>
                    <p>Description: Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                </div>
                <div class="caption">
                    <p>Name</p>
                    <p>Location</p>
                    <p>Description: Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                </div>
            </div>
        
            <div class="events_section">
                <div class = "imgcontainer">
                    <img src="images/Gratify.png">
                </div>
                <div class = "imgcontainer">
                    <img src="images/Gratify.png">
                </div>
                <div class = "imgcontainer">
                    <img src="images/Gratify.png">
                </div>
            </div>
            
            <div class = "caption_section">
                <div class="caption">
                    <p>Name</p>
                    <p>Location</p>
                    <p>Description: Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                </div>
                <div class="caption">
                    <p>Name</p>
                    <p>Location</p>
                    <p>Description: Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                </div>
                <div class="caption">
                    <p>Name</p>
                    <p>Location</p>
                    <p>Description: Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                </div>
            </div>
    </div> 
    </div>    
    <footer>
        <img src="images/Gratify.png" alt="Gratify Logo" width="100px" height="100px"> 
    </footer>

</body>
</html>
    
        
        
        
    

            
            
        
            
        
            