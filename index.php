<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
    <style>
        <?php include  "style.css"?>
    </style>
</head>
<body class="container"></body>



       <h1 class="text-center text-primary" >Task 03</h1>
<h5 class="text-center text-dark" >Grade Calculator</h5>
    <div class="col-md-6 m-auto card p-3">
       <form method="post" >
            <div class="mb-3">
                <label  class="form-label">Enter your first marks :</label>
                <input type="number" name="num7" class="form-control">
            </div>
            <div class="mb-3">
                <label  class="form-label">Enter your second marks :</label>
                <input type="number" name="num8" class="form-control">
            </div>
            <div class="mb-3">
                <label  class="form-label">Enter your third marks :</label>
                <input type="number" name="num9" class="form-control">
            </div>
            <div class="mb-3">
            <button type="submit" class="btn btn-primary">Calculate</button>
            </div>
            </form>
            <div>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $num7 =$_POST["num7"];
                $num8 =$_POST["num8"];
                $num9 =$_POST["num9"];
                $num10 = $num7+$num8+$num9;
                $num11 = $num10/3;
                if ($num11<=100 && $num11>=80) {
                    echo $num11."<br>";
                    echo "Your Grade = A";
                }elseif ($num11<80 && $num11>=60) {
                    echo $num11."<br>";
                    echo "Your Grade = B";
                }
                elseif ($num11<60 && $num11>=50) {
                    echo $num11."<br>";
                    echo "Your Grade = C";
                }
                elseif ($num11<50 && $num11>=33) {
                    echo $num11."<br>";
                    echo "Your Grade = D";
                }else{
                    echo $num11."<br>";
                    echo "Your Grade = F";
                }
            }
        ?>
            </div>
       </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>