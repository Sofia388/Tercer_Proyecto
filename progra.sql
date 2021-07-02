CREATE TABLE Anticipo (
  idAnticipo INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  Anticipo DOUBLE NULL,
  PRIMARY KEY(idAnticipo)
);

CREATE TABLE Beneficios (
  idBeneficios INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  Prestaciones de trabajo_idPrestaciones de trabajo INTEGER UNSIGNED NOT NULL,
  Productividad BOOL NULL,
  PRIMARY KEY(idBeneficios),
  INDEX Beneficios_FKIndex1(Prestaciones de trabajo_idPrestaciones de trabajo)
);

CREATE TABLE Bonificación (
  idBonificación INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  Bonificación DOUBLE NULL,
  PRIMARY KEY(idBonificación)
);

CREATE TABLE Cinco porciento (
  idCinco porciento INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  Ley _Renta imponible_idRenta imponible INTEGER UNSIGNED NOT NULL,
  Ley _Renta imponible_Ingresos_idIngresos INTEGER UNSIGNED NOT NULL,
  Ley _idLey  INTEGER UNSIGNED NOT NULL,
  Porcentaje DOUBLE NULL,
  PRIMARY KEY(idCinco porciento),
  INDEX Cinco porciento_FKIndex1(Ley _idLey , Ley _Renta imponible_Ingresos_idIngresos, Ley _Renta imponible_idRenta imponible)
);

CREATE TABLE Comisiones (
  idComisiones INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  Comisiones DOUBLE NULL,
  PRIMARY KEY(idComisiones)
);

CREATE TABLE Departamento (
  Depto INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  Nombre VARCHAR(45) NULL,
  Código_d INTEGER UNSIGNED NULL,
  PRIMARY KEY(Depto)
);

CREATE TABLE Egresos (
  idEgresos INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  IGSS_idIGSS INTEGER UNSIGNED NOT NULL,
  Ley INT NULL,
  IGSS(12) DOUBLE NULL,
  PRIMARY KEY(idEgresos),
  INDEX Egresos_FKIndex1(IGSS_idIGSS)
);

CREATE TABLE Estado (
  idEstado INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  Motivo_idMotivo INTEGER UNSIGNED NOT NULL,
  Estado BOOL NULL,
  PRIMARY KEY(idEstado),
  INDEX Estado_FKIndex1(Motivo_idMotivo)
);

CREATE TABLE Horas extra (
  idHoras extra INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  Número de horas INT NULL,
  Valor por hora DOUBLE NULL,
  Total DOUBLE NULL,
  PRIMARY KEY(idHoras extra)
);

CREATE TABLE IGSS (
  idIGSS INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  Comisiones_idComisiones INTEGER UNSIGNED NOT NULL,
  Horas extra_idHoras extra INTEGER UNSIGNED NOT NULL,
  Sueldo_idSueldo INTEGER UNSIGNED NOT NULL,
  IGSS DOUBLE NULL,
  PRIMARY KEY(idIGSS),
  INDEX IGSS_FKIndex1(Sueldo_idSueldo),
  INDEX IGSS_FKIndex2(Horas extra_idHoras extra),
  INDEX IGSS_FKIndex3(Comisiones_idComisiones)
);

CREATE TABLE Ingresos (
  idIngresos INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  Bonificación_idBonificación INTEGER UNSIGNED NOT NULL,
  Sueldo_idSueldo INTEGER UNSIGNED NOT NULL,
  Sueldos(12) DOUBLE NULL,
  Bonificación DOUBLE NULL,
  PRIMARY KEY(idIngresos),
  INDEX Ingresos_FKIndex1(Sueldo_idSueldo),
  INDEX Ingresos_FKIndex2(Bonificación_idBonificación)
);

CREATE TABLE ISR (
  idISR INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  Siete porciento_idSiete porciento INTEGER UNSIGNED NOT NULL,
  Cinco porciento_idCinco porciento INTEGER UNSIGNED NOT NULL,
  ISR DOUBLE NULL,
  PRIMARY KEY(idISR),
  INDEX ISR_FKIndex1(Cinco porciento_idCinco porciento),
  INDEX ISR_FKIndex2(Siete porciento_idSiete porciento)
);

CREATE TABLE Judiciales (
  idJudiciales INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  Judiciales DOUBLE NULL,
  PRIMARY KEY(idJudiciales)
);

CREATE TABLE Ley  (
  idLey  INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  Renta imponible_Ingresos_idIngresos INTEGER UNSIGNED NOT NULL,
  Renta imponible_idRenta imponible INTEGER UNSIGNED NOT NULL,
  Excedente INT NULL,
  PRIMARY KEY(idLey , Renta imponible_Ingresos_idIngresos, Renta imponible_idRenta imponible),
  INDEX Ley _FKIndex1(Renta imponible_idRenta imponible, Renta imponible_Ingresos_idIngresos)
);

CREATE TABLE Motivo (
  idMotivo INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  Suspención_idSuspención INTEGER UNSIGNED NOT NULL,
  Permiso_idPermiso INTEGER UNSIGNED NOT NULL,
  Vacaciones_idVacaciones INTEGER UNSIGNED NOT NULL,
  Motivo BOOL NULL,
  PRIMARY KEY(idMotivo),
  INDEX Motivo_FKIndex1(Vacaciones_idVacaciones),
  INDEX Motivo_FKIndex2(Permiso_idPermiso),
  INDEX Motivo_FKIndex3(Suspención_idSuspención)
);

CREATE TABLE Pago de sueldos (
  idPago de sueldos INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  Fecha DATE NULL,
  Hora DATETIME NULL,
  Cheque VARCHAR(45) NULL,
  Valor de cheque DOUBLE NULL,
  Quincena BOOL NULL,
  PRIMARY KEY(idPago de sueldos)
);

CREATE TABLE Permiso (
  idPermiso INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  Inicio DATE NULL,
  Finalización DATE NULL,
  Tiempo DATETIME NULL,
  Razón TEXT NULL,
  PRIMARY KEY(idPermiso)
);

CREATE TABLE Prestaciones de trabajo (
  idPrestaciones de trabajo INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  Bono de productividad DOUBLE NULL,
  Vales de despensa DOUBLE NULL,
  Vales de gasolina DOUBLE NULL,
  PRIMARY KEY(idPrestaciones de trabajo)
);

CREATE TABLE Prestamo (
  idPrestamo INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  Prestamo DOUBLE NULL,
  PRIMARY KEY(idPrestamo)
);

CREATE TABLE Puesto (
  idPuesto INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  Departamento_Depto INTEGER UNSIGNED NOT NULL,
  Nombre VARCHAR(45) NULL,
  Código_p INTEGER UNSIGNED NULL,
  PRIMARY KEY(idPuesto),
  INDEX Puesto_FKIndex1(Departamento_Depto)
);

CREATE TABLE Renta imponible (
  idRenta imponible INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  Ingresos_idIngresos INTEGER UNSIGNED NOT NULL,
  Egresos_idEgresos INTEGER UNSIGNED NOT NULL,
  Renta imponible DOUBLE NULL,
  PRIMARY KEY(idRenta imponible, Ingresos_idIngresos),
  INDEX Renta imponible_FKIndex1(Ingresos_idIngresos),
  INDEX Renta imponible_FKIndex2(Egresos_idEgresos)
);

CREATE TABLE Siete porciento (
  idSiete porciento INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  Ley _Renta imponible_idRenta imponible INTEGER UNSIGNED NOT NULL,
  Ley _Renta imponible_Ingresos_idIngresos INTEGER UNSIGNED NOT NULL,
  Ley _idLey  INTEGER UNSIGNED NOT NULL,
  Porcentaje DOUBLE NULL,
  Importe fijo INT NULL,
  PRIMARY KEY(idSiete porciento),
  INDEX Siete porciento_FKIndex1(Ley _idLey , Ley _Renta imponible_Ingresos_idIngresos, Ley _Renta imponible_idRenta imponible)
);

CREATE TABLE Sueldo (
  idSueldo INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  Sueldo DOUBLE NULL,
  PRIMARY KEY(idSueldo)
);

CREATE TABLE Suspención (
  idSuspención INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  Motivo BOOL NULL,
  Inicio  DATE NULL,
  Finalización DATE NULL,
  PRIMARY KEY(idSuspención)
);

CREATE TABLE Total de descuentos  (
  idTotal de descuentos  INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  ISR_idISR INTEGER UNSIGNED NOT NULL,
  Anticipo_idAnticipo INTEGER UNSIGNED NOT NULL,
  Judiciales_idJudiciales INTEGER UNSIGNED NOT NULL,
  Prestamo_idPrestamo INTEGER UNSIGNED NOT NULL,
  Total de descuentos DOUBLE NULL,
  PRIMARY KEY(idTotal de descuentos , ISR_idISR),
  INDEX Total de descuentos _FKIndex1(ISR_idISR),
  INDEX Total de descuentos _FKIndex2(Prestamo_idPrestamo),
  INDEX Total de descuentos _FKIndex3(Judiciales_idJudiciales),
  INDEX Total de descuentos _FKIndex4(Anticipo_idAnticipo)
);

CREATE TABLE Total devengado (
  idIngresos INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  Bonificación_idBonificación INTEGER UNSIGNED NOT NULL,
  Comisiones_idComisiones INTEGER UNSIGNED NOT NULL,
  Horas extra_idHoras extra INTEGER UNSIGNED NOT NULL,
  Sueldo_idSueldo INTEGER UNSIGNED NOT NULL,
  Total devengado DOUBLE NULL,
  PRIMARY KEY(idIngresos),
  INDEX Total devengado_FKIndex1(Sueldo_idSueldo),
  INDEX Total devengado_FKIndex2(Horas extra_idHoras extra),
  INDEX Total devengado_FKIndex3(Comisiones_idComisiones),
  INDEX Total devengado_FKIndex4(Bonificación_idBonificación)
);

CREATE TABLE Total liquido (
  idTotal liquido INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  Total devengado_idIngresos INTEGER UNSIGNED NOT NULL,
  Total de descuentos _ISR_idISR INTEGER UNSIGNED NOT NULL,
  Total de descuentos _idTotal de descuentos  INTEGER UNSIGNED NOT NULL,
  Total liquido DOUBLE NULL,
  PRIMARY KEY(idTotal liquido),
  INDEX Total liquido_FKIndex1(Total de descuentos _idTotal de descuentos , Total de descuentos _ISR_idISR),
  INDEX Total liquido_FKIndex2(Total devengado_idIngresos)
);

CREATE TABLE Trabajador (
  Usuario INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  Beneficios_idBeneficios INTEGER UNSIGNED NOT NULL,
  Total liquido_idTotal liquido INTEGER UNSIGNED NOT NULL,
  Pago de sueldos_idPago de sueldos INTEGER UNSIGNED NOT NULL,
  Estado_idEstado INTEGER UNSIGNED NOT NULL,
  Puesto_idPuesto INTEGER UNSIGNED NOT NULL,
  Nombre VARCHAR(45) NULL,
  Apellido VARCHAR(45)) NULL,
  Teléfono INTEGER UNSIGNED NULL,
  Correo VARCHAR(45) NULL,
  Contraseña VARCHAR(45) NULL,
  Código_u INTEGER UNSIGNED NULL,
  PRIMARY KEY(Usuario, Beneficios_idBeneficios),
  INDEX Trabajador_FKIndex1(Puesto_idPuesto),
  INDEX Trabajador_FKIndex2(Estado_idEstado),
  INDEX Trabajador_FKIndex3(Pago de sueldos_idPago de sueldos),
  INDEX Trabajador_FKIndex4(Total liquido_idTotal liquido),
  INDEX Trabajador_FKIndex5(Beneficios_idBeneficios)
);

CREATE TABLE Vacaciones (
  idVacaciones INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  Inicio DATE NULL,
  Finalización DATE NULL,
  PRIMARY KEY(idVacaciones)
);