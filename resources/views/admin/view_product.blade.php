<!DOCTYPE html>
<html>

<head>
    @include('admin.css')
    <style>
        .div_deg{
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 60px;
        }

        .table_deg{
            border: 2px solid yellow;
        }

        th{
            background-color: skyblue;
            color: white;
            font-size: 19px;
            font-weight: bold;
            padding: 15px;
        }

        td{
            border: 1px solid skyblue;
            text-align: center;
        }
    </style>
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

                    {{-- @include('admin.body') --}}
                    <div class="div_deg">
                        <table class="table_deg">
                            <tr>
                                <th>Product Title</th>
                                <th>Description</th>
                                <th>Category</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Image</th>
                            </tr>

                            @foreach ($product as $products )
                            {{-- we wrote product and products to make several pages(1,2,3....) --}}
                                
                            <tr>
                                {{-- $products-> name exactly as in db --}}
                                <td>{{ $products->title }}</td>
                                <td>{{ $products->description }}</td>
                                <td>{{ $products->category }}</td>
                                <td>{{ $products->price }}</td>
                                <td>{{ $products->quantity }}</td>
                                
                                <td>
                                    <img height="120" width="120" src="products/{{ $products->image }}" alt="">
                                </td>
                                
                            </tr>

                            @endforeach
                            
                        </table>
                    </div>

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
