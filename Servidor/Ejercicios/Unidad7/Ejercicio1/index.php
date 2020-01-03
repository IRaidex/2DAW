<?php
session_start();
$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

if(isset($_POST['enviar'])){
    echo $_POST['idioma'];
    if($_POST['idioma'] == "1"){
        $_SESSION['idioma'] = "castellano";
         header('Location: index.php');
    }else if($_POST['idioma'] == "2"){
        $_SESSION['idioma'] = "valenciano";
         header('Location:  index.php');
    }else if($_POST['idioma'] == "3"){
        $_SESSION['idioma'] = "ingles";
         header('Location:  index.php');
    }
}

?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Marc Márquez</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

        <style>

            .row{
                text-align: center;
                padding: 3%;
            }
            .header{
                font-size: 75px;
                background: url('cabecera.jpg')center;
                color: #462ee0;
                margin: 0;
            }

            #cabecera{
                font-size: 100px;
            }
            .footer{
                justify-content: space-around;
            }
        </style>
    </head>
    <body>

        <div class="jumbotron  text-center img-fluid header">
            <h1 class="display-2">Marc Márquez</h1> 
        </div>
        <?php if($_SESSION['idioma']=='castellano' && $lang=='es'): ?>
        <div class="container-fluid ">
            <div class="row justify-content-center ">
                <div class="col-md-2">
                    <form class="form-inline" action="#" method="post">
                        <select class="browser-default custom-select" name="idioma">
                            <option value="1" selected>Castellano</option>
                            <option value="2" >Valenciano</option>
                            <option value="3" >Ingles</option>
                        </select>
                        <div class="pl-3">
                            <input type="submit" name="enviar" value="Enviar" class="btn btn-info">
                        </div>
                    </form>
                </div>   
            </div>
            <div class="row justify-content-center "> 
                <div class="col-md-4 p-2">
                    <p>Marc Márquez Alentà (Cervera, Lérida, 17 de febrero de 1993) es un piloto de motociclismo español que, actualmente, corre en MotoGP. Ha ganado ocho títulos del Campeonato del Mundo de Motociclismo en tres categorías diferentes: 125cc (2010), Moto2 (2012) y seis veces en MotoGP (2013, 2014, 2016, 2017, 2018 y 2019). Actualmente es piloto del equipo Repsol Honda, donde ha acumulado 50 victorias y 78 podios en 105 carreras disputadas.</p>
                </div>                
                <div class="col-md-4 p-2">
                    <p>En su primera temporada en la máxima categoría, en 2013, se hizo con el Campeonato del Mundo de Motociclismo, convirtiéndose en el piloto más joven en ganar un campeonato de la máxima categoría de este deporte (MotoGP), superando así el récord de Freddie Spencer. Es, además, el piloto más joven de la historia en ser bi, tri, tetra, penta y hexacampeón de la categoría reina del motociclismo.</p>
                </div>
                <div class="col-md-4 p-2">
                    <p>Tiene un hermano tres años menor, Álex Márquez (n. 1996), que, actualmente, corre en la categoría de Moto2 y ha obtenido dos títulos del Campeonato del Mundo de Motociclismo. Marc y Álex son los únicos hermanos que han conseguido un Campeonato del Mundo de Motociclismo y además en la misma temporada (en 2014 y en 2019), junto con haber sido los primeros hermanos en vencer en un Gran Premio en el mismo día (el 15 de junio de 2014 en el Gran Premio de Cataluña de Motociclismo, en el circuito de Montmeló, España y los que más veces han coincidido en el podio de un Gran Premio.</p>
                </div>
                <div class="col-md-12 p-3">
                    <p>Durante la temporada 2019, Márquez demostró un dominio aplastante, quedando en primera o segunda posición durante todas las carreras excepto en Texas, dónde se cayó cuando lideraba la carrera con ventaja. A falta de 5 carreras, Márquez aventajaba en 98 puntos a su más inmediato perseguidor (Dovizioso) quedando 125 puntos por disputarse, por lo que solo necesitaba sacar dos puntos más que el italiano para conseguir el título. Marc aprovechó su primera ocasión, en el Gran Premio de Tailandia, donde superó a Fabio Quartararo en la última curva para cosechar una nueva victoria que le permitía alzarse con su sexto entorchado de MotoGP, siendo su cuarto título consecutivo y el octavo de su carrera, lo que le sitúa a un título de Valentino Rossi y a dos de Giacomo d'Agostino en la clasificación histórica de campeonatos en la categoría reina.

                        En esta campaña batió el récord de podios en una sola temporada, 18, y el récord de puntos, 420.26 Esta enorme cantidad de puntos, junto a los 28 sumados por Jorge Lorenzo y a los 10 aportados por Stefan Bradl, permitieron a Honda HRC conquistar también el campeonato por equipos.
                    </p>
                </div>
            </div>
        </div>
        <?php elseif($_SESSION['idioma']=='valenciano'): ?>
        <div class="container-fluid ">
            <div class="row justify-content-center ">
                <div class="col-md-2">
                    <form class="form-inline" action="#" method="post">
                        <select class="browser-default custom-select" name="idioma">
                            <option value="1" name="idioma">Castellano</option>
                            <option value="2" name="idioma" selected>Valenciano</option>
                            <option value="3" name="idioma">Ingles</option>
                        </select>
                        <div class="pl-3">
                            <input type="submit" name="enviar" value="Enviar" class="btn btn-info">
                        </div>
                    </form>
                </div>   
            </div>
            <div class="row justify-content-center "> 
                <div class="col-md-4 p-2">
                    <p>Marc Márquez *Alentà (Cervera, Lleida, 17 de febrer de 1993) és un pilot de motociclisme espanyol que, actualment, corre en *MotoGP. Ha guanyat huit títols del Campionat del Món de Motociclisme en tres categories diferents: 125*cc (2010), Moto2 (2012) i sis vegades en *MotoGP (2013, 2014, 2016, 2017, 2018 i 2019). Actualment és pilot de l'equip Repsol Honda, on ha acumulat 50 victòries i 78 podis en 105 carreres disputades.</p>
                </div>                
                <div class="col-md-4 p-2">
                    <p>En la seua primera temporada en la màxima categoria, en 2013, es va fer amb el Campionat del Món de Motociclisme, convertint-se en el pilot més jove a guanyar un campionat de la màxima categoria d'aquest esport (*MotoGP), superant així el rècord de *Freddie Spencer. És, a més, el pilot més jove de la història a ser *bi, *tri, *tetra, *penta i *hexacampeón de la categoria regna del motociclisme.</p>
                </div>
                <div class="col-md-4 p-2">
                    <p>Té un germà tres anys menor, Álex Márquez (n. 1996), que, actualment, corre en la categoria de Moto2 i ha obtingut dos títols del Campionat del Món de Motociclisme. Marc i Álex són els únics germans que han aconseguit un Campionat del Món de Motociclisme i a més en la mateixa temporada (en 2014 i en 2019), juntament amb haver sigut els primers germans a véncer en un Gran Premi en el mateix dia (el 15 de juny de 2014 en el Gran Premi de Catalunya de Motociclisme, en el circuit de Montmeló, Espanya i els que més vegades han coincidit en el podi d'un Gran Premi.</p>
                </div>
                <div class="col-md-12 p-3">
                    <p>Durant la temporada 2019, Márquez va demostrar un domini aclaparador, quedant en primera o segona posició durant totes les carreres excepte a Texas, on va caure quan liderava la carrera amb avantatge. Mancant 5 carreres, Márquez avantatjava en 98 punts al seu més immediat perseguidor (Dovizioso) quedant 125 punts per disputar-se, per la qual cosa només necessitava traure dos punts més que l'italià per a aconseguir el títol. Marc va aprofitar la seua primera ocasió, en el Gran Premi de Tailàndia, on va superar a Fabio *Quartararo en l'última corba per a collir una nova victòria que li permetia alçar-se amb el seu sisé entorxat de *MotoGP, sent el seu quart títol consecutiu i el huité de la seua carrera, la qual cosa li situa a un títol de Valentino Rossi i a dos de *Giacomo d'*Agostino en la classificació històrica de campionats en la categoria regna.

                        En aquesta campanya va batre el rècord de podis en una sola temporada, 18, i el rècord de punts, 420.26 Aquesta enorme quantitat de punts, al costat dels 28 sumats per Jorge Lorenzo i als 10 aportats per *Stefan *Bradl, van permetre a Honda *HRC conquistar també el campionat per equips.
                    </p>
                </div>
            </div>
        </div>
        <?php elseif($_SESSION['idioma']=='ingles'): ?>
        <div class="container-fluid ">
            <div class="row justify-content-center ">
                <div class="col-md-2">
                    <form class="form-inline" action="#" method="post">
                        <select class="browser-default custom-select" name="idioma">
                            <option value="1" name="idioma">Castellano</option>
                            <option value="2" name="idioma">Valenciano</option>
                            <option value="3" name="idioma" selected>Ingles</option>
                        </select>
                        <div class="pl-3">
                            <input type="submit" name="enviar" value="Enviar" class="btn btn-info">
                        </div>
                    </form>
                </div>   
            </div>
            <div class="row justify-content-center "> 
                <div class="col-md-4 p-2">
                    <p>Marc Márquez Alentà (Cervera, Lleida, February 17, 1993) is a Spanish motorcycle racer who currently runs in MotoGP. He has won eight World Motorcycling Championship titles in three different categories: 125cc (2010), Moto2 (2012) and six times in MotoGP (2013, 2014, 2016, 2017, 2018 and 2019). He is currently a Repsol Honda team pilot, where he has accumulated 50 wins and 78 podiums in 105 races.
                    </p>
                </div>                
                <div class="col-md-4 p-2">
                    <p>In his first season in the highest category, in 2013, he won the Motorcycle World Championship, becoming the youngest rider to win a championship of the highest category of this sport (MotoGP), thus exceeding Freddie Spencer's record . He is also the youngest rider in history to be bi, tri, tetra, penta and hexacampeón of the queen category of motorcycling.</p>
                </div>
                <div class="col-md-4 p-2">
                    <p>He has a brother three years younger, Álex Márquez (n. 1996), who currently runs in the Moto2 category and has obtained two titles of the Motorcycle World Championship. Marc and Álex are the only brothers who have won a Motorcycle World Championship and also in the same season (in 2014 and 2019), along with being the first brothers to win a Grand Prix on the same day (15 June 2014 in the Grand Prix of Motorcycling in Catalonia, in the circuit of Montmeló, Spain and those who have coincided more often on the podium of a Grand Prix.
                    </p>
                </div>
                <div class="col-md-12 p-3">
                    <p>During the 2019 season, Márquez demonstrated overwhelming dominance, being in first or second position during all races except in Texas, where he fell when leading the race with advantage. In the absence of 5 races, Márquez was 98 points ahead of his most immediate pursuer (Dovizioso) with 125 points left to play, so he only needed to score two more points than the Italian to get the title. Marc took advantage of his first occasion, in the Thai Grand Prix, where he beat Fabio Quartararo in the last corner to reap a new victory that allowed him to win his sixth MotoGP draw, being his fourth consecutive title and the eighth of his career, which places him to a title of Valentino Rossi and two of Giacomo d'Agostino in the historical classification of championships in the queen category.

                        In this campaign he beat the podium record in a single season, 18, and the record points, 420.26 This huge amount of points, together with the 28 added by Jorge Lorenzo and the 10 contributed by Stefan Bradl, allowed Honda HRC to also conquer The team championship.
                    </p>
                </div>
            </div>
        </div>
        <?php endif ?>
        <footer id="sticky-footer" class="py-4 bg-dark text-white-50">
            <div class="container text-center">
                <small>Copyright &copy; Your Website</small>
            </div>            
            <div class="container text-center">
                <small>Email: marcmarquez@gmail.com</small>
            </div>
            <div class="container text-center">
                <small>Telefono: 961331449</small>
            </div>
        </footer>

    </body>
</html>