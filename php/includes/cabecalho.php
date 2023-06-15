<!-- CSS -->
<link rel="stylesheet" href="../../style/cabecalho-rodape.css">

<!-- Corpo Cabeçalho -->
<div id="cabecalho" class="container container-fluid">
            <div id="col_logo" class="row d-flex align-items-center">
                <a href="../pages/index.php"><img id="logo" class="col" src="../../imgs/logo.png" alt="logotipo"></a>
                <div id="menu">
            <div id="menu-bar" onclick="menuOnClick()">
                <div id="bar1" class="bar"></div>
                <div id="bar2" class="bar"></div>
                <div id="bar3" class="bar"></div>
            </div>
        <nav class="nav" id="nav">
            <ul>
                <li><a class="item_menu_shot" href="../pages/index.php"><span class="txt_menu">Home</span><img class="icons_menu_shot" src="../../imgs/home_icon.png"></a></li>
                <li><a class="item_menu_shot" href="../pages/bot.php"><span class="txt_menu">Converse com nossa I.A</span><img class="icons_menu_shot" src="../../imgs/ia_icon.png"></a></li>
                <li><a class="item_menu_shot" href="../pages/art-mat.php"><span class="txt_menu">Artigos Matemáticos</span><img class="icons_menu_shot" src="../../imgs/artmat_icon.png"></a></li>
                <li><label class="switch">
                    <input type="checkbox" onclick="alternarTema()" id="themeCheckbox">
                    <span class="slider"></span>
                    </label>
                </li>
            </ul>
        </nav> 
        </div>
        <div class="menu-bg" id="menu-bg"></div>
      </div>
            </div>
        </div>
        <nav class="nav02">
          <ul>
              <li><a class="item_menu" href="../pages/index.php"><img class="icons_menu" src="../../imgs/home_icon.png"><span class="txt_menu">Home</span></a></li>
              <li><a class="item_menu" href="../pages/bot.php"><img class="icons_menu" src="../../imgs/ia_icon.png"><span class="txt_menu">Converse com nossa I.A</span></a></li>
              <li><a class="item_menu" href="../pages/art-mat.php"><img class="icons_menu" src="../../imgs/artmat_icon.png"><span class="txt_menu">Artigos Matemáticos</span></a></li>
              <li><label class="switch">
                    <input type="checkbox" onclick="alternarTema()" id="themeCheckbox">
                    <span class="slider"></span>
                    </label>
                </li>
          </ul>
      </nav>
 