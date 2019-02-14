drop database if exists mydb;
create database mydb;
use mydb;



CREATE TABLE IF NOT EXISTS `mydb`.`administrator` (
  `IdAdmin` INT NOT NULL AUTO_INCREMENT,
  `Email` VARCHAR(45) NOT NULL,
  `Password` VARCHAR(45) NOT NULL,
  `Name` VARCHAR(150) NOT NULL,
  `PhoneMobile` VARCHAR(15) NOT NULL,
  `Status` VARCHAR(45) NOT NULL,
  `Level` VARCHAR(15) NOT NULL DEFAULT 'Admin',
  PRIMARY KEY (`IdAdmin`))
ENGINE = InnoDB;

-- INSERT INTO `administrator` (`IdAdmin`, `Password`, `Name`, `Email`, `PhoneMobile`, `Status`, `IdPermission`) VALUES (NULL, '21232f297a57a5a743894a0e4a801fc3', 'Kevin', 'kevin@gmail.com', '087899556000', 'active', '1');

CREATE TABLE IF NOT EXISTS `mydb`.`company` (
  `IdCompany` INT NOT NULL AUTO_INCREMENT,
  `NamaCom` VARCHAR(255) NOT NULL,
  `PBF` VARCHAR(255) NOT NULL,
  `NoIjinPBF` INT NOT NULL,
  `PBFMasaBerlaku` DATE NOT NULL,
  `NoSiup` INT NOT NULL,
  `SiupMasaBerlaku` DATE NOT NULL,
  `APJNama` VARCHAR(45) NOT NULL,
  `NoSIKA` INT NOT NULL,
  `APJMasaBerlaku` DATE NOT NULL,
  `NamaPajak` VARCHAR(255) NOT NULL,
  `NPWP` VARCHAR(255) NOT NULL,
  `PhoneWork` VARCHAR(15) NOT NULL,
  `PhoneFax` VARCHAR(15) NOT NULL,
  `PhoneMobile` VARCHAR(15) NOT NULL,
  `Username` VARCHAR(255) NOT NULL,
  `Password` VARCHAR(255) NOT NULL,
  `Email` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`IdCompany`))
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `mydb`.`supplier` (
  `IdSupplier` INT NOT NULL AUTO_INCREMENT,
  `NamaSup` VARCHAR(255) NOT NULL,
  `PBF` VARCHAR(255) NOT NULL,
  `NoIjinPBF` INT NOT NULL,
  `PBFMasaBerlaku` DATE NOT NULL,
  `NoSiup` INT NOT NULL,
  `SiupMasaBerlaku` DATE NOT NULL,
  `APJNama` VARCHAR(45) NOT NULL,
  `NoSIKA` INT NOT NULL,
  `APJMasaBerlaku` DATE NOT NULL,
  `NamaPajak` VARCHAR(255) NOT NULL,
  `NPWP` VARCHAR(255) NOT NULL,
  `PhoneWork` VARCHAR(15) NOT NULL,
  `PhoneFax` VARCHAR(15) NOT NULL,
  `PhoneMobile` VARCHAR(15) NOT NULL,
  `Username` VARCHAR(255) NOT NULL,
  `Password` VARCHAR(255) NOT NULL,
  `Email` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`IdSupplier`))
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `mydb`.`provinsi` (
  `IdProvinsi` INT NOT NULL AUTO_INCREMENT,
  `NamaProvinsi` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`IdProvinsi`))
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `mydb`.`kota` (
  `IdKota` INT NOT NULL AUTO_INCREMENT,
  `NamaKota` VARCHAR(45) NOT NULL,
  `IdProvinsi` INT NOT NULL,
  PRIMARY KEY (`IdKota`),
  INDEX `fk_kota_provinsi1_idx` (`IdProvinsi` ASC),
  CONSTRAINT `fk_kota_provinsi1`
    FOREIGN KEY (`IdProvinsi`)
    REFERENCES `mydb`.`provinsi` (`IdProvinsi`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `mydb`.`kecamatan` (
  `IdKecamatan` INT NOT NULL AUTO_INCREMENT,
  `NamaKecamatan` VARCHAR(45) NOT NULL,
  `IdKota` INT NOT NULL,
  `IdProvinsi` INT NOT NULL,
  PRIMARY KEY (`IdKecamatan`),
  INDEX `fk_kecamatan_kota1_idx` (`IdKota` ASC),
  INDEX `fk_kecamatan_provinsi1_idx` (`IdProvinsi` ASC),
  CONSTRAINT `fk_kecamatan_kota1`
    FOREIGN KEY (`IdKota`)
    REFERENCES `mydb`.`kota` (`IdKota`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_kecamatan_provinsi1`
    FOREIGN KEY (`IdProvinsi`)
    REFERENCES `mydb`.`provinsi` (`IdProvinsi`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `mydb`.`lokasi` (
  `IdLokasi` INT NOT NULL AUTO_INCREMENT,
  `KodePos` INT NOT NULL,
  `Alamat` VARCHAR(255) NOT NULL,
  `IdKota` INT NOT NULL,
  `IdKecamatan` INT NOT NULL,
  `IdProvinsi` INT NOT NULL,
  `IdCompany` INT NOT NULL,
  PRIMARY KEY (`IdLokasi`),
  INDEX `fk_lokasi_kota1_idx` (`IdKota` ASC),
  INDEX `fk_lokasi_kecamatan1_idx` (`IdKecamatan` ASC),
  INDEX `fk_lokasi_provinsi1_idx` (`IdProvinsi` ASC),
  INDEX `fk_lokasi_company1_idx` (`IdCompany` ASC),
  CONSTRAINT `fk_lokasi_kota1`
    FOREIGN KEY (`IdKota`)
    REFERENCES `mydb`.`kota` (`IdKota`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_lokasi_kecamatan1`
    FOREIGN KEY (`IdKecamatan`)
    REFERENCES `mydb`.`kecamatan` (`IdKecamatan`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_lokasi_provinsi1`
    FOREIGN KEY (`IdProvinsi`)
    REFERENCES `mydb`.`provinsi` (`IdProvinsi`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_lokasi_company1`
    FOREIGN KEY (`IdCompany`)
    REFERENCES `mydb`.`company` (`IdCompany`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `mydb`.`Merek` (
  `IdMerek` INT NOT NULL AUTO_INCREMENT,
  `NamaMerek` VARCHAR(45) NOT NULL,
  `ImgURL` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`IdMerek`))
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `mydb`.`kategori` (
  `IdKategori` INT NOT NULL AUTO_INCREMENT,
  `NamaKategori` VARCHAR(45) NOT NULL,
  `ImgURL` VARCHAR(255) NULL,
  PRIMARY KEY (`IdKategori`))
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `mydb`.`subkategori` (
  `IdSubkategori` INT NOT NULL AUTO_INCREMENT,
  `NamaKategori` VARCHAR(45) NOT NULL,
  `IdKategori` INT NOT NULL,
  PRIMARY KEY (`IdSubkategori`),
  INDEX `fk_subkategori_kategori1_idx` (`IdKategori` ASC),
  CONSTRAINT `fk_subkategori_kategori1`
    FOREIGN KEY (`IdKategori`)
    REFERENCES `mydb`.`kategori` (`IdKategori`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `mydb`.`item` (
  `Barcode` VARCHAR(255) NOT NULL,
  `NamaItem` VARCHAR(45) NOT NULL,
  `Deskripsi` TEXT NOT NULL,
  `ImgURL` VARCHAR(255) NULL,
  `IdSubkategori` INT NOT NULL,
  `IdKategori` INT NOT NULL,
  `IdMerek` INT NOT NULL,
  PRIMARY KEY (`Barcode`),
  INDEX `fk_item_subkategori1_idx` (`IdSubkategori` ASC),
  INDEX `fk_item_kategori1_idx` (`IdKategori` ASC),
  INDEX `fk_item_Merek1_idx` (`IdMerek` ASC),
  CONSTRAINT `fk_item_subkategori1`
    FOREIGN KEY (`IdSubkategori`)
    REFERENCES `mydb`.`subkategori` (`IdSubkategori`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_item_kategori1`
    FOREIGN KEY (`IdKategori`)
    REFERENCES `mydb`.`kategori` (`IdKategori`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_item_Merek1`
    FOREIGN KEY (`IdMerek`)
    REFERENCES `mydb`.`Merek` (`IdMerek`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `mydb`.`requestDetail` (
  `IdrequestDetail` INT NOT NULL AUTO_INCREMENT,
  `HargaSatuan` INT NOT NULL,
  `Keterangan` TEXT NULL,
  `UOM` VARCHAR(45) NOT NULL,
  `keteranganUOM` TEXT NOT NULL,
  `item_Barcode` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`IdrequestDetail`),
  INDEX `fk_requestDetail_item1_idx` (`item_Barcode` ASC),
  CONSTRAINT `fk_requestDetail_item1`
    FOREIGN KEY (`item_Barcode`)
    REFERENCES `mydb`.`item` (`Barcode`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `mydb`.`requestHeader` (
  `IdRequestHeader` INT NOT NULL AUTO_INCREMENT,
  `IdCompany` INT NOT NULL,
  `PenawaranStart` DATE NOT NULL,
  `PenawaranEnd` DATE NOT NULL,
  `RealisasiStart` DATE NOT NULL,
  `RealisasiEnd` DATE NOT NULL,
  `Status` VARCHAR(45) NOT NULL,
  `IdKota` INT NOT NULL,
  `Keterangan` TEXT NULL,
  `IdrequestDetail` INT NOT NULL,
  `CreationDate` DATE NOT NULL,
  PRIMARY KEY (`IdRequestHeader`),
  INDEX `fk_Request_company1_idx` (`IdCompany` ASC),
  INDEX `fk_Request_kota1_idx` (`IdKota` ASC),
  INDEX `fk_requestHeader_requestDetail1_idx` (`IdrequestDetail` ASC),
  CONSTRAINT `fk_Request_company1`
    FOREIGN KEY (`IdCompany`)
    REFERENCES `mydb`.`company` (`IdCompany`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Request_kota1`
    FOREIGN KEY (`IdKota`)
    REFERENCES `mydb`.`kota` (`IdKota`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_requestHeader_requestDetail1`
    FOREIGN KEY (`IdrequestDetail`)
    REFERENCES `mydb`.`requestDetail` (`IdrequestDetail`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `mydb`.`offer` (
  `IdOffer` INT NOT NULL AUTO_INCREMENT,
  `HargaSatuan` INT NOT NULL,
  `KuantitasPenawaran` INT NOT NULL,
  `IdRequest` INT NOT NULL,
  `IdSupplier` INT NOT NULL,
  `Status` VARCHAR(45) NOT NULL,
  `item_Barcode` VARCHAR(255) NOT NULL,
  `CreationDate` DATE NOT NULL,
  PRIMARY KEY (`IdOffer`),
  INDEX `fk_offer_Request1_idx` (`IdRequest` ASC),
  INDEX `fk_offer_supplier1_idx` (`IdSupplier` ASC),
  INDEX `fk_offer_item1_idx` (`item_Barcode` ASC),
  CONSTRAINT `fk_offer_Request1`
    FOREIGN KEY (`IdRequest`)
    REFERENCES `mydb`.`requestHeader` (`IdRequestHeader`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_offer_supplier1`
    FOREIGN KEY (`IdSupplier`)
    REFERENCES `mydb`.`supplier` (`IdSupplier`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_offer_item1`
    FOREIGN KEY (`item_Barcode`)
    REFERENCES `mydb`.`item` (`Barcode`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
