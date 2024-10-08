<!DOCTYPE html>
<html>

<head>
    @include('admin.css')
</head>

<body>

    @include('admin.header')

    <div class="d-flex align-items-stretch">

        <!-- Sidebar Navigation-->
        @include('admin.sidebar')
        <!-- Sidebar Navigation end-->

        <div class="page-content">
            <div class="page-header">
                <div class="container-fluid">

                    @include('admin.body')

                </div>
            </div>
        </div>
        <!-- JavaScript files-->

        <!-- Include jQuery -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <!-- Include Bootstrap JS -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

        <script src="admincss/vendor/jquery/jquery.min.js"></script>
        <script src="admincss/vendor/popper.js/umd/popper.min.js"></script>
        <script src="admincss/vendor/bootstrap/js/bootstrap.min.js"></script>
        <script src="admincss/vendor/jquery.cookie/jquery.cookie.js"></script>
        <script src="admincss/vendor/chart.js/Chart.min.js"></script>
        <script src="admincss/vendor/jquery-validation/jquery.validate.min.js"></script>
        <script src="admincss/js/charts-home.js"></script>
        <script src="admincss/js/front.js"></script>
</body>

</html>
