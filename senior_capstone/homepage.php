<?php session_start(); 
if(!empty($_SESSION['username'])){
    $currentuser =  "Logged in as: ". $_SESSION['username'];
}else{
    $currentuser = "";
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Average+Sans&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/homepage.css">
        <script src="scripts/main.js">
            
        </script>    
    </head>
<!----------------------------------------------------------------------------------------------------------> 

    <body onload="getLocation();">
        <div class = "wrapper">
            <div class = "header">
                <div class ="logo">
                    <img src ="images/Gratify.png" alt="Gratify Logo" width = "100px" height= "100px">
                </div>
                <!--Links-->
                <div class = "links">
                  <nav>
                    <ul>
                        
                        <li><a href= "homepage.php" class="">Home</a></li>
                        <li><a href= "volunteering.php" class="">Volunteering</a></li>
                        <li><a href= "events.php" class="">Events</a></li>
                        <li><a href= "login.php" class="">Login</a></li>
                        <li><a href= "aboutus.php" class="">About Us</a></li>
                        <li><a><?php echo $currentuser; ?></a></li>
                    </ul>
                  </nav>
                </div>
                <!--Slides-->
                <section class="slideshow">
                        <div class="slideshow-container slide">
                          
                          <div class="item">
                            <img src ="images/trash.webp"  alt="Volunteers picking up trash" />
                            <div class="featuredcaption">
                                <h3>Picking up Trash</h3>
                                <h3>Greater Milwaukee Area Milwaukee, WI 53202</h3>
                                <h3>Help the community by picking up trash left around the city.</h3>
                                
                                
                                </div>
                          </div>
            
                        <div class="item">
                            <img src="images/concert.jpg" />
                            <div class="featuredcaption">
                                <h3>Concert</h3>
                                <h3>2401 W Wisconsin Ave, Milwaukee, WI 53217</h3>
                                <h3>Concert at the Rave/Eagles club</h3>
                            </div>
                        </div>
                    
                        <div class="item">
                            <img src ="images/food.jpg" />
                            <div class="featuredcaption">
                                <h3>Soup Kitchen</h3>
                                <h3>Greater Milwaukee Area Milwaukee, WI 53202</h3>
                                <h3>Help out at various place feeding those who need it.</h3>
                            </div>
                        </div>
                </section>  
    
    
            </div> 
            
                
                <!--Search Bar-->
            <search>
                <form class = "searchinputs" method="post" action="filter_hf.php">
                    <input type="search" name="keyword" placeholder ="Search a Keyword">
                    <button type="submit" name =generalSearch ><i class="fa fa-search"></i></button>
                </form> 
            </search>
                <!--Popular Events-->
            <div class = "popwrapper">
                <h3 id="zipelement" name="zip" class = "popevents"></h3>
            </div>
            <div class = events>
                <div class="events_section_1">
                    <div class = "imgcontainer">
                        <img src="images/Estabrook_Beer_Garden.jpg">
                    </div>
                    <div class = "imgcontainer">
                        <img src="images/Biker_Fest.jpg">
                    </div>
                    <div class = "imgcontainer">
                        <img src="images/Wiscansin_Fest.jpg">
                    </div>
                </div>
                <div class = "caption_section_1">
                    <div class="caption">
                        <p>Estabrook Beer Garden</p>
                        <p>4600 Estabrook Pkwy, Milwaukee, WI 53217</p>
                        <p class="desc">Estabrook Beer Garden represents a return to an era that disappeared from our landscape with the start of Prohibition. It is the first truly public beer garden in America in nearly 100 years. Inspirations came from Milwaukee’s brewing legacy and the operation is modeled after beer gardens found in modern day Munich, Germany. </p>
                    </div>
                    <div class="caption">
                        <p>BikerFest Mke</p>
                        <p>TBD - Milwaukee, WI 53212</p>
                        <p class="desc">We create positive and inclusive experiences for local communities by providing education on motorcycle safety, industry, and culture. Through our knowledge and passion, we strive to bring people of all ages, races, and genders together to get involved with the heritage of motorcycles and their future.</p>
                    </div>
                    <div class="caption">
                        <p>T-Pain's Wiscansin Fest</p>
                        <p>2401 W Wisconsin Ave, Milwaukee, WI 53217</p>
                        <p class="desc">Artist T-Pain is rolling out the welcome mat for his Mansion In  Wiscansin Party Tour this summer, and you are cordially invited. Taking its name from the now iconic  lyric “Put you in a mansion, somewhere in Wiscansin” from his 2008 hit “Can’t Believe It,”.</p>
                    </div>
                </div>
                
                <div class = "events_section_2">
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
                <div class = "caption_section_2">
                    <div class="caption">
                        <p>Name</p>
                        <p>Location</p>
                        <p class="desc">Description: Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                    </div>
                    <div class="caption">
                        <p>Name</p>
                        <p>Location</p>
                        <p class="desc">Description: Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                    </div>
                    <div class="caption">
                        <p>Name</p>
                        <p>Location</p>
                        <p class="desc">Description: Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                    </div>
                </div>
                <div class="morebutton">
                    <button type="submit" class="morebutton" value="eventmore" onclick="window.location.href='https://infost490s2404.soisweb.uwm.edu/senior_capstone/events.php';">Show More<i class="fa fa-arrow-down"></i></button>
                </div>
            </div>
            </div class ="popwrapper">
                <h3 id="zipelement2" class = "popevents"></h3>
            </div>
            <div class="volunteering">
                <div class="events_section_1">
                    <div class = "imgcontainer">
                        <img src="images/Music_Teachers.jpg">
                    </div>
                    <div class = "imgcontainer">
                        <img src="images/DISCOVERY_WORLD.jpg">
                    </div>
                    <div class = "imgcontainer">
                        <img src="images/COMPUTER_LAB.jpg">
                    </div>
                </div>
                <div class = "caption_section_1">
                    <div class="caption">
                        <p>Music Teachers for Underprivileged Children</p>
                        <p>Greater Milwaukee Area Milwaukee, WI 53202</p>
                        <p class="desc">MusicLink is in need of experienced music teachers and related volunteers in New Wisconsin. With MusicLink, students (children under 18 years old) who show an interest in taking music lessons, but cannot afford full fee lessons, are linked with qualified music teachers willing to reduce their fee by at least half to make the lessons more affordable.</p>
                    </div>
                    <div class="caption">
                        <p>Summer Camp Assistant</p>
                        <p>500 N Harbor Drive, Milwaukee, WI 53202, US</p>
                        <p class="desc">Help to motivate and inspire young minds at Discovery World Summer Camp! Work within the direction of a Summer Camp Educator to assist in camp activities and supervise campers during our week-long summer camps</p>
                    </div>
                    <div class="caption">
                        <p>Computer Lab Assistant</p>
                        <p>845 N Van Buren St 202</p>
                        <p class="desc">As a volunteer in our computer lab, you can work one on one with our residents to encourage residents towards their goals through assisting with online applications, basic resume writing, and job readiness. The most important part of this role is being a listening ear, a confident companion, and advocate for our under served residents seeking housing and job opportunities.</p>
                    </div>
                </div>
                
                <div class = "events_section_2">
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
                <div class = "caption_section_2">
                    <div class="caption">
                        <p>Name</p>
                        <p>Location</p>
                        <p class="desc">Description: Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                    </div>
                    <div class="caption">
                        <p>Name</p>
                        <p>Location</p>
                        <p class="desc">Description: Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                    </div>
                    <div class="caption">
                        <p>Name</p>
                        <p>Location</p>
                        <p class="desc">Description: Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                    </div>
                </div>
                <div class="morebutton">
                    <button type="submit" class="morebutton" value="eventmore" onclick="window.location.href='https://infost490s2404.soisweb.uwm.edu/senior_capstone/volunteering.php';">Show More<i class="fa fa-arrow-down"></i></button>
                </div>
            </div>
        
            <footer>
                <img src ="images/Gratify.png" alt="Gratify Logo" width = "100px" height= "100px">
            </footer>
        </div>
    </body>
    
</html>