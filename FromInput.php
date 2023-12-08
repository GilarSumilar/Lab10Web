    <?php
    include("from.php");
    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mahasiswa</title>
        <style>
            .container {
                flex-direction: column;
            }

            body {
                font-family: sans-serif;
                background-color: #f4f4f4;
                margin: 0;
                padding: 0;
                display: flex;
                justify-content: center;
                align-items: center;
                min-height: 100vh;
            }

            form {
                background-color: #fff;
                border-radius: 10px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                padding: 20px;
                width: 300px;
                text-align: center;
            }

            h3 {
                color: #333;
            }

            label {
                display: block;
                margin: 10px 0 5px;
            }

            input {
                width: 100%;
                padding: 8px;
                margin-bottom: 10px;
                box-sizing: border-box;
            }

            input[type="submit"] {
                background-color: #21f6ff;
                color: black;
                border-radius: 10px;
                cursor: pointer;
            }

            input[type="submit"]:hover {
                background-color: #50d8de;
            }
        </style>
    </head>

    <body class="container">
        <h3>Silahkan Isi from berikut ini:</h3>

        <?php
        $form = new Form("", "Input Form");
        $form->addField("txtnim", "Nim");
        $form->addField("txtnama", "Nama");
        $form->addField("txtalamat", "Alamat");
        ?>
        <?php $form->displayForm() ?>
    </body>

    </html>