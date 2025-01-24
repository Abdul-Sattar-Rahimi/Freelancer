function factorial($number) {
    if ($number < 0) {
        return "ورودی نامعتبر است. لطفا یک عدد صحیح غیر منفی وارد کنید";
    } elseif ($number === 0) {
        return 1;
    } 

else {
        $result = 1;
        for ($i = 1; $i <= $number; $i++)
        {
            $result *= $i;
        }
        return $result;
    }
}


$inputNumber = 5;
echo "The factorial of $inputNumber is: " . factorial($inputNumber);
