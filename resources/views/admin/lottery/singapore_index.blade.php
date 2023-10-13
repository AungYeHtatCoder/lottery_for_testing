@extends('layouts.admin_app')
@section('styles')
@include('layouts.index_css')
	<link href="{{ asset('admin_app/assets/plugins/lity/dist/lity.min.css') }}" rel="stylesheet">

@endsection
@section('content')
  <div class="container">
				<!-- BEGIN row -->
				<div class="row justify-content-center">
					<!-- BEGIN col-10 -->
					<div class="col-xl-10">
						<!-- BEGIN row -->
						<div class="row">
							<!-- BEGIN col-9 -->
							<div class="col-xl-12">
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
									<li class="breadcrumb-item active">Singapore Lottery Dashboard</li>
								</ul>

								<h1 class="page-header">
									Singapore Lottery Dashboard <small>page header description goes here...</small>
								</h1>

								<hr class="mb-4">

								<!-- BEGIN #datatable -->
								<div id="datatable" class="mb-5">
									<h4><a href="{{ route('admin.lotteries.create') }}" class="btn btn-primary">New Singapore Lottery Ticket Create</a></h4>
									<p></p>
									<div class="card">
										<div class="card-body">
											<table id="datatableDefault" class="table text-nowrap w-100">
												<thead>
													<tr>
														<th>#</th>
              <th>LotteryName</th>
														<th>Ticket Image</th>
														<th>Ticket No</th>
              <th>TicketPrice</th>
														<th>Start Date</th>
              <th>OpeningDate</th>
														<th>Action</th>
													</tr>
												</thead>
          <tbody>
              @foreach($lotteries as $key => $lottery)
              @if($lottery->category->category_name === 'Singapore_Lottery')
              <tr>
														<td>{{ ++$key }}</td>
              <td>{{ $lottery->category->category_name }}</td>
														<td>
               <div class="profile-img-list-item main">
                <a href="{{ $lottery->files }}" data-lity class="profile-img-list-link">
          <img src="{{ $lottery->files }}" alt="Lottery Image" width="100">
        </a>
                </div>
              </td>
														<td>{{ $lottery->ticket_no }}</td>
              <td>{{ $lottery->ticket_price}}</td>
             <td>{{ $lottery->start_date }}</td>
             <td>{{ $lottery->end_date }}</td>
             <td>
                 <a href="{{ route('admin.lotteries.edit', $lottery->id) }}" class="btn btn-primary btn-sm">Edit</a>
                 <a href="{{ route('admin.lotteries.show', $lottery->id) }}" class="btn btn-info btn-sm">Show</a>
                 <form class="d-inline" action="{{ route('admin.lotteries.destroy', $lottery->id) }}" method="POST">
                     @csrf
                     @method('DELETE')
                     <button type="submit" class="btn btn-danger btn-sm">Del</button>
                 </form>
             </td>
                </tr>
                @endif
                @endforeach
            </tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
							<!-- END col-9-->
						</div>
						<!-- END row -->
					</div>
					<!-- END col-10 -->
				</div>
				<!-- END row -->
 @include('sweetalert::alert')

			</div>
@endsection

@section('scripts')
@include('layouts.index_js')
<script src="{{ asset('admin_app/assets/plugins/lity/dist/lity.min.js') }}"></script>
	<!-- ================== END page-js ================== -->
@endsection
