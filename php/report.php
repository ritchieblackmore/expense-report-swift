<?php
class Problems {

    private $numbers;
    private $summary;
    
    public function __construct($numbers, $summary) {
        $this->numbers = $numbers;
        $this->summary = $summary;
    }
    
    public function a() {
        foreach ($this->numbers as $number) {
            $difference = $this->summary - $number;
            if (in_array($difference, $this->numbers)) {
                return $difference * $number;
            }
        }
    }

    function b() {
        
        foreach ($this->numbers as $firstNumber) {
            foreach ($this->numbers as $secondNumber) {
                $difference = $this->summary - ($firstNumber + $secondNumber);
                if (in_array($difference, $this->numbers)) {
                    return $firstNumber * $secondNumber * $difference;
                }
            }
        }
        return 0;
    }
}

// Read file and map it to an array as integers
$numbers = array_map('intval', file("expense_report.txt", FILE_IGNORE_NEW_LINES));

//Remove the first (BOM) value from the array
$remove = array_shift($numbers);

$problems = new Problems($numbers, 2020);

echo $problems->a();
echo "\n";
echo $problems->b();

?>
