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
                    HTML Table
                    <small>Datatable initialized from HTML table</small>
                </h3>
            </div>
            <div class="kt-portlet__head-toolbar">
                <div class="kt-portlet__head-wrapper">
                    <div class="kt-portlet__head-actions">
                        <div class="dropdown dropdown-inline">
                            <button type="button" class="btn btn-default btn-icon-sm dropdown-toggle"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="la la-download"></i> Export
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <ul class="kt-nav">
                                    <li class="kt-nav__section kt-nav__section--first">
                                        <span class="kt-nav__section-text">Choose an option</span>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon la la-print"></i>
                                            <span class="kt-nav__link-text">Print</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon la la-copy"></i>
                                            <span class="kt-nav__link-text">Copy</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon la la-file-excel-o"></i>
                                            <span class="kt-nav__link-text">Excel</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon la la-file-text-o"></i>
                                            <span class="kt-nav__link-text">CSV</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon la la-file-pdf-o"></i>
                                            <span class="kt-nav__link-text">PDF</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        &nbsp;
                        <a href="#" class="btn btn-brand btn-elevate btn-icon-sm">
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
                    <tr>
                        <td>1</td>
                        <td>61715-075</td>
                        <td>China</td>
                        <td>Tieba</td>
                        <td>746 Pine View Junction</td>
                        <td>2/12/2018</td>
                        <td>3</td>
                        <td>2</td>
                        <td nowrap></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>63629-4697</td>
                        <td>Indonesia</td>
                        <td>Cihaur</td>
                        <td>01652 Fulton Trail</td>
                        <td>8/6/2017</td>
                        <td>6</td>
                        <td>3</td>
                        <td nowrap></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>68084-123</td>
                        <td>Argentina</td>
                        <td>Puerto Iguazú</td>
                        <td>2 Pine View Park</td>
                        <td>5/26/2016</td>
                        <td>1</td>
                        <td>2</td>
                        <td nowrap></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>67457-428</td>
                        <td>Indonesia</td>
                        <td>Talok</td>
                        <td>3050 Buell Terrace</td>
                        <td>7/2/2016</td>
                        <td>1</td>
                        <td>3</td>
                        <td nowrap></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>31722-529</td>
                        <td>Austria</td>
                        <td>Sankt Andrä-Höch</td>
                        <td>3038 Trailsway Junction</td>
                        <td>5/20/2017</td>
                        <td>2</td>
                        <td>3</td>
                        <td nowrap></td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>64117-168</td>
                        <td>China</td>
                        <td>Rongkou</td>
                        <td>023 South Way</td>
                        <td>11/26/2016</td>
                        <td>5</td>
                        <td>3</td>
                        <td nowrap></td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>43857-0331</td>
                        <td>China</td>
                        <td>Baiguo</td>
                        <td>56482 Fairfield Terrace</td>
                        <td>6/28/2016</td>
                        <td>2</td>
                        <td>3</td>
                        <td nowrap></td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>64980-196</td>
                        <td>Croatia</td>
                        <td>Vinica</td>
                        <td>0 Elka Street</td>
                        <td>8/5/2016</td>
                        <td>6</td>
                        <td>1</td>
                        <td nowrap></td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>0404-0360</td>
                        <td>Colombia</td>
                        <td>San Carlos</td>
                        <td>38099 Ilene Hill</td>
                        <td>3/31/2017</td>
                        <td>2</td>
                        <td>1</td>
                        <td nowrap></td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>0404-0360</td>
                        <td>Colombia</td>
                        <td>San Carlos</td>
                        <td>38099 Ilene Hill</td>
                        <td>3/31/2017</td>
                        <td>2</td>
                        <td>1</td>
                        <td nowrap></td>
                    </tr>
                    
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