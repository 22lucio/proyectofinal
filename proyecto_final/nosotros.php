
<?php include('header.php'); ?>
<section>
    <div class="btn_nosotros">
        <ul>
            <li><a href="nosotros.php?nom=sk">Saori Kiddo</a></li>
            <li><a href="nosotros.php?nom=sp">Seiya de Pegaso</a></li>
            <li><a href="nosotros.php?nom=hc">Hyoga de Cisne</a></li>
            <li><a href="nosotros.php?nom=sd">Shiryu de Dragón</a></li>
            <li><a href="nosotros.php?nom=sa">Shun de Andrómeda</a></li>
            <li><a href="nosotros.php?nom=if">Ikki de Fénix</a></li>
        </ul>

    </div>

    <?php
    
    $nombre = "";
    $info = "";
    $img = "";

    

    if (isset ($_GET['nom'])){
        switch (($_GET['nom'])) {
            case 'sk':
                $nombre = "Saori Kiddo";
                $info = "Es la Reencarnación de la diosa Atenea en la época de la serie, al principio parece ser 
                solo una caprichosa adolescente heredera de la Fundación Kido de su abuelo Mitsumasa Kido, 
                pero después descubre su verdadero origen, conforme pasa la serie 
                empezará a madurar más en su comportamiento y a afrontar su destino como diosa de la guerra.";
                $img= "/img/IMG_308.png";
                break;
            case 'sp':
                $nombre = "Seiya de Pegaso";
                $info = "Personaje principal de la serie; es el más temperamental de todos, terco, impulsivo, imprudente y necio algunas veces, 
                pero su carácter siempre le empuja a seguir adelante. 
                Sus ataques conocidos son el Meteoro de Pegaso (Pegasus Ryu Sei Ken), 
                el Cometa de Pegaso (Pegasus Sui Sei Ken) y el Choque Rodante de Pegaso (Pegasus Rolling Crash).";
                $img= "./img/IMG_0303.png";
                break; 
            case 'hc':
                $nombre = "Hyoga de Cisne";
                $info = "Aparenta frialdad, sin embargo no puede olvidar el recuerdo de su madre muerta. 
                Sus ataques son el Polvo de Diamantes (Diamond Dust), el Ataque los Rayos de la Aurora 
                (Aurora Thunder Attack) y la Ejecución de la Aurora (Aurora Execution) con la que derrota a 
                Camus de Acuario, —su maestro en el manga—. En el Anime resultó ser Crystal, santo de plata discípulo a su vez de Camus";
                $img= "./img/IMG_0304.png";
                break;
                case 'sd':
                    $nombre = "Shiryu de Dragón";
                    $info = "Ve en su maestro de artes marciales al padre que nunca tuvo, está dispuesto a morir sin pensárselo 
                    dos veces, con tal de proteger la vida de sus compañeros. Su ataque base es la Cólera del Dragón, 
                    el Dragón Ascendente de Rozan (Rozan Sho Ryu Ha), el Dragón Volador de Rozan 
                    (Rozan Ryu Hisho) y su ataque base más poderoso es el Último Dragón de Rozan (Rozan Kou Ryu Ha)";
                    $img= "./img/IMG_0307.png";
                    break;
                case 'sa':
                    $nombre = "Shun de Andrómeda";
                    $info = "Aparenta ser el más débil, sin embargo cuando ve que su entorno o sus amigos son afectados, 
                    es capaz de exteriorizar el gran poder que posee. Su armadura cuenta con la Cadena de Andrómeda, 
                    la cual utiliza en sus ataques. Cadena Nebular una técnica de ataque/defensa que al más mínimo ataque
                     del enemigo entra en acción, Onda del Trueno  y cuando pierde sus cadenas también maneja 
                     la Tormenta Nebular. Es de las pocas armaduras de bronce que contiene armas. La cadena con punta
                      circular para defensa, la defensa rodante  y la cadena con punta triangular para el ataque.";
                    $img= "./img/IMG_0306.png";
                    break; 
                case 'if':
                    $nombre = "Ikki de Fénix";
                    $info = "Hermano mayor de Shun, se muestra como el más recio de todos y es capaz de acabar
                    con sus adversarios sin remordimientos. Sin embargo también esconde en lo profundo de su ser el 
                    sentimiento de bondad y justicia. Un ataque muy conocido es el Puño Fantasma del Fénix con el que
                     puede crear ilusiones ópticas a sus enemigos, La ilusión Diabólica del Fénix y El Vuelo del Fénix. 
                     El Fénix se destaca por aparecer después que todos los caballeros estén al borde de la derrota. 
                     Tiene la habilidad de poder ir y regresar de la muerte a su antojo y su armadura es la única entre todas que puede reconstruirse sola";
                    $img= "./img/IMG_0305.png";
                    break;    
        }
    }
    
    
    ?>
    <div class="info_nosotros">
        <h2> <?php echo $nombre; ?></h2>
        <p> <?php echo $info; ?></p>
        <div class="contenedor_img">
            <img src="<?php echo $img ?>" alt="<?php echo$nombre ?>">

        </div>

    </div>
</section>

<?php include('footer.php'); ?>