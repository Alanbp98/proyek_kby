<div id="app">
    <div id="sidebar" class='active'>
        <div class="sidebar-wrapper active">
<div class="sidebar-header">
    <img src="dist/assets/images/logo.svg" alt="" srcset="">
</div>
<div class="sidebar-menu">
    <ul class="menu">
        
        <li class="sidebar-item {{ request()->is('dashboard-donatur*') ? 'active' : '' }} ">
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
                <li class='sidebar-title'>Data Obat</li>
                <li>
                    <a href="">Buat Data Obat</a>
                </li>                       
                <li>
                    <a href="">Ubah Data Obat</a>
                </li>                        
                <li>
                    <a href="">Lihat Data Obat</a>
                </li>

                <li class='sidebar-title'>Data Member</li>
                <li>
                    <a href="">Buat Data Member</a>
                </li>                       
                <li>
                    <a href="">Ubah Data Member</a>
                </li>                        
                <li>
                    <a href="">Lihat Data Member</a>
                </li>
            </ul>
        </li>

        <li class="sidebar-item  has-sub">
            <a href="#" class='sidebar-link'>
                <i data-feather="briefcase" width="20"></i> 
                <span>Rekap Pembelian</span>
            </a>
            <ul class="submenu ">   
                <li>
                    <a href="component-extra-avatar.html">Pembelian</a>
                </li>                       
                <li>
                    <a href="component-extra-divider.html">Rekap Pembelian</a>
                </li>      
            </ul>
        </li>
                
        <li class="sidebar-item {{ request()->is('member-table*') ? 'active' : '' }} has-sub">
            <a href="#" class='sidebar-link'>
                <i data-feather="file-text" width="20"></i> 
                <span>Pengelolaan Chat</span>
            </a>                   
            <ul class="submenu ">                        
                <li>
                    <a href="member-table">Informasi Member</a>
                </li>
            </ul>                    
        </li>      
    </ul>
</div>