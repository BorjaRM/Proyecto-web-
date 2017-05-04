<?php

require("usarBD.php");

$consulta="INSERT INTO PERSONAJE (nombre,idActor,idSerie,imagen,descripcion) VALUES
('Daenerys Targaryen',1,1,
'https://s-media-cache-ak0.pinimg.com/736x/6e/96/84/6e96849b0e7bcd796bce8d7d5bc618a9.jpg',
'Daenerys fue la hija póstuma del rey Aerys II Targaryen, naciendo en mitad de una gran tormenta en la isla-fortaleza de Rocadragón, el hogar 
ancestral de la Casa Targaryen. Su madre, la reina Rhaella, murió cuando estaba dando a luz. Apenas siendo una recién nacida, su padre había muerto en Desembarco del Rey durante el saqueo que los Lannister sometieron a la capital y Robert Baratheon se había convertido en el nuevo Rey de los Siete Reinos. Huyendo de él, la pequeña Daenerys y su hermano mayor Viserys fueron trasladados a la ciudad de Braavos por Ser Willem Darry.');";
$hacerConsulta=mysqli_query($conectado,$consulta);

$consulta="INSERT INTO PERSONAJE (nombre,idActor,idSerie,imagen,descripcion) VALUES
('Jon Snow',2,1,
'http://resources3.news.com.au/images/2014/06/10/1226949/706335-5d989484-eba7-11e3-873b-5e8c286cce93.jpg',
'Jon Snow fue concebido como un personaje marcado por sus orígenes; de carácter melancólico y taciturno, Jon es consciente de su condición de 
bastardo y sabe que nunca podrá ser igual que sus medio-hermanos, por ello busca un lugar donde poder destacarse y ser él mismo. Tyrion Lannister, otro de los personajes principales de la saga, comenta: «Hay más del Norte en ti que en tus hermanos».
Jon se une a la Guardia creyendo que es un lugar donde podrá conseguir honor y gloria, sabiendo que a los miembros de la Guardia no se les juzga 
por su origen ni su pasado.');";
$hacerConsulta=mysqli_query($conectado,$consulta);

$consulta="INSERT INTO PERSONAJE (nombre,idActor,idSerie,imagen,descripcion) VALUES
('Arya Stark',3,1,
'http://i.ndtvimg.com/i/2016-05/game-of-thrones_640x480_81464688743.jpg',
'Arya Stark es representada como una muchacha independiente, ingeniosa y de fuerte carácter pese a su corta edad. Su posesión más valiosa es su 
espada Aguja, una fina espada regalo de Jon Nieve. Mantiene una relación de animadversión con su hermana Sansa Stark que posee unos gustos y unas 
aficiones muy distintas a las de Arya. Ella era aficionada a las lides de la caballería y era totalmente inepta en las labores tradicionalmente 
femeninas como el bordado, la música o el canto (a diferencia de su hermana Sansa) lo que generaba frustración en sus padres y en su tutora, la 
septa Mordane.');";
$hacerConsulta=mysqli_query($conectado,$consulta);

$consulta="INSERT INTO PERSONAJE (nombre,idActor,idSerie,imagen,descripcion) VALUES
('Rick Grimes',4,2,
'https://s-media-cache-ak0.pinimg.com/236x/eb/5f/63/eb5f63dafb152ca228e1b866dbff0398.jpg',
'Rick Grimes es un sheriff adjunto de una pequeña localidad estadounidense y que tiene como esposa a Lori, con un hijo en común llamado Carl. Un 
día se despierta de un coma y descubre que el mundo ha sido invadido por zombis, ello provoca que Rick tenga que luchar permanentemente por 
sobrevivir.Rick es uno de los supervivientes más antiguos, seguido muy de cerca de su hijo Carl, Andrea, la hija de Carol llamada Sophia, y la 
que es su madre de alquiler, Maggie. Mientras que en la serie de televisión, Rick y Carl también son los más antiguos pero seguidos de Gleen, 
Carol y Daryl.');";
$hacerConsulta=mysqli_query($conectado,$consulta);

$consulta="INSERT INTO PERSONAJE (nombre,idActor,idSerie,imagen,descripcion) VALUES
('Maggie Greene',5,2,
'http://i57.tinypic.com/2wdccgl.jpg',
'Maggie Greene es la hija mayor de Hershel Greene y hermana de Beth y una de las sobrevivientes del apocalipsis zombie.Maggie vivía con su padre 
y su hermana Beth en una granja apartada de la ciudad. Cuando Rick apareció en su puerta un día con un gravemente herido Carl en brazos, Maggie 
tuvo la misión de encontrar a Lori para contarle lo que estaba pasando.Mientras Carl se recuperaba en la granja, Maggie inició una relación con 
Glenn y pronto desarrolló profundos sentimientos hacia él.Después de pasar el invierno sobreviviendo a la intemperie, el grupo encontró una prisión abandonada donde Maggie demostró ser una soldado habilidosa al ayudar a limpiar el patio de los caminantes que lo invadían. Maggie también estuvo presente cuando Lori entró en labor de parto durante un ataque de caminantes, y cuando el nacimiento se complicó, Lori le ordenó que la abriera para salvar a su bebé. Maggie así lo hizo, pero perdió a Lori en el proceso.');";
$hacerConsulta=mysqli_query($conectado,$consulta);

$consulta="INSERT INTO PERSONAJE (nombre,idActor,idSerie,imagen,descripcion) VALUES
('Daryl Dixon',6,2,
'http://i2.esmas.com/2015/11/03/815869/perfil-twd-daryl-dixon-330x330.jpg',
'El personaje fue introducido en la primera temporada como un experto rastreador que constantemente vive en la sombra de su hermano, Merle. A pesar de su mal humor, es tolerado por el grupo de los sobrevivientes debido a sus habilidades en la caza de animales y por no tener miedo de matar caminantes. Tras la desaparición de Merle, Daryl comienza a relacionarse con el resto del grupo. El personaje, eventualmente se convierte en la mano derecha del protagonista Rick Grimes y lleva varias carreras de suministro. Es uno de los personajes que van viviendo más tiempo en la serie de televisión. Daryl es uno de los pocos personajes que no tienen una contraparte en el cómic, es decir, que el personaje es original de la serie. Su origen se explora en el vídeo juego The Walking Dead: Survival Instinct.');";
$hacerConsulta=mysqli_query($conectado,$consulta);

$consulta="INSERT INTO PERSONAJE (nombre,idActor,idSerie,imagen,descripcion) VALUES
('Olivia Dunham',7,3,
'http://images.buddytv.com/userQuizImages/usr600023684/600023684_19d2b2ca-6fc5-4cf6-a77e-097831eaa803-fringe-071008-olivia.jpg',
'Olivia Dunham es una joven y fuerte agente especial del FBI asignada a una fuerza de multiagencias dedicada a identificar y controlar la expansión de inexplicables fenómenos conocidos como El Patrón. Lidera al Equipo científico compuesto por el Dr. Walter Bishop, un brillante pero previamente hospitalizado, científico cuyo trabajo podría estar en el centro de los controvertidos eventos que están investigando; Peter Bishop, el inteligente y pragmático hijo del Dr. Bishop; y Astrid Farnsworth, una agente Junior del FBI con muchos recursos y entusiasmo, que se encarga de facilitar las necesidades del equipo así como de proporcionar la perspectiva de la ciencia convencional en las investigaciones.');";
$hacerConsulta=mysqli_query($conectado,$consulta);

$consulta="INSERT INTO PERSONAJE (nombre,idActor,idSerie,imagen,descripcion) VALUES
('Bolivia',7,3,
'https://amyyen.files.wordpress.com/2010/05/fringe-alt-olivia.jpg',
'Bolivia es un agente de la división Fringe en el universo alternativo. También se le conoce como Fauxlivia o Altlivia.');";
$hacerConsulta=mysqli_query($conectado,$consulta);

$consulta="INSERT INTO PERSONAJE (nombre,idActor,idSerie,imagen,descripcion) VALUES
('Peter Bishop',8,3,
'http://images1.wikia.nocookie.net/__cb20121001200915/fringe/images/6/6b/Peters5.jpg',
' ');";
$hacerConsulta=mysqli_query($conectado,$consulta);

$consulta="INSERT INTO PERSONAJE (nombre,idActor,idSerie,imagen,descripcion) VALUES
('Walter Bishop',9,3,
'http://4.bp.blogspot.com/-tx9phlebv4c/UFX9A-LikaI/AAAAAAAABT8/b4ZXRV3UWj8/s1600/Walter-the-certifiable-dr-walter-bishop-12004844-1024-768.jpg',
' ');";
$hacerConsulta=mysqli_query($conectado,$consulta);

$consulta="INSERT INTO PERSONAJE (nombre,idActor,idSerie,imagen,descripcion) VALUES
('Walternate',9,3,
'https://s-media-cache-ak0.pinimg.com/originals/3f/e4/e1/3fe4e163ce6e42976ed5c3f2d67ea4be.jpg',
' ');";
$hacerConsulta=mysqli_query($conectado,$consulta);

$consulta="INSERT INTO PERSONAJE (nombre,idActor,idSerie,imagen,descripcion) VALUES
('Sookie Stackhouse',10,4,
'http://3.bp.blogspot.com/-GYkgbZPCraE/TjQP-B5Uc0I/AAAAAAAAGHw/cMFmnSqPa_s/s1600/sookie%2Bstackhouse%2Bred%2Bwhite%2Bfloral%2Bdress.jpg',
'');";
$hacerConsulta=mysqli_query($conectado,$consulta);

$consulta="INSERT INTO PERSONAJE (nombre,idActor,idSerie,imagen,descripcion) VALUES
('Bill Compton',11,4,
'http://www.stephen-moyer.net/wp-content/uploads/2012/08/Bill-episode-510-212.jpg',
'');";
$hacerConsulta=mysqli_query($conectado,$consulta);

$consulta="INSERT INTO PERSONAJE (nombre,idActor,idSerie,imagen,descripcion) VALUES
('Tara Thornton',12,4,
'http://images.buddytv.com/btv_2_505514649_0_350_10000_-1_/taramain.jpg',
'');";
$hacerConsulta=mysqli_query($conectado,$consulta);

$consulta="INSERT INTO PERSONAJE (nombre,idActor,idSerie,imagen,descripcion) VALUES
('Rachel Green',13,5,
'http://cdn.playbuzz.com/cdn/6252d1f2-6e6f-486c-8378-efc1adcc7096/57ab4b33-6084-47b8-8f3c-c605086ae518.jpg',
'');";
$hacerConsulta=mysqli_query($conectado,$consulta);

$consulta="INSERT INTO PERSONAJE (nombre,idActor,idSerie,imagen,descripcion) VALUES
('Monica Geller',14,5,
'https://s-media-cache-ak0.pinimg.com/originals/a2/73/a1/a273a122144b4ece44401375b3b0e890.jpg',
'');";
$hacerConsulta=mysqli_query($conectado,$consulta);

$consulta="INSERT INTO PERSONAJE (nombre,idActor,idSerie,imagen,descripcion) VALUES
('Joey Tribbiani',15,5,
'http://cdn.hercampus.com/s3fs-public/2016/02/12/1414987381810_wps_84_Matt_Leblanc.jpg',
'');";
$hacerConsulta=mysqli_query($conectado,$consulta);

$consulta="INSERT INTO PERSONAJE (nombre,idActor,idSerie,imagen,descripcion) VALUES
('Martha',16,6,
'http://4.bp.blogspot.com/-J7zHr6Lsxrw/URvKQmHWdpI/AAAAAAAABZc/2gqVHBShfPk/s1600/martha+campi%C3%B1a.png',
'');";
$hacerConsulta=mysqli_query($conectado,$consulta);

$consulta="INSERT INTO PERSONAJE (nombre,idActor,idSerie,imagen,descripcion) VALUES
('Selma Telse',17,6,
'https://monsterattheendofthedream.files.wordpress.com/2014/12/kelly.jpg',
'');";
$hacerConsulta=mysqli_query($conectado,$consulta);

$consulta="INSERT INTO PERSONAJE (nombre,idActor,idSerie,imagen,descripcion) VALUES
('Toby Kebbell',18,6,
'https://4.bp.blogspot.com/-_G8Ukyzi1NI/VpuS6V-f4-I/AAAAAAAAGeM/9WIqjN_JMHA/s1600/blackmirrors1e3.jpg',
'');";
$hacerConsulta=mysqli_query($conectado,$consulta);

$consulta="INSERT INTO PERSONAJE (nombre,idActor,idSerie,imagen,descripcion) VALUES
('Pablo Escobar',19,7,
'http://www.menshealth.com.au/media/3708/pablo.jpg',
'');";
$hacerConsulta=mysqli_query($conectado,$consulta);

$consulta="INSERT INTO PERSONAJE (nombre,idActor,idSerie,imagen,descripcion) VALUES
('Elisa',20,7,
'http://p2.trrsf.com/image/fget/cf/600/600/images.terra.com/2015/08/28/ana-de-la-reguera-narcos-2.jpg',
'');";
$hacerConsulta=mysqli_query($conectado,$consulta);

$consulta="INSERT INTO PERSONAJE (nombre,idActor,idSerie,imagen,descripcion) VALUES
('Tata Escobar',21,7,
'https://1tgti81c8z542nd7qytqqyg1-wpengine.netdna-ssl.com/wp-content/uploads/2016/09/narcos-women-tata-escobar-entity-1320x883.jpg',
'');";
$hacerConsulta=mysqli_query($conectado,$consulta);

$consulta="INSERT INTO PERSONAJE (nombre,idActor,idSerie,imagen,descripcion) VALUES
('Stella Carlin',22,8,
'https://pbs.twimg.com/profile_images/567060277082857473/yBgtA6Sb.jpeg',
'');";
$hacerConsulta=mysqli_query($conectado,$consulta);

$consulta="INSERT INTO PERSONAJE (nombre,idActor,idSerie,imagen,descripcion) VALUES
('Donovan',23,9,
'http://tvdaily.com/wp-content/uploads/2015/09/AHS-1379-Wittrock-001-1440797495.jpg',
'');";
$hacerConsulta=mysqli_query($conectado,$consulta);

$consulta="INSERT INTO PERSONAJE (nombre,idActor,idSerie,imagen,descripcion) VALUES
('Joyce Byers',24,10,
'http://cde.peru21.pe/ima/0/0/3/9/1/391301.jpg',
'');";
$hacerConsulta=mysqli_query($conectado,$consulta);

$consulta="INSERT INTO PERSONAJE (nombre,idActor,idSerie,imagen,descripcion) VALUES
('Temperance Brennan',25,11,
'http://images.spoilertv.com/cache/bones/season-1/Promotional%20Episode%20Photos/1x11_003_FULL.jpg',
'');";
$hacerConsulta=mysqli_query($conectado,$consulta);

$consulta="INSERT INTO PERSONAJE (nombre,idActor,idSerie,imagen,descripcion) VALUES
('Gregory House',26,12,
'http://i2.esmas.com/2016/01/11/832725/hugh-laurie-624x351.jpg',
'');";
$hacerConsulta=mysqli_query($conectado,$consulta);

$consulta="INSERT INTO PERSONAJE (nombre,idActor,idSerie,imagen,descripcion) VALUES
('Daisy Johnson',27,13,
'https://static.comicvine.com/uploads/scale_super/11118/111183530/4907042-6988115057-chloe.jpg',
'');";
$hacerConsulta=mysqli_query($conectado,$consulta);

$consulta="INSERT INTO PERSONAJE (nombre,idActor,idSerie,imagen,descripcion) VALUES
('Peter Petrelli',28,14,
'http://img.europapress.net/fotoweb/fotonoticia_20140623095323_800.jpg',
'');";
$hacerConsulta=mysqli_query($conectado,$consulta);

$consulta="INSERT INTO PERSONAJE (nombre,idActor,idSerie,imagen,descripcion) VALUES
('Flecha Verde',29,15,
'http://furiousfanboys.com/wp-content/uploads/2016/10/Arrow-CW.png',
'');";
$hacerConsulta=mysqli_query($conectado,$consulta);

$consulta="INSERT INTO PERSONAJE (nombre,idActor,idSerie,imagen,descripcion) VALUES
('Bjorn Lothbrok',30,16,
'https://s-media-cache-ak0.pinimg.com/originals/2f/98/8c/2f988c2d49765b2f6322a2c8efca76f7.png',
'');";
$hacerConsulta=mysqli_query($conectado,$consulta);
?>