<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="createTicketModal">Create Ticket</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form class="user" action="{{ route('postTicket') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="name" class="col-form-label">Requestor</label>
                                    <input type="text" name="name" class="form-control" id="requestor" placeholder="Your Name">
                                </div>

                                <select name="bisnisunit" class="form-select form-select-sm" aria-label=".form-select-sm example">
                                    <option selected>You'r Bisnis Unit</option>
                                    @foreach ($dtBisnisUnits as $dtBisnisunit)
                                    <option value="{{ $dtBisnisunit->bisnisunit }}">{{ $dtBisnisunit->bisnisunit }}</option>
                                    @endforeach
                                  </select>

                                  <div class="form-group">
                                    <select name="divisi" class="form-select form-select-sm" aria-label=".form-select-sm example">
                                      <option selected>You'r Divisi</option>
                                      @foreach ($dtDivisis as $dtDivisi)
                                      <option value="{{ $dtDivisi->divisi }}">{{ $dtDivisi->divisi }}</option>
                                      @endforeach
                                    </select>
                                  </div>



                                <div class="form-group">
                                    <label for="extention" class="col-form-label">Extention</label>
                                    <input type="text" name="extention" class="form-control" id="Extention" placeholder="Your Extention">
                                </div>
                                <div class="form-group">
                                    <label for="alamatip" class="col-form-label">Alamat IP</label>
                                    <input type="text" name="alamatip" class="form-control" id="alamatip" placeholder="Your Alamat IP">
                                </div>
                                
                                <div class="form-group">
                                    <label class="form-label select-label">Example label</label>
                                    <select name="jenis" class="form-select form-select-sm" aria-label=".form-select-sm example">
                                        <option selected>You'r Complain</option>
                                        
                                        <option value="REQUEST">REQUEST</option>
                                        <option value="COMPLAIN">COMPLAIN</option>
                                       
                                    </select>
                                </div>
                                
                                <div class="form-group">
                                    <label for="kategori" class="col-form-label">Kategori</label>
                                    <input type="text" name="kategori" class="form-control" id="Kategori" placeholder="Your Kategori">
                                </div>
                                <div class="form-group">
                                    <label for="deskripsi" class="col-form-label">Deskripsi</label>
                                    <input type="text" name="deskripsi" class="form-control" id="deskripsi" placeholder="Deskripsi singkat">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary ">Send Ticket</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-2 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Open</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $dtCountTickets }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-2 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Confirm </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-2 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1"> On Prosess
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                                </div>
                                <div class="col">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-2 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Close</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-2 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                ALL Ticket</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    </div>

    
    <!-- ACTION MODAL Edit -->
    <div class="modal fade" id="modalEdit" aria-labelledby="modalEdit" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalEditLabel">Update Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondery" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save Change</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Content Row -->

    <div class="row">
        <!-- Area Chart -->
        <div class="col-xl-12 col-lg-7">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Data Ticket</h6>
                    <div>
                        <button class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#addModal" >
                            <i class="fas fa-download fa-sm text-white-50"></i> Create Ticket
                        </button>
                        <button class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#modalEdit" >
                            <i class="fas fa-download fa-sm text-white-50"></i> Edit
                        </button>
                        <button class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#modalDelete" >
                            <i class="fas fa-download fa-sm text-white-50"></i> Delete
                        </button>
                    </div>

                </div>

                
                <!-- Card Body Isi Content-->
                <div class="card-body">
                    <div class="panel-body table-responsive">
                        <table class="table table-bordered table-hover" id="example">
                            <thead>
                                <tr>
                                    <th scope="col">No Ticket</th>
                                    <th scope="col">Requestor</th>
                                    <th scope="col">Bisnis Unit</th>
                                    <th scope="col">Extention</th>
                                    <th scope="col">Alamat IP</th>
                                    <th scope="col">Jenis</th>
                                    <th scope="col">Kategori</th>
                                    <th scope="col">Deskripsi</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Content Show Data DB -->
                                @foreach ($dataTicket as $dtTicket)
                                <tr class="">
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $dtTicket->name }}</td>
                                    <td>{{ $dtTicket->bisnisunit }}</td>
                                    <td>{{ $dtTicket->extention }}</td>
                                    <td>{{ $dtTicket->alamatip }}</td>
                                    <td>{{ $dtTicket->jenis }}</td>
                                    <td>{{ $dtTicket->kategori }}</td>
                                    <td>{{ $dtTicket->deskripsi }}</td>
                                    <td>
                                        <a href="/edit/{{ $dtTicket->id }}" class="btn btn-warning">Edit
                                        </a>
                                        <a href="/delete/{{ $dtTicket->id }}" onclick="return confirm('Apakah Anda yakin akan menghapus data?')" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                       
                                    </td>
                                </tr> 
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                          <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                          <li class="page-item"><a class="page-link" href="#">1</a></li>
                          <li class="page-item"><a class="page-link" href="#">2</a></li>
                          <li class="page-item"><a class="page-link" href="#">3</a></li>
                          <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                      </nav>
                </div>
            </div>
        </div>
        

    <!-- Content Row -->
    <div class="row">

        <!-- Content Column -->
        <div class="col-lg-6 mb-4">

            <!-- Project Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Projects</h6>
                </div>
                <div class="card-body">
                    <h4 class="small font-weight-bold">Server Migration <span
                            class="float-right">20%</span></h4>
                    <div class="progress mb-4">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 20%"
                            aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <h4 class="small font-weight-bold">Sales Tracking <span
                            class="float-right">40%</span></h4>
                    <div class="progress mb-4">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 40%"
                            aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <h4 class="small font-weight-bold">Customer Database <span
                            class="float-right">60%</span></h4>
                    <div class="progress mb-4">
                        <div class="progress-bar" role="progressbar" style="width: 60%"
                            aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <h4 class="small font-weight-bold">Payout Details <span
                            class="float-right">80%</span></h4>
                    <div class="progress mb-4">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 80%"
                            aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <h4 class="small font-weight-bold">Account Setup <span
                            class="float-right">Complete!</span></h4>
                    <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 100%"
                            aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>

            <!-- Color System -->
            <div class="row">
                <div class="col-lg-6 mb-4">
                    <div class="card bg-primary text-white shadow">
                        <div class="card-body">
                            Primary
                            <div class="text-white-50 small">#4e73df</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="card bg-success text-white shadow">
                        <div class="card-body">
                            Success
                            <div class="text-white-50 small">#1cc88a</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="card bg-info text-white shadow">
                        <div class="card-body">
                            Info
                            <div class="text-white-50 small">#36b9cc</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="card bg-warning text-white shadow">
                        <div class="card-body">
                            Warning
                            <div class="text-white-50 small">#f6c23e</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="card bg-danger text-white shadow">
                        <div class="card-body">
                            Danger
                            <div class="text-white-50 small">#e74a3b</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="card bg-secondary text-white shadow">
                        <div class="card-body">
                            Secondary
                            <div class="text-white-50 small">#858796</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="card bg-light text-black shadow">
                        <div class="card-body">
                            Light
                            <div class="text-black-50 small">#f8f9fc</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="card bg-dark text-white shadow">
                        <div class="card-body">
                            Dark
                            <div class="text-white-50 small">#5a5c69</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-lg-6 mb-4">

            <!-- Illustrations -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Illustrations</h6>
                </div>
                <div class="card-body">
                    <div class="text-center">
                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                            src="/template/img/undraw_posting_photo.svg" alt="...">
                    </div>
                    <p>Add some quality, svg illustrations to your project courtesy of <a
                            target="_blank" rel="nofollow" href="https://undraw.co/">unDraw</a>, a
                        constantly updated collection of beautiful svg images that you can use
                        completely free and without attribution!</p>
                    <a target="_blank" rel="nofollow" href="https://undraw.co/">Browse Illustrations on
                        unDraw &rarr;</a>
                </div>
            </div>

            <!-- Approach -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Development Approach</h6>
                </div>
                <div class="card-body">
                    <p>SB Admin 2 makes extensive use of Bootstrap 4 utility classes in order to reduce
                        CSS bloat and poor page performance. Custom CSS classes are used to create
                        custom components and custom utility classes.</p>
                    <p class="mb-0">Before working with this theme, you should become familiar with the
                        Bootstrap framework, especially the utility classes.</p>
                </div>
            </div>

        </div>
    </div>

</div>