<?php 
require __DIR__.'/../../../vendor/autoload.php';

    $app = require __DIR__ . '/../../../bootstrap/app.php';
?>
<!DOCTYPE html>
<html lang="en" data-theme="light">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Document</title>
        <link rel="stylesheet" href="style.css" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans|Libre+Franklin" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="/assets/plugins/global/plugins.bundle.css" />
        <link rel="stylesheet" type="text/css" href="/assets/css/style.bundle.css" />
</head>
    <body id="kt_body">



        <div class="container">
            <div class="row">
                <p>
                    
                    
                </p>
            </div>
        </div>
        <div class="app-header">
            <div id="settingsBar">
                <div id="speedBar">
                    <label for="speedTb">Hız: </label>
                    <input id="speedTb" name="speedTb" type="text" value="150" />
                </div>
                <p id="readCountLbl">0/0 words</p>
                <div>
                    <button id="pickerBtn" class="btn btn-sm fw-bold btn-primary">Read file</button>
                    <input id="picker" type="file" />
                    <button id="cancelBtn" class="btn btn-sm fw-bold btn-primary">Cancel</button>
                </div>
            </div>
        </div>
        <div>
            <img id="toggleReadBarBtn" alt="down-arrow" src="img/down-arrow.png" />
            <div id="readBar" class="text-center navbar-fixed">
                <textarea id="searchTb" placeholder="What text do you want to speed read?">
                     <?=$_REQUEST['kelime']?>
                </textarea>
                <br>
                <button id="readBtn" class="btn btn-sm fw-bold btn-primary">Read</button>
            </div>
            <div class="container-fluid" style="display: flex; justify-content: center; align-items: center; padding-top: 100px;">
                <div id="readView" class="row">
                    <p id="wordLbl">Hızlı Okuma</p>
                </div>
            </div>
        </div>
        <script src="/assets/plugins/global/plugins.bundle.js"></script>
        <script src="/assets/js/scripts.bundle.js"></script>
        <script src="script.js"></script>
        <script type="text/javascript">
            var hiz = <?=$_REQUEST["hiz"]?>;
            var sure = <?=$_REQUEST["sure"]?>;
            $(() => {
                $('#speedTb').val(hiz);
                localStorage.setItem("speedwpm", hiz); 
            })
            var defaultThemeMode = "light";
                var themeMode;
                var document = window.parent.document;
                if ( document.documentElement ) {
                    if ( document.documentElement.hasAttribute("data-theme-mode")) {
                        themeMode = document.documentElement.getAttribute("data-theme-mode");
                    } else {
                        if ( localStorage.getItem("data-theme") !== null ) {
                            themeMode = localStorage.getItem("data-theme");
                        } else {
                            themeMode = defaultThemeMode;
                        }
                    }
                    if (themeMode === "system") {
                        themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
                    }
                    document.documentElement.setAttribute("data-theme", themeMode);
                }
        </script>
    </body>
</html>
