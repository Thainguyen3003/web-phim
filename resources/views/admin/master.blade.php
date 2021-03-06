<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin web phim</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{ url('css/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ url('css/bower_components/font-awesome/css/font-awesome.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ url('css/bower_components/Ionicons/css/ionicons.min.css') }}">
    <!-- jvectormap -->
    <link rel="stylesheet" href="{{ url('css/bower_components/jvectormap/jquery-jvectormap.css') }}">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ url('css/bower_components/select2/dist/css/select2.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ url('css/dist/css/AdminLTE.min.css') }}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{ url('css/dist/css/skins/_all-skins.min.css') }}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        @include('admin.layouts.header')

        @include('admin.layouts.sidebar')

        @yield('content')

        @include('admin.layouts.footer')

        <div class="control-sidebar-bg"></div>

    </div>
    <!-- ./wrapper -->

    <!-- jQuery 3 -->
    <script src="{{ url('css/bower_components/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="{{ url('css/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- FastClick -->
    <script src="{{ url('css/bower_components/fastclick/lib/fastclick.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ url('css/dist/js/adminlte.min.js') }}"></script>
    <!-- Sparkline -->
    <script src="{{ url('css/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js') }}"></script>
    <!-- jvectormap  -->
    <script src="{{ url('css/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
    <script src="{{ url('css/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <!-- SlimScroll -->
    <script src="{{ url('css/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
    <!-- ChartJS -->
    <script src="{{ url('css/bower_components/chart.js/Chart.js') }}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ url('css/dist/js/pages/dashboard2.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ url('css/dist/js/demo.js') }}"></script>
    <!-- Select2 -->
    <script src="{{ url('css/bower_components/select2/dist/js/select2.full.min.js') }}"></script>
    <script type="text/javascript">
        function ChangeToSlug() {

            var slug;

            //L???y text t??? th??? input title 
            slug = document.getElementById("slug").value;
            slug = slug.toLowerCase();
            //?????i k?? t??? c?? d???u th??nh kh??ng d???u
            slug = slug.replace(/??|??|???|???|??|??|???|???|???|???|???|??|???|???|???|???|???/gi, 'a');
            slug = slug.replace(/??|??|???|???|???|??|???|???|???|???|???/gi, 'e');
            slug = slug.replace(/i|??|??|???|??|???/gi, 'i');
            slug = slug.replace(/??|??|???|??|???|??|???|???|???|???|???|??|???|???|???|???|???/gi, 'o');
            slug = slug.replace(/??|??|???|??|???|??|???|???|???|???|???/gi, 'u');
            slug = slug.replace(/??|???|???|???|???/gi, 'y');
            slug = slug.replace(/??/gi, 'd');
            //X??a c??c k?? t??? ?????t bi???t
            slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
            //?????i kho???ng tr???ng th??nh k?? t??? g???ch ngang
            slug = slug.replace(/ /gi, "-");
            //?????i nhi???u k?? t??? g???ch ngang li??n ti???p th??nh 1 k?? t??? g???ch ngang
            //Ph??ng tr?????ng h???p ng?????i nh???p v??o qu?? nhi???u k?? t??? tr???ng
            slug = slug.replace(/\-\-\-\-\-/gi, '-');
            slug = slug.replace(/\-\-\-\-/gi, '-');
            slug = slug.replace(/\-\-\-/gi, '-');
            slug = slug.replace(/\-\-/gi, '-');
            //X??a c??c k?? t??? g???ch ngang ??? ?????u v?? cu???i
            slug = '@' + slug + '@';
            slug = slug.replace(/\@\-|\-\@|\@/gi, '');
            //In slug ra textbox c?? id ???slug???
            document.getElementById('convert_slug').value = slug;
        }
    </script>

    <script>
        $(function() {
            //Initialize Select2 Elements
            $('.select2').select2();
        })
    </script>

</body>

</html>
