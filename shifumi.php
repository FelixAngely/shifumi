<!DOCTYPE html>
<html>
    <head>
        <metacharset="utf-8"/>
        <title>Shifumi</title>
    </head>
    <body>
        <h1>SHIFUMI A L'ANCIENNE</h1>
        <form id="input" action=shifumi.php method="GET">
            <p>Votre choix :</p>
            <select style="font-size:20px ;" name="choix">
                <option value=1>Pierre</option>
                <option value=2>Papier</option>
                <option value=3>Ciseaux</option>
            </select>
            <input style="font-size:20px ;" type=submit value=valider id=valide/>
        </form>    
        <?php
            $rep=rand(1,3);
            $resultat="";
            $votrechoix="";
            $sonchoix="";

            if(isset($_GET['choix']))
            {
                if($_GET['choix']==1)
                {
                    $votrechoix="Pierre";
                    if($rep==1)
                    {
                        $sonchoix="Pierre";
                        $resultat="Égalité";
                    }
                    elseif($rep==2)
                    {
                        $sonchoix="Papier";
                        $resultat="Défaite";
                    }
                    elseif($rep==3)
                    {
                        $sonchoix="Ciseaux";
                        $resultat="Victoire";
                    }
                }
                elseif($_GET['choix']==2)
                {
                    $votrechoix="Papier";
                    if($rep==1)
                    {
                        $sonchoix="Pierre";
                        $resultat="Victoire";
                    }
                    elseif($rep==2)
                    {
                        $sonchoix="Papier";
                        $resultat="Égalité";
                    }
                    elseif($rep==3)
                    {
                        $sonchoix="Ciseaux";
                        $resultat="Défaite";
                    }
                }
                elseif($_GET['choix']==3)
                {
                    $votrechoix="Ciseaux";
                    if($rep==1)
                    {
                        $sonchoix="Pierre";
                        $resultat="Défaite";
                    }
                    elseif($rep==2)
                    {
                        $sonchoix="Papier";
                        $resultat="Victoire";
                    }
                    elseif($rep==3)
                    {
                        $sonchoix="Ciseaux";
                        $resultat="Égalité";
                    }
                }
            }
        ?>
        <p><?php echo($votrechoix);?></p>
        <p><?php echo($sonchoix);?></p>
        <p><?php echo($resultat);?></p>
    </body>
</html>