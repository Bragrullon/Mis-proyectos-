

CREATE TABLE `login5` (
  `nombre` varchar(100) NOT NULL,
  `clave` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




CREATE TABLE `registrarse` (
  `Nombre` varchar(100) NOT NULL,
  `Apellido` varchar(100) NOT NULL,
  `Correo` varchar(100) NOT NULL,
  `Contraseña` varchar(100) NOT NULL,
  `Direccion` varchar(100) NOT NULL,
  `Provincia` varchar(100) NOT NULL,
  `Pago` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO registrarse VALUES("","","LR340@Gmail.com","","Alma rosa","Santo Domingo","Tarjeta");
INSERT INTO registrarse VALUES("","","LR340@Gmail.com","1234","Alma rosa","Santo Domingo","Tarjeta");
INSERT INTO registrarse VALUES("","","bp31@gmail.com","1234","Alma rosa","Santo Domingo","Tarjeta");
INSERT INTO registrarse VALUES("Alexander","Mitel","Mitelfornai@gmail.com","Mitel10","Avenida espana","Santo Domingo","Tarjeta");
INSERT INTO registrarse VALUES("Ernesto","Alvarez","Ernesto123@gmail.com","9090","Los corales","Santo Domingo","Visa");
INSERT INTO registrarse VALUES("","","","","","","");
INSERT INTO registrarse VALUES("Drake","Grullon","Drake21@gmail.com","Drake21","Las Americas","Santo Domingo","Visa");

