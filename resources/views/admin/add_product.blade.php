<!DOCTYPE html>
<html>

<head>
    @include('admin.css')

    <style>
        .div_deg{
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 60px;
        }

        h1{
            color: white;
        }

        label{
            display: inline-block;
            width: 250px;
            font-size: 18px !important;
            color: white !important;
        }

        input[type="text"]{
            width: 200px;
            height: 50px;
        }
        .input_deg{
            /* margin: 10px 0 10px 0; */
            padding: 15px;
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

                    <h1>ADD PRODUCT</h1>

                    <div class="div_deg">
                        {{-- enctype="multipart/form-data" to upload image --}}
                        <form action="{{ url('upload_product') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                            <div class="input_deg">
                                <label for="">Product Title</label>
                                <input type="text" name="title" required>
                            </div>

                            <div class="input_deg">
                                <label for="">Description</label>
                                <textarea name="description" id="" cols="30" rows="3" required></textarea>
                            </div>

                            <div class="input_deg">
                                <label for="">Product Price</label>
                                <input type="text" name="price">
                            </div>

                            <div class="input_deg">
                                <label for="">Quantity</label>
                                <input type="number" name="quantity">
                            </div>

                            <div class="input_deg">
                                <label for="">Product Category</label>
                                <select name="category" id="" required>
                                    <option value="">Select a Option</option>

                                    @foreach ($category as $category)
                                    
                                    <option value="{{ $category->category_name }}">{{ $category->category_name }}</option>
                                    {{-- category_name is from the database --}}

                                    @endforeach
                                </select>
                            </div>

                            <div class="input_deg">
                                <label for="">Product Image</label>
                                <input type="file" name="image">
                            </div>

                            <div class="input_deg">
                                <input class="btn btn-success" type="submit" value="Add Product">
                            </div>

                        </form>
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
