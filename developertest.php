<?php

    /*
        ADEBAYO OLAYINKA DAVID
        david4real_chris@yahoo.com
    */
    
    class UpdateStringValue
    {

        public function ProcessUpdate($Input)
        {
            //split up string to array
            $stringToArray = str_split($Input);

            //variable to hold the output string
            $Output = "";

            //count to to control two digits
            $count = 0; 

            //string to hold the value for two digits
            $data = "";

            //for through all the array from split string 
            for($index = 0; $index < sizeof($stringToArray); $index++)
            {        
                    //this check for the end of th array
                    if($index > sizeof($stringToArray)-4 && $index < sizeof($stringToArray)-1)
                    {
                        $data .= $stringToArray[$index];
                        if($count >= 1 )
                        {
                            $Output.= $data+1; 
                        }
                        //counter
                        $count++;
                        
                    }else{

                        //regular expression to check all digits
                        if(preg_match('/^\d+$/', $stringToArray[$index]))
                        {
                            //store data back to string output
                            $Output.= $stringToArray[$index]+=1;     
                        }else{
                            $Output.=$stringToArray[$index];        
                        }
                    }
                
            }

            //return value in output
            return $Output;
        }
    }


print $Input = '[0,{"a":1,"b":2,"c":3,"d":[4,5]},[6,[7,8]],9,10]';

print "<hr />";

//instantiate the class
$updateString = new UpdateStringValue();

print $updateString->ProcessUpdate($Input);

?>