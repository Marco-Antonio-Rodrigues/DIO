<html lang="en">

    <head>
        <title>Meu primeiro site em PHP! woohoo!</title>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <style type="text/css">
            .linha {
                font-weight: bold;
                color: green;
                padding-left: 10px;
                line-height: 50px;
            }
        </style>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>jQuery UI Accordion - Default functionality</title>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/resources/demos/style.css">
        <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
        <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
        <script>
        $( function() {
            $( "#accordion" ).accordion();
        } );
        </script>
    </head>    

    <body>
    <div id="accordion">
  <h3>Section 1</h3>
  <div>
    <p>
    <?php
            for ( $i = 0; $i < 10; $i++ ){
                print("<span class=\"linha\">linha número: ". $i . "</span><br />");
            }
        ?>
    </p>
  </div>
  <h3>Section 2</h3>
  <div>
    <p>
    <?php
            for ( $i = 0; $i < 10; $i++ ){
                print("<span class=\"linha\">linha número: ". $i . "</span><br />");
            }
        ?>
    </p>
  </div>
  <h3>Section 3</h3>
  <div>
    <p>
    <?php
            for ( $i = 0; $i < 10; $i++ ){
                print("<span class=\"linha\">linha número: ". $i . "</span><br />");
            }
        ?>
    </p>
    <ul>
      <li>List item one</li>
      <li>List item two</li>
      <li>List item three</li>
    </ul>
  </div>
  <h3>Section 4</h3>
  <div>
    <p>
    <?php
            for ( $i = 0; $i < 10; $i++ ){
                print("<span class=\"linha\">linha número: ". $i . "</span><br />");
            }
        ?>
        <?php
            for ( $i = 0; $i < 10; $i++ ){
                print("<span class=\"linha\">linha número: ". $i . "</span><br />");
            }
        ?>
    </p>
    <p>
    testando 5
    </p>
  </div>
</div>

    </body>
    <script type="text/javascript">
        $(document).ready(function(){
            alert("woohooo!");
        });
    </script>
</html>