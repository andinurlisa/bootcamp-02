<?php
class soal4
{
   

    function hitungKembalian($total,$bayar)
    {
       $kembalian=$bayar-$total;
        $pecahan=$kembalian/50000;
        $sisa=$kembalian % 50000;
        $pecahan2=$sisa/20000;
        $sisa2=$sisa % 20000;
        $pecahan3=$sisa2/10000;
        $sisa3=$sisa2 % 10000;
        $pecahan4=$sisa3/5000;
        $sisa4=$sisa3 % 5000;
        $pecahan5=$sisa4/2000;
        $sisa5=$sisa4 % 2000;
        $pecahan6=$sisa5/1000;
        $sisa6=$sisa5 % 1000;
        $pecahan7=$sisa6/500;
        $sisa7=$sisa6 % 500;
        
        

        if((int)$pecahan !=0)
        {
            echo (int)$pecahan." * 50000";
            ?>
            <br>
            <?php  
        }
        if((int)$pecahan2 !=0)
        {
            echo (int)$pecahan2." * 20000";
            ?>
            <br>
            <?php
        }
        if((int)$pecahan3 !=0)
        {
            echo (int)$pecahan3." * 10000";
            ?>
            <br>
            <?php
        }
        
        if((int)$pecahan4 !=0)
        {
            echo (int)$pecaha4." * 5000"; 
            ?>
            <br>
            <?php 
        }
        if((int)$pecahan5 !=0)
        {
            echo (int)$pecahan5." * 2000";
            ?>
            <br>
            <?php 
        }
        if((int)$pecahan6 !=0)
        {
            echo (int)$pecahan6." * 1000";
            ?>
            <br>
            <?php 
        }
        if((int)$pecahan7 !=0)
        {
            echo (int)$pecahan7." * 500";
            ?>
            <br>
            <?php 
        }
        
        
        
    
      
     
       
    }
    
}
$soal4=new soal4();
echo $soal4->hitungKembalian(15500,50000);

?>