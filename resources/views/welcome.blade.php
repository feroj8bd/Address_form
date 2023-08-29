<!DOCTYPE html>
<html>

<head>
    <title>Address</title>
    <!-- boostrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>

    <div class="container">
        <h4 class="text-center mt-5">Welcome to our Address System</h4>
       <div>
        <a href="{{ route('address.create') }}" class="btn btn-success">Add Address</a>
       </div>
    </div>
</body>

</html>
