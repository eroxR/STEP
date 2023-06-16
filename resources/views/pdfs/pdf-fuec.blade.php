<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Styles -->

    <style>
        /* @page {
            margin-left: 0.5cm;
            margin-right: 0;
            margin: 10%;
        } */

        .margin1 {
            margin: 1%;
        }

        .height1 {
            height: 1%;
        }

        .height2 {
            height: 96%;
        }

        .height3 {
            height: 8rem;
        }

        .height4 {
            height: 55%;
        }

        .height5 {
            height: 91%;
        }

        .height6 {
            height: 15%;
        }

        .height7 {
            height: 33px;
        }

        .width1 {
            width: 100%;
        }

        .width2 {
            width: 50%;
        }

        .width3 {
            width: 80%;
        }

        .width4 {
            width: 98%;
        }

        .width5 {
            width: 25%;
        }

        .width6 {
            width: 18%;
        }

        .width7 {
            width: 14%;
        }

        .width8 {
            width: 29%;
        }

        .width9 {
            width: 15%;
        }

        .margin-top1 {
            margin-top: 8.7%;
        }

        .margin-top2 {
            margin-top: -7.5rem;
        }

        .margin-top3 {
            margin-top: -0.5%;
        }

        .margin-top4 {
            margin-top: -1.7%;
        }

        .margin-top5 {
            margin-top: -2%;
        }

        .margin-top6 {
            margin-top: -1%;
        }

        .margin-top7 {
            margin-top: -5%;
        }

        .margin-top8 {
            margin-top: -0.1%;
        }

        .margin-top9 {
            margin-top: 5%;
        }

        .margin-top10 {
            margin-top: -4%;
        }

        .margin-left1 {
            margin-left: 1%;
        }

        .margin-left2 {
            margin-left: 54%;
        }

        .margin-left3 {
            margin-left: -1.7rem;
        }

        .margin-left4 {
            margin-left: 12%;
        }

        .margin-left5 {
            margin-left: 0.7%;
        }

        .margin-left6 {
            margin-left: 15%;
        }

        .margin-left7 {
            margin-left: 39.7%;
        }

        .margin-left8 {
            margin-left: 20%;
        }

        .margin-left9 {
            margin-left: 5%
        }

        .font-size1 {
            font-size: 10px;
        }

        .font-size2 {
            font-size: 12px;
        }

        .font-size3 {
            font-size: 11px;
        }

        .padding1 {
            padding: -0.4%;
        }

        .padding2 {
            padding: -1.5%;
        }

        .padding3 {
            padding: -0.5%;
        }

        .padding4 {
            padding: -0.2%;
        }

        .padding5 {
            padding: -1%;
        }

        .padding6 {
            padding: -0.8%;
        }

        .padding7 {
            padding: -0.8%;
        }

        .padding8 {
            padding: 1%;
        }

        .padding-bottom1 {
            padding-bottom: -0.2%;
        }

        .padding-bottom2 {
            padding-bottom: -0.5%;
        }

        .padding-bottom3 {
            padding-bottom: -5.1%;
        }

        .padding-top {
            padding-top: -1%;
        }

        .position1 {
            position: flex;
        }

        .absolute {
            position: absolute;
        }

        .bordes {
            border: 2px solid #000;
        }

        .border {
            border: 1px solid #000;
        }

        .border-radius {
            border-radius: 4px;
        }

        .border-bottom {
            border-bottom: 1px solid #000;
        }

        .border-right {
            border-right: 1px solid #000;
        }

        .border-left {
            border-left: 1px solid #000;
        }

        .border-top {
            border-top: 1px solid #000;
        }

        .flex {
            display: flex;
        }

        .block {
            display: block;
        }

        .justify-content {
            justify-content: center;
        }

        .text-alin {
            text-align: center;
        }


        body {
            font-family: 'Roboto', sans-serif;

        }

        .contenedorprincipal {
            margin: 1%;
            /* width: 100%; */
            height: 96%;
            border: 2px solid #000;
            border-radius: 4px;
        }

        .cabecera {
            width: 100%;
            height: 8rem;
            display: flex;
            /* align-items: center; */
            border-bottom: 1px solid rgb(0 0 0);
        }

        .contenedormintransporte {
            display: flex;
            justify-content: center;
            width: 50%;
            height: 8rem;
            border-right: 1px solid rgb(0 0 0);
            /* padding-top: 7px; */
            /* padding-bottom: 1px; */
            /* padding-left: 1px; */
            /* padding-right: 1px; */
        }

        .mintransporte {
            width: 98%;
            margin-top: 8.7%;
            height: 55%;
            margin-left: 1%;
        }

        .contenedorlogo {
            /* display: flex; */
            /* margin-top: -13%; */
            margin-left: 54%;
            justify-content: center;
            width: 50%;
            height: 8rem;
            /* border-right: 1px solid rgb(0 0 0); */
        }

        .logo {
            width: 80%;
            margin-top: -7.5rem;
            margin-left: -1.7rem;
            height: 91%;
        }

        .span1 {
            border-bottom: 1px solid #000;
            width: 100%;
            padding-top: -1%;
            padding-bottom: -0.2%;
        }

        .span2 {
            border-bottom: 1px solid #000;
            /* border-left: 1px solid #000; */
            padding: -0.4%;
        }

        .text1 {
            font-size: 10px;
            text-align: center;
        }

        .text2 {
            margin-left: 12%;
            /* text-align: center; */
            font-size: 12px;
        }

        .text3 {
            font-size: 11px;
            margin-top: -0.5%;
            margin-left: 0.7%;

        }

        .text4 {
            position: flex;
            margin-top: -1.7%;
            font-size: 11px;
            margin-left: 0.7%;
        }

        .text5 {
            font-size: 11px;
            margin-left: 15%;

        }

        .text6 {
            font-size: 11px;
            margin-top: -0.5%;
            margin-left: 0.7%;
        }


        .text7 {
            font-size: 11px;
            margin-left: 39.7%;
        }

        .text8 {
            font-size: 11px;
            margin-left: 20%;
        }

        .text9 {
            /* margin-left: 1% */
        }

        .span3 {
            border-bottom: 1px solid #000;
            /* border-left: 1px solid #000; */
            /* padding: -0.4%; */
            display: block;
            height: 15%;
        }

        .text10 {
            margin-left: 5%
        }

        .text11 {
            margin-left: 5%
        }

        .text12 {
            margin-left: 5%
        }

        .text13 {
            display: flex;
            font-size: 11px;
            margin-top: -2%;
            margin-left: 0.7%;
        }

        .fechas {
            width: 100%;
            text-align: center;
        }


        .peding {
            padding: -1.5%;
        }

        .text {
            font-size: 11px;
        }

        .span4 {
            border-bottom: 1px solid #000;
            /* width: 100%; */
            padding: -0.4%;
        }

        .span7 {
            border-bottom: 1px solid #000;
            padding-bottom: -0.5%;
        }

        .span8 {
            border-bottom: 1px solid #000;
            border-left: 1px solid rgb(0 0 0);
            padding-bottom: -0.5%;
            width: 25%;
            height: 1%;
        }


        .text14 {
            font-size: 12px;
            margin-top: -1%;
            /* width: 31%; */
            /* padding: 1%; */
            /* padding: -0.4%; */
        }

        .text15 {
            font-size: 12px;
            margin-top: -5%;
            /* margin-top: -0.9%; */
            /* padding: -0.4%; */
        }

        .caracteristicas {
            width: 100%;
            text-align: center;
        }

        .span5 {
            border-bottom: 1px solid #000;
            padding: -0.4%;
        }

        .text16 {
            font-size: 11px;
            margin-top: -0.1%;
            margin-left: 0.7%;

        }

        .span6 {

            padding: -0.5%;
        }

        .text17 {
            border-bottom: 1px solid #000;
            border-left: 1px solid rgb(0 0 0);

            font-size: 11px;
            margin-top: -0.1%;
            margin-left: 0.7%;
        }

        .text18 {

            border-bottom: 1px solid #000;
            font-size: 11px;
            margin-top: -0.1%;
            margin-left: 0.7%;
        }

        .text19 {

            border-bottom: 1px solid #000;
            font-size: 11px;
            margin-top: -0.1%;
            margin-left: 0.7%;
        }

        .text20 {
            border-bottom: 1px solid #000;
            border-left: 1px solid rgb(0 0 0);
            margin-top: -0.1%;
            margin-left: 0.7%;
            font-size: 11px;
        }

        .conductor {
            width: 100%;
            text-align: center;
            border-collapse: collapse;
            margin-top: -1%;
        }

        .span9 {

            border: 1px solid #000;
            /* width: 15%; */
            padding: -0.2%;
            width: 18%;


        }

        .span10-1 {
            padding: -1%;
            border: 1px solid #000;
            width: 25%;
        }

        .span10-2 {
            padding: -1%;
            border: 1px solid #000;
            width: 14%;
        }

        .span10-3 {
            padding: -1%;
            border: 1px solid #000;
            width: 29%;
        }

        .span10-4 {
            padding: -1%;
            border: 1px solid #000;
            width: 14%;
        }

        .span11 {
            border: 1px solid #000;
            padding: -0.8%;
            /* height: 2%; */

        }

        .text21 {
            font-size: 12px;
        }

        .text22 {
            font-size: 12px;
            margin-top: 5%;
        }

        .responsablecontrato-1 {
            width: 100%;
            text-align: center;
        }

        .marginF-1 {
            margin-top: 50%;
        }

        .marginF-2 {
            margin-top: 43%;
        }

        .marginF-3 {
            margin-top: 36%;
        }

        .marginF-4 {
            margin-top: 29%;
        }

        .marginF-5 {
            margin-top: 21%;
        }

        .marginF-6 {
            margin-top: 14%;
        }

        .marginF-7 {
            margin-top: 7%;
        }

        .marginF-8 {
            margin-top: 0%;
        }

        .marginF-9 {
            margin-top: 115.6%;
        }

        .marginF-10 {
            margin-top: 115.6%;
        }

        .marginF-11 {
            margin-top: 115.6%;
        }

        .marginF-12 {
            margin-top: 115.6%;
        }

        .marginF-13 {
            margin-top: 108.3%;
        }

        .marginF-14 {
            margin-top: 101.4%;
        }

        .marginF-15 {
            margin-top: 94.5%;
        }

        .marginF-16 {
            margin-top: 87.4%;
        }

        .marginF-17 {
            margin-top: 80.5%;
        }

        .marginF-18 {
            margin-top: 73.5%;
        }

        .marginF-19 {
            margin-top: 66.5%;
        }

        .marginF-20 {
            margin-top: 59.5%;
        }



        .span12 {
            width: 15%;
            height: 33px;
            padding-bottom: -5.1%;
            border-bottom: 1px solid #000;
            border-right: 1px solid #000;
            border-top: 1px solid #000;
            padding: 1%;
        }

        .text26 {
            font-size: 11px;
            margin-top: -4%;
            /* margin-left: 0.7%; */
        }

        .colum1 {
            position: absolute;
            width: 24%;
            height: 1.3%;
            margin-left: 16.7%;
            margin-top: -6.9%;
            border: 1px solid #000;
            /* border-right: 1px solid rgb(0 0 0); */
        }

        .colum2 {
            position: absolute;
            width: 18%;
            height: 1.3%;
            margin-left: 41%;
            margin-top: -6.9%;
            border: 1px solid #000;
            /* border-right: 1px solid rgb(0 0 0); */
        }

        .colum3 {
            position: absolute;
            width: 18%;
            height: 1.3%;
            margin-left: 59%;
            margin-top: -6.9%;
            border: 1px solid #000;
            /* border-right: 1px solid rgb(0 0 0); */
        }

        .colum4 {
            position: absolute;
            width: 20.3%;
            height: 1.3%;
            margin-left: 77%;
            margin-top: -6.9%;
            border: 1px solid #000;
            /* border-right: 1px solid rgb(0 0 0); */
        }

        .text27 {
            margin-top: -0.1%;
            /* margin-left: 0.7%; */
            font-size: 12px;
        }

        .colum5 {
            position: absolute;
            width: 24%;
            height: 3.1%;
            margin-left: 16.7%;
            margin-top: -4.9%;
            border: 1px solid #000;
            /* border-right: 1px solid rgb(0 0 0); */
        }

        .colum6 {
            position: absolute;
            width: 18%;
            height: 3.1%;
            margin-left: 41%;
            margin-top: -4.9%;
            border: 1px solid #000;
            /* border-right: 1px solid rgb(0 0 0); */
        }

        .colum7 {
            position: absolute;
            width: 18%;
            height: 3.1%;
            margin-left: 59%;
            margin-top: -4.9%;
            border: 1px solid #000;
            /* border-right: 1px solid rgb(0 0 0); */
        }

        .colum8 {
            position: absolute;
            width: 20.3%;
            height: 3.1%;
            margin-left: 77%;
            margin-top: -4.9%;
            border: 1px solid #000;
            /* border-right: 1px solid rgb(0 0 0); */
        }

        .piepagina {
            width: 100%;
            height: 6.9rem;
            display: flex;
            /* align-items: center; */
            /* border-bottom: 1px solid rgb(0 0 0); */
        }

        .infoempresa {
            /* display: flex; */
            justify-content: center;
            width: 46%;
            height: 4.6rem;
            border-top: 1px solid rgb(0 0 0);
            border-right: 1px solid rgb(0 0 0);
            padding: 2%;
        }

        .contenedorlogofirma {
            display: flex;
            margin-left: 50%;
            margin-top: -23%;
            /* justify-content: center; */
            width: 50%;
            height: 6.3rem;
            border-top: 1px solid rgb(0 0 0);
            border-left: 1px solid rgb(0 0 0);
        }

        .logofinal {
            position: absolute;
            width: 36%;
            margin-top: 1.7%;
            /* margin-left: -0.7rem; */
            height: 7%;
        }

        .qr {
            position: absolute;
            width: 9.6%;
            margin-top: 1.9%;
            margin-left: 37.7%;
        }

        .firma {
            position: absolute;
            width: 20%;
            margin-top: -4.2%;
            margin-left: 19%;
        }

        .text-fin {
            font-size: 11.5px;
            margin-bottom: -4%;
        }

        .textout-contenedor {
            position: absolute;
            width: 100%;
            /* border: 1px solid #000; */
            padding: -2%;
            text-align: center;
            margin-left: 2.1%;
            margin-top: -0.7%;
        }

        .textout {
            font-size: 12px;
        }


        /* ***********************************Nuevo Fuec*******************************************************************         */


        .boxLogos {
            /* display: flex;*/
            margin-left: 2%;
            margin-right: 2%;
            /* background: gray; */
            /* margin-top: 10%; */
        }

        .boxMintrasnporte {
            /* background: red; */
            width: 33%;
            height: 5%;
            float: left;
        }

        .imgMintransporte {
            width: 98%;
            margin: 1%;
            /* margin-top: 8.7%; */
            /* height: 55%; */
            /* margin-left: 1%; */
        }

        .boxISO {
            /* background: blue; */
            width: 33%;
            height: 5%;
            float: left;
            text-align: center;
        }

        .imgIso {
            width: 30%;
            /* margin: 1%; */
            /* margin-top: 8.7%; */
            height: 95%;
            /* margin-left: 1%; */
        }

        .imgLogo {
            width: 30%;
            /* margin-top: -7.5rem; */
            /* margin-left: -1.7rem; */
            height: 5%;
        }

        .imgIso {
            width: 30%;
            margin: 1%;
            /* margin-top: 8.7%; */
            height: 85%;
            /* margin-left: 1%; */
        }

        .contenedorTitulo {
            display: flex;
            margin-left: 2%;
            margin-right: 2%;
            /* background: rgb(230, 247, 0); */
            margin-top: 2%;
            height: 5%;
            text-align: center;

        }

        .contenedorDescrpcion {
            margin-left: 2%;
            margin-right: 2%;
            display: grid;
            margin-top: 2%;
            /* background: #000; */

        }

        .Descr1 {
            width: 100%;
            height: 4%;
            /* background: #db0404; */
            font-size: 12px;
        }

        .Descr2 {
            width: 100%;
            height: 2%;
            /* background: #0fc209; */
            font-size: 12px;
        }

        .Descr3 {
            width: 100%;
            height: 2%;
            /* background: #fff; */
            font-size: 12px;
        }

        .Descr4 {
            width: 100%;
            height: 2%;
            /* background: #150aac; */
            font-size: 12px;
        }

        .Descr5 {
            width: 100%;
            height: 2%;
            /* background: #9b204f; */
            font-size: 12px;
        }

        .Descr6 {
            width: 100%;
            height: 2%;
            /* background: #1196d4; */
            font-size: 12px;
        }

        .Descr7 {
            width: 100%;
            height: 2%;
            /* background: #cbda03; */
            font-size: 12px;
        }

        .Descr8 {
            width: 100%;
            height: 2%;
            /* background: #7b02c2; */
            font-size: 12px;
        }

        .boxTituloVigencia {
            margin-left: 2%;
            margin-right: 2%;
            display: grid;
            margin-top: 2%;
            /* background: #000; */
            height: 1.5%;
            text-align: center;
            font-size: 13px;
            /* color: #fff; */
        }

        .boxFechainicio {
            margin-left: 2%;
            margin-right: 2%;
            margin-top: 2%;
            /* background: #867f7f; */
            font-size: 12px;

        }

        .boxFinicial {
            width: 65%;
            height: 3%;
            float: left;
            /* background: #1196d4; */
            font-size: 13px;
            border-left: solid 1px #000;
            border-top: solid 1px #000;
            border-bottom: solid 1px #000;
        }

        .boxFDia {
            width: 8%;
            height: 3%;
            float: left;
            /* background: #e2de01; */
            text-align: center;
            font-size: 12px;
            border-left: solid 1px #000;
            border-top: solid 1px #000;
            border-bottom: solid 1px #000;
        }

        .boxFMes {
            width: 12%;
            height: 3%;
            float: left;
            /* background: #5fe704; */
            text-align: center;
            font-size: 12px;
            border-left: solid 1px #000;
            border-top: solid 1px #000;
            border-bottom: solid 1px #000;
        }

        .boxFAzo {
            width: 15%;
            height: 3%;
            float: left;
            /* background: #033247; */
            text-align: center;
            font-size: 12px;
            border-left: solid 1px #000;
            border-top: solid 1px #000;
            border-bottom: solid 1px #000;
            border-right: solid 1px #000;
        }

        .boxFechafin {
            margin-left: 2%;
            margin-right: 2%;
            margin-top: 3.1%;
            /* background: #867f7f; */
            /* border: #000; */
            font-size: 13px;
        }

        .boxFfin {
            width: 65%;
            height: 3%;
            float: left;
            /* background: #d103d8; */
            font-size: 12px;
            border-left: solid 1px #000;
            border-top: solid 1px #000;
            border-bottom: solid 1px #000;
        }

        .boxFfDia {
            width: 8%;
            height: 3%;
            float: left;
            /* background: #b30849; */
            text-align: center;
            font-size: 12px;
            border-left: solid 1px #000;
            border-top: solid 1px #000;
            border-bottom: solid 1px #000;
        }

        .boxFfMes {
            width: 12%;
            height: 3%;
            float: left;
            /* background: #af3d08; */
            text-align: center;
            font-size: 12px;
            border-left: solid 1px #000;
            border-top: solid 1px #000;
            border-bottom: solid 1px #000;
        }

        .boxFfAzo {
            width: 15%;
            height: 3%;
            float: left;
            /* background: #079c5e; */
            text-align: center;
            font-size: 12px;
            border-left: solid 1px #000;
            border-top: solid 1px #000;
            border-bottom: solid 1px #000;
            border-right: solid 1px #000;
        }

        .boxTituloCaracteristica {
            margin-left: 2%;
            margin-right: 2%;
            display: grid;
            margin-top: 5%;
            /* background: #000; */
            height: 1.7%;
            text-align: center;
            /* color: #fff; */
            font-size: 13px;
        }

        .boxVehiculo {
            margin-left: 2%;
            margin-right: 2%;
            margin-top: 2%;
            /* background: #867f7f; */
            border: #000;
        }

        .boxPlaca {
            width: 45%;
            height: 3%;
            float: left;
            /* background: #079c5e; */
            font-size: 12px;
            text-align: center;
            border: solid 1px #000;
        }

        .boxModelo {
            width: 10%;
            height: 3%;
            float: left;
            /* background: #e2e60e; */
            font-size: 12px;
            text-align: center;
            border: solid 1px #000;
        }

        .boxMarca {
            width: 15%;
            height: 3%;
            float: left;
            /* background: #0273dd; */
            font-size: 12px;
            text-align: center;
            border: solid 1px #000;
        }

        .boxClase {
            width: 29.2%;
            height: 3%;
            float: left;
            /* background: #919694; */
            font-size: 12px;
            text-align: center;
            border: solid 1px #000;
        }

        .boxAnswerVehiculo {
            margin-left: 2%;
            margin-right: 2%;
            margin-top: 2.8%;
            background: #867f7f;
        }

        .answerPlaca {
            width: 45%;
            height: 3%;
            float: left;
            /* background: #ec059f; */
            font-size: 12px;
            text-align: center;
            border-left: solid 1px #000;
            border-top: solid 1px #000;
            border-bottom: solid 1px #000;
        }

        .answerModelo {
            width: 10%;
            height: 3%;
            float: left;
            /* background: #01f794; */
            font-size: 12px;
            text-align: center;
            border-right: solid 1px #000;
            border-top: solid 1px #000;
            border-bottom: solid 1px #000;
        }

        .answerMarca {
            width: 15%;
            height: 3%;
            float: left;
            /* background: #08f008; */
            font-size: 12px;
            text-align: center;
            border-left: solid 1px #000;
            border-top: solid 1px #000;
            border-bottom: solid 1px #000;
        }

        .answerClase {
            width: 29.9%;
            height: 3%;
            float: left;
            /* background: #c7570d; */
            font-size: 12px;
            text-align: center;
            border-right: solid 1px #000;
            border-top: solid 1px #000;
            border-bottom: solid 1px #000;
        }

        .boxTitulosDrive {
            margin-left: 2%;
            margin-right: 2%;
            margin-top: 2.7%;
            /* background: #867f7f; */
        }

        .boxNInterno {
            width: 45%;
            height: 3%;
            float: left;
            /* background: #c7570d; */
            font-size: 12px;
            text-align: center;
            border: solid 1px #000;
        }

        .boxNTOperacion {
            width: 54.8%;
            height: 3%;
            float: left;
            /* background: #65b6e6; */
            font-size: 12px;
            text-align: center;
            border: solid 1px #000;
        }

        .boxDatosDrive0 {
            margin-left: 2%;
            margin-right: 2%;
            margin-top: 2.6%;
            /* background: #dddada; */
            /* border: solid 1px #000; */
        }

        .boxDatosDrive1 {
            margin-left: 2%;
            margin-right: 2%;
            margin-top: 7.1%;
            /* background: #867f7f; */
            /* border: solid 1px #000; */
        }

        .boxDatosDrive2 {
            margin-left: 2%;
            margin-right: 2%;
            margin-top: 6.5%;
            /* background: #b60000; */
            /* border: solid 1px #000; */
        }

        .boxDatosDrive3 {
            margin-left: 2%;
            margin-right: 2%;
            margin-top: 5.9%;
            /* background: #b60000; */
            /* border: solid 1px #000; */
        }

        .boxDatosDrive4 {
            margin-left: 2%;
            margin-right: 2%;
            margin-top: 5.3%;
            /* background: #b60000; */
            /* border: solid 1px #000; */
        }

        .boxDatosDrive5 {
            margin-left: 2%;
            margin-right: 2%;
            margin-top: 4.9%;
            /* background: #b60000; */
            /* border: solid 1px #000; */
        }
        
        .boxConductor {
            width: 20%;
            height: 10%;
            float: left;
            /* background: #ec059f; */
            border-left: solid 1px #000;
            border-top: solid 1px #000;
            border-bottom: solid 1px #000;
            font-size: 12px;
            text-align: center;
        }

        .boxNombreC {
            width: 27%;
            height: 10%;
            float: left;
            /* background: #01f794; */
            border-left: solid 1px #000;
            border-top: solid 1px #000;
            border-bottom: solid 1px #000;
            font-size: 12px;
            text-align: center;
        }

        .boxCedulaC {
            width: 13%;
            height: 10%;
            float: left;
            /* background: #08f008; */
            border-left: solid 1px #000;
            border-top: solid 1px #000;
            border-bottom: solid 1px #000;
            font-size: 12px;
            text-align: center;
        }

        .boxLicenciaC {
            width: 26%;
            height: 10%;
            float: left;
            /* background: #c7570d; */
            border-left: solid 1px #000;
            border-top: solid 1px #000;
            border-bottom: solid 1px #000;
            font-size: 11px;
            text-align: center;
        }

        .boxVigenciaC {
            width: 13.5%;
            height: 10%;
            float: left;
            /* background: #000000; */
            border: solid 1px #000;
            font-size: 12px;
            text-align: center;
            /* color: #fff; */
        }

        .boxResContratante1 {
            margin-left: 2%;
            margin-right: 2%;
            margin-top: 4.6%;
            /* background: #867f7f; */
        }

        .boxResContratante2 {
            margin-left: 2%;
            margin-right: 2%;
            margin-top: 6.5%;
            /* background: #867f7f; */
        }

        .boxResContratante3 {
            margin-left: 2%;
            margin-right: 2%;
            margin-top: 5.9%;
            /* background: #867f7f; */
        }

        .boxResContratante4 {
            margin-left: 2%;
            margin-right: 2%;
            margin-top: 5.3%;
            /* background: #867f7f; */
        }

        .boxResContratante5 {
            margin-left: 2%;
            margin-right: 2%;
            margin-top: 5%;
            /* background: #867f7f; */
        }

        .boxResContratante6 {
            margin-left: 2%;
            margin-right: 2%;
            margin-top: 4.4%;
            /* background: #867f7f; */
        }

        .boxResponsable {
            width: 20%;
            height: 11%;
            float: left;
            /* background: #0514ec; */
            font-size: 12px;
            text-align: center;
            border-left: solid 1px #000;
            border-top: solid 1px #000;
            border-bottom: solid 1px #000;
        }

        .boxNombreR {
            width: 27%;
            height: 11%;
            float: left;
            /* background: #f73201; */
            font-size: 12px;
            text-align: center;
            border-left: solid 1px #000;
            border-top: solid 1px #000;
            border-bottom: solid 1px #000;
        }

        .boxCedulaR {
            width: 13%;
            height: 11%;
            float: left;
            /* background: #afc203; */
            font-size: 12px;
            text-align: center;
            border-left: solid 1px #000;
            border-top: solid 1px #000;
            border-bottom: solid 1px #000;
        }

        .boxTelefonoR {
            width: 13.5%;
            height: 11%;
            float: left;
            /* background: #0dc79f; */
            font-size: 11px;
            text-align: center;
            border-left: solid 1px #000;
            border-top: solid 1px #000;
            border-bottom: solid 1px #000;
        }

        .boxDireccionR {
            width: 26%;
            height: 11%;
            float: left;
            /* background: #460342; */
            font-size: 12px;
            text-align: center;
            /* color: #fff; */
            border: solid 1px #000;
        }

        .boxDatosEmpresa1 {
            margin-left: 2%;
            margin-right: 2%;
            margin-top: 7.3%;
            background: #867f7f;

        }

        .boxDatosEmpresa2 {
            margin-left: 2%;
            margin-right: 2%;
            margin-top: 6.4%;
            /* background: #867f7f; */

        }

        .boxDatosEmpresa3 {
            margin-left: 2%;
            margin-right: 2%;
            margin-top: 6%;
            /* background: #867f7f; */

        }

        .boxDatosEmpresa4 {
            margin-left: 2%;
            margin-right: 2%;
            margin-top: 5.3%;
            /* background: #867f7f; */
        }

        .boxDatosEmpresa5 {
            margin-left: 2%;
            margin-right: 2%;
            margin-top: 4.8%;
            /* background: #867f7f; */
        }

        .boxDatosEmpresa6 {
            margin-left: 2%;
            margin-right: 2%;
            margin-top: 4.4%;
            /* background: #867f7f; */
        }

        .boxInfo {
            width: 45%;
            height: 18%;
            float: left;
            /* background: #c7570d; */
            font-size: 11px;
            text-align: center;
            border: solid 1px #000;
        }

        .boxFirma {
            width: 55%;
            height: 18%;
            float: left;
            /* background: #65b6e6; */
            /* font-size: 12px; */
            text-align: center;
            border-right: solid 1px #000;
            border-top: solid 1px #000;
            border-bottom: solid 1px #000;
        }

        .firm {
            margin-top: -1%;
            height: 110%;
        }
    </style>
</head>
@foreach ($permits as $permit)

    <body>
        <!-- pagina 1-->
        @foreach ($contractdatas as $contractdata)
            <div class="contenedorprincipal">

                <div class="boxLogos">
                    <div class="boxMintrasnporte">
                        <img class="imgMintransporte" src="{{ public_path('img/Mintransporte_Colombia.svg') }}"
                            alt="">
                        {{-- <img src="{{ asset('img/Mintransporte_Colombia.svg') }}" alt=""> --}}
                    </div>
                    <div class="boxISO">
                        <img class="imgIso" src="{{ public_path('img/Certificacion-ISO-9001-2015.jpg') }}"
                            alt="">
                        {{-- <img src="{{ asset('img/Certificacion-ISO-9001-2015.jpg') }}" alt=""> --}}
                    </div>
                    <div class="boxLogo">
                        <img class="imgLogo" src="{{ public_path('img/logo.png') }}" alt="">
                        {{-- <img src="{{ asset('img/logo.png') }}" alt=""> --}}
                    </div>
                </div>
                <div class="contenedorTitulo">
                    <p>FORMATO ÚNICO DE EXTRACTO DEL CONTRATO DEL SERVICIO PÚBLICO DE</p>
                    <p style="margin-top:-2.5%">TRANSPORTE TERRESTRE AUTOMOTOR ESPECIAL
                        <br> No. <span>{{ $permit->permit_code }}</span>
                    </p>
                </div>
                <div class="contenedorDescrpcion">
                    <div class="Descr1">
                        <strong> RAZÓN SOCIAL DE LA EMPRESA DE TRANSPORTE ESPECIAL: </strong> SERVICIO DE TRANSPORTE
                        ESPECIAL DE
                        <br>PASAJEROS STEP S.A.S
                    </div>
                    <div class="Descr2">
                        <strong> NIT: </strong> 900973862-1
                    </div>
                    <div class="Descr3">
                        <strong> CONTRATO No: </strong> {{ $contract_number }}
                    </div>
                    <div class="Descr4">
                        <strong> CONTRATANTE: </strong>{{ $contractdata->contracting_name }}
                    </div>
                    <div class="Descr5">
                        <strong> NIT/CC: </strong>{{ $contractdata->contract_document }}
                    </div>
                    <div class="Descr6">
                        <strong> OBJETO CONTRATO: </strong>
                        @if ($tipeContracts == 1)
                            Colegios
                        @else
                            @if ($tipeContracts == 2)
                                Empresas
                            @else
                                @if ($tipeContracts == 3)
                                    Empresas Turismo
                                @else
                                    @if ($tipeContracts == 4)
                                        CONTRATO PARA UN GRUPO ESPECÍFICO DE USUARIOS (TRANSPORTE DE
                                        PARTICULARES)
                                    @else
                                        @if ($tipeContracts == 5)
                                            Usuarios de Servicios de Salud
                                        @endif
                                    @endif
                                @endif
                            @endif
                        @endif
                    </div>
                    <div class="Descr7">
                        {{-- <strong> ORIGEN-DESTINO: </strong> {{ $contractdata->place_of_origin }} --}}
                        <strong> ORIGEN-DESTINO: </strong>
                    </div>
                    <div class="Descr8">
                        <strong> CONVENIO DE COLABORACIÓN: </strong>
                    </div>
                </div>

                <div class="boxTituloVigencia">
                    <strong> VIGENCIA DEL CONTRATO </strong>
                </div>

                <div class="boxFechainicio">
                    <div class="boxFinicial">
                        <strong> FECHA INICIAL </strong>
                    </div>
                    <div class="boxFDia">
                        <strong> DíA: </strong>{{ $permitStartday }}
                    </div>
                    <div class="boxFMes">
                        <strong> MES: </strong>{{ $permitStartmonth }}
                    </div>
                    <div class="boxFAzo">
                        <strong> AÑO: </strong>{{ $permitStartyear }}
                    </div>
                </div>

                <div class="boxFechafin">
                    <div class="boxFfin">
                        <strong> FECHA VENCIMIENTO </strong>
                    </div>
                    <div class="boxFfDia">
                        <strong> DíA: </strong>{{ $permitEndday }}
                    </div>
                    <div class="boxFfMes">
                        <strong> MES: </strong>{{ $permitEndmonth }}
                    </div>
                    <div class="boxFfAzo">
                        <strong> AÑO: </strong>{{ $permitEndyear }}
                    </div>
                </div>

                <div class="boxTituloCaracteristica">
                    <strong> CARACTERISTÍCAS DEL VEHÍCULO </strong>
                </div>

                <div class="boxVehiculo">
                    <div class="boxPlaca">
                        <strong> PLACA </strong>
                    </div>
                    <div class="boxModelo">
                        <strong> MODELO </strong>
                    </div>
                    <div class="boxMarca">
                        <strong> MARCA </strong>
                    </div>
                    <div class="boxClase">
                        <strong> CLASE </strong>
                    </div>
                </div>
                @foreach ($vehicledatas as $vehicledata)
                    <div class="boxAnswerVehiculo">
                        <div class="answerPlaca">
                            {{ $vehicledata->plate_vehicle }}
                        </div>
                        <div class="answerModelo">
                            {{ $vehicledata->model_vehicle }}
                        </div>
                        <div class="answerMarca">
                            {{ $vehicledata->brand_vehicle }}
                        </div>
                        <div class="answerClase">
                            {{ $vehicledata->vehicle_type_name }}
                        </div>
                    </div>

                    <div class="boxTitulosDrive">
                        <div class="boxNInterno">
                            <strong> NÚMERO INTERNO: </strong> {{ $vehicledata->side_vehicle }}
                        </div>
                        <div class="boxNTOperacion">
                            <strong> NÚMERO TARJETA DE OPERACION: </strong> {{ $vehicledata->card_operation }}
                        </div>
                    </div>
                @endforeach
                @foreach ($driverdatas as $driverdata)
                    <div class="boxDatosDrive{{ $contador }}">
                        <div class="boxConductor">
                            <strong> DATOS DEL <br>
                                CONDUCTOR {{ $contador = $contador + 1 }} </strong>
                        </div>
                        <div class="boxNombreC">
                            <strong> NOMBRES Y APELLIDOS </strong> <br>
                            {{ $driverdata->operator }}
                        </div>
                        <div class="boxCedulaC">
                            <strong> No. CEDULA </strong> <br>
                            {{ $driverdata->identificationcard }}
                        </div>
                        <div class="boxLicenciaC">
                            <strong> No. LICENCIA DE CONDUCCION </strong><br>
                            {{ $driverdata->license_number }}
                        </div>
                        <div class="boxVigenciaC">
                            <strong> VIGENCIA </strong> <br>
                            {{ $driverdata->license_expiration }}
                        </div>
                    </div>
                @endforeach

                <div class="boxResContratante{{ $contador }}">
                    <div class="boxResponsable">
                        <strong> RESPONSABLE DEL CONTRATANTE </strong>
                    </div>
                    <div class="boxNombreR">
                        <strong> NOMBRES Y APELLIDOS </strong> <br>
                        {{ $contractdata->contracting_name }}
                    </div>
                    <div class="boxCedulaR">
                        <strong> No. CEDULA </strong> <br>
                        {{ $contractdata->contract_document }}
                    </div>
                    <div class="boxTelefonoR">
                        <strong> TELEFONO </strong> <br>
                        {{ $contractdata->contracting_phone }}
                    </div>
                    <div class="boxDireccionR">
                        <strong> DIRECCION </strong> <br>
                        {{ $contractdata->contracting_direction }}
                    </div>
                </div>

                <div class="boxDatosEmpresa{{ $contador }}">
                    <div class="boxInfo">
                        <strong> TRANSPORTE ESPECIAL DE PASAJEROS STEP S.A.S <br>
                            Cra 2A #8-26 EDS Biomax La Badea <br>
                            Correo Electrónico: sertepsa2016@gmail.com <br>
                            Teléfono: 323 4197103 </strong>
                    </div>
                    <div class="boxFirma">
                        <img class="firm" src="{{ public_path('img/Signature.png') }}" alt="">
                    </div>
                </div> 

                {{-- comentar --}}

            </div>
        @endforeach

    </body>
@endforeach



</html>
