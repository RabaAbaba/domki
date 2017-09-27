<html>
<head>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){

         $(".divlink").click(function(){
         $("#content").attr("src" , $(this).attr("ref"));

});

});
</script>
</head>
<body>
<iframe id="content"></iframe>

<a href="#" ref="page1.html" class="divlink" >Page 1</a><br />
<a href="#" ref="page2.html" class="divlink" >Page 2</a><br />
<a href="#" ref="page3.html" class="divlink" >Page 3</a><br />
<a href="#" ref="page4.html" class="divlink" >Page 4</a><br />
<a href="#" ref="page5.html" class="divlink" >Page 5</a><br />
<a href="#" ref="page6.html" class="divlink" >Page 6</a><br />
</body>
</html>