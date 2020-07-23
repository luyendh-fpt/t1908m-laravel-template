@extends('layout.admin')
@section('breadcrumb')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-7 align-self-center">
                <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Good Morning Jason!</h3>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb m-0 p-0">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="col-5 align-self-center">
                <div class="customize-input float-right">
                    <select class="custom-select custom-select-set form-control bg-white border-0 custom-shadow custom-radius">
                        <option selected>Aug 19</option>
                        <option value="1">July 19</option>
                        <option value="2">Jun 19</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Zero Configuration</h4>
                        <h6 class="card-subtitle">DataTables has most features enabled by default, so all you
                            need to do to use it with your own tables is to call the construction
                            function:<code> $().DataTable();</code>. You can refer full documentation from here
                            <a href="https://datatables.net/">Datatables</a></h6>
                        <div class="table-responsive">
                            <div id="zero_config_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="dataTables_length" id="zero_config_length"><label>Show <select
                                                        name="zero_config_length" aria-controls="zero_config"
                                                        class="form-control form-control-sm">
                                                    <option value="10">10</option>
                                                    <option value="25">25</option>
                                                    <option value="50">50</option>
                                                    <option value="100">100</option>
                                                </select> entries</label></div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div id="zero_config_filter" class="dataTables_filter">
                                            <form action="/products" method="get">
                                            <label>
                                                Search:<input
                                                        type="search" name="keyword" class="form-control form-control-sm"
                                                        placeholder="" aria-controls="zero_config">
                                            </label>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table id="zero_config"
                                               class="table table-striped table-bordered no-wrap dataTable" role="grid"
                                               aria-describedby="zero_config_info">
                                            <thead>
                                            <tr role="row">
                                                <th class="sorting_asc" tabindex="0" aria-controls="zero_config"
                                                    rowspan="1" colspan="1" aria-sort="ascending"
                                                    aria-label="Name: activate to sort column descending"
                                                    style="width: 0px;">Name
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1"
                                                    colspan="1" aria-label="Position: activate to sort column ascending"
                                                    style="width: 0px;">Price
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1"
                                                    colspan="1" aria-label="Position: activate to sort column ascending"
                                                    style="width: 0px;">Category
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1"
                                                    colspan="1" aria-label="Office: activate to sort column ascending"
                                                    style="width: 0px;">Thumbnail
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1"
                                                    colspan="1" aria-label="Age: activate to sort column ascending"
                                                    style="width: 0px;">Action
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            @foreach($list as $item)
                                            <tr role="row" class="odd">
                                                <td class="sorting_1">{{$item->name}}</td>
                                                <td>{{$item->price}}</td>
                                                <td>{{$item->category->name}}</td>
                                                <td><img src="{{$item->thumbnail}}" alt="" style="width: 100px"></td>
                                                <td></td>
                                            </tr>
                                            @endforeach
                                            </tbody>
                                            <tfoot>
                                            <tr>
                                                <th rowspan="1" colspan="1">Name</th>
                                                <th rowspan="1" colspan="1">Price</th>
                                                <th rowspan="1" colspan="1">Category</th>
                                                <th rowspan="1" colspan="1">Thumbnail</th>
                                                <th rowspan="1" colspan="1">Action</th>
                                            </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-5">
                                        <div class="dataTables_info" id="zero_config_info" role="status"
                                             aria-live="polite">Showing 1 to 10 of 57 entries
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-7">
                                        <div class="dataTables_paginate paging_simple_numbers"
                                             id="zero_config_paginate">
                                            <ul class="pagination">
{{--                                                <li class="paginate_button page-item previous disabled"--}}
{{--                                                    id="zero_config_previous"><a href="#" aria-controls="zero_config"--}}
{{--                                                                                 data-dt-idx="0" tabindex="0"--}}
{{--                                                                                 class="page-link">Previous</a></li>--}}
{{--                                                <li class="paginate_button page-item active"><a href="#"--}}
{{--                                                                                                aria-controls="zero_config"--}}
{{--                                                                                                data-dt-idx="1"--}}
{{--                                                                                                tabindex="0"--}}
{{--                                                                                                class="page-link">1</a>--}}
{{--                                                </li>--}}
{{--                                                <li class="paginate_button page-item "><a href="#"--}}
{{--                                                                                          aria-controls="zero_config"--}}
{{--                                                                                          data-dt-idx="2" tabindex="0"--}}
{{--                                                                                          class="page-link">2</a></li>--}}
{{--                                                <li class="paginate_button page-item "><a href="#"--}}
{{--                                                                                          aria-controls="zero_config"--}}
{{--                                                                                          data-dt-idx="3" tabindex="0"--}}
{{--                                                                                          class="page-link">3</a></li>--}}
{{--                                                <li class="paginate_button page-item "><a href="#"--}}
{{--                                                                                          aria-controls="zero_config"--}}
{{--                                                                                          data-dt-idx="4" tabindex="0"--}}
{{--                                                                                          class="page-link">4</a></li>--}}
{{--                                                <li class="paginate_button page-item "><a href="#"--}}
{{--                                                                                          aria-controls="zero_config"--}}
{{--                                                                                          data-dt-idx="5" tabindex="0"--}}
{{--                                                                                          class="page-link">5</a></li>--}}
{{--                                                <li class="paginate_button page-item "><a href="#"--}}
{{--                                                                                          aria-controls="zero_config"--}}
{{--                                                                                          data-dt-idx="6" tabindex="0"--}}
{{--                                                                                          class="page-link">6</a></li>--}}
{{--                                                <li class="paginate_button page-item next" id="zero_config_next"><a--}}
{{--                                                            href="#" aria-controls="zero_config" data-dt-idx="7"--}}
{{--                                                            tabindex="0" class="page-link">Next</a></li>--}}
                                                {{$list->links()}}
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- *************************************************************** -->
        <!-- End Top Leader Table -->
        <!-- *************************************************************** -->
    </div>
@endsection


