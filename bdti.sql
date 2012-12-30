-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-12-2012 a las 16:45:37
-- Versión del servidor: 5.5.27
-- Versión de PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `bdti`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) COLLATE utf8_bin NOT NULL DEFAULT '0',
  `ip_address` varchar(16) COLLATE utf8_bin NOT NULL DEFAULT '0',
  `user_agent` varchar(150) COLLATE utf8_bin NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`session_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario`
--

CREATE TABLE IF NOT EXISTS `comentario` (
  `id_comentario` int(2) NOT NULL AUTO_INCREMENT,
  `id_libro` int(11) NOT NULL,
  `autor` varchar(100) NOT NULL,
  `comentario` text NOT NULL,
  `fecha_registro` date NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`id_comentario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `comentario`
--

INSERT INTO `comentario` (`id_comentario`, `id_libro`, `autor`, `comentario`, `fecha_registro`, `email`) VALUES
(3, 2, 'Alberto Conrado', 'Tengo que recomendar la inspiradora y motivadora lectura de la Biografía de Steve Jobs, si además cuentas con vocación emprendedora es probable que aprendas unas cuantas cosas muy útiles.\r\n\r\nY cuando hablo de emprendedores lo hago refiriéndome a su definición, estrechamente relacionada con el producto y no tanto con el negocio.\r\n\r\nOdio a la gente que se etiqueta a sí misma como emprendedora cuando lo que en realidad está intentando hacer es crear una compañía para después venderla o salir a bolsa para poder recoger los beneficios y dedicarse a otra cosa. No están dispuestos a ('') hacer una contribución real y sumarte al legado de los que vinieron antes que tú ('').\r\n', '2012-11-05', 'alberto.conrado@gmail.com'),
(4, 7, 'Arnold Suacseneger', 'Tengo que recomendar la inspiradora y motivadora lectura de la Biografía de Steve Jobs, si además cuentas con vocación emprendedora es probable que aprendas unas cuantas cosas muy útiles.\r\n\r\nY cuando hablo de emprendedores lo hago refiriéndome a su definición, estrechamente relacionada con el producto y no tanto con el negocio.\r\n\r\nOdio a la gente que se etiqueta a sí misma como emprendedora cuando lo que en realidad está intentando hacer es crear una compañía para después venderla o salir a bolsa para poder recoger los beneficios y dedicarse a otra cosa. No están dispuestos a ('') hacer una contribución real y sumarte al legado de los que vinieron antes que tú ('').\r\n', '2012-11-05', 'arnold@gmail.com'),
(5, 1, 'Altamira', 'Es una historia preciosa, las descripciones arquitectónicas y los procesos de construcción son increíbles y bastante rigurosos. La psicología de los personajes está muy bien desarrollada.\r\nSi tuviera que ponerle alguna pega, es que ningún albañil-constructor sin cultura ni educación de la época tendría los conflictos morales e intelectuales que cuentan en el libro, ni tal inventiva. Pero supongo que sino, no gustaría tanto la novela. Por lo demás genial.', '2012-11-05', 'Altamira@gmail.com'),
(6, 1, 'AITOR', 'Una historia sobre la construcción de la vida, de los poderes, de las grandes obras y de los impulsos humanos. No sólo aprendes sobre la edad media sinó tambien te hace recapacitar sobre las cosas que mueven el mundo. Quizás se hace un pelín largo en alguna parte del libro pero por lo demás muy entretenido.', '2012-11-05', 'AITOR@g,mail.com'),
(7, 6, 'Maria de Madrid', 'Verdaderamente resulta difícil explicar no ya el éxito planetario de este libro, sino el que fuera publicado. El vocabulario es de tal pobreza, los diálogos son tan forzados y artificiales, las situaciones son tan repetitivas y los personajes son tan descerebrados que cuesta trabajo creer que en la editorial no lo arrojasen directamente a la papelera. Fijémonos en la heroína, esa joven de inquietos incisivos que no cesa de mordisquearse el labio mientras repite "Uau" tres veces en cada párrafo. Admiremos a Christian Grey, fusión de las fantasías de tres o cuatro quinceañeras: guapo, rico, joven, con un pasado y un presente tormentosos y listo para ser redimido por la primera jovencita bienintencionada que se cruce en su camino. Si me dijeran que este libro lo ha escrito una adolescente con la mente algo calenturienta todavía lo consideraría aceptable para un concurso del Instituto. Pero resulta que no, que la garrapateadora de papeles en cuestión tiene ya cierta edad y experiencia en las cosas de la vida. Asombroso. Aún me pregunto si lo ha hecho adrede y en secreto sonríe por su audacia al haber colado semejante bazofia a medio mundo. Incluyo al alma caritativa que me prestó el libro.\r\n\r\nComo comedia involuntaria puede funcionar, porque escenas desternillantes hay unas cuantas, a gusto del consumidor. Las parodias han comenzado a circular, pero no son necesarias. El libro es la parodia.', '2012-11-05', 'mariademadrid@hotmail.com'),
(8, 5, 'Yo mismo', 'Una amiga mía lo estaba leyendo este verano y me preguntaba que es lo que la tenía tan pegada al libro.\r\nLo he leido en inglés y he llegado a la conxclusión de que se trata de un libro mediocre sin mas, para leer en verano en una tumbona. En inglés es pasable (como muchos otros libros), en español dudo que hubiera podido terminarlo.', '2012-11-05', 'yomismo@hotmail.com'),
(9, 8, 'Ana', 'Hacía tiempo que no leía algo que me enganchara tanto. Increible. No puedes dejar el libro hasta llegar a la última página.', '2012-11-05', 'anafrank@hotmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libro`
--

CREATE TABLE IF NOT EXISTS `libro` (
  `id_libro` int(2) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(200) NOT NULL,
  `descripcion` text NOT NULL,
  `id_tema` int(2) NOT NULL,
  `autor` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL,
  `fecha_registro` date NOT NULL,
  `tags` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_libro`),
  KEY `id_tema` (`id_tema`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `libro`
--

INSERT INTO `libro` (`id_libro`, `titulo`, `descripcion`, `id_tema`, `autor`, `img`, `fecha_registro`, `tags`) VALUES
(1, 'Los pilares de la tierra', '<p>\r\n	El gran maestro de la narrativa de acci&oacute;n y suspense nos transporta a la Edad Media, a un fascinante mundo de reyes, damas, caballeros, pugnas feudales, castillos y ciudades amuralladas. El amor y la muerte se entrecruzan vibrantemente en este magistral tapiz cuyo centro es la construcci&oacute;n de una catedral g&oacute;tica. La historia se inicia con el ahorcamiento p&uacute;blico de un inocente y finaliza con la humillaci&oacute;n de un rey. Los pilares de la Tierra es la obra maestra de Ken Follett y constituye una excepcional evocaci&oacute;n de una &eacute;poca de violentas pasiones.</p>\r\n', 2, 'Ken Follett', 'pic1.jpg', '2012-11-09', 'novela, edad media, trilogía'),
(2, 'Steve Jobs - La biografía', '<p>\r\n	<span style="color: rgb(0, 0, 0); font-family: verdana, arial, helvetica, sans-serif; font-size: small; ">Tras m&aacute;s de cuarenta entrevistas con Steve Jobs y con un centenar de personas de su entorno, familiares, amigos, adversarios y colegas, esta es la biograf&iacute;a definitiva de uno de los iconos indiscutibles de nuestro tiempo, la cr&oacute;nica de la agitada vida y abrasiva personalidad del genio cuya creatividad, energ&iacute;a y perfeccionismo revolucionaron seis industrias: inform&aacute;tica, pel&iacute;culas de animaci&oacute;n, m&uacute;sica, tel&eacute;fonos, tabletas y edici&oacute;n digital.</span><br style="color: rgb(0, 0, 0); font-family: verdana, arial, helvetica, sans-serif; font-size: small; " />\r\n	<br style="color: rgb(0, 0, 0); font-family: verdana, arial, helvetica, sans-serif; font-size: small; " />\r\n	<span style="color: rgb(0, 0, 0); font-family: verdana, arial, helvetica, sans-serif; font-size: small; ">Cuando el mundo buscaba c&oacute;mo construir las bases de una econom&iacute;a digital, Jobs fue un s&iacute;mbolo de la inventiva y de la imaginaci&oacute;n pr&aacute;ctica. Consciente de que la mejor manera de crear valor en el siglo XXI era conectar la creatividad con la tecnolog&iacute;a, fund&oacute; una empresa en la que impresionantes saltos de la imaginaci&oacute;n iban de la mano con asombrosos logros tecnol&oacute;gicos.</span><br style="color: rgb(0, 0, 0); font-family: verdana, arial, helvetica, sans-serif; font-size: small; " />\r\n	<br style="color: rgb(0, 0, 0); font-family: verdana, arial, helvetica, sans-serif; font-size: small; " />\r\n	<span style="color: rgb(0, 0, 0); font-family: verdana, arial, helvetica, sans-serif; font-size: small; ">Aunque Jobs colabor&oacute; con el libro, no pidi&oacute; ning&uacute;n control sobre el contenido, ni siquiera el derecho a leerlo antes de la publicaci&oacute;n. No rehuy&oacute; ning&uacute;n tema y anim&oacute; a la gente que conoc&iacute;a a hablar con franqueza. &quot;He hecho muchas cosas de las que no me siento orgulloso, como dejar a mi novia embarazada a los 23 a&ntilde;os y c&oacute;mo me comport&eacute; entonces, pero no hay ning&uacute;n cad&aacute;ver en mi armario que no pueda salir a la luz&quot;.</span><br style="color: rgb(0, 0, 0); font-family: verdana, arial, helvetica, sans-serif; font-size: small; " />\r\n	<br style="color: rgb(0, 0, 0); font-family: verdana, arial, helvetica, sans-serif; font-size: small; " />\r\n	<span style="color: rgb(0, 0, 0); font-family: verdana, arial, helvetica, sans-serif; font-size: small; ">Jobs habla con sinceridad, a veces brutal, sobre la gente con la que ha trabajado y contra la que ha competido. De igual modo, sus amigos, rivales y colegas ofrecen una visi&oacute;n sin edulcorar de las pasiones, los demonios, el perfeccionismo, los deseos, el talento, los trucos y la obsesi&oacute;n por controlarlo todo que modelan su visi&oacute;n empresarial y los innovadores productos que logr&oacute; crear.</span><br style="color: rgb(0, 0, 0); font-family: verdana, arial, helvetica, sans-serif; font-size: small; " />\r\n	<br style="color: rgb(0, 0, 0); font-family: verdana, arial, helvetica, sans-serif; font-size: small; " />\r\n	<span style="color: rgb(0, 0, 0); font-family: verdana, arial, helvetica, sans-serif; font-size: small; ">Jobs pod&iacute;a desesperar a quienes le rodeaban. Pero su personalidad y sus productos han estado siempre interrelacionados, igual que el hardware y el software de Apple. Su historia, por tanto, est&aacute; llena de lecciones sobre innovaci&oacute;n, car&aacute;cter, liderazgo y valores. La historia de un genio capaz de enfurecer y seducir a partes iguales.</span></p>\r\n', 5, 'Walter Isaacson', '54ae7-asd.jpg', '2012-11-05', 'mac, machintosh, apple, silicon valley'),
(3, 'Selección de los Mejores Chistes Vol 1', '<p>\r\n	<span style="color: rgb(0, 0, 0); font-family: verdana, arial, helvetica, sans-serif; font-size: small; ">50 DE LOS MEJORES CHISTES DE TODOS LOS TIEMPOS</span><br style="color: rgb(0, 0, 0); font-family: verdana, arial, helvetica, sans-serif; font-size: small; " />\r\n	<br style="color: rgb(0, 0, 0); font-family: verdana, arial, helvetica, sans-serif; font-size: small; " />\r\n	<span style="color: rgb(0, 0, 0); font-family: verdana, arial, helvetica, sans-serif; font-size: small; ">&iquest;D&oacute;nde est&aacute;n los buenos chistes cuando uno los necesita? A partir de ahora, los encontrar&aacute;s aqu&iacute;. Puedes descarg&aacute;rtelos en tu tel&eacute;fono m&oacute;vil y tenerlos preparados para hacerte brillar la pr&oacute;xima vez que emprendas una guerra de chistes con tus compa&ntilde;eros y amigos.</span><br style="color: rgb(0, 0, 0); font-family: verdana, arial, helvetica, sans-serif; font-size: small; " />\r\n	<br style="color: rgb(0, 0, 0); font-family: verdana, arial, helvetica, sans-serif; font-size: small; " />\r\n	<span style="color: rgb(0, 0, 0); font-family: verdana, arial, helvetica, sans-serif; font-size: small; ">Una de las experiencias m&aacute;s frustrantes en esta vida es contar o escuchar un chiste que no hace re&iacute;r a nadie. Estos chistes han sido seleccionados cuidadosamente para asegurarte que todo el mundo estallar&aacute; en carcajadas, sin importar la situaci&oacute;n en la que te encuentres.</span><br style="color: rgb(0, 0, 0); font-family: verdana, arial, helvetica, sans-serif; font-size: small; " />\r\n	<br style="color: rgb(0, 0, 0); font-family: verdana, arial, helvetica, sans-serif; font-size: small; " />\r\n	<span style="color: rgb(0, 0, 0); font-family: verdana, arial, helvetica, sans-serif; font-size: small; ">Ninguna fiesta volver&aacute; a ser lo mismo con este libro a tu lado.</span><br style="color: rgb(0, 0, 0); font-family: verdana, arial, helvetica, sans-serif; font-size: small; " />\r\n	<br style="color: rgb(0, 0, 0); font-family: verdana, arial, helvetica, sans-serif; font-size: small; " />\r\n	<span style="color: rgb(0, 0, 0); font-family: verdana, arial, helvetica, sans-serif; font-size: small; ">Advertencia: No recomendable para personas que tengan alg&uacute;n tipo de alergia a la risa o al buen humor. Util&iacute;cese con cuidado.</span></p>\r\n', 1, 'César Iquino ', '4a336-1.jpg', '2012-11-05', 'reir, humor, comedia, chistes, jaimito'),
(4, 'Cincuenta sombras de Grey', '<p>\r\n	<span style="color: rgb(0, 0, 0); font-family: verdana, arial, helvetica, sans-serif; font-size: small; ">Cuando la estudiante de Literatura Anastasia Steele recibe el encargo de entrevistar al exitoso y joven empresario Christian Grey, queda impresionada al encontrarse ante un hombre atractivo, seductor y tambi&eacute;n muy intimidante. La inexperta e inocente Ana intenta olvidarle, pero pronto comprende cu&aacute;nto le desea. Cuando la pareja por fin inicia una apasionada relaci&oacute;n, Ana se sorprende por las peculiares pr&aacute;cticas er&oacute;ticas de Grey, al tiempo que descubre los l&iacute;mites de sus propios y m&aacute;s oscuros deseos.. &quot;Cincuenta sombras: la exitosa combinaci&oacute;n de historia rom&aacute;ntica y juego er&oacute;tico de alto voltaje que ha tocado la fibra de muchas mujeres.&quot; Daily News Cincuenta sombras de Grey es la primera parte de la trilog&iacute;a Cincuenta sombras, que contin&uacute;a con Cincuenta sombras m&aacute;s oscuras y Cincuenta sombras liberadas</span></p>\r\n', 3, 'E.L. JAMES', '4c5e4-pic2.jpg', '2012-11-05', 'amor, sexo, intriga, asesinato'),
(5, 'Cincuenta sombras más oscuras ', '<p>\r\n	<span style="color: rgb(0, 0, 0); font-family: verdana, arial, helvetica, sans-serif; font-size: small; ">Intimidada por las peculiares pr&aacute;cticas er&oacute;ticas y los oscuros secretos del atractivo y atormentado empresario Christian Grey, Anastasia Steele decide romper con &eacute;l y embarcarse en una nueva carrera profesional en una editorial de Seattle Pero el deseo por Christian todav&iacute;a domina cada uno de sus pensamientos, y cuando finalmente &eacute;l le propone retomar su aventura, Ana no puede resistirse. Reanudan entonces su t&oacute;rrida y sensual relaci&oacute;n, pero mientras Christian lucha contra sus propios demonios del pasado, Ana debe enfrentarse a la ira y la envidia de las mujeres que la precedieron, y tomar la decisi&oacute;n m&aacute;s importante de su vida &quot;Cincuenta sombras: la exitosa combinaci&oacute;n de historia rom&aacute;ntica y juego er&oacute;tico de alto voltaje que ha tocado la fibra de muchas mujeres.&quot; Daily News Cincuenta sombras m&aacute;s oscuras es la segunda parte de la trilog&iacute;a Cincuenta sombras, que se inici&oacute; con Cincuenta sombras de Grey, y cuya tercera parte es Cincuenta sombras liberadas</span></p>\r\n', 3, 'E.L. JAMES', '1e579-2.jpg', '2012-11-05', 'amor, sexo, intriga, asesinato'),
(6, 'Cincuenta sombras liberadas ', '<p>\r\n	<span style="color: rgb(0, 0, 0); font-family: verdana, arial, helvetica, sans-serif; font-size: small; ">Cuando la inexperta estudiante Anastasia Steele conoci&oacute; al joven, seductor y exitoso empresario Christian Grey, naci&oacute; entre ellos una sensual relaci&oacute;n que cambi&oacute; sus vidas para siempre.Sin embargo, desconcertada y llevada al l&iacute;mite por las peculiares pr&aacute;cticas er&oacute;ticas de Christian, la joven lucha por conseguir un mayor compromiso por parte de Grey. Y Christian accede con tal de no perderla Ahora, Ana y Christian lo tienen todo: amor, pasi&oacute;n, intimidad, bienestar y un mundo de infinitas posibilidades. Pero cuando parece que la fuerza de su relaci&oacute;n puede superar cualquier obst&aacute;culo, la fatalidad, el rencor y el destino se conjuran para hacer realidad los peores temores de Ana &quot;Cincuenta sombras: la exitosa combinaci&oacute;n de historia rom&aacute;ntica y juego er&oacute;tico de alto voltaje que ha tocado la fibra de muchas mujeres.&quot; Daily News Cincuenta sombras liberadas es la tercera parte de la trilog&iacute;a Cincuenta sombras, que se inici&oacute; con Cincuenta sombras de Grey y Cincuenta sombras m&aacute;s oscuras.</span></p>\r\n', 3, 'E.L. JAMES', '5f57d-3.jpg', '2012-11-05', 'amor, sexo, intriga, asesinato'),
(7, 'Vida Total: Mi Historia Increible = Total Recall ', '<p>\r\n	<span style="color: rgb(0, 0, 0); font-family: verdana, arial, helvetica, sans-serif; font-size: small; ">Su historia es excepcional y de lo m&aacute;s divertida, y en estas p&aacute;ginas nos la cuenta de maravilla. Naci&oacute; en un a&ntilde;o de hambruna en una peque&ntilde;a ciudad de Austria y era hijo de un oficial de polic&iacute;a muy severo. So&ntilde;aba con viajar a Estados Unidos para llegar a ser campe&oacute;n de culturismo y estrella de cine. A los veinti&uacute;n a&ntilde;os viv&iacute;a en Los &Aacute;ngeles y hab&iacute;a obtenido el t&iacute;tulo de Mr Universo. Cinco a&ntilde;os despu&eacute;s, hab&iacute;a aprendido ingl&eacute;s y se hab&iacute;a convertido en el mejor culturista de todos los tiempos. Al cabo de diez a&ntilde;os, hab&iacute;a conseguido un t&iacute;tulo universitario y se hab&iacute;a hecho millonario, con empresas en el &aacute;mbito de la propiedad inmobiliaria, el urbanismo y el culturismo. Tambi&eacute;n obtuvo el Globo de Oro por su debut como actor dram&aacute;tico en M&uacute;sculos de acero. Veinte a&ntilde;os despu&eacute;s, era la estrella de cine m&aacute;s famosa del mundo, estaba casado con Maria Shriver y era un incipiente l&iacute;der republicano vinculado con la familia Kennedy. Treinta y seis a&ntilde;os despu&eacute;s de llegar a Estados Unidos, el hombre al que sus compa&ntilde;eros culturistas hab&iacute;an apodado &laquo;el roble austriaco&raquo; fue elegido gobernador de California, la s&eacute;ptima econom&iacute;a del mundo. Durante su gobierno, el estado tuvo que hacer frente a una crisis presupuestaria, desastres naturales y disturbios pol&iacute;ticos. Trascendi&oacute; las l&iacute;neas de su partido para luchar por mejorar el medio ambiente, por reformas electorales y por alcanzar soluciones bipartidistas. Con Maria Shriver tuvo cuatro hijos estupendos. Despu&eacute;s de un esc&aacute;ndalo provocado por &eacute;l mismo, trat&oacute; de mantener unida a su familia. Es la primera vez que narra en primera persona la historia de toda su vida. Lo que nos cuenta Arnold es todo un desaf&iacute;o.</span></p>\r\n', 5, 'Arnold Schwarzenegger', '549cf-4.jpg', '2012-11-05', 'terminator, arnold schwarzenegger, culturismo'),
(8, 'Diario de Ana Frank ', '<p>\r\n	<span style="color: rgb(0, 0, 0); font-family: verdana, arial, helvetica, sans-serif; font-size: small; ">Tras la invasi&oacute;n de Holanda, los Frank, comerciantes jud&iacute;os alemanes emigrados a Amsterdam en 1933, se ocultaron de la Gestapo en una buhardilla anexa al edificio donde el padre de Ana ten&iacute;a sus oficinas. Eran ocho personas y permanecieron recluidas desde junio de 1942 hasta agosto de 1944, fecha en que fueron detenidos y enviados a campos de concentraci&oacute;n. En ese lugar y en las m&aacute;s precarias condiciones, Ana, a la saz&oacute;n una ni&ntilde;a de trece a&ntilde;os, escribi&oacute; su estremecedor Diario: un testimonio &uacute;nico en su g&eacute;nero sobre el horror y la barbarie nazi, y sobre los sentimientos y experiencias de la propia Ana y sus acompa&ntilde;antes. Ana muri&oacute; en el campo de Bergen-Belsen en marzo de 1945. Su Diario nunca morir&aacute;.</span></p>\r\n', 5, 'Frank Ana ', 'c7998-5.jpg', '2012-11-05', 'ana frank, segunda guerra mundial, diario personal');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login_attempts`
--

CREATE TABLE IF NOT EXISTS `login_attempts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(40) COLLATE utf8_bin NOT NULL,
  `login` varchar(50) COLLATE utf8_bin NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `relacion_libro`
--

CREATE TABLE IF NOT EXISTS `relacion_libro` (
  `id_libro` int(2) NOT NULL,
  `id_relacion` int(2) NOT NULL,
  `id_relacion_libro` int(2) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_relacion_libro`),
  KEY `id_libro` (`id_libro`,`id_relacion`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tema`
--

CREATE TABLE IF NOT EXISTS `tema` (
  `id_tema` int(2) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(200) NOT NULL,
  PRIMARY KEY (`id_tema`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `tema`
--

INSERT INTO `tema` (`id_tema`, `titulo`) VALUES
(1, 'Comedia'),
(2, 'Historia'),
(3, 'Romántica'),
(5, 'Biografía');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  `email` varchar(100) COLLATE utf8_bin NOT NULL,
  `activated` tinyint(1) NOT NULL DEFAULT '1',
  `banned` tinyint(1) NOT NULL DEFAULT '0',
  `ban_reason` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `new_password_key` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `new_password_requested` datetime DEFAULT NULL,
  `new_email` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `new_email_key` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `last_ip` varchar(40) COLLATE utf8_bin NOT NULL,
  `last_login` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `activated`, `banned`, `ban_reason`, `new_password_key`, `new_password_requested`, `new_email`, `new_email_key`, `last_ip`, `last_login`, `created`, `modified`) VALUES
(1, 'admin', '$2a$08$PbxADA00Lm.jEbXZ5SHRDubCxbje6lgeyBe9G4.XNrYHIwjO4yS26', 'admin@gmail.com', 1, 0, NULL, NULL, NULL, NULL, '513586c105f460213dc6cc8cc82b1399', '::1', '2012-12-30 16:39:55', '2012-12-30 16:29:45', '2012-12-30 15:39:55');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_autologin`
--

CREATE TABLE IF NOT EXISTS `user_autologin` (
  `key_id` char(32) COLLATE utf8_bin NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `user_agent` varchar(150) COLLATE utf8_bin NOT NULL,
  `last_ip` varchar(40) COLLATE utf8_bin NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`key_id`,`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_profiles`
--

CREATE TABLE IF NOT EXISTS `user_profiles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `country` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `website` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `libro`
--
ALTER TABLE `libro`
  ADD CONSTRAINT `libro_ibfk_1` FOREIGN KEY (`id_tema`) REFERENCES `tema` (`id_tema`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
