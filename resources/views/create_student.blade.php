@extends('app')
@push('title')
    Student Register
@endpush

@push('navbar-title')
    LMS
@endpush

@section('content')

    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-12">
                <h1 class="mb-5">Student Register Form</h1>
            </div>
            <div class="col-6">
                <form action="{{ route('student.store_student') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Register Number : </label>
                        <input type="text" name="reg_no" placeholder="Enter registration number" required>

                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                            else.</small>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Full Name : </label>
                        <input type="text" name="name" class="form-control" placeholder="Enter name with initials" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Address : </label>
                        <input type="text" name="address" class="form-control" placeholder="Enter address  " required>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Birth of Date : </label>
                        <input type="date" name="birth_date" class="form-control" placeholder="Enter birth of date" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Phone Number : </label>
                        <input type="number" name="phone_number" class="form-control" placeholder="Enter your phone number" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Weight : </label>
                        <input type="number" name="weight" class="form-control" placeholder="Enter your weight" required>
                    </div>

                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>

                    <button type="submit" class="btn btn-success mt-3 w-100">Register</button>
                </form>
            </div>
            <div class="col-6">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Reg No</th>
                            <th scope="col">Full name</th>
                            <th scope="col">Address</th>
                            <th scope="col">BOD</th>
                            <th scope="col">Phone Number</th>
                            <th scope="col">Phone Number</th>Weight
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


@endsection

@push('script')
    <script>

    </script>
@endpush