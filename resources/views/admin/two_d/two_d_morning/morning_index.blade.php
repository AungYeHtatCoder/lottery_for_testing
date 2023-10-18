@extends('layouts.admin_app')
@section('styles')
<link href="{{ asset('admin_app/assets/plugins/datatables.net-bs5/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet">
	<link href="{{ asset('admin_app/assets/plugins/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css') }}" rel="stylesheet">
	<link href="{{ asset('admin_app/assets/plugins/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css') }}" rel="stylesheet">
	<link href="{{ asset('admin_app/assets/plugins/bootstrap-table/dist/bootstrap-table.min.css') }}" rel="stylesheet">
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
									<li class="breadcrumb-item active">Permission Dashboard</li>
								</ul>

								<h1 class="page-header">
									2D Morning (12AM) Dashboard <small>page header description goes here...</small>
								</h1>

								<hr class="mb-4">

								<!-- BEGIN #datatable -->
								<div id="datatable" class="mb-5">
									<h4><a href="#" class="btn btn-primary">{{ Auth::user()->name}} : &nbsp; &nbsp; Account Balance :  {{ Auth::user()->balance }}</a>
									</h4>
									<div class="row">
										<div class="col-md-6">
												
										<form action="{{ route('admin.tow-d-win-number.store')}}" method="post">
											@csrf
											<div class="form-group">
												<label for="two_digit">Two Digit</label>
												<input type="text" name="prize_no" class="form-control" id="two_digit" placeholder="Enter Two Digit">
											</div>
										<button type="submit" class="btn btn-success">Add Prize win_number
										</button>
										</form>

										</div>
										<div class="col-md-6">
											<div class="card">
												<div class="card-header">
													<h4 class="card-title">Prize Details for Today</h4>
												</div>
												<div class="card-body">
													@if($prize_no)
    <div class="prize-details">
       
        <p>Prize Number: {{ $prize_no->prize_no }}</p>
								{{-- created_at with month year day and Am and Pm --}}
								<p>{{ $prize_no->created_at->format('d M Y (l) (h:i a)') }}</p>
        
    </div>
@else
    <p>No prize details available for today.</p>
@endif

												</div>
											</div>
										</div>
									</div>
									<div class="card">
										<div class="card-body">
											<table id="datatableDefault" class="table text-nowrap w-100">
												<thead>
        <tr>
            <th>Lottery ID</th>
            <th>PlayerName</th>
            <th>Two Digits</th>
            {{-- <th>Pay Amount</th> --}}
            {{-- <th>Total Amount</th> --}}
            {{-- <th>6AM-12PM Prize No</th> --}}
												<th>Result</th>
            {{-- <th>12PM-6PM Prize No</th> --}}
        </tr>
    </thead>
    <tbody>
        <!-- Loop through each lottery -->
@foreach($lotteries as $lottery)
    <tr>
        <td>{{ $lottery->id }}</td>
        <td>{{ $lottery->user->name }}</td>  <!-- Assuming there's a relation from Lottery to User -->
								<td>
    <ul>
        @foreach($lottery->twoDigits as $twoDigit)
            <li>
                {{ $twoDigit->two_digit }} Amount: {{ $twoDigit->pivot->sub_amount }} - 
                {{ $twoDigit->pivot->created_at->format('d M Y (l) (h:i a)') }}
            </li>
        @endforeach
    </ul>
</td>

												{{-- <td>
													{{ $lottery->created_at->format('d M Y (l) (h:i a)') }}

												</td> --}}
        <td>
            <ul>
                @foreach($lottery->twoDigitsMorning as $twoDigit)
                    <li>
                        
                        <!-- Check if it's a winner -->
                        @if($prize_no_morning && $twoDigit->two_digit === $prize_no_morning->prize_no)
                            <span class="badge badge-success">WINNER</span>
                        @endif
                    </li>
                @endforeach
            </ul>
        </td>
       
    </tr>
@endforeach

    </tbody>
           </table>
										</div>
										{{-- if user win two digit with amount 100, i will pay to user 100 * 85 . when i have been paid to user 100 * 8500, user balance is automatically update --}}
									</div>
								</div>

								<!-- END #datatable -->

								<!-- BEGIN #bootstrapTable -->

								<!-- END #bootstrapTable -->
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
@include('layouts.two_index_js')
@endsection
