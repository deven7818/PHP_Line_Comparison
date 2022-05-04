<?php

/**
 * Uc-3
 * Program for Line Comparison computation
 * from co-cordinates calculate length
 * Compare two line using end points
 * comparing two lines and checking lines are equals, greater or less than other 
 */
class LineComparision
{

    //function for welcome message
    function welcome()
    {
        echo "Welcome to Line Comparison Computation Program\n";
    }

    //declaring variables
    public $x1;
    public $x2;
    public $y1;
    public $y2;

    //function to get user input values
    function userInput()
    {
        $this->x1 = readline("Enter Value for x1 : ");
        $this->y1 = readline("Enter Value for y1 : ");
        $this->x2 = readline("Enter Value for x2 : ");
        $this->y2 = readline("Enter Value for y2 : ");
    }

    //function to calculate length from the formula
    function calculateLength()
    {
        $this->userInput();
        $this->val1 = pow(($this->x2 - $this->x1), 2);
        $this->val2 = pow(($this->y2 - $this->y1), 2);
        $this->result = sqrt($this->val1 + $this->val2);
        echo "\nresult is : " . $this->result;

    }
    //Function to compare two line are equals are not
    function lineCompare(){
         echo "\nEnter values for line 1";
         $this->line1 = $this->userInput();

        echo "\nEnter values for line - 2 :\n";
        $this->line2 = $this->userInput();

        if($this->line1 == $this->line2){
            echo "\nBoth lines are euqals";
        }else if($this->line1 > $this->line2){
            echo "\nLine 1 is greater than line 2.";
        }else {
            echo "\nLine 2 is greater than line 1";
        }

        
    }
}

$line = new LineComparision();
$line->welcome();
echo $line->calculateLength();

$line->lineCompare();
?>