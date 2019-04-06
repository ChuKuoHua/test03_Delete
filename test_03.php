<?php
    $connect = mysqli_connect("localhost","root","","txt");
    $query ="SELECT*FROM client ";
    $result = mysqli_query($connect,$query); 
    $clifie =mysqli_num_fields($result); // 取得欄位數
    $clirow =mysqli_num_rows($result);  // 取得記錄數
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    <style>
        #result {
            position:absolute;
            width:100%;
            max-width:800px;
            cursor:pointer;
            overflow-y:auto;
            max-height:350px;
            box-sizing: border-box;
            z-index:1001;
        }
        .link-class:hover{
            background-color:#000;
        }
        .row{ 
            margin: 0auto;
        }
        .room{
            padding-top:.8em;
        }
        #delete{
            padding-right:1.2em;
            padding-left:1.2em;
        }
    </style>

</head>
<body>

    <br/>
    <div class ="container" style=" width:850px;">
        <h2 align="center">ajax and php</h2>
        <br/>
            <div class="row" >

                <div class="table-responsive" id="client_details" >
                    <table class="table table-bordered">
                    <tr>
                        <td width="10%" align="left"><b>Delete</b></td>
                        <td width="20%" align="left"><b>Name</b></td>
                        <td width="20%" align="left"><b>Phone</b></td>
                        <td width="50%" align="left"><b>E-mail</b></td>
                    </tr>
                   
                    <?php
                    for ($i=0;$i<$clirow;$i++) {$row = mysqli_fetch_row($result);
                    ?>
                        <tr> 
                            <td width ="10%">
                            <form method="POST" action="delete.php">
                                <span id="client_name">                           
                                <a class="btn btn-dark" href="delete.php?del=<?php echo $row[0] ?>" onclick="return confirm('確定要刪除嗎?');">刪除</a>
                                                  
                                </span>
                            </form>
                            </td>                                          
                            <td width ="20%">
                                <span id="client_name">
                                    <?php echo  $row[1]; ?>
                                </span>
                            </td>
                            
                            <td width ="20%">
                                <span id="client_phone">
                                    <?php echo $row[2]; ?>
                                </span>
                            </td>
                            
                            <td width ="50%">
                                <span id="client_email">
                                    <?php echo $row[3]; ?>
                                </span>
                            </td>
                     <?php  } ?>
                        </tr>                         
                    </table>     
                        
                </div> 
            </div>
        <br/>                         
    </div>
</body>
</html>