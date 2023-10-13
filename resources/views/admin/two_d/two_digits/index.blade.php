@extends('layouts.admin_app')
@section('styles')
<link href="{{ asset('admin_app/assets/plugins/datatables.net-bs5/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet">
	<link href="{{ asset('admin_app/assets/plugins/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css') }}" rel="stylesheet">
	<link href="{{ asset('admin_app/assets/plugins/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css') }}" rel="stylesheet">
	<link href="{{ asset('admin_app/assets/plugins/bootstrap-table/dist/bootstrap-table.min.css') }}" rel="stylesheet">
 <style>
    .digit.selected {
        background-color: #007bff;  /* Bootstrap primary color */
        color: white;  /* Text color for better contrast */
        /* rounded */
        border-radius: 50%;
        -moz-border-radius: 50%;
        -webkit-border-radius: 50%;
        /* circle */
        width: 2.5rem;
        height: 2.5rem;
        line-height: 2.5rem;

    }
</style>

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
            Permission Dashboard <small>page header description goes here...</small>
        </h1>

        <hr class="mb-4">

        <!-- BEGIN #datatable -->
        <div id="datatable" class="mb-5">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#twoDigitModal">
                Show Two Digit</button>
                <div class="card">
                    <div class="card-body">
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- END col-9-->
    </div>
    <!-- END row -->
</div>
					<!-- END col-10 -->
     <!-- Modal -->
<div class="modal fade" id="twoDigitModal" tabindex="-1" aria-labelledby="twoDigitModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="twoDigitModalLabel">Two Digits
            &nbsp; &nbsp; &nbsp; &nbsp; Account Balance
            <span>{{ Auth::user()->balance }}</span>
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
    @foreach($twoDigits->chunk(5) as $chunk)
        <div class="row my-5">
            @foreach($chunk as $digit)
                <div class="col-2 text-center digit" onclick="addNumberToInput('{{ $digit->two_digit }}', this)">
    {{ $digit->two_digit }} 
    {{-- <span class="btn btn-warning btn-sm">R</span> --}}
</div>

            @endforeach
        </div>
    @endforeach

    <form action="" method="post">
        @csrf

        {{-- two_digit input --}}
        <div class="form-group mb-3">
            <label for="two_digit">Two Digit</label>
            <input type="text" name="two_digit[]" multiple id="two_digit" class="form-control" placeholder="Enter Two Digit">
        </div>

        {{-- price or amount --}}
        <div class="form-group mb-3">
            <label for="amount">Amount</label>
            <input type="text" name="amount" id="amount" class="form-control" placeholder="Enter Amount">
        </div>

        {{-- playNow btn --}}
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">playNow</button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
    </form>
</div>

</div>
</div>
				<!-- END row -->
 @include('sweetalert::alert')

			</div>
@endsection

@section('scripts')
<script src="{{ asset('admin_app/assets/plugins/@highlightjs/cdn-assets/highlight.min.js') }}"></script>
	<script src="{{ asset('admin_app/assets/js/demo/highlightjs.demo.js') }}"></script>
	<script src="{{ asset('admin_app/assets/plugins/datatables.net/js/jquery.dataTables.min.js') }}"></script>
	<script src="{{ asset('admin_app/assets/plugins/datatables.net-bs5/js/dataTables.bootstrap5.min.js') }}"></script>
	<script src="{{ asset('admin_app/assets/plugins/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
	<script src="{{ asset('admin_app/assets/plugins/datatables.net-buttons/js/buttons.colVis.min.js') }}"></script>
	<script src="{{ asset('admin_app/assets/plugins/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
	<script src="{{ asset('admin_app/assets/plugins/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
	<script src="{{ asset('admin_app/assets/plugins/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
	<script src="{{ asset('admin_app/assets/plugins/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js') }}"></script>
	<script src="{{ asset('admin_app/assets/plugins/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
	<script src="{{ asset('admin_app/assets/plugins/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js') }}"></script>
	<script src="{{ asset('admin_app/assets/plugins/bootstrap-table/dist/bootstrap-table.min.js') }}"></script>
	<script src="{{ asset('admin_app/assets/js/demo/table-plugins.demo.js') }}"></script>
	<script src="{{ asset('admin_app/assets/js/demo/sidebar-scrollspy.demo.js') }}"></script>
	<!-- ================== END page-js ================== -->
 <script>
// function addNumberToInput(num) {
//     const input = document.getElementById('two_digit');
//     const currentValue = input.value;
//     input.value = currentValue ? currentValue + "," + num : num;
// }


function addNumberToInput(num, element) {
    const input = document.getElementById('two_digit');
    const currentValue = input.value;

    // Check if the digit is already in the input
    if (currentValue.includes(num)) {
        // If it is, remove the digit and its style
        input.value = currentValue.replace(num, '').replace(',,', ',').replace(/^,|,$/g, '');
        element.classList.remove('selected');
    } else {
        // Otherwise, add the digit and its style
        input.value = currentValue ? currentValue + "," + num : num;
        element.classList.add('selected');
    }
}


</script>

@endsection
