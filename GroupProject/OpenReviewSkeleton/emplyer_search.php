<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css">
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8" />
    <title>View events</title>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/view_events.js"></script>
    <script>
        $(document).ready(function(){
            $('#text-box input[type="text"]').on("keyup input", function(){
                var inputVal = $(this).val();
                if(inputVal.length){
                    $.get("searchEventsProcess.php", {term: inputVal}).done(function(data){
                        document.getElementById("text_name").innerHTML = data

                    });
                }
                else {
                    document.getElementById("text_name").innerHTML = "<p>Please enter an event name!</p>"
                }
            });
        });
    </script>
</head>

<body>
<div class="main">
    <div class="row">
        <div class="col"><h1 class="text-center" id="login">Search Events</h1></div>
    </div>
    <div class="row">
        <div class="col-1">
        </div>
        <div class="col-2">
            <button type="button" class="btn btn-secondary" onclick="homePage()">Back</button>
        </div>
    </div>
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4" id="text-box">
            <form>
                <input type="text" autocomplete="off" placeholder="Search events..." />
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <h3 class="text-center">Search Results:</h3>
            <div id="view">
                <span class="text-center" id="text_name"><p>Please enter an event name!</p></span>
            </div>
        </div>
    </div>

</div>

</div>
</body>



</html>