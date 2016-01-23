<table class="table table-striped"> 
    <thead> 
        <tr> 
            <th>Titre</th> 
            <th>Date Création</th> 
        </tr> 
    </thead> 
    <tbody> 
        <?php
        // boucle sur le tableau lesAnnonces
        foreach ($lesAnnonces as $annonce){
        ?>
        <tr> 
            <td>
                <?php echo $annonce["titre"]?>
            </td>
            <td>
               <?php echo $annonce["description"]?> 
            </td>
        <tr> 
        <?php
        }
        ?>            
    </tbody> 
</table>
