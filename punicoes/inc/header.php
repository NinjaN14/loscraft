<?php

class Header {

/**
 * @param $page Page
 */
function __construct($page) {
    $this->page = $page;
    if ($page->settings->header_show_totals) {
        $t = $page->settings->table;
        $t_bans = $t['bans'];
        $t_mutes = $t['mutes'];
        $t_warnings = $t['warnings'];
        $t_kicks = $t['kicks'];
        try {
            $st = $page->conn->query("SELECT
            (SELECT COUNT(*) FROM $t_bans),
            (SELECT COUNT(*) FROM $t_mutes),
            (SELECT COUNT(*) FROM $t_warnings),
            (SELECT COUNT(*) FROM $t_kicks)");
            ($row = $st->fetch(PDO::FETCH_NUM)) or die('Failed to fetch row counts.');
            $st->closeCursor();
            $this->count = array(
                'bans.php'     => $row[0],
                'mutes.php'    => $row[1],
                'warnings.php' => $row[2],
                'kicks.php'    => $row[3],
            );
        } catch (PDOException $ex) {
            Settings::handle_error($page->settings, $ex);
        }
    }
}

function navbar($links) {
    echo '<ul class="navbar-nav mr-auto">';
    foreach ($links as $page => $title) {
        $li = "li";
        $class = "nav-item";
        if ((substr($_SERVER['SCRIPT_NAME'], -strlen($page))) === $page) {
            $class .= " active navbar-active";
        }
        $li .= " class=\"$class\"";

        if ($this->page->settings->header_show_totals && isset($this->count[$page])) {
            $title .= ' <span class="' . $this->page->settings->badge_classes . '">';
            $title .= $this->count[$page];
            $title .= "</span>";
        }
        echo "<$li><a class=\"nav-link\" href=\"$page\">$title</a></li>";
    }
    echo '</ul>';
}

function print_header() {
$settings = $this->page->settings;
?>

<?php
  include('./config/navigation.php');
  include('./config/config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Fundador">
    <link href="<?php echo $this->page->autoversion('imagini/favicon.png'); ?>" rel="shortcut icon">
    <!-- CSS -->
    <link href="<?php echo $this->page->autoversion('inc/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo $this->page->autoversion('inc/css/glyphicons.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo $this->page->autoversion('./css/style.min.css'); ?>" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>

    <script type="text/javascript">
        function withjQuery(f) {
            if (window.jQuery) f();
            else window.setTimeout(function () {
                withjQuery(f);
            }, 100);
        }
    </script>
    <script type="text/javascript">
    function arataJucatori() {
      const player = "<?php echo $ip_server;?>";
      const port = "<?php echo $port_server;?>";
      $.getJSON('https://api.minetools.eu/ping/' + player + "/" + port, function(status) {
          var jucatoriOnline = status.players.online;
          $(".player-count").html(((jucatoriOnline = jucatoriOnline.toString().split("."))[0] = jucatoriOnline[0].replace(/\B(?=(\d{3})+(?!\d))/g, ","), jucatoriOnline.join(".")));
      });
    }

      arataJucatori();
      test = setInterval(arataJucatori, 1000);

      const discord_widget_id = "<?php echo $discord_widget_id;?>";
      $.get('https://discordapp.com/api/guilds/'+ discord_widget_id +'/embed.json', function(d){
      	let members = d['members'];
      	let online_count = members.length;
      	$('#discord-count').html(online_count);
      });

    document.documentElement.style.setProperty('--main-color', '<?php echo $main_color; ?>');
    </script>
</head>
<body>
<div class="" id="shadow-open">
  <div class="mobile-navigation" id="mobile-nav">
    <button type="button" name="button" id="close-nav"><i class="fas fa-arrow-left"></i></button>
    <div class="header-mobile-navigation">
      <img src="imagini/server-logo.png" class="logo-counter" style="width: 200px;">
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
        <div class="container-catalin">
        <ul class="catalin-nav-social" id="catalin-navi-social">
          <?php redirectionari_media(); ?>
        </ul>
        <ul class="catalin-nav-links">
          <li id="button-open"><button type="button" id="open-nav" name="button"><i class="fas fa-bars"></i></button></li>
          <div id="testare-hide"><?php redirectionari_navigatie(); ?></div>
        </ul>
      </nav>
      <div class="catalin-header-content">
            <div class="container-catalin">
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
                  <img src="imagini/server-logo.png" height="<?php echo $server_logo_height; ?>" width="<?php echo $server_logo_width; ?>" class="logo-counter">
                </div>
              <div class="cutie-3" id="cutie-3">
                <a href="#" style="text-decoration: none;" id="copiazaIP">
                  <ul class="directie-elemente">
                    <li class="principalul-element"><i class="fas fa-play-circle server-spatiu"></i></li>
                  </ul>
                  <ul class="directia-elementelor-secundare" style="margin-right: 0px;">
                    <li class="element-secundar"><h3 class="play-button-design"><span class="player-count"><div class="invarte"></div></span> jogadores online</h3></li>
                    <li class="element-secundar"><p class="play-button-design-gray">Comece sua aventura agora!</p></li>
                  </ul>
                </a>
              </div>
            </div>
          </div>
  </div>
</div>
<input type="text" id="ipServer" value="<?php echo $ip_server; ?>"/>
<?php
}
}
?>
