-- Generado por Oracle SQL Developer Data Modeler 19.4.0.350.1424
--   en:        2023-08-30 15:15:33 CLT
--   sitio:      Oracle Database 11g
--   tipo:      Oracle Database 11g



CREATE TABLE admin (
    admin_cod         NUMERIC(10) NOT NULL,
    contraseña_admin  VARCHAR(10) NOT NULL,
    tipo_c_id_tipo    NUMERIC(10) NOT NULL
);

CREATE UNIQUE INDEX admin__idx ON
    admin (
        tipo_c_id_tipo
    ASC );

ALTER TABLE admin ADD CONSTRAINT admin_pk PRIMARY KEY ( admin_cod );

CREATE TABLE alumno (
    alum_codigo            NUMERIC(10) NOT NULL,
    fecha_nacimiento       DATE,
    nombre_apoderado       VARCHAR(200) NOT NULL,
    apoderado_apod_codigo  NUMERIC(10) NOT NULL,
    curso_id_curso         NUMERIC(10) NOT NULL,
    tipo_c_id_tipo         NUMERIC(10) NOT NULL
);

CREATE UNIQUE INDEX alumno__idx ON
    alumno (
        tipo_c_id_tipo
    ASC );

ALTER TABLE alumno ADD CONSTRAINT alumno_pk PRIMARY KEY ( alum_codigo );

CREATE TABLE apoderado (
    apod_codigo     NUMERIC(10) NOT NULL,
    tipo_c_id_tipo  NUMERIC(10) NOT NULL
);

CREATE UNIQUE INDEX apoderado__idx ON
    apoderado (
        tipo_c_id_tipo
    ASC );

ALTER TABLE apoderado ADD CONSTRAINT apoderado_pk PRIMARY KEY ( apod_codigo );

CREATE TABLE asignatura (
    id_asig      VARCHAR(10) NOT NULL,
    nombre_asig  VARCHAR(500) NOT NULL,
    inparticion  VARCHAR(300) NOT NULL
);

ALTER TABLE asignatura ADD CONSTRAINT asignatura_pk PRIMARY KEY ( id_asig );

CREATE TABLE asistencia (
    id_asis             NUMERIC(10) NOT NULL,
    asistencia          CHAR(1) NOT NULL,
    dia                 DATE NOT NULL,
    alumno_alum_codigo  NUMERIC(10) NOT NULL
);

ALTER TABLE asistencia ADD CONSTRAINT asistencia_pk PRIMARY KEY ( id_asis );

CREATE TABLE cuenta (
    id_cuenta       NUMERIC(10) NOT NULL,
    rut             VARCHAR(12) NOT NULL,
    nombre          VARCHAR(100) NOT NULL,
    email           VARCHAR(500) NOT NULL,
    contraseña      VARCHAR(100) NOT NULL,
    telefono        NUMERIC(15),
    direccion       VARCHAR(500) NOT NULL,
    tipo_c_id_tipo  NUMERIC(10) NOT NULL
);

ALTER TABLE cuenta ADD CONSTRAINT cuenta_pk PRIMARY KEY ( id_cuenta );

CREATE TABLE curso (
    id_curso     NUMERIC(10) NOT NULL,
    n_curso      NUMERIC(1) NOT NULL,
    sigla_curso  CHAR(1) NOT NULL
);

ALTER TABLE curso ADD CONSTRAINT curso_pk PRIMARY KEY ( id_curso );

CREATE TABLE d_asig (
    docente_doc_codigo  NUMERIC(10) NOT NULL,
    asignatura_id_asig  VARCHAR(10) NOT NULL
);

ALTER TABLE d_asig ADD CONSTRAINT d_asig_pk PRIMARY KEY ( docente_doc_codigo,
                                                          asignatura_id_asig );

CREATE TABLE docente (
    doc_codigo      NUMERIC(10) NOT NULL,
    descripcion     VARCHAR(200) NOT NULL,
    tipo_c_id_tipo  NUMERIC(10) NOT NULL
);

CREATE UNIQUE INDEX docente__idx ON
    docente (
        tipo_c_id_tipo
    ASC );

ALTER TABLE docente ADD CONSTRAINT docente_pk PRIMARY KEY ( doc_codigo );

CREATE TABLE horario (
    id_horario      NUMERIC(10) NOT NULL,
    entrada         DATE NOT NULL,
    salida          DATE,
    descansos       DATE,
    almuerzo        DATE,
    curso_id_curso  NUMERIC(10) NOT NULL
);

CREATE UNIQUE INDEX horario__idx ON
    horario (
        curso_id_curso
    ASC );

ALTER TABLE horario ADD CONSTRAINT horario_pk PRIMARY KEY ( id_horario );

CREATE TABLE ins (
    alumno_alum_codigo  NUMERIC(10) NOT NULL,
    talleres_id_tall    NUMERIC(10) NOT NULL
);

ALTER TABLE ins ADD CONSTRAINT ins_pk PRIMARY KEY ( alumno_alum_codigo,
                                                    talleres_id_tall );

CREATE TABLE nota (
    id_nota             NUMERIC(10) NOT NULL,
    semestre            NUMERIC(1) NOT NULL,
    nota1               NUMERIC(2, 1) NOT NULL,
    nota2               NUMERIC(2, 1) NOT NULL,
    nota3               NUMERIC(2, 1) NOT NULL,
    nota4               NUMERIC(2, 1),
    nota5               NUMERIC(2, 1),
    nota6               NUMERIC(2, 1),
    nota7               NUMERIC(2, 1),
    nota8               NUMERIC(2, 1),
    nota9               NUMERIC(2, 1),
    nota10              NUMERIC(2, 1),
    nota11              NUMERIC(2, 1),
    nota12              NUMERIC(2, 1),
    nota13              NUMERIC(2, 1),
    nota14              NUMERIC(2, 1),
    nota15              NUMERIC(2, 1),
    promedio            NUMERIC(2, 1),
    alumno_alum_codigo  NUMERIC(10) NOT NULL,
    id_curso            NUMERIC NOT NULL
);

ALTER TABLE nota ADD CONSTRAINT nota_pk PRIMARY KEY ( id_nota );

CREATE TABLE programas (
    id_prog  NUMERIC(10) NOT NULL,
    nombre   VARCHAR(20) NOT NULL,
    link     VARCHAR(100)
);

ALTER TABLE programas ADD CONSTRAINT programas_pk PRIMARY KEY ( id_prog );

CREATE TABLE talleres (
    id_tall             NUMERIC(10) NOT NULL,
    nombre              VARCHAR(20) NOT NULL,
    acargo              VARCHAR(20) NOT NULL,
    horario             DATE NOT NULL,
    integrantes         NUMERIC(2) NOT NULL,
    lugar               VARCHAR(30),
    docente_doc_codigo  NUMERIC(10) NOT NULL
);

ALTER TABLE talleres ADD CONSTRAINT talleres_pk PRIMARY KEY ( id_tall );

CREATE TABLE tiem_clases (
    asignatura_id_asig  VARCHAR(10) NOT NULL,
    horario_id_horario  NUMERIC(10) NOT NULL
);

ALTER TABLE tiem_clases ADD CONSTRAINT tiem_clases_pk PRIMARY KEY ( asignatura_id_asig,
                                                                    horario_id_horario );

CREATE TABLE tipo_c (
    id_tipo  	 NUMERIC(10) NOT NULL,
    descripcion  VARCHAR(50) NOT NULL
);

ALTER TABLE tipo_c ADD CONSTRAINT tipo_c_pk PRIMARY KEY ( id_tipo );

ALTER TABLE admin
    ADD CONSTRAINT admin_tipo_c_fk FOREIGN KEY ( tipo_c_id_tipo )
        REFERENCES tipo_c ( id_tipo );

ALTER TABLE alumno
    ADD CONSTRAINT alumno_apoderado_fk FOREIGN KEY ( apoderado_apod_codigo )
        REFERENCES apoderado ( apod_codigo );

ALTER TABLE alumno
    ADD CONSTRAINT alumno_curso_fk FOREIGN KEY ( curso_id_curso )
        REFERENCES curso ( id_curso );

ALTER TABLE alumno
    ADD CONSTRAINT alumno_tipo_c_fk FOREIGN KEY ( tipo_c_id_tipo )
        REFERENCES tipo_c ( id_tipo );

ALTER TABLE apoderado
    ADD CONSTRAINT apoderado_tipo_c_fk FOREIGN KEY ( tipo_c_id_tipo )
        REFERENCES tipo_c ( id_tipo );

ALTER TABLE asistencia
    ADD CONSTRAINT asistencia_alumno_fk FOREIGN KEY ( alumno_alum_codigo )
        REFERENCES alumno ( alum_codigo );

ALTER TABLE cuenta
    ADD CONSTRAINT cuenta_tipo_c_fk FOREIGN KEY ( tipo_c_id_tipo )
        REFERENCES tipo_c ( id_tipo );

ALTER TABLE d_asig
    ADD CONSTRAINT d_asig_asignatura_fk FOREIGN KEY ( asignatura_id_asig )
        REFERENCES asignatura ( id_asig );

ALTER TABLE d_asig
    ADD CONSTRAINT d_asig_docente_fk FOREIGN KEY ( docente_doc_codigo )
        REFERENCES docente ( doc_codigo );

ALTER TABLE docente
    ADD CONSTRAINT docente_tipo_c_fk FOREIGN KEY ( tipo_c_id_tipo )
        REFERENCES tipo_c ( id_tipo );

ALTER TABLE horario
    ADD CONSTRAINT horario_curso_fk FOREIGN KEY ( curso_id_curso )
        REFERENCES curso ( id_curso );

ALTER TABLE ins
    ADD CONSTRAINT ins_alumno_fk FOREIGN KEY ( alumno_alum_codigo )
        REFERENCES alumno ( alum_codigo );

ALTER TABLE ins
    ADD CONSTRAINT ins_talleres_fk FOREIGN KEY ( talleres_id_tall )
        REFERENCES talleres ( id_tall );

ALTER TABLE nota
    ADD CONSTRAINT nota_alumno_fk FOREIGN KEY ( alumno_alum_codigo )
        REFERENCES alumno ( alum_codigo );

ALTER TABLE talleres
    ADD CONSTRAINT talleres_docente_fk FOREIGN KEY ( docente_doc_codigo )
        REFERENCES docente ( doc_codigo );

ALTER TABLE tiem_clases
    ADD CONSTRAINT tiem_clases_asignatura_fk FOREIGN KEY ( asignatura_id_asig )
        REFERENCES asignatura ( id_asig );

ALTER TABLE tiem_clases
    ADD CONSTRAINT tiem_clases_horario_fk FOREIGN KEY ( horario_id_horario )
        REFERENCES horario ( id_horario );



-- Informe de Resumen de Oracle SQL Developer Data Modeler: 
-- 
-- CREATE TABLE                            16
-- CREATE INDEX                             7
-- ALTER TABLE                             35
-- CREATE VIEW                              0
-- ALTER VIEW                               0
-- CREATE PACKAGE                           0
-- CREATE PACKAGE BODY                      0
-- CREATE PROCEDURE                         0
-- CREATE FUNCTION                          0
-- CREATE TRIGGER                           0
-- ALTER TRIGGER                            0
-- CREATE COLLECTION TYPE                   0
-- CREATE STRUCTURED TYPE                   0
-- CREATE STRUCTURED TYPE BODY              0
-- CREATE CLUSTER                           0
-- CREATE CONTEXT                           0
-- CREATE DATABASE                          0
-- CREATE DIMENSION                         0
-- CREATE DIRECTORY                         0
-- CREATE DISK GROUP                        0
-- CREATE ROLE                              0
-- CREATE ROLLBACK SEGMENT                  0
-- CREATE SEQUENCE                          0
-- CREATE MATERIALIZED VIEW                 0
-- CREATE MATERIALIZED VIEW LOG             0
-- CREATE SYNONYM                           0
-- CREATE TABLESPACE                        0
-- CREATE USER                              0
-- 
-- DROP TABLESPACE                          0
-- DROP DATABASE                            0
-- 
-- REDACTION POLICY                         0
-- 
-- ORDS DROP SCHEMA                         0
-- ORDS ENABLE SCHEMA                       0
-- ORDS ENABLE OBJECT                       0
-- 
-- ERRORS                                   0
-- WARNINGS                                 0
