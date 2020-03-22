<?php

#####################################
# SUPPORT!

# Contant me on discord!
# Support chat: https://discord.gg/4MPFf8x
#####################################

function redirectionari_navigatie() {

  // READ COMMENTS FOR UNDERSTANDING!

  // TARGETS FOR NAVIGATION
  // _blank	Opens the linked document in a new window or tab
  // _self	Opens the linked document in the same frame as it was clicked (this is default)
  // _parent	Opens the linked document in the parent frame
  // _top	Opens the linked document in the full body of the window

  $navigatie[0] = "Início"; # $navigatie[number] is number of navigation link
  $navigatie_links[0] = "../"; # $navigatie_links[number] is number of navigation link
  $navigatie_icon[0] = "fas fa-home"; # Find those icons on https://fontawesome.com/icons?d=gallery
  $navigatie_target[0] = "_self"; # Set the style opening of page
  $navigatie_toggle_store[0] = "false";

  $navigatie[1] = "Tutoriais"; # $navigatie[number] is number of navigation link
  $navigatie_links[1] = "/tutoriais"; # $navigatie_links[number] is number of navigation link
  $navigatie_icon[1] = "fas fa-graduation-cap"; # Find those icons on https://fontawesome.com/icons?d=gallery
  $navigatie_target[1] = "_self"; # Set the style opening of page
  $navigatie_toggle_store[1] = "false";

  $navigatie[2] = "Vote"; # $navigatie[number] is number of navigation link
  //$navigatie_links[2] = "../vote"; # $navigatie_links[number] is number of navigation link
  $navigatie_links[2] = "/vote"; # $navigatie_links[number] is number of navigation link
  $navigatie_icon[2] = "fas fa-thumbs-up"; # Find those icons on https://fontawesome.com/icons?d=gallery
  $navigatie_target[2] = "_self"; # Set the style opening of page
  $navigatie_toggle_store[2] = "false";

  $navigatie[3] = "Loja"; # $navigatie[number] is number of navigation link
  $navigatie_links[3] = "http://loja.loscraft.com.br"; # $navigatie_links[number] is number of navigation link
  $navigatie_icon[3] = "fas fa-gem steluta"; # Find those icons on https://fontawesome.com/icons?d=gallery
  $navigatie_target[3] = "_blank"; # Set the style opening of page
  $navigatie_toggle_store[3] = "true";

  $navigatie[4] = "Equipe"; # $navigatie[number] is number of navigation link
  $navigatie_links[4] = "/equipe"; # $navigatie_links[number] is number of navigation link
  $navigatie_icon[4] = "fas fa-user-friends"; # Find those icons on https://fontawesome.com/icons?d=gallery
  $navigatie_target[4] = "_self"; # Set the style opening of page
  $navigatie_toggle_store[4] = "false";

  $navigatie[5] = "Changelog"; # $navigatie[number] is number of navigation link
  $navigatie_links[5] = "/changelog"; # $navigatie_links[number] is number of navigation link
  $navigatie_icon[5] = "fas fa-book"; # Find those icons on https://fontawesome.com/icons?d=gallery
  $navigatie_target[5] = "_self"; # Set the style opening of page
  $navigatie_toggle_store[5] = "false";

  $navigatie[6] = "Punições"; # $navigatie[number] is number of navigation link
  $navigatie_links[6] = "/punicoes"; # $navigatie_links[number] is number of navigation link
  $navigatie_icon[6] = "fas fa-ban"; # Find those icons on https://fontawesome.com/icons?d=gallery
  $navigatie_target[6] = "_self"; # Set the style opening of page
  $navigatie_toggle_store[6] = "false";

  $iteme_navigatie = count($navigatie);

  for ($i = 0; $i < $iteme_navigatie; $i++) {
    if ($navigatie_toggle_store[$i] == "true") {
      $navigatie_toggle_store[$i] = "store";
    }
    echo ('<li><a href='.$navigatie_links[$i].' target="'.$navigatie_target[$i].'" class="'.$navigatie_toggle_store[$i].'"><i class="'.$navigatie_icon[$i].'"></i> '.$navigatie[$i].'</a></li>');
  }

}


function redirectionari_media() {

  // READ COMMENTS FOR UNDERSTANDING!

  $media_link[0] = "index.php"; # $media_link[number] is number of navigation link
  $media_icon[0] = "fab fa-twitter"; # Find those icons on https://fontawesome.com/icons?d=gallery

  $media_link[1] = "index.php"; # $media_link[number] is number of navigation link
  $media_icon[1] = "fab fa-youtube"; # Find those icons on https://fontawesome.com/icons?d=gallery

  $media_link[2] = "index.php"; # $media_link[number] is number of navigation link
  $media_icon[2] = "fab fa-facebook"; # Find those icons on https://fontawesome.com/icons?d=gallery

  $iteme_media = count($media_link);
/*
  for ($i = 0; $i < $iteme_media; $i++) {
    echo ('<li><a href="'.$media_link[$i].'"><i class="'.$media_icon[$i].'"></i></a></li>');
  }
*/
}

?>
