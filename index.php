<!DOCTYPE html>
<html>
<head>
    <title>Real-Time Variable Monitoring</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>Real-Time Variable Monitoring</h1>
    <div id="output"></div>

    <?php
    // The initial value of the monitored variable
    $monitoredValue = 0;
    ?>

    <script>
    $(document).ready(function() {
        function monitorVariable() {
            $.ajax({
                url: 'monitor.php',
                type: 'GET',
                success: function(response) {
                    $('#output').html('Monitored Value: ' + response);
                    setTimeout(monitorVariable, 1000); // Check every 1 second
                }
            });
        }

        monitorVariable();
    });
    </script>
</body>
</html>
