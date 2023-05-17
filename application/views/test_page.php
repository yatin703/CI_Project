<!DOCTYPE html>
<html lang="en">

    <head>  
        <meta charset="UTF-8"/>
    
            <title>Hello, world!</title>
        <meta name="description" content="" />
    <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
    <!-- <link rel="icon" href="favicon.png"> -->
        <link rel="stylesheet" href="<?php echo base_url()?>css/style.css">
        <style>
            body{
                background-color:lightblue;
            }
           
            .header{
                display:flex;
                margin:auto;
                padding:auto;
            }
            div{
                border : 2px solid red;
            }
            .search{
                margin:22px 312px;
            }
            h2{
                margin: 20px 136px;
            }
            nav {
                display:inline;
            }     
            </style>
       
        
    </head>

    <body>
        <div class="header" id="header-fixed"> 
            <h2>Demo Web Project</h2>
            <from class="search">
                <input type="search" placeholder="Search">
                <button type="button" type="submit">Search</button>
            </from>
        </div>
        <nav class="nav-bar" >  
            <ul>
                <li><a href="#"></a>Home</li>
                <li><a href="#"></a>Service</li>
                <li><a href="#"></a>About</li>
                <li><a href="#"></a>Contact</li>
                <li><a href="#"></a>Signup</li>
            </ul>
        </nav>
            <form class="credential" id="sign-up">
                <div class="detilas">
                    <h2>Sign Up</h2>
                    <lable >User Name</lable>
                        <input type="text" name="first name" placeholder="Enter Name"><br>
                    <lable >Password </lable>
                        <input type="password" name="password" placeholder="Enter Password"><br>
                    <lable >Mobile No : </lable>
                        <input type="text" name="text" placeholder="Mobile Number"><br>
                    <lable >Email :</lable>
                        <input type="email" name="email" placeholder="Email Id"><br>
                    <lable for="Services">Select Your Service</lable>
                        <Select>
                            <option value="admin">admin Rights</option>
                            <option value="admin">User Rights</option>
                        </Select><br>
                    <button class="button" type="Submit">Submit</button>
                </div>
            </form>
        <footer class="footer">
                <h5>@copyright2023</h5>
    </footer>
    </body>
</html>