<?php
session_start();

if(empty($_SESSION['id'])){
    echo'<script>

    window.location.href=("INICIO_sesion2.php");
    
    
    
    </script>';
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="menu_4.css">
 
<link rel="stylesheet" href="carrito.css">
    <title>Menu- Crepas Calif</title>
    <link rel="shortcut icon" href="logo nuevo_preview_rev_3 (1).png" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/ebae95e142.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/5b728b9248.js" crossorigin="anonymous"></script>
   


   <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600|Open+Sans" rel="stylesheet"> 
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
   <script src="https://kit.fontawesome.com/5b728b9248.js" crossorigin="anonymous"></script>
   <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<link rel="stylesheet" href="diseño_tarjeta4.css">
<link rel="stylesheet" href="radios.css">


<script src="
https://cdn.jsdelivr.net/npm/sweetalert2@11.9.0/dist/sweetalert2.all.min.js
"></script>

    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600|Open+Sans" rel="stylesheet"> 
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    
   
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link href="
https://cdn.jsdelivr.net/npm/sweetalert2@11.9.0/dist/sweetalert2.min.css
" rel="stylesheet">




<link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>





<link rel="stylesheet" href="loader.css">
</head>
<body>

<!---CARGA-->
<div class="page-loading active">
		<div class="page-loading-inner">
			<div class="page-spinner"></div>
			<span>Cargando...</span>
		</div>
	</div> 
    <header class="header">
      
        <i class='bx bxs-user-circle' id="botoncito4" ></i>

        

        <a href="paginaprincipal.php" class="logo"><img src="logo nuevo_preview_rev_3 (1).png" alt="" id="login"></a>
      

        <input type="checkbox" id="check">
        
        <label for="check" class="icons">
            <i class='bx bx-menu' id="menu-icon"></i>
            <i class='bx bx-x' id="close-icon"></i>
        </label>
      

    <nav class="navbar" id="nuevo">
        <a href="paginaprincipal.php" style="--i:0;">Inicio</a>
        <a href="conocenos.php" style="--i:1;">Conocenos</a>
        <a href="menup.php" style="--i:2;" id="">Menú</a>
        <a href="galeria.php" style="--i:3;" id="">Galería</a>
        <a href="formulario_contacto.php" style="--i:4;" id="">Contactanos</a>

    </nav>

  
    <i class='bx bxs-user-circle' id="botoncito3"></i>
    <div id="usuario" class="us">
        <?php
        echo
$_SESSION['nombre']." ".
$_SESSION['apellidos'];
        ?>
    </div>

    <div>
        <img onclick="showCart(this)" class="cart" src="cart.png" alt="">
        <p class="count-product" id="contar">0</p>
    </div>
    <div class="cart-products" id="products-id">
        <p class="close-btn" onclick="closeBtn()">X</p>
        <h3>Mi carrito</h3>
        <div class="card-items">
            <!-- <div class="item">
                <img src="./images/products/keyboard-1.jpg" alt="">
                <div class="item-content">
                    <h5>name of product name of product name of product</h5>
                    <h5 class="cart-price">45.50$</h5>
                    <h6>Amount: 3</h6>
                </div>
                <span>X</span>
            </div>

            <div class="item">
                <img src="./images/products/keyboard-1.jpg" alt="">
                <div class="item-content">
                    <h5>name of product name of product name of product</h5>
                    <h5 class="cart-price">45.50$</h5>
                    <h6>Amount: 3</h6>
                </div>
                <span class="delete-product" data-id="">X</span>
            </div> -->
        </div>
        
        
        <button id="enviar-cart" class="enviar-cart">Realizar compra</button>
        
        <h2>Total: $<strong class="price-total">0</strong></h2>


    </div>
</div>



     </header>


    
</div>

<div class="products">


     <article id="menu1">
     <div  class="menu">
        <div class="heading">
            <h1>DELICIOSAS CREPAS</h1>
            <h3>&mdash; MENÚ &mdash; </h3>
        </div>
        
        <button id="menu1Button" class="seccion1">SECCIÓN 1</button>
<button id="menu2Button" class="seccion2">SECCIÓN 2</button>
<button id="menu3Button" class="seccion3">SECCIÓN 3</button> 
    </div>

<article class="fila1">

    <div  class="card">
<div class="imgBox">
    <div class="slider">

        <div class="slides">
            <input type="radio" name="radio-btn" id="radio1">
            <input type="radio" name="radio-btn" id="radio2">
            <input type="radio" name="radio-btn" id="radio3">
    
            <div class="slide first"  id="imagen_p">
                <img src="crepa_platano3.png" alt="">
            </div>
            <div class="slide">
                <img src="crepa_platano2.png" alt="">
            </div>
            <div class="slide">
                <img src="crepa_platano1.png" alt="">
            </div>
        </div>
    
        <div class="nav-auto">
            <div class="auto-btn1"></div>
            <div class="auto-btn2"></div>
            <div class="auto-btn3"></div>
        </div>
    
        <div class="nav-manual">
            <label for="radio1" class="manual-btn" id="1radio"></label>
            <label for="radio2" class="manual-btn" id="2radio"></label>
            <label for="radio3" class="manual-btn" id="3radio"></label>
        </div>
    </div>
</div>
<div class="details">
<div class="title" id="title">
    <h3> CREPA NUTELLA PLATANO</h3>
</div> 
    <small>Crepas de NUTELLA </small>
<div class="description"> 
<h4>Descripción</h4>
<p>Una rica masa secreta, acompañada con NUTELLA Y PLATANO, ingredientes extras como LECHERA, CHISPAS DE CHOCOLATE, MERMELADA, etc.</p>
</div>
<div class="buy">
    <div class="price">
    <sup>$</sup>
    <span>55.00</span>
</div>
<div class="btn">
    <a href="#" data-id="1" class="btn-add-cart" id="button"  class="button">AGREGAR <i class="fa-solid fa-cart-plus fa-sm"></i></a>
</div>
</div>
</div>

</div>




<div  class="card">
    <div class="imgBox">

        <div class="slider">
            <div class="slides">
                <input type="radio" name="radio-btn2" id="radio1_2">
                <input type="radio" name="radio-btn2" id="radio2_2">
                <input type="radio" name="radio-btn2" id="radio3_2">
        
                <div class="slide first2"  id="imagen_p">
                    <img src="crepa_fresa1.jpeg" alt="">
                </div>
                <div class="slide">
                    <img src="crepa_fresas2.jpeg" alt="">
                </div>
                <div class="slide">
                    <img src="crepa_fresa3.jpeg" alt="">
                </div>
            </div>
        
            <div class="nav-auto">
                <div class="auto-btn1"></div>
                <div class="auto-btn2"></div>
                <div class="auto-btn3"></div>
            </div>
        
            <div class="nav-manual">
                <label for="radio1_2" class="manual-btn" id="4radio"></label>
                <label for="radio2_2" class="manual-btn" id="5radio"></label>
                <label for="radio3_2" class="manual-btn" id="6radio"></label>
            </div>
       
    </div>
    
    
    
    
    </div>
    <div class="details">
    <div class="title"  id="title">
        <h3>CREPA NUTELLA FRESAS</h3>
    </div>
        <small>Crepas de NUTELLA</small>

    <div class="description"> 
    <h4>Descripción</h4>
    <p>Una rica masa secreta, acompañada con NUTELLA Y FRESAS ricas, ingredientes extras como LECHERA, CHISPAS DE CHOCOLATE, MERMELADA, etc.</p>
    </div>
    <div class="buy">
        <div class="price">
        <sup>$</sup>
        <span>55.00</span>
    </div>
    <div class="btn">
        <a href="#" data-id="2" class="btn-add-cart" id="button"  class="button">AGREGAR<i class="fa-solid fa-cart-plus fa-sm"></i></a>
    </div>
    </div>
    </div>
    
    </div>




    <div  class="card" >
        <div class="imgBox">
            <div class="slider">
                <div class="slides">
                    <input type="radio" name="radio-btn3" id="radio1_3">
                    <input type="radio" name="radio-btn3" id="radio2_3">
                    <input type="radio" name="radio-btn3" id="radio3_3">
            
                    <div class="slide first3"  id="imagen_p">
                        <img src="crepa_nuez1.png" alt="">
                    </div>
                    <div class="slide">
                        <img src="crepa_nuez2.png" alt="">
                    </div>
                    <div class="slide">
                        <img src="crepa_nuez3.png" alt="">
                    </div>
                </div>
            
                <div class="nav-auto">
                    <div class="auto-btn1"></div>
                    <div class="auto-btn2"></div>
                    <div class="auto-btn3"></div>
                </div>
            
                <div class="nav-manual">
                    <label for="radio1_3" class="manual-btn" id="7radio"></label>
                    <label for="radio2_3" class="manual-btn" id="8radio"></label>
                    <label for="radio3_3" class="manual-btn" id="9radio"></label>
                </div>
            </div>

        
        </div>
        <div class="details">
        <div class="title"  id="title">
            <h3>CREPA NUTELLA NUEZ</h3>
        </div>
            <small>Crepas de NUTELLA</small>
        <div class="description"> 
        <h4>Descripción</h4>
        <p>Una rica masa secreta, acompañada con NUTELLA Y NUECES frescas, ingredientes extras como LECHERA, CHISPAS DE CHOCOLATE, MERMELADA, etc.</p>
        </div>
        <div class="buy">
            <div class="price">
            <sup>$</sup>
            <span>55.00</span>
        </div>
        <div class="btn">
            <a href="#" data-id="3" class="btn-add-cart" id="button"  class="button">AGREGAR<i class="fa-solid fa-cart-plus fa-sm"></i></a>
        </div>
        </div>
        </div>
        
        </div>


        <div  class="card" >
            <div class="imgBox">
                <div class="slider">
                    <div class="slides">
                        <input type="radio" name="radio-btn4" id="radio1_4">
                        <input type="radio" name="radio-btn4" id="radio2_4">
                        <input type="radio" name="radio-btn4" id="radio3_4">
                
                        <div class="slide first4"  id="imagen_p">
                            <img src="crepa_duraz1.jpeg" alt="">
                        </div>
                        <div class="slide">
                            <img src="crepa_duraz2.png" alt="">
                        </div>
                        <div class="slide">
                            <img src="crepa_duraz3.png" alt="">
                        </div>
                    </div>
                
                    <div class="nav-auto">
                        <div class="auto-btn1"></div>
                        <div class="auto-btn2"></div>
                        <div class="auto-btn3"></div>
                    </div>
                
                    <div class="nav-manual">
                        <label for="radio1_4" class="manual-btn" id="10radio"></label>
                        <label for="radio2_4" class="manual-btn" id="11radio"></label>
                        <label for="radio3_4" class="manual-btn" id="12radio"></label>
                    </div>
                </div>
    
            
            </div>
            <div class="details">
            <div class="title"  id="title">
                <h3>CREPA DURAZNO</h3> </div>
                <small>Crepas de NUTELLA</small>
            <div class="description"> 
            <h4>Descripción</h4>
            <p>Una rica masa secreta, acompañada con NUTELLA Y DURAZNOS deliciosos, ingredientes extras como LECHERA, CHISPAS DE CHOCOLATE, MERMELADA, etc.</p>
            </div>
            <div class="buy">
                <div class="price">
                <sup>$</sup>
                <span>55.00</span>
            </div>
            <div class="btn">
                <a href="#" data-id="4" class="btn-add-cart" id="button"  class="button">AGREGAR<i class="fa-solid fa-cart-plus fa-sm"></i></a>
            </div>
            </div>
            </div>
            
            </div>


        <div  class="card">
            <div class="imgBox">
                <div class="slider">
                    <div class="slides">
                        <input type="radio" name="radio-btn5" id="radio1_5">
                        <input type="radio" name="radio-btn5" id="radio2_5">
                        <input type="radio" name="radio-btn5" id="radio3_5">
                
                        <div class="slide first5"  id="imagen_p">
                            <img src="crepa_frutos4.png.jpeg" alt="">
                        </div>
                        <div class="slide">
                            <img src="crepa_frutos3.jpg" alt="">
                        </div>
                        <div class="slide">
                            <img src="crepa_frutos1.jpg" alt="">
                        </div>
                    </div>
                
                    <div class="nav-auto">
                        <div class="auto-btn1"></div>
                        <div class="auto-btn2"></div>
                        <div class="auto-btn3"></div>
                    </div>
                
                    <div class="nav-manual">
                        <label for="radio1_5" class="manual-btn" id="13radio"></label>
                        <label for="radio2_5" class="manual-btn" id="14radio"></label>
                        <label for="radio3_5" class="manual-btn" id="15radio"></label>
                    </div>
            
                </div>
            
            
            </div>
            <div class="details">
                <div class="title"  id="title">
                    <h3>CREPA 2 FRUTAS</h3> </div>
                    <small>Crepas de NUTELLA</small>
                
                <div class="description"> 
                <h4>Descripción</h4>
                <p>Una rica masa secreta, acompañada con NUTELLA Y 2 FRUTAS (ya sea PLATANO, FRESAS, DURAZNOS, MANGO,etc ), ingredientes extras como LECHERA, CHISPAS DE CHOCOLATE, MERMELADA, etc.</p>
                </div>
                <div class="buy">
                    <div class="price">
                    <sup>$</sup>
                    <span>60.00</span>
                </div>
                <div class="btn">
                    <a href="#" data-id="5" class="btn-add-cart" id="button"  class="button">AGREGAR<i class="fa-solid fa-cart-plus fa-sm"></i></a>
                </div>
                </div>
                </div>
                
                </div>





                <div  class="card">
                    <div class="imgBox">
                        <div class="slider">
                            <div class="slides">
                                <input type="radio" name="radio-btn13" id="radio1_13">
                                <input type="radio" name="radio-btn13" id="radio2_13">
                                <input type="radio" name="radio-btn13" id="radio3_13">
                        
                                <div class="slide first13"  id="imagen_p">
                                    <img src="crepa_helado1.jpg" alt="">
                                </div>
                                <div class="slide">
                                    <img src="crepa_helado2.png" alt="">
                                </div>
                                <div class="slide">
                                    <img src="crepa_helado3.png" alt="">
                                </div>
                            </div>
                        
                            <div class="nav-auto">
                                <div class="auto-btn1"></div>
                                <div class="auto-btn2"></div>
                                <div class="auto-btn3"></div>
                            </div>
                        
                            <div class="nav-manual">
                                <label for="radio1_13" class="manual-btn" id="16radio"></label>
<label for="radio2_13" class="manual-btn" id="17radio"></label>
             <label for="radio3_13" class="manual-btn"  id="18radio"></label>
                            </div>
                    
                        </div>
                    
                    
                    
                    
                    
                    
                    </div>
                    <div class="details">
                    <div class="title3"  id="title">
                        <h3>CREPA DE HELADO</h3>  </div>
                        <small>Crepas ESPECIALIDADES</small>
                    <div class="description"> 
                    <h4>Descripción</h4>
                    <p>Una rica masa secreta, acompañada con un rico sabor de HELADO, ingredientes extras como LECHERA, CHISPAS DE CHOCOLATE, MERMELADA, etc.</p>
                    </div>
                    <div class="buy">
                        <div class="price">
                        <sup>$</sup>
                        <span>70.00</span>
                    </div>
                    <div class="btn">
                        <a href="#" data-id="6" class="btn-add-cart" id="button"  class="button">AGREGAR<i class="fa-solid fa-cart-plus fa-sm"></i></a>
                    </div>
                    </div>
                    </div>
                    
                    </div>



                    
                    <div  class="card">
                        <div class="imgBox">
                            <div class="slider">
                                <div class="slides">
                                    <input type="radio" name="radio-btn14" id="radio1_14">
                                    <input type="radio" name="radio-btn14" id="radio2_14">
                                    <input type="radio" name="radio-btn14" id="radio3_14">
                            
                                    <div class="slide first14"  id="imagen_p">
                                        <img src="crepa_oreo1.png" alt="">
                                    </div>
                                    <div class="slide">
                                        <img src="crepa_oreo2.png" alt="">
                                    </div>
                                    <div class="slide">
                                        <img src="crepa_oreo3.png" alt="">
                                    </div>
                                </div>
                            
                                <div class="nav-auto">
                                    <div class="auto-btn1"></div>
                                    <div class="auto-btn2"></div>
                                    <div class="auto-btn3"></div>
                                </div>
                            
                                <div class="nav-manual">
                                    <label for="radio1_14" class="manual-btn" id="19radio"></label>
                                    <label for="radio2_14" class="manual-btn" id="20radio"></label>
                                    <label for="radio3_14" class="manual-btn" id="21radio"></label>
                                </div>
                        
                            </div>
                        
                        
                        
                        
                        
                        
                        </div>
                        <div class="details">
                        <div class="title3"  id="title">
                            <h3>CREPA DE OREO</h3>  </div>
                            <small>Crepas ESPECIALIDADES</small>
                        <div class="description"> 
                        <h4>Descripción</h4>
                        <p>Una rica masa secreta, acompañada con galletas de OREO, ingredientes extras como LECHERA, CHISPAS DE CHOCOLATE, MERMELADA, etc.</p>
                        </div>
                        <div class="buy">
                            <div class="price">
                            <sup>$</sup>
                            <span>65.00</span>
                        </div>
                        <div class="btn">
                            <a href="#" data-id="7" class="btn-add-cart" id="button"  class="button">AGREGAR<i class="fa-solid fa-cart-plus fa-sm"></i></a>
                        </div>
                        </div>
                        </div>
                        
                        </div>
        </article>













        <article class="fila2">

            <div  class="card">
                <div class="imgBox">
                    <div class="slider">
                        <div class="slides">
                            <input type="radio" name="radio-btn6" id="radio1_6">
                            <input type="radio" name="radio-btn6" id="radio2_6">
                            <input type="radio" name="radio-btn6" id="radio3_6">
                    
                            <div class="slide first6"  id="imagen_p">
                                <img src="quesonutella1.png" alt="">
                            </div>
                            <div class="slide">
                                <img src="quesonutella2.png" alt="">
                            </div>
                            <div class="slide">
                                <img src="quesonutella3.png" alt="">
                            </div>
                        </div>
                    
                        <div class="nav-auto">
                            <div class="auto-btn1"></div>
                            <div class="auto-btn2"></div>
                            <div class="auto-btn3"></div>
                        </div>
                    
                        <div class="nav-manual">
                            <label for="radio1_6" class="manual-btn" id="22radio"></label>
                            <label for="radio2_6" class="manual-btn" id="23radio"></label>
                            <label for="radio3_6" class="manual-btn" id="24radio"></label>
                        </div>
                
                    </div>
                
                
                
                
                
                
                </div>
                <div class="details">
                <div class="title2"  id="title">
                    <h3>CREPA QUESO NUTELLA</h3>
                </div>
                    <small>Crepas de QUESO FILADELFIA</small>
                <div class="description"> 
                <h4>Descripción</h4>
                <p>Una rica masa secreta, acompañada con QUESO FILADELFIA y NUTELLA , ingredientes extras como LECHERA, CHISPAS DE CHOCOLATE, MERMELADA, etc.</p>
                </div>
                <div class="buy">
                    <div class="price">
                    <sup>$</sup>
                    <span>55.00</span>
                </div>
                <div class="btn">
                    <a href="#" data-id="8" class="btn-add-cart" id="button"  class="button">AGREGAR<i class="fa-solid fa-cart-plus fa-sm"></i></a>
                </div>
                </div>
                </div>
                
                </div>
            
                <div  class="card">
                    <div class="imgBox">
                        <div class="slider">
                            <div class="slides">
                                <input type="radio" name="radio-btn7" id="radio1_7">
                                <input type="radio" name="radio-btn7" id="radio2_7">
                                <input type="radio" name="radio-btn7" id="radio3_7">
                        
                                <div class="slide first7" id="imagen_p">
                                    <img src="quesofresa_2.png.jpg" alt="">
                                </div>
                                <div class="slide">
                                    <img src="quesofresa_1.png" alt="">
                                </div>
                                <div class="slide">
                                    <img src="quesofresa_3.png" alt="">
                                </div>
                            </div>
                        
                            <div class="nav-auto">
                                <div class="auto-btn1"></div>
                                <div class="auto-btn2"></div>
                                <div class="auto-btn3"></div>
                            </div>
                        
                            <div class="nav-manual">
                                <label for="radio1_7" class="manual-btn" id="25radio"></label>
                                <label for="radio2_7" class="manual-btn" id="26radio"></label>
                                <label for="radio3_7" class="manual-btn" id="27radio"></label>
                            </div>
                    
                        </div>
                    
                    
                    
                    
                    
                    
                    </div>
                    <div class="details">
                    <div class="title2"  id="title">
                        <h3>CREPA QUESO FRESA</h3>  </div>
                        <small>Crepas de QUESO FILADELFIA</small>
                    <div class="description"> 
                    <h4>Descripción</h4>
                    <p>Una rica masa secreta, acompañada con QUESO FILADELFIA y FRESA fresca , ingredientes extras como LECHERA, CHISPAS DE CHOCOLATE, MERMELADA, etc.</p>
                    </div>
                    <div class="buy">
                        <div class="price">
                        <sup>$</sup>
                        <span>55.00</span>
                    </div>
                    <div class="btn">
                        <a href="#" data-id="9" class="btn-add-cart" id="button"  class="button">AGREGAR<i class="fa-solid fa-cart-plus fa-sm"></i></a>
                    </div>
                    </div>
                    </div>
                    
                    </div>

                    


                    <div  class="card">
                        <div class="imgBox">
                            <div class="slider">
                                <div class="slides">
                                    <input type="radio" name="radio-btn8" id="radio1_8">
                                    <input type="radio" name="radio-btn8" id="radio2_8">
                                    <input type="radio" name="radio-btn8" id="radio3_8">
                            
                                    <div class="slide first8"  id="imagen_p">
                                        <img src="quesozarza1.png" alt="">
                                    </div>
                                    <div class="slide">
                                        <img src="quesozarza2.png" alt="">
                                    </div>
                                    <div class="slide">
                                        <img src="quesozarza3.png" alt="">
                                    </div>
                                </div>
                            
                                <div class="nav-auto">
                                    <div class="auto-btn1"></div>
                                    <div class="auto-btn2"></div>
                                    <div class="auto-btn3"></div>
                                </div>
                            
                                <div class="nav-manual">
                                    <label for="radio1_8" class="manual-btn" id="28radio"></label>
                                    <label for="radio2_8" class="manual-btn" id="29radio"></label>
                                    <label for="radio3_8" class="manual-btn" id="30radio"></label>
                                </div>
                        
                            </div>
                        
                        
                        </div>
                        <div class="details">
                        <div class="title2"  id="title">
                            <h3>CREPA ZARZAMORA</h3>  </div>
                            <small>Crepas de QUESO FILADELFIA</small>
                        <div class="description"> 
                        <h4>Descripción</h4>
                        <p>Una rica masa secreta, acompañada con QUESO FILADELFIA y ZARZAMORA fresca , ingredientes extras como LECHERA, CHISPAS DE CHOCOLATE, MERMELADA, etc.</p>
                        </div>
                        <div class="buy">
                            <div class="price">
                            <sup>$</sup>
                            <span>55.00</span>
                        </div>
                        <div class="btn">
                            <a href="#" data-id="10" class="btn-add-cart" id="button"  class="button">AGREGAR<i class="fa-solid fa-cart-plus fa-sm"></i></a>
                        </div>
                        </div>
                        </div>
                        
                        </div>


                        <div  class="card">
                            <div class="imgBox">
                                <div class="slider">
                                    <div class="slides">
                                        <input type="radio" name="radio-btn9" id="radio1_9">
                                        <input type="radio" name="radio-btn9" id="radio2_9">
                                        <input type="radio" name="radio-btn9" id="radio3_9">
                                
                                        <div class="slide first9"  id="imagen_p">
                                            <img src="quesofra1.png" alt="">
                                        </div>
                                        <div class="slide">
                                            <img src="quesofra3.png" alt="">
                                        </div>
                                        <div class="slide">
                                            <img src="quesofra2.png" alt="">
                                        </div>
                                    </div>
                                
                                    <div class="nav-auto">
                                        <div class="auto-btn1"></div>
                                        <div class="auto-btn2"></div>
                                        <div class="auto-btn3"></div>
                                    </div>
                                
                                    <div class="nav-manual">
                                        <label for="radio1_9" class="manual-btn" id="31radio"></label>
                                        <label for="radio2_9" class="manual-btn" id="32radio"></label>
                                        <label for="radio3_9" class="manual-btn" id="33radio"></label>
                                    </div>
                            
                                </div>
                            
                            
                            
                            
                            
                            
                            </div>
                            <div class="details">
                            <div class="title2"  id="title">
                                <h3>CREPA FRAMBUEZA</h3>  </div>
                                <small>Crepas de QUESO FILADELFIA</small>
                            <div class="description"> 
                            <h4>Descripción</h4>
                            <p>Una rica masa secreta, acompañada con QUESO FILADELFIA y FRAMBUESA fresca , ingredientes extras como LECHERA, CHISPAS DE CHOCOLATE, MERMELADA, etc.</p>
                            </div>
                            <div class="buy">
                                <div class="price">
                                <sup>$</sup>
                                <span>55.00</span>
                            </div>
                            <div class="btn">
                                <a href="#" data-id="11" class="btn-add-cart" id="button"  class="button">AGREGAR<i class="fa-solid fa-cart-plus fa-sm"></i></a>
                            </div>
                            </div>
                            </div>
                            
                            </div>
                            <div  class="card">
                                <div class="imgBox">
                                    <div class="slider">
                                        <div class="slides">
                                            <input type="radio" name="radio-btn10" id="radio1_10">
                                            <input type="radio" name="radio-btn10" id="radio2_10">
                                            <input type="radio" name="radio-btn10" id="radio3_10">
                                    
                                            <div class="slide first10"  id="imagen_p">
                                                <img src="quesofruto1.png" alt="">
                                            </div>
                                            <div class="slide">
                                                <img src="crepa_frutos2.png" alt="">
                                            </div>
                                            <div class="slide">
                                                <img src="quesofruto2.png" alt="">
                                            </div>
                                        </div>
                                    
                                        <div class="nav-auto">
                                            <div class="auto-btn1"></div>
                                            <div class="auto-btn2"></div>
                                            <div class="auto-btn3"></div>
                                        </div>
                                    
                                        <div class="nav-manual">
                                            <label for="radio1_10" class="manual-btn" id="34radio"></label>
                                            <label for="radio2_10" class="manual-btn" id="35radio"></label>
                                            <label for="radio3_10" class="manual-btn" id="36radio"></label>
                                        </div>
                                
                                    </div>
                                
                                
                                
                                
                                
                                
                                </div>
                                <div class="details">
                                <div class="title2"  id="title">
                                    <h3>CREPA 2 INGREDIENTES</h3>  </div>
                                    <small>Crepas de QUESO FILADELFIA</small>
                                <div class="description"> 
                                <h4>Descripción</h4>
                                <p>Una rica masa secreta, acompañada con QUESO FILADELFIA y FRESA fresca , ingredientes extras como LECHERA, CHISPAS DE CHOCOLATE, MERMELADA, etc.</p>
                                </div>
                                <div class="buy">
                                    <div class="price">
                                    <sup>$</sup>
                                    <span>60.00</span>
                                </div>
                                <div class="btn">
                                    <a href="#" data-id="12" class="btn-add-cart" id="button"  class="button">AGREGAR<i class="fa-solid fa-cart-plus fa-sm"></i></a>
                                </div>
                                </div>
                                </div>
                                
                                </div>


                                  <div  class="card">
                                <div class="imgBox">
                                    <div class="slider">
                                        <div class="slides">
                                            <input type="radio" name="radio-btn11" id="radio1_11">
                                            <input type="radio" name="radio-btn11" id="radio2_11">
                                            <input type="radio" name="radio-btn11" id="radio3_11">
                                    
                                            <div class="slide first11"  id="imagen_p">
                                                <img src="crepakinder.png" alt="">
                                            </div>
                                            <div class="slide">
                                                <img src="crepakinder2.png" alt="">
                                            </div>
                                            <div class="slide">
                                                <img src="crepakinder3.png" alt="">
                                            </div>
                                        </div>
                                    
                                        <div class="nav-auto">
                                            <div class="auto-btn1"></div>
                                            <div class="auto-btn2"></div>
                                            <div class="auto-btn3"></div>
                                        </div>
                                    
                                        <div class="nav-manual">
                                            <label for="radio1_11" class="manual-btn" id="37radio"></label>
                                            <label for="radio2_11" class="manual-btn" id="38radio"></label>
                                            <label for="radio3_11" class="manual-btn" id="39radio"></label>
                                        </div>
                                
                                    </div>
                                
                                
                                
                                
                                
                                
                                </div>
                                <div class="details">
                                <div class="title3"  id="title">
                                    <h3>CREPA DE KINDER</h3>  </div>
                                    <small>Crepas ESPECIALIDADES</small>
                                <div class="description"> 
                                <h4>Descripción</h4>
                                <p>Una rica masa secreta, acompañada con un delicioso KINDER DELICE, ingredientes extras como LECHERA, CHISPAS DE CHOCOLATE, MERMELADA, etc.</p>
                                </div>
                                <div class="buy">
                                    <div class="price">
                                    <sup>$</sup>
                                    <span>70.00</span>
                                </div>
                                <div class="btn">
                                    <a href="#" data-id="13" class="btn-add-cart" id="button"  class="button">AGREGAR<i class="fa-solid fa-cart-plus fa-sm"></i></a>
                                </div>
                                </div>
                                </div>
                                
                                </div>



                                
                                <div  class="card">
                                    <div class="imgBox">
                                        <div class="slider">
                                            <div class="slides">
                                                <input type="radio" name="radio-btn12" id="radio1_12">
                                                <input type="radio" name="radio-btn12" id="radio2_12">
                                                <input type="radio" name="radio-btn12" id="radio3_12">
                                        
                                                <div class="slide first12"  id="imagen_p">
                                                    <img src="crepakit.png" alt="">
                                                </div>
                                                <div class="slide">
                                                    <img src="crepakit2.png" alt="">
                                                </div>
                                                <div class="slide">
                                                    <img src="crepakit3.png" alt="">
                                                </div>
                                            </div>
                                        
                                            <div class="nav-auto">
                                                <div class="auto-btn1"></div>
                                                <div class="auto-btn2"></div>
                                                <div class="auto-btn3"></div>
                                            </div>
                                        
                                            <div class="nav-manual">
                                                <label for="radio1_12" class="manual-btn" id="40radio"></label>
                                                <label for="radio2_12" class="manual-btn" id="41radio"></label>
                                                <label for="radio3_12" class="manual-btn" id="42radio"></label>
                                            </div>
                                    
                                        </div>
                                    
                                    
                                    
                                    
                                    
                                    
                                    </div>
                                    <div class="details">
                                    <div class="title3"  id="title">
                                        <h3>CREPA DE KIT-KAT</h3>  </div>
                                        <small>Crepas ESPECIALIDADES</small>
                                    <div class="description"> 
                                    <h4>Descripción</h4>
                                    <p>Una rica masa secreta, acompañada con un KIT-KAT, ingredientes extras como LECHERA, CHISPAS DE CHOCOLATE, MERMELADA, etc.</p>
                                    </div>
                                    <div class="buy">
                                        <div class="price">
                                        <sup>$</sup>
                                        <span>70.00</span>
                                    </div>
                                    <div class="btn">
                                        <a href="#" data-id="14" class="btn-add-cart" id="button"  class="button">AGREGAR<i class="fa-solid fa-cart-plus fa-sm"></i></a>
                                    </div>
                                    </div>
                                    </div>
                                    
                                    </div>

</article>
</article>





<article id="menu2" >
    <div  class="menu2">
       <div class="heading2">
           <h1>RICAS ALAS DE POLLO</h1>
           <h3>&mdash; MENÚ &mdash; </h3>
       </div>
         
       <button id="menu1Button2" class="seccion1_2">SECCIÓN 1</button>
        <button id="menu2Button2" class="seccion2_2">SECCIÓN 2</button>
        <button id="menu3Button2" class="seccion3_2">SECCIÓN 3</button>
       

        <article class="fila3">

            <div  class="card">
        <div class="imgBox">
            <div class="slider">
        
                <div class="slides">
                    <input type="radio" name="radio-btn15" id="radio1_15">
                    <input type="radio" name="radio-btn15" id="radio2_15">
                    <input type="radio" name="radio-btn15" id="radio3_15">
            
                    <div class="slide first15" id="imagen_p">
                        <img src="alas1.jpeg" alt="">
                    </div>
                    <div class="slide">
                        <img src="alas2.jpg" alt="">
                    </div>
                    <div class="slide">
                        <img src="alas3.jpg" alt="">
                    </div>
                </div>
            
                <div class="nav-auto">
                    <div class="auto-btn1"></div>
                    <div class="auto-btn2"></div>
                    <div class="auto-btn3"></div>
                </div>
            
                <div class="nav-manual">
                    <label for="radio1_15" class="manual-btn" id="43radio"></label>
                    <label for="radio2_15" class="manual-btn" id="44radio"></label>
                    <label for="radio3_15" class="manual-btn" id="45radio"></label>
                </div>
            </div>
        </div>
        <div class="details">
        <div class="title4"  id="title">
            <h3>ALAS ADOBADAS</h3>
        </div>
            <small>-Menú COMIDA</small>
        <div class="description"> 
        <h4>Descripción</h4>
        <p>Una rica masa secreta, acompañada con NUTELLA Y PLATANO, ingredientes extras como LECHERA, CHISPAS DE CHOCOLATE, MERMELADA, etc.</p>
        </div>
        <div class="buy">
            <div class="price">
            <sup>$</sup>
            <span>55.00</span>
        </div>
        <div class="btn">
            <a href="#" data-id="15" class="btn-add-cart" id="button"  class="button">AGREGAR <i class="fa-solid fa-cart-plus fa-sm"></i></a>
        </div>
        </div>
        </div>
        
        </div>
        
        </article>

        
           <article class="fila4">
        <div  class="card">
            <div class="imgBox">
        
                <div class="slider">
                    <div class="slides">
                        <input type="radio" name="radio-btn16" id="radio1_16">
                        <input type="radio" name="radio-btn16" id="radio2_16">
                        <input type="radio" name="radio-btn16" id="radio3_16">
                
                        <div class="slide first16"  id="imagen_p">
                            <img src="alaspapas1.jpg" alt="">
                        </div>
                        <div class="slide">
                            <img src="alaspapas2.jpg" alt="">
                        </div>
                        <div class="slide">
                            <img src="alaspapas3.jpg" alt="">
                        </div>
                    </div>
                
                    <div class="nav-auto">
                        <div class="auto-btn1"></div>
                        <div class="auto-btn2"></div>
                        <div class="auto-btn3"></div>
                    </div>
                
                    <div class="nav-manual">
                        <label for="radio1_16" class="manual-btn" id="46radio"></label>
                        <label for="radio2_16" id="47radio" class="manual-btn"></label>
                        <label for="radio3_16" id="48radio" class="manual-btn"></label>
                    </div>
               
            </div>
            
            
            
            
            </div>
            <div class="details">
            <div class="title4"  id="title">
                <h3>ALAS CON PAPAS</h3>
            </div>
                <small>-Menú COMIDA</small>
        
            <div class="description"> 
            <h4>Descripción</h4>
            <p>Una rica masa secreta, acompañada con NUTELLA Y FRESAS ricas, ingredientes extras como LECHERA, CHISPAS DE CHOCOLATE, MERMELADA, etc.</p>
            </div>
            <div class="buy">
                <div class="price">
                <sup>$</sup>
                <span>65.00</span>
            </div>
            <div class="btn">
                <a href="#" data-id="16" class="btn-add-cart" id="button"  class="button">AGREGAR<i class="fa-solid fa-cart-plus fa-sm"></i></a>
            </div>
            </div>
            </div>
            
            </div>
            </article>
            <article class="fila5">

            <div  class="card">
                <div class="imgBox">
            
                    <div class="slider">
                        <div class="slides">
                            <input type="radio" name="radio-btn17" id="radio1_17">
                            <input type="radio" name="radio-btn17" id="radio2_17">
                            <input type="radio" name="radio-btn17" id="radio3_17">
                    
                            <div class="slide first17"  id="imagen_p">
                                <img src="papas1.png" alt="">
                            </div>
                            <div class="slide">
                                <img src="papas2.png" alt="">
                            </div>
                            <div class="slide">
                                <img src="papas3.png" alt="">
                            </div>
                        </div>
                    
                        <div class="nav-auto">
                            <div class="auto-btn1"></div>
                            <div class="auto-btn2"></div>
                            <div class="auto-btn3"></div>
                        </div>
                    
                        <div class="nav-manual">
                            <label for="radio1_17" class="manual-btn" id="49radio"></label>
                            <label for="radio2_17" class="manual-btn" id="50radio"></label>
                            <label for="radio3_17" class="manual-btn" id="51radio"></label>
                        </div>
                   
                </div>
                
                
                
                
                </div>
                <div class="details">
                <div class="title4"  id="title">
                    <h3>PAPAS A LA FRANCESA</h3>
                </div>
                    <small>-Menú COMIDA</small>
            
                <div class="description"> 
                <h4>Descripción</h4>
                <p>Una rica masa secreta, acompañada con NUTELLA Y FRESAS ricas, ingredientes extras como LECHERA, CHISPAS DE CHOCOLATE, MERMELADA, etc.</p>
                </div>
                <div class="buy">
                    <div class="price">
                    <sup>$</sup>
                    <span>45.00</span>
                </div>
                <div class="btn">
                    <a href="#" data-id="17" class="btn-add-cart" id="button"  class="button">AGREGAR<i class="fa-solid fa-cart-plus fa-sm"></i></a>
                </div>
                </div>
                </div>
            </article>
                </div>
        





        
       
   
</article>








<article id="menu3">
    <div  class="menu">
       <div class="heading3">
           <h1>MARAVILLOSOS FRAPPES</h1>
           <h3>&mdash; MENÚ &mdash; </h3>
       </div>
         
       <button id="menu1Button3" class="seccion1">SECCIÓN 1</button>
       <button id="menu2Button3" class="seccion2">SECCIÓN 2</button>
       <button id="menu3Button3" class="seccion3">SECCIÓN 3</button>
      


<article class="fila6">

    <div  class="card">
<div class="imgBox">
    <div class="slider">

        <div class="slides">
            <input type="radio" name="radio-btn18" id="radio1_18">
            <input type="radio" name="radio-btn18" id="radio2_18">
            <input type="radio" name="radio-btn18" id="radio3_18">
    
            <div class="slide first18"  id="imagen_p">
                <img src="frape_fresa1.jpeg" alt="">
            </div>
            <div class="slide">
                <img src="frape_fresa2.png" alt="">
            </div>
            <div class="slide">
                <img src="frape_fresa3.png" alt="">
            </div>
        </div>
    
        <div class="nav-auto">
            <div class="auto-btn1"></div>
            <div class="auto-btn2"></div>
            <div class="auto-btn3"></div>
        </div>
    
        <div class="nav-manual">
            <label for="radio1_18" class="manual-btn" id="52radio"></label>
            <label for="radio2_18" class="manual-btn" id="53radio"></label>
            <label for="radio3_18" class="manual-btn" id="54radio"></label>
        </div>
    </div>
</div>
<div class="details">
<div class="title"  id="title">
    <h3>FRAPPE DE FRESA</h3>
</div>
    <small>-Frapees SENCILLOS </small>
<div class="description"> 
<h4>Descripción</h4>
<p>Una rico sabor y muy cremoso, acompañado con FRESAS, ingredientes extras como CHANTILLIN, CHOCOLATE, CHISPAS , HIELO,ect.</p>
</div>
<div class="buy">
    <div class="price">
    <sup>$</sup>
    <span>50.00</span>
</div>
<div class="btn">
    <a href="#" data-id="18" class="btn-add-cart" id="button"  class="button">AGREGAR <i class="fa-solid fa-cart-plus fa-sm"></i></a>
</div>
</div>
</div>

</div>




<div  class="card">
    <div class="imgBox">

        <div class="slider">
            <div class="slides" >
                <input type="radio" name="radio-btn19" id="radio1_19">
                <input type="radio" name="radio-btn19" id="radio2_19">
                <input type="radio" name="radio-btn19" id="radio3_19">
        
                <div class="slide first19"  id="imagen_p">
                    <img src="frape_cafe1.jpeg" alt="">
                </div>
                <div class="slide">
                    <img src="frape_cafe2.png" alt="">
                </div>
                <div class="slide">
                    <img src="frape_cafe3.png" alt="">
                </div>
            </div>
        
            <div class="nav-auto">
                <div class="auto-btn1"></div>
                <div class="auto-btn2"></div>
                <div class="auto-btn3"></div>
            </div>
        
            <div class="nav-manual">
                <label for="radio1_19" class="manual-btn" id="55radio"></label>
                <label for="radio2_19" class="manual-btn" id="56radio"></label>
                <label for="radio3_19" class="manual-btn" id="57radio"></label>
            </div>
       
    </div>
    
    
    
    
    </div>
    <div class="details">
    <div class="title"  id="title">
        <h3>FRAPEE DE CAFE</h3>
    </div>
        <small>-Frapees SENCILLOS</small>

    <div class="description"> 
    <h4>Descripción</h4>
    <p>Una rico sabor y muy cremoso, hecho con el Cafe que elija, ingredientes extras como CHANTILLIN, CHOCOLATE, CHISPAS , HIELO,ect.</p>
    </div>
    <div class="buy">
        <div class="price">
        <sup>$</sup>
        <span>55.00</span>
    </div>
    <div class="btn">
        <a href="#" data-id="19" class="btn-add-cart" id="button"  class="button">AGREGAR<i class="fa-solid fa-cart-plus fa-sm"></i></a>
    </div>
    </div>
    </div>
    
    </div>




    <div  class="card" >
        <div class="imgBox">
            <div class="slider">
                <div class="slides">
                    <input type="radio" name="radio-btn3" id="radio1_20">
                    <input type="radio" name="radio-btn3" id="radio2_20">
                    <input type="radio" name="radio-btn3" id="radio3_20">
            
                    <div class="slide first20"  id="imagen_p">
                        <img src="frape_choco1.jpg" alt="">
                    </div>
                    <div class="slide">
                        <img src="frape_choco2.jpg" alt="">
                    </div>
                    <div class="slide">
                        <img src="frape_choco1.png" alt="">
                    </div>
                </div>
            
                <div class="nav-auto">
                    <div class="auto-btn1"></div>
                    <div class="auto-btn2"></div>
                    <div class="auto-btn3"></div>
                </div>
            
                <div class="nav-manual">
                    <label for="radio1_20" class="manual-btn" id="58radio"></label>
                    <label for="radio2_20" class="manual-btn" id="59radio"></label>
                    <label for="radio3_20" class="manual-btn" id="60radio"></label>
                </div>
            </div>

        
        </div>
        <div class="details">
        <div class="title"  id="title">
            <h3>FRAPEE DE CHOCOLATE</h3>
        </div>
            <small>-Frapees SENCILLOS</small>
        <div class="description"> 
        <h4>Descripción</h4>
        <p>Una rico sabor y muy cremoso, hecho con delicioso CHOCOLATE ,ingredientes extras como CHANTILLIN, CHOCOLATE, CHISPAS , HIELO,ect.</p>
        </div>
        <div class="buy">
            <div class="price">
            <sup>$</sup>
            <span>50.00</span>
        </div>
        <div class="btn">
            <a href="#" data-id="20" class="btn-add-cart" id="button"  class="button">AGREGAR<i class="fa-solid fa-cart-plus fa-sm"></i></a>
        </div>
        </div>
        </div>
        
        </div>


        <div  class="card" >
            <div class="imgBox">
                <div class="slider">
                    <div class="slides">
                        <input type="radio" name="radio-btn21" id="radio1_21">
                        <input type="radio" name="radio-btn21" id="radio2_21">
                        <input type="radio" name="radio-btn21" id="radio3_21">
                
                        <div class="slide first21"  id="imagen_p">
                            <img src="frape_vainilla1.png" alt="">
                        </div>
                        <div class="slide">
                            <img src="frape_vainilla2.png" alt="">
                        </div>
                        <div class="slide">
                            <img src="frape_vainilla3.png" alt="">
                        </div>
                    </div>
                
                    <div class="nav-auto">
                        <div class="auto-btn1"></div>
                        <div class="auto-btn2"></div>
                        <div class="auto-btn3"></div>
                    </div>
                
                    <div class="nav-manual">
                        <label for="radio1_21" class="manual-btn" id="61radio"></label>
                        <label for="radio2_21" class="manual-btn" id="62radio"></label>
                        <label for="radio3_21" class="manual-btn" id="63radio"></label>
                    </div>
                </div>
    
            
            </div>
            <div class="details">
            <div class="title"  id="title">
                <h3>FRAPEE DE VAINILLA</h3>
            </div>
            <small>-Frapees SENCILLOS</small>
            <div class="description"> 
            <h4>Descripción</h4>
            <p>Una rico sabor y muy cremoso, hecho con deliciosa VAINILLA ,ingredientes extras como CHANTILLIN, CHOCOLATE, CHISPAS , HIELO,ect.</p>
            </div>
            <div class="buy">
                <div class="price">
                <sup>$</sup>
                <span>50.00</span>
            </div>
            <div class="btn">
                <a href="#" data-id="21" class="btn-add-cart" id="button"  class="button">AGREGAR<i class="fa-solid fa-cart-plus fa-sm"></i></a>
            </div>
            </div>
            </div>
            
            </div>


       
        </article>

        <article class="fila7">

            <div  class="card">
                <div class="imgBox">
                    <div class="slider">
                        <div class="slides">
                            <input type="radio" name="radio-btn22" id="radio1_22">
                            <input type="radio" name="radio-btn22" id="radio2_22">
                            <input type="radio" name="radio-btn22" id="radio3_22">
                    
                            <div class="slide first22"  id="imagen_p">
                                <img src="frape_oreo1.jpg" alt="">
                            </div>
                            <div class="slide">
                                <img src="frape_oreo2.jpg" alt="">
                            </div>
                            <div class="slide">
                                <img src="frape_oreo3.jpg" alt="">
                            </div>
                        </div>
                    
                        <div class="nav-auto">
                            <div class="auto-btn1"></div>
                            <div class="auto-btn2"></div>
                            <div class="auto-btn3"></div>
                        </div>
                    
                        <div class="nav-manual">
                            <label for="radio1_22" class="manual-btn" id="64radio"></label>
                            <label for="radio2_22" class="manual-btn" id="65radio"></label>
                            <label for="radio3_22" class="manual-btn" id="66radio"></label>
                        </div>
                
                    </div>
                
                
                
                
                
                
                </div>
                <div class="details">
                <div class="title2"  id="title">
                    <h3>FRAPEE DE OREO</h3>
                </div>
                <small>-Frapees COMPUESTOS</small>
                <div class="description"> 
                <h4>Descripción</h4>
                <p>Una rico sabor y cremoso, hecho con deliciosa galleta de OREO ,ingredientes extras como CHANTILLIN, CHOCOLATE, CHISPAS , HIELO,ect.</p>
                </div>
                <div class="buy">
                    <div class="price">
                    <sup>$</sup>
                    <span>55.00</span>
                </div>
                <div class="btn">
                    <a href="#" data-id="22" class="btn-add-cart" id="button"  class="button">AGREGAR<i class="fa-solid fa-cart-plus fa-sm"></i></a>
                </div>
                </div>
                </div>
                
                </div>
            
                <div  class="card">
                    <div class="imgBox">
                        <div class="slider">
                            <div class="slides" >
                                <input type="radio" name="radio-btn23" id="radio1_23">
                                <input type="radio" name="radio-btn23" id="radio2_23">
                                <input type="radio" name="radio-btn23" id="radio3_23">
                        
                                <div class="slide first23"  id="imagen_p">
                                    <img src="frape_mazapan1.png" alt="">
                                </div>
                                <div class="slide">
                                    <img src="frape_mazapan2.png" alt="">
                                </div>
                                <div class="slide">
                                    <img src="frape_mazapan3.png" alt="">
                                </div>
                            </div>
                        
                            <div class="nav-auto">
                                <div class="auto-btn1"></div>
                                <div class="auto-btn2"></div>
                                <div class="auto-btn3"></div>
                            </div>
                        
                            <div class="nav-manual">
                                <label for="radio1_23" class="manual-btn" id="67radio"></label>
                                <label for="radio2_23" class="manual-btn" id="68radio"></label>
                                <label for="radio3_23" class="manual-btn" id="69radio"></label>
                            </div>
                    
                        </div>
                    
                    
                    
                    
                    
                    
                    </div>
                    <div class="details">
                    <div class="title2"  id="title">
                        <h3>FRAPEE DE MAZAPAN</h3>  </div>
                        <small>-Frapees COMPUESTOS</small>
                        <div class="description"> 
                        <h4>Descripción</h4>
                        <p>Una rico sabor y cremoso, hecho con delicioso MAZAPAN ,ingredientes extras como CHANTILLIN, CHOCOLATE, CHISPAS , HIELO,ect.</p>
                        </div>
                    <div class="buy">
                        <div class="price">
                        <sup>$</sup>
                        <span>55.00</span>
                    </div>
                    <div class="btn">
                        <a href="#" data-id="23" class="btn-add-cart" id="button"  class="button">AGREGAR<i class="fa-solid fa-cart-plus fa-sm"></i></a>
                    </div>
                    </div>
                    </div>
                    
                    </div>

                    


                    <div  class="card">
                        <div class="imgBox">
                            <div class="slider">
                                <div class="slides">
                                    <input type="radio" name="radio-btn_24" id="radio1_24">
                                    <input type="radio" name="radio-btn_24" id="radio2_24">
                                    <input type="radio" name="radio-btn_24" id="radio3_24">
                            
                                    <div class="slide first24"  id="imagen_p">
                                        <img src="frape_nutella1.png" alt="">
                                    </div>
                                    <div class="slide">
                                        <img src="frape_nutella2.png" alt="">
                                    </div>
                                    <div class="slide">
                                        <img src="frape_nutella3.png" alt="">
                                    </div>
                                </div>
                            
                                <div class="nav-auto">
                                    <div class="auto-btn1"></div>
                                    <div class="auto-btn2"></div>
                                    <div class="auto-btn3"></div>
                                </div>
                            
                                <div class="nav-manual">
                                    <label for="radio1_24" class="manual-btn" id="70radio"></label>
                                    <label for="radio2_24" class="manual-btn" id="71radio"></label>
                                    <label for="radio3_24" class="manual-btn" id="72radio"></label>
                                </div>
                        
                            </div>
                        
                        
                        
                        
                        
                        
                        </div>
                        <div class="details">
                        <div class="title2"  id="title">
                            <h3>FRAPEE DE NUTELLA</h3>  </div>
                            <small>-Frapees COMPUESTOS</small>
                <div class="description"> 
                <h4>Descripción</h4>
                <p>Una rico sabor y cremoso, hecho con NUTELLA,ingredientes extras como CHANTILLIN, CHOCOLATE, CHISPAS , HIELO,ect.</p>
                </div>
                        <div class="buy">
                            <div class="price">
                            <sup>$</sup>
                            <span>55.00</span>
                        </div>
                        <div class="btn">
                            <a href="#" data-id="24" class="btn-add-cart" id="button"  class="button">AGREGAR<i class="fa-solid fa-cart-plus fa-sm"></i></a>
                        </div>
                        </div>
                        </div>
                        
                        </div>


                        <div  class="card">
                            <div class="imgBox">
                                <div class="slider">
                                    <div class="slides">
                                        <input type="radio" name="radio-btn25" id="radio1_25">
                                        <input type="radio" name="radio-btn25" id="radio2_25">
                                        <input type="radio" name="radio-btn25" id="radio3_25">
                                
                                        <div class="slide first25"  id="imagen_p">
                                            <img src="frape_gansito1.png" alt="">
                                        </div>
                                        <div class="slide">
                                            <img src="frape_gansito2.png" alt="">
                                        </div>
                                        <div class="slide">
                                            <img src="frape_gansito3.png" alt="">
                                        </div>
                                    </div>
                                
                                    <div class="nav-auto">
                                        <div class="auto-btn1"></div>
                                        <div class="auto-btn2"></div>
                                        <div class="auto-btn3"></div>
                                    </div>
                                
                                    <div class="nav-manual">
                                        <label for="radio1_25" class="manual-btn" id="73radio"></label>
                                        <label for="radio2_25" class="manual-btn" id="74radio"></label>
                                        <label for="radio3_25" class="manual-btn" id="75radio"></label>
                                    </div>
                            
                                </div>
                            
                            
                            
                            
                            
                            
                            </div>
                            <div class="details">
                            <div class="title2"  id="title">
                                <h3>FRAPEE DE GANSITO</h3>  </div>
                            <small>-Frapees COMPUESTOS</small>
                <div class="description"> 
                <h4>Descripción</h4>
                <p>Una rico sabor y muy cremoso, hecho con rico GANSITO,ingredientes extras como CHANTILLIN, CHOCOLATE, CHISPAS , HIELO,ect.</p>
                </div>
                            <div class="buy">
                                <div class="price">
                                <sup>$</sup>
                                <span>55.00</span>
                            </div>
                            <div class="btn">
                                <a href="#" data-id="25" class="btn-add-cart" id="button"  class="button">AGREGAR<i class="fa-solid fa-cart-plus fa-sm"></i></a>
                            </div>
                            </div>
                            </div>
                            
                            </div>
                       

</article>




   </div>
</article>



</div>


        <iframe src="footer.html" frameborder="0" class="footer"></iframe>



        <div class="overlay" id="overlay">
    <div class="popup" id="popup">
        <a href="#" id="btn-cerrar-popup" class="btn-cerrar-popup"><i class="fas fa-times"></i></a>
        <h3>¡BIENVENIDO!</h3>
        <h4>   <div id="usuario">
        <?php
echo $_SESSION['nombre']." ".
$_SESSION['apellidos'];
        ?>
    </div></h4>
    
      

            <a href="#" id="Cuenta">Cerrar Sesión</a>
         
    </div>
</div>
<script src="cerrar_sesion.js"></script>

<script src="script_principal.js" ></script>



<script>
document.addEventListener("DOMContentLoaded", function () {
    const menu1Button = document.getElementById('menu1Button');
    const menu2Button = document.getElementById('menu2Button');
    const menu3Button = document.getElementById('menu3Button');
    const menu1 = document.getElementById('menu1');
    const menu2 = document.getElementById('menu2');
    const menu3 = document.getElementById('menu3');

    menu1.style.display = 'block';
    menu2.style.display = 'none';
    menu3.style.display = 'none';

    menu1Button.addEventListener('click', function () {
        menu1.style.display = 'block';
        menu2.style.display = 'none';
        menu3.style.display = 'none';
    });

    menu2Button.addEventListener('click', function () {
        menu1.style.display = 'none';
        menu2.style.display = 'block';
        menu3.style.display = 'none';
    });

    menu3Button.addEventListener('click', function () {
        menu1.style.display = 'none';
        menu2.style.display = 'none';
        menu3.style.display = 'block';
    });
});
</script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const menu1Button = document.getElementById('menu1Button2');
        const menu2Button = document.getElementById('menu2Button2');
        const menu3Button = document.getElementById('menu3Button2');
        const menu1 = document.getElementById('menu1');
        const menu2 = document.getElementById('menu2');
        const menu3 = document.getElementById('menu3');
    
        menu1.style.display = 'block';
        menu2.style.display = 'none';
        menu3.style.display = 'none';
    
        menu1Button.addEventListener('click', function () {
            menu1.style.display = 'block';
            menu2.style.display = 'none';
            menu3.style.display = 'none';
        });
    
        menu2Button.addEventListener('click', function () {
            menu1.style.display = 'none';
            menu2.style.display = 'block';
            menu3.style.display = 'none';
        });
    
        menu3Button.addEventListener('click', function () {
            menu1.style.display = 'none';
            menu2.style.display = 'none';
            menu3.style.display = 'block';
        });
    });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const menu1Button = document.getElementById('menu1Button3');
            const menu2Button = document.getElementById('menu2Button3');
            const menu3Button = document.getElementById('menu3Button3');
            const menu1 = document.getElementById('menu1');
            const menu2 = document.getElementById('menu2');
            const menu3 = document.getElementById('menu3');
        
            menu1.style.display = 'block';
            menu2.style.display = 'none';
            menu3.style.display = 'none';
        
            menu1Button.addEventListener('click', function () {
                menu1.style.display = 'block';
                menu2.style.display = 'none';
                menu3.style.display = 'none';
            });
        
            menu2Button.addEventListener('click', function () {
                menu1.style.display = 'none';
                menu2.style.display = 'block';
                menu3.style.display = 'none';
            });
        
            menu3Button.addEventListener('click', function () {
                menu1.style.display = 'none';
                menu2.style.display = 'none';
                menu3.style.display = 'block';
            });
        });
        </script>
<script>
document.addEventListener("DOMContentLoaded", function () {
    const toggleMenuButton = document.getElementById("cuenta");
    const cerrarMenuButton = document.getElementById("cerrar-menu");
    const menu = document.getElementById("compras");

    toggleMenuButton.addEventListener("click", function () {
        if (menu.style.right === "0px" || menu.style.right === "") {
            menu.style.right = "-400px";
        } else {
            menu.style.right = "0";
        }
    });
    cerrarMenuButton.addEventListener("click", function () {
        menu.style.right = "-300px";
    });
});

</script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
    const cards = document.querySelectorAll(".card");

    cards.forEach(function (card) {
        card.addEventListener("click", function () {
            this.classList.toggle("expanded");
        });
    });
});

</script>


<script>
     function showCart(x){
    document.getElementById("products-id").style.display = "block";
}
function closeBtn(){
     document.getElementById("products-id").style.display = "none";
}
</script>

<!--SCRIPT DEL MENU DE COMPRA--->
<script src="script_menu2.js"></script>
<script src="script_radios.js"></script>


<script src="loader2.js"></script>

<script src="popup.js"></script>

<script>
const btnAbrirPopup4 = document.querySelector(".us");

btnAbrirPopup4.addEventListener('click', function(){
	overlay.classList.add('active');
	popup.classList.add('active');
});

</script>

<script src="enviar_link.js"></script>


</body>
</html>
