<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Menu Funções matemáticas</title>
</head>

<style>
    *,body{padding: 0; margin: 0;}

    main{
        width: 100vw;
        height: 100vh;
        position: fixed;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #dadada;
    }

    .container{
        background: #fff;
        box-shadow: 0px 0px 12px 6px rgba(0, 0, 0, .1);
    }

    .header{
        background: #0471ee;
        color: #fff;
        text-align: center;
        padding: 2em 1em;
        font-size: .9em;
    }

    .content{
        /* margin: 0 auto; */
        max-width: 100%;
        width: 100%;
    }

    form{
        margin: 2em;
    }

    input, select{
        display: table;
        max-width: 100%;
        width: 100%;
        padding: .8em 1em;
        margin-bottom: 1.5em;
    }

    input[type="number"]{
        max-width: 92%;
    }

    input[type="submit"]{
        border: none;
        color: #fff;
        background: #0471ee;
        cursor: pointer;
        text-transform: uppercase;
        font-size:1em;
    }

    h2{
        padding: 1em;
        color: #0471ee;
        border: 1px solid #0471ee;
    }
</style>
<body>
    
    <main>
        <div class="container">
            <div class="header"><h1>Fórmulas matemáticas recursivas</h1></div>
            <div class="content">
                <form action="./index.php" method="POST">
                    <select name="op" id="formulas" required>
                        <option value="" disabled selected>Escolha uma formúla</option>
                        <option value="fibonacci">fibonacci</option>
                        <option value="fatorial">fatorial</option>
                        <option value="kesimoPar">kesimoPar</option>
                        <option value="ackermann">ackermann</option>
                    </select>
                    
                    <input type="number" id="number" name="n" required placeholder="Número 01">

                    <span id="number2"></span>

                    <input type="submit" value="Calcular">

                    <h2><?= (!empty($result) ? $result : 'Resultado')?></h2>
                </form>
            </div>
        </div>
    </main>

    <script>
        document.getElementById('formulas').addEventListener('change', function(){
            if(this.value == 'ackermann'){
                document.getElementById('number2').innerHTML = '<input type="number" id="inputNumber2" name="n2" required placeholder="Número 02">';
            } else{
                document.getElementById('number2').innerHTML = "";
            }
        });
    </script>

</body>
</html>