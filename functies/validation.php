<?php 

function generalFieldValidation(string | bool $input, string $type, int|null $minlength = null,
                                int|null $maxlength = null,) :string|null {
    if (!empty($input)) {
        if ($input != "error") {
            if (!empty($minlength)) {
                if ($input >= $minlength) {
                    // happy path
                    return null;
                }
                else {
                    // shorter then minlength
                    return "<h2>$type has to be longer then $minlength charachters</h2>";
                }
            } else {
                return null;
            }
    } else {
            // email is invalid
            return "<h2>Email is invalid</h2>";
        }
        if (!empty($maxlength)) {
            if ($input <= $maxlength) {
                // happy path
                return null;
            } else {
                return "<h2>$type has to be shorter then $maxlength charachters</h2>";
            }
        }
    
        
        else {
            return null;
        }
    }
        
    else {
        return "<h2>$type cannot be empty.</h2>";
    }

}



function passwordValidation($password, $repeatPassword, $minlength = 8):string|null {
    $pattern = '/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[\W_]).{8,}$/';
    if (!empty($password) && !empty($repeatPassword)) 
    {
        if ($password === $repeatPassword) {
            if (strlen($password) >= $minlength) {
                if (preg_match($pattern, $password))
                {
                    // happy path
                    return null;
                } 
                else 
                {
                    return "<div class='error'>
                                <h2>A password must have: </h2>
                                <ul>
                                    <li>Must have a uppercase letter</li>
                                    <li>Must have a lowercase letter</li>
                                    <li>Must have a number</li>
                                    <li>Must have a special charachter</li>
                                </ul>
                            </div>";
                }
            } else 
            {
                return "<h2>Password must be longer then $minlength charachters.</h2>";   
            }
        }
        else {
            return "<h2>Passwords are not the same</h2>";
        }
    }

    else
    {
        return  "Password fields can not be empty";
    }
}
