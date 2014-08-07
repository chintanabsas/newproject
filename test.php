
 <script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
</script>
<script>
$(document).ready(function() {

alert("dchgfhjfjgjuhuk");
window.parent.document.getElementById('#target'); 
 var select_frame = document.getElementById("select_frame");
            var select_framedocument=select_frame.contentDocument||select_frame.contentWindow.document;
            var inputIframe = select_framedocument.getElementById("select_name");
            alert(inputIframe.value);


});

function test()
{

window.parent.document.getElementById('#target'); 
 var select_frame = document.getElementById("select_frame");
            var select_framedocument=select_frame.contentDocument||select_frame.contentWindow.document;
            var inputIframe = select_framedocument.getElementById("select_name");
            alert(inputIframe.value);


}
</script>

<iframe name='select_frame' id ="select_frame" src='select.php?initial_name=jim'></iframe>
<input type='button' name='save' value='SAVE'>