<!DOCTYPE html>
<html lang="pt" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Buscar</title>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/js.cookie.min.js"></script>    
</head>
<body>
    <div style="text-align:center;">
        <h1>Buscar</h1>
        <form onsubmit="buscar();" action="redirect.php" method="get">
            <select name="key" style="width:400px">
                <?php
                ini_set('display_errors', 1);
                ini_set('display_startup_errors', 1);
                error_reporting(E_ALL);
                $buscas=require 'buscas.php';
                foreach ($buscas as $key => $value) {
                    if($key=='twitter'){
                        $sel=' selected';
                    }else{
                        $sel=null;
                    }
                    $sel=null;                    
                    print '<option value="'.$key.'"'.$sel.'>';
                    print $key;
                    print '</option>';
                }
                ?>
            </select><br><br>
            <input type="text" name="q" id="q" style="width:384px"><br><br>
            <button type="submit">Buscar</button>
        </form>
    </div>
    <script>
    function buscar(){
        Cookies.set('busca',$('select[name=key] option').filter(':selected').val());
    }
    $(function(){
        if(Cookies.get('busca')!=undefined){
            var busca=Cookies.get('busca');
            $('select[name=key] option[value="'+busca+'"]').attr('selected','selected');        
        }else{
            $('select[name=key] option[value=twitter').attr('selected','selected');
        }
        $('input[type=text]').focus();
        $('select').on('change', function (e) {
            //var optionSelected = $("option:selected", this);
            //var valueSelected = this.value;
            $('input[type=text]').focus();
        });
    });
</script>
</body>
</html>
