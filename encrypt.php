<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=0.7">
        <title>Simple Encrypt/Decrypt</title>
        <style type="text/css">
                .centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
        </style>
</head>
<body>  

        <section class="centered">
                <h2>Simple Encrypt/Decrypt</h2>
                <form class="form-container" action="encrypt.php" method="get">
                    <div class="form-group">
                        <input type="text" name="en" placeholder="Insert some text" value="<?php echo $_GET['en']?>">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Encrypt</button><br><br>
                </form>
                <fieldset>
                        <legend>Result Encrypt here:</legend>
                        <p id="myInput">

                                <?php
                                if(isset($_GET['en'])){
                                $en = $_GET['en'];

                                // Store a string into the variable which
                                // need to be Encrypted
                                $simple_string = "$en\n";
                                  
                                // Display the original string
                                echo "<br> Original String: " . $simple_string;
                                  
                                // Store the cipher method
                                $ciphering = "AES-128-CTR";
                                  
                                // Use OpenSSl Encryption method
                                $iv_length = openssl_cipher_iv_length($ciphering);
                                $options = 0;
                                  
                                // Non-NULL Initialization Vector for encryption
                                $encryption_iv = '1234567891011121';
                                  
                                // Store the encryption key
                                $encryption_key = "YusaNishimori";
                                  
                                // Use openssl_encrypt() function to encrypt the data
                                $encryption = openssl_encrypt($simple_string, $ciphering,
                                            $encryption_key, $options, $encryption_iv);
                                  
                                // Display the encrypted string
                                echo "<br> Encrypted String: " . $encryption . "\n";
                                }
                                ?>
                                        </p>                    
                </fieldset>

                <br><br>
                <hr>
                <br><br>

                <form class="form-container" action="encrypt.php" method="get">
                    <div class="form-group">
                        <input type="text" name="de" placeholder="Insert some text" value="<?php echo $_GET['de']?>">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Decrypt</button><br><br>
                </form>
                <fieldset>
                        <legend>Result Decrypt here:</legend>
                        <p id="myInput">

                                <?php
                                if(isset($_GET['de'])){
                                $de = $_GET['de'];

                                // Store a string into the variable which
                                // need to be Encrypted
                                $simple_string = "$de\n";
                                  
                                // Display the original string
                                echo "<br> Encrypted String: " . $simple_string;
                                  
                                // Store the cipher method
                                $ciphering = "AES-128-CTR";
                                  
                                // Use OpenSSl Encryption method
                                $iv_length = openssl_cipher_iv_length($ciphering);
                                $options = 0;
                                  
                                // Non-NULL Initialization Vector for decryption
                                $decryption_iv = '1234567891011121';
                                  
                                // Store the decryption key
                                $decryption_key = "YusaNishimori";
                                  
                                // Use openssl_decrypt() function to decrypt the data
                                $decryption=openssl_decrypt ($simple_string, $ciphering, 
                                $decryption_key, $options, $decryption_iv);
                                  
                                // Display the decrypted string
                                echo "<br> Decrypted String: " . $decryption;
                                }
                                ?>
                                        </p>                    
                </fieldset>
                <div style="padding-top: 20px;">
                        <hr>
                        <p align="center">Build with &hearts;</p>
                </div>
                
</body>
</html>