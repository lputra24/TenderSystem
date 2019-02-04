CREATE TABLE IF NOT EXISTS `tender`.`permission` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `Level` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`ID`))
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `tender`.`admin` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `Password` VARCHAR(100) NOT NULL,
  `FirstName` VARCHAR(50) NOT NULL,
  `LastName` VARCHAR(50) NOT NULL,
  `Email` VARCHAR(50) NOT NULL,
  `DateOfBirth` DATE NOT NULL,
  `PhoneWork` INT NOT NULL,
  `PhoneFax` INT NOT NULL,
  `PhoneMobile` INT NOT NULL,
  `Status` TINYINT NOT NULL,
  `Permission_ID` INT NOT NULL,
  PRIMARY KEY (`ID`),
  INDEX `fk_User_Role_idx` (`Permission_ID` ASC),
  CONSTRAINT `fk_User_Role`
    FOREIGN KEY (`Permission_ID`)
    REFERENCES `tender`.`permission` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `tender`.`role` (
  `ID` INT NOT NULL,
  `RoleName` VARCHAR(10) NOT NULL,
  PRIMARY KEY (`ID`))
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `tender`.`user` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `Password` VARCHAR(100) NOT NULL,
  `FirstName` VARCHAR(50) NOT NULL,
  `LastName` VARCHAR(50) NOT NULL,
  `Email` VARCHAR(50) NOT NULL,
  `RepresentativePos` VARCHAR(45) NOT NULL,
  `DateOfBirth` DATE NOT NULL,
  `PhoneMobile` INT NOT NULL,
  `PhoneWork` INT NOT NULL,
  `PhoneFax` INT NOT NULL,
  `CompanyName` VARCHAR(45) NOT NULL,
  `Status` TINYINT NOT NULL,
  `Role_ID` INT NOT NULL,
  PRIMARY KEY (`ID`),
  INDEX `fk_User_Role1_idx` (`Role_ID` ASC),
  CONSTRAINT `fk_User_Role1`
    FOREIGN KEY (`Role_ID`)
    REFERENCES `tender`.`role` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `tender`.`area` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `District` VARCHAR(45) NOT NULL,
  `Sub-District` VARCHAR(45) NOT NULL,
  `State` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`ID`))
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `tender`.`address` (
  `ID` INT NOT NULL,
  `Postcode` VARCHAR(45) NOT NULL,
  `Street` LONGTEXT NOT NULL,
  `Area_ID` INT NOT NULL,
  PRIMARY KEY (`ID`),
  INDEX `fk_Address_Area1_idx` (`Area_ID` ASC),
  CONSTRAINT `fk_Address_Area1`
    FOREIGN KEY (`Area_ID`)
    REFERENCES `tender`.`area` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `tender`.`address_record` (
  `User_ID` INT NOT NULL,
  `Address_ID` INT NOT NULL,
  `DateFrom` DATETIME NOT NULL,
  `DateTo` DATETIME NULL,
  PRIMARY KEY (`User_ID`, `Address_ID`),
  INDEX `fk_Address_has_CompanyInfo_Address1_idx` (`Address_ID` ASC),
  INDEX `fk_AddressRecord_User1_idx` (`User_ID` ASC),
  CONSTRAINT `fk_Address_has_CompanyInfo_Address1`
    FOREIGN KEY (`Address_ID`)
    REFERENCES `tender`.`address` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_AddressRecord_User1`
    FOREIGN KEY (`User_ID`)
    REFERENCES `tender`.`user` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `tender`.`brand` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `Name` VARCHAR(45) NOT NULL,
  `ImgURL` VARCHAR(512) NULL,
  PRIMARY KEY (`ID`))
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `tender`.`category` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `Name` VARCHAR(45) NOT NULL,
  `ImgURL` VARCHAR(512) NULL,
  PRIMARY KEY (`ID`))
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `tender`.`sub_category` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `Name` VARCHAR(45) NOT NULL,
  `Category_ID` INT NOT NULL,
  PRIMARY KEY (`ID`, `Category_ID`),
  INDEX `fk_SubCategory_Category1_idx` (`Category_ID` ASC),
  CONSTRAINT `fk_SubCategory_Category1`
    FOREIGN KEY (`Category_ID`)
    REFERENCES `tender`.`category` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `tender`.`item` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `Name` VARCHAR(45) NOT NULL,
  `Brand_ID` INT NOT NULL,
  `SubCategory_ID` INT NOT NULL,
  `Category_ID` INT NOT NULL,
  PRIMARY KEY (`ID`),
  INDEX `fk_Item_Brand1_idx` (`Brand_ID` ASC),
  INDEX `fk_Item_SubCategory1_idx` (`SubCategory_ID` ASC),
  INDEX `fk_item_category1_idx` (`Category_ID` ASC),
  CONSTRAINT `fk_Item_Brand1`
    FOREIGN KEY (`Brand_ID`)
    REFERENCES `tender`.`brand` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Item_SubCategory1`
    FOREIGN KEY (`SubCategory_ID`)
    REFERENCES `tender`.`sub_category` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_item_category1`
    FOREIGN KEY (`Category_ID`)
    REFERENCES `tender`.`category` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `tender`.`request` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `Company_ID` INT NOT NULL,
  `Supplier_ID` INT NOT NULL,
  `Item_ID` INT NOT NULL,
  `Quantity` INT NOT NULL,
  PRIMARY KEY (`ID`),
  INDEX `fk_Request_User1_idx` (`Company_ID` ASC),
  INDEX `fk_Request_User2_idx` (`Supplier_ID` ASC),
  INDEX `fk_Request_Item1_idx` (`Item_ID` ASC),
  CONSTRAINT `fk_Request_User1`
    FOREIGN KEY (`Company_ID`)
    REFERENCES `tender`.`user` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Request_User2`
    FOREIGN KEY (`Supplier_ID`)
    REFERENCES `tender`.`user` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Request_Item1`
    FOREIGN KEY (`Item_ID`)
    REFERENCES `tender`.`item` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;
