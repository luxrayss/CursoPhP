<div class="titulo">Desafio Switch</div>

    <form action="#" method="post"> 
        <input type="text" name="param">
        <select name="conversao" id="conversao">
            <option value="km-milha">KM > Milha</option>
            <option value="milha-km">Milha > KM</option>
            <option value="metro-km">Metro > KM</option>
            <option value="km-metro">KM > Metro</option>
        </select>
        <button>Calcular</button>
    </form>

    <style>
        form > *{
            font-size: 1.8rem;
        }
    </style>

    <?php  

        //recebendo pelo post

        $valor = $_POST['param'] . '<br>';
        $conver = $_POST['conversao'];
        $resul = 0;

        switch (strtolower($conver)){
            case 'km-milha': 
                $result = $valor / 1.609;    
                echo 'A conversão de ' .$conver. ' é ' .$result;            
            break;

            case 'milha-km': 
                $result = $valor * 1.609;    
                echo 'A conversão de ' .$conver. ' é ' .$result;            
            break;

            case 'metro-km': 
                $result = $valor / 1000;    
                echo 'A conversão de ' .$conver. ' é ' .$result;            
            break;

            case 'km-metro': 
                $result = $valor * 1000;    
                echo 'A conversão de ' .$conver. ' é ' .$result;            
            break;
            
            default:  
            echo "Erro";             
                break;            
        }

        