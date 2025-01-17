<x-layout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <h2 class="text-center my-2">Fill the form below</h2>
                <form action="{{ route('submit') }}" method="POST">
                    @csrf
                    <div class="input-group mb-3 mt-3">
                        <span class="input-group-text" id="basic-addon1">
                            <i class="bi bi-person-fill"></i>
                        </span>
                        <input type="text" class="form-control" name="firstname" placeholder="FirstName"
                            aria-describedby="basic-addon1">
                    </div>

                    <div class="input-group mb-3 mt-3">
                        <span class="input-group-text" id="basic-addon1">
                            <i class="bi bi-person-fill"></i>
                        </span>
                        <input type="text" class="form-control" name="lastname" placeholder="LastName"
                            aria-describedby="basic-addon1">
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">
                            <i class="bi bi-gender-ambiguous"></i>
                        </span> <select class="form-select" name="gender" aria-label="Gender select">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>

                    <div class="input-group mb-3 mt-3">
                        <span class="input-group-text" id="basic-addon1">
                            <i class="bi bi-people-fill"></i>
                        </span>
                        <input type="text" class="form-control" name="fathername" placeholder="Your Father Name"
                            aria-describedby="basic-addon1">
                    </div>

                    <div class="input-group mb-3 mt-3">
                        <span class="input-group-text" id="basic-addon1">
                            <i class="bi bi-people-fill"></i></span>
                        <input type="text" class="form-control" name="mothername" placeholder="Your Mother Name"
                            aria-describedby="basic-addon1">
                    </div>

                    <div class="input-group mb-3 mt-3">
                        <span class="input-group-text" id="basic-addon1">
                            <i class="bi bi-people-fill"></i></span>
                        <input type="text" class="form-control" name="brothername" placeholder="Your Brother Name"
                            aria-describedby="basic-addon1">
                    </div>

                    <div class="input-group mb-3 mt-3">
                        <span class="input-group-text" id="basic-addon1">
                            <i class="bi bi-people-fill"></i></span>
                        <input type="text" class="form-control" name="sistername" placeholder="Your Sister Name"
                            aria-describedby="basic-addon1">
                    </div>

                    <div class="input-group mb-3 mt-3">
                        <span class="input-group-text" id="basic-addon1">Date Of birth
                        </span> <input type="text" class="form-control" name="dob" placeholder="YYYY-MM-DD"
                            aria-describedby="basic-addon1">
                    </div>

                    <div class="input-group mb-3 mt-3">
                        <textarea name="about" cols="70" rows="2" placeholder="About Yourself"></textarea>
                    </div>

                    <div class="row">
                        <button type="submit" class="btn btn-primary ">Submit</button>
                    </div>
                </form>
            </div>
        </div>

</x-layout>
