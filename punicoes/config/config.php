<?php

  // THAT'S THE CURRENT CONFIGURATION
  // V0.1
  // MADE BY CATALIN

  $servername = "localhost";
  $username = "loscraft";
  $password = "SenhaMuitoLocaRs312";
  $database = "minecraft";

  $main_color = "#25a2a2";
 // $main_color = "#fcb900";
  $title_of_page = "LoSCraft"; // Change title of the page
  $description_of_page = "Servidor Survival 1.14.4"; // Change the description of your website
  $ip_server = "jogar.loscraft.com.br"; // Change the ip
  $port_server = "25565"; // Change the port
  $discord_widget_id = "477288944162177034"; // Change discord widget id to get your online members
  $server_copyright = "LoSCraft";
  $discord_invite_link = "https://discord.gg/Kmy8UdR";
  $server_logo_width = "400px";
  $server_logo_height = "auto";

  $conn = new mysqli($servername, $username, $password, $database);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $bans = mysqli_query($conn, "SELECT * FROM litebans_bans ORDER BY id DESC LIMIT 1");
  $mutes = mysqli_query($conn, "SELECT * FROM litebans_mutes ORDER BY id DESC LIMIT 1");
  $kicks = mysqli_query($conn, "SELECT * FROM litebans_kicks ORDER BY id DESC LIMIT 1");
  $warnings = mysqli_query($conn, "SELECT * FROM litebans_warnings ORDER BY id DESC LIMIT 1");

  $data_bans = mysqli_fetch_row($bans);
  $data_mutes = mysqli_fetch_row($mutes);
  $data_kicks = mysqli_fetch_row($kicks);
  $data_warnings = mysqli_fetch_row($warnings);

?>
