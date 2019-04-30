<ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li>
           <a href="<?php echo e(url('admin')); ?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            
          </a>
          
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-cogs"></i>
            <span>Master Data</span>
            <span class="pull-right-container">
               <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo e(url('admin/user')); ?>"><i class="fa fa-users"></i> Users Data </a></li>
           <li class="treeview">
              <a href="#"><i class="fa fa-circle-o"></i> Team's Data
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo e(url('admin/team')); ?>"><i class="fa fa-circle-o"></i> All Team</a></li>
                <li class="treeview">
                  <a href="<?php echo e(url('admin/team_task')); ?>"><i class="fa fa-circle-o"></i> Team Task
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  
                </li>
              </ul>
            </li>
          </ul>
        </li>
          <li class="treeview">
          <a href="#">
            <i class="fa fa-arrows-alt"></i>
            <span>Washing Plan</span>
            <span class="pull-right-container">
               <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo e(url('admin/washing_plan')); ?>"><i class="fa fa-circle-o"></i> Washing Plan </a></li>
           <li><a href="<?php echo e(url('admin/washing_price')); ?>"><i class="fa fa-circle-o"></i> Washing Price </a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-car"></i>
            <span>Vehicle Data</span>
            <span class="pull-right-container">
               <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo e(url('admin/vehicle_company')); ?>"><i class="fa fa-circle-o"></i> Vehicle Company </a></li>
           <li><a href="<?php echo e(url('admin/vehicle_model')); ?>"><i class="fa ffa-circle-o"></i> Vehicle Model </a></li>
           <li><a href="<?php echo e(url('admin/vehicle_type')); ?>"><i class="fa ffa-circle-o"></i> Vehicle Type </a></li>
          </ul>
        </li>

         <li class="treeview">
          <a href="#">
            <i class="fa fa-calendar"></i>
            <span>Appointment Data</span>
            <span class="pull-right-container">
               <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo e(url('admin/appointment')); ?>"><i class="fa fa-circle-o"></i> Appointment </a></li>
           <li><a href="<?php echo e(url('admin/payment')); ?>"><i class="fa fa-circle-o"></i> Payment </a></li>
           <li><a href="<?php echo e(url('admin/payment_mode')); ?>"><i class="fa fa-circle-o"></i> Payment Mode </a></li>
           <li><a href="<?php echo e(url('admin/status')); ?>"><i class="fa fa-circle-o"></i> Status </a></li>
          </ul>
        </li>
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i>
            <span>Homepage</span>
            <span class="pull-right-container">
               <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo e(url('admin/contact')); ?>"><i class="fa fa-circle-o"></i> Contact </a></li>
            <li><a href="<?php echo e(url('admin/company_social')); ?>"><i class="fa fa-circle-o"></i> Social Media </a></li>
           <li><a href="<?php echo e(url('admin/blog')); ?>"><i class="fa fa-circle-o"></i> Blog </a></li>
           <li><a href="<?php echo e(url('admin/client')); ?>"><i class="fa fa-circle-o"></i> Client </a></li>
            <li><a href="<?php echo e(url('admin/gallery')); ?>"><i class="fa fa-circle-o"></i> Gallery </a></li>
           <li><a href="<?php echo e(url('admin/service')); ?>"><i class="fa fa-circle-o"></i> Service </a></li>
           <li><a href="<?php echo e(url('admin/testimonial')); ?>"><i class="fa fa-circle-o"></i> Testimonial </a></li>
           <li><a href="<?php echo e(url('admin/opening_hour')); ?>"><i class="fa fa-circle-o"></i> Opening Hours </a></li>
           <li><a href="<?php echo e(url('admin/about_us')); ?>"><i class="fa fa-circle-o"></i> About Us </a></li>
          </ul>
        </li>
        
    
      </ul>
<?php /* /Applications/XAMPP/xamppfiles/htdocs/carwash/resources/views/Admin/layouts/sidebar.blade.php */ ?>