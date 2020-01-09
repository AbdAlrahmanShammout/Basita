@extends('partials.master')

@section('content')
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
    <div class="kt-portlet kt-portlet--mobile">
        <div class="kt-portlet__head kt-portlet__head--lg">
            <div class="kt-portlet__head-label">
                <span class="kt-portlet__head-icon">
                    <i class="kt-font-brand flaticon2-line-chart"></i>
                </span>
                <h3 class="kt-portlet__head-title">
                    Services Types
                    <small>list of availabel services types</small>
                </h3>
            </div>
            <div class="kt-portlet__head-toolbar">
                <div class="kt-portlet__head-wrapper">
                    <div class="kt-portlet__head-actions">
                        <a href="{{route('serviceType.create')}}" class="btn btn-brand btn-elevate btn-icon-sm">
                            <i class="la la-plus"></i>
                            New Record
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="kt-portlet__body">

            <!--begin: Datatable -->
            <table class="table table-striped table-hover table-checkable" id="kt_table_1">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Service Name</th>
                        <th>Count Provider</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($list as $item)
                    <tr>
                        <td>1</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->id}}</td>
                        <td nowrap>
                            <a href="{{route('serviceType.show',$item->id)}}"
                                class="btn btn-sm btn-clean btn-icon btn-icon-md" title="View">
                                <i class="la la-eye"></i>
                            </a>
                            <a href="{{route('serviceType.edit',$item->id)}}"
                                class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Edit">
                                <i class="la la-edit"></i>
                            </a>
                            <a href="{{route('serviceType.delete',$item->id)}}"
                                class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="modal" title="Delete">
                                <i class="la la-trash"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <!--begin::Modal-->
            <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-danger id=" exampleModalLabel">Delete Service Type</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Are you sude you want to delete this service type ?</p>
                        </div>
                        <div class="modal-footer">
                            <form class="kt-form kt-form--label-right" method="delete"
                                {{-- action="{{ route('serviceType.delete',$serviceType->id)}}"> --}}
                                @csrf
                                <button type="reset" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-danger btn-wide">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!--end::Modal-->


            <!--end: Datatable -->
        </div>

    </div>
    @section('page-level-js')
    <script src="/assets/plugins/custom/datatables/datatables.bundle.js" type="text/javascript"></script>
    <script src="/assets/js/pages/crud/datatables/basic/basic.js" type="text/javascript"></script>

    @endsection
</div>
@endsection