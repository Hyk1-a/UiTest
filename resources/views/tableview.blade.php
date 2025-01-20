<x-layout>
    <div class="container-fluid">
        <h2 class="text-center my-4">Details for {{ $showid->firstname }} {{ $showid->lastname }}</h2>
        <div class="table-responsive" id="myTable">
            <table class="table table-hover table-borderless justify-content-center table-striped shadow-border">
                <thead class="justify-content-between table-secondary">
                    <tr>
                        <th class="col-1 text-decoration-underline">No.</th>
                        <th colspan="2" class="text-decoration-underline"><i class="bi bi-person-fill me-1"></i>Names
                        </th>
                        <th class="col-1 align-top text-decoration-underline"><i
                                class="bi bi-gender-ambiguous me-1"></i>Gender</th>
                        <th colspan="4" class="text-decoration-underline"><i
                                class="bi bi-people-fill me-1"></i>Family Names</th>
                        <th colspan="2" class="text-decoration-underline">Personal Details</th>
                    </tr>

                    <tr>
                        <th></th>
                        <th class="col-1">First Name</th>
                        <th class="col-1">Last Name</th>
                        <th class="col-1">Gender</th>
                        <th class="col-1">Father Name</th>
                        <th class="col-1">Mother Name</th>
                        <th class="col-1">Brother Name</th>
                        <th class="col-1">Sister Name</th>
                        <th class="col-3"><i class="bi bi-info-circle me-1"></i>About</th>
                        <th class="col-1"><i class="bi bi-cake-fill me-1"></i>Birthday</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>{{ $showid->firstname }}</td>
                        <td>{{ $showid->lastname }}</td>
                        <td>{{ $showid->gender }}</td>
                        <td>{{ $showid->fathername }}</td>
                        <td>{{ $showid->mothername }}</td>
                        <td>{{ $showid->brothername }}</td>
                        <td>{{ $showid->sistername }}</td>
                        <td>{{ $showid->about }}</td>
                        <td>{{ \Carbon\Carbon::parse($showid->dob)->format('d-m-Y') }}</td>
                    </tr>
                </tbody>
            </table>
            <div class="d-flex justify-content-end">
                <a href="{{ route('form', ['page' => request()->get('page')]) }}" class="btn btn-outline-secondary">&larr; Back</a>

            </div>
        </div>
    </div>
</x-layout>
