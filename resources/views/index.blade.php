<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Hooby Form</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>
<body>
<div class="container">
    <div class="row m-2">
        <div class="col"></div>
    <a href="{{ route('data')}}" class="btn btn-info col-md-2" style="float: right;">View Data</a>
    </div>
    <div class="row justify-content-center">
        <div class="form-group col-md-8  align-center" style="padding:100px">
            <h1 style="text-align: center; background-color:orange;">Hobbies Form</h1>
            <form id="myForm" method="post" style="background-color:powderblue; padding:10px;" enctype="multipart/form-data" >
            <input  type="hidden" value="0" name="id" id="id">
                <div class="form-group">
                    <label for="inlineFormInput">Name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name">
                    <span id="welcome"></span>
                </div><br>
                <label for="inlineFormInput">Hobbies</label>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="1" name="singing" id="hobby1">
                    <label class="form-check-label" for="exampleCheck1">Singing</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="1" name="dancing" id="hobby2">
                    <label class="form-check-label" for="exampleCheck1">Dancing</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="1" name="indore_game" id="hobby3">
                    <label class="form-check-label" for="exampleCheck1">Indoor games</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="1" name="outdoor_game" id="hobby4">
                    <label class="form-check-label" for="exampleCheck1">Outdoor games</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="1" name="others" id="hobby5">
                    <label class="form-check-label" for="exampleCheck1">others</label>
                </div><br>
            </form>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script> 
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
$(document).ready(function(){
    function autosave()
    {
        var name = $('#name').val();
        var h1="0";
        if($("#hobby1").is(':checked')){
            var h1=$("#hobby1").val();
        }
        var h2="0";
        if($("#hobby2").is(':checked')){
            var h2=$("#hobby2").val();
        }
        var h3="0";
        if($("#hobby3").is(':checked')){
            var h3=$("#hobby3").val();
        }
        var h4="0";
        if($("#hobby4").is(':checked')){
            var h4=$("#hobby4").val();
        }
        var h5="0";
        if($("#hobby5").is(':checked')){
            var h5=$("#hobby5").val();
        }

        var id=$("#id").val();
        if(name)
        {
            console.log("ajax started");
            $.ajax({
                type:'post',
                url:'/submit',
                data:{name:name,h1:h1,h2:h2,h3:h3,h4:h4,h5:h5,_token:"{{csrf_token()}}",id:id},
                success: function(response) {
                    console.log(response);
                    $("#welcome").html("Welcome to our site "+response.data.name);
                    $("#id").val(response.data.id);
                }
            });
        }

    };
    setInterval(function(){
        autosave();
    },2000);
});
</script>
    
</body>
</html
