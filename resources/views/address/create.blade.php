<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Address Info</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h4 class="text-center mt-5">set address</h4>
        <form action="{{ route('address.store') }}" method="POST">
            @csrf
            {{-- village  field --}}
            <div class="row mt-3">
                <div class="col-md-2">
                    <label for="village">Village :</label>
                </div>
                <div class="col-md-4">
                    <input type="text" name="village" id="village" class="form-control">
                </div>
                <div class="col-md-4">
                    @error('village')
                        <small class="alert alert-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            {{-- union field --}}
            <div class="row mt-3">
                <div class="col-md-2">
                    <label for="union">Union :</label>
                </div>
                <div class="col-md-4">
                    <input type="text" name="union" id="union" class="form-control">
                </div>
                <div class="col-md-4">
                    @error('union')
                        <small class="alert alert-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            {{-- upazila --}}
            <div class="row mt-3">
                <div class="col-md-2">
                    <label for="upazila">Upazila :</label>
                </div>
                <div class="col-md-4">
                    <input type="text" name="upazila" id="upazila" class="form-control">
                </div>
                <div class="col-md-4">
                    @error('upazila')
                        <small class="alert alert-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            {{-- district --}}
            <div class="row mt-3">
                <div class="col-md-2">
                    <label for="district">District :</label>
                </div>
                <div class="col-md-4">
                    <input type="text" name="district" class="form-control">
                </div>
                <div class="col-md-4">
                    @error('district')
                        <small class="alert alert-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            {{-- division --}}
            <div class="row mt-3">
                <div class="col-md-2">
                    <label for="division">Division :</label>
                </div>
                <div class="col-md-4">
                    <select class="form-select" aria-label="Default select example" name="division" id="division">
                        <option selected disabled>select Division</option>
                        <option value="dhaka">Dhaka</option>
                        <option value="mymenshing">Mymenshing</option>
                        <option value="feni">Feni</option>
                    </select>
                </div>
                <div class="col-md-4">
                    @error('division')
                        <small class="alert alert-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            {{-- country --}}
            <div class="row mt-3">
                <div class="col-md-2">
                    <label for="country">Country :</label>
                </div>
                <div class="col-md-4">
                    <input type="text" name="country" id="country">
                    <div class="mt-3">
                        <button type="reset" class="btn btn-warning">Reset</button>
                        <button type="submit" class="btn btn-info">Submit</button>
                    </div>
                </div>
                <div class="col-md-4">
                    @error('country')
                        <small class="alert alert-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
        </form>
    </div>
</body>

</html>
