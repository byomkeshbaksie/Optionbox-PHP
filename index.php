<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            text-align: center;
        }
    </style>
</head>
<body>

    <div class="container">
        <h4 class="text-capitalize text-center my-5">Please select the program and framework to continue</h4>
        <div class="row">

            <div class="col-lg-6 offset-lg-3">
                <form action="">
                    <div class="form-content">

                        <div class="inout-group mb-3">
                            <div class="input=group-prepend">
                                <span class="input-group-text" id="basic-addon1">PROGRAM</span>
                            </div>

                            <select class="form-control" aria-describedby="basic-addon1" data-toggle="tooltip"
                            title="Please select your favourite language" onchange="mylang(this.value)">
                                <option value="">Select here</option>
                                <option value="">PHP</option>
                                <option value="">JAVASCRIPT</option>
                                <option value="">PYTHON</option>
                        </select>
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon2">FRAMEWORK</span>
                            </div>
                            <select class="form-control" id="frameworklist" aria-describedby="basic-addon1">
                                <option>Select here</option>
                            </select>
                        </div>
                    </div>
                </form>
                
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


    <script>

    function mylang(data){

        alert(data);

        const ajaxreq = new XMLHttpRequest();
        ajaxreq.open('GET','http://localhost/optionbox/getdata.php?selectvalue='+data,'TRUE');
        ajaxreq.send();

        ajaxreq.onreadystatechange = function(){
            if(ajaxreq.readyState == 4 && ajaxreq.status == 200){
                document.getElementById('frameworklist').innerHTML = ajaxreq.responseText;
            }
        }
    }

    
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
    });

    </script>

    
</body>
</html>