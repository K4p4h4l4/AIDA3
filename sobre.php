<!DOCTYPE html>
<html lang="pt-pt">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AIDA - Loja Online de Tecnologia</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Nunito|PT+Serif|Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="./img/logo/logo.JPG">
</head>

<body>

    <!-- *******************\
             Topo
    \*******************/-->
    <div class="info__header">
        <div class="info__header-contacts">
            <div class="header__contact">
                <i class="material-icons">phone</i>
                <span>+244-923-695-077</span>
            </div>
            <div class="header__contact">
                <i class="material-icons">email</i>
                <span>geral@aida.ao</span>
            </div>
            <div class="header__contact">
                <i class="material-icons">room</i>
                <span>Zango 0, Vila Chinesa</span>
            </div>
        </div>
        <div class="info__header-account">
            <div class="header__contact">
                <i class="material-icons">account_circle</i>
                <span>Registar</span>
            </div>
        </div>
    </div>

    <!-- *****************************\
             Meus interesses
    \******************************/-->
    <div class="my__interests">
        <a href="index.php" class="my__logo">
            <img src="./img/logo/aid_logo.png" alt="AIDA">
        </a>

        <div class="my__insterests-search">
            <div class="my__search-details">
                <select name="categorias" id="categorias" class="categories">
                    <option value="0">Todas categorias</option>
                    <option value="1">Informática</option>
                    <option value="2">Tv box</option>
                    <option value="3">Smartphones e Tablets</option>
                    <option value="4">Consumíveis e Papel</option>
                </select>
                <input type="text" class="search__text" placeholder="Procurar aqui">
                <button class="search-btn">Procurar</button>
            </div>
        </div>

        <div class="my__interests-wishes">
            <div class="interests__wishes">
                <div class="wishes__content">
                    <div class="wishes__number">
                        <span>1</span>
                    </div>
                    <a href="" class="wishes__content-btn">
                        <i class="material-icons">favorite</i>
                        <span>Desejos</span>
                    </a>
                </div>

                <div class="wishes__content">
                    <div class="wishes__number">
                        <span>3</span>
                    </div>
                    <a href="" class="wishes__content-btn">
                        <i class="material-icons">shopping_cart</i>
                        <span>Carrinho</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    <!-- *****************************\
             Menu
    \******************************/-->
    <div class="menu">
        <div class="menu__container">
            <ul class="nav__bar">
                <li class="menu__btn-container"><a href="index.php" class="menu__btn">Home</a></li>
                <li class="menu__btn-container"><a href="promocao.php" class="menu__btn">Em promoção</a></li>
                <li class="menu__btn-container"><a href="#" class="menu__btn active">Sobre Nós</a></li>
                <li class="menu__btn-container"><a href="contactos.php" class="menu__btn">Contacte-nos</a></li>
            </ul>
        </div>
    </div>
    
    
    <!-- *****************************\
             Footer
    \******************************/-->
    <footer class="footer">
        <div class="footer__container">
            <div class="footer__card">
                <div class="footer__card-title">
                    <h3 class="categories__title">Categorias</h3>
                </div>
                <div class="footer__card-content">
                    <div class="footer__options">
                        <a href="#" class="option">Informática</a>
                    </div>
                    <div class="footer__options">
                        <a href="#" class="option">TV Box</a>
                    </div>
                    <div class="footer__options">
                        <a href="#" class="option">Smarthphones e Tablets</a>
                    </div>
                    <div class="footer__options">
                        <a href="#" class="option">Consumíveis e Papel</a>
                    </div>
                </div>
            </div>
            
            <div class="footer__card">
                <div class="footer__card-title">
                    <h3 class="categories__title">Informação</h3>
                </div>
                <div class="footer__card-content">
                    <div class="footer__options">
                        <a href="#" class="option">Sobre nós</a>
                    </div>
                    <div class="footer__options">
                        <a href="#" class="option">Contacte-nos</a>
                    </div>
                    <div class="footer__options">
                        <a href="#" class="option">Política de Privacidade</a>
                    </div>
                    <div class="footer__options">
                        <a href="#" class="option">Termos & Condições</a>
                    </div>
                </div>
            </div>
            
            <div class="footer__card">
                <div class="footer__card-title">
                    <h3 class="categories__title">Serviços</h3>
                </div>
                <div class="footer__card-content">
                    <div class="footer__options">
                        <a href="#" class="option">Minha conta</a>
                    </div>
                    <div class="footer__options">
                        <a href="#" class="option">Carrinho</a>
                    </div>
                    <div class="footer__options">
                        <a href="#" class="option">Lista de desejos</a>
                    </div>
                </div>
            </div>
            
            <div class="footer__card">
                <div class="footer__card-title">
                    <h3 class="categories__title">Contacte-nos</h3>
                </div>
                <div class="footer__card-content">
                    <div class="footer__options">
                       
                        <a href="#" class="option"><i class="material-icons">phone</i> +244-923-695-077</a>
                    </div>
                    <div class="footer__options">
                        
                        <a href="#" class="option"><i class="material-icons">email</i> geral@aida.ao</a>
                    </div>
                    <div class="footer__options">
                        
                        <a href="#" class="option"><i class="material-icons">room</i> Zango 0, Vila Chinesa</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
    
    <!-- *****************************\
             Footer bottom
    \******************************/-->
    <div class="footer__botoom">
        <div class="footer__bottom-details">
            <span>© 2023 AIDA - Advanced Internet Design Angola™ . Todos os Direitos Reservados</span>
        </div>
    </div>
    <script src=""></script>
</body>

</html>
