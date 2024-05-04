

<div class="bg-dark" style="margin-top: 20px; margin-right:10px; margin-left:10px; min-height: 650px; border-radius: 10px;  ">
<h3 style="color: white; padding-left: 20px; padding-top: 10px; max-height: max-content;">Destaques&nbsp;Mensais:</h3>
    <?php
        /* antes de laravel
        include_once('includes\config.php');
        include_once('includes\crud.php');
        
        $min = rand(1,1000);
        $sql = "SELECT nome,capa FROM filmes WHERE id = $min";
        if($resultado = mysqli_query($conn,$sql)) {
            if(mysqli_num_rows($resultado) >= 1){
                while($row = mysqli_fetch_array($resultado)){
        ?>
        <p style="color: white; padding-left: 20px; padding-top: 10px; padding-bottom: 5px;"><?= $row['nome']?></p>
        <img style="border-radius: 5px;" src="<?= $row['capa']?>">
    <?php
                }
                mysqli_free_result($resultado);
            }else{
                
                
            }
            }else{
                echo "ERRO:$sql. " . mysqli_error($conn);
        }
        $max = rand(1,1000);
        $sql = "SELECT nome,capa FROM filmes WHERE id = $max";
        if($resultado = mysqli_query($conn,$sql)) {
            if(mysqli_num_rows($resultado) >= 1){
                while($row = mysqli_fetch_array($resultado)){
        ?>
        <p style="color: white; padding-left: 20px; padding-top: 10px; padding-bottom: 5px;"><?= $row['nome']?></p>
        <img style="border-radius: 5px;" src="<?= $row['capa']?>">
        <?php
                }
                mysqli_free_result($resultado);
            }else{
                ?>
                
                <h6 style="color: white; padding-left: 20px; padding-top: 10px;">Não&nbsp;foi&nbsp;possivel&nbsp;arranjar&nbsp;os&nbsp;destaques</h6>
                
                <?php
            }
            }else{
                echo "ERRO:$sql. " . mysqli_error($conn);
        }
        $conn->close();
        */
        ?>
</div>
