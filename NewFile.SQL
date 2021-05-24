/*
Created: 08.04.2020
Modified: 08.02.2021
Project: Videorental Project
Model: Videorental
Company: Quest Software, Inc.
Author: Radim Mario Tkacik
Database: Oracle 19c
*/


-- Create user data types section -------------------------------------------------

CREATE TYPE "SCOTT"."Price_Type"
AS OBJECT (price NUMBER(10,2),  
    MEMBER FUNCTION total_price_VAT (vat number) RETURN NUMBER)
/
CREATE TYPE BODY "SCOTT"."Price_Type"
IS
    MEMBER FUNCTION total_price_VAT (vat NUMBER)
    RETURN NUMBER IS
    BEGIN
        RETURN (price*((vat+100)/100));
    END;
END;
/

CREATE TYPE "SCOTT"."Cust_Address_Type"
AS OBJECT
    ( street_address     VARCHAR2(40)
    , postal_code        VARCHAR2(10)
    , city               VARCHAR2(30)
    , state_province     VARCHAR2(10)
    , country_id         CHAR(2)
    , phone              Phone_List_Type
    )
/

CREATE TYPE "SCOTT"."Phone_List_Type"
AS VARRAY(5) OF VARCHAR2(25)
/

-- Create sequences section -------------------------------------------------

CREATE SEQUENCE "SCOTT"."SeqExemplar"
 INCREMENT BY 1
 START WITH 1
 NOMAXVALUE
 NOMINVALUE
 NOCACHE
/

-- Create tables section -------------------------------------------------

-- Table Trash

CREATE TABLE "Trash"(
  "id" Integer NOT NULL
)
/

-- Create indexes for table Trash

CREATE INDEX "IX_Relationship1" ON "Trash" ("id")
/

-- Table List_of_goods

CREATE TABLE "List_of_goods"(
  "id" Integer NOT NULL,
  "Name" Char(20 ) NOT NULL,
  "Type" Char(20 ) NOT NULL
)
/

-- Add keys for table List_of_goods

ALTER TABLE "List_of_goods" ADD CONSTRAINT "PK_List_of_goods" PRIMARY KEY ("id")
/

-- Create procedures section -------------------------------------------------

CREATE PROCEDURE "SCOTT"."p_Customer_Has_Num_Film"(cid IN integer, num OUT integer)
AS
BEGIN
    SELECT count(*)
    INTO num
    FROM T_CUSTOMER c, T_BORROWING b, T_EXEMPLAR e, T_FILM f
    WHERE c.customer_id=cid
        and c.customer_id=b.customer_id
        and b.exemplar_id=e.exemplar_id
        and e.film_id=f.film_id;
END;
/

-- Create functions section -------------------------------------------------

CREATE FUNCTION "SCOTT"."f_Customer_Has_Num_Film"(cid IN integer)
RETURN integer
IS
sol integer;
BEGIN
    p_Customer_Has_Num_Film(cid,sol);
    RETURN (sol);
END;
/


-- Create foreign keys (relationships) section ------------------------------------------------- 

ALTER TABLE "Trash" ADD CONSTRAINT "Relationship1" FOREIGN KEY ("id") REFERENCES "List_of_goods" ("id")
/




-- Grant permissions section -------------------------------------------------


