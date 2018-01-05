/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     05/01/2018 10.05.42                          */
/*==============================================================*/


drop table if exists ADMIN;

drop table if exists CUSTOMER;

drop table if exists KONFIRMASI_PEMBAYARAN;

/*==============================================================*/
/* Table: ADMIN                                                 */
/*==============================================================*/
create table ADMIN
(
   USERNAME             varchar(500) not null,
   PASSWORD             varchar(500),
   primary key (USERNAME)
);

/*==============================================================*/
/* Table: CUSTOMER                                              */
/*==============================================================*/
create table CUSTOMER
(
   NAMA_CUST            varchar(500),
   TELP                 numeric(8,0),
   TANGGAL              date not null,
   USERNAME             varchar(500),
   JENIS_ACARA          varchar(500),
   JAM                  varchar(500),
   KETERANGAN           text,
   primary key (TANGGAL)
);

/*==============================================================*/
/* Table: KONFIRMASI_PEMBAYARAN                                 */
/*==============================================================*/
create table KONFIRMASI_PEMBAYARAN
(
   KD_BOOKING           varchar(500) not null,
   TANGGAL              date,
   USERNAME             varchar(500),
   NAMA_KONFIR          varchar(500),
   NO_REKENING          numeric(8,0),
   JML_UANG             numeric(8,0),
   STATUS               text,
   primary key (KD_BOOKING)
);

alter table CUSTOMER add constraint FK_MEMESAN foreign key (USERNAME)
      references ADMIN (USERNAME) on delete restrict on update restrict;

alter table KONFIRMASI_PEMBAYARAN add constraint FK_MENGECEK foreign key (USERNAME)
      references ADMIN (USERNAME) on delete restrict on update restrict;

alter table KONFIRMASI_PEMBAYARAN add constraint FK_MENGONFIRMASI foreign key (TANGGAL)
      references CUSTOMER (TANGGAL) on delete restrict on update restrict;

