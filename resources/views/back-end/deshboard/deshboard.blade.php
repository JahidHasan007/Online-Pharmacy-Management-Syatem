   
@extends('back-end.master')
@section('title')
PMS
@endsection
@section('appUser')
active
@endsection
@section('content')

<section role="main" class="content-body">
    <header class="page-header page-header-left-breadcrumb">
        <div class="right-wrapper">
            <ol class="breadcrumbs">
                <li>
                    <a href="{{ route('/') }}">
                        <i class="fas fa-home"></i>
                    </a>
                </li>
                {{-- <li><span>Layouts</span></li> --}}
                <li><span>Deshboard</span></li>
            </ol>
    
            {{-- <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fas fa-chevron-left"></i></a> --}}
        </div>
    
        <h2>Deshboard</h2>
    </header>

    <!-- start: page -->
    <div class="row">
        <div class="col-lg-6 mb-3">
<section class="card">
									<header class="card-header">
										<div class="card-actions">
											<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
											<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
										</div>
						
										<h2 class="card-title">Recent Customer</h2>
									</header>
									<div class="card-body">
										<table class="table table-responsive-md mb-0">
											<thead>
												<tr>
													<th>Id</th>
													<th>Name</th>
													<th>Phone No</th>
													
												</tr>
											</thead>
											<tbody>
                                                @foreach($obj_customer as $customer)
												<tr>
													<td>{{ $customer->id }}</td>
													<td>{{ $customer->customer_name }}</td>
													<td>{{ $customer->customer_phone }}</td>
													
												</tr>
											@endforeach
											</tbody>
										</table>
									</div>
								</section>
        </div>
        <div class="col-lg-6">
            <div class="row mb-3">
                <div class="col-xl-6">
                    <section class="card card-featured-left card-featured-primary mb-3">
                        <div class="card-body">
                            <div class="widget-summary">
                                <div class="widget-summary-col widget-summary-col-icon">
                                    <div class="summary-icon bg-primary">
                                        <i class="fas fa-life-ring"></i>
                                    </div>
                                </div>
                                <div class="widget-summary-col">
                                    <div class="summary">
                                        <h4 class="title">Total Customer</h4>
                                        <div class="info">
                                            <strong class="amount">{{ $total_customer }}</strong>
                                            {{-- <span class="text-primary">(14 unread)</span> --}}
                                        </div>
                                    </div>
                                    <div class="summary-footer">
                                        <a class="text-muted text-uppercase" href="{{ route('customer-list') }}">(view all)</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-xl-6">
                    <section class="card card-featured-left card-featured-secondary">
                        <div class="card-body">
                            <div class="widget-summary">
                                <div class="widget-summary-col widget-summary-col-icon">
                                    <div class="summary-icon bg-primary">
                                        <i class="fas fa-money-bill-wave"></i>

                                    </div>
                                </div>
                                <div class="widget-summary-col">
                                    <div class="summary">
                                        <h4 class="title">Total Sell</h4>
                                        <div class="info">
                                            <strong class="amount">৳ {{ $total_sale }}</strong>
                                        </div>
                                    </div>
                                    <div class="summary-footer">
                                        <a class="text-muted text-uppercase" href="#">(report)</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6">
                    <section class="card card-featured-left card-featured-tertiary mb-3">
                        <div class="card-body">
                            <div class="widget-summary">
                                <div class="widget-summary-col widget-summary-col-icon">
                                    <div class="summary-icon bg-info">
                                        <i class="fas fa-money-bill-wave"></i>
                                    </div>
                                </div>
                                <div class="widget-summary-col">
                                    <div class="summary">
                                        <h4 class="title">Today's Sell</h4>
                                        <div class="info">
                                            <strong class="amount">৳ {{ $todays_sale }}</strong>
                                        </div>
                                    </div>
                                    <div class="summary-footer">
                                        <a class="text-muted text-uppercase" href="#">(report)</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-xl-6">
                    <section class="card card-featured-left card-featured-quaternary">
                        <div class="card-body">
                            <div class="widget-summary">
                                <div class="widget-summary-col widget-summary-col-icon">
                                    <div class="summary-icon bg-info">
                                        <i class="fa fa-users"></i>
                                    </div>
                                </div>
                                <div class="widget-summary-col">
                                    <div class="summary">
                                        <h4 class="title">Today's Customer</h4>
                                        <div class="info">
                                            <strong class="amount">{{ $todays_customer }}</strong>
                                        </div>
                                    </div>
                                    <div class="summary-footer">
                                        <a class="text-muted text-uppercase" href="{{ route('customer-list') }}">(report)</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
    

    <!-- end: page -->
</section>
@endsection