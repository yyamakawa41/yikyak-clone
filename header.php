<div id="header-wrapper">    
    <div class="container">
        <div class="row">
        <?php print "<a href='/' style='float:left' class='btn btn-primary'>Yik Yak Home</a>"; ?>
            <div id='button-wrapper' style="float:right">
                <?php
                    if(isset($_SESSION['username'])){
                        print 'Welcome Back, <a href="#">' . $_SESSION['username'] . '</a>&nbsp &nbsp &nbsp';
                        print '<a href="/index.php?logout=true" class="btn btn-danger">Logout</a>';
                    }else{
                        print '<a href="/login.php" class="btn btn-primary">Login</a>';
                        print '<a href="/signup.php" class="btn btn-success">Register</a>';
                    }
                ?>
            </div>
        
        </div>
    </div>
</div>