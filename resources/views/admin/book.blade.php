@extends('admin.shared.shared')

{{-- Title Page --}}
@section('title')
    Employees
@endsection

{{-- Style Css --}}
@section('scriptstabale')
<link href="{{ asset( 'assetsAdmin') }}/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet" type="text/css"/>
<link href="{{ asset( 'assetsAdmin') }}/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>

@endsection

{{-- Content --}}
@section('content')
    <div class="content-body">

        <div class="container-fluid">
            <div class="modal fade" id="addOrderModalside">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Create Project</h5>
                            <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <label class="text-black font-w500">Project Name</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="text-black font-w500">Deadline</label>
                                    <input type="date" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="text-black font-w500">Client Name</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <button type="button" class="btn btn-primary">CREATE</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Table</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Book A Table</a></li>
                </ol>
            </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Book A Table</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example3" class="display min-w850">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Name</th>
                                            <th>Num Person</th>
                                            <th>Time</th>
                                            <th>Mobile</th>
                                            <th>Email</th>
                                            <th>Book Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><img class="rounded-circle" width="35"
                                                    src="{{ asset( 'assetsAdmin') }}/images/profile/small/pic1.jpg" alt=""></td>
                                            <td>Tiger Nixon</td>
                                            <td>2 person</td>
                                            <td>
                                                10.00 am to 11.00 am
                                            </td>
                                            <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                            <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                                            <td>2023/04/25</td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                                            class="fa fa-pencil"></i></a>
                                                    <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                                            class="fa fa-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle" width="35"
                                                    src="{{ asset( 'assetsAdmin') }}/images/profile/small/pic2.jpg" alt=""></td>
                                            <td>Garrett Winters</td>
                                            <td>2 person</td>
                                            <td>
                                                10.00 am to 11.00 am
                                            </td>
                                            <td><a href="javascript:void(0);"><strong>987 654 3210</a></strong></td>
                                            <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                            <td>2023/07/25</td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                                            class="fa fa-pencil"></i></a>
                                                    <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                                            class="fa fa-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle" width="35"
                                                    src="{{ asset( 'assetsAdmin') }}/images/profile/small/pic3.jpg" alt=""></td>
                                            <td>Ashton Cox</td>
                                            <td>8 person</td>
                                            <td>
                                                12.00 am to 11.00 am
                                            </td>
                                            <td><a href="javascript:void(0);"><strong>(123) 4567 890</a></strong></td>
                                            <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                            <td>2023/01/12</td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                                            class="fa fa-pencil"></i></a>
                                                    <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                                            class="fa fa-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle" width="35"
                                                    src="{{ asset( 'assetsAdmin') }}/images/profile/small/pic4.jpg" alt=""></td>
                                            <td>Cedric Kelly</td>
                                            <td>6 person</td>
                                            <td>
                                                10.00 pm to 01.00 pm
                                            </td>
                                            <td><a href="javascript:void(0);"><strong>123 456 7890</a></strong></td>
                                            <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                            <td>2023/03/29</td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                                            class="fa fa-pencil"></i></a>
                                                    <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                                            class="fa fa-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle" width="35"
                                                    src="{{ asset( 'assetsAdmin') }}/images/profile/small/pic5.jpg" alt=""></td>
                                            <td>Airi Satou</td>
                                            <td>2 person</td>
                                            <td>
                                                10.00 am to 11.00 am
                                            </td>
                                            <td><a href="javascript:void(0);"><strong>987 654 3210</a></strong></td>
                                            <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                            <td>2023/11/28</td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                                            class="fa fa-pencil"></i></a>
                                                    <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                                            class="fa fa-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle" width="35"
                                                    src="{{ asset( 'assetsAdmin') }}/images/profile/small/pic6.jpg" alt=""></td>
                                            <td>Brielle Williamson</td>
                                            <td>2 person</td>
                                            <td>
                                                10.00 am to 11.00 am
                                            </td>
                                            <td><a href="javascript:void(0);"><strong>123 456 7890</a></strong></td>
                                            <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                            <td>2023/12/02</td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                                            class="fa fa-pencil"></i></a>
                                                    <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                                            class="fa fa-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle" width="35"
                                                    src="{{ asset( 'assetsAdmin') }}/images/profile/small/pic7.jpg" alt=""></td>
                                            <td>Herrod Chandler</td>
                                            <td>2 person</td>
                                            <td>
                                                10.00 am to 11.00 am
                                            </td>
                                            <td><a href="javascript:void(0);"><strong>987 654 3210</a></strong></td>
                                            <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                            <td>2023/08/06</td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                                            class="fa fa-pencil"></i></a>
                                                    <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                                            class="fa fa-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle" width="35"
                                                    src="{{ asset( 'assetsAdmin') }}/images/profile/small/pic8.jpg" alt=""></td>
                                            <td>Rhona Davidson</td>
                                            <td>2 person</td>
                                            <td>
                                                10.00 am to 11.00 am
                                            </td>
                                            <td><a href="javascript:void(0);"><strong>(123) 4567 890</a></strong></td>
                                            <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                            <td>2010/10/14</td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                                            class="fa fa-pencil"></i></a>
                                                    <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                                            class="fa fa-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection

    {{-- Scripting js --}}
    @section('scripts')
    <script src="{{ asset( 'assetsAdmin') }}/vendor/datatables/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="{{ asset( 'assetsAdmin') }}/js/plugins-init/datatables.init.js" type="text/javascript"></script>

    @endsection
