@extends('layouts.homelayout')


@section('content')
    <div class="container-fluid">
        <h2 class="text-uppercase text-primary">bidder registration</h2>

        <div class="row p-5">
            <div class="col-md-3">
                <h3>Form Sections</h3>
                <a href="">Login Information</a>
            </div>
            <div class="col-md-9">
                <form action="" method="post" class="border rounded shadow">
                    <div class="row">
                        <div class="col-12 align-items-center p-5">

                            <div class="form-input-group mb-4">
                                <h3>Registration Type</h3>
                                <div class="form-check">
                                    <input class="form-check-input p-2 rounded" type="checkbox" name="type" id="individual"
                                        value="individual">
                                    <label class="form-check-label fs-5 ms-2" for="individual">
                                        Individual
                                    </label>
                                </div>

                                <div class="form-check mt-1">
                                    <input class="form-check-input p-2 rounded" type="checkbox" name="type" id="company"
                                        value="company">
                                    <label class="form-check-label fs-5 ms-2" for="company">
                                        Company
                                    </label>
                                </div>

                            </div>
                            <div class="form-input-group mb-4 w-50">
                                <label for="form-label fw-bold text-black">User Name</label>
                                <input type="text" name="password" class="form-control" id=""
                                    placeholder="Enter a username">
                                <span class="text-muted">Limit: 15 Character</span>
                            </div>
                            <div class="form-input-group mb-4 w-75">
                                <label for="form-label fw-bold text-black">Security Question</label>
                                <input type="text" name="password" class="form-control" id="">
                                <span class="text-muted">Security Questions must be at least 7 characters long.</span>
                            </div>
                            <div class="form-input-group mb-4 w-75">
                                <label for="form-label fw-bold text-black">Answer</label>
                                <input type="text" name="password" class="form-control" id="">
                                <span class="text-muted">Answers must be at least 5 characters and cannot be same as
                                    security question.</span>
                            </div>
                            <div class="">
                                <button class="bg-secondary btn fw-bold text-white ms-auto d-block p-3">Confirm Login
                                    Information</button>

                            </div>



                        </div>


                    </div>
                </form>

                <div class="mt-2">
                    <button
                    class="btn btn-secondary text-white border border-3 px-5 py-3 shadow text-bold mb-4">Submit</button>
                <button
                    class="btn btn-primary text-white border  border-3 px-5 py-3 shadow text-bold mb-4">Cancel</button>
                </div>
            </div>
        </div>
        
    </div>

@endsection