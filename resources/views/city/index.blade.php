@extends('partials.master')

@section('content')
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
    @if (count($errors) > 0)

    <div class="alert alert-solid-danger alert-bold">
        @foreach ($errors->all() as $error)
        <li class="alert-text">{{ $error }}</li>
        @endforeach
    </div>
    @endif

    @if ($message = Session::get('success'))
    <div class="alert alert-solid-success alert-bold">
        <div class="alert-text">{{ $message }}</div>
    </div>
    @endif
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
                        <a href="{{route('city.create')}}" class="btn btn-brand btn-elevate btn-icon-sm">
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
                            <a href="{{route('city.show',$item->id)}}" class="btn btn-sm btn-clean btn-icon btn-icon-md"
                                title="View">
                                <i class="la la-eye"></i>
                            </a>
                            <a href="{{route('city.edit',$item->id)}}" class="btn btn-sm btn-clean btn-icon btn-icon-md"
                                title="Edit">
                                <i class="la la-edit"></i>
                            </a>
                            <form class="d-inline-block" method="post" action="{{route('city.delete',$item->id)}}">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-sm btn-clean btn-icon btn-icon-md">
                                    <i class="la la-trash"></i>
                                </button>
                            </form>

                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <!--end: Datatable -->
        </div>

    </div>
    @section('page-level-js')
    <script src="/assets/plugins/custom/datatables/datatables.bundle.js" type="text/javascript"></script>
    <script src="/assets/js/pages/crud/datatables/basic/basic.js" type="text/javascript"></script>

    @endsection
</div>
@endsection