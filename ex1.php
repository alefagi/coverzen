<!-- 1. Realizza uno script PHP che ricostruisca e stampi a video le prime parole del "Lorem Ipsum" contenute negli elementi del seguente array:
  ```php
  $array = [
    "Lorem",
    "ipsum",
    [
        "dolor",
        [
            "sit",
            "amet",
        ],
        "consectetur"
    ],
    [
      "adipiscing"
    ],
    "elit"  
  ];
-->
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex1</title>
  </head>
  <body>
    <h1>Esercizio 1</h1>
    <?php
      $array = [
        "Lorem",
        "ipsum",
        [
            "dolor",
            [
                "sit",
                "amet",
            ],
            "consectetur"
        ],
        [
           "adipiscing"
        ],
        "elit"  
      ];
    ?>
    <p>
      <?php
        foreach($array as $value) {
          if (is_string($value)) {
            echo $value . " ";
          }
          else {
            foreach($value as $sub_value) {
              if (is_string($sub_value)) {
                echo $sub_value . " ";
              }
              else
              echo implode(" ", $sub_value) . " ";
            }
          }
        }
      ?>
    </p>
  </body>
  </html>