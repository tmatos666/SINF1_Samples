<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    </head>
    <body>
        
        <button id="open-child-window">Open Child Window</button><br><br>
        <input type="text" id="mytext" value="">
        <div id="message-from-container"></div>
        <script>

// This will hold the handle of the child window
            var __CHILD_WINDOW_HANDLE = null;

            $("#open-child-window").on('click', function () {
                __CHILD_WINDOW_HANDLE = window.open('tableValues.html', '_blank', 'width=700,height=500,left=200,top=100');
            });

//            $("#send-message-child").on('click', function () {
//                if ($.trim($("#message").val()) != '') {
//                    __CHILD_WINDOW_HANDLE.ProcessParentMessage($("#message").val());
//                    $("#message").val('');
//                }
//            });
//
            function ProcessChildMessage(message) {
                //$("#message-from-container").append('<div>' + message + '</div>');        
                $("#mytext").val(message);
            }

        </script>

    </body>
</html>
