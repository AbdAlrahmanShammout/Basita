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

    <div class="row">
        <div class="col">
            <div class="alert alert-light alert-elevate fade show" role="alert">
                <div class="alert-icon"><i class="flaticon-warning kt-font-brand"></i></div>
                <div class="alert-text">
                    Please Note that you cant add new city name that is used before <br>
                    please enter unique name
                </div>
            </div>
        </div>
    </div>

    <!--begin::Portlet-->
    <div class="kt-portlet">
        <div class="kt-portlet__head">
            <div class="kt-portlet__head-label">
                <h3 class="kt-portlet__head-title">
                    Add New city
                </h3>
            </div>
        </div>

        <!--begin::Form-->
        <form class="kt-form kt-form--label-right" method="post" action="{{ route('city.update',$city->id)}}">
            @method('patch')

            @csrf
            <div class="kt-portlet__body">
                <div class="form-group row">
                    <label class="col-form-label col-lg-3 col-sm-12">city name</label>
                    <div class="col-lg-6 col-md-9 col-sm-12">
                        <input type="text" name="name" class="form-control" value="{{$city->name}}"
                            placeholder="please enter your city name">
                    </div>
                </div>
            </div>
            <div class="kt-portlet__foot">
                <div class="container">
                    <div class="kt-form__actions kt-align-right">
                        <button type="reset" class="btn btn-secondary mx-2">Cancel</button>
                        <button type="submit" class="btn btn-wider btn-brand mx-2">Update Changes</button>
                    </div>
                </div>
            </div>
        </form>

        <!--end::Form-->
    </div>

    <!--end::Portlet-->

</div>
@endsection