   public function stworz_blankietAction(\app\library\_PajaxRequest $request) 
   {
       try
          {      

            if($request->isSetParam('nr_rachunku'))
            {
                
              $tytul_przelewu    = strtoupper($request->getString('tytul_przelewu'));
              $tytul_przelewu2   = strtoupper($request->getString('tytul_przelewu2'));
              $odbiorca          = strtoupper($request->getString('nazwa_odbiorcy'));
              $odbiorca_cd       = strtoupper($request->getString('nazwa_odbiorcy_cd'));
              $numer_r           = strtoupper($request->getString('nr_rachunku'));
              $kw                = strtoupper($request->getString('kwota'));
              $kwota_slownie     = mb_strtoupper($request->getString('kwota_slownie'));                               
              $nadawca           = mb_strtoupper($request->getString('nazwa_nadawcy'));                               
              $nadawca_cd        = mb_strtoupper($request->getString('nazwa_nadawcy_cd')).'';                               
              $nadawca_cd2       = mb_strtoupper($request->getString('nazwa_nadawcy_cd2')).'';                               
              $blankiet          = $request->isSetParam("blankiet");                            

            }else{
                
              $tytul_przelewu    = '';
              $tytul_przelewu2   = '';
              $odbiorca          = '';
              $odbiorca_cd       = '';
              $numer_r           = '';
              $kw                = '';
              $kwota_slownie     = '';                           
              $nadawca           = '';                            
              $nadawca_cd        = '';  
              $nadawca_cd2       = '';  
              $blankiet          = '';
            }
            
            /*
            else{
                
              $tytul_przelewu    = "Przelew na lekarza  ";
              $tytul_przelewu2   = "Przelew na lekarza2 ";
              $odbiorca          = "Kefi ";
              $odbiorca_cd       = "76-344 Warszawa ul. Sobieskiego 23 ";
              $numer_r           = "12345678901234567890123456";
              $kw                = "250.00";
              $kwota_slownie     = "dwieście pięćdziesiąt złotych i zero groszy";                               
              $nadawca           = "Tomasz Kowalski";                               
              $nadawca_cd        = "12-345 Bydgoszcz ul.tronowa 20"; 
              
            }*/

            if($blankiet == 1) $blankiet = "/app/view/image/blankiet_caritas.png"; else $blankiet = "/files/inne/blankiet_glowny.jpg";

            $jpg       = imagecreatefromjpeg($blankiet);
            $path      = $blankiet;
            $font_path = ('/files/inne/arial.ttf');
            $black     = imagecolorallocate($jpg, 0, 0, 0);
            
            //------------------------------------------------------------------
            //prawa strona
            
            if(strlen($tytul_przelewu) > 90) 
            {
                imagettftext($jpg,28,0,850,780, $black,$font_path, substr($tytul_przelewu,0,100) );
                imagettftext($jpg,28,0,850,820, $black,$font_path, substr($tytul_przelewu,100,200) );
            }else
            {
                imagettftext($jpg,28,0,850,780, $black,$font_path, $tytul_przelewu);
            }
            //------------------------------------------------------------------
            
            
            imagettftext($jpg,28,0,850,90, $black,$font_path,$odbiorca);
            imagettftext($jpg,28,0,850,190, $black,$font_path,$odbiorca_cd);
            
         if($request->isSetParam('nr_rachunku'))
         {
             
            $nr_rachunku = str_split( (string) $numer_r );
            
            //zamiana na stringi bo imagettftext nie przyjmuje tablicy
            $cyfra   = $nr_rachunku[0];
            $cyfra1  = $nr_rachunku[1];
            $cyfra2  = $nr_rachunku[2];
            $cyfra3  = $nr_rachunku[3];
            $cyfra4  = $nr_rachunku[4];
            $cyfra5  = $nr_rachunku[5];
            $cyfra6  = $nr_rachunku[6];
            $cyfra7  = $nr_rachunku[7];
            $cyfra8  = $nr_rachunku[8];
            $cyfra9  = $nr_rachunku[9];
            $cyfra10 = $nr_rachunku[10];
            $cyfra11 = $nr_rachunku[11];
            $cyfra12 = $nr_rachunku[12];
            $cyfra13 = $nr_rachunku[13];
            $cyfra14 = $nr_rachunku[14];
            $cyfra15 = $nr_rachunku[15];
            $cyfra16 = $nr_rachunku[16];
            $cyfra17 = $nr_rachunku[17];
            $cyfra18 = $nr_rachunku[18];
            $cyfra19 = $nr_rachunku[19];
            $cyfra20 = $nr_rachunku[20];
            $cyfra21 = $nr_rachunku[21];
            $cyfra22 = $nr_rachunku[22];
            $cyfra23 = $nr_rachunku[23];
            $cyfra24 = $nr_rachunku[24];
            $cyfra25 = $nr_rachunku[25];
             
             
             
            //edycja nr rachunku
            imagettftext($jpg,28,0,975,280, $black,$font_path,  ( $cyfra  ) );
            imagettftext($jpg,28,0,1030,280, $black,$font_path, ( $cyfra1 ) );
            imagettftext($jpg,28,0,1090,280, $black,$font_path, ( $cyfra2 ) );
            imagettftext($jpg,28,0,1145,280, $black,$font_path, ( $cyfra3 ) );
            imagettftext($jpg,28,0,1200,280, $black,$font_path, ( $cyfra4 ) );
            imagettftext($jpg,28,0,1260,280, $black,$font_path, ( $cyfra5 ) );
            imagettftext($jpg,28,0,1315,280, $black,$font_path, ( $cyfra6 ) );
            imagettftext($jpg,28,0,1375,280, $black,$font_path, ( $cyfra7 ) );
            imagettftext($jpg,28,0,1430,280, $black,$font_path, ( $cyfra8 ) );
            imagettftext($jpg,28,0,1485,280, $black,$font_path, ( $cyfra9 ) );
            imagettftext($jpg,28,0,1545,280, $black,$font_path, ( $cyfra10 ) );
            imagettftext($jpg,28,0,1600,280, $black,$font_path, ( $cyfra11 ) );
            imagettftext($jpg,28,0,1655,280, $black,$font_path, ( $cyfra12 ) );
            imagettftext($jpg,28,0,1715,280, $black,$font_path, ( $cyfra13 ) );
            imagettftext($jpg,28,0,1770,280, $black,$font_path, ( $cyfra14 ) );
            imagettftext($jpg,28,0,1830,280, $black,$font_path, ( $cyfra15 ) );
            imagettftext($jpg,28,0,1885,280, $black,$font_path, ( $cyfra16 ) );
            imagettftext($jpg,28,0,1940,280, $black,$font_path, ( $cyfra17 ) );
            imagettftext($jpg,28,0,2000,280, $black,$font_path, ( $cyfra18 ) );
            imagettftext($jpg,28,0,2055,280, $black,$font_path, ( $cyfra19 ) );
            imagettftext($jpg,28,0,2110,280, $black,$font_path, ( $cyfra20 ) );
            imagettftext($jpg,28,0,2170,280, $black,$font_path, ( $cyfra21 ) );
            imagettftext($jpg,28,0,2230,280, $black,$font_path, ( $cyfra22 ) );
            imagettftext($jpg,28,0,2285,280, $black,$font_path, ( $cyfra23 ) );
            imagettftext($jpg,28,0,2340,280, $black,$font_path, ( $cyfra24 ) );
            imagettftext($jpg,28,0,2395,280, $black,$font_path, ( $cyfra25 ) );
         }  
            //------------------------------------------------------------------
            
            $kwota = str_split( (string) $kw );
            
            //edycja kwoty
            
              $x = 1750 ;
                      
            foreach($kwota as $index => $row)
            {
               imagettftext($jpg,28,0,$x,380,$black,$font_path,$row);
                
               $x = $x + 58;
            }
            
            
            //------------------------------------------------------------------
            
            imagettftext($jpg,28,0,850,476, $black,$font_path,$kwota_slownie);
            imagettftext($jpg,28,0,860,576, $black,$font_path,$nadawca);
            imagettftext($jpg,28,0,860,676, $black,$font_path,$nadawca_cd);
            
            

            //------------------------------------------------------------------
            //lewa strona
             if(strlen($tytul_przelewu2) > 40) 
            {
                imagettftext($jpg,28,0,100,815, $black,$font_path, substr($tytul_przelewu2,0,39) );
                imagettftext($jpg,28,0,100,850, $black,$font_path, substr($tytul_przelewu2,39,78) );
                
            }else{
                imagettftext($jpg,28,0,100,855,$black,$font_path,$tytul_przelewu2);
            }

            //------------------------------------------------------------------
            if(strlen($odbiorca) > 36) 
            {
                imagettftext($jpg,28,0,100,280,$black,$font_path,substr($odbiorca,0,36));
                imagettftext($jpg,28,0,100,310,$black,$font_path,substr($odbiorca,36,78));
            }else{
                imagettftext($jpg,28,0,100,310,$black,$font_path,$odbiorca);
            }
            
            //------------------------------------------------------------------
            if(strlen($odbiorca_cd) > 40) 
            {
                imagettftext($jpg,28,0,100,360,$black,$font_path,substr($odbiorca_cd,0,39));
                imagettftext($jpg,28,0,100,390,$black,$font_path,substr($odbiorca_cd,39,78));
            }else{
                imagettftext($jpg,28,0,100,360,$black,$font_path,$odbiorca_cd);
            }
            
            //------------------------------------------------------------------
            imagettftext($jpg,28,0,100,90, $black,$font_path, \model\usemethod\GlobalMethod::format_numer_rachunku($numer_r) );
            imagettftext($jpg,28,0,100,480,$black,$font_path,$kw);
            
            if(strlen($nadawca) > 30) 
            {
                imagettftext($jpg,28,0,100,575,$black,$font_path,substr($nadawca,0,29));
                imagettftext($jpg,28,0,100,625,$black,$font_path,substr($nadawca,29,60));
            }else{
                imagettftext($jpg,28,0,100,625,$black,$font_path,$nadawca);
            }
            
            imagettftext($jpg,28,0,100,740,$black,$font_path,$nadawca_cd);
            
            imagettftext($jpg,28,0,100,690,$black,$font_path,$nadawca_cd2);

            
            
            //header("Content-type: image/jpeg");
            //imagejpeg($jpg);
          //  imagejpeg($jpg,$path,100);
            imagedestroy($jpg);
            //echo file_get_contents($jpg);
           // die;
            
            $this->responseHTML('default_panel', $path);    
        }catch(\app\library\_PajaxException $ex) 
        {
          throw $ex;         
        }catch(\Throwable $thr) { throw new \app\library\_PajaxException($thr, \app\library\_PajaxException::THROWABLE, $this->getEnv()); }  
   
   }
