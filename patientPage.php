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
    <script type="text/javascript">
        function dragLine() {

        }
    </script>
</head>
<body>
<div id="content_container">
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
    <div id="content">
        <div id="top_bar">
            <p class="info">
Today's Visit:

BP:         Temp:       Height:     Weight:     BMI:
120/80      98 degrees  5' 3"       53.1 kg     24.2
            </p>
        </div>
        <div id="documents">
            <p class="info">
Documents

Document 1
Document 2
Document 3
            </p>
        </div>
        <div id="draggable_line" onmousedown="dragLine()"></div>
        <div id="current_chart" class="overtime">
            Current Chart
        </div>
    </div>
</div>
</body>
</html>
