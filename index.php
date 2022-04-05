<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .form-group{
            margin-bottom:10px;
            text-align:center;
        }
    </style>
</head>
<body>

     <form action="handle.php">
         <div class="form-group">
             <label for="">Table</label>
             <input type="number" name="table" min="1" max="400" required>
         </div>
         <div class="form-group">
             <label for="">Table</label>
             <input type="radio" name="table" min="1" max="400" required>
         </div>
        
         <div class="form-group">
             <button>Submit</button>
         </div>
     </form>

</body>
</html>