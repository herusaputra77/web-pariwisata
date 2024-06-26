
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Stexo - Responsive Admin & Dashboard Template | Themesdesign</title>
    <meta content="Responsive admin theme build on top of Bootstrap 4" name="description" />
    <meta content="Themesdesign" name="author" />
    <link rel="shortcut icon" href="{{ asset('/') }}backEnd/images/favicon.ico">

    <link href="{{ asset('/') }}backEnd/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('/') }}backEnd/css/metismenu.min.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('/') }}backEnd/css/icons.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('/') }}backEnd/css/style.css" rel="stylesheet" type="text/css">

</head>

<body>

    <!-- Begin page -->
    <div class="home-btn d-none d-sm-block">
        <a href="/" class="text-dark"><i class="fas fa-home h2"></i></a>
    </div>

    <div class="mt-5 pt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="text-center mb-5">
                        <div class="mb-5">
                            {{-- <img src="{{ asset('/') }}backEnd/images/logo-dark.png" height="36" alt="logo"> --}}
                        </div>
                        <div class="maintenance-img mb-5">
                            <img src="{{ asset('/') }}backEnd/images/maintenance-img.png" alt="" class="img-fluid mx-auto d-block">
                        </div>
                        <h4>Site is Under Maintenance</h4>
                        <p>If several languages coalesce, the grammar of the resulting language is more simple and regular than that of the individual languages.</p>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row mt-4 align-items-center">

                <div class="col-lg-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <i class="mdi mdi-airplane-takeoff font-30"></i>
                            <h5 class="font-18 mb-3">Why is the Site Down?</h5>
                            <p class="text-muted mb-0">If several languages coalesce, the grammar of the resulting language is more simple and regular than that of the individual language.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <i class="mdi mdi-clock-alert font-30"></i>
                            <h5 class="mb-3 font-18">What is the Downtime?</h5>
                            <p class="text-muted mb-0">Everyone realizes why a new common language would be desirable one could refuse to pay expensive that translators.</p>
                        </div>
                    </div>

                </div>

                <div class="col-lg-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <i class="mdi mdi-email font-30"></i>
                            <h5 class="font-18 mb-3">Do you need Support?</h5>
                            <p class="text-muted mb-0">If several languages coalesce, the grammar of the resulting language is more simple and regular than that of the individual.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- END wrapper -->

    <!-- jQuery  -->
    <script src="{{ asset('/') }}backEnd/js/jquery.min.js"></script>
    <script src="{{ asset('/') }}backEnd/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('/') }}backEnd/js/metismenu.min.js"></script>
    <script src="{{ asset('/') }}backEnd/js/jquery.slimscroll.js"></script>
    <script src="{{ asset('/') }}backEnd/js/waves.min.js"></script>

    <!-- App js -->
    <script src="{{ asset('/') }}backEnd/js/app.js"></script>

</body>

</html>