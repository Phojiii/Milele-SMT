<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="index" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="<?php echo base_url(); ?>/public/assets/images/logo-sm.svg" alt="" height="24">
                    </span>
                    <span class="logo-lg">
                        <img src="<?php echo base_url(); ?>/public/assets/images/logo-sm.svg" alt="" height="24"> <span class="logo-txt"> Milele</span>
                    </span>
                </a>

                <a href="index" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="<?php echo base_url(); ?>/public/assets/images/logo-sm.svg" alt="" height="24">
                    </span>
                    <span class="logo-lg">
                        <img src="<?php echo base_url(); ?>/public/assets/images/logo-sm.svg" alt="" height="24"> <span class="logo-txt"> Milele</span>
                    </span>
                </a>
            </div>            
        </div>

        <div class="d-flex">
            <div class="dropdown d-none d-sm-inline-block">
                <button type="button" class="btn header-item" id="mode-setting-btn">
                    <i data-feather="moon" class="icon-lg layout-mode-dark"></i>
                    <i data-feather="sun" class="icon-lg layout-mode-light"></i>
                </button>
            </div>
            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item bg-soft-light border-start border-end" id="page-header-user-dropdown"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user" src="<?php echo base_url(); ?>/public/assets/images/users/avatar-1.jpg"
                        alt="Header Avatar">
                       
                    <span class="d-none d-xl-inline-block ms-1 fw-medium"><?php 
                     $session    = session();
                     $username   = $session->get('username');
                     $permission = $session->get('permission');
                     $department = $session->get('department');
                     echo $department;
                    ?></span>
                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    <a class="dropdown-item" href="profile"><i class="mdi mdi-face-profile font-size-16 align-middle me-1"></i> <?= lang('Profile') ?></a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?php echo base_url(); ?>/logout"><i class="mdi mdi-logout font-size-16 align-middle me-1"></i> <?= lang('Logout') ?></a>
                </div>
            </div>
            
        </div>
    </div>
</header>
<div class="topnav">
    <div class="container-fluid">
        <nav class="navbar navbar-light navbar-expand-lg topnav-menu">

            <div class="collapse navbar-collapse" id="topnav-menu-content">
                <ul class="navbar-nav">

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="<?php echo base_url(); ?>" id="topnav-dashboard" role="button">
                            <i data-feather="home"></i><span data-key="t-dashboards"><?= lang('Dashboard') ?></span>
                        </a>
                    </li>
                    <?php 
if ($department == "admin")
{
    ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="<?php echo base_url(); ?>/poinfo" id="topnav-more" role="button">
                            <i data-feather="file-text"></i><span data-key="t-extra-pages"><?= lang('Purchasing Orders') ?></span> <div class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-more">
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="<?php echo base_url(); ?>/addnewpo" id="topnav-auth" role="button">
                                    <span data-key="t-authentication"><?= lang('Add New PO') ?></span>
                                </a>
                            </div>
                                <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="<?php echo base_url(); ?>/poinfo" id="topnav-utility" role="button">
                                    <span data-key="t-utility"><?= lang('PO Order Details') ?></span>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="<?php echo base_url(); ?>/vehicles" role="button">
                            <i data-feather="layout"></i><span data-key="t-horizontal"><?= lang('Vehicles Details') ?></span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="<?php echo base_url(); ?>/sales" id="topnav-more" role="button">
                            <i data-feather="file-text"></i><span data-key="t-extra-pages"><?= lang('Sales Order') ?></span> <div class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-more">

                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="<?php echo base_url(); ?>/sales" id="topnav-auth" role="button">
                                    <span data-key="t-authentication"><?= lang('Sales') ?></span>
                                </a>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-utility" role="button">
                                    <span data-key="t-utility"><?= lang('Booking') ?></span>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="<?php echo base_url(); ?>/qa" id="topnav-more" role="button">
                            <i data-feather="file-text"></i><span data-key="t-extra-pages"><?= lang('QA/QC') ?></span> <div class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-more">

                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="<?php echo base_url(); ?>/qa" id="topnav-auth" role="button">
                                    <span data-key="t-authentication"><?= lang('GRN & GDN') ?></span>
                                </a>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="<?php echo base_url(); ?>/pdiinfo" id="topnav-utility" role="button">
                                    <span data-key="t-utility"><?= lang('PDI Reports') ?></span>
                                </a>
                            </div>
                                <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-utility" role="button">
                                    <span data-key="t-utility"><?= lang('Details') ?></span>
                                </a>
                            </div>
                        </div>
                    </li>
				
					<li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="<?php echo base_url(); ?>/purchasing" role="button">
                            <i data-feather="layout"></i><span data-key="t-horizontal"><?= lang('Vehicles Purchasing Details') ?></span>
                        </a>
                    </li>
                    <?php
}
if($department == "sales")
{
?>
						<li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="<?php echo base_url(); ?>/sales" id="topnav-more" role="button">
                            <i data-feather="file-text"></i><span data-key="t-extra-pages"><?= lang('Sales Order') ?></span> <div class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-more">

                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="<?php echo base_url(); ?>/sales" id="topnav-auth" role="button">
                                    <span data-key="t-authentication"><?= lang('Sales') ?></span>
                                </a>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-utility" role="button">
                                    <span data-key="t-utility"><?= lang('Booking') ?></span>
                                </a>
                            </div>
                        </div>
                    </li>
                    
                    <?php
    
}
if($department == "warehouse")
{
    ?>		
<li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="<?php echo base_url(); ?>/qa" id="topnav-more" role="button">
                            <i data-feather="file-text"></i><span data-key="t-extra-pages"><?= lang('QA/QC') ?></span> <div class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-more">

                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="<?php echo base_url(); ?>/qa" id="topnav-auth" role="button">
                                    <span data-key="t-authentication"><?= lang('GRN & GDN') ?></span>
                                </a>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="" id="topnav-utility" role="button">
                                    <span data-key="t-utility"><?= lang('PDI Reports') ?></span>
                                </a>
                            </div>
                                <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-utility" role="button">
                                    <span data-key="t-utility"><?= lang('Details') ?></span>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="<?php echo base_url(); ?>/vehicles" role="button">
                            <i data-feather="layout"></i><span data-key="t-extra-pages"><?= lang('Vehicles Details') ?></span>
                        </a>
						<div class="dropdown-menu" aria-labelledby="topnav-more">

                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="<?php echo base_url(); ?>/vehcsv" id="topnav-auth" role="button">
                                    <span data-key="t-authentication"><?= lang('Update through CSV') ?></span>
                                </a>
                            </div>
                    </li>
							<li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" role="button">
                            <i data-feather="layout"></i><span data-key="t-horizontal"><?= lang('Doucmentations') ?></span>
                        </a>
                    </li>
                    <?php
}
?>
 <?php 
if ($department == "Fin")
{
    ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-more" role="button">
                            <i data-feather="file-text"></i><span data-key="t-extra-pages"><?= lang('Purchasing Orders') ?></span> <div class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-more">
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="<?php echo base_url(); ?>/addnewpo" id="topnav-auth" role="button">
                                    <span data-key="t-authentication"><?= lang('Add New') ?></span>
                                </a>
                            </div>
                                <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="<?php echo base_url(); ?>/poinfo" id="topnav-utility" role="button">
                                    <span data-key="t-utility"><?= lang('Details') ?></span>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="<?php echo base_url(); ?>/vehicles" role="button">
                            <i data-feather="layout"></i><span data-key="t-extra-pages"><?= lang('Vehicles Details') ?></span>
                        </a>
						<div class="dropdown-menu" aria-labelledby="topnav-more">

                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="<?php echo base_url(); ?>/vehcsv" id="topnav-auth" role="button">
                                    <span data-key="t-authentication"><?= lang('Update through CSV') ?></span>
                                </a>
                            </div>
                    </li>
							<li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" role="button">
                            <i data-feather="layout"></i><span data-key="t-horizontal"><?= lang('Doucmentations') ?></span>
                        </a>
                    </li>
					<li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="<?php echo base_url(); ?>/purchasing" role="button">
                            <i data-feather="layout"></i><span data-key="t-horizontal"><?= lang('Vehicles Purchasing Details') ?></span>
                        </a>
                    </li>
                    <?php
}
?>
                    <?php 
if ($department == "Purcahser")
{
    ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="<?php echo base_url(); ?>/poinfo" id="topnav-more" role="button">
                            <i data-feather="file-text"></i><span data-key="t-extra-pages"><?= lang('Purchasing Orders') ?></span> <div class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-more">
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="<?php echo base_url(); ?>/addnewpo" id="topnav-auth" role="button">
                                    <span data-key="t-authentication"><?= lang('Add New PO') ?></span>
                                </a>
                            </div>
                                <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="<?php echo base_url(); ?>/poinfo" id="topnav-utility" role="button">
                                    <span data-key="t-utility"><?= lang('PO Order Details') ?></span>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="<?php echo base_url(); ?>/vehicles" role="button">
                            <i data-feather="layout"></i><span data-key="t-horizontal"><?= lang('Vehicles Details') ?></span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="<?php echo base_url(); ?>/poinfo" id="topnav-more" role="button">
                            <i data-feather="file-text"></i><span data-key="t-extra-pages"><?= lang('Variants') ?></span> <div class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-more">
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="<?php echo base_url(); ?>/addnewveriant" id="topnav-auth" role="button">
                                    <span data-key="t-authentication"><?= lang('Add New Variant') ?></span>
                                </a>
                            </div>
                                <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="<?php echo base_url(); ?>/poinfo" id="topnav-utility" role="button">
                                    <span data-key="t-utility"><?= lang('Variants Details') ?></span>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="<?php echo base_url(); ?>/suppliers" id="topnav-more" role="button">
                            <i data-feather="file-text"></i><span data-key="t-extra-pages"><?= lang('Suppliers') ?></span> <div class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-more">
                        <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="<?php echo base_url(); ?>/addnewsuppliers" id="topnav-auth" role="button">
                                    <span data-key="t-authentication"><?= lang('Add New Suppliers') ?></span>
                                </a>
                        </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="<?php echo base_url(); ?>/sinventory" id="topnav-auth" role="button">
                                    <span data-key="t-authentication"><?= lang('Supplier Inventory') ?></span>
                                </a>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="<?php echo base_url(); ?>/demandsinfo" id="topnav-auth" role="button">
                                    <span data-key="t-authentication"><?= lang('Demands') ?></span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-auth">
                                    <a href="<?php echo base_url(); ?>/demandinfo" class="dropdown-item" data-key="t-login"><?= lang('Demands Info') ?></a>
                                    <a href="<?php echo base_url(); ?>/demandssummary" class="dropdown-item" data-key="t-login"><?= lang('Demands Summary') ?></a>
                                </div>
                            </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="<?php echo base_url(); ?>/entityinfo" id="topnav-more" role="button">
                            <i data-feather="file-text"></i><span data-key="t-extra-pages"><?= lang('Entities & Deals') ?></span> <div class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-more">
                        <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="<?php echo base_url(); ?>/entityinfo" id="topnav-auth" role="button">
                                    <span data-key="t-authentication"><?= lang('Entity') ?></span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-auth">
                                    <a href="<?php echo base_url(); ?>/addnewentity" class="dropdown-item" data-key="t-login"><?= lang('Add New Entity') ?></a>
                                    <a href="<?php echo base_url(); ?>/entityinfo" class="dropdown-item" data-key="t-login"><?= lang('Entity Info') ?></a>
                                </div>
                        </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="<?php echo base_url(); ?>/dealsinfo" id="topnav-auth" role="button">
                                    <span data-key="t-authentication"><?= lang('Deals') ?></span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-auth">
                                    <a href="<?php echo base_url(); ?>/newdeals" class="dropdown-item" data-key="t-login"><?= lang('Add New Deals') ?></a>
                                    <a href="<?php echo base_url(); ?>/dealsinfo" class="dropdown-item" data-key="t-login"><?= lang('Deals Info') ?></a>
                                    <a href="<?php echo base_url(); ?>/dealssummary" class="dropdown-item" data-key="t-login"><?= lang('Deals Summary') ?></a>
                                </div>
                            </div>
                                <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="<?php echo base_url(); ?>/pfiinfo" id="topnav-utility" role="button">
                                    <span data-key="t-utility"><?= lang('PFIs') ?></span>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="<?php echo base_url(); ?>/colours" id="topnav-more" role="button">
                            <i data-feather="file-text"></i><span data-key="t-extra-pages"><?= lang('Colour Codes') ?></span> <div class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-more">
                        <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="<?php echo base_url(); ?>/addnewcolour" id="topnav-auth" role="button">
                                    <span data-key="t-authentication"><?= lang('Add New Colour Code') ?></span>
                                </a>
                        </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="<?php echo base_url(); ?>/colours" id="topnav-auth" role="button">
                                    <span data-key="t-authentication"><?= lang('Colour Code Info') ?></span>
                                </a>
                            </div>
                    </li>
                    <?php
}
?>
                </ul>
            </div>
            <i class="bi bi-list mobile-nav-toggle d-none"></i>
        </nav>
    </div>
</div>