/*==============================================================*/
/* Nom de SGBD :  MySQL 5.0                                     */
/* Date de cr�ation :  25/02/2019 17:45:43                      */
/*==============================================================*/



/*==============================================================*/
/* Table : DATAS                                                */
/*==============================================================*/
create table DATAS
(
   IDDATA               numeric(10,0) not null  comment '',
   IDSENSOR             numeric(15,0) not null  comment '',
   DATETIMEDATA         datetime  comment '',
   DATASENSOR           numeric(10,0)  comment '',
   primary key (IDDATA)
);

/*==============================================================*/
/* Table : DATATYPE                                             */
/*==============================================================*/
create table DATATYPE
(
   IDDATATYPE           numeric(3,0) not null  comment '',
   LIBELLE              text  comment '',
   THRESHOLD            numeric(5,0)  comment '',
   primary key (IDDATATYPE)
);

/*==============================================================*/
/* Table : SENSOR                                               */
/*==============================================================*/
create table SENSOR
(
   IDSENSOR             numeric(15,0) not null  comment '',
   IDUSER               numeric(5,0) not null  comment '',
   NAMESENSOR           text  comment '',
   primary key (IDSENSOR)
);

/*==============================================================*/
/* Table : to_capture                                           */
/*==============================================================*/
create table to_capture
(
   IDSENSOR             numeric(15,0) not null  comment '',
   IDDATATYPE           numeric(3,0) not null  comment '',
   primary key (IDSENSOR, IDDATATYPE)
);

/*==============================================================*/
/* Table : Seuil                                          */
/*==============================================================*/
create table Seuil
(
   IDUSER               numeric(5,0) not null  comment '',
   IDDATATYPE           numeric(3,0) not null  comment '',
   THRESHOLD            numeric(5,0)  comment '',
   primary key (IDUSER, IDDATATYPE)
);

/*==============================================================*/
/* Table : USERS                                                */
/*==============================================================*/
create table USERS
(
   IDUSER               numeric(5,0) not null  comment '',
   FIRSTNAMEUSER        char(20)  comment '',
   NAMEUSER             char(20)  comment '',
   LOGIN                text  comment '',
   PASSWORD             text  comment '',
   primary key (IDUSER)
);

alter table DATAS add constraint FK_DATAS_TO_RAISE_SENSOR foreign key (IDSENSOR)
      references SENSOR (IDSENSOR) on delete restrict on update restrict;

alter table SENSOR add constraint FK_SENSOR_TO_HAVE_USERS foreign key (IDUSER)
      references USERS (IDUSER) on delete restrict on update restrict;

alter table to_capture add constraint FK_TO_CAPTU_TO_CAPTUR_SENSOR foreign key (IDSENSOR)
      references SENSOR (IDSENSOR) on delete restrict on update restrict;

alter table to_capture add constraint FK_TO_CAPTU_TO_CAPTUR_DATATYPE foreign key (IDDATATYPE)
      references DATATYPE (IDDATATYPE) on delete restrict on update restrict;

alter table TO_CHOOSE add constraint FK_TO_CHOOS_TO_CHOOSE_USERS foreign key (IDUSER)
      references USERS (IDUSER) on delete restrict on update restrict;

alter table TO_CHOOSE add constraint FK_TO_CHOOS_TO_CHOOSE_DATATYPE foreign key (IDDATATYPE)
      references DATATYPE (IDDATATYPE) on delete restrict on update restrict;

