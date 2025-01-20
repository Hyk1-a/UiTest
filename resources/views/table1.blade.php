<x-layout>
    <div class="container-fluid">
        <h2 class="text-center my-4">Table Design</h2>
        <div class="table-responsive " id="myTable">
            <table class="table table-hover table-borderless justify-content-center table-striped shadow-border">
                <thead class="justify-content-between table-secondary">
                    <tr>
                        <th class="col-1 text-decoration-underline">No.</th>
                        <th colspan="2" class="text-decoration-underline"><i class="bi bi-person-fill me-1"></i>Names
                        </th>
                        <th rowspan="2" class="col-1 align-top text-decoration-underline"><i
                                class="bi bi-gender-ambiguous me-1"></i>Gender</th>
                        <th colspan="4" class="text-decoration-underline"><i
                                class="bi bi-people-fill me-1"></i>Family
                            Names</th>
                        <th colspan="2" class="text-decoration-underline">Personal Details</th>
                    </tr>

                    <tr>
                        <th></th>
                        <th class="col-1">First Names</th>
                        <th class="col-1">Last Names</th>
                        <th class="col-1">Father Names</th>
                        <th class="col-1">Mother Names</th>
                        <th class="col-1">Brother Names</th>
                        <th class="col-1">Sister Names</th>
                        <th class="col-3"><i class="bi bi-info-circle me-1"></i>About</th>
                        <th class="col-1"><i class="bi bi-cake-fill me-1"></i>Birthday</th>
                    </tr>
                </thead>

                <tbody class="table-group-divider">
                    @foreach ($data ?? [] as $item)
                        <tr>
                            <td class="increment-number"></td>
                            <td>{{ $item->firstname }}</td>
                            <td>{{ $item->lastname }}</td>
                            <td>{{ $item->gender }}</td>
                            <td>{{ $item->fathername }}</td>
                            <td>{{ $item->mothername }}</td>
                            <td>{{ $item->brothername }}</td>
                            <td>{{ $item->sistername }}</td>
                            <td>{{ \Illuminate\Support\Str::words($item->about, 5, ' ...') }}</td>
                            <td>{{ \Carbon\Carbon::parse($item->dob)->format('d-m-Y') }}</td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
            <div class="d-flex justify-content-center">
                {{ $data->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const incrementNumberCells = document.querySelectorAll('.increment-number');
            let count = {{ ($data->currentPage() - 1) * $data->perPage() + 1 }};
            incrementNumberCells.forEach(cell => {
                cell.innerText = count++;
            });
        });
    </script>
</x-layout>
