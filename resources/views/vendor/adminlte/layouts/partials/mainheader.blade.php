<!-- Main Header -->
<header class="main-header">

    <!-- Logo -->
   

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="{{ url('/home') }}" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>Pat</b>G</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Pat</b>G </span>
    </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu" style="float:left; ">
            <ul class="nav navbar-nav">
                <!-- Messages: style can be found in dropdown.less-->
               

                <li class="dropdown messages-menu">
                    <!-- Menu toggle button -->
                    <a href="{{url('home')}}">
                        <i class="fa fa-desktop"></i>
                       
                    </a>
                    
                </li><!-- /.messages-menu -->

                <!-- Notifications Menu -->
                <li class="dropdown notifications-menu">
                    <!-- Menu toggle button -->
                    <a href="#" >
                        <i class="fa fa-exclamation-circle"></i>
                     
                    </a>
                 
                </li>
                <!-- Tasks Menu -->
                <li class="dropdown tasks-menu">
                    <!-- Menu Toggle Button -->
                    <a href="{{url('member')}}">
                        <i class="fa fa-users"></i>
                       
                    </a>
                    
                      
                </li>
                <li class="dropdown tasks-menu">
                    <!-- Menu Toggle Button -->
                    <a href="#">
                        <i class="fa fa-file-text-o"></i>
                       
                    </a>
                    
                      
                </li>
                                   
              
            </ul>
        </div>
    </nav>
</header>
