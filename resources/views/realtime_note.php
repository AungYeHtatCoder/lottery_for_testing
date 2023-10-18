<style>
    .activeUpdate {
    background-color: #f2f2f2;  // A light grey background for a flash effect
    transition: background-color 0.3s; // Smooth transition effect
}

</style>
<h2>Live Data</h2>
<p>Set: {{ $data['live']['set'] }}</p>
<p>Value: {{ $data['live']['value'] }}</p>
<p>Time: {{ $data['live']['time'] }}</p>

<h2>Results</h2>
@foreach ($data['result'] as $result)
    <p>Set: {{ $result['set'] }}</p>
    <p>Value: {{ $result['value'] }}</p>
    <p>Open Time: {{ $result['open_time'] }}</p>
    <hr>
@endforeach
<h2>Live Data</h2>
<p>Set: <span id="liveSet">{{ $data['live']['set'] }}</span></p>
<p>Value: <span id="liveValue">{{ $data['live']['value'] }}</span></p>
<p>Time: <span id="liveTime">{{ $data['live']['time'] }}</span></p>

<h2>Results</h2>
<div id="resultsData">
    @foreach ($data['result'] as $result)
        <p>Set: {{ $result['set'] }}</p>
        <p>Value: {{ $result['value'] }}</p>
        <p>Open Time: {{ $result['open_time'] }}</p>
        <hr>
    @endforeach
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function(){
        // Function to fetch and update data
        function fetchData() {
            $.ajax({
                url: "/stockdata", // Assuming your endpoint is /stockdata
                type: "GET",
                dataType: "json",
                success: function(data) {
                    // Update live data
                    if ($("#liveSet").text() !== data.live.set) {
                        $("#liveSet").text(data.live.set).addClass('activeUpdate');
                    }
                    if ($("#liveValue").text() !== data.live.value) {
                        $("#liveValue").text(data.live.value).addClass('activeUpdate');
                    }

                    $("#liveTime").text(data.live.time);

                    // After a short delay, remove the activeUpdate class
                    setTimeout(function(){
                        $("#liveSet, #liveValue").removeClass('activeUpdate');
                    }, 300);  // 300ms matches the transition duration in the CSS

                    // Update results
                    let resultsHtml = '';
                    console.log(data.result);
                    data.result.forEach(function(result) {
                        resultsHtml += `
                            <p>Set: ${result.set}</p>
                            <p>Value: ${result.value}</p>
                            <p>Open Time: ${result.open_time}</p>
                            <hr>
                        `;
                    });

                    $("#resultsData").html(resultsHtml);
                }
            });
        }

        // Fetch data every 10 seconds (or whatever interval you desire)
        setInterval(fetchData, 3000);
        //console.log(fetchData);
    });
</script>

{{-- <script>
    $(document).ready(function(){
        // Function to fetch and update data
        function fetchData() {
            $.ajax({
                url: "/stockdata", // Assuming your endpoint is /stockdata
                type: "GET",
                dataType: "json",
                success: function(data) {
                    // Update live data
                    $("#liveSet").text(data.live.set);
                    $("#liveValue").text(data.live.value);
                    $("#liveTime").text(data.live.time);

                    // Update results
                    let resultsHtml = '';
                    data.result.forEach(function(result) {
                        resultsHtml += `
                            <p>Set: ${result.set}</p>
                            <p>Value: ${result.value}</p>
                            <p>Open Time: ${result.open_time}</p>
                            <hr>
                        `;
                    });

                    $("#resultsData").html(resultsHtml);
                }
            });
        }

        // Fetch data every 3 seconds (or whatever interval you desire)
        setInterval(fetchData, 3000);
        //setInterval(fetchData, 10000);

    });
</script> --}}
