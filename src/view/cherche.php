<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js%22%3E</script>
    <title>Document</title>
</head>

<body>
    <br><br>
    <div class="container" style="width: 500px;">
        <h3 align="center">autocomplete</h3>
        <label for="">Votre prenom</label>
        <input type="text" name="prenom" id="prenom" class="form-control">
        <div id="prenomList"></div>
    </div>
</body>
<script>
    $(document).ready(function(){
        $('#prenom').keyup(function(){
            var query = $(this).val();
            if(query != ''){
                $.ajax({
                    url:"seach.php",
                    method:"POST",
                    data:{query: query},
                    success:function(data){
                        $('#prenomList').fadeIn();
                        $('#prenomList').html(data);
                    }
                });
            }
        });

        $(document).on('click', 'li', function(){
            $('#prenom').val($(this).text());
            $('#prenomList').fadeOut();
        });
    });
</script>

</html>


