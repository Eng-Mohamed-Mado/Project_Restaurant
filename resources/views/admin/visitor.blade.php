@extends('admin.shared.shared')

{{-- Title Page --}}
@section('title')
    Visitor
@endsection

{{-- Style Css --}}
@section('scriptstabale')
    <link href="{{ asset('assetsAdmin') }}/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('assetsAdmin') }}/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
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
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Visitor</a></li>
                </ol>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Profile Visitor</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example3" class="display min-w850">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Name</th>
                                        <th>Address</th>
                                        <th>Gender</th>
                                        <th>Mobile</th>
                                        <th>Email</th>
                                        <th>Join in</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><img class="rounded-circle" width="35"
                                                src="{{ asset('assetsAdmin') }}/images/profile/small/pic1.jpg"
                                                alt=""></td>
                                        <td>Mostafa</td>
                                        <td>Egypt , Cairo</td>
                                        <td>Male</td>
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
                                                src="{{ asset('assetsAdmin') }}/images/profile/small/pic2.jpg"
                                                alt=""></td>
                                        <td>Garrett Winters</td>
                                        <td>Egypt , Cairo</td>
                                        <td>Female</td>
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
                                                src="{{ asset('assetsAdmin') }}/images/profile/small/pic3.jpg"
                                                alt=""></td>
                                        <td>Ashton Cox</td>
                                        <td>Egypt , Cairo</td>
                                        <td>Male</td>

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
                                                src="{{ asset('assetsAdmin') }}/images/profile/small/pic4.jpg"
                                                alt=""></td>
                                        <td>Cedric Kelly</td>
                                        <td>Egypt , Cairo</td>
                                        <td>Male</td>

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
                                                src="{{ asset('assetsAdmin') }}/images/profile/small/pic5.jpg"
                                                alt=""></td>
                                        <td>Airi Satou</td>
                                        <td>Egypt , Cairo</td>
                                        <td>Female</td>
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
                                                src="{{ asset('assetsAdmin') }}/images/profile/small/pic6.jpg"
                                                alt=""></td>
                                        <td>Brielle Williamson</td>
                                        <td>Egypt , Cairo</td>
                                        <td>Male</td>

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
                                                src="{{ asset('assetsAdmin') }}/images/profile/small/pic7.jpg"
                                                alt=""></td>
                                        <td>Herrod Chandler</td>
                                        <td>Egypt , Cairo</td>
                                        <td>Female</td>
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
                                                src="{{ asset('assetsAdmin') }}/images/profile/small/pic8.jpg"
                                                alt=""></td>
                                        <td>Rhona Davidson</td>
                                        <td>Egypt , Cairo</td>
                                        <td>Male</td>

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
                                    <tr>
                                        <td><img class="rounded-circle" width="35"
                                                src="{{ asset('assetsAdmin') }}/images/profile/small/pic9.jpg"
                                                alt=""></td>
                                        <td>Colleen Hurst</td>
                                        <td>Egypt , Cairo</td>
                                        <td>Female</td>
                                        <td><a href="javascript:void(0);"><strong>(123) 4567 890</a></strong></td>
                                        <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                        <td>2023/09/15</td>
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
                                                src="{{ asset('assetsAdmin') }}/images/profile/small/pic10.jpg"
                                                alt=""></td>
                                        <td>Sonya Frost</td>
                                        <td>Egypt , Cairo</td>
                                        <td>Male</td>

                                        <td><a href="javascript:void(0);"><strong>123 456 7890</a></strong></td>
                                        <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                        <td>2023/12/13</td>
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
                                                src="{{ asset('assetsAdmin') }}/images/profile/small/pic1.jpg"
                                                alt=""></td>
                                        <td>Jena Gaines</td>
                                        <td>Egypt , Cairo</td>
                                        <td>Female</td>
                                        <td><a href="javascript:void(0);"><strong>987 654 3210</a></strong></td>
                                        <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                        <td>2023/12/19</td>
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
                                                src="{{ asset('assetsAdmin') }}/images/profile/small/pic2.jpg"
                                                alt=""></td>
                                        <td>Quinn Flynn</td>
                                        <td>Egypt , Cairo</td>
                                        <td>Male</td>
                                        <td><a href="javascript:void(0);"><strong>(123) 4567 890</a></strong></td>
                                        <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                        <td>2023/03/03</td>
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
                                                src="{{ asset('assetsAdmin') }}/images/profile/small/pic3.jpg"
                                                alt=""></td>
                                        <td>Charde Marshall</td>
                                        <td>Egypt , Cairo</td>
                                        <td>Female</td>
                                        <td><a href="javascript:void(0);"><strong>123 456 7890</a></strong></td>
                                        <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                        <td>2023/10/16</td>
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
                                                src="{{ asset('assetsAdmin') }}/images/profile/small/pic4.jpg"
                                                alt=""></td>
                                        <td>Haley Kennedy</td>
                                        <td>Egypt , Cairo</td>
                                        <td>Male</td>
                                        <td><a href="javascript:void(0);"><strong>987 654 3210</a></strong></td>
                                        <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                        <td>2023/12/18</td>
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
                                                src="{{ asset('assetsAdmin') }}/images/profile/small/pic5.jpg"
                                                alt=""></td>
                                        <td>Tatyana Fitzpatrick</td>
                                        <td>Egypt , Cairo</td>
                                        <td>Male</td>
                                        <td><a href="javascript:void(0);"><strong>(123) 4567 890</a></strong></td>
                                        <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                        <td>2010/03/17</td>
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
                                                src="{{ asset('assetsAdmin') }}/images/profile/small/pic6.jpg"
                                                alt=""></td>
                                        <td>Michael Silva</td>
                                        <td>Egypt , Cairo</td>
                                        <td>Female</td>
                                        <td><a href="javascript:void(0);"><strong>123 456 7890</a></strong></td>
                                        <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                        <td>2023/11/27</td>
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
                                                src="{{ asset('assetsAdmin') }}/images/profile/small/pic7.jpg"
                                                alt=""></td>
                                        <td>Paul Byrd</td>
                                        <td>Egypt , Cairo</td>
                                        <td>Male</td>

                                        <td><a href="javascript:void(0);"><strong>987 654 3210</a></strong></td>
                                        <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                        <td>2010/06/09</td>
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
                                                src="{{ asset('assetsAdmin') }}/images/profile/small/pic8.jpg"
                                                alt=""></td>
                                        <td>Gloria Little</td>
                                        <td>Egypt , Cairo</td>
                                        <td>Female</td>
                                        <td><a href="javascript:void(0);"><strong>(123) 4567 890</a></strong></td>
                                        <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                        <td>2023/04/10</td>
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
                                                src="{{ asset('assetsAdmin') }}/images/profile/small/pic9.jpg"
                                                alt=""></td>
                                        <td>Bradley Greer</td>
                                        <td>Egypt , Cairo</td>
                                        <td>Male</td>

                                        <td><a href="javascript:void(0);"><strong>(123) 4567 890</a></strong></td>
                                        <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                        <td>2023/10/13</td>
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
                                                src="{{ asset('assetsAdmin') }}/images/profile/small/pic10.jpg"
                                                alt=""></td>
                                        <td>Dai Rios</td>
                                        <td>Egypt , Cairo</td>
                                        <td>Male</td>

                                        <td><a href="javascript:void(0);"><strong>123 456 7890</a></strong></td>
                                        <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                        <td>2023/09/26</td>
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
                                                src="{{ asset('assetsAdmin') }}/images/profile/small/pic1.jpg"
                                                alt=""></td>
                                        <td>Jenette Caldwell</td>
                                        <td>Egypt , Cairo</td>
                                        <td>Female</td>
                                        <td><a href="javascript:void(0);"><strong>987 654 3210</a></strong></td>
                                        <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                        <td>2011/09/03</td>
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
                                                src="{{ asset('assetsAdmin') }}/images/profile/small/pic2.jpg"
                                                alt=""></td>
                                        <td>Yuri Berry</td>
                                        <td>Egypt , Cairo</td>
                                        <td>Male</td>

                                        <td><a href="javascript:void(0);"><strong>(123) 4567 890</a></strong></td>
                                        <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                        <td>2023/06/25</td>
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
                                                src="{{ asset('assetsAdmin') }}/images/profile/small/pic3.jpg"
                                                alt=""></td>
                                        <td>Caesar Vance</td>
                                        <td>Egypt , Cairo</td>
                                        <td>Male</td>

                                        <td><a href="javascript:void(0);"><strong>(123) 4567 890</a></strong></td>
                                        <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                        <td>2011/12/12</td>
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
                                                src="{{ asset('assetsAdmin') }}/images/profile/small/pic4.jpg"
                                                alt=""></td>
                                        <td>Doris Wilder</td>
                                        <td>Egypt , Cairo</td>
                                        <td>Female</td>
                                        <td><a href="javascript:void(0);"><strong>123 456 7890</a></strong></td>
                                        <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                        <td>2010/09/20</td>
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
                                                src="{{ asset('assetsAdmin') }}/images/profile/small/pic5.jpg"
                                                alt=""></td>
                                        <td>Angelica Ramos</td>
                                        <td>Egypt , Cairo</td>
                                        <td>Male</td>

                                        <td><a href="javascript:void(0);"><strong>987 654 3210</a></strong></td>
                                        <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                        <td>2023/10/09</td>
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
                                                src="{{ asset('assetsAdmin') }}/images/profile/small/pic6.jpg"
                                                alt=""></td>
                                        <td>Gavin Joyce</td>
                                        <td>Egypt , Cairo</td>
                                        <td>Female</td>

                                        <td><a href="javascript:void(0);"><strong>(123) 4567 890</a></strong></td>
                                        <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                        <td>2010/12/22</td>
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
                                                src="{{ asset('assetsAdmin') }}/images/profile/small/pic7.jpg"
                                                alt=""></td>
                                        <td>Jennifer Chang</td>
                                        <td>Egypt , Cairo</td>
                                        <td>Male</td>
                                        <td><a href="javascript:void(0);"><strong>(123) 4567 890</a></strong></td>
                                        <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                        <td>2010/11/14</td>
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
                                                src="{{ asset('assetsAdmin') }}/images/profile/small/pic8.jpg"
                                                alt=""></td>
                                        <td>Brenden Wagner</td>
                                        <td>Egypt , Cairo</td>
                                        <td>Female</td>

                                        <td><a href="javascript:void(0);"><strong>123 456 7890</a></strong></td>
                                        <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                        <td>2011/06/07</td>
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
                                                src="{{ asset('assetsAdmin') }}/images/profile/small/pic9.jpg"
                                                alt=""></td>
                                        <td>Fiona Green</td>
                                        <td>Egypt , Cairo</td>
                                        <td>Male</td>
                                        <td><a href="javascript:void(0);"><strong>987 654 3210</a></strong></td>
                                        <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                        <td>2010/03/11</td>
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
                                                src="{{ asset('assetsAdmin') }}/images/profile/small/pic10.jpg"
                                                alt=""></td>
                                        <td>Shou Itou</td>
                                        <td>Egypt , Cairo</td>
                                        <td>Female</td>

                                        <td><a href="javascript:void(0);"><strong>(123) 4567 890</a></strong></td>
                                        <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                        <td>2011/08/14</td>
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
    <script src="{{ asset('assetsAdmin') }}/vendor/datatables/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="{{ asset('assetsAdmin') }}/js/plugins-init/datatables.init.js" type="text/javascript"></script>
@endsection
