<?php 
Class Config{
	//istruçoes basicas do saite
	const SITE_URL = "http://localhost";
	const SITE_PASTA = "saite";
	const SITE_NOME = "Saite de Noticia";
	const SITE_EMAIL_ADM = "cesar252742@gmail.com";
	const BD_LIMIT_POR_PAG = 6;

	//INFORMAÇOES DO BANCO DE DADOS
	const BD_HOST = "localhost",
	      BD_USER = "root",
	      BD_SENHA = "",
	      BD_BANCO = "saite_noticia",
	      BD_PREFIX = "sn_";
	//informaçoes para PHPMailler
	const EMAIL_HOST = "smtp.gmail.com",
		  EMAIL_USER = "cesar252742@gmail.com",
		  EMAIL_NOME = "SAITE MODELO",
		  EMAIL_SENHA = "Samanta25",
		  EMAIL_PORTA = 587,
		  EMAIL_SMTPAUTH = true,
		  EMAIL_SMTPSECURE = "tls";
}

 ?>