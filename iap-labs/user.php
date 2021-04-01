<?php
    include_once "./account.php";
    class USER implements Account
    {
        protected $id;
        protected $fullName;
        protected $email;
        protected $password;
        protected $cityOfResidence;
        protected $profile;

        function __construct($user,$pass)
        {
            $this->email=$user;
            $this->password=$pass;
        }
        public function setFullName ($name)
        {   
            $this->fullName = $name;       
        }
        public function getFullName ()
        {        
            return $this->fullName;       
        } 
        public function setEmail ($emailAdd)
        {   
            $this->email = $emailAdd;       
        }
        public function getEmail ()
        {        
            return $this->email;       
        } 
        public function setPassword ($passworde)
        {   
            $this->password = $passworde;   
        } 
        public function getPassword ()
        {        
            return $this->password;       
        } 
        public function setCityOfResidence ($city)
        {   
            $this->cityOfResidence = $city;       
        }
        public function getCityOfResidence ()
        {        
            return $this->cityOfResidence;       
        } 
        public function setProfile ($profilePhoto)
        {   
            $this->profile = $profilePhoto;       
        }
        public function getProfile ()
        {        
            return $this->profile;       
        } 
        public function register ($pdo)
        {           
            $passwordHash = password_hash($this->password,PASSWORD_DEFAULT);     
            try 
            {  
                session_start(); 
                $stmt = $pdo->prepare ('INSERT INTO users (full_name,email,user_password,city_of_residence,profile_pic) VALUES(?,?,?,?,?)');
                $stmt->execute([$this->getFullName(),$this->email,$passwordHash,$this->cityOfResidence,$this->profile]);
                $_SESSION["name"]=$this->getFullName();   
            } 
            catch (PDOException $e) 
            {            	
                return $e->getMessage();        
            }                   
        }
        public function login ($pdo)
        {            
            try 
            {  
                session_start();
                $stmt = $pdo->prepare("SELECT user_password,full_name,user_id FROM users WHERE email=?");
                $stmt->execute([$this->email]);   
                $row = $stmt->fetch();  
                if($row == null)
                {
                    return "uee";//user exist error
                }          
                if (password_verify($this->password,$row['user_password']))
                {       
                    $_SESSION["name"]=$row["full_name"];   
                    $_SESSION["id"]=$row["user_id"];    
                    return "sl";
                }                
                return "ip";
            } 
            catch (PDOException $e) 
            {     
                return $e->getMessage();
            }   
        } 
        public function changePassword($pdo)
        {
            $passwordHash = password_hash($this->password,PASSWORD_DEFAULT);     
            try 
            {   
                $stmt = $pdo->prepare ('UPDATE user_password where full_name=?');
                $stmt->execute([$this->$_SESSION["name"],$passwordHash]);  
                return "Update was successful";
            } 
            catch (PDOException $e) 
            {            	
                return $e->getMessage();        
            }       
        } 
    }
?>