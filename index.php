<html>
    <head></head>
<body>
    <h1>Example 1</h1>
    <?php 
        $characters = [ 'Paul', 'Sally', 'Billy'];
    
        for ($x = 0; $x < count($characters); $x++){
            echo $x . " is the key and " .  $characters[$x] . " is the value in the " . '$character array <br>';
        }
    ?>
    
    <h2>Example 2</h2>
    <?php 
        $schools = [
            'Drexel University' => [
                'type' => 'University',
                'url' => 'https://drexel.edu'
            ],
            'Temple University' => [
                'type' => 'University',
                'url' => 'https://temple.edu'
            ],
            'UPenn' => [
                'type' => 'University',
                'url' => 'https://upenn.edu'
            ]
        ];
        
        foreach ($schools as $x => $x_values) {
            echo $x . " is a type " . $x_values[type] . " and the url is " . $x_values[url] . '<br>';
        }
    ?>
</body>
</html>