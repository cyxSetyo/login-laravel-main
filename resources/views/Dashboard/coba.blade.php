<div class="col-xl-12 col-lg-7">
    <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div
            class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Earnings Overview</h6>
            <div class="dropdown no-arrow">
                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                </a>

            </div>
        </div>
        <!-- Card Body Isi Content-->
        <div class="card-body">
            <div class="chart-area">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No Ticket</th>
                            <th scope="col">Requestor</th>
                            <th scope="col">Divisi</th>
                            <th scope="col">Bisinis Unit</th>
                            <th scope="col">Extention</th>
                            <th scope="col">Alamat IP</th>
                            <th scope="col">Jenis</th>
                            <th scope="col">Kategori</th>
                            <th scope="col">Deskripsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dtTickets as $dtTicket)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $dtTicket->name }}</td>
                            <td>{{ $dtTicket->divisi }}</td>
                            
                        </tr> 
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>