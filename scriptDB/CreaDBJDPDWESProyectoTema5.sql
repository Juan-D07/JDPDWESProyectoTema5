CREATE DATABASE IF NOT EXISTS DBJDPDWESProyectoTema5;
USE DBJDPDWESProyectoTema5;

CREATE TABLE IF NOT EXISTS T01_Usuario (
    T01_Password VARCHAR(32) PRIMARY KEY,
    T01_DescUsuario VARCHAR(255),
    T01_NumConexiones int default 0,
    T01_FechaHoraUltimaConexion datetime,
    T01_Perfil enum ('admin','cliente') default 'cliente')engine=InnoDB;

CREATE TABLE IF NOT EXISTS T02_Departamento (
    T02_CodDepartamento VARCHAR(3) PRIMARY KEY,
    T02_DescDepartamento VARCHAR(255),
    T02_FechaCreacionDepartamento datetime default current_timestamp,
    T02_VolumenDeNegocio float,
    T02_FechaBajaDepartamento datetime default null)engine=InnoDB;
    
CREATE USER 'userJDPDWESProyectoTema5'@'%' IDENTIFIED BY 'paso';
GRANT ALL ON DBJDPDWESProyectoTema5.* to 'userJDPDWESProyectoTema5'@'%';