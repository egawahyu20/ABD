        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url()?>">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-database"></i>
                </div>
                <div class="sidebar-brand-text mx-3">DB Admin</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Heading -->
            <div class="sidebar-heading">
                MYSQL
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-user"></i>
                    <span>MySQL basic</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Basic:</h6>
                        <a class="collapse-item" href="<?= base_url('basic/where')?>">Where</a>
                        <a class="collapse-item" href="<?= base_url('basic/distinct')?>">Distinct</a>
                        <a class="collapse-item" href="<?= base_url('basic/operator')?>">Operator</a>
                        <a class="collapse-item" href="<?= base_url('basic/between')?>">Between</a>
                        <a class="collapse-item" href="<?= base_url('basic/like')?>">Like</a>
                        <a class="collapse-item" href="<?= base_url('basic/limit')?>">Limit</a>
                        <a class="collapse-item" href="<?= base_url('basic/is-null')?>">Is Null</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-user-tie"></i>
                    <span>MySQL Lanjutan</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">lanjutan:</h6>
                        <a class="collapse-item" href="<?= base_url('lanjutan/alias')?>">Alias</a>
                        <a class="collapse-item" href="<?= base_url('lanjutan/join')?>">Join</a>
                        <a class="collapse-item" href="<?= base_url('lanjutan/group-by')?>">Group By</a>
                        <a class="collapse-item" href="<?= base_url('lanjutan/having')?>">Having</a>
                        <a class="collapse-item" href="<?= base_url('lanjutan/roll-up')?>">Roll Up</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->