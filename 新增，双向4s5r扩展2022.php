<script>
$(document).ready(function(){
  $("#btn1").click(function(){
      
      
var colors = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','1','2','3','4','5','6','7' ,'8','9'];


var x = colors[(Math.floor(Math.random() * (colors.length)))]

      
//双向4舍5入以下

      
var y4=Math.random();



var r=Math.random();



if (r>y4){


$("#"+x).append("+"+Math.random());
    


}

else{
    
$("#"+x).append("+"+Math.floor(Math.random()*0+0));


}


  });

      
/双向4舍5入以上

  $("#btn2").click(function(){
    $("ol").append("<li>追加列表项</li>");
  });
});
</script>




