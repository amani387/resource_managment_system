<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">SB Admin</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
            <li><a href="../index.php">Home</a></li>    
          
               
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> AMANUEL NEGA <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
     
                        <li>
                            <a href="./logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="approval.php"><i class="fa fa-fw fa-dashboard"></i>REQUESTS</a>
                    </li>
                   <li>
                    <a href="#" data-toggle="collapse" data-target="#post_dropdown"><i class="fa fa-fw fa-arrows-v"></i> post</a>
                        <ul id="post_dropdown" class="collapse">
                            <li>
                                <a href="posts.php">view all post</a>
                            </li>
                            <li>
                                <a href="./add_post.php">add post</a>
                            </li>
                        </ul>
</li>
                    <li>
                        <a href="./catagories.php"><i class="fa fa-fw fa-wrench"></i>catagories</a>
                    </li>
                   
                    <li >
                        <a href="#"><i class="fa fa-fw fa-file"></i> comments</a>
                    </li>
                  
                    <li>
                        
                        <ul id="demo" class="collapse">
                        <a href="./users.php" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> users <i class="fa fa-fw fa-caret-down"></i></a>
                            <li>
                                <a href="#">Dropdown Item</a>
                            </li>
                            <li>
                                <a href="#">Dropdown Item</a>
                            </li>
                        </ul>
                       
                    </li>
                    <li >
                        <a href="./users.php"><i class="fa fa-fw fa-file">USERS</i></a>
                    </li>
                    <li >
                        <a href="profile.php"><i class="fa fa-fw fa-file">PROFILE</i></a>
                    </li>
                </ul>
            </div>
           
           
            <!-- /.navbar-collapse -->
        </nav>
