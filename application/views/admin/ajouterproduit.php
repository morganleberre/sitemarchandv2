
<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <script src="main.js"></script>
</head>
<body>
    
<h2><?php echo $TitreDeLaPage ?></h2>

<?php
echo form_open('Admin/ajouterunproduit');

 echo form_label('nom du produit :', 'lbllibelle');

 echo  form_input('txtlibelle','',array('pattern'=>'[a-zA-Z0-9]+','title'=>'le produit  doit commencer par une lettre', 'required'=>'required')).'<BR>';

 echo form_label('détail du produit :', 'lbldétail');

 echo  form_textarea('txtdetail', '',array('required'=>'required')).'<BR>';
  echo  form_label('prixht :','lblprixht');
  echo  form_input('txtprixht', '',array('pattern'=>".{0,}",'title'=>'le prix doit est uniquement composé de chiffres','required'=>'required')).'<BR>';

  echo  form_label('tauxtva :', 'lbltva');

  echo  form_input('txttva', '',array('pattern'=>".{0,10}" ,'title'=>'la tva doit est uniquement composé de chiffres','required'=>'required')).'<BR>';

   echo form_label('image :', 'lblimage');
 
   echo form_input(array('type'=>'file','name'=>'txtimage')).'<BR>';
   
   echo form_label('quantité dans le stock', 'lblquantitestock');

   echo form_input(array( 'name'=>'txtquantitestock','type'=>'number', 'min'=>'0','max'=>'1000','step'=>'1','required'=>'required')).'<BR>';

  echo form_label('dateajout', 'lbldateajout');
  
  echo form_input(array('type'=>'date','name'=>'txtdateajout','value'=>'','class'=>'clearBtn','required'=>'required')).'<BR>';
  
  echo form_label('disponibilité', 'lbldispo');
  $liste=array(
     '1'=> 'VRAI',
     '0'=> 'FAUX'
  );
  echo form_dropdown('txtdispo',$liste,'default',array('required'=>'required')).'<BR>';

 echo form_label('Numero de marque :','lblnomarque');
 echo "<select name='txtNoMarque' id='id' required>";
     foreach ($LesMarques as $uneMarque) {
         echo "<option value='". $uneMarque['NOMARQUE'] . "'>" . $uneMarque['NOM'] . "</option>";
     }
 echo "</select><br/>";
 echo form_label('Numero de Categorie :','lblnocategorie');
 echo "<select name='txtNoCategorie' id='id' required>";
    foreach ($LesCategorie as $uneCategorie) {
        echo "<option value='". $uneCategorie['NOCATEGORIE'] . "'>" . $uneCategorie['LIBELLE'] . "</option>";
    }
echo "</select><br/>";
echo form_submit('boutonAjouter', 'ajouter').'<BR>';
echo form_close();
?>
</body>
</html>