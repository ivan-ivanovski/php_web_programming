<?php
    echo "for loops \n";
    echo "example: given array of n whole numbers. Calculate how many numbers from array are even and odd \n";
    # $numbers=[1,2,11,34,41,55,63,71,82,96,101];
    # 1. find how many elements are in array
    # 2. use for loop for iteration through array.
    # 3. check with if condition is current element odd or even, if is even count number of evens, or for odd count odd numbers
    # 4. exit loop for
    # 5. display or print number of even and odd numbers

    $numbers=[1,2,11,34,41,55,63,71,82,96,101];

    $countEven=0;
    $countOdd=0;

    $arraySize=count($numbers);

    for($el=0;$el<$arraySize;$el++){
        #check number of position in array if
        if($numbers[$el]%2==0){
            $countEven++;
        }
        else{
            $countOdd++;
        }
    }

    echo "Total number of even numbers is ".$countEven;
    echo "\n";
    echo "Total number of odd number is ".$countOdd;