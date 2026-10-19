<!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="{{ asset('template/css/bootstrap.min.css') }}"/>

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="{{ asset('template/css/font-awesome.min.css') }}">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="{{ asset('template/css/style.css') }}"/>

    <!-- Admin stylesheet -->
    <style>
        body { background: #F4F5F8; }

        /* Header */
        #admin-header { position: fixed; top: 0; left: 0; right: 0; height: 70px; background: #15161D; z-index: 20; padding: 0 20px; }
        #admin-header .header-logo { float: left; margin: 0; line-height: 70px; }
        #admin-header .header-logo img { height: 40px; }
        #admin-header .header-user { float: right; line-height: 70px; color: #FFF; }
        #admin-header .header-user a { color: #FFF; margin-left: 15px; }
        #admin-header .header-user a:hover { color: #D10024; }

        /* Sidebar */
        #admin-sidebar { position: fixed; top: 70px; bottom: 0; left: 0; width: 230px; background: #1E1F29; padding-top: 20px; overflow-y: auto; }
        #admin-sidebar .sidebar-title { color: #8D99AE; font-size: 11px; text-transform: uppercase; padding: 10px 25px; }
        #admin-sidebar ul { list-style: none; padding: 0; margin: 0; }
        #admin-sidebar ul li a { display: block; color: #B9BABC; padding: 12px 25px; border-left: 3px solid transparent; }
        #admin-sidebar ul li a i { width: 20px; margin-right: 10px; }
        #admin-sidebar ul li a:hover, #admin-sidebar ul li.active a { color: #FFF; background: #15161D; border-left-color: #D10024; }

        /* Konten */
        #admin-content { margin-left: 230px; padding: 100px 30px 30px; min-height: 100vh; }
        #admin-content .page-title { margin: 0 0 25px; }
        .admin-box { background: #FFF; border: 1px solid #E4E7ED; padding: 20px; margin-bottom: 30px; }
        .admin-box .box-title { font-size: 16px; text-transform: uppercase; margin: 0 0 20px; }

        /* Kartu statistik */
        .stat-card { background: #FFF; border: 1px solid #E4E7ED; padding: 20px; margin-bottom: 30px; }
        .stat-card i { float: right; font-size: 36px; color: #D10024; }
        .stat-card h3 { margin: 0 0 5px; }
        .stat-card p { margin: 0; color: #8D99AE; text-transform: uppercase; font-size: 12px; }

        /* Tabel & form */
        .table > thead > tr > th { text-transform: uppercase; font-size: 12px; color: #2B2D42; }
        .table img { width: 50px; }
        .form-group label { font-weight: 500; }
        .modal-header { background: #15161D; color: #FFF; }
        .modal-header .close { color: #FFF; opacity: 1; }

        /* Footer */
        #admin-footer { margin-left: 230px; padding: 15px 30px; border-top: 1px solid #E4E7ED; background: #FFF; color: #8D99AE; }

        /* Responsive */
        @media only screen and (max-width: 991px) {
            #admin-sidebar { position: static; width: auto; margin-top: 70px; padding-top: 0; }
            #admin-content { margin-left: 0; padding-top: 30px; }
            #admin-footer { margin-left: 0; }
        }
    </style>
