
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BDJ.net</title>
    <link rel="icon" href="server-icon.ico" />
    <link rel="stylesheet" type="text/css" href="style.css" />
  </head>
  <body>
    <?php 
      include('ServerPing.php');
      $Status = GetServerStatus();
    ?>

    <header>
      <h1>Bureau des Jeux</h1>
      <h2>Voici une liste des serveurs actuellement en ligne :</h2>  
    </header>
    <article>
      <section id="Server-Section">
        <div>
          <ul class="Server-List"> 
            <div class="Hlist">
              <ul>
                <li><h3>Minecraft FeedTheBeast</h3></li>
                <p><b>IP: </b>bdjserveur.ddns.net:25566<br>
                <b>ModPack: </b><a href="https://curseforge.overwolf.com/">Ragnamod V 5.8.0</a><br>
                <b>Ajout conseillé: </b> <a href="https://optifine.net/downloads">Optifine (1.12.2)</a><br>
                <b>Pour en parler: </b><a href="https://discord.gg/cA7bwWc">#feed-the-bdj</a><br>
                <b>Status :</b> <?php echo $Status[0]; ?></p>
              </ul>
            </div>

            <div class="Hlist">
              <ul>
                <li><h3>Minecraft Vanilla</h3></li>
                <p><b>IP: </b>bdjserveur.ddns.net:666<br>
                <b>Map Dynamique: </b><a href="http://vincentgaia.ddns.net:8123/">http://vincentgaia.ddns.net:8123/</a><br>
                <b>Version: </b>1.16.4<br>
                <b>Pour en parler: </b><a href="https://discord.gg/cA7bwWc">#minecraft</a><br>
                <b>Status :</b> <?php echo $Status[1]; ?></p>
              </ul>
            </div>

            <div class="Hlist">
              <ul>
                <li><h3>Quake 3 Arena</h3></li>
                <p><b>IP: </b>bdjserveur.ddns.net<br>
                <b>Client conseillé: </b><a href="https://ioquake3.org/">ioquake3</a><br>
                <b>Pour en parler: </b><a href="https://discord.gg/cA7bwWc">#jeux</a><br>
                <b>Status :</b> <?php echo $Status[2]; ?><br>
                Version GOG trouvable dans le <a href="https://mega.nz/#F!jBdjlaDS!6vbpzwU1m7to6VTzsFnp2g">MEGA</a> du BDJ</p>
              </ul>
            </div>
          </ul>
        </div>
        <div>
          <ul class="Server-List">
            <div class="Hlist">
              <ul>
                <li><h3>Terraria</h3></li>
                <p><b>IP: </b>bdjserveur.ddns.net<br>
                <b>Pour en parler: </b><a href="https://discord.gg/cA7bwWc">#terraria</a><br>
                <b>Status :</b> <?php echo $Status[3]; ?><br>
                Version GOG trouvable dans le <a href="https://mega.nz/#F!jBdjlaDS!6vbpzwU1m7to6VTzsFnp2g">MEGA</a> du BDJ</p>
              </ul>
            </div>

            <div class="Hlist">
              <ul>
                <li><h3>Factorio</h3></li>
                <p><b>IP: </b>vincentgaia.ddns.net:34197<br>
                <b>Pour en parler: </b><a href="https://discord.gg/cA7bwWc">#factorio</a><br>
                <b>Status :</b> <?php echo $Status[4]; ?></p>
              </ul>
            </div>
          </ul>
        </div>
      </section>
      <div id="Container">
        <img draggable="false" ondragstart="return false;" src="assets/augustus_gold.png" id="Logo">
      </div>
    </article>
    <aside>
      <widgetbot id="DiscordWiget" server="241953867565236255" channel="558320030358437908"></widgetbot>
      <script src="https://cdn.jsdelivr.net/npm/@widgetbot/html-embed"></script>
    </aside>

    <footer>
      <hr>
      <div id="SocialBar">
        <a href="https://discord.gg/cA7bwWc" target="_blank" class="SocialItem">Discord</a>
        <a href="http://facebook.com/bdj.esiea" target="_blank" class="SocialItem">Facebook</a>
        <a href="https://www.twitch.tv/bdj_esiea" target="_blank" class="SocialItem">Twitch</a>
        <a href="https://www.youtube.com/channel/UCCYAfBeQGJ_YhHdRayKwTig/" target="_blank" class="SocialItem">Youtube</a>
        <a href="https://www.instagram.com/bdj.esiea/" target="_blank" class="SocialItem">Instagram</a>
        <a href="https://twitter.com/bdj_esiea" target="_blank" class="SocialItem">Twitter</a>
      </div>
    </footer>

    <p id=DebugString><b>Website under construction</b></p>
  </body>
</html>

