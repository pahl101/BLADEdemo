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
    <link href="https://fonts.googleapis.com/css?family=Arbutus+Slab|Raleway" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="jquery/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.10.0/css/smoothness/jquery-ui-1.10.0.custom.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.10.0/jquery-ui.js"></script>
    <script type="text/javascript">
        window.addEventListener("load", function(){
            var editor = theWYSIWYG.document;
            editor.designMode = "on";

        },false);
    </script>
</head>
<body>
    <img style="margin-left: 5px" src="images/choc-logo-2014.png" alt="CHOC">

    <ul class="nav nav-tabs w3-margin-bottom w3-margin-top">
    <li><a href="index.php">Patient Menu</a></li>
    <li class="active"><a href="#home">Current Patient<img src=images/x.png style="margin-left: 20px" onclick="location.href='index.php';"></a></li>
  </ul>
<div id="content_container">

    <!-- Side Bar -->
    <div id="side_bar">
        <p class="info">

            <img src="images/user.jpg" height="150" width="150">

Jane Doe

Age: 14
Sex: Female
DOB: 1/2/3

Phone #: 343-4343
Insurance No. 342212

Diagnoses:
    Cardiomyopathy
    Asthma

Allergies:
    Nut
    Latex

        </p>
    </div>

    <!-- Anything to the right of the sidebar -->
    <div id="content">
        <div id="top_bar">
            <p class="info">
Today's Visit:

BP:         Temp:       Height:     Weight:     BMI:
120/80      98°          5' 3"       53.1 kg     24.2
            </p>
        </div>

        <!-- Documents - Dynamic Height -->
        <div id="documents">
          <div id="theRibbon">
            <button id="boldButton" title="Bold"><b>B</b></button>
            <button id="italicButton" title="Italic"><em>I</em></button>
            <button id="supButton" title="Superscript">X<sup>2</sup></button>
            <button id="subButton" title="Subscript">X<sub>2</sub></button>
            <button id="strikeButton" title="Strikethrough"><s>abc</s></button>
            <button id="orderedListButton" title="Numbered list">(i)</button>
            <button id="unorderedListButton" title="Bulleted list">&bull;</button>
            <input type="color" id="fontColorButton" title="Change Font Color">
            <input type="color" id="highlightButton" title="Highlight Text">
            <select id= "fontChanger">
                <option value="Times New Roman">Times New Roman</option>
                <option value="Consolas">Consolas</option>
                <option value="Tahoma">Tahoma</option>
                <option value="monospace">Monospace</option>
                <option value="cursive">Cursive</option>
                <option value="sans-serif">Sans-Serif</option>
                <option value="calibri">Calibri</option>
            </select>
            <script type="text/javascript">
                var fonts = document.querySelectorAll("select#fontChanger > option");
                for (var i = 0; i < fonts.length; i++) {
                    fonts[i].style.fontFamily = fonts[i].value;
                }
            </script>
            <select id="fontSizeChanger">
                <script type="text/javascript">
                    for (var i=1; i<10; ++i){
                        document.write("<option value='"+i+"'>"+i+"</option>");
                    }
                </script>
            </select>
            <button id="linkButton" title="Create Link">Link</button>
            <button id="unlinkButton" title="Remove Link">UnLink</button>
            <button id="undoButton" title="Undo">&larr;</button>
            <button id="redoButton" title="Redo">&rarr;</button>
          </div>
          <div id="richTextArea">
            <iframe id="theWYSIWYG" name="theWYSIWYG" frameborder="0"></iframe>
          </div>  
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


    var top1H, bottom1H;
    var shiftInitial;

    $(function() {

// https://stackoverflow.com/questions/38289204/jquery-ui-draggable-doesnt-resize-other-divs/38553541#38553541

        $line.draggable({
            axis: "y",
            start: function(event, ui) {
                shiftInitial = ui.position.top;
                top1H = $docs.height();
                bottom1H = $charts.height();
            },
            drag: function(event,ui) {
                var shift = ui.position.top;
                $docs.css('height', (top1H + shift - shiftInitial));
                $charts.css('height', (bottom1H - shift + shiftInitial));

                if ($charts.height() <= 0) {
                    $charts.height(0);
                    $docs.height(450);
                }
            }
         });
    });

</script>

