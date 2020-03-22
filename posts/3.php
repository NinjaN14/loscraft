<!-- MADE BY CATALIN -->
<!-- DISCORD: TripleZone#8501 -->

<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php
include '../config/config.php';
include('../script/AI.php');
include('../config/navigation.php');
include('../config/server-list-config.php');
?>
  <head>
    <title><?php echo $title_of_page; ?></title>
    <meta name="description" content="<?php echo $description_of_page; ?>">
    <link rel="stylesheet" href="../assets/style.min.css">
    <link rel="shortcut icon" href="../imagini/favicon.png" type="image/vnd.microsoft.icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <meta charset="utf-8">
    <style>
      .tabela {
        font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 30%;
        margin-top: 50px;
        margin-bottom: 50px;
      }

      .tabela td, .tabela thead {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: center;
      }

      .tabela tr:nth-child(even){background-color: darkgray; color: black;}

      .tabela tr:hover {background-color: #ddd;}

      .tabela thead {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #0099cc;
        color: white;
        font-weight: bold;
      }
    </style>
  </head>
  <body>
</div>
<!-- LOADER ANIMATION -->
<div class="" id="shadow-open">
  <div class="mobile-navigation" id="mobile-nav">
    <button type="button" name="button" id="close-nav"><i class="fas fa-arrow-left"></i></button>
    <div class="header-mobile-navigation">
      <img src="../imagini/server-logo.png" class="logo-counter" style="width: 200px;">
    </div>
    <div class="body-mobile-navigation">
      <div class="navigatie-mobil">
        <p>Navigation</p>
      </div>
      <ul>
        <?php redirectionari_navigatie(); ?>
      </ul>
    </div>
  </div>
</div>
<div class="loadingcontainer hidden"><div class="roata"></div></div></div>
<div class="catalin-header">
    <nav class="catalin-navigatie">
        <div class="container">
        <ul class="catalin-nav-social" id="catalin-navi-social">
          <?php redirectionari_media(); ?>
        </ul>
        <ul class="catalin-nav-links">
          <li id="button-open"><button type="button" id="open-nav" name="button"><i class="fas fa-bars"></i></button></li>
          <div id="testare-hide"><?php redirectionari_navigatie(); ?></div>
        </ul>
      </nav>
      <div class="catalin-header-content">
        <div class="container">
        <div class="coloana-3" id="coloana-3">
          <div class="cutie-1" id="cutie-1">
            <ul>
              <a href="<?php echo $discord_invite_link; ?>" target="_blank" style="text-decoration: none;">
              <ul class="directia-elementelor-secundare">
                <li class="element-secundar"><h3>Discord Server</h3></li>
                <li class="element-secundar"><p><span id="discord-count">?</span> online agora</p></li>
              </ul>
              <ul class="directie-elemente">
                <li class="principalul-element"><i class="fab fa-discord discord-spatiu"></i></li>
              </ul>
              </a>
              </ul>
          </div>
            <div class="cutie-2" id="cutie-2">
              <img src="../imagini/server-logo.png" height="<?php echo $server_logo_height; ?>" width="<?php echo $server_logo_width; ?>" class="logo-counter">
            </div>
          <div class="cutie-3" id="cutie-3">
            <a href="#" style="text-decoration: none;" id="copiazaIP">
              <ul class="directie-elemente">
                <li class="principalul-element"><i class="fas fa-play-circle server-spatiu"></i></li>
              </ul>
              <ul class="directia-elementelor-secundare" style="margin-right: 0px;">
                <li class="element-secundar"><h3 class="play-button-design"><span class="player-count">?</span> jogadores online</h3></li>
                <li class="element-secundar"><p class="play-button-design-gray">Comece sua aventura agora!</p></li>
              </ul>
            </a>
          </div>
        </div>
      </div>
  </div>
</div>
  <div class="container">
      <div class="server-list-container">
        <div class="server-list-header">
          <p>Token de Mineração modificado e Novas Recompensas ao Votar</p>
        </div>
        <div class="server-list-corp">
          <div class="server-list-dreapta">
            <div class="server-list-dreapta-block">
            <p>
              Sugerido por alguns jogadores, agora os tokens de mineração tiveram sua chance de drop modificada. 
              Segue a baixo como funcionará agora:
              <center><table class="tabela">
                <thead>
                    <td>Nível</td>
                    <td>Chance de Dropar</td>
                </thead>
                <tr>
                    <td>0-99</td>
                    <td>0%</td>
                </tr>
                <tr>
                    <td>100-249</td>
                    <td>0.1%</td>
                </tr>
                <tr>
                    <td>250-499</td>
                    <td>0.2%</td>
                </tr>
                <tr>
                    <td>500-749</td>
                    <td>0.3%</td>
                </tr>
                <tr>
                    <td>750-1000</td>
                    <td>0.4%</td>
                </tr>
                <tr>
                    <td>1000</td>
                    <td>0.5%</td>
                </tr>
            </table></center>
          </p>
          <p> 
              Com o intuito de incentivar mais ainda os jogadores a votarem no servidor, 
              lançamos algumas novidades bem legais ao votar.
              Ao alcançar algumas metas de votos você poderá receber alguns itens extras!
              <center>
                  <table class="tabela">
                      <thead>
                          <td>Votos</td>
                          <td>Recompensa</td>
                      </thead>
                      <tr>
                          <td>10</td>
                          <td>10 <span style="color:lightblue;">Diamantes</span></td>
                      </tr>
                      <tr>
                          <td>50</td>
                          <td>1 <span style="font-weight: bold; color: yellow;">Token COMUM</span></td>
                      </tr>
                      <tr>
                          <td>100</td>
                          <td>1 <span style="font-weight: bold; color: darkcyan;">Token RARO</span></td>
                      </tr>
                      <tr>
                          <td>150</td>
                          <td>1 <span style="font-weight: bold; color: darkred;">Token LENDÁRIO</span></td>
                      </tr>
                  </table>
              </center>
          </p>
            </div>
            <p class="server-description">Em breve mais novidades!</p>
          </div>
        </div>
      </div>
    </div>
    <div class="store-sale">
      <div class="container">
        <a href="http://loja.loscraft.com.br">Visite nossa loja</a>
      </div>
    </div>
    <div class="footer">
      <img src="../imagini/server-logo.png" class="gray-animatie" alt="poked-logo">
      <p>© 2019 <?php echo $server_copyright; ?>.  Todos os direitos reservados.</p>
      <p>LoSCraft não é de forma alguma afiliado a Mojang ou Microsoft.</p>
      <input type="text" id="ipServer" value="<?php echo $ip_server; ?>"/>
    </div>
    <button class="mergisus" style="display: inline-block;"><span></span></button>
  </body>
  <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="../script/index.js"></script>
  <script type="text/javascript">

  function arataJucatori() {
    const player = "<?php echo $ip_server;?>";
    const port = "<?php echo $port_server;?>";
    $.getJSON('https://api.minetools.eu/ping/' + player + "/" + port, function(status) {
        var jucatoriOnline = status.players.online;
        $(".player-count").html(((jucatoriOnline = jucatoriOnline.toString().split("."))[0] = jucatoriOnline[0].replace(/\B(?=(\d{3})+(?!\d))/g, ","), jucatoriOnline.join(".")));
    });
    <?php returnServerQuery(); ?>
  }
    arataJucatori();
    test = setInterval(arataJucatori, 1000);
    const discord_widget_id = "<?php echo $discord_widget_id;?>";
    $.get('https://discordapp.com/api/guilds/'+ discord_widget_id +'/embed.json', function(d){
    	let members = d['members'];
    	let online_count = members.length;
    	$('#discord-count').html(online_count);
    });

      $( document ).ready(function() {
    $('.agata').on('click', function() {
       $('.modal-wrapper').toggleClass('open');
      $('.page-wrapper').toggleClass('blur-it');
       return false;
    });
  });

  document.documentElement.style.setProperty('--main-color', '<?php echo $main_color; ?>');

</script>
</html>
