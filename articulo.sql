drop database crud;
create database crud;
use crud;

CREATE TABLE `productos` (
  `codigo` int(10) NOT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `productos`
  ADD PRIMARY KEY (`codigo`);
COMMIT;

ALTER TABLE `productos`
  MODIFY `codigo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
COMMIT;

-- -----------------------------------------

ALTER TABLE productos AUTO_INCREMENT = 0;

insert into `productos` (`nombre`, `descripcion`) 
values ('Lapiz', 'Lorem ipsum dolor sit amet consectetur adipisicing elit.'),
('Borrador', 'Lorem ipsum dolor sit amet consectetur adipisicing elit.'),
('Tajador', 'Lorem ipsum dolor sit amet consectetur adipisicing elit.');

select * from productos;



