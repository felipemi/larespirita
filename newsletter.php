<?php

require_once("header.php");

function anti_injection($sql) {
    // remove palavras que contenham sintaxe sql
    $sql = preg_replace(sql_regcase("/(from|select|insert|delete|where|drop table|show tables|#|\*|--|\\\\)/"), "", $sql);
    $sql = trim($sql); //limpa espaços vazio
    $sql = strip_tags($sql); //tira tags html e php
    $sql = addslashes($sql); //Adiciona barras invertidas a uma string
    return $sql;
}
if ($_GET) {
    $nome = strip_tags(trim($_GET['nome']));
    $email = strip_tags(trim($_GET['email']));
    $assunto = "Cadastro do Newsletter no Lar Espírita";

    if (empty($nome)) {
        echo "<script>alert('O campo Nome não pode estar vazio');</script>";
        echo "<script>history.back();</script>";
        exit();
    } else
    if (empty($email)) {
        echo "<script>alert('O campo E-mail não pode estar vazio');</script>";
        echo "<script>history.back();</script>";
        exit();
    } else {
        $mensagemHTML = "USUARIO " . $nome . " se cadastrou na Newsletter do Lar Espírita, o seu email para contato é: " . $email. "";
        $headers = "MIME-Version: 1.1" . $quebra_linha;
        $headers .= "Content-type: text/html; charset=iso-8859-1" . $quebra_linha;
        $headers .= "From: larespirita@hotmail.com" . $email . $quebra_linha;
        $headers .= "Reply-To: " . $emailremetente . $quebra_linha;
        if (!mail($email, $assunto, $mensagemHTML, $headers, "-r" . $email)) { // Se for Postfix
            $headers .= "Return-Path: larespirita@hotmail.com " . $emailsender . $quebra_linha; // Se "não for Postfix"
            mail($email, $assunto, $mensagemHTML, $headers);
        }
        print "<p class='bg-success dangerous'>Enviado com sucesso. <a href='index.php'>Clique aqui para voltar</a></p>";
    }
}
