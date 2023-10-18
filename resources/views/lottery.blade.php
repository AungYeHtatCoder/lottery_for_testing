<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!-- CSS for indicating an update -->
<style>
    .activeUpdate {
        background-color: #f2f2f2;  /* A light grey background for a flash effect */
        transition: background-color 0.3s; /* Smooth transition effect */
    }
</style>

<!-- Live Data -->
<h2>Live Data</h2>
<p>Set: <span id="liveSet">{{ $data['live']['set'] }}</span></p>
<p>Value: <span id="liveValue">{{ $data['live']['value'] }}</span></p>
<p>Time: <span id="liveTime">{{ $data['live']['time'] }}</span></p>

<!-- Results -->
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
    $(document).ready(function() {
        function fetchData() {
            $.ajax({
                url: "/stockdata",
                type: "GET",
                dataType: "json",
                success: function(data) {
                    // Update live data
                    updateLiveData(data.live);

                    // Update results
                    updateResultsData(data.result);
                }
            });
        }

        function updateLiveData(liveData) {
            // Helper function to update text and possibly animate the update
            function updateAndAnimate(elementId, newValue) {
                const element = $(elementId);
                if (element.text() !== newValue) {
                    element.text(newValue).addClass('activeUpdate');
                    setTimeout(function() {
                        element.removeClass('activeUpdate');
                    }, 300);
                }
            }

            updateAndAnimate("#liveSet", liveData.set);
            updateAndAnimate("#liveValue", liveData.value);
            $("#liveTime").text(liveData.time);  // Always update time
        }

        function updateResultsData(results) {
            let resultsHtml = '';
            results.forEach(function(result) {
                resultsHtml += `
                    <p>Set: ${result.set}</p>
                    <p>Value: ${result.value}</p>
                    <p>Open Time: ${result.open_time}</p>
                    <hr>
                `;
            });

            $("#resultsData").html(resultsHtml);
        }

        fetchData();  // Initial data fetch
        setInterval(fetchData, 3000);  // Fetch data every 3 seconds
    });
</script>

</body>
</html>