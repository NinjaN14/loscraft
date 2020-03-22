<?php

#####################################
# SUPPORT!
# Contant me on discord!
#####################################

function returnServersList() {

  createStaff(
    '<p style="color: #f53d3d; font-weight: bold;">[Dono]</p>', // SERVER LOGO
    "", // SERVER NAME
    '<div class="Fundador imagem"><div class="texto"><br/><h3 class="dono">[Dono]</h3><p>Fundador</p></div></div>
     <div class="Jcwowzk imagem"><div class="texto"><br/><h3 class="dono">[Dono]</h3><p>Jcwowzk</p></div></div>
     <div class="Mizukaku imagem"><div class="texto"><br/><h3 class="dono">[Dono]</h3><p>Mizukaku</p></div></div>
     <div class="PedroAmatte imagem"><div class="texto"><br/><h3 class="dono">[Dono]</h3><p>PedroAmatte</p></div></div>
     <div class="Saybin imagem"><div class="texto"><br/><h3 class="dono">[Dono]</h3><p>Saybin</p></div></div>
    ', // SERVER DESCRIPTION
    "" // SERVER ID TO GET PLAYERS
  );
  createStaff(
    '<p style="color: darkred; font-weight: bold;">[Admin]</p>', // SERVER LOGO
    "", // SERVER NAME
    '<div class="optb imagem"><div class="texto"><br/><h3 class="adm">[Admin]</h3><p>optb</p></div></div>', // SERVER DESCRIPTION
    "server-2" // SERVER ID TO GET PLAYERS
  );
  createStaff(
    '<p style="color: #1f9aa3; font-weight: bold;">[Moderador]</p>', // SERVER LOGO
    "", // SERVER NAME
    '<div class="nada imagem"><div class="texto"><br/><h3 class="mod">[Moderador]</h3><p>Vazio</p></div></div>', // SERVER DESCRIPTION
    "server-3" // SERVER ID TO GET PLAYERS
  );
  createStaff(
    '<p style="color: #0e9c34; font-weight: bold;">[Helper]</p>', // SERVER LOGO
    "", // SERVER NAME
    '<div class="Renan imagem"><div class="texto"><br/><h3 class="helper">[Helper+]</h3><p>zRenan_</p></div></div>
     <div class="Ratty imagem"><div class="texto"><br/><h3 class="helper">[Helper]</h3><p>Ratty</p></div></div>
     <div class="ZeroXP imagem"><div class="texto"><br/><h3 class="helper">[Helper]</h3><p>Zer0XP</p></div></div>', // SERVER DESCRIPTION
    "server-4" // SERVER ID TO GET PLAYERS
  );
  createStaff(
    '<p style="color: #f09424; font-weight: bold;">[Builder]</p>', // SERVER LOGO
    "", // SERVER NAME
    '<div class="Amendoa imagem"><div class="texto"><br/><h3 class="builder">[Builder]</h3><p>Amendoa</p></div></div>', // SERVER DESCRIPTION
    "server-4" // SERVER ID TO GET PLAYERS
  );
  createStaff(
    '<p style="color: #d1cdc9; font-weight: bold;">Inativos</p>', // SERVER LOGO
    "", // SERVER NAME
    '
    <div class="Clemente imagem"><div class="texto"><br/><h3 class="helper">[Helper]</h3><p>Clemente</p></div></div>
    <div class="DerekDio imagem"><div class="texto"><br/><h3 class="helperplus">[Helper+]</h3><p>DerekDio</p></div></div>
    <div class="DonutsBear imagem"><div class="texto"><br/><h3 class="helper">[Helper]</h3><p>DonutsBear</p></div></div>
    <div class="Gustavo_Lima imagem"><div class="texto"><br/><h3 class="mod">Moderador Discord</h3><p>Gustavo_Lima</p></div></div>
    <div class="Guterres imagem"><div class="texto"><br/><h3 class="helper">[Helper]</h3><p>Guterres</p></div></div>
    <div class="nailtu imagem"><div class="texto"><br/><h3 class="helper">[Helper]</h3><p>nailtu</p></div></div>
    <div class="ParaibaDoNorte imagem"><div class="texto"><br/><h3 class="helperplus">[Helper+]</h3><p>ParaibaDo Norte</p></div></div>
    <div class="R1naldi imagem"><div class="texto"><br/><h3 class="helperplus">[Helper+]</h3><p>R1naldi</p></div></div>
    ', // SERVER DESCRIPTION
    "server-4" // SERVER ID TO GET PLAYERS
  );

}

function returnServerQuery() {
  createServerQuery("Test", "port1", "eu.hypixel.net", "", "#server-1");
  createServerQuery("Test2", "port2", "eu.hypixel.net", "", "#server-2");
  createServerQuery("Test3", "port3", "eu.hypixel.net", "", "#server-3");
  createServerQuery("Test4", "port4", "eu.hypixel.net", "", "#server-4");
}

?>
