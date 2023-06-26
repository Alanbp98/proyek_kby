<div id="app">
    <div id="sidebar" class='active'>
        <div class="sidebar-wrapper active">
<div class="sidebar-header">
    <img src="dist/assets/images/logo.svg" alt="" srcset="">
</div>
<div class="sidebar-menu">
    <ul class="menu">
        
        <li class="sidebar-item {{ request()->is('dashboard-donatur') ? 'active' : '' }} ">
            <a href="dashboard-donatur" class='sidebar-link'>
                <i data-feather="home" width="20"></i> 
                <span>Dashboard</span>
            </a>
        </li>

        <li class="sidebar-item  has-sub">
            <a href="#" class='sidebar-link'>
                <i data-feather="triangle" width="20"></i> 
                <span>Data Master</span>
            </a>
            <ul class="submenu ">
                <li>
                    <a href="">Data Obat</a>
                </li>                       
                <li>                       
                <li>
                    <a href="">Data Member</a>
                </li>
            </ul>
        </li>

        <li class="sidebar-item ">
            <a href="#" class='sidebar-link'>
                <i data-feather="briefcase" width="20"></i> 
                <span>Rekap Pembelian</span>
            </a>
        </li>
                
        <li class="sidebar-item {{ request()->is('member-table') ? 'active' : '' }} ">
            <a href="member-table" class='sidebar-link'>
                <i data-feather="file-text" width="20"></i> 
                <span>Pengelolaan Chat</span>
            </a>                  
        </li>      
    </ul>
</div>