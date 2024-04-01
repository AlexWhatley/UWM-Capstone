<?php session_start();
$currentpage = $_SERVER['SCRIPT_NAME'];?>
<!DOCTYPE html>
<html>
    <!--Started it cuz i wanted to add css -N-->
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Average+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/events&volunteering.css">
    <link rel="stylesheet" href="css/header.css"> <!-- Css page for the header for every page but the homepage -->
    <link rel="stylesheet" href="css/filter.css">
</head>
    
<body>
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
   <!-- <div class= "title">
        <h1>Volunteering Opportunities near *Location</h1>
    </div> -->
    <div class="body">
        <!--Filter-->
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
                        <button type="submit" id="button" ><i class="fa fa-arrow-right"></i></button>
                        
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
                        <select id="age">
                            <option disabled selected hidden>Select</option>
                            <option name="age" id="-14">Under 14</option>
                            <option name="age" id="14-18">14-18</option>
                            <option name="age" id="18+">18+</option>
                            <option name="age" id="21+">21+</option>
                            <option name="age" id="40+">40+</option>
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

        <!--Volunteering Opportunities-->
        
        <div class = "volunteering">
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
        
            <div class = "events_section">
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
        
        <div class = "events_section">
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