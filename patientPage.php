<?php
/**
 * Created by PhpStorm.
 * User: tommy
 * Date: 11/8/17
 * Time: 10:45 AM
 */

?>

<!DOCTYPE html>
<html>
<head>
    <title>Patient Page</title>
    <link rel="stylesheet" type="text/css" href="css/patientPage.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<div id="content_container">

    <!-- Side Bar -->
    <div id="side_bar">
        <p class="info">
Jane Doe

Age: 14
Sex: Female
DOB: 1/2/3

Phone #: 343-4343
Insurance No. 342212

Diagnoses:
    Cardiomyopathy
    Asthma

        </p>
    </div>

    <!-- Anything to the right of the sidebar -->
    <div id="content">
        <div id="top_bar">
            <p class="info">
Today's Visit:

BP:         Temp:       Height:     Weight:     BMI:
120/80      98 degrees  5' 3"       53.1 kg     24.2
            </p>
        </div>

        <!-- Documents - Dynamic Height -->
        <div id="documents">
            <p class="info">
Documents

Document 1
Document 2
Document 3
            </p>
        </div>

        <!-- Line Placeholder -->
        <div id="draggable_line"></div>

        <!-- Current Chart (Class represents which chart is used) - Dynamic Height -->
        <div id="current_chart" class="overtime">
            <p class="info">
Current Chart
            </p>
        </div>

        <!-- Scroll Menu -->
        <div id="scroll_menu">
            <a>Vital Signs</a><a>Growth Chart</a><a>Labs</a><a>Microbiology</a><a>Pathology</a>
        </div>
    </div>
</div>
</body>
</html>

<!-- Script for Draggable Line -->
<script type="text/javascript">

    var currentMousePos = { x: -1, y: -1 };
    $(document).mousemove(function(event) {
        currentMousePos.x = event.pageX;
        currentMousePos.y = event.pageY;
        currentMousePos.click = event.click;
    });

    $line = $("#draggable_line");
    $docs = $("#documents");
    $charts = $("#current_chart");

    var finished = false;

    $line.mouseup(function() {
        finished = true;
    });

    $line.mousedown(function resize() {
        alert("hi");
        $docs.height(currentMousePos.y - $docs.offsetY);
        $charts.height($charts.offsetY - currentMousePos.y);

        if (finished === false) {
            setTimeout(resize, 100)
        }

    });

</script>
