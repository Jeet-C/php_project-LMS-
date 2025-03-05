<?php
include("common/db.php");
?>
<aside class="app-side" id="app-side">

    <!-- BEGIN .side-content -->
    <div class="side-content ">

        <!-- BEGIN .user actions -->
        <ul class="user-actions">
            <li class="quick-links">Quick Links</li>
            <li>
                <a href="#" data-toggle="tooltip" data-placement="top" title="Tasks">
                    <i class="icon-assignment_turned_in"></i>
                </a>
            </li>

            <li>
                <a href="#" data-toggle="tooltip" data-placement="top" title="Custom Tables">
                    <i class="icon-border_all"></i>
                </a>
            </li>
        </ul>
        <!-- END .user actions -->

        <!-- Nav scroll start -->
        <div class="sidebarNavScroll">

            <!-- BEGIN .side-nav -->
            <nav class="side-nav">

                <!-- BEGIN: side-nav-content -->
                <ul class="unifyMenu" id="unifyMenu">
                    <li>
                        <a href="../index.php">
                            <span class="has-icon">
                                <i class="icon-home"></i>
                            </span>
                            <span class="nav-title">Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="dashboard.php">
                            <span class="has-icon">
                                <i class="icon-laptop_windows"></i>
                            </span>
                            <span class="nav-title">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="subject_submision.php">
                            <span class="has-icon">
                                <i class="icon-assignment"></i>
                            </span>
                            <span class="nav-title">Insert Sem and Sub</span>
                            
                        </a>
                    </li>
                    <li>
                        <a href="form.php">
                            <span class="has-icon">
                                <i class="icon-assignment"></i>
                            </span>
                            <span class="nav-title">Register Teacher</span>
                            
                        </a>
                    </li>
                    <li>
                        <a href="teacheraccount.php">
                            <span class="has-icon">
                                <i class="icon-assignment"></i>
                            </span>
                            <span class="nav-title">All Teacher Account</span>
                            
                        </a>
                    </li>

                    <li>
                        <a href="#" class="has-arrow" aria-expanded="false">
                            <span class="has-icon">
                                <i class="icon-view_day"></i>
                            </span>
                            <span class="nav-title">Subjects</span>
                            <span class="lbl"></span>
                        </a>

                        <ul aria-expanded="false">
                            <li>

                                <?php
                                 $sel_str="SELECT * FROM stream";
                                 $q_str=$con->query($sel_str);
                                 while ($row_str=$q_str->fetch_assoc()) {
                                ?>

                            <li>
                                <a href="#?str=<?php echo $row_str['stream'];?>" >
                                    <?php echo $row_str['stream'];?>
                                </a>

                                <ul aria-expanded="false">
                                    <?php
                                $sel_sem="SELECT * FROM semester";
                                       $q_sem=$con->query($sel_sem);
                                       while ($row_sem=$q_sem->fetch_assoc()) {
                                       ?>
                                    <li>
                                        <a href='#?str=<?php echo $st= $row_str['stream']; ?>&sem=<?php echo $sem=$row_sem['semester'];?>' >
                                            <?php echo $row_sem['semester'];?>
                                        </a>



                                        <ul aria-expanded="false">
                                            <?php
                        
                                                $sel_sub="SELECT * FROM subject WHERE semester='$sem' AND stream='$st'";
                                                $q_sub=$con->query($sel_sub);
                                                while ($row_sub=$q_sub->fetch_assoc()) {
                                                   
                                            ?>
                                            <a href='main.php?sid=<?php echo $row_str['stream']; ?>&sem=<?php echo $row_sem['semester'];?>&sub=<?php echo $sub=$row_sub['subject']; ?>'>
                                            <?php echo $row_sub['subject'];?>
                                            </a>
                                            <?php  } ?>
                                        </ul>
                                    </li>
                                    <?php } ?>
                                </ul>
                            </li>
                             <?php } ?>
                            </li>
                        </ul>
                </li>
                
                </ul>
                <!-- END: side-nav-content -->

            </nav>
            <!-- END: .side-nav -->

            <!-- Sidebar widgets start -->
            <!-- Sidebar widgets end -->

        </div>
        <!-- Nav scroll end -->

    </div>
    <!-- END: .side-content -->

</aside>