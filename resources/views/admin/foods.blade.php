@extends('admin.shared.shared')

{{-- Title Page --}}
@section('title')
    Foods
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
                            <h5 class="modal-title">Create Food</h5>
                            <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <label class="text-black font-w500">Food Name</label>
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
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Foods</a></li>
                </ol>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Table Foods</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="display min-w850">
                                <thead>
                                    <tr>
                                        <th>Name Foods</th>
                                        <th>category</th>
                                        <th>Office</th>
                                        <th>discount</th>
                                        <th>Created date</th>
                                        <th>Cost</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>Baked goods.
                                        </td>
                                        <td>Edinburgh</td>
                                        <td>61</td>
                                        <td>2023/04/25</td>
                                        <td>$320,800</td>
                                    </tr>
                                    <tr>
                                        <td>Garrett Winters</td>
                                        <td>Cereals.
                                        </td>
                                        <td>Tokyo</td>
                                        <td>63</td>
                                        <td>2023/07/25</td>
                                        <td>$170,750</td>
                                    </tr>
                                    <tr>
                                        <td>Ashton Cox</td>
                                        <td>Dairy products.
                                        </td>
                                        <td>San Francisco</td>
                                        <td>66</td>
                                        <td>2023/01/12</td>
                                        <td>$86,000</td>
                                    </tr>
                                    <tr>
                                        <td>Cedric Kelly</td>
                                        <td>Edible plants.
                                        </td>
                                        <td>Edinburgh</td>
                                        <td>22</td>
                                        <td>2023/03/29</td>
                                        <td>$433,060</td>
                                    </tr>
                                    <tr>
                                        <td>Airi Satou</td>
                                        <td>Edible fungi.</td>
                                        <td>Tokyo</td>
                                        <td>33</td>
                                        <td>2008/11/28</td>
                                        <td>$162,700</td>
                                    </tr>
                                    <tr>
                                        <td>Brielle Williamson</td>
                                        <td>Edible nuts and seeds</td>
                                        <td>New York</td>
                                        <td>61</td>
                                        <td>2023/12/02</td>
                                        <td>$372,000</td>
                                    </tr>
                                    <tr>
                                        <td>Herrod Chandler</td>
                                        <td>Legumes.
                                        </td>
                                        <td>San Francisco</td>
                                        <td>59</td>
                                        <td>2023/08/06</td>
                                        <td>$137,500</td>
                                    </tr>
                                    <tr>
                                        <td>Rhona Davidson</td>
                                        <td>Meat.
                                        </td>
                                        <td>Tokyo</td>
                                        <td>55</td>
                                        <td>2023/10/14</td>
                                        <td>$327,900</td>
                                    </tr>
                                   
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Name Foods</th>
                                        <th>category</th>
                                        <th>Office</th>
                                        <th>discount</th>
                                        <th>Created date</th>
                                        <th>Cost</th>
                                    </tr>
                                </tfoot>
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
