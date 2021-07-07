CREATE TABLE AnticipoDescuestos (
  idAnticipo INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  AnticipoDescuestosDes DOUBLE NULL,
  PRIMARY KEY(idAnticipo)
);

CREATE TABLE Beneficio (
  idBeneficios INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  PrestacionesdeTrabajo_idPrestacionesdeTrabajo INTEGER UNSIGNED NULL,
  Productividad BOOL NULL,
  PRIMARY KEY(idBeneficios)
);

CREATE TABLE BonificacionDevengados (
  idBonificacion INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  BonificacionDevengados DOUBLE NULL,
  PRIMARY KEY(idBonificacion)
);

CREATE TABLE CincoPorciento (
  id_CincoPorciento INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  Ley_RentaImponible_idRentaImponible INTEGER UNSIGNED NOT NULL,
  Ley_RentaImponibleIngresos_idIngresos INTEGER UNSIGNED NOT NULL,
  LeyRentaImponible_idRentaImponible INTEGER UNSIGNED NULL,
  LeyRentaImponibleIngresos_idIngresos INTEGER UNSIGNED NULL,
  Ley_idLey INTEGER UNSIGNED NULL,
  Porcentaje DOUBLE NULL,
  ImporteFijo INT NULL,
  PRIMARY KEY(id_CincoPorciento),
  INDEX CincoPorciento_FKIndex1(Ley_idLey, Ley_RentaImponibleIngresos_idIngresos, Ley_RentaImponible_idRentaImponible)
);

CREATE TABLE Comisiones (
  idComisiones INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  Comisiones DOUBLE NULL,
  PRIMARY KEY(idComisiones)
);

CREATE TABLE Departamento (
  Depto INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  Nombre VARCHAR(45) NULL,
  Codigo_d INTEGER UNSIGNED NULL,
  PRIMARY KEY(Depto)
);

CREATE TABLE Egresos (
  idEgresos INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  IGSS_idIGSS INTEGER UNSIGNED NULL,
  Ley INT NULL,
  IGSSporaño DOUBLE NULL,
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

CREATE TABLE HoreasExtras (
  idHoreasExtras INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  NumeroDeHoras INT NULL,
  ValorPorHora DOUBLE NULL,
  Total DOUBLE NULL,
  PRIMARY KEY(idHoreasExtras)
);

CREATE TABLE IGSS (
  idIGSS INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  HoreasExtras_idHoreasExtras INTEGER UNSIGNED NOT NULL,
  Comisiones_idComisiones INTEGER UNSIGNED NULL,
  HorasExtras_idHorasExtras INTEGER UNSIGNED NULL,
  Sueldo_idSueldo INTEGER UNSIGNED NULL,
  IGSS DOUBLE NULL,
  PRIMARY KEY(idIGSS),
  INDEX IGSS_FKIndex1(Sueldo_idSueldo),
  INDEX IGSS_FKIndex2(HoreasExtras_idHoreasExtras),
  INDEX IGSS_FKIndex3(Comisiones_idComisiones)
);

CREATE TABLE Ingresos (
  idIngresos INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  BonificacionDevengados_idBonificacion INTEGER UNSIGNED NULL,
  Sueldo_idSueldo INTEGER UNSIGNED NULL,
  SueldosSegunAño DOUBLE NULL,
  Bonificacion DOUBLE NULL,
  PRIMARY KEY(idIngresos),
  INDEX Ingresos_FKIndex1(Sueldo_idSueldo),
  INDEX Ingresos_FKIndex2(BonificacionDevengados_idBonificacion)
);

CREATE TABLE ISR (
  idISR INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  CincoPorciento_id_CincoPorciento INTEGER UNSIGNED NOT NULL,
  SietePorciento_idSietePorciento INTEGER UNSIGNED NOT NULL,
  Siete_idSiete INTEGER UNSIGNED NULL,
  Cinco_idCinto INTEGER UNSIGNED NULL,
  ISR DOUBLE NULL,
  PRIMARY KEY(idISR),
  INDEX ISR_FKIndex1(SietePorciento_idSietePorciento),
  INDEX ISR_FKIndex2(CincoPorciento_id_CincoPorciento)
);

CREATE TABLE Judiciales (
  idJudiciales INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  Judiciales DOUBLE NULL,
  PRIMARY KEY(idJudiciales)
);

CREATE TABLE Ley (
  idLey INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  RentaImponibleIngresos_idIngresos INTEGER UNSIGNED NOT NULL,
  RentaImponible_idRentaImponible INTEGER UNSIGNED NOT NULL,
  RentaImponible_Ingresos_idIngresos INTEGER UNSIGNED NOT NULL,
  PRIMARY KEY(idLey, RentaImponibleIngresos_idIngresos, RentaImponible_idRentaImponible),
  INDEX Ley_FKIndex1(RentaImponible_idRentaImponible, RentaImponible_Ingresos_idIngresos)
);

CREATE TABLE Motivo (
  idMotivo INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  Permiso_idPermiso INTEGER UNSIGNED NOT NULL,
  Vacaciones_idVacaciones INTEGER UNSIGNED NOT NULL,
  Suspencion_idSuspencion INTEGER UNSIGNED NOT NULL,
  Motivo BOOL NULL,
  PRIMARY KEY(idMotivo),
  INDEX Motivo_FKIndex1(Suspencion_idSuspencion),
  INDEX Motivo_FKIndex2(Vacaciones_idVacaciones),
  INDEX Motivo_FKIndex3(Permiso_idPermiso)
);

CREATE TABLE Pago_de_Sueldo (
  idPago_de_Sueldo INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  Fecha DATE NULL,
  Hora DATETIME NULL,
  Cheque VARCHAR(45) NULL,
  ValordeCheque DOUBLE NULL,
  Quincena BOOL NULL,
  PRIMARY KEY(idPago_de_Sueldo)
);

CREATE TABLE Permiso (
  idPermiso INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  Inicio DATE NULL,
  Fin DATE NULL,
  Tiempo DATETIME NULL,
  Razon TEXT NULL,
  PRIMARY KEY(idPermiso)
);

CREATE TABLE PrestacionesDeTrabajo (
  idPrestacionesDeTrabajo INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  BonodeProductividad DOUBLE NULL,
  ValesdeDespensa DOUBLE NULL,
  ValesdeGasolina DOUBLE NULL,
  PRIMARY KEY(idPrestacionesDeTrabajo)
);

CREATE TABLE Prestamo (
  idPrestamo INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  Prestamo DOUBLE NULL,
  PRIMARY KEY(idPrestamo)
);

CREATE TABLE Puesto (
  idPuesto INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  Departamento_Depto INTEGER UNSIGNED NOT NULL,
  Departamento INTEGER UNSIGNED NULL,
  Nombre VARCHAR(45) NULL,
  Codigo_p INTEGER UNSIGNED NULL,
  PRIMARY KEY(idPuesto),
  INDEX Puesto_FKIndex1(Departamento_Depto)
);

CREATE TABLE RentaImponible (
  idRentaImponible INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  Ingresos_idIngresos INTEGER UNSIGNED NOT NULL,
  Egresos_idEgresos INTEGER UNSIGNED NULL,
  RentaImponible INTEGER UNSIGNED NULL,
  PRIMARY KEY(idRentaImponible, Ingresos_idIngresos),
  INDEX RentaImponible_FKIndex1(Egresos_idEgresos),
  INDEX RentaImponible_FKIndex2(Ingresos_idIngresos)
);

CREATE TABLE SietePorciento (
  idSietePorciento INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  Ley_RentaImponible_idRentaImponible INTEGER UNSIGNED NOT NULL,
  Ley_RentaImponibleIngresos_idIngresos INTEGER UNSIGNED NOT NULL,
  LeyRentaImponible_idRentaImponible INTEGER UNSIGNED NULL,
  LeyRentaImponibleIngresos_idIngresos INTEGER UNSIGNED NULL,
  Ley_idLey INTEGER UNSIGNED NULL,
  Porcentaje DOUBLE NULL,
  ImporteFijo INT NULL,
  PRIMARY KEY(idSietePorciento),
  INDEX SietePorciento_FKIndex1(Ley_idLey, Ley_RentaImponibleIngresos_idIngresos, Ley_RentaImponible_idRentaImponible)
);

CREATE TABLE Sueldo (
  idSueldo INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  Sueldo DOUBLE NULL,
  PRIMARY KEY(idSueldo)
);

CREATE TABLE Suspencion (
  idSuspencion INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  Motivo_Sus BOOL NULL,
  Inicio DATE NULL,
  Fin DATE NULL,
  PRIMARY KEY(idSuspencion)
);

CREATE TABLE TotalDeDescuentos (
  idTotalDeDescuentos INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  Prestamo_idPrestamo INTEGER UNSIGNED NOT NULL,
  ISR_idISR INTEGER UNSIGNED NULL,
  AnticipoDescuestos_idAnticipo INTEGER UNSIGNED NULL,
  Judiciales_idJudiciales INTEGER UNSIGNED NULL,
  Prestamos_idPrestamos INTEGER UNSIGNED NULL,
  TotaldeDescuentos DOUBLE NULL,
  PRIMARY KEY(idTotalDeDescuentos),
  INDEX TotalDeDescuentos_FKIndex1(ISR_idISR),
  INDEX TotalDeDescuentos_FKIndex2(Prestamo_idPrestamo),
  INDEX TotalDeDescuentos_FKIndex3(Judiciales_idJudiciales),
  INDEX TotalDeDescuentos_FKIndex4(AnticipoDescuestos_idAnticipo)
);

CREATE TABLE TotalDevengado (
  idIngresos INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  HoreasExtras_idHoreasExtras INTEGER UNSIGNED NOT NULL,
  BonificacionDevengados_idBonificacion INTEGER UNSIGNED NULL,
  Comisiones_idComisiones INTEGER UNSIGNED NULL,
  HorasExtras_idHorasExtras INTEGER UNSIGNED NULL,
  Sueldo_idSueldo INTEGER UNSIGNED NULL,
  TotalDevengado DOUBLE NULL,
  PRIMARY KEY(idIngresos),
  INDEX TotalDevengado_FKIndex1(Sueldo_idSueldo),
  INDEX TotalDevengado_FKIndex2(HoreasExtras_idHoreasExtras),
  INDEX TotalDevengado_FKIndex3(Comisiones_idComisiones),
  INDEX TotalDevengado_FKIndex4(BonificacionDevengados_idBonificacion)
);

CREATE TABLE TotalLiquido (
  idTotalLiquido INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  TotalDevengado_idIngresos INTEGER UNSIGNED NOT NULL,
  TotalDeDescuentos_idTotalDeDescuentos INTEGER UNSIGNED NOT NULL,
  totalDescuento_IRS_idISR INTEGER UNSIGNED NULL,
  TotalDescuentos_idTotalDescuentos INTEGER UNSIGNED NULL,
  TotalLiquido DOUBLE NULL,
  PRIMARY KEY(idTotalLiquido),
  INDEX TotalLiquido_FKIndex1(TotalDeDescuentos_idTotalDeDescuentos),
  INDEX TotalLiquido_FKIndex2(TotalDevengado_idIngresos)
);

CREATE TABLE Trabajador (
  Usuario INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  Beneficio_idBeneficios INTEGER UNSIGNED NOT NULL,
  TotalLiquido_idTotalLiquido INTEGER UNSIGNED NOT NULL,
  Pago_de_Sueldo_idPago_de_Sueldo INTEGER UNSIGNED NOT NULL,
  Estado_idEstado INTEGER UNSIGNED NOT NULL,
  Puesto_idPuesto INTEGER UNSIGNED NOT NULL,
  Total_Liquido_idTotalLiquido INTEGER UNSIGNED NOT NULL,
  Pago_de_Sueldo_idPago_de_Sueldos INTEGER UNSIGNED NULL,
  Nombre VARCHAR(45) NULL,
  Apellido VARCHAR(45) NULL,
  Telefono INTEGER UNSIGNED NULL,
  Correo VARCHAR(255) NULL,
  Contraseña VARCHAR(45) NULL,
  Codigo_u INTEGER UNSIGNED NULL,
  PRIMARY KEY(Usuario, Beneficio_idBeneficios),
  INDEX Trabajador_FKIndex1(Puesto_idPuesto),
  INDEX Trabajador_FKIndex2(Estado_idEstado),
  INDEX Trabajador_FKIndex3(Pago_de_Sueldo_idPago_de_Sueldo),
  INDEX Trabajador_FKIndex4(TotalLiquido_idTotalLiquido),
  INDEX Trabajador_FKIndex5(Beneficio_idBeneficios)
);

CREATE TABLE Vacaciones (
  idVacaciones INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  Inicio DATE NULL,
  Fin DATE NULL,
  PRIMARY KEY(idVacaciones)
);


