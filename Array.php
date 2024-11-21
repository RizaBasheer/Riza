<!DOCTYPE html>
<html>
<head>
     <style>
      body {
             text-align: center;
            }
        </style>
    </head>
<body>
    
    <h1>Array Operations</h1>
    <form action="" method="post">
        <input type="radio" name="choice" value="display" required> Display Array<br />
        <input type="radio" name="choice" value="sort"> Sorted Array<br />
        <input type="radio" name="choice" value="dupli"> Without Duplicate<br />
        <input type="radio" name="choice" value="pop"> Delete Last<br />
        <input type="radio" name="choice" value="rev"> Array Reverse<br />
        <input type="radio" name="choice" value="search"> Array Search<br /><br />
        <input type="text" name="searchTerm" placeholder="Enter name to search (for search option)" /><br /><br />
        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_POST) {
        $names = array("Alice", "Bob", "Charlie", "David", "Eve", "Frank", "Grace", "Bob", "Mary", "Trent");
        $val = $_POST['choice'];
        echo "<h2>Result:</h2>";

        switch ($val) {
            case "display":
                echo "Original Array:<br>";
                foreach ($names as $name)
                    echo ($name) . "<br>";
                break;

            case "sort":
                sort($names);
                echo "Sorted Array:<br>";
                foreach ($names as $name)
                    echo ($name) . "<br>";
                break;

            case "dupli":
                $unique = array_unique($names);
                echo "Array Without Duplicates:<br>";
                foreach ($unique as $name)
                    echo ($name) . "<br>";
                break;

            case "pop":
                array_pop($names);
                echo "Array After Deleting Last Element:<br>";
                foreach ($names as $name)
                    echo ($name) . "<br>";
                break;

            case "rev":
                $reversed = array_reverse($names);
                echo "Array in Reverse Order:<br>";
                foreach ($reversed as $name)
                    echo ($name) . "<br>";
                break;

            case "search":
                $searchTerm = trim($_POST['searchTerm']);
                if ($searchTerm !== "") {
                    $position = array_search($searchTerm, $names, true);
                    if ($position !== false) {
                        echo "Position of '{$searchTerm}': " . $position+1;
                    } else {
                        echo "'{$searchTerm}' not found in the array.";
                    }
                } else {
                    echo "Please enter a name to search.";
                }
                break;
        }
    }
    ?>
</body>
</html>
