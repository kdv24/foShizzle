<?php
    class SnoopTranslator
    {
        function translate($input)
        {
            $input = "else";
            $stringtocheck = $input;
            $forbiddenword = "s";
            if (stripos($stringtocheck, $forbiddenword) !== false)
            {
                return $stringtocheck. ' contains the string '.$forbiddenword;
            }
        }
    }
?>
