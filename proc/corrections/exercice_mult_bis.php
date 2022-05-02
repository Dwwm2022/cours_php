<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Site</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <style>
        th{
            background-color:yellow;
        }
        tbody tr:nth-child(even){
            background-color: grey;
        }
        th, td{
            border: 1px solid black;
            padding: 10px;
        }
        #carre{
            background-color:red;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Table de multiplication</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <input type="number" name="num" id="table" min="0">
        <button type="submit" name="submit">Ok</button>
    </form>
    <table>
        <thead>
            <tr>
                <th> </th>
                <?php 
                $num = 0;
                 if(isset($_GET['submit'])){
                    $num = $_GET['num'];
                 }
                for ($i=1; $i <=$num ; $i++) { 
                    echo "<th>$i</th>";
                }
                ?>
                
            </tr>
        </thead>
        
        <tbody>
             <?php 
               
                for ($i=1; $i <= $num; $i++) { 
                    echo "<tr><th>$i</th>";
                    for($j = 1; $j <= $num; $j++){
                        if($i===$j){
                            echo'<td id="carre">'.($i*$j).'</td>';
                        }else{
                            echo"<td>".($i*$j)."</td>";
                        }
                       
                    }
                    echo"</tr>";
                }
                ?>
            
            
        </tbody>
    </table>
</div>
</body>
</html>