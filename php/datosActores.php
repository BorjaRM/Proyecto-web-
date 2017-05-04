<?php

require("usarBD.php");

$consulta="INSERT INTO ACTOR (nombre,apellidos,fecha_nacimiento,nacionalidad,biografia,imagen) 
VALUES ('Emilia','Clarke','1986-10-23','Británica',
'Clarke nació en Londres, y se crió en Berkshire. Asistió a la Escuela de arte dramático de Londres, donde se graduó en 2009. Tras graduarse, 
Clarke comenzó su carrera con un papel en la serie de la BBC Doctors, y un papel co-protagonista en el telefilme norteamericano Triassic Attack.
Desde 2011, Clarke interpreta a Daenerys Targaryen en la serie fantástica y de gran éxito de HBO Juego de tronos basada en la serie de novelas 
Canción de hielo y fuego, escritas por George R. R. Martin. Por su papel en la serie, fue nominada tres veces a los Premios Primetime Emmy por 
Mejor actriz de reparto en Serie dramática.',
'https://www.gratistodo.com/wp-content/uploads/2016/09/Emilia-Clarke-6.jpg');";
$hacerConsulta=mysqli_query($conectado,$consulta);

$consulta="INSERT INTO ACTOR (nombre,apellidos,fecha_nacimiento,nacionalidad,biografia,imagen) 
VALUES ('Christopher','Catesby Harington','1986-12-26','Británica',
'Aunque es conocido por su nombre artístico y apodo Kit Harington, él mismo no fue consciente de que su nombre real era Christopher hasta que 
cumplió once años.Tiene ascendencia real, concretamente de los Barones de Harington, siendo descendiente de Sir Richard Harington XII, Sir 
William Molesworth, Henry Dundas y Carlos II de Inglaterra, siendo este su ocho veces bisabuelo. Otro de sus antepasados fue el escritor John 
Harington, inventor del inodoro.Estudió en Worcester Sixth Form College, donde cursó estudios drama y teatro, entre 2003 y 2005.Se graduó en 2008 
en la Central School of Speech and Drama, dependiente de la Universidad de Londres.',
'https://images-na.ssl-images-amazon.com/images/M/MV5BMTA2NTI0NjYxMTBeQTJeQWpwZ15BbWU3MDIxMjgyNzY@._V1_UY1200_CR84,0,630,1200_AL_.jpg');";
$hacerConsulta=mysqli_query($conectado,$consulta);

$consulta="INSERT INTO ACTOR (nombre,apellidos,fecha_nacimiento,nacionalidad,biografia,imagen) 
VALUES ('Margaret','Constance Williams','1997-04-15','Británica',
'Williams nació en Bristol, Inglaterra. Es la menor de cuatro hijos. Creció en Somerset y asistió a la Escuela Primaria de Clutton y luego a la 
Norton Hill School, en Midsomer Norton, antes de mudarse al Instituto de Danzas de Bath, para estudiar artes escénicas. El primer papel importante de Maisie Williams es interpretando a Arya Stark, la menor de las hijas de la Casa Stark en Juego de tronos, la popular serie emitida en HBO desde 2011. También interpretó a Loren Caleigh en la serie dramática de la BBC The Secret of Crickley Hall y además participará en la película Heatstroke de la productora cinematográfica Bold Films.',
'https://www.celebritysizes.com/wp-content/uploads/2015/03/Maisie-Williams.jpg');";
$hacerConsulta=mysqli_query($conectado,$consulta);

$consulta="INSERT INTO ACTOR (nombre,apellidos,fecha_nacimiento,nacionalidad,biografia,imagen) 
VALUES ('Andrew','Lincoln','1973-09-14','Británica',
'Andrew Clutterbuck nació en Londres. Su padre es un ingeniero civil inglés y su madre, una enfermera sudafricana. Su familia se mudó a Hull 
cuando él tenía 18 meses y a Bath con 8 o 9 años. Asistió a la escuela de Beechen Cliff, donde consiguió su primer papel de actor interpretando 
a Jack Dawkins en una versión de la obra Oliver! Pasó un verano en el National Youth Theatre londinense y comenzó a interesarse por dedicarse a 
trabajar como actor. Tras terminar el colegio, continuó sus estudios en la Real Academia de Arte Dramático y comenzó a usar Andrew Lincoln 
como nombre artístico.',
'https://s-media-cache-ak0.pinimg.com/originals/3a/7a/bc/3a7abcc006f8a2fb012f401c575427fe.jpg');";
$hacerConsulta=mysqli_query($conectado,$consulta);

$consulta="INSERT INTO ACTOR (nombre,apellidos,fecha_nacimiento,nacionalidad,biografia,imagen) 
VALUES ('Lauren','Cohan','1982-01-17','Estadounidense',
'Cohan nació en Filadelfia y vivió durante su infancia en el municipio de Cherry Hill (Nueva Jersey), antes de trasladarse al Reino Unido.2 Se 
graduó en la Universidad de Winchester/King Alfreds, donde estudió Drama y Literatura inglesa, antes de viajar con una compañía de teatro de la 
que fue cofundadora en la universidad. Lauren dividió entonces su tiempo y trabajó entre Londres y Los Ángeles, participando en varias películas 
así como en algunos proyectos no comerciales.En 2011, Cohan se unió al elenco recurrente de la segunda temporada de la serie de AMC, The Walking 
Dead, junto a Scott Wilson y Emily Kinney, interpretando a Maggie Greene.',
'http://www.hawtcelebs.com/wp-content/uploads/2014/10/lauren-cohan-at-2014-amfar-la-inspiration-gala-in-hollywood_2.jpg');";
$hacerConsulta=mysqli_query($conectado,$consulta);

$consulta="INSERT INTO ACTOR (nombre,apellidos,fecha_nacimiento,nacionalidad,biografia,imagen) 
VALUES ('Norman','Reedus','1969-01-06','Estadounidense',
'Norman Mark Reedus es un actor estadounidense. Se le conoce principalmente por su papel como Murphy 
MacManus en la película The Boondock Saints (1999) y por encarnar al personaje de Daryl Dixon en la serie de televisión The Walking Dead. 
También ha dirigido varios vídeos y posado para varios diseñadores de moda. Además, trabajó junto a Lady Gaga en el videoclip Judas. En 2010 
fue llamado a participar en la serie de televisión de AMC The Walking Dead para dar vida al personaje de Daryl Dixon. Este personaje fue diseñado 
exclusivamente para él, dado que no aparece en el cómic original, basándose en la personalidad del actor.',
'https://images-na.ssl-images-amazon.com/images/M/MV5BMTQ5ODE4NTgzMl5BMl5BanBnXkFtZTcwODI0MjAwMw@@._V1_UY317_CR5,0,214,317_AL_.jpg');";
$hacerConsulta=mysqli_query($conectado,$consulta);

$consulta="INSERT INTO ACTOR (nombre,apellidos,fecha_nacimiento,nacionalidad,biografia,imagen) 
VALUES ('Anna','Torv','1979-06-07','Australiana',
'Anna Torv nació en Melbourne.Es sobrina política del magnate Rupert Murdoch. Se graduó del Benowa State High School en 1996. Estudió actuación 
en el Instituto Nacional de Arte Dramático Australiano, del cual se graduó en 2001. En diciembre del 2008 se casó con el actor norteamericano 
Mark Valley, sin embargo después de un año de matrimonio la pareja se separó y finalmente se divorciaron en el 2010. Su inicio cinematográfico 
se produjo en el film australiano para la televisión White Collar Blue de 2002. Durante esa época, también participó en las series australianas 
Young Lions, Las hijas de MacLeod y The Secret Life of Us. Es conocida, sobre todo, por su papel protagonista de Olivia Dunham en la serie de 
ciencia ficción Fringe.',
'http://images.buddytv.com/artist-photos/anna%20torv-30000005/anna%20torv-3534907.jpg');";
$hacerConsulta=mysqli_query($conectado,$consulta);

$consulta="INSERT INTO ACTOR (nombre,apellidos,fecha_nacimiento,nacionalidad,biografia,imagen) 
VALUES ('Joshua','Jackson','1978-06-11','Canadiense',
' ',
'http://www.hellomagazine.com/imagenes/profiles//joshua-jackson/4283-joshua-jackson-1newprof1b.jpg');";
$hacerConsulta=mysqli_query($conectado,$consulta);

$consulta="INSERT INTO ACTOR (nombre,apellidos,fecha_nacimiento,nacionalidad,biografia,imagen) 
VALUES ('John','Noble','1948-08-20','Australiana',
' ',
'http://hollywoodnewssource.com/wp-content/uploads/2016/10/john-noble.jpg');";
$hacerConsulta=mysqli_query($conectado,$consulta);

$consulta="INSERT INTO ACTOR (nombre,apellidos,fecha_nacimiento,nacionalidad,biografia,imagen) 
VALUES ('Anna','Paquin','1982-07-24','Canadiense',
' ',
'http://kingofwallpapers.com/anna-paquin/anna-paquin-011.jpg');";
$hacerConsulta=mysqli_query($conectado,$consulta);

$consulta="INSERT INTO ACTOR (nombre,apellidos,fecha_nacimiento,nacionalidad,biografia,imagen) 
VALUES ('Stephen','Moyer','1969-10-11','Británica',
' ',
'http://www.allstephenmoyer.com/wp-content/uploads/2011/09/sm165.jpg');";
$hacerConsulta=mysqli_query($conectado,$consulta);

$consulta="INSERT INTO ACTOR (nombre,apellidos,fecha_nacimiento,nacionalidad,biografia,imagen) 
VALUES ('Rutina','Wesley','1979-02-01','Estadounidense',
' ',
'http://img.usmagazine.com/300-width/1372258973_rutina-wesley-lg.jpg');";
$hacerConsulta=mysqli_query($conectado,$consulta);

$consulta="INSERT INTO ACTOR (nombre,apellidos,fecha_nacimiento,nacionalidad,biografia,imagen) 
VALUES ('Jennifer','Aniston','1969-02-11','Estadounidense',
' ',
'http://snappa.static.pressassociation.io/assets/2016/02/11100204/1455117776-f8e8816115850cfec8bc8886d673b13f-1366x2049.jpg');";
$hacerConsulta=mysqli_query($conectado,$consulta);

$consulta="INSERT INTO ACTOR (nombre,apellidos,fecha_nacimiento,nacionalidad,biografia,imagen) 
VALUES ('Courteney','Cox','1964-06-15','Estadounidense',
' ',
'https://pbs.twimg.com/profile_images/1777161978/Cougar_town_cox_300_400x400.jpg');";
$hacerConsulta=mysqli_query($conectado,$consulta);

$consulta="INSERT INTO ACTOR (nombre,apellidos,fecha_nacimiento,nacionalidad,biografia,imagen) 
VALUES ('Matt','LeBlanc','1967-07-25','Estadounidense',
' ',
'http://files.shandymedia.com/images/photos/hollyscoop/p18560nq8r1k8vlep85ffjk1feb4.jpg');";
$hacerConsulta=mysqli_query($conectado,$consulta);

$consulta="INSERT INTO ACTOR (nombre,apellidos,fecha_nacimiento,nacionalidad,biografia,imagen) 
VALUES ('Hayley','Atwell','1982-04-05','Británica',
' ',
'http://i.imgur.com/dzjOav1.png');";
$hacerConsulta=mysqli_query($conectado,$consulta);

$consulta="INSERT INTO ACTOR (nombre,apellidos,fecha_nacimiento,nacionalidad,biografia,imagen) 
VALUES ('Hannah','John-Kamen','1989-09-06','Británica',
' ',
'https://images-na.ssl-images-amazon.com/images/M/MV5BMTQ2MTE3MTkzMl5BMl5BanBnXkFtZTgwMzAyMTE1ODE@._V1_UY317_CR13,0,214,317_AL_.jpg');";
$hacerConsulta=mysqli_query($conectado,$consulta);

$consulta="INSERT INTO ACTOR (nombre,apellidos,fecha_nacimiento,nacionalidad,biografia,imagen) 
VALUES ('Toby','Kebbell','1982-07-09','Británica',
' ',
'http://ethnicelebs.com/wp-content/uploads/2012/09/Toby-Kebbell.jpg');";
$hacerConsulta=mysqli_query($conectado,$consulta);

$consulta="INSERT INTO ACTOR (nombre,apellidos,fecha_nacimiento,nacionalidad,biografia,imagen) 
VALUES ('Wagner','Moura','1976-06-27','Brasileña',
' ',
'https://static01.nyt.com/images/2016/09/01/arts/01MOURA1/01MOURA1-master768.jpg');";
$hacerConsulta=mysqli_query($conectado,$consulta);

$consulta="INSERT INTO ACTOR (nombre,apellidos,fecha_nacimiento,nacionalidad,biografia,imagen) 
VALUES ('Anabell','Gardoqui de la Reguera','1977-04-08','Mexicana',
' ',
'http://www.theplace2.ru/archive/ana_de_la_reguera/img/ana_de_la_reguera_28.jpg');";
$hacerConsulta=mysqli_query($conectado,$consulta);

$consulta="INSERT INTO ACTOR (nombre,apellidos,fecha_nacimiento,nacionalidad,biografia,imagen) 
VALUES ('Paulina','Gaitán','1992-02-19','Mexicana',
' ',
'http://www4.pictures.zimbio.com/gi/Disney+ABC+Television+Group+TCA+Winter+Press+wKmIbzIVH3Bx.jpg');";
$hacerConsulta=mysqli_query($conectado,$consulta);

$consulta="INSERT INTO ACTOR (nombre,apellidos,fecha_nacimiento,nacionalidad,biografia,imagen) 
VALUES ('Ruby','Rose','1986-03-20','Australiana',
' ',
'https://s-media-cache-ak0.pinimg.com/originals/6c/68/cd/6c68cd3d1c3fed13f7cc19508b26e840.jpg');";
$hacerConsulta=mysqli_query($conectado,$consulta);

$consulta="INSERT INTO ACTOR (nombre,apellidos,fecha_nacimiento,nacionalidad,biografia,imagen) 
VALUES ('Matt','Bomer','1977-10-11','Estadounidense',
' ',
'http://www.tnrelaciones.com/cm/preguntas_y_respuestas/images/Image/Actores-Directores-Libra/Matt-Bomer-Signo-del-Zodiaco-Libra-1.jpg');";
$hacerConsulta=mysqli_query($conectado,$consulta);

$consulta="INSERT INTO ACTOR (nombre,apellidos,fecha_nacimiento,nacionalidad,biografia,imagen) 
VALUES ('Winona','Ryder','1971-10-29','Estadounidense',
' ',
'http://edgecast.buscafs.com/www.tomatazos.com/public/uploads/images/37813.jpg');";
$hacerConsulta=mysqli_query($conectado,$consulta);

$consulta="INSERT INTO ACTOR (nombre,apellidos,fecha_nacimiento,nacionalidad,biografia,imagen) 
VALUES ('Emily','Deschanel','1976-10-11','Estadounidense',
' ',
'https://s-media-cache-ak0.pinimg.com/originals/61/ea/3b/61ea3b8ff2138526ebef1d66fb4238b4.jpg');";
$hacerConsulta=mysqli_query($conectado,$consulta);

$consulta="INSERT INTO ACTOR (nombre,apellidos,fecha_nacimiento,nacionalidad,biografia,imagen) 
VALUES ('Huge','Laurie','1959-06-11','Británica',
' ',
'https://s-media-cache-ak0.pinimg.com/originals/e0/06/1c/e0061cbf8427fc4049738518b1de7f43.jpg');";
$hacerConsulta=mysqli_query($conectado,$consulta);

$consulta="INSERT INTO ACTOR (nombre,apellidos,fecha_nacimiento,nacionalidad,biografia,imagen) 
VALUES ('Chloe','Bennet','1992-04-18','Estadounidense',
' ',
'https://s-media-cache-ak0.pinimg.com/originals/1e/f7/72/1ef772307e227950984e0a60697ffd73.jpg');";
$hacerConsulta=mysqli_query($conectado,$consulta);

$consulta="INSERT INTO ACTOR (nombre,apellidos,fecha_nacimiento,nacionalidad,biografia,imagen) 
VALUES ('Milo','Ventimiglia','1977-07-08','Estadounidense',
' ',
'https://my-hit.org/storage/937788_500x800x250.jpg');";
$hacerConsulta=mysqli_query($conectado,$consulta);

$consulta="INSERT INTO ACTOR (nombre,apellidos,fecha_nacimiento,nacionalidad,biografia,imagen) 
VALUES ('Stephen','Amell','1981-05-08','Canadiense',
' ',
'https://www.planetawrestling.com/wp-content/uploads/2016/02/Stephen-Amell.jpg');";
$hacerConsulta=mysqli_query($conectado,$consulta);

$consulta="INSERT INTO ACTOR (nombre,apellidos,fecha_nacimiento,nacionalidad,biografia,imagen) 
VALUES ('Alexander','Ludwig','1992-05-07','Canadiense',
' ',
'https://lilucinema.files.wordpress.com/2015/07/alexander-ludwig-profile.jpg');";
$hacerConsulta=mysqli_query($conectado,$consulta);
?>

 