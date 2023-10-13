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
<span id="userBalance" data-balance="{{ Auth::user()->balance }}">{{ Auth::user()->balance }}</span>

    </h5>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>

<div class="modal-body">
    @foreach($twoDigits->chunk(5) as $chunk)
        <div class="row my-5">
            @foreach($chunk as $digit)
                <div class="col-2 text-center digit" onclick="selectDigit('{{ $digit->two_digit }}', this)">
                    {{ $digit->two_digit }}
                </div>
            @endforeach
        </div>
    @endforeach

    <form action="{{ route('admin.two-d-lotteries.store') }}" method="post">
        @csrf

        <input type="text" name="selected_digits" id="selected_digits" class="form-control">
        
        <div id="amountInputs"></div>
        <!-- Add this right above your PlayNow & Close buttons in the modal-body -->
    <div class="form-group mb-3">
        <label for="totalAmount">Total Amount</label>
        <input type="text" id="totalAmount" name="totalAmount" class="form-control" readonly>
    </div>
     <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
        {{-- PlayNow & Close buttons --}}
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
  function selectDigit(num, element) {
    const selectedInput = document.getElementById('selected_digits');
    const amountInputsDiv = document.getElementById('amountInputs');
    let selectedDigits = selectedInput.value ? selectedInput.value.split(",") : [];

    // Check if the digit is already selected
    if (selectedDigits.includes(num)) {
        // If it is, remove the digit, its style, and its input field
        selectedInput.value = selectedInput.value.replace(num, '').replace(',,', ',').replace(/^,|,$/g, '');
        element.classList.remove('selected');
        const inputToRemove = document.getElementById('amount_' + num);
        amountInputsDiv.removeChild(inputToRemove);
    } else {
        // Otherwise, add the digit, its style, and its input field
        selectedInput.value = selectedInput.value ? selectedInput.value + "," + num : num;
        element.classList.add('selected');
        
        const amountInput = document.createElement('input');
        amountInput.setAttribute('type', 'number');
        amountInput.setAttribute('name', 'amounts[' + num + ']');
        amountInput.setAttribute('id', 'amount_' + num);
        amountInput.setAttribute('placeholder', 'Amount for ' + num);
        amountInput.setAttribute('min', '100');
        amountInput.setAttribute('max', '5000');
        amountInput.setAttribute('class', 'form-control mt-2');
        amountInput.onchange = updateTotalAmount;  // Add this line to call the total update function
        amountInputsDiv.appendChild(amountInput);
    }

    updateTotalAmount();
}

// New function to calculate and display the total amount
function updateTotalAmount() {
    let total = 0;
    const inputs = document.querySelectorAll('input[name^="amounts["]');
    inputs.forEach(input => {
        total += Number(input.value);
    });
    
    // Get the user's current balance from the data attribute
    const userBalanceSpan = document.getElementById('userBalance');
    let userBalance = Number(userBalanceSpan.getAttribute('data-balance'));

    // Check if user balance is less than total amount
    if (userBalance < total) {
        alert('Your balance is not enough to play two digit.');
        return;  // Exit the function to prevent further changes
    }

    // Decrease the user balance by the total
    userBalance -= total;

    // Update the displayed balance and the data attribute
    userBalanceSpan.textContent = userBalance;
    userBalanceSpan.setAttribute('data-balance', userBalance);

    document.getElementById('totalAmount').value = total;
}

// function updateTotalAmount() {
//     let total = 0;
//     const inputs = document.querySelectorAll('input[name^="amounts["]');
//     inputs.forEach(input => {
//         total += Number(input.value);
//     });
    
//     // Get the user's current balance from the data attribute
//     const userBalanceSpan = document.getElementById('userBalance');
//     let userBalance = Number(userBalanceSpan.getAttribute('data-balance'));

//     // Decrease the user balance by the total
//     userBalance -= total;

//     // Update the displayed balance and the data attribute
//     userBalanceSpan.textContent = userBalance;
//     userBalanceSpan.setAttribute('data-balance', userBalance);

//     document.getElementById('totalAmount').value = total;
// }

// function updateTotalAmount() {
//     let total = 0;
//     const inputs = document.querySelectorAll('input[name^="amounts["]');
//     inputs.forEach(input => {
//         total += Number(input.value);
//     });
    
//     document.getElementById('totalAmount').value = total;
// }

// function selectDigit(num, element) {
//     const selectedInput = document.getElementById('selected_digits');
//     const amountInputsDiv = document.getElementById('amountInputs');
//     let selectedDigits = selectedInput.value ? selectedInput.value.split(",") : [];

//     // Check if the digit is already selected
//     if (selectedDigits.includes(num)) {
//         // If it is, remove the digit, its style, and its input field
//         selectedInput.value = selectedInput.value.replace(num, '').replace(',,', ',').replace(/^,|,$/g, '');
//         element.classList.remove('selected');
//         const inputToRemove = document.getElementById('amount_' + num);
//         amountInputsDiv.removeChild(inputToRemove);
//     } else {
//         // Otherwise, add the digit, its style, and its input field
//         selectedInput.value = selectedInput.value ? selectedInput.value + "," + num : num;
//         element.classList.add('selected');
        
//         const amountInput = document.createElement('input');
//         amountInput.setAttribute('type', 'number');
//         amountInput.setAttribute('name', 'amounts[' + num + ']');
//         amountInput.setAttribute('id', 'amount_' + num);
//         amountInput.setAttribute('placeholder', 'Amount for ' + num);
//         amountInput.setAttribute('min', '100');
//         amountInput.setAttribute('max', '5000');
//         amountInput.setAttribute('class', 'form-control mt-2');
//         amountInputsDiv.appendChild(amountInput);
//     }
// }
</script>

@endsection
