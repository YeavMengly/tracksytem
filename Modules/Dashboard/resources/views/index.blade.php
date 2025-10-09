@extends('layouts.master')
@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">{{ __('menus.dashboard') }}</h4>

                <div class="page-title-right">

                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                {{-- <div class="card-body">

                    <div class="table-responsive">
                        <table class="table table-bordered dt-responsive  nowrap w-100">
                            <thead>
                                <tr>
                                    <th>{{ __('tables.th.no') }}</th>
                                    <th>{{ __('tables.th.order') }}</th>
                                    <th>{{ __('tables.th.category') }}</th>
                                    <th>{{ __('tables.th.document.total') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $index=1; @endphp
                                @foreach ($report as $row)
                                    <tr>
                                        <td>{{ $index++ }}</td>
                                        <td>{{ $row->order }}</td>
                                        <td>{{ $row->name }}</td>
                                        <td>
                                            @php
                                                $total_doc = DB::table('documents')
                                                    ->where('cate_id', $row->id)
                                                    ->count();
                                                echo $total_doc;
                                            @endphp
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div> --}}
                <div class="card-body">
                    <div class="row">
                        <!-- Submitted Description Card -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Submitted Descriptions Today
                                            </div>
                                            {{-- <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $submitted }}</div> --}}
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-check-circle fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Not Submitted Description Card -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-danger shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                                Not Submitted Descriptions Today
                                            </div>
                                            {{-- <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $notSubmitted }}</div> --}}
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-times-circle fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
