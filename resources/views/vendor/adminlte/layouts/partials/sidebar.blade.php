<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
  

       

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
        <br>
           <!-- <li class="header">Selenggara Sistem</li>-->
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="{{ url('home') }}"><i class='fa fa-desktop'></i> <span>Laman Utama</span></a></li>
          
            <li class="treeview">
                <a href="#"><i class='fa fa-user'></i> <span>Personal</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#">Tukar Kata Laluan</a></li>
                  
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class='fa fa-gear'></i> <span>Operasi</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#">Senarai Ahli</a></li>
                     <li><a href="#">Pengurusan Berkelompok</a></li>
                   <li><a href="#">Wakil Koperasi</a></li>
                    <li><a href="#">Caruman</a></li>
                     <li><a href="#">Caruman Kelompok</a></li>
                      <li><a href="#">Pengeluaran</a></li>
                </ul>
            </li>
             <li class="treeview">
                <a href="#"><i class='fa fa-file-text-o'></i> <span>Laporan</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#">Laporan Keahlian</a></li>
                     <li><a href="#">Kutipan Keseluruhan</a></li>
                   <li><a href="#">Kutipan</a></li>
                    <li><a href="#">Pendaftaran Ahli</a></li>
                     <li><a href="#">Senarai Emel dan Telefon</a></li>
                      <li><a href="#">Rumusan Transaksi</a></li>
                      <li><a href="#">Senarai Baki Akaun</a></li>
                </ul>
            </li>
               <li class="treeview">
                <a href="#"><i class='fa fa-wrench'></i> <span>Pengurusan Sistem</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#">Pengurusan Pengguna</a></li>
                     <li><a href="#">Kumpulan Pengguna</a></li>
                   <li><a href="{{url('/parameters')}}">Parameter</a></li>
                    <li><a href="#">Audit Trail</a></li>
                     
                </ul>
            </li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
