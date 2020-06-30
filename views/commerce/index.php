<?php
require_once('../../core/helpers/commerce.php');
Commerce::headerTemplate();
?>
<!-- Contenido principal del documento -->
<main>
    <!-- Slider -->
    <section>
        <div class="slider">
            <!-- Diapositivas -->
            <ul class="slides">
                <li>
                    <img src="../../resources/img/commerce/img4-1.jpg">
                    <div class="caption center-align">
                        <h1 class="slider-text">Cultura y Arte Sin Fronteras</h1>
                        <h5 class="light grey-text text-lighten-3">Venta de artesanías de diferentes departamentos<br>de El Salvador</h5>
                    </div>
                </li>
                <li>
                    <img src="../../resources/img/commerce/img12-1.jpg">
                    <div class="caption left-align">
                        <h1 class="slider-text">Artesanías de todos los lugares de El Salvador!</h1>
                        <h5 class="light grey-text text-lighten-3">14 departamentos llenos de vida y cultura.</h5>
                    </div>
                </li>
                <li>
                    <img src="../../resources/img/commerce/img11-1.jpg">
                    <div class="caption right-align">
                        <h1 class="slider-text">"Más que una tienda, Historia y Cultura."</h1>
                        <h5 class="light grey-text text-lighten-3">Más de 20 años alzando a nuestra patria.</h5>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!-- Categorías -->
    <section class="mod-row hide-on-med-and-down">
        <!-- Cartas con el nombre de cada categoría -->
        <div class="row padding-mod center-align">
            <div class="col s12 m6 l2 offset-l1 ">
                <a href="">
                    <div class="card-panel categories white hoverable">
                        <img src="../../resources/img/commerce/iconos/home.png" alt="">
                        <h5 class="light grey-text text-darken-3">Hogar</h5>
                    </div>
                </a>
            </div>
            <div class="col s12 m6 l2">
                <a href="">
                    <div class="card-panel categories white hoverable">
                        <img src="../../resources/img/commerce/iconos/shirt.png" alt="">
                        <h5 class="light grey-text text-darken-3">Ropa</h5>
                    </div>
                </a>
            </div>
            <div class="col s12 m6 l2">
                <a href="">
                    <div class="card-panel categories white hoverable">
                        <img src="../../resources/img/commerce/iconos/briefcase.png" alt="">
                        <h5 class="light grey-text text-darken-3">Carteras</h5>
                    </div>
                </a>
            </div>
            <div class="col s12 m6 l2">
                <a href="">
                    <div class="card-panel categories white hoverable">
                        <img src="../../resources/img/commerce/iconos/mask.png" alt="">
                        <h5 class="light grey-text text-darken-3">Adornos</h5>
                    </div>
                </a>
            </div>
            <div class="col s12 m6 l2">
                <a href="">
                    <div class="card-panel categories white hoverable">
                        <img src="../../resources/img/commerce/iconos/jewel.png" alt="">
                        <h5 class="light grey-text text-darken-3">Accesorios</h5>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <!-- Mapa de El Salvador -->
    <section>
        <h1 class="center-align lo slider-text">Mapa de El Salvador</h1>

        <!-- Imagen .svg utilizada para el mapa interactivo -->
        <div class="container">
            <svg viewBox="0 0 990 453.36">
                <path id="AH" name="Ahuachapán" onclick="modal-info(AH)" class="modal-trigger" href="#modal2" d="M128,252.85l3.62.62,8.37,3,1.75.94,1.56,1.49,1.62,3.12,1.41,1.73,1.77,1,1.85.92,1.81,1.23,1.86,2.35.51,7.78-1.79,29.51-6.44,4.62-8.33,4.43-4.7,1.87-.92.92-.59,1.47.2,2.72.3,1.78,2.61,7.51,1.23,2.29,1.2,1.68,1.92,2.64.13,1.51-5.4,14.33-.28,2.42.18,1.7,5.82,10,.92,2.25-.21,1.79-.73,2.21L137,379l-.67,2.51-.29,1.91.68,3.95-.07,1L133.56,399l-.34,2.13-.17,9.77-1.87,1.24-3.23,1.13-12.25,2-2.65.08-.91-.41-3.56-2.17L102,407.9l-2.86-1.31-2.22-.32-3.07.48-2.25.92-2.3,1.64-1.8,2-2.12,4.27-4.16,11.59L80.64,429l-30-6.39-32-7.57L3.74,389l-1.66-6.49-.53-7,.68-7,1.89-6.67,3.67-6,9.69-8.42,4.08-5.12,2.4-6.69,1.3-6.54,2.1-6.62,4.77-6.6L64.65,280l6.66-10.51L75,265.65,91.3,254.82l5.77-1.7,7.76.31,12.26,5.76,6.5,1.1,5.15-4.44-.33-2.39-.45-.62Z" transform="translate(-0.55 -48.23)" fill="#446ae5" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                <path id="CA" name="Cabañas" onclick="modal-info(CA)" class="modal-trigger" href="#modal2" d="M649.09,220.44l-1.94,2.79,3.6,4.62.51,5-1.89,4.83-3.68,3.69,2.17,5.56-2.51,6.61-2.09,8.05.12.08-5.55,5.86-4-.12-10.43,1-1.57-.16-.93-.51L619.55,266l-1-2.13-.8-.84-1.2-.34-3,0-1.09-.27-3-1-4.64-.6-1.09-.27-8.64-3.8-1-.29-4.66.23-5.53.93-2.74.1-12.86,3-2.9.34-2.06-.05-6.7-2.9-1.34.4-1.29,1.11-1.34,3.17-1.06,1.67-1.17,1.18-2.39.33-3.08,0-2.48,1.27-11.24,8.36-3.62,2.14-2.62,1.1-4.52-.52-2.45,0-2.66.49-.75,1.7-.5,1.44,2.08,12-14.71-.7L497.49,292l-.63-1-3.53-3.41-4.82-3.22-2.16-1.87L485,280.9l-1.18-2.5-.86-1.55-2.84-3.05-.88-1.65-.71-1.79-2.19-2.89-2.45-1.81-3.72-1.52-3.13-2.07-10.3-9.37L454,249.53l-1.57-2.42-.09-1.31.32-2.22.8-1.92.75-.78,4.67-4.33,1.18-1.6,1-1.77,1-3.1,3.83-10.8,11.74-2.94,10.76-1.39,5.26-2.61,5.52-3.7,22.85-13.73,4.3-3.22,2.25-2.76,2.11-4.78,7.49-5.88,17.91-7,.06.7,2.22-1.52,9.9-3.86,10.4-1.61,32.63,2.93,18.07-2.62,4.28.78,4.4,2.7,0,2.45-.38.6-1.9.22,3.76,4.9.8,4.94-.23,5.38.48,6.25,2.07,3.74,6.82,9.85,1.7,6.69-2.2,6.64Z" transform="translate(-0.55 -48.23)" fill="#3654b7" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                <path id="CU" name="Cuscatlán" onclick="modal-info()" class="modal-trigger" href="#modal2" d="M466,219.27l-3.83,10.8-1,3.1-1,1.77-1.18,1.6-4.67,4.33-.75.78-.8,1.92-.32,2.22.09,1.31,1.57,2.42,2.76,3.17,10.3,9.37,3.13,2.07,3.72,1.52,2.45,1.81,2.19,2.89.71,1.79.88,1.65,2.84,3.05.86,1.55,1.18,2.5,1.29,1.66,2.16,1.87,4.82,3.22,3.53,3.41.63,1,4.07,1.24,14.71.7-2.9,21.35-.08,6.06-.54,2.17-.57,1.56-6.08,9.46-2.46,2.29-2.07,1.28-4.82,1.8-1.87,1.24-.41.91-.44,2.15-.51.93L492,346.26l-3.06,1-8.16-.73L473,344.36l-19.22-2.56-3.09-12.42-1.34-1.85-1.28-2.07-2.5-2-9.93-11.81-1.12-1.8-1.33-9.13-.69-1.69-1-1-1.06-.17-1.8-.72-2-1.29-6.76-6.38-.91-.41-2.4-.18-2.56.47-3.35-1.71L406,284.28l-14.42-14.5-1.89-3,.63-.86,2.55-1.9.9-1,.61-1,.33-1.71-.51-.91-3.24-2.55L379.54,245l-5.68-7L372.38,235l-1.3-3.5.16-.65,1.73-2.34.6-1.88.2-2.3-.25-2.51.06-2.47-.34-2.9-1.19-3.94-2.8-6.55-.61-1.81.18-1.48,1-4.32.74-5.39-.7-4,6.29-5.31,2.66-.49,5.57,1.52,11.17,1.39,2.29.61,3.52,2,7.92,3.35.76.65,2.58,2.8L423.74,204l1,1,.27.76.1,1.82.24,1.07.87,2.06,1.1,1.7,1.6,2.1,2.85,2.64,2.23,1.24,1.68.65,9.6,2.15,7.09-2.2,6.79,1,6.79-.8Z" transform="translate(-0.55 -48.23)" fill="#3654b7" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                <path id="LI" name="La Libertad" onclick="modal-info()" class="modal-trigger" href="#modal2" d="M320.58,206.48l2.64,14.06-.13,9.46.41,2.27.62,1.4L327,235l1.3,1.24,1.55,1.91,3.12,4.32,1.65,1.88,1.52,1.3,1.9.7,2.05.46,3.56.33,1.17-.26,3.64-1.12,2.48-.35,2.4.18,1.54.47,1.73.84,2.41.69.78.75.35.64-.46,3,0,3-.32.38-2.95.56-1,.53-.63.86-.08,1.45,3.14,23.59-.06,2.47-.17,1.06-.75.78-1.87,1.24-1.4,1.54-.92,1.85-.34,2.13-.05,2.06.86,7.49-.08,3.3-.67,3.43.17,4,1,6.74,0,3-1.57,5.78-.6,5.57.47,1.64.88.73,2.43-.13,2.64,2.18.55,4.28,1.17,3.84.63,1,1.64,1.37,1.82.82.9.82.79,1.26,1.5,3,1,1.72,1,1,1,.49,6.46,1.83,2.88,1.4,3.54,3,.74,1.47.11,1.41-.72,2.72-.47,2.46.38,1.25,1.1.78,3.35.79.71.87,0,1-1.14,1.79-.06,2.47.58,4,4.61,16.9.11,1.41-1.07,7.11-.09,3.71.24,2,.64,1.5,8.78,9,3.34,4.38.78.75,1,.29,2.46-.45,2.21-1.11,3.89-2.31,2.28-.82,2.65-.08,3.21.61,3,6.4,1.56,1.49,2.66-.49,2.35,0,4.37.76,1.57,1.08.56,1.11-.58,2-1.4,2.88-.8,1.92-1.88,6.26-.53,2.68-.39,4.19-21.89-7.59-30-6-31.14-.4L336,448.16l-11-.1L268,461.27l-25.75-.58-9.08.19,2.59-13.6,1.38-3.9,8.14-11.25,1.3-2.44.7-1.9-.53-5.11-.1-3.67.52-2.27.69-1.49,1.25-1.72,6.79-10.85,1.46-3.09.61-2.29-.21-1.39-2.64-9-.39-4.93.08-5.14.37-2.44.53-1.76.61-1,1.44-1.35.93-.41,2.67-.91,1.51-1.06,1.28-1.62,3.47-6.93,1.69-2.53L274.4,352l2.14-2.33,2.34-3.29.72-1.8.24-1.69-.46-1.13L278,340.14l-1.85-.92-1.09-.27-4.91-.44-.73-11.93,2.79-20.92-1.31-9-2-7.35-2-11.23,0-2.45.51-.93.75-.78.93-.41,2.14-.07,1-.44,1.17-1.18,2.06-5.89.79-.59,3.86-1.07L282,262.8l.64-1.27.2-1.38L281.6,252l-.38-1.25-.67-6.2-.75-23.92,1.12-3.22.63-3.11,3-2,4.56-2,3.17-2.76,3.32-3.92,4.3,0,8.24,2.46,6.76-.49,1.36.11,4.3.88Z" transform="translate(-0.55 -48.23)" fill="#253c72" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                <path id="PA" name="La Paz" onclick="modal-info()" class="modal-trigger" href="#modal2" d="M506.1,334.59l4.86,7.52,1.63,6.81,1.07,7,1.12,2.72,1.15,1.48,1.21-.07,2.49-.76,9-5.19,1.64-.47,1.92-.12,3.39.47,1.38,1.13,14.72,19,.94,2.35.59,2.63-.06,2.47L552,390.81l-.15,2.08.54,11.56.34,2,2.2,7.09,1.11,2.21,1,1.53,3.29,2.34,2.88,1.4,4,1.36,3.32,2,3.4,2.82,1.46,1.93.78,1.67.09,1.31,0,2.45-.44,2.15-2,2.4L573,441l-.15,1.16.37,2.58,5.64,16.47.33,2.39-.27,1.09-1.11,1.89-.65.76L573.88,470l-2.76,1.85-1.54,1.37-1.28,1.62-.8,1.92-.42,2.25,0,1.24L568.79,493l-103.6-22.79-32.43-11.17.39-4.19.53-2.68,1.88-6.26.8-1.92,1.4-2.88.58-2-.56-1.11L436.21,437l-4.37-.76-2.35,0-2.66.49-1.56-1.49-3-6.4.11-3.61,1-1,2.21-3.88,1-4.95,1.12-11-.13-4.69-.34-2.9-1.24-1.87-4.35-4.76L419.79,387l-1.59-3.44-.24-2,.3-1.4.77-.68,1-.53,2.58-.37,6.92.7,2.51-.25,1.68-2.12,8.64-18.13,11.45-17L473,344.36l7.76,2.15,8.16.73,3.06-1,1.51-1.06.51-.93.44-2.15.41-.91,1.87-1.24,4.82-1.8,2.07-1.28,2.46-2.29Z" transform="translate(-0.55 -48.23)" fill="#253c72" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                <path id="SO" name="Sonsonate" onclick="modal-info()" class="modal-trigger" href="#modal2" d="M270.14,338.52l4.91.44,1.09.27,1.85.92,1.39,1.64.46,1.13-.24,1.69-.72,1.8-2.34,3.29L274.4,352l-5.16,4.85-1.69,2.53-3.47,6.93-1.28,1.62L261.3,369l-2.67.91-.93.41-1.44,1.35-.61,1-.53,1.76-.37,2.44-.08,5.14.39,4.93,2.64,9,.21,1.39-.61,2.29-1.46,3.09-6.79,10.85-1.25,1.72-.69,1.49-.52,2.27.1,3.67.53,5.11-.7,1.9-1.3,2.44-8.14,11.25-1.38,3.9-2.59,13.6-2.94.15-27.37-2.78L190,464.1l-38,9-7.11-2.91-7.41-14.32-3.68-9.11-5.92-3.08-9.45-3.31L81.61,429.16l-1-.19.53-1.76,4.16-11.59,2.12-4.27,1.8-2,2.3-1.64,2.25-.92,3.07-.48,2.22.32L102,407.9l6.63,4.87,3.56,2.17.91.41,2.65-.08,12.25-2,3.23-1.13,1.87-1.24.17-9.77.34-2.13,3.07-10.53.07-1-.68-3.95.29-1.91L137,379l2.22-4.29.73-2.21.21-1.79-.92-2.25-5.82-10-.18-1.7.28-2.42,5.4-14.33-.13-1.51-1.92-2.64-1.2-1.68L134.42,332l-2.61-7.51-.3-1.78-.2-2.72.59-1.47.92-.92,4.7-1.87,8.33-4.43,6.44-4.62,9.89.24,3.59-.91,2-1.07,2.49-.76,2.07.56,2.71,1.13,8,5,1.54,1.4,1.92,2.64,2.74,2.15,2.94,1.7,2.51,2.51.87,2.06.13,2.43-.8,1.92-1.28,1.62-.8,1.92.14,1.1.68.77,1.47.59,2.62-.18,2.29,1.54,1.28,1.15,1.48,2,1.89,1.11,1.38.2,1.94,0,2.77-1.34,1.31-1,.66-1.17.07-1-.83-3.71,0-2.45.61-3.21.68-2,1.16-1.69,1.13-.46,3,.56,4.33,1.49,10,4.42,6.39,3.79,3.82,5.6,1.54,1.4,5.57.6,19.93-.68Z" transform="translate(-0.55 -48.23)" fill="#253c72" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                <path id="SS" name="San Salvador" onclick="modal-info()" class="modal-trigger" href="#modal2" d="M369.84,189l.7,4-.74,5.39-1,4.32-.18,1.48.61,1.81,2.8,6.55,1.19,3.94.34,2.9-.06,2.47.25,2.51-.2,2.3-.6,1.88-1.73,2.34-.16.65,1.3,3.5,1.48,2.95,5.68,7,11.38,11.9,3.24,2.55.51.91-.33,1.71-.61,1-.9,1-2.55,1.9-.63.86,1.89,3L406,284.28l4.65,3.36,3.35,1.71,2.56-.47,2.4.18.91.41,6.76,6.38,2,1.29,1.8.72,1.06.17,1,1,.69,1.69,1.33,9.13,1.12,1.8,9.93,11.81,2.5,2,1.28,2.07,1.34,1.85,3.09,12.42-11.45,17L433.72,377,432,379.07l-2.51.25-6.92-.7L420,379l-1,.53-.77.68-.3,1.4.24,2,1.59,3.44,1.91,3.06,4.35,4.76,1.24,1.87.34,2.9.13,4.69-1.12,11-1,4.95-2.21,3.88-1,1-.11,3.61-3.21-.61-2.65.08-2.28.82-3.89,2.31-2.21,1.11-2.46.45-1-.29-.78-.75-3.34-4.38-8.78-9-.64-1.5-.24-2,.09-3.71,1.07-7.11-.11-1.41-4.61-16.9-.58-4,.06-2.47,1.14-1.79,0-1-.71-.87-3.35-.79-1.1-.78-.38-1.25.47-2.46.72-2.72-.11-1.41-.74-1.47-3.54-3-2.88-1.4-6.46-1.83-1-.49-1-1-1-1.72-1.5-3-.79-1.26-.9-.82-1.82-.82L360,348.18l-.63-1-1.17-3.84-.55-4.28L355,336.9l-2.43.13-.88-.73-.47-1.64.6-5.57,1.57-5.78,0-3-1-6.74-.17-4,.67-3.43.08-3.3-.86-7.49.05-2.06.34-2.13.92-1.85,1.4-1.54,1.87-1.24.75-.78.17-1.06.06-2.47-3.14-23.59.08-1.45.63-.86,1-.53,2.95-.56.32-.38,0-3,.46-3-.35-.64-.78-.75-2.41-.69-1.73-.84-1.54-.47-2.4-.18-2.48.35-3.64,1.12-1.17.26-3.56-.33-2.05-.46-1.9-.7-1.52-1.3-1.65-1.88-3.12-4.32-1.55-1.91L327,235l-2.86-1.31-.62-1.4-.41-2.27.13-9.46-2.64-14.06,2.92-.24,1.48-1.15,4.42-5,2.78-1.75,9.22,1.83,5.56-1.25,1.38-5.74L355,196.5l4.83,0,10-7.57Z" transform="translate(-0.55 -48.23)" fill="#446ae5" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                <path id="UN" name="La Unión" onclick="modal-info()" class="modal-trigger" href="#modal2" d="M875.16,464.9,870,432l-.14-3.35.15-4.34.87.22,3.86,1.7,4,1.36,4.52.52h1.33l1.37-.31,1.72-1,.76-1.19,1.4-18.45-.28-2.6-1.21-2.19-.49-1.73-1.5-30.92-.41-.93-1.24-1.87-5.16-5.2-1.34-1.85-2.81-7.06-2.56-10.49-.22-2.82.21-1.79.65-.76,1.54-1.37,1.75-2.24,1.15-2.2.08-1.45-.31-1.37-2.9-5.6-3-12.54-.38-5.35,1.83-4.2,9.49-16.17,1.92-5.14-1.07-8,3.91-26-.15-11.65-.9-9.94-1.67-7.93-1-2.45-1.22-1.78-.71-.87-2.38-1.93-.68-.77-.94-2.35-4-25.55-3.41-11.53-3.29-6.44-3.08-7.81,2.35,0,6.83,2.57,2.91.17,1.64-1.39,4.27-5.16,2.88-1.77,4.07-.6,8.25-.21,3.86-1.07,3.27-3.7,2.38-4.94,3.23-4.31,6-1.55,4.46,2.07,6.35,10.05,4.43,4.23,2.33.81,6.14.88,2.75.82,21.19,11.34,7.68,1.35-2.28,6.76-3.88,20.65-.52,7.29,4.17,6.24-1,4.95-3.15,4.7-2.37,5.86.18,7.65,3.85,15.33.71,7.73-4.41,25.58.22,11.94,6.32,8.52,4.55.62,7.85-4.73L988,294l3.93,2.91,3.16,4.52,1.93,5.41.3,5.47-5.16,9.46-28.45,21.65-3.85-1.19-2.81-3-5-8.2-6.9,22.25-.3,12.37,8.55,3.41,5.1.8,16.26,9.88,8.75,3.37,1.13,2.31,1.14,5.07-1.25,9.5-6.58,8.14L951.36,430l-6.65,8.26.12,6.94,10.71,4.36L942,456.05l-56.28,8.62-10.61.23Z" transform="translate(-0.55 -48.23)" fill="#446ae5" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                <path id="MO" name="Morazán" onclick="modal-info()" class="modal-trigger" href="#modal2" d="M864.15,154.38l3.08,7.81,3.29,6.44,3.41,11.53,4,25.55.94,2.35.68.77,2.38,1.93.71.87,1.22,1.78,1,2.45,1.67,7.93.9,9.94.15,11.65-3.91,26,1.07,8-1.92,5.14-9.49,16.17-8.91.46-4.13,1.23-14.62,8.4-3,1-2,.14-.74-.55-1.51-1.71-1.12-.88-1.65-1-6.76-2.28-1-.39-1.47-1.52-2.74-7.18-1.19-2.09-2.08-2.4L818.12,290l-1.68-.65-1.57-.16L799.53,294l-2.13,1-1.87,1.24-2.78,2.67-2.09,1.19-.79-.33-.18-.78.29-1,1.62-3.75.17-1.06-.14-1.1-.83-.94-1.17-.66-3.25-1.22-1.91-1.21-1.16-2-.46-1.13-1.15-1.48-1.9-1.62-4.54-2-1.79-1.14-1.25-2.38-1.83-1.74-6.1-3.45-2.69-2L760,267.62l-3-10.29-.24-1.07.8-1.92,11-12.52,1.64-1.39,2.86-1.87,1.37-1.64.51-.93,0-1.24-.35-1.56-1.23-2.29-1.45-1.42-1.19-.76-17.47-7-2.8-1.52-1.81-1.23-1.07-2-1.09-4-.13-2.43.16-1.57,1.13-2.71,1.28-1.62,1-1.87.34-2.13,0-1.24-.64-2.42-2.06-3.23L745.37,191l-1.08-1.6-.4-1.34-1.43-3.16-7.3-10.15-2.82-2.54.9-3.28,2-3.52,4.42-3.14,3.64-.2,2.41-1.15.68-6.1-.95-1-4.35-2.51L739.87,150l-2.23-8.11-.13-1.51,3.67-2.36,6.2-.67,11.16,0L765,136l20.41-7.24L796.11,127l5.56,2.85,9.29,14,7.43,5.71,8.95,5.17,8.31,6.44,5.62,9.5,16.29-13.29,5.68-3h.92Z" transform="translate(-0.55 -48.23)" fill="#3654b7" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                <path id="SM" name="San Miguel" onclick="modal-info()" class="modal-trigger" href="#modal2" d="M873.27,300.63l-1.83,4.2.38,5.35,3,12.54,2.9,5.6.31,1.37-.08,1.45-1.15,2.2-1.75,2.24L873.52,337l-.65.76-.21,1.79.22,2.82,2.56,10.49,2.81,7.06,1.34,1.85,5.16,5.2L886,368.8l.41.93,1.5,30.92.49,1.73,1.21,2.19.28,2.6-1.4,18.45-.76,1.19-1.72,1-1.37.31h-1.33l-4.52-.52-4-1.36-3.86-1.7-.87-.22-.15,4.34L870,432l5.12,32.88-2.94.15-2.73.61-2.66,1.83-31.14-23.25-1.16-.15-2.41.23-10.56,4.11-1,0-1-.61-.56-2,.07-2.89,1.8-6.14-.56-1.11-1.16-1.07-3-.87-1.85-.92-1.3-1.24-1.48-6.13-.36-1.15-.67-1.18-1-1.12-1.6-1.18-1.8.2-1.22.48-3.37,2.8-1.75,1.32-2.25.92-2.28-.1-3.77-1.72-1.06-.17-2.24.5-1.35-.52-2-1.29-4.45-3.41-2.44-1.3-2.07-.56-8.12.8h-2.26l-3.33-.69-1.82-.82-3.64-3-5.47-5.64L748,404.76l-3.81-6.93-1.31-3.09-.74-2.4-.49-2.66-.58-1.2-.83-.94-1.79-.21-1.7,1.1-.68.15-.69-.36-.77-1.16-3-7.42-.69-2.61L729,371.62l-.45-2.46.05-1.14.51-.93,1.27-.28,2,1.19.8-.08.43-.81.15-1.16-.47-2.56-.57-2.54,0-2.45.78-2,1.71-2.43.23-1.28,0-1-.55-1.52L732,345l-.77-2.08-.37-1.66.16-3.42-.24-1.07-.91-1.33-7.2-9.25L721.7,324l-.64-2.42-.09-1.31.34-2.13.41-.91.87-.71,2-1.16.87-.71.82-1.82.15-1.16,0-1.12-.55-1.52-1-1.53-1.73-2.69-1.57-3.34-.35-2.48.75-5.8-.26-1.17-1.61-.77-2.61-.23-10.12,1-3.36-.37-4-1.77-3.42-2-4.5-4.53L689,280.78l-4.94.8-16,5.53-6.21-6.19-15.19-9.71-3.26-9.52-.12-.08,2.09-8.05,2.51-6.61-2.17-5.56,3.68-3.69,1.89-4.83-.51-5-3.6-4.62,1.94-2.79,10.6-3,6.49-6.27,6.62-4.76,15.39-7.24,3.95-.68,6.91,1.11,3-.27.2-1.38-.55-2.44-.28-2.6.94-1.75,2.59-.79,3.35-.14,3.42.16,2.8.6,1.65-5.9,3.94-2.52,4.79-1.48,4.06-2.45,2.52-3.84.84-2.65,2.82,2.54,7.3,10.15,1.43,3.16.4,1.34,1.08,1.6,2.26,2.77,2.06,3.23.64,2.42,0,1.24-.34,2.13-1,1.87-1.28,1.62-1.13,2.71-.16,1.57.13,2.43,1.09,4,1.07,2,1.81,1.23,2.8,1.52,17.47,7,1.19.76,1.45,1.42,1.23,2.29.35,1.56,0,1.24-.51.93-1.37,1.64-2.86,1.87-1.64,1.39-11,12.52-.8,1.92.24,1.07,3,10.29,1.59,1.59,2.69,2,6.1,3.45,1.83,1.74,1.25,2.38,1.79,1.14,4.54,2,1.9,1.62,1.15,1.48.46,1.13,1.16,2,1.91,1.21,3.25,1.22,1.17.66.83.94.14,1.1-.17,1.06L790,298l-.29,1,.18.78.79.33,2.09-1.19,2.78-2.67L797.4,295l2.13-1,15.33-4.77,1.57.16,1.68.65,2.26,1.85,2.08,2.4,1.19,2.09,2.74,7.18,1.47,1.52,1,.39,6.76,2.28,1.65,1,1.12.88,1.51,1.71.74.55,2-.14,3-1,14.62-8.4,4.13-1.23,8.91-.46Z" transform="translate(-0.55 -48.23)" fill="#3654b7" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                <path id="SV" name="San Vicente" onclick="modal-info()" class="modal-trigger" href="#modal2" d="M643.38,261.69l3.26,9.52,15.19,9.71,6.21,6.19-21.12,24.21L646.3,319l-4.09,9.63-6.94,7-9.34-.06-8.4,16.95.1,2.74-6.39,2.56-1.5,3.82,1.85,12.81-.68,13-10.49,39.14-.67,4.76.21,5.49,2.4,13-.44,3.07-5.49,8.41L594,467.7l-1.41,5.13-3.13,3.88-7.64,2.94-4.37,2.93-2.11,4.78-.25,6.2.2.88L568.79,493l-1.73-12.73,0-1.24.42-2.25.8-1.92,1.28-1.62,1.54-1.37,2.76-1.85,3.29-2.69.65-.76,1.11-1.89.27-1.09-.33-2.39-5.64-16.47-.37-2.58L573,441l.8-1.92,2-2.4.44-2.15,0-2.45-.09-1.31-.78-1.67-1.46-1.93-3.4-2.82-3.32-2-4-1.36-2.88-1.4L557,417.25l-1-1.53L555,413.52l-2.2-7.09-.34-2-.54-11.56.15-2.08,1.12-9.17.06-2.47-.59-2.63-.94-2.35-14.72-19L535.57,354l-3.39-.47-1.92.12-1.64.47-9,5.19-2.49.76-1.21.07-1.15-1.48L513.66,356l-1.07-7L511,342.11l-4.86-7.52,6.08-9.46.57-1.56.54-2.17.08-6.06,2.9-21.35-2.08-12,.5-1.44.75-1.7,2.66-.49,2.45,0,4.52.52,2.62-1.1,3.62-2.14,11.24-8.36,2.48-1.27,3.08,0,2.39-.33,1.17-1.18,1.06-1.67,1.34-3.17,1.29-1.11,1.34-.4,6.7,2.9,2.06.05,2.9-.34,12.86-3,2.74-.1,5.53-.93,4.66-.23,1,.29,8.64,3.8,1.09.27,4.64.6,3,1,1.09.27,3,0,1.2.34.8.84,1,2.13,1.32,1.75.93.51,1.57.16,10.43-1,4,.12,5.55-5.86Z" transform="translate(-0.55 -48.23)" fill="#446ae5" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                <path id="US" name="Usulután" onclick="modal-info()" class="modal-trigger" href="#modal2" d="M866.82,467.49l-3.48,2.32-34.08,10.72-38.45,2.68-9.06,5.31-5.47-.62-6.14,0-.59-2.63,8.94-2.62-.84-6.47-6.55-6.83-8.58-3.51,2.38,2.85,6.29,5.66,2.79,3.78-14.65,2.77-7,2.28-5.46,4,4.28.78,3-1.19,3.56-1.93,5.64-1.37.68,3-8.49,6-10.41,2L736,491.39l-4.71-9.6,4.39.86,1.7.75,4.29-6.91-.57-2.54-7.63-1.57-9.92-9-5.77-2,2.7,5.65,3.34,4.38L726,475.5l-.79,4.69-6.6-2-17.94-.49-8.31-2.34L683,464.94l-3.56-1.25-4.77.66-13.86.34L655,466l-15.62,6.68-22.58,5.78-4.5,3.26,3.24,1.63,3.28.9,3-.17,2.37-1.76,11.91.1,31.51-10.76,3.74-.22,5.81,1.67,3.42,2,6.35,5,4,1.77.7,3.12-7.8.42-5.7.15-12.81-.92.63,2.83,34.51-.57,18.42,1.71,9.51,5.86-1.71,5.61-7.48.45-9-2.5-6.17-2.82-6.63-1.69-108.15,4-14-3.11-.2-.88.25-6.2,2.11-4.78,4.37-2.93,7.64-2.94,3.13-3.88L594,467.7l2.46-6.39,5.49-8.41.44-3.07-2.4-13-.21-5.49.67-4.76,10.49-39.14.68-13-1.85-12.81,1.5-3.82,6.39-2.56-.1-2.74,8.4-16.95,9.34.06,6.94-7L646.3,319l.63-7.72L668,287.11l16-5.53,4.94-.8,3.14,2.58,4.5,4.53,3.42,2,4,1.77,3.36.37,10.12-1,2.61.23,1.61.77.26,1.17-.75,5.8.35,2.48,1.57,3.34,1.73,2.69,1,1.53.55,1.52,0,1.12-.15,1.16-.82,1.82-.87.71-2,1.16-.87.71-.41.91-.34,2.13.09,1.31.64,2.42.92,2.25,7.2,9.25.91,1.33.24,1.07-.16,3.42.37,1.66L732,345l2.88,5.09.55,1.52,0,1-.23,1.28-1.71,2.43-.78,2,0,2.45.57,2.54.47,2.56-.15,1.16-.43.81-.8.08-2-1.19-1.27.28-.51.93-.05,1.14.45,2.46,1.93,5.41.69,2.61,3,7.42.77,1.16.69.36.68-.15,1.7-1.1,1.79.21.83.94.58,1.2.49,2.66.74,2.4,1.31,3.09,3.81,6.93,3.23,3.89,5.47,5.64,3.64,3,1.82.82,3.33.69h2.26l8.12-.8,2.07.56,2.44,1.3,4.45,3.41,2,1.29,1.35.52,2.24-.5,1.06.17,3.77,1.72,2.28.1,2.25-.92,1.75-1.32,3.37-2.8,1.22-.48,1.8-.2,1.6,1.18,1,1.12.67,1.18.36,1.15,1.48,6.13,1.3,1.24,1.85.92,3,.87,1.16,1.07.56,1.11-1.8,6.14-.07,2.89.56,2,1,.61,1,0,10.56-4.11,2.41-.23,1.16.15,31.14,23.25Z" transform="translate(-0.55 -48.23)" fill="#253c72" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                <path id="CH" name="Chalatenango" onclick="modal-info()" class="modal-trigger" href="#modal2" d="M556.18,171.28l-17.91,7-7.49,5.88-2.11,4.78-2.25,2.76-4.3,3.22-22.85,13.73-5.52,3.7-5.26,2.61-10.76,1.39L466,219.27l-6.79.8-6.79-1-7.09,2.2-9.6-2.15-1.68-.65-2.23-1.24L429,214.56l-1.6-2.1-1.1-1.7-.87-2.06-.24-1.07-.1-1.82-.27-.76-1-1-11.14-8.57-2.58-2.8-.76-.65-7.92-3.35-3.52-2-2.29-.61-11.17-1.39-5.57-1.52-2.66.49L369.84,189l-10,7.57-4.83,0-6.69-3.32L347,198.93l-5.56,1.25-9.22-1.83-2.78,1.75-4.42,5-1.48,1.15-2.92.24-4.3-.88-1.36-.11-6.76.49-8.24-2.46-4.3,0-3.32,3.92-3.17,2.76-4.56,2-3,2-.63,3.11-1.12,3.22-4.5,2.34-6,1.33-6.29.28-5.43-3.19-3.16-8.62,1.74-28.37,7.62-1.2,1.75-1.32.61-1,.67-1.58,2.76-9.64,1.28-1.62.89-.61,2-1,4.13-1.23,1.22-.48,1.9-1.14,1.49-1.56,1.06-1.67L289,147.87l.34-2.13-.15-1.6-1.42-4.5-1.88-8.39,13.67-9.42,2.62-4.79-.32-8.74,1.8-16.19-8.37-3L292.75,87l-1.05-.58L285,84.6l-1.73-.84-1.08-.68-2.43-2.63-2.07-2.82-.66-.67-3.31-2.43L255.14,63.64l16.16-1.06,13.82,3.15,21.5-.11,11.77,4.95L338.27,72l3-4.37,3.24-12.51L347,51l3.29-1.76,2.45,0,2.46,1.39,2.94,2.62,2.9,3.35,1.8,3.9.55,4.28-.64,4.45,5.48,3,14-1.4,7.16,1.78,3.77,4.48,4.43,12.43,2.69,3.29,11.9,5.53,4.71,3.66,5,5.34,2.72,4.82,1.79,5.24,2.25,4.11,4.2,1.82,3.71-1.75,4.15-3.9,5-3.69,6.36-1.32,11.4,4.21,10.78,8.75,8.83,11,5.26,11.12,6.81-2.55,17.95-2.69,4.37-2.93,3.63-3.48,3.43-1.18,3.88,4,1.28,7.09-.89,7.47,1,5.82,7.28,2.77,8.85-.75,2.1.25,3.4,1.9,2.66,2.27,1.67,3.32.38,2.17Z" transform="translate(-0.55 -48.23)" fill="#253c72" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                <path id="SA" name="Santa Ana" onclick="modal-info()" class="modal-trigger" href="#modal2" d="M255.14,63.64l18.63,10.89L277.08,77l.66.67,2.07,2.82,2.43,2.63,1.08.68,1.73.84,6.65,1.79,1.05.58,2.52,2.1,8.37,3-1.8,16.19.32,8.74-2.62,4.79-13.67,9.42,1.88,8.39,1.42,4.5.15,1.6-.34,2.13-5.38,12.58-1.06,1.67-1.49,1.56-1.9,1.14-1.22.48-4.13,1.23-2,1-.89.61-1.28,1.62-2.76,9.64-.67,1.58-.61,1-1.75,1.32-7.62,1.2-1.74,28.37,3.16,8.62,5.43,3.19,6.29-.28,6-1.33,4.5-2.34.75,23.92.67,6.2.38,1.25,1.21,8.13-.2,1.38L282,262.8l-1.83,1.44-3.86,1.07-.79.59-2.06,5.89L272.25,273l-1,.44-2.14.07-.93.41-.75.78-.51.93,0,2.45,2,11.23,2,7.35,1.31,9-2.79,20.92.73,11.93-19.93.68-5.57-.6-1.54-1.4-3.82-5.6-6.39-3.79-10-4.42-4.33-1.49-3-.56-1.13.46-1.16,1.69-.68,2L212,328.7l0,2.45.83,3.71-.07,1-.66,1.17-1.31,1L208,339.43l-1.94,0-1.38-.2-1.89-1.11-1.48-2L200.07,335l-2.29-1.54-2.62.18-1.47-.59-.68-.77-.14-1.1.8-1.92,1.28-1.62.8-1.92-.13-2.43-.87-2.06-2.51-2.51-2.94-1.7-2.74-2.15-1.92-2.64-1.54-1.4-8-5-2.71-1.13-2.07-.56-2.49.76-2,1.07-3.59.91-9.89-.24,1.79-29.51-.51-7.78L151.73,267l-1.81-1.23-1.85-.92-1.77-1-1.41-1.73L143.26,259l-1.56-1.49-1.75-.94-8.37-3-3.62-.62-4-5.46-1.11-3.13.43-3.58,10.33-34.39,6-10.67,8.4-10.08,9.54-7.26,40.81-20,2-3.23-1.54-6.42-1.66-1.47-5.64-1.4-2.15-1.36L188,141.82l-2.2-6.17-.93-1.84-3.33-3.87-1.52-1.3-2.85-1.72-3-.66-8.63.81-3.87-5.38,1.67-4,3.34-3.82,1.62-4.67-2.24-4.52-3.87-3.54-2.81-4.29,1.17-7.13,4.79-5.58,6-.82,5.4,3.5,2.9,7.45,4.59-5.13,7.24-14.33,6.44-4.62,6.62-.66,5,1.43,5,.63,6.06-2.69,6.93-11.6,3.75-2.48,2.38,7.87L235,59.14l.17-1.06,13.61,5.86,6.39-.31Z" transform="translate(-0.55 -48.23)" fill="#446ae5" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
            </svg>
        </div>
        <div id="modal2" class="modal">
            <div class="modal-content">
            </div>
            <div class="modal-footer">
                <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
            </div>
        </div>
    </section>
    <!-- Productos destacados -->
    <section>
        <h1 class="center-align slider-text margin">Productos Destacados</h1>
        <!-- Agregados recientemente -->
        <article>
            <div class="row margin">
                <div class="col s12 m6 push-m1">
                    <h5>Agregados recientemente</h5>
                </div>
                <div class="col s12 m4">
                    <h5><a href="">Ver más</a></h5>
                </div>
            </div>
            <!-- Cada una de las cartas de los diferentes productos -->
            <div class="swiper-container producto">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="card small">
                            <div class="card-image ">
                                <img src="../../resources/img/commerce/3.1.png">
                            </div>
                            <div class="card-content">
                                <h6>Pintura de frutas de madera</h6>
                                <p style="font-size: 1.5rem;">$12</p>
                                <a onclick="addProduct(7,465,6.00)"  class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add_shopping_cart</i></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card small">
                            <div class="card-image">
                                <img src="../../resources/img/commerce/3.1.png">
                            </div>
                            <div class="card-content">
                                <h6>Pintura religiosa</h6>
                                <p style="font-size: 1.5rem;">$340</p>
                                
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card small">
                            <div class="card-image ">
                                <img src="../../resources/img/commerce/3.1.png">
                            </div>
                            <div class="card-content">
                                <h6>Pintura de frutas de madera</h6>
                                <p style="font-size: 1.5rem;">$12</p>
                                
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card small">
                            <div class="card-image">
                                <img src="../../resources/img/commerce/3.1.png">
                            </div>
                            <div class="card-content">
                                <h6>Pintura religiosa</h6>
                                <p style="font-size: 1.5rem;">$340</p>
                                
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card small">
                            <div class="card-image ">
                                <img src="../../resources/img/commerce/3.1.png">
                            </div>
                            <div class="card-content">
                                <h6>Pintura de frutas de madera</h6>
                                <p style="font-size: 1.5rem;">$12</p>
                                
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card small">
                            <div class="card-image">
                                <img src="../../resources/img/commerce/3.1.png">
                            </div>
                            <div class="card-content">
                                <h6>Pintura religiosa</h6>
                                <p style="font-size: 1.5rem;">$340</p>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Paginación de los productos -->
                <div class="swiper-pagination prod"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
            <!-- Botones para el control deslizante de los productos -->

        </article>
        <!-- Camisas personalizadas-->
        <article>
            <div class="row margin">
                <div class="col s12 m6 push-m1">
                    <h5>Agregados recientemente</h5>
                </div>
                <div class="col s12 m4">
                    <h5><a href="">Ver más</a></h5>
                </div>
            </div>
            <!-- Cada una de las cartas de los diferentes productos -->
            <div class="swiper-container producto">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="card small">
                            <div class="card-image ">
                                <img src="../../resources/img/commerce/3.1.png">
                            </div>
                            <div class="card-content">
                                <h6>Pintura de frutas de madera</h6>
                                <p style="font-size: 1.5rem;">$12</p>
                                
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card small">
                            <div class="card-image">
                                <img src="../../resources/img/commerce/3.1.png">
                            </div>
                            <div class="card-content">
                                <h6>Pintura religiosa</h6>
                                <p style="font-size: 1.5rem;">$340</p>
                                
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card small">
                            <div class="card-image ">
                                <img src="../../resources/img/commerce/3.1.png">
                            </div>
                            <div class="card-content">
                                <h6>Pintura de frutas de madera</h6>
                                <p style="font-size: 1.5rem;">$12</p>
                                
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card small">
                            <div class="card-image">
                                <img src="../../resources/img/commerce/3.1.png">
                            </div>
                            <div class="card-content">
                                <h6>Pintura religiosa</h6>
                                <p style="font-size: 1.5rem;">$340</p>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Paginación de los productos -->
                <div class="swiper-pagination prod"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
            <!-- Botones para el control deslizante de los productos -->

        </article>
        <!-- Botón para ver más productos-->
        <div class="container margin">
            <div class="row">
                <div class="col s12 center-align">
                    <a class="waves-effect waves-light btn-large"><i class="material-icons right">chevron_right</i>Ver más productos</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Sección de Noticias -->
    <section>
        <h1 class="center-align">Noticias</h1>
        <h5 class="center-align">Conoce las últimas novedades que Cuzcatlán tiene para ti.</h5>
        <div class="container noticias">
            <!-- Cada una de las cartas de noticias -->
            <div class="row" id= "noticias-index">
               
            </div>
            <!-- Botón para ver más noticias -->
            <div class="row">
                <div class="col s12 center-align">
                    <a href="noticias.php" class="waves-effect waves-light btn-large margin"><i class="material-icons right">chevron_right</i>Ver más noticias</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Prueba -->
    
</main>

<?php
Commerce::FooterTemplate('index.js');
?>