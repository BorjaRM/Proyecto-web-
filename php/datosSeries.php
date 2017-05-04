<?php

require("usarBD.php");

$consulta="INSERT INTO SERIE (titulo,genero,fecha_lanzamiento,temporadas,sinopsis,imagen,trailer) 
VALUES ('Juego De Tronos','Fantasía','2011-04-17',6,
'La primera temporada está basada en la primera novela de la saga, Juego de tronos, que además da nombre a la serie. Su trama transcurre quince años después de la guerra civil conocida como la Rebelión de Robert o la Guerra del Usurpador, en la que Robert Baratheon expulsó del Trono de Hierro a los Targaryen y se proclamó rey de los Siete Reinos de Poniente.',
'https://lh4.googleusercontent.com/-XRgsbNo6R4g/AAAAAAAAAAI/AAAAAAAAF1Q/f5xscN3KNLQ/s0-c-k-no-ns/photo.jpg',
'https://www.youtube.com/embed/LIU6iJcxFbM');";
$hacerConsulta=mysqli_query($conectado,$consulta);

$consulta="INSERT INTO SERIE (titulo,genero,fecha_lanzamiento,temporadas,sinopsis,imagen,trailer) 
VALUES ('The Walking Dead','Terror','2010-10-31',7,
'Tras despertar de un coma en un hospital abandonado, el oficial de policía Rick Grimes (Andrew Lincoln) se da cuenta de que el mundo que conocía ya no existe y de que el caos se ha apoderado de la ciudad debido a que inexplicablemente los muertos caminantes dominan las calles. A las afueras de Atlanta, un pequeño campamento lucha por sobrevivir mientras los muertos-vivientes los acechan a cada momento.16 Dicho grupo, guiado por Shane Walsh (Jon Bernthal), pasa a ser liderado por Rick, a quien encuentran después de haberlo dado por muerto. Este último anteriormente había encontrado en Atlanta a un grupo pequeño que ha ido a la ciudad a buscar víveres.',
'http://static.tvgcdn.net/rovi/showcards/tvshow/303547/thumbs/16923352_957x1276.jpg',
'https://www.youtube.com/embed/R1v0uFms68U');";
$hacerConsulta=mysqli_query($conectado,$consulta);

$consulta="INSERT INTO SERIE (titulo,genero,fecha_lanzamiento,temporadas,sinopsis,imagen,trailer) 
VALUES ('Fringe','Ciencia Ficción','2008-09-09',5,
'La primera temporada introduce a la División Fringe mientras investigan casos que están relacionados con «el patrón», muchos de los cuales están orquestados por una red internacional de científicos renegados que se basan en el ZFT, quienes son dirigidos por David Robert Jones y se preparan para un evento de juicio final. Olivia llega a saber que ella fue sujeto de prueba por parte de Walter, años atrás, cuando era niña. Walter también tiene dificultades para adaptarse a la vida normal y está bajo el cuidado de su hijo después de vivir diecisiete años en una institución mental. Paralelamente, oculta el hecho de que Peter es de un universo paralelo ya que «su» Peter murió cuando era niño.',
'http://www.oconowocc.com/wp-content/uploads/2014/07/fringe-frikarte.jpg',
'https://www.youtube.com/embed/29bSzbqZ3xE');";
$hacerConsulta=mysqli_query($conectado,$consulta);

$consulta="INSERT INTO SERIE (titulo,genero,fecha_lanzamiento,temporadas,sinopsis,imagen,trailer) 
VALUES ('True Blood','Misterio','2008-09-07',7,
'La primera temporada comienza con la aparición de un nuevo habitante en Bon Temps, Luisiana, un vampiro llamado Bill, y con los asesinatos de dos mujeres, Maudette Pickens y Dawn Green, quienes son estranguladas poco después de haber estado a solas con Jason y que tienen mordeduras de sus relaciones previas con un vampiro. Al mismo tiempo Sookie Stackhouse entabla una relación con el vampiro Bill mientras trata de probar la inocencia de su hermano usando su telepatía, es entonces cuando empieza a ser acosada y perseguida por el asesino.',
'http://3.bp.blogspot.com/-miqIDZQx6rY/UDJZjYS6uWI/AAAAAAAAgp0/-4ppi-ebbAg/s1600/trueblood.jpg',
'https://www.youtube.com/embed/30uvX-X92so');";
$hacerConsulta=mysqli_query($conectado,$consulta);

$consulta="INSERT INTO SERIE (titulo,genero,fecha_lanzamiento,temporadas,sinopsis,imagen,trailer) 
VALUES ('Friends','Comedia','1994-09-22',10,
'La historia comienza con cuatro amigos (Chandler, Monica, Phoebe y Joey) conversando en una cafetería llamada Central Perk. A medida que transcurre el inicio del capítulo aparece el quinto personaje (Ross) y posteriormente la sexta (Rachel). Este encuentro dentro de la cafetería marca el comienzo de una comedia basada en la amistad, los triunfos y caídas, el amor, el pasado y el futuro de un grupo de amigos en la ciudad de Nueva York.',
'https://d1t35hkz8sx2bl.cloudfront.net/api/file/5xkJ10zMRqmZWbCxEhIj+friends-cast.jpg',
'https://www.youtube.com/embed/hDNNmeeJs1Q');";
$hacerConsulta=mysqli_query($conectado,$consulta);

$consulta="INSERT INTO SERIE (titulo,genero,fecha_lanzamiento,temporadas,sinopsis,imagen,trailer) 
VALUES ('Black Mirror','Ciencia Ficción','2011-12-04',3,
'La serie gira en torno a cómo la tecnología afecta nuestras vidas, en ocasiones sacando lo peor de nosotros. Esta serie de ciencia ficción explora un futuro próximo muy inquietante, donde las grandes innovaciones tecnológicas de la raza humana chocan con sus peores instintos.',
'https://pbs.twimg.com/profile_images/778605099794960385/6jW6Vl_d.jpg',
'https://www.youtube.com/embed/vMXsvsG0jp8');";
$hacerConsulta=mysqli_query($conectado,$consulta);

$consulta="INSERT INTO SERIE (titulo,genero,fecha_lanzamiento,temporadas,sinopsis,imagen,trailer) 
VALUES ('Narcos','Drama','2015-08-28',2,
'Serie que narra los esfuerzos de Estados Unidos, a través principalmente de la DEA y las autoridades y policía de Colombia, para luchar en la 
década de los 80 contra el narcotraficante Pablo Escobar y el cartel de Medellín, una de las organizaciones criminales más ricas y despiadadas en la historia de la delincuencia moderna.',
'http://www.elbolardo.com/wp-content/uploads/sites/6/2017/02/110.jpg',
'https://www.youtube.com/embed/U7elNhHwgBU');";
$hacerConsulta=mysqli_query($conectado,$consulta);

$consulta="INSERT INTO SERIE (titulo,genero,fecha_lanzamiento,temporadas,sinopsis,imagen,trailer) 
VALUES ('Orange Is The New Black','Drama','2013-07-11',4,
'Piper Chapman, una mujer de Connecticut con una vida estable y un alto cargo ejecutivo, es detenida a raíz de un delito de drogas que cometió 
hace una década: en aquellos días llevó un maletín con droga para Alex Vause, una traficante y antigua amante de Piper. Tras el juicio, es enviada a prisión de mujeres en Litchfield, Nueva York.',
'http://www.lionsgate.com/uploads/cache/46/ae/46aeca9751176f6cac43675745f4926d.jpg',
'https://www.youtube.com/embed/vY0qzXi5oJg');";
$hacerConsulta=mysqli_query($conectado,$consulta);

$consulta="INSERT INTO SERIE (titulo,genero,fecha_lanzamiento,temporadas,sinopsis,imagen,trailer) 
VALUES ('American Horror Story','Terror','2011-10-05',6,
'Tras sufrir algunas desgracias familiares, Ben y su esposa Vivien dejan Boston y se trasladan a una casa de Los Angeles con la esperanza de 
reconstruir su vida. Moira Hara, una chica que trabajó en esa casa, aparece a los ojos de Vivien como una sexagenaria. Ben, en cambio, la percibe como una mujer joven.',
'https://cdn.bleedingcool.net/wp-content/uploads/2017/01/american-horror-story1.jpg',
'https://www.youtube.com/embed/4w9i4Wxsxi0');";
$hacerConsulta=mysqli_query($conectado,$consulta);

$consulta="INSERT INTO SERIE (titulo,genero,fecha_lanzamiento,temporadas,sinopsis,imagen,trailer) 
VALUES ('Stranger Things','Ciencia Ficción','2016-07-15',1,
'Homenaje a los clásicos misterios sobrenaturales de los años 80, Stranger Things es la historia de un niño que desaparece en el pequeño pueblo de Hawkins sin dejar rastro. En su búsqueda desesperada, tanto sus amigos y familiares como el sheriff local se ven envueltos en un enigma 
extraordinario: experimentos ultrasecretos, fuerzas paranormales terroríficas y una niña muy, muy rara...',
'http://i.imgur.com/XBNPJXc.jpg',
'https://www.youtube.com/embed/udmlXQj4new');";
$hacerConsulta=mysqli_query($conectado,$consulta);

$consulta="INSERT INTO SERIE (titulo,genero,fecha_lanzamiento,temporadas,sinopsis,imagen,trailer) 
VALUES ('Bones','Policiaca','2005-09-13',12,
'Serie sobre una antropóloga forense y un engreído agente del FBI que forman equipo para investigar las causas de los homicidios que investigan.',
'http://www.rirca.es/wp-content/uploads/2017/02/Bones-portada.jpg',
'https://www.youtube.com/embed/luL1BaK87mA');";
$hacerConsulta=mysqli_query($conectado,$consulta);

$consulta="INSERT INTO SERIE (titulo,genero,fecha_lanzamiento,temporadas,sinopsis,imagen,trailer) 
VALUES ('House','Drama','2004-11-12',8,
'Gregory House, el mejor médico del hospital, es un hombre antipático que está especializado en el diagnóstico de enfermedades. Su carácter 
extravagante, su rebeldía y su honradez con los pacientes y su equipo lo convierten en una persona única. Trata de evitar la relación con los 
pacientes, porque lo que le interesa por encima de todo es la investigación de las enfermedades. Es además adicto a los calmantes y a las series 
de hospitales.',
'http://www.zinefilos.com/wp-content/uploads/2011/03/house.jpg',
'https://www.youtube.com/embed/MczMB8nU1sY');";
$hacerConsulta=mysqli_query($conectado,$consulta);

$consulta="INSERT INTO SERIE (titulo,genero,fecha_lanzamiento,temporadas,sinopsis,imagen,trailer) 
VALUES ('Agents of S.H.I.E.L.D.','Ciencia Ficción','2013-09-24',4,
'El agente Phil Coulson reune a un pequeño grupo de agentes de S.H.I.E.L.D. para investigar casos nuevos y extraños. Cada caso pondrá a prueba al equipo, que tratará de descubrir nuevos superhéroes en todo el mundo para frenarles si fuera necesario. Spin-off de la película Los Vengadores, que de inicio justo al final de ésta.',
'http://cdn.playbuzz.com/cdn/bca55ae9-45c5-46a1-b8b8-a891f42ec3a5/3d58c4e1-fbda-4afc-8e04-28f6bbf969d2.jpg',
'https://www.youtube.com/embed/T3T-evQZiQo');";
$hacerConsulta=mysqli_query($conectado,$consulta);

$consulta="INSERT INTO SERIE (titulo,genero,fecha_lanzamiento,temporadas,sinopsis,imagen,trailer) 
VALUES ('Heroes','Ciencia Ficción','2006-10-25',4,
'Algunas personas nacen para ser extraordinarias. Un grupo de personas normales se ve, de la noche a la mañana, dotada de increíbles poderes. 
Así, mientras en Japón un anónimo oficinista descubre que tiene un don para teletransportarse, en Nueva York un artista se da cuenta de que es 
capaz de pintar el futuro, o en Los Ángeles un policía puede escuchar los pensamientos ajenos. Estas personas no sólo tendrán que aprender a 
conocer sus poderes y a dominarlos, sino que además deberán decidir qué destino quieren darles.',
'http://blogs.tn.com.ar/nerds/files/2014/02/heroes.jpg',
'https://www.youtube.com/embed/9AX6aXFdTkc');";
$hacerConsulta=mysqli_query($conectado,$consulta);

$consulta="INSERT INTO SERIE (titulo,genero,fecha_lanzamiento,temporadas,sinopsis,imagen,trailer) 
VALUES ('Arrow','Ciencia Ficción','2012-10-10',5,
'Adaptación libre de un personaje de DC Comics, playboy de día, que, durante la noche, usa su arco y sus flechas contra el crimen. Tras haber 
desaparecido y haber sido dado por muerto en un violento naufragio, el multimillonario playboy Oliver Queen es rescatado con vida cinco años 
después en una isla del Pacífico. Una vez en casa, su madre, su hermana y su mejor amigo notan que la terrible experiencia sufrida lo ha cambiado profundamente. Con la ayuda de su fiel chófer y guardaespaldas, vuelve a su antigua vida de mujeriego despreocupado, pero, en secreto, crea el personaje de un justiciero encapuchado que lucha contra el mal.',
'https://ae01.alicdn.com/kf/HTB1MlnKOpXXXXcCapXXq6xXFXXXJ/-font-b-Green-b-font-font-b-Arrow-b-font-TV-Show-Poster-20x13-Decor.jpg',
'https://www.youtube.com/embed/1oUgKtYUPPw');";
$hacerConsulta=mysqli_query($conectado,$consulta);

$consulta="INSERT INTO SERIE (titulo,genero,fecha_lanzamiento,temporadas,sinopsis,imagen,trailer) 
VALUES ('Vikingos','Acción','2013-03-03',4,
'Narra las aventuras del héroe Ragnar Lothbrok, de sus hermanos vikingos y su familia, cuando él se subleva para convertirse en el rey de las 
tribus vikingas. Además de ser un guerrero valiente, Ragnar encarna las tradiciones nórdicas de la devoción a los dioses. Según la leyenda era 
descendiente directo del dios Odín. ',
'http://ximages.net/images/11821682636216855573.jpg',
'https://www.youtube.com/embed/oGH32PeBypc');";
$hacerConsulta=mysqli_query($conectado,$consulta);

$consulta="INSERT INTO SERIE (titulo,genero,fecha_lanzamiento,temporadas,sinopsis,imagen,trailer) 
VALUES ('Lost','Misterio','2004-09-22',6,
'Historia de un variopinto grupo de supervivientes de un accidente de aviación en una isla del Pacífico aparentemente desierta, una isla en la que suceden cosas muy extrañas. Luchando por la supervivencia, casi medio centenar de personas mostrarán lo mejor y lo peor de sí mismas.',
'http://www.altadefinicionhd.com/images/stories/Titulosanalizados/P/perdidos6.jpg',
'https://www.youtube.com/embed/x80aRLFK1x4');";
$hacerConsulta=mysqli_query($conectado,$consulta);

$consulta="INSERT INTO SERIE (titulo,genero,fecha_lanzamiento,temporadas,sinopsis,imagen,trailer) 
VALUES ('The Big Bang Theory','Comedia','2007-09-24',10,
'La serie comienza con la llegada de Penny, aspirante a actriz, al apartamento vecino, que comparten Sheldon y Leonard, dos físicos que trabajan en el Instituto Tecnológico de California. Leonard se enamora desde el primer momento de Penny. Leonard y Sheldon son científicos destacados en Caltech , amigos a su vez de Howard y Raj, que son presentados como unos completos geeks, alejados de las inquietudes y problemas de la gente común. En el curso de la serie se muestra la dificultad de los protagonistas masculinos para relacionarse con personas de fuera de su entorno, principalmente de sexo femenino, dando lugar a situaciones cómicas.',
'http://www.bolsamania.com/cine/wp-content/uploads/2014/09/213.jpg',
'https://www.youtube.com/embed/a1yXaImwPis');";
$hacerConsulta=mysqli_query($conectado,$consulta);

$consulta="INSERT INTO SERIE (titulo,genero,fecha_lanzamiento,temporadas,sinopsis,imagen,trailer) 
VALUES ('Anatomía de Grey','Drama','2005-03-27',13,
'La vida de Meredith Grey no es nada fácil. Intenta tomar las riendas de su vida, aunque su trabajo sea de esos que te hacen la vida imposible. Meredith es una cirujana interna de primer año en el Hospital Grace de Seattle, el programa de prácticas más duro de la Facultad de Medicina de Harvard. Y ella lo va a comprobar. Pero no estará sola. Un elenco de compañeros de promoción tendrán que superar la misma prueba. Ahora están en el mundo real, son doctores del hospital. Y en un mundo donde la experiencia en el trabajo puede ser un factor de vida o muerte, todos ellos tendrán que lidiar con los altibajos de sus vidas personales.',
'http://image.tmdb.org/t/p/w396/tnkYVbGDmpIcKWo7Synr4yqEsZM.jpg',
'https://www.youtube.com/embed/vg5KW23EsjI');";
$hacerConsulta=mysqli_query($conectado,$consulta);

$consulta="INSERT INTO SERIE (titulo,genero,fecha_lanzamiento,temporadas,sinopsis,imagen,trailer) 
VALUES ('Los 100','Ciencia Ficción','2004-03-19',4,
'Situada 97 años después de una guerra nuclear que ha destruido la civilización, los supervivientes de una nave espacial, que han sobrevivido durante 3 generaciones en el espacio, envían 100 delincuentes juveniles para testear las condiciones de la Tierra, con la esperanza de eventualmente volver a poblar el planeta. El grupo de jóvenes tratará de sobrevivir en un entorno desconocido y hostil a pesar de las brechas que se abren entre ellos, unos partidarios de seguir en conexión con la nave, otros a favor de empezar de cero sin depender de nadie. Mientras, en la nave, las luchas por el poder político se recrudecen, llevando a los dirigentes a situaciones extremas y difíciles decisiones.',
'http://image.tmdb.org/t/p/w396/8efHIOhXaNPZn1c5ERDumONtuDk.jpg',
'https://www.youtube.com/embed/RNxP33XdeKw');";
$hacerConsulta=mysqli_query($conectado,$consulta);

$consulta="INSERT INTO SERIE (titulo,genero,fecha_lanzamiento,temporadas,sinopsis,imagen,trailer) 
VALUES ('Breaking Bad','Drama','2008-01-20',5,
'Tras cumplir 50 años, Walter White (Bryan Cranston), un profesor de química de un instituto de Albuquerque, Nuevo México, se entera de que tiene un cáncer de pulmón incurable. Casado con Skyler (Anna Gunn) y con un hijo discapacitado (RJ Mitte), la brutal noticia lo impulsa a dar un drástico cambio a su vida: decide, con la ayuda de un antiguo alumno (Aaron Paul), fabricar anfetaminas y ponerlas a la venta. Lo que pretende es liberar a su familia de problemas económicos cuando se produzca el fatal desenlace.',
'http://image.tmdb.org/t/p/w396/1yeVJox3rjo2jBKrrihIMj7uoS9.jpg',
'https://www.youtube.com/embed/Pev38s3xPgM');";
$hacerConsulta=mysqli_query($conectado,$consulta);
?>