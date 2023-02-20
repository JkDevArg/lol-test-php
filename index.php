<!DOCTYPE html>
<html lang="es">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="Obtenemos datos desde la API de Riot">
    <title>GET API RIOT # PHP TEST</title>
    <!-- Favicons-->
    <link rel="apple-touch-icon-precomposed" href="images/favicon/apple-touch-icon-152x152.png">
    <meta name="msapplication-TileColor" content="#FFFFFF">
    <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
    <link rel="icon" href="images/favicon/favicon-32x32.png" sizes="32x32">
    <!--  Android 5 Chrome Color-->
    <meta name="theme-color" content="#EE6E73">
    <!-- CSS-->
    <link href="assets/css/prism.css" rel="stylesheet">
    <link href="assets/css/ghpages-materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
    <div id="blue" class="block">
        <nav>
            <div class="nav-wrapper">
                <a href="#" class="brand-logo center"><i class="material-icons left">pets</i>ElFetu</a>
                <ul id="nav-mobile" class="left hide-on-med-and-down">
                    <li><a href="https://github.com/JkDevArg/lol-test-php" target="_blank">Github</a></li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="container">
        <div class="section">
            <div class="row">
                <form class="col s12" id="status">
                    <h5 class="blue-text text-darken-2">Server Status</h5>
                    <div class="row">
                        <div class="input-field col s6">
                            <select name="server" required>
                                <option value="" disabled selected>Elige un servidor</option>
                                <option value="BR1">BR1</option>
                                <option value="EUN1">EUN1</option>
                                <option value="EUW1">EUW1</option>
                                <option value="JP1">JP1</option>
                                <option value="KR">KR</option>
                                <option value="LA1">LA1</option>
                                <option value="LA2">LA2</option>
                                <option value="NA1">NA1</option>
                                <option value="OC1">OC1</option>
                                <option value="PH2">PH2</option>
                                <option value="RU">RU</option>
                                <option value="SG2">SG2</option>
                                <option value="TH2">TH2</option>
                                <option value="TR1">TR1</option>
                                <option value="TW2">TW2</option>
                                <option value="VN2">VN2</option>
                            </select>
                            <label>Servidor</label>
                        </div>
                        <div class="input-field col s6">
                            <select name="game" required>
                                <option value="" disabled selected>Juego</option>
                                <option value="lol">League of Legends</option>
                            </select>
                            <label>Juego</label>
                        </div>
                        <input type="hidden" id="server_status" name="server_status" value="true">
                    </div>
                    <button class="btn waves-effect waves-light" type="submit">Submit
                        <i class="material-icons right">send</i>
                    </button>
                </form>
            </div>
        </div>
    </div>
    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script>
        if (!window.jQuery) {
            document.write('<script src="assets/js/jquery-3.2.1.min.js"><\/script>');
        }
    </script>
    <script src="assets/js/jquery.timeago.min.js"></script>
    <script src="assets/js/script.js"></script>
    <script src="assets/js/prism.js"></script>
    <script src="assets/js/lunr.min.js"></script>
    <script src="assets/js/search.js"></script>
    <script src="assets/js/materialize.js"></script>
    <script src="assets/js/init.js"></script>
</body>

</html>