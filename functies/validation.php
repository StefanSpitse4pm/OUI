<?php 


function passwordValidation($password, $repeatPassword, $minlength = 8):mixed {
    $pattern = '/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[\W_]).{8,}$/';
    if (!empty($password) && !empty($repeatPassword)) 
    {
        if ($password === $repeatPassword) {
            if (strlen($password) > 8) {
                if (preg_match($pattern, $password))
                {
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
