<x-layout>
    <section class="col-sm-6 col-md-6 col-lg-4">
        <div class="form-group m-2">
            <div class="input-group" id="datepicker">
                <label for="datepicker" class="me-2">注文日</label>
                <input id="datepicker" type="text" placeholder="年 / 月 / 日"
                    class="form-control form-control-sm text-center">
                <span class="input-group-text">
                    <i class="bi bi-calendar"></i>
                </span>
                <p class="mx-2 my-0">~</p>
                <input id="datepicker" type="text" placeholder="年 / 月 / 日"
                    class="form-control form-control-sm text-center">
                <span class="input-group-text">
                    <i class="bi bi-calendar"></i>
                </span>
            </div>
        </div>

        <div class="container-fluid">
            <div class="form-inline mb-2">
                <label for="manufactureNumber" class="me-2">製造番号:</label>
                <input type="text" id="manufactureNumber" class="form-control form-control-sm flex-grow-1" />
            </div>
            <div class="form-inline">
                <label for="webOrderNumber" class="me-2">ウェブ注文番号:</label>
                <input type="text" id="webOrderNumber" class="form-control form-control-sm flex-grow-1" />
            </div>
        </div>
    </section>
    <div class="container-fluid mt-5">
        <div class="table-responsive">
            <table id="myTable" class="table table-bordered border-dark">
                <thead class="justify-content-between">
                    <tr style="height: 100px;">
                        <th colspan="1" rowspan="3" class="col-1 ">テスト1</th>
                        <th colspan="3" rowspan="2">テスト2</th>
                        <th colspan="3" rowspan="2">テスト3</th>
                        <th colspan="1" rowspan="2"class="vertical-text" style="width: 2%"> テスト4</th>
                        <th colspan="1" rowspan="2" class="col-1">テスト5</th>
                        <th colspan="1" rowspan="2" class="col-1">テスト6</th>
                        <th colspan="1" rowspan="2"class="vertical-text" style="width: 2%">テスト7</th>
                        <th colspan="1" rowspan="2"class="vertical-text" style="width: 2%">テスト8</th>
                        <th colspan="2" rowspan="2">テスト9</th>
                    </tr>
                    <tr>
                    </tr>
                    <tr>
                        <th colspan="3" class="col-1">主題1</th>
                        <th class="col-1">主題2</th>
                        <th class="col-1">主題3</th>
                        <th class="col-1">主題4</th>
                        <th colspan="5" class="col-1">主題5</th>
                        <th colspan="2"class="col-1">主題6</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- first row --}}
                    <tr>
                        <td rowspan="2" class=" align-middle"><button
                                class="border-0 rounded-pill bg-secondary">キャンセル</button></td>
                        <td colspan="3">注文番号 .</td>
                        <td colspan="3">フライドチキン(10124)</td>
                        <td colspan="1">1</td>
                        <td colspan="1"></td>
                        <td colspan="1"></td>
                        <td colspan="1"></td>
                        <td colspan="1"></td>
                        <td colspan="2"></td>
                    </tr>
                    <tr>
                        <td colspan="3"> 12-2-2024 1:20:21</td>
                        <td colspan="1">002</td>
                        <td colspan="1">(007)チキン</td>
                        <td colspan="1">1212</td>
                        <td colspan="5"></td>
                        <td colspan="1"></td>
                    </tr>
                    {{-- second row --}}
                    <tr>
                        <td rowspan="2" class=" align-middle">キャンセル</td>
                        <td colspan="3">注文番号 .</td>
                        <td colspan="3">フライドチキン(10124)</td>
                        <td colspan="1">2</td>
                        <td colspan="1"></td>
                        <td colspan="1"></td>
                        <td colspan="1"></td>
                        <td colspan="1"></td>
                        <td colspan="2"></td>
                    </tr>
                    <tr>
                        <td colspan="3"> 12-2-2024 1:20:21</td>
                        <td colspan="1">002</td>
                        <td colspan="1">(007)チキン</td>
                        <td colspan="1">1212</td>
                        <td colspan="5"></td>
                        <td colspan="1"></td>
                    </tr>
                    {{-- third row --}}
                    <tr>
                        <td rowspan="2" class=" align-middle"><button
                                class="border-0 rounded-pill bg-secondary">キャンセル</button></td>
                        <td colspan="3">注文番号 .</td>
                        <td colspan="3">フライドチキン(10124)</td>
                        <td colspan="1">1</td>
                        <td colspan="1"></td>
                        <td colspan="1"></td>
                        <td colspan="1"></td>
                        <td colspan="1"></td>
                        <td colspan="2"></td>
                    </tr>
                    <tr>
                        <td colspan="3"> 12-2-2024 1:20:21</td>
                        <td colspan="1">002</td>
                        <td colspan="1">(007)チキン</td>
                        <td colspan="1">1212</td>
                        <td colspan="5"></td>
                        <td colspan="1"></td>
                    </tr>
                    <tr>
                        <td rowspan="2" class=" align-middle">キャンセル</td>
                        <td colspan="3">注文番号 .</td>
                        <td colspan="3">フライドチキン(10124)</td>
                        <td colspan="1">2</td>
                        <td colspan="1"></td>
                        <td colspan="1"></td>
                        <td colspan="1"></td>
                        <td colspan="1"></td>
                        <td colspan="2"></td>
                    </tr>
                    <tr>
                        <td colspan="3"> 12-2-2024 1:20:21</td>
                        <td colspan="q">002</td>
                        <td colspan="1">(007)チキン</td>
                        <td colspan="1">1212</td>
                        <td colspan="5"></td>
                        <td colspan="1"></td>
                    </tr>

                    <tr>
                        <td rowspan="2" class=" align-middle">キャンセル</td>
                        <td colspan="3">注文番号 .</td>
                        <td colspan="3">フライドチキン(10124)</td>
                        <td colspan="1">2</td>
                        <td colspan="1"></td>
                        <td colspan="1"></td>
                        <td colspan="1"></td>
                        <td colspan="1"></td>
                        <td colspan="2"></td>
                    </tr>
                    <tr>
                        <td colspan="3"> 12-2-2024 1:20:21</td>
                        <td colspan="1">002</td>
                        <td colspan="1">(007)チキン</td>
                        <td colspan="1">1212</td>
                        <td colspan="5"></td>
                        <td colspan="1"></td>
                    </tr>

                    <tr>
                        <td rowspan="2" class=" align-middle">キャンセル</td>
                        <td colspan="3">注文番号 .</td>
                        <td colspan="3">フライドチキン(10124)</td>
                        <td colspan="1">2</td>
                        <td colspan="1"></td>
                        <td colspan="1"></td>
                        <td colspan="1"></td>
                        <td colspan="1"></td>
                        <td colspan="2"></td>
                    </tr>
                    <tr>
                        <td colspan="3"> 12-2-2024 1:20:21</td>
                        <td colspan="1">002</td>
                        <td colspan="1">(007)チキン</td>
                        <td colspan="1">1212</td>
                        <td colspan="5"></td>
                        <td colspan="1"></td>
                    </tr>

                    <tr>
                        <td rowspan="2" class=" align-middle"><button
                                class="border-0 rounded-pill bg-secondary">キャンセル</button></td>
                        <td colspan="3">注文番号 .</td>
                        <td colspan="3">フライドチキン(10124)</td>
                        <td colspan="1">1</td>
                        <td colspan="1"></td>
                        <td colspan="1"></td>
                        <td colspan="1"></td>
                        <td colspan="1"></td>
                        <td colspan="2"></td>
                    </tr>
                    <tr>
                        <td colspan="3"> 12-2-2024 1:20:21</td>
                        <td colspan="1">002</td>
                        <td colspan="1">(007)チキン</td>
                        <td colspan="1">1212</td>
                        <td colspan="5"></td>
                        <td colspan="1"></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div id="paginationControls" class="mt-3"></div>
    </div>

    <script>
        $(document).ready(function() {
            const rowsPerPage = 10; // Rows per page
            const table = $('#myTable');
            const tbody = table.find('tbody');
            const rows = tbody.find('tr');
            const paginationControls = $('#paginationControls');

            // Function to display specific rows
            function displayRows(startIndex, endIndex) {
                rows.hide();
                rows.slice(startIndex, endIndex).show();
            }

            // Initialize pagination
            function setupPagination() {
                const totalRows = rows.length;
                const totalPages = Math.ceil(totalRows / rowsPerPage);
                paginationControls.empty();

                for (let i = 1; i <= totalPages; i++) {
                    const button = $(`<button class="btn btn-primary text-center mx-1">${i}</button>`);
                    button.on('click', function() {
                        const startIndex = (i - 1) * rowsPerPage;
                        const endIndex = startIndex + rowsPerPage;
                        displayRows(startIndex, endIndex);
                    });
                    paginationControls.append(button);
                }
            }

            // Initial Display
            displayRows(0, rowsPerPage);
            setupPagination();
        });
    </script>
</x-layout>
