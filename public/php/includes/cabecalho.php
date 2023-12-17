<!-- CSS -->
<link rel="stylesheet" href="../../style/cabecalho-rodape.css">

<!-- Corpo Cabeçalho -->
<div id="cabecalho" class="container container-fluid">
            <div id="col_logo" class="row d-flex align-items-center">
                <a href="../pages/home.php"><img id="logo" class="col" src="../../imgs/logo.png" alt="logotipo"></a>
                <div id="menu">
            <div id="menu-bar" onclick="menuOnClick()">
                <div id="bar1" class="bar"></div>
                <div id="bar2" class="bar"></div>
                <div id="bar3" class="bar"></div>
            </div>
        <nav class="nav" id="nav">
            <ul>
                <li><a class="item_menu_shot" href="../pages/home.php"><span class="txt_menu">Home</span><img class="icons_menu_shot" src="../../imgs/home_icon.png"></a></li>
                <li><a class="item_menu_shot" href="../pages/ias.php"><span class="txt_menu">Converse com nossas I.As</span><img class="icons_menu_shot" src="../../imgs/ia_icon.png"></a></li>
                <li><a class="item_menu_shot" href="../pages/art-mat.php"><span class="txt_menu">Artigos Matemáticos</span><img class="icons_menu_shot" src="../../imgs/artmat_icon.png"></a></li>
                <!--<li><label class="switch">
                    <input type="checkbox" onclick="alternarTema()" class="themeCheckbox">
                    <span class="slider"></span>
                    </label>-->
                </li>
                <li class="d-flex justify-content-end">
                    <button class="btnThemeDark_hMenu btnTheme d-block" onclick="alternarTema()"><img class="btnTheme_img" src="../../imgs/btn_imgDark.png" alt="icone tema" style="width: 30px; height: 30px"></button>
                    <button class="btnThemeLight_hMenu btnTheme d-none" onclick="alternarTema()"><img class="btnTheme_img" src="../../imgs/btn_imgLight.png" alt="icone tema" style="width: 30px; height: 30px"></button>
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
              <li><a class="item_menu" href="../pages/home.php"><img class="icons_menu" src="../../imgs/home_icon.png"><span class="txt_menu">Home</span></a></li>
              <li><a class="item_menu" href="../pages/ias.php"><img class="icons_menu" src="../../imgs/ia_icon.png"><span class="txt_menu">Converse com nossas I.As</span></a></li>
              <li><a class="item_menu" href="../pages/art-mat.php"><img class="icons_menu" src="../../imgs/artmat_icon.png"><span class="txt_menu">Artigos Matemáticos</span></a></li>
              
              <!--<li><label class="switch">
                    <input type="checkbox" onclick="alternarTema()" class="themeCheckbox">
                    <span class="slider"></span>
                    </label>
                </li>-->
                <li class="d-flex justify-content-end">
                    <button class="btnThemeDark_nMenu btnTheme d-block" onclick="alternarTema()"><img class="btnTheme_img" src="../../imgs/btn_imgDark.png" alt="icone tema" style="width: 30px; height: 30px"></button>
                    <button class="btnThemeLight_nMenu btnTheme d-none" onclick="alternarTema()"><img class="btnTheme_img" src="../../imgs/btn_imgLight.png" alt="icone tema" style="width: 30px; height: 30px"></button>
                </li>
          </ul>
      </nav>
 