<!DOCTYPE html>
<html lang="en">

    <head>  
        <meta charset="UTF-8"/>
    
        <title>Hello, world!</title>
        <meta name="description" content="" />
    <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
    <!-- <link rel="icon" href="favicon.png"> -->
        <link rel="stylesheet" href="<?php echo base_url()?>css/style.css">
        
    </head>

    <body>
        <div class="header" id="header-fixed"> 
            <h1>ProjectX</h1>
            <from class="search">
                <input type="search" placeholder="Search">
                <button type="button" type="submit">Search</button>
            </from>
        </div>
        <nav class="nav-bar" >  
            <ul>
                <li><a href="#"><strong>Home</strong></a></li>
                <li><a href="#"><strong>Service</strong></a></li>
                <li><a href="#"><strong>About</strong></a></li>
                <li><a href="#"><strong>Contact</strong></a></li>
                <li><a href="#"><strong>Signup</strong></a></li>
            </ul>
        </nav>
            <form class="credential" id="sign-up">
                <div class="details">
                    <h2>Sign Up</h2>
                    <lable >User Name :</lable>
                        <input type="text" name="first name" placeholder="Enter Name"><br>
                    <lable >Password :</lable>
                        <input type="password" name="password" placeholder="Enter Password"><br>
                    <lable >Mobile No : </lable>
                        <input type="text" name="text" placeholder="Mobile Number"><br>
                    <lable >Email :</lable>
                        <input type="email" name="email" placeholder="Email Id"><br>
                    <lable for="Services">Select Your Service :</lable>
                        <Select>
                            <option value="admin">admin Rights</option>
                            <option value="admin">User Rights</option>
                        </Select><br>
                    <button class="button" type="Submit">Submit</button>
                </div>
                <div class="container">
                    <div class="column">
                        <div class="article">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quas tenetur nostrum odit, numquam iure similique voluptatem eligendi laborum vero magnam in, consectetur blanditiis aperiam officia deleniti accusamus, ducimus nihil itaque ipsa dolores!
                        </div>
                    </div>
                    <div class="column">
                        <div class="article">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit dolor excepturi tenetur, necessitatibus hic itaque modi, a aliquam iste minima sequi ipsa. Aliquam, ducimus praesentium?
                        </div>
                    </div>
                </div>

            </form>
        <footer class="footer">
            <h3>@copyright2023</h3>
         </footer>
    </body>
</html>