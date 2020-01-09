@extends('partials.master')

@section('content')
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
    <div class="row">
        <div class="col-xl-12">
            <div class="kt-portlet kt-portlet--height-fluid">
                <div class="kt-portlet__body">
                    <div class="kt-widget kt-widget--user-profile-3">
                        <div class="kt-widget__top">
                            <div
                                class="kt-widget__pic kt-widget__pic--danger kt-font-danger kt-font-boldest kt-font-light">
                                S1
                            </div>
                            <div class="kt-widget__content">
                                <div class="kt-widget__head">
                                    <a href="#" class="kt-widget__username">
                                        {{$region->name}}
                                        <i class="flaticon2-correct"></i>
                                    </a>

                                    <div class="kt-widget__action">
                                        <button type="button"
                                            class="btn btn-label-success btn-sm btn-upper">ask</button>&nbsp;
                                        <button type="button" class="btn btn-brand btn-sm btn-upper">hire</button>
                                    </div>
                                </div>

                                <div class="kt-widget__subhead">
                                    <a href="#"><i class="flaticon2-new-email"></i>jason@siastudio.com</a>
                                </div>

                                <div class="kt-widget__info">
                                    <div class="kt-widget__desc">
                                        I distinguish three main text objektive could be merely to inform people.
                                        <br> A second could be persuade people.You want people to bay objective
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="kt-widget__bottom">
                            <div class="kt-widget__item">
                                <div class="kt-widget__icon">
                                    <i class="flaticon-piggy-bank"></i>
                                </div>
                                <div class="kt-widget__details">
                                    <span class="kt-widget__title">Earnings</span>
                                    <span class="kt-widget__value"><span>$</span>249,500</span>
                                </div>
                            </div>

                            <div class="kt-widget__item">
                                <div class="kt-widget__icon">
                                    <i class="flaticon-confetti"></i>
                                </div>
                                <div class="kt-widget__details">
                                    <span class="kt-widget__title">Expances</span>
                                    <span class="kt-widget__value"><span>$</span>164,700</span>
                                </div>
                            </div>

                            <div class="kt-widget__item">
                                <div class="kt-widget__icon">
                                    <i class="flaticon-pie-chart"></i>
                                </div>
                                <div class="kt-widget__details">
                                    <span class="kt-widget__title">Net</span>
                                    <span class="kt-widget__value"><span>$</span>164,700</span>
                                </div>
                            </div>

                            <div class="kt-widget__item">
                                <div class="kt-widget__icon">
                                    <i class="flaticon-file-2"></i>
                                </div>
                                <div class="kt-widget__details">
                                    <span class="kt-widget__title">73 Tasks</span>
                                    <a href="#" class="kt-widget__value kt-font-brand">View</a>
                                </div>
                            </div>

                            <div class="kt-widget__item">
                                <div class="kt-widget__icon">
                                    <i class="flaticon-chat-1"></i>
                                </div>
                                <div class="kt-widget__details">
                                    <span class="kt-widget__title">648 Comments</span>
                                    <a href="#" class="kt-widget__value kt-font-brand">View</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="kt-portlet kt-portlet--mobile">
        <div class="kt-portlet__head kt-portlet__head--lg">
            <div class="kt-portlet__head-label">
                <span class="kt-portlet__head-icon">
                    <i class="kt-font-brand flaticon2-line-chart"></i>
                </span>
                <h3 class="kt-portlet__head-title">
                    {{$region->name}} Providers
                    <small>list of available regionss</small>
                </h3>
            </div>
        </div>
        <div class="kt-portlet__body">

            <!--begin: Datatable -->
            <table class="table table-striped table-hover table-checkable" id="kt_table_1">
                <thead>
                    <tr>
                        <th>Record ID</th>
                        <th>Order ID</th>
                        <th>Country</th>
                        <th>Ship City</th>
                        <th>Ship Address</th>
                        <th>Ship Date</th>
                        <th>Status</th>
                        <th>Type</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    {{--@foreach($list as $item)--}}
                    {{--<tr>--}}
                    {{--<td>1</td>--}}
                    {{--<td>{{$item->name}}</td>--}}
                    {{--<td>{{$item->id}}</td>--}}
                    {{--<td>Tieba</td>--}}
                    {{--<td>746 Pine View Junction</td>--}}
                    {{--<td>2/12/2018</td>--}}
                    {{--<td>3</td>--}}
                    {{--<td>2</td>--}}
                    {{--<td nowrap> <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="View">--}}
                    {{--<i class="la la-eye"></i>--}}
                    {{--</a>--}}
                    {{--<a href="{{route('region.edit',$item->id)}}"--}}
                    {{--class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Edit">--}}
                    {{--<i class="la la-edit"></i>--}}
                    {{--</a>--}}
                    {{--<a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="modal"--}}
                    {{--data-target="#deleteModal" title="Delete">--}}
                    {{--<i class="la la-trash"></i>--}}
                    {{--</a></td>--}}
                    {{--</tr>--}}
                    {{--@endforeach--}}
                </tbody>
            </table>

            <!--begin::Modal-->
            <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-danger id=" exampleModalLabel">Delete region</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Are you sude you want to delete this region ?</p>
                        </div>
                        <div class="modal-footer">
                            <form class="kt-form kt-form--label-right" method="delete"
                                {{-- action="{{ route('region.delete',$region->id)}}"> --}}
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