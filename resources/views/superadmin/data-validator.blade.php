@extends('superadmin.app-su')

@section('content')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>DataTable Jquery</h3>
                <p class="text-subtitle text-muted">Powerful interactive tables with datatables (jQuery required)</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">DataTable Jquery</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <!-- Basic Tables start -->
    <section class="section">
        <div class="card">
            <div class="card-header">
                Jquery Datatable
            </div>
            <div class="card-body">
                <div id="table1_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="table1_length"><label>Show <select name="table1_length" aria-controls="table1" class="form-select form-select-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="table1_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="table1"></label></div></div></div><div class="row"><div class="col-sm-12"><table class="table dataTable no-footer" id="table1" aria-describedby="table1_info">
                    <thead>
                        <tr><th class="sorting sorting_asc" tabindex="0" aria-controls="table1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 86.9875px;">Name</th><th class="sorting" tabindex="0" aria-controls="table1" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 420.362px;">Email</th><th class="sorting" tabindex="0" aria-controls="table1" rowspan="1" colspan="1" aria-label="Phone: activate to sort column ascending" style="width: 149.087px;">Phone</th><th class="sorting" tabindex="0" aria-controls="table1" rowspan="1" colspan="1" aria-label="City: activate to sort column ascending" style="width: 160.288px;">City</th><th class="sorting" tabindex="0" aria-controls="table1" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 74.075px;">Status</th></tr>
                    </thead>
                    <tbody>


























                    <tr class="odd">
                            <td class="sorting_1">Aladdin</td>
                            <td>sem.ut@pellentesqueafacilisis.ca</td>
                            <td>0800 1111</td>
                            <td>Bothey</td>
                            <td>
                                <span class="badge bg-success">Active</span>
                            </td>
                        </tr><tr class="even">
                            <td class="sorting_1">Berk</td>
                            <td>fringilla.porttitor.vulputate@taciti.edu</td>
                            <td>(0101) 043 2822</td>
                            <td>Sanquhar</td>
                            <td>
                                <span class="badge bg-success">Active</span>
                            </td>
                        </tr><tr class="odd">
                            <td class="sorting_1">Bruno</td>
                            <td>elit.Etiam.laoreet@luctuslobortisClass.edu</td>
                            <td>07624 869434</td>
                            <td>Rocca d"Arce</td>
                            <td>
                                <span class="badge bg-success">Active</span>
                            </td>
                        </tr><tr class="even">
                            <td class="sorting_1">Carter</td>
                            <td>urna.justo.faucibus@orci.com</td>
                            <td>07079 826350</td>
                            <td>Biez</td>
                            <td>
                                <span class="badge bg-success">Active</span>
                            </td>
                        </tr><tr class="odd">
                            <td class="sorting_1">Channing</td>
                            <td>tempor.bibendum.Donec@ornarelectusante.ca</td>
                            <td>0845 46 49</td>
                            <td>Warrnambool</td>
                            <td>
                                <span class="badge bg-success">Active</span>
                            </td>
                        </tr><tr class="even">
                            <td class="sorting_1">Cruz</td>
                            <td>non@quisturpisvitae.ca</td>
                            <td>07624 944915</td>
                            <td>Shikarpur</td>
                            <td>
                                <span class="badge bg-success">Active</span>
                            </td>
                        </tr><tr class="odd">
                            <td class="sorting_1">Dale</td>
                            <td>fringilla.euismod.enim@quam.ca</td>
                            <td>0500 527693</td>
                            <td>New Quay</td>
                            <td>
                                <span class="badge bg-success">Active</span>
                            </td>
                        </tr><tr class="even">
                            <td class="sorting_1">Darius</td>
                            <td>velit@nec.com</td>
                            <td>0309 690 7871</td>
                            <td>Ways</td>
                            <td>
                                <span class="badge bg-success">Active</span>
                            </td>
                        </tr><tr class="odd">
                            <td class="sorting_1">Deacon</td>
                            <td>Duis.a.mi@sociisnatoquepenatibus.com</td>
                            <td>07740 599321</td>
                            <td>Karapınar</td>
                            <td>
                                <span class="badge bg-success">Active</span>
                            </td>
                        </tr><tr class="even">
                            <td class="sorting_1">Emmanuel</td>
                            <td>eget.lacus.Mauris@feugiatSednec.org</td>
                            <td>(016977) 8208</td>
                            <td>Saint-Remy-Geest</td>
                            <td>
                                <span class="badge bg-success">Active</span>
                            </td>
                        </tr></tbody>
                </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="table1_info" role="status" aria-live="polite">Showing 1 to 10 of 26 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="table1_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="table1_previous"><a href="#" aria-controls="table1" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="table1" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="table1" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="table1" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item next" id="table1_next"><a href="#" aria-controls="table1" data-dt-idx="4" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
            </div>
        </div>

    </section>
    <!-- Basic Tables end -->
</div>
@endsection
