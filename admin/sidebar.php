
<?php

if($_SESSION['type']=='admin'){



?>
     <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="images/palliative.jpg" height="150" width="200" alt="User Image">
        <div>
          <!-- <p class="app-sidebar__user-name">Welcome</p> -->
          <p class="app-sidebar__user-designation"></p>
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item " href="dashboard.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
        <li><a class="app-menu__item" href="pal_aprove.php"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Aprove Units</span></a></li>

        <li><a class="app-menu__item" href="pub_view.php"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Registered Users</span></a></li>

        
          </ul>
          </li>

       
    </aside>
<?php
}
else {
?>

     <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="images/palliative.jpg" height="150" width="200" alt="User Image">
        <div>
          <!-- <p class="app-sidebar__user-name">Welcome</p> -->
          <p class="app-sidebar__user-designation"></p>
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item" href="dashboard.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>

        <li><a class="app-menu__item" href="request.php"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Requests</span></a></li>

        <li><a class="app-menu__item" href="donation.php"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Donation</span></a></li>




        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Services</span><i class="treeview-indicator fa fa-angle-right"></i></a>




          <ul class="treeview-menu">
            <li><a class="treeview-item" href="ser_view.php"><i class="icon fa fa-circle-o"></i> View</a></li>
            <li><a class="treeview-item" href="ser_add.php" target="_blank" rel="noopener"><i class="icon fa fa-circle-o"></i> Add</a></li>
            <!--  -->
          </ul>
        </li>
        
        <!--  -->
    </aside>

<?php
}
?>
