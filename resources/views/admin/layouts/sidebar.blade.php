<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                        <i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview menu-open">
                <a href="#">
                    <i class="fa fa-map"></i> <span>Quốc gia</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('admin.pages.country.createCountry') }}"><i class="fa fa-circle-o"></i> Thêm quốc gia</a></li>
                    <li class="active"><a href="{{ route('admin.pages.country.listCountries') }}"><i class="fa fa-circle-o"></i> Danh sách quốc gia</a>
                    </li>
                </ul>
            </li>
            <li class="treeview menu-open">
                <a href="#">
                    <i class="fa fa-book"></i> <span>Danh mục</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('admin.pages.category.createCategory') }}"><i class="fa fa-circle-o"></i> Thêm danh mục</a></li>
                    <li class="active"><a href="{{ route('admin.pages.category.listCategory') }}"><i class="fa fa-circle-o"></i> Danh sách danh mục</a>
                    </li>
                </ul>
            </li>
            <li class="treeview menu-open">
                <a href="#">
                    <i class="fa fa-book"></i> <span>Thể loại</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('admin.pages.genre.createGenre') }}"><i class="fa fa-circle-o"></i> Thêm thể loại</a></li>
                    <li class="active"><a href="{{ route('admin.pages.genre.listGenre') }}"><i class="fa fa-circle-o"></i> Danh sách thể loại</a>
                    </li>
                </ul>
            </li>
            <li class="treeview menu-open">
                <a href="#">
                    <i class="fa fa-book"></i> <span>Năm</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('admin.pages.year.createYear') }}"><i class="fa fa-circle-o"></i> Thêm năm</a></li>
                    <li><a href="{{ route('admin.pages.year.listYears') }}"><i class="fa fa-circle-o"></i> Danh sách năm</a>
                    </li>
                </ul>
            </li>
            <li class="treeview menu-open">
                <a href="#">
                    <i class="fa fa-tv"></i> <span>Phim</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('admin.pages.movie.createMovie') }}"><i class="fa fa-circle-o"></i> Tạo phim</a></li>
                    <li class="active"><a href="{{ route('admin.pages.movie.listMovies') }}"><i class="fa fa-circle-o"></i> Danh sách phim</a>
                    </li>
                </ul>
            </li>
            <li class="treeview menu-open">
                <a href="#">
                    <i class="fa fa-film"></i> <span>Tập phim</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('admin.pages.episode.createEpisode') }}"><i class="fa fa-circle-o"></i> Tạo tập phim</a></li>
                    <li class="active"><a href="{{ route('admin.pages.movie.listEpisodes') }}"><i class="fa fa-circle-o"></i> Danh sách tập phim</a>
                    </li>
                </ul>
            </li>
            <li class="treeview menu-open">
                <a href="#">
                    <i class="fa fa-user"></i> <span>Tài khoản</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
                    <li class="active"><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a>
                    </li>
                </ul>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
