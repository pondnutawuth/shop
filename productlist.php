<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body onload=product_list()>
    <div id="p_list"></div>
    <script>
    function prosuct_list() {
        let xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function(){
            console.log(this.readyState +" , "+this.status);
            if (this.readyState==4&&this.status== 200) {
                alert(this.responseText);
            }
        }
        xhttp.open("Get","prosuct_rest.php",true);
        xhttp.send();
    }
    </script>
</body>
</html>